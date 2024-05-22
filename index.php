
<?php
date_default_timezone_set("Europe/Amsterdam");
$currentDate = date("d-m-Y");
$currentHour = date("H");
$message = "";

if ($currentHour < 12) {
    $message = "Goedemorgen";
} elseif ($currentHour < 18) {
    $message = "Goedemiddag";
} else {
    $message = "Goedenavond";
}
$currentTime = date("H:i");
$currentDeleveryTime = date("H:i", strtotime("+60 minutes"));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>ZuZu</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-black">
    <div class="container-fluid text-white ">
        <a class="navbar-brand text-white" href="#">ZuZu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page"  href="order-page.php">Bestellen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="form.php">Inschrijven</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid p-0">
    <img class="img-fluid" src="img/Screenshot%202023-09-14%20at%209.41.14%20AM.png" alt="zu">
</div>

<div class="row text-center">
    <div class="col-12">
        <h2> <?php echo "$message"; ?> , Welkom bij ZuZu</h2>
        <p>Wij zijn een Japans resaurant dat zich specialiseert in sushi.<br>Het woord "sushi" is afkomstig van het
            "su", wat azijn betekent en "shi" rijst. </p> <br>
        <p>Het is momenteel <?php echo "$currentDate $currentTime";?> <br>
            Onze verwachte bezorgtijd is <?php echo "$currentDeleveryTime";  ?>

        </p>
        <p>Wij zijn geopend van 12:00 tot 22:00</p>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-4">
            <div class="card">
                <img src="img/ricardo-honda-Xd5F5tEN_0w-unsplash.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="img/pexels-leonardo-luz-14013441.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<footer>

    <div class="row  pt-5">
        <div class="col-6 text-center text-white py-5 bg-black">
            <p>Contact gegevens. <br>
                Resaurant ZuZu <br>
                Appelstaart 1A <br>
                1111AA <br>
                ZUZU@gmail.com <br>
                06-12345678 <br>
            </p>

        </div>
        <div class="col-6 text-center text-white py-5 bg-black">
            <p>Maandag: 12:00 - 22<br>
            Dinsdag:12:00 - 22:00<br>
            Woensdag: 12:00 - 22:00<br>
            Donderdag: 12:00 - 22:00<br>
            Vrijdag: 12:00 - 22:00<br>
            Zaterdag:12:00 - 22:00<br>
            Zondag: Gesloten
            </p>


        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<!---->
<?php
//
//date_default_timezone_set("Europe/Amsterdam");
//$currentHour = date("H");
//
//$message = "";
//
//if ($currentHour < 12) {
//    $message = "Goedemorgen";
//} elseif ($currentHour < 18) {
//    $message = "Goedemiddag";
//} else {
//    $message = "Goedenavond";
//}
//$currentTime = date("H:i");
//
//
//?>

