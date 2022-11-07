<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="container">
    <div class="main-layout main-layout-scores-page">
      <div class="left-main-layout">
        <div class="left-main-layout-content-wrapper">
          <div class="search-wrapper-common sidebar-search ">
            <span class="icon icon-search">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.2498 16.25L13.3332 13.3333M14.9998 8.75001C14.9998 11.7416 12.5747 14.1667 9.58317 14.1667C6.59163 14.1667 4.1665 11.7416 4.1665 8.75001C4.1665 5.75847 6.59163 3.33334 9.58317 3.33334C12.5747 3.33334 14.9998 5.75847 14.9998 8.75001Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <input type="text" name="" value="" placeholder="Search" />
            <span class="icon icon-close">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2_2007)">
                  <path d="M15 5L5 15" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M5 5L15 15" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_2_2007">
                    <rect width="20" height="20" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </div>
          <div class="list-league-wrapper">
            <ul class="list-league list-vertical">
              <li>
                <a href="#" class="league-item">
                  <img class="league-image-common" src="./images/league-1.png" alt="" />
                  <span class="league-name text-overflow-150">Premier League</span>
                </a>
              </li>
              <li>
                <a href="#" class="league-item">
                  <img class="league-image-common" src="./images/league-2.png" alt="" />
                  <span class="league-name text-overflow-150">Spain</span>
                </a>
              </li>
              <li>
                <a href="#" class="league-item">
                  <img class="league-image-common" src="./images/league-3.png" alt="" />
                  <span class="league-name text-overflow-150">Italia</span>
                </a>
              </li>

              <li>
                <a href="#" class="league-item">
                  <img class="league-image-common" src="./images/league-4.png" alt="" />
                  <span class="league-name text-overflow-150">France</span>
                </a>
              </li>

              <li>
                <a href="#" class="league-item">
                  <img class="league-image-common" src="./images/league-5.png" alt="" />
                  <span class="league-name text-overflow-150">Champions League</span>
                </a>
              </li>

              <li>
                <a href="#" class="league-item">
                  <img class="league-image-common" src="./images/league-6.png" alt="" />
                  <span class="league-name text-overflow-150">Germany</span>
                </a>
              </li>

              <li>
                <a href="#" class="league-item">
                  <img class="league-image-common" src="./images/league-7.png" alt="" />
                  <span class="league-name text-overflow-150">Europa League uropa League</span>
                </a>
              </li>
              <li>
                <a href="#" class="league-item">
                  <img class="league-image-common" src="./images/league-1.png" alt="" />
                  <span class="league-name text-overflow-150">Germany</span>
                </a>
              </li>
            </ul>
          </div>
          <button class="button-common">
            See All >
          </button>
        </div>

      </div>
      <div class="center-main-layout scores-page-content-wrapper">
        <h3 class="main-title">Scores</h3>
        <div id="scores-tabs">
          <ul class="main-nav">
            <li><a href="#tabs-1">All</a></li>
            <li class="nav-item-pc"><a href="#tabs-2">Live</a></li>
            <li><a href="#tabs-3">Odds</a></li>
            <li><a href="#tabs-4">Results</a></li>
            <li><a href="#tabs-5">Schedule</a></li>
            <li><a href="#tabs-6">Standings</a></li>
          </ul>
          <!-- ===========START All TABS ============= -->
          <div id="tabs-1" class="main-tab-content">
            <div id="all-date-tabs">
              <ul class="date-nav">
                <li class="sub-nav-item-for-mobile">
                  <a href="#sub-tabs-1" class="live-nav-item">Live</a>
                </li>
                <li>
                  <a href="#sub-tabs-2">
                    <span class="day">SAT</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-3">
                    <span class="day">SUN</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-4">
                    <span class="day">MON</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-5">
                    <span class="day">TODAY</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-6">
                    <span class="day">WEB</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-7">
                    <span class="day">THU</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li class="sub-nav-item-for-pc">
                  <a href="#sub-tabs-8">
                    <span class="day">FRI</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>
                <div class="date-picker-wrapper">
                  <div class="calender-wrapper">
                    <button class="btn-calender btn-show" id="btn-show-calender">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4109 2.76862L16.4119 3.51824C19.1665 3.73413 20.9862 5.61119 20.9891 8.48975L21 16.9155C21.0039 20.054 19.0322 21.985 15.8718 21.99L8.15188 22C5.01119 22.004 3.01482 20.027 3.01087 16.8795L3.00001 8.55272C2.99606 5.65517 4.75153 3.78311 7.50617 3.53024L7.50518 2.78061C7.5042 2.34083 7.83001 2.01 8.26444 2.01C8.69886 2.009 9.02468 2.33883 9.02567 2.77861L9.02666 3.47826L14.8914 3.47027L14.8904 2.77062C14.8894 2.33084 15.2152 2.001 15.6497 2C16.0742 1.999 16.4099 2.32884 16.4109 2.76862ZM4.52148 8.86157L19.4696 8.84158V8.49175C19.4272 6.34283 18.349 5.21539 16.4138 5.04748L16.4148 5.81709C16.4148 6.24688 16.0801 6.5877 15.6556 6.5877C15.2212 6.5887 14.8943 6.24887 14.8943 5.81909L14.8934 5.0095L9.02863 5.01749L9.02962 5.82609C9.02962 6.25687 8.70479 6.5967 8.27036 6.5967C7.83594 6.5977 7.50913 6.25887 7.50913 5.82809L7.50815 5.05847C5.58286 5.25137 4.51753 6.38281 4.52049 8.55072L4.52148 8.86157ZM15.2399 13.4043V13.4153C15.2498 13.8751 15.625 14.2239 16.0801 14.2139C16.5244 14.2029 16.8789 13.8221 16.869 13.3623C16.8483 12.9225 16.4918 12.5637 16.0485 12.5647C15.5944 12.5747 15.2389 12.9445 15.2399 13.4043ZM16.0554 17.892C15.6013 17.882 15.235 17.5032 15.234 17.0435C15.2241 16.5837 15.5884 16.2029 16.0426 16.1919H16.0525C16.5165 16.1919 16.8927 16.5707 16.8927 17.0405C16.8937 17.5102 16.5185 17.891 16.0554 17.892ZM11.1721 13.4203C11.1919 13.8801 11.568 14.2389 12.0222 14.2189C12.4665 14.1979 12.821 13.8181 12.8012 13.3583C12.7903 12.9085 12.425 12.5587 11.9807 12.5597C11.5266 12.5797 11.1711 12.9605 11.1721 13.4203ZM12.0262 17.8471C11.572 17.8671 11.1968 17.5082 11.1761 17.0485C11.1761 16.5887 11.5305 16.2089 11.9847 16.1879C12.429 16.1869 12.7953 16.5367 12.8052 16.9855C12.8259 17.4463 12.4705 17.8261 12.0262 17.8471ZM7.10433 13.4553C7.12408 13.915 7.50025 14.2749 7.95442 14.2539C8.39872 14.2339 8.75317 13.8531 8.73243 13.3933C8.72256 12.9435 8.35725 12.5937 7.91196 12.5947C7.45779 12.6147 7.10334 12.9955 7.10433 13.4553ZM7.95837 17.8521C7.5042 17.8731 7.12901 17.5132 7.10828 17.0535C7.10729 16.5937 7.46273 16.2129 7.9169 16.1929C8.3612 16.1919 8.7275 16.5417 8.73737 16.9915C8.7581 17.4513 8.40365 17.8321 7.95837 17.8521Z" fill="#009A5F" />
                      </svg>
                    </button>
                    <div class="calendar datepicker-mobile"></div>
                  </div>
                </div>
              </ul>

              <div id="sub-tabs-1" class="sub-tab-content">tab content (live) only for mobile</div>
              <div id="sub-tabs-2" class="sub-tab-content">
                <div class="list-league-in-scores">
                  <div class="league-item-wrapper">
                    <div class="block-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league-3.png" class="league-image w-20" />
                        <div class="league-info">
                          <span class="group-name">Premier League</span>
                          <span class="league-name">Champions League</span>
                        </div>
                      </div>
                      <span class="icon-arrow">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_2_214)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_2_214">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </div>

                    <div class="list-result-league">
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="type">FT</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name text-overflow-club">Manchester City Manchester </span>
                            </div>
                            <span class="score">0</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name text-overflow-club">Chelsea</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="type">FT</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name text-overflow-club">Manchester City</span>
                            </div>
                            <span class="score">0</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name text-overflow-club">Chelsea City Manchester City Manchester City City Manchester City Manchester City</span>
                            </div>
                            <span class="score">1</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="league-item-wrapper">
                    <div class="block-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league-3.png" class="league-image w-20" />
                        <div class="league-info">
                          <span class="group-name">La Liga</span>
                          <span class="league-name">Spain</span>
                        </div>
                      </div>
                      <span class="icon-arrow">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_2_214)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_2_214">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </div>

                    <div class="list-result-league">
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="type txt-green-primary">FT</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name text-overflow-club">Manchester City Manchester </span>
                            </div>
                            <span class="score txt-green-primary">0</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name text-overflow-club">Chelsea</span>
                            </div>
                            <span class="score txt-green-primary">1</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="type txt-green-primary">FT</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name text-overflow-club">Manchester City</span>
                            </div>
                            <span class="score txt-green-primary">0</span>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name text-overflow-club">Chelsea City Manchester City Manchester City City Manchester City Manchester City</span>
                            </div>
                            <span class="score txt-green-primary">1</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>


                  <div class="league-item-wrapper">
                    <div class="block-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league-3.png" class="league-image w-20" />
                        <div class="league-info">
                          <span class="group-name">Group B</span>
                          <span class="league-name">Champions League</span>
                        </div>
                      </div>
                      <span class="icon-arrow">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_2_214)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_2_214">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </div>

                    <div class="list-result-league">
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="type">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name text-overflow-club">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name text-overflow-club">Chelsea</span>
                            </div>
                          </div>
                        </div>
                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5948 2.86736L12.5248 6.74986C12.6214 6.94569 12.8081 7.08236 13.0248 7.11402L17.3456 7.73819C17.5206 7.76152 17.6781 7.85319 17.7856 7.99319C17.9873 8.25569 17.9564 8.62736 17.7148 8.85319L14.5831 11.8815C14.4239 12.0315 14.3531 12.2515 14.3948 12.4657L15.1448 16.739C15.1973 17.0932 14.9556 17.4249 14.6014 17.4824C14.4548 17.5049 14.3048 17.4815 14.1714 17.4157L10.3231 15.3982C10.1298 15.2932 9.89811 15.2932 9.70478 15.3982L5.82811 17.4265C5.50395 17.5915 5.10728 17.469 4.93062 17.1515C4.86312 17.0232 4.83978 16.8774 4.86312 16.7349L5.61312 12.4615C5.65062 12.2482 5.57978 12.029 5.42478 11.8782L2.27645 8.85069C2.01978 8.59569 2.01812 8.18069 2.27395 7.92402C2.27478 7.92319 2.27562 7.92153 2.27645 7.92069C2.38228 7.82486 2.51228 7.76069 2.65312 7.73569L6.97478 7.11153C7.19061 7.07736 7.37645 6.94236 7.47478 6.74652L9.40312 2.86736C9.48062 2.70986 9.61811 2.58903 9.78478 2.53403C9.95228 2.47819 10.1356 2.49153 10.2931 2.57069C10.4223 2.63486 10.5281 2.73903 10.5948 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="type">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name text-overflow-club">Manchester City</span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name text-overflow-club">Chelsea City Manchester City Manchester City City Manchester City Manchester City</span>
                            </div>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5948 2.86736L12.5248 6.74986C12.6214 6.94569 12.8081 7.08236 13.0248 7.11402L17.3456 7.73819C17.5206 7.76152 17.6781 7.85319 17.7856 7.99319C17.9873 8.25569 17.9564 8.62736 17.7148 8.85319L14.5831 11.8815C14.4239 12.0315 14.3531 12.2515 14.3948 12.4657L15.1448 16.739C15.1973 17.0932 14.9556 17.4249 14.6014 17.4824C14.4548 17.5049 14.3048 17.4815 14.1714 17.4157L10.3231 15.3982C10.1298 15.2932 9.89811 15.2932 9.70478 15.3982L5.82811 17.4265C5.50395 17.5915 5.10728 17.469 4.93062 17.1515C4.86312 17.0232 4.83978 16.8774 4.86312 16.7349L5.61312 12.4615C5.65062 12.2482 5.57978 12.029 5.42478 11.8782L2.27645 8.85069C2.01978 8.59569 2.01812 8.18069 2.27395 7.92402C2.27478 7.92319 2.27562 7.92153 2.27645 7.92069C2.38228 7.82486 2.51228 7.76069 2.65312 7.73569L6.97478 7.11153C7.19061 7.07736 7.37645 6.94236 7.47478 6.74652L9.40312 2.86736C9.48062 2.70986 9.61811 2.58903 9.78478 2.53403C9.95228 2.47819 10.1356 2.49153 10.2931 2.57069C10.4223 2.63486 10.5281 2.73903 10.5948 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="type">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name text-overflow-club">Manchester City</span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name text-overflow-club">Chelsea City Manchester City Manchester City City Manchester City Manchester City</span>
                            </div>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5948 2.86736L12.5248 6.74986C12.6214 6.94569 12.8081 7.08236 13.0248 7.11402L17.3456 7.73819C17.5206 7.76152 17.6781 7.85319 17.7856 7.99319C17.9873 8.25569 17.9564 8.62736 17.7148 8.85319L14.5831 11.8815C14.4239 12.0315 14.3531 12.2515 14.3948 12.4657L15.1448 16.739C15.1973 17.0932 14.9556 17.4249 14.6014 17.4824C14.4548 17.5049 14.3048 17.4815 14.1714 17.4157L10.3231 15.3982C10.1298 15.2932 9.89811 15.2932 9.70478 15.3982L5.82811 17.4265C5.50395 17.5915 5.10728 17.469 4.93062 17.1515C4.86312 17.0232 4.83978 16.8774 4.86312 16.7349L5.61312 12.4615C5.65062 12.2482 5.57978 12.029 5.42478 11.8782L2.27645 8.85069C2.01978 8.59569 2.01812 8.18069 2.27395 7.92402C2.27478 7.92319 2.27562 7.92153 2.27645 7.92069C2.38228 7.82486 2.51228 7.76069 2.65312 7.73569L6.97478 7.11153C7.19061 7.07736 7.37645 6.94236 7.47478 6.74652L9.40312 2.86736C9.48062 2.70986 9.61811 2.58903 9.78478 2.53403C9.95228 2.47819 10.1356 2.49153 10.2931 2.57069C10.4223 2.63486 10.5281 2.73903 10.5948 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="type">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name text-overflow-club">Manchester City</span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name text-overflow-club">Chelsea City Manchester City Manchester City City Manchester City Manchester City</span>
                            </div>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5948 2.86736L12.5248 6.74986C12.6214 6.94569 12.8081 7.08236 13.0248 7.11402L17.3456 7.73819C17.5206 7.76152 17.6781 7.85319 17.7856 7.99319C17.9873 8.25569 17.9564 8.62736 17.7148 8.85319L14.5831 11.8815C14.4239 12.0315 14.3531 12.2515 14.3948 12.4657L15.1448 16.739C15.1973 17.0932 14.9556 17.4249 14.6014 17.4824C14.4548 17.5049 14.3048 17.4815 14.1714 17.4157L10.3231 15.3982C10.1298 15.2932 9.89811 15.2932 9.70478 15.3982L5.82811 17.4265C5.50395 17.5915 5.10728 17.469 4.93062 17.1515C4.86312 17.0232 4.83978 16.8774 4.86312 16.7349L5.61312 12.4615C5.65062 12.2482 5.57978 12.029 5.42478 11.8782L2.27645 8.85069C2.01978 8.59569 2.01812 8.18069 2.27395 7.92402C2.27478 7.92319 2.27562 7.92153 2.27645 7.92069C2.38228 7.82486 2.51228 7.76069 2.65312 7.73569L6.97478 7.11153C7.19061 7.07736 7.37645 6.94236 7.47478 6.74652L9.40312 2.86736C9.48062 2.70986 9.61811 2.58903 9.78478 2.53403C9.95228 2.47819 10.1356 2.49153 10.2931 2.57069C10.4223 2.63486 10.5281 2.73903 10.5948 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="sub-tabs-3" class="sub-tab-content">sub tab3</div>
              <div id="sub-tabs-4" class="sub-tab-content">sub tab4</div>
              <div id="sub-tabs-5" class="sub-tab-content">sub tab5</div>
              <div id="sub-tabs-6" class="sub-tab-content">sub tab6</div>
              <div id="sub-tabs-7" class="sub-tab-content">sub tab7</div>
              <div id="sub-tabs-8" class="sub-tab-content">sub tab8</div>
            </div>
          </div>
          <!-- ===========END All TABS ============= -->

          <!-- ===========START Live TABS ============= -->
          <div id="tabs-2" class="main-tab-content">
            tab2
          </div>
          <!-- ===========END Live TABS ============= -->


          <!-- ===========START Odds TABS ============= -->
          <div id="tabs-3" class="main-tab-content">
            <div id="odds-date-tabs">
              <ul class="date-nav">
                <li class="sub-nav-item-for-mobile">
                  <a href="#sub-tabs-1" class="live-nav-item">Live</a>
                </li>
                <li>
                  <a href="#sub-tabs-2">
                    <span class="day">SAT</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-3">
                    <span class="day">SUN</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-4">
                    <span class="day">MON</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-5">
                    <span class="day">TODAY</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-6">
                    <span class="day">WEB</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li>
                  <a href="#sub-tabs-7">
                    <span class="day">THU</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>

                <li class="sub-nav-item-for-pc">
                  <a href="#sub-tabs-8">
                    <span class="day">FRI</span>
                    <span class="date">22 Oct</span>
                  </a>
                </li>
                <div class="date-picker-wrapper">
                  <div class="calender-wrapper">
                    <button class="btn-calender btn-show" id="btn-show-calender">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4109 2.76862L16.4119 3.51824C19.1665 3.73413 20.9862 5.61119 20.9891 8.48975L21 16.9155C21.0039 20.054 19.0322 21.985 15.8718 21.99L8.15188 22C5.01119 22.004 3.01482 20.027 3.01087 16.8795L3.00001 8.55272C2.99606 5.65517 4.75153 3.78311 7.50617 3.53024L7.50518 2.78061C7.5042 2.34083 7.83001 2.01 8.26444 2.01C8.69886 2.009 9.02468 2.33883 9.02567 2.77861L9.02666 3.47826L14.8914 3.47027L14.8904 2.77062C14.8894 2.33084 15.2152 2.001 15.6497 2C16.0742 1.999 16.4099 2.32884 16.4109 2.76862ZM4.52148 8.86157L19.4696 8.84158V8.49175C19.4272 6.34283 18.349 5.21539 16.4138 5.04748L16.4148 5.81709C16.4148 6.24688 16.0801 6.5877 15.6556 6.5877C15.2212 6.5887 14.8943 6.24887 14.8943 5.81909L14.8934 5.0095L9.02863 5.01749L9.02962 5.82609C9.02962 6.25687 8.70479 6.5967 8.27036 6.5967C7.83594 6.5977 7.50913 6.25887 7.50913 5.82809L7.50815 5.05847C5.58286 5.25137 4.51753 6.38281 4.52049 8.55072L4.52148 8.86157ZM15.2399 13.4043V13.4153C15.2498 13.8751 15.625 14.2239 16.0801 14.2139C16.5244 14.2029 16.8789 13.8221 16.869 13.3623C16.8483 12.9225 16.4918 12.5637 16.0485 12.5647C15.5944 12.5747 15.2389 12.9445 15.2399 13.4043ZM16.0554 17.892C15.6013 17.882 15.235 17.5032 15.234 17.0435C15.2241 16.5837 15.5884 16.2029 16.0426 16.1919H16.0525C16.5165 16.1919 16.8927 16.5707 16.8927 17.0405C16.8937 17.5102 16.5185 17.891 16.0554 17.892ZM11.1721 13.4203C11.1919 13.8801 11.568 14.2389 12.0222 14.2189C12.4665 14.1979 12.821 13.8181 12.8012 13.3583C12.7903 12.9085 12.425 12.5587 11.9807 12.5597C11.5266 12.5797 11.1711 12.9605 11.1721 13.4203ZM12.0262 17.8471C11.572 17.8671 11.1968 17.5082 11.1761 17.0485C11.1761 16.5887 11.5305 16.2089 11.9847 16.1879C12.429 16.1869 12.7953 16.5367 12.8052 16.9855C12.8259 17.4463 12.4705 17.8261 12.0262 17.8471ZM7.10433 13.4553C7.12408 13.915 7.50025 14.2749 7.95442 14.2539C8.39872 14.2339 8.75317 13.8531 8.73243 13.3933C8.72256 12.9435 8.35725 12.5937 7.91196 12.5947C7.45779 12.6147 7.10334 12.9955 7.10433 13.4553ZM7.95837 17.8521C7.5042 17.8731 7.12901 17.5132 7.10828 17.0535C7.10729 16.5937 7.46273 16.2129 7.9169 16.1929C8.3612 16.1919 8.7275 16.5417 8.73737 16.9915C8.7581 17.4513 8.40365 17.8321 7.95837 17.8521Z" fill="#009A5F" />
                      </svg>
                    </button>
                    <div class="calendar datepicker-mobile"></div>
                  </div>
                </div>
              </ul>

              <div id="sub-tabs-1" class="sub-tab-content">tab content (live) only for mobile</div>
              <div id="sub-tabs-2" class="sub-tab-content">
                <div class="list-league-in-odds">
                  <div class="league-item-wrapper">
                    <div class="odds-block-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league-3.png" class="league-image w-20" />
                        <div class="league-info">
                          <span class="group-name txt-odds-1">Premier League</span>
                          <span class="league-name txt-odds-1">Champions League</span>
                        </div>
                      </div>
                      <div class="odds-info">
                        <div class="odd-value">
                          <span>1</span>
                          <span>x</span>
                          <span>2</span>
                        </div>
                        <span class="icon-arrow">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_2086)">
                              <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                              <clipPath id="clip0_2_2086">
                                <rect width="20" height="20" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                      </div>
                    </div>
                    <div class="list-result-league">
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name txt-odds-2">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name txt-odds-2">Chelsea</span>
                            </div>
                          </div>
                        </div>

                        <div class="list-odds-value">
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-red" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.18294 13.1667L8.18294 3.16666" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.1992 9.13345L8.18317 13.1668L4.1665 9.13345" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <span>2.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name txt-odds-2">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name txt-odds-2">Chelsea</span>
                            </div>
                          </div>
                        </div>

                        <div class="list-odds-value">
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-red" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.18294 13.1667L8.18294 3.16666" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.1992 9.13345L8.18317 13.1668L4.1665 9.13345" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <span>2.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name txt-odds-2">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name txt-odds-2">Chelsea</span>
                            </div>
                          </div>
                        </div>

                        <div class="list-odds-value">
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-red" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.18294 13.1667L8.18294 3.16666" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.1992 9.13345L8.18317 13.1668L4.1665 9.13345" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <span>2.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name txt-odds-2">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name txt-odds-2">Chelsea</span>
                            </div>
                          </div>
                        </div>

                        <div class="list-odds-value">
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-red" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.18294 13.1667L8.18294 3.16666" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.1992 9.13345L8.18317 13.1668L4.1665 9.13345" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <span>2.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="league-item-wrapper">
                    <div class="odds-block-header">
                      <div class="league-info-wrapper">
                        <img src="./images/league-3.png" class="league-image w-20" />
                        <div class="league-info">
                          <span class="group-name txt-odds-1">Premier League</span>
                          <span class="league-name txt-odds-1">Champions League</span>
                        </div>
                      </div>
                      <div class="odds-info">
                        <div class="odd-value">
                          <span>1</span>
                          <span>x</span>
                          <span>2</span>
                        </div>
                        <span class="icon-arrow">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2_2086)">
                              <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                              <clipPath id="clip0_2_2086">
                                <rect width="20" height="20" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                      </div>
                    </div>
                    <div class="list-result-league">
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name txt-odds-2">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name txt-odds-2">Chelsea</span>
                            </div>
                          </div>
                        </div>

                        <div class="list-odds-value">
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-red" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.18294 13.1667L8.18294 3.16666" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.1992 9.13345L8.18317 13.1668L4.1665 9.13345" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <span>2.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name txt-odds-2">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name txt-odds-2">Chelsea</span>
                            </div>
                          </div>
                        </div>

                        <div class="list-odds-value">
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-red" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.18294 13.1667L8.18294 3.16666" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.1992 9.13345L8.18317 13.1668L4.1665 9.13345" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <span>2.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name txt-odds-2">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name txt-odds-2">Chelsea</span>
                            </div>
                          </div>
                        </div>

                        <div class="list-odds-value">
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-red" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.18294 13.1667L8.18294 3.16666" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.1992 9.13345L8.18317 13.1668L4.1665 9.13345" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <span>2.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
                        </div>
                        <div class="list-club-wrapper">
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-1.png" alt="">
                              <span class="club-name txt-odds-2">Manchester City Manchester </span>
                            </div>
                          </div>
                          <div class="club-item">
                            <div class="club-info-wrapper">
                              <img src="./images/club-2.png" alt="">
                              <span class="club-name txt-odds-2">Chelsea</span>
                            </div>
                          </div>
                        </div>

                        <div class="list-odds-value">
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-red" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.18294 13.1667L8.18294 3.16666" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.1992 9.13345L8.18317 13.1668L4.1665 9.13345" stroke="#F91E4E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                            <span>2.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                          <div class="odds-item">
                            <span class="icon">
                              <svg id="arrow-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.81706 2.83334L7.81706 12.8333" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.80083 6.86655L7.81683 2.83321L11.8335 6.86655" stroke="#009A5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                            <span>3.90</span>
                          </div>
                        </div>

                        <span class="icon-star">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.595 2.86736L12.525 6.74986C12.6217 6.94569 12.8084 7.08236 13.025 7.11402L17.3459 7.73819C17.5209 7.76152 17.6784 7.85319 17.7859 7.99319C17.9875 8.25569 17.9567 8.62736 17.715 8.85319L14.5834 11.8815C14.4242 12.0315 14.3534 12.2515 14.395 12.4657L15.145 16.739C15.1975 17.0932 14.9559 17.4249 14.6017 17.4824C14.455 17.5049 14.305 17.4815 14.1717 17.4157L10.3234 15.3982C10.13 15.2932 9.89836 15.2932 9.70503 15.3982L5.82836 17.4265C5.50419 17.5915 5.10753 17.469 4.93086 17.1515C4.86336 17.0232 4.84003 16.8774 4.86336 16.7349L5.61336 12.4615C5.65086 12.2482 5.58003 12.029 5.42503 11.8782L2.27669 8.85069C2.02003 8.59569 2.01836 8.18069 2.27419 7.92402C2.27503 7.92319 2.27586 7.92153 2.27669 7.92069C2.38253 7.82486 2.51253 7.76069 2.65336 7.73569L6.97503 7.11153C7.19086 7.07736 7.37669 6.94236 7.47503 6.74652L9.40336 2.86736C9.48086 2.70986 9.61836 2.58903 9.78503 2.53403C9.95253 2.47819 10.1359 2.49153 10.2934 2.57069C10.4225 2.63486 10.5284 2.73903 10.595 2.86736Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="sub-tabs-3" class="sub-tab-content">sub tab3</div>
              <div id="sub-tabs-4" class="sub-tab-content">sub tab4</div>
              <div id="sub-tabs-5" class="sub-tab-content">sub tab5</div>
              <div id="sub-tabs-6" class="sub-tab-content">sub tab6</div>
              <div id="sub-tabs-7" class="sub-tab-content">sub tab7</div>
              <div id="sub-tabs-8" class="sub-tab-content">sub tab8</div>
            </div>
          </div>
          <!-- ===========END Odds TABS ============= -->


          <!-- ===========START Results TABS ============= -->
          <div id="tabs-4" class="main-tab-content">
            tab4
          </div>
          <!-- ===========END Results TABS ============= -->

          <!-- ===========START Schedule TABS ============= -->
          <div id="tabs-5" class="main-tab-content">
            tab5
          </div>
          <!-- ===========END Schedule TABS ============= -->

          <!-- ===========START Standings TABS ============= -->
          <div id="tabs-6" class="main-tab-content">
            <div class="stading-content-wrapper">
              <div class="stading-league-item">
                <div class="block-header">
                  <div class="league-info-wrapper">
                    <img src="./images/league-3.png" class="league-image" />
                    <div class="league-info">
                      <span class="group-name">Premier League</span>
                      <span class="league-name">Champions League</span>
                    </div>
                  </div>
                  <span class="icon-arrow">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2_214)">
                        <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2_214">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>

                <div class="match-table-common">
                  <div class="table-row table-heading">
                    <div class="column-8 text-center">#</div>
                    <div class="column-25">Team</div>
                    <div class="column-8 text-center">P</div>
                    <div class="column-8 text-center">W</div>
                    <div class="column-8 text-center">D</div>
                    <div class="column-8 text-center">L</div>
                    <div class="column-8 text-center">F</div>
                    <div class="column-8 text-center">A</div>
                    <div class="column-8 text-center">GD</div>
                    <div class="column-8 text-center">PTS</div>
                  </div>
                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">1</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Manchester City</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">2</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-2.png" class="club-image" alt="">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">3</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Tottenham Hotspur</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-orange">4</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-2.png" class="club-image" alt="">
                        <span class="club-name">Newcastle United</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-orange">5</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Nguyen Dang Khoa Hoc vien cong nghe buu chinh vien thong</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>
                </div>
                <button class="button-common">
                  See All >
                </button>
              </div>

              <div class="stading-league-item">
                <div class="block-header">
                  <div class="league-info-wrapper">
                    <img src="./images/league-3.png" class="league-image" />
                    <div class="league-info">
                      <span class="group-name">Premier League</span>
                      <span class="league-name">Champions League</span>
                    </div>
                  </div>
                  <span class="icon-arrow">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2_214)">
                        <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2_214">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>

                <div class="match-table-common">
                  <div class="table-row table-heading">
                    <div class="column-8 text-center">#</div>
                    <div class="column-25">Team</div>
                    <div class="column-8 text-center">P</div>
                    <div class="column-8 text-center">W</div>
                    <div class="column-8 text-center">D</div>
                    <div class="column-8 text-center">L</div>
                    <div class="column-8 text-center">F</div>
                    <div class="column-8 text-center">A</div>
                    <div class="column-8 text-center">GD</div>
                    <div class="column-8 text-center">PTS</div>
                  </div>
                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">1</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Manchester City</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">2</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-2.png" class="club-image" alt="">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">3</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Tottenham Hotspur</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-orange">4</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-2.png" class="club-image" alt="">
                        <span class="club-name">Newcastle United</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-orange">5</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Nguyen Dang Khoa Hoc vien cong nghe buu chinh vien thong</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>
                </div>
                <button class="button-common">
                  See All >
                </button>
              </div>

              <div class="stading-league-item">
                <div class="block-header">
                  <div class="league-info-wrapper">
                    <img src="./images/league-3.png" class="league-image" />
                    <div class="league-info">
                      <span class="group-name">Premier League</span>
                      <span class="league-name">Champions League</span>
                    </div>
                  </div>
                  <span class="icon-arrow">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2_214)">
                        <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_2_214">
                          <rect width="20" height="20" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>

                <div class="match-table-common">
                  <div class="table-row table-heading">
                    <div class="column-8 text-center">#</div>
                    <div class="column-25">Team</div>
                    <div class="column-8 text-center">P</div>
                    <div class="column-8 text-center">W</div>
                    <div class="column-8 text-center">D</div>
                    <div class="column-8 text-center">L</div>
                    <div class="column-8 text-center">F</div>
                    <div class="column-8 text-center">A</div>
                    <div class="column-8 text-center">GD</div>
                    <div class="column-8 text-center">PTS</div>
                  </div>
                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">1</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Manchester City</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">2</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-2.png" class="club-image" alt="">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-blue">3</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Tottenham Hotspur</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-orange">4</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-2.png" class="club-image" alt="">
                        <span class="club-name">Newcastle United</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>

                  <div class="table-row">
                    <div class="column-8 text-center txt-orange">5</div>
                    <div class="column-25">
                      <div class="club-info">
                        <img src="./images/club-1.png" class="club-image" alt="">
                        <span class="club-name">Nguyen Dang Khoa Hoc vien cong nghe buu chinh vien thong</span>
                      </div>
                    </div>
                    <div class="column-8 text-center">12</div>
                    <div class="column-8 text-center">9</div>
                    <div class="column-8 text-center">2</div>
                    <div class="column-8 text-center">3</div>
                    <div class="column-8 text-center">25</div>
                    <div class="column-8 text-center">13</div>
                    <div class="column-8 text-center">15</div>
                    <div class="column-8 text-center">30</div>
                  </div>
                </div>
                <button class="button-common">
                  See All >
                </button>
              </div>
            </div>
          </div>
          <!-- ===========END Standings TABS ============= -->

        </div>
      </div>
      <div class="right-main-layout">
        <div class="right-main-content-wrapper">
          <div class="header-right-content">
            <span class="title">feature news</span>
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2_1629)">
                  <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_2_1629">
                    <rect width="20" height="20" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </div>
          <div class="list-news-right-sidebar-wrapper">
            <a href="#" target="" class="list-news-item">
              <img src="./images/news-1.png" alt="" class="image-news" />
              <div class="news-content-mask">
                <span class="news-title">Barcelona 0-3 Bayern Munich: Humiliated Barca fail to progress</span>
              </div>
            </a>
            <a href="#" target="" class="list-news-item">
              <img src="./images/news-2.png" alt="" class="image-news" />
              <div class="news-content-mask">
                <span class="news-title">Barcelona 0-3 Bayern Munich: Humiliated Barca fail to progress</span>
              </div>
            </a>
            <a href="#" target="" class="list-news-item">
              <img src="./images/news-3.png" alt="" class="image-news" />
              <div class="news-content-mask">
                <span class="news-title">Laporta philosophical after Barcelona's premature Champions League exit</span>
              </div>
            </a>
            <a href="#" target="" class="list-news-item">
              <img src="./images/news-4.png" alt="" class="image-news" />
              <div class="news-content-mask">
                <span class="news-title">Tottenham 1-1 Sporting CP: Spurs held after VAR drama denies Kane</span>
              </div>
            </a>
            <a href="#" target="" class="list-news-item">
              <img src="./images/news-5.png" alt="" class="image-news" />
              <div class="news-content-mask">
                <span class="news-title">Oblak apologises to Atletico fans after 'cruel' Champions League exit</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>


<script>
  $(function() {
    $("#scores-tabs").tabs({
      active: 0
    });

    $("#all-date-tabs").tabs({
      active: 1
    });

    $("#odds-date-tabs").tabs({
      active: 1
    })
  });
</script>

</html>