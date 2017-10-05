<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\User;

class UsersController
{
    //get all user and compact data to users.view.php
    public function index()
    {
        $users =  User::selectAll(); 

        return view('users', compact('users'));
    }

    //insert user
    public function store()
    {
        $name = $_POST['name'];
        User::insert($name);

        return redirect('users');
    }

    //delete user by ID
    public function delete()
    {
        $id = $_POST['id'];
        User::delete($id);

        return redirect('users');
    }

    //get user by ID
    public function getUserById(){       

        $id = $_GET['id'];
        $user = User::getUserById($id)[0];

        return view('updateUser',compact('user'));
    }

    //update user by ID
    public function update()
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
        User::update($name,$id);  

        return redirect('users');
    }
}