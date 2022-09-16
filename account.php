<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <?php include "templates/menu.php"; ?>
  <div class="account-page-wrapper">
    <div class="container">
      <h3 class="title">Account</h3>
      <div class="account-header">
        <div class="user-info-wrapper">
          <div class="upload">
            <button type="button" class="btn-upload">
              <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M31.9737 11.4334C32.047 11.5616 32.1753 11.6532 32.3403 11.6532C36.7403 11.6532 40.3337 15.2425 40.3337 19.6376V30.5155C40.3337 34.9107 36.7403 38.5 32.3403 38.5H11.6603C7.24199 38.5 3.66699 34.9107 3.66699 30.5155V19.6376C3.66699 15.2425 7.24199 11.6532 11.6603 11.6532C11.807 11.6532 11.9537 11.5799 12.0087 11.4334L12.1187 11.2137C12.1819 11.0806 12.2468 10.9439 12.3127 10.8051C12.7817 9.81725 13.3005 8.72442 13.622 8.08213C14.4653 6.43396 15.8953 5.51831 17.6737 5.5H26.3087C28.087 5.51831 29.5353 6.43396 30.3787 8.08213C30.6674 8.65898 31.1073 9.58816 31.5313 10.4837C31.6188 10.6686 31.7057 10.852 31.7903 11.0305L31.9737 11.4334ZM30.6353 18.4655C30.6353 19.3812 31.3686 20.1137 32.2853 20.1137C33.202 20.1137 33.9536 19.3812 33.9536 18.4655C33.9536 17.5499 33.202 16.799 32.2853 16.799C31.3686 16.799 30.6353 17.5499 30.6353 18.4655ZM18.8283 21.304C19.6899 20.4433 20.8083 19.9855 21.9999 19.9855C23.1916 19.9855 24.3099 20.4433 25.1533 21.2857C25.9966 22.1281 26.4549 23.2452 26.4549 24.4355C26.4366 26.8895 24.4566 28.8856 21.9999 28.8856C20.8083 28.8856 19.6899 28.4278 18.8466 27.5854C18.0033 26.743 17.5449 25.6259 17.5449 24.4355V24.4172C17.5266 23.2635 17.9849 22.1464 18.8283 21.304ZM27.0782 29.5266C25.7765 30.8268 23.9799 31.6326 21.9998 31.6326C20.0748 31.6326 18.2782 30.8818 16.9032 29.5266C15.5465 28.1531 14.7948 26.3584 14.7948 24.4356C14.7765 22.531 15.5282 20.7364 16.8848 19.3629C18.2598 17.9894 20.0748 17.2386 21.9998 17.2386C23.9249 17.2386 25.7399 17.9894 27.0965 19.3446C28.4532 20.718 29.2049 22.531 29.2049 24.4356C29.1865 26.4317 28.3799 28.2264 27.0782 29.5266Z" fill="#1A202C" />
                </g>
              </svg>
              <input type="file" value="" name=""  />
            </button>
          </div>
          <div class="info-detail">
            <h4 class="username">David</h4>
            <p class="line">
              <span class="email">David@gmail.com</span>
              <a href="#" target class="text-link">Verify email</a>
            </p>
            <p class="line">
              <a href="#" target="" class="text-link">Change password</a>
            </p>
          </div>
        </div>
        <button class="btn-log-out">Log out</button>
      </div>

      <div class="transaction-wrapper">
         <h4 class="transaction-title">Transaction history</h4>
         <div class="list-transaction">
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15 - 3 months</div>
            <div class="column-item">Paypal</div>
          </div>

          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15 - 3 months</div>
            <div class="column-item">Visa</div>
          </div>

          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15 - 3 months</div>
            <div class="column-item">Paypal</div>
          </div>


          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15 - 3 months</div>
            <div class="column-item">Visa</div>
          </div>
         </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer2.php"; ?>
</body>


</html>