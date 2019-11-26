<?php

/**
 * user
 *
 * @author lmartin
 */
 class Cadeau implements JsonSerializable {

    private $mydb;
    protected $id = 0; 
    protected $libelle,$gagant;
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
         'libelle' => $this->libelle,
         'gagant' => $this->gagant
      );
      return $arrayVar;
  }
  
	public function getAll()
    {
        try 
        {
        $query="select c.Description as cadeau, case when c.dateGain  is NULL then '2019-12-24' else c.dateGain end as dateGain, case when u.sso_id is null then 'A gagner' else  u.sso_id end as gagant from cadeau c left join user_app u on u.iduser_app =c.user_app_iduser_app";
       
        $result = $this->mydb->fetchAll($query);
        if ($result && count($result)> 0 )
            {
                
                return $result;
            }
       
        }  
        catch(Exception $e)
        {
            // echo $e->getMessage();
            throw new Exception("Error Cadeau.GetAll");
        }
        
        return null;
    }
   
    public function getAllGagner()
    {
        try 
        {
        $query="select c.Description as cadeau, case when c.dateGain  is NULL then '2019-12-24' else c.dateGain end as dateGain, case when u.sso_id is null then 'A gagner' else  u.sso_id end as gagant from cadeau c inner join user_app u on u.iduser_app =c.user_app_iduser_app";
       
        $result = $this->mydb->fetchAll($query);
        if ($result && count($result)> 0 )
            {
                
                return $result;
            }
       
        }  
        catch(Exception $e)
        {
            throw new Exception("Error Cadeau.getAllGagner"); 
        }
        
        return null;
    }

    ///------------------------------
    /// GetCount
    ///-----------------------------
    public function getCount()
    {
        try 
        {
            $query="SELECT count(idCadeau) as nbCadeau, count(distinct user_app_iduser_app, dateGain) as nbCadeauGagner  FROM cadeau";
            $result = $this->mydb->fetchAll($query);
            if ($result && count($result)> 0 )
            {
                return $result;
            }
        }  
        catch(Exception $e)
        {
           throw new Exception("Error Cadeau.getCount"); 
        }  
        return null;
    }
}
