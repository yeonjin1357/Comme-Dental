// ========================================= Fullpage.js ========================================= //
// ========================================= Fullpage.js ========================================= //

// fullpage.js를 사용
new fullpage("#fullpage", {
  autoScrolling: true,
  navigation: false,
  normalScrollElements: ".mobile-menu-wrap", // fullpage.js의 스크롤 기능이 작동하지 않아야 하는 요소들의 선택자를 지정
  licenseKey: "L32HH-J52OH-REEJK-9H957-MVXNO",
  anchors: [
    "section1",
    "section2",
    "section3",
    "section4",
    "section5",
    "section6",
  ],
  onLeave: function (origin, destination, direction) {
    //섹션을 이동할 때마다 이벤트를 발생시킨다.
    console.log(origin.index); // 현재 섹션
    console.log(destination.index); // 이동할 섹션
    console.log(direction); // 이동 방향
  },

  responsiveWidth: 900, // 900px 이하에서는 fullpage.js를 사용하지 않는다.
  afterResponsive: function (isResponsive) {
    // fullpage.js를 사용할지 말지 결정할 때 발생하는 이벤트
    console.log(isResponsive); // true: 사용하지 않음, false: 사용함
  },
  // custom-nav 클릭 시 active 추가
  afterLoad: function (origin, destination, direction) {
    const header = document.querySelector("header");
    const headLogo = document.querySelector(".head-logo img");
    const nav = document.querySelector(".custom-nav");
    const navItems = nav.querySelectorAll("li");
    const navItem = navItems[destination.index];

    if (destination.index === 0) {
      header.classList.remove("active");
      headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo-w.svg`);
      nav.classList.remove("active");
    } else {
      header.classList.add("active");
      headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo.svg`);
      nav.classList.add("active");
    }
    navItems.forEach(function (item) {
      item.classList.remove("active");
    });
    navItem.classList.add("active");
  },

  // fullpage.js에 유용한 함수
  // fullpage_api.moveSectionDown(); // 다음 섹션으로 이동
  // fullpage_api.moveSectionUp(); // 이전 섹션으로 이동
  // fullpage_api.moveTo(1); // 1번 섹션으로 이동
  // fullpage_api.moveSlideRight(); // 다음 슬라이드로 이동
  // fullpage_api.moveSlideLeft(); // 이전 슬라이드로 이동
  // fullpage_api.reBuild(); // fullpage.js를 초기화한다.
});

// ========================================= Fullpage.js ========================================= //
// ========================================= Fullpage.js ========================================= //

// ========================================= Swiper.js ========================================= //
// ========================================= Swiper.js ========================================= //

// 스크롤을 내릴 때 마다 header의 top 값이 1씩 감소한다.
// window.addEventListener("scroll", function () {
//   const scroll = window.scrollY;
//   header.style.top = -scroll + "px";
// });

// swiper.js를 사용
const swiper = new Swiper(".swiper-container", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: "auto",
  loop: true,
  loopAdditionalSlides: 1,
  autoplay: {
    delay: 8000,
    disableOnInteraction: false, // false-스와이프 후 자동 재생
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  speed: 1000,
  observer: true,
  observeParents: true,

  on: {
    //swiper 슬라이드가 변경될 때마다 이벤트를 발생시킨다.
    slideChange: function () {
      console.log(this.realIndex); // 현재 슬라이드 번호
    },
    //swiper 슬라이드가 변경되고 나서 이벤트를 발생시킨다.
    slideChangeTransitionEnd: function () {},
  },
});

// ========================================= Swiper.js ========================================= //
// ========================================= Swiper.js ========================================= //

// ========================================= 헤더 메뉴 (main) ========================================= //
// ========================================= 헤더 메뉴 (main) ========================================= //

// 이벤트 핸들러 함수
document.querySelector(".menu-icon").addEventListener("click", function () {
  // mobile-menu가 active 클래스를 가지고 있다면 autoScrolling을 true로 설정한다.
  if (document.querySelector(".mobile-menu").classList.contains("active")) {
    // fullpage_api.setAllowScrolling(true);
    // html, body의 스크롤을 풀어준다.
    document.querySelector("html").style.overflow = "auto";
  } else {
    // fullpage_api.setAllowScrolling(false);
    // html, body의 스크롤을 막는다.
    document.querySelector("html").style.overflow = "hidden";
  }
});

