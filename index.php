<?php include_once 'config/init.php'; ?>

<?php

$assignment= new Assignment;
$user= new User;

if(isset($_GET['assignment_id'])){
	$order_id=$_GET['assignment_id'];
	$template = new Template('templates/assignment-view.php');
	$template->myassignment=$assignment->getAssignmentById($order_id);

}
elseif(isset($_GET['edit_id'])){
	$edit_id=$_GET['edit_id'];
	$template = new Template('templates/assignment-edit.php');

}
elseif(isset($_GET['register'])){

	if(isset($_POST['register'])){

		$request=array();

		$request['first_name'] = $_POST['first_name'];
		$request['email'] = $_POST['email'];
		$request['password'] = $_POST['password'];

		if($user->register($request)){

		echo "User created";
	}
	else{
		echo "No user created";
	}

	}
	
	$template = new Template('templates/register-user.php');

}

elseif(isset($_GET['create'])){

	if(isset($_POST['create'])){

		$request=array();

		$request['order_title'] = $_POST['order_title'];
		$request['type_of_paper_id'] = $_POST['type_of_paper_id'];
		$request['subject_area_id'] = $_POST['subject_area_id'];
		$request['quality_level'] = $_POST['quality_level'];
		$request['number_of_pages'] = $_POST['number_of_pages'];
		$request['urgency'] = $_POST['urgency'];
		$request['number_of_sources'] = $_POST['number_of_sources'];
		$request['detailed_instructions'] = $_POST['detailed_instructions'];
		$request['tracking_no'] = $_POST['tracking_no'];
		$request['total_price'] = $_POST['total_price'];

	if($assignment->create($request)){

		echo "Assignment created";
	}
	else{
		echo "No assignment created";
	}
	
	
	}
	$template = new Template('templates/assignment-create.php');
	$template->papertypes=$assignment->getPaperType();
	$template->papersubjects=$assignment->getSubjects();



}
elseif(isset($_GET['about'])){
	
	$template = new Template('templates/about.php');

}
elseif(isset($_GET['guarantees'])){
	
	$template = new Template('templates/guarantees.php');

}
elseif(isset($_GET['services'])){
	
	$template = new Template('templates/services.php');

}
elseif(isset($_GET['pricing'])){
	
	$template = new Template('templates/pricing.php');

}
elseif(isset($_GET['login'])){

	if(isset($_POST['login'])){

		

		$email = $_POST['email'];
		$password= $_POST['password'];


		if($user->login($email, $password)!=null){
			$row=$user->login($email, $password);

			
		$user_data=array('login'=>true, 'user_id'=>$row->user_id, 'name'=>$row->first_name, 'email'=>$row->email);
			$_SESSION['user_login']=$user_data;
			
		header('Location:  index.php?app');
	}
	else {
		
		header('Location:  index.php?login');
	}
	}

	
	
	$template = new Template('templates/login-user.php');
}

elseif(isset($_GET['app'])){

 if(isset($_SESSION['user_login']) && $_SESSION['user_login']['login']==true){

$template = new Template('templates/app.php');

}
else{
	header('Location:  index.php');
}
}

elseif(isset($_GET['logout'])){

	$template = new Template('templates/logout.php');
	header('Location:  index.php?login');

}



else {
$template = new Template('templates/frontpage.php');
$template->assignments=$assignment->getAssignments();
}



echo $template;