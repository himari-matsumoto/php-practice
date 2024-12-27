<?php

// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0 ) {
    echo 'tic-tac'."\n";
  }
  elseif ($i % 5 === 0){
    echo 'tac'."\n";
  }
  elseif ($i % 4 === 0) {
    echo 'tic'."\n";
  }
  else {
    echo $i . "\n";
  }
}




// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
      
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],

];

// Q2 問題1
      $newmessage = $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';
      echo $newmessage

// Q2 問題2
      foreach ($personalInfos as $index => $personalInfo){
        echo ($index + 1), '番目の'.$personalInfo['name'].'のメールアドレスは'.$personalInfo['mail'].'で、電話番号は'.$personalInfo['tel'].'です。'."\n";
      }

// Q2 問題3
      $ageList = [25, 30, 18];
      foreach ($ageList as $index => $age){
        $personalInfos [$index]['age'] = $age;
      }





// Q3 オブジェクト-1
class Student
{
  public $studentId;
  public $studentName;
  
  public function __construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
  }
  
  public function attend()
  {
    echo '授業に出席しました。';
  }
}

$hyoudou = new Student(120,'兵藤')
echo '学籍番号'.$hyoudou->studentId.'番の生徒は'.$hyoudou->studentName.'です。';




// Q4 オブジェクト-2
class Student
{
  public $studentId;
  public $studentName;
  
  public function __construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
  }
  
  public function attend($lesson)
  {
    $this->lesson = $lesson;
    var_dump $lesson

  }  
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');
echo $yamada->studentName.'は'.$yamada->lesson.'の授業に参加しました。学籍番号：'.$yamada->studentId;




// Q5 定義済みクラス
//問題1
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime();
echo $date->modify('-1 month')->format('Y-m-d');

//問題2
date_default_timezone_set('Asia/Tokyo');
$date_time = new Datetime ();
$date_time2 = new Datetime ("1992-4-25");
echo $date_time->diff($date_time2) ->format("あの日から%a日経過しました。");



?>