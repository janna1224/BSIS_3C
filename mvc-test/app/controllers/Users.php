<?php

class Users extends Controller
{
    public function index()
    {
        $users = new User();

        if (isset($_POST['submit']))
        {
            $arr['firstname'] = $_POST['firstname'];
            $arr['lastname'] = $_POST['lastname'];
            $arr['email'] = $_POST['email'];
            $arr['password'] = $_POST['password'];

            $users->insert($arr);
        }
        $this->view ('users');
    }
}