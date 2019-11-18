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

  

}
