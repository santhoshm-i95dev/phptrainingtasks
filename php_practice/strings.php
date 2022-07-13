<html>
<body>

<?php

// left trim
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");

//right trim

$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str, "World!");

//html entities

$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);

//implode function

$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(" ", $arr);

//explode function
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

?>

</body>
</html>
