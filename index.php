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

    new Food('https://www.bing.com/images/search?view=detailV2&ccid=SuBu0l2T&id=4A539F48D8AC05D8367FB0FFC2213B89E5718DB2&thid=OIP.SuBu0l2T0V0qfo429gQJZQHaH6&mediaurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.4ae06ed25d93d15d2a7e8e36f6040965%3frik%3dso1x5Yk7IcL%252fsA%26riu%3dhttp%253a%252f%252fwww.biscoitinho.pt%252f7568-thickbox_default%252froyal-canin-mini-puppy-cao-seco-cachorro-alimentoracao.jpg%26ehk%3dDPnmZW3o9ceysjKGELl9EDZjVwxwAUxlMHJlpFP0G6M%253d%26risl%3d%26pid%3dImgRaw%26r%3d0&exph=1710&expw=1600&q=royal+canin&simid=608011153106683568&FORM=IRPRST&ck=C66ED9EBA114A00DAA77508D35659FE1&selectedIndex=10', 'Royal Canin',
     184.99, $category['cane'], '545g', ['prosciutto', 'riso']),

    new Food('https://www.bing.com/aclick?ld=e8eHpl9ncwsSrd65vfdMz6hzVUCUyq0Z7H2_YqVlGfQ_BX2-8KgBpi_ka5sV2XIiu_VJ67mGf5WS3QCJhr_4XYyQGxvcZPbeq9xfPju8DhLH6jit3tQcSPqaOg7MitFJYtSrXpxGgVZIWafWUEllv3VvZ3eBWBav5W6uFuIn418uEUJOZZLIAtqisEZGIrpN0lzMu9Cw&u=aHR0cHMlM2ElMmYlMmZ3d3cudHJvdmFwcmV6emkuaXQlMmZiYWRzJTJmNDE1MzUyNzcwJTNmbSUzZGNpYW1hbmltYWxp&rlid=e9f1b6b123d41c047bf0d512159e8708&ntb=1&ntb=1&ntb=1&ntb=1', 'Almo Nature', 43.99, 
    $category['cane'], '600', ['manzo', 'cereali']),

    new Accessori('https://www.bing.com/aclick?ld=e8E1No48Z3bNe_1-g-u9LyPDVUCUwm5jtJpouLQ2Wq0MhbU0QRaKt12dnryBoocbAkFMbBBYS0Mvxe-nSvNOWwMiF22RkZH6Ql9Lg9hNC3d2zjafK586uEloeuGaon51_drvDlLdzAh-JDvSSJIgEYCOvBOpGwa8zW7Pjx5M_Mb24ikvPBMXibRMf3khRnLMzTSNRoOw&u=aHR0cHMlM2ElMmYlMmZ3d3cubWFub21hbm8uaXQlMmZ2b2xpZXJlLTI3MDUlM2Ztb2RlbF9pZCUzZDIwNjEwMDMlMjZyZWZlcmVyX2lkJTNkNjk3NTkwJTI2bXNjbGtpZCUzZDg1ZWNmZGNhMDZhODFiMmIyODMxOWU2OTMwNGU1NjBlJTI2dXRtX3NvdXJjZSUzZGJpbmclMjZ1dG1fbWVkaXVtJTNkY3BjJTI2dXRtX2NhbXBhaWduJTNkQmluZyUyNTIwU2hvcHBpbmdfQ1BDX0lUX0IyQ190ZXN0JTI1MjBUb3AlMjUyMFByb2R1Y3RzJTI1MjAtJTI1MjBwb29sJTI1MjB0ZXN0JTI1MjAtJTI1MjBUb3AlMjUyMFByb2R1Y3RzJTI2dXRtX3Rlcm0lM2Q0NTc2MzczNTc0OTIxODA0JTI2dXRtX2NvbnRlbnQlM2RDdXN0b20lMjUyMExhYmVsJTI1MjAyJTI1MjAtJTI1MjBCJTI1MjAtJTI1MjBEZXNrdG9w&rlid=85ecfdca06a81b2b28319e69304e560e&ntb=1&ntb=1&ntb=1&ntb=1&ntb=1', 'Voliera Ferplast Bella Casa', 184.99, 
    $category['canarino'], 'Legno', 'M: L 83 x P 67 x H 153 cm'),

    new Giocattoli('https://www.bing.com/aclick?ld=e8y2qvfuX5KL4jFmr72s6MjzVUCUyQ2W-mCK9yYV8G7XbhDoAvNCNsy1w49FiNkUCbPGoPBRUqx6fGvUMLlEd_aRv23s74IorKt4ZcWNNFrSfD3CyhzNMWV5ZYEPKVfb7UXKnwLGcU6uUFULwp9R9XG_ZxwmZANefocHi_ePapYKfSAkjpEnjTSInlSHRm3IoH6Q3Odg&u=aHR0cHMlM2ElMmYlMmZ3d3cuem9vcGx1cy5pdCUyZnNob3AlMmZnYXR0aSUyZmdpb2NoaV9nYXR0aSUyZnRvcGluaV9naW9jb19nYXR0aSUyZmdpb2NoaV9nYXR0aV90b3BpbmlfcGVsdWNoZSUyZjg3NTE0JTNmdmFyaWFudGlkJTNkODc1MTQuMSUyNmFiZCUzZHRydWUlMjZta3Rfc291cmNlJTNkMTM5NjcxNCUyNm1zY2xraWQlM2Q4ODI5NzA3MDZmODgxYWRkM2FjMzEzZDM1OGI5MTE0OQ&rlid=882970706f881add3ac313d358b91149&ntb=1&ntb=1&ntb=1&ntb=1&ntb=1&ntb=1', 'Topini di peluche Trixie', 4.99, 
    $category['gatto'], 'Morbido con codina in corda', '8,5 cm x 10 cm'),

];



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
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <h1>BOOLSHOP</h1>
    <div class="container">
        <div class="row">
            <?php foreach( $products as $elem){ ?>
                <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php $elem->image ?>" class="card-img-top" alt="<?php $elem->nome ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php $elem->nome ?></h5>
                        <p class="card-text"><?php $elem->prezzo ?></p>
                        <p class="card-text"><?php $elem->category ?></p>
                    </div>
                </div>
                </div>
            <?php } ?>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>