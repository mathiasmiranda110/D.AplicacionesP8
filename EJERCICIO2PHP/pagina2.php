<?php
$columnas = $_POST['columnas'];
$filas = $_POST['filas'];


echo "Cantidad de columnas es: ".$columnas."<BR>\n";
echo "Cantidad de filas es: ".$filas."<BR>\n";

    function matriz($a,$b,$min,$max){
        for($x=0;$x<$a;$x++)
            for($y=0;$y<$b;$y++)
                $r[$x][$y]=rand($min,$max);
        return $r;
    }

    $txt='<table border>';
    foreach(matriz($filas,$columnas,1,100) as $x){
        $txt.='<tr>';
        foreach($x as $xy) $txt.='<td>'.$xy.'</td>';
        $txt.='</tr>';
    }
    $txt.='</table>';
    echo $txt;

    if ($columnas!=$filas){
        echo "MATRIZ IMPERFECTA NO CUADRADA";
    }
    else{
        echo "MATRIZ PERFECTA CUADRADA";
    }
?>