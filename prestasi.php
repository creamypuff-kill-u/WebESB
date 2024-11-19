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

    <style>
    .navbar {
        background: linear-gradient(to right, rgba(239, 188, 120, 0), rgba(180, 112, 224, 0));/* Initial opacity */
        transition: background 0.3s ease-in-out; /* Smooth transition */
    }

    .navbar.scrolled {
        background: linear-gradient(to right, rgba(239, 188, 120, 1), rgba(180, 112, 224, 1)); /* Opacity when scrolled */
    }
    </style>

  </head>
  <body class="overflow-x-hidden antialiased">
  <nav class="navbar fixed w-full z-30 top-0 left-0">
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
                    <a href="home.php" class="after:pb-2 relative text-[#ffffff] w-fit after:block after:content-[''] after:absolute after:border-b-2 after:border-[#B470E0] after:w-full after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-bottom-right group-hover:after:origin-bottom-left group-hover:font-medium group-hover:text-[#dda9ff] cursor-pointer">Home</a>
                </li>
                <li class="group">
                    <a href="prestasi.php" class="after:pb-2 relative text-[#ffffff] w-fit after:block after:content-[''] after:absolute after:border-b-2 after:border-[#B470E0] after:w-full after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-bottom-right group-hover:after:origin-bottom-left group-hover:font-medium group-hover:text-[#dda9ff] cursor-pointer">Achievements</a>
                </li>
                <li class="group">
                    <a href="katalog.php" class="after:pb-2 relative text-[#ffffff] w-fit after:block after:content-[''] after:absolute after:border-b-2 after:border-[#B470E0] after:w-full after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-bottom-right group-hover:after:origin-bottom-left group-hover:font-medium group-hover:text-[#dda9ff] cursor-pointer">Catalogue</a>
                </li>
                <li class="group">
                    <a href="struktur.php" class="after:pb-2 relative text-[#ffffff] w-fit after:block after:content-[''] after:absolute after:border-b-2 after:border-[#B470E0] after:w-full after:scale-x-0 group-hover:after:scale-x-100 after:transition-transform after:duration-300 after:origin-bottom-right group-hover:after:origin-bottom-left group-hover:font-medium group-hover:text-[#dda9ff] cursor-pointer">Struktur Kepengurusan</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>

    <section class="bg-white dark:bg-gray-900 overflow-x-hidden lg:pt-0 lg:pb-0 xl:pt-0 xl:pb-0">
        <div class="py-0 px-0 max-w-screen w-full h-auto object-cover lg:py-0 lg:px-0 ">
            <figure class="relative w-screen  max-w-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
            <a href="#">
                <img class="w-full h-auto object-cover" src="images/prestasi/IMG_1983.jpg" alt="image description">
            </a>
            <figcaption class="absolute top-0 left-1/2 transform -translate-x-1/2 text-lg text-white mt-32 text-center">
                <p class="relative text-[48px] font-reguler leading-tight text-[#ffffff] sm:text-[34px]">
                Achievements<span class="text-[#ffffff] font-black sm:text-[60px]"></br>ESB NICE!</span>
                </p>
            </figcaption>
            </figure>
        </div>
    </section>

    <div class="max-w-full mx-auto p-8">
  <!-- Header -->
        <div class="flex flex-col lg:flex-row gap-6 mb-3">
            <div class="flex gap-72 items-center bg-[#f7edde] rounded-[24px] p-10 lg:w-2/3">
                <div class="text-gray-600 text-lg">DATE</div>
                <div class="text-gray-600 text-lg">EVENTS</div>
            </div>
            <div class="flex justify-center items-center bg-[#f7edde] rounded-[24px] p-10 lg:w-1/3">
                <div class="text-gray-600 text-lg">SEE ALL →</div>
            </div>    
        </div>    

        <!-- Event 1 -->
        <div class="flex flex-col lg:flex-row gap-6 mb-3">
            <div class="flex gap-[242px] items-center bg-[#f7edde] rounded-[24px] p-10 lg:w-2/3">
                <div class="text-gray-600 text-lg mb-1">July 17 2024</div>
                <div>
                    <h2 class="text-3xl font-semibold mb-2">Indonesian Drum Corps International 2024</h2>
                    <h4 class="text-[14px] font-light mb-0">Tangerang, Banten</h4>
                </div>
            </div>
            <div class="flex justify-center items-center rounded-[24px] p-0 lg:w-1/3 overflow-hidden">
                <div class="w-[520px] h-[200px] rounded-[24px] flex justify-center items-center overflow-hidden">
                    <img class="object-cover" src="images/prestasi/IMG_1983.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="flex flex-col lg:flex-row gap-6 mb-3">
            <div class="flex gap-[242px] items-center bg-[#f7edde] rounded-[24px] p-10 lg:w-2/3">
                <div class="text-gray-600 text-lg mb-1">July 17 2024</div>
                <div>
                    <h2 class="text-3xl font-semibold mb-2">Indonesian Drum Corps International 2024</h2>
                    <h4 class="text-[14px] font-light mb-0">Tangerang, Banten</h4>
                </div>
            </div>
            <div class="flex justify-center items-center rounded-[24px] p-0 lg:w-1/3 overflow-hidden">
                <div class="w-[520px] h-[200px] rounded-[24px] flex justify-center items-center overflow-hidden">
                    <img class="object-cover" src="images/prestasi/IMG_1983.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="flex flex-col lg:flex-row gap-6 mb-3">
            <div class="flex gap-[242px] items-center bg-[#f7edde] rounded-[24px] p-10 lg:w-2/3">
                <div class="text-gray-600 text-lg mb-1">July 17 2024</div>
                <div>
                    <h2 class="text-3xl font-semibold mb-2">Indonesian Drum Corps International 2024</h2>
                    <h4 class="text-[14px] font-light mb-0">Tangerang, Banten</h4>
                </div>
            </div>
            <div class="flex justify-center items-center rounded-[24px] p-0 lg:w-1/3 overflow-hidden">
                <div class="w-[520px] h-[200px] rounded-[24px] flex justify-center items-center overflow-hidden">
                    <img class="object-cover" src="images/prestasi/IMG_1983.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Event 4 -->
        <div class="flex flex-col lg:flex-row gap-6 mb-3">
            <div class="flex gap-[242px] items-center bg-[#f7edde] rounded-[24px] p-10 lg:w-2/3">
                <div class="text-gray-600 text-lg mb-1">July 17 2024</div>
                <div>
                    <h2 class="text-3xl font-semibold mb-2">Indonesian Drum Corps International 2024</h2>
                    <h4 class="text-[14px] font-light mb-0">Tangerang, Banten</h4>
                </div>
            </div>
            <div class="flex justify-center items-center rounded-[24px] p-0 lg:w-1/3 overflow-hidden">
                <div class="w-[520px] h-[200px] rounded-[24px] flex justify-center items-center overflow-hidden">
                    <img class="object-cover" src="images/prestasi/IMG_1983.jpg" alt="">
                </div>
            </div>
        </div>

    
    <!-- <section class="relative items-center gap-7 justify-center w-full overflow-x-hidden lg:pt-16 lg:pb-32 xl:pt-16 xl:pb-32">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->

    





            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const navbar = document.querySelector('.navbar');

                    window.addEventListener('scroll', function () {
                    if (window.scrollY > 100) { // Change 50 to the scroll position where you want the effect
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                    });
                });
                </script>

        </div>
    </body>


    <!-- Footer -->
    <footer class="bg-gradient-custom text-white border-t shadow-sm mt-28 rounded-t-[30px]">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="home.php" class="flex items-center">
                <img src="images/logoesb-fixx-2.png" class="w-14 mr-3" alt="pitech-logo"/>
                    <div class="flex flex-col">
                        <span class="self-left text-[14px] font-bold whitespace-nowrap hidden sm:block">Marching Band</span>
                        <span class="self-left text-[10px] font-reguler whitespace-nowrap hidden sm:block">Ekalavya Suara Brawijaya</span>
                    </div>
            </a>
            <div class="text-white space-y-2 mt-4">
              <a href="https://www.google.com/maps/place/Gedung+UKM+Universitas+Brawijaya/@-7.9520835,112.6137421,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7882777d752457:0x7f4cb40ed0065eca!8m2!3d-7.9520835!4d112.616317!16s%2Fg%2F11bzv202h9?entry=ttu&g_ep=EgoyMDI0MTAyMi4wIKXMDSoASAFQAw%3D%3D" class="flex items-center text-[#FFFFFF] font-light text-[14px]">
                <i class='bx bx-map mr-2 text-[#ffffff]'></i>
                Gedung UKM Universitas Brawijaya, Malang 65145, Indonesia
              </a>
              <a href="https://wa.me/6281392282138" class="flex items-center text-[#FFFFFF] font-light text-[14px]">
                <i class='bx bx-phone mr-2 text-[#ffffff]'></i>
                +62 813-9228-2138 (Ersya - Project Management)
              </a>
              <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mail.mbesb@gmail.com" class="flex items-center text-[#FFFFFF] font-light text-[14px]">
                <i class='bx bx-envelope mr-2 mt-1 text-[#ffffff]'></i>
                mail.mbesb@gmail.com
              </a>
            </div>

          </div>
          <div class="grid grid-cols-3 gap-24 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2 class="mb-6 mr-2 text-[16px] font-bold text-white uppercase">
                Get to Know Us    
              </h2>
            </div>
            <div>
              <h2 class="mb-6 text-[16px] font-bold text-white uppercase">
                Social Media
              </h2>
              <ul class="text-white font-light text-[14px]">
                <li class="mb-4">
                  <a
                    href="https://www.instagram.com/esbnice/"
                    target="_blank"
                    class="hover:font-semibold"
                    >Instagram</a
                  >
                </li>
                <li class="mb-4">
                  <a
                    href="https://www.facebook.com/UAMBESBUB"
                    target="_blank"
                    class="hover:font-semibold"
                    >Facebook</a
                  >
                </li>
                <li class="mb-4">
                  <a
                    href="https://twitter.com/MBESBnice"
                    target="_blank"
                    class="hover:font-semibold"
                    >Twitter</a
                  >
                </li>
                <li class="mb-4">
                  <a
                    href="https://www.youtube.com/@ekalavyasuarabrawijaya"
                    target="_blank"
                    class="hover:font-semibold"
                    >Youtube</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-[16px] font-bold text-white uppercase">
                Resources
              </h2>
              <ul class="text-white font-light text-[14px]">
                <li class="mb-4">
                  <a href="#" class="hover:font-semibold"
                  >Kebijakan Privasi</a>
                </li>
                <li>
                  <a href="#" class="hover:font-semibold"
                  >Syarat &amp; Ketentuan</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-[#FFFFFF] sm:text-center"
            >© Copyright 2024 - Ilyas Ghandi
          </span>
        </div>
      </div>
    </footer>