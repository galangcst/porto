import './bootstrap';

/* ===== Preloader ===== */
(function preloader() {
  function hide() {
    const el = document.getElementById('preloader');
    if (el && !el.classList.contains('fade-out')) {
      setTimeout(() => {
        el.classList.add('fade-out');
        setTimeout(() => el.remove(), 500);
      }, 500);
    }
  }
  if (document.readyState === 'complete') hide();
  else window.addEventListener('load', hide);
})();

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

/* ===== Scroll progress indicator ===== */
(function scrollProgress() {
  const progressBar = document.getElementById('scroll-progress');
  if (!progressBar) return;
  window.addEventListener('scroll', () => {
    const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    progressBar.style.width = scrolled + '%';
  }, { passive: true });
})();

/* ===== Mouse spotlight glow ===== */
(function cursorSpotlight() {
  const glow = document.getElementById('cursor-glow');
  if (!glow || window.matchMedia('(max-width: 768px)').matches) return;
  
  window.addEventListener('mousemove', (e) => {
    glow.style.left = e.clientX + 'px';
    glow.style.top = e.clientY + 'px';
    if (!glow.classList.contains('visible')) {
      glow.classList.add('visible');
    }
  }, { passive: true });

  document.addEventListener('mouseleave', () => {
    glow.classList.remove('visible');
  });
})();

/* ===== Custom Cursor System ===== */
(function customCursor() {
  if (window.matchMedia('(max-width: 768px)').matches) return;

  const dot = document.querySelector('.cursor-dot');
  const ring = document.querySelector('.cursor-ring');
  const canvas = document.getElementById('cursor-trail');
  if (!dot || !ring || !canvas) return;

  const ctx = canvas.getContext('2d');
  let w, h;

  function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', resize);

  // Mouse state
  let mouseX = -100, mouseY = -100;
  let dotX = -100, dotY = -100;
  let ringX = -100, ringY = -100;
  let isHovering = false;
  let isClicking = false;
  let isText = false;
  let isVisible = false;

  // Trail particles
  const particles = [];
  const MAX_PARTICLES = 35;

  class Particle {
    constructor(x, y) {
      this.x = x;
      this.y = y;
      this.alpha = 0.6;
      this.size = Math.random() * 3 + 1.5;
      this.vx = (Math.random() - 0.5) * 0.5;
      this.vy = (Math.random() - 0.5) * 0.5;
      this.decay = Math.random() * 0.015 + 0.012;
      this.hue = Math.random() > 0.5 ? 163 : 199; // teal or sky-blue
    }
    update() {
      this.x += this.vx;
      this.y += this.vy;
      this.alpha -= this.decay;
      this.size *= 0.97;
    }
    draw(ctx) {
      ctx.save();
      ctx.globalAlpha = this.alpha;
      ctx.fillStyle = `hsla(${this.hue}, 100%, 70%, 1)`;
      ctx.shadowColor = `hsla(${this.hue}, 100%, 70%, 0.8)`;
      ctx.shadowBlur = 8;
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fill();
      ctx.restore();
    }
  }

  // Click burst particles
  const bursts = [];
  class BurstParticle {
    constructor(x, y) {
      this.x = x;
      this.y = y;
      this.alpha = 1;
      const angle = Math.random() * Math.PI * 2;
      const speed = Math.random() * 4 + 2;
      this.vx = Math.cos(angle) * speed;
      this.vy = Math.sin(angle) * speed;
      this.size = Math.random() * 3 + 1;
      this.hue = Math.random() > 0.3 ? 163 : 199;
      this.decay = Math.random() * 0.02 + 0.025;
    }
    update() {
      this.x += this.vx;
      this.y += this.vy;
      this.vx *= 0.96;
      this.vy *= 0.96;
      this.alpha -= this.decay;
      this.size *= 0.98;
    }
    draw(ctx) {
      ctx.save();
      ctx.globalAlpha = this.alpha;
      ctx.fillStyle = `hsla(${this.hue}, 100%, 75%, 1)`;
      ctx.shadowColor = `hsla(${this.hue}, 100%, 70%, 0.9)`;
      ctx.shadowBlur = 12;
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fill();
      ctx.restore();
    }
  }

  // Hoverable & text elements
  const hoverSelectors = 'a, button, .btn, .tab, .card, .feature-img-link, [role="button"]';
  const textSelectors = 'input, textarea, [contenteditable="true"]';

  // Magnetic pull strength
  const MAGNETIC_STRENGTH = 0.3;
  const MAGNETIC_RANGE = 80;

  // Track mouse
  let lastTrailX = 0, lastTrailY = 0;
  let framesSinceTrail = 0;

  document.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    if (!isVisible) {
      isVisible = true;
      dot.style.opacity = '1';
      ring.style.opacity = '1';
    }

    // Add trail particles with distance threshold
    const dx = mouseX - lastTrailX;
    const dy = mouseY - lastTrailY;
    const dist = Math.sqrt(dx * dx + dy * dy);
    framesSinceTrail++;

    if (dist > 4 && framesSinceTrail > 1) {
      if (particles.length < MAX_PARTICLES) {
        particles.push(new Particle(mouseX, mouseY));
      }
      lastTrailX = mouseX;
      lastTrailY = mouseY;
      framesSinceTrail = 0;
    }

    // Detect hover targets
    const target = e.target;
    const hoverEl = target.closest(hoverSelectors);
    const textEl = target.closest(textSelectors);

    if (textEl) {
      if (!isText) {
        isText = true;
        isHovering = false;
        dot.classList.add('text');
        ring.classList.add('text');
        dot.classList.remove('hover');
        ring.classList.remove('hover');
      }
    } else if (hoverEl) {
      if (!isHovering) {
        isHovering = true;
        isText = false;
        dot.classList.add('hover');
        ring.classList.add('hover');
        dot.classList.remove('text');
        ring.classList.remove('text');
      }
    } else {
      if (isHovering || isText) {
        isHovering = false;
        isText = false;
        dot.classList.remove('hover', 'text');
        ring.classList.remove('hover', 'text');
      }
    }
  }, { passive: true });

  document.addEventListener('mouseleave', () => {
    isVisible = false;
    dot.style.opacity = '0';
    ring.style.opacity = '0';
  });

  // Click burst effect
  document.addEventListener('mousedown', () => {
    isClicking = true;
    dot.classList.add('click');
    ring.classList.add('click');
    // Spawn burst particles
    for (let i = 0; i < 12; i++) {
      bursts.push(new BurstParticle(mouseX, mouseY));
    }
  });
  document.addEventListener('mouseup', () => {
    isClicking = false;
    dot.classList.remove('click');
    ring.classList.remove('click');
  });

  // Lerp utility
  function lerp(a, b, t) {
    return a + (b - a) * t;
  }

  // Magnetic pull towards nearby hoverable elements
  function getMagneticTarget() {
    if (!isHovering) return null;
    const hoverEls = document.querySelectorAll(hoverSelectors);
    for (const el of hoverEls) {
      const rect = el.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      const dx = mouseX - cx;
      const dy = mouseY - cy;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < MAGNETIC_RANGE) {
        return { x: cx, y: cy, strength: 1 - dist / MAGNETIC_RANGE };
      }
    }
    return null;
  }

  // Animation loop
  function animate() {
    // Compute target with optional magnetic pull
    let targetX = mouseX;
    let targetY = mouseY;
    const magnet = getMagneticTarget();
    if (magnet) {
      targetX = lerp(mouseX, magnet.x, magnet.strength * MAGNETIC_STRENGTH);
      targetY = lerp(mouseY, magnet.y, magnet.strength * MAGNETIC_STRENGTH);
    }

    // Smooth dot movement (fast follow)
    dotX = lerp(dotX, targetX, 0.25);
    dotY = lerp(dotY, targetY, 0.25);
    dot.style.left = dotX + 'px';
    dot.style.top = dotY + 'px';

    // Smooth ring movement (elastic / slower follow)
    ringX = lerp(ringX, targetX, 0.12);
    ringY = lerp(ringY, targetY, 0.12);
    ring.style.left = ringX + 'px';
    ring.style.top = ringY + 'px';

    // Draw trail particles
    ctx.clearRect(0, 0, w, h);

    for (let i = particles.length - 1; i >= 0; i--) {
      particles[i].update();
      if (particles[i].alpha <= 0) {
        particles.splice(i, 1);
      } else {
        particles[i].draw(ctx);
      }
    }

    // Draw burst particles
    for (let i = bursts.length - 1; i >= 0; i--) {
      bursts[i].update();
      if (bursts[i].alpha <= 0) {
        bursts.splice(i, 1);
      } else {
        bursts[i].draw(ctx);
      }
    }

    requestAnimationFrame(animate);
  }
  animate();
})();

