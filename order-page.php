<?php
    include ('database.php');
    global $db;

    $query = $db->prepare("SELECT * FROM sushi");
    $result = $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $sushiError = false;
    $errorMessage = '';

if (isset($_POST['submit'])){
    global $sushiError;
    $countArrayDB = count($result);
    $empty_count = 0;

    foreach ($result as $data) {
        $amount = $_POST['amount_'.$data['id']];

        if ($amount > $data['amount']) {
            $errorMessage = "<p class='p-2 bg-danger text-white'>Voer een geldig aantal in. {$data['name']} maximaal = {$data['amount']}</p>";
            $sushiError = true;
        }
        if ($amount == 0 || $amount == null) {
            $empty_count++;
        }
        if ($empty_count == $countArrayDB) {
            $errorMessage = "<p class='p-2 bg-danger text-white'>Je kan niet alle velden leeg laten. Vul iets in</p>";
            $sushiError = true;
        }
    }

    if ($sushiError === false) {
        header('location:form.php');
        echo "Het is getuurd";
    }
}

function displayCards($r) {
    foreach ($r as $data) {
        echo "<div class='col-md-3 col-12 mt-md-4 mt-5'>
            <div class='card'>
            <img src='{$data['image']}' class='card-img-top' alt='Geen image beschikbaar'>
            <div class='card-body'>
                <h5 class='card-title'>{$data['name']}</h5>
                <p class='card-text'>{$data['description']}</p>
                <p>Maximaal aantal = {$data['amount']} <br> <b>Prijs per stuk: €{$data['price']}</b></p>
                <input type='number' name='amount_{$data['id']}' placeholder='Voer aantal in' class='w-25'>
            </div>
        </div>
        </div>";
    }
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

    <title>Sushi lijst</title>
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
                    <a class="nav-link text-white" href="form.php">Inschrijven</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--<div class="container-fluid p-0">-->
<!--    <img class="img-fluid" src="img/Screenshot%202023-09-14%20at%209.41.14%20AM.png" alt="zu">-->
<!--</div>-->

<div class="container-fluid">

    <form method="post">
        <div class="row mt-5">
        <?=displayCards($result)?>
            <?=$errorMessage?>
        </div>
        <button type="submit" name="submit" class="btn btn-primary bg-black text-white w-100">Verzenden</button>
    </form>

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