<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.min.js"></script>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="preloader" class="preloader">
          <div class="table">
            <div class="table-cell">
              <img src="images/preloader.svg" alt="" class="preloader__image">
            </div>
          </div>
        </div>

        <header id="js-header" class="site-header">
          <div class="wrapper">
            <a href="/">
              <span class="header-logo"></span>
            </a>
            <nav class="main-navigation">
              <ul>
                <li><a href="#about">about</a></li>
                <li><a href="#opening">hours</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="#menu">menu</a></li>
                <li><a href="#social">social</a></li>
                <li class="main-navigation--social"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="main-navigation--social"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              </ul>
            </nav>
          </div>
        </header>

        <div class="hero">
          <span class="overlay-black"></span>
          <div class="wrapper">
            <div class="table">
              <div class="table-cell">
                <div id="js-hero-text">
                  <h1 class="hero__title">South American Cafe</h1>
                  <p class="hero__copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ducimus aperiam maiores veritatis quia magnam neque ratione, quo aliquid doloribus laudantium sit consectetur, mollitia accusamus, obcaecati dolore facere cupiditate! In.</p>
                  <a href="#" class="btn btn--yellow">find out more</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="page-wrapper">
          <div class="about section-pad" id="about">
            <div class="wrapper">
              <h2 class="section-title">About Cafuné</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, animi, ducimus. Eos illo labore quia molestiae aperiam distinctio porro expedita accusantium quasi. Illum beatae dignissimos perferendis, nisi a cum aliquid.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, animi, ducimus. Eos illo labore quia molestiae aperiam distinctio porro expedita accusantium quasi. Illum beatae dignissimos perferendis, nisi a cum aliquid.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, animi, ducimus. Eos illo labore quia molestiae aperiam distinctio porro expedita accusantium quasi. Illum beatae dignissimos perferendis, nisi a cum aliquid.</p>
            </div>
          </div>

          <span class="opening-times image-banner-2" id="opening">
            <span class="overlay-black"></span>
              <div class="table">
                <div class="table-cell">
                  <div class="wrapper">
                    <h2 class="section-title opening-times__title">Opening Times</h2>
                    <ul>
                      <li><?php if (date('D') == 'Mon') echo '<strong>Today</strong> '; ?>Mon 7:30 - 17:30</li>
                      <li><?php if (date('D') == 'Tue') echo '<strong>Today</strong> '; ?>Tue 7:30 - 17:30</li>
                      <li><?php if (date('D') == 'Wed') echo '<strong>Today</strong> '; ?>Wed 7:30 - 17:30</li>
                      <li><?php if (date('D') == 'Thu') echo '<strong>Today</strong> '; ?>Thu 7:30 - 17:30</li>
                      <li><?php if (date('D') == 'Fri') echo '<strong>Today</strong> '; ?>Fri 7:30 - 17:30</li>
                      <li><?php if (date('D') == 'Sat') echo '<strong>Today</strong> '; ?>Sat: 8:30 - 17:30</li>
                      <li><?php if (date('D') == 'Sun') echo '<strong>Today</strong> '; ?>Sun: 10:30 - 15:00</li>
                    </ul>
                  </div>
              </div>
            </div>
          </span>

          <div class="contact" id="contact">
            <div class="wrapper section-pad">
              <h2 class="section-title">Find Cafuné</h2>
              <p>We are located in the heart of Preston. You’ll find us on market place, opposite the historic Harris museum.</p>
              <p>Sunny? Make the most of it and order some of our delicious food and drink to take out.
              <p>Or more likely - take shelter from the rain! Choose somewhere to relax and listen to some South American music whilst you enjoy what we have to offer.</p>
            </div><!-- .wrapper -->

              <!-- google map api -->
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLY6n_J3aoyyK8VXNfVBVL7_kzqrXzNQ" type="text/javascript"></script>

              <!-- START MAP -->
              <div class="google-map">
              	<div class="marker" data-lat="53.760222" data-lng="-2.7024913">
              		<span class="marker-title">
              			<strong>Cafuné Preston</strong>
              		</span>
              		<span>35 Market place,<br> Preston<br> PR1 2AR</span>
              	</div>
              </div>
              <!-- END MAP -->
           </div>

          <span class="menu image-banner" id="menu">
            <span class="overlay-black"></span>
              <div class="table">
                <div class="table-cell">
                  <div class="wrapper">
                    <h2 class="section-title menu__title">Cafuné Menu</h2>
                    <a href="#" class="btn btn--yellow">download now</a>
                  </div>
              </div>
            </div>
          </span>

          <div class="social" id="social">
            <h2 class="section-title social__title">Social Cafuné</h2>

            <div id="twitter-feed" class="mh">
              <i class="fa fa-twitter" aria-hidden="true"></i>

              <?php
                // twitter feed
                $cache = dirname(__FILE__) . '/plugins/tweet-php-master/cache/';
                $path = dirname(__FILE__) . '/plugins/tweet-php-master/TweetPHP.php';

                // requires TweetPHP
                require_once($path);

                // TweetPHP (all options)
                $TweetPHP = new TweetPHP(array(
                  'consumer_key'              => '67IaptSdaPDhOhtntX4E8NXLG',
                  'consumer_secret'           => '1E89lJ9QikuSknZDyaGAGXHpRuj8z3zyJcuke4E6CVORv3a5sN',
                  'access_token'              => '102715779-T9JyiIOA3nrQ2AiU29ZM4jT50Arxsbzi0aK3SOAe',
                  'access_token_secret'       => 'IwWKeEHQeMhVHQpGzYZtbJu2bRZH5BnuziMfZvavhAk6u',
                  'twitter_screen_name'       => 'apamphilon',
                  'enable_cache'          => true,
                  'cache_dir'             => $cache, // Where on the server to save cached tweets
                  'cachetime'             => 1 * 1, // Seconds to cache feed (1 hour).
                  'tweets_to_retrieve'    => 10, // Specifies the number of tweets to try and fetch, up to a maximum of 200
                  'tweets_to_display'     => 1, // Number of tweets to display
                  'ignore_replies'        => true, // Ignore @replies
                  'ignore_retweets'       => true, // Ignore retweets
                  'twitter_style_dates'   => false, // Use twitter style dates e.g. 2 hours ago
                  'twitter_date_text'     => array('seconds', 'minutes', 'about', 'hour', 'ago'),
                  'date_format'           => '%I:%M %p %b %e%O', // The defult date format e.g. 12:08 PM Jun 12th. See: http://php.net/manual/en/function.strftime.php
                  'date_lang'             => null, // Language for date e.g. 'fr_FR'. See: http://php.net/manual/en/function.setlocale.php
                  'twitter_template'      => '<div id="twitter">{tweets}</div>',
                  'tweet_template'        => '<article>{tweet}<span class="meta">&nbsp;<a href="{link}">{date}</a></span></article>',
                  'error_template'        => '<span class="status">Our twitter feed is unavailable right now.</span> <span class="meta"><a href="{link}">Follow us on Twitter</a></span>',
                  'debug'                 => false
                ));

                echo $TweetPHP->get_tweet_list();
              ?>

            </div>

            <script type="text/javascript">
              var feed = new Instafeed({
                  get: 'user',
                  userId: '2455569',
                  limit: 4,
                  resolution: 'standard_resolution',
                  clientId: '9de45e79ebc349feb04d658cfd8ff30c',
                  'accessToken': '2455569.9de45e7.f1e799b6683f48d0b6bb8e6826ec545e'
              });
              feed.run();
            </script>

            <div id="instafeed" class="mh">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
          </div>

          <footer class="site-footer section-pad">
            <div class="wrapper">
              <span class="site-footer__copywrite">&copy; 2017 cafuné.</span>
              <span class="site-footer__credit">Site design and build <a href="https://www.apamphilon.com" target="_blank">apamphilon</a></span>
            </div>
          </footer>
        </div><!-- .page-wrapper -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
