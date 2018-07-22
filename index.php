<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link rel="stylesheet" href="css/style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   

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
    
   <header class="header">
            <img src="img/web1.jpg" class="head__logo" alt="logo">
            <img src="img/web2.jpg" class="head__banner" alt="banner">
            
            
            
            
            



        </header>
   
    <div class="container">

        <!-- HEADER SECTION CONTAINING THE BANNER AND LOGO -->



        

        <!-- TOP NAVIGATION -->
        
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><button class="basket_icon"><img src="img/basket.png"  alt="basket logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About Us</a></li>
                    
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#"> </button></a></li>
                   


                </ul>
                <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                 
            </div>
        </nav>
        










        <!-- SIDE NAVIGATION -->

        <div class="content">
            <nav class="sidebar">
                <ul class="side-nav ">

                    <li class="side-nav__item side-nav__item-prio">
                        <a href="#" class="side-nav__link">
                            <span>
                                Academic
                            </span>
                        </a>
                    </li>
                    <div class="dropdown ">
                    <button class="dropdown-btn side-nav__link">
                        <span> Engineering</span>
                        
                    </button>
                    <div class="dropdown-container">
                        <a class="sbdrop" id="click" href="#">CSE</a>
                        <a class="sbdrop" id="click2" href="#">EEE</a>
                        <a class="sbdrop" href="#">Mechanical</a>
                    </div>
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

                <div class='roow'>




                  <div id="try">
                    <center style="margin-top:80px" >  <h2>WELCOME</h2> </center>
                    <center>  <p>To OBOSOR</p> </center>
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
