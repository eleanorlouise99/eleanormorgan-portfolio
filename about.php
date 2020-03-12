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
    <?php include "nav.php";?>

    <!--Heading-->
   <div class="headContainer">
       <h2 class="scndHeading"><span class="blueTxt">ABOUT</span> ME</h2>
   </div>

    <!--Images-->
    <div class="container">
        <div class="row">
            <div class="col-7" id="aboutMeTxt">My name is Eleanor, I am a Digital design and Web development (Bsc) student studying at Southampton Solent University. My main interests include UI design and digital marketing. 
            I started my journey studying Design and Visual communication advanced diploma at Hove college in Brighton. 
            Prior to this I had hardly any knowledge of graphic or web design however very soon into this course I became intrigued in many of these fields. 
            Over the two years that I was studying there, I learned how to use the adobe creative cloud suite, front end languages such as HTML, CSS, 
            Javascript and how to use wordpress and woocommerce as well. I also studied marketing, both digital and traditional. 
            I feel I left Hove college with a strong knowledge of all of these subjects and confident in what I wanted to do.<br>
			<br>
			I then went on to join the 2nd year of the Digital design and Web development (Bsc) degree , that I am currently studying. 
            Since joining the university I feel I am constantly strengthening the skills I gained at Hove college, as well as really narrowing it down 
            to what it is I want to pursue. My main passions would be UI design and digital marketing, I feel I have now gained a very strong knowelegde of these
            areas, in terms of digital marketing I would say I am particularly proficient in SEO, Social media marketing and Ecommerce.<br>
			<br>
			On top of my studies, I have done several freelance projects both in web development and graphic design. 
            This has made a huge difference in my skillset as it forced me to work on things alone, without the help of a tutor. 
            This helped become far more independant in both my learning and my work.<br>
			<br>
			Currently I am working on some projects with friends, as well as searching for a summer internship in either UI design or digital marketing. 
            If you would like to get in touch, please visit my <a href="eleanormorgan.co.uk/contact.php" class="aboutMeLink">contact me</a> page.

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