<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <title>login form</title>
</head>
<body>
    <h1>login form</h1>

    <center>
        <div class="formDesign">

            <center class="formHeader">login form

                <h4>
                <?php
                    error_reporting(0);

                    session_start();

                    echo$_SESSION['loginMessagee'];

                ?>

                </h4>
            </center>

            <form action="loginValidation.php" method="POST">

                <div>
                    <label class="pass">Username</label>
                    <input type="text" placeholder="Username" name="username" required>

                </div>
                <div>
                    <label class="pass">Password</label>
                    <input type="Password" placeholder="tell me your password" name="password" required>

                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Login"name="submit"  required>

                </div>

            </form>

        </div>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
-->