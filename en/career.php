<link rel="stylesheet" href="css/serv.css">
<link rel="stylesheet" href="for_servies/style.css">
    


<!DOCTYPE html>
<html>
<head>
    <title>Carrer</title>
</head>

<?php include('header-1.php');?>



    <!--Slider-->





   <!--<div class="banner_bottom">
        <div class="container">
            <h3 class="tittle-w3ls">CAREERS</h3>
            <div class="inner_sec_info_wthree_agile">
                <div class="help_full">

                    <div class="col-md-6 banner_bottom_grid help">
                        <img src="images/ab-1.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="col-md-6 banner_bottom_left">
                        <h4>APPLY HERE</h4>
                        <form method="post" enctype="multipart/form-data">
                            Enter Your Name:<input type="text" name="name"><br>
                            Enter Your Email ID:<input type="email" name="email"><br>
                            Upload Resume<input type="file" name="resume">
                           <br> <input type="submit" name="submit" value="submit">
                        </form>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
          
        </div>
    </div>-->
<div class="contact-innpage">
        <div class="container">
            <h3 class="tittle-w3layouts">CAREERS</h3>
            <div class="mail_grid_w3l">
                <form action="careermail.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 contact_left_grid" data-aos="fade-right">
                        <div class="contact-fields-w3ls">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="contact-fields-w3ls">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="contact-fields-w3ls">
                            <input type="text" name="qualification" placeholder="Qualification" required>
                        </div>
                        Upload Resume<div class="contact-fields-w3ls">
                            <input type="file" name="file" id="fileToUpload" required>
                        </div>
                    </div>
                    <div class="col-md-6 contact_left_grid" data-aos="fade-left">
                        <div class="contact-fields-w3ls">
                            <textarea name="Message" placeholder="Message..." required></textarea>
                        </div>
                        <input type="submit" value="Submit">
                    </div>
                    <div class="clearfix"> </div>

                </form>
            </div>
        </div>
    </div>

    

</body>
</html>



<?php include('footer.php');?>