// window resize를 했는데 900px 이하일 때 .mobile-menu가 active 클래스를 가지고 있다면 html, body의 스크롤을 막는다.
window.addEventListener("resize", function () {
  if (window.innerWidth < 900) {
    if (document.querySelector(".mobile-menu").classList.contains("active")) {
      // html, body의 스크롤을 막는다.
      document.querySelector("html").style.overflow = "hidden";
    }
  }
});

// .menu-icon 클릭 시 디바이스 크기가 900px 이하일 때 html, body의 스크롤을 막는 기능을 추가 그리고 .mobile-menu가 active 클래스를 가지고 있다면 html, body의 스크롤을 풀어준다.
document.querySelector(".menu-icon").addEventListener("click", function () {
  if (window.innerWidth < 900) {
    if (document.querySelector(".mobile-menu").classList.contains("active")) {
      // html, body의 스크롤을 막는다.
      document.querySelector("html").style.overflow = "hidden";
    } else {
      // html, body의 스크롤을 풀어준다.
      document.querySelector("html").style.overflow = "auto";
    }
  }
});

// 디바이스 크기 900px 이하일 때 window 1px 이상 스크롤 시 헤더 클래스 active 추가

window.addEventListener("scroll", function () {
  if (window.innerWidth < 900) {
    if (window.scrollY > 1) {
      header.classList.add("active");
      headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo.svg`);
    } else {
      header.classList.remove("active");
      headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo-w.svg`);
    }
  }
});

// ========================================= 헤더 메뉴 (main) ========================================= //
// ========================================= 헤더 메뉴 (main) ========================================= //

// =========================================== Area 2 =========================================== //
// =========================================== Area 2 =========================================== //

const treatmentList = document.querySelectorAll(".treatment > li");

treatmentList.forEach(function (treatment) {
  // .treatment > li 마우스오버 시 active 클래스 추가
  treatment.addEventListener("mouseover", function () {
    treatment.classList.add("active");
  });
  // .treatment > li 마우스리브 시 active 클래스 제거
  treatment.addEventListener("mouseleave", function () {
    treatment.classList.remove("active");
  });

  // .treatment > li 각 요소 클릭 시 alert 각각 다른 창 띄우기
  treatment.addEventListener("click", function () {
    const treatmentName =
      treatment.querySelector(".treatment-text h3").textContent;
    alert(`${treatmentName}을(를) 선택하셨습니다.`);
  });
});

// .treatment > li 2초마다 하나씩 순차적으로 mobile-active 클래스 추가하고 나머지 제거
let treatmentIndex = 0;
setInterval(function () {
  treatmentList.forEach(function (treatment) {
    treatment.classList.remove("mobile-active");
  });
  treatmentList[treatmentIndex].classList.add("mobile-active");
  treatmentIndex++;
  if (treatmentIndex === treatmentList.length) {
    treatmentIndex = 0;
  }
}, 3000);

// =========================================== Area 2 =========================================== //
// =========================================== Area 2 =========================================== //

// =========================================== Area 3 =========================================== //
// =========================================== Area 3 =========================================== //

// circleType.js
const logoCircle = document.querySelector(".logo-circle");
let circleType = new CircleType(logoCircle);

window.addEventListener("resize", function () {
  const logoCircleDiv = document.querySelector(".logo-circle > div");
  if (window.innerWidth <= 769) {
    logoCircleDiv.style.height = "114.086px";
  } else {
    logoCircleDiv.style.height = "162.935px";
  }
});

// =========================================== Area 3 =========================================== //
// =========================================== Area 3 =========================================== //

// ========================================= 그 외 코드 ========================================= //
// ========================================= 그 외 코드 ========================================= //

// window resize를 했는데 480px 이하일 때 .custom-nav close 클래스 추가
window.addEventListener("resize", function () {
  if (window.innerWidth < 480) {
    document.querySelector(".custom-nav").classList.add("close");
  } else {
    document.querySelector(".custom-nav").classList.remove("close");
  }
});

// ========================================= 그 외 코드 ========================================= //
// ========================================= 그 외 코드 ========================================= //
