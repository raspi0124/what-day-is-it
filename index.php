 <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l");


$n = array(69, 72);
 
for($i = 0; $i <= count($n)-1; $i++){
    if($n[$i] % 2 == 0) {
        // 偶数の場合の処理
        echo $n[$i] .’は偶数です<br />’;
    }else{
        // 奇数の場合の処理
        echo $n[$i] .’は奇数です<br />’;
    }
}
?> 
