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

      .text-gradient {
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
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
              <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#393939] dark:text-[#393939]">Kabinet <span class="text-[#B470E0]">Transformasi</span></h2>
              <p class="font-light text-gray-500 lg:mb-4 sm:text-xl dark:text-gray-400">Marching Band Ekalavya Suara Brawijaya</p>
          </div>
      </div>
    </section> 


    <!-- Header -->
    <section>
      <div class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="text-3xl font-semibold text-slate-800 mb-8">
          Badan Pengurus Harian
        </h2>

        <!-- BPH -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Leader Card 1 -->
          <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden">
            <!-- Image Container with Hover Effect -->
            <div class="relative group h-[380px]">
              <img src="images/fotopengurus/fotoilyass.png" alt="Chris Coltella" class="w-full h-full object-cover rounded-lg">
              <!-- Hover Overlay - Only covers the image -->
              <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100  transition-opacity duration-300 flex flex-col">
                <p class="text-slate-800 text-sm mb-4 flex-grow">
                  Fakultas Ilmu Komputer</br>
                  Brassline</br>
                  2022
                </p>
                <!-- <button class="bg-orange-500 text-white px-4 py-2 rounded-md text-sm w-fit">
                  View Full Bio
                </button> -->
              </div>
            </div>
            
            <!-- Text Content - Always visible -->
            <div class="p-4">
              <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
              <p class="text-slate-600 text-sm mb-2">Ketua Umum</p>
            </div>
          </div>

          <!-- Leader Card 2 -->
          <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden">
            <div class="relative group h-[380px]">
              <img src="images/fotopengurus/fotoilyass.png" alt="Carolyn Kostelny" class="w-full h-full object-cover rounded-lg">
              <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                <p class="text-slate-800 text-sm mb-4 flex-grow">
                  Fakultas Ilmu Komputer</br>
                  Brassline</br>
                  2022
                </p>
                <!-- <button class="bg-orange-500 text-white px-4 py-2 rounded-md text-sm w-fit">
                  View Full Bio
                </button> -->
              </div>
            </div>
            
            <div class="p-4">
              <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
              <p class="text-slate-600 text-sm mb-2">Sekretaris Umum</p>
            </div>
          </div>

          <!-- Leader Card 3 -->
          <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden">
            <div class="relative group h-[380px]">
              <img src="images/fotopengurus/fotoilyass.png" alt="Stephanie Rubizhevsky" class="w-full h-full object-cover rounded-lg">
              <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
              <p class="text-slate-800 text-sm mb-4 flex-grow">
                  Fakultas Ilmu Komputer</br>
                  Brassline</br>
                  2022
                </p>
                <!-- <button class="bg-orange-500 text-white px-4 py-2 rounded-md text-sm w-fit">
                  View Full Bio
                </button> -->
              </div>
            </div>
            
            <div class="p-4">
              <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
              <p class="text-slate-600 text-sm mb-2">Bendahara Umum I</p>
            </div>
          </div>

          <!-- Leader Card 4 -->
          <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden">
            <div class="relative group h-[380px]">
              <img src="images/fotopengurus/fotoilyass.png" alt="Coralie Nelson" class="w-full h-full object-cover rounded-lg">
              <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
              <p class="text-slate-800 text-sm mb-4 flex-grow">
                  Fakultas Ilmu Komputer</br>
                  Brassline</br>
                  2022
                </p>
                <!-- <button class="bg-orange-500 text-white px-4 py-2 rounded-md text-sm w-fit">
                  View Full Bio
                </button> -->
              </div>
            </div>
            
            <div class="p-4">
              <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
              <p class="text-slate-600 text-sm mb-2">Bendahara Umum II</p>
            </div>
          </div>
        </div>

<!-- Departemen Kepelatihan -->
        <div class="max-w-7xl mx-auto px-4 py-8">
          <h2 class="text-3xl font-semibold text-slate-800 mb-8">Departemen Kepelatihan</h2>
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out gap-6 overflow-x-auto" id="slider-content" style="transform: translateX(0%);">
              
              <!-- Dancorp -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Komandan Corps</p>
                </div>
              </div>

              <!-- Wadancorp -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Wakil Komandan Corps</p>
                </div>
              </div>

              <!-- Aspel Battery -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Asisten Pelatih Battery</p>
                </div>
              </div>

              <!-- Aspel Brass -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Asisten Pelatih Brassline</p>
                </div>
              </div>

              <!-- Aspel Colorguard -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Asisten Pelatih Colorguard</p>
                </div>
              </div>

              <!-- Aspel Pit -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Asisten Pelatih Pit Instrument</p>
                </div>
              </div>
            </div>
            
            <!-- Button Next (masih error) -->
            <!-- <div class="flex justify-center mt-6">
              <button onclick="previousSlide()" class="mr-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>
              <button onclick="nextSlide()" class="ml-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div> -->
          </div>
        </div>

        <!-- Departemen HRD -->
        <div class="max-w-7xl mx-auto px-4 py-8">
          <h2 class="text-3xl font-semibold text-slate-800 mb-8">Departemen Human Resources Development</h2>
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out gap-6 overflow-x-auto" id="slider-content" style="transform: translateX(0%);">
              
              <!-- Kadep -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Departemen</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Pengembangan</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Pengembangan</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Pengadaan</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Pengadaan</p>
                </div>
              </div>
            </div>
            
            <!-- Button Next (masih error) -->
            <!-- <div class="flex justify-center mt-6">
              <button onclick="previousSlide()" class="mr-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>
              <button onclick="nextSlide()" class="ml-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div> -->
          </div>
        </div>

        <!-- Departemen Medkom -->
        <div class="max-w-7xl mx-auto px-4 py-8">
          <h2 class="text-3xl font-semibold text-slate-800 mb-8">Departemen Media Komunikasi dan Informasi</h2>
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out gap-6 overflow-x-auto" id="slider-content" style="transform: translateX(0%);">
              
              <!-- Kadep -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Departemen</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Desain Multimedia</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Desain Multimedia</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Humas</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Humas</p>
                </div>
              </div>
            </div>
            
            <!-- Button Next (masih error) -->
            <!-- <div class="flex justify-center mt-6">
              <button onclick="previousSlide()" class="mr-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>
              <button onclick="nextSlide()" class="ml-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div> -->
          </div>
        </div>

        <!-- Departemen Project -->
        <div class="max-w-7xl mx-auto px-4 py-8">
          <h2 class="text-3xl font-semibold text-slate-800 mb-8">Departemen Project Management</h2>
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out gap-6 overflow-x-auto" id="slider-content" style="transform: translateX(0%);">
              
              <!-- Kadep -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Departemen</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Acara</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Acara</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Lomba</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Lomba</p>
                </div>
              </div>
            </div>
            
            <!-- Button Next (masih error) -->
            <!-- <div class="flex justify-center mt-6">
              <button onclick="previousSlide()" class="mr-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>
              <button onclick="nextSlide()" class="ml-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div> -->
          </div>
        </div>

        <!-- Departemen Bisnis -->
        <div class="max-w-7xl mx-auto px-4 py-8">
          <h2 class="text-3xl font-semibold text-slate-800 mb-8">Departemen Bisnis & Sponsorship</h2>
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out gap-6 overflow-x-auto" id="slider-content" style="transform: translateX(0%);">
              
              <!-- Kadep -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Departemen</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Produk Kreatif</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Produk Kreatif</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Pemasaran dan Sponsorship</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Pemasaran dan Sponsorship</p>
                </div>
              </div>
            </div>
            
            <!-- Button Next (masih error) -->
            <!-- <div class="flex justify-center mt-6">
              <button onclick="previousSlide()" class="mr-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>
              <button onclick="nextSlide()" class="ml-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div> -->
          </div>
        </div>

        <!-- Departemen Ad-O -->
        <div class="max-w-7xl mx-auto px-4 py-8">
          <h2 class="text-3xl font-semibold text-slate-800 mb-8">Departemen Administrasi dan Organisasi</h2>
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out gap-6 overflow-x-auto" id="slider-content" style="transform: translateX(0%);">
              
              <!-- Kadep -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Departemen</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Inventaris</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Inventaris</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Surat</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Surat</p>
                </div>
              </div>
            </div>
            
            <!-- Button Next (masih error) -->
            <!-- <div class="flex justify-center mt-6">
              <button onclick="previousSlide()" class="mr-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>
              <button onclick="nextSlide()" class="ml-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div> -->
          </div>
        </div>

        <!-- Departemen Perkap -->
        <div class="max-w-7xl mx-auto px-4 py-8">
          <h2 class="text-3xl font-semibold text-slate-800 mb-8">Departemen Perlengkapan</h2>
          <div class="overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out gap-6 overflow-x-auto" id="slider-content" style="transform: translateX(0%);">
              
              <!-- Kadep -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Departemen</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>
                
                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Peralatan</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Peralatan</p>
                </div>
              </div>

              <!-- Kabid -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Kepala Bidang Kostum</p>
                </div>
              </div>

              <!-- Staf -->
              <div class="bg-gradient-to-b from-gray-100 to-white rounded-lg overflow-hidden shrink-0 w-[320px]">
                <div class="relative group h-[380px]">
                  <img src="images/fotopengurus/fotoilyass.png" alt="Ilyas Ghandi" class="w-full h-full object-cover rounded-lg">
                  <div class="absolute inset-0 bg-white/30 backdrop-blur-xl p-6 opacity-0 group-hover:opacity-100 rounded-lg transition-opacity duration-300 flex flex-col">
                    <p class="text-slate-800 text-sm mb-4 flex-grow">
                      Fakultas Ilmu Komputer<br>
                      Brassline<br>
                      2022
                    </p>
                  </div>
                </div>

                <div class="p-4">
                  <h3 class="text-xl font-semibold text-slate-800 mb-1">Ilyas Ghandi</h3>
                  <p class="text-slate-600 text-sm mb-2">Staf Bidang Kostum</p>
                </div>
              </div>
            </div>
            
            <!-- Button Next (masih error) -->
            <!-- <div class="flex justify-center mt-6">
              <button onclick="previousSlide()" class="mr-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>
              <button onclick="nextSlide()" class="ml-2 p-2 rounded-full bg-slate-800 text-white hover:bg-slate-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div> -->
          </div>
        </div>
    </section>

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

<script>
const slider = document.getElementById('slider-content');
let currentSlide = 0;
let slidesPerView = window.innerWidth >= 1024 ? 4 : window.innerWidth >= 768 ? 2 : 1;
const totalSlides = 6; // Sesuaikan dengan jumlah total card
let maxSlides = totalSlides - slidesPerView;

function updateSlidePosition() {
  const slideWidth = 100 / slidesPerView;
  slider.style.transform = `translateX(-${currentSlide * slideWidth}%)`;
}

function nextSlide() {
  if (currentSlide < maxSlides) {
    currentSlide++;
    updateSlidePosition();
  }
}

function previousSlide() {
  if (currentSlide > 0) {
    currentSlide--;
    updateSlidePosition();
  }
}

window.addEventListener('resize', () => {
  const newSlidesPerView = window.innerWidth >= 1024 ? 4 : window.innerWidth >= 768 ? 2 : 1;
  if (newSlidesPerView !== slidesPerView) {
    slidesPerView = newSlidesPerView;
    maxSlides = totalSlides - slidesPerView;
    currentSlide = 0;
    updateSlidePosition();
  }
});
</script>


<!-- JavaScript untuk slider -->
<!-- <script>
  const slider = document.getElementById('slider-content');
let currentSlide = 0;
let slidesPerView = window.innerWidth >= 1024 ? 4 : window.innerWidth >= 768 ? 2 : 1;
const totalSlides = 6; // Sesuaikan dengan jumlah total card
let maxSlides = totalSlides - slidesPerView;

// Update posisi slide dan sesuaikan slide yang terlihat
function updateSlidePosition() {
  const slideWidth = 100 / slidesPerView;
  slider.style.transform = `translateX(-${currentSlide * slideWidth}%)`;
}

// Fungsi untuk pindah ke slide berikutnya
function nextSlide() {
  if (currentSlide < maxSlides) {
    currentSlide++;
    updateSlidePosition();
  }
}

// Fungsi untuk pindah ke slide sebelumnya
function previousSlide() {
  if (currentSlide > 0) {
    currentSlide--;
    updateSlidePosition();
  }
}

// Handle perubahan layar untuk responsivitas
window.addEventListener('resize', () => {
  const newSlidesPerView = window.innerWidth >= 1024 ? 4 : window.innerWidth >= 768 ? 2 : 1;
  if (newSlidesPerView !== slidesPerView) {
    slidesPerView = newSlidesPerView;
    maxSlides = totalSlides - slidesPerView;
    currentSlide = 0;  // Kembali ke slide pertama
    updateSlidePosition();
  }
});
</script> -->