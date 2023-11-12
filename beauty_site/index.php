<?php
include "../beauty_admin_panel/extra/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imgs/a.jpg">
    <link rel="stylesheet" href="custom/custom.css">
    <link rel="stylesheet" href="bts/css/bootstrap.min.css">
    <script src="bts/fa/css/all.min.css"></script>
    <script src="bts/js/jquery-3.6.0.js"></script>
    <script src="bts/js/bootstrap.min.js"></script>
    <script src="bts/fa/js/all.min.js"></script>
    <title>Home</title>
</head>

<body>
  <?php
include "include/header.php";
  ?>
    <!-----Nail Art Services-->
   
    <main>

        <div class="container-fluid main_first">
            <div class="row">
                <a style="text-decoration: none;" href="services.php">
                    <div class="col-md-12 ">
                        <h1 class="studio_services">Nail Art Services</h1>
                    </div>


                    <div class="col-md-12">
                        <p class="services_para">Pick a pedicure that will give the right amount of love and attention
                            to your feet.
                            Our pedicures start with a soak in spearmint and eucalyptus crystals, and they also include\
                            a sugar scrub and hot stone massage. At the end of your service, you get to take home the
                            foot file,
                            nail file and buffer or we will throw it away.
                        </p>
                    </div>
                        <div class="container  "  style="margin:auto">
                         <div class="row">
                    
                    <?php 
                        $result=mysqli_query($connect,"SELECT * FROM services LIMIT 4");
                         while($row=mysqli_fetch_Array($result))  {
                        ?>

                    <div class=" col-md-3    Services">
                        <div class="inner_services">
                            <a href="services.html"> <img src="../beauty_admin_panel/<?php echo $row['image'];  ?>" alt=""></a>
                            <h1 class="inner_services_h1"> <a class="inner_services_h1_a" href="services.html"> <?php echo $row['name'];  ?></a> </h1>
                            <a href="services.html">
                                <h1 class="inner_services_h2"><?php echo $row['price'];  ?></h1>
                            </a>
                        </div>
                    </div>

                   <?php } ?>
                   </div>
                   </div>
                </a>

            </div>
        </div>
                    

        <!----about studio-->
        <div class="container mb-2">
            <div class="row mt-5">
                <div class="col-md-8 offset-md-2">
                    <div class="about_studio">
                        <h1>About Studio</h1>
                        <div class="row about_studio_para ">
                            <div class="col-md-4 offset-md-2 mt-5">
                                <p class="text-justify">We opened our nail art studio in far east El Paso with the goal
                                    of being the place to get amazing nails
                                    . We wouldn’t be the studio that we are now, if not for the amazing nail artists
                                    that work with us.
                                    We have three types of artists at our nail art studio: Junior, House or Advanced
                                    nail artists.

                                </p>
                            </div>
                            <div class="col-md-4 mt-5">
                                <p class="text-justify"> We are very lucky to have two certified nail art educators
                                    working at at our studio.
                                    They help us grow as a studio by sharing their knowledge and encouraging our nail
                                    artists to learn from each other.
                                    We are all about nails and pedicures but offer other beauty services to our guests.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 offset-md-6">
                                <a class="Deluxe_Manicure_btn" href="about_us.html">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----Deluxe Manicure-->
        <section>
            <div class="container-fluid Deluxe_Manicure">
                <div class="container">
                    <div class="row bg-white ">
                        <img class="col-md-4" style="padding: 0px 0px 0px 0px;" src="imgs/v.jpg" alt="">
                        <div class="col-md-8">
                            <div class="row Deluxe_Manicure_txt p-2 ">
                                <div class="col-md-6 ">
                                    <h1 style="color: #CD825B; font-family: Arial, Helvetica, sans-serif;">Deluxe
                                        Manicure</h1>
                                    <p style="line-height: 40px;  font-family: Arial, Helvetica, sans-serif;">
                                        All nail artists that work at our studio vary by experience, generally they have
                                        been doing at least 1 year doing nails. Working from our studio they learn from
                                        other nail artists and have an opportunity develop as artists.House artists more
                                        experience doing nails and nail art. To be considered house
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p style="line-height: 40px;  font-family: Arial, Helvetica, sans-serif;">
                                        nail artists you must have demonstrated your ability to do amazing nails must
                                        take completed nail art classes to sharpen their skills.Advanced Nail Artists
                                        must have experience doing amazing nails and the skill to work with many types
                                        of nail products, along with certifications for the products that they use.
                                        <br> <a class="Deluxe_Manicure_btn" style="text-decoration: none; color: white;"
                                            href="">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!----needs-->
        <section>
            <div class="container-fluid needs">
                <div class="container p-5">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 style="color: #CD825B;">What Do You Need?</h1>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li><a href="services.php">Manicures</a></li>
                                <li><a href="services.php">Acrylic Nails</a></li>
                                <li><a href="services.php">Gel Nails</a></li>
                                <li><a href="services.php">Pedicure</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <p class="need_para">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.
                            </p>
                            <a class="Deluxe_Manicure_btn" style="text-decoration: none; color: white;"
                                href="contact_us.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---our team-->
        <section>
            <div class="container-fluid pt-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-md-1">
                            <h1 style="color: #CD825B; font-size:50px; font-family: Arial, Helvetica, sans-serif;">Our
                                Team</h1>
                        </div>
                        <div class="col-md-5 offset-md-2">
                            <p style="font-family: Arial, Helvetica, sans-serif;">Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 ">
                    <div class="col-md-3">
                        <img class="w-100" src="imgs/b.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="w-100" src="imgs/c.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="w-100" src="imgs/d.jpg" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="w-100" src="imgs/e.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--footer-->
    <?php
include "include/footer.php";
?>
</body>

</html>