<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - Web projects</title>

    <link rel="stylesheet" href="grid/grid.css">
    <link rel="stylesheet" href="css/style.css">

    <?php
	
	//Determine if the form has been posted and the information added
	if ($_POST && isset($_POST['senddetails'], $_POST['Name'], $_POST['Email'], $_POST['Enquiry'])){
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$subject = $_POST['Enquiries'];
		$comment = $_POST['Enquiry'];
	
	if (!$name){
		$errorMsg = "Please enter your name";
	}
	else if (!$email || !preg_match("/^\S+@\S+$/", $email)){
		$errorMsg = "Please enter a valid Email address";	
	}
	else if (!$comment){
		$errorMsg = "Please enter your comment in the box";
	}
	else {
		$to = "eleanorlouise99@gmail.com";
		$headers = "From: " . $email;
		if(!$subject) $subject = "Website Enquiry";
		mail($to, $subject, $message, $headers);
		header('Location: thank-you.html');
		exit;
	}}
	
	?> 
</head>

<body>
    <!--Navigation menu-->
    <nav>
        <ul class="navList">
            <li class="navItem">
                <a href="#">HOME</a>
            </li>
            <li class="navItem">
                <!--Drop down menu item-->
                <a href="#">WORK</a> <!--ADD IN VUE DROP DOWN MENU-->
            </li>
            <li class="navItem">
                <a href="#">ABOUT</a>
            </li>
            <li class="navItem">
                <a href="#">CONTACT</a>
            </li>
        </ul>
    </nav>

    <!--Heading-->
   <div class="headContainer">
       <h2 class="scndHeading"><span class="pinkTxt">CONTACT</span> ME</h2>
   </div>

   <div class="contactTxt">
       <p class="copy">Interested in working with me? Drop me an email or fill out the contact formbelow and I'll get back to you ASAP.<br>
                        <br>@: eleanorlouise99@gmail.com</p>
   </div>

    <!--Contact form-->
    <div class="section" id="section1">
			<?php
			if(isset($errorMsg) && $errorMsg){
				echo "<p style=\"color:red;font-size:10px;\">*", htmlspecialchars($errorMsg),"</p>";
			}
			?>
			
			<form id="enquiryForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
				<!--method must be secure - using post is secure-->
				<input type="text" name="Name" value="<?php if(isset($_POST['Name'])) echo htmlspecialchars($_POST['Name']);?>" placeholder="Name..."> <br>
				
				<input type="email" name="Email" value="<?php if(isset($_POST['Email'])) echo htmlspecialchars($_POST['Email']);?>" placeholder="Email..."> <br>

				<textarea name="Enquiry" rows="5" cols="40" value="<?php if(isset($_POST['Enquiry'])) echo htmlspecialchars($_POST['Enquiry']);?>" placeholder="Message..."></textarea><br>
				
				<input type="submit" id="submit" name="senddetails"><br>
			</form>
				
	</div>
		

    <!--Footer with social media icons-->
    <footer>
        <!--FONT AWESOME ICONS-->
    </footer>
    
</body>
</html>