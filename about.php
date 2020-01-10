<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - About me</title>

    <link rel="stylesheet" href="flexbox-grid/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8f4323883b.js" crossorigin="anonymous"></script>

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
       <h2 class="scndHeading"><span class="blueTxt">ABOUT</span> ME</h2>
   </div>

    <!--Images-->
    <div class="container">
        <div class="row">
            <div class="col-7" id="aboutMeTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dapibus fermentum urna, 
                in tincidunt tellus sodales et. Mauris in orci imperdiet, porttitor tortor eu, mollis nisl. Duis condimentum, tellus ut 
                convallis volutpat, dolor nibh maximus sapien, sit amet accumsan odio est quis dui. Mauris sodales sem et nunc bibendum 
                sagittis. Aenean in velit sollicitudin leo tempus dictum. Mauris scelerisque, orci ut sodales congue, est sem mollis 
                ligula, nec fringilla est diam at libero. Donec ornare mattis diam, ac luctus massa pellentesque non. Duis condimentum 
                arcu vitae odio pulvinar, nec pharetra tortor placerat. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Pellentesque non mollis odio, non venenatis mi. Pellentesque diam nibh, finibus in euismod non, commodo sit amet ipsum. 
                Vestibulum sed nibh vel libero vehicula consequat.<br>
                <br>
                Cras lacinia at turpis at dignissim. Maecenas at arcu eros. Aenean vel tortor porta, eleifend risus eu, vehicula elit. 
                Ut euismod mattis diam, id dapibus est condimentum at. Nullam interdum nibh nulla, sed viverra turpis ullamcorper fringilla. 
                Aliquam nec nulla at odio porttitor elementum. Vestibulum sit amet tempus ex. Quisque convallis semper tellus id rhoncus. 
                Vestibulum ac purus interdum, accumsan sem a, semper sem. Curabitur sollicitudin nisl vitae leo lobortis, pretium dapibus 
                leo viverra. Curabitur id erat ac magna tempus facilisis. Nam vitae justo ut felis suscipit mattis in ac erat.<br>
                <br>
                Aliquam lacus mi, tempor nec lectus et, elementum rhoncus sapien. Duis id ultrices quam. Suspendisse pulvinar enim et feugiat 
                sagittis. Etiam laoreet nec ipsum vitae fermentum. Nunc malesuada ex et metus commodo iaculis. Ut ullamcorper, ante vel 
                dignissim efficitur, metus sapien finibus velit, quis aliquam metus mauris non sapien. Vivamus fringilla, tellus eu faucibus 
                aliquet, libero metus varius ligula, a eleifend tortor ligula at mi.
            </div>
            <div class="col-5" id="aboutMeImg"><img src="images\eleanor-morgan.jpg" alt="image of eleanor morgan" id="aboutImg"></div>
        </div>
    </div>

    <!--Footer with social media icons-->
    <?php include "footer.php";?>

    <script>
        //Dropdown menu function
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