<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
     .video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(30%); /* Makes sure the video covers the entire area */
      z-index: -1; /* Sends video to the background */
    }
    .content {
      position: relative;
      z-index: 1;
      color: white;
      text-align: center;
      padding: 50px;
    }
  </style>
</head>
<body>
    
  <!-- Video element (autoplay, muted, loop) -->
  <video class="video-background" autoplay muted loop>
    <source src="VID/9bb4c4948ada609a432ed0c8b37119a8.mp4" type="video/mp4" style="filter: brightness(10%);">
    <!-- Your browser does not support the video tag. -->
  </video>

  <!-- Content overlay -->
  <div class="content">
    <h1>Welcome
      
<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
// $zip = $_POST['zip'];

$degree = $_POST['degree'];
$university = $_POST['university'];
$graduationDate = $_POST['graduationDate'];

$jobTitle = $_POST['jobTitle'];
$company = $_POST['company'];
$employmentDate = $_POST['employmentDate'];

$jobTitles = $_POST['jobTitles'];
$companys = $_POST['companys'];
$employmentDates = $_POST['employmentDates'];

$jobTitless = $_POST['jobTitless'];
$companyss = $_POST['companyss'];
$employmentDatess = $_POST['employmentDatess'];

$jobTitlesss = $_POST['jobTitlesss'];
$companysss = $_POST['companysss'];
$employmentDatesss = $_POST['employmentDatesss'];

$skills = $_POST['skills'];

echo " $firstName\n";
echo " $lastName\n";
?>
      
  </h1>
    <p><?php
    echo "Email: $email\n"; ?><br>
   <?php echo "Phone: $phone\n"; ?>
   </p>
    
  </div>
    <hr style="width: 100%; height: 10px; ">

    <div class="container text-center">
      <div class="row align-items-center">
        <div class="col-lg-3">
          
        </div>
        <div class="col-lg-6">
          <div class="card" style="width: 38rem;" style="border: ; border-radius: 80px 80px 80px 80px;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <!-- <h4 style="text-align: left; margin-left: 20px;" class="ml-5">Personal ifo</h4> -->
            <div class="card-body">
      
<h2 style=" text-align: left;"><b>Skills</b></h2>
            <div class="row">
                    <div class="col" style="font-size: x-large; text-align: left;">
                      <span style="font-size:20px;"><b>Skills</b></span>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo "$skills\n";
                      ?>
                     </div>
                  </div>
            <br>
            <h2 style=" text-align: left;">Personal Data</h2>
            <div class="row">
                    <div class="col" style="text-align: left; font-size: large;">
                   <b>   First Name</b>
                        </div>
                    <div class="col" style="text-align: left; font-size: large;">
                    <?php
                        echo " $firstName\n";
                      ?>
                     </div>
                  </div>
                
            <div class="row">
                    <div class="col"style="text-align: left; font-size: large;">
                      <b>last Name</b>
                        </div>
                    <div class="col" style="font-size: large; text-align: left
                    ;">
                    <?php
                        echo " $lastName\n";
                      ?>
                     </div>
                  </div>
            <!-- <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                     Email
                        </div>
                    <div class="col" style="font-size: large; text-align: right;">
                    <?php
                        echo " $email\n";
                      ?>
                     </div>
                  </div> -->
            <!-- <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                     phone number
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo " $phone\n";
                      ?>
                     </div>
                  </div> -->
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <b>  House Address</b>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo " $address\n";
                      ?>
                     </div>
                  </div>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                      <b>City</b>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                      echo "$city\n";
                      ?>
                     </div>
                  </div>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <b> State</b>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo " $state\n";
                      ?>
                     </div>
                  </div>
<br>
                  <h2 style=" text-align: left;"><b>Education</b></h2>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                      <b>Degree</b>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                       echo " $degree\n";
                      ?>
                     </div>
                  </div>
                
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                 <b> University</b>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo "$university\n";
                      ?>
                     </div>
                  </div>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <b>  Graduation Date</b>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo "$graduationDate\n";
                      ?>
                     </div>
                  </div>
            
                
                 
         <br>
         <!-- Work Experiences start here -->
                <h2 style="text-align: left;"><b>Work Experiences</b></h2>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <!-- <b> Company</b> -->
                    <?php
                        echo  "Company:  $company\n";
                      ?>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">

                     </div>
                     
                    <div class="col" style="font-size: large; text-align: left;">
                    <!-- <?php
                       echo "$employmentDate\n";
                      ?> -->
                  </div>
                  </div>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo " Post Held : $jobTitle\n";
                      ?>
                  </div>
                   <!-- <b>Post Held</b> -->
                        </div>
                   
                  <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo "$employmentDate\n";
                      ?>
                     </div>
                </div>
           
                  <br>
                <!-- <h2 style="text-align: left;"><b>Work Experiences</b></h2> -->
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo " Company: $companys\n";
                      ?>
                       <!-- <b>Company</b> -->
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                   
                     </div>
                     <div class="col" style="font-size: large; text-align: left;">
               
                        </div>
                  </div>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                       echo "Post Held: $jobTitles\n";
                      ?>
                    <!-- <b> Post Held</b> -->
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                         <?php
                        echo "$employmentDates\n";
                      ?>
                     </div>
                    
                  </div>
            <div class="row">
                   
                   
                  </div>
                  <br>
                
                <!-- <h2 style="text-align: left;"><b>Work Experiences</b></h2> -->
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo "Company: $companyss\n";
                      ?>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    
                  
                    
                     </div>
                     <div class="col" style="font-size: large; text-align: left;">
                    <!-- <?php
                        echo "$employmentDate\n";
                      ?> -->
                     </div>
                  </div>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <?php
                       echo"Post Held: $jobTitless\n";
                      ?>
                   
                     </div>
                     <div class="col" style="font-size: large; text-align: left;">
                     <?php
                        echo "$employmentDate\n";
                      ?>
                     </div>
                  </div>
            <div class="row ">
                    <div class="col" style="font-size: large; text-align: left;">
                   <!-- <b> Employment Date</b> -->
                        </div>
                   
                  </div>
              <br> 
                <!-- <h2 style="text-align: left;"><b>Work Experiences</b></h2> -->
            <div class="row">
            <div class="col" style="font-size: large; text-align: left;">
            <?php
                         echo "Company: $companysss\n"; 
                      ?>
                        </div>
                    <div class="col" style="font-size: large; text-align: left;">
                    
                     </div>
                     <div class="col" style="font-size: large; text-align: left;">
                   <!-- <b> Employment Date</b> -->
                        </div>
                  </div>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                    <!-- <b></b> -->
                    <?php
                     echo "Post Held: $jobTitlesss\n";
                      ?>
                        
                   
                     </div>
                     <div class="col" style="font-size: large; text-align: left;">
                    <?php
                        echo "$employmentDatesss\n";
                      ?>
                     </div>
                  </div>
            <div class="row">
                    <div class="col" style="font-size: large; text-align: left;">
                   <!-- <b> Employment Date</b> -->
                        </div>
                  
                  </div>


<!-- work Experiences stop here  -->



                </div>
                
                 </div>
          </div>
        </div>
        <div class="col-lg-3">
          
        </div>
      </div>
    </div>



<br>
   
<br><br><br>
   









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>