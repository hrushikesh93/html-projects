
<?php
 
 // This function stores transpose
 // of A[][] in B[][]
 function transpose(&$A, &$B)
 {
     $N = 4;
     for ($i = 0; $i < $N; $i++)
         for ($j = 0; $j < $N; $j++)
             $B[$i][$j] = $A[$j][$i];
 }
 function multiply(&$mat1, &$mat2, &$res)
{
    $N = 4;
    for ($i = 0; $i < $N; $i++)
    {
        for ($j = 0; $j < $N; $j++)
        {
            $res[$i][$j] = 0;
            for ($k = 0; $k < $N; $k++)
                $res[$i][$j] += $mat1[$i][$k] *
                                $mat2[$k][$j];
        }
    }
}
function add(&$A, &$B, &$C)
{
    $N = 4;
    for ($i = 0; $i < $N; $i++)
        for ($j = 0; $j < $N; $j++)
            $C[$i][$j] = $A[$i][$j] +
                         $B[$i][$j];
}
  
 // Driver code
 $A = array(array(1, 1, 1, 1),
            array(2, 2, 2, 2),
            array(3, 3, 3, 3),
            array(4, 4, 4, 4));
  
$mat1 = array(array(1, 1, 1, 1),
            array(2, 2, 2, 2),
            array(3, 3, 3, 3),
            array(4, 4, 4, 4));

$mat2 = array(array(1, 1, 1, 1),
            array(2, 2, 2, 2),
            array(3, 3, 3, 3),
            array(4, 4, 4, 4));

 $N = 4;

 //transpose of matrix
 transpose($A, $B);
 echo "<h1 style='color: green;'>transepose of matrix</h1>";
 for ($i = 0; $i < $N; $i++)
 {
     for ($j = 0; $j < $N; $j++)
     {
         echo $B[$i][$j];
         echo " ";
     }
     echo "<br>";
 }
 echo "<hr>";

//multiplication of matrix
multiply($mat1, $mat2, $res);
echo ("<h1 style='color: green;'>multiplication of matrix</h1>");
for ($i = 0; $i < $N; $i++)
{
    for ($j = 0; $j < $N; $j++)
    {
        echo ($res[$i][$j]);
        echo(" ");
    }
    echo ("<br>");
}
echo "<hr>";

//addition of matrix
add($mat1, $mat2, $res);
echo "<h1 style='color: green;'>addition of matrix</h1>";
for ($i = 0; $i < $N; $i++)
{
    for ($j = 0; $j < $N; $j++)
    {
        echo $res[$i][$j];
        echo " ";
    }
    echo "<br>" ;
}
echo "<p style='text-align: right;'>hrushikesha_1CR18CS074</p>";

 ?>