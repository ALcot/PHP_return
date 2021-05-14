<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>return</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 関数getCircleAreaを定義する
    function getCircleArea($radius) {
      return $radius * $radius * 3;
    }
    
    // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入する
    $circleArea = getCircleArea(5);
    
    // $circleAreaをechoする
    echo $circleArea;
    
  ?>

</body>
</html>
