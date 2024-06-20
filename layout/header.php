<body>

<!-- Start Preloader -->
<div id="loader">
   <div class="spinner">
      <div class="cube cube0"></div>
      <div class="cube cube1"></div>
      <div class="cube cube2"></div>
      <div class="cube cube3"></div>
      <div class="cube cube4"></div>
      <div class="cube cube5"></div>
      <div class="cube cube6"></div>
      <div class="cube cube7"></div>
      <div class="cube cube8"></div>
      <div class="cube cube9"></div>
      <div class="cube cube10"></div>
      <div class="cube cube11"></div>
      <div class="cube cube12"></div>
      <div class="cube cube13"></div>
      <div class="cube cube14"></div>
      <div class="cube cube15"></div>
   </div>
</div>
<!-- End Preloader -->

<!-- Start Header -->
<header>
   <nav class="navbar navbar-default navbar-alt" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand to-top" rel="home" href="#">
               <img src="./assets/img/assets/logo-dark.webp" alt="Alsaeed" class="logo-big">
               <img src="./assets/img/assets/logo-dark.webp" alt="Alsaeed" class="logo-small">
            </a>
         </div>
         
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav  navbar-right">
               <li>
                  <a class="to-top">
                     <?= $lang['home']; ?>
                  </a>
               </li>
               <li class="to-section">
                  <a href="#services">
                  <?= $lang['services']; ?>
                  </a>
               </li>
               <li class="to-section">
                  <a href="#about">
                  <?= $lang['about_us']; ?>
                  </a>
               </li>

               <li class="to-section">
                  <a href="#story">
                  <?= $lang['our_story']; ?>
                  </a>
               </li>

               <li class="to-section">
                  <a href="#mission">
                  <?= $lang['mission']; ?>
                  </a>
               </li>

               <li class="to-section">
                  <a href="#vision">
                  <?= $lang['vision']; ?>
                  </a>
               </li>
              
               <li class="to-section">
                  <a href="#contact">
                  <?= $lang['contact']; ?>
                  </a>
               </li>
               <li class="to-section">
               <select id="languageSelector" onchange="changeLanguage()">
                  <option value="en" <?php if ($language == 'en') echo 'selected'; ?>>English</option>
                  <option value="ar" <?php if ($language == 'ar') echo 'selected'; ?>>العربية</option>
               </select>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>
</header>
<!-- End Header -->