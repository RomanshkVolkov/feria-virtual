<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SeccionAdministrativa/css/bootstrap.css">
    <link rel="stylesheet" href="css/testPreguntas.css">
    <link rel="stylesheet" href="css/Listado.css">
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>Resultados</title>
</head>

<?php
include_once("Componentes/header.php");
?>

<script>
    //Codigo para quitar el video de presentación
    var myobj = document.getElementById("intro");
    myobj.remove();
    var element = document.getElementById('Test');
    resetnav();
    element.classList.add("active");
    
    
</script>
<?php

if (isset($_POST['centilAl'])) $centilAL = $_POST['centilAl'];
if (isset($_POST['centilMe'])) $centilMe = $_POST['centilMe'];
if (isset($_POST['centilCa'])) $centilCa = $_POST['centilCa'];
if (isset($_POST['centilCi'])) $centilCi = $_POST['centilCi'];
if (isset($_POST['centilPe'])) $centilPe = $_POST['centilPe'];
if (isset($_POST['centilAr'])) $centilAr = $_POST['centilAr'];
if (isset($_POST['centilLi'])) $centilLi = $_POST['centilLi'];
if (isset($_POST['centilMu'])) $centilMu = $_POST['centilMu'];
if (isset($_POST['centilSo'])) $centilSo = $_POST['centilSo'];
if (isset($_POST['centilAd'])) $centilAd = $_POST['centilAd'];

        ?>

        <br>
        <div class="row text-center mb-3">
            <h1 class="col-12">Afinidades Totales</h1>
        </div>
        <div class="row justify-content-around mt-1 mb-2 text-center">
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Aire Libre
                </div>
                <div class="col-auto">
                    <?php echo $centilAL; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Mecanica
                </div>
                <div class="col-auto">
                    <?php echo $centilMe; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Calculo
                </div>
                <div class="col-auto">
                    <?php echo $centilCa; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Cientifica
                </div>
                <div class="col-auto">
                    <?php echo $centilCi; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Persuasiva
                </div>
                <div class="col-auto">
                    <?php echo $centilPe; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Artes
                </div>
                <div class="col-auto">
                    <?php echo $centilAr; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Literaria
                </div>
                <div class="col-auto">
                    <?php echo $centilLi; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Musica
                </div>
                <div class="col-auto">
                    <?php echo $centilMu; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Social
                </div>
                <div class="col-auto">
                    <?php echo $centilSo; ?>%
                </div>
            </div>
            <div class="col-2 mx-1 mb-2">
                <div class="col-auto">
                    Administrativa
                </div>
                <div class="col-auto">
                    <?php echo $centilAd; ?>%
                </div>
            </div>
        </div>
    </div>

    <?php
    $Areas = array(
        $centilAL,
        $centilMe,
        $centilCa,
        $centilCi,
        $centilPe,
        $centilAr,
        $centilLi,
        $centilMu,
        $centilSo,
        $centilAd
    );
    //rsort($Areas);
    
    //print_r($Areas);
    //echo '<br><br><br>';
    foreach($Areas as $key => $value) {
        if($value == max($Areas)) {//recorrer el array desde el elemento 
        //                         0 buscando el valor mas alto
            $area1 = $key+1;//area 1 seria el indice del elemento encontrado
        }
    }
    //echo '<br><br><br>';
    unset($Areas[$area1-1]);//eliminar el elemento que se encuentra en la posicion $area1
    foreach($Areas as $key => $value) {
        if($value == max($Areas)) {//buscar el valor mas alto de la misma forma
            $area2 = $key+1;
        }
    }
    //print_r($Areas);

    ?>
    <br>
    <input type="hidden" id="area1" value="<?php echo $area1; ?> ">
    <input type="hidden" id="area2" value="<?php echo $area2; ?> ">
    </div>
    <!--Listado universidades-->
    <div class="container-fluid" id="Listado">
    </div>
    <script>

        $(document).ready(function() {
            const area1 = $('#area1').val();
            const area2 = $('#area2').val();
            var dataContact = '';
            $.ajax({
                url: 'Tareas/ajaxResultadosTest.php',
                type: 'GET',
                async: true,
                data: {
                    Area1: area1,
                    Area2: area2
                },
                success: function(resultado) {
                    if (resultado === 'noData') {
                        dataContact = '<center class="h5">No se encontraron resultados</center>';
                    } else {
                        console.log(resultado);
                        var info = JSON.parse(resultado);
                        dataContact = info;
                    }

                    $('#Listado').html(dataContact);
                },
                error: function(error) {
                    console.log(error);
                }

            });
        });
    </script>
</body>

</html>