<header class="header container">
      <div class="header__logo">
        <h4 class="text-bold logo-style"><a href="./index.php">Brainwave.io</a></h4>
      </div>
      <div class="header__nav">
      <ul class="header__menu container">
            <li class="header__item text-xs text-bold"><a href="./pricing.php">Pricing</a></li>
            <li class="header__item text-xs text-bold"><a href="./job.php">Jobs</a></li>
            <li class="header__item text-xs text-bold"><a href="./product">Product</a></li>
            <li class="header__item text-xs text-bold"><a href="./contact.php">Contact</a></li>
        </ul>
        <div class="header__button container">
        <button class="blue-btn">get a free quote</button>
        <button class="blue-btn header__logout">Sign out</button>
        </div>
      </div>
      <div class="header__hamburger">
        <span class="header__hamburger--bar header__hamburger--bar--top"></span>
        <span class="header__hamburger--bar header__hamburger--bar--middle"></span>
        <span class="header__hamburger--bar header__hamburger--bar--bottom"></span>
    </div>
    </header>

    <?php viteEntry('src/js/header.js'); ?>
    <?php viteEntry('src/js/logout.js'); ?>