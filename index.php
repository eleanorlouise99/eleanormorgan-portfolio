<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleanor Morgan - Web & Graphic designer</title>

    <link rel="stylesheet" href="flexbox-grid/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/8f4323883b.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Navigation-->
    <?php include "nav.php";?>

    <!--Main heading/Opening text-->
    <div class="openingTxt">
        <h2 class="hello">Hi, I'm Eleanor,
            I'm a <span class="pinkTxt">Web developer</span>, <span class="blueTxt">UI</span> 
            and <span class="pinkTxt">graphic designer</span> from the <span class="blueTxt">UK</span></h2>
    </div>

    <!--Work section tiles/links-->
    <div class="container" id="homeWork">
        <div class="row">
            <div class="col-4" id="homeWebWork">
                <img src="images/web-confetti-designs.png" alt="web design work for confetti designs company" id="webConfettiDesigns">
            </div>
            <div class="col-4" id="homeUiWork">
                <img src="images/ui-music-app.png" alt="ui designs for a music app" id="uiMusicApp">
            </div>
            <div class="col-4" id="homeGraphicWork">
                <img src="images/graphic-fast-furious-poster.png" alt="graphic designs for a fast amd furious movie poster" id="graphicPoster">
            </div>
        </div>
    </div>

    <!--Skills heading + skill bars-->
    <div class="headContainer">
        <h2 class="scndHeading">MY <span class="pinkTxt">SKILLS</span></h2>
    </div>

    <!--Skill bars-->
    <div class="skillsContainer">
        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #FF43F9"><span>HTML5</span></div>
            <div class="skillbar-bar" style="background: rgb(255, 130, 251)"></div>
            <div class="skill-bar-percent">100%</div>
        </div> <!-- End Skill Bar -->
    
        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #00C2AE"><span>CSS3</span></div>
            <div class="skillbar-bar" style="background: rgb(91, 221, 208)"></div>
            <div class="skill-bar-percent">100%</div>
        </div> <!-- End Skill Bar -->
    
        <div class="skillbar clearfix " data-percent="60%">
            <div class="skillbar-title" style="background: #FF43F9"><span>SASS</span></div>
            <div class="skillbar-bar" style="background: rgb(255, 130, 251)"></div>
            <div class="skill-bar-percent">60%</div>
        </div> <!-- End Skill Bar -->
    
        <div class="skillbar clearfix " data-percent="40%">
            <div class="skillbar-title" style="background: #00C2AE;"><span>JavaScript</span></div>
            <div class="skillbar-bar" style="background: rgb(91, 221, 208);"></div>
            <div class="skill-bar-percent">40%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title" style="background: #FF43F9"><span>WooCommerce</span></div>
            <div class="skillbar-bar" style="background: rgb(255, 130, 251)"></div>
            <div class="skill-bar-percent">75%</div>
        </div> <!-- End Skill Bar -->
    
        <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title" style="background: #00C2AE;"><span>Wordpress</span></div>
            <div class="skillbar-bar" style="background: rgb(91, 221, 208);"></div>
            <div class="skill-bar-percent">75%</div>
        </div> <!-- End Skill Bar -->
    
        <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title" style="background: #FF43F9;"><span>SEO</span></div>
            <div class="skillbar-bar" style="background: rgb(255, 130, 251)"></div>
            <div class="skill-bar-percent">75%</div>
        </div> <!-- End Skill Bar -->
    
        <div class="skillbar clearfix " data-percent="60%">
            <div class="skillbar-title" style="background: #00C2AE;"><span>Photoshop</span></div>
            <div class="skillbar-bar" style="background: rgb(91, 221, 208);"></div>
            <div class="skill-bar-percent">60%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #FF43F9"><span>InDesign</span></div>
            <div class="skillbar-bar" style="background: rgb(255, 130, 251)"></div>
            <div class="skill-bar-percent">100%</div>
        </div> <!-- End Skill Bar -->

        <div class="skillbar clearfix " data-percent="70%">
            <div class="skillbar-title" style="background: #00C2AE;"><span>Illustrator</span></div>
            <div class="skillbar-bar" style="background: rgb(91, 221, 208);"></div>
            <div class="skill-bar-percent">70%</div>
        </div> <!-- End Skill Bar -->
    </div>

    <!--Link to about me-->
    <div class="headContainer">
        <h2 class="thirdHeading">Find out more <span class="blueTxt"><a href="http://www.eleanormorgan.co.uk/about.php">about me</a></span>...</h2>
    </div>

    <!--Footer-->
    <?php include "footer.php";?>
    
    <script>
        //JQuery script for animated skill bars
        jQuery(document).ready(function(){
	        jQuery('.skillbar').each(function(){
		        jQuery(this).find('.skillbar-bar').animate({
			        width:jQuery(this).attr('data-percent')
		        },6000);
	        });
        });    

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