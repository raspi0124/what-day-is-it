<?php
$weekno = date('w');
$isbweek = "1";

$yyy = 2017;
$mmm = 9;
$ddd = 4;

//計算したい過去の日付
  $mk1 = mktime(0,0,0,$mmm,$ddd,$yyy);

//今日
  $mk2 = mktime(0,0,0,date('n'),date('j'),date('Y'));

//差を一日の秒数で割る　->　日数となる
  $sa = ($mk2-$mk1) / (60*60*24); //aaa 

// $sa=day

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

if( $weekno == 3 and  $isbweek == 1 ){
  echo "Today is Day 3,";
} else {
  echo "";
}

if( $weekno == 4 and  $isbweek == 1 ){
  echo "Today is Day 4,";
} else {
  echo "";
}

if( $weekno == 5 and  $isbweek == 1 ){
  echo "Today is Day 5,";
} else {
  echo "";
}


if( $weekno == 1 and  $isbweek == 2 ){
  echo "Today is Day 6,";
} else {
  echo "";
}

if( $weekno == 2 and  $isbweek == 2 ){
  echo "Today is Day 7,";
} else {
  echo "";
}

if( $weekno == 3 and  $isbweek == 2 ){
  echo "Today is Day 8,";
} else {
  echo "";
}

if( $weekno == 4 and  $isbweek == 2 ){
  echo "Today is Day 9,";
} else {
  echo "";
}

if( $weekno == 5 and  $isbweek == 2 ){
  echo "Today is Day 10,";
} else {
  echo "";
}


