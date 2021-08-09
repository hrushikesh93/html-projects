
<?php
$states= "Mississippi Alabama Texas Massachusetts Kansas";
$states1 = explode(' ',$states);

echo"<p style='color: purple;'>Original Array</p>:<br>";
foreach ($states1 as $i =>$i_value)
{
echo "<p style='color: green;'>STATES[$i]=$i_value<br></p>";

}
foreach($states1 as $state)
{
if(preg_match('/xas$/', ($state)))
$statesArray[0] = ($state);
}
foreach($states1 as $state)
{
if(preg_match('/^k.*s$/i',($state)))
$statesArray[1]=($state);
}
foreach($states1 as $state)
{
if(preg_match('/^M.*s$/',($state)))
$statesArray[2] = ($state);
}
foreach($states1 as $state)
{
if(preg_match('/a$/',($state)))
$statesArray[3] = ($state);
}
echo "<br><p style='color: purple;'>Resultant Array</p><br>";
foreach($statesArray as $i =>$i_value)
echo "<p style='color: green;'>STATES[$i]=$i_value</p><br>";
?>