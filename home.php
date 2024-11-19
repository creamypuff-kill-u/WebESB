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

    <!-- Konten About Us -->
    <section id="heroes" class="relative items-center gap-7 justify-center w-full overflow-x-hidden lg:pt-28 lg:pb-16 xl:pt-28 xl:pb-16">
      <div
        data-aos="fade-right"
        data-aos-duration="600"
        id=""
        class="overflow-x-hidden container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0"
      >
        <div
          class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left"
        >
          <p class="relative mb-4 text-[48px] font-reguler leading-tight text-[#393939] sm:text-[34px] xl:mb-8">
          Marching Band<span class="text-[#393939] font-black sm:text-[60px]"></br>Ekalavya Suara Brawijaya</span>
          </p>
          <p class="text-base mb-6 sm:text-[12px]  text-justify xl:text-[16px]">
          <span class="pr-0 mb-8 font-semibold text-base text-[#393939]">Marching Band Ekalavya Suara Brawijaya</span> merupakan unit kegiatan mahasiswa universitas Brawijaya yang dibentuk pada tahun 2010 dan ditetapkan oleh <span class="font-semibold">SK Rektor</span> pada <span class="font-semibold">tanggal 25 Februari 2011.</span>  Tujuan dibentuknya karena belum ada sarana untuk mewadahi minat dan bakat mahasiswa dalam bidang seni olahraga terutama marching band.       
          <div class="w-[177px] h-[45px] flex items-center justify-center">
            <a target="_blank" href="https://play.google.com/store/apps" class="w-full h-full flex items-center justify-center">
            <button 
                class="flex items-center justify-center bg-gradient-custom text-white font-reguler py-2 px-4 rounded-[30px] hover:bg-[#e5ad01] transition duration-300 transform hover:scale-105 hover:shadow-lg hover:shadow-[#CCBCA6] dark:hover:shadow-blue-800/80"
              >
                Selengkapnya
                <i class='bx bx-right-arrow-alt ml-2'></i>
              </button>
            </a>
          </div>
        </div>
        
        <div
          data-aos="fade-right"
          data-aos-duration="600"
          class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10"
        >
          <img src="images/img-hero.png" alt="Gambar Orang" class="w-full h-auto max-w-5xl xl:max-w-5xl mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12" />
        </div>
      </div>
    </section>

    <!-- Konten Partnership -->
    <section id="heroes" class="relative items-center gap-7 justify-center w-full overflow-x-hidden lg:pt-16 lg:pb-4 xl:pt-16 xl:pb-4">
        <div data-aos="fade-down" data-aos-duration="600" class="">
            <p class="text-center font-bold text-base mb-1 sm:text-[16px] text-[#393939] xl:text-[24px]">Our Partnership</p>
        </div>
        <!-- Logo Perusahaan -->
        <div data-aos="fade-down" data-aos-duration="600" class="container flex flex-col items-center justify-center h-full max-w-6xl px-2 mx-auto mt-12 lg:flex-row xl:px-0">
            <div class="flex flex-row gap-40 items-center justify-center">
                <div class="w-[210px] h-[44px] flex items-center justify-center">
                  <a href="https://www.instagram.com/katsikat.id/">
                    <img src="images/katsikat.png" alt="Logo Katsikat" class="w-auto h-auto transition-transform duration-300 transform hover:scale-110">
                  </a>  
                </div>
                <div class="w-[210px] h-[44px] flex items-center justify-center">
                  <a href="https://www.instagram.com/katsikat.id/">
                    <img src="images/katsikat.png" alt="Logo Katsikat" class="w-auto h-auto transition-transform duration-300 transform hover:scale-110">
                  </a>                </div>
                <div class="w-[210px] h-[44px] flex items-center justify-center">
                  <a href="https://www.instagram.com/katsikat.id/">
                    <img src="images/katsikat.png" alt="Logo Katsikat" class="w-auto h-auto transition-transform duration-300 transform hover:scale-110">
                  </a>                </div>
            </div>
        </div>

    </section> 


    <!-- Konten Sisebi -->
    <section id="heroes" class="relative items-center gap-7 justify-center w-full overflow-x-hidden lg:pt-40 lg:pb-4 xl:pt-40 xl:pb-4">
      <div
        data-aos="fade-right"
        data-aos-duration="600"
        id=""
        class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0"
      >
          <div
              data-aos="fade-up"
              data-aos-duration="600"
              class="order-2 lg:order-1 w-full lg:w-2/5 flex gap-3 flex-col items-center lg:items-end"
          >
              <img src="images/sisebi1.png" alt="Gambar Orang" class="" />
          </div>
          <div
              class="order-1 lg:order-2 lg:w-3/5 flex justify-center flex-col gap-6 mt-8"
          >
            <div class="gap-1 text-center">
              <p class="font-black text-[32px] text-center text-[#393939]">
                  Kenalin, Namaku Sisebi!
              </p>
              <p class="font-bold text-[20px] text-center text-[#393939]"> Si Strong Ekalavya Bisa</p>
            </div>
              <p class="text-base font-reguler text-justify text-[#393939]">
              Namaku <span class="font-bold text-[#000000]">SISEBI</span>. Si Strong Ekalavya Bisa. Aku melambangkan kegigihan Ekalavya Warriors dalam membela almamater UB melalui Marching Band. Ikat kuning di kepala ku melambangkan kemauan, kreatifitas, inovasi dan skill yang ku miliki. Kalau selempang panah warna navy ini melambangkan warna almamater yang aku gunakan sebagai bentuk perjuangan dalam mengharumkan nama Universitas Brawijaya. Warna putih di kamen atau sarung milikku ini melambangkan kesucian dan kemantapan di organisasi ku dalam setiap pengambilan langkahnya.              </p>
          </div>
        </div>
      </section>

    <!-- Konten Achievements -->
    <section id="heroes" class="relative items-center gap-7 justify-center w-full overflow-x-hidden lg:pt-16 lg:pb-32 xl:pt-16 xl:pb-32">
      <div
        data-aos="fade-left"
        data-aos-duration="600"
        id=""
        class="overflow-x-hidden container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0"
      >
        <div
          class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left"
        >
          <p class="relative mb-4 text-[48px] font-reguler leading-tight text-[#393939] sm:text-[34px] xl:mb-8">
          Achievements<span class="text-[#393939] font-black sm:text-[60px]"></br>ESB NICE!</span>
          </p>
          <p class="text-base mb-6 sm:text-[12px] text-justify xl:text-[16px]">
          <span class="pr-0 mb-8 font-semibold text-base text-[#393939]">Marching Band Ekalavya Suara Brawijaya</span> telah mencapai berbagai prestasi gemilang sejak didirikan. Mulai dari meraih juara umum di tingkat nasional, dan ESB juga telah berpartisipasi dalam kompetisi internasional, mengharumkan nama Universitas Brawijaya di kancah global. Prestasi-prestasi ini mencerminkan dedikasi dan kerja keras seluruh anggota ESB dalam mengembangkan bakat dan minat mereka di bidang seni dan olahraga marching band.       
          <div class="w-[177px] h-[45px] flex items-center justify-center">
            <a target="_blank" href="prestasi.php" class="w-full h-full flex items-center justify-center">
            <button 
              class="flex items-center justify-center bg-gradient-custom text-white font-reguler py-2 px-4 rounded-[30px] hover:bg-[#e5ad01] transition duration-300 transform hover:scale-105 hover:shadow-lg hover:shadow-[#CCBCA6] dark:hover:shadow-blue-800/80"
            >
              Selengkapnya
              <i class='bx bx-right-arrow-alt ml-2'></i>
            </button>
            </a>
          </div>
        </div>
        
        <div
          data-aos="fade-right"
          data-aos-duration="600"
          class="relative z-50 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10"
        >
          <img src="images/img-hero.png" alt="Gambar Orang" class="w-full h-auto max-w-5xl xl:max-w-5xl mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12" />
        </div>
      </div>
    </section>

    <!-- Kontent Event -->
    <div id="animation-carousel" class="relative overflow-hidden overflow-x-hidden rounded-[30px] max-h-full  mx-20" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="images/event-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/4 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-[#927EFF] via-transparent to-[#D9D9D9] opacity-75"></div>
                <div class="absolute inset-0 flex flex-col items-left justify-left">
                    <p class="text-white mx-24 text-[48px] font-black mt-4 mb-40">Events</p>
                    <p class="text-white ml-24 text-[14px] font-reguler w-100 mr-[520px] leading-relaxed"><span class="font-bold">Open House RAJA Brawijaya</span> adalah kegiatan penutup dari rangkaian acara RAJA Brawijaya, dimana Mahasiswa Baru dapat mengenal dan memilih UKM yang ada di Universitas Brawijaya sesuai dengan bakat serta minat yang dimiliki. Dalam kesempatan ini Marching Band Ekalavya Suara Brawijaya ikut serta dalam kegiatan yang dilaksanakan tiap tahun tersebut.</p>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="images/event-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/4 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-[#927EFF] via-transparent to-[#D9D9D9] opacity-75"></div>
                <div class="absolute inset-0 flex flex-col items-left justify-left">
                    <p class="text-white mx-24 text-[48px] font-black mt-4 mb-40">Events</p>
                    <p class="text-white ml-24 text-[14px] font-reguler w-100 mr-[520px] leading-relaxed"><span class="font-bold">Open House RAJA Brawijaya</span> adalah kegiatan penutup dari rangkaian acara RAJA Brawijaya, dimana Mahasiswa Baru dapat mengenal dan memilih UKM yang ada di Universitas Brawijaya sesuai dengan bakat serta minat yang dimiliki. Dalam kesempatan ini Marching Band Ekalavya Suara Brawijaya ikut serta dalam kegiatan yang dilaksanakan tiap tahun tersebut.</p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="images/event-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/4 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-[#927EFF] via-transparent to-[#D9D9D9] opacity-75"></div>
                <div class="absolute inset-0 flex flex-col items-left justify-left">
                    <p class="text-white mx-24 text-[48px] font-black mt-4 mb-40">Events</p>
                    <p class="text-white ml-24 text-[14px] font-reguler w-100 mr-[520px] leading-relaxed"><span class="font-bold">Open House RAJA Brawijaya</span> adalah kegiatan penutup dari rangkaian acara RAJA Brawijaya, dimana Mahasiswa Baru dapat mengenal dan memilih UKM yang ada di Universitas Brawijaya sesuai dengan bakat serta minat yang dimiliki. Dalam kesempatan ini Marching Band Ekalavya Suara Brawijaya ikut serta dalam kegiatan yang dilaksanakan tiap tahun tersebut.</p>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="images/event-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/4 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-[#927EFF] via-transparent to-[#D9D9D9] opacity-75"></div>
                <div class="absolute inset-0 flex flex-col items-left justify-left">
                    <p class="text-white mx-24 text-[48px] font-black mt-4 mb-40">Events</p>
                    <p class="text-white ml-24 text-[14px] font-reguler w-100 mr-[520px] leading-relaxed"><span class="font-bold">Open House RAJA Brawijaya</span> adalah kegiatan penutup dari rangkaian acara RAJA Brawijaya, dimana Mahasiswa Baru dapat mengenal dan memilih UKM yang ada di Universitas Brawijaya sesuai dengan bakat serta minat yang dimiliki. Dalam kesempatan ini Marching Band Ekalavya Suara Brawijaya ikut serta dalam kegiatan yang dilaksanakan tiap tahun tersebut.</p>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="images/event-1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/4 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-r from-[#927EFF] via-transparent to-[#D9D9D9] opacity-75"></div>
                <div class="absolute inset-0 flex flex-col items-left justify-left">
                    <p class="text-white mx-24 text-[48px] font-black mt-4 mb-40">Events</p>
                    <p class="text-white ml-24 text-[14px] font-reguler w-100 mr-[520px] leading-relaxed"><span class="font-bold">Open House RAJA Brawijaya</span> adalah kegiatan penutup dari rangkaian acara RAJA Brawijaya, dimana Mahasiswa Baru dapat mengenal dan memilih UKM yang ada di Universitas Brawijaya sesuai dengan bakat serta minat yang dimiliki. Dalam kesempatan ini Marching Band Ekalavya Suara Brawijaya ikut serta dalam kegiatan yang dilaksanakan tiap tahun tersebut.</p>
                </div>
            </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none">
                      <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                      </svg>
                      <span class="sr-only">Previous</span>
                  </span>
              </button>
              <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none">
                      <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                      </svg>
                      <span class="sr-only">Next</span>
                  </span>
              </button>
        </div>
    </div>


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

   

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      let sliderContainer = document.getElementById("sliderContainer");
      let slider = document.getElementById("slider");
      let cards = slider.getElementsByTagName("li");

      let elementsToShow = 2;
      if (document.body.clientWidth < 1000) {
        elementsToShow = 1;
      }

      let sliderContainerWidth = sliderContainer.clientWidth;
      let cardWidth = sliderContainerWidth / elementsToShow;

      slider.style.width = cards.length * cardWidth + "px";
      slider.style.transition = "margin";
      slider.style.transitionDuration = "1s";

      for (let index = 0; index < cards.length; index++) {
        const element = cards[index];
        element.style.width = cardWidth + "px";
      }

      function prev() {
        let currentMargin = parseInt(slider.style.marginLeft) || 0;
        let maxOffset = 0;

        if (currentMargin < 0) {
          slider.style.marginLeft =
            Math.min(currentMargin + cardWidth, maxOffset) + "px";
        }
      }

      function next() {
        let currentMargin = parseInt(slider.style.marginLeft) || 0;
        let maxOffset = -cardWidth * (cards.length - elementsToShow);

        if (currentMargin > maxOffset) {
          slider.style.marginLeft =
            Math.max(currentMargin - cardWidth, maxOffset) + "px";
        }
      }
    </script>

    <script src="scripts/checkLogin.js"></script>
    <script src="scripts/home.js" type="module"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
  </body>
</html>
