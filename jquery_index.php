<!DOCTYPE html>
<html>
	<head>
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	</head>
	<body>
		<div data-role="content">
		<div data-role="page">
			<div data-role="header">
		<h1>JMH</h1>
	</div><!-- /header -->

		<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <?php
		mysql_connect('localhost', 'root', '111111');
		mysql_select_db('egoing');
		$sql = "select id,title from topic";
		$result = mysql_query($sql);
		?>
		<div class="row">
				<div class="span12">
					<h1>
						javascript
					</h1>
			<div class="row">
		<div class="span4">
		<ol class="nav nav-tabs nav-stacked">
		<?php
		while ($row = mysql_fetch_assoc($result)) {
		?>
			<li><a href="index.php?id=<?=$row['id']?>"><?=htmlspecialchars($row['title'])?></a></li>
		<?php
		}
		?>
		</ol></div></div>
		<?php
		$sql = "select * from topic where id = " . $_GET['id'];
		$result = mysql_query($sql);
		$row = mysql_fetch_assoc($result);
	?>
	<div class="span8">
	<div>
		<h2><?=htmlspecialchars($row['title'])?></h2>
		<div><?=$row['description']?></div>
	</div></div>
	</div>
	<?php
	?>
	</body></div>
</html>