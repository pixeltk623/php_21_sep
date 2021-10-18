<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>27sep2</title>
</head>

<body>
    <center>
        <h1>Job Details</h1>
    </center>
    <fieldset>
        <table border="1" width="100%">
            <form action="" method="post">
                <tr>
                    <td>Job Title:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="" id="" cols="30" rows="2" style="overflow: scroll;"></textarea> <br>
                        Brief Description should have atmost 500 characters</td>
                </tr>
                <tr>
                    <td>Company Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><input type="tel" name="tel"></td>
                </tr>
                <tr>
                    <td>Contact Person:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Work Status</td>
                    <td><input type="checkbox" name="work">Full time
                        <input type="checkbox" name="work">Part Time
                        <input type="checkbox" name="work">Per dim
                        <input type="checkbox" name="work">Others
                    </td>
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><input type="text">
                        <select name="" id="">
                            <option value="">US dollar</option>
                            <option value="">Indian currency</option>
                        </select>
                        <select name="" id="">
                            <option value="">Yearly</option>
                            <option value="">Monthly</option>
                        </select>
                </tr>
                <tr>
                    <td>Experience(Years)</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Locations</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Qualifications</td>
                    <td>
                        <select name="" id="" multiple>
                            <option value="">Any</option>
                            <option value="">High School</option>
                            <option value="">Associate</option>
                            <option value="">Pre Bachelors</option>
                        </select>
                        <button>ADD >></button>
                        <button>
                            << Remove</button>
                                <textarea cols="10" rows="4">Any</textarea>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                    <td><input type="reset" name="reset"></td>
                </tr>
            </form>
        </table>
    </fieldset>
</body>

</html>