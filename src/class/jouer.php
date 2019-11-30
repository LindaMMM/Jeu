<?php

/**
 * user
 *
 * @author lmartin
 */
 class Jouer implements JsonSerializable {

    private $mydb;
    protected $id = 0; 
    protected $idUser = 0;
    protected $idCadeau = 0;
    protected $libGain;
    protected $estGagne=false;
	protected $valid=false;
    protected $today,$day;
    // protected $datetoday = date("Y-m-d");
   //  protected $day=date("d");
    public function __construct($dbb){
        $this->setMydb($dbb);
        $this->today = date("Y-m-d");
        $this->day=date("d");
    }
  
  function __call($m,$p) {
          $v = strtolower(substr($m,3));
          if (!strncasecmp($m,'get',3) && !in_array($v,$this->private))
          {
              return $this->$v;
          }
          if (!strncasecmp($m,'set',3) && !in_array($v,$this->private)) 
          {
              $this->$v = $p[0];
          }
  }
  
  public function jsonSerialize()
  {
      $arrayVar = array(
        
         'estGagne' => $this->estGagne,
         'libGain' => $this->libGain    
      );
      return $arrayVar;
  }
 
	public function Lancer($userid)
    {
        try 
        {  
            $this->idUser = $userid;
            $this->libGain = "Vous n'avez pas gagné aujourd'hui";
            $this->estGagne = false;
            // check la date
            $this->checkDateJour();
            
            //
            // $this->day=2;
            // $this->today=date('2019-12-02');
           
            if($this->mydb->beginTransaction()){
                try 
                {
                
                $this->valid = true;
                // lecture du tirage
                
                if($this->readTirage($userid)){
                    // mise à jour du cadeau
                    $this->UpdateCadeau($userid);
                    $this->UpdatelibCadeau();
                }
                
                // mise à jour du jour du jeu
                $this->UpdateJeu($userid);
                if($this->valid)
                {
                    $this->mydb->commit();
                }
                else{
                    $this->mydb->rollBack();
                }
                }  
                catch(Exception $e)
                {
                    $this->mydb->rollBack();
                    // echo $e->getMessage();
                    throw new Exception("Error jouer.Lancer transaction"); 
                }
            }   
        }  
        catch(Exception $e)
        {
            // echo $e->getMessage();
            throw new Exception("Error jouer.Lancer"); 
        }
        
        return ;
    }

    private function checkDateJour()
    {
        $today=date("Ymd");
        if ($today < 20191201 || $today > 20191224) 
        {
            throw new Exception("Vous ne pouvez pas jouer");
        }
    }

    // lecture du tirage
    private function readTirage($userid){
        $query = "SELECT Cadeau_idCadeau as IDCADEAU FROM tirage where datetir = ? and user_app_iduser_app = ?";
        $result = $this->mydb->fetchAll($query, $this->today, $userid);
        if ($result && count($result)> 0 )
        {
            $this->idCadeau= $result[0]->IDCADEAU;
            $this->estGagne= true;
            return true ;
        }
        return false;
    }

    private function UpdateCadeau($userid)
    {
        $query = "UPDATE `cadeau` SET `dateGain` = ?, `user_app_iduser_app` = ? WHERE `idCadeau` = ?";
        $count = $this->mydb->execReturnBool($query, $this->today, $userid, $this->idCadeau);
        if ($count == 1)
        {
            return true ;
        }
        $this->valid =false;
        return false;
    }

    private function UpdatelibCadeau()
    {  
        $query = "select Description from `cadeau`  WHERE `idCadeau` = ?";
        $result = $this->mydb->fetchAll($query, $this->idCadeau);
        if ($result && count($result)> 0 )
        {
            
            $this->libGain= 'Vous avez gagné : '.$result[0]->Description;
            return true ;
        }
        $this->valid =false;
        return false;
    }
    private function UpdateJeu($userid)
    {
        $libday="`jour".$this->day."`";
        $valday='P';
        if($this->estGagne)
        {
            $valday='G';
        }
        $query = "UPDATE `jeunoel` SET $libday = ? WHERE `user_app_iduser_app` = ?";
       
        $count = $this->mydb->execReturnBool($query,$valday, $userid);
        
        if ($count == 1)
        {
            
            return true ;
        }
        $this->valid =false;
        return false;
    }
	
	
	public function isValid()
	{
		return  $this->getValid();
    }  

}
