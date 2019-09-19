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
<div class="container-fluid" id="container2">
    <div class="row">
        <div class="col"></div>
        <div class="col-10">
            <div class="card">
                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">AJOUT DES ETUDIANTS DANS LA BASE</h3>
                <div class="card-body">
                    <div id="table" class="table-editable"><span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                                        class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                            <tr>
                                <th class="text-center"><strong>Nom</strong></th>
                                <th class="text-center"><strong>Prénom</strong></th>
                                <th class="text-center"><strong>Type Personnalité </strong></th>
                                <th class="text-center"><strong>Moyenne Back</strong> </th>
                                <th class="text-center"><strong>Moyenne Front</strong> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>
                                <td class="pt-3-half" contenteditable="true"></td>

                                <td>
                                    <span class="table-remove"><button type="button" id="danger-color-dark" class="btn danger-color-dark btn-rounded btn-sm my-0">supprimer</button></span>
                                </td>
                            </tbody>
                        </table>
                        <span class="table-add mb-3 mr-2 rounded mx-auto d-block" id="span"><a href="#!" class="text-success "><button type="button" class="btn btn-success btn-rounded btn-lg rounded mx-auto d-block">Enregistrer et création des groupes</button></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
</body>


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
        var clone = original.cloneNode(true);
        clone.id = "duplicater" + ++i;

        original.parentNode.appendChild(clone);
    }

    $tableID.on('click', '.table-remove', function () {

        $(this).parents('tr').detach();
    });

</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>



<script>
    const $tableID = $('#table');
    const $BTN = $('#export-btn');
    const $EXPORT = $('#export');

    const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true"></td>
  <td class="pt-3-half" contenteditable="true"></td>
  <td class="pt-3-half" contenteditable="true"></td>
  <td class="pt-3-half" contenteditable="true"></td>
  <td class="pt-3-half" contenteditable="true"></td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Supprimer</button></span>
  </td>
</tr>`;

    $('.table-add').on('click', 'i', () => {

        const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

        if ($tableID.find('tbody tr').length === 0) {

            $('tbody').append(newTr);
        }

        $tableID.find('table').append($clone);
    });

    $tableID.on('click', '.table-remove', function () {

        $(this).parents('tr').detach();
    });

    $tableID.on('click', '.table-up', function () {

        const $row = $(this).parents('tr');

        if ($row.index() === 1) {
            return;
        }

        $row.prev().before($row.get(0));
    });

    $tableID.on('click', '.table-down', function () {

        const $row = $(this).parents('tr');
        $row.next().after($row.get(0));
    });

    // A few jQuery helpers for exporting only
    jQuery.fn.pop = [].pop;
    jQuery.fn.shift = [].shift;

    $BTN.on('click', () => {

        const $rows = $tableID.find('tr:not(:hidden)');
        const headers = [];
        const data = [];

        // Get the headers (add special header logic here)
        $($rows.shift()).find('th:not(:empty)').each(function () {

            headers.push($(this).text().toLowerCase());
        });

        // Turn all existing rows into a loopable array
        $rows.each(function () {
            const $td = $(this).find('td');
            const h = {};

            // Use the headers from earlier to name our hash keys
            headers.forEach((header, i) => {

                h[header] = $td.eq(i).text();
            });

            data.push(h);
        });

        // Output the result
        $EXPORT.text(JSON.stringify(data));
    });
</script>
</html>

