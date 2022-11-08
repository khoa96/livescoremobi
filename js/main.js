$(function () {
  // ========HANDLE TOGGLE SHOW MENU ========
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");
  const navLink = document.querySelectorAll(".nav-link");

  hamburger.addEventListener("click", mobileMenu);
  navLink.forEach((n) => n.addEventListener("click", closeMenu));

  function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
  }

  function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  }
  // ========HANDLE TOGGLE SHOW MENU ========

  // =======HANDLE DATEPICKER FOR PC ========
  $("#datepicker").datepicker({
    firstDay: 1,
    showOtherMonths: true,
    selectOtherMonths: true,
    dateFormat: "dd-mm-yy",
    onSelect: function (date, datepicker) {
      if (date) {
        // handle select datetime here
      }
    },
  });
  // =======HANDLE DATEPICKER FOR PC ========

  // =======HANDLE DATEPICKER FOR MOBILE ========
  $("#datepicker-mobile").hide();
  // handle datepicker for mobile
  function padTo2Digits(num) {
    return num.toString().padStart(2, "0");
  }

  function formatDate(date = new Date()) {
    return [
      padTo2Digits(date.getDate()),
      padTo2Digits(date.getMonth() + 1),
      date.getFullYear(),
    ].join("/");
  }
  const date = new Date();
  $("#time-calender").text(formatDate());
  $(".datepicker-mobile").hide();
  $(".btn-calender").on("click", function (event) {
    $(".datepicker-mobile").toggle();
    $(".datepicker-mobile").datepicker({
      firstDay: 1,
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: "dd/mm/yy",
      onSelect: function (date, datepicker) {
        if (date) {
          // handle select datetime here
          $(".datepicker-mobile").hide();
          // code  here
        }
      },
    });
  });
});

// handle click outside date picker
$(document).mouseup(function (e) {
  const container = $(".datepicker-mobile");
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    container.hide();
  }
});
// =======HANDLE DATEPICKER FOR MOBILE ========


//  ========SUPPORT GAP PROPERTY =======
$(function () {
  function checkFlexGap() {
    // create flex container with row-gap set
    var flex = document.createElement("div");
    flex.style.display = "flex";
    flex.style.flexDirection = "column";
    flex.style.rowGap = "1px";

    // create two, elements inside it
    flex.appendChild(document.createElement("div"));
    flex.appendChild(document.createElement("div"));

    // append to the DOM (needed to obtain scrollHeight)
    document.body.appendChild(flex);
    var isSupported = flex.scrollHeight === 1; // flex container should be 1px high from the row-gap
    flex.parentNode.removeChild(flex);

    return isSupported;
  }

  const isSupportGap = checkFlexGap();
  function detectBrowser() {
    if (
      (navigator.userAgent.indexOf("Opera") ||
        navigator.userAgent.indexOf("OPR")) != -1
    ) {
      return "Opera";
    } else if (navigator.userAgent.indexOf("Chrome") != -1) {
      return "Chrome";
    } else if (navigator.userAgent.indexOf("Safari") != -1) {
      return "Safari";
    } else if (navigator.userAgent.indexOf("Firefox") != -1) {
      return "Firefox";
    } else if (
      navigator.userAgent.indexOf("MSIE") != -1 ||
      !!document.documentMode == true
    ) {
      return "IE"; //crap
    } else {
      return "Unknown";
    }
  }
  const browerName = detectBrowser();
  console.log('browerName ====', browerName, 'isSupportGap ====', isSupportGap)
  if (!isSupportGap || browerName === "Safari") {
    // support safari cannot support gap css property
    console.log('======cal here ====')
    $("*").each(function () {
      const displayPro = $(this).css("display");
      const rowGap = $(this).css("row-gap");
      const columnGap = $(this).css("column-gap");
      const directionPro = $(this).css("flexDirection");
      if (
        displayPro === "flex" &&
        (rowGap !== "normal" || columnGap !== "normal")
      ) {
        const parent = $(this);
        parent.children().each(function (index) {
          if (directionPro === "row") {
            $(this).css("margin-right", columnGap);
          } else if (directionPro === "column") {
            $(this).css("margin-bottom", rowGap);
          }
        });
      }
    });
  }
});

