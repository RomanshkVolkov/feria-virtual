<?php
setcookie("Registrado",  time() + (10 * 365 * 24 * 60 * 60));
echo "<script> window.location='index.php'; </script>";
?>