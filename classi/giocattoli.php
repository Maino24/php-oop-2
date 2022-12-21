<?php 

include_once __DIR__ . '/product.php';

class Giocattoli extends product{
    public $caratteristiche;
    public $dimensioni;
    
    public function __construct(
        String $image,
        String $nome,
        Float $prezzo,
        Category $category,

        String $caratteristiche,
        String $dimensioni

    )
    {
        parent ::__construct( $image, $nome, $prezzo, $category);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }
}

?>