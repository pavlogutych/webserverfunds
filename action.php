<!DOCTYPE html>

<html>
    <head>
        <title>Pavlo's Gym Confirmation</title>
        <link rel="stylesheet" type="text/css" href="style/mainStyle.css"> <!--external css-->
    </head>

    <body>
        <div class="center">
            <h1>Pavlo's Gym</h1>
            <h2>A new way of working out!</h2>

            <?php 
                //login credentials to db
                $servername = "localhost";
                $username = "php";
                $password = "vm";
                $dbname = "clients";

                //store form inputs to variables
                $first = htmlspecialchars($_POST['first']);
                $last = htmlspecialchars($_POST['last']);
                $email = htmlspecialchars($_POST['email']);
                $service = htmlspecialchars($_POST['service']);
                $days = htmlspecialchars($_POST['days']);
                $time = htmlspecialchars($_POST['time']);
            ?>

            <!--user confirmation message-->
            <h3>Hi <?php echo $first ?> <?php echo $last ?>. </h3> </br>
            We will contact you soon at <?php echo $email ?>. </br> </br>

            <?php
                //connection to db
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                //insert data to db
                $sql = "INSERT INTO clients (first, last, email, service, days, time)
                    VALUES ('{$first}', '{$last}', '{$email}', '{$service}', '{$days}', '{$time}')";

                //confirmation
                if (mysqli_query($conn, $sql)) {
                    echo "Thank you for submitting your application.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                //close connection 
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>