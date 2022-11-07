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
      <div class="center-main-layout favourites-page-content-wrapper">
        <h3 class="main-title">Favorites</h3>
        <div id="favourites-tabs">
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
            <div id="all-favourites-tabs">
              <ul class="sub-nav">
                <li><a href="#sub-tabs-1">Matches</a></li>
                <li><a href="#sub-tabs-2">Clubs</a></li>
                <li><a href="#sub-tabs-3">Leagues</a></li>
              </ul>
              <div id="sub-tabs-1" class="sub-tab-content">
                <div class="favourites-list-league">
                  <div class="favourites-list-league-item">
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
                    <div class="list-league-result">
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
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
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5953 2.86736L12.5253 6.74986C12.6219 6.94569 12.8086 7.08236 13.0253 7.11402L17.3461 7.73819C17.5211 7.76152 17.6786 7.85319 17.7861 7.99319C17.9878 8.25569 17.9569 8.62736 17.7153 8.85319L14.5836 11.8815C14.4244 12.0315 14.3536 12.2515 14.3953 12.4657L15.1453 16.739C15.1978 17.0932 14.9561 17.4249 14.6019 17.4824C14.4553 17.5049 14.3053 17.4815 14.1719 17.4157L10.3236 15.3982C10.1303 15.2932 9.8986 15.2932 9.70527 15.3982L5.8286 17.4265C5.50444 17.5915 5.10777 17.469 4.9311 17.1515C4.8636 17.0232 4.84027 16.8774 4.8636 16.7349L5.6136 12.4615C5.6511 12.2482 5.58027 12.029 5.42527 11.8782L2.27694 8.85069C2.02027 8.59569 2.0186 8.18069 2.27444 7.92403C2.27527 7.92319 2.2761 7.92153 2.27694 7.92069C2.38277 7.82486 2.51277 7.76069 2.6536 7.73569L6.97527 7.11153C7.1911 7.07736 7.37694 6.94236 7.47527 6.74652L9.4036 2.86736C9.4811 2.70986 9.6186 2.58903 9.78527 2.53403C9.95277 2.47819 10.1361 2.49153 10.2936 2.57069C10.4228 2.63486 10.5286 2.73903 10.5953 2.86736Z" fill="#FDC400" stroke="#FDC400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5953 2.86736L12.5253 6.74986C12.6219 6.94569 12.8086 7.08236 13.0253 7.11402L17.3461 7.73819C17.5211 7.76152 17.6786 7.85319 17.7861 7.99319C17.9878 8.25569 17.9569 8.62736 17.7153 8.85319L14.5836 11.8815C14.4244 12.0315 14.3536 12.2515 14.3953 12.4657L15.1453 16.739C15.1978 17.0932 14.9561 17.4249 14.6019 17.4824C14.4553 17.5049 14.3053 17.4815 14.1719 17.4157L10.3236 15.3982C10.1303 15.2932 9.8986 15.2932 9.70527 15.3982L5.8286 17.4265C5.50444 17.5915 5.10777 17.469 4.9311 17.1515C4.8636 17.0232 4.84027 16.8774 4.8636 16.7349L5.6136 12.4615C5.6511 12.2482 5.58027 12.029 5.42527 11.8782L2.27694 8.85069C2.02027 8.59569 2.0186 8.18069 2.27444 7.92403C2.27527 7.92319 2.2761 7.92153 2.27694 7.92069C2.38277 7.82486 2.51277 7.76069 2.6536 7.73569L6.97527 7.11153C7.1911 7.07736 7.37694 6.94236 7.47527 6.74652L9.4036 2.86736C9.4811 2.70986 9.6186 2.58903 9.78527 2.53403C9.95277 2.47819 10.1361 2.49153 10.2936 2.57069C10.4228 2.63486 10.5286 2.73903 10.5953 2.86736Z" fill="#FDC400" stroke="#FDC400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                      </div>
                    </div>

                  </div>

                  <div class="favourites-list-league-item">
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
                    <div class="list-league-result">
                      <div class="block-club-common">
                        <div class="time-wrapper">
                          <span class="time">23:45</span>
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
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5953 2.86736L12.5253 6.74986C12.6219 6.94569 12.8086 7.08236 13.0253 7.11402L17.3461 7.73819C17.5211 7.76152 17.6786 7.85319 17.7861 7.99319C17.9878 8.25569 17.9569 8.62736 17.7153 8.85319L14.5836 11.8815C14.4244 12.0315 14.3536 12.2515 14.3953 12.4657L15.1453 16.739C15.1978 17.0932 14.9561 17.4249 14.6019 17.4824C14.4553 17.5049 14.3053 17.4815 14.1719 17.4157L10.3236 15.3982C10.1303 15.2932 9.8986 15.2932 9.70527 15.3982L5.8286 17.4265C5.50444 17.5915 5.10777 17.469 4.9311 17.1515C4.8636 17.0232 4.84027 16.8774 4.8636 16.7349L5.6136 12.4615C5.6511 12.2482 5.58027 12.029 5.42527 11.8782L2.27694 8.85069C2.02027 8.59569 2.0186 8.18069 2.27444 7.92403C2.27527 7.92319 2.2761 7.92153 2.27694 7.92069C2.38277 7.82486 2.51277 7.76069 2.6536 7.73569L6.97527 7.11153C7.1911 7.07736 7.37694 6.94236 7.47527 6.74652L9.4036 2.86736C9.4811 2.70986 9.6186 2.58903 9.78527 2.53403C9.95277 2.47819 10.1361 2.49153 10.2936 2.57069C10.4228 2.63486 10.5286 2.73903 10.5953 2.86736Z" fill="#FDC400" stroke="#FDC400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5953 2.86736L12.5253 6.74986C12.6219 6.94569 12.8086 7.08236 13.0253 7.11402L17.3461 7.73819C17.5211 7.76152 17.6786 7.85319 17.7861 7.99319C17.9878 8.25569 17.9569 8.62736 17.7153 8.85319L14.5836 11.8815C14.4244 12.0315 14.3536 12.2515 14.3953 12.4657L15.1453 16.739C15.1978 17.0932 14.9561 17.4249 14.6019 17.4824C14.4553 17.5049 14.3053 17.4815 14.1719 17.4157L10.3236 15.3982C10.1303 15.2932 9.8986 15.2932 9.70527 15.3982L5.8286 17.4265C5.50444 17.5915 5.10777 17.469 4.9311 17.1515C4.8636 17.0232 4.84027 16.8774 4.8636 16.7349L5.6136 12.4615C5.6511 12.2482 5.58027 12.029 5.42527 11.8782L2.27694 8.85069C2.02027 8.59569 2.0186 8.18069 2.27444 7.92403C2.27527 7.92319 2.2761 7.92153 2.27694 7.92069C2.38277 7.82486 2.51277 7.76069 2.6536 7.73569L6.97527 7.11153C7.1911 7.07736 7.37694 6.94236 7.47527 6.74652L9.4036 2.86736C9.4811 2.70986 9.6186 2.58903 9.78527 2.53403C9.95277 2.47819 10.1361 2.49153 10.2936 2.57069C10.4228 2.63486 10.5286 2.73903 10.5953 2.86736Z" fill="#FDC400" stroke="#FDC400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="sub-tabs-2" class="sub-tab-content">subtab2</div>
              <div id="sub-tabs-3" class="sub-tab-content">subtab3</div>
            </div>
          </div>
          <!-- ===========END All TABS ============= -->

          <!-- ===========START Live TABS ============= -->
          <div id="tabs-2" class="main-tab-content">
            tab2 (live content only for pc)
          </div>
          <!-- ===========END Live TABS ============= -->


          <!-- ===========START Odds TABS ============= -->
          <div id="tabs-3" class="main-tab-content">
            tab3
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
            tab6
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
    $("#favourites-tabs").tabs({
      active: 0
    });

    $("#all-favourites-tabs").tabs({
      active: 0
    })
  });
</script>

</html>