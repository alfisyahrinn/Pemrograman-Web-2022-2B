<?php
$a = 10;
$b = 2;
echo 'contoh &(and) <br>';
if ($a == $b & $a > $b) {
  echo "okok";
} else {
  echo 'nono <br>';
}
echo 'contoh !(not) <br>';
if ($a != 10) {
  echo "okok";
} else {
  echo 'nono <br>';
}
echo 'contoh ||(or) <br>';
if ($a == $b | $a > $b) {
  echo "okok";
} else {
  echo 'nono';
}
