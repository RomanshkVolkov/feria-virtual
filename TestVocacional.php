<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SeccionAdministrativa/css/bootstrap.css">
    <link rel="stylesheet" href="css/testPreguntas.css">
   <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
    <title>Test vocacional</title>
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
<style>
    .blank_row {
        height: 2rem !important;
        background-color: #FFFFFF !important;
    }
</style>

<body>
    <!-- Footer -->
    <?php
    include_once("Componentes/footer.php");
    ?>
    <br>
    <br>
    <form action="ResultadosTest.php" method="post">
        <div class="container">
            <h2 class="mb-3">Test Vocacional</h2>
            <div class="row" align="justify">
                Elegir una carrera profesional es una decisión muy importante y conocerte mejor es un elemento clave para elegirla. Es por ello que se ha diseñado este test especialmente para ti con el propósito de que identifiques tus intereses y habilidades vocacionales.
<br><br>
                Con base a tus respuestas se te proporcionará tu perfil vocacional y las carreras asociadas a éste. 
            </div>
            <br>
            <div class="row">
                <label class="h3">Instrucciones</label>
            </div>
            <div class="row" align="justify">
                Encontrará un cierto número de actividades agrupadas de tres en tres. En cada grupo, lea las tres actividades, decida cuál le gusta más y cuál le gusta menos, y CONTESTE marcando la casilla en la columna "Prefiero" al frente de la frase con la actividad que más le gusta y marcando la casilla en la columna "No Prefiero" frente a la actividad que le agrade menos.
            </div>
            <br>
            <div class="row">
                <label class="h4" >Ejemplo</label>
            </div>
            <img class="row img-fluid mb-2 mx-auto "  src="Imagenes/ejemploTestVocacional.png" alt="Ejemplo" style="border: 2px solid #555;">
             <label class="h4"  >Detalles</label>
            <div class="shadow p-5 mb-5 bg-white rounded "  ><div class="row" align="justify">
                A la persona que ha dado estas dos respuestas, lo que más le gusta en el primer grupo de actividades es "Fijarme en las cosechas del campo durante el viaje", y lo que menos le gusta es "Contemplar el paisaje mientras viajo". En el segundo grupo de actividades ha indicado que, generalmente, lo que más le gusta es "Leer las lecciones a un estudiante ciego" y lo que menos le agrada es "Interrogar a la gente en una encuesta de opinión pública".
            </div>
            <br>
            <div class="row" align="justify">
                Encontrará algunas actividades que implican unos estudios y una experiencia. En estos casos, supóngase que usted ya posee estos estudios y experiencia. No elija una actividad porque es nueva, poco común o está de moda. Piense en lo que usted preferiría hacer si estuviera igualmente familiarizado con todas las actividades.
            </div>
            <br>
            <div class="row" align="justify">
                En algunos casos encontrará que las tres actividades le son igualmente agradables. En otros casos las tres le son igualmente poco agradables. Por favor, indique siempre aquellas actividades que usted escogería si no tuviera más remedio que decidirse.
            </div>
            <br>
            <div class="row" align="justify">
                Algunas actividades pueden parecerle triviales o ridículas. Por favor, indique de todas formas sus preferencias en todos los grupos; son necesarios para ayudarle a usted con un informe completo. Sus respuestas serán guardadas de forma confidencial.
            </div>
            <br>
            <div class="row" align="justify">
                No invierta demasiado tiempo en cada grupo. Señale espontáneamente sus elecciones y continúe con otro grupo; no discuta las actividades con sus compañeros; el verdadero valor de una respuesta está en que haya sido decidida por usted mismo. EL TIEMPO ESTIMADO PARA RESPONDER LA PRUEBA ES DE 45 A 60 MINUTOS MÁXIMO
            </div></div>
            <br>
            <div class="row">
                <label class="h3">Elija la opción de acuerdo a su situación</label>
            </div>
            <div class="row my-2">
                <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;" for="genero">Genero </label>
                <select class="col-auto col-sm-10 custom-select" id="genero" name="genero">
                    <option value="0">Masculino</option>
                    <option value="1">Femenino</option>
                </select>
            </div>
            <div class="row my-2">
                <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;" for="edad">Grupo de Edad</label>
                <select class="col-auto col-sm-10 custom-select" id="edad" name="edad">
                    <option value="1">Entre 15 y 18 Años</option>
                    <option value="2">Entre 19 y 22 Años</option>
                    <option value="3">Mayor a 23 Años</option>
                
                </select>
            </div>
            <br>
            <div id="Contenedor" class="container">
                <div class="row">
                    <label class="h2">Test</label>
                </div>
                <table class="table table-sm table-striped table-hover" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th scope="col">Situacion</th>
                            <th scope="col" class="th text-center mal-2">Prefiero</th>
                            <th scope="col" class="text-center">No Prefiero</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="blank_row" style="height: 1rem !important;">
                            <td colspan="3"></td>
                        </tr>
                    </tbody>
                    <tbody id="testP1">
                    </tbody>
                    <tbody id="testP2">
                    </tbody>
                    <tbody id="testP3">
                    </tbody>
                    <tbody id="testP4">
                    </tbody>
                    <tbody id="testP5">
                    </tbody>
                    <tbody id="testP6">
                    </tbody>
                    <tbody id="testP7">
                    </tbody>
                    <tbody id="testP8">
                    </tbody>
                    <tbody id="testP9">
                    </tbody>
                    <tbody id="testP10">
                    </tbody>
                    <tbody id="testP11">
                    </tbody>
                    <tbody id="testP12">
                    </tbody>
                </table>
                <div class="row justify-content-center">
                    <button id="ant" type="button" onclick="retroceder()" class="btn btn-primary col-3 col-md-2" disabled="true">      
                        <
                    </button>
                    <label class="h5 col-2 col-md-1 align-self-center" id="act" for="pagAct" style="text-align: center;">1</label>
                    <label class="h5 col-2 col-md-1 align-self-center" for="pagAct" style="text-align: center;">/</label>
                    <label class="h5 col-2 col-md-1 align-self-center" for="pagAct" style="text-align: center;">12</label>
                    <button id="sig" type="button" onclick="avanzar()" class="btn btn-primary col-3 col-md-2">
                        >
                    </button>
                </div>
                <div class="row justify-content-center mt-3">
                    <button type="submit" onclick='document.getElementById("error").style.display = "block";' class="btn btn-success col-12 col-md-7">Concluir Evaluación</button>
                </div>
                <div class="row justify-content-center mt-2">
                    <span id="error" style="display: none;">Revise que ha respondido todos los grupos.</span>
                </div>
            </div>
            <br>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/TestVocacional.js"></script>
    <button type="button" onclick="seleccionar();">Seleccionar todos</button>
    <button type="button" onclick="calificar()">Test de calificacion</button>
