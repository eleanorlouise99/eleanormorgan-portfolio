<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - UI designs</title>

    <link rel="stylesheet" href="flexbox-grid/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8f4323883b.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--Navigation menu-->
    <nav>
        <ul class="navList">
            <li class="navItem">
                <a href="#">HOME</a>
            </li>
            <li class="navItem">
                <div class="dropdown">
                    <button onClick="myFunction()" class="dropbtn">WORK</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Web designs</a>
                        <a href="#">UI designs</a>
                        <a href="#">Graphic designs</a>
                    </div>
                </div>
            </li>
            <li class="navItem">
                <a href="#">ABOUT</a>
            </li>
            <li class="navItem">
                <a href="#">CONTACT</a>
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
       <h2 class="scndHeading"><span class="pinkTxt">UI</span> DESIGNS</h2>
   </div>

    <!--Images-->
    <div class="container">
        <div class="row">
            <div class="col-4" id="uiProjectOne"><img src="images/ui-loginscreen.png" alt="ui design of a login screen" id="uiLogin"></div>
            <div class="col-8" id="uiProjectTwo"><img src="images/ui-music-app.png" alt="ui design for a music app" id="uiMusic"></div>
        </div>
        <div class="row">
                <div class="col-4" id="uiProjectThree"><img src="images/ui-user-screen.png" alt="ui design for a social media profile" id="uiProfile"></div>
                <div class="col-4" id="uiProjectFour"><img src="images/ui-shopping-page.png" alt="ui design for a shopping product page" id="uiShopping"></div>
                <div class="col-4" id="uiProjectFive"><img src="images/ui-zest-orange.png" alt="ui design for a new juice company" id="uiJuice"></div>
        </div>
    </div>

    <!--Footer-->
    <?php include "footer.php";?>

    <script>
        //Dropdown menu function
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