<?php

namespace Test\Models;

require_once 'models/Vote.php';

class Color {

  public $id;
  public $color;

  public function __construct($id, $color) {
    $this->id      = $id;
    $this->color  = $color;
  }

  public static function all() {
    $list = [];
    $db = \Db::getInstance();
    $req = $db->query('SELECT * FROM colors');

    // Create a list of Color objects from the database results
    foreach($req->fetchAll() as $color) {
      $list[] = new Color($color['id'], $color['color']);
    }

    return $list;
  }

  public static function find($id) {
    $db = \Db::getInstance();
    // Make sure $id is an integer
    $id = intval($id);
    $req = $db->prepare("SELECT * FROM colors WHERE id = :id");
    // the query was prepared, now we replace :id with our actual $id value
    $req->execute(array('id' => $id));
    $color = $req->fetch();

    return new Color($color['id'], $color['color']);
  }

  public function get_votes() {
    $votes = 0;
    //Sum up the number of votes
    foreach(Vote::all_by_color($this->color) as $vote) {
      $votes += $vote->votes;
    }
    return $votes;

  }

}
?>