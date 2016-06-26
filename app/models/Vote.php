<?php

namespace Test\Models;

class Vote {

  public $id;
  public $city;
  public $color;
  public $votes;

  public function __construct($id, $city, $color, $votes) {
    $this->id      = $id;
    $this->city  = $city;
    $this->color  = $color;
    $this->votes  = $votes;
  }

  public static function all() {
    $list = [];
    $db = \Db::getInstance();
    $req = $db->query('SELECT * FROM votes');

    // Create a list of Votes objects from the database results
    foreach($req->fetchAll() as $vote) {
      $list[] = new Vote($vote['id'], $vote['city'], $vote['color'], $vote['votes']);
    }

    return $list;
  }

  public static function all_by_color($color) {
    $list = [];
    $db = \Db::getInstance();
    // Make sure $id is an integer
    $req = $db->query("SELECT * FROM votes WHERE color LIKE '$color'");
    // List all votes from database
    foreach($req->fetchAll() as $vote) {
      $list[] = new Vote($vote['id'], $vote['city'], $vote['color'], $vote['votes']);
    }

    return $list;
  }

}
?>