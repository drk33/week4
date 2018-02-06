<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$date = str_replace("-", "/", $date);
echo "The new value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";

/* Problem 2 */
$date = str_replace("-", "/", $date);
echo "The new value of \$date: ".$date."<br>";

/* Problem 3 */
if ($date > $tar) {
  echo "The future<br>";
} elseif ($date < $tar) {
  echo "The past<br>";
} else {
  echo "Oops<br>";
}

/* Problem 4 */
echo "The occurences of / in \$date: ";
for ($x = 0; $x < strlen($date); $x++) {
    if ($date[$x] == "/") { 
        echo $x . " "; }
}
echo "<br>";

/* Problem 5 */
echo "The number of words in \$date: " . str_word_count($date) . "<br>";

/* Problem 6 */
echo "The length of \$date: " . strlen($date) . "<br>";

/* Problem 7 */
echo "The ASCII value of first character in \$date: " . ord($date) . "<br>";

/* Problem 8 */
echo "The last two characters in \$date: " . substr($date, -2) . "<br>";

/* Problem 9 */
foreach ($year as $value) {
    switch ($value) {
    case 2012:
        echo "True ";
        break;
    case 396:
        echo "True ";
        break;
    case 300:
        echo "False ";
        break;
    case 2000:
        echo "True ";
        break;
    case 1100:
        echo "True ";
        break;
    case 1089:
        echo "False ";
        break;
    default:
        echo "error ";
}
}
?>