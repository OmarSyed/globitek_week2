<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$states_result = find_state_by_id($_GET['id']);
// No loop, only one result
$state = db_fetch_assoc($states_result);
$errors = array(); 

if (is_post_request()){
	if (isset($_POST['name'])){$state['name'] = $_POST['name'];}
	if (isset($_POST['code'])) {$state['code'] = $_POST['code']; }
	
	$results = update_state($state); 
	if ($results===true){
		redirect_to("show.php?id=".state['id']); 
	}else{
		$errors = $results; 
	}
}

?>
<?php $page_title = 'Staff: Edit State ' . $state['name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to States List</a><br />

  <h1>Edit State: <?php echo $state['name']; ?></h1>
	
  <form action="edit.php?id=<?php echo $state['id']?>" method="post">
	Name <input type="text" name="name" value="<?php echo $state['name']; ?>"> <br /> 
	Code <input type="text" name="code" value="<?php echo $state['code']; ?> "> <br />
	<input type="submit" name="submit" value="Update"> 
	</form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
