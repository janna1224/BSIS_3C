<?php

class Home extends Controller
{
    public function index()
    {
        $model = new Model();
        $arr['lastname'] = 'Cabatingan';
        $data = $model->where($arr);
        show ($data);
       $this->view('home');
    }
}