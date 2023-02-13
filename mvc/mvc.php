<?php

class Model {
  public function getData() {
    // Code to fetch data from database
    return $data;
  }
}

class View {
  public function render($data) {
    // Code to display the data
    echo $data;
  }
}

class Controller {
  public function __construct() {
    $this->model = new Model();
    $this->view = new View();
  }

  public function index() {
    $data = $this->model->getData();
    $this->view->render($data);
  }
}

$controller = new Controller();
$controller->index();
