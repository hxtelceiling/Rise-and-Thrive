<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>R&T 2.0</title>
        <link rel="icon" href="img/R&T.png" type="image/icon type">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="style.css">
    </head>

<body>

    <section id="header" class="section-p1">
        <div class="navbar">
            <a class ="logo" href="#"><img src="img/R&T.png" class="logo" alt="" /></a>
            <ul class="links">
            <li><a class="active" href="hero">Home</a></li>
            <li><a href="products">Products</a></li>
            <li><a href="courses">Courses</a></li>
            <li><a href="contacts">Contacts</a></li>
            </ul>
            <a href="#" class="action_btn">Sign-in</a>
            <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="hero">Home</a></li>
            <li><a href="products">Products</a></li>
            <li><a href="courses">Courses</a></li>
            <li><a href="contacts">Contacts</a></li>
            <li><a href="#" class="action_btn">Sign-in</a></li>
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
            <div class="slider-nav">
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

            <div class="buttons">
            <button id="b1" class="normal">Button 1</button>
            <button id="b2" class="normal">Button 2</button>
        </div>
        </article>

    </section>

    <section id="main-content">
        <article class="main-description">
            <h2>What does Rise & Thrive do?</h2>
            <p>R&T is a website that aims to lend a hand to marginalized groups in the Philippines; namely the indigenous people or ‘katutubo,’ inmates, and women. Lorem ipsum dolor sit amet consectetur. Interdum sed quam turpis integer dictum fermentum tristique ultrices amet. Ut tortor risus proin ut nulla feugiat risus a. Et fermentum odio donec.</p>
        </article>

        <div class="slider-main">
            <div class="list-main">
                <div class="item-main">
                    <img src="img/1.jpg" alt="" />
                </div>
                <div class="item-main">
                    <img src="img/2.jpg" alt="" />
                </div>
                <div class="item-main">
                    <img src="img/3.jpg" alt="" />
                </div>
            </div>

            <!-- button prev and next -->
            <div class="slider-nav-main">
                <button id="prev-main"><</button>
                <button id="next-main">></button>
            </div>

            <!-- dots (if 3 items => 3 dots )-->

            <ul class="dots-main">
                <li class="active-main"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </section>

    <script>
      const toggleBtn = document.querySelector(".toggle_btn");
      const toggleBtnIcon = document.querySelector(".toggle_btn i");
      const dropDownMenu = document.querySelector(".dropdown_menu");

      toggleBtn.onclick = function () {
        dropDownMenu.classList.toggle("open");
        const isOpen = dropDownMenu.classList.contains("open");

        toggleBtnIcon.classList = isOpen
          ? "fa-solid fa-xmark"
          : "fa-solid fa-bars";
      };
    </script>
    <script src="slider.js"></script>
</body>

</html>