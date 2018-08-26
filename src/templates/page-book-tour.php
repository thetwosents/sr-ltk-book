<?php 

/* 
Template name: Book Tour
*/

get_header(); ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />

<header role="banner">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12">
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
  <nav role="navigation" class="nav">
    <ul>
      <li><a href="#tourDates">Tour Dates</a></li>
      <li><a href="#buyTheBook">Buy The Book</a></li>
      <li><a href="#followMyStory">Follow My Story</a></li>
      <li><a href="#downloadTheApp">Download The App</a></li>
    </ul>
  </nav>

  <div class="logo">
    <img src="<?php echo bloginfo('template_url'); ?>/img/book/ltk-book-header.jpg" alt="The LikeToKnow.it Book Tour">
  </div>
</header>

<main role="main" aria-label="Content">
  <section id="slideHeader">
    <div class="desktop">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="box">
              <!-- Use rev slider here -->
              <img src="<?php echo bloginfo('template_url'); ?>/img/book/collage.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile">
      <div class="slider">
        <div><img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Header_1.jpg"></div>
        <div><img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Header_2.jpg"></div>
        <div><img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Header_3.jpg"></div>
        <div><img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Header_4.jpg"></div>
        <div><img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Header_5.jpg"></div>
        <div><img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Header_6.jpg"></div>
      </div>
    </div>
  </section>
  <section id="missionBox">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box">
            <p>Join us on our global tour!<br>
            Meet the influencers and LIKEtoKNOW.it editors in real life, get a signed book copy and learn first-hand how these entrepreneurs started and grew their influencer businesses.</p>
            <p><i>Space is limited</i><br>
            <b>Purchase your ticket below!</b></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="tourDates">
    <div class="container">
      <div class="row center-xs">
        <div class="col-xs-12 col-md-6">
          <div class="box">
            <div class="tour-date">
              <h4 class="date">9.10</h4>
              <h1>NYC</h1>
              <a href="#" class="btn">Buy Ticket</a>
            </div>
            <div class="tour-date">
              <h4 class="date">9.25</h4>
              <h1>Chicago</h1>
              <a href="#" class="btn">Buy Ticket</a>
            </div>
            <div class="tour-date">
              <h4 class="date">9.10</h4>
              <h1>NYC</h1>
              <a href="#" class="btn">Buy Ticket</a>
            </div>
            <div class="tour-date">
              <h4 class="date">9.10</h4>
              <h1>NYC</h1>
              <a href="#" class="btn">Buy Ticket</a>
            </div>
            <div class="tour-date">
              <h4 class="date">9.10</h4>
              <h1>NYC</h1>
              <a href="#" class="btn">Buy Ticket</a>
            </div>
            <div class="tour-date">
              <h4 class="date">9.10</h4>
              <h1>NYC</h1>
              <a href="#" class="btn">Buy Ticket</a>
            </div>
            <div class="tour-date">
              <h4 class="date">9.10</h4>
              <h1>NYC</h1>
              <a href="#" class="btn">Buy Ticket</a>
            </div>
            <div class="credits">
              <p>LIKEtoKnow.it book tour in partnership with</p>
              <img src="http://placehold.it/100x30">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonialSlider">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="slider desktop">
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/desktop_header_1_desktop-quote-1.jpg">
              </div>
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/desktop_header_1_desktop-quote-2.jpg">
              </div>
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/desktop_header_1_desktop-quote-3.jpg">
              </div>
             <!--  <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/desktop_header_1_desktop-quote-4.jpg">
              </div> -->
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/desktop_header_1_desktop-quote-5.jpg">
              </div>
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/desktop_header_1_desktop-quote-6.jpg">
              </div>
            </div>
            <div class="slider mobile">
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Quote_1.jpg">
              </div>
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Quote_2.jpg">
              </div>
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Quote_3.jpg">
              </div>
             <!--  <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/desktop_header_1_desktop-quote-4.jpg">
              </div> -->
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Quote_4.jpg">
              </div>
              <div class="slide">
               <img src="<?php echo bloginfo('template_url'); ?>/img/book/Mobile_Quote_5.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="buyTheBook">
    <div class="container">
      <div class="row center-xs">
        <div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-contain">
              <img src="<?php echo bloginfo('template_url'); ?>/img/book/LTKBook_Open.jpg">
              <p><i>LIKEtoKNOW.it: Stories from the Influencer Next Door</i> goes behind the screen with more than 100 of the world's top global influencers sharing how they started their entrepreneurial businesses and navigated their path to influencer.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="https://www.amazon.com/gp/product/0692140069?pf_rd_p=d1f45e03-8b73-4c9a-9beb-4819111bef9a&pf_rd_r=4AKXNWG85T7DJVV653EN" target="_blank" class="btn">Buy The Book</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="followMyStory">
    <div class="container">
      <div class="row center-xs">
        <div class="col-xs-12 col-md-12">
          <div class="box">
            <img src="<?php echo bloginfo('template_url'); ?>/img/book/FollowMyStory.jpg">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn">Get The Templates</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="thumbnailStrip">
    <div class="thumbnail-container">
      <div class="thumbnail">
        <img src="<?php echo bloginfo('template_url'); ?>/img/book/hashtag-1_hashtag-1.jpg">
      </div>
      <div class="thumbnail">
        <img src="<?php echo bloginfo('template_url'); ?>/img/book/hashtag-2_hashtag-2.jpg">
      </div>
      <div class="thumbnail">
        <img src="<?php echo bloginfo('template_url'); ?>/img/book/hashtag-3_hashtag-3.jpg">
      </div>
      <div class="thumbnail">
        <img src="<?php echo bloginfo('template_url'); ?>/img/book/hashtag-4_hashtag-4.jpg">
      </div>
      <div class="thumbnail">
        <img src="<?php echo bloginfo('template_url'); ?>/img/book/hashtag-5_hashtag-5.jpg">
      </div>
    </div>
  </section>
  <section id="downloadTheApp" style="background: url('<?php echo bloginfo('template_url'); ?>/img/book/DownloadApp_Image-27.jpg') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="box">
            <img src="<?php echo bloginfo('template_url'); ?>/img/book/DownloadApp_Image-26.jpg">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="box">
            <h1>Download the App</h1>
            <p>Gain inspiration and discover new styles from the influencers you love with the LIKEtoKNOW.it app.</p>
            <p>Discover. Curate. Shop.</p>
            <ul>
              <li>
                <a href="https://itunes.apple.com/us/app/id1154027990?_branch_match_id=550315765171533603" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/img/book/download-on-the-app-store.png"></a></li>
              <li><a href="https://play.google.com/store/apps/details?id=com.rewardstyle.liketoknowit&_branch_match_id=550315765171533603" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/img/book/get-it-on-google-play.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row middle-xs center-xs">
        <div class="col-xs-12">
          <div class="box">
          <p>© 2018 rewardStyle | liketoknow.it</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<?php get_footer(); ?>
