<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="50">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styling.css">
    </head>

    <body>
        <div class="container" style>

            <h1 class="text-center" style="color:rgb(35, 122, 243); font-family:Verdana;"> Register Here</h1>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                
                <div class="form-group">
                    <label class="form-label" for="name">First Name</label>
                    <input class="form-control" type="text" id="text" name="FirstName" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="name">Last Name</label>
                    <input class="form-control" type="text" id="text" name="LastName" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Create username</label>
                    <input class="form-control" type="text" id="text" name="UserName" required>
                    <div class="invalid-feedback">
                        Please enter a valid username.
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Phone number</label>
                    <input class="form-control" type="int" id="int" name="Phone_nr" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input class="form-control" type="email" id="email" name="Email" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="Password" required>
                    <div class="invalid-feedback">
                        Enter your password
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Confirm Password</label>
                    <input class="form-control" type="password" id="password" name="Password" required>
                    <div class="invalid-feedback">
                        Enter your password
                    </div>
                    <br>
                <div class="col-md-12 text-center">
                    <input class="btn btn-primary btn-lg" type="submit" value="Sign Up">
                </div>
                
            </form>
        </div>

    </body>
    <?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="ecri_care";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    //now check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the form data
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $username = $_POST['UserName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $phonenumber = $_POST['Phone_nr'];


    // Create the insert query
    $sql = "INSERT INTO users (FirstName, LastName, UserName, Email, Password, Phone_nr) 
    VALUES ('$firstname','$lastname','$username','$email', '$password', '$phonenumber')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
    ?>

</html>