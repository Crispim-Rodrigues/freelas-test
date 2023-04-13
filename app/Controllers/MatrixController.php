<?php 
    namespace App\Controllers;
    use App\Models\MatrixModel;
    use App\Views\MatrixView;
    
    class MatrixController
    {
        public function generateCrossMatrix($size = 5)
        {
            $matrixModel = new MatrixModel();
            $matrix = $matrixModel->generateCrossMatrix($size);
    
            $matrixView = new MatrixView($matrix);
            
            $matrixView->render();
        }
        public function generateXMatrix($size = 5)
        {
            $matrixModel = new MatrixModel();
            $matrix = $matrixModel->generateXMatrix($size);
    
            $matrixView = new MatrixView($matrix);
            
            $matrixView->render();
        }
    }





?>