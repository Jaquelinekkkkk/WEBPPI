<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Imprima todos os termos de uma PA até N informado pelo usuário</h2>

    <label for="termoN">Informe o termo</label>
    <form action="">
<label for="a1"></label>
<input id="a1" type="text">



    <input id="termoN" type="text" name="N">
    a1=0
    r=3
    </form>
    <?php
    $a1=0;
    $r=3;

    $$N= isset($GET["N"])?$_GET["N"]:1
    $i=1;
$termoN=0; //a1
    for ($i = 1; $i <= $N; $i++) {
        echo "Termo: " . $termoN;
        $termoN+=$r;
      }

   



    
   
    ?>
</body>
</html>