<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h2></h2>
    <?php
    echo "<h3>a)</h3>";


    $x[0][0] = 15; 
    $x[0][1] = 6; 
    $x[1][0] = 2; 
    $x[1][1] = 5;
    foreach($x as $v)
     echo $v."<br>"; 
    
    echo "<hr>";
    echo "<h3>b)</h3>";
    
    $x[0][0] = 15;
    $x[0][1] = 6;
    $x[1][0] = 2;
    $x[1][1] = 5;
    foreach($x as $v)
     foreach($v as $z)
      echo $z."<br>";

    echo "<hr>";
    echo "<h3>c)</h3>";

    $x[0]["nome"] = "Beatriz";
    $x[0]["idade"] = "6";
    $x[0]["nome"] = "Carlos";
    $x[0]["nome"] = "5";
    foreach($x as $v)
     foreach($v as $z)
      echo $z."<br>";
    

    echo "<hr>";
    echo "<h3>d)</h3>";

    $x[0]["nome"] = "Beatriz";
    $x[0]["idade"] = "6";
    $x[0]["nome"] = "Carlos";
    $x[0]["nome"] = "5";
    foreach($x as $i => $v)
     foreach($v as $j => $z)
      echo $i." - ".$j." - ".$z."<br>";

    echo "<hr>";
    echo "<h3>e)</h3>";

    $p[0]["nome"] = "Joaquim";
    $p[0]["idade"] = "30";
    $p[0]["nome"] = "Lindalva";
    $p[0]["idade"] = "26";
    $p[0]["nome"] = "Ribamar";
    $p[0]["idade"] = "44";
    $i = -1;
    $c = -1;
    foreach($p as $id => $s){
      if($s["idade"]>$i){
        $i = $s["idade"];
        $c = $id;
      }
    }
    echo $p[$c]["nome"];

    echo "<hr>";
    echo "<h3>f)</h3>";

    $p[] = "Joaquim";
    $p[] = "Lindalva";
    $p[] = "Ribamar";
    $p[] = "Beatriz";
    $p[] = "Carlos";
    $p[] = "Carlos José";
    $p[] = "Beatriz";
    $quant = count($p);
    echo "Quant:".$quant."<br>";
    unset($p[2]);
    foreach($p as $s){
      echo $s."<br>";
    }
    $v = array_unique($p);
    foreach($v as $r){
      echo $r."<br>";
    }
    
    echo "<hr>";
    echo "<h3>g)</h3>";

    $cidades = "Bento Gonçalves,Garibaldi,Caxias do Sul,Farroupilha,barão";
    $lista = explode(",",$cidades);
    foreach($lista as $l){
      echo $l."<br>";
    }
    $outras[] = "Salvador do Sul";
    $outras[] = "Cotiporã";
    $junta = array_merge($lista,$outras);
    foreach($junta as $j){
      echo $j."<br>";
    }
    echo count($junta)."<br>";
    sort($junta);
    $chave = array_search("Farroupilha",$junta);
    echo $chave."<br>";
    $tem = in_array("Cotiporã",$junta);
    echo $tem."<br>";



    ?>
</body>
</html>