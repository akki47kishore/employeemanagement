<?php
$studentMarks=array(68,70,72,49,60,79,82,73,75,77,73,58,63,79,78,68,72,73,80,34,68,72,56,23,73,45,24,85,89,83);
$c=count($studentMarks);
echo "Number of students = $c<br>";
$sum=array_sum($studentMarks);
$avg=$sum/$c;
echo "<br>Average Marks = $avg<br>";
sort($studentMarks);
$j=$c-1;
echo "<br> Highest mark=$studentMarks[$j]<br>";
echo "<br> Lowest mark=$studentMarks[0]<br>";
echo "<br> <br> top 5=";
for($i=$c-5;$i<$c;$i++)
 {
   echo "$studentMarks[$i] ";
 }

echo "<br> <br> bottom 5=";
for($i=0;$i<5;$i++)
 {
   echo "$studentMarks[$i] ";
 }
echo "<br> <br> marks < 50=";
for($i=0;$i<$c;$i++)
 { if($studentMarks[$i]<50)
     echo "$studentMarks[$i] ";
 }
?>
