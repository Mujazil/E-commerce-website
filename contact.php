<?php
        if (isset($_POST["submit1"])) {
           $first_name = $_POST["first_name"];
           $last_name = $_POST["last_name"];
           $message = $_POST["message"];
           
           

           $errors = array();
           
           if (empty($first_name) OR empty($last_name) OR empty($message)) {
            array_push($errors,"All fields are required");
           }
           require_once "database.php";
           
            
            $sql = "INSERT INTO contact (first_name,last_name, message) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$first_name, $last_name, $message);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>message sent succesfully</div>";
                
            }else{
                die("Something went wrong");
            }
           }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script>
                  setTimeout(function() {
                    window.location.href = "http://localhost/DRY%20NUTS/index.php?";
                }, 3000); </script>
        </head>
        <body>
            
        </body>
        </html>

          

        