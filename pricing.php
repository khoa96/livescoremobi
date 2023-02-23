<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="page-price-wrapper">
    <div class="container">
      <div class="page-price-header-wrapper">
        <h3 class="price-title">
          Special Deal: 12 Months <span class="highlight"> + 3 Months Free</span>
        </h3>
        <p class="price-description">All plans are covered by a 31-day money-back guarantee</p>
      </div>
    </div>
    <div class="seclect-plan-wrapper">
      <div class="container">
        <div class="step-wrapper">
          <span class="step-number">1</span>
          <span class="step-detail"><span class="step-highlight">Select</span> a plan that works for you</span>
        </div>

        <!-- TABS SELECT PLAN -->
        <div id="select-plan-tabs">
          <div class="list-plan">
            <div class="plan-item active">
              <span class="icon-checked">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="1" y="1" width="22" height="22" rx="11" fill="#009A5F" />
                  <g clip-path="url(#clip0_403_4679)">
                    <path d="M7.3335 11.9998L10.6668 15.3332L17.3335 8.6665" stroke="white" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_403_4679">
                      <rect width="16" height="16" fill="white" transform="translate(4 4)" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              <h4 class="plan-title">1 Months</h4>
              <div class="price-wrapper">
                <span class="prev-price">$10.99</span>
                <div class="primary-price">
                  <span class="sign">$</span>
                  <span class="price">4</span>
                  <span class="month">/mo</span>
                </div>
              </div>
              <span class="save-label">Save 5%</span>
              <button class="btn-select-plan">Get 1 month plan</button>
              <p class="plan-description">31-Day money-back guarantee</p>
            </div>

            <div class="plan-item">
              <span class="recomend-label">Most popular</span>
              <h4 class="plan-title">12<span class="highlight">+3 Months Free</span></h4>
              <div class="price-wrapper">
                <span class="prev-price">$10.99</span>
                <div class="primary-price">
                  <span class="sign">$</span>
                  <span class="price">3.5</span>
                  <span class="month">/mo</span>
                </div>
              </div>
              <span class="save-label">Save 10%</span>
              <button class="btn-select-plan">Get 1 month plan</button>
              <p class="plan-description">31-Day money-back guarantee</p>
            </div>

            <div class="plan-item">
              <h4 class="plan-title">6 Months</h4>
              <div class="price-wrapper">
                <span class="prev-price">$10.99</span>
                <div class="primary-price">
                  <span class="sign">$</span>
                  <span class="price">3</span>
                  <span class="month">/mo</span>
                </div>
              </div>
              <span class="save-label">Save 15%</span>
              <button class="btn-select-plan">Get 1 month plan</button>
              <p class="plan-description">31-Day money-back guarantee</p>
            </div>
          </div>
          <p class="step-description">All amounts shown are in USD.</p>
        </div>
        <!-- TABS SELECT PLAN -->
      </div>
    </div>

    <div class="select-your-payment-wrapper">
      <div class="container select-your-payment-content">
        <div class="left-content">
          <div class="step-header-wrapper">
            <div class="step-wrapper">
              <span class="step-number">2</span>
              <span class="step-detail step-2-detail">Select your preferred method of payment</span>
            </div>
          </div>

          <div class="payment-description">
            <span class="icon-success">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" y="1" width="22" height="22" rx="11" fill="#009A5F" />
                <g clip-path="url(#clip0_403_4705)">
                  <path d="M7.33301 11.9998L10.6663 15.3332L17.333 8.6665" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_403_4705">
                    <rect width="16" height="16" fill="white" transform="translate(4 4)" />
                  </clipPath>
                </defs>
              </svg>
            </span>
            <div class="description-detail">
              <span class="txt-bold">Secure checkout</span>
              <span class="dash"></span>
              <span>Your payment information is fully protected.</span>
            </div>
          </div>

          <div class="choose-payment-type-wrapper">
            <ul id="choose-paymen-accordion">
              <li class="accordion-item">
                <div class="payment-type-item">
                  <div class="checked-box">
                    <span class="icon-checked">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1" width="22" height="22" rx="11" fill="#009A5F" />
                        <g clip-path="url(#clip0_403_4777)">
                          <path d="M7.33301 11.9998L10.6663 15.3332L17.333 8.6665" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_403_4777">
                            <rect width="16" height="16" fill="white" transform="translate(4 4)" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </div>
                  <div class="payment-info">
                    <h5 class="payment-title">Credit Card</h5>
                    <div class="list-payment">
                      <div class="payment-item">
                        <img class="image-payment-credit" src="./images/payment-image-1.png" alt="">
                      </div>
                      <div class="payment-item">
                        <img class="image-payment-visa" src="./images/payment-image-2.png" alt="">
                      </div>
                      <div class="payment-item">
                        <img class="image-payment-jcb" src="./images/payment-image-3.png" alt="">
                      </div>
                      <div class="payment-item">
                        <img class="image-payment-union" src="./images/payment-image-4.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="accordion-content"></div> -->
              </li>
              <li class="accordion-item">
                <div class="payment-type-item">
                  <div class="checked-box">
                    <span class="checked">
                      <span class="icon-checked">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="1" y="1" width="22" height="22" rx="11" fill="#009A5F" />
                          <g clip-path="url(#clip0_403_4777)">
                            <path d="M7.33301 11.9998L10.6663 15.3332L17.333 8.6665" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_403_4777">
                              <rect width="16" height="16" fill="white" transform="translate(4 4)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </span>
                  </div>
                  <div class="payment-info">
                    <h5 class="payment-title">Paypal</h5>
                    <div class="list-payment">
                      <div class="payment-item">
                        <img class="image-payment-paypal" src="./images/payment-image-5.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="accordion-content"></div> -->
              </li>
              <li class="accordion-item">
                <div class="payment-type-item non-efundable-tab">
                  <div class="checked-box">
                    <span class="checked">
                      <span class="icon-checked">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="1" y="1" width="22" height="22" rx="11" fill="#009A5F" />
                          <g clip-path="url(#clip0_403_4777)">
                            <path d="M7.33301 11.9998L10.6663 15.3332L17.333 8.6665" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_403_4777">
                              <rect width="16" height="16" fill="white" transform="translate(4 4)" />
                            </clipPath>
                          </defs>
                        </svg>

                      </span>
                    </span>
                  </div>
                  <div class="payment-info">
                    <h5 class="payment-title">Non Refundable</h5>
                    <div class="list-payment">
                      <div class="payment-item">
                        <img class="image-payment-paypal" src="./images/payment-image-6.png" alt="">
                      </div>
                      <div class="payment-item">
                        <img class="image-payment-paypal" src="./images/payment-image-7.png" alt="">
                      </div>
                      <div class="payment-item">
                        <img class="image-payment-paypal" src="./images/payment-image-8.png" alt="">
                      </div>
                      <div class="payment-item">
                        <img class="image-payment-paypal" src="./images/payment-image-9.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-content non-efundable-content-tab">
                  <h4 class="title"><span class="highlight">Select</span> a cryptocurrency to pay:</h4>
                  <div class="list-chain">
                    <div class="chain-item">
                      <h4 class="chain-title">BNB Chain</h4>
                      <div class="list-chain-box">
                        <div class="chain-box-item active">
                          <img src="./images/payment-image-8.png" class="chain-image" alt="">
                          <span class="chain-name">BNB</span>
                        </div>
                        <div class="chain-box-item">
                          <img src="./images/payment-image-9.png" class="chain-image" alt="">
                          <span class="chain-name">USDT</span>
                        </div>
                      </div>
                    </div>
                    <div class="chain-item">
                      <h4 class="chain-title">ETH Chain</h4>
                      <div class="list-chain-box">
                        <div class="chain-box-item">
                          <img src="./images/payment-image-7.png" class="chain-image" alt="">
                          <span class="chain-name">ETH</span>
                        </div>
                        <div class="chain-box-item">
                          <img src="./images/payment-image-9.png" class="chain-image" alt="">
                          <span class="chain-name">USDT</span>
                        </div>
                      </div>
                    </div>
                    <div class="chain-item">
                      <h4 class="chain-title">BTC Chain</h4>
                      <div class="list-chain-box">
                        <div class="chain-box-item">
                          <img src="./images/payment-image-6.png" class="chain-image" alt="">
                          <span class="chain-name">BTC</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="payment-table-detail">
            <div class="table-row">
              <span class="title">6 months</span>
              <span class="value">
                <span class="text-gray text-through-line">$75</span>
                <span class="text-strong">$18</span>
              </span>
            </div>
            <div class="table-row">
              <span class="title">Fee payment</span>
              <span class="value">
                <span class="text-strong">$3</span>
              </span>
            </div>

            <div class="table-row">
              <span class="title">
                <span>Total</span>
              </span>
              <span class="value">
                <span class="text-total">$20</span>
              </span>
            </div>
          </div>

          <div class="enter-coupon-code-wrapper">
            <h3 class="title">Have coupon code?</h3>
          </div>
          <button class="btn-payment">
            <span class="icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17.5227 7.39601V8.92935C19.2451 9.46696 20.5 11.0261 20.5 12.8884V17.8253C20.5 20.1308 18.5886 22 16.2322 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8253V12.8884C3.5 11.0261 4.75595 9.46696 6.47729 8.92935V7.39601C6.48745 4.41479 8.95667 2 11.9848 2C15.0535 2 17.5227 4.41479 17.5227 7.39601ZM12.0054 3.73901C14.0682 3.73901 15.7448 5.37868 15.7448 7.39598V8.71367H8.25586V7.3761C8.26602 5.36875 9.94265 3.73901 12.0054 3.73901ZM12.8896 16.4549C12.8896 16.9419 12.4933 17.3294 11.9954 17.3294C11.5076 17.3294 11.1113 16.9419 11.1113 16.4549V14.2488C11.1113 13.7718 11.5076 13.3843 11.9954 13.3843C12.4933 13.3843 12.8896 13.7718 12.8896 14.2488V16.4549Z"
                  fill="white" />
              </svg>
            </span>
            <span>Subscribe Now</span>
          </button>

          <ul class="list-description">
            <li>
              <span class="icon">

                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.6815 4.93083V5.95306C12.8297 6.31147 13.6663 7.35092 13.6663 8.59243V11.8837C13.6663 13.4207 12.3921 14.6668 10.8212 14.6668H5.17887C3.60725 14.6668 2.33301 13.4207 2.33301 11.8837V8.59243C2.33301 7.35092 3.17031 6.31147 4.31787 5.95306V4.93083C4.32464 2.94335 5.97078 1.3335 7.98951 1.3335C10.0353 1.3335 11.6815 2.94335 11.6815 4.93083ZM8.00328 2.49284C9.37846 2.49284 10.4962 3.58595 10.4962 4.93081V5.80928H5.50358V4.91756C5.51035 3.57933 6.62811 2.49284 8.00328 2.49284ZM8.59272 10.9701C8.59272 11.2947 8.32853 11.5531 7.99659 11.5531C7.67142 11.5531 7.40723 11.2947 7.40723 10.9701V9.49938C7.40723 9.18139 7.67142 8.92301 7.99659 8.92301C8.32853 8.92301 8.59272 9.18139 8.59272 9.49938V10.9701Z"
                    fill="#A0AEC0" />
                </svg>

              </span>
              <span>Secure and encrypted payments</span>
            </li>
            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_403_4712)">
                    <path d="M3.33301 7.99984L6.66634 11.3332L13.333 4.6665" stroke="#A0AEC0" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_403_4712">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Automatically renews. Cancel at any time.</span>
            </li>
          </ul>
          <p class="txt-privacy">By proceeding, you agree to our <span class="txt-highlight">Terms of Service and
              Privacy Policy.</span>
          </p>
        </div>
        <div class="right-content">
          <h4 class="title">Livescoremobi plan includes:</h4>
          <ul class="list-feature">
            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Full HD 1080p Live streaming</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Watch on your TV, laptop, phone, or tablet</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>English commentary</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Unlimited watching time</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>All sports tournaments (Football, Tennis, NBA, etc.)</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>Full-screen mode</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>No ads/popups</span>
            </li>

            <li>
              <span class="icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_326_6270)">
                    <path d="M3.33301 7.99996L6.66634 11.3333L13.333 4.66663" stroke="#18B745" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_326_6270">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </span>
              <span>24/7 dedicated support</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="trust-by-wrapper">
      <div class="container">
        <di class="trust-by-content">
          <span class="label">Trusted by:</span>
          <div class="list-image">
            <a href="#">
              <img src="./images/trust-image-1.png" alt="" class="trust-image">
            </a>
            <a href="#">
              <img src="./images/trust-image-2.png" alt="" class="trust-image">
            </a>
            <a href="#">
              <img src="./images/trust-image-3.png" alt="" class="trust-image">
            </a>
            <a href="#">
              <img src="./images/trust-image-4.png" alt="" class="trust-image">
            </a>
            <a href="#">
              <img src="./images/trust-image-5.png" alt="" class="trust-image">
            </a>

          </div>
        </di>
      </div>
    </div>

    <div class="sports-league-tournaments-wrapper">
      <div class="container">
        <h3 class="title">Sports league and tournaments available on Yeahscore</h3>
        <p class="description">Your Premium sucription covers all the league and tournament listed</p>
        <div class="list-sport-wrapper">
          <ul class="list-sport">
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-1.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-2.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-3.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-4.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-5.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-6.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-7.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-8.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-9.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-10.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-11.png" alt="">
              </a>
            </li>
          </ul>
          <ul class="list-sport">
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-1.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-2.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-3.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-4.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-5.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-6.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-7.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-8.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-9.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-10.png" alt="">
              </a>
            </li>
            <li class="sport-item">
              <a href="#">
                <img src="./images/sport-league-11.png" alt="">
              </a>
            </li>
          </ul>
        </div>
        <button class="btn-see-more">See more</button>
      </div>
    </div>

    <div class="money-back-wrapper">
      <div class="container">
        <div class="money-back-content">
          <img src="./images/money-black-2.png" alt="" class="money-back-image">
          <div class="detail">
            <h4 class="title">7-day money-back guarantee</h4>
            <p class="description">Not sure if this is what you need? Take your time to try the NordVPN service
              completely risk-free.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="vpn-internaltiona-server-wrapper">
      <div class="container">
        <div class="vpn-internaltiona-server-content">
          <div class="left-content">
            <h4 class="title">Top-rated sports livestreaming service</h4>
            <p class="description">
            Real time sports coverage from all around the world - including real time results of the matches in all of the football leagues and competitions.
            </p>
            <div class="list-item">
              <div class="item">
                <span class="item-title">Countries and territories</span>
                <span class="item-value">200+ </span>
              </div>
              <div class="item">
                <span class="item-title">Leagues and tournaments</span>
                <span class="item-value">100+</span>
              </div>
            </div>
            <div class="list-item">
              <div class="item">
                <span class="item-title">Dedicated support</span>
                <span class="item-value">24/7</span>
              </div>
              <div class="item">
                <span class="item-title">Paid users</span>
                <span class="item-value">100,000+</span>
              </div>
            </div>
          </div>
          <div class="right-content">
            <img src="./images/vpn-image-2.png" alt="" class="vpn-image">
          </div>
        </div>
        <button class="btn-get-plan">Get Plans</button>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
  <script>
    $(function () {

      $("#choose-paymen-accordion").accordion({
        active: 1,
      });

      const accordionItemActive = $('.ui-accordion-header-active');
      accordionItemActive.css('border', 'none')
      accordionItemActive.parent().css({ 'border': '1px solid #009A5F', borderRadius: '8px' })

      $(".accordion-item").on('click', function () {
        $(".accordion-item").each(function () {
          $(this).css('border', 'none')
          $(this).children().css('border', 'none')
        })
        const chilren = $(this).children()
        chilren.css('border', 'none')
        $(this).css({ 'border': '1px solid #009A5F', borderRadius: '8px' })
      })

    });
  </script>
</body>


</html>