// ========================================= 헤더 메뉴 (sub) ========================================= //
// ========================================= 헤더 메뉴 (sub) ========================================= //

// window 1px 이상 스크롤 시 헤더 클래스 active 추가

function scrollHeader() {
  if (window.scrollY > 1) {
    header.classList.add("active");
    headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo.svg`);
  } else {
    header.classList.remove("active");
    headLogo.setAttribute("src", `${domain}theme/hy/img/common/logo-w.svg`);
  }
}

window.addEventListener("load", scrollHeader);
window.addEventListener("scroll", scrollHeader);

// .menu-icon 클릭 시  html, body의 스크롤을 막는 기능을 추가 그리고 .mobile-menu가 active 클래스를 가지고 있다면 html, body의 스크롤을 풀어준다.
document.querySelector(".menu-icon").addEventListener("click", function () {
  if (document.querySelector(".mobile-menu").classList.contains("active")) {
    // html, body의 스크롤을 막는다.
    document.querySelector("html").style.overflow = "hidden";
  } else {
    // html, body의 스크롤을 풀어준다.
    document.querySelector("html").style.overflow = "auto";
  }
});

// ========================================= 헤더 메뉴 (sub) ========================================= //
// ========================================= 헤더 메뉴 (sub) ========================================= //

// ========================================= 의료진 이미지 반응형 aos.js ========================================= //
// ========================================= 의료진 이미지 반응형 aos.js ========================================= //

function setAnimationAttributes() {
  const dentists = document.querySelectorAll(".dentist .dentist-txt");

  dentists.forEach((dentist, index) => {
    if (window.innerWidth <= 900) {
      dentist.setAttribute("data-aos", "fade-up");
    } else {
      dentist.setAttribute("data-aos", index % 2 === 0 ? "fade-left" : "fade-right");
    }
  });
}

// window resize 혹은 load 시 setAnimationAttributes 함수 실행
window.addEventListener("load", setAnimationAttributes);
window.addEventListener("resize", setAnimationAttributes);

setAnimationAttributes();
AOS.init({
  easing: "ease-out-back",
  duration: 1500,
});

// ========================================= 의료진 이미지 반응형 aos.js ========================================= //
// ========================================= 의료진 이미지 반응형 aos.js ========================================= //

// ========================================= 시설 안내 슬라이드 ========================================= //
// ========================================= 시설 안내 슬라이드 ========================================= //

var galleryThumbs = new Swiper(".gallery-thumbs", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 5,
  freeMode: true,
  watchSlidesProgress: true,
});

var galleryTop = new Swiper(".gallery-top", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});

// ========================================= 시설 안내 슬라이드 ========================================= //
// ========================================= 시설 안내 슬라이드 ========================================= //
