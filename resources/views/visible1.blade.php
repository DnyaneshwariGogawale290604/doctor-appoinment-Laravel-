<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    /> 
    <!--personal css--> 
    <link rel="stylesheet" href="/index.css" /> 

    <title>DOCTOR APPOINTMENT DASHBOARD </title>
    <style>
    .btn.btn-primary {
      background-color: rgb(225, 35, 235);}
    </style> 
  </head>
  <body> 

    
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark " > 
        <div class="container-fluid">
          <a class="navbar-brand" href="/" ><img src="https://i.etsystatic.com/20573433/r/il/e61cf8/3088631339/il_1080xN.3088631339_1j2t.jpg" height="50" alt="homepage"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="btn btn-primary" href="doctor/registration" role="button">DOCTOR INTERFACE </a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contact.html">Contact us </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> 
            <!-- LOGIN  -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropA">
    Login 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdropA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropALabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropALabel">LOGIN FORM </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form onsubmit ="return validation()"> 
                <div class="form-group" >
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="enter valid email-id" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> 
              </form>
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-lg disabled">Login</button> 
        </div>
      </div>
    </div>
  </div> 

  <!--SIGN UP modal   -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropB">
                Sign up 
              </button>
              
    <!-- Modal -->
<div class="modal fade" id="staticBackdropB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropBLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropBLabel">SIGN-UP FORM </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form onsubmit ="return validation()" name="signupform" id="form-sheet01" > 
                            <div class="form-group"> 
                                <div class="mb-3">
                                    <label for="exampleInput1" class="form-label">Name</label>
                                    <input name="NAME"  type="text" class="form-control" id="exampleInput1">
                                    <span id="error-name" style="color: red; font-size: 10px;"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInput2" class="form-label">Contact Number</label>
                                    <input name="NUMBER" type="number" class="form-control" id="exampleInput2">
                                    <span id="error-number" style="color: red; font-size: 10px;"></span>
                                </div> 
                              <label for="exampleInputEmail1">Email address</label>
                              <input name="EMAIL_ID"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              <span id="error-number" style="color: red; font-size: 10px;"></span>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input  type="password" class="form-control" id="exampleInputPassword1">
                              <span id="error-password" style="color: red; font-size: 10px;"></span> 
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword2">Confirm Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword2"> 
                              <span id="error-vpassword" style="color: red; font-size: 10px;"></span> 
                              <br><br><hr> 
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-lg disabled" id="submit01">SUBMIT </button> 
                              </div>





                              
                            </div> 
                          </form> 
                    </div>
                    
                  </div>
                </div>
              </div> 





        </div>
    </nav>

 
  


<!--carousel--> 
<div id="carouselExampleCaptions " class="carousel slide carousel-fade" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner height="100">
      <div class="carousel-item active ">
        <img src="https://img.freepik.com/premium-vector/doctor-office-interior-medical-cabinet-consultation-room-hospital-clinic_313242-1080.jpg?w=360" class="d-block w-100" alt="..." height="400">
        <div class="carousel-caption d-none d-md-block bg-transparent text-dark" >
          <h1><b><ul>Welcome to APPOINT-MINT </ul></b></h1>
          <p><b>APPOINT-MINT : check-it-out!!  </b> </p>
          <button class="btn btn-primary">Heart</button>
          <button class="btn btn-success">ENT</button>
          <button class="btn btn-danger">DENTISTS</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://img.freepik.com/premium-vector/male-female-doctors-white-medical-coats-standing-with-arms-folded-group-medics-illustration-flat-style_213307-24.jpg" class="d-block w-100" alt="..." height="400">
        <div class="carousel-caption d-none d-md-block text-dark ">
        <b>  <h1>Welcome to APPOINT-MINT </h1>
          <p>APPOINT-MINT : check-it-out!!   </p></b>
          <button class="btn btn-primary">PUNE</button>
          <button class="btn btn-success">MUMBAI</button>
          <button class="btn btn-danger">BENGALURU</button> 
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://static.vecteezy.com/system/resources/previews/000/656/917/original/vector-set-of-doctor-cartoon-characters-medical-staff-team-concept-in-front-of-hospital.jpg" class="d-block w-100" alt="..." height="400">
        <div class="carousel-caption d-none d-md-block text-dark">
          <b><h1>Welcome to APPOINT-MINT </h1>
          <p>APPOINT-MINT : check-it-out!!   </p> </b>
          <button class="btn btn-primary">KOLKATA</button>
          <button class="btn btn-success">HYDERABAD</button>
          <button class="btn btn-danger">NEW-DELHI</button> 
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div> 
<!--alert--> 
<div class="alert alert-warning alert-dismissible fade show " role="alert">
    <h4 class="alert-heading">NAMASTE !! </h4>
    <b>NOTE</b>:<strong><p>ONLY DOCTORS ARE ALLOWED TO REGISTER,LOGIN.TO ENABLE THESE FEATURES USE DOCTOR INTERFACE.(/doctor/registration  or  /doctor/login ROUTES )<br><hr>
     <b><h3>APPOINT-MINT<br></h3></b>"Freshen up your healthcare experience with AppointMINT – where your medical appointments are always in mint condition! This refreshing dashboard makes scheduling a breeze, ensuring you never miss a check-up or follow-up. With a sprightly interface, AppointMINT offers easy appointment booking, sweet reminders, and seamless communication with your healthcare heroes. Whether you're feeling under the weather or just need a routine check-in, AppointMINT is here to help you stay healthy and happy. Get ready to savor a crisp, clear path to wellness – because with AppointMINT, good health is just a click away!" </p> </strong> 
    <hr>
    
    
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
</div> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    --> 
    
    <!--items existential crisis -->
    <br> 
 <div><b><h2>HEART SPECIALISTS : <span class="badge text-bg-warning">New</span> </h2> </b><hr>
    <div class="row row-cols-1 row-cols-md-5 g-5">
        <div class="col">
          <div class="card h-100 shadow">
            <img src="https://cdn3.iconfinder.com/data/icons/medical-hospital-14/3023/Avatar-Man-Doctor-Hospital-Medical-Clinic-Profile-Treatment-512.png" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5 class="card-title"><b>DHANANJAY RAJPOOT </b></h5> 
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">$200 for initial consult, $150 for follow-ups </button> 
                <br><hr><B>Timings Available:</B> Mon, Wed, Fri (10 AM - 3 PM)<br><hr>
