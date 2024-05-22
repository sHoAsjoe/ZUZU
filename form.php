<?php

include('database.php');
global $db;
session_start();
$message = '';
// Hier controleer je of de sumbit knop is gedrukt
if (isset($_POST['submit'])) {
    // Hier controleer je de of de labels zijn ingevuld
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['postalCode']) && !empty($_POST['city'])) {
       // Hier declareer je de waarden van het fomrluier aan een variabele
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $address = $_POST['address'];
        $pCode = $_POST['postalCode'];
        $city = $_POST['city'];

        // If statement om speciefik te controleren of de email is invoerd volgens de validate function (regel 14)
        if ($email == false) {
            $message = 'Email is niet geldig';
        }
        // Als alles goed is ingevuld word de data toegevoegd aan het DB.
        else {
            $query = $db->prepare("INSERT INTO customers(first_name, last_name, email, address, zip_code, city) VALUES (:firstName, :lastName, :email , :address, :pCode ,:city)");
            $query->bindParam('firstName', $firstName);
            $query->bindParam('lastName',$lastName);
            $query->bindParam('email',$email);
            $query->bindParam('address',$address);
            $query->bindParam('pCode',$pCode);
            $query->bindParam('city',$city);
            $query->execute();
//            $_SESSION['firstName'] = $_POST['firstName'];
//            $_SESSION['lastName'] = $_POST['lastName'];
//            $_SESSION['email'] = $_POST['email'];
//            $_SESSION['address'] = $_POST['address'];
//            $_SESSION['postalCode'] = $_POST['postalCode'];
//            $_SESSION['city'] = $_POST['city'];
//            header('location:./summary.php');
        }
    }
    else {
        $message = 'Vul de velden correct in.';
    }
}
else {
    $message = '';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Aanmeldformulier</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-black">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white" href="index.php">ZUZU</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item text-white">
                    <a class="nav-link text-white" href="order-page.php">Bestellen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid p-0">
    <img class="img-fluid" src="img/Screenshot%202023-09-14%20at%209.41.14%20AM.png" alt="zu">
</div>
<div class="row mt-5">
    <div class="col-2"></div>
    <div class="col-8">
        <form method="post">
            <div class="mb-3">
                <label> Voornaam</label>
                <input type="text" name="firstName" class="form-control">
            </div>
            <div class="mb-3">
                <label>Achternaam</label>
                <input type="text" name="lastName" class="form-control">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label>Adres</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="mb-3">
                <label>Postcode</label>
                <input type="text" name="postalCode" class="form-control">
            </div>
            <div class="mb-3">
                <label>Woonplaats</label>
                <input type="text" name="city" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary bg-black text-white">Verzenden</button>
        </form>

    </div>
    <div class="col-2"></div>
</div>
<div class="row mt-3">
    <div class="col-12 text-center">
        <?php echo $message; ?>
    </div>
</div>
<footer>
    <div class="row mt-5 text-white bg-black">
        <div class="col-6 text-center">
            <p>contactgegevens <br>
                ZuZu <br>
                appelstaart 1A <br>
                1111AA <br>
                ZUZU@gmail.com <br>
                06-12345678 <br>
            </p>
        </div>
        <div class="col-6 text-center">
            <p>© 2021 ZuZu</p>
        </div>
    </div>
</footer>
</body>
</html>

