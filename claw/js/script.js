$(document).ready(function() {
  let currentSlide = 0;
  const slides = $(".slide");
  const totalSlides = slides.length;
  const intervalTime = 3000;

  function showSlide(index) {
    slides.removeClass("active out");
    slides.eq(currentSlide).addClass("out");
    slides.eq(index).addClass("active");
    currentSlide = index;
  }

  function nextSlide() {
    const nextIndex = (currentSlide + 1) % totalSlides;
    showSlide(nextIndex);
  }

  function prevSlide() {
    const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(prevIndex);
  }

  function startSlideShow() {
    setInterval(nextSlide, intervalTime);
  }

  $(".slide").first().addClass("active");

  $("#next").click(function() {
    nextSlide();
  });

  $("#prev").click(function() {
    prevSlide();
  });

  startSlideShow();
});

//Paleta de cores

let selectedPalette = 1; // Paleta inicial

function changeColorPalette(palette) {
  selectedPalette = palette;
  const paletteModes = document.querySelector('.palette_modes');
  paletteModes.className = 'palette_modes palette_' + (selectedPalette === 1 ? 'green' : 'bred');
}

