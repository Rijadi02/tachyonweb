<?php
error_reporting(0);
if(isset($_POST["submit"]))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    mail("tachyondevelop@gmail.com", $name. " " . $email, $content);
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tachyon Developers</title>
        <link href="css/styles.css" rel="stylesheet" />
        <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    <nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark bg-primary fixed-top">
                        <div class="container">
                            <a class="navbar-brand text-white" href="#">Tachyon Developers</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto mr-lg-5">
                                    <li class="nav-item"><a class="nav-link" href="#Home">Home </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#Features">Features </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#Projects">Projects </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#Team">Team </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#Contact">Contact </a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <header id="Home" class="page-header page-header-dark bg-gradient-primary-to-secondary">
                        <div class="page-header-content pt-10">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6" data-aos="fade-up">
                                        <h1 class="page-header-title">Developing the future</h1>
                                        <p class="page-header-text mb-5">Faster than light itself!</p>
                                        <!-- <a class="btn btn-white text-gray-600 btn-marketing rounded-pill lift lift-sm" href="index.html">View Pages<i class="fas fa-arrow-right ml-1"></i></a> -->
                                    </div>
                                    <div class="col-lg-6 d-none d-lg-block" data-aos="fade-up" data-aos-delay="50"><img class="img-fluid" src="assets/img/foto/tachyon-white.png" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-rounded text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </header>
                    <section id="Features" class="bg-white py-10">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="layers"></i></div>
                                    <h3>Manage your costumers</h3>
                                    <p class="mb-0">Our team can build systems that make it easy to manage your costumers and your data.</p>
                                </div>
                                <div class="col-lg-4 mb-5 mb-lg-0">
                                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="smartphone"></i></div>
                                    <h3>Next-gen mobile apps</h3>
                                    <p class="mb-0">We build apps for both Android and iOS with modern designs.</p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="code"></i></div>
                                    <h3>Websites and more!</h3>
                                    <p class="mb-0">What better way to reach your costumers than a beautifully designed, fully functional website!</p>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-rounded text-light">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </section>
                    <section id="Projects" class="bg-light py-10">
                        <div class="container z-1">
                            <div class="card mb-5" data-aos="fade-right">
                                <div class="row no-gutters">
                                    <div class="col-md-6"><img class="img-fluid" src="assets/img/foto/xcom.jpg" alt="..." /></div>
                                    <div class="col-md-6">
                                        <div class="card-body d-flex align-items-center justify-content-center h-100 flex-column">
                                            <h3 class="card-title font-weight-bold text-uppercase mb-2">XCOM</h3>
                                            <p class="card-text font-weight-light mb-4"><center>E-commerce/Augumented Reality mobile application</center></p>
                                            <a class="btn btn-outline-dark btn-marketing rounded-pill" href="https://x-com.store/ ">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-5" data-aos="fade-left">
                                <div class="row no-gutters">
                                    <div class="col-md-6 order-1 order-md-0">
                                        <div class="card-body d-flex align-items-center justify-content-center h-100 flex-column">
                                            <h3 class="card-title font-weight-bold text-uppercase mb-2">Atomos AR</h3>
                                            <p class="card-text font-weight-light mb-4"><center>Physics based educational mobile application</center></p>
                                            <a class="btn btn-outline-dark btn-marketing rounded-pill" href="https://play.google.com/store/apps/details?id=com.TaychonDevelopers.Atomos">View</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-0 order-md-1"><img class="img-fluid" src="assets/img/foto/atomos.jpg" alt="..." /></div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-right">
                                <div class="row no-gutters">
                                    <div class="col-md-6"><img class="img-fluid" src="assets/img/foto/testi.jpg" alt="..." /></div>
                                    <div class="col-md-6">
                                        <div class="card-body d-flex align-items-center justify-content-center h-100 flex-column">
                                            <h3 class="card-title font-weight-bold text-uppercase mb-2">Matura</h3>
                                            <p class="card-text font-weight-light mb-4"><center>Educational application for students</center></p>
                                            <a class="btn btn-outline-dark btn-marketing rounded-pill" href="https://play.google.com/store/apps/details?id=com.TachyonDevelopers.TestiIMatures">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="svg-border-rounded text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
            
                    </section>




                    <!-- <hr class="m-0" /> -->
                    <section id="Team" class="bg-white pt-10">
                        <div class="container">
                            <div class="text-center mb-10">
                                <h2>Our Team</h2>
                                
                            </div>
                            <div class="row z-1">
                                <div class="col-lg-6 mb-5 mb-lg-n10" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card pricing h-100">
                                        <div class="card-body p-5">
                                            <div class="col-xl-12 col-lg-12 text-center">
                                                <img class="mb-1" src="assets/img/foto/rijad.jpg" style="width: 100%;" /><h6>Rijad Morina</h6>
                                                <p class="card-text py-5">Experienced in Research, Web development, 3D modeling, Python(Django), PHP, HTML&CSS&JS. <br>Role: Project Manager</p>
                                                <br>
                                                <div class="align-items-center">
                                                        <h1>
                                                        <a class="icon-list-social-link text-decoration-none text-dark" href="https://www.instagram.com/notrijad/"> <i class="fab fa-instagram"> </i> </a>
                                                        <a class="icon-list-social-link text-decoration-none text-dark" href="https://www.facebook.com/rijad.morina"> <i class="fab fa-facebook"></i> </a> 
                                                        <a class="icon-list-social-link text-decoration-none text-dark" href="https://github.com/Rijadi02"> <i class="fab fa-github"></i> </a>
                                                        </h1> <!-- <a class="icon-list-social-link" href="javascript:void(0);"> <i class="fab fa-twitter"></i> </a> -->
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-5 mb-lg-n10" data-aos="fade-up">
                                    <div class="card pricing h-100">
                                        <div class="card pricing h-100">
                                            <div class="card-body p-5">
                                                <div class="col-xl-12 col-lg-12 text-center">
                                                    <img class="mb-1" src="assets/img/foto/venis.jpg" style="width: 100%;" /><h6>Venis Morina</h6>
                                                     <p class="card-text py-5">Experienced in App development, Web development, Algorithms, C#, Python (Django, OpenCV), PHP, Photoshop and many more! <br> Role: Main Developer  </p>
                                                     <div class="align-items-center">
                                                        <h1>
                                                        <a class="icon-list-social-link text-decoration-none text-dark" href="https://www.instagram.com/venis.morina/"> <i class="fab fa-instagram"> </i> </a>
                                                        <a class="icon-list-social-link text-decoration-none text-dark" href="https://www.facebook.com/venis.venimorina"> <i class="fab fa-facebook"></i> </a> 
                                                        <a class="icon-list-social-link text-decoration-none text-dark" href="https://github.com/Rijadi02"> <i class="fab fa-github"></i> </a>
                                                        </h1> <!-- <a class="icon-list-social-link" href="javascript:void(0);"> <i class="fab fa-twitter"></i> </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="svg-border-rounded text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div>
                    </section>



                    

                   <section id="Contact" class="bg-dark pt-10">
                    <br>
                    <br>
                    <br>
                    <br>

                        
                        
                    </section>
                    <section class="bg-dark pt-10">
                        <div class="container mt-5">
                            <!-- <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h4>Ready to get started?</h4>
                                    <p class="lead mb-5 mb-lg-0 text-gray-500">Get in touch or create an account.</p>
                                </div>
                                <div class="col-lg-6 text-lg-right"><a class="btn btn-primary btn-marketing rounded-pill mr-3 my-2 lift lift-sm" href="#!">Contact Sales</a><a class="btn btn-white btn-marketing rounded-pill my-2 lift lift-sm" href="#!">Create Account</a></div>
                            </div> -->
                            <!-- <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label class="text-dark" for="inputName">Full name</label><input class="form-control py-4" id="inputName" type="text" placeholder="Full name" /></div>
                                    <div class="form-group col-md-6"><label class="text-dark" for="inputEmail">Email</label><input class="form-control py-4" id="inputEmail" type="email" placeholder="name@example.com" /></div>
                                </div>
                                <div class="form-group"><label class="text-dark" for="inputMessage">Message</label><textarea class="form-control py-3" id="inputMessage" type="text" placeholder="Enter your message..." rows="4"></textarea></div>
                                <div class="text-center"><button class="btn btn-primary btn-marketing mt-4" type="submit">Submit Request</button></div>
                            </form> -->


                            <div>
                                
                               
                
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 text-center text-white">
                                        <h2 class="text-white">Contact Us</h2>
                                        <p class="lead mb-5"><!--Contact us and we'll get back to you as soon as possible with a solution to whatever issues you're having with SB UI Kit Pro.--></p>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-10 text-white">
                                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                                        <div class="section-preheading">Address</div>
                                        <p class="text-light pt-3">Drenas, Kosovo</p>
                                    </div>
                                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                                        <div class="section-preheading">Phone Number</div>
                                       <p class="text-light pt-3">(383) 44 575 052</p>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <div class="section-preheading">Email Address</div>
                                        <p class="text-light pt-3">tachyondevelop@gmail.com</p>
                                    </div>
                                </div>
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6"><label class="text-light" for="inputName">Full name</label><input class="form-control py-4" id="inputName" name="name" type="text" placeholder="Full name"></div>
                                        <div class="form-group col-md-6"><label class="text-light" for="inputEmail">Email</label><input class="form-control py-4" id="inputEmail" name="email" type="email" placeholder="name@example.com"></div>
                                    </div>
                                    <div class="form-group"><label class="text-light" for="inputMessage">Message</label><textarea class="form-control py-3" id="inputMessage" name="content" type="text" placeholder="Enter your message..." rows="4"></textarea></div>
                                    <div class="text-center"><button name="submit" class="btn btn-primary btn-marketing mt-4" type="submit">Submit Request</button></div>
                                </form>
                            </div>


                        </div>
                        
                    </section>
                    <!-- <hr class="m-0" /> -->
                </main>
            </div>
            <div id="layoutDefault_footer">
                <footer class="footer pt-5 pb-5 mt-0 bg-dark footer-dark">
                    <div class="container">
                        <!-- <div class="row">
                            <div class="col-lg-3">
                                <div class="footer-brand">Tachyon Developers</div>
                                <div class="mb-3">Build better websites</div>
                                <div class="icon-list-social mb-5">
                                    <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-instagram"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-facebook"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-github"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Landing</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Pages</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Sections</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Documentation</a></li>
                                            <li><a href="javascript:void(0);">Changelog</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Technical</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Documentation</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Changelog</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Theme Customizer</a></li>
                                            <li><a href="javascript:void(0);">UI Kit</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Includes</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Utilities</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Components</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Layouts</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Code Samples</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Products</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Affiliates</a></li>
                                            <li><a href="javascript:void(0);">Updates</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Privacy Policy</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Terms and Conditions</a></li>
                                            <li><a href="javascript:void(0);">License</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <hr class="my-5" />
                        <div class="row align-items-center">
                            <div class="col-md-6 small">Copyright &copy; Tachyon Developers 2020</div>
                            <div class="col-md-6 text-md-right small">
                       
                                <!-- &middot; -->
                                <a href="#">TachyonDev</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                disable: 'mobile',
                duration: 600,
                once: true
            });
        </script>
    </body>
</html>
