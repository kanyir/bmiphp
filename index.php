<!DOCTYPE html><html dir="rtl" lang="fa-IR" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8" />
<title>* محاسبه شاخص توده بدنی *</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<header>
</header>
<body>
<wrapper>
<h1>
* قد و وزن خود را وارد کنید *
</h1>
<br>
<form action="index.php" method="post">
<p>وزن شما : <input placeholder="برحسب کیلوگرم" type="text" name="x"/></p>
<p>قد شما : <input placeholder="برحسب سانتی متر" type="text" name="y"/></p>
<input type="submit" value="محاسبه"/>
<form/>
<br><br>
<?php
$w=$_POST["x"];
$l=$_POST["y"];
echo" وزن شما   ";
echo $w;
echo" کیلوگرم و قد شما  ";
echo $l." سانتی متر می باشد .";
?>
<br>
<h3>
<?php
function bmi($w,$l)
{
$l1=$l/100;
$l2=$l1*$l1;
$bmi=$w/$l2;
$rbmi=round($bmi,1);
return $rbmi;
}
echo "شاخص توده بدنی شما : ". "<br />";
?>
</h3>
<b>
<h1>
<?php
$bmicalculated= bmi($w,$l);
echo $bmicalculated;
$wmin=($l*$l/10000)*18.5;
$wmax=($l*$l/10000)*25;
?>
</b>
</h1>
<?php
if ($bmicalculated< "17"){
echo "دچار کمبود وزن شدید";
} elseif ($bmicalculated> "17"&&$bmicalculated< "18.5"){
echo "دچار کمبود وزن ";
} elseif ($bmicalculated >"18.5"&&$bmicalculated< "25"){
echo "وزن طبیعی";
} elseif ($bmicalculated> "25"&&$bmicalculated< "30"){
echo "اضافه وزن ";
} else {
echo "چاق ";
}
?>
<br><br>
<content class="describe">
<p>
<?php
echo" وزن مناسب شما ";
echo round($wmin);
echo" تا ";
echo round($wmax);
echo " کیلوگرم می باشد. ";
?>
</p>
</content>
</wrapper>
</body>
<footer>
<b><a href="http://kany.ir/">کانی آی تی</a></b>
</footer>
</html>
