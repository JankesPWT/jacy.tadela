<?php

class Model {
  public function getData() {
    // Code to fetch data from database
    $data = '';
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
  public Model $model;
  public View $view;
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
