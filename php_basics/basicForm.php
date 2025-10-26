<!Doctype html>
<html>

<head>
    <title>Basic HTML Form</title>

</head>

<body>

    <h2>HTML Forms</h2>

    <form method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST['name']) || empty($_POST['email'])){
            echo "Name and email are required.";
        } else {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            echo "Name: $name <br>";
            echo "Email: $email <br>";
        }
    }
    ?>

</body>

</html>