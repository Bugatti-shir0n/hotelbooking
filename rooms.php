<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Bountiful- ROOMS</title>
    <?php require('links.php'); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body class="bg-light">

    <?php require('header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>     
        <div class="h-line bg-dark"></div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
              <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                  <h4 class="mt-2">FILTERS</h4>
                  <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                    <div class="border bg-light p-3 rounded mb-3">
                        <h6 class="mb-3" style="font-size: 18px;">Check Availability</h6>
                        <label for="form-label">check-in</label>
                        <input type="date" class="form-control shadow-none mb-3">
                        <label for="form-label">check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="border bg-light p-3 rounded mb-3">
                        <h6 class="mb-3" style="font-size: 18px;">Facilities</h6>
                        <div class="mb-2">
                          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                          <label for="form-check-label" for="f1" >Facility One</label>
                        </div>
                        <div class="mb-2">
                          <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                          <label for="form-check-label" for="f2" >Facility Two</label>
                        </div>
                        <div class="mb-2">
                          <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                          <label for="form-check-label" for="f3" >Facility Three</label>
                        </div>
                    </div>
                    <div class="border bg-light p-3 rounded mb-3">
                        <h6 class="mb-3" style="font-size: 18px;">Guests</h6>
                        <div class="d-flex">
                          <div class="me-3">
                            <label class="form-label">Adults</label>
                            <input type="number" class="form-control shadow-none">
                          </div>
                          <div>
                            <label class="form-label">Children</label>
                            <input type="number" class="form-control shadow-none">
                          </div>
                        </div>
                    </div>

                  </div>
                </div>
              </nav>   
            </div>

            <div class="col-lg-9 col-md-12 px-4">
              <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5">
                    <img src="images/pool.jpg" alt="...">
                  </div>
                  <div class="col-md-5">
                    <h5 class="mb-3">Something</h5>
                    <div class="features mb-3">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms 
                         </span>
                         <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bath 
                         </span>
                         <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony 
                         </span>
                         <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 cosy couches 
                         </span>
                      </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>


    <!--Footer-->
    <?php require('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 
</body>
</html>