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
            <div class="input-coupon-code-wrapper">
              <input type="text" name="" value="" placeholder="Enter your email" />
              <input type="text" name="" value="" placeholder="Set password (min 8 characters)" />
            </div>
          </div>

          <div class="viva-wrapper">
            <span class="label">Sign up via</span>
            <ul class="list-viva">
              <li>
                <a href="#">

                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="16" fill="#1877F2" />
                    <path
                      d="M14.0217 23.3333L14.0007 16.6667H11.334V14H14.0007V12.3333C14.0007 9.85907 15.5329 8.66667 17.7401 8.66667C18.7974 8.66667 19.706 8.74539 19.9708 8.78057V11.3663L18.44 11.367C17.2396 11.367 17.0072 11.9374 17.0072 12.7745V14H20.5007L19.1673 16.6667H17.0072V23.3333H14.0217Z"
                      fill="white" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="16" fill="#E43E2B" />
                    <g clip-path="url(#clip0_2205_21957)">
                      <path
                        d="M23.6721 14.5453H16.0355V17.818H20.3635C19.6721 20 17.9635 20.7273 16.0008 20.7273C15.2404 20.7283 14.4911 20.5458 13.8163 20.1953C13.1415 19.8449 12.5612 19.3369 12.1247 18.7144C11.6881 18.0919 11.4081 17.3732 11.3085 16.6194C11.2089 15.8656 11.2925 15.0989 11.5524 14.3844C11.8122 13.6698 12.2406 13.0285 12.8012 12.5148C13.3617 12.0011 14.0379 11.6302 14.7724 11.4335C15.5069 11.2369 16.278 11.2203 17.0202 11.3852C17.7625 11.55 18.454 11.8915 19.0361 12.3807L21.4141 10.114C20.4563 9.23235 19.2978 8.59775 18.0392 8.26529C16.7806 7.93282 15.4598 7.91254 14.1915 8.20618C12.9233 8.49983 11.7458 9.09854 10.7614 9.95036C9.77698 10.8022 9.0153 11.8814 8.54246 13.0943C8.06962 14.3072 7.89992 15.6171 8.04808 16.9105C8.19623 18.2038 8.65778 19.4415 9.39265 20.516C10.1275 21.5906 11.1135 22.4696 12.2651 23.0767C13.4167 23.6838 14.699 24.0008 16.0008 24C20.4121 24 24.4008 21.0907 23.6721 14.5453Z"
                        fill="white" />
                    </g>
                    <defs>
                      <clipPath id="clip0_2205_21957">
                        <rect width="16" height="16" fill="white" transform="translate(8 8)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </li>

              <li>
                <a href="#">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="16" fill="black" />
                    <g clip-path="url(#clip0_2205_21951)">
                      <path
                        d="M20.46 17.032C20.4594 16.4307 20.5994 15.8375 20.8689 15.3C21.1383 14.7624 21.5298 14.2953 22.012 13.936C22.0546 13.9026 22.0899 13.8609 22.1159 13.8135C22.1419 13.766 22.158 13.7138 22.1632 13.66C22.1685 13.6061 22.1627 13.5518 22.1464 13.5002C22.13 13.4487 22.1033 13.401 22.068 13.36C21.7029 12.9548 21.2611 12.626 20.7681 12.3926C20.2751 12.1591 19.7408 12.0257 19.196 12C17.844 11.872 16.556 12.8 15.868 12.8C15.18 12.8 14.06 12 12.94 12C12.1987 12.0232 11.4762 12.2389 10.8435 12.6261C10.2109 13.0132 9.68997 13.5584 9.33199 14.208C7.79599 16.88 8.93999 20.8 10.396 22.992C11.124 24.048 11.996 25.24 13.148 25.2C14.3 25.16 14.668 24.488 16.004 24.488C17.34 24.488 17.716 25.2 18.884 25.176C20.052 25.152 20.86 24.096 21.596 23.04C22.0476 22.3757 22.4157 21.6583 22.692 20.904C22.7248 20.8141 22.7242 20.7154 22.6905 20.6259C22.6567 20.5363 22.592 20.4619 22.508 20.416C21.8894 20.0936 21.3713 19.6075 21.0102 19.0108C20.649 18.414 20.4587 17.7295 20.46 17.032Z"
                        fill="white" />
                      <path
                        d="M18.3967 9.73599C18.9815 9.03966 19.3241 8.17204 19.3727 7.26399C19.3751 7.20333 19.3637 7.14291 19.3394 7.08731C19.315 7.03171 19.2783 6.98238 19.232 6.94306C19.1858 6.90375 19.1312 6.87548 19.0724 6.86039C19.0136 6.8453 18.9521 6.8438 18.8927 6.85599C18.0223 7.05589 17.2363 7.52304 16.6447 8.19199C16.057 8.86058 15.7056 9.70393 15.6447 10.592C15.6432 10.6487 15.6539 10.7051 15.676 10.7574C15.698 10.8097 15.7309 10.8567 15.7726 10.8953C15.8142 10.9339 15.8635 10.9632 15.9173 10.9812C15.9712 10.9993 16.0282 11.0057 16.0847 11C16.9879 10.8875 17.8144 10.4356 18.3967 9.73599Z"
                        fill="white" />
                    </g>
                    <defs>
                      <clipPath id="clip0_2205_21951">
                        <rect width="19.2" height="19.2" fill="white" transform="translate(6.39648 6.39999)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </li>
            </ul>
          </div>

          <div class="renew-account-wrapper">
            <span class="icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.3193 4.936C11.5957 4.63275 12.9306 4.68209 14.1811 5.07875C15.4317 5.47541 16.551 6.20447 17.4193 7.188C17.639 7.43624 17.9483 7.58703 18.2793 7.60719C18.6102 7.62735 18.9355 7.51523 19.1838 7.2955C19.432 7.07577 19.5828 6.76642 19.603 6.43551C19.6231 6.1046 19.511 5.77924 19.2913 5.531C18.1237 4.2081 16.6187 3.2273 14.9369 2.69344C13.2552 2.15958 11.46 2.09272 9.74327 2.5C8.00102 2.93742 6.404 3.82421 5.11164 5.07183C3.81927 6.31944 2.87678 7.88424 2.37827 9.61C2.36179 9.66714 2.32541 9.7165 2.27571 9.74915C2.226 9.7818 2.16625 9.79558 2.10727 9.788L1.07427 9.658C0.982658 9.64622 0.889587 9.66053 0.805742 9.69927C0.721897 9.73801 0.650678 9.79961 0.600266 9.877C0.548506 9.95424 0.519307 10.0444 0.515951 10.1373C0.512595 10.2302 0.535213 10.3222 0.581266 10.403L3.05727 14.745C3.09587 14.8125 3.14969 14.8701 3.21444 14.9131C3.27919 14.9562 3.35309 14.9835 3.43027 14.993C3.45091 14.9945 3.47163 14.9945 3.49227 14.993C3.55924 14.993 3.62552 14.9795 3.68719 14.9534C3.74886 14.9273 3.80466 14.8891 3.85127 14.841L7.32827 11.248C7.39298 11.1811 7.43773 11.0974 7.45745 11.0064C7.47718 10.9154 7.47111 10.8207 7.43993 10.733C7.40875 10.6453 7.35369 10.568 7.28096 10.5099C7.20823 10.4517 7.12071 10.4151 7.02827 10.404L5.15027 10.172C5.11341 10.1668 5.07817 10.1534 5.04714 10.1329C5.01611 10.1123 4.99006 10.0851 4.97089 10.0532C4.95173 10.0213 4.93993 9.98547 4.93636 9.94842C4.93279 9.91136 4.93754 9.87398 4.95027 9.839C5.37211 8.64274 6.08295 7.56923 7.01961 6.71387C7.95627 5.85851 9.08973 5.24779 10.3193 4.936Z"
                  fill="#E34B31" />
                <path
                  d="M23.4066 14.1C23.4577 14.0224 23.4862 13.932 23.4889 13.8391C23.4915 13.7462 23.4682 13.6544 23.4216 13.574L20.9216 9.245C20.8824 9.17781 20.8282 9.12069 20.7631 9.07816C20.698 9.03562 20.6238 9.00886 20.5466 9C20.4695 8.98987 20.391 8.99828 20.3178 9.02455C20.2446 9.05081 20.1787 9.09416 20.1256 9.151L16.6696 12.765C16.6054 12.832 16.5612 12.9155 16.5418 13.0062C16.5224 13.0969 16.5286 13.1912 16.5598 13.2786C16.5909 13.3659 16.6457 13.4429 16.7181 13.5009C16.7905 13.5589 16.8775 13.5957 16.9696 13.607L18.8176 13.828C18.8549 13.8324 18.8908 13.8452 18.9225 13.8655C18.9542 13.8858 18.9809 13.9129 19.0006 13.945C19.0202 13.977 19.0325 14.013 19.0364 14.0504C19.0404 14.0878 19.036 14.1255 19.0236 14.161C18.6023 15.3572 17.8915 16.4307 16.9548 17.2856C16.018 18.1406 14.8842 18.7505 13.6546 19.061C12.378 19.3637 11.0433 19.314 9.79276 18.9172C8.54227 18.5204 7.42304 17.7913 6.55458 16.808C6.44711 16.6807 6.31529 16.5763 6.16686 16.5007C6.01844 16.4251 5.85641 16.3799 5.69028 16.3678C5.52416 16.3558 5.3573 16.377 5.1995 16.4303C5.0417 16.4836 4.89615 16.5679 4.77139 16.6783C4.64664 16.7887 4.5452 16.9228 4.47303 17.073C4.40086 17.2231 4.35943 17.3861 4.35115 17.5525C4.34288 17.7188 4.36794 17.8851 4.42485 18.0417C4.48177 18.1982 4.56939 18.3418 4.68258 18.464C5.85052 19.7866 7.35581 20.7671 9.03766 21.3008C10.7195 21.8345 12.5147 21.9013 14.2316 21.494C15.9761 21.0571 17.5751 20.1693 18.8685 18.9197C20.1618 17.6701 21.104 16.1025 21.6006 14.374C21.6172 14.3171 21.6534 14.2679 21.7028 14.2351C21.7523 14.2023 21.8117 14.1881 21.8706 14.195L22.9286 14.322C22.9486 14.3234 22.9686 14.3234 22.9886 14.322C23.0712 14.3224 23.1526 14.3023 23.2255 14.2636C23.2985 14.2249 23.3607 14.1686 23.4066 14.1Z"
                  fill="#E34B31" />
              </svg>
            </span>
            <div class="detail-box">
              <h3 class="title">Auto-renew account</h3>
              <p class="description">Your plan will be automatically renewed when it's going to expire.</p>
              <div class="list-option">
                <div class="option-item">
                  <label>
                    <input type="radio" name="renew" id="">
                    <span class="label">Auto-renewing</span>
                  </label>
                </div>
                <div class="option-item">
                  <label>
                    <input type="radio" name="renew" id="">
                    <span class="label">Non-renewable</span>
                  </label>
                </div>
              </div>
            </div>
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
              Real time sports coverage from all around the world - including real time results of the matches in all of
              the football leagues and competitions.
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
      <div class="popup-countdown">
    <div class="popup-countdown__body">
      <div class="popup-countdown__close">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.6" clip-path="url(#clip0_2147_16116)">
            <path d="M18 6L6 18" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M6 6L18 18" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </g>
          <defs>
            <clipPath id="clip0_2147_16116">
              <rect width="24" height="24" fill="white" />
            </clipPath>
          </defs>
        </svg>
      </div>
      <div class="popup-countdown-content">
        <span class="popup-title">Before you go...</span>
        <span class="popup-description">GRAB THIS SPECIAL OFFER</span>
        <div class="popup-countdown-content__description">
          <span class="month-1">24 MONTHS</span>
          <div class="month-2">
            <span class="text-green">+ 6 MONTHS</span>
            <div class="shadow green-shadown"></div>
          </div>
        </div>

        <div class="popup-countdown-content__description">
          <span class="month-1">For just</span>
          <div class="month-2">
            <span class="text-red">$4.8/month</span>
            <div class="shadow red-shadown"></div>
          </div>
        </div>
        <button class="btn-grap">Grab the deal</button>
        <div class="popup-timer-countdown">
          <span class="label">The match will start in</span>
          <div class="list-time">
            <div class="time-item-wrapper">
              <span class="time" id="popup-price-time-hour"></span>
              <span class="label">Hour</span>
            </div>
            <div class="time-item-wrapper">
              <span class="time" id="popup-price-time-minute"></span>
              <span class="label">Minute</span>
            </div>
            <div class="time-item-wrapper">
              <span class="time" id="popup-price-time-second"></span>
              <span class="label">Second</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php include "templates/footer.php"; ?>
  <script>
  $(function() {

    countdownTimeStart()
    $("#choose-paymen-accordion").accordion({
      active: 1,
    });

    const accordionItemActive = $('.ui-accordion-header-active');
    accordionItemActive.css('border', 'none')
    accordionItemActive.parent().css({
      'border': '1px solid #009A5F',
      borderRadius: '8px'
    })

    $(".accordion-item").on('click', function() {
      $(".accordion-item").each(function() {
        $(this).css('border', 'none')
        $(this).children().css('border', 'none')
      })
      const chilren = $(this).children()
      chilren.css('border', 'none')
      $(this).css({
        'border': '1px solid #009A5F',
        borderRadius: '8px'
      })
    })

    function countdownTimeStart() {
      var countDownDate = new Date("2023/03/24 16:20:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {
        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("popup-price-time-hour").innerHTML = String(hours).padStart(2, '0');
        document.getElementById("popup-price-time-minute").innerHTML = String(minutes).padStart(2, '0');
        document.getElementById("popup-price-time-second").innerHTML = String(seconds).padStart(2, '0');

        // If the count down is over, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
    }

    //handle show popup
    $(".popup-countdown").addClass("popup--show");
    // function - Hide popup & body scroll off
    const hidePopup = () => {
      $(".popup-countdown").removeClass("popup--show");
    };
    // Hide popup on click close button
    $(".popup-countdown__close").on("click", hidePopup);

    // Hide popup on click outside of popup
    $(".popup-countdown").on("click", function(event) {
      if (event.target.classList.contains("popup-countdown")) {
        hidePopup();
      }
    });
  });
  </script>
</body>


</html>