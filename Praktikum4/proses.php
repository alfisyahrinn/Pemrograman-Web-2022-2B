<?php
echo "Pemain Bola : ";
if (isset($_GET["1"])) {
  echo $_GET["1"] . " ";
}
if (isset($_GET["2"])) {
  echo $_GET["2"] . " ";
}
if (isset($_GET["3"])) {
  echo $_GET["3"] . "<br>";
}
echo "Color : <span> " . $_GET["color"] . "</span> <br>";
echo "date : " . $_GET["date"] . "<br>";
echo "datetime-local : " . $_GET["datetime-local"] . "<br>";
echo "email : " . $_GET["email"] . "<br>";
echo "month : " . $_GET["month"] . "<br>";
echo "number : " . $_GET["number"] . "<br>";
echo "password : " . $_GET["password"] . "<br>";
echo "radio : " . $_GET["radio"] . "<br>";
echo "range : " . $_GET["range"] . "<br>";
echo "search : " . $_GET["search"] . "<br>";
echo "tel : " . $_GET["tel"] . "<br>";
echo "text : " . $_GET["text"] . "<br>";
echo "time : " . $_GET["time"] . "<br>";
echo "url : " . $_GET["url"] . "<br>";
echo "week : " . $_GET["text"] . "<br>";











?>


<!-- <style>
  span {
    background-color: <?= $_GET["color"]; ?>;
  }
</style> -->