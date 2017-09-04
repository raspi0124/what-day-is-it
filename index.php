
<?php
$weekno = date('w');
$isbweek = "1";
$weekjp = array(
  'Sun', //0
  'Mon', //1
  'Tues', //2
  'Wednes', //3
  'Thurs', //4
  'Fri', //5
  'Satur'  //6
);
 

echo $weekjp[$weekno] . 'day';


if( $weekno == 1 and  $isbweek == 1 ){
  echo "Today is Day 1,";
}else {
  echo "";
}

if( $weekno == 2 and  $isbweek == 1 ){
  echo "Today is Day 2,";
} else {
  echo "";
}

?>
