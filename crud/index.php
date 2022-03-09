<?php
include_once 'config.php';

$query = "SELECT * FROM employees";

$result = mysqli_query($conn, $query);/* (mysqli_query is for passing $query request into $conn) and $result returns object if echo is done on $result, update delete and insert return true or false when echo is done*/

//formatArray($result);

//echo $result->num_rows;

// while ($response = mysqli_fetch_object($result)) {

//     echo "<pre>";

//     print_r($response[1]);

// }

// die;

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container mt-3">
    <h1 class="text-center text-primary">Crud In CORE PHP</h1>
    <a href="create.php" class="btn btn-primary mb-3">Add New Employee</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

        if ($result->num_rows > 0) {

          $sl = 1;
          while ($response = mysqli_fetch_object($result)) {
        ?>
            <tr>
              <td><?php echo $sl++; ?></td>
              <td><?php echo $response->name; ?></td>
              <td><?php echo $response->email; ?></td>
              <td><?php echo $response->created_at; ?></td>
              <td><?php echo $response->updated_at; ?></td>
              <td>
                <a href="show.php?id=<?php echo $response->id; ?>" class="btn btn-info">Show</a>
                <a href="edit.php?id=<?php echo $response->id; ?>" class="btn btn-warning">Edit</a>
                <a href="delete.php?id=<?php echo $response->id; ?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php
          }
        } else {
          ?>
          <tr>
            <td colspan="5" class="text-center text-danger">No Record Found</td>
          </tr>
        <?php
        }

        ?>
      </tbody>
    </table>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>