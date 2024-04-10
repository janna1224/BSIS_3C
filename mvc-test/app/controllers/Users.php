<?php

class Users extends Controller
{
    public function index()
    {
        $x = new User();
            $row = $x->findAll();
        
        $this->view('users/index', [
            'users' => $row
        ]);
    }

    public function edit($id)
    {
        $x = new User();
        $arr['id'] = $id;
        $row = $x->first($arr);
        $this->view('users/edit',[
            'user'=>$row
        ]);
    }

    public function create()
    {
        $x = new User();
        if (isset($_POST['create'])) {
            $arr['firstname'] = $_POST['firstname'];
            $arr['lastname'] = $_POST['lastname'];
            $arr['email'] = $_POST['email'];
            $arr['password'] = $_POST['password'];
            $x->insert($arr);
            header("Location: " . ROOT . "/users");
        }
        $this->view('users/create');
    }
    public function delete($id)
{
    $x = new User();
    $arr['id'] = $id;
    $x->delete($arr); 
    header("Location: " . ROOT . "/users"); 
}
}
