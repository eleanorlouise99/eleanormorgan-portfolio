<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - Web projects</title>

    <link rel="stylesheet" href="grid/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8f4323883b.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <?php
    //ReCaptcha script
        //keys for recaptcha
        $public_key = "6LfSI80UAAAAAAMzvxr1RvARtIDwF9YSHrB58Ko0"; 
        $private_key = "6LfSI80UAAAAAOVW6ijMiLinEPdRabu_vEPlaKBY"; 
        $url = "https://www.google.com/recaptcha/api/siteverify";

        //Check if the form has been submitted 
        if(array_key_exists('senddetails',$_POST)){
            //The response given by the form being submitted
            $response_key = $_POST['g-recaptcha-response'];
            // Send the data to the API for a response 
            $response = file_get_contents($url.'?secret='.$private_key.'&response='.$response_key.'&remoteip='.$_SERVER['REMOTE_ADDR']);
            // Json decode the response to an object 
            $response = json_decode($response);

            // If successful
            if($response->success == 1){
                echo "You passed validation!";
            }
            else{
                echo "You are a robot and we don't like robots.";
            }
        }
    
    //Contact form script
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
            }
        }    
	
    ?> 
    
</head>

<body>
    <!--Navigation menu-->
    <?php include "nav.php";?>

    <!--Heading-->
    <div class="headContainer">
        <h2 class="scndHeading"><span class="pinkTxt">CONTACT</span> ME</h2>
    </div>

    <!--Copy about contact form-->
    <div class="contactTxt">
        <p class="copy">Interested in working with me? Drop me an email or fill out the contact form below and I'll get back to you ASAP.<br>
                        <br>@: eleanorlouise99@gmail.com</p>
    </div>

    <!--Contact form-->
    <div class="section" id="section1">
            <?php
            //Error message
			if(isset($errorMsg) && $errorMsg){
				echo "<p style=\"color:red;font-size:10px;\">*", htmlspecialchars($errorMsg),"</p>";
			}
			?>
			
			<form id="enquiryForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
				<!--Method to ensure security by using post-->
				<input type="text" name="Name" value="<?php if(isset($_POST['Name'])) echo htmlspecialchars($_POST['Name']);?>" placeholder="Name..."> <br>
				
				<input type="email" name="Email" value="<?php if(isset($_POST['Email'])) echo htmlspecialchars($_POST['Email']);?>" placeholder="Email..."> <br>

				<textarea name="Enquiry" rows="5" cols="40" value="<?php if(isset($_POST['Enquiry'])) echo htmlspecialchars($_POST['Enquiry']);?>" placeholder="Message..."></textarea><br>
                
                <div class="g-recaptcha" data-sitekey="<?php echo $public_key; ?>"></div>

				<input type="submit" id="submit" name="senddetails"><br>
            </form>
            			
	</div>

    <!--Footers-->
    <?php include "footer.php";?>

    <script>
        //Drop down menu function
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        //burger menu function
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
            x.style.display = "none";
            } else {
            x.style.display = "block";
            }
        }
    </script>
    
</body>
</html>