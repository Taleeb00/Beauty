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
    <title>Contact Us</title>
</head>

<body>
<?php
include "include/header.php";
  ?>
    <!---Contact us-->
    <section>
        <div class="container contact_us pt-5 pb-5" >
         <?php
         $result=mysqli_query($connect,"SELECT * FROM contact_us");
         $row=mysqli_fetch_Array($result);
         ?>
            <div class="row ">
                <div class="col-md-3 offset-md-1  ">
               <div class="row " style="align-items:center" >
               <i class="fa fa-home "  aria-hidden="true" style="font-size:40px"></i>
                <h1 class="ml-2" style="    color: #CD825B">Address</h1>
               </div>
                <p style="margin-left:30px" ><?php echo $row['address'] ?></p>
                </div>

                <div class="col-md-3 offset-md-1">
               <div class="row " style="align-items:center" >
               <i class="fas fa-phone-alt"aria-hidden="true" style="font-size:40px"></i>
              
                <h1  class="ml-2" style="color: #CD825B">Phone</h1>
               </div>
                <p style="margin-left:30px" ><?php echo $row['phone'] ?></p>
                </div>

                <div class="col-md-3 offset-md-1  ">
               <div class="row " style="align-items:center" >
               <i class="fas fa-envelope" aria-hidden="true" style="font-size:40px"></i>
                <h1  class="ml-2" style="    color: #CD825B">Email</h1>
               </div>
                <p style="margin-left:30px" ><?php echo $row['email'] ?></p>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-6 ">
                    <h1 class="color">NAILS STUDIO ADDRESS</h1>
                   <div> <iframe class="w-100" style="height:300px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425289.3917375842!2d72.80590899342005!3d33.61637228136273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515c3bdb02b6!2sIslamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1645184511108!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>

                </div>
                <div class="col-md-5 offset-md-1">
                    <h1 class="color">Studio Hours</h1>
                    <table class="table table-borderless" > 
                    <thead>
                      <tr>
                        
                        <th>Day</th>
                        <th>Timing</th>
                      
                      </tr>
                    </thead>
                    <?php
                        $result=mysqli_query($connect,"SELECT * FROM contact_timing");
                      while($row=mysqli_fetch_Array($result)){ 
                    ?>

                    <tbody>
                      <tr>
                        <td><?php echo $row["day"]; ?></td>
                        <td><?php echo $row["timing"]; ?></td>
                       
                      </tr>
                      <?php } ?>
                    </tbody>
                  
                  </table>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php
include "include/footer.php";
?>
</body>

</html>