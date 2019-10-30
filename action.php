<!DOCTYPE html>

<html>
    <head>
        <title>Pavlo's Gym</title>
    </head>

    <body>
        <div>
            Hi <?php echo htmlspecialchars($_POST['name']); ?> <?php echo htmlspecialchars($_POST['last']); ?>.
            We will contact you soon at <?php echo htmlspecialchars($_POST['email']); ?>.
            Thank you for submitting your application.
        </div>
    </body>
</html>