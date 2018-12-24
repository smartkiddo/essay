<?php include 'inc/header.php'; ?>

<?php foreach($assignments as $assignment):?>

	<h4>Title: <?php echo $assignment->order_title; ?></h4> <br>
	<p>Type of paper: <?php echo $type=$assignment->papertype;?></p> <br>
	<p>subject area: <?php echo $assignment->subjecttype; ?></p> <br>

	<p>Detailed instructions: <?php echo $assignment->Detailed_instructions; ?></p> <br>
	<p>Total price: <?php echo $assignment->total_price; ?></p> <br>
	<a href="index.php?assignment_id=<?php echo $assignment->order_id;?>">View</a>
	
	
<hr>


<?php endforeach; ?>


<?php include 'inc/footer.php'; ?>