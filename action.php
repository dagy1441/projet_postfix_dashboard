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
            <td>' . $row['email'] . '</td>
            <td>' . $row['state'] . '</td>
            <td>
            <a href="#" class="text-success" title="View Details">
              <i class="fas fa-info-circle fa-lg mr-2" aria-hidden="true"></i>
            </a>
            <a href="#" class="text-primary" title="Edit">
              <i class="fas fa-edit fa-lg mr-2" aria-hidden="true"></i>
            </a>
            <a href="#" class="text-danger" title="Delete">
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
    $email = $_POST['email'];
    $password = $_POST['password'];
    $state = $_POST['state'];

    $db->insert($email, $password, $state);
}
