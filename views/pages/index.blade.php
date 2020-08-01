@extends('layouts.app')

@section('content')
   <aside class="sidebar position-fixed h-100 position-relative d-none d-md-block">
      <a class="navbar-brand" href=""><img class="img-fluid aside-logo logo mt-xl" src="assets/uaimg/GetViral.svg"
            alt=""></a>
      <ul class="sidebar__lists list-unstyled">
         <li class="py-2 py-xl-3 my-3 d-flex align-items-center"><span class="sidebar__icon pr-3"><svg
                  class="dashboard-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                     fill="#B5B5B5" />
                  <path
                     d="M19.762 18.6122L15.1007 13.9509C14.7831 13.6333 14.2687 13.6333 13.9511 13.9509C13.6335 14.2683 13.6335 14.7832 13.9511 15.1005L18.6124 19.7618C18.7711 19.9206 18.979 20 19.1872 20C19.395 20 19.6031 19.9206 19.762 19.7618C20.0796 19.4444 20.0796 18.9295 19.762 18.6122Z"
                     fill="#B5B5B5" /></svg></span>
            <input class="sidebar__input side-bar__name mb-0" placeholder="Search"></li>
         <li class="my-4 py-2 py-xl-3 my-3 d-flex align-items-center"><span
               class="sidebar__icon sidebar__icon-active"><svg class="dashboard-icon icon-active"
                  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                  <path
                     d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" />
               </svg></span><a href="#"
               class="pl-3 side-bar__name sidebar__link sidebar__link-active nav-link-active mb-0">Dashboard</a></li>
         <li class="my-4 py-2 py-xl-3 my-3 d-flex align-items-center">
            <span class="sidebar__icon"><svg xmlns="http://www.w3.org/2000/svg" class="dashboard-icon"
                  aria-hidden="true" focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                  <path
                     d="M10 4h10a1 1 0 0 1 0 2H10a1 1 0 1 1 0-2zm0 7h10a1 1 0 0 1 0 2H10a1 1 0 0 1 0-2zm0 7h10a1 1 0 0 1 0 2H10a1 1 0 0 1 0-2zM5 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4z" />
               </svg></span><a href="#" class="sidebar__link pl-3 side-bar__name mb-0">Publisher List</a></li>
         <li class="my-4 py-2 py-xl-3 my-3 d-flex align-items-center"><span class="sidebar__icon"><svg
                  xmlns="http://www.w3.org/2000/svg" class="dashboard-icon" aria-hidden="true" focusable="false"
                  preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                  <path
                     d="M95.5 104h320a87.73 87.73 0 0 1 11.18.71a66 66 0 0 0-77.51-55.56L86 94.08h-.3a66 66 0 0 0-41.07 26.13A87.57 87.57 0 0 1 95.5 104z" />
                  <path
                     d="M415.5 128h-320a64.07 64.07 0 0 0-64 64v192a64.07 64.07 0 0 0 64 64h320a64.07 64.07 0 0 0 64-64V192a64.07 64.07 0 0 0-64-64zM368 320a32 32 0 1 1 32-32a32 32 0 0 1-32 32z" />
                  <path
                     d="M32 259.5V160c0-21.67 12-58 53.65-65.87C121 87.5 156 87.5 156 87.5s23 16 4 16s-18.5 24.5 0 24.5s0 23.5 0 23.5L85.5 236z" />
               </svg></span><a href="#" class="sidebar__link pl-3 side-bar__name mb-0">Wallet</a></li>
         <li class="my-4 py-2 py-xl-3 my-3 d-flex align-items-center"><span class="sidebar__icon"><svg
                  xmlns="http://www.w3.org/2000/svg" class="dashboard-icon" aria-hidden="true" focusable="false"
                  viewBox="0 0 1070 1000">
                  <path
                     d="M1070 938q0 21-2 63H1q0-10-.5-31T0 938q0-30 1-37q12-49 64-84.5t111.5-53t125.5-47t97-65.5q17-22 17-38q0-22-11-73q-4-21-10.5-36.5t-16-33T363 439q-15-35-33-132q-6-38-6-75q0-105 53.5-168T535 1t157.5 63T746 232q0 31-7 75q-14 89-32 132q-6 14-15.5 31.5t-16 33T665 540q-11 51-11 73q0 18 17 38q31 36 97 65.5t125 47t111 53t64 84.5q2 8 2 37z" />
               </svg></span><a href="#" class="sidebar__link pl-3 side-bar__name mb-0">Account</a></li>
      </ul>
      <li
         class="sidebar__link--sign-out position-absolute mx-auto py-2 py-xl-3 my-3 d-flex align-items-center sidebar__sign-out">
         <span class="sidebar__icon"><svg xmlns="http://www.w3.org/2000/svg" class="dashboard-icon sign-icon"
               aria-hidden="true" focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
               <g fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                  <path d="M16 17l5-5l-5-5" />
                  <path d="M21 12H9" />
               </g>
            </svg></span><a href="#" class="sidebar__link pl-3 side-bar__name side-bar__sign-out mb-0">Sign out</a></li>
   </aside>
   <!-- Small screens -->
   <header class="d-md-none header sticky-top">
      <nav class="navbar navbar-expand-md navbar-light navbar-bg-custom">
         <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="img-fluid logo" src="assets/uaimg/GetViral.svg" alt=""></a>
            <button class="navbar-toggler px-0" type="button" data-toggle="collapse" data-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
         </div>
         <div class="collapse navbar-collapse" id="navbarNav">
            <div class="container-fluid">
               <div class="row">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item py-1 d-flex align-items-center">
                        <!--FIXME: USE 'icon-active' ON SVG ICON TO MAKE IT ACTIVE-->
                        <!--FIXME: USE 'nav-link-active' ON link (a) tag TO MAKE IT ACTIVE-->
                        <svg class="pr-3 dashboard-icon icon-active" xmlns="http://www.w3.org/2000/svg"
                           aria-hidden="true" focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                           <path
                              d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" />
                        </svg>
                        <a class="nav-link nav-link-active" href="#">Dashboard</a>
                     </li>
                     <li class="nav-item py-1 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="pr-3 dashboard-icon" aria-hidden="true"
                           focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                           <path
                              d="M10 4h10a1 1 0 0 1 0 2H10a1 1 0 1 1 0-2zm0 7h10a1 1 0 0 1 0 2H10a1 1 0 0 1 0-2zm0 7h10a1 1 0 0 1 0 2H10a1 1 0 0 1 0-2zM5 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4a2 2 0 0 1 0 4z" />
                        </svg>
                        <a class="nav-link" href="#">Publisher list</a>
                     </li>
                     <li class="nav-item py-1 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="pr-3 dashboard-icon" aria-hidden="true"
                           focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                           <path
                              d="M95.5 104h320a87.73 87.73 0 0 1 11.18.71a66 66 0 0 0-77.51-55.56L86 94.08h-.3a66 66 0 0 0-41.07 26.13A87.57 87.57 0 0 1 95.5 104z" />
                           <path
                              d="M415.5 128h-320a64.07 64.07 0 0 0-64 64v192a64.07 64.07 0 0 0 64 64h320a64.07 64.07 0 0 0 64-64V192a64.07 64.07 0 0 0-64-64zM368 320a32 32 0 1 1 32-32a32 32 0 0 1-32 32z" />
                           <path
                              d="M32 259.5V160c0-21.67 12-58 53.65-65.87C121 87.5 156 87.5 156 87.5s23 16 4 16s-18.5 24.5 0 24.5s0 23.5 0 23.5L85.5 236z" />
                        </svg>
                        <a class="nav-link" href="#">Wallet</a>
                     </li>
                     <li class="nav-item py-1 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="pr-3 dashboard-icon" aria-hidden="true"
                           focusable="false" viewBox="0 0 1070 1000">
                           <path
                              d="M1070 938q0 21-2 63H1q0-10-.5-31T0 938q0-30 1-37q12-49 64-84.5t111.5-53t125.5-47t97-65.5q17-22 17-38q0-22-11-73q-4-21-10.5-36.5t-16-33T363 439q-15-35-33-132q-6-38-6-75q0-105 53.5-168T535 1t157.5 63T746 232q0 31-7 75q-14 89-32 132q-6 14-15.5 31.5t-16 33T665 540q-11 51-11 73q0 18 17 38q31 36 97 65.5t125 47t111 53t64 84.5q2 8 2 37z" />
                        </svg>
                        <a class="nav-link" href="#">Account</a>
                     </li>
                     <li class="nav-item py-1 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="pr-3 dashboard-icon sign-icon" aria-hidden="true"
                           focusable="false" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                           <g fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                              <path d="M16 17l5-5l-5-5" />
                              <path d="M21 12H9" />
                           </g>
                        </svg>
                        <a class="nav-link" href="#">Sign Out</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- SMALL INNER NAV  -->
         <div class="col-12">
            <div class="my-3 small-inner-nav">
               <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                  <li><a class="header__link mr-3" href="https://elcozy.github.io/get-vrl-dashboard/">Overview</a></li>
                  <li class="header__link mr-3"><a class="header__link"
                        href="https://envato-test.netlify.app/">Campaigns</a>
                  </li>
                  <li><a class="header__link-list-active header__link-active header_link" href="#">Upgrade Account</a>
                  </li>
               </ul>
            </div>
         </div>
         <!-- SMALL INNER NAV  -->
      </nav>
   </header>

   <main class="main-content">
      <!-- Big screens -->
      <header class="sticky-top">
         <nav class="position-relative py-md-3">
            <div class="container-fluid container-custom">
               <div class="d-flex justify-content-between align-items-center">
                  <!-- Close button -->
                  <button class="hamburger-button d-none d-md-block" id="close-sidebar">
                     <svg class="hamburger-menu" viewBox="0 0 37 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M35.3571 20H1.30952C0.962216 20 0.629134 20.1317 0.383551 20.3661C0.137967 20.6005 0 20.9185 0 21.25L0 23.75C0 24.0815 0.137967 24.3995 0.383551 24.6339C0.629134 24.8683 0.962216 25 1.30952 25H35.3571C35.7044 25 36.0375 24.8683 36.2831 24.6339C36.5287 24.3995 36.6667 24.0815 36.6667 23.75V21.25C36.6667 20.9185 36.5287 20.6005 36.2831 20.3661C36.0375 20.1317 35.7044 20 35.3571 20ZM25.3571 10H1.30952C0.962216 10 0.629134 10.1317 0.383551 10.3661C0.137967 10.6005 0 10.9185 0 11.25L0 13.75C0 14.0815 0.137967 14.3995 0.383551 14.6339C0.629134 14.8683 0.962216 15 1.30952 15H25.3571C25.7045 15 26.0375 14.8683 26.2831 14.6339C26.5287 14.3995 26.6667 14.0815 26.6667 13.75V11.25C26.6667 10.9185 26.5287 10.6005 26.2831 10.3661C26.0375 10.1317 25.7045 10 25.3571 10ZM35.3571 0H1.30952C0.962216 0 0.629134 0.131696 0.383551 0.366116C0.137967 0.600537 0 0.918479 0 1.25L0 3.75C0 4.08152 0.137967 4.39946 0.383551 4.63388C0.629134 4.8683 0.962216 5 1.30952 5H35.3571C35.7044 5 36.0375 4.8683 36.2831 4.63388C36.5287 4.39946 36.6667 4.08152 36.6667 3.75V1.25C36.6667 0.918479 36.5287 0.600537 36.2831 0.366116C36.0375 0.131696 35.7044 0 35.3571 0Z"
                           fill="#362F74" />
                     </svg>
                  </button>

                  <!-- Open button -->
                  <button class="hamburger-button d-none" id="open-sidebar">
                     <svg class="hamburger-menu" width="37" height="25" viewBox="0 0 37 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M1.30936 20H35.357C35.7043 20 36.0374 20.1317 36.283 20.3661C36.5285 20.6005 36.6665 20.9185 36.6665 21.25V23.75C36.6665 24.0815 36.5285 24.3995 36.283 24.6339C36.0374 24.8683 35.7043 25 35.357 25H1.30936C0.962055 25 0.628971 24.8683 0.383389 24.6339C0.137806 24.3995 -0.000164032 24.0815 -0.000164032 23.75V21.25C-0.000164032 20.9185 0.137806 20.6005 0.383389 20.3661C0.628971 20.1317 0.962055 20 1.30936 20ZM11.3094 10H35.357C35.7043 10 36.0374 10.1317 36.283 10.3661C36.5285 10.6005 36.6665 10.9185 36.6665 11.25V13.75C36.6665 14.0815 36.5285 14.3995 36.283 14.6339C36.0374 14.8683 35.7043 15 35.357 15H11.3094C10.9621 15 10.629 14.8683 10.3834 14.6339C10.1378 14.3995 9.99984 14.0815 9.99984 13.75V11.25C9.99984 10.9185 10.1378 10.6005 10.3834 10.3661C10.629 10.1317 10.9621 10 11.3094 10ZM1.30936 0H35.357C35.7043 0 36.0374 0.131696 36.283 0.366116C36.5285 0.600537 36.6665 0.918479 36.6665 1.25V3.75C36.6665 4.08152 36.5285 4.39946 36.283 4.63388C36.0374 4.8683 35.7043 5 35.357 5H1.30936C0.962055 5 0.628971 4.8683 0.383389 4.63388C0.137806 4.39946 -0.000164032 4.08152 -0.000164032 3.75V1.25C-0.000164032 0.918479 0.137806 0.600537 0.383389 0.366116C0.628971 0.131696 0.962055 0 1.30936 0Z"
                           fill="#362F74" />
                     </svg>

                  </button>

                  <!-- BIG SCREEN INNER PAGE NAV STARTS  -->
                  <div class="mr-auto ml-5 big-inner-nav">
                     <ul class="list-unstyled d-flex align-items-center justify-content-between mb-0">
                        <li><a class="header__link mr-3" href="https://elcozy.github.io/get-vrl-dashboard/">Overview</a>
                        </li>
                        <li class="header__link mr-3"><a class="header__link"
                              href="https://envato-test.netlify.app/">Campaigns</a>
                        </li>
                        <li><a class="header__link-list-active  header__link-active" href="#">Upgrade Account</a></li>
                     </ul>
                  </div>
                  <!-- BIG SCREEN INNER PAGE NAV ENDS  -->

                  <div class="d-none d-md-block">
                     <div class="d-flex justify-content-end align-items-center">
                        <img class="img-fluid profile-picture pr-2" src="assets/uaimg/profile picture.svg" alt="">
                        <span>Joshua</span>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section class="container-fluid container-custom">
         <!-- Small screens search bar -->
         <form class="d-md-none mobile-search my-2">
            <input type="text" class="mobile-search__input" placeholder="Search payment history">
            <svg class="dashboard-icon mobile-search__icon" viewBox="0 0 20 20" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                  fill="#B5B5B5" />
               <path
                  d="M19.762 18.6122L15.1007 13.9509C14.7831 13.6333 14.2687 13.6333 13.9511 13.9509C13.6335 14.2683 13.6335 14.7832 13.9511 15.1005L18.6124 19.7618C18.7711 19.9206 18.979 20 19.1872 20C19.395 20 19.6031 19.9206 19.762 19.7618C20.0796 19.4444 20.0796 18.9295 19.762 18.6122Z"
                  fill="#B5B5B5" /></svg>
         </form>
         <!-- Plug your mark up here-->
         <!--<div class="container-fluid">
            <div class="row">-->
         <!--wider screen nav start-->
         <!-- <div class="col-sm-2 d-none d-sm-block side-bar">
    
                </div>-->
         <!--wider screen nav end-->
         <!--pricing information (right column) start-->
         <div class="col-12 col-sm-10 pricing">

            <h1 class="pricing-heading mt-4">{{$heading}}</h1>
            <p class="pricing-heading__detail">Empower yourself with additional features when you upgrade</p>
            <!--pricing plan start-->
            <div class="card-deck mb-3 mt-5 text-center">
               <!--card 1-->
               <div class="col-lg-6">
                  <div class="card mb-4">
                     <div class="card-header standard-acc-header">
                        <h2 class="my-0 font-weight-normal">Standard Account</h2>
                     </div>
                     <div class="card-body">
                        <div class="row mt-3 card-body__info">
                           <div class="col-3"><svg width="44" height="69" viewBox="0 0 44 69" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M42.2793 38.7739C41.8377 37.7348 41.3133 36.732 40.7113 35.7749V18.4383C40.7138 16.0155 40.2312 13.6161 39.2914 11.3785C38.3515 9.14093 36.973 7.10935 35.2353 5.4009C33.5079 3.68297 31.4528 2.32101 29.1891 1.39393C26.9254 0.466851 24.4982 -0.00691684 22.048 7.63022e-05C19.5963 -0.00572629 17.1678 0.468543 14.9025 1.39551C12.6372 2.32248 10.5801 3.6838 8.84975 5.4009C7.11285 7.10928 5.73574 9.14111 4.79806 11.3789C3.86037 13.6167 3.38072 16.0161 3.38683 18.4383V20.9652H10.8605V18.4383C10.8605 15.4975 12.0185 12.712 14.1426 10.6228C15.1786 9.5938 16.4107 8.77816 17.7677 8.22304C19.1246 7.66792 20.5795 7.38436 22.048 7.38875C25.0114 7.39387 27.8521 8.55939 29.9484 10.6302C32.0447 12.7011 33.2258 15.5086 33.2333 18.4383V28.535C29.8368 26.5333 25.9542 25.4811 22 25.4907C19.1095 25.485 16.2464 26.0445 13.5756 27.1372C10.9048 28.2299 8.47894 29.8341 6.43778 31.8574C4.39197 33.8758 2.77 36.2742 1.66516 38.9146C0.560331 41.555 -0.00556036 44.3853 4.11818e-05 47.2428C-0.00474313 50.0978 0.561579 52.9256 1.66642 55.5634C2.77127 58.2013 4.39282 60.5971 6.43778 62.613C8.47929 64.6367 10.9044 66.2424 13.5744 67.3384C16.2444 68.4344 19.1068 68.999 21.9977 69C24.8887 69.001 27.7515 68.4383 30.4222 67.3442C33.093 66.2501 35.5193 64.646 37.5622 62.6238C39.6079 60.6057 41.2298 58.2076 42.3346 55.5676C43.4394 52.9276 44.0054 50.0977 44 47.2406C44 44.3084 43.4221 41.456 42.2749 38.7718L42.2793 38.7739ZM22.0044 61.604C13.9964 61.604 7.47802 55.1596 7.47802 47.2428C7.47802 39.3259 13.9964 32.8815 22.0044 32.8815C25.8561 32.8844 29.5493 34.3983 32.2729 37.091C34.9964 39.7836 36.5278 43.4348 36.5307 47.2428C36.5255 51.05 34.9934 54.6999 32.2703 57.392C29.5472 60.0841 25.8554 61.5989 22.0044 61.604ZM28.2415 47.3096C28.2415 55.427 15.9156 55.427 15.9156 47.3096C15.9156 39.1792 28.2415 39.1792 28.2415 47.3096Z" />
                              </svg>
                           </div>
                           <div class="col-9 text-left">
                              <h2 class="mb-0">Limited Access</h2>
                              <p class="mt-0">Get access to some tasks on the platform</p>
                           </div>
                        </div>
                        <div class="row my-5 card-body__info">
                           <div class="col-3"><svg width="69" height="69" viewBox="0 0 69 69" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M34.5 0L43.125 12.9375H38.8125V21.5625H30.1875V12.9375H25.875L34.5 0Z" />
                                 <path d="M64.6875 30.1875V64.6875H4.3125V30.1875H64.6875ZM69 25.875H0V69H69V25.875Z" />
                                 <path
                                    d="M34.5 34.5C36.199 34.5 37.8813 34.8346 39.451 35.4848C41.0206 36.135 42.4468 37.0879 43.6482 38.2893C44.8496 39.4907 45.8025 40.9169 46.4527 42.4865C47.1029 44.0562 47.4375 45.7385 47.4375 47.4375C47.4375 49.1365 47.1029 50.8188 46.4527 52.3885C45.8025 53.9581 44.8496 55.3843 43.6482 56.5857C42.4468 57.7871 41.0206 58.74 39.451 59.3902C37.8813 60.0404 36.199 60.375 34.5 60.375H56.0625V56.0625H60.375V38.8125H56.0625V34.5H34.5Z" />
                                 <path
                                    d="M21.5625 47.4375C21.5625 44.0063 22.9256 40.7156 25.3518 38.2893C27.7781 35.8631 31.0688 34.5 34.5 34.5H12.9375V38.8125H8.625V56.0625H12.9375V60.375H34.5C31.0688 60.375 27.7781 59.0119 25.3518 56.5857C22.9256 54.1594 21.5625 50.8687 21.5625 47.4375Z" />
                              </svg>

                           </div>
                           <div class="col-9 text-left">
                              <h2 class="mb-0">Quick Withdrawal</h2>
                              <p class="mt-0">Withdraw at specified time by advertiser
                           </div>
                        </div>
                        <div class="row my-5 card-body__info">
                           <div class="col-3"><svg width="68" height="69" viewBox="0 0 68 69" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M68 34.5L60.4582 25.3329L61.5091 13.2086L50.3509 10.5143L44.5091 0L34 4.79714L23.4909 0L17.6491 10.4814L6.49091 13.1429L7.54182 25.3L0 34.5L7.54182 43.6671L6.49091 55.8243L17.6491 58.5186L23.4909 69L34 64.17L44.5091 68.9671L50.3509 58.4857L61.5091 55.7914L60.4582 43.6671L68 34.5ZM28.0964 50.0086L16.3509 37.49L20.9255 32.6271L28.0964 40.2829L46.1782 20.9957L50.7527 25.8586L28.0964 50.0086Z" />
                              </svg>

                           </div>
                           <div class="col-9 text-left">
                              <h2 class="mb-0">Verified Account</h2>
                              <p class="mt-0">Account verification not applicable to you
                           </div>
                        </div>
                        <div class="row my-5 card-body__info">
                           <div class="col-3"><svg width="44" height="69" viewBox="0 0 44 69" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M22 0C17.5443 0.0100916 13.1962 1.37773 9.52863 3.92271C5.86103 6.4677 3.04602 10.0706 1.45453 14.2567C-0.136971 18.4428 -0.430281 23.0157 0.613245 27.3728C1.65677 31.7298 3.98817 35.6667 7.30024 38.6646V69L22 59.1429L36.6998 69V38.6646C40.0118 35.6667 42.3432 31.7298 43.3868 27.3728C44.4303 23.0157 44.137 18.4428 42.5455 14.2567C40.954 10.0706 38.139 6.4677 34.4714 3.92271C30.8038 1.37773 26.4557 0.0100916 22 0ZM31.7998 59.7836L24.7195 55.0521L22 53.2286L19.2805 55.0521L12.2002 59.7836V42.0161C15.2393 43.5584 18.5959 44.3619 22 44.3619C25.4041 44.3619 28.7607 43.5584 31.7998 42.0161V59.7836ZM33.9803 34.5C31.1469 37.2824 27.4436 38.9928 23.499 39.3409C19.5544 39.689 15.6115 38.6534 12.3397 36.4099C9.06794 34.1663 6.66881 30.8531 5.54959 27.0326C4.43037 23.2121 4.66003 19.1197 6.19958 15.4501C7.73913 11.7806 10.4937 8.75996 13.9957 6.90101C17.4978 5.04207 21.5314 4.45935 25.412 5.25177C29.2926 6.04419 32.7811 8.16292 35.2852 11.2483C37.7892 14.3337 39.1547 18.1957 39.1497 22.1786C39.1469 24.4751 38.6881 26.7479 37.8004 28.8637C36.9128 30.9795 35.614 32.8957 33.9803 34.5Z" />
                              </svg>

                           </div>
                           <div class="col-9 text-left pr-2">
                              <h2 class="mb-0">Free Recommendation</h2>
                              <p class="mt-0">No free recommendation to advertisers
                           </div>
                        </div>
                        <div class="row mt-5 card-body__info">
                           <div class="col-3 pt-3"><svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M18.5 0C8.28245 0 0 8.28307 0 18.5C0 28.7169 8.28307 37 18.5 37C28.7169 37 37 28.7169 37 18.5C37 8.28307 28.7169 0 18.5 0ZM14.1987 29.6L14.1864 29.5877L14.1759 29.6L5.55 20.72L9.88455 16.3022L14.187 20.7323L27.137 7.40062L31.45 11.8394L14.1987 29.6Z"
                                    fill="#C4C4C4" />
                              </svg>

                           </div>
                           <div class="col-9">
                              <h3 class="pricing__fee pr-5">$0/Yr</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--card 2-->
               <div class="col-lg-6">
                  <div class="card mb-4">
                     <div class="card-header premium-acc-header">
                        <h2 class="my-0 font-weight-normal">Premium Account</h2>
                     </div>
                     <div class="card-body">
                        <div class="row mt-3 card-body__info">
                           <div class="col-3"><svg width="44" height="69" viewBox="0 0 44 69" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M42.2793 38.7739C41.8377 37.7348 41.3133 36.732 40.7113 35.7749V18.4383C40.7138 16.0155 40.2312 13.6161 39.2914 11.3785C38.3515 9.14093 36.973 7.10935 35.2353 5.4009C33.5079 3.68297 31.4528 2.32101 29.1891 1.39393C26.9254 0.466851 24.4982 -0.00691684 22.048 7.63022e-05C19.5963 -0.00572629 17.1678 0.468543 14.9025 1.39551C12.6372 2.32248 10.5801 3.6838 8.84975 5.4009C7.11285 7.10928 5.73574 9.14111 4.79806 11.3789C3.86037 13.6167 3.38072 16.0161 3.38683 18.4383V20.9652H10.8605V18.4383C10.8605 15.4975 12.0185 12.712 14.1426 10.6228C15.1786 9.5938 16.4107 8.77816 17.7677 8.22304C19.1246 7.66792 20.5795 7.38436 22.048 7.38875C25.0114 7.39387 27.8521 8.55939 29.9484 10.6302C32.0447 12.7011 33.2258 15.5086 33.2333 18.4383V28.535C29.8368 26.5333 25.9542 25.4811 22 25.4907C19.1095 25.485 16.2464 26.0445 13.5756 27.1372C10.9048 28.2299 8.47894 29.8341 6.43778 31.8574C4.39197 33.8758 2.77 36.2742 1.66516 38.9146C0.560331 41.555 -0.00556036 44.3853 4.11818e-05 47.2428C-0.00474313 50.0978 0.561579 52.9256 1.66642 55.5634C2.77127 58.2013 4.39282 60.5971 6.43778 62.613C8.47929 64.6367 10.9044 66.2424 13.5744 67.3384C16.2444 68.4344 19.1068 68.999 21.9977 69C24.8887 69.001 27.7515 68.4383 30.4222 67.3442C33.093 66.2501 35.5193 64.646 37.5622 62.6238C39.6079 60.6057 41.2298 58.2076 42.3346 55.5676C43.4394 52.9276 44.0054 50.0977 44 47.2406C44 44.3084 43.4221 41.456 42.2749 38.7718L42.2793 38.7739ZM22.0044 61.604C13.9964 61.604 7.47802 55.1596 7.47802 47.2428C7.47802 39.3259 13.9964 32.8815 22.0044 32.8815C25.8561 32.8844 29.5493 34.3983 32.2729 37.091C34.9964 39.7836 36.5278 43.4348 36.5307 47.2428C36.5255 51.05 34.9934 54.6999 32.2703 57.392C29.5472 60.0841 25.8554 61.5989 22.0044 61.604ZM28.2415 47.3096C28.2415 55.427 15.9156 55.427 15.9156 47.3096C15.9156 39.1792 28.2415 39.1792 28.2415 47.3096Z" />
                              </svg>
                           </div>
                           <div class="col-9 text-left pr-1">
                              <h2 class="mb-0">Unlimited Access</h2>
                              <p class="mt-0">Get access to all tasks on the platform</p>
                           </div>
                        </div>
                        <div class="row my-5 card-body__info">
                           <div class="col-3"><svg width="69" height="69" viewBox="0 0 69 69" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M34.5 0L43.125 12.9375H38.8125V21.5625H30.1875V12.9375H25.875L34.5 0Z" />
                                 <path d="M64.6875 30.1875V64.6875H4.3125V30.1875H64.6875ZM69 25.875H0V69H69V25.875Z" />
                                 <path
                                    d="M34.5 34.5C36.199 34.5 37.8813 34.8346 39.451 35.4848C41.0206 36.135 42.4468 37.0879 43.6482 38.2893C44.8496 39.4907 45.8025 40.9169 46.4527 42.4865C47.1029 44.0562 47.4375 45.7385 47.4375 47.4375C47.4375 49.1365 47.1029 50.8188 46.4527 52.3885C45.8025 53.9581 44.8496 55.3843 43.6482 56.5857C42.4468 57.7871 41.0206 58.74 39.451 59.3902C37.8813 60.0404 36.199 60.375 34.5 60.375H56.0625V56.0625H60.375V38.8125H56.0625V34.5H34.5Z" />
                                 <path
                                    d="M21.5625 47.4375C21.5625 44.0063 22.9256 40.7156 25.3518 38.2893C27.7781 35.8631 31.0688 34.5 34.5 34.5H12.9375V38.8125H8.625V56.0625H12.9375V60.375H34.5C31.0688 60.375 27.7781 59.0119 25.3518 56.5857C22.9256 54.1594 21.5625 50.8687 21.5625 47.4375Z" />
                              </svg>

                           </div>
                           <div class="col-9 text-left">
                              <h2 class="mb-0">Quick Withdrawal</h2>
                              <p class="mt-0">Withdraw anytime you want
                           </div>
                        </div>
                        <div class="row my-5 card-body__info">
                           <div class="col-3"><svg width="68" height="69" viewBox="0 0 68 69" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M68 34.5L60.4582 25.3329L61.5091 13.2086L50.3509 10.5143L44.5091 0L34 4.79714L23.4909 0L17.6491 10.4814L6.49091 13.1429L7.54182 25.3L0 34.5L7.54182 43.6671L6.49091 55.8243L17.6491 58.5186L23.4909 69L34 64.17L44.5091 68.9671L50.3509 58.4857L61.5091 55.7914L60.4582 43.6671L68 34.5ZM28.0964 50.0086L16.3509 37.49L20.9255 32.6271L28.0964 40.2829L46.1782 20.9957L50.7527 25.8586L28.0964 50.0086Z" />
                              </svg>

                           </div>
                           <div class="col-9 text-left">
                              <h2 class="mb-0">Verified Account</h2>
                              <p class="mt-0">Automatic account verification
                           </div>
                        </div>
                        <div class="row my-5 card-body__info">
                           <div class="col-3"><svg width="44" height="69" viewBox="0 0 44 69" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M22 0C17.5443 0.0100916 13.1962 1.37773 9.52863 3.92271C5.86103 6.4677 3.04602 10.0706 1.45453 14.2567C-0.136971 18.4428 -0.430281 23.0157 0.613245 27.3728C1.65677 31.7298 3.98817 35.6667 7.30024 38.6646V69L22 59.1429L36.6998 69V38.6646C40.0118 35.6667 42.3432 31.7298 43.3868 27.3728C44.4303 23.0157 44.137 18.4428 42.5455 14.2567C40.954 10.0706 38.139 6.4677 34.4714 3.92271C30.8038 1.37773 26.4557 0.0100916 22 0ZM31.7998 59.7836L24.7195 55.0521L22 53.2286L19.2805 55.0521L12.2002 59.7836V42.0161C15.2393 43.5584 18.5959 44.3619 22 44.3619C25.4041 44.3619 28.7607 43.5584 31.7998 42.0161V59.7836ZM33.9803 34.5C31.1469 37.2824 27.4436 38.9928 23.499 39.3409C19.5544 39.689 15.6115 38.6534 12.3397 36.4099C9.06794 34.1663 6.66881 30.8531 5.54959 27.0326C4.43037 23.2121 4.66003 19.1197 6.19958 15.4501C7.73913 11.7806 10.4937 8.75996 13.9957 6.90101C17.4978 5.04207 21.5314 4.45935 25.412 5.25177C29.2926 6.04419 32.7811 8.16292 35.2852 11.2483C37.7892 14.3337 39.1547 18.1957 39.1497 22.1786C39.1469 24.4751 38.6881 26.7479 37.8004 28.8637C36.9128 30.9795 35.614 32.8957 33.9803 34.5Z" />
                              </svg>

                           </div>
                           <div class="col-9 text-left pr-2">
                              <h2 class="mb-0">Free Recommendation</h2>
                              <p class="mt-0">No free recommendation to advertisers
                           </div>
                        </div>
                        <div class="row mt-5 card-body__info">
                           <div class="col-3 pt-3"><svg class="premium-acc__check" width="37" height="37"
                                 viewBox="0 0 37 37" fill="#219653;" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M18.5 0C8.28245 0 0 8.28307 0 18.5C0 28.7169 8.28307 37 18.5 37C28.7169 37 37 28.7169 37 18.5C37 8.28307 28.7169 0 18.5 0ZM14.1987 29.6L14.1864 29.5877L14.1759 29.6L5.55 20.72L9.88455 16.3022L14.187 20.7323L27.137 7.40062L31.45 11.8394L14.1987 29.6Z"
                                    fill="#219653" />
                              </svg>

                           </div>
                           <div class="col-9">
                              <h3 class="pricing__fee pr-5">$80/Yr</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--pricing plan end-->
            <!--payment options start-->
            <div class="payment-option py-3 my-5">
               <h2 class="pl-3">Select Payment Options</h2>
               <div class="row px-1 my-4">
                  <div class="col">
                     <img class="img-fluid" src="assets/uaimg/paypal.png" alt="paypal payment image">
                  </div>
                  <div class="col">
                     <img class="img-fluid" src="assets/uaimg/paypal.png" alt="paypal payment image">
                  </div>
                  <div class="col">
                     <img class="img-fluid" src="assets/uaimg/paypal.png" alt="paypal payment image">
                  </div>
                  <div class="col">
                     <img class="img-fluid" src="assets/uaimg/paypal.png" alt="paypal payment image">
                  </div>
                  <div class="col">
                     <img class="img-fluid" src="assets/uaimg/paypal.png" alt="paypal payment image">
                  </div>
               </div>
            </div>
            <!--payment options end-->
            <!--payment form start-->
            <form class="form-container px-3 pt-5 pb-4 px-lg-5" id="upgrade-form">
               <div class="form-row px-lg-2">
                  <div class="form-group col-12">
                     <label for="inputName"><span class="text-danger">*</span> Card Name:</label>
                     <input type="text" class="form-control" id="inputName" placeholder="Enter Card Name" required>
                  </div>
                  <div class="form-group col-12">
                     <label for="inputEmail4"><span class="text-danger">*</span> Email Address</label>
                     <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Email Address"
                        required>
                  </div>
                  <div class="form-group col-7">
                     <label for="inputName"><span class="text-danger">*</span> Bank Name:</label>
                     <input type="text" class="form-control" id="inputBankName" placeholder="Enter Bank Name" required>
                  </div>
                  <div class="form-group col-5">
                     <label for="inputState"><span class="text-danger">*</span> Account Type</label>
                     <select id="inputState" class="form-control selectpicker" title="Select Account Type" required>
                        <option value="savings-account">Savings Account</option>
                        <option value="current-account">Current Account</option>
                        <option value="fixed-account">Fixed Account</option>
                        <option value="domiciliary-account">Domiciliary Account</option>
                        <option value="corporate-account">Corporate Account</option>
                     </select>
                  </div>
                  <div class="form-group col-12 col-md-5">
                     <label for="inputNumber"><span class="text-danger">*</span> Card Number:</label>
                     <input type="text" class="form-control" id="inputNumber" data-mask="0000 0000 0000 0000"
                        placeholder="Enter Card Number" required>
                  </div>
                  <div class="form-group  col-6 col-md">
                     <label for="inputdate"><span class="text-danger">*</span> Expiration</label>
                     <input type="text" class="form-control" id="inputdate" data-mask="00 / 00" placeholder="mm / yy"
                        required>
                  </div>
                  <div class="form-group  col-6 col-md">
                     <label for="inputCVV"><span class="text-danger">*</span> CVV Number &nbsp; <a
                           class="text-dark q-mark-info" data-toggle="tooltip"
                           title="The three digit number at the back of your card"><img class="img-fluid"
                              src="assets/uaimg/qmarkcircle.png"></a></label>
                     <input type="password" class="form-control" id="inputCVV" data-mask="000" placeholder="***"
                        required>
                  </div>


               </div>
            </form>
            <input type="submit" class="btn btn-primary btn-block pay-btn my-4" value="Make Payment"
               form="upgrade-form">

            <!--payment form end-->
         </div>
         <!--pricing information (right column) end-->
         <!-- </div>

         </div>-->
         <footer class="footer">
            <nav class="row align-items-center">
               <div class="col-sm-6">
                  <ul class="list-unstyled d-flex justify-content-center justify-content-md-start">
                     <li class="pr-3"><a class="footer-link" href="#">Privacy Policy</a></li>
                     <li><a class="footer-link" href="#">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-sm-6">
                  <p class="text-center text-md-right">&copy; Copyright 2020 GetViral All Rights Reserved.</p>
               </div>
            </nav>
         </footer>
      </section>
   </main>


   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>
   <!--bootstrap-select jQuery plugin js-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
   <!--nav js-->
   <script src="assets/uajs/nav.js"></script>
   <!--from input mask plugin-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
   <!--tooltip trigger via JS-->
   <script>
      $('.q-mark-info').tooltip();
   </script>
@endsection