</body>
<script>
    function seleccionar() {
        
        const responses = document.getElementsByClassName("respuesta");
        for (let i = 0; i < responses.length; i++) {
            if (i % 3 === 0) {
            
                responses[i].checked = true;
                if (i % 2 === 0) {
                    responses[i + 5].checked = true;
                }
            }
            i++
        }
        Array.from(responses).forEach(function(value, index, responses) {
            if (responses[index].checked === false) {
                responses[index].disabled = true;
            }
        })
    }

    function calificar () {
        let puntajeAL = 0;
        let puntajeMe = 0;
        let puntajeCa = 0;
        let puntajeCi = 0;
        let puntajePe = 0;
        let puntajeAr = 0;
        let puntajeLi = 0;
        let puntajeMu = 0;
        let puntajeSo = 0;
        let puntajeAd = 0;
        let ActName = '';
        
        let puntajeAlData = [
        "g1parb", "g1pbra", "g1pcra", "g1pgrb", "g1phrb", "g1pjra", "g1pkrb", "g1plra", "g1pmrb", "g1prrb", "g1psra", "g1ptra", "g1pxrb", "g1pyrb", "g1pzra", "g2pAra", "g2pBrb", "g2pCra", "g2pDrb", "g2pEra", "g2pFrb", "g2pGrb", "g2pHra", "g2pJrb", "g2pKrb", "g2pLra", "g2pMra", "g2pNrb", "g2pPrb", "g2pQra", "g2pRrb", "g2pSra", "g2pTrb", "g3pdrb", "g3perb", "g3pfra", "g3pgrb", "g3phra", "g3pjrb", "g3pkrb", "g3plra", "g3pmra", "g3pnra", "g3pprb", "g3pqra", "g4pDrb", "g4pEra", "g4pFrb", "g4pRrb", "g4pSrb", "g4pTra", "g4pgrb", "g4phrb", "g4pjra", "g5pkrb", "g5plrb", "g5pmra", "g5prrb", "g5psra", "g5ptra", "g6pKrb", "g6pLrb", "g6pMra", "g6pNra", "g6pPrb", "g6pQrb", "g6pRra", "g6pSra", "g6pTrb", "g7parb", "g7pbra", "g7pcrb", "g7pdra", "g7pera", "g7pfrb", "g7pkrb", "g7plra", "g7pmrb", "g8pArb", "g8pBrb", "g8pCra", "g8pUrb", "g8pVra", "g8pWra", "g9pdrb", "g9pera", "g9pfrb", "g10pArb", "g10pBra", "g10pCrb", "g10pNrb", "g10pPrb", "g10pQra", "g10pUrb", "g10pVra","g10pWra", "g11parb", "g11pbra", "g11pcra", "g11pdrb", "g11perb", "g11pfra", "g11pgra","g11phrb", "g11pjrb", "g11pkrb", "g11plrb", "g11pmra", "g12pDrb", "g12pErb", "g12pFra","g12pGrb", "g12pHra", "g12pJrb", "g12pKrb", "g12pLra", "g12pMrb", "g12pNra", "g12pPrb","g12pQrb", "g12pUrb", "g12pVra", "g12pWrb"
        ]

        let puntajeMeData = [
            "g1pDrb", "g1pErb", "g1pFra", "g1pGrb", "g1pHrb", "g1pJra", "g1pKrb", "g1pLrb", "g1pMra", "g1pRra", "g1pSrb", "g1pTrb", "g5pDrb", "g5pErb", "g5pFra", "g5pKrb", "g5pLra", "g5pMrb", "g5pRra", "g5pSrb", "g5pTrb", "g6pXrb", "g6pYra", "g6pZrb", "g6para", "g6pbrb", "g6pcrb", "g6pdra", "g6perb", "g6pfrb", "g6pkra", "g6plrb", "g6pmrb", "g6pnrb", "g6ppra", "g6pqrb", "g6prra", "g6psrb", "g6ptrb", "g7pxrb", "g7pyrb", "g7pzra", "g7pGrb", "g7pHrb", "g7pJra", "g7pKrb", "g7pLra", "g7pMrb", "g7pRrb", "g7pSrb", "g7pTra", "g8para", "g8pbrb", "g8pcrb", "g8pgrb", "g8phrb", "g8pjra", "g8prrb", "g8psra", "g8ptrb", "g9pAra", "g9pBrb", "g9pCrb", "g9pGra", "g9pHrb", "g9pJrb", "g9pNrb", "g9pPra", "g9pQrb", "g10parb", "g10pbrb", "g10pcra", "g10pdrb", "g10perb", "g10pfra", "g10pgrb", "g10phra", "g10pjrb", "g10prrb",  "g10psra", "g10ptrb", "g11pDrb", "g11pEra", "g11pFrb", "g11pNra", "g11pPrb",  "g11pQrb", "g11pRrb", "g11pSra", "g11pTra", "g12pdrb", "g12perb", "g12pfra",  "g12pnra", "g12pprb", "g12pqrb", "g12prra", "g12psrb", "g12ptrb",
        ]

        let puntajeCaData = [
            "g1pdrb", "g1pera", "g1pfrb", "g5parb", "g5pbrb", "g5pcra", "g5pdra", "g5perb", "g5pfrb", "g5pgra", "g5phrb", "g5pjrb", "g6pGrb", "g6pHra", "g6pJrb", "g6pXra", "g6pYrb", "g6pZrb", "g6pdrb", "g6pera", "g6pfra", "g7para", "g7pbrb", "g7pcrb", "g7pxrb", "g7pyra", "g7pzrb", "g8pAra", "g8pBrb", "g8pCrb", "g8pGra", "g8pHrb", "g8pJrb", "g8pXrb", "g8pYrb", "g8pZra", "g8parb", "g8pbra", "g8pcrb", "g8pdrb", "g8pera", "g8pfrb", "g8pgrb", "g8phrb", "g8pjra", "g9pdra", "g9perb", "g9pfrb", "g9pgrb", "g9phra", "g9pjrb", "g9pArb", "g9pBra", "g9pCrb", "g9pDrb", "g9pEra", "g9pFrb", "g9pGrb", "g9pHrb", "g9pJra", "g10pGra", "g10pHrb", "g10pJrb", "g10parb", "g10pbra", "g10pcrb", "g10pgrb", "g10phrb", "g10pjra", "g11prra", "g11psrb", "g11ptrb", "g11pDrb", "g11pErb", "g11pFra", "g12pArb", "g12pBra", "g12pCrb", "g12pUra", "g12pVrb", "g12pWrb", "g12pdra", "g12perb", "g12pfrb"
        ]

        let puntajeCiData = [
            "g1purb", "g1pvrb", "g1pwra", "g1pDra", "g1pErb", "g1pFrb", "g1pKrb", "g1pLra", "g1pMrb", "g2pRrb", "g2pSra", "g2pTrb", "g2pUrb", "g2pVrb", "g2pWra", "g2pkrb", "g2plra", "g2pmrb", "g2pnra", "g2pprb", "g2pqrb", "g2prrb", "g2psra", "g2ptrb", "g3prra", "g3psrb", "g3ptrb", "g3purb", "g3pvra", "g3pwrb", "g3pArb", "g3pBra", "g3pCrb", "g3pDrb", "g3pErb", "g3pFra", "g3pKrb", "g3pLra", "g3pMrb", "g3pNrb", "g3pPrb", "g3pQra", "g3pRra", "g3pSra", "g3pTrb", "g4pUrb", "g4pVra", "g4pWrb", "g4parb", "g4pbra", "g4pcrb", "g4pkra", "g4plrb", "g4pmrb", "g4pnra", "g4pprb", "g4pqrb", "g4prrb", "g4psra", "g4ptrb", "g5prrb", "g5psrb", "g5ptra", "g5pura", "g5pvrb", "g5pwrb", "g5pArb", "g5pBra", "g5pCrb", "g5pGrb", "g5pHrb", "g5pJra", "g5pKrb", "g5pLrb", "g5pMra", "g5pNrb", "g5pPrb", "g5pQra", "g6pNrb", "g6pPrb", "g6pQra", "g6pRrb", "g6pSrb", "g6pTra", "g6pUrb", "g6pVra", "g6pWrb", "g7pura", "g7pvrb", "g7pwrb", "g7pNra", "g7pPra", "g7pQrb", "g7pRrb", "g7pSra", "g7pTrb", "g9pNra", "g9pPra", "g9pQrb", "g9pRra", "g9pSrb", "g9pTrb", "g12pnrb", "g12pprb", "g12pqra"
        ]

        let puntajePeData = [
            "g1pdrb", "g1perb", "g1pfra", "g1pxra", "g1pyrb", "g1pzrb", "g1pDrb", "g1pEra", "g1pFrb", "g2pGrb", "g2pHrb", "g2pJra", "g2parb", "g2pbra", "g2pcrb", "g2pdrb", "g2pera", "g2pfrb", "g2pgra", "g2phrb", "g2pjrb", "g3parb", "g3pbrb", "g3pcra", "g4pAra", "g4pBrb", "g4pCrb", "g4pGra", "g4pHrb", "g4pJrb", "g4pRra", "g4pSrb", "g4pTrb", "g4para", "g4pbrb", "g4pcrb", "g4pdrb", "g4pera", "g4pfrb", "g4pgrb", "g4phra", "g4pjrb", "g5para", "g5pbrb", "g5pcrb", "g5pdrb", "g5pera", "g5pfrb", "g5pkrb", "g5plra", "g5pmrb", "g5prra", "g5psrb", "g5ptrb", "g5purb", "g5pvrb", "g5pwra", "g5pDrb", "g5pEra", "g5pFrb", "g5pGrb", "g5pHra", "g5pJrb", "g6pGra", "g6pHrb", "g6pJra", "g6pXrb", "g6pYrb", "g6pZra", "g6parb", "g6pbra", "g6pcrb", "g6pdra", "g6perb", "g6pfrb", "g7pgrb", "g7phrb", "g7pjra", "g7prrb", "g7psra", "g7ptra", "g7pGrb", "g7pHra", "g7pJrb", "g8pDra", "g8pErb", "g8pFrb", "g8pGrb", "g8pHra", "g8pJrb", "g8pKrb", "g8pLrb", "g8pMra", "g8pNrb", "g8pPra", "g8pQrb", "g9parb", "g9pbra", "g9pcra", "g9pdrb", "g9perb", "g9pfra", "g9pgrb", "g9phrb", "g9pjra", "g9pkrb", "g9plra", "g9pmrb", "g10pDra", "g10pErb", "g10pFra", "g10pGrb", "g10pHra", "g10pJrb", "g10pTra", "g11pgrb", "g11phrb", "g11pjra", "g11pkra", "g11plrb", "g11pmrb", "g12pArb", "g12pBrb", "g12pCra", "g12pGrb", "g12pHrb", "g12pJra", "g12pTra",
        ]

        let puntajeArData = [
            "g1pKra", "g1pLrb", "g1pMrb", "g1pNrb", "g1pPrb", "g1pQra", "g1pRrb", "g1pSrb", "g1pTra", "g2pgrb", "g2phrb", "g2pjra", "g2pkra", "g2plrb", "g2pmrb", "g4pgra", "g4phrb", "g4pjrb", "g4pkrb", "g4plrb", "g4pmra", "g4prra", "g4psrb", "g4ptrb", "g5pGra", "g5pHrb", "g5pJrb", "g7prra", "g7psrb", "g7ptrb", "g7purb", "g7pvra", "g7pwrb", "g7pGra", "g7pHrb", "g7pJrb", "g7pRra", "g7pSrb", "g7pTrb", "g8pXrb", "g8pYra", "g8pZrb", "g8pdra", "g8perb", "g8pfrb", "g8pnrb", "g8ppra", "g8pqrb", "g9prrb", "g9psrb", "g9ptra", "g9purb", "g9pvra", "g9pwra", "g9pDrb", "g9pErb", "g9pFra", "g9pNrb", "g9pPrb", "g9pQra", "g10pRra", "g10pSrb", "g10pTrb", "g11purb", "g11pvrb", "g11pwra", "g12pRrb", "g12pSrb", "g12pTra", "g12parb", "g12pbra", "g12pcrb", "g12pgrb", "g12phra", "g12pjrb", "g12pnrb", "g12ppra", "g12pqrb",
        ]


        let puntajeLiData = [
            "g1pnra", "g1pprb", "g1pqrb", "g3para", "g3pbrb", "g3pcrb", "g3prrb", "g3psrb", "g3ptra", "g4pGrb", "g4pHra", "g4pJrb", "g4pKrb", "g4pLrb", "g4pMra", "g4pNra", "g4pPrb", "g4pQrb", "g4pUra", "g4pVrb", "g4pWrb", "g5pgrb", "g5phra", "g5pjrb", "g6pArb", "g6pBrb", "g6pCra", "g6pUrb", "g6pVrb", "g6pWra", "g7prrb", "g7psra", "g7ptrb", "g7purb", "g7pvrb", "g7pwra", "g9pdra", "g9perb", "g9pfrb", "g9pkra", "g9plrb", "g9pmrb", "g9prrb", "g9psra", "g9ptrb", "g9purb", "g9pvrb", "g9pwra", "g10pKra", "g10pLrb", "g10pMrb", "g10pRrb", "g10pSra", "g10pTrb", "g11pkrb", "g11plra", "g11pmrb", "g11purb", "g11pvra", "g11pwrb", "g12pRrb", "g12pSra", "g12pTrb",
        ]


        let puntajeMuData =[
            "g1pxrb", "g1pyra", "g1pzrb", "g1pRrb", "g1pSra", "g1pTrb", "g2pnrb", "g2pprb", "g2pqra", "g2prrb", "g2psrb", "g2ptra", "g3pNrb", "g3pPra", "g3pQrb", "g5pArb", "g5pBrb", "g5pCra", "g5pDrb", "g5pEra", "g5pFrb", "g6parb", "g6pbrb", "g6pcra", "g6pnra", "g6pprb", "g6pqrb", "g8pnra", "g8pprb", "g8pqrb", "g9pRrb", "g9pSra", "g9pTrb", "g10pnrb", "g10ppra", "g10pqrb", "g11pAra", "g11pBrb", "g11pCrb", "g11pGrb", "g11pHrb", "g11pJra", "g12pgrb", "g12phrb", "g12pjra"
        ]


        let puntajeSoData = [
            "g1pdra", "g1perb", "g1pfrb", "g2pUra", "g2pVrb", "g2pWrb", "g2para", "g2pbrb", "g2pcrb", "g3prrb", "g3psra", "g3ptrb", "g3pxra", "g3pyrb", "g3pzrb", "g3pArb", "g3pBrb", "g3pCra", "g3pDrb", "g3pEra", "g3pFrb", "g3pKrb", "g3pLra", "g3pMrb", "g4pUrb", "g4pVrb", "g4pWra", "g4parb", "g4pbrb", "g4pcra", "g4pkrb", "g4plra", "g4pmrb", "g5pdrb", "g5perb", "g5pfra", "g5pgrb", "g5phrb", "g5pjra", "g5pkra", "g5plrb", "g5pmrb", "g5pDra", "g5pErb", "g5pFrb", "g5pNra", "g5pPrb", "g5pQrb", "g6parb", "g6pbra", "g6pcrb", "g6pgrb", "g6phra", "g6pjrb", "g6pnrb", "g6pprb", "g6pqra", "g7parb", "g7pbrb", "g7pcra", "g7pgra", "g7phrb", "g7pjrb", "g7pura", "g7pvrb", "g7pwrb", "g7pNrb", "g7pPra", "g7pQra", "g8pAra", "g8pBrb", "g8pCrb", "g8pXra", "g8pYrb", "g8pZrb", "g8parb", "g8pbrb", "g8pcra", "g9para", "g9pbrb", "g9pcrb", "g9pgra", "g9phrb", "g9pjrb", "g9pkrb", "g9plrb", "g9pmra", "g9prra", "g9psrb", "g9ptrb", "g9purb", "g9pvra", "g9pwrb", "g9pRra", "g9pSrb", "g9pTrb", "g10pXrb", "g10pYra", "g10pZrb", "g10pdrb", "g10pera", "g10pfrb", "g10pnrb", "g10pprb", "g10pqra", "g10prrb", "g10psrb", "g10ptra", "g11pArb", "g11pBrb", "g11pCra", "g11pKrb", "g11pLrb", "g11pMra", "g12parb", "g12pbrb", "g12pcra", "g12prrb", "g12psra", "g12ptrb"
        ]


        let puntajeAdData = [
            "g1pArb", "g1pBrb", "g1pCra", "g2pRrb", "g2pSrb", "g2pTra", "g2pdrb", "g2perb", "g2pfra", "g2pnrb", "g2ppra", "g2pqrb", "g3parb", "g3pbra", "g3pcrb", "g3pxrb", "g3pyrb", "g3pzra", "g3pAra", "g3pBrb", "g3pCrb", "g3pKrb", "g3pLrb", "g3pMra", "g3pRrb", "g3pSrb", "g3pTra", "g4pGrb", "g4pHrb", "g4pJra", "g4pKrb", "g4pLra", "g4pMrb", "g4pRrb", "g4pSra", "g4pTrb", "g4para", "g4pbrb", "g4pcrb", "g4pdrb", "g4perb", "g4pfra", "g4pnrb", "g4ppra", "g4pqrb", "g5pgra", "g5phrb", "g5pjrb", "g5pxra", "g5pyrb", "g5pzrb", "g5pKra", "g5pLrb", "g5pMra", "g6pArb", "g6pBra", "g6pCrb", "g6pXra", "g6pYrb", "g6pZrb", "g6pgra", "g6phrb", "g6pjrb", "g6pkrb", "g6plrb", "g6pmra", "g7para", "g7pbrb", "g7pcrb", "g7pgrb", "g7phra", "g7pjrb", "g7pnrb", "g7ppra", "g7pqrb", "g7pArb", "g7pBra", "g7pCrb", "g7pDra", "g7pErb", "g7pFrb", "g8pArb", "g8pBra", "g8pCrb", "g8pDra", "g8pErb", "g8pFra", "g8pKra", "g8pLrb", "g8pMrb", "g9parb", "g9pbrb", "g9pcra", "g9pura", "g9pvrb", "g9pwrb", "g9pArb", "g9pBrb", "g9pCra", "g9pGrb", "g9pHra", "g9pJra", "g9pRrb", "g9pSrb", "g9pTra", "g10pKrb", "g10pLra", "g10pMra", "g10pdra", "g10perb", "g10pfrb", "g10pkrb", "g10plra", "g10pmrb", "g10pnra", "g10pprb", "g10pqrb", "g11prrb", "g11psrb", "g11ptra", "g11pArb", "g11pBra", "g11pCrb", "g11pDrb", "g11pEra", "g11pFra", "g11pKra", "g11pLrb", "g11pMrb", "g11pRrb", "g11pSra", "g11pTrb", "g12pAra", "g12pBra", "g12pCrb", "g12pGra", "g12pHrb", "g12pJrb", "g12pNrb", "g12pPrb", "g12pQra", "g12pRra", "g12pSrb", "g12pTrb", "g12pUra", "g12pVrb", "g12pWra", "g12pXrb", "g12pYrb", "g12pZra", "g12prrb", "g12psrb", "g12ptra", 
        ]        
            
    const responses = document.getElementsByClassName("respuesta");
    const edad = document.getElementById('edad').value;
    const genero = document.getElementById('genero').value;

    Array.from(responses).forEach(function(value, index, responses) {
        if (responses[index].checked === true) {
            responses[index].value = 1;
            ActName = responses[index].name; //selecciona el atributo name del input con la clase respuesta
            if (Array.from(puntajeAlData).includes(ActName)) {
                puntajeAL++;
            }
            if (Array.from(puntajeMeData).includes(ActName)) {
                puntajeMe++;
            }
            if(Array.from(puntajeCaData).includes(ActName)){
                puntajeCa++;
            }
            if(Array.from(puntajeCiData).includes(ActName)){
                puntajeCi++;
            }
            if(Array.from(puntajePeData).includes(ActName)){
                puntajePe++;
            }
            if(Array.from(puntajeArData).includes(ActName)){
                puntajeAr++;
            }
            if(Array.from(puntajeLiData).includes(ActName)){
                puntajeLi++;
            }
            if(Array.from(puntajeMuData).includes(ActName)){
                puntajeMu++;
            }
            if(Array.from(puntajeSoData).includes(ActName)){
                puntajeSo++;
            }
            if(Array.from(puntajeAdData).includes(ActName)){
                puntajeAd++;
            }
        }
    })
    console.log("AL: "+puntajeAL)
    console.log("Me: "+puntajeMe)
    console.log("Ca: "+puntajeCa)
    console.log("Ci: "+puntajeCi)
    console.log("Pe: "+puntajePe)
    console.log("Ar: "+puntajeAr)
    console.log("Li: "+puntajeLi)
    console.log("Mu: "+puntajeMu)
    console.log("So: "+puntajeSo)
    console.log("Ad: "+puntajeAd)

    function filter1() {
        console.log(edad);
    }
    function filter3() {
        console.log(edad);
    }

    const rangoEdad = {
        1: filter1,
        2: filter1,
        3: filter3,

    }

    

/*
    const selectGenero1 = {
        Masculino: 
        Femenino:
    }
*/
    const handler = rangoEdad[edad];

    handler(edad);
    
}

    </script>
</html>