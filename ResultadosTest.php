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
    responses = document.getElementsByName('respuesta');
    for (var i = 0; i < responses.length; i++) {
        //responses[i].value = 1;
        console.log(responses);
        if (responses[i].value === 1) {

            responses[i].checked = true;
        }
    }
</script>
<?php
//g${grupo}p${preguntaActual.letra}r${letraRespuesta}
//el nombre del parametro y la variable es decidieron en base a este formato
//g<<Numero del Grupo>>p<<Letra que funciona como indice de la situacion en el documento de excel original>>r<<Para saber si indica que prefiere o no la situacion propuesta>>
//Grupo 1
(isset($_POST['g1para']) && $_POST['g1para'] == 1) ? $g1para = 1 : $g1para = 0;
(isset($_POST['g1parb']) && $_POST['g1parb'] == 1) ? $g1parb = 1 : $g1parb = 0;
(isset($_POST['g1pbra']) && $_POST['g1pbra'] == 1) ? $g1pbra = 1 : $g1pbra = 0;
(isset($_POST['g1pbrb']) && $_POST['g1pbrb'] == 1) ? $g1pbrb = 1 : $g1pbrb = 0;
(isset($_POST['g1pcra']) && $_POST['g1pcra'] == 1) ? $g1pcra = 1 : $g1pcra = 0;
(isset($_POST['g1pcrb']) && $_POST['g1pcrb'] == 1) ? $g1pcrb = 1 : $g1pcrb = 0;
(isset($_POST['g1pdra']) && $_POST['g1pdra'] == 1) ? $g1pdra = 1 : $g1pdra = 0;
(isset($_POST['g1pdrb']) && $_POST['g1pdrb'] == 1) ? $g1pdrb = 1 : $g1pdrb = 0;
(isset($_POST['g1pera']) && $_POST['g1pera'] == 1) ? $g1pera = 1 : $g1pera = 0;
(isset($_POST['g1perb']) && $_POST['g1perb'] == 1) ? $g1perb = 1 : $g1perb = 0;
(isset($_POST['g1pfra']) && $_POST['g1pfra'] == 1) ? $g1pfra = 1 : $g1pfra = 0;
(isset($_POST['g1pfrb']) && $_POST['g1pfrb'] == 1) ? $g1pfrb = 1 : $g1pfrb = 0;
(isset($_POST['g1pgra']) && $_POST['g1pgra'] == 1) ? $g1pgra = 1 : $g1pgra = 0;
(isset($_POST['g1pgrb']) && $_POST['g1pgrb'] == 1) ? $g1pgrb = 1 : $g1pgrb = 0;
(isset($_POST['g1phra']) && $_POST['g1phra'] == 1) ? $g1phra = 1 : $g1phra = 0;
(isset($_POST['g1phrb']) && $_POST['g1phrb'] == 1) ? $g1phrb = 1 : $g1phrb = 0;
(isset($_POST['g1pjra']) && $_POST['g1pjra'] == 1) ? $g1pjra = 1 : $g1pjra = 0;
(isset($_POST['g1pjrb']) && $_POST['g1pjrb'] == 1) ? $g1pjrb = 1 : $g1pjrb = 0;
(isset($_POST['g1pkra']) && $_POST['g1pkra'] == 1) ? $g1pkra = 1 : $g1pkra = 0;
(isset($_POST['g1pkrb']) && $_POST['g1pkrb'] == 1) ? $g1pkrb = 1 : $g1pkrb = 0;
(isset($_POST['g1plra']) && $_POST['g1plra'] == 1) ? $g1plra = 1 : $g1plra = 0;
(isset($_POST['g1plrb']) && $_POST['g1plrb'] == 1) ? $g1plrb = 1 : $g1plrb = 0;
(isset($_POST['g1pmra']) && $_POST['g1pmra'] == 1) ? $g1pmra = 1 : $g1pmra = 0;
(isset($_POST['g1pmrb']) && $_POST['g1pmrb'] == 1) ? $g1pmrb = 1 : $g1pmrb = 0;
(isset($_POST['g1pnra']) && $_POST['g1pnra'] == 1) ? $g1pnra = 1 : $g1pnra = 0;
(isset($_POST['g1pnrb']) && $_POST['g1pnrb'] == 1) ? $g1pnrb = 1 : $g1pnrb = 0;
(isset($_POST['g1ppra']) && $_POST['g1ppra'] == 1) ? $g1ppra = 1 : $g1ppra = 0;
(isset($_POST['g1pprb']) && $_POST['g1pprb'] == 1) ? $g1pprb = 1 : $g1pprb = 0;
(isset($_POST['g1pqra']) && $_POST['g1pqra'] == 1) ? $g1pqra = 1 : $g1pqra = 0;
(isset($_POST['g1pqrb']) && $_POST['g1pqrb'] == 1) ? $g1pqrb = 1 : $g1pqrb = 0;
(isset($_POST['g1prra']) && $_POST['g1prra'] == 1) ? $g1prra = 1 : $g1prra = 0;
(isset($_POST['g1prrb']) && $_POST['g1prrb'] == 1) ? $g1prrb = 1 : $g1prrb = 0;
(isset($_POST['g1psra']) && $_POST['g1psra'] == 1) ? $g1psra = 1 : $g1psra = 0;
(isset($_POST['g1psrb']) && $_POST['g1psrb'] == 1) ? $g1psrb = 1 : $g1psrb = 0;
(isset($_POST['g1ptra']) && $_POST['g1ptra'] == 1) ? $g1ptra = 1 : $g1ptra = 0;
(isset($_POST['g1ptrb']) && $_POST['g1ptrb'] == 1) ? $g1ptrb = 1 : $g1ptrb = 0;
(isset($_POST['g1pura']) && $_POST['g1pura'] == 1) ? $g1pura = 1 : $g1pura = 0;
(isset($_POST['g1purb']) && $_POST['g1purb'] == 1) ? $g1purb = 1 : $g1purb = 0;
(isset($_POST['g1pvra']) && $_POST['g1pvra'] == 1) ? $g1pvra = 1 : $g1pvra = 0;
(isset($_POST['g1pvrb']) && $_POST['g1pvrb'] == 1) ? $g1pvrb = 1 : $g1pvrb = 0;
(isset($_POST['g1pwra']) && $_POST['g1pwra'] == 1) ? $g1pwra = 1 : $g1pwra = 0;
(isset($_POST['g1pwrb']) && $_POST['g1pwrb'] == 1) ? $g1pwrb = 1 : $g1pwrb = 0;
(isset($_POST['g1pxra']) && $_POST['g1pxra'] == 1) ? $g1pxra = 1 : $g1pxra = 0;
(isset($_POST['g1pxrb']) && $_POST['g1pxrb'] == 1) ? $g1pxrb = 1 : $g1pxrb = 0;
(isset($_POST['g1pyra']) && $_POST['g1pyra'] == 1) ? $g1pyra = 1 : $g1pyra = 0;
(isset($_POST['g1pyrb']) && $_POST['g1pyrb'] == 1) ? $g1pyrb = 1 : $g1pyrb = 0;
(isset($_POST['g1pzra']) && $_POST['g1pzra'] == 1) ? $g1pzra = 1 : $g1pzra = 0;
(isset($_POST['g1pzrb']) && $_POST['g1pzrb'] == 1) ? $g1pzrb = 1 : $g1pzrb = 0;
(isset($_POST['g1pAra']) && $_POST['g1pAra'] == 1) ? $g1pAra = 1 : $g1pAra = 0;
(isset($_POST['g1pArb']) && $_POST['g1pArb'] == 1) ? $g1pArb = 1 : $g1pArb = 0;
(isset($_POST['g1pBra']) && $_POST['g1pBra'] == 1) ? $g1pBra = 1 : $g1pBra = 0;
(isset($_POST['g1pBrb']) && $_POST['g1pBrb'] == 1) ? $g1pBrb = 1 : $g1pBrb = 0;
(isset($_POST['g1pCra']) && $_POST['g1pCra'] == 1) ? $g1pCra = 1 : $g1pCra = 0;
(isset($_POST['g1pCrb']) && $_POST['g1pCrb'] == 1) ? $g1pCrb = 1 : $g1pCrb = 0;
(isset($_POST['g1pDra']) && $_POST['g1pDra'] == 1) ? $g1pDra = 1 : $g1pDra = 0;
(isset($_POST['g1pDrb']) && $_POST['g1pDrb'] == 1) ? $g1pDrb = 1 : $g1pDrb = 0;
(isset($_POST['g1pEra']) && $_POST['g1pEra'] == 1) ? $g1pEra = 1 : $g1pEra = 0;
(isset($_POST['g1pErb']) && $_POST['g1pErb'] == 1) ? $g1pErb = 1 : $g1pErb = 0;
(isset($_POST['g1pFra']) && $_POST['g1pFra'] == 1) ? $g1pFra = 1 : $g1pFra = 0;
(isset($_POST['g1pFrb']) && $_POST['g1pFrb'] == 1) ? $g1pFrb = 1 : $g1pFrb = 0;
(isset($_POST['g1pGra']) && $_POST['g1pGra'] == 1) ? $g1pGra = 1 : $g1pGra = 0;
(isset($_POST['g1pGrb']) && $_POST['g1pGrb'] == 1) ? $g1pGrb = 1 : $g1pGrb = 0;
(isset($_POST['g1pHra']) && $_POST['g1pHra'] == 1) ? $g1pHra = 1 : $g1pHra = 0;
(isset($_POST['g1pHrb']) && $_POST['g1pHrb'] == 1) ? $g1pHrb = 1 : $g1pHrb = 0;
(isset($_POST['g1pJra']) && $_POST['g1pJra'] == 1) ? $g1pJra = 1 : $g1pJra = 0;
(isset($_POST['g1pJrb']) && $_POST['g1pJrb'] == 1) ? $g1pJrb = 1 : $g1pJrb = 0;
(isset($_POST['g1pKra']) && $_POST['g1pKra'] == 1) ? $g1pKra = 1 : $g1pKra = 0;
(isset($_POST['g1pKrb']) && $_POST['g1pKrb'] == 1) ? $g1pKrb = 1 : $g1pKrb = 0;
(isset($_POST['g1pLra']) && $_POST['g1pLra'] == 1) ? $g1pLra = 1 : $g1pLra = 0;
(isset($_POST['g1pLrb']) && $_POST['g1pLrb'] == 1) ? $g1pLrb = 1 : $g1pLrb = 0;
(isset($_POST['g1pMra']) && $_POST['g1pMra'] == 1) ? $g1pMra = 1 : $g1pMra = 0;
(isset($_POST['g1pMrb']) && $_POST['g1pMrb'] == 1) ? $g1pMrb = 1 : $g1pMrb = 0;
(isset($_POST['g1pNra']) && $_POST['g1pNra'] == 1) ? $g1pNra = 1 : $g1pNra = 0;
(isset($_POST['g1pNrb']) && $_POST['g1pNrb'] == 1) ? $g1pNrb = 1 : $g1pNrb = 0;
(isset($_POST['g1pPra']) && $_POST['g1pPra'] == 1) ? $g1pPra = 1 : $g1pPra = 0;
(isset($_POST['g1pPrb']) && $_POST['g1pPrb'] == 1) ? $g1pPrb = 1 : $g1pPrb = 0;
(isset($_POST['g1pQra']) && $_POST['g1pQra'] == 1) ? $g1pQra = 1 : $g1pQra = 0;
(isset($_POST['g1pQrb']) && $_POST['g1pQrb'] == 1) ? $g1pQrb = 1 : $g1pQrb = 0;
(isset($_POST['g1pRra']) && $_POST['g1pRra'] == 1) ? $g1pRra = 1 : $g1pRra = 0;
(isset($_POST['g1pRrb']) && $_POST['g1pRrb'] == 1) ? $g1pRrb = 1 : $g1pRrb = 0;
(isset($_POST['g1pSra']) && $_POST['g1pSra'] == 1) ? $g1pSra = 1 : $g1pSra = 0;
(isset($_POST['g1pSrb']) && $_POST['g1pSrb'] == 1) ? $g1pSrb = 1 : $g1pSrb = 0;
(isset($_POST['g1pTra']) && $_POST['g1pTra'] == 1) ? $g1pTra = 1 : $g1pTra = 0;
(isset($_POST['g1pTrb']) && $_POST['g1pTrb'] == 1) ? $g1pTrb = 1 : $g1pTrb = 0;

//Grupo 2
(isset($_POST['g2pAra']) && $_POST['g2pAra'] == 1) ? $g2pAra = 1 : $g2pAra = 0;
(isset($_POST['g2pArb']) && $_POST['g2pArb'] == 1) ? $g2pArb = 1 : $g2pArb = 0;
(isset($_POST['g2pBra']) && $_POST['g2pBra'] == 1) ? $g2pBra = 1 : $g2pBra = 0;
(isset($_POST['g2pBrb']) && $_POST['g2pBrb'] == 1) ? $g2pBrb = 1 : $g2pBrb = 0;
(isset($_POST['g2pCra']) && $_POST['g2pCra'] == 1) ? $g2pCra = 1 : $g2pCra = 0;
(isset($_POST['g2pCrb']) && $_POST['g2pCrb'] == 1) ? $g2pCrb = 1 : $g2pCrb = 0;
(isset($_POST['g2pDra']) && $_POST['g2pDra'] == 1) ? $g2pDra = 1 : $g2pDra = 0;
(isset($_POST['g2pDrb']) && $_POST['g2pDrb'] == 1) ? $g2pDrb = 1 : $g2pDrb = 0;
(isset($_POST['g2pEra']) && $_POST['g2pEra'] == 1) ? $g2pEra = 1 : $g2pEra = 0;
(isset($_POST['g2pErb']) && $_POST['g2pErb'] == 1) ? $g2pErb = 1 : $g2pErb = 0;
(isset($_POST['g2pFra']) && $_POST['g2pFra'] == 1) ? $g2pFra = 1 : $g2pFra = 0;
(isset($_POST['g2pFrb']) && $_POST['g2pFrb'] == 1) ? $g2pFrb = 1 : $g2pFrb = 0;
(isset($_POST['g2pGra']) && $_POST['g2pGra'] == 1) ? $g2pGra = 1 : $g2pGra = 0;
(isset($_POST['g2pGrb']) && $_POST['g2pGrb'] == 1) ? $g2pGrb = 1 : $g2pGrb = 0;
(isset($_POST['g2pHra']) && $_POST['g2pHra'] == 1) ? $g2pHra = 1 : $g2pHra = 0;
(isset($_POST['g2pHrb']) && $_POST['g2pHrb'] == 1) ? $g2pHrb = 1 : $g2pHrb = 0;
(isset($_POST['g2pJra']) && $_POST['g2pJra'] == 1) ? $g2pJra = 1 : $g2pJra = 0;
(isset($_POST['g2pJrb']) && $_POST['g2pJrb'] == 1) ? $g2pJrb = 1 : $g2pJrb = 0;
(isset($_POST['g2pKra']) && $_POST['g2pKra'] == 1) ? $g2pKra = 1 : $g2pKra = 0;
(isset($_POST['g2pKrb']) && $_POST['g2pKrb'] == 1) ? $g2pKrb = 1 : $g2pKrb = 0;
(isset($_POST['g2pLra']) && $_POST['g2pLra'] == 1) ? $g2pLra = 1 : $g2pLra = 0;
(isset($_POST['g2pLrb']) && $_POST['g2pLrb'] == 1) ? $g2pLrb = 1 : $g2pLrb = 0;
(isset($_POST['g2pMra']) && $_POST['g2pMra'] == 1) ? $g2pMra = 1 : $g2pMra = 0;
(isset($_POST['g2pMrb']) && $_POST['g2pMrb'] == 1) ? $g2pMrb = 1 : $g2pMrb = 0;
(isset($_POST['g2pNra']) && $_POST['g2pNra'] == 1) ? $g2pNra = 1 : $g2pNra = 0;
(isset($_POST['g2pNrb']) && $_POST['g2pNrb'] == 1) ? $g2pNrb = 1 : $g2pNrb = 0;
(isset($_POST['g2pPra']) && $_POST['g2pPra'] == 1) ? $g2pPra = 1 : $g2pPra = 0;
(isset($_POST['g2pPrb']) && $_POST['g2pPrb'] == 1) ? $g2pPrb = 1 : $g2pPrb = 0;
(isset($_POST['g2pQra']) && $_POST['g2pQra'] == 1) ? $g2pQra = 1 : $g2pQra = 0;
(isset($_POST['g2pQrb']) && $_POST['g2pQrb'] == 1) ? $g2pQrb = 1 : $g2pQrb = 0;
(isset($_POST['g2pRra']) && $_POST['g2pRra'] == 1) ? $g2pRra = 1 : $g2pRra = 0;
(isset($_POST['g2pRrb']) && $_POST['g2pRrb'] == 1) ? $g2pRrb = 1 : $g2pRrb = 0;
(isset($_POST['g2pSra']) && $_POST['g2pSra'] == 1) ? $g2pSra = 1 : $g2pSra = 0;
(isset($_POST['g2pSrb']) && $_POST['g2pSrb'] == 1) ? $g2pSrb = 1 : $g2pSrb = 0;
(isset($_POST['g2pTra']) && $_POST['g2pTra'] == 1) ? $g2pTra = 1 : $g2pTra = 0;
(isset($_POST['g2pTrb']) && $_POST['g2pTrb'] == 1) ? $g2pTrb = 1 : $g2pTrb = 0;
(isset($_POST['g2pUra']) && $_POST['g2pUra'] == 1) ? $g2pUra = 1 : $g2pUra = 0;
(isset($_POST['g2pUrb']) && $_POST['g2pUrb'] == 1) ? $g2pUrb = 1 : $g2pUrb = 0;
(isset($_POST['g2pVra']) && $_POST['g2pVra'] == 1) ? $g2pVra = 1 : $g2pVra = 0;
(isset($_POST['g2pVrb']) && $_POST['g2pVrb'] == 1) ? $g2pVrb = 1 : $g2pVrb = 0;
(isset($_POST['g2pWra']) && $_POST['g2pWra'] == 1) ? $g2pWra = 1 : $g2pWra = 0;
(isset($_POST['g2pWrb']) && $_POST['g2pWrb'] == 1) ? $g2pWrb = 1 : $g2pWrb = 0;
(isset($_POST['g2pXra']) && $_POST['g2pXra'] == 1) ? $g2pXra = 1 : $g2pXra = 0;
(isset($_POST['g2pXrb']) && $_POST['g2pXrb'] == 1) ? $g2pXrb = 1 : $g2pXrb = 0;
(isset($_POST['g2pYra']) && $_POST['g2pYra'] == 1) ? $g2pYra = 1 : $g2pYra = 0;
(isset($_POST['g2pYrb']) && $_POST['g2pYrb'] == 1) ? $g2pYrb = 1 : $g2pYrb = 0;
(isset($_POST['g2pZra']) && $_POST['g2pZra'] == 1) ? $g2pZra = 1 : $g2pZra = 0;
(isset($_POST['g2pZrb']) && $_POST['g2pZrb'] == 1) ? $g2pZrb = 1 : $g2pZrb = 0;
(isset($_POST['g2para']) && $_POST['g2para'] == 1) ? $g2para = 1 : $g2para = 0;
(isset($_POST['g2parb']) && $_POST['g2parb'] == 1) ? $g2parb = 1 : $g2parb = 0;
(isset($_POST['g2pbra']) && $_POST['g2pbra'] == 1) ? $g2pbra = 1 : $g2pbra = 0;
(isset($_POST['g2pbrb']) && $_POST['g2pbrb'] == 1) ? $g2pbrb = 1 : $g2pbrb = 0;
(isset($_POST['g2pcra']) && $_POST['g2pcra'] == 1) ? $g2pcra = 1 : $g2pcra = 0;
(isset($_POST['g2pcrb']) && $_POST['g2pcrb'] == 1) ? $g2pcrb = 1 : $g2pcrb = 0;
(isset($_POST['g2pdra']) && $_POST['g2pdra'] == 1) ? $g2pdra = 1 : $g2pdra = 0;
(isset($_POST['g2pdrb']) && $_POST['g2pdrb'] == 1) ? $g2pdrb = 1 : $g2pdrb = 0;
(isset($_POST['g2pera']) && $_POST['g2pera'] == 1) ? $g2pera = 1 : $g2pera = 0;
(isset($_POST['g2perb']) && $_POST['g2perb'] == 1) ? $g2perb = 1 : $g2perb = 0;
(isset($_POST['g2pfra']) && $_POST['g2pfra'] == 1) ? $g2pfra = 1 : $g2pfra = 0;
(isset($_POST['g2pfrb']) && $_POST['g2pfrb'] == 1) ? $g2pfrb = 1 : $g2pfrb = 0;
(isset($_POST['g2pgra']) && $_POST['g2pgra'] == 1) ? $g2pgra = 1 : $g2pgra = 0;
(isset($_POST['g2pgrb']) && $_POST['g2pgrb'] == 1) ? $g2pgrb = 1 : $g2pgrb = 0;
(isset($_POST['g2phra']) && $_POST['g2phra'] == 1) ? $g2phra = 1 : $g2phra = 0;
(isset($_POST['g2phrb']) && $_POST['g2phrb'] == 1) ? $g2phrb = 1 : $g2phrb = 0;
(isset($_POST['g2pjra']) && $_POST['g2pjra'] == 1) ? $g2pjra = 1 : $g2pjra = 0;
(isset($_POST['g2pjrb']) && $_POST['g2pjrb'] == 1) ? $g2pjrb = 1 : $g2pjrb = 0;
(isset($_POST['g2pkra']) && $_POST['g2pkra'] == 1) ? $g2pkra = 1 : $g2pkra = 0;
(isset($_POST['g2pkrb']) && $_POST['g2pkrb'] == 1) ? $g2pkrb = 1 : $g2pkrb = 0;
(isset($_POST['g2plra']) && $_POST['g2plra'] == 1) ? $g2plra = 1 : $g2plra = 0;
(isset($_POST['g2plrb']) && $_POST['g2plrb'] == 1) ? $g2plrb = 1 : $g2plrb = 0;
(isset($_POST['g2pmra']) && $_POST['g2pmra'] == 1) ? $g2pmra = 1 : $g2pmra = 0;
(isset($_POST['g2pmrb']) && $_POST['g2pmrb'] == 1) ? $g2pmrb = 1 : $g2pmrb = 0;
(isset($_POST['g2pnra']) && $_POST['g2pnra'] == 1) ? $g2pnra = 1 : $g2pnra = 0;
(isset($_POST['g2pnrb']) && $_POST['g2pnrb'] == 1) ? $g2pnrb = 1 : $g2pnrb = 0;
(isset($_POST['g2ppra']) && $_POST['g2ppra'] == 1) ? $g2ppra = 1 : $g2ppra = 0;
(isset($_POST['g2pprb']) && $_POST['g2pprb'] == 1) ? $g2pprb = 1 : $g2pprb = 0;
(isset($_POST['g2pqra']) && $_POST['g2pqra'] == 1) ? $g2pqra = 1 : $g2pqra = 0;
(isset($_POST['g2pqrb']) && $_POST['g2pqrb'] == 1) ? $g2pqrb = 1 : $g2pqrb = 0;
(isset($_POST['g2prra']) && $_POST['g2prra'] == 1) ? $g2prra = 1 : $g2prra = 0;
(isset($_POST['g2prrb']) && $_POST['g2prrb'] == 1) ? $g2prrb = 1 : $g2prrb = 0;
(isset($_POST['g2psra']) && $_POST['g2psra'] == 1) ? $g2psra = 1 : $g2psra = 0;
(isset($_POST['g2psrb']) && $_POST['g2psrb'] == 1) ? $g2psrb = 1 : $g2psrb = 0;
(isset($_POST['g2ptra']) && $_POST['g2ptra'] == 1) ? $g2ptra = 1 : $g2ptra = 0;
(isset($_POST['g2ptrb']) && $_POST['g2ptrb'] == 1) ? $g2ptrb = 1 : $g2ptrb = 0;

//Grupo 3
(isset($_POST['g3para']) && $_POST['g3para'] == 1) ? $g3para = 1 : $g3para = 0;
(isset($_POST['g3parb']) && $_POST['g3parb'] == 1) ? $g3parb = 1 : $g3parb = 0;
(isset($_POST['g3pbra']) && $_POST['g3pbra'] == 1) ? $g3pbra = 1 : $g3pbra = 0;
(isset($_POST['g3pbrb']) && $_POST['g3pbrb'] == 1) ? $g3pbrb = 1 : $g3pbrb = 0;
(isset($_POST['g3pcra']) && $_POST['g3pcra'] == 1) ? $g3pcra = 1 : $g3pcra = 0;
(isset($_POST['g3pcrb']) && $_POST['g3pcrb'] == 1) ? $g3pcrb = 1 : $g3pcrb = 0;
(isset($_POST['g3pdra']) && $_POST['g3pdra'] == 1) ? $g3pdra = 1 : $g3pdra = 0;
(isset($_POST['g3pdrb']) && $_POST['g3pdrb'] == 1) ? $g3pdrb = 1 : $g3pdrb = 0;
(isset($_POST['g3pera']) && $_POST['g3pera'] == 1) ? $g3pera = 1 : $g3pera = 0;
(isset($_POST['g3perb']) && $_POST['g3perb'] == 1) ? $g3perb = 1 : $g3perb = 0;
(isset($_POST['g3pfra']) && $_POST['g3pfra'] == 1) ? $g3pfra = 1 : $g3pfra = 0;
(isset($_POST['g3pfrb']) && $_POST['g3pfrb'] == 1) ? $g3pfrb = 1 : $g3pfrb = 0;
(isset($_POST['g3pgra']) && $_POST['g3pgra'] == 1) ? $g3pgra = 1 : $g3pgra = 0;
(isset($_POST['g3pgrb']) && $_POST['g3pgrb'] == 1) ? $g3pgrb = 1 : $g3pgrb = 0;
(isset($_POST['g3phra']) && $_POST['g3phra'] == 1) ? $g3phra = 1 : $g3phra = 0;
(isset($_POST['g3phrb']) && $_POST['g3phrb'] == 1) ? $g3phrb = 1 : $g3phrb = 0;
(isset($_POST['g3pjra']) && $_POST['g3pjra'] == 1) ? $g3pjra = 1 : $g3pjra = 0;
(isset($_POST['g3pjrb']) && $_POST['g3pjrb'] == 1) ? $g3pjrb = 1 : $g3pjrb = 0;
(isset($_POST['g3pkra']) && $_POST['g3pkra'] == 1) ? $g3pkra = 1 : $g3pkra = 0;
(isset($_POST['g3pkrb']) && $_POST['g3pkrb'] == 1) ? $g3pkrb = 1 : $g3pkrb = 0;
(isset($_POST['g3plra']) && $_POST['g3plra'] == 1) ? $g3plra = 1 : $g3plra = 0;
(isset($_POST['g3plrb']) && $_POST['g3plrb'] == 1) ? $g3plrb = 1 : $g3plrb = 0;
(isset($_POST['g3pmra']) && $_POST['g3pmra'] == 1) ? $g3pmra = 1 : $g3pmra = 0;
(isset($_POST['g3pmrb']) && $_POST['g3pmrb'] == 1) ? $g3pmrb = 1 : $g3pmrb = 0;
(isset($_POST['g3pnra']) && $_POST['g3pnra'] == 1) ? $g3pnra = 1 : $g3pnra = 0;
(isset($_POST['g3pnrb']) && $_POST['g3pnrb'] == 1) ? $g3pnrb = 1 : $g3pnrb = 0;
(isset($_POST['g3ppra']) && $_POST['g3ppra'] == 1) ? $g3ppra = 1 : $g3ppra = 0;
(isset($_POST['g3pprb']) && $_POST['g3pprb'] == 1) ? $g3pprb = 1 : $g3pprb = 0;
(isset($_POST['g3pqra']) && $_POST['g3pqra'] == 1) ? $g3pqra = 1 : $g3pqra = 0;
(isset($_POST['g3pqrb']) && $_POST['g3pqrb'] == 1) ? $g3pqrb = 1 : $g3pqrb = 0;
(isset($_POST['g3prra']) && $_POST['g3prra'] == 1) ? $g3prra = 1 : $g3prra = 0;
(isset($_POST['g3prrb']) && $_POST['g3prrb'] == 1) ? $g3prrb = 1 : $g3prrb = 0;
(isset($_POST['g3psra']) && $_POST['g3psra'] == 1) ? $g3psra = 1 : $g3psra = 0;
(isset($_POST['g3psrb']) && $_POST['g3psrb'] == 1) ? $g3psrb = 1 : $g3psrb = 0;
(isset($_POST['g3ptra']) && $_POST['g3ptra'] == 1) ? $g3ptra = 1 : $g3ptra = 0;
(isset($_POST['g3ptrb']) && $_POST['g3ptrb'] == 1) ? $g3ptrb = 1 : $g3ptrb = 0;
(isset($_POST['g3pura']) && $_POST['g3pura'] == 1) ? $g3pura = 1 : $g3pura = 0;
(isset($_POST['g3purb']) && $_POST['g3purb'] == 1) ? $g3purb = 1 : $g3purb = 0;
(isset($_POST['g3pvra']) && $_POST['g3pvra'] == 1) ? $g3pvra = 1 : $g3pvra = 0;
(isset($_POST['g3pvrb']) && $_POST['g3pvrb'] == 1) ? $g3pvrb = 1 : $g3pvrb = 0;
(isset($_POST['g3pwra']) && $_POST['g3pwra'] == 1) ? $g3pwra = 1 : $g3pwra = 0;
(isset($_POST['g3pwrb']) && $_POST['g3pwrb'] == 1) ? $g3pwrb = 1 : $g3pwrb = 0;
(isset($_POST['g3pxra']) && $_POST['g3pxra'] == 1) ? $g3pxra = 1 : $g3pxra = 0;
(isset($_POST['g3pxrb']) && $_POST['g3pxrb'] == 1) ? $g3pxrb = 1 : $g3pxrb = 0;
(isset($_POST['g3pyra']) && $_POST['g3pyra'] == 1) ? $g3pyra = 1 : $g3pyra = 0;
(isset($_POST['g3pyrb']) && $_POST['g3pyrb'] == 1) ? $g3pyrb = 1 : $g3pyrb = 0;
(isset($_POST['g3pzra']) && $_POST['g3pzra'] == 1) ? $g3pzra = 1 : $g3pzra = 0;
(isset($_POST['g3pzrb']) && $_POST['g3pzrb'] == 1) ? $g3pzrb = 1 : $g3pzrb = 0;
(isset($_POST['g3pAra']) && $_POST['g3pAra'] == 1) ? $g3pAra = 1 : $g3pAra = 0;
(isset($_POST['g3pArb']) && $_POST['g3pArb'] == 1) ? $g3pArb = 1 : $g3pArb = 0;
(isset($_POST['g3pBra']) && $_POST['g3pBra'] == 1) ? $g3pBra = 1 : $g3pBra = 0;
(isset($_POST['g3pBrb']) && $_POST['g3pBrb'] == 1) ? $g3pBrb = 1 : $g3pBrb = 0;
(isset($_POST['g3pCra']) && $_POST['g3pCra'] == 1) ? $g3pCra = 1 : $g3pCra = 0;
(isset($_POST['g3pCrb']) && $_POST['g3pCrb'] == 1) ? $g3pCrb = 1 : $g3pCrb = 0;
(isset($_POST['g3pDra']) && $_POST['g3pDra'] == 1) ? $g3pDra = 1 : $g3pDra = 0;
(isset($_POST['g3pDrb']) && $_POST['g3pDrb'] == 1) ? $g3pDrb = 1 : $g3pDrb = 0;
(isset($_POST['g3pEra']) && $_POST['g3pEra'] == 1) ? $g3pEra = 1 : $g3pEra = 0;
(isset($_POST['g3pErb']) && $_POST['g3pErb'] == 1) ? $g3pErb = 1 : $g3pErb = 0;
(isset($_POST['g3pFra']) && $_POST['g3pFra'] == 1) ? $g3pFra = 1 : $g3pFra = 0;
(isset($_POST['g3pFrb']) && $_POST['g3pFrb'] == 1) ? $g3pFrb = 1 : $g3pFrb = 0;
(isset($_POST['g3pGra']) && $_POST['g3pGra'] == 1) ? $g3pGra = 1 : $g3pGra = 0;
(isset($_POST['g3pGrb']) && $_POST['g3pGrb'] == 1) ? $g3pGrb = 1 : $g3pGrb = 0;
(isset($_POST['g3pHra']) && $_POST['g3pHra'] == 1) ? $g3pHra = 1 : $g3pHra = 0;
(isset($_POST['g3pHrb']) && $_POST['g3pHrb'] == 1) ? $g3pHrb = 1 : $g3pHrb = 0;
(isset($_POST['g3pJra']) && $_POST['g3pJra'] == 1) ? $g3pJra = 1 : $g3pJra = 0;
(isset($_POST['g3pJrb']) && $_POST['g3pJrb'] == 1) ? $g3pJrb = 1 : $g3pJrb = 0;
(isset($_POST['g3pKra']) && $_POST['g3pKra'] == 1) ? $g3pKra = 1 : $g3pKra = 0;
(isset($_POST['g3pKrb']) && $_POST['g3pKrb'] == 1) ? $g3pKrb = 1 : $g3pKrb = 0;
(isset($_POST['g3pLra']) && $_POST['g3pLra'] == 1) ? $g3pLra = 1 : $g3pLra = 0;
(isset($_POST['g3pLrb']) && $_POST['g3pLrb'] == 1) ? $g3pLrb = 1 : $g3pLrb = 0;
(isset($_POST['g3pMra']) && $_POST['g3pMra'] == 1) ? $g3pMra = 1 : $g3pMra = 0;
(isset($_POST['g3pMrb']) && $_POST['g3pMrb'] == 1) ? $g3pMrb = 1 : $g3pMrb = 0;
(isset($_POST['g3pNra']) && $_POST['g3pNra'] == 1) ? $g3pNra = 1 : $g3pNra = 0;
(isset($_POST['g3pNrb']) && $_POST['g3pNrb'] == 1) ? $g3pNrb = 1 : $g3pNrb = 0;
(isset($_POST['g3pPra']) && $_POST['g3pPra'] == 1) ? $g3pPra = 1 : $g3pPra = 0;
(isset($_POST['g3pPrb']) && $_POST['g3pPrb'] == 1) ? $g3pPrb = 1 : $g3pPrb = 0;
(isset($_POST['g3pQra']) && $_POST['g3pQra'] == 1) ? $g3pQra = 1 : $g3pQra = 0;
(isset($_POST['g3pQrb']) && $_POST['g3pQrb'] == 1) ? $g3pQrb = 1 : $g3pQrb = 0;
(isset($_POST['g3pRra']) && $_POST['g3pRra'] == 1) ? $g3pRra = 1 : $g3pRra = 0;
(isset($_POST['g3pRrb']) && $_POST['g3pRrb'] == 1) ? $g3pRrb = 1 : $g3pRrb = 0;
(isset($_POST['g3pSra']) && $_POST['g3pSra'] == 1) ? $g3pSra = 1 : $g3pSra = 0;
(isset($_POST['g3pSrb']) && $_POST['g3pSrb'] == 1) ? $g3pSrb = 1 : $g3pSrb = 0;
(isset($_POST['g3pTra']) && $_POST['g3pTra'] == 1) ? $g3pTra = 1 : $g3pTra = 0;
(isset($_POST['g3pTrb']) && $_POST['g3pTrb'] == 1) ? $g3pTrb = 1 : $g3pTrb = 0;

