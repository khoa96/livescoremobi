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
            <ul class="match-nav">
              <li><a href="#tabs-1">Summary</a></li>
              <li><a href="#tabs-2">Stats</a></li>
              <li><a href="#tabs-3">Lineups</a></li>
              <li><a href="#tabs-4">H2H</a></li>
              <li><a href="#tabs-5">Table</a></li>
              <li><a href="#tabs-6">News</a></li>
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
                          <svg id="ghi-ban" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0C6.41775 0 4.87104 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9977 5.87897 15.1541 3.84547 13.6543 2.34568C12.1545 0.845885 10.121 0.00229405 8 0V0ZM8.67534 2.77533C8.67511 2.71028 8.69393 2.64658 8.72947 2.59208C8.765 2.53759 8.81571 2.49469 8.87534 2.46867L10.7267 1.678C10.7703 1.65942 10.8173 1.65035 10.8647 1.65139C10.912 1.65242 10.9586 1.66354 11.0013 1.684C11.7706 2.05267 12.4664 2.55824 13.0547 3.176C13.0875 3.21024 13.1126 3.25109 13.1283 3.29581C13.1441 3.34053 13.1501 3.3881 13.146 3.43533L12.96 5.53667C12.9555 5.59217 12.9371 5.64565 12.9066 5.69223C12.8761 5.73881 12.8344 5.77701 12.7853 5.80333L11.496 6.49467C11.4407 6.52431 11.3781 6.53772 11.3154 6.53335C11.2528 6.52899 11.1927 6.50703 11.142 6.47L8.80867 4.77267C8.7662 4.74164 8.73168 4.701 8.70793 4.65407C8.68418 4.60714 8.67187 4.55526 8.672 4.50267L8.67534 2.77533ZM2.95934 3.15933C3.54636 2.54666 4.23956 2.04545 5.00534 1.68C5.04806 1.65954 5.09466 1.64842 5.14202 1.64739C5.18939 1.64635 5.23642 1.65542 5.28 1.674L7.13934 2.46667C7.19896 2.49269 7.24967 2.53559 7.28521 2.59008C7.32075 2.64458 7.33956 2.70828 7.33934 2.77333V4.50333C7.33887 4.55542 7.32621 4.60668 7.30236 4.65299C7.27851 4.6993 7.24414 4.73937 7.202 4.77L4.93534 6.422C4.88634 6.45791 4.82845 6.47975 4.76794 6.48516C4.70743 6.49056 4.64659 6.47933 4.592 6.45267L3.23934 5.792C3.1877 5.76684 3.14344 5.72876 3.11085 5.68145C3.07826 5.63414 3.05845 5.57922 3.05334 5.522L2.86667 3.41933C2.86265 3.37189 2.86884 3.32414 2.88483 3.27929C2.90081 3.23444 2.92622 3.19354 2.95934 3.15933ZM5.17867 11.0093L4.42734 11.848C4.38749 11.8924 4.33648 11.9252 4.27961 11.9432C4.22274 11.9611 4.16209 11.9635 4.104 11.95L2.05867 11.4787C2.01253 11.4681 1.96916 11.4478 1.93145 11.4192C1.89375 11.3906 1.86258 11.3543 1.84 11.3127C1.43946 10.5707 1.1774 9.76191 1.06667 8.926C1.06053 8.87986 1.06412 8.83295 1.07721 8.78829C1.0903 8.74362 1.1126 8.70219 1.14267 8.66667L2.426 7.18933C2.47565 7.13231 2.54321 7.09386 2.61759 7.08029C2.69197 7.06672 2.76875 7.07884 2.83534 7.11467L4.23534 7.866C4.31129 7.90651 4.36862 7.97484 4.39534 8.05667L5.24667 10.6873C5.26417 10.7423 5.2671 10.8009 5.25518 10.8573C5.24326 10.9138 5.2169 10.9661 5.17867 11.0093ZM10.512 13.0093L9.486 14.7273C9.46164 14.7682 9.42881 14.8034 9.38971 14.8306C9.35062 14.8577 9.30616 14.8761 9.25934 14.8847C8.43487 15.0347 7.5902 15.0358 6.76534 14.888C6.71839 14.8796 6.67381 14.8612 6.63459 14.834C6.59537 14.8069 6.56244 14.7716 6.538 14.7307L5.508 13.012C5.47141 12.9509 5.45535 12.8797 5.46219 12.8087C5.46903 12.7378 5.4984 12.671 5.546 12.618L6.29667 11.78C6.328 11.7451 6.36634 11.7172 6.40919 11.6981C6.45204 11.6791 6.49844 11.6692 6.54534 11.6693H9.474C9.52091 11.6692 9.5673 11.6791 9.61015 11.6981C9.653 11.7172 9.69134 11.7451 9.72267 11.78L10.4727 12.618C10.5201 12.6709 10.5494 12.7377 10.5562 12.8084C10.5631 12.8792 10.5471 12.9503 10.5107 13.0113L10.512 13.0093ZM14.1613 11.3107C14.1388 11.3523 14.1076 11.3886 14.0699 11.4172C14.0322 11.4458 13.9888 11.4661 13.9427 11.4767L11.8973 11.948C11.8392 11.9615 11.7786 11.9591 11.7217 11.9412C11.6649 11.9232 11.6138 11.8904 11.574 11.846L10.8227 11.0073C10.7841 10.9637 10.7576 10.9106 10.7459 10.8536C10.7342 10.7965 10.7377 10.7373 10.756 10.682L11.6073 8.05133C11.6341 7.9695 11.6914 7.90118 11.7673 7.86067L13.1673 7.10933C13.2338 7.07368 13.3105 7.06165 13.3847 7.07522C13.459 7.08878 13.5264 7.12713 13.576 7.184L14.8573 8.66667C14.8883 8.70237 14.9114 8.74425 14.9249 8.78954C14.9385 8.83482 14.9423 8.88248 14.936 8.92933C14.824 9.76427 14.5611 10.5719 14.16 11.3127L14.1613 11.3107Z" fill="white" />
                          </svg>
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
                          <svg id="the-vang" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                          <svg id="the-do" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                          <svg id="ghi-ban" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0C6.41775 0 4.87104 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9977 5.87897 15.1541 3.84547 13.6543 2.34568C12.1545 0.845885 10.121 0.00229405 8 0V0ZM8.67534 2.77533C8.67511 2.71028 8.69393 2.64658 8.72947 2.59208C8.765 2.53759 8.81571 2.49469 8.87534 2.46867L10.7267 1.678C10.7703 1.65942 10.8173 1.65035 10.8647 1.65139C10.912 1.65242 10.9586 1.66354 11.0013 1.684C11.7706 2.05267 12.4664 2.55824 13.0547 3.176C13.0875 3.21024 13.1126 3.25109 13.1283 3.29581C13.1441 3.34053 13.1501 3.3881 13.146 3.43533L12.96 5.53667C12.9555 5.59217 12.9371 5.64565 12.9066 5.69223C12.8761 5.73881 12.8344 5.77701 12.7853 5.80333L11.496 6.49467C11.4407 6.52431 11.3781 6.53772 11.3154 6.53335C11.2528 6.52899 11.1927 6.50703 11.142 6.47L8.80867 4.77267C8.7662 4.74164 8.73168 4.701 8.70793 4.65407C8.68418 4.60714 8.67187 4.55526 8.672 4.50267L8.67534 2.77533ZM2.95934 3.15933C3.54636 2.54666 4.23956 2.04545 5.00534 1.68C5.04806 1.65954 5.09466 1.64842 5.14202 1.64739C5.18939 1.64635 5.23642 1.65542 5.28 1.674L7.13934 2.46667C7.19896 2.49269 7.24967 2.53559 7.28521 2.59008C7.32075 2.64458 7.33956 2.70828 7.33934 2.77333V4.50333C7.33887 4.55542 7.32621 4.60668 7.30236 4.65299C7.27851 4.6993 7.24414 4.73937 7.202 4.77L4.93534 6.422C4.88634 6.45791 4.82845 6.47975 4.76794 6.48516C4.70743 6.49056 4.64659 6.47933 4.592 6.45267L3.23934 5.792C3.1877 5.76684 3.14344 5.72876 3.11085 5.68145C3.07826 5.63414 3.05845 5.57922 3.05334 5.522L2.86667 3.41933C2.86265 3.37189 2.86884 3.32414 2.88483 3.27929C2.90081 3.23444 2.92622 3.19354 2.95934 3.15933ZM5.17867 11.0093L4.42734 11.848C4.38749 11.8924 4.33648 11.9252 4.27961 11.9432C4.22274 11.9611 4.16209 11.9635 4.104 11.95L2.05867 11.4787C2.01253 11.4681 1.96916 11.4478 1.93145 11.4192C1.89375 11.3906 1.86258 11.3543 1.84 11.3127C1.43946 10.5707 1.1774 9.76191 1.06667 8.926C1.06053 8.87986 1.06412 8.83295 1.07721 8.78829C1.0903 8.74362 1.1126 8.70219 1.14267 8.66667L2.426 7.18933C2.47565 7.13231 2.54321 7.09386 2.61759 7.08029C2.69197 7.06672 2.76875 7.07884 2.83534 7.11467L4.23534 7.866C4.31129 7.90651 4.36862 7.97484 4.39534 8.05667L5.24667 10.6873C5.26417 10.7423 5.2671 10.8009 5.25518 10.8573C5.24326 10.9138 5.2169 10.9661 5.17867 11.0093ZM10.512 13.0093L9.486 14.7273C9.46164 14.7682 9.42881 14.8034 9.38971 14.8306C9.35062 14.8577 9.30616 14.8761 9.25934 14.8847C8.43487 15.0347 7.5902 15.0358 6.76534 14.888C6.71839 14.8796 6.67381 14.8612 6.63459 14.834C6.59537 14.8069 6.56244 14.7716 6.538 14.7307L5.508 13.012C5.47141 12.9509 5.45535 12.8797 5.46219 12.8087C5.46903 12.7378 5.4984 12.671 5.546 12.618L6.29667 11.78C6.328 11.7451 6.36634 11.7172 6.40919 11.6981C6.45204 11.6791 6.49844 11.6692 6.54534 11.6693H9.474C9.52091 11.6692 9.5673 11.6791 9.61015 11.6981C9.653 11.7172 9.69134 11.7451 9.72267 11.78L10.4727 12.618C10.5201 12.6709 10.5494 12.7377 10.5562 12.8084C10.5631 12.8792 10.5471 12.9503 10.5107 13.0113L10.512 13.0093ZM14.1613 11.3107C14.1388 11.3523 14.1076 11.3886 14.0699 11.4172C14.0322 11.4458 13.9888 11.4661 13.9427 11.4767L11.8973 11.948C11.8392 11.9615 11.7786 11.9591 11.7217 11.9412C11.6649 11.9232 11.6138 11.8904 11.574 11.846L10.8227 11.0073C10.7841 10.9637 10.7576 10.9106 10.7459 10.8536C10.7342 10.7965 10.7377 10.7373 10.756 10.682L11.6073 8.05133C11.6341 7.9695 11.6914 7.90118 11.7673 7.86067L13.1673 7.10933C13.2338 7.07368 13.3105 7.06165 13.3847 7.07522C13.459 7.08878 13.5264 7.12713 13.576 7.184L14.8573 8.66667C14.8883 8.70237 14.9114 8.74425 14.9249 8.78954C14.9385 8.83482 14.9423 8.88248 14.936 8.92933C14.824 9.76427 14.5611 10.5719 14.16 11.3127L14.1613 11.3107Z" fill="white" />
                          </svg>
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
                          <svg id="ghi-ban" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0C6.41775 0 4.87104 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9977 5.87897 15.1541 3.84547 13.6543 2.34568C12.1545 0.845885 10.121 0.00229405 8 0V0ZM8.67534 2.77533C8.67511 2.71028 8.69393 2.64658 8.72947 2.59208C8.765 2.53759 8.81571 2.49469 8.87534 2.46867L10.7267 1.678C10.7703 1.65942 10.8173 1.65035 10.8647 1.65139C10.912 1.65242 10.9586 1.66354 11.0013 1.684C11.7706 2.05267 12.4664 2.55824 13.0547 3.176C13.0875 3.21024 13.1126 3.25109 13.1283 3.29581C13.1441 3.34053 13.1501 3.3881 13.146 3.43533L12.96 5.53667C12.9555 5.59217 12.9371 5.64565 12.9066 5.69223C12.8761 5.73881 12.8344 5.77701 12.7853 5.80333L11.496 6.49467C11.4407 6.52431 11.3781 6.53772 11.3154 6.53335C11.2528 6.52899 11.1927 6.50703 11.142 6.47L8.80867 4.77267C8.7662 4.74164 8.73168 4.701 8.70793 4.65407C8.68418 4.60714 8.67187 4.55526 8.672 4.50267L8.67534 2.77533ZM2.95934 3.15933C3.54636 2.54666 4.23956 2.04545 5.00534 1.68C5.04806 1.65954 5.09466 1.64842 5.14202 1.64739C5.18939 1.64635 5.23642 1.65542 5.28 1.674L7.13934 2.46667C7.19896 2.49269 7.24967 2.53559 7.28521 2.59008C7.32075 2.64458 7.33956 2.70828 7.33934 2.77333V4.50333C7.33887 4.55542 7.32621 4.60668 7.30236 4.65299C7.27851 4.6993 7.24414 4.73937 7.202 4.77L4.93534 6.422C4.88634 6.45791 4.82845 6.47975 4.76794 6.48516C4.70743 6.49056 4.64659 6.47933 4.592 6.45267L3.23934 5.792C3.1877 5.76684 3.14344 5.72876 3.11085 5.68145C3.07826 5.63414 3.05845 5.57922 3.05334 5.522L2.86667 3.41933C2.86265 3.37189 2.86884 3.32414 2.88483 3.27929C2.90081 3.23444 2.92622 3.19354 2.95934 3.15933ZM5.17867 11.0093L4.42734 11.848C4.38749 11.8924 4.33648 11.9252 4.27961 11.9432C4.22274 11.9611 4.16209 11.9635 4.104 11.95L2.05867 11.4787C2.01253 11.4681 1.96916 11.4478 1.93145 11.4192C1.89375 11.3906 1.86258 11.3543 1.84 11.3127C1.43946 10.5707 1.1774 9.76191 1.06667 8.926C1.06053 8.87986 1.06412 8.83295 1.07721 8.78829C1.0903 8.74362 1.1126 8.70219 1.14267 8.66667L2.426 7.18933C2.47565 7.13231 2.54321 7.09386 2.61759 7.08029C2.69197 7.06672 2.76875 7.07884 2.83534 7.11467L4.23534 7.866C4.31129 7.90651 4.36862 7.97484 4.39534 8.05667L5.24667 10.6873C5.26417 10.7423 5.2671 10.8009 5.25518 10.8573C5.24326 10.9138 5.2169 10.9661 5.17867 11.0093ZM10.512 13.0093L9.486 14.7273C9.46164 14.7682 9.42881 14.8034 9.38971 14.8306C9.35062 14.8577 9.30616 14.8761 9.25934 14.8847C8.43487 15.0347 7.5902 15.0358 6.76534 14.888C6.71839 14.8796 6.67381 14.8612 6.63459 14.834C6.59537 14.8069 6.56244 14.7716 6.538 14.7307L5.508 13.012C5.47141 12.9509 5.45535 12.8797 5.46219 12.8087C5.46903 12.7378 5.4984 12.671 5.546 12.618L6.29667 11.78C6.328 11.7451 6.36634 11.7172 6.40919 11.6981C6.45204 11.6791 6.49844 11.6692 6.54534 11.6693H9.474C9.52091 11.6692 9.5673 11.6791 9.61015 11.6981C9.653 11.7172 9.69134 11.7451 9.72267 11.78L10.4727 12.618C10.5201 12.6709 10.5494 12.7377 10.5562 12.8084C10.5631 12.8792 10.5471 12.9503 10.5107 13.0113L10.512 13.0093ZM14.1613 11.3107C14.1388 11.3523 14.1076 11.3886 14.0699 11.4172C14.0322 11.4458 13.9888 11.4661 13.9427 11.4767L11.8973 11.948C11.8392 11.9615 11.7786 11.9591 11.7217 11.9412C11.6649 11.9232 11.6138 11.8904 11.574 11.846L10.8227 11.0073C10.7841 10.9637 10.7576 10.9106 10.7459 10.8536C10.7342 10.7965 10.7377 10.7373 10.756 10.682L11.6073 8.05133C11.6341 7.9695 11.6914 7.90118 11.7673 7.86067L13.1673 7.10933C13.2338 7.07368 13.3105 7.06165 13.3847 7.07522C13.459 7.08878 13.5264 7.12713 13.576 7.184L14.8573 8.66667C14.8883 8.70237 14.9114 8.74425 14.9249 8.78954C14.9385 8.83482 14.9423 8.88248 14.936 8.92933C14.824 9.76427 14.5611 10.5719 14.16 11.3127L14.1613 11.3107Z" fill="white" />
                          </svg>
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
                          <svg id="the-vang" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                          <svg id="ghi-ban" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0C6.41775 0 4.87104 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9977 5.87897 15.1541 3.84547 13.6543 2.34568C12.1545 0.845885 10.121 0.00229405 8 0V0ZM8.67534 2.77533C8.67511 2.71028 8.69393 2.64658 8.72947 2.59208C8.765 2.53759 8.81571 2.49469 8.87534 2.46867L10.7267 1.678C10.7703 1.65942 10.8173 1.65035 10.8647 1.65139C10.912 1.65242 10.9586 1.66354 11.0013 1.684C11.7706 2.05267 12.4664 2.55824 13.0547 3.176C13.0875 3.21024 13.1126 3.25109 13.1283 3.29581C13.1441 3.34053 13.1501 3.3881 13.146 3.43533L12.96 5.53667C12.9555 5.59217 12.9371 5.64565 12.9066 5.69223C12.8761 5.73881 12.8344 5.77701 12.7853 5.80333L11.496 6.49467C11.4407 6.52431 11.3781 6.53772 11.3154 6.53335C11.2528 6.52899 11.1927 6.50703 11.142 6.47L8.80867 4.77267C8.7662 4.74164 8.73168 4.701 8.70793 4.65407C8.68418 4.60714 8.67187 4.55526 8.672 4.50267L8.67534 2.77533ZM2.95934 3.15933C3.54636 2.54666 4.23956 2.04545 5.00534 1.68C5.04806 1.65954 5.09466 1.64842 5.14202 1.64739C5.18939 1.64635 5.23642 1.65542 5.28 1.674L7.13934 2.46667C7.19896 2.49269 7.24967 2.53559 7.28521 2.59008C7.32075 2.64458 7.33956 2.70828 7.33934 2.77333V4.50333C7.33887 4.55542 7.32621 4.60668 7.30236 4.65299C7.27851 4.6993 7.24414 4.73937 7.202 4.77L4.93534 6.422C4.88634 6.45791 4.82845 6.47975 4.76794 6.48516C4.70743 6.49056 4.64659 6.47933 4.592 6.45267L3.23934 5.792C3.1877 5.76684 3.14344 5.72876 3.11085 5.68145C3.07826 5.63414 3.05845 5.57922 3.05334 5.522L2.86667 3.41933C2.86265 3.37189 2.86884 3.32414 2.88483 3.27929C2.90081 3.23444 2.92622 3.19354 2.95934 3.15933ZM5.17867 11.0093L4.42734 11.848C4.38749 11.8924 4.33648 11.9252 4.27961 11.9432C4.22274 11.9611 4.16209 11.9635 4.104 11.95L2.05867 11.4787C2.01253 11.4681 1.96916 11.4478 1.93145 11.4192C1.89375 11.3906 1.86258 11.3543 1.84 11.3127C1.43946 10.5707 1.1774 9.76191 1.06667 8.926C1.06053 8.87986 1.06412 8.83295 1.07721 8.78829C1.0903 8.74362 1.1126 8.70219 1.14267 8.66667L2.426 7.18933C2.47565 7.13231 2.54321 7.09386 2.61759 7.08029C2.69197 7.06672 2.76875 7.07884 2.83534 7.11467L4.23534 7.866C4.31129 7.90651 4.36862 7.97484 4.39534 8.05667L5.24667 10.6873C5.26417 10.7423 5.2671 10.8009 5.25518 10.8573C5.24326 10.9138 5.2169 10.9661 5.17867 11.0093ZM10.512 13.0093L9.486 14.7273C9.46164 14.7682 9.42881 14.8034 9.38971 14.8306C9.35062 14.8577 9.30616 14.8761 9.25934 14.8847C8.43487 15.0347 7.5902 15.0358 6.76534 14.888C6.71839 14.8796 6.67381 14.8612 6.63459 14.834C6.59537 14.8069 6.56244 14.7716 6.538 14.7307L5.508 13.012C5.47141 12.9509 5.45535 12.8797 5.46219 12.8087C5.46903 12.7378 5.4984 12.671 5.546 12.618L6.29667 11.78C6.328 11.7451 6.36634 11.7172 6.40919 11.6981C6.45204 11.6791 6.49844 11.6692 6.54534 11.6693H9.474C9.52091 11.6692 9.5673 11.6791 9.61015 11.6981C9.653 11.7172 9.69134 11.7451 9.72267 11.78L10.4727 12.618C10.5201 12.6709 10.5494 12.7377 10.5562 12.8084C10.5631 12.8792 10.5471 12.9503 10.5107 13.0113L10.512 13.0093ZM14.1613 11.3107C14.1388 11.3523 14.1076 11.3886 14.0699 11.4172C14.0322 11.4458 13.9888 11.4661 13.9427 11.4767L11.8973 11.948C11.8392 11.9615 11.7786 11.9591 11.7217 11.9412C11.6649 11.9232 11.6138 11.8904 11.574 11.846L10.8227 11.0073C10.7841 10.9637 10.7576 10.9106 10.7459 10.8536C10.7342 10.7965 10.7377 10.7373 10.756 10.682L11.6073 8.05133C11.6341 7.9695 11.6914 7.90118 11.7673 7.86067L13.1673 7.10933C13.2338 7.07368 13.3105 7.06165 13.3847 7.07522C13.459 7.08878 13.5264 7.12713 13.576 7.184L14.8573 8.66667C14.8883 8.70237 14.9114 8.74425 14.9249 8.78954C14.9385 8.83482 14.9423 8.88248 14.936 8.92933C14.824 9.76427 14.5611 10.5719 14.16 11.3127L14.1613 11.3107Z" fill="white" />
                          </svg>
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
                      </div>
                      <span class="player-name">Marc-Andre </span>
                    </div>
                  </div>
                  <div class="match-line match-line-2 list-player">
                    <div class="player-item">
                      <div class="player-wrapper">
                        <div class="number">
                          <span>2</span>
                        </div>
                        <span class="player-name">Hector Bellerin</span>
                      </div>
                    </div>
                    <div class="player-item">
                      <div class="player-wrapper">
                        <span class="number">1</span>
                        <span class="player-name">Marc-Andre </span>
                      </div>
                    </div>
                    <div class="player-item">
                      <div class="player-wrapper">
                        <div class="number">
                          <span>13</span>
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
                            <span class="club-name">Manchester City</span>
                          </div>
                          <span class="score">0</span>
                        </div>
                        <div class="club-item">
                          <div class="club-info-wrapper">
                            <img src="./images/club-2.png" alt="">
                            <span class="club-name">Chelsea</span>
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
                            <span class="club-name">Manchester City</span>
                          </div>
                          <span class="score">0</span>
                        </div>
                        <div class="club-item">
                          <div class="club-info-wrapper">
                            <img src="./images/club-2.png" alt="">
                            <span class="club-name">Chelsea</span>
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
                            <span class="club-name">Manchester City</span>
                          </div>
                          <span class="score">0</span>
                        </div>
                        <div class="club-item">
                          <div class="club-info-wrapper">
                            <img src="./images/club-2.png" alt="">
                            <span class="club-name">Chelsea</span>
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
                            <span class="club-name">Manchester City</span>
                          </div>
                          <span class="score">0</span>
                        </div>
                        <div class="club-item">
                          <div class="club-info-wrapper">
                            <img src="./images/club-2.png" alt="">
                            <span class="club-name">Chelsea</span>
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
                            <span class="club-name">Manchester City</span>
                          </div>
                          <span class="score">0</span>
                        </div>
                        <div class="club-item">
                          <div class="club-info-wrapper">
                            <img src="./images/club-2.png" alt="">
                            <span class="club-name">Chelsea</span>
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

                <div class="table-row">
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