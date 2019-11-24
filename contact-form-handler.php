<?php
	 $name=$_POST['Name'];
	 $visitor_email = $_POST['Email'];
	 $message = $_POST['message'];

	 $Email_from = 'revatib19@gmail.com';

	 $Email_subject = "New Form Submission";

	 $Email_body="User Name: $name.\n".
	 				"User Email: $visitor_email.\n".
	 				"User Message: $message.\n";

	 $to ="revatib19@gmail.com";

	 $headers="Form: $Email_from\r\n";
	 $headers="replay-to: $visitor_email.\n";

	 mail($to, $Email_subject,$Email_body,$headers);
	 header("Location:index.html");
	 
	 ?>