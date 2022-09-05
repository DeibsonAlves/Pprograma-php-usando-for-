<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo '<h1>for</h1>';
for ($i=0; $i < 100; $i++) {
    echo "<p>[$i]</p>";
}

*/

$nota ['Deibson']=10;
$nota['Samuel']=9.0;
$nota['Isac']=8.5;

foreach($nota as $p=>$n){
    echo "Aluno: $p Nota: $n<br>";

}


?>
</body>
</html>