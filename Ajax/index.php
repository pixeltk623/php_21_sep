<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-0">
        <h1 class="text-center text-primary" style="font-size: 40px;">Crud In CORE PHP</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           Add New Employee
        </button>
        <div id="status" class="mt-3"></div>

        <div id="result">
            
        </div>
        
        <?php
            include 'modal.php';
        ?>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            getAllData();
            $("#uploadForm").on('submit', function(e){


                event.preventDefault();

                // let NewDatat = new FormData(this)
                // console.log(NewDatat)

                let username = $("#name").val();
                let email = $("#email").val();
                let gender = $("[name=gender]");
                let genderValue = "";
                let hobbyValue = [];
                let city = $("#city").val();
                let hobby = $("[name=hobby]");

                let profile_pic = $("#profile_pic");
                //console.log(profile_pic.prop('files').length)

                if(profile_pic.prop('files').length>0) {
                    //
                } else {
                    console.log('File is Not selected')
                }
                // var form_data = []; 
                // var file_data = $('#profile_pic').prop('files')[0];   
                                 
                for(let i=0;i<gender.length; i++) {
                    if(gender[i].checked) {
                        genderValue = gender[i].value;
                    }
                }

                for (let i = 0; i < hobby.length; i++) {
                    if (hobby[i].checked) {
                        hobbyValue.push(hobby[i].value);
                    }
                }

                // let formAllData = {name: username, email : email, gender : genderValue,hobby : hobbyValue, city: city};
                // console.log(formAllData);
                // formAllData.push({file : file_data});
                // console.log(formAllData);
                

                    $.ajax({
                       type: 'POST',
                        url: 'http://localhost/php_21_sep/ajax/api/insert.php',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(resp){ 

                            let status = JSON.parse(resp);

                            console.log(status)

                            if (status.status==true) {
                                $("#status").html("<div class='alert alert-success'>"+status.message+"</div>");
                            }

                            $('#uploadForm').trigger("reset");
                            $('#exampleModal').modal('hide');

                        },

                        error:function(e) {
                            console.log(e)
                        }
                    });

            });

            function getAllData() {
                $.ajax({
                    type: 'GET',
                    url: "http://localhost/php_21_sep/ajax/api/fetch.php",
                    success:function(data){
                    let finalData = JSON.parse(data);

                    console.log(finalData);
                    let table = '';
                    table += '<table class="table">';
                    table += '  <thead>';
                    table += '    <tr>';
                    table += '      <th scope="col">#</th>';
                    table += '      <th scope="col">Name</th>';
                    table += '      <th scope="col">Email</th>';
                    table += '      <th scope="col">Gender</th>';
                    table += '      <th>Action</th>';
                    table += '    </tr>';
                    table += '  </thead>';
                    table += '  <tbody>';
                    finalData.data.forEach(function(value, index){
                        table += '    <tr>';
                        table += '      <th scope="row">1</th>';
                        table += '      <td>'+value.name+'</td>';
                        table += '      <td>'+value.email+'</td>';
                        table += '      <td>'+value.gender+'</td>';
                        table += '      <td></td>';
                        table += '    </tr>';           
                    }); 
                    table +=   '</tbody>';
                    table += '</table>';
                    console.log(table);
                    $("#result").html(table);

                    }
                });
            }

        });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!--   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>