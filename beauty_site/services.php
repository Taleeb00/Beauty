<?php
include "../beauty_admin_panel/extra/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom/custom.css">
    <link rel="stylesheet" href="bts/css/bootstrap.min.css">
    <script src="bts/fa/css/all.min.css"></script>
    <script src="bts/js/jquery-3.6.0.js"></script>
    <script src="bts/js/bootstrap.min.js"></script>
    <script src="bts/fa/js/all.min.js"></script>
    <title>Services</title>
</head>

<body>
<?php
include "include/header.php";
  ?>
    <!-----services-->
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
                    <div class="container  " style="margin:auto">
                        <div class="row">

                            <?php 
                        $result=mysqli_query($connect,"SELECT * FROM services");
                         while($row=mysqli_fetch_Array($result))  {
                        ?>
                            <a data-toggle="modal" data-target="#mymodal" href="">
                                <div class=" col-md-3    Services">
                                    <div class="inner_services">
                                        <a href="services.php"> <img
                                                src="../beauty_admin_panel/<?php echo $row['image'];  ?>" alt=""></a>
                                        <h1 class="inner_services_h1"> <a class="inner_services_h1_a"
                                                href="services.php">
                                                <?php echo $row['name'];  ?>
                                            </a> </h1>
                                        <a href="services.php">
                                            <h1 class="inner_services_h2">
                                                <?php echo $row['price'];  ?>
                                            </h1>
                                        </a>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </a>

            </div>
            <div class="modal" id="mymodal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Book now</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                    if(isset($_POST['submit'])){
                                        $name=$_POST['input_name'];
                                        $email=$_POST['input_email'];
                                        $phone=$_POST['input_phone'];
                                        $service=$_POST['input_service'];

                                        $result=mysqli_query($connect,"INSERT into book_service(name,email,phone,service) VALUES('$name','$email','$phone','$service')");
                                        
                                    }
                                    ?>
                                            <div class="modal-body">
                                                <form action="" method="POST" style="text-align: left;">
                                                    <label for="" class="form-group">Name</label>
                                                    <input class="form-control" type="text" name="input_name" id=""
                                                        placeholder="Name">
                                                    <label for="" class="form-group">Email</label>
                                                    <input class="form-control" type="email" name="input_email" id=""
                                                        placeholder="Email">
                                                    <label for="" class="form-group">Phone</label>
                                                    <input class="form-control" type="text" name="input_phone" id=""
                                                        placeholder="Contact no">
                                                    <label for="Courses" class="form-group">Service</label>
                                                    <select name="input_service"  class="form-control" id="courses">
                                                        <option value="Acrilic_Set">Acrilic Set</option>
                                                        <option value="Shellace">Shellace</option>
                                                        <option value="Skincare">Skincare</option>
                                                        <option value="Pedicure">Pedicure</option>
                                                    </select>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Submit</button>
                                                <button type="button" name="" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                              <div class="container">
                         
                              </div>
  
        </div>
         </div>
        

        <!---classes-->
        <div class="container-fluid mt-2">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <h1 class="color">Nail Art Classes At Every Level</h1>

                </div>
            </div>
            <div class="container mt-2">
                <div class="row pt-2">
                    <div class="col-md-12 " style="text-align: center;">
                        <h5 class="">Elevate your nail art skills with us</h5>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6" style="text-align: center;">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="imgs/x.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="imgs/y.webp" class="d-block w-100" alt="...">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                        <p class="mt-2" style="font-family:Arial, Helvetica, sans-serif;"> This was the last Swarovski
                            certified nail artist class that we had at D’Licous Nails Nail Art Studio.</p>
                    </div>
                    <div class="col-md-6" style="text-align:center">
                        <h1 class="color" style="font-family: Arial, Helvetica, sans-serif;">Introductory to Advanced
                            Nail Art Classes</h1>
                        <div class="row">
                            <div class="col-md-12  pb-5">
                                <p style=" font-family: Arial, Helvetica, sans-serif; line-height: 30px;"> Learn
                                    everything from the basics to advanced nail art skills at
                                    our studio. We have instructors that have taken the necessary
                                    courses to show others how to use industry leading nail art
                                    products. Advanced nail art classes are available to help you
                                    sharpen your skills. Our studio is a welcoming
                                    home for all nail artists that want to learn to do better nails.
                                </p>
                                <div class="modal" id="mymodal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Apply for Course</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php
                                    if(isset($_POST['submit'])){
                                        $name=$_POST['input_name'];
                                        $email=$_POST['input_email'];
                                        $phone=$_POST['input_phone'];
                                        $course=$_POST['input_course'];

                                        $result=mysqli_query($connect,"INSERT into apply(name,email,phoon,course) VALUES('$name','$email','$phone','$course')");
                                        
                                    }
                                    ?>
                                            <div class="modal-body">
                                                <form action="" method="POST" style="text-align: left;">
                                                    <label for="" class="form-group">Name</label>
                                                    <input class="form-control" type="text" name="input_name" id=""
                                                        placeholder="Name">
                                                    <label for="" class="form-group">Email</label>
                                                    <input class="form-control" type="email" name="input_email" id=""
                                                        placeholder="Email">
                                                    <label for="" class="form-group">Phone</label>
                                                    <input class="form-control" type="text" name="input_phone" id=""
                                                        placeholder="Contact no">
                                                    <label for="Courses" class="form-group mt-4">Select Course</label>
                                                    <select name="input_course" class="form-control" id="courses">
                                                        <option value="Acrilic_Set">Acrilic Set</option>
                                                        <option value="Shellace">Shellace</option>
                                                        <option value="Skincare">Skincare</option>
                                                        <option value="Pedicure">Pedicure</option>
                                                    </select>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Submit</button>
                                                <button type="button" name="" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a class="Deluxe_Manicure_btn" data-toggle="modal" data-target="#mymodal" href="">Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <?php
include "include/footer.php";
?>
</body>

</html>