//Grupo 4
(isset($_POST['g4pAra']) && $_POST['g4pAra'] == 1) ? $g4pAra = 1 : $g4pAra = 0;
(isset($_POST['g4pArb']) && $_POST['g4pArb'] == 1) ? $g4pArb = 1 : $g4pArb = 0;
(isset($_POST['g4pBra']) && $_POST['g4pBra'] == 1) ? $g4pBra = 1 : $g4pBra = 0;
(isset($_POST['g4pBrb']) && $_POST['g4pBrb'] == 1) ? $g4pBrb = 1 : $g4pBrb = 0;
(isset($_POST['g4pCra']) && $_POST['g4pCra'] == 1) ? $g4pCra = 1 : $g4pCra = 0;
(isset($_POST['g4pCrb']) && $_POST['g4pCrb'] == 1) ? $g4pCrb = 1 : $g4pCrb = 0;
(isset($_POST['g4pDra']) && $_POST['g4pDra'] == 1) ? $g4pDra = 1 : $g4pDra = 0;
(isset($_POST['g4pDrb']) && $_POST['g4pDrb'] == 1) ? $g4pDrb = 1 : $g4pDrb = 0;
(isset($_POST['g4pEra']) && $_POST['g4pEra'] == 1) ? $g4pEra = 1 : $g4pEra = 0;
(isset($_POST['g4pErb']) && $_POST['g4pErb'] == 1) ? $g4pErb = 1 : $g4pErb = 0;
(isset($_POST['g4pFra']) && $_POST['g4pFra'] == 1) ? $g4pFra = 1 : $g4pFra = 0;
(isset($_POST['g4pFrb']) && $_POST['g4pFrb'] == 1) ? $g4pFrb = 1 : $g4pFrb = 0;
(isset($_POST['g4pGra']) && $_POST['g4pGra'] == 1) ? $g4pGra = 1 : $g4pGra = 0;
(isset($_POST['g4pGrb']) && $_POST['g4pGrb'] == 1) ? $g4pGrb = 1 : $g4pGrb = 0;
(isset($_POST['g4pHra']) && $_POST['g4pHra'] == 1) ? $g4pHra = 1 : $g4pHra = 0;
(isset($_POST['g4pHrb']) && $_POST['g4pHrb'] == 1) ? $g4pHrb = 1 : $g4pHrb = 0;
(isset($_POST['g4pJra']) && $_POST['g4pJra'] == 1) ? $g4pJra = 1 : $g4pJra = 0;
(isset($_POST['g4pJrb']) && $_POST['g4pJrb'] == 1) ? $g4pJrb = 1 : $g4pJrb = 0;
(isset($_POST['g4pKra']) && $_POST['g4pKra'] == 1) ? $g4pKra = 1 : $g4pKra = 0;
(isset($_POST['g4pKrb']) && $_POST['g4pKrb'] == 1) ? $g4pKrb = 1 : $g4pKrb = 0;
(isset($_POST['g4pLra']) && $_POST['g4pLra'] == 1) ? $g4pLra = 1 : $g4pLra = 0;
(isset($_POST['g4pLrb']) && $_POST['g4pLrb'] == 1) ? $g4pLrb = 1 : $g4pLrb = 0;
(isset($_POST['g4pMra']) && $_POST['g4pMra'] == 1) ? $g4pMra = 1 : $g4pMra = 0;
(isset($_POST['g4pMrb']) && $_POST['g4pMrb'] == 1) ? $g4pMrb = 1 : $g4pMrb = 0;
(isset($_POST['g4pNra']) && $_POST['g4pNra'] == 1) ? $g4pNra = 1 : $g4pNra = 0;
(isset($_POST['g4pNrb']) && $_POST['g4pNrb'] == 1) ? $g4pNrb = 1 : $g4pNrb = 0;
(isset($_POST['g4pPra']) && $_POST['g4pPra'] == 1) ? $g4pPra = 1 : $g4pPra = 0;
(isset($_POST['g4pPrb']) && $_POST['g4pPrb'] == 1) ? $g4pPrb = 1 : $g4pPrb = 0;
(isset($_POST['g4pQra']) && $_POST['g4pQra'] == 1) ? $g4pQra = 1 : $g4pQra = 0;
(isset($_POST['g4pQrb']) && $_POST['g4pQrb'] == 1) ? $g4pQrb = 1 : $g4pQrb = 0;
(isset($_POST['g4pRra']) && $_POST['g4pRra'] == 1) ? $g4pRra = 1 : $g4pRra = 0;
(isset($_POST['g4pRrb']) && $_POST['g4pRrb'] == 1) ? $g4pRrb = 1 : $g4pRrb = 0;
(isset($_POST['g4pSra']) && $_POST['g4pSra'] == 1) ? $g4pSra = 1 : $g4pSra = 0;
(isset($_POST['g4pSrb']) && $_POST['g4pSrb'] == 1) ? $g4pSrb = 1 : $g4pSrb = 0;
(isset($_POST['g4pTra']) && $_POST['g4pTra'] == 1) ? $g4pTra = 1 : $g4pTra = 0;
(isset($_POST['g4pTrb']) && $_POST['g4pTrb'] == 1) ? $g4pTrb = 1 : $g4pTrb = 0;
(isset($_POST['g4pUra']) && $_POST['g4pUra'] == 1) ? $g4pUra = 1 : $g4pUra = 0;
(isset($_POST['g4pUrb']) && $_POST['g4pUrb'] == 1) ? $g4pUrb = 1 : $g4pUrb = 0;
(isset($_POST['g4pVra']) && $_POST['g4pVra'] == 1) ? $g4pVra = 1 : $g4pVra = 0;
(isset($_POST['g4pVrb']) && $_POST['g4pVrb'] == 1) ? $g4pVrb = 1 : $g4pVrb = 0;
(isset($_POST['g4pWra']) && $_POST['g4pWra'] == 1) ? $g4pWra = 1 : $g4pWra = 0;
(isset($_POST['g4pWrb']) && $_POST['g4pWrb'] == 1) ? $g4pWrb = 1 : $g4pWrb = 0;
(isset($_POST['g4pXra']) && $_POST['g4pXra'] == 1) ? $g4pXra = 1 : $g4pXra = 0;
(isset($_POST['g4pXrb']) && $_POST['g4pXrb'] == 1) ? $g4pXrb = 1 : $g4pXrb = 0;
(isset($_POST['g4pYra']) && $_POST['g4pYra'] == 1) ? $g4pYra = 1 : $g4pYra = 0;
(isset($_POST['g4pYrb']) && $_POST['g4pYrb'] == 1) ? $g4pYrb = 1 : $g4pYrb = 0;
(isset($_POST['g4pZra']) && $_POST['g4pZra'] == 1) ? $g4pZra = 1 : $g4pZra = 0;
(isset($_POST['g4pZrb']) && $_POST['g4pZrb'] == 1) ? $g4pZrb = 1 : $g4pZrb = 0;
(isset($_POST['g4para']) && $_POST['g4para'] == 1) ? $g4para = 1 : $g4para = 0;
(isset($_POST['g4parb']) && $_POST['g4parb'] == 1) ? $g4parb = 1 : $g4parb = 0;
(isset($_POST['g4pbra']) && $_POST['g4pbra'] == 1) ? $g4pbra = 1 : $g4pbra = 0;
(isset($_POST['g4pbrb']) && $_POST['g4pbrb'] == 1) ? $g4pbrb = 1 : $g4pbrb = 0;
(isset($_POST['g4pcra']) && $_POST['g4pcra'] == 1) ? $g4pcra = 1 : $g4pcra = 0;
(isset($_POST['g4pcrb']) && $_POST['g4pcrb'] == 1) ? $g4pcrb = 1 : $g4pcrb = 0;
(isset($_POST['g4pdra']) && $_POST['g4pdra'] == 1) ? $g4pdra = 1 : $g4pdra = 0;
(isset($_POST['g4pdrb']) && $_POST['g4pdrb'] == 1) ? $g4pdrb = 1 : $g4pdrb = 0;
(isset($_POST['g4pera']) && $_POST['g4pera'] == 1) ? $g4pera = 1 : $g4pera = 0;
(isset($_POST['g4perb']) && $_POST['g4perb'] == 1) ? $g4perb = 1 : $g4perb = 0;
(isset($_POST['g4pfra']) && $_POST['g4pfra'] == 1) ? $g4pfra = 1 : $g4pfra = 0;
(isset($_POST['g4pfrb']) && $_POST['g4pfrb'] == 1) ? $g4pfrb = 1 : $g4pfrb = 0;
(isset($_POST['g4pgra']) && $_POST['g4pgra'] == 1) ? $g4pgra = 1 : $g4pgra = 0;
(isset($_POST['g4pgrb']) && $_POST['g4pgrb'] == 1) ? $g4pgrb = 1 : $g4pgrb = 0;
(isset($_POST['g4phra']) && $_POST['g4phra'] == 1) ? $g4phra = 1 : $g4phra = 0;
(isset($_POST['g4phrb']) && $_POST['g4phrb'] == 1) ? $g4phrb = 1 : $g4phrb = 0;
(isset($_POST['g4pjra']) && $_POST['g4pjra'] == 1) ? $g4pjra = 1 : $g4pjra = 0;
(isset($_POST['g4pjrb']) && $_POST['g4pjrb'] == 1) ? $g4pjrb = 1 : $g4pjrb = 0;
(isset($_POST['g4pkra']) && $_POST['g4pkra'] == 1) ? $g4pkra = 1 : $g4pkra = 0;
(isset($_POST['g4pkrb']) && $_POST['g4pkrb'] == 1) ? $g4pkrb = 1 : $g4pkrb = 0;
(isset($_POST['g4plra']) && $_POST['g4plra'] == 1) ? $g4plra = 1 : $g4plra = 0;
(isset($_POST['g4plrb']) && $_POST['g4plrb'] == 1) ? $g4plrb = 1 : $g4plrb = 0;
(isset($_POST['g4pmra']) && $_POST['g4pmra'] == 1) ? $g4pmra = 1 : $g4pmra = 0;
(isset($_POST['g4pmrb']) && $_POST['g4pmrb'] == 1) ? $g4pmrb = 1 : $g4pmrb = 0;
(isset($_POST['g4pnra']) && $_POST['g4pnra'] == 1) ? $g4pnra = 1 : $g4pnra = 0;
(isset($_POST['g4pnrb']) && $_POST['g4pnrb'] == 1) ? $g4pnrb = 1 : $g4pnrb = 0;
(isset($_POST['g4ppra']) && $_POST['g4ppra'] == 1) ? $g4ppra = 1 : $g4ppra = 0;
(isset($_POST['g4pprb']) && $_POST['g4pprb'] == 1) ? $g4pprb = 1 : $g4pprb = 0;
(isset($_POST['g4pqra']) && $_POST['g4pqra'] == 1) ? $g4pqra = 1 : $g4pqra = 0;
(isset($_POST['g4pqrb']) && $_POST['g4pqrb'] == 1) ? $g4pqrb = 1 : $g4pqrb = 0;
(isset($_POST['g4prra']) && $_POST['g4prra'] == 1) ? $g4prra = 1 : $g4prra = 0;
(isset($_POST['g4prrb']) && $_POST['g4prrb'] == 1) ? $g4prrb = 1 : $g4prrb = 0;
(isset($_POST['g4psra']) && $_POST['g4psra'] == 1) ? $g4psra = 1 : $g4psra = 0;
(isset($_POST['g4psrb']) && $_POST['g4psrb'] == 1) ? $g4psrb = 1 : $g4psrb = 0;
(isset($_POST['g4ptra']) && $_POST['g4ptra'] == 1) ? $g4ptra = 1 : $g4ptra = 0;
(isset($_POST['g4ptrb']) && $_POST['g4ptrb'] == 1) ? $g4ptrb = 1 : $g4ptrb = 0;

//Grupo 5
(isset($_POST['g5para']) && $_POST['g5para'] == 1) ? $g5para = 1 : $g5para = 0;
(isset($_POST['g5parb']) && $_POST['g5parb'] == 1) ? $g5parb = 1 : $g5parb = 0;
(isset($_POST['g5pbra']) && $_POST['g5pbra'] == 1) ? $g5pbra = 1 : $g5pbra = 0;
(isset($_POST['g5pbrb']) && $_POST['g5pbrb'] == 1) ? $g5pbrb = 1 : $g5pbrb = 0;
(isset($_POST['g5pcra']) && $_POST['g5pcra'] == 1) ? $g5pcra = 1 : $g5pcra = 0;
(isset($_POST['g5pcrb']) && $_POST['g5pcrb'] == 1) ? $g5pcrb = 1 : $g5pcrb = 0;
(isset($_POST['g5pdra']) && $_POST['g5pdra'] == 1) ? $g5pdra = 1 : $g5pdra = 0;
(isset($_POST['g5pdrb']) && $_POST['g5pdrb'] == 1) ? $g5pdrb = 1 : $g5pdrb = 0;
(isset($_POST['g5pera']) && $_POST['g5pera'] == 1) ? $g5pera = 1 : $g5pera = 0;
(isset($_POST['g5perb']) && $_POST['g5perb'] == 1) ? $g5perb = 1 : $g5perb = 0;
(isset($_POST['g5pfra']) && $_POST['g5pfra'] == 1) ? $g5pfra = 1 : $g5pfra = 0;
(isset($_POST['g5pfrb']) && $_POST['g5pfrb'] == 1) ? $g5pfrb = 1 : $g5pfrb = 0;
(isset($_POST['g5pgra']) && $_POST['g5pgra'] == 1) ? $g5pgra = 1 : $g5pgra = 0;
(isset($_POST['g5pgrb']) && $_POST['g5pgrb'] == 1) ? $g5pgrb = 1 : $g5pgrb = 0;
(isset($_POST['g5phra']) && $_POST['g5phra'] == 1) ? $g5phra = 1 : $g5phra = 0;
(isset($_POST['g5phrb']) && $_POST['g5phrb'] == 1) ? $g5phrb = 1 : $g5phrb = 0;
(isset($_POST['g5pjra']) && $_POST['g5pjra'] == 1) ? $g5pjra = 1 : $g5pjra = 0;
(isset($_POST['g5pjrb']) && $_POST['g5pjrb'] == 1) ? $g5pjrb = 1 : $g5pjrb = 0;
(isset($_POST['g5pkra']) && $_POST['g5pkra'] == 1) ? $g5pkra = 1 : $g5pkra = 0;
(isset($_POST['g5pkrb']) && $_POST['g5pkrb'] == 1) ? $g5pkrb = 1 : $g5pkrb = 0;
(isset($_POST['g5plra']) && $_POST['g5plra'] == 1) ? $g5plra = 1 : $g5plra = 0;
(isset($_POST['g5plrb']) && $_POST['g5plrb'] == 1) ? $g5plrb = 1 : $g5plrb = 0;
(isset($_POST['g5pmra']) && $_POST['g5pmra'] == 1) ? $g5pmra = 1 : $g5pmra = 0;
(isset($_POST['g5pmrb']) && $_POST['g5pmrb'] == 1) ? $g5pmrb = 1 : $g5pmrb = 0;
(isset($_POST['g5pnra']) && $_POST['g5pnra'] == 1) ? $g5pnra = 1 : $g5pnra = 0;
(isset($_POST['g5pnrb']) && $_POST['g5pnrb'] == 1) ? $g5pnrb = 1 : $g5pnrb = 0;
(isset($_POST['g5ppra']) && $_POST['g5ppra'] == 1) ? $g5ppra = 1 : $g5ppra = 0;
(isset($_POST['g5pprb']) && $_POST['g5pprb'] == 1) ? $g5pprb = 1 : $g5pprb = 0;
(isset($_POST['g5pqra']) && $_POST['g5pqra'] == 1) ? $g5pqra = 1 : $g5pqra = 0;
(isset($_POST['g5pqrb']) && $_POST['g5pqrb'] == 1) ? $g5pqrb = 1 : $g5pqrb = 0;
(isset($_POST['g5prra']) && $_POST['g5prra'] == 1) ? $g5prra = 1 : $g5prra = 0;
(isset($_POST['g5prrb']) && $_POST['g5prrb'] == 1) ? $g5prrb = 1 : $g5prrb = 0;
(isset($_POST['g5psra']) && $_POST['g5psra'] == 1) ? $g5psra = 1 : $g5psra = 0;
(isset($_POST['g5psrb']) && $_POST['g5psrb'] == 1) ? $g5psrb = 1 : $g5psrb = 0;
(isset($_POST['g5ptra']) && $_POST['g5ptra'] == 1) ? $g5ptra = 1 : $g5ptra = 0;
(isset($_POST['g5ptrb']) && $_POST['g5ptrb'] == 1) ? $g5ptrb = 1 : $g5ptrb = 0;
(isset($_POST['g5pura']) && $_POST['g5pura'] == 1) ? $g5pura = 1 : $g5pura = 0;
(isset($_POST['g5purb']) && $_POST['g5purb'] == 1) ? $g5purb = 1 : $g5purb = 0;
(isset($_POST['g5pvra']) && $_POST['g5pvra'] == 1) ? $g5pvra = 1 : $g5pvra = 0;
(isset($_POST['g5pvrb']) && $_POST['g5pvrb'] == 1) ? $g5pvrb = 1 : $g5pvrb = 0;
(isset($_POST['g5pwra']) && $_POST['g5pwra'] == 1) ? $g5pwra = 1 : $g5pwra = 0;
(isset($_POST['g5pwrb']) && $_POST['g5pwrb'] == 1) ? $g5pwrb = 1 : $g5pwrb = 0;
(isset($_POST['g5pxra']) && $_POST['g5pxra'] == 1) ? $g5pxra = 1 : $g5pxra = 0;
(isset($_POST['g5pxrb']) && $_POST['g5pxrb'] == 1) ? $g5pxrb = 1 : $g5pxrb = 0;
(isset($_POST['g5pyra']) && $_POST['g5pyra'] == 1) ? $g5pyra = 1 : $g5pyra = 0;
(isset($_POST['g5pyrb']) && $_POST['g5pyrb'] == 1) ? $g5pyrb = 1 : $g5pyrb = 0;
(isset($_POST['g5pzra']) && $_POST['g5pzra'] == 1) ? $g5pzra = 1 : $g5pzra = 0;
(isset($_POST['g5pzrb']) && $_POST['g5pzrb'] == 1) ? $g5pzrb = 1 : $g5pzrb = 0;
(isset($_POST['g5pAra']) && $_POST['g5pAra'] == 1) ? $g5pAra = 1 : $g5pAra = 0;
(isset($_POST['g5pArb']) && $_POST['g5pArb'] == 1) ? $g5pArb = 1 : $g5pArb = 0;
(isset($_POST['g5pBra']) && $_POST['g5pBra'] == 1) ? $g5pBra = 1 : $g5pBra = 0;
(isset($_POST['g5pBrb']) && $_POST['g5pBrb'] == 1) ? $g5pBrb = 1 : $g5pBrb = 0;
(isset($_POST['g5pCra']) && $_POST['g5pCra'] == 1) ? $g5pCra = 1 : $g5pCra = 0;
(isset($_POST['g5pCrb']) && $_POST['g5pCrb'] == 1) ? $g5pCrb = 1 : $g5pCrb = 0;
(isset($_POST['g5pDra']) && $_POST['g5pDra'] == 1) ? $g5pDra = 1 : $g5pDra = 0;
(isset($_POST['g5pDrb']) && $_POST['g5pDrb'] == 1) ? $g5pDrb = 1 : $g5pDrb = 0;
(isset($_POST['g5pEra']) && $_POST['g5pEra'] == 1) ? $g5pEra = 1 : $g5pEra = 0;
(isset($_POST['g5pErb']) && $_POST['g5pErb'] == 1) ? $g5pErb = 1 : $g5pErb = 0;
(isset($_POST['g5pFra']) && $_POST['g5pFra'] == 1) ? $g5pFra = 1 : $g5pFra = 0;
(isset($_POST['g5pFrb']) && $_POST['g5pFrb'] == 1) ? $g5pFrb = 1 : $g5pFrb = 0;
(isset($_POST['g5pGra']) && $_POST['g5pGra'] == 1) ? $g5pGra = 1 : $g5pGra = 0;
(isset($_POST['g5pGrb']) && $_POST['g5pGrb'] == 1) ? $g5pGrb = 1 : $g5pGrb = 0;
(isset($_POST['g5pHra']) && $_POST['g5pHra'] == 1) ? $g5pHra = 1 : $g5pHra = 0;
(isset($_POST['g5pHrb']) && $_POST['g5pHrb'] == 1) ? $g5pHrb = 1 : $g5pHrb = 0;
(isset($_POST['g5pJra']) && $_POST['g5pJra'] == 1) ? $g5pJra = 1 : $g5pJra = 0;
(isset($_POST['g5pJrb']) && $_POST['g5pJrb'] == 1) ? $g5pJrb = 1 : $g5pJrb = 0;
(isset($_POST['g5pKra']) && $_POST['g5pKra'] == 1) ? $g5pKra = 1 : $g5pKra = 0;
(isset($_POST['g5pKrb']) && $_POST['g5pKrb'] == 1) ? $g5pKrb = 1 : $g5pKrb = 0;
(isset($_POST['g5pLra']) && $_POST['g5pLra'] == 1) ? $g5pLra = 1 : $g5pLra = 0;
(isset($_POST['g5pLrb']) && $_POST['g5pLrb'] == 1) ? $g5pLrb = 1 : $g5pLrb = 0;
(isset($_POST['g5pMra']) && $_POST['g5pMra'] == 1) ? $g5pMra = 1 : $g5pMra = 0;
(isset($_POST['g5pMrb']) && $_POST['g5pMrb'] == 1) ? $g5pMrb = 1 : $g5pMrb = 0;
(isset($_POST['g5pNra']) && $_POST['g5pNra'] == 1) ? $g5pNra = 1 : $g5pNra = 0;
(isset($_POST['g5pNrb']) && $_POST['g5pNrb'] == 1) ? $g5pNrb = 1 : $g5pNrb = 0;
(isset($_POST['g5pPra']) && $_POST['g5pPra'] == 1) ? $g5pPra = 1 : $g5pPra = 0;
(isset($_POST['g5pPrb']) && $_POST['g5pPrb'] == 1) ? $g5pPrb = 1 : $g5pPrb = 0;
(isset($_POST['g5pQra']) && $_POST['g5pQra'] == 1) ? $g5pQra = 1 : $g5pQra = 0;
(isset($_POST['g5pQrb']) && $_POST['g5pQrb'] == 1) ? $g5pQrb = 1 : $g5pQrb = 0;
(isset($_POST['g5pRra']) && $_POST['g5pRra'] == 1) ? $g5pRra = 1 : $g5pRra = 0;
(isset($_POST['g5pRrb']) && $_POST['g5pRrb'] == 1) ? $g5pRrb = 1 : $g5pRrb = 0;
(isset($_POST['g5pSra']) && $_POST['g5pSra'] == 1) ? $g5pSra = 1 : $g5pSra = 0;
(isset($_POST['g5pSrb']) && $_POST['g5pSrb'] == 1) ? $g5pSrb = 1 : $g5pSrb = 0;
(isset($_POST['g5pTra']) && $_POST['g5pTra'] == 1) ? $g5pTra = 1 : $g5pTra = 0;
(isset($_POST['g5pTrb']) && $_POST['g5pTrb'] == 1) ? $g5pTrb = 1 : $g5pTrb = 0;

