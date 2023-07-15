<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <!-- Mirrored from weblearnbd.net/tphtml/shofy-prv/shofy/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 08:00:19 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Shofy - Multipurpose eCommerce HTML Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Place favicon.ico in the root directory -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/logo/favicon.png"
    />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css" />
    <link rel="stylesheet" href="assets/css/flaticon_shofy.css" />
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- pre loader area start -->
    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
           <!-- loading content here  -->
          <div class="tp-preloader-content">
            <div class="tp-preloader-logo">
              <div class="tp-preloader-circle">
                <svg
                  width="190"
                  height="190"
                  viewBox="0 0 380 380"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    stroke="#D9D9D9"
                    cx="190"
                    cy="190"
                    r="180"
                    stroke-width="6"
                    stroke-linecap="round"
                  ></circle>
                  <circle
                    stroke="red"
                    cx="190"
                    cy="190"
                    r="180"
                    stroke-width="6"
                    stroke-linecap="round"
                  ></circle>
                </svg>
              </div>
              <img src="assets/img/logo/preloader/preloader-icon.svg" alt="" />
            </div>
            <h3 class="tp-preloader-title">Shofy</h3>
            <p class="tp-preloader-subtitle">Loading</p>
          </div>
        </div>
      </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg
          width="12"
          height="7"
          viewBox="0 0 12 7"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M11 6L6 1L1 6"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>
    </div>
    <!-- back to top end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
          <button class="offcanvas__close-btn offcanvas-close-btn">
            <svg
              width="12"
              height="12"
              viewBox="0 0 12 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M11 1L1 11"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M1 1L11 11"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
        <div class="offcanvas__content">
          <div
            class="offcanvas__top mb-70 d-flex justify-content-between align-items-center"
          >
            <div class="offcanvas__logo logo">
              <a href="index.html">
                <img src="assets/img/logo/logo.svg" alt="logo" />
              </a>
            </div>
          </div>
          <div class="offcanvas__category pb-40">
            <button class="tp-offcanvas-category-toggle">
              <i class="fa-solid fa-bars"></i>
              All Categories
            </button>
            <div class="tp-category-mobile-menu"></div>
          </div>
          <div class="tp-main-menu-mobile fix mb-40"></div>

          <div class="offcanvas__contact align-items-center d-none">
            <div class="offcanvas__contact-icon mr-20">
              <span>
                <img src="assets/img/icon/contact.png" alt="" />
              </span>
            </div>
            <div class="offcanvas__contact-content">
              <h3 class="offcanvas__contact-title">
                <a href="tel:098-852-987">004524865</a>
              </h3>
            </div>
          </div>
          <div class="offcanvas__btn">
            <a href="contact.html" class="tp-btn-2 tp-btn-border-2"
              >Contact Us</a
            >
          </div>
        </div>
        <div class="offcanvas__bottom">
          <div
            class="offcanvas__footer d-flex align-items-center justify-content-between"
          >
            <div class="offcanvas__currency-wrapper currency">
              <span
                class="offcanvas__currency-selected-currency tp-currency-toggle"
                id="tp-offcanvas-currency-toggle"
                >Currency : USD</span
              >
              <ul class="offcanvas__currency-list tp-currency-list">
                <li>USD</li>
                <li>ERU</li>
                <li>BDT</li>
                <li>INR</li>
              </ul>
            </div>
            <div class="offcanvas__select language">
              <div
                class="offcanvas__lang d-flex align-items-center justify-content-md-end"
              >
                <div class="offcanvas__lang-img mr-15">
                  <img src="assets/img/icon/language-flag.png" alt="" />
                </div>
                <div class="offcanvas__lang-wrapper">
                  <span
                    class="offcanvas__lang-selected-lang tp-lang-toggle"
                    id="tp-offcanvas-lang-toggle"
                    >English</span
                  >
                  <ul class="offcanvas__lang-list tp-lang-list">
                    <li>Spanish</li>
                    <li>Portugese</li>
                    <li>American</li>
                    <li>Canada</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <!-- mobile menu area start -->
    <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
      <div class="container">
        <div class="row row-cols-5">
          <div class="col">
            <div class="tp-mobile-item text-center">
              <a href="shop.html" class="tp-mobile-item-btn">
                <i class="flaticon-store"></i>
                <span>Store</span>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="tp-mobile-item text-center">
              <button class="tp-mobile-item-btn tp-search-open-btn">
                <i class="flaticon-search-1"></i>
                <span>Search</span>
              </button>
            </div>
          </div>
          <div class="col">
            <div class="tp-mobile-item text-center">
              <a href="wishlist.html" class="tp-mobile-item-btn">
                <i class="flaticon-love"></i>
                <span>Wishlist</span>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="tp-mobile-item text-center">
              <a href="profile.html" class="tp-mobile-item-btn">
                <i class="flaticon-user"></i>
                <span>Account</span>
              </a>
            </div>
          </div>
          <div class="col">
            <div class="tp-mobile-item text-center">
              <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                <i class="flaticon-menu-1"></i>
                <span>Menu</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile menu area end -->

    <!-- search area start -->
    <section class="tp-search-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="tp-search-form">
              <div class="tp-search-close text-center mb-20">
                <button
                  class="tp-search-close-btn tp-search-close-btn"
                ></button>
              </div>
              <form action="#">
                <div class="tp-search-input mb-10">
                  <input type="text" placeholder="Search for product..." />
                  <button type="submit">
                    <i class="flaticon-search-1"></i>
                  </button>
                </div>
                <div class="tp-search-category">
                  <span>Search by : </span>
                  <a href="#">Men, </a>
                  <a href="#">Women, </a>
                  <a href="#">Children, </a>
                  <a href="#">Shirt, </a>
                  <a href="#">Demin</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- search area end -->

    <!-- cart mini area start -->
    <div class="cartmini__area">
      <div class="cartmini__wrapper d-flex justify-content-between flex-column">
        <div class="cartmini__top-wrapper">
          <div class="cartmini__top p-relative">
            <div class="cartmini__top-title">
              <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
              <button
                type="button"
                class="cartmini__close-btn cartmini-close-btn"
              >
                <i class="fal fa-times"></i>
              </button>
            </div>
          </div>
          <div class="cartmini__shipping">
            <p>Free Shipping for all orders over <span>$50</span></p>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped progress-bar-animated"
                role="progressbar"
                data-width="70%"
                aria-valuenow="70"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
          </div>
          <div class="cartmini__widget">
            <div class="cartmini__widget-item">
              <div class="cartmini__thumb">
                <a href="product-details.html">
                  <img src="assets/img/product/product-1.jpg" alt="" />
                </a>
              </div>
              <div class="cartmini__content">
                <h5 class="cartmini__title">
                  <a href="product-details.html">Level Bolt Smart Lock</a>
                </h5>
                <div class="cartmini__price-wrapper">
                  <span class="cartmini__price">$46.00</span>
                  <span class="cartmini__quantity">x2</span>
                </div>
              </div>
              <a href="#" class="cartmini__del"
                ><i class="fa-regular fa-xmark"></i
              ></a>
            </div>
          </div>
          <!-- for wp -->
          <!-- if no item in cart -->
          <div class="cartmini__empty text-center d-none">
            <img src="assets/img/product/cartmini/empty-cart.png" alt="" />
            <p>Your Cart is empty</p>
            <a href="shop.html" class="tp-btn">Go to Shop</a>
          </div>
        </div>
        <div class="cartmini__checkout">
          <div class="cartmini__checkout-title mb-30">
            <h4>Subtotal:</h4>
            <span>$113.00</span>
          </div>
          <div class="cartmini__checkout-btn">
            <a href="cart.php" class="tp-btn mb-10 w-100"> view cart</a>
            <a href="checkout.html" class="tp-btn tp-btn-border w-100">
              checkout</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- cart mini area end -->

    <!-- header area start -->
    <?php require_once "header.php"?>
    <!-- header area end -->

    <main>
      <!-- breadcrumb area start -->
      <section class="breadcrumb__area include-bg pt-95 pb-50">
        <div class="container">
          <div class="row">
            <div class="col-xxl-12">
              <div class="breadcrumb__content p-relative z-index-1">
                <h3 class="breadcrumb__title">Shopping Cart</h3>
                <div class="breadcrumb__list">
                  <span><a href="#">Home</a></span>
                  <span>Shopping Cart</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- cart area start -->
      <section class="tp-cart-area pb-120">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 col-lg-8">
              <div class="tp-cart-list mb-25 mr-30">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2" class="tp-cart-header-product">
                        Product
                      </th>
                      <th class="tp-cart-header-price">Price</th>
                      <th class="tp-cart-header-quantity">Quantity</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <!-- img -->
                      <td class="tp-cart-img">
                        <a href="product-details.html">
                          <img
                            src="assets/img/product/cart/product-cart-1.jpg"
                            alt=""
                        /></a>
                      </td>
                      <!-- title -->
                      <td class="tp-cart-title">
                        <a href="product-details.html"
                          >Legendary Whitetails Wmen's.</a
                        >
                      </td>
                      <!-- price -->
                      <td class="tp-cart-price"><span>$76.00</span></td>
                      <!-- quantity -->
                      <td class="tp-cart-quantity">
                        <div class="tp-product-quantity mt-10 mb-10">
                          <span class="tp-cart-minus">
                            <svg
                              width="10"
                              height="2"
                              viewBox="0 0 10 2"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M1 1H9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          <input class="tp-cart-input" type="text" value="1" />
                          <span class="tp-cart-plus">
                            <svg
                              width="10"
                              height="10"
                              viewBox="0 0 10 10"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M5 1V9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M1 5H9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                        </div>
                      </td>
                      <!-- action -->
                      <td class="tp-cart-action">
                        <button class="tp-cart-action-btn">
                          <svg
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z"
                              fill="currentColor"
                            />
                          </svg>
                          <span>Remove</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <!-- img -->
                      <td class="tp-cart-img">
                        <a href="product-details.html">
                          <img
                            src="assets/img/product/cart/product-cart-2.jpg"
                            alt=""
                        /></a>
                      </td>
                      <!-- title -->
                      <td class="tp-cart-title">
                        <a href="product-details.html"
                          >Tommy Hilfiger Women’s Jaden</a
                        >
                      </td>
                      <!-- price -->
                      <td class="tp-cart-price"><span>$44.00</span></td>
                      <!-- quantity -->
                      <td class="tp-cart-quantity">
                        <div class="tp-product-quantity mt-10 mb-10">
                          <span class="tp-cart-minus">
                            <svg
                              width="10"
                              height="2"
                              viewBox="0 0 10 2"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M1 1H9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          <input class="tp-cart-input" type="text" value="1" />
                          <span class="tp-cart-plus">
                            <svg
                              width="10"
                              height="10"
                              viewBox="0 0 10 10"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M5 1V9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M1 5H9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                        </div>
                      </td>
                      <!-- action -->
                      <td class="tp-cart-action">
                        <button class="tp-cart-action-btn">
                          <svg
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z"
                              fill="currentColor"
                            />
                          </svg>
                          <span>Remove</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <!-- img -->
                      <td class="tp-cart-img">
                        <a href="product-details.html">
                          <img
                            src="assets/img/product/cart/product-cart-3.jpg"
                            alt=""
                        /></a>
                      </td>
                      <!-- title -->
                      <td class="tp-cart-title">
                        <a href="product-details.html"
                          >Simple Modern School Boys</a
                        >
                      </td>
                      <!-- price -->
                      <td class="tp-cart-price"><span>$62.00</span></td>
                      <!-- quantity -->
                      <td class="tp-cart-quantity">
                        <div class="tp-product-quantity mt-10 mb-10">
                          <span class="tp-cart-minus">
                            <svg
                              width="10"
                              height="2"
                              viewBox="0 0 10 2"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M1 1H9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          <input class="tp-cart-input" type="text" value="1" />
                          <span class="tp-cart-plus">
                            <svg
                              width="10"
                              height="10"
                              viewBox="0 0 10 10"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M5 1V9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M1 5H9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                        </div>
                      </td>
                      <!-- action -->
                      <td class="tp-cart-action">
                        <button class="tp-cart-action-btn">
                          <svg
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z"
                              fill="currentColor"
                            />
                          </svg>
                          <span>Remove</span>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <!-- img -->
                      <td class="tp-cart-img">
                        <a href="product-details.html">
                          <img
                            src="assets/img/product/cart/product-cart-4.jpg"
                            alt=""
                        /></a>
                      </td>
                      <!-- title -->
                      <td class="tp-cart-title">
                        <a href="product-details.html"
                          >Calvin Klein Gabrianna Novelty</a
                        >
                      </td>
                      <!-- price -->
                      <td class="tp-cart-price"><span>$93.00</span></td>
                      <!-- quantity -->
                      <td class="tp-cart-quantity">
                        <div class="tp-product-quantity mt-10 mb-10">
                          <span class="tp-cart-minus">
                            <svg
                              width="10"
                              height="2"
                              viewBox="0 0 10 2"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M1 1H9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                          <input class="tp-cart-input" type="text" value="1" />
                          <span class="tp-cart-plus">
                            <svg
                              width="10"
                              height="10"
                              viewBox="0 0 10 10"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M5 1V9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M1 5H9"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </span>
                        </div>
                      </td>
                      <!-- action -->
                      <td class="tp-cart-action">
                        <button class="tp-cart-action-btn">
                          <svg
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z"
                              fill="currentColor"
                            />
                          </svg>
                          <span>Remove</span>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tp-cart-bottom">
                <div class="row align-items-end">
                  <div class="col-xl-6 col-md-8">
                    <div class="tp-cart-coupon">
                      <form action="#">
                        <div class="tp-cart-coupon-input-box">
                          <label>Coupon Code:</label>
                          <div
                            class="tp-cart-coupon-input d-flex align-items-center"
                          >
                            <input
                              type="text"
                              placeholder="Enter Coupon Code"
                            />
                            <button type="submit">Apply</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-4">
                    <div class="tp-cart-update text-md-end">
                      <button type="button" class="tp-cart-update-btn">
                        Update Cart
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="tp-cart-checkout-wrapper">
                <div
                  class="tp-cart-checkout-top d-flex align-items-center justify-content-between"
                >
                  <span class="tp-cart-checkout-top-title">Subtotal</span>
                  <span class="tp-cart-checkout-top-price">$742</span>
                </div>
                <div class="tp-cart-checkout-shipping">
                  <h4 class="tp-cart-checkout-shipping-title">Shipping</h4>

                  <div class="tp-cart-checkout-shipping-option-wrapper">
                    <div class="tp-cart-checkout-shipping-option">
                      <input id="flat_rate" type="radio" name="shipping" />
                      <label for="flat_rate"
                        >Flat rate: <span>$20.00</span></label
                      >
                    </div>
                    <div class="tp-cart-checkout-shipping-option">
                      <input id="local_pickup" type="radio" name="shipping" />
                      <label for="local_pickup"
                        >Local pickup: <span> $25.00</span></label
                      >
                    </div>
                    <div class="tp-cart-checkout-shipping-option">
                      <input id="free_shipping" type="radio" name="shipping" />
                      <label for="free_shipping">Free shipping</label>
                    </div>
                  </div>
                </div>
                <div
                  class="tp-cart-checkout-total d-flex align-items-center justify-content-between"
                >
                  <span>Total</span>
                  <span>$724</span>
                </div>
                <div class="tp-cart-checkout-proceed">
                  <a href="checkout.html" class="tp-cart-checkout-btn w-100"
                    >Proceed to Checkout</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- cart area end -->
    </main>

    <!-- footer area start -->
    <?php require_once "footer.php" ?>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/range-slider.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
  </body>

  <!-- Mirrored from weblearnbd.net/tphtml/shofy-prv/shofy/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 08:00:19 GMT -->
</html>
