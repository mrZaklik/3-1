<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>DZ_3-1</title>
</head>

<body>

    <?php echo "Привет!" ?>

    <br/><br/><b>TASK 1</b><br/>
    <?php
    $sutki = 2;
    echo $sutki * 24 * 60 * 60;
    ?>

    <br/><br/> <b>TASK 2</b>
    <?php $a = 3; print '<div>' . $a . '</div>' ?>

    <br/><b>TASK 3</b><br/>
    <?php 
    $a = 10; 
    $b = 2;
    echo $a / $b;
    ?>

    <br/><br/><b>TASK 4</b><br/>
    <?php
    $c = 15; 
    $b = 2;
    $result = $c + $b;
    echo $result;
    ?>

<br/><br/><b>TASK 5</b><br/>
    <?php
    $x = 2; 
    $y = 6;
    $z = 9;
    $result = ($x+1)*4-2*($z−2*$x^2+$y^2);
    echo $result;
    ?>

<br/><br/><b>TASK 6</b><br/>
    <?php
    $a = 4; 
    $b = 8;
    $c = 3;
    echo $c / $a;
    echo '<br/>';
    echo $c / $b;
    ?>

<br/><br/><b>TASK 7</b><br/>
    <?php
    $number = 17;
    $percent = 40;
    $result = $number / 100 * $percent;
    $number_result = $number - $result;
    echo $number_result;
    echo '<br/>';
    $number = 54;
    $percent = 84;
    $result = $number / 100 * $percent;
    $number_result = $number - $result;
    echo $number_result;
    ?>

    <br/><br/><b>TASK 8</b><br/>
    <?php
    $a = 10; 
    $b = 2;
    $c = 5;
    $result = $a + $c + $b;
    echo $result;
    ?>

    <br/><br/><b>TASK 9</b><br/>
    <?php
    $a = 17; 
    $b = 10;
    $d = 7;
    $c = $a - $b;
    $result = $c + $d;
    echo $result;
    ?>

    <br/><br/><b>TASK 10</b><br/>
    <?php $text = 'Привет'; echo $text ?>

    <br/><br/><b>TASK 11</b><br/>
    <?php 
    $text1 = 'Привет, '; 
    $text2 = 'Мир!';
    echo "{$text1} {$text2}";
    ?>

    <br/><br/><b>TASK 12</b><br/>
    <?php 
    $hi = 'Привет, '; 
    $name = 'Сергей';
    echo "{$hi} {$name}.";
    ?>

    <br/><br/><b>TASK 13</b><br/>
    <?php 
    $age = '32';
    echo "Мне {$age} года.";
    ?>

    <br/><br/><b>TASK 14</b><br/>
    <?php 
    $text = ['a','b','c','d','e'];
    print_r($text);
    echo '<br/>';
    echo "$text[0] $text[2] $text[4]"
    ?>

    <br/><br/><b>TASK 15</b><br/>
    <?php 
    $text = ['a','b','c','d','e'];
    $text[0] = '!';
    echo "$text[0] $text[1] $text[2] $text[3] $text[4]";
    ?>

    <br/><br/><b>TASK 16</b><br/>
    <?php 
    $num = [1,2,3,4,5];
    echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
    ?>

    <br/><br/><b>TASK 17</b><br/>
    <?php 
    $mi = 60;
    $ch = 60;
    $se = 24;
    $me = 30;
    $go = 365;
    $go2 = 2020 - 2000;
    echo 'секунд в часе: ', $mi * $ch, '<br/>';
    echo 'в сутках: ', $mi * $ch * $se, '<br/>';
    echo 'в месяце: ', $mi * $ch * $se * $me, '<br/>';
    echo 'в году: ', $mi * $ch * $se * $me * $go, '<br/>';
    echo 'секунд с начала 2000 года: ', $mi * $ch * $se * $me * $go * $go2, '<br/>';
    ?>

    <br/><br/><b>TASK 18</b><br/>
    <?php 
    $se = 11;
    $mi = 20;
    $ch = 4;
    echo $ch, ':', $mi, ':', $se;
    ?>

    <br/><br/><b>TASK 19</b><br/>
    <?php $num = 11; echo $num * $num; ?>

    <br/><br/><b>TASK 20</b><br/>
    <?php 
    $var = 1;
    $var += $var + 12;
    $var -= $var - 14;
    $var *= $var * 5;
    $var /= $var / 7;
    $var =++ $var + 1;
    $var =-- $var - 1;
    echo $var;
    ?>

    <br/><br/><b>TASK 21</b><br/>
    <?php 
    define('CONST_VARNAME', 'Sutormin');
    
    echo '
    <form action="/" method="GET">
    <input name="name" placeholder="Ваше Имя" /><br/>
    <input name="middle" placeholder="Ваше Отчество" /><br/>
    <input name="age" placeholder="Ваш возрост" /><br/>
    <button>Кнопка</button>
    </form>
    ';
    echo 'Меня зовут ', CONST_VARNAME, ' (', ($_GET['name'][0]), '. ', ($_GET['middle'][0]), '.).<br/> Мне ', $_GET['age'], ' лет.', '<br/>';
    print_r($_GET);
    ?>

    <br/><br/><b>TASK 22</b><br/>
    <?php 
    $text = 'Я';
    $text .= ' хочу';
    $text .= ' знать';
    $text .= ' PHP!';
    echo $text;
    ?>

<br/><br/><b>TASK 23</b><br/>
    <?php 
    $var = 10;
    $var =++ $var + 1;
    $var =-- $var + 1;
    $var =++ $var - 1;
    echo $var;
    ?>

</body>
</html>