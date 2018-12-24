<?php include 'inc/header.php'; ?>

	<h4>Title: <?php echo $myassignment->order_title; ?></h4> <br>
	<p>Type of paper: <?php echo $type=$myassignment->papertype;?></p> <br>
	<p>subject area: <?php echo $myassignment->subjecttype; ?></p> <br>

	<p>Quality level: <?php echo $myassignment->quality_level; ?></p> <br>
	<p>Number of pages: <?php echo $myassignment->number_of_pages; ?></p> <br>
	<p>Deadline: <?php echo $myassignment->urgency; ?></p> <br>
	<p>Number of sources: <?php echo $myassignment->number_of_sources; ?></p> <br>


	
	<p>Detailed instructions: <?php echo $myassignment->Detailed_instructions; ?></p> <br>

	<p>Total price: <?php echo $myassignment->total_price; ?></p> <br>
	<a href="index.php?edit_id=<?php echo $myassignment->order_id;?>">Edit</a>

<?php include 'inc/footer.php'; ?>