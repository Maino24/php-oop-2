<?php

include_once __DIR__ . '/classi/accessori.php';
include_once __DIR__ . '/classi/category.php';
include_once __DIR__ . '/classi/food.php';
include_once __DIR__ . '/classi/giocattoli.php';


$category = [

    'gatto' => new Category('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'cane' => new Category('Cane', '<i class="fa-solid fa-dog"></i>'),
    'canarino' => new Category('Canarino', '<i class="fa-solid fa-dove"></i>'),
    'pesce' => new Category('Pesce', '<i class="fa-solid fa-fish"></i>'),
];

$products = [

    new Food('http://www.biscoitinho.pt/7568-thickbox_default/royal-canin-mini-puppy-cao-seco-cachorro-alimentoracao.jpg', 'Royal Canin',
     184.99, $category['cane'], '545g', ['prosciutto', 'riso']),

    new Food('https://th.bing.com/th/id/OIP._F_H2IBZUcvguXO4XJqFOAAAAA?pid=ImgDet&rs=1', 'Almo Nature', 43.99, 
    $category['cane'], '600', ['manzo', 'cereali']),

    new Accessori('https://th.bing.com/th/id/R.e766380ffc303ccc8b8d6c2c01490871?rik=z4%2b9AIoQXiQ4jw&pid=ImgRaw&r=0', 'Voliera Ferplast Bella Casa', 184.99, 
    $category['canarino'], 'Legno', 'M: L 83 x P 67 x H 153 cm'),

    new Giocattoli('https://th.bing.com/th/id/R.eed65604ceadd82ac803c353b9d9e50c?rik=G4HTmAwPXuXQrg&pid=ImgRaw&r=0', 'Topini di peluche Trixie', 4.99, 
    $category['gatto'], 'Morbido con codina in corda', '8,5 cm x 10 cm'),

];

//var_dump($products);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <h1 class="title">BOOLSHOP</h1>
    
    <div class="containerTot">
        
            <?php foreach( $products as $elem){ ?>
                <div class="containerCard">
                    <div class="card">
                        <img src="<?php echo $elem->image ?>" class="card-img-top" alt="<?php echo $elem->nome ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo  $elem->nome ?></h5>
                            <p class="card-text"><?php echo $elem->prezzo ?></p>
                            <p><?php echo $elem->category->icon ?></p>
                            <p><?php echo $elem->category->name ?></p>

                            <?php if(get_class($elem) == 'Food'){ ?>
                                <p>Peso netto: <?php echo $elem->weight ?></p>
                                <span>Ingredienti: <?php echo $elem->ingredienti[0] ?>,</span>
                                <span><?php echo $elem->ingredienti[1] ?></span>
                            <?php } else if( get_class($elem) == 'Giocattoli'){ ?>
                                <p>Caratteristiche: <?php echo $elem->caratteristiche ?></p>
                            <?php } else { ?>
                                <p>Materiale: <?php echo $elem->materiali ?></p>
                            <?php } ?> 

                            

                        </div>
                    </div>
                </div>
            <?php } ?>
        
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>