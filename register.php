<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <style>
        .formm {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }

        h1, h3 {
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }

        body {
            background-image: url('uploaded_image/tsion.jpg');
            background-size: 30%; /* Adjust the width to the desired size in pixels */
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* Other background styles and properties */
        }
    </style>
    <title>Hakim | Registration</title>
</head>
<body>



<br>
<br>
<div class="container">
    <br>
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm formm">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off">
                <div class="mb-3">
                    <h1 class="text-center mt-3">Hakim Registration</h1>
                    <h3 class="text-center">Create an Account</h3>
                    <label for="first_name" class="form-label mt-4">First Name</label>
                    <input name="first_name" type="text" class="form-control" id="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input name="last_name" type="text" class="form-control" id="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" required>
                </div>
                <input name="role" type="hidden" value="1"> <!-- Default role is 1 for regular users -->
                <button name="submit" type="submit" class="btn btn-primary mb-5">Register</button>
                <p class="text-center">Already have an account? <a href="index.php">Login here</a></p>
                <?php
                    if(isset($_POST['submit'])){
                        include "configure.php";
                        $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
                        $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
                        $username = mysqli_real_escape_string($connection, $_POST['username']);
                        $password = md5($_POST['password']);
                        $role = mysqli_real_escape_string($connection, $_POST['role']);
                        
                        // Check if the username already exists
                        $check_query = "SELECT username FROM users WHERE username='{$username}'";
                        $check_result = mysqli_query($connection, $check_query) or die("Query Failed");
                        
                        if (mysqli_num_rows($check_result) > 0) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo "Username already exists. Please choose a different username.";
                            echo "</div>";
                        } else {
                            $query = "INSERT INTO users (first_name, last_name, username, password, role) VALUES ('$first_name', '$last_name', '$username', '$password', '$role')";
                            
                            if (mysqli_query($connection, $query)) {
                                echo '<div class="alert alert-success" role="alert">';
                                echo "Registration successful. You can now <a href='index.php'>login</a> with your credentials.";
                                echo "</div>";
                            } else {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo "Registration failed. Please try again later.";
                                echo "</div>";
                            }
                        }

                        mysqli_close($connection); // Close the database connection when done
                    }
                ?>
            </form>
        </div>
        <div class="col-sm"></div>
    </div>
</div>
</body>
</html>
