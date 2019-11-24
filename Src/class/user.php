<?php

/**
 * user
 *
 * @author lmartin
 */
 class User implements JsonSerializable {

    private $mydb;
    protected $id = 0; 
    protected $login,$pwd,$firstmame, $lastName='';
	protected $valid=false;
 
    public function __construct($dbb){
        $this->setMydb($dbb);
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
         'login' => $this->login,
         'pwd' => $this->pwd
      );
      return $arrayVar;
  }
  
  
	
	public function getbyLogin($login)
    {
        try 
        {
        
        $query="SELECT iduser_app, sso_id, pwd_hash, email FROM user_app where del is null and sso_id=?";

        $result = $this->mydb->fetchAll($query,$login);
        if ($result && count($result)> 0 )
        {
            $this->setId($result[0]->iduser_app);
            $this->setLogin($result[0]->sso_id);
            $this->setPwd($result[0]->pwd_hash);
            $this->setEmail($result[0]->email);
            
        }
       
        }  
        catch(Exception $e)
        {
            echo $e->getMessage();
            
        }
        
        return ;
    }
	public function checkPwd ($pwd){
      
		if ($this->getId()==''){
            $this->setValid(false);
            
			return;
		}
		else if (strcmp($this->getPwd(), $pwd)==0){
            
            $this->setValid(true);
			return;
		}
		
	}
	
	public function isValid()
	{
		return  $this->getValid();
    }
    
    public function getRoles()
	{
        echo 'rools';
        $query = "CALL pr_roles(?)";
        echo 'call'.$this->id;

        $result = $this->mydb->execProc($query, int($this->getId()));
        echo 'test';
        return $result; 
	}
   

}
