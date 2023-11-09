<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Nunito&family=Poppins:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Aither Indonesia</title>
</head>

<body>

<!-- logo navbar -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="navbar-bg"></div>
        <a class="navbar-brand" href="https://www.instagram.com/isauraqinthara/">
            <img src="logo.png" height="40px">
        </a>

<!-- top navbar -->
        <div class="container">
            <ul class="navbar-nav">
            <div class="row">
                <li class="nav-item">
                    <a class="nav-link" href="#home">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#support">Supported By</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#support">Aither's team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#support">Aither's Gallery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#contact" id="navbardrop" data-toggle="dropdown">Contact Us</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="https://www.instagram.com/isauraqinthara/">Instagram</a>
                      <a class="dropdown-item" href=" ">Line</a>
                      <a class="dropdown-item" href="http://wa.me/6282240024027">Whatsapp</a>
                  </div>
                </li>
                <li class="nav-item dropdown tugas">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Tugas</a>
                    <div class="dropdown-menu">
                        <a href="{{url('/blog')}}">1</a><br>
                        <a href="{{url('/hello')}}">2</a><br>
                        <a href="{{url('/js1')}}">3</a><br>
                        <a href="{{url('/js2')}}">4</a><br>
                        <a href="{{url('/link')}}">5</a><br>
                        <a href="{{url('/linktree')}}">6</a><br>
                        <a href="{{url('/navbarAliyah')}}">7</a><br>
                        <a href="{{url('/navbarQin')}}">8</a><br>
                        <a href="{{url('/responsive')}}">9</a><br>
                        <a href="{{url('/responsive2')}}">10</a><br>
                        <a href="{{url('/style')}}">11</a><br>
                        <a href="{{url('/tugas3')}}">12</a><br>
                  </div>
                </li>
            </div>
            </ul>
        </div>
    </nav>

<!-- page 1 -->
<div class="container page1" id="home ">
    <img src="foto-produk.png" class="foto-produk">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col-12 page1-1">
                    <p><b>Launching<br>Soon!</b></p>
                </div>
                <div class="col-12 page1-2">
                    <p>In the meantime, Sign up for our monthly newsletter to <b>stay up to date</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <input type="text" class="form-control" id="email" placeholder="Enter your email address" name="email">
                </div>
                <div class="col-4">
                    <button type="button" class="btn-custom"><b>Notify me</b></button>
                </div>
            </div>

        </div>
        <div class="col-4 page1-3">

        </div>
    </div>
    <div class="row page2">
        <div class="col-12 page2-1">
            <p>Welcome to</p>
        </div>
        <div class="col-12 page2-2">
            <img src="logo.png">
        </div>
        <div class="col-12 page2-3">
            <p>Biotechnology-Based <span class="air-purifier">Modern Air Purifier</span></p>
        </div>
        <div class="col-12 page2-4">
            <span class="indoor-plants">Your Indoor Plants!</span>
        </div>
        <div class="col-12 page2-5">
            <p>We use <b>micro-algae biotechnology</b> to convert carbon emissions into high-quality oxygen,
                providing <b>clean air</b> that's convenient <b>for families with pregnant women and infants</b>.
                Our mission is to <b>improve respiratory health and reduce carbon footprint</b>, all while
                making it easier for families to <b>breathe easy</b>.</p>
        </div>
    </div>
    <div class="row page3">
        <div class="col-md-7">
            <div class="square">
                <div class="row">
                    <div class="col-md-9">
                        <h5><b>Do you want to protect your baby and family from air pollution at home?</b></h5>
                        <p>According to the U.S. EPA, indoor air can be 2-5 times more polluted than outdoor air.
                            Meanwhile, the child's immune system is immature and very vulnerable to bacteria, fungi, and viruses.</p>
                    </div>
                    <div class="col-md-auto">
                        <img src="foto1.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="square">
                <div class="row">
                    <div class="col-md-auto foto2">
                        <img src="foto2.png">
                    </div>
                    <div class="col-md-9">
                        <h5><b>Do you want to protect your baby and family from air pollution at home?</b></h5>
                        <p>According to the U.S. EPA, indoor air can be 2-5 times more polluted than outdoor air.
                            Meanwhile, the child's immune system is immature and very vulnerable to bacteria, fungi, and viruses.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="square">
                <div class="row">
                    <div class="col-md-9">
                        <h5><b>Do you want to protect your baby and family from air pollution at home?</b></h5>
                        <p>According to the U.S. EPA, indoor air can be 2-5 times more polluted than outdoor air.
                            Meanwhile, the child's immune system is immature and very vulnerable to bacteria, fungi, and viruses.</p>
                    </div>
                    <div class="col-md-auto">
                        <img src="foto3.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- page 4 -->
