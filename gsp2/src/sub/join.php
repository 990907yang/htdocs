<?php 
	include "./db.php";

	$sql = "insert into member set name='{$_POST['name']}',id='{$_POST['id']}',password='{$_POST['password']}'";
	$go = $pdo->query($sql);
 ?>
 <script type="text/javascript">
 	location.href='../../index.php';
 </script>