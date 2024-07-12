//DAY1 of php 

<?php
?>//is a opening tag 
<?php
$i=10;
$j=20;
print($i+$j);//30
print($i-$j);
print($i/$j);
print($i*$j);

?>//end tag
<?php //is short opening tag
$table=11;
$rows=20;
$i=0;
?>
<table>
  <tr>
    <th>mul</th>
    <th>multi</th>
    <th>result</th>
  </tr>
<?
  for($i = 0; $i<$rows; $i++){
   ?>
  <tr>
    <td><?=$table?></td>
    <td><?=$i?></td>
    <td><?=$i*$table?></td>
  </tr>
  <?
  }
  ?>
</table>

<!DOCTYPE html>
<html>
<body>
 
<?php
echo "My first PHP script!";
?>

</body>
</html>

<?php
$t=11;
$r=20;
$i=0;
$txt ="PHP";
for($i=0; $i<r; $i++){
  echo "I love $txt!";
}
?>