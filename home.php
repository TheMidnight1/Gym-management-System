<?php require './database.php'?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/home.css" />
    <link rel="stylesheet" href="Css/aboutUs.css" />
    <link rel="stylesheet" href="Css/trainerPage.css" />
    <link rel="stylesheet" href="Css/resultMap.css" />
    <link rel="stylesheet" href="Css/clientTestomonial.css" />
    <link rel="stylesheet" href="Css/contactUs.css" />
    <link rel="stylesheet" href="Css/footer.css" />
    <link rel="stylesheet" href="Css/navStyle.css" />

    <title>Homepage</title>
</head>

<body>

    <?php include 'nav.php'; ?>
    <section>
        <div class="container">
            <div class="slider">
                <div class="slide slide1">
                    <div class="caption">
                        <h2 class="slider-h2">THE MIND IS PRIMARY</h2>
                        <p class="slider-p">PUSH THROUGH THE PAIN EVERYDAY</p>
                        <h3>Get body in shape and stay healthy</h3>
                        <button class="standard-btn">Join Us now</button>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="caption">
                        <h2 class="slider-h2">Slide2</h2>
                        <p class="slider-p">We gonna Write something here okay.</p>
                    </div>
                </div>
                <div class="slide slide3">
                    <div class="caption">
                        <h2 class="slider-h2">Slide3</h2>
                        <p class="slider-p">We gonna Write something here okay</p>
                    </div>
                </div>
                <div class="slide slide4">
                    <div class="caption">
                        <h2 class="slider-h2">Slide4</h2>
                        <p class="slider-p">We gonna Write something here okay</p>
                    </div>
                </div>
                <div class="slide slide1">
                    <div class="caption">
                        <h2 class="slider-h2">Slide1</h2>
                        <p class="slider-p">We gonna Write something here okay</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Next Section About us -->
        <div class="about-us" id="about-us-page">

            <img class="overlap-img" src="Images\aboutUsImg\aboutUsImg.png" alt="About Us" srcset="">

            <div class="about-us-text">
                <h3>About Us</h3>
                <h1>Gym Shark</h1>
                <p>We believe that the key to making life changing transformations is to ease out the journey by showing you the path and being the cheerleaders of your body transformation journey.
                    Here at The Physique Workshop, we provide you the exact tools you'll require to change your life around.
                    We have trainers who will not only help you through scientific methods, but also motivate, push you and be your friend when needed.
                    We are a complete gym, with highly customized guidance by our expert trainers providing you customized workout and diet systems.
                    With branches all over Kathmandu, you won't have reasons as to why you can't walk into one of our five branches.</p>
                <button class="standard-btn">More</button>
            </div>
        </div>
        <!-- Another Section:: Trainer -->
        <div class="trainer-page" id="trainer-page">
            <h1>Team of Expert Trainers</h1>
            <div class="container-trainer">
                <div class="trainer-1">
                    <a href=""><img src="Images\trainerImg\trainer-1.jpg" alt="Trainer"></a>

                </div>

                <div class="trainer-2">
                    <img src="Images\trainerImg\trainer-1.jpg" alt="Trainer">
                </div>

                <div class=" trainer-3">
                    <img src="Images\trainerImg\trainer-1.jpg" alt="Trainer">
                </div>
            </div>
        </div>
        <!-- Another section:: how we deliver result -->
        <div class="result-map" id="result-map">
            <h1 class="title-result">HOW WE DELIVER RESULTS</h1>

            <img src="Images\resultDeliver\result.png" alt="Good luck" class="resultImg">
        </div>
        <div class="client-testomonial">
            <h1>Client testomonial</h1>
            <div class="contain-testomonial">
                <div class="left-side">
                    <img src="Images\clientTestomonial\client1.jpg" alt="">
                </div>
                <div class="right-side">
                    <p class="paragraph-client">Gym Shark has given me confidence and ability to push myself to achieve my goals and be more positive and I love being part of this gym, there is a great atmosphere, trainers are so friendly and always on hand to give support or advice to their clients whenever they need regarding diet and exercises. Thanks to tpw family for providing us homely environment
                    </p>
                    <p class="client-name">-Nikesh Pandey</p>
                </div>
            </div>
            <div class="pages-btn">
                <button id="btn-client-1" href="" class="clients-btn btn-client1">
                    1
                </button>
                <button id="btn-client-2" href="" class="clients-btn btn-client2">
                    2
                </button>
                <button id="btn-client-3" href="" class="clients-btn btn-client3">
                    3
                </button>
                <button id="btn-client-4" href="" class="clients-btn btn-client4">
                    4
                </button>
            </div>
        </div>
        <div class="contact-us" id="contact-us">
            <div class="container-contact-us">
                <div class="left-side-contact">
                    <div class="contact-details">
                        <div class="boxes">
                            <h1>Phone:</h1>
                            <p>982222021</p>
                            <p>982222021</p>
                        </div>
                        <div class="boxes">
                            <h1>Email:</h1>
                            <p>saugat@gmail.com</p>
                            <p>sudarshan@gmail.com</p>
                        </div>
                        <div class="boxes">
                            <h1>Address</h1>
                            <p>Durbar Marg</p>
                        </div>
                    </div>
                </div>
                <div class="right-side-contact">
                    <div class="form-header">
                        <h3>Contact Us</h3>
                        <h1>GET IN TOUCH</h1>
                    </div>

                    <form action="contactUs/afterContactFormSubmit.php" class="contact-form" autocomplete="off" onsubmit="return validateContactUs()" method="POST">
                        <div class="container-form" >
                            <div class="form-first-row">
                                <input type="text" name="full-name" id="full-name" placeholder="Full Name">
                                
                                <input type="email" name="email_id" id="email" placeholder="someone@gmail.com">
                            </div>

                            <div class="form-second-row">
                                <input type="text" name="phone" id="phone" placeholder="Your Phone">
                                <input type="text" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-third-row">
                                <textarea name="description" class="textarea-class" id="description" cols="30" rows="10" placeholder="Your message"></textarea>

                            </div>
                            <div class="form-fourth-row">
                                <button type="submit" class="contact-btn" id="contact-us-button" name="contact-submit">Send</button>
                                <p  id="contact-result" style="color: red;"></p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


    </section>
    <footer class="end-footer">
        <div class="footer">
            <div class="footer-element footer-logo">
                <div id="brand"><a href="#">Gym Shark</a></div>
            </div>
            <div class="footer-element navigation-footer">
                <h1>Navigation</h1>
                <ul class="footer-ul-list">
                    <a href="home.php" class="footer-a">
                        <li class="footer-li">Home</li>
                    </a>
                    <a href="#about-us-page" class="footer-a">
                        <li class="footer-li">About Us</li>
                    </a>
                    <a href="#trainer-page" class="footer-a">
                        <li class="footer-li">Trainers</li>
                    </a>
                    <a href="#result-page" class="footer-a">
                        <li class="footer-li">Result Map</li>
                    </a>
                    <a href="testomonial" class="footer-a">
                        <li class="footer-li">Testomonial</li>
                    </a>
                </ul>
            </div>
            <div class="footer-element open-close-time">
                <h1>Opening Time</h1>
                <p>Sun-Fri: 6AM-8PM</p>
                <p>Sat-closed</p>
            </div>
        </div>

    </footer>
    <button class="center-con" id="scroll-to-top">
        <img src="Images/Icons/upArrow.png" alt="" srcset="">
    </button>
    <script>
        const btnScrollToTop = document.getElementById("scroll-to-top");
        btnScrollToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                left: 0,
                behaviour: "smooth"
            });
        });
    </script>
    <script src="Javascript/contactUs.js"></script>
</body>

</html>