<div class="row page4">
    <div class="col-12">
        <img src="reason.png" class="reason">
    </div>
    <div class="col-6 page4-1">
        <div class="square1 page4-2">
            <div class="row">
                <div class="col-md-auto">
                    <img src="cloud.png" class="img4">
                </div>
                <div class="col-md-8">
                    <h5><b>Giving High Quality O2</b></h5>
                    <p>Aither converts CO2 to O2 that is 10 times more powerful than an 11-year-old tree.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 page4-1">
        <div class="square1">
            <div class="row">
                <div class="col-md-auto">
                    <img src="heart.png" class="img4">
                </div>
                <div class="col-md-8">
                    <h5><b>Healthy</b></h5>
                    <p>Aither absorbs 0.3 micron bacteria, fungi, and viruses with high tech HEPA Filter.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="square1 page4-3">
            <div class="row">
                <div class="col-md-auto">
                    <img src="money.png" class="img4">
                </div>
                <div class="col-md-8">
                    <h5><b>Affordable</b></h5>
                    <p>Our price is competitive with the other air purifier that have the same technology.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page 5 -->
<div class="row page4">
    <div class="square2">
        <div class="col-12">
            <span class="supported">SUPPORTED BY</span>
        </div>
        <div class="row page5-1">
            <div class="col-6">
                <div class="row">
                    <div class="col-md-auto page5-2">
                        <img src="its.png" class="img4">
                    </div>
                    <div class="col-md-8">
                        <h5><b>Sepuluh Nopember Institute Of Technology, Surabaya</b></h5>
                        <p>Teknik Kimia Street, Surabaya<br>
                            East Java<br>
                            60111</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-md-auto">
                        <img src="kemenkop.png" class="img4">
                    </div>
                    <div class="col-md-8">
                        <h5><b>Ministry of Cooperatives and SMEs Republic of Indonesia</b></h5>
                        <p>H. R. Rasuna Said Street Kav. 3-4,<br>
                            Jakarta 12940, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page5-3">
            <div class="col-6">
                <div class="row">
                    <div class="col-md-auto page5-2">
                        <img src="bio.png" class="img4">
                    </div>
                    <div class="col-md-8">
                        <h5><b>Biology Department of Sepuluh Nopember Institute of Technology</b></h5>
                        <p>Teknik Kimia Street, Surabaya<br>
                            East Java<br>
                            60111</p>
                    </div>
                </div>
            </div>
            <div class="col-6 page5-3">
                <div class="row">
                    <div class="col-md-auto">
                        <img src="ILBI.png" class="img4">
                    </div>
                    <div class="col">
                        <h5><b>Business Incubator of Sepuluh Nopember Institute of Technology</b></h5>
                        <p>Science Technopark Sepuluh Nopember <br>Institute of Technology, Surabaya<br>
                            East Java<br>
                            60111</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page 6 -->
