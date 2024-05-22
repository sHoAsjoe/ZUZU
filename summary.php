<?php
session_start();

if (isset($_SESSION['firstName']) && isset($_SESSION['lastName']) && isset($_SESSION['email']) && isset($_SESSION['adres']) && isset($_SESSION['pCode']) && isset($_SESSION['city'])) {
    echo "Voornaam: " . $_SESSION['firstName'] . "<br>";
    echo "Achternaam: " . $_SESSION['lastName'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "Adres: " . $_SESSION['address'] . "<br>";
    echo "Postcode: " . $_SESSION['postalCode'] . "<br>";
    echo "Woonplaats: " . $_SESSION['city'] . "<br>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overzicht.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-black">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white" href="index.php">ZUZU</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="order-page.php">Bestellen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="form.php">Inschrijven</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="container-sm p-0 pt-5 m-auto">
        <ul class="list-group">
            <li class="list-group-item">Voornaam: <?php echo $_SESSION['firstName']?></li>
            <li class="list-group-item">Achternaam: <?php echo $_SESSION['lastName']?></li>
            <li class="list-group-item">Email: <?php echo $_SESSION['email']?></li>
            <li class="list-group-item">Adres: <?php echo $_SESSION['address']?></li>
            <li class="list-group-item">Postcode: <?php echo $_SESSION['postalCode']?></li>
            <li class="list-group-item">Woonplaats: <?php echo $_SESSION['city']?></li>
        </ul>
    </div>


</section>
</body>


</html>
