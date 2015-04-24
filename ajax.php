<?php
require_once 'config.php';
$data = array();
if( isset( $_POST['uploadBtn'] ) && !empty( $_FILES['files'] )){
	$documentName = htmlspecialchars($_POST["documentName"]);
	$documentDescription = htmlspecialchars($_POST["description"]);
	$file = $_FILES['files'];
	$allowedExts = array("gif", "jpeg", "jpg", "png","pdf","doc","docx");
	
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	
	
	//create directory if not exists
	if (!file_exists('files')) {
		mkdir('files', 0777, true);
	}
	$file_name = $file['name'];
	//get file extension
	$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

	$name = $file_name;
	//file size calcuation in KB
	$file_size = $file["size"] / 1024;
	$file_flag = true;
	
	//max file size
	$max_size = 524288;
	if( in_array($ext, $allowedExts) && $file_size < $max_size ){
		$file_flag = true;
	} else {
		$file_flag = false;
		$data['error'] = 'Maybe '.$file_name. ' exceeds max  which is (512 megs) or incorrect file extension';
	} 
	
	if( $file["error"] > 0 ){
		$file_flag = false;
		$data['error'] = '';
		$data['error'].= '<br/> '.$file_name.' File contains error - Error Code : '.$file["error"];
	}
	
	if($file_flag){
		move_uploaded_file($file["tmp_name"], "files/".$name);
		$dist = "files/".$name;
		$data['success'] = $name;
	
			$sql="	INSERT INTO file (`id`, `filename`, `filetype`,  `filesize`, `documentName`, `description`) VALUES (NULL, '$file_name', '$ext','$file_size', '$documentName', '$documentDescription');";
		if (!mysqli_query($con,$sql)) {
			$data['error'] = '';
			$data['error'].= 'Databse Connection Error!';
			die('Error: ' . mysqli_error($con));
		} 
	}
	
	mysqli_close($con);
	echo json_encode($data);
	
} else {
	$data[] = 'No File Selected..';
}