<span class="team">AITHER'S TEAM</span>
<div class="row page6-1">
    <div class="col-3 page6-1">
        <div class="row">
            <div class="col-12">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="farrel.png" alt="Avatar">
                        </div>
                        <div class="flip-card-back">
                            <h3><b>Farrel Kamal</b></h3>
                            <p>Founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="row">
            <div class="col-12">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="qintha.png" alt="Avatar">
                        </div>
                        <div class="flip-card-back">
                            <h3><b>Qintha</b></h3>
                            <p>Finance Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="row">
            <div class="col-12">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="azkha.png" alt="Avatar">
                        </div>
                        <div class="flip-card-back">
                            <h3><b>Azkha</b></h3>
                            <p>Operational Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="row">
            <div class="col-12">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="daffa.png" alt="Avatar">
                        </div>
                        <div class="flip-card-back">
                            <h3><b>Daffa</b></h3>
                            <p>Sales & Partnership Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="col-12">
    <div class="row">
        <div class="col-3">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="anand.png" alt="Avatar">
                    </div>
                    <div class="flip-card-back">
                        <h3><b>Anand</b></h3>
                        <p>Branding</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="sima.png" alt="Avatar">
                    </div>
                    <div class="flip-card-back">
                        <h3><b>Sima</b></h3>
                        <p>Branding</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="nando.png" alt="Avatar">
                    </div>
                    <div class="flip-card-back">
                        <h3><b>Nando</b></h3>
                        <p>Product Development</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="tinut.png" alt="Avatar">
                    </div>
                    <div class="flip-card-back">
                        <h3><b>Tinut</b></h3>
                        <p>Biology Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- page 7 -->
<span class="team">AITHER'S GALLERY</span>
<div class="row page7">
    <div class="row">
        <div class="col-4">
            <img src="aither1.JPG">
        </div>
        <div class="col-4">
            <img src="aither2.JPG">
        </div>
        <div class="col-4">
            <img src="aither3.JPG">
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="aither4.JPG">
        </div>
        <div class="col-4">
            <img src="aither5.JPG">
        </div>
        <div class="col-4">
            <img src="aither6.JPG">
        </div>
    </div>
</div>


<!-- page 8 -->
<div class="row page8">
    <div class="square3">
        <div class="container">
            <div class="row">
                <img src="aither.png">
            </div>
            <div class="row">
                <h2>We'd love to Hear From You</h2><br>
                <p> Let us know if you have any suggestion or curiosity about our Features, Product, and Project<br>
                    We're ready to answer all of your question! ❤️</p>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn-custom1">Back to Homepage</button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn-custom2">Read Our Article</button>
                </div>
            </div>
            <div class="row page8-1">
                <div class="col-6">
                    <p id="p2">Science Techno-park ITS 2nd Floor<br>Surabaya, Indonesia 60111</p>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="instagram.png" id="img8" href="https://www.instagram.com/isauraqinthara/">
                        </div>
                        <div class="col-6">
                            <p id="p3" href="https://www.instagram.com/isauraqinthara/">isauraqinthara</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="email.png" id="img8" href="mailto: isauraqinthara28@gmail.com">
                        </div>
                        <div class="col-6">
                            <p id="p3" href="mailto: isauraqinthara28@gmail.com">isauraqinthara28@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page 9 -->
<span class="team">FILL YOUR CONTACT</span>
<div class="container page9">
    <form id="contact-form" action="action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapura">Singapura</option>
            <option value="Malaysia">Malaysia</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>
</div>


<!-- footer -->
<div class="footer">
    <div class="footer-logo">
        <img src="aither.png" alt="Aither Logo">
    </div>
    <div class="footer-social">
        <span>tugas</span>
        <a href="{{url('/blog')}}">1</a>
        <a href="{{url('/hello')}}">3</a>
        <a href="{{url('/js1')}}">4</a>
        <a href="{{url('/js2')}}">5</a>
        <a href="{{url('/link')}}">6</a>
        <a href="{{url('/linktree')}}">7</a>
        <a href="{{url('/navbarAliyah')}}">8</a>
        <a href="{{url('/navbarQin')}}">9</a>
        <a href="{{url('/responsive')}}">10</a>
        <a href="{{url('/responsive2')}}">11</a>
        <a href="{{url('/style')}}">12</a>
        <a href="{{url('/tugas3')}}">13</a>
        <a href="https://www.instagram.com/isauraqinthara">
            <img src="instagram.png" alt="Instagram">
        </a>
        <a href="mailto:isauraqinthara28@gmail.com">
            <img src="email.png" alt="Email">
        </a>
    </div>
</div>

</body>
</html>
