<?php 

   define('TITLE','Homepage');
   include '../assets/layouts/header.php';  
   check_logged_in();

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
                <a href=""><i class="fa fa-home"></i>Home</a>
            </li>
            <li class="nav-link">
                    <a href=""><i class="fa fa-files-o"></i>My Forums</a>
            </li>
            <li class="nav-link">
                <a href=""><i class="fa fa-calendar-o"></i>Calender</a>
            </li>
            <li class="nav-link">
                <a href=""><i class="fa fa-caret-down"></i>More..</a> 
                <ul class="sub-nav-wrapper">
                    <li class="nav-link">
                        <a href=""><i class="fa fa-info-circle"></i>About Us</a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-clipboard"></i>Journal</a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-address-book"></i>Personal Stories</a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-address-book"></i>How to guides</a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-address-book"></i>Latest topics & statistics</a>
                    </li>
                </ul>
            </li>
            <li class="nav-link" title="notifications">
                <a href=""><i class="fa fa-microphone"><span class="number-link">135</span></i></a>
                
            </li>
            <li class="nav-link" title="new messages">
                <a href=""><i class="fa fa-comment"><span class="number-link">3</span></i></a>
            </li>
            <li class="nav-link search" title="search">
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
            <li class="nav-link" title="help documentation">
                <a href=""><i class="fa fa-question-circle"></i></i></a>
            </li>
        </ul> 
    </nav>
    <div class="user-profile">
        <img src="../assets/uploads/_defaultUser.png" alt="" class="avatar">
        <i class="fa fa-caret-down drop-down-icon"></i>
        <ul class="drop-down-menu">
            <li class="my-profile nav-link"><a href=""><i class="fa fa-user-o"></i>My profile</a></li>
            <li class="edit-profile nav-link"><a href=""><i class="fa fa-edit edit_profile"></i>Edit Profile</a></li>
            <li class="edit-profile nav-link"><a href=""><i class="fa fa-cog"></i>Settings</a></li>
            <li class="logout nav-link"><a href="../logout/"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul> 
    </div> 
</section> 

<section class="bottom">
   <div class="topbar">
        <div class="bread_crumbs">
            <p>Home 
                <span>&#10095;</span>
               Calender
            </p>
        </div>
   </div>
   <aside class="sidebar my_menu">
        <div class="menu_slide_out hide">
            <p class="username">My Menu</p>
            <i class="menu_slide_out_btn">
                <span class="out">&#10094;</span>
                <span class="in">&#10095;</span>
            </i>
        </div>
        <div class="menu_body">
            <div class="user_cont">
               <div class="img">
                    <img src="../assets/uploads/_defaultUser.png" alt="" class="avatar">
                    <p class="username">Jambi</p>
               </div>
                <i class="fa fa-edit edit_profile"></i>
            </div>
            <div class="my_categories_cont">
                <div class="head">
                    <div class="title"> 
                        <h3>My Categories</h3>
                        <i class="fa fa-caret-down drop-down-icon"></i>
                        <div class="title_select">
                            <h3>All Categories</h3>
                        </div>
                    </div>
                    <i class="fa fa-search search-icon mycategory_search_btn"></i>
                </div>
                <div class="search_category">
                    <input type="text" name="">
                    <i class="fa fa-search search-icon"></i>
                </div>
                <ul class="my_categories">
                <li class="my_category" subscribed>
                    <a>Cagegory 1</a>
                    <i class="fa fa-bell subscribe_btn"></i>
                </li>
                <li class="my_category">
                    <a>Cagegory 2</a>
                    <i class="fa fa-bell subscribe_btn"></i>
                </li>
                <li class="my_category">
                    <a>Cagegory 3</a>
                    <i class="fa fa-bell subscribe_btn"></i>
                </li>
                <li class="my_category">
                    <a>Cagegory 4</a>
                    <i class="fa fa-bell subscribe_btn"></i>
                </li>
                <li class="my_category">
                    <a>Cagegory 5</a>
                    <i class="fa fa-bell subscribe_btn"></i>
                </li>
                <li class="my_category private_messages">
                    <a>Private chats</a>
                    <i class="fa fa-comment"></i>
                </li>
                </ul>

            </div>
        </div>
    </aside>
</section>



</header>

<main>
<section class="my_forums container">

</section>
<section class="category_listing container">

</section>
<section class="news_and_announcements container">

</section>

<section class="latest_topics_and_statistics container">

</section>
<section class="calender_events">
    <div class="views">
       <a class="calender_view">Calender_view</a>
       <a>My Entries</a>
    </div>
    <ul class="event-wrapper">
        <li>
            <div class="event">Our 3rd anniversery</div>
            <div class="event-date">Fri 30 July 2021</div>
        </li>
        <div class="more">more...</div>
    </li>
</section>
</main>
<?php
    include '../assets/layouts/footer.php';
?>
   