<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="image/registration.png">
    <style>
        *{
    box-sizing: border-box;
}
form {
    width: auto;
    height: auto;
    text-align: center;
    margin: auto;
    background: grey;
}
body{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 15px 30px;
    font-size: 17px;
    padding: 8px;
}

.container{
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid rgb(166, 31, 31);
    border-radius: 5px;
}
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST['Name'];
        $Phone = $_POST['Mobile'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];


        $con = mysqli_connect("localhost", "root", "", "petcare");


        $qu = "INSERT INTO `signup` (Name, Mobile, Email, Password) VALUES ('$Name', '$Phone', '$Email', '$Password')";
        $result = mysqli_query($con, $qu);
        if ($result) {
            echo ("Registration Succesful");
            header("Location: index.php");
        } else {
            echo ("Fail");
        }
    }
    ?>
    <form action="" method="POST">
        <h1>Customer Registration</h1>
        <div class="Customer Details">
            <label type="text">Name</label>
            <input type="text" name="Name" id="Name" required>
            <br>
            <br>
            <label type="integer">Mobile</label>
            <input type="integer" name="Mobile" id="Mobile" required>
            <br>
            <br>
            <label type="email">Email</label>
            <input type="email" name="Email" id="Email" required>
            <br>
            <br>
            <label type="password">Password</label>
            <input type="password" name="Password" id="Password" required>
            <br>
            <br>
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
</body>

</html>