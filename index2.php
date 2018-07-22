<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">-->

    <!--<link rel="stylesheet" href="css/icon-font.css">-->

    <link rel="stylesheet" href="css/style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <title>OBOSOR | Pay less Read more</title>
    <!--try of ajax  -->
      <script>
            $(document).ready(function(){
              $("#click").click(function(){
                 $("#try").load("data.php");

              });
            });
            $(document).ready(function(){
              $("#click2").click(function(){
                 $("#try").load("eee.php");

              });
            });



      </script>

  <!-- end of ajax -->

</head>

<body>
    <div class="container">

        <!-- HEADER SECTION CONTAINING THE BANNER AND LOGO -->

        <header class="header">
            <img src="img/web1.jpg" class="head__logo" alt="logo">
            <img src="img/web2.jpg" class="head__banner" alt="banner">


        </header>

        <!-- TOP NAVIGATION -->

        <div class="topnavigation">
            <a href="#" class="top-nav__link">
                <span>
                    Home
                </span>
            </a>
            <a href="#" class="top-nav__link">
                <span>
                    Blog
                </span>
            </a>
            <a href="#" class="top-nav__link">
                <span>
                    About us
                </span>
            </a>
            <a href="#" class="top-nav__link">
                <span>
                    Request A book
                </span>
            </a>
            <a href="#" class="top-nav__link">
                <span>
                    Contact Us
                </span>
            </a>
            <form action="#" class="top-nav__input">
                <input type="text" name="search" id="8">
            </form>

        </div>




        <!-- SIDE NAVIGATION -->

        <div class="content">
            <nav class="sidebar">
                <ul class="side-nav">

                    <li class="side-nav__item side-nav__item-prio">
                        <a href="#" class="side-nav__link">
                            <span>
                                Academic
                            </span>
                        </a>
                    </li>

                    <button class="dropdown-btn side-nav__link">
                        <span> Engineering</span>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a id="click" href="#">CSE</a>
                        <a  id="click2" href="#">EEE</a>
                        <a href="#">Mechanical</a>
                    </div>

                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <span>
                                Accounting
                            </span>
                        </a>
                    </li>

                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <span>
                                Management
                            </span>
                        </a>
                    </li>

                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <span>
                                English
                            </span>
                        </a>
                    </li>

                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <span>
                                Physics
                            </span>
                        </a>
                    </li>

                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <span>
                                Chemistry
                            </span>
                        </a>
                    </li>

                    <li class="side-nav__item side-nav__item-prio">
                        <a href="#" class="side-nav__link">
                            <span>
                                Non-Academic
                            </span>
                        </a>
                    </li>

                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <span>
                                Non-fiction
                            </span>
                        </a>
                    </li>

                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <span>
                                Poetry
                            </span>
                        </a>
                    </li>

                    <li class="side-nav__item">
                        <a href="#" class="side-nav__link">
                            <span>
                                Originals
                            </span>
                        </a>
                    </li>

                </ul>
            </nav>

            <main class="products">

                <div class='row'>




                  <div id="try">

                  </div>





                </div>
                <!--  end of row-->

            </main>

            <!-- JS -->

            <script>
                /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                var dropdown = document.getElementsByClassName("dropdown-btn");
                var i;

                for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var dropdownContent = this.nextElementSibling;
                        if (dropdownContent.style.display === "block") {
                            dropdownContent.style.display = "none";
                        } else {
                            dropdownContent.style.display = "block";
                        }
                    });
                }
            </script>

        </div>




    </div>

</body>



</html>
