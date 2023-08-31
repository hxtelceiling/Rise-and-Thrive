<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>R&T 2.0</title>
        <link rel="icon" href="img/R&T.png" type="image/icon type">
        <link rel="stylesheet" href="style.css">
    </head>

<body>

    <section id="header" class="section-p1">
        <a href="#"><img src="img/R&T.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
        </div>
        <div class="sign-in">
        <a href="login.php"><button class="white">Sign in</button></a>
        </div>
    </section>
        
    <section id="hero">
        <div class="slider">
            <div class="list">
                <div class="item">
                    <img src="img/1.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="img/2.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="img/3.jpg" alt="" />
                </div>
                <div class="item">
                    <img src="img/4.jpg" alt="" />
                </div>
            </div>

            <!-- button prev and next -->
            <div class="buttons">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>

            <!-- dots (if 4 items => 4 dots )-->

            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        <article class="description">
            <h3>Get to know our...</h3>
            <h2>Katutubo</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Interdum sed quam turpis integer dictum fermentum tristique ultrices amet. Ut tortor risus proin ut nulla feugiat risus a. Et fermentum odio donec.</p>
        </article>

    </section>
    <script src="slider.js"></script>
</body>

</html>