document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider-press");
  const dotsContainer = document.querySelector(".slider-dots-press");
  const slides = document.querySelectorAll(".slide-press");
  let currentIndex = 0;
  let dotCount

  if (screen.width < 768) {
    dotCount = slides.length;
  } else {
    dotCount = 2;
  }

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  function createDots() {
    for (let i = 0; i < dotCount; i++) {
      const dot = document.createElement("span");
      dot.classList.add("slider-dot-press");
      dot.addEventListener("click", () => {
        currentIndex = i;
        updateSlider();
        updateDots();
      });
      dotsContainer.appendChild(dot);
    }
  }

  function updateDots() {
    const dots = document.querySelectorAll(".slider-dot-press");
    dots.forEach((dot, index) => {
      if (index === currentIndex) {
        dot.classList.add("active");
      } else {
        dot.classList.remove("active");
      }
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % dotCount;
    updateSlider();
    updateDots();
  }

  createDots();
  updateDots();
  setInterval(nextSlide, 5000);
});


function toggle(element) {
  element.classList.toggle("change");
}



const slider = document.querySelector('.slider-gallery');
const dotsContainer = document.querySelector('.slider-dots-gallery');
const slides = Array.from(document.querySelectorAll('.slide-gallery'));
const dots = [];

let currentSlide = 0;

function updateSlider() {
  slider.style.transform = `translateX(-${currentSlide * 100}%)`;
  dots.forEach((dot, index) => {
    dot.classList.toggle('active', index === currentSlide);
  });
}

slides.forEach(() => {
  const dot = document.createElement('div');
  dot.classList.add('dot-gallery');
  dotsContainer.appendChild(dot);
  dots.push(dot);

  dot.addEventListener('click', () => {
    currentSlide = dots.indexOf(dot);
    updateSlider();
  });
});

updateSlider();

slides[0].classList.add('active');


console.log('hola ')