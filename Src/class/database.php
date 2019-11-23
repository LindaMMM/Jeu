<?php
/* Extention pour prendre en compte les limites sur les requêtes*/
class MyPDOStatement extends PDOStatement {

  public function execute($input_parameters = null) {
    if (is_array($input_parameters)) {
      $i = 1;
      foreach ($input_parameters as $p) {
        // le paramètre type et la  chaine de caractère
        $parameterType = PDO::PARAM_STR;
       
	   if (is_bool($p)) {
          $parameterType = PDO::PARAM_BOOL;
        } 
        elseif (is_null($p)) {
          $parameterType = PDO::PARAM_NULL;
        }
        elseif (is_int($p)) {
          $parameterType = PDO::PARAM_INT;
        }
        
        $this->bindValue($i, $p, $parameterType);
        $i++;
      }
    }
    return parent::execute();
  }
}

/**
 * Description of database
 *
 * @author lmartin
 */
 class Database {

    private static $databases;
    private $connection;

    public function __construct($connDetails){
        if(!is_object(self::$databases[$connDetails])){
            list($host, $user, $pass, $dbname) = explode('|', $connDetails);
            $dsn = "mysql:host=$host;dbname=$dbname";
            try {
            self::$databases[$connDetails] = new PDO($dsn, $user, $pass);
            }
            catch (Exception $ex) {
            error_log($ex->getMessage());
            throw new Exception("Error SQL  ");
            }
        }
        $this->connection = self::$databases[$connDetails];
        $this->connection->setAttribute(PDO::ATTR_STATEMENT_CLASS, array('MyPDOStatement'));
        $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }
    
    public function fetchAll($sql){
        try {
            $args = func_get_args();
            array_shift($args);
            $statement = $this->connection->prepare($sql);     
            $statement->execute($args);
            return $statement->fetchAll(PDO::FETCH_OBJ);
         
        } catch (Exception $ex) {
            echo($ex->getMessage());
            error_log($ex->getMessage());
            throw new Exception("Error SQL :fetchAll ");
        }
    }

    public function execProc($sql){
        try {
            $args = func_get_args();
            array_shift($args);
            $statement = $this->connection->prepare($sql);     
            return $statement->execute($args);
            
         
        } catch (Exception $ex) {
            echo($ex->getMessage());
            error_log($ex->getMessage());
            throw new Exception("Error SQL :execProc ");
        }
    }
    
    /*
     * Return false if not execute
     * @param string sql query to execute
     * @param array params of query
     */
    public function execReturnBool($sql){
         try {
        $args = func_get_args();
        array_shift($args);
        $statement = $this->connection->prepare($sql);        
        return $statement->execute($args);
        } catch (Exception $ex) {
            error_log($ex->getMessage());
            throw new Exception("Error SQL :execReturnBool ");
        }
    }
    
    /*
     * Attention pas de prepare
     * @param string sql query to execute
     */
    public function execWithCount($sql){
        try {
            if ($this->connection->exec($sql)!=false)
        {
            return $this->connection->rowCount();
        }
        return 0;
        } catch (Exception $ex) {
            error_log($ex->getMessage());
            throw new Exception("Error SQL :execWithCount ");
        }
        
    }

   /**
    * 
    */
    public function exec($sql){
        try {
            return $this->connection->exec($sql);
        } catch (Exception $exc) {
            throw new Exception("Error SQL :execWithCount ");
        }

        
    }
     public function beginTransaction(){
         return $this->connection->beginTransaction();        
     }
     public function commit(){
         return $this->connection->commit();        
     }
     public function rollBack(){
         return $this->connection->rollBack();        
     }
     /*
      * Error PDO information
      * @return string Last error execute
      */
     public function getErreurInfo()
     {
         $arr =$this->connection->errorInfo();
         
         if (isset($arr) && is_array($arr))
         {
             return sprintf("[%s-%s] %s",$arr[0],$arr[1],$arr[2]);
         }
         
         return '';
     }
     
}
