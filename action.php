<?php

require_once 'db.php';
$db = new Database();

if (isset($_POST['action']) && $_POST['action'] == "view") {
    $output = '';
    $data = $db->readAll();
    if ($db->totalRowCount() > 0) {
        $output .= '
        <table class="table table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Etat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($data as $row) {
            $output .= '
            <tr class="text-center text-secondary">
            <td>' . $row['id'] . '</td>
            <td>' . $row['name'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['state'] . '</td>
            <td>

            <a href="#" id="'.$row['id'].'" class="text-success infoBtn" title="View Details">
              <i class="fas fa-info-circle fa-lg mr-2" aria-hidden="true"></i>
            </a>

            <a href="#" id="'.$row['id'].'" class="text-primary editBtn" title="Edit"
               data-toggle="modal" data-target="#editModal">
              <i class="fas fa-edit fa-lg mr-2" aria-hidden="true"></i>
            </a>

            <a href="#" id="'.$row['id'].'" class="text-danger delBtn" title="Delete">
              <i class="fas fa-trash-alt fa-lg" aria-hidden="true"></i>
            </a>

          </td>
        </tr>
            ';
        }
        $output .= '
        </tbody>
        </table>
        ';
        echo $output;
    }
    else{
        echo '<h3 class="text-center text-secondary mt-5"> :( No any user present in the database </h3>';
    }
}

if (isset($_POST['action']) && $_POST['action'] == "insert") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $state    = $_POST['state'];

    $db->insert($name,$email, $password, $state);
}

if (isset($_POST['edit_id'])) {
  $id = $_POST['edit_id'];

  $row = $db->getUserById($id);
  echo json_encode($row);
}


if (isset($_POST['action']) && $_POST['action'] == "update"){
  $id= $_POST['id'];
  $name= $_POST['name'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $state= $_POST['state'];

  $db->update($id, $name, $email, $password, $state);
}

if (isset($_POST['del_id'])){
  $id= $_POST['del_id'];

  $db->delete($id);
}