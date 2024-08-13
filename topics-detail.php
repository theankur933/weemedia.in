<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Topic Detail Page</title>

      <!-- CSS FILES -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
            rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-icons.css" rel="stylesheet">
      <link href="css/templatemo-topic-listing.css" rel="stylesheet">

      <!-- Favicon Image -->
      <link rel="icon" type="image/png" href="images/favicon-icon2.jpg">
</head>

<body id="top">

      <main>
            <?php include('header.php') ?>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                  <div class="container">
                        <div class="row justify-content-center align-items-center">

                              <div class="col-lg-5 col-12 mb-5">
                                    <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>

                                                <li class="breadcrumb-item active" aria-current="page">Web Design</li>
                                          </ol>
                                    </nav>

                                    <h2 class="text-white">Introduction to <br> Web Design 101</h2>

                                    <div class="d-flex align-items-center mt-5">
                                          <a href="#topics-detail"
                                                class="btn custom-btn custom-border-btn smoothscroll me-4">Read
                                                More</a>

                                          <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                                    </div>
                              </div>

                              <div class="col-lg-5 col-12">
                                    <div class="topics-detail-block bg-white shadow-lg">
                                          <img src="images/topics/undraw_Remote_design_team_re_urdx.png"
                                                class="topics-detail-block-image img-fluid">
                                    </div>
                              </div>

                        </div>
                  </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                  <div class="container">
                        <div class="row">

                              <div class="col-lg-8 col-12 m-auto">
                                    <h3 class="mb-4">Introduction to Web Design</h3>

                                    <p>So how can you stand out, do something unique and interesting, build an online
                                          business, and get paid enough to change life. Please visit TemplateMo website
                                          to download free website templates.</p>

                                    <p><strong>There are so many ways to make money online</strong>. Below are several
                                          platforms you can use to find success. Keep in mind that there is no one path
                                          everyone can take. If that were the case, everyone would have a million
                                          dollars.</p>

                                    <blockquote>
                                          Freelancing your skills isn’t going to make you a millionaire overnight.
                                    </blockquote>

                                    <div class="row my-4">
                                          <div class="col-lg-6 col-md-6 col-12">
                                                <img src="images/businesswoman-using-tablet-analysis.jpg"
                                                      class="topics-detail-block-image img-fluid">
                                          </div>

                                          <div class="col-lg-6 col-md-6 col-12 mt-4 mt-lg-0 mt-md-0">
                                                <img src="images/colleagues-working-cozy-office-medium-shot.jpg"
                                                      class="topics-detail-block-image img-fluid">
                                          </div>
                                    </div>

                                    <p>Most people start with freelancing skills they already have as a side hustle to
                                          build up income. This extra cash can be used for a vacation, to boost up
                                          savings, investing, build business.</p>
                              </div>

                        </div>
                  </div>
            </section>


            <section class="section-padding section-bg">
                  <div class="container">
                        <div class="row justify-content-center">

                              <div class="col-lg-5 col-12">
                                    <img src="images/rear-view-young-college-student.jpg"
                                          class="newsletter-image img-fluid" alt="">
                              </div>

                              <div
                                    class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                                    <form class="custom-form subscribe-form" action="#" method="post" role="form">
                                          <h4 class="mb-4 pb-2">Get Newsletter</h4>

                                          <input type="email" name="subscribe-email" id="subscribe-email"
                                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address"
                                                required="">

                                          <div class="col-lg-12 col-12">
                                                <button type="submit" class="form-control">Subscribe</button>
                                          </div>
                                    </form>
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