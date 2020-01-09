<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - Contact me</title>

    <link rel="stylesheet" href="grid/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8f4323883b.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
</head>

<body>
    <!--Navigation menu-->
    <nav>
        <ul class="navList">
            <li class="navItem">
                <a href="http://www.eleanormorgan.co.uk/index.php">HOME</a>
            </li>
            <li class="navItem">
                <div class="dropdown">
                    <button onClick="dropdownMenu()" class="dropbtn">WORK</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="http://www.eleanormorgan.co.uk/web-designs.php">Web designs</a>
                        <a href="http://www.eleanormorgan.co.uk/ui-designs.php">UI designs</a>
                        <a href="http://www.eleanormorgan.co.uk/graphic-designs.php">Graphic designs</a>
                    </div>
                </div>
            </li>
            <li class="navItem">
                <a href="http://www.eleanormorgan.co.uk/about.php">ABOUT</a>
            </li>
            <li class="navItem">
                <a href="http://www.eleanormorgan.co.uk/contact.php">CONTACT</a>
            </li>
        </ul>

        <div class="mobileNav">
            <div id="myLinks">
              <a href="#">Home</a>
              <a href="#">About</a>
              <a href="#">Web designs</a>
              <a href="#">UI designs</a>
              <a href="#">Graphic designs</a>
              <a href="#">Contact</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars" id="burger"></i>
            </a>
          </div>

    </nav>

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
            
        <p class="thankYou">Thank you for contacting me!</p>
            			
	</div>

    <!--Footers-->
    <?php include "footer.php";?>

    <script>
        //Drop down menu function
        function dropdownMenu() {
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