<?php
    require_once "email_connect.php";
    extract($_POST);
    if(isset($submit))
    {
        $sql = "INSERT INTO `mails` (email) VALUES ('$email')";
        if($con->query($sql)===TRUE)
        {
            echo '<script> alert("Subcribed!")</script>';
        }
        else
        {
            echo '<script> alert("RETRY!")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students's Corner</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./1.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div id="top"></div>
    <header>
        <nav>
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand" href="./index.php">
                    <img src="./navbar-2-logo.png" alt="" style="width: 200px;">
                  </a>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                      
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a  href="#student-corner" class="nav-link">Student's</a>
                          </li>
                          <li class="nav-item">
                            <a href="#teacher-corner" class="nav-link">Teacher's</a>
                          </li>
                          <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                          </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </nav>
    </header>
    <section>
        <!-- <div class="float">
            <marquee behavior="scroll" scrollamount="3" direction="left" onmouseover="this.stop();" onmouseout="this.start();"infinite><a href="https://forms.gle/jRFwmZuoTtRPEPge8"><img src="./new.gif" alt="">Google-Form for Registration</a></marquee>
        </div> -->
        <div class="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./Carousel-Manipur-Technical-University.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel10.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel15.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel6.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel7.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./Carousel8.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section>
    <section>
        <div class="heading" id="about-us">
            <h4><i><b>About Us</b></i></h4>
            <div class="about-para">
                <p>This Webpage is Solely Developed for Mini-Project Purpose </p>
                <p>The Main Goal of the project is to make the webpage user-friendly</p>  
                <p>We are currently pursuing B.TECH at <a href="http://mtu.ac.in">Manipur Technical University</a></p>
            </div>
        </div>
        <div class="profiles">
            <div class="box">
                <a href="https://www.instagram.com/gaikinlung/" target="_blank">
                    <img src="./_DSF5328.png" alt="">
                </a>
                <div class="para">
                    <p><i>"Gaikinlung Pamei"</i></p>
                </div>
            </div>
            <div class="box">
                <a href="https://www.instagram.com/_kaspar_panmei_/" target="_blank">
                    <img src="./frame.png" alt="">
                </a>
                <div class="para">
                    <p><i>"Kaspar Panmei"</i></p>
                </div>
            </div>
            <div class="box">
                <a href="https://www.instagram.com/t_h_e_m_m_y_/" target="_blank">
                    <img src="./IMG_2022_18_10.png" alt="">
                </a>
                <div class="para">
                    <p><i>"Themyarmi Varengnao"</i></p>
                </div>
            </div>
        </div>
    </section>
    <article>
        <div class="container">
            <div class="heading" id="student-corner">
                <h4><i><b>Student's Corner</b></i></h4>
            </div>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="./civil.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Civil Engineering Deparment
                        </h3>
                        <a href="./civildepartment.html" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="./Department-of-Electrical-Engineering.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Electrical Engineering Department
                        </h3>
                        <a href="./electricaldepartment.html" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="./ME.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Mechanical Engineering Department
                        </h3>
                        <a href="./mechanical.html" target="_blank" class="btn"> Read More</a>
                    </div>
                </div>
                
                <div class="box">
                    <div class="image">
                        <img src="./MTU-Dept-of-Cse.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Computer Science and Engineering Deparment
                        </h3>
                        <a href="./Computer.html" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
            
                <div class="box">
                    <div class="image">
                        <img src="./ece_feature.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Electronics & Com. Engineering
                        </h3>
                        <a href="./electronics.html" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
            </div>
            <div id="load-more" onclick="loadMoreBtn">
                Load More
            </div>
    </article>
    <article class="teacher-corner">
        <div class="container">
            <div class="heading" id="teacher-corner">
                <h4><i><b>Teacher's Corner</b></i></h4>
            </div>
            <div class="box-container">
                <div class="newbox">
                    <div class="image">
                        <img src="./teacher-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                            Civil Engineering Deparment
                        </h3>
                        <a href="http://mtu.ac.in/civil-engineering/#1650429732048-596db713-dcad" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
                <div class="newbox">
                    <div class="image">
                        <img src="./teacher-2-ee.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Electrical Engineering Department
                        </h3>
                        <a href="http://mtu.ac.in/electrical-engineering/#1649323114783-6466ec70-29eb" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
                <div class="newbox">
                    <div class="image">
                        <img src="./teacher-2-me.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Mechanical Engineering Deparment
                        </h3>
                        <a href="http://mtu.ac.in/mechanical-engineering/" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
                
                <div class="newbox">
                    <div class="image">
                        <img src="./teacher-2-cse.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Computer Science and Engineering Department
                        </h3>
                        <a href="http://mtu.ac.in/computer-science-and-engineering/#1650259436226-9baf2441-abe2" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
            
                <div class="newbox">
                    <div class="image">
                        <img src="./teacher-2-ece.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Electronics & Comm. Engineering
                        </h3>
                        <a href="http://mtu.ac.in/electronics-and-communication-engineering-2/#1650264830277-89f2ebd0-a5f9" class="btn" target="_blank"> Read More</a>
                    </div>
                </div>
            </div>
    </article>
    <footer id="contact">
        <div class="cols">
            <div class="heading" id="teacher-corner">
                <h4><i><b>Contact</b></i></h4>
            </div>
            <div class="new-cols">
                <div class="footer-cols">
                    <div class="img">
                        <img src="./navbar-2-logo.png" alt="">
                    </div>
                    <h4><i>Address</i></h4>
                    <p><a href="https://goo.gl/maps/sh2jmfzEPLsVeCvu6" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                          Visit
                    </a></p>
                    <div class="phone">
                        <div class="icons-number">
                            <div class="icons">
                                <div class="whatsapp" id="whats">
                                    <a href="https://wa.me/7982239573" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                          </svg>
                                    </a>
                                </div>
                                <div class="facebook" id="face">
                                    <a href="https://www.facebook.com/kaspar.panmei.7/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                          </svg>
                                    </a>
                                </div>
                                <div class="twitter" id="tweet">
                                    <a href="https://twitter.com/home" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                          </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-cols">
                    <h4><i>Location</i></h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14488.12773759532!2d93.89609109999999!3d24.794359999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3749288294eb86f3%3A0xd89d2bf5994e84d2!2zMjTCsDQ3JzQ1LjIiTiA5M8KwNTQnMTguMyJF!5e0!3m2!1sen!2sin!4v1666528708473!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="footer-cols">
                    <form action="" method="post">
                    <h4><i>Subscribe</i></h4>
                    <label for="inputPassword5" class="form-label">Email</label>
                    <input type="email" required id="inputemail" class="form-control" aria-describedby="email" style="width: 250px;" name="email">
                    <button class="btn btn-primary" type="submit" name="submit"> Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="back-to-top">
                <a href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-caret-up-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M3.544 10.705A.5.5 0 0 0 4 11h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5a.5.5 0 0 0-.082.537z"/>
                      </svg>
                </a>
            </div>
            </div>
        </div> 
    </footer>
</body>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</html>