<?php
require_once('../../../private/initialize.php');

$state = array(
	'name' => '', 
	'code' => ''
	); 
$errors = array(); 

if (isset($_POST['submit'])){
	if (isset($_POST['name'])) {$state['name'] = $_POST['name']; }
	if (isset($_POST['code'])) {$state['code'] = $_POST['code'];}
	
	
	$result= insert_state($state); 
	if($result ===true){
		$new_id = db_insert_id($db); 
		redirect_to("show.php?id=".$new_id); 
	}else{
		$errors=$result; 
	}
}

?>
<?php $page_title = 'Staff: New State'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>


<div id="main-content">
  <a href="index.php">Back to States List</a><br />

  <h1>New State</h1>

  <?php echo display_errors($errors); ?>
  <form action="new.php" method="post">
	Name <input type="text" name="name" value=""/> <br/> 
	Code <input type="text" name="code" value=""/> <br /> 
	<input type="submit" name="submit" value="Submit"/> 
	
	</form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
