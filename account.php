<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="page-header">
    <div class="container">
      <h3 class="title">Account</h3>
    </div>
  </div>
  <div class="account-page-wrapper">
    <div class="container">
      <div class="account-conntrol">
        <button class="btn-log-out">Log out</button>
      </div>
      <div class="account-header">
        <div class="user-info-wrapper">
          <div class="upload">
            <button type="button" class="btn-upload">
              <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.9732 11.4334C32.0465 11.5616 32.1748 11.6532 32.3398 11.6532C36.7398 11.6532 40.3332 15.2425 40.3332 19.6376V30.5155C40.3332 34.9107 36.7398 38.5 32.3398 38.5H11.6598C7.2415 38.5 3.6665 34.9107 3.6665 30.5155V19.6376C3.6665 15.2425 7.2415 11.6532 11.6598 11.6532C11.8065 11.6532 11.9532 11.5799 12.0082 11.4334L12.1182 11.2137C12.1814 11.0806 12.2463 10.9439 12.3122 10.8051C12.7812 9.81725 13.3 8.72442 13.6215 8.08213C14.4648 6.43396 15.8948 5.51831 17.6732 5.5H26.3082C28.0865 5.51831 29.5348 6.43396 30.3782 8.08213C30.6669 8.65898 31.1068 9.58816 31.5308 10.4837C31.6183 10.6686 31.7052 10.852 31.7898 11.0305L31.9732 11.4334ZM30.6348 18.4655C30.6348 19.3812 31.3681 20.1137 32.2848 20.1137C33.2015 20.1137 33.9531 19.3812 33.9531 18.4655C33.9531 17.5499 33.2015 16.799 32.2848 16.799C31.3681 16.799 30.6348 17.5499 30.6348 18.4655ZM18.8278 21.304C19.6895 20.4433 20.8078 19.9855 21.9995 19.9855C23.1911 19.9855 24.3095 20.4433 25.1528 21.2857C25.9961 22.1281 26.4545 23.2452 26.4545 24.4355C26.4361 26.8895 24.4561 28.8856 21.9995 28.8856C20.8078 28.8856 19.6895 28.4278 18.8461 27.5854C18.0028 26.743 17.5445 25.6259 17.5445 24.4355V24.4172C17.5261 23.2635 17.9845 22.1464 18.8278 21.304ZM27.0777 29.5266C25.776 30.8268 23.9794 31.6326 21.9994 31.6326C20.0744 31.6326 18.2777 30.8818 16.9027 29.5266C15.546 28.1531 14.7944 26.3584 14.7944 24.4356C14.776 22.531 15.5277 20.7364 16.8844 19.3629C18.2594 17.9894 20.0744 17.2386 21.9994 17.2386C23.9244 17.2386 25.7394 17.9894 27.096 19.3446C28.4527 20.718 29.2044 22.531 29.2044 24.4356C29.186 26.4317 28.3794 28.2264 27.0777 29.5266Z" fill="white" />
              </svg>
              <input type="file" value="" name="" />
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
      </div>

     <div class="main-account-content">
     <div class="transaction-wrapper">
        <h4 class="transaction-title">Transaction history</h4>
        <div class="list-transaction">
          <div class="table-row table-heading">
            <div class="column-item">Date of purchase</div>
            <div class="column-item">Amount</div>
            <div class="column-item">Plan</div>
            <div class="column-item">Payment method</div>
            <div class="column-item">Transaction ID</div>
            <div class="column-item">&nbsp;</div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
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