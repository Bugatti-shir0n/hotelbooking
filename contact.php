<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Bountiful- CONTACT</title>
    <?php require('links.php'); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body class="bg-light">

    <?php require('header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>     
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Illum illo eaque nam error molestias facilis nihil temporibus, nesciunt laborum praesentium.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                  <iframe class="w-100 rounded mb-4" height="450" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d31857.481015615973!2d39.5025871!3d-3.5447325!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1734565910093!5m2!1sen!2ske" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/BD6RsxdriWG8xtxd7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i> Kitengela, Nairobi
                    </a>
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel: +254716555444" class="d-inline-block mb-2 text-decoration-none text-dark">
                      <i class="bi bi-telephone-fill"></i> +254716555444
                    </a>
                    <br>
                    <a href="tel: +254716555444" class="d-inline-block text-decoration-none text-dark">
                      <i class="bi bi-telephone-fill"></i> +254716555444
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: shirulynn8@gmail.com" class="d-inline-block text-decoration-none text-dark">
                      <i class="bi bi-envelope-at-fill"></i> shirulynn8@gmail.com
                    </a>
                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form action="">
                        <h5>Send Message</h5>
                        <div class="mt-3">
                          <label class="form-label" style="font-weight: 500;">Name</label>
                          <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                          <label class="form-label" style="font-weight: 500;">Email</label>
                          <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                          <label class="form-label" style="font-weight: 500;">Subject</label>
                          <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                          <label class="form-label" style="font-weight: 500;">Message</label>
                          <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>


    <!--Footer-->
    <?php require('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 
</body>
</html>