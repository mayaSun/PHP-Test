<?php

namespace Test\Controllers;

require_once 'models/Color.php';

use Http\Request;
use Http\Response;

class ColorsController {


  private $request;
  private $response;

  public function __construct(Request $request, Response $response)
  {
    $this->request = $request;
    $this->response = $response;
  }

  public function get_votes() {
    // Get id from params
    $id = $this->request->getParameter('id');
    $votes = \Test\models\Color::find($id)->get_votes();
    echo $votes;
  }

  public function index() {
    $colors = \Test\models\Color::all();
    // Get the content to be pladed in layout
    require_once('views/colors/index.php');
  }
}
?>