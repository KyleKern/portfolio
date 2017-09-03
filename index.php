<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8"/>
        <title> Kyle Kern: Personal Website</title>
        <style>
            body{
                background-color: lightblue !important;
            }
            header, main, nav, footer{
                text-align: center;
            }
            nav a:hover{ /*pseudo class*/
            border-bottom:2px orange solid;
            font-size: 2em;
            transition: .9s; /*transition effect */
            }
            #me, #welcomeText {
                float:left;
            }
            footer{
                clear: left;
                background-color: white;
            }
             h1{
                font-family: 'Pacifico', cursive;
                font-size: 4em;
                margin-bottom: 0px;
            }
        </style>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1>Kyle Kern</h1>
        </header>
        <nav> 
            <hr width="50%"/>
            <a href="index.php" color= white><b>Home</b></a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        <br /><br />
        <main>
            <figure id="me">
                <img src="img/kyleK.jpg" width="480" height="600" alt="Picture of Kyle Kern" />
            </figure>
            
            <div id="welcomeText">
                Hello! <br/>
                <p>Thank you for visiting my professional portfolio website.</p>
                <p>I am a Software Engineer and am enrolled in the internet programming class</p>
                <br /><br />
            </div>
        </main>
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            Internet programming 2017 Kern <br />
            <strong>
                Disclamer: </strong> The information in this webpage is fictitous. <br />
            It is used for academic purposes only
            <figure id="csumb">
                <img src="img/Cal-State-Monterey-Bay.jpg" width="100" height="50" alt="csumb logo" />
            </figure>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>
