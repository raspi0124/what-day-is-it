
<?php
$week = array(
  'Sun', //0
  'Mon', //1
  'Tues', //2
  'Wednes', //3
  'Thurs', //4
  'Fri', //5
  'Satur'  //6
);
 
$weekno = date('w');
 
echo $week[$weekno] . 'day';

if ($weekno = "1")
  echo "Monday! school......";

?>

