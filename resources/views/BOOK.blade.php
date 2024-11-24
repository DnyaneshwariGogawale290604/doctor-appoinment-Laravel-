<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    /> 
    <!--personal css--> 
    <link rel="stylesheet" href="/index.css" /> 


        



    <title>contact us </title>
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
          </div>
        </div>
      </nav>
 

      <div>
      <form method="POST" action={{route('save.Appointment')}}> 
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='EMAIL' aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="input-group">
  <span class="input-group-text">NAME</span>
  <textarea class="form-control"  name='NAME' aria-label="With textarea"></textarea>
</div>
<br><hr>
<div class="input-group">
  <span class="input-group-text">DOCTOR</span>
  <textarea class="form-control"  name='DOCTOR'aria-label="With textarea"></textarea>
</div>
<hr><br>
<div class="input-group">
  <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
  <span class="input-group-text">$</span>
  <span class="input-group-text">0.00</span>
</div>
<br><hr>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Preferred Time slot</label>
  <select class="form-select" id="inputGroupSelect01"  name='TIMING'>
    <option selected>Choose...</option>
    <option value="1">9am-2pm</option>
    <option value="2">2pm-7pm</option>
    <option value="3">7pm-12pm</option>
  </select>
</div>
<br><hr>
<div class="input-group">
  <span class="input-group-text">Describe reason in detail</span>
  <textarea class="form-control"  name='DESCRIPTION' aria-label="With textarea"></textarea>
</div>
<br><hr>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="container mt-5">
    <!-- Success Alert (Initially hidden) -->
    <div id="successAlert" class="alert alert-success d-none" role="alert">
        Successfully submitted!
    </div>

    <!-- Submit Button with onclick event -->
    <button class="btn btn-primary" onclick="showAlert()">Submit</button>
</div>


</form>

      </div>
 


<!--footer --> 
<footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary bg-dark text-light" >
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
  
  
<!-- JavaScript for showing the alert -->
<script>
    function showAlert() {
        const alert = document.getElementById("successAlert");
        alert.classList.remove("d-none"); // Show the alert

        // Optionally, hide the alert after a few seconds
        setTimeout(() => {
            alert.classList.add("d-none"); // Hide the alert after 3 seconds
        }, 3000);
    }
</script>










  
</body>

</html> 





