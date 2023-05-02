// ========================================= 전역변수 선언 ========================================= //
// ========================================= 전역변수 선언 ========================================= //

const domain = "http://test.rokicon.gethompy.com/fullpage/www/";

const header = document.querySelector("header");
const headLogo = document.querySelector(".head-logo img");

// ========================================= 전역변수 선언 ========================================= //
// ========================================= 전역변수 선언 ========================================= //

// ========================================= 그 외 코드 ========================================= //
// ========================================= 그 외 코드 ========================================= //

// 모바일에서 100vh 오류를 해결하기 위한 코드
const vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);

window.addEventListener("resize", () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
});

window.addEventListener("touchend", () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
});

// aos.js 실행
AOS.init({
  easing: "ease-out-back",
  duration: 1500,
});

window.addEventListener("load", AOS.refresh);

// ========================================= 그 외 코드 ========================================= //
// ========================================= 그 외 코드 ========================================= //
