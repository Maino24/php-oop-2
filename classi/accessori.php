<?php 

include_once __DIR__ . '/product.php';

class Accessori extends product{
    public $materiali;
    public $taglia;
    
    public function __construct(
        String $image,
        String $nome,
        Float $prezzo,
        Category $category,

        String $materiali,
        String $taglia,

    )
    {
        parent ::__construct( $image, $nome, $prezzo, $category);
        $this->materiali = $materiali;
        $this->taglia = $taglia;
    }
}

?>