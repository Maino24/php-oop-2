<?php

include_once __DIR__ . '/product.php';

class Food extends Product{
    public $weight;
    public $ingredienti;


    public function __construct(
        String $image,
        String $nome,
        Float $prezzo,
        Category $category,

        String $weight,
        Array $ingredienti
    )
    {
        parent::__construct($image,$nome,$prezzo,$category);
        $this->weight = $weight;
        $this->ingredienti = $ingredienti;
    }
}

?>