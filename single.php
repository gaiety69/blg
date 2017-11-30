<?php include('includes/config.php') ?>
<?php 

	$posts_query = "SELECT * FROM posts WHERE slug='first-post' AND published=1";

	$result = mysqli_query($db, $posts_query);

	// fetch all posts from database
	// return them as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BlogApp - Single</title>
	<?php include('includes/header.php') ?>		

		<h2>Single page</h2>

	<?php include('includes/footer.php') ?>		


	