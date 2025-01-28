<?php
// Q1 tic-tac問題
$i = 1;
while ($i <= 100) {
    if($i % 20 == 0){
        echo "tic-tac";
    }
    elseif($i % 4 == 0) {
        echo "tic";
    }
    elseif($i % 5 == 0){
        echo "tac";
    }
    else {
        echo $i;
    }
     
     $i++;
     echo "\n";
}


// Q2 多次元連想配列
問題１
foreach ($personalInfos as $key) {
  if($key['name'] == 'Bさん') {
  echo $key['name'] . 'の電話番号は' . $key['tel'] . 'です。';
  break;
}
}

問題２
foreach ($personalInfos as $array => $key) {
  echo ($array+1) . '番目の' . $key['name'] . 'さんのメールアドレスは' . $key['mail'] . 'で、電話番号は' . $key['tel']  . 'です。';
  echo "\n";
}

問題３
$ageList = [25, 30, 18];
foreach ($personalInfos as $value => &$key) {
    $key['age'] = $ageList[$value];
    
}
var_dump($personalInfos);



// Q3 オブジェクト-1
$people = new Student(120,'山田');
echo '学籍番号' . $people->studentId . '番の生徒は' . $people->studentName . 'です。';


// Q4 オブジェクト-2
echo $people->studentName . 'は' . $people->attend('PHP') . '学籍番号:' . $people->studentId;

// Q5 定義済みクラス
問題１
echo date("Y-m-d", strtotime("2025/1/28 -1 months"));

問題２
$day = new DateTime('1992-4-25');
$day2 = new DateTime();
$interval = $day->diff($day2);
echo 'あの日から' . $interval->format('%a日') . '経過しました。';

?>