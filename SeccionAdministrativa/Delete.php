<?php
include_once("conexiones/conexion.php");
echo'<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
$rutaAux = "";
$conexion = conexion10();
$ID = $_POST['ID'];
console_log("La id del elemento es: " . $ID);
$consulta = "DELETE FROM {$_GET['tabla']} WHERE `ID`=" . $ID;

switch ($_GET['tabla']) {
    case 'foto':
        console_log($_POST['ruta']);
        $rutaAux = pathinfo($_POST['ruta']);
        console_log("rutaAux: " . getcwd() . "/docs_Unis/Fotos/" . $rutaAux['basename']);
        console_log("Unlink: " . unlink(getcwd() . "/docs_Unis/Fotos/" .  $rutaAux['basename']));

        //console_log(unlink("../" . $_POST['ruta']));
        mysqli_query($conexion, $consulta);
        console_log($consulta);
        mysqli_close($conexion);
        break;
    case 'beca':
        console_log($_POST['ruta']);
        $rutaAux = pathinfo($_POST['ruta']);
        console_log("rutaAux: " . getcwd() . "/docs_Unis/Becas/" . $rutaAux['basename']);
        console_log("Unlink: " . unlink(getcwd() . "/docs_Unis/Becas/" .  $rutaAux['basename']));

        //console_log(unlink("../" . $_POST['ruta']));
        mysqli_query($conexion, $consulta);
        console_log($consulta);
        mysqli_close($conexion);
        break;
    case 'carrera':
        $con3 = conexion10();
        $cons3 = "SELECT * FROM seccion 
        JOIN foto ON seccion.ID=foto.Seccion_ID
        WHERE seccion.ID={$_POST['id_sec']};";
        $aux3 = mysqli_query($con3, $cons3);

        $con4 = conexion10();
        $cons4 = "SELECT * FROM seccion 
        JOIN video ON seccion.ID=video.Seccion_ID
        WHERE seccion.ID={$_POST['id_sec']};";
        $aux4 = mysqli_query($con4, $cons4);

        if (mysqli_num_rows($aux3) > 0 || mysqli_num_rows($aux4) > 0) {
           
            swal("Error", "Antes de poder eliminar esta carrera debe asegurarse de que no hay vídeos o fotos asiganos a la sección de esta carrera.","warning");
        } else {
            $con2 = conexion10();
            $cons2 = "DELETE FROM carrera_area WHERE Carrera_ID=$ID";
            mysqli_query($con2, $cons2);
            console_log($cons2);
            mysqli_close($con2);

            mysqli_query($conexion, $consulta);
            console_log($consulta);
            mysqli_close($conexion);


            console_log("La id de la seccion de la carrera es: " . $_POST['id_sec']);
            console_log($_POST['ruta']);
            $rutaAux = pathinfo($_POST['ruta']);
            console_log("rutaAux: " . getcwd() . "/docs_Unis/carreras/" . $rutaAux['basename']);
            console_log("Unlink: " . unlink(getcwd() . "/docs_Unis/carreras/" .  $rutaAux['basename']));

            //console_log(unlink("../" . $_POST['ruta']));
            $conexion2 = conexion10();
            $consulta2 = "DELETE FROM seccion WHERE ID=" . $_POST['id_sec'];
            console_log($consulta2);
            mysqli_query($conexion2, $consulta2);
            mysqli_close($conexion2);
        }
        break;
    default:
        mysqli_query($conexion, $consulta);
        console_log($consulta);
        mysqli_close($conexion);
        break;
}
?>

<div style="display: none;">
    <form id="b_submit" method="POST" action="Configuracion.php?CONFIG=<?php echo $_POST['origen']; ?>">

        <button type="submit">

            <input type="hidden" name="CONFIG" value="<?php echo $_POST['origen']; ?>">

            <input type="hidden" name="CONFIG_IMG" value="<?php echo $_POST['img']; ?>">

        </button>

    </form>
</div>

<script>
document.getElementById("b_submit").submit();
</script>