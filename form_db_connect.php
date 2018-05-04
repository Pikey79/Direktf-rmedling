<?php
// FORM SEARCH STAFF
if  (isset($_POST['company_name'])
&& isset($_POST['c_name'])
&& isset($_POST['c_phone'])
&& isset($_POST['c_email'])
&& isset($_POST['c_message'])) {

	// escape variables for security
  $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
	$c_name = mysqli_real_escape_string($db, $_POST['c_name']);
	$c_tel= mysqli_real_escape_string($db, $_POST['c_phone']);
	$c_email = mysqli_real_escape_string($db, $_POST['c_email']);
	$c_message = mysqli_real_escape_string($db, $_POST['c_message']);

	// attempt insert query execution
	$sql = "INSERT into search_staff (company_name, name, phone, email, message)
	VALUES ('$company_name', '$c_name', '$c_tel', '$c_email', '$c_message')
	";

	if ($db->query($sql) === TRUE) {
		echo "<script type= 'text/javascript'>alert('Tack för ditt meddelande');</script>";
	} else {
		echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $db->error."');</script>";
	}
}


// FORM APPLY JOB
if  (isset($_POST['name'])
&& isset($_POST['phone'])
&& isset($_POST['email'])
&& isset($_POST['message'])
&& isset($_POST['operation'])) {

	// escape variables for security
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$tel= mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$message = mysqli_real_escape_string($db, $_POST['message']);
  $operation = mysqli_real_escape_string($db, $_POST['operation']);

  // Upload File
  $file_name= $_FILES['file']['name'];
  $tmp_name= $_FILES['file']['tmp_name'];
  $submitbutton= $_POST['submit'];
  $position= strpos($file_name, ".");
  $fileextension= substr($file_name, $position + 1);
  $fileextension= strtolower($fileextension);

  if (isset($file_name)) {

    $path= 'Uploads/files/';

    if (!empty($file_name)){
      if (move_uploaded_file($tmp_name, $path.$file_name)) {

      }
    }
  }

	// attempt insert query execution
	$sql = "INSERT into apply_job (name, phone, email, message, operation, filename)
	VALUES ('$name', '$tel', '$email', '$message', '$operation', '$file_name' )
	";

	if ($db->query($sql) === TRUE) {
		echo "<script type= 'text/javascript'>alert('Tack för ditt meddelande');</script>";
	} else {
		echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $db->error."');</script>";
	}

}



?>
