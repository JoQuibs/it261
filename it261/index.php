<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiban Portal</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
    <h1><a href="index.php">Quiban's Portal Page</a></h1>
        <nav>
            <ul>
                <li><a href="./website/daily.php">Switch</a></li>
                <li><a href="./website/adder.php">Troubleshoot</a></li>
                <li><a href="weeks/week5/calculator2.php">Calculator</a></li>
                <li><a href="./website/contact.php">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="./website/gallery.php">Gallery</a></li>
            </ul>
        </nav>
    </header>
    
    <div id="wrapper">
    <main>
        <h2>About Me</h2>
        <img class="right" src="images/me.png" alt="Joms">
        <p>Hi! My name is Jomar P. Quiban, I am a student of
            Seattle Central College and currently under the AAS-T
            Web Development program. Hopefully when I finish my 
            associate's degree I would like to continue my bachelor's degree
            while taking the U.S AirForce ROTC program. During my free time, I 
            usually workout at the gym and play sports such as basketball. I also
            play computer games if the weather is bad to go out and have fun. Coffee
            is my remedy for my stress and helpful for me studying.
        </p>
        <img class="mamp1" src="images/SS.png" alt="HW">
        <img class="mamp" src="images/SS1.png" alt="HW">
    </main>

    <aside>
        <h2>Weekly Class Exercise</h2>
        <h3>Week 2</h3>
        <ol>
            <li><a href="weeks/week2/var.php">var.php</a></li>
            <li><a href="weeks/week2/var2.php">var2.php</a></li>
            <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
            <li><a href="weeks/week2/currency.php">currency.php</a></li>
            <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
        </ol>
        <h3>Week 3</h3>
        <ol>
            <li><a href="weeks/week3/if.php">if.php</a></li>
            <li><a href="weeks/week3/date.php">date.php</a></li>
            <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
            <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
            <li><a href="weeks/week3/switch.php">switch.php</a></li>
            <li><a href="weeks/week3/index.php">index.php</a></li>
        </ol>
        <h3>Week 4</h3>
        <ol>
            <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
            <li><a href="weeks/week4/form1.php">form1.php</a></li>
            <li><a href="weeks/week4/form2.php">form2.php</a></li>
            <li><a href="weeks/week4/form3.php">form3.php</a></li>
            <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
            <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
        </ol>
        <h3>Week 5</h3>
        <ol>
            <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
            <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
            <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
            <li><a href="weeks/week5/null.php">null.php</a></li>
        </ol>
        <h3>Week 6</h3>
        <ol>
            <li><a href="weeks/week6/form.php">form.php</a></li>
            <li><a href="weeks/week6/form2.php">form2.php</a></li>
            <li><a href="weeks/week6/functions.php">functions.php</a></li>
            <li><a href="weeks/week6/thx.php">thx.php</a></li>
        </ol>
        <h3>Week 7</h3>
        <ol>
            <li><a href="weeks/week7/form3.php">form3.php</a></li>
            <li><a href="weeks/week7/strings.php">strings.php</a></li>
            <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
            <li><a href="weeks/week7/rand.php">rand.php</a></li>
        </ol>
        <h3>Week 8</h3>
        <ol>
            <li><a href="weeks/week8/people.php">people.php</a></li>
            <li><a href="weeks/week8/config.php">config.php</a></li>
            <li><a href="weeks/week8/credentials.php">credentials.php</a></li>
        </ol>
        <h3>Week 9</h3>
        <ol>
            <li><a href="weeks/week9/server.php">server.php</a></li>
            <li><a href="weeks/week9/login.php">login.php</a></li>
            <li><a href="weeks/week9/server.php">server.php</a></li>
            <li><a href="weeks/week9/config.php">config.php</a></li>
            <li><a href="weeks/week9/credentials.php">credentials.php</a></li>
        </ol>
    </aside>
    </div>
    <footer>

        <ul>
            <li>Copyright &copy;
                2022</li>
            <li>All Rights Reserved</li>
            <li><a href="./index.php">Web Design by Jomar Quiban</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
            
            <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
    </footer>
</body>
</html>