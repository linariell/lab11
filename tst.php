<!DOCTYPE html>
<html>
<body>

<?php
		//1
        $var ="hello";
		echo $var[0];
        echo $var[1];
        echo $var[4];
        echo "<br>";
        //2
        
        echo 60*60;
        echo "<br>";
        //3
        $var = 1;
		$var += 12;
		$var -= 14;
		$var *= 5;
		$var /= 7;
		$var++;
		$var--;
		echo $var;
        echo "<br>";
        //4
        $a=3;
        echo $a;
        //5
        echo "<br>";
        $a=10;
        $b=2;
        echo $a + $b;
        echo "<br>";
        echo $a - $b;
        echo "<br>";
        echo $a* $b;
        echo "<br>";
        echo $a/ $b;
        
        //6
        echo "<br>";
        $c=15; $d=2;
        $result=$c + $d;
        echo $result;
        //7
        echo "<br>";
        $a = 10;
		$b = 2;
		$c = 5;
		echo $a + $b + $c;
        //8
        echo "<br>";
        $a = 17;
		$b = 10;
		$c = $a - $b;
		$d = 7;
		$result = $c + $d;
		echo $result;
        //9
        echo "<br>";
        $text = 'Привет, Мир!';
		echo $text;
        //10
        echo "<br>";
        $text1 = 'Привет, ';
		$text2 = 'Мир!';
		echo $text1 . $text2;
        //11
        echo "<br>";
        $name = 'Полина';
		echo 'Привет, '. $name . '!';
        //12
        echo "<br>";
        $age = '19';
		echo 'Мне '. $age . ' лет!';
        //13
        echo "<br>";
        $text = 'abcde';
		echo $text[0] . '<br>';
		echo $text[2] . '<br>';
		echo $text[4] . '<br>';
        //14
        $text = 'abcde';
		$text[0] = '!';
		echo $text;
        //15
        echo "<br>";
        $num = '12345';
		echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
        //16
        echo "<br>";
        $sec_in_hour = 60 * 60;
		$sec_in_day = 24 * $sec_in_hour;
		$sec_in_month = 31 * $sec_in_day;
		echo "Секунд в часе " . $sec_in_hour . "<br>";
		echo "Секунд в дне " . $sec_in_day . "<br>";
		echo"Секунд в месяце " . $sec_in_month . "<br>";
        //17
        echo "<br>";
        $hour = 02;
		$min = 52;
		$sec = 43;
		echo $hour .':'. $min .':'. $sec;
        //18
        echo "<br>";
        $num = 16;
		$num*=$num;
		echo $num;
        //19
        echo "<br>";
        $var = 47;
		$var += 7;
		$var -= 18;
		$var *= 10;
		$var /= 20;
		echo $var;
        //20
        echo "<br>";
        $text = 'Я';
		$text .=' хочу';
		$text .=' знать';
		$text .=' PHP!';
		echo $text;
        //21
        echo "<br>";
        $var = 10;
		$var++;
		$var++;
		$var--;
		echo $var;
        //22
        echo "<br>";
        $var = 10;
		$var += 7;
		$var++;
		$var--;
		$var += 12;
		$var *= 7;
		$var -= 15;
		echo $var;
		?>

</body>
</html>
