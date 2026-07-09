/* ===== C&P KOREA — Main JS ===== */

/* Language */
let lang = document.documentElement.lang === 'ko' ? 'ko' : 'en';
function setLang(l) {
  lang = l;
  document.body.classList.toggle('ko', l === 'ko');
  document.querySelectorAll('.lang-ko').forEach(b => b.classList.toggle('active', l === 'ko'));
  document.querySelectorAll('.lang-en').forEach(b => b.classList.toggle('active', l === 'en'));
  localStorage.setItem('cpkorea_lang', l);
}
(function initLang() {
  const saved = localStorage.getItem('cpkorea_lang') || 'en';
  setLang(saved);
})();

/* Nav scroll */
const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 40);
}, { passive: true });

/* Mobile menu */
let mobileOpen = false;
document.getElementById('hamburger').addEventListener('click', () => {
  mobileOpen = !mobileOpen;
  document.getElementById('mobileMenu').classList.toggle('open', mobileOpen);
});
function closeMobile() {
  mobileOpen = false;
  document.getElementById('mobileMenu').classList.remove('open');
}

/* Smooth scroll */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    closeMobile();
    const top = target.getBoundingClientRect().top + window.scrollY - 76;
    window.scrollTo({ top, behavior: 'smooth' });
  });
});

/* Scroll reveal */
const revealEls = document.querySelectorAll('.reveal');
const revealObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('visible'); revealObs.unobserve(e.target); }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
revealEls.forEach(el => revealObs.observe(el));

/* Count-up */
function countUp(el, target, duration) {
  const start = performance.now();
  (function tick(now) {
    const progress = Math.min((now - start) / duration, 1);
    el.textContent = Math.floor(progress * target);
    if (progress < 1) requestAnimationFrame(tick);
    else el.textContent = target;
  })(start);
}
const countObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.querySelectorAll('[data-count]').forEach(el => {
        countUp(el, parseInt(el.dataset.count), 1800);
      });
      countObs.unobserve(e.target);
    }
  });
}, { threshold: 0.3 });
document.querySelectorAll('.hero-stats').forEach(el => countObs.observe(el));

/* Contact form */
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', async e => {
    e.preventDefault();
    const btn = contactForm.querySelector('.btn-submit');
    const successMsg = document.getElementById('formSuccess');
    btn.disabled = true;
    btn.textContent = '전송 중...';
    try {
      const res = await fetch('includes/contact_handler.php', {
        method: 'POST',
        body: new FormData(contactForm)
      });
      const data = await res.json();
      if (data.success) {
        successMsg.style.display = 'block';
        contactForm.reset();
        setTimeout(() => { successMsg.style.display = 'none'; }, 6000);
      } else {
        alert(data.message || '오류가 발생했습니다. 다시 시도해주세요.');
      }
    } catch {
      alert('전송 중 오류가 발생했습니다.');
    } finally {
      btn.disabled = false;
      btn.textContent = lang === 'ko' ? '문의 보내기' : 'Send Inquiry';
    }
  });
}
