<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
    <h1><a href="final.php">Quiban's Department Store</a></h1>
        <nav>
            <ul>
                <li><a href="final.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="">Switch</a></li>
            </ul>
        </nav>
    </header>
    
    <div id="wrapper">
    <main>
        <h2>About Us</h2>
        <img class="right" src="images/store.jpg" alt="Store">
        <p> Quiban's Department Store was founded on December 2022 by Jose C. Quiban
            a retired U.S Navy that was his dream ever since to have his own store. Quiban's Store
            gives you an assurance of a good service and easy access to shop.
        </p>
    </main>

    <aside>
        <h2>Store Location</h2>
        <h3>Manila East Road, cor M.L. Quezon St, Angono, 
            1930 Rizal, Philippines</h3>
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