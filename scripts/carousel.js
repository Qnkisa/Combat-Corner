var carousel = document.querySelector('.carousel');
var carouselInner = document.querySelector('.carousel-inner');
var carouselItems = document.querySelectorAll('.carousel-item');
var carouselControlPrev = document.querySelector('.carousel-control-prev');
var carouselControlNext = document.querySelector('.carousel-control-next');
var carouselIndicators = document.querySelectorAll('.carousel-indicators li');

var currentSlide = 0;
var slideInterval = setInterval(nextSlide,3000);

function nextSlide() {
  goToSlide(currentSlide+1);
}

function previousSlide() {
  goToSlide(currentSlide-1);
}

function goToSlide(n) {
  carouselItems[currentSlide].classList.remove('active');
  carouselIndicators[currentSlide].classList.remove('active');
  currentSlide = (n+carouselItems.length)%carouselItems.length;
  carouselItems[currentSlide].classList.add('active');
  carouselIndicators[currentSlide].classList.add('active');
}

carouselControlPrev.addEventListener('click', function() {
  previousSlide();
  clearInterval(slideInterval);
  slideInterval = setInterval(nextSlide,3000);
});

carouselControlNext.addEventListener('click', function() {
  nextSlide();
  clearInterval(slideInterval);
  slideInterval = setInterval(nextSlide,3000);
});