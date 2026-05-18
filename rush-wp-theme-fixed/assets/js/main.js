/**
 * Rush School — Main JS
 * Hero slideshow + mega menu + scroll behaviour
 */
(function () {
  'use strict';

  /* ============================================================
     HERO SLIDESHOW
     ============================================================ */
  const slides  = document.querySelectorAll('.hero-slide');
  const dots    = document.querySelectorAll('.hero-dot');
  let current   = 0;
  let prev      = null;
  let timer     = null;

  function goTo(index) {
    if (index === current) return;
    slides[current].classList.remove('is-active');
    slides[current].classList.add('is-prev');
    prev = current;
    current = index;
    slides[current].classList.add('is-active');
    if (dots.length) {
      dots.forEach((d, i) => d.classList.toggle('is-active', i === current));
    }
    // Remove 'is-prev' after transition
    clearTimeout(timer);
    timer = setTimeout(() => {
      if (prev !== null) {
        slides[prev].classList.remove('is-prev');
        prev = null;
      }
    }, 1300);
  }

  function nextSlide() {
    goTo((current + 1) % slides.length);
  }

  if (slides.length > 1) {
    let autoplay = setInterval(nextSlide, 4200);

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        const idx = parseInt(dot.dataset.goto, 10);
        clearInterval(autoplay);
        goTo(idx);
        autoplay = setInterval(nextSlide, 4200);
      });
    });
  }

  /* ============================================================
     MEGA MENU
     ============================================================ */
  const burgerBtn     = document.getElementById('rush-burger');
  const megaMenu      = document.getElementById('rush-mega-menu');
  const menuCloseBtn  = document.getElementById('rush-menu-close');
  const menuCloseLogo = document.getElementById('rush-menu-close-logo');

  function openMenu() {
    megaMenu.classList.add('is-open');
    megaMenu.setAttribute('aria-hidden', 'false');
    burgerBtn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    megaMenu.classList.remove('is-open');
    megaMenu.setAttribute('aria-hidden', 'true');
    burgerBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (burgerBtn && megaMenu) {
    burgerBtn.addEventListener('click', openMenu);
    if (menuCloseBtn) menuCloseBtn.addEventListener('click', closeMenu);
    if (menuCloseLogo) menuCloseLogo.addEventListener('click', closeMenu);

    megaMenu.querySelectorAll('.mega-menu-link').forEach((link) => {
      link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && megaMenu.classList.contains('is-open')) closeMenu();
    });
  }

  /* ============================================================
     HEADER — shrink on scroll (optional visual effect)
     ============================================================ */
  const header = document.getElementById('site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.style.paddingTop = window.scrollY > 60 ? '0.5rem' : '1rem';
    }, { passive: true });
  }

  /* ============================================================
     SMOOTH ANCHOR SCROLL
     ============================================================ */
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* ============================================================
     FADE-UP ON SCROLL (Intersection Observer)
     ============================================================ */
  const fadeTargets = document.querySelectorAll(
    '.feature-card, .formation-card, .stat-card, .ambassador-card, .testimonial-card'
  );

  if ('IntersectionObserver' in window && fadeTargets.length) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.animation = 'fade-up 0.6s ease-out both';
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );
    fadeTargets.forEach((el) => {
      el.style.opacity = '0';
      io.observe(el);
    });
  }

})();
