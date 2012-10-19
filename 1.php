<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('moony');
$sql = "select id,title from topic";
$result = mysql_query($sql);
?>
<ol>
	<?php
while($row = mysql_fetch_assoc($result))
?>
	<li>'<a href="opentutorials.php?id='.$row['id'].'">'.$row['title']."</a><br />";</li>
<?php
</ol>


print_r($_GET['id']);

$sql = "select * from topic where id = ".$_GET['id'];
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
print_r($row);
?>