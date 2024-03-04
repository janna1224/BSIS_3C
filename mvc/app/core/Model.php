<?php

class Model extends Database
{
    public function findAll()
    {
        $query = "select * from users";
        $result = $this->query($query);

        if ($result){
            return $result;
        }
        return false;
    }
    public function where($data, $data_not = []){
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);

        $query = "select * from users where ";

        foreach ($keys as $key){
            $query .= $key . " = :" . $key . " && ";
        }
        foreach ($keys_not as $key){
            $query .= $key . " = :" . $key . " && ";
        }
        $query = trim($query, ' && ' );
        show($query);

        $data = array_merge($data, $data_not);
        $result = $this->query($query, $data);

        if ($result){
            return $result;
        }
        return false;
    }
}