<b>Education:</b> MBBS, MD (Cardiology), Harvard University<br><hr>
<b>Years of Experience:</b> 15 years</p> <hr>
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                More details 
                </button> 
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Timings Available:</b> Mon, Wed, Fri (10 AM - 3 PM)<hr><br>
<b>Education:</b> MBBS, MD (Cardiology), Harvard University
<b>Years of Experience:</b> 15 years
<b>Languages Spoken:</b> English, Spanish
<b><hr><br>Consultation Fees:</b> $200 for initial consult, $150 for follow-ups
<b><hr><br>Special Procedures:</b> Electrocardiogram (ECG), Stress Testing, Cardiac Catheterization
<b><hr><br>Professional Associations:</b> American College of Cardiology (ACC)
<b><hr><br>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.7/5 based on 120 reviews)
<b><hr><br>Telemedicine Availability:</b> Yes
<b><hr><br>Insurance Accepted: </b>Medicare, Blue Cross Blue Shield, Cigna
<b><hr><br>Awards and Recognition:</b> Awarded “Best Cardiologist” in 2018
<b><hr><br>Publications: </b>25+ papers on heart disease prevention
<b><hr><br>Additional Clinic Staff:</b> 2 Nurse Practitioners, 1 Medical Assistant
<b><hr><br>Success Rate:</b> 98% for cardiac procedures
<b><hr><br>Cancellation Policy:</b> 24-hour notice required, $50 fee for late cancellations
<b><hr><br>Average Waiting Time:</b> 15-20 minutes
<b><hr><br>Location: </b>Harvard Medical Clinic, Boston, MA (Map Link)
<b><hr><br>Contact:</b> (555) 123-4567, linda.brown@harvardmed.com
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
          





        </div>
      </div>
    </div> 
  </div> 
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Modern Classic </small>
            </div>
          </div> 
        </div>
        <div class="col">
          <div class="card h-100 shadow ">
            <img src="https://png.pngtree.com/png-clipart/20210928/ourmid/pngtree-cute-cartoon-sticker-of-a-male-doctor-wearing-medical-health-mask-png-image_3960842.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NIKHIL NAIR </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning"> $190 for initial consult, $140 for follow-ups </button> <hr>
              <b>Timings Available:</b> Tue, Thu, Sat (11 AM - 4 PM)<br><hr>
    <b>Education:</b> MBBS, MD (Cardiology), Oxford University<br><hr>
    <b>Years of Experience:</b> 12 years<br></p> <hr>
             <!-- Button trigger modal -->
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                More details 
             </button>  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop2Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Nikhil Nair </b><br>
    <b>Specialization:</b> Heart Specialist<br>
    <b>Timings Available:</b> Tue, Thu, Sat (11 AM - 4 PM)<br>
    <b>Education:</b> MBBS, MD (Cardiology), Oxford University<br>
    <b>Years of Experience:</b> 12 years<br>
    <b>Languages Spoken:</b> English, Arabic<br>
    <b>Consultation Fees:</b> $190 for initial consult, $140 for follow-ups<br>
    <b>Special Procedures:</b> Angioplasty, Stent Placement, Echocardiography<br>
    <b>Professional Associations:</b> British Cardiac Society<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.5/5 based on 100 reviews)<br>
    <b>Telemedicine Availability:</b> No<br>
    <b>Insurance Accepted:</b> Aetna, Cigna, UnitedHealthcare<br>
    <b>Awards and Recognition:</b> Pioneer in non-invasive cardiology<br>
    <b>Publications:</b> Papers on new heart valve technologies<br>
    <b>Additional Clinic Staff:</b> 1 Medical Assistant<br>
    <b>Success Rate:</b> 94% for angioplasty procedures<br>
    <b>Cancellation Policy:</b> 24-hour notice required, $50 fee<br>
    <b>Average Waiting Time:</b> 10-15 minutes<br>
    <b>Location:</b> Oxford Heart Center, Oxford, UK (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> +44-207-1234567, ahmed.khan@oxfordcardio.org<br>
    <hr>
        </div> 

        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 

        </div>
      </div>
    </div> 
  </div> 
            </div>                             

           
            <div class="card-footer">
              <small class="text-body-secondary">Tortured Poets Department </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow ">
            <img src="https://img.freepik.com/premium-photo/illustration-portrays-confidence-female-professional-white-coat-stethoscope-draped-around-th_1015897-207.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NUSARAT KHAN </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning"> $180 for initial consult, $130 for follow-ups </button><hr> 
              <b>Timings Available:</b> Mon - Fri (9 AM - 2 PM)<br><hr>
    <b>Education:</b> MBBS, DM (Cardiology), AIIMS, India<br><hr>
    <b>Years of Experience:</b> 9 years<br></p> <hr>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                More details 
                </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop3Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Nusarat Khan </b><br>
    <b>Specialization:</b> Heart Specialist<br>
    <b>Timings Available:</b> Mon - Fri (9 AM - 2 PM)<br>
    <b>Education:</b> MBBS, DM (Cardiology), AIIMS, India<br>
    <b>Years of Experience:</b> 9 years<br>
    <b>Languages Spoken:</b> English, Hindi<br>
    <b>Consultation Fees:</b> $180 for initial consult, $130 for follow-ups<br>
    <b>Special Procedures:</b> Coronary Artery Bypass, Cardiac Imaging<br>
    <b>Professional Associations:</b> Indian Heart Association<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.8/5 based on 140 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> Cigna, UnitedHealthcare, ICICI Lombard<br>
    <b>Awards and Recognition:</b> Recognized for cardiac imaging advancements<br>
    <b>Publications:</b> Multiple articles on cardiac imaging<br>
    <b>Additional Clinic Staff:</b> 2 Nurse Practitioners<br>
    <b>Success Rate:</b> 95% for coronary bypass surgeries<br>
    <b>Cancellation Policy:</b> 48-hour notice, no fee<br>
    <b>Average Waiting Time:</b> 20 minutes<br>
    <b>Location:</b> AIIMS, New Delhi, India (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> +91-9811122334, priya.mehta@aiims.in<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 

        </div>
      </div>
    </div> 
  </div> 
            </div>

            
            <div class="card-footer">
              <small class="text-body-secondary">BIG hug </small>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow ">
              <img src="https://png.pngtree.com/element_pic/16/06/02/00574f0cc583ea2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">NAINA TALWAAR</h5>
                <p class="card-text">consultant fees: <button type="button" class="btn btn-warning"> $210 initial consult, $160 for follow-ups</button> 
                    <hr><b>Timings Available:</b> Mon, Tue, Thu (1 PM - 6 PM)<hr>
    <b>Education:</b> MBBS, MD, Ph.D. in Cardiology, Johns Hopkins University<hr>
    <b>Years of Experience:</b> 16 years<hr></p> 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                    More details 
                    </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop4Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop4Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Naina Talwaar </b><br>
    <b>Specialization:</b> Heart Specialist<br>
    <b>Timings Available:</b> Mon, Tue, Thu (1 PM - 6 PM)<br>
    <b>Education:</b> MBBS, MD, Ph.D. in Cardiology, Johns Hopkins University<br>
    <b>Years of Experience:</b> 16 years<br>
    <b>Languages Spoken:</b> English, French<br>
    <b>Consultation Fees:</b> $210 initial consult, $160 for follow-ups<br>
    <b>Special Procedures:</b> Arrhythmia Treatment, Electrophysiology<br>
    <b>Professional Associations:</b> American Heart Association (AHA)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.9/5 based on 150 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> Medicare, Cigna, Blue Cross<br>
    <b>Awards and Recognition:</b> Developed novel arrhythmia treatments<br>
    <b>Publications:</b> Numerous publications on electrophysiology<br>
    <b>Additional Clinic Staff:</b> 1 Technician, 1 Assistant<br>
    <b>Success Rate:</b> 97% for arrhythmia procedures<br>
    <b>Cancellation Policy:</b> 24-hour notice, $40 fee<br>
    <b>Average Waiting Time:</b> 10-15 minutes<br>
    <b>Location:</b> Johns Hopkins Hospital, Baltimore, MD (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 987-6543, william.davis@jhu.edu<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             
              <div class="card-footer">
                <small class="text-body-secondary">For the Psychos</small>
              </div>
            </div>
        </div> 
        <div class="col">
            <div class="card h-100 shadow ">
              <img src="https://i.pinimg.com/474x/56/51/7c/56517c7f81ff94f715d07b0d71690f9e.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title"><b>DNYANESHWARI GOGAWALE</b></h6>
                <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">$180 for initial consult, $140 for follow-ups</button> 
                    <hr><b>Timings Available:</b> Mon, Tue, Thu (9 AM - 2 PM)<br><hr>
    <b>Education:</b> MBBS, MS (Orthopedics), Stanford University<br><hr>
    <b>Years of Experience:</b> 10 years<br><hr></p> 

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                    More details 
                    </button> 

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop5Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop5Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dnyaneshwari Gogawale </b><br>
    <b>Specialization:</b> Orthopedic Specialist<br>
    <b>Timings Available:</b> Mon, Tue, Thu (9 AM - 2 PM)<br>
    <b>Education:</b> MBBS, MS (Orthopedics), Stanford University<br>
    <b>Years of Experience:</b> 10 years<br>
    <b>Languages Spoken:</b> English, French<br>
    <b>Consultation Fees:</b> $180 for initial consult, $140 for follow-ups<br>
    <b>Special Procedures:</b> Joint Replacement, Arthroscopy, Sports Injury Treatment<br>
    <b>Professional Associations:</b> American Academy of Orthopedic Surgeons (AAOS)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.7/5 based on 130 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> Aetna, Cigna, Blue Cross Blue Shield<br>
    <b>Awards and Recognition:</b> Received the AAOS “Rising Star” award in 2020<br>
    <b>Publications:</b> 10+ research papers on joint preservation<br>
    <b>Additional Clinic Staff:</b> 1 Physical Therapist, 1 Nurse Assistant<br>
    <b>Success Rate:</b> 96% for joint replacements<br>
    <b>Cancellation Policy:</b> 24-hour notice required, $30 fee for late cancellations<br>
    <b>Average Waiting Time:</b> 15-20 minutes<br>
    <b>Location:</b> Stanford Health Care, Palo Alto, CA (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 765-4321, emily.johnson@stanfordmed.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>
             
              <div class="card-footer">
                <small class="text-body-secondary">French literature at it's finest </small>
              </div>
            </div>
        </div>  
    </div> 
</div>
    <br><hr> 
    
    
    <!--Girl dinner --> 
 <div><h2>DENTISTS : </h2>
    <div class="row row-cols-1 row-cols-md-5 g-5">
        <div class="col">
          <div class="card h-100 shadow ">
            <img src="https://thumbs.dreamstime.com/b/happy-cartoon-tooth-dentist-love-heart-great-health-dental-care-concept-79369607.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5 class="card-title">PHOEBE BRIDGERS </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning"> $100 for initial consult, $75 for follow-ups </button> 
                <hr> 
                <b>Timings Available:</b> Mon, Wed, Fri (10 AM - 3 PM)<br><hr>
    <b>Education:</b> DDS, University of Pennsylvania<br><hr>
    <b>Years of Experience:</b> 12 years<br><hr> </p>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
    More details 
  </button>
  

  



  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop6Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop6Label">DETAILS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Phoebe Bridgers</b><br>
    <b>Specialization:</b> Dentist<br>
    <b>Timings Available:</b> Mon, Wed, Fri (10 AM - 3 PM)<br>
    <b>Education:</b> DDS, University of Pennsylvania<br>
    <b>Years of Experience:</b> 12 years<br>
    <b>Languages Spoken:</b> English, Korean<br>
    <b>Consultation Fees:</b> $100 for initial consult, $75 for follow-ups<br>
    <b>Special Procedures:</b> Root Canal, Dental Implants, Cosmetic Dentistry<br>
    <b>Professional Associations:</b> American Dental Association (ADA)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.6/5 based on 90 reviews)<br>
    <b>Telemedicine Availability:</b> No<br>
    <b>Insurance Accepted:</b> Delta Dental, Aetna, Cigna<br>
    <b>Awards and Recognition:</b> ADA “Top Dentist” award 2021<br>
    <b>Publications:</b> Research on dental materials and restoration<br>
    <b>Additional Clinic Staff:</b> 2 Dental Hygienists, 1 Receptionist<br>
    <b>Success Rate:</b> 98% for root canal treatments<br>
    <b>Cancellation Policy:</b> 24-hour notice, $20 fee<br>
    <b>Average Waiting Time:</b> 10 minutes<br>
    <b>Location:</b> Smile Dental Clinic, Philadelphia, PA (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 101-1234, sarah.kim@smiledental.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div>
  </div> 
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Now this is how you write CRIME-THRILLERS </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow ">
            <img src="https://i.pinimg.com/originals/9f/a4/d8/9fa4d8d2ba40b8f64c95868d1d90a5ac.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">KAIVALYA KARKHANIS </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning"> $120 initial, $90 for follow-ups </button> 
                <hr><b>Timings Available:</b> Tue, Thu, Sat (11 AM - 5 PM)<br><hr>
    <b>Education:</b> DDS, NYU College of Dentistry<br><hr>
    <b>Years of Experience:</b> 9 years<br><hr></p> 
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
                More details 
                </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop7Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop7Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Kaivalya Karkhanisr</b><br>
    <b>Specialization:</b> Dentist<br>
    <b>Timings Available:</b> Tue, Thu, Sat (11 AM - 5 PM)<br>
    <b>Education:</b> DDS, NYU College of Dentistry<br>
    <b>Years of Experience:</b> 9 years<br>
    <b>Languages Spoken:</b> English, Spanish<br>
    <b>Consultation Fees:</b> $120 initial, $90 for follow-ups<br>
    <b>Special Procedures:</b> Teeth Whitening, Invisalign, Oral Surgery<br>
    <b>Professional Associations:</b> New York Dental Society<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.5/5 based on 75 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> Guardian, MetLife, Cigna<br>
    <b>Awards and Recognition:</b> Known for innovative techniques in oral surgery<br>
    <b>Publications:</b> 5 papers on Invisalign treatment<br>
    <b>Additional Clinic Staff:</b> 1 Dental Assistant, 1 Hygienist<br>
    <b>Success Rate:</b> 96% for orthodontic cases<br>
    <b>Cancellation Policy:</b> 24-hour notice, $20 fee<br>
    <b>Average Waiting Time:</b> 15 minutes<br>
    <b>Location:</b> Bright Smile Dental, New York, NY (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 234-5678, alex.turner@brightsmile.com<br>
    <hr>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

                         
            <div class="card-footer">
              <small class="text-body-secondary">Oh to be loved </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow ">
            <img src="https://thumbs.dreamstime.com/b/dentist-dental-care-teeth-tooth-cartoon-vector-64624489.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ISHAAN AWASTHI </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">$120 initial, $90 for follow-ups </button> 
                <hr<b>Timings Available:</b> Tue, Thu, Sat (11 AM - 5 PM)<br><hr>
    <b>Education:</b> DDS, NYU College of Dentistry<br><hr>
    <b>Years of Experience:</b> 9 years<br><hr> </p> 
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
                More details 
                </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop8Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop8Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Ishaan Awasthi</b><br>
    <b>Specialization:</b> Dentist<br>
    <b>Timings Available:</b> Tue, Thu, Sat (11 AM - 5 PM)<br>
    <b>Education:</b> DDS, NYU College of Dentistry<br>
    <b>Years of Experience:</b> 9 years<br>
    <b>Languages Spoken:</b> English, Spanish<br>
    <b>Consultation Fees:</b> $120 initial, $90 for follow-ups<br>
    <b>Special Procedures:</b> Teeth Whitening, Invisalign, Oral Surgery<br>
    <b>Professional Associations:</b> New York Dental Society<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.5/5 based on 75 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> Guardian, MetLife, Cigna<br>
    <b>Awards and Recognition:</b> Known for innovative techniques in oral surgery<br>
    <b>Publications:</b> 5 papers on Invisalign treatment<br>
    <b>Additional Clinic Staff:</b> 1 Dental Assistant, 1 Hygienist<br>
    <b>Success Rate:</b> 96% for orthodontic cases<br>
    <b>Cancellation Policy:</b> 24-hour notice, $20 fee<br>
    <b>Average Waiting Time:</b> 15 minutes<br>
    <b>Location:</b> Bright Smile Dental, New York, NY (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 234-5678, alex.turner@brightsmile.com<br>
    <hr> </p>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             

            
            <div class="card-footer">
              <small class="text-body-secondary">I'm just a girl </small>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow ">
              <img src="https://thumbs.dreamstime.com/b/dentist-dental-care-teeth-tooth-cartoon-vector-64624501.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ROHAN KHANNA </h5>
                <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">$130 for initial consult, $90 for follow-ups </button> 
                   <hr><b>Timings Available:</b> Mon - Thu (10 AM - 4 PM)<br><hr>
    <b>Education:</b> DDS, University of Michigan<br><hr>
    <b>Years of Experience:</b> 14 years<br><hr></p> 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
                    More details 
                    </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop9Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop9Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Julia Roberts</b><br>
    <b>Specialization:</b> Dentist<br>
    <b>Timings Available:</b> Mon - Thu (10 AM - 4 PM)<br>
    <b>Education:</b> DDS, University of Michigan<br>
    <b>Years of Experience:</b> 14 years<br>
    <b>Languages Spoken:</b> English<br>
    <b>Consultation Fees:</b> $130 for initial consult, $90 for follow-ups<br>
    <b>Special Procedures:</b> Crown & Bridge, Gum Surgery<br>
    <b>Professional Associations:</b> American Academy of Cosmetic Dentistry<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.7/5 based on 110 reviews)<br>
    <b>Telemedicine Availability:</b> No<br>
    <b>Insurance Accepted:</b> Delta Dental, Aetna, Blue Cross<br>
    <b>Awards and Recognition:</b> Excellence in cosmetic dentistry 2022<br>
    <b>Publications:</b> Work on gum health and restoration<br>
    <b>Additional Clinic Staff:</b> 2 Hygienists, 1 Receptionist<br>
    <b>Success Rate:</b> 95% for gum surgeries<br>
    <b>Cancellation Policy:</b> 48-hour notice, $25 fee<br>
    <b>Average Waiting Time:</b> 10 minutes<br>
    <b>Location:</b> Michigan Smile Studio, Ann Arbor, MI (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 567-8910, julia.roberts@mismile.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             

             
              <div class="card-footer">
                <small class="text-body-secondary">WOMEN</small> 
              </div>
            </div>
        </div> 
        <div class="col">
            <div class="card h-100 shadow ">
              <img src="https://thumbs.dreamstime.com/b/cartoon-dentist-tooth-doctor-sit-chair-thumb-up-great-dental-care-concept-69863811.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">AAKASH BANERJEE </h5>
                <p class="card-text">PRICE: <button type="button" class="btn btn-warning">$110 for initial consult, $80 for follow-ups</button> 
                    <hr><b>Timings Available:</b> Wed, Fri (9 AM - 3 PM)<br><hr>
    <b>Education:</b> DMD, UCLA School of Dentistry<br><hr>
    <b>Years of Experience:</b> 7 years<br><hr>
                </p> 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
                    More details 
                    </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop10Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop10Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. MAAKASH BANERJEE</b><br>
    <b>Specialization:</b> Dentist<br>
    <b>Timings Available:</b> Wed, Fri (9 AM - 3 PM)<br>
    <b>Education:</b> DMD, UCLA School of Dentistry<br>
    <b>Years of Experience:</b> 7 years<br>
    <b>Languages Spoken:</b> English, French<br>
    <b>Consultation Fees:</b> $110 for initial consult, $80 for follow-ups<br>
    <b>Special Procedures:</b> Pediatric Dentistry, Orthodontics<br>
    <b>Professional Associations:</b> California Dental Association<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.4/5 based on 60 reviews)<br>
    <b>Telemedicine Availability:</b> No<br>
    <b>Insurance Accepted:</b> Guardian, Humana, Cigna<br>
    <b>Awards and Recognition:</b> Pediatric dentistry awards in 2021<br>
    <b>Publications:</b> Articles on pediatric dental care<br>
    <b>Additional Clinic Staff:</b> 1 Hygienist<br>
    <b>Success Rate:</b> 97% for pediatric cases<br>
    <b>Cancellation Policy:</b> 24-hour notice, $15 fee<br>
    <b>Average Waiting Time:</b> 10 minutes<br>
    <b>Location:</b> Los Angeles Dental Group, Los Angeles, CA (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 345-6789, michael.clark@ladental.com<br>
    <hr>
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

                          
              <div class="card-footer">
                <small class="text-body-secondary">Hopeless romantic </small>
              </div>
            </div>
        </div>  
      </div> 
</div> 
<br><hr>  
    <!--contemporary nilhism  --> 
 <div><h2>Orthopaedic specialists : </h2>
    <div class="row row-cols-1 row-cols-md-5 g-5">
        <div class="col">
          <div class="card h-100 shadow ">
            <img src="https://thumbs.dreamstime.com/b/doctor-examining-radiograph-vector-illustration-medical-gown-looking-chest-computer-screen-observing-93309343.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5 class="card-title">SHIVMANGAL SINGH </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning"> $190 initial, $140 for follow-ups</button> 
                <hr><b>Timings Available:</b> Tue, Thu, Sat (10 AM - 4 PM)<br><hr>
    <b>Education:</b> MBBS, MS (Orthopedics), University of Michigan<br><hr>
    <b>Years of Experience:</b> 13 years<br><hr></p>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
    More details 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop11Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop11Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Shivmangal Singh </b><br>
    <b>Specialization:</b> Orthopedic Specialist<br>
    <b>Timings Available:</b> Tue, Thu, Sat (10 AM - 4 PM)<br>
    <b>Education:</b> MBBS, MS (Orthopedics), University of Michigan<br>
    <b>Years of Experience:</b> 13 years<br>
    <b>Languages Spoken:</b> English<br>
    <b>Consultation Fees:</b> $190 initial, $140 for follow-ups<br>
    <b>Special Procedures:</b> Spine Surgery, Fracture Management<br>
    <b>Professional Associations:</b> North American Spine Society<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.7/5 based on 105 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> UnitedHealthcare, BCBS<br>
    <b>Awards and Recognition:</b> Excellence in spine surgery 2022<br>
    <b>Publications:</b> Research on spinal reconstruction<br>
    <b>Additional Clinic Staff:</b> 1 Nurse, 1 Technician<br>
    <b>Success Rate:</b> 96% for spinal surgeries<br>
    <b>Cancellation Policy:</b> 24-hour notice<br>
    <b>Average Waiting Time:</b> 15 minutes<br>
    <b>Location:</b> Michigan Spine Center, Ann Arbor, MI (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 345-6781, lisa.moore@mspinecenter.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div>
  </div> 
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow ">
            <img src="https://thumbs.dreamstime.com/b/female-radiologist-showing-ray-image-skeleton-cartoon-vector-illustration-isolated-white-background-woman-83884366.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">MAMTA DESHMUKH </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">250 RUPEES and 550 for follow ups  </button> 
                <hr><b>Timings Available:</b> Tue, Thu, Sat (10 AM - 4 PM)<br><hr>
    <b>Education:</b> MBBS, MS (Orthopedics), University of Michigan<br><hr>
    <b>Years of Experience:</b> 13 years<br><hr></p> 
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
                More details 
                </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop12Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop12Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Lisa Moore</b><br>
    <b>Specialization:</b> Orthopedic Specialist<br>
    <b>Timings Available:</b> Tue, Thu, Sat (10 AM - 4 PM)<br>
    <b>Education:</b> MBBS, MS (Orthopedics), University of Michigan<br>
    <b>Years of Experience:</b> 13 years<br>
    <b>Languages Spoken:</b> English<br>
    <b>Consultation Fees:</b> $190 initial, $140 for follow-ups<br>
    <b>Special Procedures:</b> Spine Surgery, Fracture Management<br>
    <b>Professional Associations:</b> North American Spine Society<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.7/5 based on 105 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> UnitedHealthcare, BCBS<br>
    <b>Awards and Recognition:</b> Excellence in spine surgery 2022<br>
    <b>Publications:</b> Research on spinal reconstruction<br>
    <b>Additional Clinic Staff:</b> 1 Nurse, 1 Technician<br>
    <b>Success Rate:</b> 96% for spinal surgeries<br>
    <b>Cancellation Policy:</b> 24-hour notice<br>
    <b>Average Waiting Time:</b> 15 minutes<br>
    <b>Location:</b> Michigan Spine Center, Ann Arbor, MI (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 345-6781, lisa.moore@mspinecenter.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div> 

             
            <div class="card-footer"> 
              <small class="text-body-secondary">The BEATTLES </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow">
            <img src="https://thumbs.dreamstime.com/b/doctor-examining-radiograph-vector-illustration-young-smiling-looking-chest-observing-skeleton-76391638.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">SUJAY SAXENA </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning"> $190 initial, $140 for follow-ups</button> 
                <hr><b>Timings Available:</b> Tue, Thu, Sat (10 AM - 4 PM)<br><hr>
    <b>Education:</b> MBBS, MS (Orthopedics), University of Michigan<br><hr>
    <b>Years of Experience:</b> 13 years<br><hr></p> 
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop13">
                More details 
                </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop13Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop13Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. SUJAY SAXENA</b><br>
    <b>Specialization:</b> Orthopedic Specialist<br>
    <b>Timings Available:</b> Tue, Thu, Sat (10 AM - 4 PM)<br>
    <b>Education:</b> MBBS, MS (Orthopedics), University of Michigan<br>
    <b>Years of Experience:</b> 13 years<br>
    <b>Languages Spoken:</b> English<br>
    <b>Consultation Fees:</b> $190 initial, $140 for follow-ups<br>
    <b>Special Procedures:</b> Spine Surgery, Fracture Management<br>
    <b>Professional Associations:</b> North American Spine Society<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.7/5 based on 105 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> UnitedHealthcare, BCBS<br>
    <b>Awards and Recognition:</b> Excellence in spine surgery 2022<br>
    <b>Publications:</b> Research on spinal reconstruction<br>
    <b>Additional Clinic Staff:</b> 1 Nurse, 1 Technician<br>
    <b>Success Rate:</b> 96% for spinal surgeries<br>
    <b>Cancellation Policy:</b> 24-hour notice<br>
    <b>Average Waiting Time:</b> 15 minutes<br>
    <b>Location:</b> Michigan Spine Center, Ann Arbor, MI (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 345-6781, lisa.moore@mspinecenter.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             
            <div class="card-footer">
              <small class="text-body-secondary">Started for Trevor,Finished it off for his MUM </small>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow ">
              <img src="https://th.bing.com/th/id/OIP.dFJyUlXZWtVkyuy8_NwchQHaHa?w=800&h=800&rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">GAREEMA PATIL </h5>
                <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">$200 initial, $150 follow-ups </button> 
                    <hr><b>Timings Available:</b> Mon, Wed, Fri (9 AM - 3 PM)<br><hr>
    <b>Education:</b> MBBS, MS (Orthopedics), Mayo Clinic<br><hr>
    <b>Years of Experience:</b> 15 years<br><hr></p> 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop14">
                    More details 
                    </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop14Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop14Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. GAREEMA PATIL</b><br>
    <b>Specialization:</b> Orthopedic Specialist<br>
    <b>Timings Available:</b> Mon, Wed, Fri (9 AM - 3 PM)<br>
    <b>Education:</b> MBBS, MS (Orthopedics), Mayo Clinic<br>
    <b>Years of Experience:</b> 15 years<br>
    <b>Languages Spoken:</b> English<br>
    <b>Consultation Fees:</b> $200 initial, $150 follow-ups<br>
    <b>Special Procedures:</b> Knee Replacement, Sports Injury Management<br>
    <b>Professional Associations:</b> American Academy of Orthopaedic Surgeons<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.8/5 based on 120 reviews)<br>
    <b>Telemedicine Availability:</b> No<br>
    <b>Insurance Accepted:</b> Blue Shield, Aetna, Cigna<br>
    <b>Awards and Recognition:</b> Leading research in knee replacement<br>
    <b>Publications:</b> Work on joint replacement techniques<br>
    <b>Additional Clinic Staff:</b> 2 Nurses, 1 Assistant<br>
    <b>Success Rate:</b> 98% for knee replacements<br>
    <b>Cancellation Policy:</b> 48-hour notice<br>
    <b>Average Waiting Time:</b> 10 minutes<br>
    <b>Location:</b> Mayo Clinic, Rochester, MN (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 202-3344, james.wilson@mayoclinic.com<br>
    <hr>
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             
              <div class="card-footer">
                <small class="text-body-secondary">last updated 7mins ago </small>
              </div>
            </div>
        </div> 
        <div class="col"> 
            <div class="card h-100 shadow ">
              <img src="https://thumbs.dreamstime.com/b/roentgenologist-doctor-chest-ray-procedure-vector-illustration-128443518.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">KARAN BHOSALE </h5>
                <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">$210 initial, $160 for follow-ups</button> 
                    <hr><b>Timings Available:</b> Mon, Wed, Fri (8 AM - 2 PM)<br><hr>
    <b>Education:</b> MBBS, MS (Orthopedics), University of Chicago<br><hr>
    <b>Years of Experience:</b> 20 years<br><hr></p> 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop15">
                    More details 
                    </button> 


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop15Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop15Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body"> 
        <b>Dr. Karan Bhosale</b><br>
    <b>Specialization:</b> Orthopedic Specialist<br>
    <b>Timings Available:</b> Mon, Wed, Fri (8 AM - 2 PM)<br>
    <b>Education:</b> MBBS, MS (Orthopedics), University of Chicago<br>
    <b>Years of Experience:</b> 20 years<br>
    <b>Languages Spoken:</b> English, French<br>
    <b>Consultation Fees:</b> $210 initial, $160 for follow-ups<br>
    <b>Special Procedures:</b> Joint Replacement, Arthritis Treatment, Spine Care<br>
    <b>Professional Associations:</b> American Orthopaedic Association (AOA)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.9/5 based on 130 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> Blue Cross, UnitedHealthcare, Aetna<br>
    <b>Awards and Recognition:</b> Pioneer in minimally invasive spine surgery<br>
    <b>Publications:</b> Papers on arthritis and joint care<br>
    <b>Additional Clinic Staff:</b> 3 Nurses, 2 Technicians<br>
    <b>Success Rate:</b> 97% in joint replacements<br>
    <b>Cancellation Policy:</b> 48-hour notice, $50 cancellation fee<br>
    <b>Average Waiting Time:</b> 12 minutes<br>
    <b>Location:</b> Orthopedic Health Institute, Chicago, IL (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 789-4562, michael.green@orthoinstitute.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <<a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             
              <div class="card-footer"> 
                <small class="text-body-secondary">Tissues part-2 </small>
              </div>
            </div>
        </div>  
      </div> 
    </div> 
    <br><!--Indians v/s the system --> <hr>
 <div><h2>VETS : </h2>
    <div class="row row-cols-1 row-cols-md-5 g-5">
        <div class="col">
          <div class="card h-100 shadow ">
            <img src="https://thumbs.dreamstime.com/z/mobile-177523513.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5 class="card-title">KANEESH MALHOTRA </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">990 RUPEES and 700 for follow ups </button> 
                <hr><b>Timings Available:</b> Mon, Wed, Fri (9 AM - 3 PM)<br><hr>
    <b>Education:</b> DVM, University of California, Davis<br><hr>
    <b>Years of Experience:</b> 10 years<br> <hr></p> 

                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop16">
    More details 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop16" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop16Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop16Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Kaneesh Malhotra</b><br>
    <b>Specialization:</b> Veterinary Specialist (Small Animals)<br>
    <b>Timings Available:</b> Mon, Wed, Fri (9 AM - 3 PM)<br>
    <b>Education:</b> DVM, University of California, Davis<br>
    <b>Years of Experience:</b> 10 years<br>
    <b>Languages Spoken:</b> English, Spanish<br>
    <b>Consultation Fees:</b> $80 initial, $50 for follow-ups<br>
    <b>Special Procedures:</b> Vaccinations, Dental Care, Routine Surgeries<br>
    <b>Professional Associations:</b> American Veterinary Medical Association (AVMA)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.7/5 based on 90 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> Trupanion, Healthy Paws<br>
    <b>Awards and Recognition:</b> Featured in top veterinary journal for animal wellness<br>
    <b>Publications:</b> Articles on pet dental health<br>
    <b>Additional Clinic Staff:</b> 1 Vet Assistant, 1 Technician<br>
    <b>Success Rate:</b> 98% for minor surgeries<br>
    <b>Cancellation Policy:</b> 24-hour notice, $20 fee<br>
    <b>Average Waiting Time:</b> 15 minutes<br>
    <b>Location:</b> Pet Wellness Clinic, San Francisco, CA (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 321-6789, emily.johnson@petwellness.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div>
  </div> 
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow">
            <img src="https://thumbs.dreamstime.com/z/female-vet-doctor-cat-isolated-white-background-flat-vector-illustration-181919407.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RADHIKA AGRAWAL </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">$100 initial, $70 for follow-ups</button> 
                <hr><b>Timings Available:</b> Tue, Thu (8 AM - 1 PM)<br><hr>
    <b>Education:</b> DVM, Cornell University<br><hr>
    <b>Years of Experience:</b> 15 years<br><hr> </p> 
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop17">
                More details 
                </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop17" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop17Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop17Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Radhika Agrawal</b><br>
    <b>Specialization:</b> Veterinary Specialist (Large Animals)<br>
    <b>Timings Available:</b> Tue, Thu (8 AM - 1 PM)<br>
    <b>Education:</b> DVM, Cornell University<br>
    <b>Years of Experience:</b> 15 years<br>
    <b>Languages Spoken:</b> English<br>
    <b>Consultation Fees:</b> $100 initial, $70 for follow-ups<br>
    <b>Special Procedures:</b> Farm Animal Health, Equine Surgery<br>
    <b>Professional Associations:</b> American Association of Equine Practitioners (AAEP)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.5/5 based on 60 reviews)<br>
    <b>Telemedicine Availability:</b> No<br>
    <b>Insurance Accepted:</b> Nationwide, Embrace Pet Insurance<br>
    <b>Awards and Recognition:</b> Recognized for contributions to equine health<br>
    <b>Publications:</b> Papers on large animal surgery techniques<br>
    <b>Additional Clinic Staff:</b> 1 Vet Technician<br>
    <b>Success Rate:</b> 95% for equine procedures<br>
    <b>Cancellation Policy:</b> 48-hour notice<br>
    <b>Average Waiting Time:</b> 10 minutes<br>
    <b>Location:</b> Equine and Farm Veterinary Center, Ithaca, NY (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 654-9870, benjamin.carter@equinefarmvet.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             

            
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow">
            <img src="https://thumbs.dreamstime.com/z/vector-illustration-veterinarian-cute-puppy-dog-conceptual-flat-style-file-216671470.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">SHALEENI HAMZA </h5>
              <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">400 RUPEES and 600 for follow ups  </button> 
                <hr><b>Timings Available:</b> Mon - Thu (10 AM - 4 PM)<br><hr>
    <b>Education:</b> DVM, University of Melbourne<br><hr>
    <b>Years of Experience:</b> 12 years<br><hr></p> 
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop18">
                More details 
                </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop18" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop18Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop18Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. shaleeni hamza</b><br>
    <b>Specialization:</b> Veterinary Specialist (Exotic Pets)<br>
    <b>Timings Available:</b> Mon - Thu (10 AM - 4 PM)<br>
    <b>Education:</b> DVM, University of Melbourne<br>
    <b>Years of Experience:</b> 12 years<br>
    <b>Languages Spoken:</b> English, Korean<br>
    <b>Consultation Fees:</b> $90 initial, $60 for follow-ups<br>
    <b>Special Procedures:</b> Reptile Care, Small Mammal Surgery<br>
    <b>Professional Associations:</b> Association of Exotic Mammal Veterinarians (AEMV)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.8/5 based on 100 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> PetFirst, Pet Assure<br>
    <b>Awards and Recognition:</b> Known for contributions to exotic pet medicine<br>
    <b>Publications:</b> Articles on exotic animal health<br>
    <b>Additional Clinic Staff:</b> 2 Vet Assistants<br>
    <b>Success Rate:</b> 96% in exotic pet procedures<br>
    <b>Cancellation Policy:</b> 24-hour notice, $25 fee<br>
    <b>Average Waiting Time:</b> 20 minutes<br>
    <b>Location:</b> Exotic Animal Care Center, Melbourne, Australia (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> +61-3-5550-1234, sarah.kim@exoticanimalcare.com<br>
    <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             

            
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow">
              <img src="https://th.bing.com/th/id/OIP.k52MnREHEGBRN9_entZl9gHaHa?pid=ImgDet&w=170.41420118343197&h=180&c=7&dpr=1.3" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">AADI QURESHI </h5>
                <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">600 RUPEES 990 for follow-up</button> 
                    <hr><b>Timings Available:</b> Wed, Fri, Sat (9 AM - 3 PM)<br><hr>
    <b>Education:</b> DVM, Texas A&M University<br><hr>
    <b>Years of Experience:</b> 14 years<br><hr></p> 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop19">
                    More details 
                    </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop19" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop19Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop19Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Mark Gonzales</b><br>
    <b>Specialization:</b> Veterinary Specialist (Surgery and Critical Care)<br>
    <b>Timings Available:</b> Wed, Fri, Sat (9 AM - 3 PM)<br>
    <b>Education:</b> DVM, Texas A&M University<br>
    <b>Years of Experience:</b> 14 years<br>
    <b>Languages Spoken:</b> English, Spanish<br>
    <b>Consultation Fees:</b> $110 initial, $80 for follow-ups<br>
    <b>Special Procedures:</b> Emergency Surgeries, Trauma Care<br>
    <b>Professional Associations:</b> American College of Veterinary Surgeons (ACVS)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.6/5 based on 75 reviews)<br>
    <b>Telemedicine Availability:</b> Limited (emergency follow-up only)<br>
    <b>Insurance Accepted:</b> Petplan, Figo<br>
    <b>Awards and Recognition:</b> Recognized in critical care veterinary journals<br>
    <b>Publications:</b> Research on trauma care for pets<br>
    <b>Additional Clinic Staff:</b> 1 Vet Assistant, 1 Technician<br>
    <b>Success Rate:</b> 93% for critical cases<br>
    <b>Cancellation Policy:</b> 24-hour notice<br>
    <b>Average Waiting Time:</b> 18 minutes<br>
    <b>Location:</b> Animal Emergency Center, Houston, TX (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> (555) 789-3456, mark.gonzales@animalemergency.com<br>
    <hr>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             

              
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
        </div> 
        <div class="col"> 
            <div class="card h-100 shadow">
              <img src="https://thumbs.dreamstime.com/z/veterinary-doctor-appointment-online-veterinarian-consultation-pet-care-animal-medical-diagnosis-desktop-application-flat-vector-258224422.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ANUPAMA KOVIND </h5>
                <p class="card-text">consultant fees: <button type="button" class="btn btn-warning">1100 RUPEES $60 for follow-up</button> 
                    <hr><b>Timings Available:</b> Tue, Thu, Sat (10 AM - 2 PM)<br><hr>
    <b>Education:</b> DVM, Royal Veterinary College, London<hr><br>
    <b>Years of Experience:</b> 9 years<br><hr> </p> 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop20">
                    More details 
                    </button> 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop20" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop20Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdrop20Label">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <b>Dr. Lisa Wang</b><br>
    <b>Specialization:</b> Veterinary Specialist (Behavioral Health)<br>
    <b>Timings Available:</b> Tue, Thu, Sat (10 AM - 2 PM)<br>
    <b>Education:</b> DVM, Royal Veterinary College, London<br>
    <b>Years of Experience:</b> 9 years<br>
    <b>Languages Spoken:</b> English, Mandarin<br>
    <b>Consultation Fees:</b> $85 initial, $60 for follow-ups<br>
    <b>Special Procedures:</b> Behavioral Therapy, Anxiety Management for Pets<br>
    <b>Professional Associations:</b> International Association of Animal Behavior Consultants (IAABC)<br>
    <b>Patient Reviews and Ratings:</b> ⭐⭐⭐⭐ (4.9/5 based on 110 reviews)<br>
    <b>Telemedicine Availability:</b> Yes<br>
    <b>Insurance Accepted:</b> ASPCA, PetPremium<br>
    <b>Awards and Recognition:</b> Recognized for animal behavior studies<br>
    <b>Publications:</b> Research papers on pet anxiety<br>
    <b>Additional Clinic Staff:</b> 1 Behavioral Therapist<br>
    <b>Success Rate:</b> 94% for behavioral therapy cases<br>
    <b>Cancellation Policy:</b> 24-hour notice<br>
    <b>Average Waiting Time:</b> 10 minutes<br>
    <b>Location:</b> Animal Behavior Clinic, London, UK (<a href="#">Map Link</a>)<br>
    <b>Contact:</b> +44-207-5678901, lisa.wang@animalbehaviorclinic.co.uk<br>
    <hr> </p>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="BOOK" role="button">Book now</a> 
        </div>
      </div>
    </div> 
  </div> 
            </div>

             

              
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
        </div>  
      </div> 
    </div> 
<!--footer --> 
<footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiarys bg-dark text-white" >
    <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
      <div class="row">
        <div class="col-lg-3 mb-3">
         <b> 
          <ul class="list-unstyled small">
            <li class="mb-2">Designed and built with all the love in the world by ME </a> with the help of <a href="https://youtu.be/vpAJ0s5S2t0?si=qhDypEsHd-X1M6zw">youtube reference</a>.</li>
            Code licensed by Dnyaneshwari Gogawale 
          </ul> <br>
          <p><b>here on the right side are all the references used : </b> </p>
        </div></b> 
        
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5>Links</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/">Home</a></li>
            <li class="mb-2"><a href="/docs/5.3/">Docs</a></li>
            <li class="mb-2"><a href="/docs/5.3/examples/">Examples</a></li>
            <li class="mb-2"><a href="https://icons.getbootstrap.com/">Icons</a></li>
            <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
            <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
            <li class="mb-2"><a href="https://cottonbureau.com/people/bootstrap" target="_blank" rel="noopener">Swag Store</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Guides</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/docs/5.3/getting-started/">Getting started</a></li>
            <li class="mb-2"><a href="/docs/5.3/examples/starter-template/">Starter template</a></li>
            <li class="mb-2"><a href="/docs/5.3/getting-started/webpack/">Webpack</a></li>
            <li class="mb-2"><a href="/docs/5.3/getting-started/parcel/">Parcel</a></li>
            <li class="mb-2"><a href="/docs/5.3/getting-started/vite/">Vite</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Projects</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener">Bootstrap 5</a></li>
            <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev" target="_blank" rel="noopener">Bootstrap 4</a></li>
            <li class="mb-2"><a href="https://github.com/twbs/icons" target="_blank" rel="noopener">Icons</a></li>
            <li class="mb-2"><a href="https://github.com/twbs/rfs" target="_blank" rel="noopener">RFS</a></li>
            <li class="mb-2"><a href="https://github.com/twbs/examples/" target="_blank" rel="noopener">Examples repo</a></li>
          </ul>
        </div>
        
      </div>
    </div>
  </footer> 







  
  
<!--</script>-->
<!-- custom JS -->
<script src="./index.js"></script>




<!--data collection in spreadsheet
<script> 
    const form = document.querySelector("#form-sheet01")
    const submitButton = document.querySelector("#submit01")
    const scriptURL =
    "https://script.google.com/macros/s/AKfycbxYekn26Ic3i8NqloIRlsh1sznWb5TN0x8SDh9XccWC_RSH1r542qwuLQPm6fw4r5i8-w/exec" 

    form.addEventListener('submit', e => {
        submitButton.disabled = true
        e.preventDefault()
        let requestBody = new FormData(form)
        fetch(scriptURL, { 
                method: 'POST',
                body: requestBody
            })
            .then(response => {
                    alert("Signed in successfully", response)
                submitButton.disabled = false
            })
            .catch(error => {
                alert('Error!', error.message)
                submitButton.disabled = false

            })
    })
</script> 


 data collection in spreadsheet
<script>
    const form2 = document.querySelector("#form-sheet02")
    const submitButton2 = document.querySelector("#submit02")
    const scriptURL2 =
    "https://script.google.com/macros/s/AKfycbwdphD65BvRpEqCXDdkjEOgi_seGjgoGwSoRkjjBjG5-Ju23sdbNKhqDApmNpfUCI_xbQ/exec" 

    form2.addEventListener('submit', e => {
        submitButton2.disabled = true
        e.preventDefault()
        let requestBody = new FormData(form)
        fetch(scriptURL2, { 
                method: 'POST',
                body: requestBody
            })
            .then(response => {
                    alert("order placed successfully ", response)
                submitButton2.disabled = false
            })
            .catch(error => {
                alert('Error!', error.message)
                submitButton2.disabled = false

//alert,math.floor,math.ceil,math.round,onclick,title 
//let creates new variable therefore not used when reassigning value to a variable 
//let,const,var //typeof 
// == converts both types into the same type and then checks if true or not 
// whereas === checks value as well as type is same or not 
//therefore we also use !== instead of != 
//if(boolean){}  
//&& has a priority over || therefore when necessary use brackets 
//localStorage only supports strings.Therefore use json.stringyfy() 
  
            })
    })
</script> 



 data collection in spreadsheet-->
<!-- <script>
    const form3 = document.querySelector("#form-sheet01")
    const submitButton3 = document.querySelector("#submit01")
    const scriptURL3 =
    "https://script.google.com/macros/s/AKfycbxYekn26Ic3i8NqloIRlsh1sznWb5TN0x8SDh9XccWC_RSH1r542qwuLQPm6fw4r5i8-w/exec" 

    form3.addEventListener('submit', e => 
    {
        submitButton3.disabled = true
        e.preventDefault()
        let requestBody = new FormData(form)
        fetch(scriptURL3, { 
                method: 'POST',
                body: requestBody
            })
            .then(response => {
                    alert("Signed in successfully.", response)
                submitButton3.disabled = false
            })
            .catch(error => {
                alert('Error!', error.message)
                submitButton3.disabled = false

            })
    }) 
</script> 
-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> 






<!--<h1>HELLO</h1>
<a href="/">welcome</a>
<a href="/about/Dnyaneshwari">about</a> //here dnyaneshwari represents the parameter paassed as name in the comments of web.php routes file />

https://png.pngtree.com/png-vector/20240715/ourmid/pngtree-d-happy-nurse-clip-art-a-lady-doctor-in-front-look-png-image_13098928.png

--/>
