<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/menu.php"; ?>
  <div class="main-page-wrapper league-page-wrapper">
    <div class="container">
      <div class="league-content-wrapper">
        <div class="league-header">
          <img src="./images/league.png" alt="">
          <h3 class="league-name">Premier League</h3>
        </div>
        <div class="league-detail">
          <div class="left-content">
            <p class="league-description">Premier League fixtures on TV are shown on Sky Sports, BT Sport and Amazon Prime Video with 200 games shown live each season.
              Sky Sports show 128 Premier League TV fixtures, BT Sport show 52 matches
              and Amazon Prime show 20 live games.
            </p>
            <!-- Fixtures -->
            <div class="league-fixture__wrapper">
              <div class="league-fixture__header">
                <h4 class="title">Fixtures</h4>
                <div class="filter-wrapper">
                  <div class="calender-for-mobile">
                    <div class="control-wrapper">
                      <div class="time-detail">
                        <button class="btn-calender btn-prev">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_6023)">
                              <path d="M12.5 5L7.5 10L12.5 15" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1_6023">
                                <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)" />
                              </clipPath>
                            </defs>
                          </svg>
                        </button>
                        <span class="time-calender" id="time-calender"></span>
                        <button class="btn-calender btn-next">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_6022)">
                              <path d="M7.5 5L12.5 10L7.5 15" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1_6022">
                                <rect width="20" height="20" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                        </button>
                      </div>
                      <button class="btn-calender btn-show" id="btn-show-calender">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.9582 2.96663V1.66663C13.9582 1.32496 13.6749 1.04163 13.3332 1.04163C12.9915 1.04163 12.7082 1.32496 12.7082 1.66663V2.91663H7.29153V1.66663C7.29153 1.32496 7.0082 1.04163 6.66653 1.04163C6.32487 1.04163 6.04153 1.32496 6.04153 1.66663V2.96663C3.79153 3.17496 2.69987 4.51663 2.5332 6.50829C2.51653 6.74996 2.71653 6.94996 2.94987 6.94996H17.0499C17.2915 6.94996 17.4915 6.74163 17.4665 6.50829C17.2999 4.51663 16.2082 3.17496 13.9582 2.96663Z" fill="white" />
                          <path d="M16.6667 8.19995H3.33333C2.875 8.19995 2.5 8.57495 2.5 9.03328V14.1666C2.5 16.6666 3.75 18.3333 6.66667 18.3333H13.3333C16.25 18.3333 17.5 16.6666 17.5 14.1666V9.03328C17.5 8.57495 17.125 8.19995 16.6667 8.19995ZM7.675 15.175C7.59167 15.2499 7.5 15.3083 7.4 15.35C7.3 15.3916 7.19167 15.4166 7.08333 15.4166C6.975 15.4166 6.86667 15.3916 6.76667 15.35C6.66667 15.3083 6.575 15.2499 6.49167 15.175C6.34167 15.0166 6.25 14.8 6.25 14.5833C6.25 14.3666 6.34167 14.15 6.49167 13.9916C6.575 13.9166 6.66667 13.8583 6.76667 13.8166C6.96667 13.7333 7.2 13.7333 7.4 13.8166C7.5 13.8583 7.59167 13.9166 7.675 13.9916C7.825 14.15 7.91667 14.3666 7.91667 14.5833C7.91667 14.8 7.825 15.0166 7.675 15.175ZM7.85 11.9833C7.80833 12.0833 7.75 12.175 7.675 12.2583C7.59167 12.3333 7.5 12.3916 7.4 12.4333C7.3 12.475 7.19167 12.5 7.08333 12.5C6.975 12.5 6.86667 12.475 6.76667 12.4333C6.66667 12.3916 6.575 12.3333 6.49167 12.2583C6.41667 12.175 6.35833 12.0833 6.31667 11.9833C6.275 11.8833 6.25 11.775 6.25 11.6666C6.25 11.5583 6.275 11.45 6.31667 11.35C6.35833 11.25 6.41667 11.1583 6.49167 11.075C6.575 11 6.66667 10.9416 6.76667 10.9C6.96667 10.8166 7.2 10.8166 7.4 10.9C7.5 10.9416 7.59167 11 7.675 11.075C7.75 11.1583 7.80833 11.25 7.85 11.35C7.89167 11.45 7.91667 11.5583 7.91667 11.6666C7.91667 11.775 7.89167 11.8833 7.85 11.9833ZM10.5917 12.2583C10.5083 12.3333 10.4167 12.3916 10.3167 12.4333C10.2167 12.475 10.1083 12.5 10 12.5C9.89167 12.5 9.78333 12.475 9.68333 12.4333C9.58333 12.3916 9.49167 12.3333 9.40833 12.2583C9.25833 12.1 9.16667 11.8833 9.16667 11.6666C9.16667 11.45 9.25833 11.2333 9.40833 11.075C9.49167 11 9.58333 10.9416 9.68333 10.9C9.88333 10.8083 10.1167 10.8083 10.3167 10.9C10.4167 10.9416 10.5083 11 10.5917 11.075C10.7417 11.2333 10.8333 11.45 10.8333 11.6666C10.8333 11.8833 10.7417 12.1 10.5917 12.2583Z" fill="white" />
                        </svg>
                      </button>
                    </div>
                    <div id="datepicker-mobile" class="calendar"></div>
                  </div>
                </div>
              </div>
              <div class="league-fixture__table">
                <h5 class="table-heading">Match day 24 of 38</h5>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Manchester</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">5 : 0</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">5 : 0</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">5 : 0</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">5 : 0</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">5 : 0</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">5 : 0</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="league-fixture__table">
                <h5 class="table-heading">Match day 24 of 38</h5>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Manchester</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="league-fixture__table">
                <h5 class="table-heading">Match day 24 of 38</h5>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Manchester</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="column-20 text-left">
                    <span class="time">Sat, Sep 10 - 18:00</span>
                  </div>
                  <div class="column-80 text-center d-flex flex-center">
                    <div class="list-club">
                      <div class="club-item column-40">
                        <span class="club-name">Liverpool</span>
                        <img src="./images/mu-club.png" class="club-image" alt="">
                      </div>
                      <span class="score column-10">-</span>
                      <div class="club-item column-40">
                        <img src="./images/chesea-club.png" class="club-image" alt="">
                        <span class="club-name">Chelsea</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fixtures -->


            <!-- standing -->
            <div class="league-standing__wrapper">
              <h4 class="title">Standings</h4>
              <div class="league-stadinng-table">
                <div class="row-item table-heading">
                  <div class="team-info">
                    <div class="team-id">Team</div>
                    <div class="team-name"></div>
                  </div>
                  <div class="team-result">
                    <div class="result-detail">
                      <div class="detail-item">P</div>
                      <div class="detail-item">W</div>
                      <div class="detail-item">D</div>
                      <div class="detail-item">L</div>
                      <div class="detail-item">GF</div>
                      <div class="detail-item">GA</div>
                      <div class="detail-item">GD</div>
                      <div class="detail-item">Pts</div>
                    </div>
                    <div class="list-player">Form</div>
                  </div>
                </div>
                <div class="row-item table-row">
                  <div class="team-info">
                    <div class="team-id">
                      <span class="number yellow-number">1</span>
                    </div>
                    <div class="team-name">Manchester United</div>
                  </div>
                  <div class="team-result">
                    <div class="result-detail">
                      <div class="detail-item">1</div>
                      <div class="detail-item">2</div>
                      <div class="detail-item">33</div>
                      <div class="detail-item">45</div>
                      <div class="detail-item">8</div>
                      <div class="detail-item">9</div>
                      <div class="detail-item">+34</div>
                      <div class="detail-item">+12</div>
                    </div>
                    <div class="list-player">
                      <div class="player-item green">W</div>
                      <div class="player-item grey">D</div>
                      <div class="player-item orange">L</div>
                      <div class="player-item green">L</div>
                      <div class="player-item green">W</div>
                    </div>
                  </div>
                </div>

                <div class="row-item table-row">
                  <div class="team-info">
                    <div class="team-id">
                      <span class="number yellow-number">2</span>
                    </div>
                    <div class="team-name">Manchester United</div>
                  </div>
                  <div class="team-result">
                    <div class="result-detail">
                      <div class="detail-item">1</div>
                      <div class="detail-item">2</div>
                      <div class="detail-item">33</div>
                      <div class="detail-item">45</div>
                      <div class="detail-item">8</div>
                      <div class="detail-item">9</div>
                      <div class="detail-item">+34</div>
                      <div class="detail-item">+12</div>
                    </div>
                    <div class="list-player">
                      <div class="player-item green">W</div>
                      <div class="player-item grey">D</div>
                      <div class="player-item orange">L</div>
                      <div class="player-item green">L</div>
                      <div class="player-item green">W</div>
                    </div>
                  </div>
                </div>

                <div class="row-item table-row">
                  <div class="team-info">
                    <div class="team-id">
                      <span class="number red-number">3</span>
                    </div>
                    <div class="team-name">Manchester United</div>
                  </div>
                  <div class="team-result">
                    <div class="result-detail">
                      <div class="detail-item">1</div>
                      <div class="detail-item">2</div>
                      <div class="detail-item">33</div>
                      <div class="detail-item">45</div>
                      <div class="detail-item">8</div>
                      <div class="detail-item">9</div>
                      <div class="detail-item">+34</div>
                      <div class="detail-item">+12</div>
                    </div>
                    <div class="list-player">
                      <div class="player-item green">W</div>
                      <div class="player-item grey">D</div>
                      <div class="player-item orange">L</div>
                      <div class="player-item green">L</div>
                      <div class="player-item green">W</div>
                    </div>
                  </div>
                </div>


                <div class="row-item table-row">
                  <div class="team-info">
                    <div class="team-id">
                      <span class="number red-number">4</span>
                    </div>
                    <div class="team-name">Manchester United</div>
                  </div>
                  <div class="team-result">
                    <div class="result-detail">
                      <div class="detail-item">1</div>
                      <div class="detail-item">2</div>
                      <div class="detail-item">33</div>
                      <div class="detail-item">45</div>
                      <div class="detail-item">8</div>
                      <div class="detail-item">9</div>
                      <div class="detail-item">+34</div>
                      <div class="detail-item">+12</div>
                    </div>
                    <div class="list-player">
                      <div class="player-item green">W</div>
                      <div class="player-item grey">D</div>
                      <div class="player-item orange">L</div>
                      <div class="player-item green">L</div>
                      <div class="player-item green">W</div>
                    </div>
                  </div>
                </div>
                <div class="row-item table-row">
                  <div class="team-info">
                    <div class="team-id">
                      <span class="number">5</span>
                    </div>
                    <div class="team-name">Manchester United</div>
                  </div>
                  <div class="team-result">
                    <div class="result-detail">
                      <div class="detail-item">1</div>
                      <div class="detail-item">2</div>
                      <div class="detail-item">33</div>
                      <div class="detail-item">45</div>
                      <div class="detail-item">8</div>
                      <div class="detail-item">9</div>
                      <div class="detail-item">+34</div>
                      <div class="detail-item">+12</div>
                    </div>
                    <div class="list-player">
                      <div class="player-item green">W</div>
                      <div class="player-item grey">D</div>
                      <div class="player-item orange">L</div>
                      <div class="player-item green">L</div>
                      <div class="player-item green">W</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- standing -->
          </div>
          <div class="right-content">
            <div class="top-player__wrapper">
              <h3 class="top-player__title">Top Players</h3>
              <span class="top-player__description">Best rated players from recent matches</span>
              <div class="top-player__list-player">
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">1</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">2</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">3</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">4</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">5</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">6</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">7</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">8</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
                <div class="player-item">
                  <div class="player-info">
                    <span class="number">9</span>
                    <div class="player-detail">
                      <div class="player-image-wrapper">
                        <img src="./images/player.png" alt="" class="player-image">
                        <img src="./images/mu-club.png" alt="" class="club-image">
                      </div>
                      <div class="player-description">
                        <a href="#" target="">
                          <span class="player-name">Cody Gakpo</span>
                        </a>
                        <span class="club-name">Liverpool</span>
                      </div>
                    </div>
                  </div>
                  <span class="score">9.8</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>

</html>