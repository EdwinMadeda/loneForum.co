<?php 

   define('TITLE','Landingpage');
   include '../assets/layouts/header.php';  

?>
<section class="container top">
      
      <h1 class="logo">
          <a href=""><span>lone</span>Forum.Co</a>
      </h1>

    <nav class="navigation">
          <a class="hamburger-btn mobile"><span></span></a>
          <div class="nav-overlay-bg mobile"></div>

        <ul class="nav-wrapper">
            <li class="nav-link">
                <a href="#home"><i class="fa fa-home"></i>Home</a>
            </li>
            <li class="nav-link">
                    <a href=""><i class="fa fa-info-circle"></i>About us</a>
            </li>
            <li class="nav-link">
                <a href="#services"><i class="fa fa-book"></i>Services</a>
            </li>
            <li class="nav-link">
                <a href="#forums"><i class="fa fa-files-o"></i>Forums</a>
            </li>
            <li class="nav-link">
                <a href="../login/"><i class="fa fa-sign-in"></i>Login</a>
            </li>
            <li class="nav-link search">
                <i class="fa fa-search search-icon"></i>
                <i class="fa fa-close close-btn hidden"></i>
                <div class="search-wrapper hidden">
                    <div class="search-controls">
                        <input type="text" name="" id="search-btn">
                        <i class="fa fa-search search-icon"></i>
                    </div>
                    <ul class="search-output">
                        <!-- <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>Javascript</li> -->
                    </ul>
                </div>
            </li>
        </ul> 
    </nav>
</section> 

<section class="intro" id="home">
        <div class="intro-title">
            <p>Where the rubber meets the road</p>
        </div>

        <div class="intro-content">
            <p>
            Strongly feel the need to share your experiences, achievements, life lessons and so on, loneForum.co is here for you. 
            </p>

            <!-- <p>
            Picture this; Everythings just seems to be going haywire ,spiraling  out of control, falling apart and life shattered into pieces. 
            You're pissed off by some issue and need to rethink.
            </p> -->

            <p>
            We believe writing and sharing can be a game changer in this life we live in.
            We pride ourselves in being able to break down hot topics that affect our lives. As a free for all service everyone is welcome to share on their daily day to day up and downs...
            </p>
        </div>
        <a class="click-btn" href="../signup/">
            <i class="fa fa-sign-up"></i>Join Us
        </a>
</section>

</header>