//Grupo 6
(isset($_POST['g6pAra']) && $_POST['g6pAra'] == 1) ? $g6pAra = 1 : $g6pAra = 0;
(isset($_POST['g6pArb']) && $_POST['g6pArb'] == 1) ? $g6pArb = 1 : $g6pArb = 0;
(isset($_POST['g6pBra']) && $_POST['g6pBra'] == 1) ? $g6pBra = 1 : $g6pBra = 0;
(isset($_POST['g6pBrb']) && $_POST['g6pBrb'] == 1) ? $g6pBrb = 1 : $g6pBrb = 0;
(isset($_POST['g6pCra']) && $_POST['g6pCra'] == 1) ? $g6pCra = 1 : $g6pCra = 0;
(isset($_POST['g6pCrb']) && $_POST['g6pCrb'] == 1) ? $g6pCrb = 1 : $g6pCrb = 0;
(isset($_POST['g6pDra']) && $_POST['g6pDra'] == 1) ? $g6pDra = 1 : $g6pDra = 0;
(isset($_POST['g6pDrb']) && $_POST['g6pDrb'] == 1) ? $g6pDrb = 1 : $g6pDrb = 0;
(isset($_POST['g6pEra']) && $_POST['g6pEra'] == 1) ? $g6pEra = 1 : $g6pEra = 0;
(isset($_POST['g6pErb']) && $_POST['g6pErb'] == 1) ? $g6pErb = 1 : $g6pErb = 0;
(isset($_POST['g6pFra']) && $_POST['g6pFra'] == 1) ? $g6pFra = 1 : $g6pFra = 0;
(isset($_POST['g6pFrb']) && $_POST['g6pFrb'] == 1) ? $g6pFrb = 1 : $g6pFrb = 0;
(isset($_POST['g6pGra']) && $_POST['g6pGra'] == 1) ? $g6pGra = 1 : $g6pGra = 0;
(isset($_POST['g6pGrb']) && $_POST['g6pGrb'] == 1) ? $g6pGrb = 1 : $g6pGrb = 0;
(isset($_POST['g6pHra']) && $_POST['g6pHra'] == 1) ? $g6pHra = 1 : $g6pHra = 0;
(isset($_POST['g6pHrb']) && $_POST['g6pHrb'] == 1) ? $g6pHrb = 1 : $g6pHrb = 0;
(isset($_POST['g6pJra']) && $_POST['g6pJra'] == 1) ? $g6pJra = 1 : $g6pJra = 0;
(isset($_POST['g6pJrb']) && $_POST['g6pJrb'] == 1) ? $g6pJrb = 1 : $g6pJrb = 0;
(isset($_POST['g6pKra']) && $_POST['g6pKra'] == 1) ? $g6pKra = 1 : $g6pKra = 0;
(isset($_POST['g6pKrb']) && $_POST['g6pKrb'] == 1) ? $g6pKrb = 1 : $g6pKrb = 0;
(isset($_POST['g6pLra']) && $_POST['g6pLra'] == 1) ? $g6pLra = 1 : $g6pLra = 0;
(isset($_POST['g6pLrb']) && $_POST['g6pLrb'] == 1) ? $g6pLrb = 1 : $g6pLrb = 0;
(isset($_POST['g6pMra']) && $_POST['g6pMra'] == 1) ? $g6pMra = 1 : $g6pMra = 0;
(isset($_POST['g6pMrb']) && $_POST['g6pMrb'] == 1) ? $g6pMrb = 1 : $g6pMrb = 0;
(isset($_POST['g6pNra']) && $_POST['g6pNra'] == 1) ? $g6pNra = 1 : $g6pNra = 0;
(isset($_POST['g6pNrb']) && $_POST['g6pNrb'] == 1) ? $g6pNrb = 1 : $g6pNrb = 0;
(isset($_POST['g6pPra']) && $_POST['g6pPra'] == 1) ? $g6pPra = 1 : $g6pPra = 0;
(isset($_POST['g6pPrb']) && $_POST['g6pPrb'] == 1) ? $g6pPrb = 1 : $g6pPrb = 0;
(isset($_POST['g6pQra']) && $_POST['g6pQra'] == 1) ? $g6pQra = 1 : $g6pQra = 0;
(isset($_POST['g6pQrb']) && $_POST['g6pQrb'] == 1) ? $g6pQrb = 1 : $g6pQrb = 0;
(isset($_POST['g6pRra']) && $_POST['g6pRra'] == 1) ? $g6pRra = 1 : $g6pRra = 0;
(isset($_POST['g6pRrb']) && $_POST['g6pRrb'] == 1) ? $g6pRrb = 1 : $g6pRrb = 0;
(isset($_POST['g6pSra']) && $_POST['g6pSra'] == 1) ? $g6pSra = 1 : $g6pSra = 0;
(isset($_POST['g6pSrb']) && $_POST['g6pSrb'] == 1) ? $g6pSrb = 1 : $g6pSrb = 0;
(isset($_POST['g6pTra']) && $_POST['g6pTra'] == 1) ? $g6pTra = 1 : $g6pTra = 0;
(isset($_POST['g6pTrb']) && $_POST['g6pTrb'] == 1) ? $g6pTrb = 1 : $g6pTrb = 0;
(isset($_POST['g6pUra']) && $_POST['g6pUra'] == 1) ? $g6pUra = 1 : $g6pUra = 0;
(isset($_POST['g6pUrb']) && $_POST['g6pUrb'] == 1) ? $g6pUrb = 1 : $g6pUrb = 0;
(isset($_POST['g6pVra']) && $_POST['g6pVra'] == 1) ? $g6pVra = 1 : $g6pVra = 0;
(isset($_POST['g6pVrb']) && $_POST['g6pVrb'] == 1) ? $g6pVrb = 1 : $g6pVrb = 0;
(isset($_POST['g6pWra']) && $_POST['g6pWra'] == 1) ? $g6pWra = 1 : $g6pWra = 0;
(isset($_POST['g6pWrb']) && $_POST['g6pWrb'] == 1) ? $g6pWrb = 1 : $g6pWrb = 0;
(isset($_POST['g6pXra']) && $_POST['g6pXra'] == 1) ? $g6pXra = 1 : $g6pXra = 0;
(isset($_POST['g6pXrb']) && $_POST['g6pXrb'] == 1) ? $g6pXrb = 1 : $g6pXrb = 0;
(isset($_POST['g6pYra']) && $_POST['g6pYra'] == 1) ? $g6pYra = 1 : $g6pYra = 0;
(isset($_POST['g6pYrb']) && $_POST['g6pYrb'] == 1) ? $g6pYrb = 1 : $g6pYrb = 0;
(isset($_POST['g6pZra']) && $_POST['g6pZra'] == 1) ? $g6pZra = 1 : $g6pZra = 0;
(isset($_POST['g6pZrb']) && $_POST['g6pZrb'] == 1) ? $g6pZrb = 1 : $g6pZrb = 0;
(isset($_POST['g6para']) && $_POST['g6para'] == 1) ? $g6para = 1 : $g6para = 0;
(isset($_POST['g6parb']) && $_POST['g6parb'] == 1) ? $g6parb = 1 : $g6parb = 0;
(isset($_POST['g6pbra']) && $_POST['g6pbra'] == 1) ? $g6pbra = 1 : $g6pbra = 0;
(isset($_POST['g6pbrb']) && $_POST['g6pbrb'] == 1) ? $g6pbrb = 1 : $g6pbrb = 0;
(isset($_POST['g6pcra']) && $_POST['g6pcra'] == 1) ? $g6pcra = 1 : $g6pcra = 0;
(isset($_POST['g6pcrb']) && $_POST['g6pcrb'] == 1) ? $g6pcrb = 1 : $g6pcrb = 0;
(isset($_POST['g6pdra']) && $_POST['g6pdra'] == 1) ? $g6pdra = 1 : $g6pdra = 0;
(isset($_POST['g6pdrb']) && $_POST['g6pdrb'] == 1) ? $g6pdrb = 1 : $g6pdrb = 0;
(isset($_POST['g6pera']) && $_POST['g6pera'] == 1) ? $g6pera = 1 : $g6pera = 0;
(isset($_POST['g6perb']) && $_POST['g6perb'] == 1) ? $g6perb = 1 : $g6perb = 0;
(isset($_POST['g6pfra']) && $_POST['g6pfra'] == 1) ? $g6pfra = 1 : $g6pfra = 0;
(isset($_POST['g6pfrb']) && $_POST['g6pfrb'] == 1) ? $g6pfrb = 1 : $g6pfrb = 0;
(isset($_POST['g6pgra']) && $_POST['g6pgra'] == 1) ? $g6pgra = 1 : $g6pgra = 0;
(isset($_POST['g6pgrb']) && $_POST['g6pgrb'] == 1) ? $g6pgrb = 1 : $g6pgrb = 0;
(isset($_POST['g6phra']) && $_POST['g6phra'] == 1) ? $g6phra = 1 : $g6phra = 0;
(isset($_POST['g6phrb']) && $_POST['g6phrb'] == 1) ? $g6phrb = 1 : $g6phrb = 0;
(isset($_POST['g6pjra']) && $_POST['g6pjra'] == 1) ? $g6pjra = 1 : $g6pjra = 0;
(isset($_POST['g6pjrb']) && $_POST['g6pjrb'] == 1) ? $g6pjrb = 1 : $g6pjrb = 0;
(isset($_POST['g6pkra']) && $_POST['g6pkra'] == 1) ? $g6pkra = 1 : $g6pkra = 0;
(isset($_POST['g6pkrb']) && $_POST['g6pkrb'] == 1) ? $g6pkrb = 1 : $g6pkrb = 0;
(isset($_POST['g6plra']) && $_POST['g6plra'] == 1) ? $g6plra = 1 : $g6plra = 0;
(isset($_POST['g6plrb']) && $_POST['g6plrb'] == 1) ? $g6plrb = 1 : $g6plrb = 0;
(isset($_POST['g6pmra']) && $_POST['g6pmra'] == 1) ? $g6pmra = 1 : $g6pmra = 0;
(isset($_POST['g6pmrb']) && $_POST['g6pmrb'] == 1) ? $g6pmrb = 1 : $g6pmrb = 0;
(isset($_POST['g6pnra']) && $_POST['g6pnra'] == 1) ? $g6pnra = 1 : $g6pnra = 0;
(isset($_POST['g6pnrb']) && $_POST['g6pnrb'] == 1) ? $g6pnrb = 1 : $g6pnrb = 0;
(isset($_POST['g6ppra']) && $_POST['g6ppra'] == 1) ? $g6ppra = 1 : $g6ppra = 0;
(isset($_POST['g6pprb']) && $_POST['g6pprb'] == 1) ? $g6pprb = 1 : $g6pprb = 0;
(isset($_POST['g6pqra']) && $_POST['g6pqra'] == 1) ? $g6pqra = 1 : $g6pqra = 0;
(isset($_POST['g6pqrb']) && $_POST['g6pqrb'] == 1) ? $g6pqrb = 1 : $g6pqrb = 0;
(isset($_POST['g6prra']) && $_POST['g6prra'] == 1) ? $g6prra = 1 : $g6prra = 0;
(isset($_POST['g6prrb']) && $_POST['g6prrb'] == 1) ? $g6prrb = 1 : $g6prrb = 0;
(isset($_POST['g6psra']) && $_POST['g6psra'] == 1) ? $g6psra = 1 : $g6psra = 0;
(isset($_POST['g6psrb']) && $_POST['g6psrb'] == 1) ? $g6psrb = 1 : $g6psrb = 0;
(isset($_POST['g6ptra']) && $_POST['g6ptra'] == 1) ? $g6ptra = 1 : $g6ptra = 0;
(isset($_POST['g6ptrb']) && $_POST['g6ptrb'] == 1) ? $g6ptrb = 1 : $g6ptrb = 0;

//Grupo 7
(isset($_POST['g7para']) && $_POST['g7para'] == 1) ? $g7para = 1 : $g7para = 0;
(isset($_POST['g7parb']) && $_POST['g7parb'] == 1) ? $g7parb = 1 : $g7parb = 0;
(isset($_POST['g7pbra']) && $_POST['g7pbra'] == 1) ? $g7pbra = 1 : $g7pbra = 0;
(isset($_POST['g7pbrb']) && $_POST['g7pbrb'] == 1) ? $g7pbrb = 1 : $g7pbrb = 0;
(isset($_POST['g7pcra']) && $_POST['g7pcra'] == 1) ? $g7pcra = 1 : $g7pcra = 0;
(isset($_POST['g7pcrb']) && $_POST['g7pcrb'] == 1) ? $g7pcrb = 1 : $g7pcrb = 0;
(isset($_POST['g7pdra']) && $_POST['g7pdra'] == 1) ? $g7pdra = 1 : $g7pdra = 0;
(isset($_POST['g7pdrb']) && $_POST['g7pdrb'] == 1) ? $g7pdrb = 1 : $g7pdrb = 0;
(isset($_POST['g7pera']) && $_POST['g7pera'] == 1) ? $g7pera = 1 : $g7pera = 0;
(isset($_POST['g7perb']) && $_POST['g7perb'] == 1) ? $g7perb = 1 : $g7perb = 0;
(isset($_POST['g7pfra']) && $_POST['g7pfra'] == 1) ? $g7pfra = 1 : $g7pfra = 0;
(isset($_POST['g7pfrb']) && $_POST['g7pfrb'] == 1) ? $g7pfrb = 1 : $g7pfrb = 0;
(isset($_POST['g7pgra']) && $_POST['g7pgra'] == 1) ? $g7pgra = 1 : $g7pgra = 0;
(isset($_POST['g7pgrb']) && $_POST['g7pgrb'] == 1) ? $g7pgrb = 1 : $g7pgrb = 0;
(isset($_POST['g7phra']) && $_POST['g7phra'] == 1) ? $g7phra = 1 : $g7phra = 0;
(isset($_POST['g7phrb']) && $_POST['g7phrb'] == 1) ? $g7phrb = 1 : $g7phrb = 0;
(isset($_POST['g7pjra']) && $_POST['g7pjra'] == 1) ? $g7pjra = 1 : $g7pjra = 0;
(isset($_POST['g7pjrb']) && $_POST['g7pjrb'] == 1) ? $g7pjrb = 1 : $g7pjrb = 0;
(isset($_POST['g7pkra']) && $_POST['g7pkra'] == 1) ? $g7pkra = 1 : $g7pkra = 0;
(isset($_POST['g7pkrb']) && $_POST['g7pkrb'] == 1) ? $g7pkrb = 1 : $g7pkrb = 0;
(isset($_POST['g7plra']) && $_POST['g7plra'] == 1) ? $g7plra = 1 : $g7plra = 0;
(isset($_POST['g7plrb']) && $_POST['g7plrb'] == 1) ? $g7plrb = 1 : $g7plrb = 0;
(isset($_POST['g7pmra']) && $_POST['g7pmra'] == 1) ? $g7pmra = 1 : $g7pmra = 0;
(isset($_POST['g7pmrb']) && $_POST['g7pmrb'] == 1) ? $g7pmrb = 1 : $g7pmrb = 0;
(isset($_POST['g7pnra']) && $_POST['g7pnra'] == 1) ? $g7pnra = 1 : $g7pnra = 0;
(isset($_POST['g7pnrb']) && $_POST['g7pnrb'] == 1) ? $g7pnrb = 1 : $g7pnrb = 0;
(isset($_POST['g7ppra']) && $_POST['g7ppra'] == 1) ? $g7ppra = 1 : $g7ppra = 0;
(isset($_POST['g7pprb']) && $_POST['g7pprb'] == 1) ? $g7pprb = 1 : $g7pprb = 0;
(isset($_POST['g7pqra']) && $_POST['g7pqra'] == 1) ? $g7pqra = 1 : $g7pqra = 0;
(isset($_POST['g7pqrb']) && $_POST['g7pqrb'] == 1) ? $g7pqrb = 1 : $g7pqrb = 0;
(isset($_POST['g7prra']) && $_POST['g7prra'] == 1) ? $g7prra = 1 : $g7prra = 0;
(isset($_POST['g7prrb']) && $_POST['g7prrb'] == 1) ? $g7prrb = 1 : $g7prrb = 0;
(isset($_POST['g7psra']) && $_POST['g7psra'] == 1) ? $g7psra = 1 : $g7psra = 0;
(isset($_POST['g7psrb']) && $_POST['g7psrb'] == 1) ? $g7psrb = 1 : $g7psrb = 0;
(isset($_POST['g7ptra']) && $_POST['g7ptra'] == 1) ? $g7ptra = 1 : $g7ptra = 0;
(isset($_POST['g7ptrb']) && $_POST['g7ptrb'] == 1) ? $g7ptrb = 1 : $g7ptrb = 0;
(isset($_POST['g7pura']) && $_POST['g7pura'] == 1) ? $g7pura = 1 : $g7pura = 0;
(isset($_POST['g7purb']) && $_POST['g7purb'] == 1) ? $g7purb = 1 : $g7purb = 0;
(isset($_POST['g7pvra']) && $_POST['g7pvra'] == 1) ? $g7pvra = 1 : $g7pvra = 0;
(isset($_POST['g7pvrb']) && $_POST['g7pvrb'] == 1) ? $g7pvrb = 1 : $g7pvrb = 0;
(isset($_POST['g7pwra']) && $_POST['g7pwra'] == 1) ? $g7pwra = 1 : $g7pwra = 0;
(isset($_POST['g7pwrb']) && $_POST['g7pwrb'] == 1) ? $g7pwrb = 1 : $g7pwrb = 0;
(isset($_POST['g7pxra']) && $_POST['g7pxra'] == 1) ? $g7pxra = 1 : $g7pxra = 0;
(isset($_POST['g7pxrb']) && $_POST['g7pxrb'] == 1) ? $g7pxrb = 1 : $g7pxrb = 0;
(isset($_POST['g7pyra']) && $_POST['g7pyra'] == 1) ? $g7pyra = 1 : $g7pyra = 0;
(isset($_POST['g7pyrb']) && $_POST['g7pyrb'] == 1) ? $g7pyrb = 1 : $g7pyrb = 0;
(isset($_POST['g7pzra']) && $_POST['g7pzra'] == 1) ? $g7pzra = 1 : $g7pzra = 0;
(isset($_POST['g7pzrb']) && $_POST['g7pzrb'] == 1) ? $g7pzrb = 1 : $g7pzrb = 0;
(isset($_POST['g7pAra']) && $_POST['g7pAra'] == 1) ? $g7pAra = 1 : $g7pAra = 0;
(isset($_POST['g7pArb']) && $_POST['g7pArb'] == 1) ? $g7pArb = 1 : $g7pArb = 0;
(isset($_POST['g7pBra']) && $_POST['g7pBra'] == 1) ? $g7pBra = 1 : $g7pBra = 0;
(isset($_POST['g7pBrb']) && $_POST['g7pBrb'] == 1) ? $g7pBrb = 1 : $g7pBrb = 0;
(isset($_POST['g7pCra']) && $_POST['g7pCra'] == 1) ? $g7pCra = 1 : $g7pCra = 0;
(isset($_POST['g7pCrb']) && $_POST['g7pCrb'] == 1) ? $g7pCrb = 1 : $g7pCrb = 0;
(isset($_POST['g7pDra']) && $_POST['g7pDra'] == 1) ? $g7pDra = 1 : $g7pDra = 0;
(isset($_POST['g7pDrb']) && $_POST['g7pDrb'] == 1) ? $g7pDrb = 1 : $g7pDrb = 0;
(isset($_POST['g7pEra']) && $_POST['g7pEra'] == 1) ? $g7pEra = 1 : $g7pEra = 0;
(isset($_POST['g7pErb']) && $_POST['g7pErb'] == 1) ? $g7pErb = 1 : $g7pErb = 0;
(isset($_POST['g7pFra']) && $_POST['g7pFra'] == 1) ? $g7pFra = 1 : $g7pFra = 0;
(isset($_POST['g7pFrb']) && $_POST['g7pFrb'] == 1) ? $g7pFrb = 1 : $g7pFrb = 0;
(isset($_POST['g7pGra']) && $_POST['g7pGra'] == 1) ? $g7pGra = 1 : $g7pGra = 0;
(isset($_POST['g7pGrb']) && $_POST['g7pGrb'] == 1) ? $g7pGrb = 1 : $g7pGrb = 0;
(isset($_POST['g7pHra']) && $_POST['g7pHra'] == 1) ? $g7pHra = 1 : $g7pHra = 0;
(isset($_POST['g7pHrb']) && $_POST['g7pHrb'] == 1) ? $g7pHrb = 1 : $g7pHrb = 0;
(isset($_POST['g7pJra']) && $_POST['g7pJra'] == 1) ? $g7pJra = 1 : $g7pJra = 0;
(isset($_POST['g7pJrb']) && $_POST['g7pJrb'] == 1) ? $g7pJrb = 1 : $g7pJrb = 0;
(isset($_POST['g7pKra']) && $_POST['g7pKra'] == 1) ? $g7pKra = 1 : $g7pKra = 0;
(isset($_POST['g7pKrb']) && $_POST['g7pKrb'] == 1) ? $g7pKrb = 1 : $g7pKrb = 0;
(isset($_POST['g7pLra']) && $_POST['g7pLra'] == 1) ? $g7pLra = 1 : $g7pLra = 0;
(isset($_POST['g7pLrb']) && $_POST['g7pLrb'] == 1) ? $g7pLrb = 1 : $g7pLrb = 0;
(isset($_POST['g7pMra']) && $_POST['g7pMra'] == 1) ? $g7pMra = 1 : $g7pMra = 0;
(isset($_POST['g7pMrb']) && $_POST['g7pMrb'] == 1) ? $g7pMrb = 1 : $g7pMrb = 0;
(isset($_POST['g7pNra']) && $_POST['g7pNra'] == 1) ? $g7pNra = 1 : $g7pNra = 0;
(isset($_POST['g7pNrb']) && $_POST['g7pNrb'] == 1) ? $g7pNrb = 1 : $g7pNrb = 0;
(isset($_POST['g7pPra']) && $_POST['g7pPra'] == 1) ? $g7pPra = 1 : $g7pPra = 0;
(isset($_POST['g7pPrb']) && $_POST['g7pPrb'] == 1) ? $g7pPrb = 1 : $g7pPrb = 0;
(isset($_POST['g7pQra']) && $_POST['g7pQra'] == 1) ? $g7pQra = 1 : $g7pQra = 0;
(isset($_POST['g7pQrb']) && $_POST['g7pQrb'] == 1) ? $g7pQrb = 1 : $g7pQrb = 0;
(isset($_POST['g7pRra']) && $_POST['g7pRra'] == 1) ? $g7pRra = 1 : $g7pRra = 0;
(isset($_POST['g7pRrb']) && $_POST['g7pRrb'] == 1) ? $g7pRrb = 1 : $g7pRrb = 0;
(isset($_POST['g7pSra']) && $_POST['g7pSra'] == 1) ? $g7pSra = 1 : $g7pSra = 0;
(isset($_POST['g7pSrb']) && $_POST['g7pSrb'] == 1) ? $g7pSrb = 1 : $g7pSrb = 0;
(isset($_POST['g7pTra']) && $_POST['g7pTra'] == 1) ? $g7pTra = 1 : $g7pTra = 0;
(isset($_POST['g7pTrb']) && $_POST['g7pTrb'] == 1) ? $g7pTrb = 1 : $g7pTrb = 0;

//Grupo 8
(isset($_POST['g8pAra']) && $_POST['g8pAra'] == 1) ? $g8pAra = 1 : $g8pAra = 0;
(isset($_POST['g8pArb']) && $_POST['g8pArb'] == 1) ? $g8pArb = 1 : $g8pArb = 0;
(isset($_POST['g8pBra']) && $_POST['g8pBra'] == 1) ? $g8pBra = 1 : $g8pBra = 0;
(isset($_POST['g8pBrb']) && $_POST['g8pBrb'] == 1) ? $g8pBrb = 1 : $g8pBrb = 0;
(isset($_POST['g8pCra']) && $_POST['g8pCra'] == 1) ? $g8pCra = 1 : $g8pCra = 0;
(isset($_POST['g8pCrb']) && $_POST['g8pCrb'] == 1) ? $g8pCrb = 1 : $g8pCrb = 0;
(isset($_POST['g8pDra']) && $_POST['g8pDra'] == 1) ? $g8pDra = 1 : $g8pDra = 0;
(isset($_POST['g8pDrb']) && $_POST['g8pDrb'] == 1) ? $g8pDrb = 1 : $g8pDrb = 0;
(isset($_POST['g8pEra']) && $_POST['g8pEra'] == 1) ? $g8pEra = 1 : $g8pEra = 0;
(isset($_POST['g8pErb']) && $_POST['g8pErb'] == 1) ? $g8pErb = 1 : $g8pErb = 0;
(isset($_POST['g8pFra']) && $_POST['g8pFra'] == 1) ? $g8pFra = 1 : $g8pFra = 0;
(isset($_POST['g8pFrb']) && $_POST['g8pFrb'] == 1) ? $g8pFrb = 1 : $g8pFrb = 0;
(isset($_POST['g8pGra']) && $_POST['g8pGra'] == 1) ? $g8pGra = 1 : $g8pGra = 0;
(isset($_POST['g8pGrb']) && $_POST['g8pGrb'] == 1) ? $g8pGrb = 1 : $g8pGrb = 0;
(isset($_POST['g8pHra']) && $_POST['g8pHra'] == 1) ? $g8pHra = 1 : $g8pHra = 0;
(isset($_POST['g8pHrb']) && $_POST['g8pHrb'] == 1) ? $g8pHrb = 1 : $g8pHrb = 0;
(isset($_POST['g8pJra']) && $_POST['g8pJra'] == 1) ? $g8pJra = 1 : $g8pJra = 0;
(isset($_POST['g8pJrb']) && $_POST['g8pJrb'] == 1) ? $g8pJrb = 1 : $g8pJrb = 0;
(isset($_POST['g8pKra']) && $_POST['g8pKra'] == 1) ? $g8pKra = 1 : $g8pKra = 0;
(isset($_POST['g8pKrb']) && $_POST['g8pKrb'] == 1) ? $g8pKrb = 1 : $g8pKrb = 0;
(isset($_POST['g8pLra']) && $_POST['g8pLra'] == 1) ? $g8pLra = 1 : $g8pLra = 0;
(isset($_POST['g8pLrb']) && $_POST['g8pLrb'] == 1) ? $g8pLrb = 1 : $g8pLrb = 0;
(isset($_POST['g8pMra']) && $_POST['g8pMra'] == 1) ? $g8pMra = 1 : $g8pMra = 0;
(isset($_POST['g8pMrb']) && $_POST['g8pMrb'] == 1) ? $g8pMrb = 1 : $g8pMrb = 0;
(isset($_POST['g8pNra']) && $_POST['g8pNra'] == 1) ? $g8pNra = 1 : $g8pNra = 0;
(isset($_POST['g8pNrb']) && $_POST['g8pNrb'] == 1) ? $g8pNrb = 1 : $g8pNrb = 0;
(isset($_POST['g8pPra']) && $_POST['g8pPra'] == 1) ? $g8pPra = 1 : $g8pPra = 0;
(isset($_POST['g8pPrb']) && $_POST['g8pPrb'] == 1) ? $g8pPrb = 1 : $g8pPrb = 0;
(isset($_POST['g8pQra']) && $_POST['g8pQra'] == 1) ? $g8pQra = 1 : $g8pQra = 0;
(isset($_POST['g8pQrb']) && $_POST['g8pQrb'] == 1) ? $g8pQrb = 1 : $g8pQrb = 0;
(isset($_POST['g8pRra']) && $_POST['g8pRra'] == 1) ? $g8pRra = 1 : $g8pRra = 0;
(isset($_POST['g8pRrb']) && $_POST['g8pRrb'] == 1) ? $g8pRrb = 1 : $g8pRrb = 0;
(isset($_POST['g8pSra']) && $_POST['g8pSra'] == 1) ? $g8pSra = 1 : $g8pSra = 0;
(isset($_POST['g8pSrb']) && $_POST['g8pSrb'] == 1) ? $g8pSrb = 1 : $g8pSrb = 0;
(isset($_POST['g8pTra']) && $_POST['g8pTra'] == 1) ? $g8pTra = 1 : $g8pTra = 0;
(isset($_POST['g8pTrb']) && $_POST['g8pTrb'] == 1) ? $g8pTrb = 1 : $g8pTrb = 0;
(isset($_POST['g8pUra']) && $_POST['g8pUra'] == 1) ? $g8pUra = 1 : $g8pUra = 0;
(isset($_POST['g8pUrb']) && $_POST['g8pUrb'] == 1) ? $g8pUrb = 1 : $g8pUrb = 0;
(isset($_POST['g8pVra']) && $_POST['g8pVra'] == 1) ? $g8pVra = 1 : $g8pVra = 0;
(isset($_POST['g8pVrb']) && $_POST['g8pVrb'] == 1) ? $g8pVrb = 1 : $g8pVrb = 0;
(isset($_POST['g8pWra']) && $_POST['g8pWra'] == 1) ? $g8pWra = 1 : $g8pWra = 0;
(isset($_POST['g8pWrb']) && $_POST['g8pWrb'] == 1) ? $g8pWrb = 1 : $g8pWrb = 0;
(isset($_POST['g8pXra']) && $_POST['g8pXra'] == 1) ? $g8pXra = 1 : $g8pXra = 0;
(isset($_POST['g8pXrb']) && $_POST['g8pXrb'] == 1) ? $g8pXrb = 1 : $g8pXrb = 0;
(isset($_POST['g8pYra']) && $_POST['g8pYra'] == 1) ? $g8pYra = 1 : $g8pYra = 0;
(isset($_POST['g8pYrb']) && $_POST['g8pYrb'] == 1) ? $g8pYrb = 1 : $g8pYrb = 0;
(isset($_POST['g8pZra']) && $_POST['g8pZra'] == 1) ? $g8pZra = 1 : $g8pZra = 0;
(isset($_POST['g8pZrb']) && $_POST['g8pZrb'] == 1) ? $g8pZrb = 1 : $g8pZrb = 0;
(isset($_POST['g8para']) && $_POST['g8para'] == 1) ? $g8para = 1 : $g8para = 0;
(isset($_POST['g8parb']) && $_POST['g8parb'] == 1) ? $g8parb = 1 : $g8parb = 0;
(isset($_POST['g8pbra']) && $_POST['g8pbra'] == 1) ? $g8pbra = 1 : $g8pbra = 0;
(isset($_POST['g8pbrb']) && $_POST['g8pbrb'] == 1) ? $g8pbrb = 1 : $g8pbrb = 0;
(isset($_POST['g8pcra']) && $_POST['g8pcra'] == 1) ? $g8pcra = 1 : $g8pcra = 0;
(isset($_POST['g8pcrb']) && $_POST['g8pcrb'] == 1) ? $g8pcrb = 1 : $g8pcrb = 0;
(isset($_POST['g8pdra']) && $_POST['g8pdra'] == 1) ? $g8pdra = 1 : $g8pdra = 0;
(isset($_POST['g8pdrb']) && $_POST['g8pdrb'] == 1) ? $g8pdrb = 1 : $g8pdrb = 0;
(isset($_POST['g8pera']) && $_POST['g8pera'] == 1) ? $g8pera = 1 : $g8pera = 0;
(isset($_POST['g8perb']) && $_POST['g8perb'] == 1) ? $g8perb = 1 : $g8perb = 0;
(isset($_POST['g8pfra']) && $_POST['g8pfra'] == 1) ? $g8pfra = 1 : $g8pfra = 0;
(isset($_POST['g8pfrb']) && $_POST['g8pfrb'] == 1) ? $g8pfrb = 1 : $g8pfrb = 0;
(isset($_POST['g8pgra']) && $_POST['g8pgra'] == 1) ? $g8pgra = 1 : $g8pgra = 0;
(isset($_POST['g8pgrb']) && $_POST['g8pgrb'] == 1) ? $g8pgrb = 1 : $g8pgrb = 0;
(isset($_POST['g8phra']) && $_POST['g8phra'] == 1) ? $g8phra = 1 : $g8phra = 0;
(isset($_POST['g8phrb']) && $_POST['g8phrb'] == 1) ? $g8phrb = 1 : $g8phrb = 0;
(isset($_POST['g8pjra']) && $_POST['g8pjra'] == 1) ? $g8pjra = 1 : $g8pjra = 0;
(isset($_POST['g8pjrb']) && $_POST['g8pjrb'] == 1) ? $g8pjrb = 1 : $g8pjrb = 0;
(isset($_POST['g8pkra']) && $_POST['g8pkra'] == 1) ? $g8pkra = 1 : $g8pkra = 0;
(isset($_POST['g8pkrb']) && $_POST['g8pkrb'] == 1) ? $g8pkrb = 1 : $g8pkrb = 0;
(isset($_POST['g8plra']) && $_POST['g8plra'] == 1) ? $g8plra = 1 : $g8plra = 0;
(isset($_POST['g8plrb']) && $_POST['g8plrb'] == 1) ? $g8plrb = 1 : $g8plrb = 0;
(isset($_POST['g8pmra']) && $_POST['g8pmra'] == 1) ? $g8pmra = 1 : $g8pmra = 0;
(isset($_POST['g8pmrb']) && $_POST['g8pmrb'] == 1) ? $g8pmrb = 1 : $g8pmrb = 0;
(isset($_POST['g8pnra']) && $_POST['g8pnra'] == 1) ? $g8pnra = 1 : $g8pnra = 0;
(isset($_POST['g8pnrb']) && $_POST['g8pnrb'] == 1) ? $g8pnrb = 1 : $g8pnrb = 0;
(isset($_POST['g8ppra']) && $_POST['g8ppra'] == 1) ? $g8ppra = 1 : $g8ppra = 0;
(isset($_POST['g8pprb']) && $_POST['g8pprb'] == 1) ? $g8pprb = 1 : $g8pprb = 0;
(isset($_POST['g8pqra']) && $_POST['g8pqra'] == 1) ? $g8pqra = 1 : $g8pqra = 0;
(isset($_POST['g8pqrb']) && $_POST['g8pqrb'] == 1) ? $g8pqrb = 1 : $g8pqrb = 0;
(isset($_POST['g8prra']) && $_POST['g8prra'] == 1) ? $g8prra = 1 : $g8prra = 0;
(isset($_POST['g8prrb']) && $_POST['g8prrb'] == 1) ? $g8prrb = 1 : $g8prrb = 0;
(isset($_POST['g8psra']) && $_POST['g8psra'] == 1) ? $g8psra = 1 : $g8psra = 0;
(isset($_POST['g8psrb']) && $_POST['g8psrb'] == 1) ? $g8psrb = 1 : $g8psrb = 0;
(isset($_POST['g8ptra']) && $_POST['g8ptra'] == 1) ? $g8ptra = 1 : $g8ptra = 0;
(isset($_POST['g8ptrb']) && $_POST['g8ptrb'] == 1) ? $g8ptrb = 1 : $g8ptrb = 0;

