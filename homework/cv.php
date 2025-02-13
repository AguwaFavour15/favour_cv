<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
     .video-background {
      position: fixed;
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
    <div class="container text-center">
      <div class="row align-items-center">
        <div class="col-lg-3">
          
        </div>
        <div class="col-lg-6">
          <div class="card" style="width: 38rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <!-- <h4 style="text-align: left; margin-left: 20px;" class="ml-5">Personal ifo</h4> -->
            <div class="card-body">
             
                <form action="submit.php" method="post">
                  <h2>Personal Details</h2>
    
                  <div class="row">
                    <div class="col">
                      <input type="text" id="firstName" name="firstName"  class="form-control" placeholder="Frist name" required>  
              
                    </div>
                    <div class="col">
                      <input type="text" id="lastName" name="lastName"class="form-control" placeholder="Frist name" >
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <input type="email" id="email" name="email" class="form-control" placeholder="email">
                 
                    </div>
                    <div class="col">
                      <input type="text" id="phone" name="phone" class="form-control" maxlength="12" placeholder="phone numbr">
                    </div>
                  </div>
                  <h2>Address</h2>
                  <div class="row">
                    <div class="col">
                      <input type="text" id="address" name="address" placeholder="address" class="form-control"relative>
            
                    </div>
                    <div class="col">
                      <input type="text" id="city" name="city" placeholder="city" class="form-control">
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col">
                      <input type="text" id="state" name="state" class="form-control" placeholder="state">
                </div>
                    <div class="col">
                      <input type="text" id="Zip" name="Zip" class="form-control" placeholder="zip">
                    </div>
                  </div><br>
                  <h2>Education</h2>
                  <div class="row">
                    <div class="col">
                      <input type="text" id="degree" name="degree" placeholder="degree" class="form-control" required>
                    </div>
                    <div class="col">
                      <input type="text" id="university" name="university" placeholder="university or School" class="form-control">
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col">
                      <input type="date" id="graduationDate" name="graduationDate" placeholder="Graduation data" class="form-control"><br><br>
                
                    </div>
                 
                  </div><br>
                  <h2>Work Experience </h2>
                  <p>please your work Experience must be up four (4)</p>
                  <div class="row">
                    <div class="col">
                      <input type="text" id="company" name="company" class="form-control" placeholder="company" required>
               </div>
                    <div class="col">
                      <input type="text" id="jobTitle" name="jobTitle" placeholder="post Held" class="form-control" required>
                      </div>
                  </div><br>
                  <div class="row">
                    <div class="col">
                      <input type="date" id="employmentDate" name="employmentDate" class="form-control" placeholder="Employment data">
                
                    </div>
                 
                  </div><br>
                  <hr>
                  <!-- <h2>Work Experience </h2> -->
                  <div class="row">
                    <div class="col">
                      <input type="text" id="companys" name="companys" class="form-control" placeholder="company">
           
                     </div>
                    <div class="col">
                             
                      <input type="text" id="jobTitles" name="jobTitles"  placeholder="post Held" class="form-control" required>
                     </div>
                  </div><br>
                  <div class="row">
                    <div class="col">
                      <input type="date" id="employmentDates" name="employmentDates" class="form-control" placeholder="Employment data">
                
                    </div>
                 
                  </div><br>
                  <hr>
                  <!-- <h2>Work Experience </h2> -->
                  <div class="row">
                    <div class="col">
                      <input type="text" id="companyss " name="companyss" class="form-control" placeholder="company">
                
                        </div>
                    <div class="col">
                      <input type="text" id="jobTitless" name="jobTitless"  placeholder="post Held" class="form-control" required>
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col">
                      <input type="date" id="employmentDatess" name="employmentDatess" class="form-control" placeholder="Employment data">
                
                    </div>
                 
                  </div>
                  <hr style="width: 1000px;">
                  <!-- <h2>Work Experience </h2> -->
                  <div class="row">
                    <div class="col">
                     <input type="text" id="companysss" name="companysss" class="form-control" placeholder="company">
                 </div>
                    <div class="col">
                      <input type="text" id="jobTitlesss" name="jobTitlesss"  placeholder="post Held" class="form-control" required>
                       </div>
                  </div><br>
                  <div class="row">
                    <div class="col">
                      <input type="date" id="employmentDatesss" name="employmentDatesss" class="form-control" placeholder="Employment data">
                
                    </div>
                 
                  </div><br>



                  <h2>Skills</h2>
                  <div class="row">
                    <div class="col">
                      <label for="skills">Skills:</label>
                      <textarea id="skills" name="skills" style="width: 100%;"></textarea><br><br>
                    
                    </div>
                    <div class="container text-center">
                      <div class="row align-items-center">
                        <div class="col">
                        
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-outline-primary  btn-lg">submit</button>
        
                        </div>
                        <div class="col">
                         
                        </div>
                      </div>
                    </div>
                           </form>
                
                 </div>
          </div>
        </div>
        <div class="col-lg-3">
          
        </div>
      </div>
    </div>
    
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>