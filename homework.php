<?php
  //練習問題1
  //文字列連結を用いて、自分の名前をブラウザ上に表示する。
  $first_name = 'Keita';
  $last_name = 'Tanikawa';
echo $first_name.$last_name;
  //練習問題2
  //以下の計算をそれぞれ行い、ブラウザ上に表示する。
  //8 * 3の計算
echo 8*3;
  //24 / 8の計算
echo 24/8;
  //6 + 10の計算
echo 6+10;
  //6 - 10の計算
echo 6-10;
  //10 % 7の計算
echo 10%7;
  //練習問題3
  //下記のプログラムのコメント部分をそれぞれ実行し、ブラウザ上に表示する。
  //※自己代入演算子を用いること
  $var = 2;
  //$varに12を足す
echo $var += 12;
  //$varに7で割る
echo $var /= 7;
  //$varに5を掛ける
echo $var *= 5;
  //$varの3の剰余
echo $var %= 3;
  //練習問題4
  //配列内に、伊達、櫻井、伊藤、藤尾を入れて、ブラウザ上にそれぞれを表示せよ。
  $list = array('伊達','櫻井','伊藤','藤尾');
  echo $list[0];
  echo $list[1];
  echo $list[2];
  echo $list[3];

  //練習問題5
  //連想配列内に、nameキーに'櫻井'、ageキーに'22'、placeキーに'富山'を入力して、ブラウザ上にそれぞれを表示せよ。
  $lists = array('name'=>'櫻井','age'=>'22','place'=>'富山');
  echo $lists['name'];
  echo $lists['age'];
  echo $lists['place'];

  //練習問題6
  //以下の$a, $b, $cは三角形の辺の長さである。
  //この3辺で三角形は成立可能か($a + $b > $c)を求めよ。もし、三角形が成立可能ならばブラウザに「可能」、成立不可能ならば「不可能」と表示せよ。
$a = 3;
$b = 4;
$c = 5;
if($a + $b > $c){
  echo '可能';
}
else{
  echo '不可能';
}
  //練習問題7
  //ある学校のこれまでの成績表では A ~ E までのアルファベットで成績をつけていました。今年度から成績を 5 ~ 1 の数字で成績をつけることになりました。
  //これまでの成績も以下の様に変換することになりました。これを、switch文を用いてこの問題を解きなさい。
  /*
  変換前 -> 変換後
    5   ->   A
    4   ->   B
    3   ->   C
    2   ->   D
    1   ->   E
  */
  $score = 1;
   switch($score){
     case 5:
     echo'A';
      break;
      case 4:
     echo 'B';
      break;
      case 3:
     echo 'C';
      break;
      case 2:
     echo 'D';
      break;
      case 1:
     echo 'E';
      break;
     default:
      break;
   }

  //練習問題8
  //変数$i = 10; を用意し、10から1まで1つずつカウントダウンするプログラムを作成せよ。(1つずつ改行して表示せよ)
  //この問題にはwhileを用いること
$i = 10;
while($i>=1){
  echo $i;
  echo"<br>";
  $i--;
}
  //練習問題9
  //正の整数1から9に、それぞれ5を掛けた数を半角スペース区切りでブラウザに表示せよ。
  //この問題にはforを用いること
  for($j=1; $j<=9; $j++){
    $k = $j;
    echo $k *=5;
    echo ' ';
  }

  //練習問題10
  //以下の配列を表示せよ。(1つずつ改行して表示せよ)
  //この問題にはforeachを用いること
  $food = array('carry', 'onigiri', 'candy', 'ham', 'meet', 'rice');
foreach($food as $value){
  echo $value."<br>";
}
echo "<br>";
  //練習問題11
  //以下の変数を用いて加減乗除のそれぞれの関数を作成せよ。
  $a = 10;
  $b = 5;
