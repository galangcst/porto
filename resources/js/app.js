import './bootstrap';

/* ===== Experience tabs ===== */
(function tabs() {
  const tabBtns = document.querySelectorAll('.tab');
  const panels = document.querySelectorAll('.panel');
  tabBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const idx = +btn.dataset.tab;
      tabBtns.forEach((b) => b.classList.remove('active'));
      panels.forEach((p) => p.classList.remove('active'));
      btn.classList.add('active');
      panels[idx].classList.add('active');
    });
  });
})();

/* ===== Mobile menu ===== */
(function mobileMenu() {
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('mobile-menu');
  toggle.addEventListener('click', () => {
    toggle.classList.toggle('open');
    menu.classList.toggle('open');
  });
  menu.querySelectorAll('a').forEach((a) =>
    a.addEventListener('click', () => {
      toggle.classList.remove('open');
      menu.classList.remove('open');
    })
  );
})();

/* ===== Header shadow on scroll ===== */
(function headerScroll() {
  const header = document.getElementById('header');
  const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 40);
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();

/* ===== Reveal on scroll ===== */
(function reveal() {
  const obs = new IntersectionObserver(
    (entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          e.target.classList.add('in');
          obs.unobserve(e.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  // Section titles, features, and standalone blocks
  document
    .querySelectorAll(
      '.section-title, .about-grid, .jobs, .feature, .other-title, .archive-link, .contact-num, .contact-title, .contact-desc, .contact .btn'
    )
    .forEach((el) => {
      el.classList.add('reveal');
      obs.observe(el);
    });

  // Staggered cards
  document.querySelectorAll('#cards .card').forEach((card, i) => {
    card.classList.add('reveal');
    card.setAttribute('data-delay', String((i % 3) + 1));
    obs.observe(card);
  });
})();

/* ===== Hero intro (staggered) ===== */
(function heroIntro() {
  const items = document.querySelectorAll('.hero > *');
  items.forEach((el, i) => {
    el.classList.add('reveal');
    el.setAttribute('data-delay', String(i + 1));
  });
  window.addEventListener('load', () => {
    items.forEach((el) => el.classList.add('in'));
  });
})();

/* ===== Footer year ===== */
document.getElementById('year').textContent = new Date().getFullYear();
