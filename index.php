<?php if($_SERVER["QUERY_STRING"]=='')
{
$Date = date("Y-m-d_Hi").".jpg";

header('Location: http://'.$_SERVER["SERVER_NAME"]."?".$Date);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Photos</title>
<meta http-equiv="refresh" content="60; url=index.php" >
</head>
<body>
<a href="<?php
$min = substr($_SERVER["QUERY_STRING"],-6,2);
$hour = substr($_SERVER["QUERY_STRING"],-8,2);
$min = $min - 2;
if($min < 0) {
	$min = 58;
	$hour = $hour -1;
if($hour < 10) $hour = "0".$hour;
}
if($min < 10) $min = "0".$min;
echo "?".date("Y-m-d")."_".$hour.$min.".jpg";
?>">< Prev</a>
<img src="<?php echo $_SERVER["QUERY_STRING"];
?>" id="frame" width="700px" />
<a href="<?php
$min = substr($_SERVER["QUERY_STRING"],-6,2);
$hour = substr($_SERVER["QUERY_STRING"],-8,2);
$min = $min + 2;
if($min < 10) $min = "0".$min;
if($min > 58) {
	$min = "00";
	$hour = $hour + 1;
if($hour < 10) $hour = "0".$hour;
}
echo "?".date("Y-m-d")."_".$hour.$min.".jpg";
?>">Next ></a>
<span></span>
</body>
</html>
