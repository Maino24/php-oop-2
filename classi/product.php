<?php 

include_once __DIR__ . '/category.php';

class Product {
    public $image;
    public $nome;
    public $prezzo; 
    public $category;

    public function __construct(
        String $image,
        String $nome,
        Float $prezzo,
        Category $category
        )
    {
        $this ->image = $image;
        $this ->nome  = $nome;
        $this ->prezzo = $prezzo;
        $this ->category = $category;
    }


}





?>