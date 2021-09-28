<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27sep3</title>
</head>

<body>
    <h4>Registration form</h4>
    <table border="1" width="100%" style="background-color: #e8e8e8;">
        <form action="" method="POST">

            <tr>
                <td>Enter your first name</td>
                <td><input type="text" placeholder="enter your first name"></td>
            </tr>

            <tr>
                <td>Enter your last name</td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Enter your password</td>
                <td><input type="password"></td>
            </tr>

            <tr>
                <td>ReEnter your password</td>
                <td><input type="password"></td>
            </tr>

            <tr>
                <td>Enter your email</td>
                <td><input type="email" name="email"></td>
            </tr>

            <tr>
                <td>Enter your mobile</td>
                <td><input type="tel" name="tel"></td>
            </tr>

            <tr>
                <td>Enter your address</td>
                <td><textarea name="" id="" cols="16" rows="7"></textarea></td>
            </tr>

            <tr>
                <td>Select your gender</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>

            <tr>
                <td>Select your hobbies</td>
                <td>
                    <input type="checkbox" name="hobby" value="hobby1">hobby1
                    <input type="checkbox" name="hobby" value="hobby2">hobby2
                    <input type="checkbox" name="hobby" value="hobby3">hobby3
                </td>
            </tr>
            <tr>
                <td>Select your DOB</td>
                <td>
                    <input type="date" name="" value="dd-mm-yyyy">
                </td>
            </tr>

            <tr>
                <td>Select your Country</td>
                <td>
                    <select name="" id="">
                        <option value="">India</option>
                        <option value="">USA</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>upload your pic</td>
                <td> <input type="file" name="Profile">
                </td>
            </tr>

            <tr>
                <td colspan="2"> 
                    <input type="submit" name="save my data">
                    <input type="reset" name="reset">
                </td>
            </tr>
        </form>
    </table>
</body>

</html>