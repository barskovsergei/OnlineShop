<?php
    session_start();
    $title = "Корзина";
    include("header.php");
    
    $template = [
        'basket'=> [
            'products'=>[]
        ]
    ];

    if(!empty ( $_SESSION['basket']['products'] ) ){
        echo "<pre>";
        print_r( $_SESSION['basket']['products'] );
        echo "</pre>";
    }
?>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/catalog.js"></script>
      
</body>
</html>
    
