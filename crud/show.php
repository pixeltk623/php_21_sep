<?php 
    include_once 'config.php';

    if (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) { 

        $query = "SELECT * FROM employees WHERE id = ".$_GET['id']; 

        $result = mysqli_query($conn, $query);
        
        $dataEmployee = mysqli_fetch_object($result);

    }
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
        <a href="index.php" class="btn btn-warning mb-3">Back To Home</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><?php echo $dataEmployee->name; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $dataEmployee->email; ?></td>
            </tr>
             <tr>
                <th>City</th>
                <td><?php echo $dataEmployee->city; ?></td>
            </tr>
            <tr>
                <th>Created At</th>
                <td><?php echo $dataEmployee->created_at; ?></td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td><?php echo $dataEmployee->updated_at; ?></td>
            </tr>
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