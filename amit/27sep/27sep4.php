<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27sep4</title>
</head>

<body>
    <div style="background-color: #e8e8e8;">
        <table width="100%">
            <u>
                <center>
                    <h4>Registration form</h4>
                </center>
            </u>
            <form action="" method="POST">
                <tr>
                    <td>First name</td>
                    <td><input type="text" placeholder="enter your first name"></td>
                </tr>

                <tr>
                    <td>Last name</td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>Nick Name</td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>email</td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password"></td>
                </tr>

                <tr>
                    <td>Date of birth</td>
                    <td>
                        <input type="date" name="" value="dd-mm-yyyy">
                    </td>
                </tr>

                <tr>
                    <td>Select your gender</td>
                    <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                    </td>
                </tr>

                <tr>
                    <td>Mobile</td>
                    <td>
                        <input type="tel" name="tel">
                    </td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><textarea name="" id="" cols="16" rows="7"></textarea></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="save my data">
                            <input type="reset" name="reset">
                        </center>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>