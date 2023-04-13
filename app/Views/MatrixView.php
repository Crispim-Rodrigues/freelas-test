<?php 
namespace App\Views;
class MatrixView
{
    private $matrix;

    public function __construct(array $matrix)
    {
        $this->matrix = $matrix;
    }

    public function render()
    {
        echo '<pre>';
        foreach ($this->matrix as $row) {
            foreach ($row as $cell) {
                echo $cell . " ";
            }
            echo PHP_EOL;
        }
        echo '</pre>';
    }
}





?>
    

