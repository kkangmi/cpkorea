/* ===== C&P KOREA — Main JS ===== */

/* Language */
let lang = document.documentElement.lang === 'ko' ? 'ko' : 'en';
function setLang(l) {
  lang = l;
  document.body.classList.toggle('ko', l === 'ko');
  document.querySelectorAll('.lang-ko').forEach(b => b.classList.toggle('active', l === 'ko'));
  document.querySelectorAll('.lang-en').forEach(b => b.classList.toggle('active', l === 'en'));
  document.querySelectorAll('select option[data-en]').forEach(o => {
    o.textContent = l === 'ko' ? o.dataset.ko : o.dataset.en;
  });
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

/* Hero canvas — AIS vessel tracking display */
(function initHeroCanvas() {
  const canvas = document.getElementById('heroCanvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let W, H, ships = [];
  const SHIP_COUNT = window.innerWidth < 768 ? 4 : 7;

  function resize() {
    W = canvas.width = canvas.offsetWidth;
    H = canvas.height = canvas.offsetHeight;
  }

  function mkShip() {
    const hdg = Math.random() * Math.PI * 2;
    const spd = 0.28 + Math.random() * 0.38;
    return {
      x: Math.random() * W, y: Math.random() * H,
      hdg, spd,
      vx: Math.sin(hdg) * spd, vy: -Math.cos(hdg) * spd,
      sz: 5 + Math.random() * 4,
      trail: [], maxTrail: 50,
      col: Math.random() > 0.4 ? '8,145,178' : '21,101,192'
    };
  }

  function init() { resize(); ships = Array.from({ length: SHIP_COUNT }, mkShip); }

  /* Steer ships away from each other so they never overlap/collide */
  function avoidCollisions() {
    const TURN_RATE = 0.035;
    ships.forEach(s => {
      let avoidX = 0, avoidY = 0, found = false;
      ships.forEach(o => {
        if (o === s) return;
        const dx = s.x - o.x, dy = s.y - o.y;
        const dist = Math.hypot(dx, dy);
        const minDist = (s.sz + o.sz) * 3.2 + 18;
        if (dist > 0.001 && dist < minDist) {
          const w = (minDist - dist) / minDist;
          avoidX += (dx / dist) * w;
          avoidY += (dy / dist) * w;
          found = true;
        }
      });
      if (found) {
        const desiredHdg = Math.atan2(avoidX, -avoidY);
        let diff = desiredHdg - s.hdg;
        while (diff > Math.PI) diff -= Math.PI * 2;
        while (diff < -Math.PI) diff += Math.PI * 2;
        s.hdg += Math.max(-TURN_RATE, Math.min(TURN_RATE, diff));
        s.vx = Math.sin(s.hdg) * s.spd;
        s.vy = -Math.cos(s.hdg) * s.spd;
      }
    });
  }

  function drawGrid() {
    const step = Math.round(Math.min(W, H) / 9);
    ctx.strokeStyle = 'rgba(255,255,255,.5)';
    ctx.lineWidth = 1;
    for (let x = 0; x <= W; x += step) {
      ctx.beginPath(); ctx.moveTo(x, 0); ctx.lineTo(x, H); ctx.stroke();
    }
    for (let y = 0; y <= H; y += step) {
      ctx.beginPath(); ctx.moveTo(0, y); ctx.lineTo(W, y); ctx.stroke();
    }
  }

  function drawShip(s) {
    // Wake trail
    if (s.trail.length > 1) {
      ctx.beginPath();
      ctx.moveTo(s.trail[0].x, s.trail[0].y);
      s.trail.forEach(p => ctx.lineTo(p.x, p.y));
      ctx.strokeStyle = `rgba(${s.col},.18)`;
      ctx.lineWidth = 1;
      ctx.setLineDash([2, 5]);
      ctx.stroke();
      ctx.setLineDash([]);
    }
    // Course vector
    const cLen = 28;
    ctx.beginPath();
    ctx.moveTo(s.x, s.y);
    ctx.lineTo(s.x + Math.sin(s.hdg) * cLen, s.y - Math.cos(s.hdg) * cLen);
    ctx.strokeStyle = `rgba(${s.col},.28)`;
    ctx.lineWidth = 1;
    ctx.setLineDash([3, 4]);
    ctx.stroke();
    ctx.setLineDash([]);
    // Triangle icon
    ctx.save();
    ctx.translate(s.x, s.y);
    ctx.rotate(s.hdg);
    ctx.beginPath();
    ctx.moveTo(0, -s.sz);
    ctx.lineTo(s.sz * 0.45, s.sz * 0.65);
    ctx.lineTo(-s.sz * 0.45, s.sz * 0.65);
    ctx.closePath();
    ctx.fillStyle = `rgba(${s.col},.62)`;
    ctx.fill();
    ctx.strokeStyle = `rgba(${s.col},.88)`;
    ctx.lineWidth = 0.8;
    ctx.stroke();
    ctx.restore();
  }

  function tick() {
    ctx.clearRect(0, 0, W, H);
    drawGrid();
    avoidCollisions();
    ships.forEach(s => {
      s.trail.push({ x: s.x, y: s.y });
      if (s.trail.length > s.maxTrail) s.trail.shift();
      drawShip(s);
      s.x += s.vx; s.y += s.vy;
      let wrap = false;
      if (s.x < -30) { s.x = W + 30; wrap = true; }
      if (s.x > W + 30) { s.x = -30; wrap = true; }
      if (s.y < -30) { s.y = H + 30; wrap = true; }
      if (s.y > H + 30) { s.y = -30; wrap = true; }
      if (wrap) s.trail = [];
    });
    requestAnimationFrame(tick);
  }

  window.addEventListener('resize', init);
  init(); tick();
})();