//Grupo 9
(isset($_POST['g9para']) && $_POST['g9para'] == 1) ? $g9para = 1 : $g9para = 0;
(isset($_POST['g9parb']) && $_POST['g9parb'] == 1) ? $g9parb = 1 : $g9parb = 0;
(isset($_POST['g9pbra']) && $_POST['g9pbra'] == 1) ? $g9pbra = 1 : $g9pbra = 0;
(isset($_POST['g9pbrb']) && $_POST['g9pbrb'] == 1) ? $g9pbrb = 1 : $g9pbrb = 0;
(isset($_POST['g9pcra']) && $_POST['g9pcra'] == 1) ? $g9pcra = 1 : $g9pcra = 0;
(isset($_POST['g9pcrb']) && $_POST['g9pcrb'] == 1) ? $g9pcrb = 1 : $g9pcrb = 0;
(isset($_POST['g9pdra']) && $_POST['g9pdra'] == 1) ? $g9pdra = 1 : $g9pdra = 0;
(isset($_POST['g9pdrb']) && $_POST['g9pdrb'] == 1) ? $g9pdrb = 1 : $g9pdrb = 0;
(isset($_POST['g9pera']) && $_POST['g9pera'] == 1) ? $g9pera = 1 : $g9pera = 0;
(isset($_POST['g9perb']) && $_POST['g9perb'] == 1) ? $g9perb = 1 : $g9perb = 0;
(isset($_POST['g9pfra']) && $_POST['g9pfra'] == 1) ? $g9pfra = 1 : $g9pfra = 0;
(isset($_POST['g9pfrb']) && $_POST['g9pfrb'] == 1) ? $g9pfrb = 1 : $g9pfrb = 0;
(isset($_POST['g9pgra']) && $_POST['g9pgra'] == 1) ? $g9pgra = 1 : $g9pgra = 0;
(isset($_POST['g9pgrb']) && $_POST['g9pgrb'] == 1) ? $g9pgrb = 1 : $g9pgrb = 0;
(isset($_POST['g9phra']) && $_POST['g9phra'] == 1) ? $g9phra = 1 : $g9phra = 0;
(isset($_POST['g9phrb']) && $_POST['g9phrb'] == 1) ? $g9phrb = 1 : $g9phrb = 0;
(isset($_POST['g9pjra']) && $_POST['g9pjra'] == 1) ? $g9pjra = 1 : $g9pjra = 0;
(isset($_POST['g9pjrb']) && $_POST['g9pjrb'] == 1) ? $g9pjrb = 1 : $g9pjrb = 0;
(isset($_POST['g9pkra']) && $_POST['g9pkra'] == 1) ? $g9pkra = 1 : $g9pkra = 0;
(isset($_POST['g9pkrb']) && $_POST['g9pkrb'] == 1) ? $g9pkrb = 1 : $g9pkrb = 0;
(isset($_POST['g9plra']) && $_POST['g9plra'] == 1) ? $g9plra = 1 : $g9plra = 0;
(isset($_POST['g9plrb']) && $_POST['g9plrb'] == 1) ? $g9plrb = 1 : $g9plrb = 0;
(isset($_POST['g9pmra']) && $_POST['g9pmra'] == 1) ? $g9pmra = 1 : $g9pmra = 0;
(isset($_POST['g9pmrb']) && $_POST['g9pmrb'] == 1) ? $g9pmrb = 1 : $g9pmrb = 0;
(isset($_POST['g9pnra']) && $_POST['g9pnra'] == 1) ? $g9pnra = 1 : $g9pnra = 0;
(isset($_POST['g9pnrb']) && $_POST['g9pnrb'] == 1) ? $g9pnrb = 1 : $g9pnrb = 0;
(isset($_POST['g9ppra']) && $_POST['g9ppra'] == 1) ? $g9ppra = 1 : $g9ppra = 0;
(isset($_POST['g9pprb']) && $_POST['g9pprb'] == 1) ? $g9pprb = 1 : $g9pprb = 0;
(isset($_POST['g9pqra']) && $_POST['g9pqra'] == 1) ? $g9pqra = 1 : $g9pqra = 0;
(isset($_POST['g9pqrb']) && $_POST['g9pqrb'] == 1) ? $g9pqrb = 1 : $g9pqrb = 0;
(isset($_POST['g9prra']) && $_POST['g9prra'] == 1) ? $g9prra = 1 : $g9prra = 0;
(isset($_POST['g9prrb']) && $_POST['g9prrb'] == 1) ? $g9prrb = 1 : $g9prrb = 0;
(isset($_POST['g9psra']) && $_POST['g9psra'] == 1) ? $g9psra = 1 : $g9psra = 0;
(isset($_POST['g9psrb']) && $_POST['g9psrb'] == 1) ? $g9psrb = 1 : $g9psrb = 0;
(isset($_POST['g9ptra']) && $_POST['g9ptra'] == 1) ? $g9ptra = 1 : $g9ptra = 0;
(isset($_POST['g9ptrb']) && $_POST['g9ptrb'] == 1) ? $g9ptrb = 1 : $g9ptrb = 0;
(isset($_POST['g9pura']) && $_POST['g9pura'] == 1) ? $g9pura = 1 : $g9pura = 0;
(isset($_POST['g9purb']) && $_POST['g9purb'] == 1) ? $g9purb = 1 : $g9purb = 0;
(isset($_POST['g9pvra']) && $_POST['g9pvra'] == 1) ? $g9pvra = 1 : $g9pvra = 0;
(isset($_POST['g9pvrb']) && $_POST['g9pvrb'] == 1) ? $g9pvrb = 1 : $g9pvrb = 0;
(isset($_POST['g9pwra']) && $_POST['g9pwra'] == 1) ? $g9pwra = 1 : $g9pwra = 0;
(isset($_POST['g9pwrb']) && $_POST['g9pwrb'] == 1) ? $g9pwrb = 1 : $g9pwrb = 0;
(isset($_POST['g9pxra']) && $_POST['g9pxra'] == 1) ? $g9pxra = 1 : $g9pxra = 0;
(isset($_POST['g9pxrb']) && $_POST['g9pxrb'] == 1) ? $g9pxrb = 1 : $g9pxrb = 0;
(isset($_POST['g9pyra']) && $_POST['g9pyra'] == 1) ? $g9pyra = 1 : $g9pyra = 0;
(isset($_POST['g9pyrb']) && $_POST['g9pyrb'] == 1) ? $g9pyrb = 1 : $g9pyrb = 0;
(isset($_POST['g9pzra']) && $_POST['g9pzra'] == 1) ? $g9pzra = 1 : $g9pzra = 0;
(isset($_POST['g9pzrb']) && $_POST['g9pzrb'] == 1) ? $g9pzrb = 1 : $g9pzrb = 0;
(isset($_POST['g9pAra']) && $_POST['g9pAra'] == 1) ? $g9pAra = 1 : $g9pAra = 0;
(isset($_POST['g9pArb']) && $_POST['g9pArb'] == 1) ? $g9pArb = 1 : $g9pArb = 0;
(isset($_POST['g9pBra']) && $_POST['g9pBra'] == 1) ? $g9pBra = 1 : $g9pBra = 0;
(isset($_POST['g9pBrb']) && $_POST['g9pBrb'] == 1) ? $g9pBrb = 1 : $g9pBrb = 0;
(isset($_POST['g9pCra']) && $_POST['g9pCra'] == 1) ? $g9pCra = 1 : $g9pCra = 0;
(isset($_POST['g9pCrb']) && $_POST['g9pCrb'] == 1) ? $g9pCrb = 1 : $g9pCrb = 0;
(isset($_POST['g9pDra']) && $_POST['g9pDra'] == 1) ? $g9pDra = 1 : $g9pDra = 0;
(isset($_POST['g9pDrb']) && $_POST['g9pDrb'] == 1) ? $g9pDrb = 1 : $g9pDrb = 0;
(isset($_POST['g9pEra']) && $_POST['g9pEra'] == 1) ? $g9pEra = 1 : $g9pEra = 0;
(isset($_POST['g9pErb']) && $_POST['g9pErb'] == 1) ? $g9pErb = 1 : $g9pErb = 0;
(isset($_POST['g9pFra']) && $_POST['g9pFra'] == 1) ? $g9pFra = 1 : $g9pFra = 0;
(isset($_POST['g9pFrb']) && $_POST['g9pFrb'] == 1) ? $g9pFrb = 1 : $g9pFrb = 0;
(isset($_POST['g9pGra']) && $_POST['g9pGra'] == 1) ? $g9pGra = 1 : $g9pGra = 0;
(isset($_POST['g9pGrb']) && $_POST['g9pGrb'] == 1) ? $g9pGrb = 1 : $g9pGrb = 0;
(isset($_POST['g9pHra']) && $_POST['g9pHra'] == 1) ? $g9pHra = 1 : $g9pHra = 0;
(isset($_POST['g9pHrb']) && $_POST['g9pHrb'] == 1) ? $g9pHrb = 1 : $g9pHrb = 0;
(isset($_POST['g9pJra']) && $_POST['g9pJra'] == 1) ? $g9pJra = 1 : $g9pJra = 0;
(isset($_POST['g9pJrb']) && $_POST['g9pJrb'] == 1) ? $g9pJrb = 1 : $g9pJrb = 0;
(isset($_POST['g9pKra']) && $_POST['g9pKra'] == 1) ? $g9pKra = 1 : $g9pKra = 0;
(isset($_POST['g9pKrb']) && $_POST['g9pKrb'] == 1) ? $g9pKrb = 1 : $g9pKrb = 0;
(isset($_POST['g9pLra']) && $_POST['g9pLra'] == 1) ? $g9pLra = 1 : $g9pLra = 0;
(isset($_POST['g9pLrb']) && $_POST['g9pLrb'] == 1) ? $g9pLrb = 1 : $g9pLrb = 0;
(isset($_POST['g9pMra']) && $_POST['g9pMra'] == 1) ? $g9pMra = 1 : $g9pMra = 0;
(isset($_POST['g9pMrb']) && $_POST['g9pMrb'] == 1) ? $g9pMrb = 1 : $g9pMrb = 0;
(isset($_POST['g9pNra']) && $_POST['g9pNra'] == 1) ? $g9pNra = 1 : $g9pNra = 0;
(isset($_POST['g9pNrb']) && $_POST['g9pNrb'] == 1) ? $g9pNrb = 1 : $g9pNrb = 0;
(isset($_POST['g9pPra']) && $_POST['g9pPra'] == 1) ? $g9pPra = 1 : $g9pPra = 0;
(isset($_POST['g9pPrb']) && $_POST['g9pPrb'] == 1) ? $g9pPrb = 1 : $g9pPrb = 0;
(isset($_POST['g9pQra']) && $_POST['g9pQra'] == 1) ? $g9pQra = 1 : $g9pQra = 0;
(isset($_POST['g9pQrb']) && $_POST['g9pQrb'] == 1) ? $g9pQrb = 1 : $g9pQrb = 0;
(isset($_POST['g9pRra']) && $_POST['g9pRra'] == 1) ? $g9pRra = 1 : $g9pRra = 0;
(isset($_POST['g9pRrb']) && $_POST['g9pRrb'] == 1) ? $g9pRrb = 1 : $g9pRrb = 0;
(isset($_POST['g9pSra']) && $_POST['g9pSra'] == 1) ? $g9pSra = 1 : $g9pSra = 0;
(isset($_POST['g9pSrb']) && $_POST['g9pSrb'] == 1) ? $g9pSrb = 1 : $g9pSrb = 0;
(isset($_POST['g9pTra']) && $_POST['g9pTra'] == 1) ? $g9pTra = 1 : $g9pTra = 0;
(isset($_POST['g9pTrb']) && $_POST['g9pTrb'] == 1) ? $g9pTrb = 1 : $g9pTrb = 0;

//Grupo 10
(isset($_POST['g10pAra']) && $_POST['g10pAra'] == 1) ? $g10pAra = 1 : $g10pAra = 0;
(isset($_POST['g10pArb']) && $_POST['g10pArb'] == 1) ? $g10pArb = 1 : $g10pArb = 0;
(isset($_POST['g10pBra']) && $_POST['g10pBra'] == 1) ? $g10pBra = 1 : $g10pBra = 0;
(isset($_POST['g10pBrb']) && $_POST['g10pBrb'] == 1) ? $g10pBrb = 1 : $g10pBrb = 0;
(isset($_POST['g10pCra']) && $_POST['g10pCra'] == 1) ? $g10pCra = 1 : $g10pCra = 0;
(isset($_POST['g10pCrb']) && $_POST['g10pCrb'] == 1) ? $g10pCrb = 1 : $g10pCrb = 0;
(isset($_POST['g10pDra']) && $_POST['g10pDra'] == 1) ? $g10pDra = 1 : $g10pDra = 0;
(isset($_POST['g10pDrb']) && $_POST['g10pDrb'] == 1) ? $g10pDrb = 1 : $g10pDrb = 0;
(isset($_POST['g10pEra']) && $_POST['g10pEra'] == 1) ? $g10pEra = 1 : $g10pEra = 0;
(isset($_POST['g10pErb']) && $_POST['g10pErb'] == 1) ? $g10pErb = 1 : $g10pErb = 0;
(isset($_POST['g10pFra']) && $_POST['g10pFra'] == 1) ? $g10pFra = 1 : $g10pFra = 0;
(isset($_POST['g10pFrb']) && $_POST['g10pFrb'] == 1) ? $g10pFrb = 1 : $g10pFrb = 0;
(isset($_POST['g10pGra']) && $_POST['g10pGra'] == 1) ? $g10pGra = 1 : $g10pGra = 0;
(isset($_POST['g10pGrb']) && $_POST['g10pGrb'] == 1) ? $g10pGrb = 1 : $g10pGrb = 0;
(isset($_POST['g10pHra']) && $_POST['g10pHra'] == 1) ? $g10pHra = 1 : $g10pHra = 0;
(isset($_POST['g10pHrb']) && $_POST['g10pHrb'] == 1) ? $g10pHrb = 1 : $g10pHrb = 0;
(isset($_POST['g10pJra']) && $_POST['g10pJra'] == 1) ? $g10pJra = 1 : $g10pJra = 0;
(isset($_POST['g10pJrb']) && $_POST['g10pJrb'] == 1) ? $g10pJrb = 1 : $g10pJrb = 0;
(isset($_POST['g10pKra']) && $_POST['g10pKra'] == 1) ? $g10pKra = 1 : $g10pKra = 0;
(isset($_POST['g10pKrb']) && $_POST['g10pKrb'] == 1) ? $g10pKrb = 1 : $g10pKrb = 0;
(isset($_POST['g10pLra']) && $_POST['g10pLra'] == 1) ? $g10pLra = 1 : $g10pLra = 0;
(isset($_POST['g10pLrb']) && $_POST['g10pLrb'] == 1) ? $g10pLrb = 1 : $g10pLrb = 0;
(isset($_POST['g10pMra']) && $_POST['g10pMra'] == 1) ? $g10pMra = 1 : $g10pMra = 0;
(isset($_POST['g10pMrb']) && $_POST['g10pMrb'] == 1) ? $g10pMrb = 1 : $g10pMrb = 0;
(isset($_POST['g10pNra']) && $_POST['g10pNra'] == 1) ? $g10pNra = 1 : $g10pNra = 0;
(isset($_POST['g10pNrb']) && $_POST['g10pNrb'] == 1) ? $g10pNrb = 1 : $g10pNrb = 0;
(isset($_POST['g10pPra']) && $_POST['g10pPra'] == 1) ? $g10pPra = 1 : $g10pPra = 0;
(isset($_POST['g10pPrb']) && $_POST['g10pPrb'] == 1) ? $g10pPrb = 1 : $g10pPrb = 0;
(isset($_POST['g10pQra']) && $_POST['g10pQra'] == 1) ? $g10pQra = 1 : $g10pQra = 0;
(isset($_POST['g10pQrb']) && $_POST['g10pQrb'] == 1) ? $g10pQrb = 1 : $g10pQrb = 0;
(isset($_POST['g10pRra']) && $_POST['g10pRra'] == 1) ? $g10pRra = 1 : $g10pRra = 0;
(isset($_POST['g10pRrb']) && $_POST['g10pRrb'] == 1) ? $g10pRrb = 1 : $g10pRrb = 0;
(isset($_POST['g10pSra']) && $_POST['g10pSra'] == 1) ? $g10pSra = 1 : $g10pSra = 0;
(isset($_POST['g10pSrb']) && $_POST['g10pSrb'] == 1) ? $g10pSrb = 1 : $g10pSrb = 0;
(isset($_POST['g10pTra']) && $_POST['g10pTra'] == 1) ? $g10pTra = 1 : $g10pTra = 0;
(isset($_POST['g10pTrb']) && $_POST['g10pTrb'] == 1) ? $g10pTrb = 1 : $g10pTrb = 0;
(isset($_POST['g10pUra']) && $_POST['g10pUra'] == 1) ? $g10pUra = 1 : $g10pUra = 0;
(isset($_POST['g10pUrb']) && $_POST['g10pUrb'] == 1) ? $g10pUrb = 1 : $g10pUrb = 0;
(isset($_POST['g10pVra']) && $_POST['g10pVra'] == 1) ? $g10pVra = 1 : $g10pVra = 0;
(isset($_POST['g10pVrb']) && $_POST['g10pVrb'] == 1) ? $g10pVrb = 1 : $g10pVrb = 0;
(isset($_POST['g10pWra']) && $_POST['g10pWra'] == 1) ? $g10pWra = 1 : $g10pWra = 0;
(isset($_POST['g10pWrb']) && $_POST['g10pWrb'] == 1) ? $g10pWrb = 1 : $g10pWrb = 0;
(isset($_POST['g10pXra']) && $_POST['g10pXra'] == 1) ? $g10pXra = 1 : $g10pXra = 0;
(isset($_POST['g10pXrb']) && $_POST['g10pXrb'] == 1) ? $g10pXrb = 1 : $g10pXrb = 0;
(isset($_POST['g10pYra']) && $_POST['g10pYra'] == 1) ? $g10pYra = 1 : $g10pYra = 0;
(isset($_POST['g10pYrb']) && $_POST['g10pYrb'] == 1) ? $g10pYrb = 1 : $g10pYrb = 0;
(isset($_POST['g10pZra']) && $_POST['g10pZra'] == 1) ? $g10pZra = 1 : $g10pZra = 0;
(isset($_POST['g10pZrb']) && $_POST['g10pZrb'] == 1) ? $g10pZrb = 1 : $g10pZrb = 0;
(isset($_POST['g10para']) && $_POST['g10para'] == 1) ? $g10para = 1 : $g10para = 0;
(isset($_POST['g10parb']) && $_POST['g10parb'] == 1) ? $g10parb = 1 : $g10parb = 0;
(isset($_POST['g10pbra']) && $_POST['g10pbra'] == 1) ? $g10pbra = 1 : $g10pbra = 0;
(isset($_POST['g10pbrb']) && $_POST['g10pbrb'] == 1) ? $g10pbrb = 1 : $g10pbrb = 0;
(isset($_POST['g10pcra']) && $_POST['g10pcra'] == 1) ? $g10pcra = 1 : $g10pcra = 0;
(isset($_POST['g10pcrb']) && $_POST['g10pcrb'] == 1) ? $g10pcrb = 1 : $g10pcrb = 0;
(isset($_POST['g10pdra']) && $_POST['g10pdra'] == 1) ? $g10pdra = 1 : $g10pdra = 0;
(isset($_POST['g10pdrb']) && $_POST['g10pdrb'] == 1) ? $g10pdrb = 1 : $g10pdrb = 0;
(isset($_POST['g10pera']) && $_POST['g10pera'] == 1) ? $g10pera = 1 : $g10pera = 0;
(isset($_POST['g10perb']) && $_POST['g10perb'] == 1) ? $g10perb = 1 : $g10perb = 0;
(isset($_POST['g10pfra']) && $_POST['g10pfra'] == 1) ? $g10pfra = 1 : $g10pfra = 0;
(isset($_POST['g10pfrb']) && $_POST['g10pfrb'] == 1) ? $g10pfrb = 1 : $g10pfrb = 0;
(isset($_POST['g10pgra']) && $_POST['g10pgra'] == 1) ? $g10pgra = 1 : $g10pgra = 0;
(isset($_POST['g10pgrb']) && $_POST['g10pgrb'] == 1) ? $g10pgrb = 1 : $g10pgrb = 0;
(isset($_POST['g10phra']) && $_POST['g10phra'] == 1) ? $g10phra = 1 : $g10phra = 0;
(isset($_POST['g10phrb']) && $_POST['g10phrb'] == 1) ? $g10phrb = 1 : $g10phrb = 0;
(isset($_POST['g10pjra']) && $_POST['g10pjra'] == 1) ? $g10pjra = 1 : $g10pjra = 0;
(isset($_POST['g10pjrb']) && $_POST['g10pjrb'] == 1) ? $g10pjrb = 1 : $g10pjrb = 0;
(isset($_POST['g10pkra']) && $_POST['g10pkra'] == 1) ? $g10pkra = 1 : $g10pkra = 0;
(isset($_POST['g10pkrb']) && $_POST['g10pkrb'] == 1) ? $g10pkrb = 1 : $g10pkrb = 0;
(isset($_POST['g10plra']) && $_POST['g10plra'] == 1) ? $g10plra = 1 : $g10plra = 0;
(isset($_POST['g10plrb']) && $_POST['g10plrb'] == 1) ? $g10plrb = 1 : $g10plrb = 0;
(isset($_POST['g10pmra']) && $_POST['g10pmra'] == 1) ? $g10pmra = 1 : $g10pmra = 0;
(isset($_POST['g10pmrb']) && $_POST['g10pmrb'] == 1) ? $g10pmrb = 1 : $g10pmrb = 0;
(isset($_POST['g10pnra']) && $_POST['g10pnra'] == 1) ? $g10pnra = 1 : $g10pnra = 0;
(isset($_POST['g10pnrb']) && $_POST['g10pnrb'] == 1) ? $g10pnrb = 1 : $g10pnrb = 0;
(isset($_POST['g10ppra']) && $_POST['g10ppra'] == 1) ? $g10ppra = 1 : $g10ppra = 0;
(isset($_POST['g10pprb']) && $_POST['g10pprb'] == 1) ? $g10pprb = 1 : $g10pprb = 0;
(isset($_POST['g10pqra']) && $_POST['g10pqra'] == 1) ? $g10pqra = 1 : $g10pqra = 0;
(isset($_POST['g10pqrb']) && $_POST['g10pqrb'] == 1) ? $g10pqrb = 1 : $g10pqrb = 0;
(isset($_POST['g10prra']) && $_POST['g10prra'] == 1) ? $g10prra = 1 : $g10prra = 0;
(isset($_POST['g10prrb']) && $_POST['g10prrb'] == 1) ? $g10prrb = 1 : $g10prrb = 0;
(isset($_POST['g10psra']) && $_POST['g10psra'] == 1) ? $g10psra = 1 : $g10psra = 0;
(isset($_POST['g10psrb']) && $_POST['g10psrb'] == 1) ? $g10psrb = 1 : $g10psrb = 0;
(isset($_POST['g10ptra']) && $_POST['g10ptra'] == 1) ? $g10ptra = 1 : $g10ptra = 0;
(isset($_POST['g10ptrb']) && $_POST['g10ptrb'] == 1) ? $g10ptrb = 1 : $g10ptrb = 0;

//Grupo 11
(isset($_POST['g11para']) && $_POST['g11para'] == 1) ? $g11para = 1 : $g11para = 0;
(isset($_POST['g11parb']) && $_POST['g11parb'] == 1) ? $g11parb = 1 : $g11parb = 0;
(isset($_POST['g11pbra']) && $_POST['g11pbra'] == 1) ? $g11pbra = 1 : $g11pbra = 0;
(isset($_POST['g11pbrb']) && $_POST['g11pbrb'] == 1) ? $g11pbrb = 1 : $g11pbrb = 0;
(isset($_POST['g11pcra']) && $_POST['g11pcra'] == 1) ? $g11pcra = 1 : $g11pcra = 0;
(isset($_POST['g11pcrb']) && $_POST['g11pcrb'] == 1) ? $g11pcrb = 1 : $g11pcrb = 0;
(isset($_POST['g11pdra']) && $_POST['g11pdra'] == 1) ? $g11pdra = 1 : $g11pdra = 0;
(isset($_POST['g11pdrb']) && $_POST['g11pdrb'] == 1) ? $g11pdrb = 1 : $g11pdrb = 0;
(isset($_POST['g11pera']) && $_POST['g11pera'] == 1) ? $g11pera = 1 : $g11pera = 0;
(isset($_POST['g11perb']) && $_POST['g11perb'] == 1) ? $g11perb = 1 : $g11perb = 0;
(isset($_POST['g11pfra']) && $_POST['g11pfra'] == 1) ? $g11pfra = 1 : $g11pfra = 0;
(isset($_POST['g11pfrb']) && $_POST['g11pfrb'] == 1) ? $g11pfrb = 1 : $g11pfrb = 0;
(isset($_POST['g11pgra']) && $_POST['g11pgra'] == 1) ? $g11pgra = 1 : $g11pgra = 0;
(isset($_POST['g11pgrb']) && $_POST['g11pgrb'] == 1) ? $g11pgrb = 1 : $g11pgrb = 0;
(isset($_POST['g11phra']) && $_POST['g11phra'] == 1) ? $g11phra = 1 : $g11phra = 0;
(isset($_POST['g11phrb']) && $_POST['g11phrb'] == 1) ? $g11phrb = 1 : $g11phrb = 0;
(isset($_POST['g11pjra']) && $_POST['g11pjra'] == 1) ? $g11pjra = 1 : $g11pjra = 0;
(isset($_POST['g11pjrb']) && $_POST['g11pjrb'] == 1) ? $g11pjrb = 1 : $g11pjrb = 0;
(isset($_POST['g11pkra']) && $_POST['g11pkra'] == 1) ? $g11pkra = 1 : $g11pkra = 0;
(isset($_POST['g11pkrb']) && $_POST['g11pkrb'] == 1) ? $g11pkrb = 1 : $g11pkrb = 0;
(isset($_POST['g11plra']) && $_POST['g11plra'] == 1) ? $g11plra = 1 : $g11plra = 0;
(isset($_POST['g11plrb']) && $_POST['g11plrb'] == 1) ? $g11plrb = 1 : $g11plrb = 0;
(isset($_POST['g11pmra']) && $_POST['g11pmra'] == 1) ? $g11pmra = 1 : $g11pmra = 0;
(isset($_POST['g11pmrb']) && $_POST['g11pmrb'] == 1) ? $g11pmrb = 1 : $g11pmrb = 0;
(isset($_POST['g11pnra']) && $_POST['g11pnra'] == 1) ? $g11pnra = 1 : $g11pnra = 0;
(isset($_POST['g11pnrb']) && $_POST['g11pnrb'] == 1) ? $g11pnrb = 1 : $g11pnrb = 0;
(isset($_POST['g11ppra']) && $_POST['g11ppra'] == 1) ? $g11ppra = 1 : $g11ppra = 0;
(isset($_POST['g11pprb']) && $_POST['g11pprb'] == 1) ? $g11pprb = 1 : $g11pprb = 0;
(isset($_POST['g11pqra']) && $_POST['g11pqra'] == 1) ? $g11pqra = 1 : $g11pqra = 0;
(isset($_POST['g11pqrb']) && $_POST['g11pqrb'] == 1) ? $g11pqrb = 1 : $g11pqrb = 0;
(isset($_POST['g11prra']) && $_POST['g11prra'] == 1) ? $g11prra = 1 : $g11prra = 0;
(isset($_POST['g11prrb']) && $_POST['g11prrb'] == 1) ? $g11prrb = 1 : $g11prrb = 0;
(isset($_POST['g11psra']) && $_POST['g11psra'] == 1) ? $g11psra = 1 : $g11psra = 0;
(isset($_POST['g11psrb']) && $_POST['g11psrb'] == 1) ? $g11psrb = 1 : $g11psrb = 0;
(isset($_POST['g11ptra']) && $_POST['g11ptra'] == 1) ? $g11ptra = 1 : $g11ptra = 0;
(isset($_POST['g11ptrb']) && $_POST['g11ptrb'] == 1) ? $g11ptrb = 1 : $g11ptrb = 0;
(isset($_POST['g11pura']) && $_POST['g11pura'] == 1) ? $g11pura = 1 : $g11pura = 0;
(isset($_POST['g11purb']) && $_POST['g11purb'] == 1) ? $g11purb = 1 : $g11purb = 0;
(isset($_POST['g11pvra']) && $_POST['g11pvra'] == 1) ? $g11pvra = 1 : $g11pvra = 0;
(isset($_POST['g11pvrb']) && $_POST['g11pvrb'] == 1) ? $g11pvrb = 1 : $g11pvrb = 0;
(isset($_POST['g11pwra']) && $_POST['g11pwra'] == 1) ? $g11pwra = 1 : $g11pwra = 0;
(isset($_POST['g11pwrb']) && $_POST['g11pwrb'] == 1) ? $g11pwrb = 1 : $g11pwrb = 0;
(isset($_POST['g11pxra']) && $_POST['g11pxra'] == 1) ? $g11pxra = 1 : $g11pxra = 0;
(isset($_POST['g11pxrb']) && $_POST['g11pxrb'] == 1) ? $g11pxrb = 1 : $g11pxrb = 0;
(isset($_POST['g11pyra']) && $_POST['g11pyra'] == 1) ? $g11pyra = 1 : $g11pyra = 0;
(isset($_POST['g11pyrb']) && $_POST['g11pyrb'] == 1) ? $g11pyrb = 1 : $g11pyrb = 0;
(isset($_POST['g11pzra']) && $_POST['g11pzra'] == 1) ? $g11pzra = 1 : $g11pzra = 0;
(isset($_POST['g11pzrb']) && $_POST['g11pzrb'] == 1) ? $g11pzrb = 1 : $g11pzrb = 0;
(isset($_POST['g11pAra']) && $_POST['g11pAra'] == 1) ? $g11pAra = 1 : $g11pAra = 0;
(isset($_POST['g11pArb']) && $_POST['g11pArb'] == 1) ? $g11pArb = 1 : $g11pArb = 0;
(isset($_POST['g11pBra']) && $_POST['g11pBra'] == 1) ? $g11pBra = 1 : $g11pBra = 0;
(isset($_POST['g11pBrb']) && $_POST['g11pBrb'] == 1) ? $g11pBrb = 1 : $g11pBrb = 0;
(isset($_POST['g11pCra']) && $_POST['g11pCra'] == 1) ? $g11pCra = 1 : $g11pCra = 0;
(isset($_POST['g11pCrb']) && $_POST['g11pCrb'] == 1) ? $g11pCrb = 1 : $g11pCrb = 0;
(isset($_POST['g11pDra']) && $_POST['g11pDra'] == 1) ? $g11pDra = 1 : $g11pDra = 0;
(isset($_POST['g11pDrb']) && $_POST['g11pDrb'] == 1) ? $g11pDrb = 1 : $g11pDrb = 0;
(isset($_POST['g11pEra']) && $_POST['g11pEra'] == 1) ? $g11pEra = 1 : $g11pEra = 0;
(isset($_POST['g11pErb']) && $_POST['g11pErb'] == 1) ? $g11pErb = 1 : $g11pErb = 0;
(isset($_POST['g11pFra']) && $_POST['g11pFra'] == 1) ? $g11pFra = 1 : $g11pFra = 0;
(isset($_POST['g11pFrb']) && $_POST['g11pFrb'] == 1) ? $g11pFrb = 1 : $g11pFrb = 0;
(isset($_POST['g11pGra']) && $_POST['g11pGra'] == 1) ? $g11pGra = 1 : $g11pGra = 0;
(isset($_POST['g11pGrb']) && $_POST['g11pGrb'] == 1) ? $g11pGrb = 1 : $g11pGrb = 0;
(isset($_POST['g11pHra']) && $_POST['g11pHra'] == 1) ? $g11pHra = 1 : $g11pHra = 0;
(isset($_POST['g11pHrb']) && $_POST['g11pHrb'] == 1) ? $g11pHrb = 1 : $g11pHrb = 0;
(isset($_POST['g11pJra']) && $_POST['g11pJra'] == 1) ? $g11pJra = 1 : $g11pJra = 0;
(isset($_POST['g11pJrb']) && $_POST['g11pJrb'] == 1) ? $g11pJrb = 1 : $g11pJrb = 0;
(isset($_POST['g11pKra']) && $_POST['g11pKra'] == 1) ? $g11pKra = 1 : $g11pKra = 0;
(isset($_POST['g11pKrb']) && $_POST['g11pKrb'] == 1) ? $g11pKrb = 1 : $g11pKrb = 0;
(isset($_POST['g11pLra']) && $_POST['g11pLra'] == 1) ? $g11pLra = 1 : $g11pLra = 0;
(isset($_POST['g11pLrb']) && $_POST['g11pLrb'] == 1) ? $g11pLrb = 1 : $g11pLrb = 0;
(isset($_POST['g11pMra']) && $_POST['g11pMra'] == 1) ? $g11pMra = 1 : $g11pMra = 0;
(isset($_POST['g11pMrb']) && $_POST['g11pMrb'] == 1) ? $g11pMrb = 1 : $g11pMrb = 0;
(isset($_POST['g11pNra']) && $_POST['g11pNra'] == 1) ? $g11pNra = 1 : $g11pNra = 0;
(isset($_POST['g11pNrb']) && $_POST['g11pNrb'] == 1) ? $g11pNrb = 1 : $g11pNrb = 0;
(isset($_POST['g11pPra']) && $_POST['g11pPra'] == 1) ? $g11pPra = 1 : $g11pPra = 0;
(isset($_POST['g11pPrb']) && $_POST['g11pPrb'] == 1) ? $g11pPrb = 1 : $g11pPrb = 0;
(isset($_POST['g11pQra']) && $_POST['g11pQra'] == 1) ? $g11pQra = 1 : $g11pQra = 0;
(isset($_POST['g11pQrb']) && $_POST['g11pQrb'] == 1) ? $g11pQrb = 1 : $g11pQrb = 0;
(isset($_POST['g11pRra']) && $_POST['g11pRra'] == 1) ? $g11pRra = 1 : $g11pRra = 0;
(isset($_POST['g11pRrb']) && $_POST['g11pRrb'] == 1) ? $g11pRrb = 1 : $g11pRrb = 0;
(isset($_POST['g11pSra']) && $_POST['g11pSra'] == 1) ? $g11pSra = 1 : $g11pSra = 0;
(isset($_POST['g11pSrb']) && $_POST['g11pSrb'] == 1) ? $g11pSrb = 1 : $g11pSrb = 0;
(isset($_POST['g11pTra']) && $_POST['g11pTra'] == 1) ? $g11pTra = 1 : $g11pTra = 0;
(isset($_POST['g11pTrb']) && $_POST['g11pTrb'] == 1) ? $g11pTrb = 1 : $g11pTrb = 0;

