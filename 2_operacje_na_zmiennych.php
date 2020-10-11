<?php
  // wersja PHP 7.4.9
  echo PHP_VERSION,'<br>';
  // echo phpinfo();
  // interpolacja

  $pow=2**10;
  echo $pow;

  echo 'a','b'; // wyświetli a wyświetli bb
  echo 'a'.'b'; // suma a oraz b => wyświetli ab

// operatory bitowe
// and &, or |, or ^, not ~, <<, >>

  $x = 0b01010;
  echo "<br>$x<br>";
  $x = $x << 2; //101000(2) => 40(10)
  echo "<br>$x<br>";

  $x = $x >> 3; //101(2) => 5(10)
  echo "$x<br>";

// porównanie
  $x=1;
  $y=1.0;

  if ($x === $y) {
    echo '$x jest identyczna $y<br>';
  }else {
    echo '$x nie jest identyczna $y<br>';
  }

  echo gettype($x);
  echo gettype($y),'<hr>';

  $x=10;
  $y=100;

  echo $x <=> $y;
  echo '<hr>';

  $x=1;
  $x=$x++;
  echo "<hr>$x"; //1
  $x=++$x;
  echo $x; //2
  $y=$x++;
  echo $x; //3
  echo $y; //2
  $y=++$x*2-1;
  echo $x; //4
  echo "$y<hr>"; //7

// operatory rzutowania
// bool, int, float, string, array, object, unset

  $test1='123abc';
  $test2=0;
  $test3=20;

  echo 'Typ danych $test1: ',gettype($test1);
  $test1 = (int)$test1;
  echo '<br>Typ danych $test1: ',gettype($test1);
  echo "<br>$test1<br>";

  echo 'Typ danych $test2: ',gettype($test2);
  $test2=(bool)$test2;
  echo '<br>Typ danych $test2: ',gettype($test2);
  echo "$test2<br>"; //false

// rozmiar typu integer

  echo PHP_INT_SIZE,'<hr>'; //8

// kontrola typu zmiennych
// is_int(), is_string(), is_float(), is_bool(), is_null()
    $x=null;
// echo is_int($x);
    echo is_null($x),'<hr>';

  $w;
  // echo $w;
  // operator ignorowania błędów @
  echo @gettype($w);

 ?>
