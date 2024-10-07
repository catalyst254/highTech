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

document.addEventListener('DOMContentLoaded', (event) => {
    const header = document.querySelector('header');
    const scrollWatcher = () => {
      if (window.scrollY > 100) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', scrollWatcher);

    // Counting effect
    const countElements = document.querySelectorAll('.count');
    const speed = 200; // The lower the faster

    const counter = (target, element) => {
      const updateCount = () => {
        const count = +element.innerText;
        const inc = target / speed;

        if (count < target) {
          element.innerText = Math.ceil(count + inc);
          setTimeout(updateCount, 1);
        } else {
          element.innerText = target;
        }
      };

      updateCount();
    };

    const handleIntersection = (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          counter(target, entry.target);
          observer.unobserve(entry.target);
        }
      });
    };

    const observer = new IntersectionObserver(handleIntersection, {
      threshold: 0.5
    });

    countElements.forEach(el => observer.observe(el));
  });

  