<?php
class RichPeoples extends Controller {

  public function __construct() {
    $this->richpeopleModel = $this->model('RichPeople');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $people = $this->richpeopleModel->getPeople();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($people as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->name, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->Networth, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->Age, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . number_format($value->MyCompany, 0, ',', '.') . "</td>
                  <td><a href='" . URLROOT . "/richpeople/update/$value->id'>update</a></td>
                  <td><a href='" . URLROOT . "/richpeople/delete/$value->id'>delete</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Landenoverzicht</h1>',
      'richpeople' => $rows
    ];
    $this->view('RichPerichpeopleople/index', $data);
  }

  public function update($id = null){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $this->richpeopleModel->updatePeople($_POST);
  header("Location: " . URLROOT . "/richpeople/index");
} else {
  $row = $this->richpeopleModel->getSinglePerson($id);
  $data =[
    'title' => '<h1>Update PeopleView</h1>',
    'row' => $row
  ];
  $this->view("richpeople/update", $data);
}
}


}
?>
