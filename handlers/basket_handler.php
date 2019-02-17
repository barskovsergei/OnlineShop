<?php
    session_start();
    // unset($_SESSION ['basket']);
    $output = [
        'basketInfo'=> [
            'count'=>0,
            'fullPrice'=>0
        ]
    ];
    // Процедура добавления в корзину товаров

    if ( isset ($_GET['productId']) ){
        $product_id = $_GET['productId'];

        if( !isset( $_SESSION['basket']) ){
            $_SESSION['basket']=[
                'products'=>[],
                'info'=>[
                    'count'=> 0,
                    'fullPrice'=>0
                ]
            ];
        }
        $is_find = false;
        foreach( $_SESSION['basket']['products'] as $key => $productItem ){
            if ($productItem['id'] == $product_id ){
                // $productItem['count']++;
                $_SESSION['basket']['products'][$key]['count']++;
                $is_find = true;
                break;
                // $_SESSION['basket']['products'][$key]['count']++;
            }
        }

        if( !$is_find ){
            // товара нет в корзине, я его должен добавить. Достать из базы
            $link = mysqli_connect('localhost', 'root', '', '29092018_1_3project');
            mysqli_set_charset($link, 'utf8');

            $sql = "SELECT price FROM products WHERE id = {$product_id}";
            $result = mysqli_query($link, $sql);

            $price = mysqli_fetch_assoc($result)['price'];

            $_SESSION['basket']['products'][] = [
                'id'=>$product_id,
                'price'=> (float) $price,
                'count'=> 1
            ];
        }
       
        

        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";

    }
     // процедура подсчета и установки значения в массив $output
     if( isset ( $_SESSION['basket'] ) ){
        foreach( $_SESSION['basket']['products'] as $productItem ){
            $output['basketInfo']['count'] += $productItem['count'];
            $output['basketInfo']['fullPrice'] += $productItem['count'] * $productItem['price'];

            $_SESSION['basket']['info']['count'] += $productItem['count'];
            $_SESSION['basket']['info']['fullPrice'] += $productItem['count'] * $productItem['price'];
        }        
    }

    echo json_encode( $output );
?>

