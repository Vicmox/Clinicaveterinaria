<?php

include ("../../../app/appConfig.php");

$fecha = $_GET["fecha"];

$hora_cita = "";

$query = $pdo->prepare("SELECT * FROM tb_reservas WHERE fecha_cita = '$fecha' ");
$query->execute();

$datos = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos as $dato){

  $hora_cita = $dato['hora_cita'];

  $horario = ['08:00 - 09:00','09:00 - 10:00','10:00 - 11:00','11:00 - 12:00','14:00 - 15:00','15:00 - 16:00','16:00 - 17:00','17:00 - 18:00'];

    for ($i = 0; $i<8; $i++ ){
      
      if ($horario[$i] == $hora_cita){
        $num = $i + 1;
        $hora_res = "#btn_h".$num;
        echo "<script> $('$hora_res').attr('disabled',true); $('$hora_res').css('background-color', 'red') </script>"; 
      } 
    }
}

?>
