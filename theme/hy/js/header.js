// ========================================= 헤더 메뉴 ========================================= //
// ========================================= 헤더 메뉴 ========================================= //

// header .head-wrap .menu > ul > li > a 마우스 오버 시 .sub-menu 나타나게 하기
const menuItems = document.querySelectorAll(".menu > ul > li");
menuItems.forEach(function (menuItem) {
  menuItem.addEventListener("mouseover", function () {
    const subMenu = menuItem.querySelector(".sub-menu");
    menuItem.classList.add("active");
    subMenu.classList.add("active");
  });
  menuItem.addEventListener("mouseleave", function () {
    const subMenu = menuItem.querySelector(".sub-menu");
    menuItem.classList.remove("active");
    subMenu.classList.remove("active");
  });
});

// .menu-icon 클릭 시 .mobile-menu 클래스 토글 하기
const menuIcon = document.querySelector(".menu-icon");
const mobileMenu = document.querySelector(".mobile-menu");
menuIcon.addEventListener("click", function () {
  mobileMenu.classList.toggle("active");
  header.classList.toggle("menuon");

  //.head-logo img src가 logo.svg일 때 logo-w.svg로 변경
  if (headLogo.getAttribute("src") == `${domain}theme/hy/img/common/logo.svg`) {
    headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo-w.svg`);
  } else if (
    headLogo.getAttribute("src") == `${domain}theme/hy/img/common/logo.svg` ||
    window.scrollY > 1
  ) {
    headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo.svg`);
  } else if (
    headLogo.getAttribute("src") == `${domain}theme/hy/img/common/logo.svg` ||
    // fullpage.js 섹션이 2번째 이상일 때
    document.querySelector(".fp-section.active").getAttribute("data-index") > 1
  ) {
    headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo.svg`);
  }
});

// .mobile-menu-list > ul > li 클릭 시 해당 태그에 active 클래스 토글 하기
const mobileMenuItems = document.querySelectorAll(
  ".mobile-menu-list > ul > li"
);
mobileMenuItems.forEach(function (mobileMenuItem) {
  mobileMenuItem.addEventListener("click", function () {
    // 현재 클릭한 메뉴가 active 클래스를 가지고 있는지 확인
    const isActive = mobileMenuItem.classList.contains("active");
    // 모든 메뉴에서 active 클래스 제거
    mobileMenuItems.forEach(function (item) {
      item.classList.remove("active");
    });
    // 현재 클릭한 메뉴가 active 클래스를 가지고 있지 않다면, active 클래스 추가
    if (!isActive) {
      mobileMenuItem.classList.add("active");
    }
  });
});

// ========================================= 헤더 메뉴 ========================================= //
// ========================================= 헤더 메뉴 ========================================= //

// ========================================= 헤더 검색창 ========================================= //
// ========================================= 헤더 검색창 ========================================= //

const searchIcon = document.querySelector(".search-icon");
const searchForm = document.querySelector(".search-form");
const searchInput = document.querySelector(".search-input");
const searchButton = document.querySelector(".search-button");

// .search-icon 클릭 시 .search-form 나타나게 하기
searchIcon.addEventListener("click", function () {
  searchForm.classList.toggle("active");
  searchInput.focus();
});

// .search-input에서 엔터를 누르면 .search-button을 클릭하게 하기
searchInput.addEventListener("keyup", function (e) {
  if (e.key === "Enter") {
    searchButton.click();
  }
});

// searchForm에서 마우스가 2초 이상 벗어나면 searchForm을 숨기기 다만 searchForm이 focus 상태라면 숨기지 않기
let timer;
searchForm.addEventListener("mouseover", function () {
  clearTimeout(timer);
});
searchForm.addEventListener("mouseleave", function () {
  timer = setTimeout(function () {
    if (!searchForm.classList.contains("focus")) {
      searchForm.classList.remove("active");
    }
  }, 2000);
});

// ========================================= 헤더 검색창 ========================================= //
// ========================================= 헤더 검색창 ========================================= //
