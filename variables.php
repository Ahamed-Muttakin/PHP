<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        $a="Core of Coding<br>";//var
        $num= 13;#var
        $b=3;
        echo "<h1>".$a."</h1>";
        /*echo $a;
        echo $num;*/
        define("num1",500,true);//constant variable
        echo NUm1."<br>";
        $sum=num1+200;
        echo $sum;
        echo $num**$b;//exponention operator(power)
    ?>
</body>
</html>