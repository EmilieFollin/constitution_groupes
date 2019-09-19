<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constitution groupe</title>
    <link rel="stylesheet" href="../../assets/style.css">
    <script src="script.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js" rel="stylesheet">
</head>
<!-- Editable table -->
<body id="body">
<!-- Editable table -->
<div class="container-fluid" id="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div>
                <img id="image" class="rounded mx-auto d-block" src="../../assets/img/cropped-logo-school-2.png">
            </div>
        </div>

        <div class="col"></div>

    </div>
</div>
<div class="container" id="container2">
    <div class="row">
        <div class="col"></div>
        <div class="col-10">

            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Ajout des étudiants dans la base</h3>
                <div class="card-body">
                    <div  class="table-editable">

                        <span class="table-add float-right mb-3 mr-2">
                            <h4>Nombre de groupe</h4>
                            <div class="def-number-input number-input safari_only rounded mx-auto d-block">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                              <input class="quantity" min="2" max="10" name="quantity" value="2" type="number">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                            </div>
                        </span>

                        <table id="matable" class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                            <tr>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Prénom</th>
                                <th class="text-center">Type Personnalité</th>
                                <th class="text-center"> Moyenne Back</th>
                                <th class="text-center"> Moyenne Front</th>

                            </tr>
                            </thead>

                            <tbody>

                            <tr id="duplicater" class="duplicater0">

                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                            </tr>

                            </tbody>
                        </table>
                        <span class="float-right"><a href="#!" id="boutonplus" ><i class="far fa-plus-square fa-2x" onclick="duplicate()" aria-hidden="true"></i></a></span>
                        <span class="table-add mb-3 mr-2 rounded mx-auto d-block"><a href="affichage.html" class="text-success "><button type="button" class="btn btn-success btn-rounded btn-lg rounded mx-auto d-block">Enregistrer et création des groupes</button></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

</body>

<script>
    var i = 0;
    var original = document.getElementById('duplicater');

    function duplicate() {
        var clone = original.cloneNode(true); // "deep" clone
        clone.id = "duplicater" + ++i;
        // or clone.id = ""; if the divs don't need an ID
        original.parentNode.appendChild(clone);
    }

</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
</html>

