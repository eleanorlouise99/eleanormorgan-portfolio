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

    <!--Images-->
    <div class="container">
        <div class="row">
            <div class="col-4" id="aboutMeTxt">Both design and computing have always been strong passions of mine, ever since a young age I would be
                playing around with computers or designing calenders and brochures on Microsoft paint. As I grew up,
                both of these interests combined when I began studying graphic design and web development, these
                subjects allowed me to combine both my artistic and technical skills.<br>
                <br>
                In terms of graphic design, I focus on layout design such as books, brochures and posters. I am heavily
                inspired by the swiss style of design, therefore much of my work consists of clean layouts and sleek,
                 modern forms of typography. See some of my graphic designs work here.<br>
                <br>
                When it comes to my web development work, I am a front end developer and therefore focus on both the
                design and development of the site. I have experience in languages such as HTML, CSS, Javascript, JQuery,
                Python and PHP. On top of this, I have used sites such as Wordpress and Ecommerce systems such as
                WooCommerce and Shopify. My aim with all website designs is to create simplistic, easy to use yet stylish
                user interfaces, see some of my web work here.
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