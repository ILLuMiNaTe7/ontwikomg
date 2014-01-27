<?php
mysql_connect('localhost','ontwikomg_tc2','ToonCarlo2');
mysql_select_db('ontwikomg_rooster');

if(!isset($_GET['id'])) { ?>
<div class="list-group">
	<?php
	$result = mysql_query("SELECT `klas` FROM `klassen` ORDER BY `klas`");
	while($rows = mysql_fetch_assoc($result)) {
		echo '<a href="index.php?type=student&id='.$rows["klas"].'&weekdag=1" class="list-group-item">';
			echo '<span class="badge glyphicon glyphicon-chevron-right"> </span>';
			echo $rows['klas'];
			if($rows['klas'] === '2MD1') echo ' <<<<<<<';
		echo '</a>';
	} 
	echo '</div>';
} else {
	$klas = $_GET['id'];
	if($_GET['weekdag'] == 1) {
		$dag = 'maandag';
		$result = mysql_query("SELECT * FROM `roosters` WHERE klas = '2MD1' AND dag = '$dag'");
	}
	if($_GET['weekdag'] == 2) {
		$dag = 'dinsdag';
		$result = mysql_query("SELECT * FROM `roosters` WHERE klas = '2MD1' AND dag = '$dag'");
	}
	if($_GET['weekdag'] == 3) {
		$dag = 'woensdag';
		$result = mysql_query("SELECT * FROM `roosters` WHERE klas = '2MD1' AND dag = '$dag'");
	}
	if($_GET['weekdag'] == 4) {
		$dag = 'donderdag';
		$result = mysql_query("SELECT * FROM `roosters` WHERE klas = '2MD1' AND dag = '$dag'");
	}
	if($_GET['weekdag'] == 5) {
		$dag = 'vrijdag';
		$result = mysql_query("SELECT * FROM `roosters` WHERE klas = '2MD1' AND dag = '$dag'");
	}
	$rows = mysql_fetch_assoc($result);
	?>
	<div class="btn-group btn-group-justified">
        <?php 
        echo '<a class="btn btn-default" role="button" href="index.php?type=student&id='.$klas.'&weekdag=1">Ma</a>';
        echo '<a class="btn btn-default" role="button" href="index.php?type=student&id='.$klas.'&weekdag=2">Di</a>';
        echo '<a class="btn btn-default" role="button" href="index.php?type=student&id='.$klas.'&weekdag=3">Wo</a>';
        echo '<a class="btn btn-default" role="button" href="index.php?type=student&id='.$klas.'&weekdag=4">Do</a>';
        echo '<a class="btn btn-default" role="button" href="index.php?type=student&id='.$klas.'&weekdag=5">Vr</a>';
        ?>
      </div>
<?php include_once "toggle.php"; ?>
	<?php echo '<pre>';
		print_r($rows);
		echo '</pre>';
	?>

	<?php
}
	?>