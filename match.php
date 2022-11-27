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
            <ul class="sub-nav">
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
                          <img src="./images/icon-ball.png" alt="icon-ghi-ban"/>
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
                        <img src="./images/icon-ball.png" alt="icon-ghi-ban"/>
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
                        <img src="./images/icon-ball.png" alt="icon-ghi-ban"/>
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
                        <img src="./images/icon-ball.png" alt="icon-ghi-ban"/>
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
                            <span class="club-name txt-h2h-common">Manchester City Manchester City Manchester City Manchester City</span>
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