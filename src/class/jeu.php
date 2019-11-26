<?php

/**
 * user
 *
 * @author lmartin
 */
class Jeu implements JsonSerializable {

    private $mydb;
    protected $id = 0;
    protected $idUser;
    protected $jour1, $jour2, $jour3, $jour4, $jour5, $jour6, $jour7, $jour8, $jour9, $jour10;
    protected $jour11, $jour12, $jour13, $jour14, $jour15, $jour16, $jour17, $jour18, $jour19, $jour20;
    protected $jour21, $jour22, $jour23, $jour24;
    protected $valid = false;

    public function __construct($dbb) {
        $this->setMydb($dbb);
    }

    function __call($m, $p) {
        $v = strtolower(substr($m, 3));
        if (!strncasecmp($m, 'get', 3) && !in_array($v, $this->private)) {
            return $this->$v;
        }
        if (!strncasecmp($m, 'set', 3) && !in_array($v, $this->private)) {
            $this->$v = $p[0];
        }
    }

    public function jsonSerialize() {
        $arrayVar = array(
            '1' => $this->jour1,
            '2' => $this->jour2,
            '3' => $this->jour3,
            '4' => $this->jour4,
            '5' => $this->jour5,
            '6' => $this->jour6,
            '7' => $this->jour7,
            '8' => $this->jour8,
            '9' => $this->jour9,
            '10' => $this->jour10,
            '11' => $this->jour11,
            '12' => $this->jour12,
            '13' => $this->jour13,
            '14' => $this->jour14,
            '15' => $this->jour15,
            '16' => $this->jour16,
            '17' => $this->jour17,
            '18' => $this->jour18,
            '19' => $this->jour19,
            '20' => $this->jour20,
            '21' => $this->jour21,
            '22' => $this->jour22,
            '23' => $this->jour23,
            '24' => $this->jour24
        );
        return $arrayVar;
    }

    public function getbyUserid($userid) {
        try {
            // test s'il existe
            if (!$this->isExistLogin($userid)) {
                $this->createJeu($userid);
            }
//            $queryDay = $this->buildQueryDay();
            $query = "SELECT idjeuNoel, $queryDay `user_app_iduser_app`   FROM `jeunoel` where user_app_iduser_app=?";

            $result = $this->mydb->fetchAll($query, $userid);
            if ($result && count($result) > 0) {
                $this->setValid(true);
                $this->setId($result[0]->idjeuNoel);
                $this->setJour1($result[0]->jour1);
                $this->setJour2($result[0]->jour2);
                $this->setJour3($result[0]->jour3);
                $this->setJour4($result[0]->jour4);
                $this->setJour5($result[0]->jour5);
                $this->setJour6($result[0]->jour6);
                $this->setJour7($result[0]->jour7);
                $this->setJour8($result[0]->jour8);
                $this->setJour9($result[0]->jour9);
                $this->setJour10($result[0]->jour10);
                $this->setJour11($result[0]->jour11);
                $this->setJour12($result[0]->jour12);
                $this->setJour13($result[0]->jour13);
                $this->setJour14($result[0]->jour14);
                $this->setJour15($result[0]->jour15);
                $this->setJour16($result[0]->jour16);
                $this->setJour17($result[0]->jour17);
                $this->setJour18($result[0]->jour18);
                $this->setJour19($result[0]->jour19);
                $this->setJour20($result[0]->jour20);
                $this->setJour21($result[0]->jour21);
                $this->setJour22($result[0]->jour22);
                $this->setJour23($result[0]->jour23);
                $this->setJour24($result[0]->jour24);
            }
        } catch (Exception $e) {
            // echo $e->getMessage();   
        }

        return;
    }

    private function buildQueryDay() {
        $queryday = "";
        $day = intval(date("d"));

        if ($day > 24) {
            $day = 24;
        }

        // Echu
        for ($i = 1; $i <= ($day - 1); $i++) {
            $queryday .= "'E' as `jour" . $i . "`, ";
        }

        if ($day <= 24) {
            for ($j = $day; $j == 24; $j++) {
                $queryday .= "`jour" . $j . "`, ";
            }
        }
        return $queryday;
    }

    private function isExistLogin($login) {
        $query = "SELECT count(*) as count FROM jeunoel where user_app_iduser_app = ?";
        $result = $this->mydb->fetchAll($query, $login);
        if ($result && count($result) > 0) {
            return $result[0]->count > 0;
        }
        return false;
    }

    public function isValid() {
        return $this->getValid();
    }

    public function createJeu($userid) {
        $query = "insert into jeunoel (user_app_iduser_app) values (?)";
        $count = $this->mydb->execReturnBool($query, $userid);
        if ($count === true) {
            return true;
        }
        return false;
    }

}
