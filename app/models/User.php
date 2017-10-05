<?php 

namespace App\Models;

use App\Core\App;

// User model
class User 
{
  static $table = "users";
  public $name;

  //get all users
  public static function selectAll()
  {
    return App::get('database')->selectAll(User::$table);
  }

  //insert user 
  public static function insert($name) {
    App::get('database')->insert(User::$table, 
    ['name'=> $name]);
  }

  //get user by ID
  public static function getUserById($id) 
  {
    return App::get('database')->getUserById(User::$table, $id);
  }

  //update user by ID
  public static function update($name, $id) 
  {
    App::get('database')->update(User::$table,
    $name, $id);
  }

  //delete user by ID
  public static function delete($id)
  {
    App::get('database')->delete(User::$table, $id);
  }

}