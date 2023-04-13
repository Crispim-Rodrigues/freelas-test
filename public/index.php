<?php 

require_once '../vendor/autoload.php';

use App\Controllers\MatrixController;

$controller = new MatrixController();

$size = isset($_GET['size']) ? $_GET['size'] : 5;

$controller->generateMatrix($size);












//   teste 1

    // cruz
    // $size = 9;
    // for ($i=0; $i < $size; $i++) { 
    //     for ($j=0; $j < $size; $j++) { 
    //         if ($i == (round($size * 0.30) - 1) || $j == (round($size * 0.5) - 1)) 
    //         {
    //             echo "x";
    //         }
    //         else 
    //         {
    //            echo " . "; 
    //         }
    //     }
    //  echo "<br/>";
    // }

    // echo "<br/>";


    //X

    // for ($i=0; $i < $size; $i++) { 
    //     for ($j=0; $j < $size; $j++) { 
    //         if ($i == $j || $i == ($size - $j - 1)) 
    //         {
    //            echo "x";
    //         }
    //         else
    //         {
    //             echo " . ";
    //         }
    //     }
    //     echo "<br/>";
    // }



?>