<?php
mysql_connect('localhost','ontwikomg_tc2','ToonCarlo2');
mysql_select_db('ontwikomg_rooster');
?>
<div class="list-group">
	<?php
	$result = mysql_query("SELECT * FROM `docenten`");
	while($rows = mysql_fetch_assoc($result)) {
		echo '<a href="index.php?type=docent&id='.$rows["nick"].'" class="list-group-item">';
			echo '<span class="badge glyphicon glyphicon-chevron-right"> </span>';
			echo $rows['docent'];
		echo '</a>';
	} ?>
</div>