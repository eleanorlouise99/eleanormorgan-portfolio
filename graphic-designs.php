<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - Graphic designs</title>

    <link rel="stylesheet" href="flexbox-grid/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8f4323883b.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--Navigation menu-->
    <?php include "nav.php";?>

    <!--Heading-->
    <div class="headContainer">
       <h2 class="scndHeading"><span class="blueTxt">GRAPHIC</span> DESIGNS</h2>
    </div>

    <!--Images-->
    <div class="container">
        <div class="row">
            <div class="col-4" id="graphicProjectOne"><img src="images/graphic-book.png" alt="graphic design for a health book" id="graphicBook"></div>
            <div class="col-8" id="graphicProjectTwo"><img src="images/graphic-fast-furious-poster.png" alt="graphic design college project of a fast and furious posters" id="graphicPoster"></div>
        </div>
        <div class="row">
            <div class="col-8" id="graphicProjectThree"><img src="images/graphic-ebook-designs.png" alt="graphic design of a health ebook" id="graphicEbook"></div>
            <div class="col-4" id="graphicProjectFour"><img src="images/graphic-magazine.png" alt="graphic design college project for a travel magazine" id="graphicMagazine"></div>
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