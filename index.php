<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link type="text/css" rel="stylesheet" href="lib/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="lib/css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">


    <title>Stamps Collection</title>

    <style>
        body {
            background-color: grey;
        }

        img {
            max-width: 15vw;
            min-width: 15vw;
            max-height: 15vw;
            min-height: 15vw;
            border: 5px solid gray;
            border-style: ridge;
            margin: 3px;
        }

        .main-header {
            background: url('./images/i1.png');
            background-size: cover;
            background-position: center;
            height: 95vh;
            min-height: 100px;
            color: #fff;
            position: relative;
            z-index: 1;
        }

        .tabs {
            color: black;
        }

        a {
            color: black;
        }

        table,
        .container {
            background-color: white;
            color: black;
        }

        .container {
            padding: 15px;
        }

        .basex {
            position: absolute;
            left: 300px;
            top: 300px;
            min-width: 15vw;
            max-width: 15vw;
            max-height: 35vh;
            min-height: 35vh;
            background: url('./images/base.jpg');
            background-size: cover;
            background-position: center;

        }



        .images {
            position: absolute;
            min-width: 10vw;
            max-width: 10vw;
            max-height: 20vh;
            min-height: 20vh;

            border-style: dashed;

            top: 1%;
            left: 58%;

        }

        .quotes {
            position: absolute;
            left: 70%;
            top: 1%;
            color: black;
            font-family: 'Parisienne', cursive;

        }

        .small {
            display: none;
        }


        @media (max-width: 600px) {
            .main-header {
                height: 50vh;
            }

            .small {
                display: inline-block;
            }

            .quotes {
                position: absolute;
                left: 10%;
                top: 40%;
                color: black;
                font-family: 'Parisienne', cursive;
                font-size: 10px;

            }

            .images {
                position: absolute;
                min-width: 30vw;
                max-width: 30vw;
                max-height: 20vh;
                min-height: 20vh;

                border-style: dashed;

                top: 1%;
                left: 68%;

            }


        }
    </style>

</head>




