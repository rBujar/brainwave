<header class="header container mx-auto px-4 flex justify-between items-center pt-4 pb-2">
      <div class="header__logo">
        <h4 class="logo-style font-[28px]/[30px] font-bold font-['Rubik',sans-serif]"><a href="../index.php">Brainwave.io</a></h4>
      </div>
      <div class="header__nav flex flex-col justify-start items-center fixed top-15 bottom-0 -translate-x-full w-full left-0 gap-10 pt-[65px] transition-transform duration-200 ease-in-out border-none outline-none z-20 [&.active]:translate-x-0 [&.active]:duration-500 bg-general-white xl:static xl:translate-x-0 xl:transition-none xl:flex-row xl:justify-between xl:pt-0 xl:bg-transparent xl:w-auto">
      <ul class="header__menu flex flex-col justify-center items-center text-primary-white [&>li]:text-[32px] gap-10 xl:flex-row xl:gap-[30px] xl:[&>li]:text-[16px]/[16px]">
            <li class="header__item text-base font-bold"><a href="../pricing.php">Pricing</a></li>
            <li class="header__item text-base font-bold"><a href="../careers.php">Careers</a></li>
            <li class="header__item text-base font-bold"><a href="../product.php">Products</a></li>
            <li class="header__item text-base font-bold"><a href="../contact.php">Contact</a></li>
        </ul>
        <div class="header__button">
        <button class="blue-btn max-h-[170px] py-2 px-5">get a free quote</button>
        <!-- <button class="blue-btn header__logout">Sign out</button> -->
        </div>
      </div>
      <div class="header__hamburger group flex flex-col justify-center items-center z-10 rounded-full w-11 h-11 xl:hidden">
        <span class="header__hamburger--bar header__hamburger--bar--top group-[.active]:translate-y-[10px] group-[.active]:rotate-45"></span>
        <span class="header__hamburger--bar header__hamburger--bar--middle my-2 group-[.active]:opacity-0"></span>
        <span class="header__hamburger--bar header__hamburger--bar--bottom group-[.active]:-translate-y-[11px] group-[.active]:-rotate-45"></span>
    </div>
    </header>
    <?php viteEntry('src/js/header.js'); ?>
    <?php viteEntry('src/js/logout.js'); ?>