<main>
   <section class="container" id="services">
        <div class="section-title">
     	  	<h1>Our Services</h1>
        </div>
        <ul class="service-tags">
            <li class="service-tag">
               <a href="#">
                <div class="icon">
                        <img src="../assets/images/pencil-alt.svg" height="25px">
                    </div>
                    <h4>Journal</h4>
                    <p>Track your feelings and emotions and reflect on how you're doing</p>
               </a>
            </li>
            <li class="service-tag">
               <a href="#">
                    <div class="icon">
                        <img src="../assets/images/calendar.svg" height="25px">
                    </div>
                    <h4>Goals and event reminders</h4>
                    <p>Challenge yourself by setting goals and reminders
                    </p>
               </a>
            </li>
            <li class="service-tag">
                <a href="#">
                    <div class="icon">
                        <img src="../assets/images/users.svg" height="25px">
                    </div>
                    <h4>Discussion Boards</h4>
                    <p>Get to connect with people like you in a our friendly community
                    </p>
                </a>
            </li>
            <li class="service-tag">
                <a href="#">
                    <div class="icon">
                        <img src="../assets/images/book.svg" height="25px">
                    </div>
                    <h4>Personal Stories</h4>
                    <p>Read inspiring stories whose lives have been transformed during their time with us
                    </p>
                </a>
            </li>
        </ul>

   </section>
   <section class="container full-screen" id="forums">
        <div class="section-title">
     	  	<h1>Forums</h1>
        </div>
        <ul class="forum-groups">
            <li class="forum-group">
                <div class="f-title">
                    <h3><a href="#">Introduce yourself</a></h3>
                    <img class="drop-down-img up" src="../assets/images/chevron-down.svg" alt="">
                </div>
                <div class="f-content">
                    <ul class="f-head f-row">
                        <li>Forums</li>
                        <li>Threads</li>
                        <li>Posts</li>
                        <li>Last Reply</li>
                    </ul>
                    <ul class="f-body">
                    <ul class="f-row">
                            <li>
                                <h4><a href="#">Welcome and Orientation</a></h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Officiis doloremque voluptatem ipsum expedita minus 
                                explicabo beatae eveniet corporis! Quos nemo voluptate cum 
                                veritatis autem rem, natus ut quibusdam sequi! Ea.</p>
                            </li>
                            <li>3844</li>
                            <li>22759</li>
                            <li><a href="#">by Sentient</a><br>26 minutes ago</li>
                    </ul>
                    <ul class="f-row">
                            <li>
                                <h4><a href="#">BB Social Zone</a></h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Officiis doloremque voluptatem ipsum expedita minus 
                                explicabo beatae eveniet corporis! Quos nemo voluptate cum 
                                veritatis autem rem, natus ut quibusdam sequi! Ea.</p>
                            </li>
                            <li>343</li>
                            <li>55035</li>
                            <li><a href="#">by david'n'goliath</a><br>1 hour ago</li>
                    </ul>
                    <ul class="f-row">
                            <li>
                                <h4><a href="#">Re-designing and upgrading the Online Forums</a></h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Officiis doloremque voluptatem ipsum expedita minus 
                                explicabo beatae eveniet corporis! Quos nemo voluptate cum 
                                veritatis autem rem, natus ut quibusdam sequi! Ea.</p>
                            </li>
                            <li>2</li>
                            <li>672</li>
                            <li><a href="#">by Summer Rose</a><br>1 day and 11 hours ago</li>
                    </ul>
                    </ul>
                </div>
                <a href="#" class="more-link">view all</a>
            </li>

            <li class="forum-group">
                <div class="f-title">
                    <h3><a href="#">Mental health conditions</a></h3>
                    <img class="drop-down-img up" src="../assets/images/chevron-down.svg" alt="">
                </div>
                <div class="f-content">
                    <ul class="f-head f-row">
                        <li>Forums</li>
                        <li>Threads</li>
                        <li>Posts</li>
                        <li>Last Reply</li>
                    </ul>
                    <ul class="f-body">
                        <ul class="f-row">
                            <li>
                                <h4><a href="#">Welcome and Orientation</a></h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Officiis doloremque voluptatem ipsum expedita minus 
                                explicabo beatae eveniet corporis! Quos nemo voluptate cum 
                                veritatis autem rem, natus ut quibusdam sequi! Ea.</p>
                            </li>
                            <li>3844</li>
                            <li>22759</li>
                            <li><a href="#">by Sentient</a><br>26 minutes ago</li>
                        </ul>
                        <ul class="f-row">
                            <li>
                                <h4><a href="#">BB Social Zone</a></h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Officiis doloremque voluptatem ipsum expedita minus 
                                explicabo beatae eveniet corporis! Quos nemo voluptate cum 
                                veritatis autem rem, natus ut quibusdam sequi! Ea.</p>
                            </li>
                            <li>343</li>
                            <li>55035</li>
                            <li><a href="#">by david'n'goliath</a><br>1 hour ago</li>
                        </ul>
                        <ul class="f-row">
                            <li>
                                <h4><a href="#">Re-designing and upgrading the Online Forums</a></h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Officiis doloremque voluptatem ipsum expedita minus 
                                explicabo beatae eveniet corporis! Quos nemo voluptate cum 
                                veritatis autem rem, natus ut quibusdam sequi! Ea.</p>
                            </li>
                            <li>2</li>
                            <li>672</li>
                            <li><a href="#">by Summer Rose</a><br>1 day and 11 hours ago</li>
                        </ul>
                    </ul>
                </div>
                <a href="#" class="more-link">view all</a>
            </li>
        </ul>


   </section>

   <section class="container" id="testimonials">
        <div class="section-title">
     	  	<h1>TESTIMONIALS</h1>
        </div>
        <div class="testimonials-content">
            <div class="testi-slider">

                    <!-- Slide1 -->
                <div class="slide">
                    <div class="img">
                            <img src="../assets/images/plofilepat16.png" alt="testi">
                    </div>
                    <div class="text">
                        <h6>Nancy Bayers</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>

                    <!-- Slide2 -->
                <div class="slide">
                    <div class="img">
                            <img src="../assets/images/plofilepat16.png" alt="testi">
                    </div>
                    <div class="text">
                        <h6>Nancy Bayers</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>

                <!-- Slide3 -->
                <div class="slide">
                    <div class="img">
                            <img src="../assets/images/plofilepat16.png" alt="testi">
                    </div>
                    <div class="text">
                        <h6>Nancy Bayers</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>

                 <!-- Slide4 -->
                 <div class="slide">
                    <div class="img">
                            <img src="../assets/images/plofilepat16.png" alt="testi">
                    </div>
                    <div class="text">
                        <h6>Nancy Bayers</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>

                <!-- Slide5 -->
                <div class="slide">
                    <div class="img">
                            <img src="../assets/images/plofilepat16.png" alt="testi">
                    </div>
                    <div class="text">
                        <h6>Nancy Bayers</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div>
                    
            </div>

            <!-- slide controls -->
            <div class="slide-controls"></div>
        </div>


   </section>

   <!-- <section class="container" id="what-others-say">
        WHAT OTHERS SAY
   </section> -->
</main>
<?php
    include '../assets/layouts/footer.php';
?>
   