<body id="home" class="scrollspy">

    <nav class="black">
        <div style="padding-left:100px;">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">
                    <span>

                        <i class="material-icons">flag</i></span>


                    <span>USA Presidents</span>

                </a>
                <a href="#" data-activates="side-nav" class="button-collapse show-on-small right">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li class="active">
                        <a href="index.php" activated>Dashboard</a>
                    </li>
                    <li>
                        <a href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                </ul>
                <!-- Side nav -->
                <ul id="side-nav" class="side-nav">
                    <li>
                        <div class="user-view">
                            <div class="background">

                                <div class="col s12 m12">
                                    <img src="images/eagle.jpg" style="min-width:58vw; min-height:30vh;" width="100%" alt="" title="">
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>

                            <a href="#">
                                <span class="name red-text">Stamps Collection</span>
                            </a>
                            <a href="#">
                                <span class="email red-text">stamps@gmail.com</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="#dashboard">
                            <i class="material-icons">home</i>Dashboard</a>
                    </li>

                    <li>
                        <a href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="main-header">
        <div class="base">
            <img id="base" src="./images/eagle.jpg" class="images" />
        </div>

        <div class="quotes">
            <h5 id="quote">Let's see What the presidents said ...</h5>
            <div>
    </section>


    <section id="dashboard">

        <br>
        <div class="container" style="overflow:scroll;">
            <div class="col s3 m3"><a href="./pages/addstamp.php" class="btn green"> Add New </a></div>
            <br>
            <?php
            include  'connection.php';
            ?>


        </div>


        <!--- Tabs -->
        <div>

            <div class="black" style="padding: 2px;">

                <h2 class="text center white-text">Gallery</h2>

            </div>
            <br>
            <br>

            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s2"><a class="black-text" href="#tab1">1789-1841</a></li>
                        <li class="tab col s2"><a class="black-text" href="#tab2">1841-1865</a></li>
                        <li class="tab col s2"><a class="black-text" href="#tab3">1865-1897</a></li>
                        <li class="tab col s2"><a class="black-text" href="#tab4">1897-1945</a></li>
                        <li class="tab col s2"><a class="black-text" href="#tab5">1945-1989</a></li>
                        <li class="tab col s2"><a class="black-text" href="#tab6">1989-2019</a></li>
                    </ul>


                    <section id="gallery" class="section-gallery scrollspy">
                        <div style="border: 3px solid gray; overflow:hidden;padding:3px;">

                            <div id="tab1" class="col s12">

                                <div class="row">

                                    <h5 class="text center">
                                        <strong>Presidents of the United State of America</strong>
                                        <br>
                                        <span> <strong>1789 - 1841 </strong></span>
                                    </h5>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp1.jpg" title="George Washington">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp02.jpg" title="John Adam">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp03.jpg" title="Thomas Jefferson">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp4.jpg" title="James Madison">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp05.jpg" title="James Monroe">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp06.jpg" title="John Quincy Adams">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp07.jpg" title="Andrew Jackson">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp08.jpg" title="Martin Van Buren">
                                    </div>
                                </div>

                            </div>
                            <div id="tab2" class="col s12">
                                <div class="row">

                                    <h5 class="text center">
                                        <strong>Presidents of the United State of America</strong>
                                        <br>
                                        <span> <strong>1841 - 1865 </strong></span>
                                    </h5>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp09.jpg" title="william Henry Harrison">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp10.jpg" title="John Tyler">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp11.jpg" title="James Polk">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp12.jpg" title="Zachary Taylor">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp13.jpg" title="Millard Fillmore">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp14.jpg" title="Franklin Pierce">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp15.jpg" title="James Buchnan">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp16.jpg" title="Abraham Lincoln">
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="col s12">
                                <div class="row">
                                    <h5 class="text center">
                                        <strong>Presidents of the United State of America</strong>
                                        <br>
                                        <span> <strong>1865 - 1897 </strong></span>
                                    </h5>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp17.jpg" title="Andrew Johnson">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp18.jpg" title="UlyssesS. Grant">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp19.jpg" title="Rutherfor B. Hayes">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp20.jpg" title="James Abram Garfield">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp21.jpg" title="Chester Alan Arthur">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp22.jpg" title="Grover Cleveland">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp23.jpg" title="Benjamin Harrison">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp24.jpg" title="Grover Cleveland">
                                    </div>
                                </div>
                            </div>

                            <div id="tab4" class="col s12">
                                <div class="row">
                                    <h5 class="text center">
                                        <strong>Presidents of the United State of America</strong>
                                        <br>
                                        <span> <strong>1897 - 1945 </strong></span>
                                    </h5>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp26.jpg" title="Theodore Roosevelt">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp27.jpg" title="William Howard Taft">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp28.jpg" title="Woodrow (Thomas) Wilson">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp26.jpg" title="Theodore Roosevelt">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp29.jpg" title="Warren Gamaliel Harding">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp30.jpg" title="Calvin (John) Coolidge">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp31.jpg" title="Hebert Clark Hoover">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp32.jpg" title="Franklin Delano Roosevelt">
                                    </div>
                                </div>
                            </div>

                            <div id="tab5" class="col s12">
                                <div class="row">
                                    <h5 class="text center">
                                        <strong>Presidents of the United State of America</strong>
                                        <br>
                                        <span> <strong>1945 - 1989 </strong></span>
                                    </h5>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp33.jpg" title="Harry S. Truman">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp34.jpg" title="Dwight (David) Eisenhower">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp35.jpg" title="John Fitzgerald Kennedy">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp36.jpg" title="Lyndon Baines Johnson">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp37.jpg" title="Richard Milhouse Nixon">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp38.jpg" title="Gerald Rudolph Ford">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp39.jpg" title="Jimmy Carter">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp40.jpg" title="Ronald Reagan">
                                    </div>
                                </div>
                            </div>
                            <div id="tab6" class="col s12">
                                <div class="row">
                                    <h5 class="text center">
                                        <strong>Presidents of the United State of America</strong>
                                        <br>
                                        <span> <strong>1989- 2019 </strong></span>
                                    </h5>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp41.jpg" title="George Herber Walker Bush">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp42.jpg" title="Bill Clinton">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp43.jpg" title="Geore W Bush">
                                    </div>
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp44.jpg" title="Barack Obama">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m3">
                                        <img class="materialboxed responsive-img" src="./images/stamp45.jpg" title="Donal Trump">
                                    </div>
                                   
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>






        <!-- Section: Follow-->
        <section class="section section-follow black darken-2 white-text center">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h4>Follow Us</h4>
                        <p>Follow us in social media</p>
                        <a href="https://www.facebook.com/" target=" _blank " class="black-text ">
                            <i class="fab fa-facebook fa-4x "></i>
                        </a>
                        <a href="https://twitter.com " target="_blank " class="black-text ">
                            <i class="fab fa-twitter fa-4x "></i>
                        </a>
                        <a href="https://linkedin.com " target="_blank " class="black-text ">
                            <i class="fab fa-linkedin fa-4x "></i>
                        </a>
                        <a href="https://googleplus.com " target="_blank " class="black-text ">
                            <i class="fab fa-google-plus fa-4x "></i>
                        </a>
                        <a href="https://pinterest.com " target="_blank " class="black-text ">
                            <i class="fab fa-pinterest fa-4x "></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: About -->
        <section id="about" class="section section-about grey lighten-3 center scrollspy">
            <div class="container">
                <h2>About Stamps Collection</h2>
                <p class="flow-text">Stamps Collection </p>
                <div class="row">
                    <div class="col s12 m6">
                        <img src="./images/usa.jpg" alt="" class="responsive-img circle">
                        <h4 class="blue-text"></h4>
                    </div>

                    <div class="col s12 m6">
                        <div class="parrafo">
                            <h3>Welcome :)</h3>
                            <em>
                                <strong>Stamps Collection</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                                accusantium
                                repudiandae architecto sequi, amet aliquid!
                            </em>
                            <br><br>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum accusamus error numquam pariatur
                                quidem, provident sequi cum culpa eveniet atque alias beatae dolorem rem aliquid eum nisi repellat
                                vitae
                                quibusdam unde labore eaque esse accusantium? Repellat, dolorum illo fuga voluptates neque inventore
                                eos
                                officiis porro, velit adipisci natus aliquid facere!
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci fugit eligendi architecto hic
                                reiciendis quaerat ullam dolores aliquid facilis, incidunt ab dignissimos? Non, doloremque asperiores
                                ad
                                debitis pariatur cumque dolorem! Tempore, hic similique. Voluptates sunt nisi non, et veritatis quam
                                consectetur aperiam eos nesciunt dolorum accusantium, in, aut doloremque repellendus?
                            </p>
                            <aside>
                                <blockquote>Denis Sanchez Leyva</blockquote>
                            </aside>



                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="col s12 m6">
                        <img src="./images/stamp02.jpg" alt="" class="responsive-img">
                        <img src="./images/stamp03.jpg" alt="" class="responsive-img circle">
                    </div>
                    <div class="col s12 m6">
                        <img src="./images/stamp16.jpg" class="responsive-img" alt="">
                    </div>
                </div>
    -->
        </section>





        <!-- Section: Contact-->

        <section id="contact" class="section section-contact scrollspy">

            <div class="container">
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card-panel black white-text center">
                            <i class="material-icons medium">email</i>
                            <h5>Contact</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias dolores libero magnam quas
                                exercitationem accusantium.</p>
                        </div>
                        <ul class="collection with header">
                            <li class="collection-header">
                                <h4>Location</h4>
                            </li>
                            <li class="colletion-item">Stamps Collection</li>
                            <li class="colletion-item">Address:</li>
                            <li class="colletion-item">Doral</li>
                            <li class="colletion-item">Phone: 786-122-5696 </li>
                            <li class="colletion-item">Email: Stamps Collection@gmail.com</li>
                            <li class="colletion-item">Miami Dade.33176</li>
                        </ul>
                    </div>
                    <div class="col s12 m6">
                        <div class="card-panel grey lighten-3">
                            <h5>Please fill this form bellow</h5>

                            <form id="form" action="">
                                <div class="input-field">
                                    <input type="text" placeholder="Nombre" id="name" value=''>
                                    <label for="name" id="name">Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="email" placeholder="Email" id="email">
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Telefono" id="phone">
                                    <label for="phone">Phone</label>
                                </div>

                                <div class="input-field">
                                    <textarea placeholder="Enter Mensaje " id="message"> </textarea>
                                    <label for="message">Message</label>
                                </div>

                                <input type="submit" value="Submit" class="btn blue" id="btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include('./includes/Footer.php') ?>

        <?php include('./includes/Fab.php') ?>



        <script type="text/javascript" src="showpictures.js">
            <!--Import jQuery before materialize.js-->
            <
            script type = "text/javascript"
            src = "https://code.jquery.com/jquery-3.2.1.min.js" >
        </script>
        <script type="text/javascript" src="lib/js/materialize.min.js"></script>
        <!-- Compiled and minified JavaScript -->

        <script>
            // Hide Sections
            $('.section').hide();

            setTimeout(function() {
                $(document).ready(function() {

                    //Init Tabs
                    $('.tabs').tabs();



                    /*
                    // just to show the map
                    */

                    // Init Sidenav
                    $('.button-collapse').sideNav();

                    // Init Scrollspy
                    $('.scrollspy').scrollSpy();

                    // Init Corousel
                    $('.carousel').carousel();

                    // ScrollFire
                    const options = [{
                            selector: '.main-text',
                            offset: 0,
                            callback: function(el) {
                                Materialize.fadeInImage($(el));
                            }
                        },
                        {
                            selector: '.navbar-fixed',
                            offset: 1500,
                            callback: function() {
                                $('nav').removeClass('transparent');
                                $('nav').addClass('blue-grey darken-3');
                            }
                        }
                    ];



                    // Init Side Nave
                    $('.button-collapse').sideNav();

                    // Init Slider
                    $('.slider').slider({
                        indicators: false,
                        height: 500,
                        transition: 500,
                        interval: 6000
                    });




                    // Show sections
                    $('.section').fadeIn();

                    // Hide preloader
                    $('.loader').fadeOut();

                    //Init Side nav
                    $('.button-collapse').sideNav();

                    //Init Modal
                    $('.modal').modal();

                    //Init Select
                    $('select').material_select();




                });

            }, 1000);
        </script>



</body>

</html>