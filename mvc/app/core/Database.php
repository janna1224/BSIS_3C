<?php

class Database
{
    public function connect()
    {
        $string = "mysql:host=localhost;dbname=mvc_bsis3c";
        $con = new PDO($string,'root','');
        return $con;
    }
    public function query($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);

        if ($check){
            $result = $stm->fetchALL(PDO::FETCH_OBJ);

            if (is_array($result)  && count($result) > 0){
                return $result;
            }
        }
        return false;
    }
}
