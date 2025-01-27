<?php
// Q1 変数と文字列

$name = '久保';

$message = '私の名前は「' . $name . '」です。';

echo($message);

// Q2 四則演算

$num = 5*4;
echo($num); 
echo "\n";
echo($num / 2); 


// Q3 日付操作

$time = date('Y年m月d日 H時i分s秒');

$message = '現在時刻は' . $time . 'です。';

echo($message);



// Q4 条件分岐-1 if文

$device = 'mac';
if ($device === 'mac') {
    echo '使用OSは、macです。';
} if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else {
    echo 'どちらでもありません。'; 
}

// Q5 条件分岐-2 三項演算子

$age = 29;
if ($age < 18) {
    echo '未成年です。';
} elseif ($age >= 18) {
    echo '成人です。';
} 

// Q6 配列

$japan = ['東京都', '神奈川県', '埼玉県', '栃木県', '千葉県', '茨城県', '群馬県'];
$message = $japan[3] . 'と' . $japan[4] . 'は関東地方の都道府県です。';
echo($message);

// Q7 連想配列-1

$kanto = ['東京都' => '新宿区', 
'神奈川県' => '横浜市', 
'千葉県' => '千葉市',
'埼玉県' => 'さいたま市' ,
'栃木県'=> '宇都宮市',
'群馬県' => '前橋市' ,
'茨城県'=> '水戸市'];

foreach ($kanto as $x) {
    echo $x . "\n";
}


// Q8 連想配列-2

foreach ($kanto as $key => $value) {
  if ($key === '埼玉県') {
      echo "$key" . 'の県庁所在地は、' . "$value" . 'です。';
  }
  }

// Q9 連想配列-3

$kanto['北海道'] = '札幌市';
$kanto['沖縄県'] = '那覇市';
var_dump($kanto);

foreach ($kanto as $key => $value) {
if ($key === '北海道' || $key === '沖縄県') {
    echo "$key" .  'は関東地方ではありません。';
}
else{
    echo "$key" .  'の県庁所在地は、' . "$value" . 'です。' . "\n";
}
}
  

// Q10 関数-1

function hello($name)
{
    echo $name . 'さん、こんにちは。';
}

hello('久保');
echo "\n"; 
hello('渡辺'); 


// Q11 関数-2

function calTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';
}

calTaxInPrice(1000);

// Q12 関数とif文

function distinguishNum($num)
{
    if($num % 2 == 1 )
    return $num . 'は奇数です。';
    if($num % 2 == 0 )
    return $num . 'は偶数です。';
}

echo distinguishNum(11);
echo "\n";
echo distinguishNum(24);


// Q13 関数とswitch文

function evaluateGrade($school)
{

switch ($school) {
    case'A':
    case'B':
        echo '合格です。';
        break;

    case 'C':
        echo '合格ですが追加課題があります。';
        break;

    case 'D':
        echo '不合格です。';
        break;

    default:
        echo '判定不明です。講師に問い合わせてください。';
        break;
}
}

echo evaluateGrade('A');
echo "\n";
echo evaluateGrade('D');



?>