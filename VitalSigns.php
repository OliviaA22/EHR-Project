<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="20">
    <title>ECRI_CARE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
  <div class="wrapper">
     <!--Top Menu & Menu button-->
        <div class="sidebar">
            <div class="profile">
                <img src="images/Picture1.png" alt="profile picture">
                <h3 class="fw-bold">JOHNSON</h3>
                <P class="fw-bold">Doctor</P>
            </div>
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-gauge"></i>&ensp;Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-house-user"></i>&ensp;Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-people-group"></i>&ensp;About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-hospital-user"></i>&ensp;Patients</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i>&ensp;Settings</a>
                </li>
            </ul>
        </div>
        
        <div class="section">
            <nav class="navbar navbar-dark bg-mynav">
                <div class="container-fluid justify-content-between">
                    <a class="navbar-brand fw-bold" href="#">ECRI<i class="fa-solid fa-heart-pulse"></i>CARE</a>
                    <a class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-right-from-bracket"></i>&ensp;Logout</a>
                </div>
            </nav>

<!-- patient data -->
<nav class=" navbar navbar-expand-lg navbar-light bg-secondary justify-content-between">
    <a class="btn btn-primary" href="demorgraphics.php" role="button">Demorgraphics</a>
    <a class="btn btn-primary" href="#" role="button">Medical History</a>
    <a class="btn btn-primary" href="#" role="button">Immunisation Status</a>
    <a class="btn btn-primary" href="#" role="button">Laboratory Test</a>
    <a class="btn btn-primary" href="#" role="button">Radiology Images</a>
    <a class="btn btn-primary active" href="#" role="button">Vital Signs</a>
    <a class="btn btn-primary" href="#" role="button">Persoanl Statistics</a>
    <a class="btn btn-primary" href="#" role="button">Billing Infomation</a>
</nav>
<div class="vs">
<form class="form-control-sm row g-3">
  <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Temperature</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">Blood pressure</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-2">
    <label for="inputAddress2" class="form-label">Heart Rate</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label">Oxygen Saturation(SpO2)</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Pulse</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
</form>


</div>
        </div>
	</div>


    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
</body>
</html>