/* ===== Header shadow & smart hide on scroll ===== */
(function headerScroll() {
  const header = document.getElementById('header');
  if (!header) return;
  let lastScrollY = window.scrollY;

  const onScroll = () => {
    const currentScrollY = window.scrollY;
    header.classList.toggle('scrolled', currentScrollY > 40);

    if (currentScrollY > 200 && currentScrollY > lastScrollY && !document.getElementById('mobile-menu').classList.contains('open')) {
      header.classList.add('hide-nav');
    } else {
      header.classList.remove('hide-nav');
    }
    lastScrollY = currentScrollY;
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();

/* ===== 3D Tilt effect on project cards ===== */
(function card3DTilt() {
  const cards = document.querySelectorAll('.card');
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  cards.forEach((card) => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = ((y - centerY) / centerY) * -6;
      const rotateY = ((x - centerX) / centerX) * 6;

      card.style.transform = `perspective(1000px) translateY(-8px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
})();

/* ===== Active nav link (scroll spy) ===== */
(function scrollSpy() {
  const sections = document.querySelectorAll('section[id]');

  function update() {
    const scrollY = window.scrollY + 140;
    sections.forEach((section) => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute('id');
      const link = document.querySelector(`#header ol a[href="#${id}"]`);
      if (link) {
        if (scrollY >= top && scrollY < top + height) {
          link.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      }
    });
  }

  window.addEventListener('scroll', update, { passive: true });
  update();
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

/* ===== Cool 3D Flip Role Rotator ===== */
(function roleRotator() {
  const target = document.getElementById('typewriter');
  if (!target) return;

  const roles = [
    'code writer.',
    'backend dev.',
    'server config.',
    'fullstack engineer.',
    'problem solver.',
    'API architect.',
    'web developer.',
    'Linux explorer.'
  ];

  let index = 0;

  setInterval(() => {
    target.classList.add('flip-out');
    
    setTimeout(() => {
      index = (index + 1) % roles.length;
      target.textContent = roles[index];
      target.classList.remove('flip-out');
      target.classList.add('flip-in');
      
      setTimeout(() => {
        target.classList.remove('flip-in');
      }, 250);
    }, 250);
  }, 1000); // 1s smooth rotation interval with 0.5s total animation transition
})();

/* ===== Footer year ===== */
const yearEl = document.getElementById('year');
if (yearEl) {
  yearEl.textContent = new Date().getFullYear();
}

