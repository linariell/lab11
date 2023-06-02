
<h2 align="center">ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ПРОФЕССИОНАЛЬНОГО ОБРАЗОВАНИЯ <br> «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ» <br> КАФЕДРА ИНФОРМАТИКИ </h2>
<p align="center">Лабораторная работа №11 <br>
по курсу «PHP» 

<p align="center"><b>"Java Script"</b><p>
<p align="right"><b>Выполнила: </b> студентка 231 группы Витковская Полина</p>
<p  align="right"><b>Принял: </b> Соболев Е. И., старший преподователь</p>
<br>
<br>
<br>
<p align="center">Южно-Сахалинск <br> СахГУ <br> 2023</p>
<h2> Введение </h2>
<p>Лабораторные работы по дисциплине «Web-технологии, языки и средства создания web-приложений» предназначены для освоения полученных теоретических знаний на практике. Цель работы - выполнить задачи, написав решение на PHP.  <br>

</p>
<h2>Решение задач</h2>

1. 
```php
$var = 'hello';
echo $var[0];
echo $var[1];
echo $var[4];
echo "<br>";
```

2. 
```php
$seconds = 60 * 60;
echo $seconds;
echo "<br>";
```

3. 
```php
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo $var;
echo "<br>";
```

4. 
```php
$a = 3;
echo $a;
echo "<br>";
```

5. 
```php
$a = 10;
$b = 2;
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
```

6. 
```php
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
echo "<br>";
```

7. 
```php
$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c;
echo "<br>";
```

8. 
```php
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
echo "<br>";
```

9. 
```php
$text = 'Привет, Мир!';
echo $text;
echo "<br>";
```

10. 
```php
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1 . $text2;
echo "<br>";
```

11. 
```php
$name = 'Полина';
echo 'Привет, '. $name . '!';
echo "<br>";
```

12. 
```php
$age = '19';
echo 'Мне '. $age . ' лет!';
echo "<br>";
```

13. 
```php
$text = 'abcde';
echo $text[0] . '<br>';
echo $text[2] . '<br>';
echo $text[4] . '<br>';
echo "<br>";
```

14. 
```php
$text = 'abcde';
$text[0] = '!';
echo $text;
echo "<br>";
```

15. 
```php
$num = '12345';
echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
echo "<br>";
```

16. 
```php
$sec_in_hour = 60 * 60;
$sec_in_day = 24 * $sec_in_hour;
$sec_in_month = 31 * $sec_in_day;
echo "Секунд в часе " . $sec_in_hour . "<br>";
echo "Секунд в дне " . $sec_in_day . "<br>";
echo"Секунд в месяце " . $sec_in_month . "<br>";
echo "<br>";
```

17. 
```php
$hour = 2;
$min = 52;
$sec = 43;
echo $hour .':'. $min .':'. $sec
echo "<br>";
```

18. 
```php
$num = 16;
$num*=$num;
echo $num;
echo "<br>";
```

19. 
```php
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
echo "<br>";
```

20. 
```php
$text = 'Я';
$text .=' хочу';
$text .=' знать';
$text .=' PHP!';
echo $text;
echo "<br>";
```

21. 
```php
$var = 10;
$var++;
$var++;
$var--;
echo $var;
echo "<br>";
```

22. 
```php
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;
echo "<br>";

```
<h2>Вывод</h2>
<p>В ходе лабораторной работы были изучены элементы языка PHP. Были рассмотрены способы задания числовых и строковых переменных, операций над ними, их выводом в консоль.</p>    
