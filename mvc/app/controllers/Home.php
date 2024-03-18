<?php

class Home extends Controller
{
    public function index()
    {
        $user = new User();
        $arr['firstname'] = 'Clyde';
        $data = $user->where($arr);
        show ($data);
       $this->view('home');
    }
}