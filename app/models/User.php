<?php 
namespace App\Models;

use App\Core\App;

class User 
{
  static $table = "users";
  public $name;

  public static function selectAll()
  {
    return App::get('database')->selectAll(User::$table);
  }

  public static function insert($name) {
    App::get('database')->insert(User::$table, 
    ['name'=> $name]);
  }

  public static function getUserById($id) 
  {
    return App::get('database')->getUserById(User::$table, $id);
  }

  public static function update($name, $id) {

    App::get('database')->update(User::$table,
    $name, $id);
  }

  public static function delete($id) {
    App::get('database')->delete(User::$table, $id);
  }

}