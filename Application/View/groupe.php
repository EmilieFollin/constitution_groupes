<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 17/09/2019
 * Time: 15:07
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constitution groupe</title>
    <link rel="stylesheet" href="../public/assets/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
</head>

<body id="body">
<!-- Editable table -->
<div class="container-fluid" id="container">
    <div class="row">
        <div class="col"><a href="/consitu/Index/accueil"><button id="couleurretour" class="btn  red darken-3 btn-rounded btn-lg">Retour</button></a></div>
        <div class="col-8">
            <div>
                <img id="image" class="rounded mx-auto d-block" src="../public/assets/img/cropped-logo-school-2.png">
            </div>
        </div>

        <div class="col"></div>

    </div>
</div>
<div class="container-fluid" id="container2">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div id="jumbo2" class="jumbotron card card-image">
                <h1 class="text-center"><strong>AFFICHAGE DES GROUPES </strong>  <i class="fas fa-chevron-down fa-1x ml-4"></i></h1>
                <div class="row">

                </div>
            </div>
        </div>

        <div class="col"></div>

    </div>
</div>

<div class="container-fluid">
    <div class="row">


        <?php
            foreach ($groupe as $groupes){
        ?>
        <div id="affichagegrp" class="col-4 rounded mx-auto d-block"><!-- Card -->
            <div class="card" id="bkcard">

                <!-- Card image -->
                <div class="view overlay">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h3 class="card-title text-center"><strong>GROUPE</strong></h3>
                    <!-- Text -->
                    <table class="table table-striped text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><strong>Nom</strong></th>
                            <th scope="col"><strong>Prénom</strong></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($groupes as $person){ ?>
                        <tr>
                            <?php ?>
                            <th scope="row">1</th>
                            <?php
                            if (isset($person->nom)) {
                                ?>
                                <td>
                                    <?php
                                    echo $person->nom;
                                    ?>
                                </td>

                                <td><?php
                                    echo $person->prenom;
                                    ?></td>
                                <?php
                            }
                            ?>

                        </tr>
                        <?php }?>

                        </tbody>
                    </table>

                </div>

            </div>
            <!-- Card --></div>
        <?php }?>

    </div>

</div>
</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
</html>


