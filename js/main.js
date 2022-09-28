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
  $(".datepicker-mobile").hide()
  $(".btn-calender").on("click", function (event) {
    $(".datepicker-mobile").toggle()
    $(".datepicker-mobile").datepicker({
      firstDay: 1,
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: "dd/mm/yy",
      onSelect: function (date, datepicker) {
        if (date) {
          // handle select datetime here
          $("#datepicker-mobile").hide();
        }
      },
    });
  });
});

// =======HANDLE DATEPICKER FOR MOBILE ========

// ===========HANDLE CLICK TAB LEFT SIDEBAR FOR PC =======
function openTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
const nodeDefault = document.getElementById("defaultOpen");
if (nodeDefault) {
  nodeDefault.click();
}

// ===========HANDLE CLICK TAB LEFT SIDEBAR FOR PC =======

// ===========HANDLE OPEN TAB LEFT SIDEBAR FOR MOBILE (select league)=======
$(".list-league-dropdown").hide();
$("#btn-league-dropdown").on("click", function () {
  $("#datepicker-mobile").hide();
  $(".list-league-dropdown").toggle();
});

// handle click league for mobile
$(".league-dropdown-item").on("click", function () {
  const imgElement = $(this).children("img");
  const spanElement = $(this).children("span");
  if (imgElement.length && spanElement.length) {
    const src = imgElement.attr("src");
    const leagueName = spanElement.text();
    $("#league-image-mobile").attr("src", src);
    $("#league-name-mobile").text(leagueName);
  }
  $(".list-league-dropdown").hide();
  //code something here .....
});

// =================== HANDLE SELECT LEAGUE RANKING ===================

// hidden list league ranking when init
$(".list-league-ranking-dropdown").hide();

// toggle show list league ranking when click.
$("#btn-league-ranking-dropdown").on("click", function () {
  $(".list-league-ranking-dropdown").toggle();
});

// handle click league for mobile
$(".league-ranking-item").on("click", function () {
  const imgElement = $(this).children("img");
  const spanElement = $(this).children("span");
  if (imgElement.length && spanElement.length) {
    const src = imgElement.attr("src");
    const leagueName = spanElement.text();
    $("#league-ranking-image").attr("src", src);
    $("#league-ranking-name").text(leagueName);
  }
  $(".list-league-ranking-dropdown").hide();
  // code something here .....
});
// =================== HANDLE SELECT LEAGUE RANKING ===================
