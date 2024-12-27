<?php

// Q1 変数と文字列
$name = '安藤';

echo '私の名前は「' . $name. '」です。';

// Q2 四則演算
$x = 5;
$y = 4;
var_dump($x * $y);

$xy = 20;
var_dump($xy);

$xy /= 2;
var_dump($xy);



// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$date =date('Y年m月d日 H時i分s秒');

$newMessage = "現在時刻は" . $date . "です。";
echo $newMessage



// Q4 条件分岐-1 if文
$device = 'windows';

if($device === "windows" || $device === "mac"){

echo '使用osは、'. $device .'です。';
}
else {
  echo 'どちらでもありません。';
};


// Q5 条件分岐-2 三項演算子
$age = 23;
$message = ($age > 18) ? '成人です' : '未成年です。';
echo $message;



// Q6 配列
$prefectures = ["茨城", "栃木", "群馬","埼玉","東京","神奈川","千葉"];
var_dump($prefectures);


$newMessage =  $prefectures[2].'と'.$prefectures[3]. 'は関東地方の都道府県です。';
echo $newMessage



// Q7 連想配列-1
$places = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市", 
    "群馬県" => "前橋市", 
    "茨城県" => "水戸市"];
    
foreach ($places as $place ) 
    echo $place, "\n";

// Q8 連想配列-2
$places = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市", 
  "群馬県" => "前橋市", 
  "茨城県" => "水戸市"];
  
foreach ($places as $prefectures => $place ) {
if($prefectures === "埼玉県"){
echo $prefectures.'の県庁所在地は、'.$place.'です。';
}
};



// Q9 連想配列-3
$places = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市", 
  "群馬県" => "前橋市", 
  "茨城県" => "水戸市"];
  
  $places['沖縄県'] = '那覇市';
  $places ['長崎県'] = '長崎市';

foreach ($places as $prefectures => $place ) {
if($prefectures === "沖縄県" ||$prefectures === "長崎県"){

echo $prefectures.'は関東地方ではありません。', "\n";
}
else {
  echo $prefectures.'の県庁所在地は、'.$place.'です。', "\n";
}
};


  $newMessage =  $places[2].'と'.$place[2]. 'は関東地方の都道府県です。'
  $newMessage =  $places[3].'と'.$place[3]. 'は関東地方の都道府県です。'
  $newMessage =  $places[4].'と'.$place[4]. 'は関東地方の都道府県です。'
  $newMessage =  $places[5].'と'.$place[5]. 'は関東地方の都道府県です。'
  $newMessage =  $places[6].'と'.$place[6]. 'は関東地方の都道府県です。'
  $newMessage =  $places[7].'と'.$place[7]. 'は関東地方の都道府県です。'
  $newMessage =  $places[8].'と'.$place[8]. 'は関東地方の都道府県です。';

echo $newMessage



// Q10 関数-1
function hello($name)
{
  echo  $name.'さん、こんにちは。'."\n";
}
hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
  $Tax = 1.1; 
  $taxInPrice = $price * $Tax;
  return $taxInPrice;
}

$taxInPrice = calcTaxInPrice('1000');
echo $price . "円の商品の税込み価格は" . $taxInPrice . "円です。";


// Q12 関数とif文
function distinguishNum ($number){
if ($number % 2 === 0){
    
    return $number.'は偶数です。'."\n";
} else {    
    return $number.'は奇数です。'."\n";
}
}
  $odd = distinguishNum (11);
  $even = distinguishNum (24);

  echo $odd ;
  echo $even;



  // function distinguishNum ($number){
  //   if ($number % 2 === 0){
  //       return $odd;
  //   } else { 
  //     return $even;
  //   }
    
  //   }
  //   $odd = distinguishNum (11);
  //   $even = distinguishNum (24);
  //   echo $number.'は偶数です。'."\n";
  //   echo $number.'は奇数です。'."\n";
    

  


// Q13 関数とswitch文
function evaluateGrade($grades){

  $result = '';

switch ($grades) {
  case 'A':
  case 'B': 
      $result = '合格です。';
      
      break;

  case 'C':
      $result = '合格ですが追加課題があります。';
      break;
     

  case 'D':
      $result = '不合格です。';
      break;
      

      default:
      $result = '判断不明です。講師に問い合わせてください。';
      
      break;

}
      return $result; 
}
      $result1 = evaluateGrade('A');
      $result2 = evaluateGrade('O');
      echo $result1 ."\n";
      echo $result2 ."\n";





?>