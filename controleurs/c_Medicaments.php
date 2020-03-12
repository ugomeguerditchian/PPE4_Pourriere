<?php
include("vues/v_sommaire.php");
$ConsulterMedicaments=$pdo-> getConsulterMedicaments();
include("vues/v_lesMedicaments.php");
include("vues/v_pied.php");
?>
