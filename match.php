<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="container">
    <div class="main-layout">
      <div class="left-main-layout">
        <div class="left-main-layout-content-wrapper">
          <div class="search-wrapper-common sidebar-search">
            <span class="icon icon-search">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16.2498 16.25L13.3332 13.3333M14.9998 8.75001C14.9998 11.7416 12.5747 14.1667 9.58317 14.1667C6.59163 14.1667 4.1665 11.7416 4.1665 8.75001C4.1665 5.75847 6.59163 3.33334 9.58317 3.33334C12.5747 3.33334 14.9998 5.75847 14.9998 8.75001Z"
                  stroke="white" stroke-linecap="round" stroke-linejoin="round" />
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
      <div class="main-match-content-wrapper">
        <div class="match-player-wrapper">
          <div class="match-player">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VkGzajNpNwo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="match-control">
            <div class="list-server">
              <button class="btn-server active">Server 1</button>
              <button class="btn-server">Server 2</button>
            </div>
            <ul class="list-player-contact">
              <li class="list-player-contact-item">
                <a href="#">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M18.3337 10C18.3337 5.4 14.6003 1.66666 10.0003 1.66666C5.40033 1.66666 1.66699 5.4 1.66699 10C1.66699 14.0333 4.53366 17.3917 8.33366 18.1667V12.5H6.66699V10H8.33366V7.91666C8.33366 6.30833 9.64199 5 11.2503 5H13.3337V7.5H11.667C11.2087 7.5 10.8337 7.875 10.8337 8.33333V10H13.3337V12.5H10.8337V18.2917C15.042 17.875 18.3337 14.325 18.3337 10Z"
                      fill="white" />
                  </svg>
                </a>
              </li>
              <li class="list-player-contact-item">
                <a href="#">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M20 3.83317C19.25 4.1665 18.5 4.4165 17.6667 4.49984C18.5 3.99984 19.1667 3.1665 19.5 2.24984C18.6667 2.74984 17.8333 3.08317 16.9167 3.24984C16.1667 2.4165 15.0833 1.9165 13.9167 1.9165C11.6667 1.9165 9.83333 3.74984 9.83333 5.99984C9.83333 6.33317 9.83333 6.6665 9.91667 6.9165C6.41667 6.74984 3.41667 5.08317 1.41667 2.58317C1 3.24984 0.833333 3.9165 0.833333 4.6665C0.833333 6.08317 1.58333 7.33317 2.66667 8.08317C2 8.08317 1.33333 7.9165 0.833333 7.58317C0.833333 7.58317 0.833333 7.58317 0.833333 7.6665C0.833333 9.6665 2.25 11.3332 4.08333 11.6665C3.75 11.7498 3.41667 11.8332 3 11.8332C2.75 11.8332 2.5 11.8332 2.25 11.7498C2.75 13.4165 4.25 14.5832 6.08333 14.5832C4.66667 15.6665 2.91667 16.3332 1 16.3332C0.666667 16.3332 0.333333 16.3332 0 16.2498C1.83333 17.4165 4 18.0832 6.25 18.0832C13.8333 18.0832 17.9167 11.8332 17.9167 6.4165C17.9167 6.24984 17.9167 6.08317 17.9167 5.9165C18.75 5.33317 19.4167 4.58317 20 3.83317Z"
                      fill="white" />
                  </svg>
                </a>
              </li>
              <li class="list-player-contact-item">
                <a href="#">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_503_827)">
                      <path
                        d="M4.77169 4.40217C4.92963 4.55521 5.14093 4.64078 5.36085 4.64078C5.58078 4.64078 5.79208 4.55521 5.95002 4.40217C6.10625 4.2459 6.19401 4.03397 6.19401 3.813C6.19401 3.59203 6.10625 3.38011 5.95002 3.22384L4.28335 1.55717C4.12618 1.40537 3.91568 1.32138 3.69719 1.32327C3.47869 1.32517 3.26968 1.41281 3.11517 1.56732C2.96066 1.72183 2.87302 1.93084 2.87113 2.14933C2.86923 2.36783 2.95322 2.57833 3.10502 2.7355L4.77169 4.40217Z"
                        fill="white" />
                      <path
                        d="M7.91634 3.75C8.13735 3.75 8.34932 3.6622 8.5056 3.50592C8.66188 3.34964 8.74967 3.13768 8.74967 2.91667V0.833333C8.74967 0.61232 8.66188 0.400358 8.5056 0.244078C8.34932 0.0877974 8.13735 0 7.91634 0C7.69533 0 7.48337 0.0877974 7.32709 0.244078C7.17081 0.400358 7.08301 0.61232 7.08301 0.833333V2.91667C7.08301 3.13768 7.17081 3.34964 7.32709 3.50592C7.48337 3.6622 7.69533 3.75 7.91634 3.75Z"
                        fill="white" />
                      <path
                        d="M2.42318 7.5H4.50651C4.72752 7.5 4.93949 7.4122 5.09577 7.25592C5.25205 7.09964 5.33984 6.88768 5.33984 6.66667C5.33984 6.44566 5.25205 6.23369 5.09577 6.07741C4.93949 5.92113 4.72752 5.83334 4.50651 5.83334H2.42318C2.20216 5.83334 1.9902 5.92113 1.83392 6.07741C1.67764 6.23369 1.58984 6.44566 1.58984 6.66667C1.58984 6.88768 1.67764 7.09964 1.83392 7.25592C1.9902 7.4122 2.20216 7.5 2.42318 7.5Z"
                        fill="white" />
                      <path
                        d="M8.93855 14.8908L6.10521 17.7242C5.70741 18.101 5.18027 18.3111 4.6323 18.3111C4.08432 18.3111 3.55719 18.101 3.15938 17.7242L2.27521 16.8408C1.88663 16.4489 1.6686 15.9194 1.6686 15.3675C1.6686 14.8156 1.88663 14.2861 2.27521 13.8942L5.10855 11.0608C5.18814 10.984 5.25162 10.892 5.2953 10.7903C5.33897 10.6887 5.36196 10.5793 5.36292 10.4687C5.36388 10.358 5.3428 10.2483 5.3009 10.1459C5.259 10.0435 5.19712 9.95041 5.11888 9.87217C5.04063 9.79392 4.94759 9.73205 4.84517 9.69015C4.74276 9.64825 4.63303 9.62716 4.52238 9.62812C4.41173 9.62908 4.30238 9.65207 4.20071 9.69575C4.09904 9.73942 4.00709 9.80291 3.93021 9.8825L1.09688 12.7158C0.395644 13.4202 0.00195313 14.3736 0.00195312 15.3675C0.00195313 16.3614 0.395644 17.3148 1.09688 18.0192L1.98105 18.9025C2.68525 19.6037 3.63854 19.9974 4.6323 19.9974C5.62606 19.9974 6.57935 19.6037 7.28355 18.9025L10.1169 16.0692C10.1965 15.9923 10.26 15.9003 10.3036 15.7987C10.3473 15.697 10.3703 15.5876 10.3713 15.477C10.3722 15.3663 10.3511 15.2566 10.3092 15.1542C10.2673 15.0518 10.2055 14.9587 10.1272 14.8805C10.049 14.8023 9.95592 14.7404 9.85351 14.6985C9.75109 14.6566 9.64136 14.6355 9.53071 14.6365C9.42006 14.6374 9.31071 14.6604 9.20904 14.7041C9.10737 14.7478 9.01542 14.8112 8.93855 14.8908Z"
                        fill="white" />
                      <path
                        d="M16.1468 5.83334H12.3968C12.1758 5.83334 11.9638 5.92113 11.8076 6.07741C11.6513 6.23369 11.5635 6.44566 11.5635 6.66667C11.5635 6.88768 11.6513 7.09964 11.8076 7.25592C11.9638 7.4122 12.1758 7.5 12.3968 7.5H16.1468C16.7149 7.51562 17.256 7.74564 17.6615 8.14385C18.067 8.54205 18.3068 9.07895 18.3326 9.64667V11.3133C18.2999 11.8708 18.0513 12.3936 17.6394 12.7707C17.2276 13.1479 16.685 13.3497 16.1268 13.3333H12.3968C12.1758 13.3333 11.9638 13.4211 11.8076 13.5774C11.6513 13.7337 11.5635 13.9457 11.5635 14.1667C11.5635 14.3877 11.6513 14.5996 11.8076 14.7559C11.9638 14.9122 12.1758 15 12.3968 15H16.1268C17.1288 15.0231 18.099 14.648 18.8249 13.9569C19.5508 13.2659 19.9731 12.3152 19.9993 11.3133V9.64667C19.9807 8.63438 19.5676 7.66935 18.848 6.9571C18.1284 6.24484 17.1592 5.84163 16.1468 5.83334Z"
                        fill="white" />
                    </g>
                    <defs>
                      <clipPath id="clip0_503_827">
                        <rect width="20" height="20" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="match-content-wrapper">
          <div class="center-main-layout match-content-page-wrapper">
            <div class="match-content-header">
              <div class="league-info-wrapper">
                <img src="./images/league-3.png" class="league-image" />
                <div class="league-info">
                  <span class="group-name">Group G</span>
                  <span class="league-name">Champions League</span>
                </div>
              </div>
              <div class="table-match-detail-wrapper">
                <div class="club-item-wrapper">
                  <img src="./images/club-1.png" class="club-image" alt="">
                  <span class="club-name">Barcelona</span>
                </div>
                <div class="score-wrapper">
                  <span class="score">0 - 3</span>
                  <span class="type">Full time</span>
                </div>
                <div class="club-item-wrapper">
                  <img src="./images/club-2.png" class="club-image" alt="">
                  <span class="club-name">Bayern Munich</span>
                </div>
              </div>
            </div>

            <div class="match-tabs-wrapper">
              <div id="match-tabs">
                <ul class="sub-nav">
                  <li class="match-tab-item"><a href="#tabs-1">Summary</a></li>
                  <li class="match-tab-item"><a href="#tabs-2">Stats</a></li>
                  <li class="match-tab-item"><a href="#tabs-3">Lineups</a></li>
                  <li class="match-tab-item"><a href="#tabs-4">H2H</a></li>
                  <li class="match-tab-item"><a href="#tabs-5">Table</a></li>
                  <li class="match-tab-item"><a href="#tabs-6">News</a></li>
                </ul>
                <!-- ===========START Summary TABS ============= -->
                <div id="tabs-1" class="tab-content">
                  <div class="match-info-wrapper">
                    <h3 class="block-tab-title">Match info</h3>
                    <div class="list-match-info">
                      <div class="match-info-item">
                        <img src="./images/icon-match-info-1.png" alt="" class="icon-match-info">
                        <div class="info-detail">
                          <span class="label-1">26 October 2022</span>
                          <span class="label-2">Date</span>
                        </div>
                      </div>
                      <div class="match-info-item">
                        <img src="./images/icon-match-info-2.png" alt="" class="icon-match-info">
                        <div class="info-detail">
                          <span class="label-1">Michael Oliver (England)</span>
                          <span class="label-2">Referee</span>
                        </div>
                      </div>
                      <div class="match-info-item">
                        <img src="./images/icon-match-info-3.png" alt="" class="icon-match-info">
                        <div class="info-detail">
                          <span class="label-1">Jan Breydel Stadion</span>
                          <span class="label-2">Venue</span>
                        </div>
                      </div>
                      <div class="match-info-item">
                        <img src="./images/icon-match-info-4.png" alt="" class="icon-match-info">
                        <div class="info-detail">
                          <span class="label-1">84,018</span>
                          <span class="label-2">Spectators</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="match-summary-wrapper">
                    <h3 class="block-tab-title">Match summary</h3>
                    <div class="match-table-summary">
                      <div class="match-table-row">
                        <span class="time">10'</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item"></div>
                          <span class="score">0 - 3</span>
                          <div class="match-result-item">
                            <span class="icon">
                              <img src="./images/icon-ball.png" alt="icon-ghi-ban" />
                            </span>
                            <div class="detail-result">
                              <span class="player-1">S.Mane nguyen dang khoa hoc vien </span>
                              <span class="player-2">S. Gnabry</span>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="match-table-row">
                        <span class="time">20'</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item"></div>
                          <span class="score"></span>
                          <div class="match-result-item">
                            <span class="icon">
                              <svg id="the-vang" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" width="12" height="16" rx="2" fill="#FDC400" />
                              </svg>
                            </span>
                            <div class="detail-result">
                              <span class="player-1">N. Mazraoui</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="match-table-row">
                        <span class="time">20'</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item"></div>
                          <span class="score"></span>
                          <div class="match-result-item">
                            <span class="icon">
                              <svg id="the-do" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" width="12" height="16" rx="2" fill="#E52C2C" />
                              </svg>
                            </span>
                            <div class="detail-result">
                              <span class="player-1">N. Mazraoui</span>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="match-table-row">
                        <span class="time">10'</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item"></div>
                          <span class="score">0 - 3</span>
                          <div class="match-result-item">
                            <span class="icon">
                              <img src="./images/icon-ball.png" alt="icon-ghi-ban" />
                            </span>
                            <div class="detail-result">
                              <span class="player-1">S.Mane</span>
                              <span class="player-2">S. Gnabry</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="match-table-row">
                        <span class="time">10'</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item">
                            <div class="detail-result">
                              <span class="player-1">S.Mane</span>
                              <span class="player-2">S. Gnabry</span>
                            </div>
                            <span class="icon">
                              <img src="./images/icon-ball.png" alt="icon-ghi-ban" />
                            </span>
                          </div>
                          <span class="score">0 - 3</span>
                          <div class="match-result-item">
                          </div>
                        </div>
                      </div>

                      <div class="match-table-row">
                        <span class="time">10'</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item">
                            <div class="detail-result">
                              <span class="player-1">S.Mane</span>
                            </div>
                            <span class="icon">
                              <svg id="the-vang" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" width="12" height="16" rx="2" fill="#FDC400" />
                              </svg>
                            </span>
                          </div>
                          <span class="score"></span>
                          <div class="match-result-item">
                          </div>
                        </div>
                      </div>

                      <div class="match-table-row row-background">
                        <span class="time">HT</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item">
                          </div>
                          <span class="score">0 - 2</span>
                          <div class="match-result-item">
                          </div>
                        </div>
                      </div>

                      <div class="match-table-row">
                        <span class="time">10'</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item"></div>
                          <span class="score">0 - 3</span>
                          <div class="match-result-item">
                            <span class="icon">
                              <img src="./images/icon-ball.png" alt="icon-ghi-ban" />
                            </span>
                            <div class="detail-result">
                              <span class="player-1">S.Mane nguyen dang khoa hoc vien buu chinh vien thong </span>
                              <span class="player-2">S. Gnabry</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="match-table-row row-background">
                        <span class="time">FT</span>
                        <div class="match-result-wrapper">
                          <div class="match-result-item">
                          </div>
                          <span class="score">0 - 3</span>
                          <div class="match-result-item">
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
                <!-- ===========END Summary TABS ============= -->


                <!-- ===========START Stats TABS ============= -->
                <div id="tabs-2" class="tab-content">
                  <div class="match-stats-content-wrapper">
                    <div class="match-stats-item">
                      <div class="top-match-stats-item">
                        <span class="first-value">4</span>
                        <span class="label">Shots on target</span>
                        <span class="second-value">7</span>
                      </div>
                      <div class="progress-match-stats-item-wrapper">
                        <div class="progress-match-stats-item">
                          <div class="progress progress-1" value="4" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                        <div class="progress-match-stats-item">
                          <div class="progress progress-2" value="5" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="match-stats-item">
                      <div class="top-match-stats-item">
                        <span class="first-value">4</span>
                        <span class="label">Shots on target</span>
                        <span class="second-value">7</span>
                      </div>
                      <div class="progress-match-stats-item-wrapper">
                        <div class="progress-match-stats-item">
                          <div class="progress progress-1" value="4" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                        <div class="progress-match-stats-item">
                          <div class="progress progress-2" value="5" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="match-stats-item">
                      <div class="top-match-stats-item">
                        <span class="first-value">5</span>
                        <span class="label">Blocked Shots</span>
                        <span class="second-value">7</span>
                      </div>
                      <div class="progress-match-stats-item-wrapper">
                        <div class="progress-match-stats-item">
                          <div class="progress progress-1" value="5" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                        <div class="progress-match-stats-item">
                          <div class="progress progress-2" value="3" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="match-stats-item">
                      <div class="top-match-stats-item">
                        <span class="first-value">2</span>
                        <span class="label">Possession (%)</span>
                        <span class="second-value">7</span>
                      </div>
                      <div class="progress-match-stats-item-wrapper">
                        <div class="progress-match-stats-item">
                          <div class="progress progress-1" value="2" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                        <div class="progress-match-stats-item">
                          <div class="progress progress-2" value="3" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="match-stats-item">
                      <div class="top-match-stats-item">
                        <span class="first-value">2</span>
                        <span class="label">Possession (%)</span>
                        <span class="second-value">7</span>
                      </div>
                      <div class="progress-match-stats-item-wrapper">
                        <div class="progress-match-stats-item">
                          <div class="progress progress-1" value="2" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                        <div class="progress-match-stats-item">
                          <div class="progress progress-2" value="3" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="match-stats-item">
                      <div class="top-match-stats-item">
                        <span class="first-value">2</span>
                        <span class="label">Possession (%)</span>
                        <span class="second-value">7</span>
                      </div>
                      <div class="progress-match-stats-item-wrapper">
                        <div class="progress-match-stats-item">
                          <div class="progress progress-1" value="2" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                        <div class="progress-match-stats-item">
                          <div class="progress progress-2" value="3" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="match-stats-item">
                      <div class="top-match-stats-item">
                        <span class="first-value">2</span>
                        <span class="label">Possession (%)</span>
                        <span class="second-value">7</span>
                      </div>
                      <div class="progress-match-stats-item-wrapper">
                        <div class="progress-match-stats-item">
                          <div class="progress progress-1" value="2" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                        <div class="progress-match-stats-item">
                          <div class="progress progress-2" value="3" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="match-stats-item">
                      <div class="top-match-stats-item">
                        <span class="first-value">2</span>
                        <span class="label">Possession (%)</span>
                        <span class="second-value">7</span>
                      </div>
                      <div class="progress-match-stats-item-wrapper">
                        <div class="progress-match-stats-item">
                          <div class="progress progress-1" value="2" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                        <div class="progress-match-stats-item">
                          <div class="progress progress-2" value="3" max-value="7">
                            <div class="progress-value"></div>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
                <!-- ===========END Stats TABS ============= -->


                <!-- ===========START Lineups TABS ============= -->
                <div id="tabs-3" class="tab-content">
                  <div class="visual-match-wrapper">
                    <span class="label top-label">BARCELONA 4-3-3</span>
                    <div class="visual-club-1">
                      <div class="match-line match-line-1">
                        <div class="player-wrapper">
                          <div class="number">
                            <span>1</span>
                            <img src="./images/icon-arrow-green.png" class="icon icon-arrow" />
                          </div>
                          <span class="player-name">Marc-Andre </span>
                        </div>
                      </div>
                      <div class="match-line match-line-2 list-player">
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>2</span>
                              <img src="./images/icon-arrow-red.png" class="icon icon-arrow" />
                            </div>
                            <span class="player-name">Hector Bellerin</span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>3</span>
                              <img src="./images/icon-yellow-card.png" class="icon icon-card" />
                            </div>
                            <span class="player-name">Marc-Andre </span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>13</span>
                              <img src="./images/icon-ball.png" class="icon icon-ball" />
                            </div>
                            <span class="player-name">Jules Kounde</span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>11</span>
                            </div>
                            <span class="player-name">Marcos Alonso</span>
                          </div>
                        </div>
                      </div>
                      <div class="match-line match-line-3 list-player">
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>16</span>
                            </div>
                            <span class="player-name">Marc-Andre</span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <span class="number">19</span>
                            <span class="player-name">Marc-Andre </span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>20</span>
                            </div>
                            <span class="player-name">Marc-Andre </span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>3</span>
                            </div>
                            <span class="player-name">Marc-Andre</span>
                          </div>
                        </div>
                      </div>
                      <div class="match-line match-line-4">
                        <div class="list-player">
                          <div class="player-item">
                            <div class="player-wrapper">
                              <div class="number">
                                <span>5</span>
                              </div>
                              <span class="player-name">Marc-Andre </span>
                            </div>
                          </div>
                          <div class="player-item">
                            <div class="player-wrapper">
                              <div class="number">
                                <span>8</span>
                              </div>
                              <span class="player-name">Marc-Andre</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="visual-club-2">
                      <div class="match-line match-line-1">
                        <div class="player-wrapper">
                          <div class="number">
                            <span>10</span>
                          </div>
                          <span class="player-name">Marc-Andre</span>
                        </div>
                      </div>
                      <div class="match-line match-line-2 list-player">
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>34</span>
                            </div>
                            <span class="player-name">Hector Bellerin</span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <span class="number">1</span>
                            <span class="player-name">Jules Kounde</span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>87</span>
                            </div>
                            <span class="player-name">Marcos Alonso</span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>15</span>
                            </div>
                            <span class="player-name">Alejandro Balde</span>
                          </div>
                        </div>
                      </div>
                      <div class="match-line match-line-3 list-player">
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>75</span>
                            </div>
                            <span class="player-name">Marc-Andre </span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <span class="number">23</span>
                            <span class="player-name">Marc-Andre </span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>40</span>
                            </div>
                            <span class="player-name">Marc-Andre </span>
                          </div>
                        </div>
                        <div class="player-item">
                          <div class="player-wrapper">
                            <div class="number">
                              <span>27</span>
                            </div>
                            <span class="player-name">Marc-Andre </span>
                          </div>
                        </div>
                      </div>
                      <div class="match-line match-line-4">
                        <div class="list-player">
                          <div class="player-item">
                            <div class="player-wrapper">
                              <div class="number">
                                <span>56</span>
                              </div>
                              <span class="player-name">Marc-Andre </span>
                            </div>
                          </div>
                          <div class="player-item">
                            <div class="player-wrapper">
                              <div class="number">
                                <span>19</span>
                              </div>
                              <span class="player-name">Marc-Andre </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <span class="label bottom-label">BARCELONA 4-3-3</span>
                  </div>

                  <div class="substitution-content-wrapper">
                    <h3 class="block-tab-title">SUBSTITUTIONS</h3>
                    <div class="list-substitution">
                      <div class="list-substitution-item">
                        <div class="substitution-item">
                          <span class="time">56'</span>
                          <div class="substitution-info">
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-red.png" alt="" class="icon">
                              <span class="player-1 player-name">Sergio Busquets</span>
                            </div>
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-green.png" alt="" class="icon">
                              <span class="player-2 player-name">Ferran Torres Ferran Torres Ferran Torres</span>
                            </div>
                          </div>
                        </div>

                        <div class="substitution-item">
                          <span class="time">56'</span>
                          <div class="substitution-info">
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-red.png" alt="" class="icon">
                              <span class="player-1 player-name">Sergio Busquets</span>
                            </div>
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-green.png" alt="" class="icon">
                              <span class="player-2 player-name">Ferran Torres</span>
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="list-substitution-item">
                        <div class="substitution-item">
                          <span class="time">56'</span>
                          <div class="substitution-info">
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-red.png" alt="" class="icon">
                              <span class="player-1 player-name">Sergio Busquets</span>
                            </div>
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-green.png" alt="" class="icon">
                              <span class="player-2 player-name">Ferran Torres Ferran Torres Ferran Torres</span>
                            </div>
                          </div>
                        </div>

                        <div class="substitution-item">
                          <span class="time">56'</span>
                          <div class="substitution-info">
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-red.png" alt="" class="icon">
                              <span class="player-1 player-name">Sergio Busquets</span>
                            </div>
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-green.png" alt="" class="icon">
                              <span class="player-2 player-name">Ferran Torres</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="list-substitution-item">
                        <div class="substitution-item">
                          <span class="time">56'</span>
                          <div class="substitution-info">
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-red.png" alt="" class="icon">
                              <span class="player-1 player-name">Sergio Busquets</span>
                            </div>
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-green.png" alt="" class="icon">
                              <span class="player-2 player-name">Ferran Torres Ferran Torres Ferran Torres</span>
                            </div>
                          </div>
                        </div>

                        <div class="substitution-item">
                          <span class="time">56'</span>
                          <div class="substitution-info">
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-red.png" alt="" class="icon">
                              <span class="player-1 player-name">Sergio Busquets</span>
                            </div>
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-green.png" alt="" class="icon">
                              <span class="player-2 player-name">Ferran Torres</span>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="list-substitution-item">
                        <div class="substitution-item">
                          <span class="time">56'</span>
                          <div class="substitution-info">
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-red.png" alt="" class="icon">
                              <span class="player-1 player-name">Sergio Busquets</span>
                            </div>
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-green.png" alt="" class="icon">
                              <span class="player-2 player-name">Ferran Torres Ferran Torres Ferran Torres</span>
                            </div>
                          </div>
                        </div>

                        <div class="substitution-item">
                          <span class="time">56'</span>
                          <div class="substitution-info">
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-red.png" alt="" class="icon">
                              <span class="player-1 player-name">Sergio Busquets</span>
                            </div>
                            <div class="player-wrapper">
                              <img src="./images/icon-arrow-green.png" alt="" class="icon">
                              <span class="player-2 player-name">Ferran Torres</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="substitution-player-wrapper">
                    <h3 class="block-tab-title">SUBSTITUTIONS</h3>
                    <div class="list-substitution-player">
                      <div class="substitution-player-item">
                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>

                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                            <img src="./images/icon-arrow-green.png" alt="" class="icon icon-arrow-green">
                            <img src="./images/icon-ball.png" alt="" class="icon icon-ball">
                          </div>
                          <span class="player-name">Inaki Pena Inaki Pena Inaki Pena Inaki Pena</span>
                        </div>
                      </div>

                      <div class="substitution-player-item">
                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>

                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>
                      </div>

                      <div class="substitution-player-item">
                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>

                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                            <img src="./images/icon-arrow-green.png" alt="" class="icon icon-arrow-green">
                            <img src="./images/icon-ball.png" alt="" class="icon icon-ball">
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>
                      </div>


                      <div class="substitution-player-item">
                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>

                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                            <img src="./images/icon-arrow-green.png" alt="" class="icon icon-arrow-green">
                            <img src="./images/icon-ball.png" alt="" class="icon icon-ball">
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>
                      </div>


                      <div class="substitution-player-item">
                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>

                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                            <img src="./images/icon-arrow-green.png" alt="" class="icon icon-arrow-green">
                            <img src="./images/icon-ball.png" alt="" class="icon icon-ball">
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>
                      </div>

                      <div class="substitution-player-item">
                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>

                        <div class="player-item">
                          <div class="number">
                            <span>25</span>
                          </div>
                          <span class="player-name">Inaki Pena</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="suspensions-content-wrapper">
                    <h3 class="block-tab-title">INJURIES & SUSPENSIONS</h3>
                    <div class="list-suspensions">
                      <div class="list-suspensions-item">
                        <div class="suspensions-item">
                          <span class="icon">
                            <img src="./images/icon-plus.png" alt="" class="icon-plus">
                          </span>
                          <div class="suspensions-info">
                            <span class="player-name player-name-1">Sergi Roberto Dislocated shoulder</span>
                            <span class="player-name player-name-2">Dislocated shoulder</span>
                          </div>
                        </div>
                        <div class="suspensions-item">
                          <span class="icon">
                            <img src="./images/icon-plus.png" alt="" class="icon-plus">
                          </span>
                          <div class="suspensions-info">
                            <span class="player-name player-name-1">Sergi Roberto</span>
                            <span class="player-name player-name-2">Dislocated shoulder</span>
                          </div>
                        </div>
                      </div>


                      <div class="list-suspensions-item">
                        <div class="suspensions-item">
                          <span class="icon">
                            <img src="./images/icon-plus.png" alt="" class="icon-plus">
                          </span>
                          <div class="suspensions-info">
                            <span class="player-name player-name-1">Sergi Roberto</span>
                            <span class="player-name player-name-2">Dislocated shoulder</span>
                          </div>
                        </div>
                        <div class="suspensions-item">
                          <span class="icon">
                            <img src="./images/icon-plus.png" alt="" class="icon-plus">
                          </span>
                          <div class="suspensions-info">
                            <span class="player-name player-name-1">Sergi Roberto</span>
                            <span class="player-name player-name-2">Dislocated shoulder</span>
                          </div>
                        </div>
                      </div>


                      <div class="list-suspensions-item">
                        <div class="suspensions-item">
                          <span class="icon">
                            <img src="./images/icon-plus.png" alt="" class="icon-plus">
                          </span>
                          <div class="suspensions-info">
                            <span class="player-name player-name-1">Sergi Roberto</span>
                            <span class="player-name player-name-2">Dislocated shoulder</span>
                          </div>
                        </div>
                        <div class="suspensions-item">
                          <span class="icon">
                            <img src="./images/icon-plus.png" alt="" class="icon-plus">
                          </span>
                          <div class="suspensions-info">
                            <span class="player-name player-name-1">Sergi Roberto</span>
                            <span class="player-name player-name-2">Dislocated shoulder</span>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
                <!-- ===========END Lineups TABS ============= -->


                <!-- ===========START H2H TABS ============= -->
                <div id="tabs-4" class="tab-content">
                  <div class="match-h2h-content-wrapper">
                    <div class="list-h2h">
                      <div class="h2h-item">
                        <div class="league-info-wrapper">
                          <img src="./images/league-3.png" class="league-image w-20" />
                          <div class="league-info">
                            <span class="group-name">Group G</span>
                            <span class="league-name">Champions League</span>
                          </div>
                        </div>
                        <div class="block-club-common">
                          <div class="time-wrapper">
                            <span class="time">14 SEP</span>
                            <span class="type">FT</span>
                          </div>
                          <div class="list-club-wrapper">
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-1.png" alt="">
                                <span class="club-name txt-h2h-common">Manchester City</span>
                              </div>
                              <span class="score">0</span>
                            </div>
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-2.png" alt="">
                                <span class="club-name txt-h2h-common">Chelsea</span>
                              </div>
                              <span class="score">1</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="h2h-item">
                        <div class="league-info-wrapper">
                          <img src="./images/league-3.png" class="league-image w-20" />
                          <div class="league-info">
                            <span class="group-name">Group C</span>
                            <span class="league-name">Champions League</span>
                          </div>
                        </div>
                        <div class="block-club-common">
                          <div class="time-wrapper">
                            <span class="time">14 SEP</span>
                            <span class="type">FT</span>
                          </div>
                          <div class="list-club-wrapper">
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-1.png" alt="">
                                <span class="club-name txt-h2h-common">Manchester City</span>
                              </div>
                              <span class="score">0</span>
                            </div>
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-2.png" alt="">
                                <span class="club-name txt-h2h-common">Chelsea</span>
                              </div>
                              <span class="score">1</span>
                            </div>
                          </div>
                        </div>
                        <div class="block-club-common">
                          <div class="time-wrapper">
                            <span class="time">14 SEP</span>
                            <span class="type">FT</span>
                          </div>
                          <div class="list-club-wrapper">
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-1.png" alt="">
                                <span class="club-name txt-h2h-common">Manchester City</span>
                              </div>
                              <span class="score">0</span>
                            </div>
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-2.png" alt="">
                                <span class="club-name txt-h2h-common">Chelsea</span>
                              </div>
                              <span class="score">1</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="h2h-item">
                        <div class="league-info-wrapper">
                          <img src="./images/league-3.png" class="league-image w-20" />
                          <div class="league-info">
                            <span class="group-name">Quarter-Finals</span>
                            <span class="league-name">Champions League</span>
                          </div>
                        </div>
                        <div class="block-club-common">
                          <div class="time-wrapper">
                            <span class="time">14 SEP</span>
                            <span class="type">FT</span>
                          </div>
                          <div class="list-club-wrapper">
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-1.png" alt="">
                                <span class="club-name txt-h2h-common">Manchester City</span>
                              </div>
                              <span class="score">0</span>
                            </div>
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-2.png" alt="">
                                <span class="club-name txt-h2h-common">Chelsea</span>
                              </div>
                              <span class="score">1</span>
                            </div>
                          </div>
                        </div>
                        <div class="block-club-common">
                          <div class="time-wrapper">
                            <span class="time">14 SEP</span>
                            <span class="type">FT</span>
                          </div>
                          <div class="list-club-wrapper">
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-1.png" alt="">
                                <span class="club-name txt-h2h-common">Manchester City Manchester City Manchester City
                                  Manchester City</span>
                              </div>
                              <span class="score">0</span>
                            </div>
                            <div class="club-item">
                              <div class="club-info-wrapper">
                                <img src="./images/club-2.png" alt="">
                                <span class="club-name txt-h2h-common">Chelsea</span>
                              </div>
                              <span class="score">1</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ===========END H2H TABS ============= -->



                <!-- ===========START Table TABS ============= -->
                <div id="tabs-5" class="tab-content">
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
                      <div class="column-8 text-center txt-green">1</div>
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

                    <div class="table-row active">
                      <div class="column-8 text-center txt-green">2</div>
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
                      <div class="column-8 text-center txt-green">3</div>
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
                      <div class="column-8 text-center txt-violet">4</div>
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
                      <div class="column-8 text-center txt-violet">5</div>
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
                  <ul class="list-suggestion">
                    <li>
                      <span class="icon bg-green"></span>
                      <span class="label">Next stage</span>
                    </li>
                    <li>
                      <span class="icon bg-violet"></span>
                      <span class="label">Qualification to Europa League Final Stage</span>
                    </li>
                  </ul>
                </div>
                <!-- ===========END Table TABS ============= -->


                <!-- ===========START NEWS TABS ============= -->
                <div id="tabs-6" class="tab-content">
                  <div class="list-news-filter">
                    <span class="filter-item active">Bayern Munich</span>
                    <span class="filter-item">Barcelona</span>
                  </div>

                  <div class="list-new-by-category list-new-in-match">
                    <a href="#" target="" class="list-new-by-category-item news-in-match">
                      <img src="./images/news-1.png" alt="">
                      <div class="news-info">
                        <h4 class="news-title">LiveScore Daily: Today's football news in bite-sized chunks</h4>
                        <span class="time">3 hours ago</span>
                      </div>
                    </a>
                    <a href="#" target="" class="list-new-by-category-item news-in-match">
                      <img src="./images/news-2.png" alt="">
                      <div class="news-info">
                        <h4 class="news-title">LiveScore Daily: Today's football news in bite-sized chunks</h4>
                        <span class="time">3 hours ago</span>
                      </div>
                    </a>
                    <a href="#" target="" class="list-new-by-category-item news-in-match">
                      <img src="./images/news-3.png" alt="">
                      <div class="news-info">
                        <h4 class="news-title">LiveScore Daily: Today's football news in bite-sized chunks</h4>
                        <span class="time">3 hours ago</span>
                      </div>
                    </a>
                    <a href="#" target="" class="list-new-by-category-item news-in-match">
                      <img src="./images/news-4.png" alt="">
                      <div class="news-info">
                        <h4 class="news-title">LiveScore Daily: Today's football news in bite-sized chunks</h4>
                        <span class="time">3 hours ago</span>
                      </div>
                    </a>
                    <a href="#" target="" class="list-new-by-category-item news-in-match">
                      <img src="./images/news-5.png" alt="">
                      <div class="news-info">
                        <h4 class="news-title">LiveScore Daily: Today's football news in bite-sized chunks</h4>
                        <span class="time">3 hours ago</span>
                      </div>
                    </a>
                  </div>
                </div>
                <!-- ===========END NEWS TABS ============= -->

              </div>

            </div>
          </div>
          <div class="right-main-layout">
            <div class="right-main-content-wrapper">
              <div class="header-right-content">
                <span class="title">feature news</span>
                <span class="icon">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2_1629)">
                      <path d="M7.5 5L12.5 10L7.5 15" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
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
                    <span class="news-title">Laporta philosophical after Barcelona's premature Champions League
                      exit</span>
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
                    <span class="news-title">Oblak apologises to Atletico fans after 'cruel' Champions League
                      exit</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>
<script>
  $(function () {
    $("#match-tabs").tabs({
      active: 0
    });
  });

  const listProgress = document.getElementsByClassName("progress");
  for (let i = 0; i < listProgress.length; i++) {
    const element = listProgress[i];
    const value = element.getAttribute("value");
    const maxValue = element.getAttribute("max-value");
    const width = (value / maxValue) * 100;
    const childNode = element.childNodes[1];
    childNode.style.width = `${width}%`;
  }

</script>

</html>