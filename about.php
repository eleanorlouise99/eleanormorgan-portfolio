<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - Web projects</title>

    <link rel="stylesheet" href="flexbox-grid/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8f4323883b.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--Navigation menu-->
    <?php include "nav.php";?>

    <!--Heading-->
   <div class="headContainer">
       <h2 class="scndHeading"><span class="blueTxt">ABOUT</span> ME</h2>
   </div>

    <!--Image and text-->
    <div class="container">
        <div class="row">
            <div class="col-4" id="aboutMeTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque est neque, laoreet at eleifend a, tempus ut purus. 
            Morbi felis turpis, sodales eu mollis vitae, euismod et velit. In sem lectus, mattis non dignissim ac, malesuada quis enim. Quisque malesuada, nunc ac varius 
            porta, orci ipsum feugiat risus, ut bibendum risus sapien id turpis. Phasellus vulputate lorem sit amet laoreet blandit. Ut vel luctus est. Mauris ut enim purus. 
            Donec rhoncus rutrum est. Aliquam erat volutpat.<br>
            <br>
            Vivamus ornare diam vel dolor posuere commodo. Vivamus semper ante non massa aliquet consectetur. Fusce tortor ipsum, aliquet id libero a, eleifend consequat massa. 
            Quisque feugiat consectetur nisl quis malesuada. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque molestie nunc eu 
            felis porttitor, a eleifend purus rhoncus. Vestibulum quis accumsan ipsum. In scelerisque nibh ut consectetur pulvinar. Integer vel placerat risus, suscipit aliquam 
            mi.<br>
            <br> 
            Donec in aliquam ex, suscipit sodales eros. Nam egestas, risus ut molestie aliquam, nisl mauris gravida urna, bibendum ultrices nibh nisi bibendum arcu. Praesent in 
            sagittis dolor, ut accumsan ante. Quisque dignissim, nibh dapibus euismod auctor, erat massa aliquam erat, vitae lobortis sem felis eu tortor. Cras finibus nulla non 
            tellus efficitur posuere. Suspendisse ultrices, elit eu malesuada dapibus, lacus nunc ultricies arcu, ut ultrices ligula neque ac ante. Proin ut ullamcorper tortor, in 
            lacinia mauris. Aenean dictum dictum neque, ac consequat mi elementum nec. Duis feugiat, metus id pellentesque lacinia, odio dui commodo justo, scelerisque facilisis 
            dui massa quis leo. In sit amet finibus mi. Maecenas efficitur dolor non tincidunt aliquet. Vestibulum tincidunt, velit eget sollicitudin porttitor, erat ex commodo ipsum, 
            non cursus felis tellus eu urna. Suspendisse laoreet ac nulla non rutrum. Duis id tortor a elit rutrum commodo a eu tortor. Pellentesque scelerisque laoreet lacinia. 
            Nulla facilisi.
            </div>
            <div class="col-8" id="aboutMeImg"><img src="images\eleanor-morgan.jpg" alt="image of eleanor morgan" id="aboutImg"></div>
        </div>
    </div>

    <!--Footer with social media icons-->
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