<?php

require_once('config/db.php');
$query = "select * from tblscinfo";
$result = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,800;1,900&family=Teko:wght@400;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="MainProgStyle.css">
    <!-- title icon -->
    <link rel="icon" href="imgs/etc/pasay-small.png" type="image/png">
    <title>Dashboard</title>
</head>

<body>

    <nav class="nav">
        <a href="#" class="brand-name">Barangay 48, Pasay City</a>
        <ul class="nav-links">
            <!-- pabago nalang href -->
            <li><a href="#">Dashboard</a></li>
            <li><a href="indexApplicForm.php">Application</a></li>
            <li><a href="indexRead.php">SC List</a></li>
        </ul>
        <img class="logo-png" href="#" src="imgs/etc/pasay-small.png" alt="PasayLogo" id="brngyPic" />
    </nav>

    <div class="container-dash">
        <header>Current Barangay Officials</header>

        <div class="authorities">
            <div class="row1">
                <div class="col1">
                    <img src="imgs/brgy/kapitann.png" alt="">
                    <h2>Hon. Thomas Omaña II</h2>
                    <p>Punong Barangay</p>
                </div>
            </div>

            <div class="row2">
                <div class="col1">
                    <img src="imgs/brgy/kagawadallan.png" alt="">
                    <h2>Hon. Allan Ko</h2>
                    <p>Kagawad</p>
                </div>

                <div class="col2">
                    <img src="imgs/brgy/kagawadarnel.png" alt="">
                    <h2>Hon. Arnel Diaz</h2>
                    <p>Kagawad</p>
                </div>

                <div class="col3">
                    <img src="imgs/brgy/kagawadjerby.png" alt="">
                    <h2>Hon. Jerby Jesuyon</h2>
                    <p>Kagawad</p>
                </div>
                <div class="col4">
                    <img src="imgs/brgy/kagawadperlita.png" alt="">
                    <h2>Hon. Perlita Dianon</h2>
                    <p>Kagawad</p>
                </div>

            </div>

            <div class="row3">

                <div class="col1">
                    <img src="imgs/brgy/kagawadreniel.png" alt="">
                    <h2>Hon. Reniel Gravo</h2>
                    <p>Kagawad</p>
                </div>

                <div class="col2">
                    <img src="imgs/brgy/kagawadalfredo.png" alt="">
                    <h2>Hon. Alfredo Cajucom</h2>
                    <p>Kagawad</p>
                </div>

                <div class="col3">
                    <img src="imgs/brgy/kagawadreynaldo.png" alt="">
                    <h2>Hon. Reynaldo Buen</h2>
                    <p>Kagawad</p>
                </div>

            </div>

            <div class="row4">
                <div class="col4">
                    <img src="imgs/brgy/treasurer.png" alt="">
                    <h2>Ana Katrina San Miguel</h2>
                    <p>Treasurer</p>
                </div>

                <div class="col2">
                    <img src="imgs/brgy/secretary.png" alt="">
                    <h2>Regina Everlie Balana</h2>
                    <p>Secretary</p>
                </div>

                <div class="col3">
                    <img src="imgs/brgy/skchairman.png" alt="">
                    <h2>Rachel Rose Delgado</h2>
                    <p>SK Chairman</p>
                </div>

            </div>
        </div>
        <!-- end of div authorities-->
    </div>
    <!-- end of div container-1-->


    <div class="floatParent2">
    <a href="logout.php">
        <div id="LogoutBtn">
        </div>
    </a>
    </div>
</body>

</html>