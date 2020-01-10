<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - Web designs</title>

    <link rel="stylesheet" href="flexbox-grid/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8f4323883b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Navigation-->
    <?php include "nav.php";?>

    <!--Heading-->
    <div class="headContainer">
       <h2 class="scndHeading"><span class="blueTxt">WEB </span>DESIGNS</h2>
    </div>

    <!--Images-->
    <div class="container">
        <div class="row">
            <div class="col-8" id="webProjectOne">
                <img src="images/web-confetti-designs.png" alt="web design work for confetti designs company" id="webConfettiDesigns">
            </div>
            <div class="col-4" id="webProjectTwo">
                <img src="images/web-downcast-apparel.png" alt="web design work for clothing shop downcast apparel" id="webDowncast">
            </div>
        </div>
        <div class="row">
            <div class="col-4" id="webProjectThree">
                <img src="images/web-def-prints.png" alt="web design work for def prints company" id="webDefPrints">
            </div>
            <div class="col-8" id="webProjectFour">
                <img src="images/web-celeste.png" alt="web design project for fictional restaurant celeste" id="webCeleste">
            </div>
        </div>
    </div>

    <!--Footer-->
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