//Grupo 12
(isset($_POST['g12pAra']) && $_POST['g12pAra'] == 1) ? $g12pAra = 1 : $g12pAra = 0;
(isset($_POST['g12pArb']) && $_POST['g12pArb'] == 1) ? $g12pArb = 1 : $g12pArb = 0;
(isset($_POST['g12pBra']) && $_POST['g12pBra'] == 1) ? $g12pBra = 1 : $g12pBra = 0;
(isset($_POST['g12pBrb']) && $_POST['g12pBrb'] == 1) ? $g12pBrb = 1 : $g12pBrb = 0;
(isset($_POST['g12pCra']) && $_POST['g12pCra'] == 1) ? $g12pCra = 1 : $g12pCra = 0;
(isset($_POST['g12pCrb']) && $_POST['g12pCrb'] == 1) ? $g12pCrb = 1 : $g12pCrb = 0;
(isset($_POST['g12pDra']) && $_POST['g12pDra'] == 1) ? $g12pDra = 1 : $g12pDra = 0;
(isset($_POST['g12pDrb']) && $_POST['g12pDrb'] == 1) ? $g12pDrb = 1 : $g12pDrb = 0;
(isset($_POST['g12pEra']) && $_POST['g12pEra'] == 1) ? $g12pEra = 1 : $g12pEra = 0;
(isset($_POST['g12pErb']) && $_POST['g12pErb'] == 1) ? $g12pErb = 1 : $g12pErb = 0;
(isset($_POST['g12pFra']) && $_POST['g12pFra'] == 1) ? $g12pFra = 1 : $g12pFra = 0;
(isset($_POST['g12pFrb']) && $_POST['g12pFrb'] == 1) ? $g12pFrb = 1 : $g12pFrb = 0;
(isset($_POST['g12pGra']) && $_POST['g12pGra'] == 1) ? $g12pGra = 1 : $g12pGra = 0;
(isset($_POST['g12pGrb']) && $_POST['g12pGrb'] == 1) ? $g12pGrb = 1 : $g12pGrb = 0;
(isset($_POST['g12pHra']) && $_POST['g12pHra'] == 1) ? $g12pHra = 1 : $g12pHra = 0;
(isset($_POST['g12pHrb']) && $_POST['g12pHrb'] == 1) ? $g12pHrb = 1 : $g12pHrb = 0;
(isset($_POST['g12pJra']) && $_POST['g12pJra'] == 1) ? $g12pJra = 1 : $g12pJra = 0;
(isset($_POST['g12pJrb']) && $_POST['g12pJrb'] == 1) ? $g12pJrb = 1 : $g12pJrb = 0;
(isset($_POST['g12pKra']) && $_POST['g12pKra'] == 1) ? $g12pKra = 1 : $g12pKra = 0;
(isset($_POST['g12pKrb']) && $_POST['g12pKrb'] == 1) ? $g12pKrb = 1 : $g12pKrb = 0;
(isset($_POST['g12pLra']) && $_POST['g12pLra'] == 1) ? $g12pLra = 1 : $g12pLra = 0;
(isset($_POST['g12pLrb']) && $_POST['g12pLrb'] == 1) ? $g12pLrb = 1 : $g12pLrb = 0;
(isset($_POST['g12pMra']) && $_POST['g12pMra'] == 1) ? $g12pMra = 1 : $g12pMra = 0;
(isset($_POST['g12pMrb']) && $_POST['g12pMrb'] == 1) ? $g12pMrb = 1 : $g12pMrb = 0;
(isset($_POST['g12pNra']) && $_POST['g12pNra'] == 1) ? $g12pNra = 1 : $g12pNra = 0;
(isset($_POST['g12pNrb']) && $_POST['g12pNrb'] == 1) ? $g12pNrb = 1 : $g12pNrb = 0;
(isset($_POST['g12pPra']) && $_POST['g12pPra'] == 1) ? $g12pPra = 1 : $g12pPra = 0;
(isset($_POST['g12pPrb']) && $_POST['g12pPrb'] == 1) ? $g12pPrb = 1 : $g12pPrb = 0;
(isset($_POST['g12pQra']) && $_POST['g12pQra'] == 1) ? $g12pQra = 1 : $g12pQra = 0;
(isset($_POST['g12pQrb']) && $_POST['g12pQrb'] == 1) ? $g12pQrb = 1 : $g12pQrb = 0;
(isset($_POST['g12pRra']) && $_POST['g12pRra'] == 1) ? $g12pRra = 1 : $g12pRra = 0;
(isset($_POST['g12pRrb']) && $_POST['g12pRrb'] == 1) ? $g12pRrb = 1 : $g12pRrb = 0;
(isset($_POST['g12pSra']) && $_POST['g12pSra'] == 1) ? $g12pSra = 1 : $g12pSra = 0;
(isset($_POST['g12pSrb']) && $_POST['g12pSrb'] == 1) ? $g12pSrb = 1 : $g12pSrb = 0;
(isset($_POST['g12pTra']) && $_POST['g12pTra'] == 1) ? $g12pTra = 1 : $g12pTra = 0;
(isset($_POST['g12pTrb']) && $_POST['g12pTrb'] == 1) ? $g12pTrb = 1 : $g12pTrb = 0;
(isset($_POST['g12pUra']) && $_POST['g12pUra'] == 1) ? $g12pUra = 1 : $g12pUra = 0;
(isset($_POST['g12pUrb']) && $_POST['g12pUrb'] == 1) ? $g12pUrb = 1 : $g12pUrb = 0;
(isset($_POST['g12pVra']) && $_POST['g12pVra'] == 1) ? $g12pVra = 1 : $g12pVra = 0;
(isset($_POST['g12pVrb']) && $_POST['g12pVrb'] == 1) ? $g12pVrb = 1 : $g12pVrb = 0;
(isset($_POST['g12pWra']) && $_POST['g12pWra'] == 1) ? $g12pWra = 1 : $g12pWra = 0;
(isset($_POST['g12pWrb']) && $_POST['g12pWrb'] == 1) ? $g12pWrb = 1 : $g12pWrb = 0;
(isset($_POST['g12pXra']) && $_POST['g12pXra'] == 1) ? $g12pXra = 1 : $g12pXra = 0;
(isset($_POST['g12pXrb']) && $_POST['g12pXrb'] == 1) ? $g12pXrb = 1 : $g12pXrb = 0;
(isset($_POST['g12pYra']) && $_POST['g12pYra'] == 1) ? $g12pYra = 1 : $g12pYra = 0;
(isset($_POST['g12pYrb']) && $_POST['g12pYrb'] == 1) ? $g12pYrb = 1 : $g12pYrb = 0;
(isset($_POST['g12pZra']) && $_POST['g12pZra'] == 1) ? $g12pZra = 1 : $g12pZra = 0;
(isset($_POST['g12pZrb']) && $_POST['g12pZrb'] == 1) ? $g12pZrb = 1 : $g12pZrb = 0;
(isset($_POST['g12para']) && $_POST['g12para'] == 1) ? $g12para = 1 : $g12para = 0;
(isset($_POST['g12parb']) && $_POST['g12parb'] == 1) ? $g12parb = 1 : $g12parb = 0;
(isset($_POST['g12pbra']) && $_POST['g12pbra'] == 1) ? $g12pbra = 1 : $g12pbra = 0;
(isset($_POST['g12pbrb']) && $_POST['g12pbrb'] == 1) ? $g12pbrb = 1 : $g12pbrb = 0;
(isset($_POST['g12pcra']) && $_POST['g12pcra'] == 1) ? $g12pcra = 1 : $g12pcra = 0;
(isset($_POST['g12pcrb']) && $_POST['g12pcrb'] == 1) ? $g12pcrb = 1 : $g12pcrb = 0;
(isset($_POST['g12pdra']) && $_POST['g12pdra'] == 1) ? $g12pdra = 1 : $g12pdra = 0;
(isset($_POST['g12pdrb']) && $_POST['g12pdrb'] == 1) ? $g12pdrb = 1 : $g12pdrb = 0;
(isset($_POST['g12pera']) && $_POST['g12pera'] == 1) ? $g12pera = 1 : $g12pera = 0;
(isset($_POST['g12perb']) && $_POST['g12perb'] == 1) ? $g12perb = 1 : $g12perb = 0;
(isset($_POST['g12pfra']) && $_POST['g12pfra'] == 1) ? $g12pfra = 1 : $g12pfra = 0;
(isset($_POST['g12pfrb']) && $_POST['g12pfrb'] == 1) ? $g12pfrb = 1 : $g12pfrb = 0;
(isset($_POST['g12pgra']) && $_POST['g12pgra'] == 1) ? $g12pgra = 1 : $g12pgra = 0;
(isset($_POST['g12pgrb']) && $_POST['g12pgrb'] == 1) ? $g12pgrb = 1 : $g12pgrb = 0;
(isset($_POST['g12phra']) && $_POST['g12phra'] == 1) ? $g12phra = 1 : $g12phra = 0;
(isset($_POST['g12phrb']) && $_POST['g12phrb'] == 1) ? $g12phrb = 1 : $g12phrb = 0;
(isset($_POST['g12pjra']) && $_POST['g12pjra'] == 1) ? $g12pjra = 1 : $g12pjra = 0;
(isset($_POST['g12pjrb']) && $_POST['g12pjrb'] == 1) ? $g12pjrb = 1 : $g12pjrb = 0;
(isset($_POST['g12pkra']) && $_POST['g12pkra'] == 1) ? $g12pkra = 1 : $g12pkra = 0;
(isset($_POST['g12pkrb']) && $_POST['g12pkrb'] == 1) ? $g12pkrb = 1 : $g12pkrb = 0;
(isset($_POST['g12plra']) && $_POST['g12plra'] == 1) ? $g12plra = 1 : $g12plra = 0;
(isset($_POST['g12plrb']) && $_POST['g12plrb'] == 1) ? $g12plrb = 1 : $g12plrb = 0;
(isset($_POST['g12pmra']) && $_POST['g12pmra'] == 1) ? $g12pmra = 1 : $g12pmra = 0;
(isset($_POST['g12pmrb']) && $_POST['g12pmrb'] == 1) ? $g12pmrb = 1 : $g12pmrb = 0;
(isset($_POST['g12pnra']) && $_POST['g12pnra'] == 1) ? $g12pnra = 1 : $g12pnra = 0;
(isset($_POST['g12pnrb']) && $_POST['g12pnrb'] == 1) ? $g12pnrb = 1 : $g12pnrb = 0;
(isset($_POST['g12ppra']) && $_POST['g12ppra'] == 1) ? $g12ppra = 1 : $g12ppra = 0;
(isset($_POST['g12pprb']) && $_POST['g12pprb'] == 1) ? $g12pprb = 1 : $g12pprb = 0;
(isset($_POST['g12pqra']) && $_POST['g12pqra'] == 1) ? $g12pqra = 1 : $g12pqra = 0;
(isset($_POST['g12pqrb']) && $_POST['g12pqrb'] == 1) ? $g12pqrb = 1 : $g12pqrb = 0;
(isset($_POST['g12prra']) && $_POST['g12prra'] == 1) ? $g12prra = 1 : $g12prra = 0;
(isset($_POST['g12prrb']) && $_POST['g12prrb'] == 1) ? $g12prrb = 1 : $g12prrb = 0;
(isset($_POST['g12psra']) && $_POST['g12psra'] == 1) ? $g12psra = 1 : $g12psra = 0;
(isset($_POST['g12psrb']) && $_POST['g12psrb'] == 1) ? $g12psrb = 1 : $g12psrb = 0;
(isset($_POST['g12ptra']) && $_POST['g12ptra'] == 1) ? $g12ptra = 1 : $g12ptra = 0;
(isset($_POST['g12ptrb']) && $_POST['g12ptrb'] == 1) ? $g12ptrb = 1 : $g12ptrb = 0;

?>

