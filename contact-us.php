<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Contact Us - Wee Media</title>

      <!-- CSS FILES -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet" />
      <link href="css/bootstrap.min.css" rel="stylesheet" />
      <link href="css/bootstrap-icons.css" rel="stylesheet" />
      <link href="css/templatemo-topic-listing.css" rel="stylesheet" />

      <!-- Favicon Image -->
      <link rel="icon" type="image/png" href="images/favicon-icon2.jpg">
</head>

<body class="topics-listing-page" id="top">
      <main>
            <?php include('header.php') ?>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                  <div class="container">
                        <div class="row align-items-center">
                              <div class="col-lg-5 col-12">
                                    <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                      <a href="index.html">Homepage</a>
                                                </li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                      Contact Form
                                                </li>
                                          </ol>
                                    </nav>
                                    <h2 class="text-white">Contact Form</h2>
                              </div>
                        </div>
                  </div>
            </header>

            <section class="section-padding section-bg">
                  <div class="container">
                        <div class="row">
                              <div class="col-lg-12 col-12">
                                    <p style="font-size: 20px;">Get Started Today!</p>
                                    <h3 class="mb-4 pb-2">Got A Question About Using Our Product or General Enquiry?
                                          Contact Us!</h3>
                                    <p>Our leading accounting services in the USA offer assistance or support regarding
                                          QuickBooks accounting solutions, effortlessly automate your bookkeeping, and
                                          manage your bills. For further information, feel free to get in touch with us.
                                    </p>
                                    <p>We're here to help you navigate your financial journey effectively.</p>
                              </div>
                              <div class="col-lg-6 col-12">
                                    <form action="#" method="post" class="custom-form contact-form" role="form">
                                          <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                      <div class="form-floating">
                                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="" />

                                                            <label for="floatingInput">Name</label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                                                      <div class="form-floating">
                                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="" />

                                                            <label for="floatingInput">Email address</label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-12">
                                                      <div class="form-floating">
                                                            <input type="text" name="subject" id="name" class="form-control" placeholder="Name" required="" />

                                                            <label for="floatingInput">Subject</label>
                                                      </div>

                                                      <div class="form-floating">
                                                            <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>

                                                            <label for="floatingTextarea">Tell me about the
                                                                  project</label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-4 col-12 ms-auto">
                                                      <button type="submit" class="form-control">Submit</button>
                                                </div>
                                          </div>
                                    </form>
                              </div>

                              <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14022.149091025043!2d77.19862449093203!3d28.523566464882784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1f0dd053fdd%3A0x97d95c1a5860139f!2sSaket%2C%20New%20Delhi%2C%20Delhi%20110017!5e0!3m2!1sen!2sin!4v1702535646944!5m2!1sen!2sin" width="100%" height="250" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <h5 class="mt-4 mb-2">Center</h5>
                                    <p>Saket, New Delhi</p>
                              </div>
                        </div>
                  </div>
            </section>
      </main>

      <?php include('footer.php') ?>

      <!-- JAVASCRIPT FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/custom.js"></script>
</body>

</html>