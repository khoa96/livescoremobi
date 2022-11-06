<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="container">
    <div class="main-layout">
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
      <div class="center-main-layout page-club-content-wrapper ">
        <div class="page-header">
          <div class="league-info-wrapper">
            <img src="./images/league-3.png" class="league-image" />
            <div class="league-info">
              <span class="group-name">Manchester City</span>
              <span class="league-name">England</span>
            </div>
          </div>
        </div>

        <div id="club-tabs">
          <ul class="match-nav">
            <li><a href="#tabs-1">Overview</a></li>
            <li><a href="#tabs-2">Results</a></li>
            <li><a href="#tabs-3">Schedule</a></li>
            <li><a href="#tabs-4">Table</a></li>
            <li><a href="#tabs-5">News</a></li>
          </ul>
          <!-- ===========START Overview TABS ============= -->
          <div id="tabs-1" class="tab-content">
            <h3 class="block-tab-title">Next match</h3>
            <div class="table-match-detail-wrapper">
              <div class="club-item-wrapper">
                <img src="./images/club-1.png" class="club-image" alt="">
                <span class="club-name">Manchester City</span>
              </div>
              <div class="score-wrapper">
                <span class="score">23:45</span>
                <span class="type">29 Oct</span>
              </div>
              <div class="club-item-wrapper">
                <img src="./images/club-2.png" class="club-image" alt="">
                <span class="club-name">FC Porto</span>
              </div>
            </div>

            <h3 class="block-tab-title">form</h3>
            <div class="list-form">
              <div class="block-club-common">
                <div class="time-wrapper">
                  <span class="type">FT</span>
                </div>
                <div class="list-club-wrapper">
                  <div class="club-item">
                    <div class="club-info-wrapper">
                      <img src="./images/club-1.png" alt="">
                      <span class="club-name text-overflow-club">Manchester City Manchester City Manchester City Manchester City </span>
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
            </div>
            <button class="button-common">
              See All >
            </button>

            <div class="list-news-wrapper">
              <h3 class="block-tab-title">news</h3>
              <div class="list-new-by-category list-new-in-club">
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
            <button class="button-common">
              See All >
            </button>
          </div>
          <!-- ===========END Overview TABS ============= -->


          <!-- ===========START Results TABS ============= -->
          <div id="tabs-2" class="tab-content">
            tab2
          </div>
          <!-- ===========END Results TABS ============= -->


          <!-- ===========START Schedule TABS ============= -->
          <div id="tabs-3" class="tab-content">
            tab3
          </div>
          <!-- ===========END Schedule TABS ============= -->


          <!-- ===========START table TABS ============= -->
          <div id="tabs-4" class="tab-content">
            tab4
          </div>
          <!-- ===========END table TABS ============= -->



          <!-- ===========START News TABS ============= -->
          <div id="tabs-5" class="tab-content">
            tab5
          </div>
          <!-- ===========END News TABS ============= -->

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
    $("#club-tabs").tabs({
      active: 0
    });
  });
</script>

</html>