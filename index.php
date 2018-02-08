<html>
<head>
  <title>What day is it at ISB middle school??</title>
  
  <style type="text/css">

.day {
    position: relative;
    padding: 0.25em 1em;
    margin: 2em 0;
    top: 0;
    background: #efefef;
    font-size: 25px
}
.day:before, .day:after{ 
    position: absolute;
    top: 0;
    content:'';
    width: 10px;
    height: 100%;
    display: inline-block;
    box-sizing: border-box;
}
.day:before{
    border-left: dotted 2px #15adc1;
    border-top: dotted 2px #15adc1;
    border-bottom: dotted 2px #15adc1;
    left: 0;
}
.day:after{
    border-top: dotted 2px #15adc1;
    border-right: dotted 2px #15adc1;
    border-bottom: dotted 2px #15adc1;
    right: 0;
}
.day p {
    margin: 0; 
    padding: 0;
}
  </style>
</head>
<div class="day">

<?php
//set timezone to European timezone

$weekno = date('w');

//define day1

$yyy = 2017;
$mmm = 9;
$ddd = 4;

//è¨ˆç®—ã—ãŸã„éŽåŽ»ã®æ—¥ä»˜
  $mk1 = mktime(0,0,0,$mmm,$ddd,$yyy);

//ä»Šæ—¥
  $mk2 = mktime(0,0,0,date('n'),date('j'),date('Y'));

//å·®ã‚’ä¸€æ—¥ã®ç§’æ•°ã§å‰²ã‚‹ã€€->ã€€æ—¥æ•°ã¨ãªã‚‹
$sa = ($mk2-$mk1) / (60*60*24); //aaa


$is1 = array("0","1","2","3","4","5","6");

$sa7 = $sa % 7;
if ( $sa7 = $is1 ){

$isbweek = "1";

}

if ( $sa7 != $is1 ){

$isbweek = "2";

}

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

?>
</div>
<br>
<h3>Log</h3>
<br><p>Version 0.1:2017/09/18 releaced first version.
<br><p>Version 0.2:2017/09/19 Fixed bug</p>
<br><p>Version 0.3:2017/09/19 Changed timezone to European time from Japanese Time.</p>
<br><p>Version 0.4:2017/09/20 Yay! I finally did it!it took 4,5hour to fix it!</p>
