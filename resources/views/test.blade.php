<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <input type="text" name="first">
    <input type="text" name="sec">
    <input type="submit">
</form>

<?php

    if(isset($_GET['first'])) {
        $first = $_GET['first'];
        $sec = $_GET['sec'];


    function arr_sum ($first, $sec){
        $fth = explode(",",$first);
        $i = 0;
        foreach ($fth as $item){
            $i += intval($item);
        }
        $sth = explode(",",$sec);
        $j = 0;
        foreach ($sth as $item){
            $j += intval($item);
        }
        $total = $i + $j;
        echo $total;
    }

    function sum ($first, $sec) {
        echo intval($first + $sec);
    }

    if(strpos($first,",")!= null || strpos($sec,",")!= null) {
        arr_sum ($first,$sec);
    }else{
        sum($first,$sec);
    }
    }
?>
</body>
</html>
