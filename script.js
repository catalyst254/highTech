document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger-menu');
    const nav = document.querySelector('nav');
    hamburger.addEventListener('click', function() {
        nav.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    const animatedBg = document.querySelector('.animated-bg');
    for (let i = 0; i < 50; i++) {
        let span = document.createElement('span');
        span.style.left = Math.random() * window.innerWidth + 'px';
        span.style.top = Math.random() * window.innerHeight + 'px';
        span.style.width = Math.random() * 30 + 10 + 'px';
        span.style.height = span.style.width;
        span.style.animationDelay = Math.random() * 5 + 's';
        span.style.animationDuration = Math.random() * 20 + 10 + 's';
        animatedBg.appendChild(span);
    }
});

let slideIndex = 1;
showSlides(slideIndex);

function changeSlide(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

setInterval(() => changeSlide(1), 5000);


document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.querySelector('.story-carousel');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  let currentIndex = 0;

  function showStory(index) {
    const offset = index * carousel.offsetWidth;
    carousel.scrollTo({
      left: offset,
      behavior: 'smooth'
    });
  }

  prevBtn.addEventListener('click', () => {
    currentIndex = Math.max(currentIndex - 1, 0);
    showStory(currentIndex);
  });

  nextBtn.addEventListener('click', () => {
    currentIndex = Math.min(currentIndex + 1, carousel.children.length - 1);
    showStory(currentIndex);
  });
});

document.querySelectorAll('.question').forEach(question => {
      question.addEventListener('click', () => {
        const item = question.parentNode;
        item.classList.toggle('active');
      });
    });
    
    document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('main-header');
  const topBar = document.querySelector('.top-bar');
  const hamburger = document.querySelector('.hamburger-menu');
  const nav = document.querySelector('nav');
  let lastScrollTop = 0, ticking = false;

  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        updateHeader();
        ticking = false;
      });
      ticking = true;
    }
  });

  window.addEventListener('resize', updateHeader);
  updateHeader();


});

      var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
          }
        },
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
      });

      document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');
        const topBar = document.querySelector('.top-bar');
        let headerHeight = header.offsetHeight;
        let topBarHeight = topBar.offsetHeight;
        let lastScrollTop = 0;
    
        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
            if (scrollTop > lastScrollTop && scrollTop > headerHeight) {
                // Scrolling down
                header.style.position = 'fixed';
                header.style.top = '0';
                header.style.left = '0';
                header.style.right = '0';
                header.style.zIndex = '1000';
                topBar.style.marginBottom = headerHeight + 'px';
            } else if (scrollTop <= headerHeight) {
                // Scrolled back to top
                header.style.position = 'static';
                topBar.style.marginBottom = '0';
            }
    
            lastScrollTop = scrollTop;
        });
    });
      
    document.addEventListener('DOMContentLoaded', function() {
      const readMoreLinks = document.querySelectorAll('.learn-more');
      
      readMoreLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const article = this.closest('.insight-item');
          const content = article.querySelector('.read-more-content');
          const span = this.querySelector('span');
          
          if (content.style.display === 'none') {
            content.style.display = 'block';
            span.textContent = 'Read Less';
          } else {
            content.style.display = 'none';
            span.textContent = 'Read More';
          }
        });
      });
    });