<body>

    <br>

    <div class="container">
        <?php
        $puntajeAL = //yasta
            $g1parb +
            $g1pbra +
            $g1pcra +
            $g1pgrb +
            $g1phrb +
            $g1pjra +
            $g1pkrb +
            $g1plra +
            $g1pmrb +
            $g1prrb +
            $g1psra +
            $g1ptra +
            $g1pxrb +
            $g1pyrb +
            $g1pzra +

            $g2pAra +
            $g2pBrb +
            $g2pCra +
            $g2pDrb +
            $g2pEra +
            $g2pFrb +
            $g2pGrb +
            $g2pHra +
            $g2pJrb +
            $g2pKrb +
            $g2pLra +
            $g2pMra +
            $g2pNrb +
            $g2pPrb +
            $g2pQra +
            $g2pRrb +
            $g2pSra +
            $g2pTrb +

            $g3pdrb +
            $g3perb +
            $g3pfra +
            $g3pgrb +
            $g3phra +
            $g3pjrb +
            $g3pkrb +
            $g3plra +
            $g3pmra +
            $g3pnra +
            $g3pprb +
            $g3pqra +

            $g4pDrb +
            $g4pEra +
            $g4pFrb +
            $g4pRrb +
            $g4pSrb +
            $g4pTra +
            $g4pgrb +
            $g4phrb +
            $g4pjra +

            $g5pkrb +
            $g5plrb +
            $g5pmra +
            $g5prrb +
            $g5psra +
            $g5ptra +

            $g6pKrb +
            $g6pLrb +
            $g6pMra +
            $g6pNra +
            $g6pPrb +
            $g6pQrb +
            $g6pRra +
            $g6pSra +
            $g6pTrb +

            $g7parb +
            $g7pbra +
            $g7pcrb +
            $g7pdra +
            $g7pera +
            $g7pfrb +
            $g7pkrb +
            $g7plra +
            $g7pmrb +

            $g8pArb +
            $g8pBrb +
            $g8pCra +
            $g8pUrb +
            $g8pVra +
            $g8pWra +

            $g9pdrb +
            $g9pera +
            $g9pfrb +

            $g10pArb +
            $g10pBra +
            $g10pCrb +
            $g10pNrb +
            $g10pPrb +
            $g10pQra +
            $g10pUrb +
            $g10pVra +
            $g10pWra +

            $g11parb +
            $g11pbra +
            $g11pcra +
            $g11pdrb +
            $g11perb +
            $g11pfra +
            $g11pgra +
            $g11phrb +
            $g11pjrb +
            $g11pkrb +
            $g11plrb +
            $g11pmra +

            $g12pDrb +
            $g12pErb +
            $g12pFra +
            $g12pGrb +
            $g12pHra +
            $g12pJrb +
            $g12pKrb +
            $g12pLra +
            $g12pMrb +
            $g12pNra +
            $g12pPrb +
            $g12pQrb +
            $g12pUrb +
            $g12pVra +
            $g12pWrb;

        echo '
                <script>
                    console.log("AL: ' . json_encode($puntajeAL) . '");
                </script>';

        $puntajeMe =
            $g1pDrb +
            $g1pErb +
            $g1pFra +
            $g1pGrb +
            $g1pHrb +
            $g1pJra +
            $g1pKrb +
            $g1pLrb +
            $g1pMra +
            $g1pRra +
            $g1pSrb +
            $g1pTrb +

            $g5pDrb +
            $g5pErb +
            $g5pFra +
            $g5pKrb +
            $g5pLra +
            $g5pMrb +
            $g5pRra +
            $g5pSrb +
            $g5pTrb +

            $g6pXrb +
            $g6pYra +
            $g6pZrb +
            $g6para +
            $g6pbrb +
            $g6pcrb +
            $g6pdra +
            $g6perb +
            $g6pfrb +
            $g6pkra +
            $g6plrb +
            $g6pmrb +
            $g6pnrb +
            $g6ppra +
            $g6pqrb +
            $g6prra +
            $g6psrb +
            $g6ptrb +

            $g7pxrb +
            $g7pyrb +
            $g7pzra +
            $g7pGrb +
            $g7pHrb +
            $g7pJra +
            $g7pKrb +
            $g7pLra +
            $g7pMrb +
            $g7pRrb +
            $g7pSrb +
            $g7pTra +

            $g8para +
            $g8pbrb +
            $g8pcrb +
            $g8pgrb +
            $g8phrb +
            $g8pjra +
            $g8prrb +
            $g8psra +
            $g8ptrb +

            $g9pAra +
            $g9pBrb +
            $g9pCrb +
            $g9pGra +
            $g9pHrb +
            $g9pJrb +
            $g9pNrb +
            $g9pPra +
            $g9pQrb +

            $g10parb +
            $g10pbrb +
            $g10pcra +
            $g10pdrb +
            $g10perb +
            $g10pfra +
            $g10pgrb +
            $g10phra +
            $g10pjrb +
            $g10prrb +
            $g10psra +
            $g10ptrb +

            $g11pDrb +
            $g11pEra +
            $g11pFrb +
            $g11pNra +
            $g11pPrb +
            $g11pQrb +
            $g11pRrb +
            $g11pSra +
            $g11pTra +

            $g12pdrb +
            $g12perb +
            $g12pfra +
            $g12pnra +
            $g12pprb +
            $g12pqrb +
            $g12prra +
            $g12psrb +
            $g12ptrb;
        echo '
                <script>
                    console.log("Me: ' . json_encode($puntajeMe) . '");
                </script>';

        $puntajeCa =
            $g1pdrb +
            $g1pera +
            $g1pfrb +

            $g5parb +
            $g5pbrb +
            $g5pcra +
            $g5pdra +
            $g5perb +
            $g5pfrb +
            $g5pgra +
            $g5phrb +
            $g5pjrb +

            $g6pGrb +
            $g6pHra +
            $g6pJrb +
            $g6pXra +
            $g6pYrb +
            $g6pZrb +
            $g6pdrb +
            $g6pera +
            $g6pfra +

            $g7para +
            $g7pbrb +
            $g7pcrb +
            $g7pxrb +
            $g7pyra +
            $g7pzrb +

            $g8pAra +
            $g8pBrb +
            $g8pCrb +
            $g8pGra +
            $g8pHrb +
            $g8pJrb +
            $g8pXrb +
            $g8pYrb +
            $g8pZra +
            $g8parb +
            $g8pbra +
            $g8pcrb +
            $g8pdrb +
            $g8pera +
            $g8pfrb +
            $g8pgrb +
            $g8phrb +
            $g8pjra +

            $g9pdra +
            $g9perb +
            $g9pfrb +
            $g9pgrb +
            $g9phra +
            $g9pjrb +
            $g9pArb +
            $g9pBra +
            $g9pCrb +
            $g9pDrb +
            $g9pEra +
            $g9pFrb +
            $g9pGrb +
            $g9pHrb +
            $g9pJra +

            $g10pGra +
            $g10pHrb +
            $g10pJrb +
            $g10parb +
            $g10pbra +
            $g10pcrb +
            $g10pgrb +
            $g10phrb +
            $g10pjra +

            $g11prra +
            $g11psrb +
            $g11ptrb +
            $g11pDrb +
            $g11pErb +
            $g11pFra +

            $g12pArb +
            $g12pBra +
            $g12pCrb +
            $g12pUra +
            $g12pVrb +
            $g12pWrb +
            $g12pdra +
            $g12perb +
            $g12pfrb;
        echo '
                <script>
                    console.log("Ca: ' . json_encode($puntajeCa) . '");
                </script>';

        $puntajeCi =
            $g1purb +
            $g1pvrb +
            $g1pwra +
            $g1pDra +
            $g1pErb +
            $g1pFrb +
            $g1pKrb +
            $g1pLra +
            $g1pMrb +

            $g2pRrb +
            $g2pSra +
            $g2pTrb +
            $g2pUrb +
            $g2pVrb +
            $g2pWra +
            $g2pkrb +
            $g2plra +
            $g2pmrb +
            $g2pnra +
            $g2pprb +
            $g2pqrb +
            $g2prrb +
            $g2psra +
            $g2ptrb +

            $g3prra +
            $g3psrb +
            $g3ptrb +
            $g3purb +
            $g3pvra +
            $g3pwrb +
            $g3pArb +
            $g3pBra +
            $g3pCrb +
            $g3pDrb +
            $g3pErb +
            $g3pFra +
            $g3pKrb +
            $g3pLra +
            $g3pMrb +
            $g3pNrb +
            $g3pPrb +
            $g3pQra +
            $g3pRra +
            $g3pSra +
            $g3pTrb +

            $g4pUrb +
            $g4pVra +
            $g4pWrb +
            $g4parb +
            $g4pbra +
            $g4pcrb +
            $g4pkra +
            $g4plrb +
            $g4pmrb +
            $g4pnra +
            $g4pprb +
            $g4pqrb +
            $g4prrb +
            $g4psra +
            $g4ptrb +

            $g5prrb +
            $g5psrb +
            $g5ptra +
            $g5pura +
            $g5pvrb +
            $g5pwrb +
            $g5pArb +
            $g5pBra +
            $g5pCrb +
            $g5pGrb +
            $g5pHrb +
            $g5pJra +
            $g5pKrb +
            $g5pLrb +
            $g5pMra +
            $g5pNrb +
            $g5pPrb +
            $g5pQra +

            $g6pNrb +
            $g6pPrb +
            $g6pQra +
            $g6pRrb +
            $g6pSrb +
            $g6pTra +
            $g6pUrb +
            $g6pVra +
            $g6pWrb +

            $g7pura +
            $g7pvrb +
            $g7pwrb +
            $g7pNra +
            $g7pPra +
            $g7pQrb +
            $g7pRrb +
            $g7pSra +
            $g7pTrb +

            $g9pNra +
            $g9pPra +
            $g9pQrb +
            $g9pRra +
            $g9pSrb +
            $g9pTrb +

            $g12pnrb +
            $g12pprb +
            $g12pqra;
        echo '
            <script>
                console.log("Ci: ' . json_encode($puntajeCi) . '");
            </script>';

        $puntajePe =
            $g1pdrb +
            $g1perb +
            $g1pfra +
            $g1pxra +
            $g1pyrb +
            $g1pzrb +
            $g1pDrb +
            $g1pEra +
            $g1pFrb +

            $g2pGrb +
            $g2pHrb +
            $g2pJra +
            $g2parb +
            $g2pbra +
            $g2pcrb +
            $g2pdrb +
            $g2pera +
            $g2pfrb +
            $g2pgra +
            $g2phrb +
            $g2pjrb +

            $g3parb +
            $g3pbrb +
            $g3pcra +

            $g4pAra +
            $g4pBrb +
            $g4pCrb +
            $g4pGra +
            $g4pHrb +
            $g4pJrb +
            $g4pRra +
            $g4pSrb +
            $g4pTrb +
            $g4para +
            $g4pbrb +
            $g4pcrb +
            $g4pdrb +
            $g4pera +
            $g4pfrb +
            $g4pgrb +
            $g4phra +
            $g4pjrb +

            $g5para +
            $g5pbrb +
            $g5pcrb +
            $g5pdrb +
            $g5pera +
            $g5pfrb +
            $g5pkrb +
            $g5plra +
            $g5pmrb +
            $g5prra +
            $g5psrb +
            $g5ptrb +
            $g5purb +
            $g5pvrb +
            $g5pwra +
            $g5pDrb +
            $g5pEra +
            $g5pFrb +
            $g5pGrb +
            $g5pHra +
            $g5pJrb +

            $g6pGra +
            $g6pHrb +
            $g6pJra +
            $g6pXrb +
            $g6pYrb +
            $g6pZra +
            $g6parb +
            $g6pbra +
            $g6pcrb +
            $g6pdra +
            $g6perb +
            $g6pfrb +

            $g7pgrb +
            $g7phrb +
            $g7pjra +
            $g7prrb +
            $g7psra +
            $g7ptra +
            $g7pGrb +
            $g7pHra +
            $g7pJrb +

            $g8pDra +
            $g8pErb +
            $g8pFrb +
            $g8pGrb +
            $g8pHra +
            $g8pJrb +
            $g8pKrb +
            $g8pLrb +
            $g8pMra +
            $g8pNrb +
            $g8pPra +
            $g8pQrb +

            $g9parb +
            $g9pbra +
            $g9pcra +
            $g9pdrb +
            $g9perb +
            $g9pfra +
            $g9pgrb +
            $g9phrb +
            $g9pjra +
            $g9pkrb +
            $g9plra +
            $g9pmrb +

            $g10pDra +
            $g10pErb +
            $g10pFra +
            $g10pGrb +
            $g10pHra +
            $g10pJrb +
            $g10pTra +

            $g11pgrb +
            $g11phrb +
            $g11pjra +
            $g11pkra +
            $g11plrb +
            $g11pmrb +

            $g12pArb +
            $g12pBrb +
            $g12pCra +
            $g12pGrb +
            $g12pHrb +
            $g12pJra +
            $g12pTra;
        echo '
                <script>
                    console.log("Pe: ' . json_encode($puntajePe) . '");
                </script>';

        $puntajeAr =
            $g1pKra +
            $g1pLrb +
            $g1pMrb +
            $g1pNrb +
            $g1pPrb +
            $g1pQra +
            $g1pRrb +
            $g1pSrb +
            $g1pTra +

            $g2pgrb +
            $g2phrb +
            $g2pjra +
            $g2pkra +
            $g2plrb +
            $g2pmrb +

            $g4pgra +
            $g4phrb +
            $g4pjrb +
            $g4pkrb +
            $g4plrb +
            $g4pmra +
            $g4prra +
            $g4psrb +
            $g4ptrb +

            $g5pGra +
            $g5pHrb +
            $g5pJrb +

            $g7prra +
            $g7psrb +
            $g7ptrb +
            $g7purb +
            $g7pvra +
            $g7pwrb +
            $g7pGra +
            $g7pHrb +
            $g7pJrb +
            $g7pRra +
            $g7pSrb +
            $g7pTrb +

            $g8pXrb +
            $g8pYra +
            $g8pZrb +
            $g8pdra +
            $g8perb +
            $g8pfrb +
            $g8pnrb +
            $g8ppra +
            $g8pqrb +

            $g9prrb +
            $g9psrb +
            $g9ptra +
            $g9purb +
            $g9pvra +
            $g9pwra +
            $g9pDrb +
            $g9pErb +
            $g9pFra +
            $g9pNrb +
            $g9pPrb +
            $g9pQra +

            $g10pRra +
            $g10pSrb +
            $g10pTrb +

            $g11purb +
            $g11pvrb +
            $g11pwra +

            $g12pRrb +
            $g12pSrb +
            $g12pTra +
            $g12parb +
            $g12pbra +
            $g12pcrb +
            $g12pgrb +
            $g12phra +
            $g12pjrb +
            $g12pnrb +
            $g12ppra +
            $g12pqrb;
        echo '
            <script>
                console.log("Ar: ' . json_encode($puntajeAr) . '");
            </script>';

        $puntajeLi =
            $g1pnra +
            $g1pprb +
            $g1pqrb +

            $g3para +
            $g3pbrb +
            $g3pcrb +
            $g3prrb +
            $g3psrb +
            $g3ptra +

            $g4pGrb +
            $g4pHra +
            $g4pJrb +
            $g4pKrb +
            $g4pLrb +
            $g4pMra +
            $g4pNra +
            $g4pPrb +
            $g4pQrb +
            $g4pUra +
            $g4pVrb +
            $g4pWrb +

            $g5pgrb +
            $g5phra +
            $g5pjrb +

            $g6pArb +
            $g6pBrb +
            $g6pCra +
            $g6pUrb +
            $g6pVrb +
            $g6pWra +

            $g7prrb +
            $g7psra +
            $g7ptrb +
            $g7purb +
            $g7pvrb +
            $g7pwra +

            $g9pdra +
            $g9perb +
            $g9pfrb +
            $g9pkra +
            $g9plrb +
            $g9pmrb +
            $g9prrb +
            $g9psra +
            $g9ptrb +
            $g9purb +
            $g9pvrb +
            $g9pwra +

            $g10pKra +
            $g10pLrb +
            $g10pMrb +
            $g10pRrb +
            $g10pSra +
            $g10pTrb +

            $g11pkrb +
            $g11plra +
            $g11pmrb +
            $g11purb +
            $g11pvra +
            $g11pwrb +

            $g12pRrb +
            $g12pSra +
            $g12pTrb;
        echo '
            <script>
                console.log("Li: ' . json_encode($puntajeLi) . '");
            </script>';

        $puntajeMu =
            $g1pxrb +
            $g1pyra +
            $g1pzrb +
            $g1pRrb +
            $g1pSra +
            $g1pTrb +

            $g2pnrb +
            $g2pprb +
            $g2pqra +
            $g2prrb +
            $g2psrb +
            $g2ptra +

            $g3pNrb +
            $g3pPra +
            $g3pQrb +

            $g5pArb +
            $g5pBrb +
            $g5pCra +
            $g5pDrb +
            $g5pEra +
            $g5pFrb +

            $g6parb +
            $g6pbrb +
            $g6pcra +
            $g6pnra +
            $g6pprb +
            $g6pqrb +

            $g8pnra +
            $g8pprb +
            $g8pqrb +

            $g9pRrb +
            $g9pSra +
            $g9pTrb +

            $g10pnrb +
            $g10ppra +
            $g10pqrb +

            $g11pAra +
            $g11pBrb +
            $g11pCrb +
            $g11pGrb +
            $g11pHrb +
            $g11pJra +

            $g12pgrb +
            $g12phrb +
            $g12pjra;
        echo '
            <script>
                console.log("Mu: ' . json_encode($puntajeMu) . '");
            </script>';

        $puntajeSo =
            $g1pdra +
            $g1perb +
            $g1pfrb +

            $g2pUra +
            $g2pVrb +
            $g2pWrb +
            $g2para +
            $g2pbrb +
            $g2pcrb +

            $g3prrb +
            $g3psra +
            $g3ptrb +
            $g3pxra +
            $g3pyrb +
            $g3pzrb +
            $g3pArb +
            $g3pBrb +
            $g3pCra +
            $g3pDrb +
            $g3pEra +
            $g3pFrb +
            $g3pKrb +
            $g3pLra +
            $g3pMrb +

            $g4pUrb +
            $g4pVrb +
            $g4pWra +
            $g4parb +
            $g4pbrb +
            $g4pcra +
            $g4pkrb +
            $g4plra +
            $g4pmrb +

            $g5pdrb +
            $g5perb +
            $g5pfra +
            $g5pgrb +
            $g5phrb +
            $g5pjra +
            $g5pkra +
            $g5plrb +
            $g5pmrb +
            $g5pDra +
            $g5pErb +
            $g5pFrb +
            $g5pNra +
            $g5pPrb +
            $g5pQrb +

            $g6parb +
            $g6pbra +
            $g6pcrb +
            $g6pgrb +
            $g6phra +
            $g6pjrb +
            $g6pnrb +
            $g6pprb +
            $g6pqra +

            $g7parb +
            $g7pbrb +
            $g7pcra +
            $g7pgra +
            $g7phrb +
            $g7pjrb +
            $g7pura +
            $g7pvrb +
            $g7pwrb +
            $g7pNrb +
            $g7pPra +
            $g7pQra +

            $g8pAra +
            $g8pBrb +
            $g8pCrb +
            $g8pXra +
            $g8pYrb +
            $g8pZrb +
            $g8parb +
            $g8pbrb +
            $g8pcra +

            $g9para +
            $g9pbrb +
            $g9pcrb +
            $g9pgra +
            $g9phrb +
            $g9pjrb +
            $g9pkrb +
            $g9plrb +
            $g9pmra +
            $g9prra +
            $g9psrb +
            $g9ptrb +
            $g9purb +
            $g9pvra +
            $g9pwrb +
            $g9pRra +
            $g9pSrb +
            $g9pTrb +

            $g10pXrb +
            $g10pYra +
            $g10pZrb +
            $g10pdrb +
            $g10pera +
            $g10pfrb +
            $g10pnrb +
            $g10pprb +
            $g10pqra +
            $g10prrb +
            $g10psrb +
            $g10ptra +

            $g11pArb +
            $g11pBrb +
            $g11pCra +
            $g11pKrb +
            $g11pLrb +
            $g11pMra +

            $g12parb +
            $g12pbrb +
            $g12pcra +
            $g12prrb +
            $g12psra +
            $g12ptrb;
        echo '
            <script>
                console.log("So: ' . json_encode($puntajeSo) . '");
            </script>';

        $puntajeAd =
            $g1pArb +
            $g1pBrb +
            $g1pCra +

            $g2pRrb +
            $g2pSrb +
            $g2pTra +
            $g2pdrb +
            $g2perb +
            $g2pfra +
            $g2pnrb +
            $g2ppra +
            $g2pqrb +

            $g3parb +
            $g3pbra +
            $g3pcrb +
            $g3pxrb +
            $g3pyrb +
            $g3pzra +
            $g3pAra +
            $g3pBrb +
            $g3pCrb +
            $g3pKrb +
            $g3pLrb +
            $g3pMra +
            $g3pRrb +
            $g3pSrb +
            $g3pTra +

            $g4pGrb +
            $g4pHrb +
            $g4pJra +
            $g4pKrb +
            $g4pLra +
            $g4pMrb +
            $g4pRrb +
            $g4pSra +
            $g4pTrb +
            $g4para +
            $g4pbrb +
            $g4pcrb +
            $g4pdrb +
            $g4perb +
            $g4pfra +
            $g4pnrb +
            $g4ppra +
            $g4pqrb +

            $g5pgra +
            $g5phrb +
            $g5pjrb +
            $g5pxra +
            $g5pyrb +
            $g5pzrb +
            $g5pKra +
            $g5pLrb +
            $g5pMra +

            $g6pArb +
            $g6pBra +
            $g6pCrb +
            $g6pXra +
            $g6pYrb +
            $g6pZrb +
            $g6pgra +
            $g6phrb +
            $g6pjrb +
            $g6pkrb +
            $g6plrb +
            $g6pmra +

            $g7para +
            $g7pbrb +
            $g7pcrb +
            $g7pgrb +
            $g7phra +
            $g7pjrb +
            $g7pnrb +
            $g7ppra +
            $g7pqrb +
            $g7pArb +
            $g7pBra +
            $g7pCrb +
            $g7pDra +
            $g7pErb +
            $g7pFrb +

            $g8pArb +
            $g8pBra +
            $g8pCrb +
            $g8pDra +
            $g8pErb +
            $g8pFra +
            $g8pKra +
            $g8pLrb +
            $g8pMrb +

            $g9parb +
            $g9pbrb +
            $g9pcra +
            $g9pura +
            $g9pvrb +
            $g9pwrb +
            $g9pArb +
            $g9pBrb +
            $g9pCra +
            $g9pGrb +
            $g9pHra +
            $g9pJra +
            $g9pRrb +
            $g9pSrb +
            $g9pTra +

            $g10pKrb +
            $g10pLra +
            $g10pMra +
            $g10pdra +
            $g10perb +
            $g10pfrb +
            $g10pkrb +
            $g10plra +
            $g10pmrb +
            $g10pnra +
            $g10pprb +
            $g10pqrb +

            $g11prrb +
            $g11psrb +
            $g11ptra +
            $g11pArb +
            $g11pBra +
            $g11pCrb +
            $g11pDrb +
            $g11pEra +
            $g11pFra +
            $g11pKra +
            $g11pLrb +
            $g11pMrb +
            $g11pRrb +
            $g11pSra +
            $g11pTrb +

            $g12pAra +
            $g12pBra +
            $g12pCrb +
            $g12pGra +
            $g12pHrb +
            $g12pJrb +
            $g12pNrb +
            $g12pPrb +
            $g12pQra +
            $g12pRra +
            $g12pSrb +
            $g12pTrb +
            $g12pUra +
            $g12pVrb +
            $g12pWra +
            $g12pXrb +
            $g12pYrb +
            $g12pZra +
            $g12prrb +
            $g12psrb +
            $g12ptra;
        echo '
            <script>
                console.log("Ad: ' . json_encode($puntajeAd) . '");
            </script>';

        switch ($_POST['edad']) {
            case 1: //15 a 28 Años--------------------------------------------------------------
                switch ($_POST['genero']) {
                        //Masculino
                    case 0:
                        //Aire Libre
                        if ($puntajeAL <= 13) {
                            $centilAL = 1;
                        } else if ($puntajeAL <= 16) {
                            $centilAL = 2;
                        } else if ($puntajeAL <= 18) {
                            $centilAL = 3;
                        } else if ($puntajeAL <= 19) {
                            $centilAL = 4;
                        } else if ($puntajeAL <= 22) {
                            $centilAL = 5;
                        } else if ($puntajeAL <= 26) {
                            $centilAL = 10;
                        } else if ($puntajeAL <= 29) {
                            $centilAL = 15;
                        } else if ($puntajeAL <= 31) {
                            $centilAL = 20;
                        } else if ($puntajeAL <= 33) {
                            $centilAL = 25;
                        } else if ($puntajeAL <= 35) {
                            $centilAL = 30;
                        } else if ($puntajeAL <= 37) {
                            $centilAL = 35;
                        } else if ($puntajeAL <= 38) {
                            $centilAL = 40;
                        } else if ($puntajeAL <= 40) {
                            $centilAL = 45;
                        } else if ($puntajeAL <= 41) {
                            $centilAL = 50;
                        } else if ($puntajeAL <= 43) {
                            $centilAL = 55;
                        } else if ($puntajeAL <= 45) {
                            $centilAL = 60;
                        } else if ($puntajeAL <= 46) {
                            $centilAL = 65;
                        } else if ($puntajeAL <= 48) {
                            $centilAL = 70;
                        } else if ($puntajeAL <= 50) {
                            $centilAL = 75;
                        } else if ($puntajeAL <= 52) {
                            $centilAL = 80;
                        } else if ($puntajeAL <= 55) {
                            $centilAL = 85;
                        } else if ($puntajeAL <= 59) {
                            $centilAL = 90;
                        } else if ($puntajeAL <= 62) {
                            $centilAL = 95;
                        } else if ($puntajeAL <= 63) {
                            $centilAL = 96;
                        } else if ($puntajeAL <= 65) {
                            $centilAL = 97;
                        } else if ($puntajeAL <= 68) {
                            $centilAL = 98;
                        } else if ($puntajeAL <= 82) {
                            $centilAL = 99;
                        }
                        //Mecanica
                        if ($puntajeMe <= 19) {
                            $centilMe = 1;
                        } else if ($puntajeMe <= 20) {
                            $centilMe = 2;
                        } else if ($puntajeMe <= 22) {
                            $centilMe = 3;
                        } else if ($puntajeMe <= 23) {
                            $centilMe = 4;
                        } else if ($puntajeMe <= 25) {
                            $centilMe = 5;
                        } else if ($puntajeMe <= 28) {
                            $centilMe = 10;
                        } else if ($puntajeMe <= 30) {
                            $centilMe = 15;
                        } else if ($puntajeMe <= 31) {
                            $centilMe = 20;
                        } else if ($puntajeMe <= 33) {
                            $centilMe = 25;
                        } else if ($puntajeMe <= 34) {
                            $centilMe = 30;
                        } else if ($puntajeMe <= 35) {
                            $centilMe = 35;
                        } else if ($puntajeMe <= 36) {
                            $centilMe = 40;
                        } else if ($puntajeMe <= 38) {
                            $centilMe = 45;
                        } else if ($puntajeMe <= 39) {
                            $centilMe = 50;
                        } else if ($puntajeMe <= 40) {
                            $centilMe = 55;
                        } else if ($puntajeMe <= 41) {
                            $centilMe = 60;
                        } else if ($puntajeMe <= 42) {
                            $centilMe = 65;
                        } else if ($puntajeMe <= 43) {
                            $centilMe = 70;
                        } else if ($puntajeMe <= 45) {
                            $centilMe = 75;
                        } else if ($puntajeMe <= 46) {
                            $centilMe = 80;
                        } else if ($puntajeMe <= 48) {
                            $centilMe = 85;
                        } else if ($puntajeMe <= 51) {
                            $centilMe = 90;
                        } else if ($puntajeMe <= 53) {
                            $centilMe = 95;
                        } else if ($puntajeMe <= 54) {
                            $centilMe = 96;
                        } else if ($puntajeMe <= 56) {
                            $centilMe = 97;
                        } else if ($puntajeMe <= 58) {
                            $centilMe = 98;
                        } else if ($puntajeMe <= 68) {
                            $centilMe = 99;
                        }
                        //Calculo
                        if ($puntajeCa <= 10) {
                            $centilCa = 1;
                        } else if ($puntajeCa <= 11) {
                            $centilCa = 2;
                        } else if ($puntajeCa <= 12) {
                            $centilCa = 3;
                        } else if ($puntajeCa <= 13) {
                            $centilCa = 4;
                        } else if ($puntajeCa <= 15) {
                            $centilCa = 5;
                        } else if ($puntajeCa <= 17) {
                            $centilCa = 10;
                        } else if ($puntajeCa <= 19) {
                            $centilCa = 15;
                        } else if ($puntajeCa <= 20) {
                            $centilCa = 20;
                        } else if ($puntajeCa <= 21) {
                            $centilCa = 25;
                        } else if ($puntajeCa <= 22) {
                            $centilCa = 30;
                        } else if ($puntajeCa <= 23) {
                            $centilCa = 35;
                        } else if ($puntajeCa <= 24) {
                            $centilCa = 40;
                        } else if ($puntajeCa <= 25) {
                            $centilCa = 45;
                        } else if ($puntajeCa <= 26) {
                            $centilCa = 50;
                        } else if ($puntajeCa <= 27) {
                            $centilCa = 55;
                        } else if ($puntajeCa <= 28) {
                            $centilCa = 60;
                        } else if ($puntajeCa <= 29) {
                            $centilCa = 65;
                        } else if ($puntajeCa <= 30) {
                            $centilCa = 70;
                        } else if ($puntajeCa <= 31) {
                            $centilCa = 75;
                        } else if ($puntajeCa <= 32) {
                            $centilCa = 80;
                        } else if ($puntajeCa <= 34) {
                            $centilCa = 85;
                        } else if ($puntajeCa <= 36) {
                            $centilCa = 90;
                        } else if ($puntajeCa <= 37) {
                            $centilCa = 95;
                        } else if ($puntajeCa <= 38) {
                            $centilCa = 96;
                        } else if ($puntajeCa <= 39) {
                            $centilCa = 97;
                        } else if ($puntajeCa <= 41) {
                            $centilCa = 98;
                        } else if ($puntajeCa <= 56) {
                            $centilCa = 99;
                        }
                        //Cientfico
                        if ($puntajeCi <= 20) {
                            $centilCi = 1;
                        } else if ($puntajeCi <= 22) {
                            $centilCi = 2;
                        } else if ($puntajeCi <= 24) {
                            $centilCi = 3;
                        } else if ($puntajeCi <= 25) {
                            $centilCi = 4;
                        } else if ($puntajeCi <= 28) {
                            $centilCi = 5;
                        } else if ($puntajeCi <= 31) {
                            $centilCi = 10;
                        } else if ($puntajeCi <= 33) {
                            $centilCi = 15;
                        } else if ($puntajeCi <= 35) {
                            $centilCi = 20;
                        } else if ($puntajeCi <= 36) {
                            $centilCi = 25;
                        } else if ($puntajeCi <= 38) {
                            $centilCi = 30;
                        } else if ($puntajeCi <= 39) {
                            $centilCi = 35;
                        } else if ($puntajeCi <= 40) {
                            $centilCi = 40;
                        } else if ($puntajeCi <= 42) {
                            $centilCi = 45;
                        } else if ($puntajeCi <= 43) {
                            $centilCi = 50;
                        } else if ($puntajeCi <= 44) {
                            $centilCi = 55;
                        } else if ($puntajeCi <= 45) {
                            $centilCi = 60;
                        } else if ($puntajeCi <= 47) {
                            $centilCi = 65;
                        } else if ($puntajeCi <= 48) {
                            $centilCi = 70;
                        } else if ($puntajeCi <= 50) {
                            $centilCi = 75;
                        } else if ($puntajeCi <= 52) {
                            $centilCi = 80;
                        } else if ($puntajeCi <= 54) {
                            $centilCi = 85;
                        } else if ($puntajeCi <= 57) {
                            $centilCi = 90;
                        } else if ($puntajeCi <= 59) {
                            $centilCi = 95;
                        } else if ($puntajeCi <= 60) {
                            $centilCi = 96;
                        } else if ($puntajeCi <= 62) {
                            $centilCi = 97;
                        } else if ($puntajeCi <= 64) {
                            $centilCi = 98;
                        } else if ($puntajeCi <= 70) {
                            $centilCi = 99;
                        }
                        //Persuasiva
                        if ($puntajePe <= 16) {
                            $centilPe = 1;
                        } else if ($puntajePe <= 18) {
                            $centilPe = 2;
                        } else if ($puntajePe <= 19) {
                            $centilPe = 3;
                        } else if ($puntajePe <= 20) {
                            $centilPe = 4;
                        } else if ($puntajePe <= 22) {
                            $centilPe = 5;
                        } else if ($puntajePe <= 25) {
                            $centilPe = 10;
                        } else if ($puntajePe <= 27) {
                            $centilPe = 15;
                        } else if ($puntajePe <= 28) {
                            $centilPe = 20;
                        } else if ($puntajePe <= 30) {
                            $centilPe = 25;
                        } else if ($puntajePe <= 31) {
                            $centilPe = 30;
                        } else if ($puntajePe <= 32) {
                            $centilPe = 35;
                        } else if ($puntajePe <= 33) {
                            $centilPe = 40;
                        } else if ($puntajePe <= 34) {
                            $centilPe = 45;
                        } else if ($puntajePe <= 35) {
                            $centilPe = 50;
                        } else if ($puntajePe <= 37) {
                            $centilPe = 55;
                        } else if ($puntajePe <= 38) {
                            $centilPe = 60;
                        } else if ($puntajePe <= 39) {
                            $centilPe = 65;
                        } else if ($puntajePe <= 40) {
                            $centilPe = 70;
                        } else if ($puntajePe <= 42) {
                            $centilPe = 75;
                        } else if ($puntajePe <= 43) {
                            $centilPe = 80;
                        } else if ($puntajePe <= 45) {
                            $centilPe = 85;
                        } else if ($puntajePe <= 47) {
                            $centilPe = 90;
                        } else if ($puntajePe <= 50) {
                            $centilPe = 95;
                        } else if ($puntajePe <= 52) {
                            $centilPe = 97;
                        } else if ($puntajePe <= 54) {
                            $centilPe = 98;
                        } else if ($puntajePe <= 86) {
                            $centilPe = 99;
                        }
                        //Artes
                        if ($puntajeAr <= 12) {
                            $centilAr = 1;
                        } else if ($puntajeAr <= 13) {
                            $centilAr = 2;
                        } else if ($puntajeAr <= 14) {
                            $centilAr = 3;
                        } else if ($puntajeAr <= 15) {
                            $centilAr = 4;
                        } else if ($puntajeAr <= 17) {
                            $centilAr = 5;
                        } else if ($puntajeAr <= 19) {
                            $centilAr = 10;
                        } else if ($puntajeAr <= 21) {
                            $centilAr = 15;
                        } else if ($puntajeAr <= 22) {
                            $centilAr = 20;
                        } else if ($puntajeAr <= 23) {
                            $centilAr = 25;
                        } else if ($puntajeAr <= 24) {
                            $centilAr = 30;
                        } else if ($puntajeAr <= 25) {
                            $centilAr = 35;
                        } else if ($puntajeAr <= 26) {
                            $centilAr = 40;
                        } else if ($puntajeAr <= 27) {
                            $centilAr = 45;
                        } else if ($puntajeAr <= 28) {
                            $centilAr = 50;
                        } else if ($puntajeAr <= 29) {
                            $centilAr = 55;
                        } else if ($puntajeAr <= 30) {
                            $centilAr = 60;
                        } else if ($puntajeAr <= 31) {
                            $centilAr = 65;
                        } else if ($puntajeAr <= 32) {
                            $centilAr = 70;
                        } else if ($puntajeAr <= 33) {
                            $centilAr = 75;
                        } else if ($puntajeAr <= 34) {
                            $centilAr = 80;
                        } else if ($puntajeAr <= 36) {
                            $centilAr = 85;
                        } else if ($puntajeAr <= 38) {
                            $centilAr = 90;
                        } else if ($puntajeAr <= 40) {
                            $centilAr = 95;
                        } else if ($puntajeAr <= 42) {
                            $centilAr = 97;
                        } else if ($puntajeAr <= 43) {
                            $centilAr = 98;
                        } else if ($puntajeAr <= 52) {
                            $centilAr = 99;
                        }
                        //Literaria
                        if ($puntajeLi <= 5) {
                            $centilLi = 1;
                        } else if ($puntajeLi <= 6) {
                            $centilLi = 2;
                        } else if ($puntajeLi <= 7) {
                            $centilLi = 3;
                        } else if ($puntajeLi <= 8) {
                            $centilLi = 4;
                        } else if ($puntajeLi <= 10) {
                            $centilLi = 5;
                        } else if ($puntajeLi <= 12) {
                            $centilLi = 10;
                        } else if ($puntajeLi <= 13) {
                            $centilLi = 15;
                        } else if ($puntajeLi <= 14) {
                            $centilLi = 20;
                        } else if ($puntajeLi <= 15) {
                            $centilLi = 25;
                        } else if ($puntajeLi <= 16) {
                            $centilLi = 30;
                        } else if ($puntajeLi <= 17) {
                            $centilLi = 35;
                        } else if ($puntajeLi <= 18) {
                            $centilLi = 45;
                        } else if ($puntajeLi <= 19) {
                            $centilLi = 50;
                        } else if ($puntajeLi <= 20) {
                            $centilLi = 55;
                        } else if ($puntajeLi <= 21) {
                            $centilLi = 60;
                        } else if ($puntajeLi <= 22) {
                            $centilLi = 70;
                        } else if ($puntajeLi <= 23) {
                            $centilLi = 75;
                        } else if ($puntajeLi <= 24) {
                            $centilLi = 80;
                        } else if ($puntajeLi <= 26) {
                            $centilLi = 85;
                        } else if ($puntajeLi <= 28) {
                            $centilLi = 90;
                        } else if ($puntajeLi <= 29) {
                            $centilLi = 95;
                        } else if ($puntajeLi <= 30) {
                            $centilLi = 96;
                        } else if ($puntajeLi <= 31) {
                            $centilLi = 97;
                        } else if ($puntajeLi <= 32) {
                            $centilLi = 98;
                        } else if ($puntajeLi <= 42) {
                            $centilLi = 99;
                        }
                        //Musica
                        if ($puntajeMu <= 0) {
                            $centilMu = 2;
                        } else if ($puntajeMu <= 1) {
                            $centilMu = 3;
                        } else if ($puntajeMu <= 2) {
                            $centilMu = 4;
                        } else if ($puntajeMu <= 4) {
                            $centilMu = 5;
                        } else if ($puntajeMu <= 6) {
                            $centilMu = 10;
                        } else if ($puntajeMu <= 7) {
                            $centilMu = 15;
                        } else if ($puntajeMu <= 8) {
                            $centilMu = 20;
                        } else if ($puntajeMu <= 9) {
                            $centilMu = 25;
                        } else if ($puntajeMu <= 10) {
                            $centilMu = 30;
                        } else if ($puntajeMu <= 11) {
                            $centilMu = 35;
                        } else if ($puntajeMu <= 12) {
                            $centilMu = 40;
                        } else if ($puntajeMu <= 13) {
                            $centilMu = 50;
                        } else if ($puntajeMu <= 14) {
                            $centilMu = 55;
                        } else if ($puntajeMu <= 15) {
                            $centilMu = 60;
                        } else if ($puntajeMu <= 16) {
                            $centilMu = 65;
                        } else if ($puntajeMu <= 17) {
                            $centilMu = 70;
                        } else if ($puntajeMu <= 18) {
                            $centilMu = 75;
                        } else if ($puntajeMu <= 19) {
                            $centilMu = 80;
                        } else if ($puntajeMu <= 20) {
                            $centilMu = 85;
                        } else if ($puntajeMu <= 22) {
                            $centilMu = 90;
                        } else if ($puntajeMu <= 23) {
                            $centilMu = 95;
                        } else if ($puntajeMu <= 24) {
                            $centilMu = 96;
                        } else if ($puntajeMu <= 25) {
                            $centilMu = 97;
                        } else if ($puntajeMu <= 26) {
                            $centilMu = 98;
                        } else if ($puntajeMu <= 30) {
                            $centilMu = 99;
                        }
                        //Social O Asistencia
                        if ($puntajeSo <= 19) {
                            $centilSo = 1;
                        } else if ($puntajeSo <= 21) {
                            $centilSo = 2;
                        } else if ($puntajeSo <= 22) {
                            $centilSo = 3;
                        } else if ($puntajeSo <= 23) {
                            $centilSo = 4;
                        } else if ($puntajeSo <= 26) {
                            $centilSo = 5;
                        } else if ($puntajeSo <= 29) {
                            $centilSo = 10;
                        } else if ($puntajeSo <= 31) {
                            $centilSo = 15;
                        } else if ($puntajeSo <= 33) {
                            $centilSo = 20;
                        } else if ($puntajeSo <= 34) {
                            $centilSo = 25;
                        } else if ($puntajeSo <= 36) {
                            $centilSo = 30;
                        } else if ($puntajeSo <= 37) {
                            $centilSo = 35;
                        } else if ($puntajeSo <= 38) {
                            $centilSo = 40;
                        } else if ($puntajeSo <= 40) {
                            $centilSo = 45;
                        } else if ($puntajeSo <= 41) {
                            $centilSo = 50;
                        } else if ($puntajeSo <= 42) {
                            $centilSo = 55;
                        } else if ($puntajeSo <= 44) {
                            $centilSo = 60;
                        } else if ($puntajeSo <= 45) {
                            $centilSo = 65;
                        } else if ($puntajeSo <= 46) {
                            $centilSo = 70;
                        } else if ($puntajeSo <= 48) {
                            $centilSo = 75;
                        } else if ($puntajeSo <= 50) {
                            $centilSo = 80;
                        } else if ($puntajeSo <= 52) {
                            $centilSo = 85;
                        } else if ($puntajeSo <= 55) {
                            $centilSo = 90;
                        } else if ($puntajeSo <= 57) {
                            $centilSo = 95;
                        } else if ($puntajeSo <= 58) {
                            $centilSo = 96;
                        } else if ($puntajeSo <= 60) {
                            $centilSo = 97;
                        } else if ($puntajeSo <= 62) {
                            $centilSo = 98;
                        } else if ($puntajeSo <= 80) {
                            $centilSo = 99;
                        }
                        //Administrativa
                        if ($puntajeAd <= 25) {
                            $centilAd = 1;
                        } else if ($puntajeAd <= 28) {
                            $centilAd = 2;
                        } else if ($puntajeAd <= 29) {
                            $centilAd = 3;
                        } else if ($puntajeAd <= 30) {
                            $centilAd = 4;
                        } else if ($puntajeAd <= 33) {
                            $centilAd = 5;
                        } else if ($puntajeAd <= 36) {
                            $centilAd = 10;
                        } else if ($puntajeAd <= 38) {
                            $centilAd = 15;
                        } else if ($puntajeAd <= 39) {
                            $centilAd = 19;
                        } else if ($puntajeAd <= 41) {
                            $centilAd = 20;
                        } else if ($puntajeAd <= 42) {
                            $centilAd = 25;
                        } else if ($puntajeAd <= 44) {
                            $centilAd = 30;
                        } else if ($puntajeAd <= 45) {
                            $centilAd = 35;
                        } else if ($puntajeAd <= 47) {
                            $centilAd = 40;
                        } else if ($puntajeAd <= 48) {
                            $centilAd = 45;
                        } else if ($puntajeAd <= 50) {
                            $centilAd = 50;
                        } else if ($puntajeAd <= 51) {
                            $centilAd = 55;
                        } else if ($puntajeAd <= 52) {
                            $centilAd = 60;
                        } else if ($puntajeAd <= 54) {
                            $centilAd = 65;
                        } else if ($puntajeAd <= 56) {
                            $centilAd = 70;
                        } else if ($puntajeAd <= 57) {
                            $centilAd = 75;
                        } else if ($puntajeAd <= 59) {
                            $centilAd = 80;
                        } else if ($puntajeAd <= 62) {
                            $centilAd = 85;
                        } else if ($puntajeAd <= 65) {
                            $centilAd = 90;
                        } else if ($puntajeAd <= 68) {
                            $centilAd = 95;
                        } else if ($puntajeAd <= 70) {
                            $centilAd = 97;
                        } else if ($puntajeAd <= 73) {
                            $centilAd = 98;
                        } else if ($puntajeAd <= 10) {
                            $centilAd = 99;
                        }
                        break;
                        //Femenino
                    case 1:
                        //Aire Libre
                        if ($puntajeAL <= 7) {
                            $centilAL = 1;
                        } else if ($puntajeAL <= 10) {
                            $centilAL = 2;
                        } else if ($puntajeAL <= 11) {
                            $centilAL = 3;
                        } else if ($puntajeAL <= 13) {
                            $centilAL = 4;
                        } else if ($puntajeAL <= 16) {
                            $centilAL = 5;
                        } else if ($puntajeAL <= 20) {
                            $centilAL = 10;
                        } else if ($puntajeAL <= 22) {
                            $centilAL = 15;
                        } else if ($puntajeAL <= 24) {
                            $centilAL = 20;
                        } else if ($puntajeAL <= 26) {
                            $centilAL = 25;
                        } else if ($puntajeAL <= 28) {
                            $centilAL = 30;
                        } else if ($puntajeAL <= 30) {
                            $centilAL = 35;
                        } else if ($puntajeAL <= 31) {
                            $centilAL = 40;
                        } else if ($puntajeAL <= 33) {
                            $centilAL = 45;
                        } else if ($puntajeAL <= 34) {
                            $centilAL = 50;
                        } else if ($puntajeAL <= 36) {
                            $centilAL = 55;
                        } else if ($puntajeAL <= 38) {
                            $centilAL = 60;
                        } else if ($puntajeAL <= 39) {
                            $centilAL = 65;
                        } else if ($puntajeAL <= 41) {
                            $centilAL = 70;
                        } else if ($puntajeAL <= 43) {
                            $centilAL = 75;
                        } else if ($puntajeAL <= 45) {
                            $centilAL = 80;
                        } else if ($puntajeAL <= 48) {
                            $centilAL = 85;
                        } else if ($puntajeAL <= 51) {
                            $centilAL = 90;
                        } else if ($puntajeAL <= 55) {
                            $centilAL = 95;
                        } else if ($puntajeAL <= 58) {
                            $centilAL = 97;
                        } else if ($puntajeAL <= 60) {
                            $centilAL = 98;
                        } else if ($puntajeAL <= 82) {
                            $centilAL = 99;
                        }
                        //Mecanica
                        if ($puntajeMe <= 8) {
                            $centilMe = 1;
                        } else if ($puntajeMe <= 10) {
                            $centilMe = 2;
                        } else if ($puntajeMe <= 11) {
                            $centilMe = 3;
                        } else if ($puntajeMe <= 12) {
                            $centilMe = 4;
                        } else if ($puntajeMe <= 14) {
                            $centilMe = 5;
                        } else if ($puntajeMe <= 16) {
                            $centilMe = 10;
                        } else if ($puntajeMe <= 18) {
                            $centilMe = 15;
                        } else if ($puntajeMe <= 19) {
                            $centilMe = 20;
                        } else if ($puntajeMe <= 20) {
                            $centilMe = 25;
                        } else if ($puntajeMe <= 21) {
                            $centilMe = 30;
                        } else if ($puntajeMe <= 23) {
                            $centilMe = 35;
                        } else if ($puntajeMe <= 24) {
                            $centilMe = 40;
                        } else if ($puntajeMe <= 25) {
                            $centilMe = 45;
                        } else if ($puntajeMe <= 26) {
                            $centilMe = 50;
                        } else if ($puntajeMe <= 27) {
                            $centilMe = 55;
                        } else if ($puntajeMe <= 28) {
                            $centilMe = 60;
                        } else if ($puntajeMe <= 29) {
                            $centilMe = 65;
                        } else if ($puntajeMe <= 30) {
                            $centilMe = 70;
                        } else if ($puntajeMe <= 31) {
                            $centilMe = 75;
                        } else if ($puntajeMe <= 32) {
                            $centilMe = 80;
                        } else if ($puntajeMe <= 34) {
                            $centilMe = 85;
                        } else if ($puntajeMe <= 36) {
                            $centilMe = 90;
                        } else if ($puntajeMe <= 39) {
                            $centilMe = 95;
                        } else if ($puntajeMe <= 41) {
                            $centilMe = 97;
                        } else if ($puntajeMe <= 42) {
                            $centilMe = 98;
                        } else if ($puntajeMe <= 68) {
                            $centilMe = 99;
                        }
                        //Calculo
                        if ($puntajeCa <= 7) {
                            $centilCa = 1;
                        } else if ($puntajeCa <= 8) {
                            $centilCa = 2;
                        } else if ($puntajeCa <= 10) {
                            $centilCa = 3;
                        } else if ($puntajeCa <= 12) {
                            $centilCa = 5;
                        } else if ($puntajeCa <= 14) {
                            $centilCa = 10;
                        } else if ($puntajeCa <= 16) {
                            $centilCa = 15;
                        } else if ($puntajeCa <= 17) {
                            $centilCa = 20;
                        } else if ($puntajeCa <= 18) {
                            $centilCa = 25;
                        } else if ($puntajeCa <= 19) {
                            $centilCa = 30;
                        } else if ($puntajeCa <= 20) {
                            $centilCa = 35;
                        } else if ($puntajeCa <= 21) {
                            $centilCa = 40;
                        } else if ($puntajeCa <= 22) {
                            $centilCa = 45;
                        } else if ($puntajeCa <= 23) {
                            $centilCa = 50;
                        } else if ($puntajeCa <= 24) {
                            $centilCa = 55;
                        } else if ($puntajeCa <= 25) {
                            $centilCa = 60;
                        } else if ($puntajeCa <= 26) {
                            $centilCa = 65;
                        } else if ($puntajeCa <= 27) {
                            $centilCa = 70;
                        } else if ($puntajeCa <= 28) {
                            $centilCa = 75;
                        } else if ($puntajeCa <= 30) {
                            $centilCa = 80;
                        } else if ($puntajeCa <= 31) {
                            $centilCa = 85;
                        } else if ($puntajeCa <= 33) {
                            $centilCa = 90;
                        } else if ($puntajeCa <= 35) {
                            $centilCa = 95;
                        } else if ($puntajeCa <= 37) {
                            $centilCa = 97;
                        } else if ($puntajeCa <= 39) {
                            $centilCa = 98;
                        } else if ($puntajeCa <= 56) {
                            $centilCa = 99;
                        }
                        //Cientifica
                        if ($puntajeCi <= 16) {
                            $centilCi = 1;
                        } else if ($puntajeCi <= 18) {
                            $centilCi = 2;
                        } else if ($puntajeCi <= 20) {
                            $centilCi = 3;
                        } else if ($puntajeCi <= 21) {
                            $centilCi = 4;
                        } else if ($puntajeCi <= 23) {
                            $centilCi = 5;
                        } else if ($puntajeCi <= 26) {
                            $centilCi = 10;
                        } else if ($puntajeCi <= 29) {
                            $centilCi = 15;
                        } else if ($puntajeCi <= 31) {
                            $centilCi = 20;
                        } else if ($puntajeCi <= 32) {
                            $centilCi = 25;
                        } else if ($puntajeCi <= 34) {
                            $centilCi = 30;
                        } else if ($puntajeCi <= 35) {
                            $centilCi = 35;
                        } else if ($puntajeCi <= 37) {
                            $centilCi = 40;
                        } else if ($puntajeCi <= 38) {
                            $centilCi = 45;
                        } else if ($puntajeCi <= 39) {
                            $centilCi = 50;
                        } else if ($puntajeCi <= 41) {
                            $centilCi = 55;
                        } else if ($puntajeCi <= 42) {
                            $centilCi = 60;
                        } else if ($puntajeCi <= 43) {
                            $centilCi = 65;
                        } else if ($puntajeCi <= 45) {
                            $centilCi = 70;
                        } else if ($puntajeCi <= 47) {
                            $centilCi = 75;
                        } else if ($puntajeCi <= 48) {
                            $centilCi = 80;
                        } else if ($puntajeCi <= 51) {
                            $centilCi = 85;
                        } else if ($puntajeCi <= 54) {
                            $centilCi = 90;
                        } else if ($puntajeCi <= 56) {
                            $centilCi = 95;
                        } else if ($puntajeCi <= 57) {
                            $centilCi = 96;
                        } else if ($puntajeCi <= 59) {
                            $centilCi = 97;
                        } else if ($puntajeCi <= 61) {
                            $centilCi = 98;
                        } else if ($puntajeCi <= 70) {
                            $centilCi = 99;
                        }
                        //Persuasiva
                        if ($puntajePe <= 16) {
                            $centilPe = 1;
                        } else if ($puntajePe <= 18) {
                            $centilPe = 2;
                        } else if ($puntajePe <= 19) {
                            $centilPe = 3;
                        } else if ($puntajePe <= 20) {
                            $centilPe = 4;
                        } else if ($puntajePe <= 23) {
                            $centilPe = 5;
                        } else if ($puntajePe <= 26) {
                            $centilPe = 10;
                        } else if ($puntajePe <= 28) {
                            $centilPe = 15;
                        } else if ($puntajePe <= 29) {
                            $centilPe = 20;
                        } else if ($puntajePe <= 31) {
                            $centilPe = 25;
                        } else if ($puntajePe <= 32) {
                            $centilPe = 30;
                        } else if ($puntajePe <= 34) {
                            $centilPe = 35;
                        } else if ($puntajePe <= 35) {
                            $centilPe = 40;
                        } else if ($puntajePe <= 36) {
                            $centilPe = 45;
                        } else if ($puntajePe <= 37) {
                            $centilPe = 50;
                        } else if ($puntajePe <= 38) {
                            $centilPe = 55;
                        } else if ($puntajePe <= 40) {
                            $centilPe = 60;
                        } else if ($puntajePe <= 41) {
                            $centilPe = 65;
                        } else if ($puntajePe <= 42) {
                            $centilPe = 70;
                        } else if ($puntajePe <= 44) {
                            $centilPe = 75;
                        } else if ($puntajePe <= 45) {
                            $centilPe = 80;
                        } else if ($puntajePe <= 48) {
                            $centilPe = 85;
                        } else if ($puntajePe <= 50) {
                            $centilPe = 90;
                        } else if ($puntajePe <= 53) {
                            $centilPe = 95;
                        } else if ($puntajePe <= 55) {
                            $centilPe = 97;
                        } else if ($puntajePe <= 57) {
                            $centilPe = 98;
                        } else if ($puntajePe <= 86) {
                            $centilPe = 99;
                        }
                        //Artes
                        if ($puntajeAr <= 14) {
                            $centilAr = 1;
                        } else if ($puntajeAr <= 15) {
                            $centilAr = 2;
                        } else if ($puntajeAr <= 16) {
                            $centilAr = 3;
                        } else if ($puntajeAr <= 17) {
                            $centilAr = 4;
                        } else if ($puntajeAr <= 19) {
                            $centilAr = 5;
                        } else if ($puntajeAr <= 21) {
                            $centilAr = 10;
                        } else if ($puntajeAr <= 22) {
                            $centilAr = 15;
                        } else if ($puntajeAr <= 24) {
                            $centilAr = 20;
                        } else if ($puntajeAr <= 25) {
                            $centilAr = 25;
                        } else if ($puntajeAr <= 26) {
                            $centilAr = 30;
                        } else if ($puntajeAr <= 27) {
                            $centilAr = 35;
                        } else if ($puntajeAr <= 28) {
                            $centilAr = 40;
                        } else if ($puntajeAr <= 29) {
                            $centilAr = 50;
                        } else if ($puntajeAr <= 30) {
                            $centilAr = 55;
                        } else if ($puntajeAr <= 31) {
                            $centilAr = 60;
                        } else if ($puntajeAr <= 32) {
                            $centilAr = 65;
                        } else if ($puntajeAr <= 33) {
                            $centilAr = 70;
                        } else if ($puntajeAr <= 34) {
                            $centilAr = 75;
                        } else if ($puntajeAr <= 35) {
                            $centilAr = 80;
                        } else if ($puntajeAr <= 37) {
                            $centilAr = 85;
                        } else if ($puntajeAr <= 39) {
                            $centilAr = 90;
                        } else if ($puntajeAr <= 41) {
                            $centilAr = 95;
                        } else if ($puntajeAr <= 43) {
                            $centilAr = 97;
                        } else if ($puntajeAr <= 44) {
                            $centilAr = 98;
                        } else if ($puntajeAr <= 52) {
                            $centilAr = 99;
                        }
                        //Literaria
                        if ($puntajeLi <= 5) {
                            $centilLi = 1;
                        } else if ($puntajeLi <= 6) {
                            $centilLi = 2;
                        } else if ($puntajeLi <= 7) {
                            $centilLi = 3;
                        } else if ($puntajeLi <= 8) {
                            $centilLi = 4;
                        } else if ($puntajeLi <= 10) {
                            $centilLi = 5;
                        } else if ($puntajeLi <= 12) {
                            $centilLi = 10;
                        } else if ($puntajeLi <= 13) {
                            $centilLi = 15;
                        } else if ($puntajeLi <= 14) {
                            $centilLi = 20;
                        } else if ($puntajeLi <= 16) {
                            $centilLi = 25;
                        } else if ($puntajeLi <= 17) {
                            $centilLi = 30;
                        } else if ($puntajeLi <= 18) {
                            $centilLi = 40;
                        } else if ($puntajeLi <= 19) {
                            $centilLi = 45;
                        } else if ($puntajeLi <= 20) {
                            $centilLi = 50;
                        } else if ($puntajeLi <= 21) {
                            $centilLi = 55;
                        } else if ($puntajeLi <= 22) {
                            $centilLi = 60;
                        } else if ($puntajeLi <= 23) {
                            $centilLi = 65;
                        } else if ($puntajeLi <= 24) {
                            $centilLi = 70;
                        } else if ($puntajeLi <= 25) {
                            $centilLi = 75;
                        } else if ($puntajeLi <= 26) {
                            $centilLi = 80;
                        } else if ($puntajeLi <= 27) {
                            $centilLi = 85;
                        } else if ($puntajeLi <= 29) {
                            $centilLi = 90;
                        } else if ($puntajeLi <= 31) {
                            $centilLi = 95;
                        } else if ($puntajeLi <= 33) {
                            $centilLi = 97;
                        } else if ($puntajeLi <= 34) {
                            $centilLi = 98;
                        } else if ($puntajeLi <= 42) {
                            $centilLi = 99;
                        }
                        //Musica
                        if ($puntajeMu <= 3) {
                            $centilMu = 1;
                        } else if ($puntajeMu <= 4) {
                            $centilMu = 2;
                        } else if ($puntajeMu <= 5) {
                            $centilMu = 3;
                        } else if ($puntajeMu <= 7) {
                            $centilMu = 5;
                        } else if ($puntajeMu <= 8) {
                            $centilMu = 10;
                        } else if ($puntajeMu <= 10) {
                            $centilMu = 15;
                        } else if ($puntajeMu <= 11) {
                            $centilMu = 20;
                        } else if ($puntajeMu <= 12) {
                            $centilMu = 25;
                        } else if ($puntajeMu <= 13) {
                            $centilMu = 35;
                        } else if ($puntajeMu <= 14) {
                            $centilMu = 40;
                        } else if ($puntajeMu <= 15) {
                            $centilMu = 45;
                        } else if ($puntajeMu <= 16) {
                            $centilMu = 55;
                        } else if ($puntajeMu <= 17) {
                            $centilMu = 60;
                        } else if ($puntajeMu <= 18) {
                            $centilMu = 70;
                        } else if ($puntajeMu <= 19) {
                            $centilMu = 75;
                        } else if ($puntajeMu <= 20) {
                            $centilMu = 80;
                        } else if ($puntajeMu <= 21) {
                            $centilMu = 85;
                        } else if ($puntajeMu <= 23) {
                            $centilMu = 90;
                        } else if ($puntajeMu <= 25) {
                            $centilMu = 95;
                        } else if ($puntajeMu <= 26) {
                            $centilMu = 97;
                        } else if ($puntajeMu <= 27) {
                            $centilMu = 98;
                        } else if ($puntajeMu <= 30) {
                            $centilMu = 99;
                        }
                        //Social o Aistencia
                        if ($puntajeSo <= 26) {
                            $centilSo = 1;
                        } else if ($puntajeSo <= 28) {
                            $centilSo = 2;
                        } else if ($puntajeSo <= 30) {
                            $centilSo = 3;
                        } else if ($puntajeSo <= 31) {
                            $centilSo = 4;
                        } else if ($puntajeSo <= 33) {
                            $centilSo = 5;
                        } else if ($puntajeSo <= 35) {
                            $centilSo = 10;
                        } else if ($puntajeSo <= 38) {
                            $centilSo = 15;
                        } else if ($puntajeSo <= 40) {
                            $centilSo = 20;
                        } else if ($puntajeSo <= 42) {
                            $centilSo = 25;
                        } else if ($puntajeSo <= 44) {
                            $centilSo = 30;
                        } else if ($puntajeSo <= 45) {
                            $centilSo = 35;
                        } else if ($puntajeSo <= 46) {
                            $centilSo = 40;
                        } else if ($puntajeSo <= 48) {
                            $centilSo = 45;
                        } else if ($puntajeSo <= 49) {
                            $centilSo = 50;
                        } else if ($puntajeSo <= 50) {
                            $centilSo = 55;
                        } else if ($puntajeSo <= 52) {
                            $centilSo = 60;
                        } else if ($puntajeSo <= 53) {
                            $centilSo = 65;
                        } else if ($puntajeSo <= 54) {
                            $centilSo = 70;
                        } else if ($puntajeSo <= 56) {
                            $centilSo = 75;
                        } else if ($puntajeSo <= 58) {
                            $centilSo = 80;
                        } else if ($puntajeSo <= 60) {
                            $centilSo = 85;
                        } else if ($puntajeSo <= 63) {
                            $centilSo = 90;
                        } else if ($puntajeSo <= 66) {
                            $centilSo = 95;
                        } else if ($puntajeSo <= 68) {
                            $centilSo = 97;
                        } else if ($puntajeSo <= 71) {
                            $centilSo = 98;
                        } else if ($puntajeSo <= 80) {
                            $centilSo = 99;
                        }
                        //Administrativa
                        if ($puntajeAd <= 26) {
                            $centilAd = 1;
                        } else if ($puntajeAd <= 28) {
                            $centilAd = 2;
                        } else if ($puntajeAd <= 30) {
                            $centilAd = 3;
                        } else if ($puntajeAd <= 31) {
                            $centilAd = 4;
                        } else if ($puntajeAd <= 35) {
                            $centilAd = 5;
                        } else if ($puntajeAd <= 38) {
                            $centilAd = 10;
                        } else if ($puntajeAd <= 41) {
                            $centilAd = 15;
                        } else if ($puntajeAd <= 43) {
                            $centilAd = 20;
                        } else if ($puntajeAd <= 45) {
                            $centilAd = 25;
                        } else if ($puntajeAd <= 47) {
                            $centilAd = 30;
                        } else if ($puntajeAd <= 48) {
                            $centilAd = 35;
                        } else if ($puntajeAd <= 50) {
                            $centilAd = 40;
                        } else if ($puntajeAd <= 52) {
                            $centilAd = 45;
                        } else if ($puntajeAd <= 53) {
                            $centilAd = 50;
                        } else if ($puntajeAd <= 55) {
                            $centilAd = 55;
                        } else if ($puntajeAd <= 56) {
                            $centilAd = 60;
                        } else if ($puntajeAd <= 58) {
                            $centilAd = 65;
                        } else if ($puntajeAd <= 60) {
                            $centilAd = 70;
                        } else if ($puntajeAd <= 62) {
                            $centilAd = 75;
                        } else if ($puntajeAd <= 64) {
                            $centilAd = 80;
                        } else if ($puntajeAd <= 67) {
                            $centilAd = 85;
                        } else if ($puntajeAd <= 70) {
                            $centilAd = 90;
                        } else if ($puntajeAd <= 73) {
                            $centilAd = 95;
                        } else if ($puntajeAd <= 74) {
                            $centilAd = 96;
                        } else if ($puntajeAd <= 77) {
                            $centilAd = 97;
                        } else if ($puntajeAd <= 79) {
                            $centilAd = 98;
                        } else if ($puntajeAd <= 102) {
                            $centilAd = 99;
                        }
                        break;
                }
                break;
                //Adolescentes Jovenes
            case 2: //19 a 22 Años--------------------------------------------------------------
                //Aire Libre
                if ($puntajeAL <= 13) {
                    $centilAL = 1;
                } else if ($puntajeAL <= 16) {
                    $centilAL = 2;
                } else if ($puntajeAL <= 18) {
                    $centilAL = 3;
                } else if ($puntajeAL <= 19) {
                    $centilAL = 4;
                } else if ($puntajeAL <= 22) {
                    $centilAL = 5;
                } else if ($puntajeAL <= 26) {
                    $centilAL = 10;
                } else if ($puntajeAL <= 29) {
                    $centilAL = 15;
                } else if ($puntajeAL <= 31) {
                    $centilAL = 20;
                } else if ($puntajeAL <= 33) {
                    $centilAL = 25;
                } else if ($puntajeAL <= 35) {
                    $centilAL = 30;
                } else if ($puntajeAL <= 37) {
                    $centilAL = 35;
                } else if ($puntajeAL <= 38) {
                    $centilAL = 40;
                } else if ($puntajeAL <= 40) {
                    $centilAL = 45;
                } else if ($puntajeAL <= 41) {
                    $centilAL = 50;
                } else if ($puntajeAL <= 43) {
                    $centilAL = 55;
                } else if ($puntajeAL <= 45) {
                    $centilAL = 60;
                } else if ($puntajeAL <= 46) {
                    $centilAL = 65;
                } else if ($puntajeAL <= 48) {
                    $centilAL = 70;
                } else if ($puntajeAL <= 50) {
                    $centilAL = 75;
                } else if ($puntajeAL <= 52) {
                    $centilAL = 80;
                } else if ($puntajeAL <= 55) {
                    $centilAL = 85;
                } else if ($puntajeAL <= 59) {
                    $centilAL = 90;
                } else if ($puntajeAL <= 62) {
                    $centilAL = 95;
                } else if ($puntajeAL <= 63) {
                    $centilAL = 96;
                } else if ($puntajeAL <= 65) {
                    $centilAL = 97;
                } else if ($puntajeAL <= 68) {
                    $centilAL = 98;
                } else if ($puntajeAL <= 82) {
                    $centilAL = 99;
                }
                //Mecanica
                if ($puntajeMe <= 19) {
                    $centilMe = 1;
                } else if ($puntajeMe <= 20) {
                    $centilMe = 2;
                } else if ($puntajeMe <= 22) {
                    $centilMe = 3;
                } else if ($puntajeMe <= 23) {
                    $centilMe = 4;
                } else if ($puntajeMe <= 25) {
                    $centilMe = 5;
                } else if ($puntajeMe <= 28) {
                    $centilMe = 10;
                } else if ($puntajeMe <= 30) {
                    $centilMe = 15;
                } else if ($puntajeMe <= 31) {
                    $centilMe = 20;
                } else if ($puntajeMe <= 33) {
                    $centilMe = 25;
                } else if ($puntajeMe <= 34) {
                    $centilMe = 30;
                } else if ($puntajeMe <= 35) {
                    $centilMe = 35;
                } else if ($puntajeMe <= 36) {
                    $centilMe = 40;
                } else if ($puntajeMe <= 38) {
                    $centilMe = 45;
                } else if ($puntajeMe <= 39) {
                    $centilMe = 50;
                } else if ($puntajeMe <= 40) {
                    $centilMe = 55;
                } else if ($puntajeMe <= 41) {
                    $centilMe = 60;
                } else if ($puntajeMe <= 42) {
                    $centilMe = 65;
                } else if ($puntajeMe <= 43) {
                    $centilMe = 70;
                } else if ($puntajeMe <= 45) {
                    $centilMe = 75;
                } else if ($puntajeMe <= 46) {
                    $centilMe = 80;
                } else if ($puntajeMe <= 48) {
                    $centilMe = 85;
                } else if ($puntajeMe <= 51) {
                    $centilMe = 90;
                } else if ($puntajeMe <= 53) {
                    $centilMe = 95;
                } else if ($puntajeMe <= 54) {
                    $centilMe = 96;
                } else if ($puntajeMe <= 56) {
                    $centilMe = 97;
                } else if ($puntajeMe <= 58) {
                    $centilMe = 98;
                } else if ($puntajeMe <= 68) {
                    $centilMe = 99;
                }
                //Calculo
                if ($puntajeCa <= 10) {
                    $centilCa = 1;
                } else if ($puntajeCa <= 11) {
                    $centilCa = 2;
                } else if ($puntajeCa <= 12) {
                    $centilCa = 3;
                } else if ($puntajeCa <= 13) {
                    $centilCa = 4;
                } else if ($puntajeCa <= 15) {
                    $centilCa = 5;
                } else if ($puntajeCa <= 17) {
                    $centilCa = 10;
                } else if ($puntajeCa <= 19) {
                    $centilCa = 15;
                } else if ($puntajeCa <= 20) {
                    $centilCa = 20;
                } else if ($puntajeCa <= 21) {
                    $centilCa = 25;
                } else if ($puntajeCa <= 22) {
                    $centilCa = 30;
                } else if ($puntajeCa <= 23) {
                    $centilCa = 35;
                } else if ($puntajeCa <= 24) {
                    $centilCa = 40;
                } else if ($puntajeCa <= 25) {
                    $centilCa = 45;
                } else if ($puntajeCa <= 26) {
                    $centilCa = 50;
                } else if ($puntajeCa <= 27) {
                    $centilCa = 55;
                } else if ($puntajeCa <= 28) {
                    $centilCa = 60;
                } else if ($puntajeCa <= 29) {
                    $centilCa = 65;
                } else if ($puntajeCa <= 30) {
                    $centilCa = 70;
                } else if ($puntajeCa <= 31) {
                    $centilCa = 75;
                } else if ($puntajeCa <= 32) {
                    $centilCa = 80;
                } else if ($puntajeCa <= 34) {
                    $centilCa = 85;
                } else if ($puntajeCa <= 36) {
                    $centilCa = 90;
                } else if ($puntajeCa <= 37) {
                    $centilCa = 95;
                } else if ($puntajeCa <= 38) {
                    $centilCa = 96;
                } else if ($puntajeCa <= 39) {
                    $centilCa = 97;
                } else if ($puntajeCa <= 41) {
                    $centilCa = 98;
                } else if ($puntajeCa <= 56) {
                    $centilCa = 99;
                }
                //Cientifica
                if ($puntajeCi <= 20) {
                    $centilCi = 1;
                } else if ($puntajeCi <= 22) {
                    $centilCi = 2;
                } else if ($puntajeCi <= 24) {
                    $centilCi = 3;
                } else if ($puntajeCi <= 25) {
                    $centilCi = 4;
                } else if ($puntajeCi <= 28) {
                    $centilCi = 5;
                } else if ($puntajeCi <= 31) {
                    $centilCi = 10;
                } else if ($puntajeCi <= 33) {
                    $centilCi = 15;
                } else if ($puntajeCi <= 35) {
                    $centilCi = 20;
                } else if ($puntajeCi <= 36) {
                    $centilCi = 25;
                } else if ($puntajeCi <= 38) {
                    $centilCi = 30;
                } else if ($puntajeCi <= 39) {
                    $centilCi = 35;
                } else if ($puntajeCi <= 40) {
                    $centilCi = 40;
                } else if ($puntajeCi <= 42) {
                    $centilCi = 45;
                } else if ($puntajeCi <= 43) {
                    $centilCi = 50;
                } else if ($puntajeCi <= 44) {
                    $centilCi = 55;
                } else if ($puntajeCi <= 45) {
                    $centilCi = 60;
                } else if ($puntajeCi <= 47) {
                    $centilCi = 65;
                } else if ($puntajeCi <= 48) {
                    $centilCi = 70;
                } else if ($puntajeCi <= 50) {
                    $centilCi = 75;
                } else if ($puntajeCi <= 52) {
                    $centilCi = 80;
                } else if ($puntajeCi <= 54) {
                    $centilCi = 85;
                } else if ($puntajeCi <= 57) {
                    $centilCi = 90;
                } else if ($puntajeCi <= 59) {
                    $centilCi = 95;
                } else if ($puntajeCi <= 60) {
                    $centilCi = 96;
                } else if ($puntajeCi <= 62) {
                    $centilCi = 97;
                } else if ($puntajeCi <= 64) {
                    $centilCi = 98;
                } else if ($puntajeCi <= 70) {
                    $centilCi = 99;
                }
                //Persuasiva
                if ($puntajePe <= 16) {
                    $centilPe = 1;
                } else if ($puntajePe <= 18) {
                    $centilPe = 2;
                } else if ($puntajePe <= 19) {
                    $centilPe = 3;
                } else if ($puntajePe <= 20) {
                    $centilPe = 4;
                } else if ($puntajePe <= 22) {
                    $centilPe = 5;
                } else if ($puntajePe <= 25) {
                    $centilPe = 10;
                } else if ($puntajePe <= 27) {
                    $centilPe = 15;
                } else if ($puntajePe <= 28) {
                    $centilPe = 20;
                } else if ($puntajePe <= 30) {
                    $centilPe = 25;
                } else if ($puntajePe <= 31) {
                    $centilPe = 30;
                } else if ($puntajePe <= 32) {
                    $centilPe = 35;
                } else if ($puntajePe <= 33) {
                    $centilPe = 40;
                } else if ($puntajePe <= 34) {
                    $centilPe = 45;
                } else if ($puntajePe <= 35) {
                    $centilPe = 50;
                } else if ($puntajePe <= 37) {
                    $centilPe = 55;
                } else if ($puntajePe <= 38) {
                    $centilPe = 60;
                } else if ($puntajePe <= 39) {
                    $centilPe = 65;
                } else if ($puntajePe <= 40) {
                    $centilPe = 70;
                } else if ($puntajePe <= 42) {
                    $centilPe = 75;
                } else if ($puntajePe <= 43) {
                    $centilPe = 80;
                } else if ($puntajePe <= 45) {
                    $centilPe = 85;
                } else if ($puntajePe <= 47) {
                    $centilPe = 90;
                } else if ($puntajePe <= 50) {
                    $centilPe = 95;
                } else if ($puntajePe <= 52) {
                    $centilPe = 97;
                } else if ($puntajePe <= 54) {
                    $centilPe = 98;
                } else if ($puntajePe <= 86) {
                    $centilPe = 99;
                }
                //Artes
                if ($puntajeAr <= 12) {
                    $centilAr = 1;
                } else if ($puntajeAr <= 13) {
                    $centilAr = 2;
                } else if ($puntajeAr <= 14) {
                    $centilAr = 3;
                } else if ($puntajeAr <= 15) {
                    $centilAr = 4;
                } else if ($puntajeAr <= 17) {
                    $centilAr = 5;
                } else if ($puntajeAr <= 19) {
                    $centilAr = 10;
                } else if ($puntajeAr <= 21) {
                    $centilAr = 15;
                } else if ($puntajeAr <= 22) {
                    $centilAr = 20;
                } else if ($puntajeAr <= 23) {
                    $centilAr = 25;
                } else if ($puntajeAr <= 24) {
                    $centilAr = 30;
                } else if ($puntajeAr <= 25) {
                    $centilAr = 35;
                } else if ($puntajeAr <= 26) {
                    $centilAr = 40;
                } else if ($puntajeAr <= 27) {
                    $centilAr = 45;
                } else if ($puntajeAr <= 28) {
                    $centilAr = 50;
                } else if ($puntajeAr <= 29) {
                    $centilAr = 55;
                } else if ($puntajeAr <= 30) {
                    $centilAr = 60;
                } else if ($puntajeAr <= 31) {
                    $centilAr = 65;
                } else if ($puntajeAr <= 32) {
                    $centilAr = 70;
                } else if ($puntajeAr <= 33) {
                    $centilAr = 75;
                } else if ($puntajeAr <= 34) {
                    $centilAr = 80;
                } else if ($puntajeAr <= 36) {
                    $centilAr = 85;
                } else if ($puntajeAr <= 38) {
                    $centilAr = 90;
                } else if ($puntajeAr <= 40) {
                    $centilAr = 95;
                } else if ($puntajeAr <= 42) {
                    $centilAr = 97;
                } else if ($puntajeAr <= 43) {
                    $centilAr = 98;
                } else if ($puntajeAr <= 52) {
                    $centilAr = 99;
                }
                //Literaria
                if ($puntajeLi <= 5) {
                    $centilLi = 1;
                } else if ($puntajeLi <= 6) {
                    $centilLi = 2;
                } else if ($puntajeLi <= 7) {
                    $centilLi = 3;
                } else if ($puntajeLi <= 8) {
                    $centilLi = 4;
                } else if ($puntajeLi <= 10) {
                    $centilLi = 5;
                } else if ($puntajeLi <= 12) {
                    $centilLi = 10;
                } else if ($puntajeLi <= 13) {
                    $centilLi = 15;
                } else if ($puntajeLi <= 14) {
                    $centilLi = 20;
                } else if ($puntajeLi <= 15) {
                    $centilLi = 25;
                } else if ($puntajeLi <= 16) {
                    $centilLi = 30;
                } else if ($puntajeLi <= 17) {
                    $centilLi = 35;
                } else if ($puntajeLi <= 18) {
                    $centilLi = 45;
                } else if ($puntajeLi <= 19) {
                    $centilLi = 50;
                } else if ($puntajeLi <= 20) {
                    $centilLi = 55;
                } else if ($puntajeLi <= 21) {
                    $centilLi = 60;
                } else if ($puntajeLi <= 22) {
                    $centilLi = 70;
                } else if ($puntajeLi <= 23) {
                    $centilLi = 75;
                } else if ($puntajeLi <= 24) {
                    $centilLi = 80;
                } else if ($puntajeLi <= 26) {
                    $centilLi = 85;
                } else if ($puntajeLi <= 28) {
                    $centilLi = 90;
                } else if ($puntajeLi <= 29) {
                    $centilLi = 95;
                } else if ($puntajeLi <= 30) {
                    $centilLi = 96;
                } else if ($puntajeLi <= 31) {
                    $centilLi = 97;
                } else if ($puntajeLi <= 32) {
                    $centilLi = 98;
                } else if ($puntajeLi <= 42) {
                    $centilLi = 99;
                }
                //Musica
                if ($puntajeMu <= 0) {
                    $centilMu = 2;
                } else if ($puntajeMu <= 1) {
                    $centilMu = 3;
                } else if ($puntajeMu <= 2) {
                    $centilMu = 4;
                } else if ($puntajeMu <= 4) {
                    $centilMu = 5;
                } else if ($puntajeMu <= 6) {
                    $centilMu = 10;
                } else if ($puntajeMu <= 7) {
                    $centilMu = 15;
                } else if ($puntajeMu <= 8) {
                    $centilMu = 20;
                } else if ($puntajeMu <= 9) {
                    $centilMu = 25;
                } else if ($puntajeMu <= 10) {
                    $centilMu = 30;
                } else if ($puntajeMu <= 11) {
                    $centilMu = 35;
                } else if ($puntajeMu <= 12) {
                    $centilMu = 40;
                } else if ($puntajeMu <= 13) {
                    $centilMu = 50;
                } else if ($puntajeMu <= 14) {
                    $centilMu = 55;
                } else if ($puntajeMu <= 15) {
                    $centilMu = 60;
                } else if ($puntajeMu <= 16) {
                    $centilMu = 65;
                } else if ($puntajeMu <= 17) {
                    $centilMu = 70;
                } else if ($puntajeMu <= 18) {
                    $centilMu = 75;
                } else if ($puntajeMu <= 19) {
                    $centilMu = 80;
                } else if ($puntajeMu <= 20) {
                    $centilMu = 85;
                } else if ($puntajeMu <= 22) {
                    $centilMu = 90;
                } else if ($puntajeMu <= 23) {
                    $centilMu = 95;
                } else if ($puntajeMu <= 24) {
                    $centilMu = 96;
                } else if ($puntajeMu <= 25) {
                    $centilMu = 97;
                } else if ($puntajeMu <= 26) {
                    $centilMu = 98;
                } else if ($puntajeMu <= 30) {
                    $centilMu = 99;
                }
                //Social o Asistencia
                if ($puntajeSo <= 19) {
                    $centilSo = 1;
                } else if ($puntajeSo <= 21) {
                    $centilSo = 2;
                } else if ($puntajeSo <= 22) {
                    $centilSo = 3;
                } else if ($puntajeSo <= 23) {
                    $centilSo = 4;
                } else if ($puntajeSo <= 26) {
                    $centilSo = 5;
                } else if ($puntajeSo <= 29) {
                    $centilSo = 10;
                } else if ($puntajeSo <= 31) {
                    $centilSo = 15;
                } else if ($puntajeSo <= 33) {
                    $centilSo = 20;
                } else if ($puntajeSo <= 34) {
                    $centilSo = 25;
                } else if ($puntajeSo <= 36) {
                    $centilSo = 30;
                } else if ($puntajeSo <= 37) {
                    $centilSo = 35;
                } else if ($puntajeSo <= 38) {
                    $centilSo = 40;
                } else if ($puntajeSo <= 40) {
                    $centilSo = 45;
                } else if ($puntajeSo <= 41) {
                    $centilSo = 50;
                } else if ($puntajeSo <= 42) {
                    $centilSo = 55;
                } else if ($puntajeSo <= 44) {
                    $centilSo = 60;
                } else if ($puntajeSo <= 45) {
                    $centilSo = 65;
                } else if ($puntajeSo <= 46) {
                    $centilSo = 70;
                } else if ($puntajeSo <= 48) {
                    $centilSo = 75;
                } else if ($puntajeSo <= 50) {
                    $centilSo = 80;
                } else if ($puntajeSo <= 52) {
                    $centilSo = 85;
                } else if ($puntajeSo <= 55) {
                    $centilSo = 90;
                } else if ($puntajeSo <= 57) {
                    $centilSo = 95;
                } else if ($puntajeSo <= 58) {
                    $centilSo = 96;
                } else if ($puntajeSo <= 60) {
                    $centilSo = 97;
                } else if ($puntajeSo <= 62) {
                    $centilSo = 98;
                } else if ($puntajeSo <= 80) {
                    $centilSo = 99;
                }
                //Administrativo
                if ($puntajeAd <= 25) {
                    $centilAd = 1;
                } else if ($puntajeAd <= 28) {
                    $centilAd = 2;
                } else if ($puntajeAd <= 29) {
                    $centilAd = 3;
                } else if ($puntajeAd <= 30) {
                    $centilAd = 4;
                } else if ($puntajeAd <= 33) {
                    $centilAd = 5;
                } else if ($puntajeAd <= 36) {
                    $centilAd = 10;
                } else if ($puntajeAd <= 38) {
                    $centilAd = 15;
                } else if ($puntajeAd <= 39) {
                    $centilAd = 19;
                } else if ($puntajeAd <= 41) {
                    $centilAd = 20;
                } else if ($puntajeAd <= 42) {
                    $centilAd = 25;
                } else if ($puntajeAd <= 44) {
                    $centilAd = 30;
                } else if ($puntajeAd <= 45) {
                    $centilAd = 35;
                } else if ($puntajeAd <= 47) {
                    $centilAd = 40;
                } else if ($puntajeAd <= 48) {
                    $centilAd = 45;
                } else if ($puntajeAd <= 50) {
                    $centilAd = 50;
                } else if ($puntajeAd <= 51) {
                    $centilAd = 55;
                } else if ($puntajeAd <= 52) {
                    $centilAd = 60;
                } else if ($puntajeAd <= 54) {
                    $centilAd = 65;
                } else if ($puntajeAd <= 56) {
                    $centilAd = 70;
                } else if ($puntajeAd <= 57) {
                    $centilAd = 75;
                } else if ($puntajeAd <= 59) {
                    $centilAd = 80;
                } else if ($puntajeAd <= 62) {
                    $centilAd = 85;
                } else if ($puntajeAd <= 65) {
                    $centilAd = 90;
                } else if ($puntajeAd <= 68) {
                    $centilAd = 95;
                } else if ($puntajeAd <= 70) {
                    $centilAd = 97;
                } else if ($puntajeAd <= 73) {
                    $centilAd = 98;
                } else if ($puntajeAd <= 102) {
                    $centilAd = 99;
                }
                break;
                //Universitarios
            case 3: //Mayor a 23 años-----------------------------------------------------------
                //Aire Libre
                if ($puntajeAL <= 7) {
                    $centilAL = 1;
                } else if ($puntajeAL <= 10) {
                    $centilAL = 2;
                } else if ($puntajeAL <= 11) {
                    $centilAL = 3;
                } else if ($puntajeAL <= 13) {
                    $centilAL = 4;
                } else if ($puntajeAL <= 16) {
                    $centilAL = 5;
                } else if ($puntajeAL <= 20) {
                    $centilAL = 10;
                } else if ($puntajeAL <= 22) {
                    $centilAL = 15;
                } else if ($puntajeAL <= 24) {
                    $centilAL = 20;
                } else if ($puntajeAL <= 26) {
                    $centilAL = 25;
                } else if ($puntajeAL <= 28) {
                    $centilAL = 30;
                } else if ($puntajeAL <= 30) {
                    $centilAL = 35;
                } else if ($puntajeAL <= 31) {
                    $centilAL = 40;
                } else if ($puntajeAL <= 33) {
                    $centilAL = 45;
                } else if ($puntajeAL <= 34) {
                    $centilAL = 50;
                } else if ($puntajeAL <= 36) {
                    $centilAL = 55;
                } else if ($puntajeAL <= 38) {
                    $centilAL = 60;
                } else if ($puntajeAL <= 39) {
                    $centilAL = 65;
                } else if ($puntajeAL <= 41) {
                    $centilAL = 70;
                } else if ($puntajeAL <= 43) {
                    $centilAL = 75;
                } else if ($puntajeAL <= 45) {
                    $centilAL = 80;
                } else if ($puntajeAL <= 48) {
                    $centilAL = 85;
                } else if ($puntajeAL <= 51) {
                    $centilAL = 90;
                } else if ($puntajeAL <= 55) {
                    $centilAL = 95;
                } else if ($puntajeAL <= 58) {
                    $centilAL = 97;
                } else if ($puntajeAL <= 60) {
                    $centilAL = 98;
                } else if ($puntajeAL <= 82) {
                    $centilAL = 99;
                }
                //Mecanica
                if ($puntajeMe <= 8) {
                    $centilMe = 1;
                } else if ($puntajeMe <= 10) {
                    $centilMe = 2;
                } else if ($puntajeMe <= 11) {
                    $centilMe = 3;
                } else if ($puntajeMe <= 12) {
                    $centilMe = 4;
                } else if ($puntajeMe <= 14) {
                    $centilMe = 5;
                } else if ($puntajeMe <= 16) {
                    $centilMe = 10;
                } else if ($puntajeMe <= 18) {
                    $centilMe = 15;
                } else if ($puntajeMe <= 19) {
                    $centilMe = 20;
                } else if ($puntajeMe <= 20) {
                    $centilMe = 25;
                } else if ($puntajeMe <= 21) {
                    $centilMe = 30;
                } else if ($puntajeMe <= 23) {
                    $centilMe = 35;
                } else if ($puntajeMe <= 24) {
                    $centilMe = 40;
                } else if ($puntajeMe <= 25) {
                    $centilMe = 45;
                } else if ($puntajeMe <= 26) {
                    $centilMe = 50;
                } else if ($puntajeMe <= 27) {
                    $centilMe = 55;
                } else if ($puntajeMe <= 28) {
                    $centilMe = 60;
                } else if ($puntajeMe <= 29) {
                    $centilMe = 65;
                } else if ($puntajeMe <= 30) {
                    $centilMe = 70;
                } else if ($puntajeMe <= 31) {
                    $centilMe = 75;
                } else if ($puntajeMe <= 32) {
                    $centilMe = 80;
                } else if ($puntajeMe <= 34) {
                    $centilMe = 85;
                } else if ($puntajeMe <= 36) {
                    $centilMe = 90;
                } else if ($puntajeMe <= 39) {
                    $centilMe = 95;
                } else if ($puntajeMe <= 41) {
                    $centilMe = 97;
                } else if ($puntajeMe <= 42) {
                    $centilMe = 98;
                } else if ($puntajeMe <= 68) {
                    $centilMe = 99;
                }
                //Calculo
                if ($puntajeCa <= 7) {
                    $centilCa = 1;
                } else if ($puntajeCa <= 8) {
                    $centilCa = 2;
                } else if ($puntajeCa <= 10) {
                    $centilCa = 3;
                } else if ($puntajeCa <= 12) {
                    $centilCa = 5;
                } else if ($puntajeCa <= 14) {
                    $centilCa = 10;
                } else if ($puntajeCa <= 16) {
                    $centilCa = 15;
                } else if ($puntajeCa <= 17) {
                    $centilCa = 20;
                } else if ($puntajeCa <= 18) {
                    $centilCa = 25;
                } else if ($puntajeCa <= 19) {
                    $centilCa = 30;
                } else if ($puntajeCa <= 20) {
                    $centilCa = 35;
                } else if ($puntajeCa <= 21) {
                    $centilCa = 40;
                } else if ($puntajeCa <= 22) {
                    $centilCa = 45;
                } else if ($puntajeCa <= 23) {
                    $centilCa = 50;
                } else if ($puntajeCa <= 24) {
                    $centilCa = 55;
                } else if ($puntajeCa <= 25) {
                    $centilCa = 60;
                } else if ($puntajeCa <= 26) {
                    $centilCa = 65;
                } else if ($puntajeCa <= 27) {
                    $centilCa = 70;
                } else if ($puntajeCa <= 28) {
                    $centilCa = 75;
                } else if ($puntajeCa <= 30) {
                    $centilCa = 80;
                } else if ($puntajeCa <= 31) {
                    $centilCa = 85;
                } else if ($puntajeCa <= 33) {
                    $centilCa = 90;
                } else if ($puntajeCa <= 35) {
                    $centilCa = 95;
                } else if ($puntajeCa <= 37) {
                    $centilCa = 97;
                } else if ($puntajeCa <= 39) {
                    $centilCa = 98;
                } else if ($puntajeCa <= 56) {
                    $centilCa = 99;
                }
                //Cientifica
                if ($puntajeCi <= 16) {
                    $centilCi = 1;
                } else if ($puntajeCi <= 18) {
                    $centilCi = 2;
                } else if ($puntajeCi <= 20) {
                    $centilCi = 3;
                } else if ($puntajeCi <= 21) {
                    $centilCi = 4;
                } else if ($puntajeCi <= 23) {
                    $centilCi = 5;
                } else if ($puntajeCi <= 26) {
                    $centilCi = 10;
                } else if ($puntajeCi <= 29) {
                    $centilCi = 15;
                } else if ($puntajeCi <= 31) {
                    $centilCi = 20;
                } else if ($puntajeCi <= 32) {
                    $centilCi = 25;
                } else if ($puntajeCi <= 34) {
                    $centilCi = 30;
                } else if ($puntajeCi <= 35) {
                    $centilCi = 35;
                } else if ($puntajeCi <= 37) {
                    $centilCi = 40;
                } else if ($puntajeCi <= 38) {
                    $centilCi = 45;
                } else if ($puntajeCi <= 39) {
                    $centilCi = 50;
                } else if ($puntajeCi <= 41) {
                    $centilCi = 55;
                } else if ($puntajeCi <= 42) {
                    $centilCi = 60;
                } else if ($puntajeCi <= 43) {
                    $centilCi = 65;
                } else if ($puntajeCi <= 45) {
                    $centilCi = 70;
                } else if ($puntajeCi <= 47) {
                    $centilCi = 75;
                } else if ($puntajeCi <= 48) {
                    $centilCi = 80;
                } else if ($puntajeCi <= 51) {
                    $centilCi = 85;
                } else if ($puntajeCi <= 54) {
                    $centilCi = 90;
                } else if ($puntajeCi <= 56) {
                    $centilCi = 95;
                } else if ($puntajeCi <= 57) {
                    $centilCi = 96;
                } else if ($puntajeCi <= 59) {
                    $centilCi = 97;
                } else if ($puntajeCi <= 61) {
                    $centilCi = 98;
                } else if ($puntajeCi <= 70) {
                    $centilCi = 99;
                }
                //Persuasiva
                if ($puntajePe <=  16) {
                    $centilPe = 1;
                } else if ($puntajePe <=  18) {
                    $centilPe = 2;
                } else if ($puntajePe <=  19) {
                    $centilPe = 3;
                } else if ($puntajePe <=  20) {
                    $centilPe = 4;
                } else if ($puntajePe <=  23) {
                    $centilPe = 5;
                } else if ($puntajePe <=  26) {
                    $centilPe = 10;
                } else if ($puntajePe <=  28) {
                    $centilPe = 15;
                } else if ($puntajePe <=  29) {
                    $centilPe = 20;
                } else if ($puntajePe <=  31) {
                    $centilPe = 25;
                } else if ($puntajePe <=  32) {
                    $centilPe = 30;
                } else if ($puntajePe <=  34) {
                    $centilPe = 35;
                } else if ($puntajePe <=  35) {
                    $centilPe = 40;
                } else if ($puntajePe <=  36) {
                    $centilPe = 45;
                } else if ($puntajePe <=  37) {
                    $centilPe = 50;
                } else if ($puntajePe <=  38) {
                    $centilPe = 55;
                } else if ($puntajePe <=  40) {
                    $centilPe = 60;
                } else if ($puntajePe <=  41) {
                    $centilPe = 65;
                } else if ($puntajePe <=  42) {
                    $centilPe = 70;
                } else if ($puntajePe <=  44) {
                    $centilPe = 75;
                } else if ($puntajePe <=  45) {
                    $centilPe = 80;
                } else if ($puntajePe <=  48) {
                    $centilPe = 85;
                } else if ($puntajePe <=  50) {
                    $centilPe = 90;
                } else if ($puntajePe <=  53) {
                    $centilPe = 95;
                } else if ($puntajePe <=  55) {
                    $centilPe = 97;
                } else if ($puntajePe <=  57) {
                    $centilPe = 98;
                } else if ($puntajePe <=  86) {
                    $centilPe = 99;
                }
                //Artes
                if ($puntajeAr <= 14) {
                    $centilAr = 1;
                } else if ($puntajeAr <= 15) {
                    $centilAr = 2;
                } else if ($puntajeAr <= 16) {
                    $centilAr = 3;
                } else if ($puntajeAr <= 17) {
                    $centilAr = 4;
                } else if ($puntajeAr <= 19) {
                    $centilAr = 5;
                } else if ($puntajeAr <= 21) {
                    $centilAr = 10;
                } else if ($puntajeAr <= 22) {
                    $centilAr = 15;
                } else if ($puntajeAr <= 24) {
                    $centilAr = 20;
                } else if ($puntajeAr <= 25) {
                    $centilAr = 25;
                } else if ($puntajeAr <= 26) {
                    $centilAr = 30;
                } else if ($puntajeAr <= 27) {
                    $centilAr = 35;
                } else if ($puntajeAr <= 28) {
                    $centilAr = 40;
                } else if ($puntajeAr <= 29) {
                    $centilAr = 50;
                } else if ($puntajeAr <= 30) {
                    $centilAr = 55;
                } else if ($puntajeAr <= 31) {
                    $centilAr = 60;
                } else if ($puntajeAr <= 32) {
                    $centilAr = 65;
                } else if ($puntajeAr <= 33) {
                    $centilAr = 70;
                } else if ($puntajeAr <= 34) {
                    $centilAr = 75;
                } else if ($puntajeAr <= 35) {
                    $centilAr = 80;
                } else if ($puntajeAr <= 37) {
                    $centilAr = 85;
                } else if ($puntajeAr <= 39) {
                    $centilAr = 90;
                } else if ($puntajeAr <= 41) {
                    $centilAr = 95;
                } else if ($puntajeAr <= 43) {
                    $centilAr = 97;
                } else if ($puntajeAr <= 44) {
                    $centilAr = 98;
                } else if ($puntajeAr <= 52) {
                    $centilAr = 99;
                }
                //Literaria
                if ($puntajeLi <= 5) {
                    $centilLi = 1;
                } else if ($puntajeLi <= 6) {
                    $centilLi = 2;
                } else if ($puntajeLi <= 7) {
                    $centilLi = 3;
                } else if ($puntajeLi <= 8) {
                    $centilLi = 4;
                } else if ($puntajeLi <= 10) {
                    $centilLi = 5;
                } else if ($puntajeLi <= 12) {
                    $centilLi = 10;
                } else if ($puntajeLi <= 13) {
                    $centilLi = 15;
                } else if ($puntajeLi <= 14) {
                    $centilLi = 20;
                } else if ($puntajeLi <= 16) {
                    $centilLi = 25;
                } else if ($puntajeLi <= 17) {
                    $centilLi = 30;
                } else if ($puntajeLi <= 18) {
                    $centilLi = 40;
                } else if ($puntajeLi <= 19) {
                    $centilLi = 45;
                } else if ($puntajeLi <= 20) {
                    $centilLi = 50;
                } else if ($puntajeLi <= 21) {
                    $centilLi = 55;
                } else if ($puntajeLi <= 22) {
                    $centilLi = 60;
                } else if ($puntajeLi <= 23) {
                    $centilLi = 65;
                } else if ($puntajeLi <= 24) {
                    $centilLi = 70;
                } else if ($puntajeLi <= 25) {
                    $centilLi = 75;
                } else if ($puntajeLi <= 26) {
                    $centilLi = 80;
                } else if ($puntajeLi <= 27) {
                    $centilLi = 85;
                } else if ($puntajeLi <= 29) {
                    $centilLi = 90;
                } else if ($puntajeLi <= 31) {
                    $centilLi = 95;
                } else if ($puntajeLi <= 33) {
                    $centilLi = 97;
                } else if ($puntajeLi <= 34) {
                    $centilLi = 98;
                } else if ($puntajeLi <= 42) {
                    $centilLi = 99;
                }
                //Musica
                if ($puntajeMu <= 3) {
                    $centilMu = 1;
                } else if ($puntajeMu <= 4) {
                    $centilMu = 2;
                } else if ($puntajeMu <= 5) {
                    $centilMu = 3;
                } else if ($puntajeMu <= 7) {
                    $centilMu = 5;
                } else if ($puntajeMu <= 8) {
                    $centilMu = 10;
                } else if ($puntajeMu <= 10) {
                    $centilMu = 15;
                } else if ($puntajeMu <= 11) {
                    $centilMu = 20;
                } else if ($puntajeMu <= 12) {
                    $centilMu = 25;
                } else if ($puntajeMu <= 13) {
                    $centilMu = 35;
                } else if ($puntajeMu <= 14) {
                    $centilMu = 40;
                } else if ($puntajeMu <= 15) {
                    $centilMu = 45;
                } else if ($puntajeMu <= 16) {
                    $centilMu = 55;
                } else if ($puntajeMu <= 17) {
                    $centilMu = 60;
                } else if ($puntajeMu <= 18) {
                    $centilMu = 70;
                } else if ($puntajeMu <= 19) {
                    $centilMu = 75;
                } else if ($puntajeMu <= 20) {
                    $centilMu = 80;
                } else if ($puntajeMu <= 21) {
                    $centilMu = 85;
                } else if ($puntajeMu <= 23) {
                    $centilMu = 90;
                } else if ($puntajeMu <= 25) {
                    $centilMu = 95;
                } else if ($puntajeMu <= 26) {
                    $centilMu = 97;
                } else if ($puntajeMu <= 27) {
                    $centilMu = 98;
                } else if ($puntajeMu <= 30) {
                    $centilMu = 99;
                }
                //Social o Asistencia
                if ($puntajeSo <= 26) {
                    $centilSo = 1;
                } else if ($puntajeSo <= 28) {
                    $centilSo = 2;
                } else if ($puntajeSo <= 30) {
                    $centilSo = 3;
                } else if ($puntajeSo <= 31) {
                    $centilSo = 4;
                } else if ($puntajeSo <= 33) {
                    $centilSo = 5;
                } else if ($puntajeSo <= 35) {
                    $centilSo = 10;
                } else if ($puntajeSo <= 38) {
                    $centilSo = 15;
                } else if ($puntajeSo <= 40) {
                    $centilSo = 20;
                } else if ($puntajeSo <= 42) {
                    $centilSo = 25;
                } else if ($puntajeSo <= 44) {
                    $centilSo = 30;
                } else if ($puntajeSo <= 45) {
                    $centilSo = 35;
                } else if ($puntajeSo <= 46) {
                    $centilSo = 40;
                } else if ($puntajeSo <= 48) {
                    $centilSo = 45;
                } else if ($puntajeSo <= 49) {
                    $centilSo = 50;
                } else if ($puntajeSo <= 50) {
                    $centilSo = 55;
                } else if ($puntajeSo <= 52) {
                    $centilSo = 60;
                } else if ($puntajeSo <= 53) {
                    $centilSo = 65;
                } else if ($puntajeSo <= 54) {
                    $centilSo = 70;
                } else if ($puntajeSo <= 56) {
                    $centilSo = 75;
                } else if ($puntajeSo <= 58) {
                    $centilSo = 80;
                } else if ($puntajeSo <= 60) {
                    $centilSo = 85;
                } else if ($puntajeSo <= 63) {
                    $centilSo = 90;
                } else if ($puntajeSo <= 66) {
                    $centilSo = 95;
                } else if ($puntajeSo <= 68) {
                    $centilSo = 97;
                } else if ($puntajeSo <= 71) {
                    $centilSo = 98;
                } else if ($puntajeSo <= 80) {
                    $centilSo = 99;
                }
                //Administrativa
                if ($puntajeAd <= 26) {
                    $centilAd = 1;
                } else if ($puntajeAd <= 28) {
                    $centilAd = 2;
                } else if ($puntajeAd <= 30) {
                    $centilAd = 3;
                } else if ($puntajeAd <= 31) {
                    $centilAd = 4;
                } else if ($puntajeAd <= 35) {
                    $centilAd = 5;
                } else if ($puntajeAd <= 38) {
                    $centilAd = 10;
                } else if ($puntajeAd <= 41) {
                    $centilAd = 15;
                } else if ($puntajeAd <= 43) {
                    $centilAd = 20;
                } else if ($puntajeAd <= 45) {
                    $centilAd = 25;
                } else if ($puntajeAd <= 47) {
                    $centilAd = 30;
                } else if ($puntajeAd <= 48) {
                    $centilAd = 35;
                } else if ($puntajeAd <= 50) {
                    $centilAd = 40;
                } else if ($puntajeAd <= 52) {
                    $centilAd = 45;
                } else if ($puntajeAd <= 53) {
                    $centilAd = 50;
                } else if ($puntajeAd <= 55) {
                    $centilAd = 55;
                } else if ($puntajeAd <= 56) {
                    $centilAd = 60;
                } else if ($puntajeAd <= 58) {
                    $centilAd = 65;
                } else if ($puntajeAd <= 60) {
                    $centilAd = 70;
                } else if ($puntajeAd <= 62) {
                    $centilAd = 75;
                } else if ($puntajeAd <= 64) {
                    $centilAd = 80;
                } else if ($puntajeAd <= 67) {
                    $centilAd = 85;
                } else if ($puntajeAd <= 70) {
                    $centilAd = 90;
                } else if ($puntajeAd <= 73) {
                    $centilAd = 95;
                } else if ($puntajeAd <= 74) {
                    $centilAd = 96;
                } else if ($puntajeAd <= 77) {
                    $centilAd = 97;
                } else if ($puntajeAd <= 79) {
                    $centilAd = 98;
                } else if ($puntajeAd <= 102) {
                    $centilAd = 99;
                }
                break;
        }
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
    $area1 = "";
    $area2 = "";
    switch (max($centilAL, $centilMe, $centilCa, $centilCi, $centilPe, $centilAr, $centilLi, $centilMu, $centilSo, $centilAd)) {
        case $centilAL:
            $area1 = 1;
            switch (max($centilMe, $centilCa, $centilCi, $centilPe, $centilAr, $centilLi, $centilMu, $centilSo, $centilAd)) {
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilMe:
            $area1 = 2;
            switch (max($centilAL, $centilCa, $centilCi, $centilPe, $centilAr, $centilLi, $centilMu, $centilSo, $centilAd)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilCa:
            $area1 = 3;
            switch (max($centilAL, $centilMe, $centilCi, $centilPe, $centilAr, $centilLi, $centilMu, $centilSo, $centilAd)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilCi:
            $area1 = 4;
            switch (max($centilAL, $centilMe, $centilCa, $centilPe, $centilAr, $centilLi, $centilMu, $centilSo, $centilAd)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilPe:
            $area1 = 5;
            switch (max($centilAL, $centilMe, $centilCa, $centilCi, $centilAr, $centilLi, $centilMu, $centilSo, $centilAd)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilAr:
            $area1 = 6;
            switch (max($centilAL, $centilMe, $centilCa, $centilCi, $centilPe, $centilLi, $centilMu, $centilSo, $centilAd)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilLi:
            $area1 = 7;
            switch (max($centilAL, $centilMe, $centilCa, $centilCi, $centilPe, $centilAr, $centilMu, $centilSo, $centilAd)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilMu:
            $area1 = 8;
            switch (max($centilAL, $centilMe, $centilCa, $centilCi, $centilPe, $centilAr, $centilLi, $centilSo, $centilAd)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilSo:
            $area1 = 9;
            switch (max($centilAL, $centilMe, $centilCa, $centilCi, $centilPe, $centilAr, $centilLi, $centilMu, $centilAd)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilAd:
                    $area2 = 10;
                    break;
            }
            break;
        case $centilAd:
            $area1 = 10;
            switch (max($centilAL, $centilMe, $centilCa, $centilCi, $centilPe, $centilAr, $centilLi, $centilMu, $centilSo)) {
                case $centilAL:
                    $area2 = 1;
                    break;
                case $centilMe:
                    $area2 = 2;
                    break;
                case $centilCa:
                    $area2 = 3;
                    break;
                case $centilCi:
                    $area2 = 4;
                    break;
                case $centilPe:
                    $area2 = 5;
                    break;
                case $centilAr:
                    $area2 = 6;
                    break;
                case $centilLi:
                    $area2 = 7;
                    break;
                case $centilMu:
                    $area2 = 8;
                    break;
                case $centilSo:
                    $area2 = 9;
                    break;
            }
            break;
    }
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