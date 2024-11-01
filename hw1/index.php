<?php
// Дії з числами
echo "Залишок від ділення 7 на 3 : " . (7 % 3) . "<br>";
echo "Ціла частина від ділення 7 на 7.15 : " . floor(7 / 7.15) . "<br>";
echo "Корінь из 25 : " . sqrt(25) . "<br>";
//echo "Корінь из 25 : " . (25 ** 0.5) . "<br>";

// Дії зі строками
$str = "Десять негритят пошли купаться в море";
echo "Фраза : " . $str . "<br>";
$words = explode(" ", $str);
echo "4-е слово з фрази : " . $words[3] . "<br>";
echo "17-й символ із фрази : " . mb_substr($str, 16, 1) . "<br>";

$strUppercase = "";
foreach ($words as $word) {
    $strUppercase .= mb_strtoupper(mb_substr($word, 0, 1)) . mb_substr($word, 1) . " ";
}
echo trim($strUppercase) . "<br>";

$strLength = mb_strlen($str);
echo "Длина строки : " . $strLength . "<br>";

// Дії з логіческими даними
var_dump(true == 1);
var_dump(false === 0);

echo "<br>";

$string1 = "three";
$string2 = "три";

$length1 = mb_strlen($string1);
$length2 = mb_strlen($string2);

// Compare lengths
if ($length1 > $length2) {
    echo "$string1 довше ніж $string2 <br>";
} elseif ($length1 < $length2) {
    echo "$string2 довше ніж $string1 <br>";
} else {
    echo "Обидві строки однакової довжини <br>";
}

echo "<br>";

$firstExpression = 125 * 13 + 7;
$secondExpression = 223 + 28 * 2;

if ($firstExpression > $secondExpression) {
    echo "$firstExpression більше ніж $secondExpression <br>";
} elseif ($firstExpression < $secondExpression) {
    echo "$secondExpression більше ніж $firstExpression <br>";
} else {
    echo "Обидва числа однакові <br>";
}