<?php
    $output = [
        'products'=> [],
        'paginationInfo'=> [
            'page'=> 1,
            'countPage'=> 5
        ]
    ];

    $limit = 6;
    $page = 1;

    if( isset( $_GET['page'] ) ){
        $page = (int) $_GET['page'];
    }
    $output['paginationInfo']['page'] = $page;

    $link = mysqli_connect('localhost', 'root', '', '29092018_1_3project');
    mysqli_set_charset($link, 'utf8');

    $sql_count = 'SELECT COUNT(id) as len FROM products';
    $result_count = mysqli_query($link, $sql_count);

    $count_row = (int) mysqli_fetch_assoc($result_count)['len'];
    $count_page = ceil($count_row / $limit);
    $output['paginationInfo']['countPage'] = $count_page;

    $limit_sql = ($page -1 ) * $limit;
    $sql = "SELECT * FROM products limit {$limit_sql}, {$limit}";

    $result = mysqli_query($link, $sql);

    while( $row = mysqli_fetch_assoc($result) ){
        $output['products'][] = $row;
    }

    echo json_encode($output);
?>