function add($a,$b){
  return $a+$b;
}
  //課題1
  //西暦の計算
  //以下の配列に2つの西暦a, bがあります。その2つのaからbが何年間か出力しなさい。
  $year = array(1994, 2017);
  echo $year[1]-$year[0];
  echo "<br>";
  //課題2
  //かまくらづくり
  //櫻井がはしゃいでかまくらを作り始めました。どれだけの体積の雪が必要か計算しなさい。
  //そのかまくらは四角形であり、以下の配列に外側の1辺と内側の1辺の長さが入っている。(r1 > r2)
  //下の行のecho文のコメントを外すとimageが出てくるのでこちらも参照するとわかりやすい。
  echo '<img src="./assets/img/img1.png">';
  $size = array(6, 4);
  $r1 = $size[0]*$size[0]*$size[0];
  $r2 = $size[1]*$size[1]*$size[1];
  echo $r1 - $r2;

  echo "<br>";
  //課題3
  //行列の計算
  //まず、以下のecho文のコメントをはずしてください。
  //以下の配列内にa = 10, b = -20, c = 12, d = 6がそれぞれ代入されている。
  //この行列を表す配列を用いて、行列の計算を行いなさい。
  echo '<img src="./assets/img/matrix1.png">';
  $matrix = array(10, -20, 12, 6);
  $ans = $matrix[0]*$matrix[3] - $matrix[1]*$matrix[2];
  echo $ans;

  echo "<br>";
  //課題4
  //自己紹介
  //練習問題5を参考にして、自己紹介をせよ。
  //例) 私は、安久昌和です。出身は石川県で、年齢は22歳、趣味はバスケットボールです。電子・情報工学科に所属しています。
  //必ず、連想配列を用いること
$kadai4 = array('name' => '谷川桂太','born' => '新潟県','age'=>'19','hobby'=>'テニス','major'=>'電子・情報工学科');
echo '私は、'.$kadai4['name'].'です。'.'出身は'.$kadai4['born'].'で、年齢は'.$kadai4['age'].
     '、趣味は'.$kadai4['hobby'].'です。'.$kadai4['major'].'に所属しています。';

echo "<br>";
  //課題5
  //1~100までの数字を表示するプログラムを作成せよ。
  //※出力のレイアウトは下記のように表示すること(数字を10個表示したタイミングで改行する)
  //for, ifのみを用いること
  /*
  1 2 3 4 5 6 7 8 9 10
  11 12 13 14 15 16 17 18 19 20
  ...
  ...
  91 92 93 94 95 96 97 98 99 100
  */
  for($i=1;$i<=100;$i++){
    echo $i.' ';
    if($i %10 == 0){
      echo '<br>';
    }
  }
echo "<br>";
  //課題6
  //時差の問題
  //以下の配列に都市の個数、各都市の時差、ある都市の現在時刻が入っている。
  //この配列を用いて、各都市の現在時刻を表示せよ。
  //ちなみに、今シンガポールで22:38なので、東京では0:38である。
  //for, ifのみ用いること
  $jisa = array(5, array('tokyo', 9), array('beijing', 8), array('singapore', 7), array('london', 0), array('newyork', -5), array('singapore', '22:38'));
  //print_r($jisa);

  //課題7
  //練習問題1~10と課題1~5を関数化せよ。
  //課題7.1
  //練習問題1の関数化
  function name($first_name,$last_name){
    return $first_name.$last_name;
  }
  //課題7.2
  //練習問題2の関数化

  //課題7.3
  //練習問題3の関数化

  //課題7.4
  //練習問題4の関数化

  //課題7.5
  //練習問題5の関数化

  //課題7.6
  //練習問題6の関数化

  //課題7.7
  //練習問題7の関数化

  //課題7.8
  //練習問題8の関数化

  //課題7.9
  //練習問題9の関数化

  //課題7.10
  //練習問題10の関数化

  //課題7.11
  //課題1の関数化

  //課題7.12
  //課題2の関数化

  //課題7.13
  //課題3の関数化

  //課題7.14
  //課題4の関数化

  //課題7.15
  //課題5の関数化

  //課題8
  //以下のSQL問題を解け(SQL文のみ)
  //SELECT
  //課題8.1
  //membersテーブルからデータの全件取得

  //課題8.2
  //membersテーブルのmember_idが2のデータを取得

  //課題8.3
  //membersテーブルのmember_nameが櫻井築のデータを取得(完全一致)

  //課題8.4
  //membersテーブルのmember_nameに伊藤が含むデータの取得(部分一致)

  //課題8.5
  //membersテーブルのmember_nameが「伊藤」で始まるデータの取得(前方一致)

  //課題8.6
  //membersテーブルのmember_nameが「裕」で終わるデータの取得(後方一致)

  //課題8.7
  //membersテーブルのmember_idが5以下のデータを取得

  //課題8.8
  //membersテーブルのmember_idを降順で5件取得

  //INSERT
  //課題8.9
  //membersテーブルに自分の名前を追加する

  //UPDATE
  //課題8.10
  //membersテーブルのmember_idが7のデータの名前を自分の名前に変更

  //DELETE
  //課題8.11
  //membersテーブルの課題8.9で追加したデータの削除
?>
