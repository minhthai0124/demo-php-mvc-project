<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\User;

class UsersController
{
    public function index()
    {
        $users =  User::selectAll(); 

        return view('users', compact('users'));
    }

    public function store()
    {
        $name = $_POST['name'];
        User::insert($name);

        return redirect('users');
    }

    public function delete()
    {
        $id = $_POST['id'];
        // App::get('database')->delete('users',$_POST['id'] );  

        User::delete($id);

        return redirect('users');
    }

    public function getUserById(){       

        $id = $_GET['id'];
        $user = User::getUserById($id)[0];

        return view('updateUser',compact('user'));

    }

    public function update()
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
        User::update($name,$id);  

        // die(var_dump($_POST['id']));

        return redirect('users');
    }
}