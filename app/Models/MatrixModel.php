<?php 
    namespace App\Models;

    class MatrixModel
    {
        public function generateCrossMatrix($size)
        {
            $matrix = array();
    
            for ($i = 0; $i < $size; $i++) {
                $row = array();
                for ($j = 0; $j < $size; $j++) {
                    if ($i == (round($size * 0.30) - 1) || $j == (round($size * 0.5) - 1)) {
                        $row[] = "x";
                    } else {
                        $row[] = ".";
                    }
                }
                $matrix[] = $row;
            }
    
            return $matrix;
        }
    }
?>