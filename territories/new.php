<?php
require_once('../../../private/initialize.php');
?>
<?php $page_title = 'Staff: New Territory'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<?php 
	$territory = array(
		'name' => '', 
		'position' => ''
	)
	$errors = array(); 
	
	if (isset($_POST['submit'])){
		if (isset($_POST['name'])){ $territory['name'] = $_POST['name']; }
		if (isset($_POST['position'])) { $territory['position'] = $_POST['position']; }
	
		$result = insert_territory($territory); 
		if ($result ===true){
			$new_id = db_insert_id($db); 
			redirect_to("show.php?id=".$new_id); 
		}else{
			$errors = $result; 
		}
	}
?>

<div id="main-content">
  <a href="\Projects\globitek\public\staff\states\show.php?id=<?php echo $state['id']; ?>">Back to State Details</a><br />

  <h1>New Territory</h1>
	
	<?php echo display_errors($errors) ?>
  <form action="\Projects\globitek\public\staff\states\show.php?id=<?php echo $state['id']; ?>" method="post"> 
	Name <input type="text" name="name" value=""> <br /> 
	Position <input type="text" name="position" value=""> <br /> 
	<input type="submit" name="submit" value="Create">
	
	</form> 

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
