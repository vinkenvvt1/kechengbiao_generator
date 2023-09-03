<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="skeleton.css">
<style>
</style>
</head>
<body>

<?php
$array = array("语文","数学","英语","物理","化学","政治","历史","生物","地理","体育","计算机","班会");
$count = count($array);

echo "<table>";
echo "<tr><th></th><th>星期一</th><th>星期二</th><th>星期三</th><th>星期四</th><th>星期五</th></tr>";
echo "<tr><th>第一节</th>";
for ($i = 0; $i < 5; $i++) {
	$rand  = rand(0,$count-1);
	echo "<td>".$array[$rand]."</td>";
}
echo "</tr>";
echo "<tr><th>第二节</th>";
for ($i = 0; $i < 5; $i++) {
	$rand  = rand(0,$count-1);
	echo "<td>".$array[$rand]."</td>";
}
echo "</tr>";
echo "<tr><th>第三节</th>";
for ($i = 0; $i < 5; $i++) {
	$rand  = rand(0,$count-1);
	echo "<td>".$array[$rand]."</td>";
}
echo "</tr>";
echo "<tr><th>第四节</th>";
for ($i = 0; $i < 5; $i++) {
	$rand  = rand(0,$count-1);
	echo "<td>".$array[$rand]."</td>";
}
echo "</tr>";
echo "<tr><th>第五节</th>";
for ($i = 0; $i < 5; $i++) {
	$rand  = rand(0,$count-1);
	echo "<td>".$array[$rand]."</td>";
}
echo "</tr>";
echo "<tr><th>第六节</th>";
for ($i = 0; $i < 5; $i++) {
	$rand  = rand(0,$count-1);
	echo "<td>".$array[$rand]."</td>";
}
echo "</tr>";
echo "<tr><th>第七节</th>";
for ($i = 0; $i < 5; $i++) {
	$rand  = rand(0,$count-1);
	echo "<td>".$array[$rand]."</td>";
}
echo "</tr>";
echo "<tr><th>第八节</th>";
for ($i = 0; $i < 5; $i++) {
	$rand  = rand(0,$count-1);
	echo "<td>".$array[$rand]."</td>";
}
echo "</tr>";
echo "<tr><th>晚上</th><td>自习</td></tr>";
echo "</table>";
?>

</body>
</html>
