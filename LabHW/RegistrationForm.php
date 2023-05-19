<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration Form</title>

    <style>
        form {
            font-family: Calibri;
            color: white;
            font-size: 11pt;
            font-style: normal;
            font-weight: bold;
            text-align: center;
            border-collapse: collapse;

        }

        #div1 {
            background: red;
            border: 2px outset black;
            margin-top: 250px;
            margin-bottom: 500px;
            margin-right: 500px;
            margin-left: 500px;
        }


    </style>

</head>

<body>


<div id="div1">
    <form action="DBconnection.php" method="post" target="_blank">
        <label>Full Name :</label>
        <input type="text" name="full_name" placeholder="FULL NAME" required><br><br>

        <label>Email :</label>
        <input type="text" name="email" placeholder="EMAIL" required><br><br>

        <label>Gender :</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female" required>Female <br><br>

        <input type="submit" value="SUBMIT">
    </form>
</div>
</body>
</html>