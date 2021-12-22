<?php 
    
    include_once 'config.php';
    
    if (isset($_POST['submit'])) {
       
       $name = $_POST['name'];
       $email = $_POST['email'];
       $city = $_POST['city'];

       if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
       } else {
            $gender = '';
       }
       if ($name=='') {
           $e1 = '<small class="text-danger">Name Can Not be blank</small>';
       }

       if ($email=='') {
           $e2 = '<small class="text-danger">Email Can Not be blank</small>';
       }

       if ($city=='') {
           $e3 = '<small class="text-danger">City is not selected</small>';
       }

       if ($gender=='') {
           $e4 = '<small class="text-danger">Gender is not selected</small>';
       }

       if (($name && $email && $city && $gender)!='') {
          
            $query = "INSERT INTO `employees`(`name`, `email`, `gender`, `city`) VALUES ('$name','$email', '$gender', '$city')";

            $result = mysqli_query($conn, $query);

            if ($result) {
                
                $message = '<div class="alert alert-success">New Employee Created</div>';

            } else {
                $message = '<div class="alert alert-danger">Something Error</div>';
            }
       } 
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
        <a href="index.php" class="btn btn-info mb-3">Home</a>
        <?php echo (isset($message)) ? $message : ''; ?>
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
                <?php


                    // echo $e1 = null ?? 'This is Test';

                    echo (isset($e1)) ? $e1 : '';

                ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
                <?php 
                   echo (isset($e2)) ? $e2 : '';
                ?>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" value="Male" class='form-check-input'> Male
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="Female" class='form-check-input'> Female
                </div>
                <?php 
                   echo (isset($e4)) ? $e4 : '';
                ?>
            </div>

            <div class="form-group">
                <label>City</label>
                <select name="city" class="form-control">
                    <option value="">Select</option>
                    <option value="Vadodara">Vadodara</option>
                    <option value="Surat">Surat</option>
                    <option value="Anand">Anand</option>  
                    <option value="Bharuch">Bharuch</option>
                </select>
                 <?php 
                   echo (isset($e3)) ? $e3 : '';
                ?>
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
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