<!DOCTYPE html>

<html>
    <head>
        <title>Pavlo's Gym</title>
    </head>

    <body>
        <div>
            Hi <?php echo htmlspecialchars($_POST['first']); ?> <?php echo htmlspecialchars($_POST['last']); ?>. </br>
            We will contact you soon at <?php echo htmlspecialchars($_POST['email']); ?>. </br>
            Thank you for submitting your application.
        </div>
    </body>
</html>