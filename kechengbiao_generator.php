<?php
$array = array("语文","数学","英语","物理","化学","政治","历史","生物","地理","体育","计算机","班会");
$count = count($array);

echo "<table>";
echo "<tr><th></th><td><strong>星期一</strong></td><td><strong>星期二</strong></td><td><strong>星期三</strong></td><td><strong>星期四</strong></td><td><strong>星期五</strong></td></tr>";
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