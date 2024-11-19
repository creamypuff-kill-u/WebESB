<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marching Band Ekalavya Suara Brawijaya</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="images/logoesb-fixx-2.png" type="image/png" />
    <link rel="stylesheet" href="home.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" media="(min-width: 1200px)"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.9/splide.min.css">
    <!-- Splide JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.9/splide.min.js" defer></script>


    <style>
      .bg-gradient-custom {
        background: linear-gradient(to right, #EFBC78, #B470E0);
      }
    </style>
  </head>

  <body class="overflow-x-hidden antialiased">
  <nav class="bg-white fixed w-full z-50 top-0 left-0 shadow-sm" style="background-image: url('images/header-img1.png');">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="home.php" class="flex items-center">
            <img src="images/logoesb-fixx-2.png" class="w-14 mr-3" alt="logo-esb"/>
                <div class="flex flex-col text-[#ffffff]">
                    <span class="self-left text-[14px] font-bold whitespace-nowrap hidden sm:block">Marching Band</span>
                    <span class="self-left text-[10px] font-reguler whitespace-nowrap hidden sm:block">Ekalavya Suara Brawijaya</span>
                 </div>
        
        <!-- Header kanan -->
                <div class="flex lg:order-2">
                <a
                    class="text-[#ffffff] bg-[#ffffff] bg-opacity-25 hover:bg-[#D7D7D7] hover:text-[#000000] hover:opacity-90 rounded-[30px] text-sm px-[20px] py-[7px] text-center mr-3 md:mr-0 cursor-pointer hover:bg-[#ffffff] hover:text-[#B470E0] transition-all duration-300 font-semibold"
                    id="login-button"
                    href="https://www.instagram.com/esbmerch/"
                    >ESB Merch</a
                >
                <button
                    data-collapse-toggle="navbar-sticky"
                    type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky"
                    aria-expanded="false"
                >
                    <span class="sr-only">Beranda</span>
                    <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                    >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                    </svg>
                </button>
                </div>
        <!-- Navbar Dropdown Product -->
        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
            <ul class="flex flex-col gap-4 lg:gap-0 p-4 lg:p-0 mt-4 font-light lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0">
                <li class="group">
                    <a href="home.php" class="after:pb-2 relative text-[#ffffff] w-fit after:block after:content-[''] after:absolute after:border-b-2 after:border-[#ffffff] after:w-full after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-bottom-right group-hover:after:origin-bottom-left group-hover:font-medium cursor-pointer">Home</a>
                </li>
                <li class="group">
                    <a href="prestasi.php" class="after:pb-2 relative text-[#ffffff] w-fit after:block after:content-[''] after:absolute after:border-b-2 after:border-[#ffffff] after:w-full after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-bottom-right group-hover:after:origin-bottom-left group-hover:font-medium cursor-pointer">Achievements</a>
                </li>
                <li class="group">
                    <a href="katalog.php" class="after:pb-2 relative text-[#ffffff] w-fit after:block after:content-[''] after:absolute after:border-b-2 after:border-[#ffffff] after:w-full after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-bottom-right group-hover:after:origin-bottom-left group-hover:font-medium cursor-pointer">Catalogue</a>
                </li>
                <li class="group">
                    <a href="struktur.php" class="after:pb-2 relative text-[#ffffff] w-fit after:block after:content-[''] after:absolute after:border-b-2 after:border-[#ffffff] after:w-full after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-bottom-right group-hover:after:origin-bottom-left group-hover:font-medium cursor-pointer">Struktur Kepengurusan</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    
    
    <section class="bg-white dark:bg-white overflow-x-hidden lg:pt-24 lg:pb-2 xl:pt-24 xl:pb-2">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-2 lg:px-6 ">
          <div class="mx-auto max-w-screen-sm text-center mb-2 lg:mb-2">
            <div class="mb-4 rounded-full"></div>
              <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#393939] dark:text-[#393939]">Coming Soon</h2>
          </div>
      </div>
    </section>