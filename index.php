<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C&P Korea Co., Ltd. — Marine Electronics &amp; ICT Solutions</title>
<meta name="description" content="C&P Korea provides marine electronics, maritime ICT, cyber resilience, and NAVTOR digital navigation solutions. Based in Busan, South Korea.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Noto+Sans+KR:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ===== NAV ===== -->
<nav id="nav">
  <div class="container nav-inner">
    <a href="#home" class="nav-logo">
      <img src="assets/images/logo.png" alt="C&P Korea"
           onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
      <span class="nav-logo-text">C&amp;P KOREA</span>
    </a>
    <ul class="nav-menu">
      <li><a href="#about"><span data-en>About</span><span data-ko>회사 소개</span></a></li>
      <li><a href="#services"><span data-en>Services</span><span data-ko>서비스</span></a></li>
      <li><a href="#navtor"><span data-en>NAVTOR</span><span data-ko>NAVTOR</span></a></li>
      <li><a href="#partners"><span data-en>Partners</span><span data-ko>파트너</span></a></li>
      <li><a href="#contact"><span data-en>Contact</span><span data-ko>문의하기</span></a></li>
    </ul>
    <div class="nav-right">
      <div class="lang-toggle">
        <button class="lang-en active" onclick="setLang('en')">EN</button>
        <button class="lang-ko" onclick="setLang('ko')">KO</button>
      </div>
      <a href="#contact" class="btn-nav">
        <span data-en>Contact Us</span><span data-ko>문의하기</span>
      </a>
    </div>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <i class="fa fa-bars"></i>
    </button>
  </div>
  <div class="mobile-menu" id="mobileMenu">
    <a href="#about"    onclick="closeMobile()"><span data-en>About</span><span data-ko>회사 소개</span></a>
    <a href="#services" onclick="closeMobile()"><span data-en>Services</span><span data-ko>서비스</span></a>
    <a href="#navtor"   onclick="closeMobile()"><span data-en>NAVTOR</span><span data-ko>NAVTOR</span></a>
    <a href="#partners" onclick="closeMobile()"><span data-en>Partners</span><span data-ko>파트너</span></a>
    <a href="#contact"  onclick="closeMobile()"><span data-en>Contact</span><span data-ko>문의하기</span></a>
    <div class="mobile-lang">
      <button class="lang-en active" onclick="setLang('en');closeMobile();">EN</button>
      <button class="lang-ko" onclick="setLang('ko');closeMobile();">KO</button>
    </div>
  </div>
</nav>

<!-- ===== HERO ===== -->
<section id="home">
  <div id="hero">
    <div class="container hero-content">
      <div class="hero-eyebrow">
        <span data-en>Marine Electronics &amp; ICT Solutions · Busan, Korea</span>
        <span data-ko>해양 전자 &amp; ICT 솔루션 · 부산</span>
      </div>
      <h1 class="hero-h1">
        <span data-en>Your Trusted Partner for<br><span class="accent">Smart Maritime Technology</span></span>
        <span data-ko>스마트 해양 기술을 위한<br><span class="accent">신뢰할 수 있는 파트너</span></span>
      </h1>
      <p class="hero-sub" data-en>C&amp;P Korea delivers expert marine electronics, maritime ICT, cyber resilience, and NAVTOR digital navigation solutions — from Busan to every ocean.</p>
      <p class="hero-sub" data-ko>씨앤피코리아는 부산에서 전 세계 해역까지, 해양 전자 기술·ICT·사이버 보안·NAVTOR 디지털 항법 솔루션을 제공합니다.</p>
      <div class="hero-ctas">
        <a href="#services" class="btn-primary">
          <span data-en>Explore Services</span><span data-ko>서비스 보기</span>
          <i class="fa fa-arrow-right" style="font-size:12px;"></i>
        </a>
        <a href="#contact" class="btn-outline">
          <span data-en>Request a Quote</span><span data-ko>견적 문의</span>
        </a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="hero-stat-num">15+</div>
          <div class="hero-stat-label" data-en>Years Experience</div>
          <div class="hero-stat-label" data-ko>년 업력</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num">NAVTOR</div>
          <div class="hero-stat-label" data-en>Authorized Dealer</div>
          <div class="hero-stat-label" data-ko>공식 대리점</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num">ISO</div>
          <div class="hero-stat-label" data-en>Certified Engineers</div>
          <div class="hero-stat-label" data-ko>공인 엔지니어</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num">24/7</div>
          <div class="hero-stat-label" data-en>Technical Support</div>
          <div class="hero-stat-label" data-ko>기술 지원</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section id="about">
  <div class="container">
    <div class="about-grid">
      <div class="about-intro reveal">
        <div class="section-label">
          <span data-en>About C&amp;P Korea</span>
          <span data-ko>씨앤피코리아 소개</span>
        </div>
        <h2 class="section-title">
          <span data-en>Marine Technology Specialists<br>Based in Busan</span>
          <span data-ko>부산 기반<br>해양 기술 전문 기업</span>
        </h2>
        <p class="section-desc" data-en>C&amp;P Korea Co., Ltd. is a Busan-based marine electronics and ICT company serving the global maritime industry. Led by an expert onboard commissioning specialist, we provide navigation and communication systems, maritime cyber resilience, and digital navigation solutions as an authorized NAVTOR dealer.</p>
        <p class="section-desc" data-ko>씨앤피코리아(주)는 부산 영도구에 위치한 해양 전자·ICT 전문 기업입니다. 선내 시운전 전문가 출신 대표가 이끄는 당사는 항법·통신 시스템, 해양 사이버 보안, NAVTOR 공식 대리점으로서 디지털 항법 솔루션을 제공합니다.</p>
      </div>
      <div class="about-features reveal reveal-d2">
        <div class="about-feature">
          <div class="about-feature-icon">🎯</div>
          <div class="about-feature-title">
            <span data-en>Minimize Downtime</span>
            <span data-ko>가동 중단 최소화</span>
          </div>
          <div class="about-feature-text">
            <span data-en>Rapid on-site response to keep your vessels operational.</span>
            <span data-ko>신속한 현장 대응으로 선박 가동을 유지합니다.</span>
          </div>
        </div>
        <div class="about-feature">
          <div class="about-feature-icon">🛡️</div>
          <div class="about-feature-title">
            <span data-en>Regulatory Compliance</span>
            <span data-ko>규제 준수 보장</span>
          </div>
          <div class="about-feature-text">
            <span data-en>IMO, SOLAS, and cyber resilience compliance consulting.</span>
            <span data-ko>IMO, SOLAS 및 사이버 보안 규정 준수 컨설팅.</span>
          </div>
        </div>
        <div class="about-feature">
          <div class="about-feature-icon">📡</div>
          <div class="about-feature-title">
            <span data-en>Enhanced Safety</span>
            <span data-ko>승무원 안전</span>
          </div>
          <div class="about-feature-text">
            <span data-en>Advanced marine electronics for crew situational awareness.</span>
            <span data-ko>첨단 해양 전자 장비로 승무원 상황 인식을 강화합니다.</span>
          </div>
        </div>
        <div class="about-feature">
          <div class="about-feature-icon">🌐</div>
          <div class="about-feature-title">
            <span data-en>Global Partners</span>
            <span data-ko>글로벌 파트너십</span>
          </div>
          <div class="about-feature-text">
            <span data-en>Official dealer for world-leading maritime technology brands.</span>
            <span data-ko>세계 최고 해양 기술 브랜드의 공식 대리점.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SERVICES ===== -->
<section id="services" class="section">
  <div class="container">
    <div class="reveal">
      <div class="section-label">
        <span data-en>What We Do</span>
        <span data-ko>사업 영역</span>
      </div>
      <h2 class="section-title">
        <span data-en>Marine Technology Solutions</span>
        <span data-ko>해양 기술 솔루션</span>
      </h2>
      <p class="section-desc" data-en>Comprehensive marine electronics and ICT services tailored for modern vessels — from installation to cyber security.</p>
      <p class="section-desc" data-ko>설치부터 사이버 보안까지, 현대 선박을 위한 종합 해양 전자·ICT 서비스.</p>
    </div>
    <div class="services-grid">
      <div class="svc-card reveal reveal-d1">
        <div class="svc-icon-wrap">🧭</div>
        <span class="svc-sub">Electronics · Navigation · Safety</span>
        <h3 data-en>Marine Electronics &amp; Safety</h3>
        <h3 data-ko>해양 전자 &amp; 안전</h3>
        <p class="svc-desc" data-en>Expert installation, commissioning, and repair of navigation and communication systems — GMDSS, AIS, ECDIS, radar, VDR and more.</p>
        <p class="svc-desc" data-ko>GMDSS, AIS, ECDIS, 레이더, VDR 등 항법·통신 장비의 전문 설치, 시운전 및 수리 서비스.</p>
        <div class="svc-tags">
          <span class="svc-tag">ECDIS</span>
          <span class="svc-tag">AIS</span>
          <span class="svc-tag">GMDSS</span>
          <span class="svc-tag">Radar</span>
          <span class="svc-tag">VDR</span>
        </div>
      </div>
      <div class="svc-card reveal reveal-d2">
        <div class="svc-icon-wrap">🛡️</div>
        <span class="svc-sub">ICT · Cyber Security · Infrastructure</span>
        <h3 data-en>Maritime ICT &amp; Cyber Resilience</h3>
        <h3 data-ko>해양 ICT &amp; 사이버 보안</h3>
        <p class="svc-desc" data-en>Ship IT infrastructure design, network solutions, OT/IT integration, and IMO cyber resilience compliance consulting.</p>
        <p class="svc-desc" data-ko>선박 IT 인프라 설계, 네트워크 솔루션, OT/IT 통합, IMO 사이버 보안 규정 준수 컨설팅.</p>
        <div class="svc-tags">
          <span class="svc-tag">Cyber Security</span>
          <span class="svc-tag">OT/IT</span>
          <span class="svc-tag">IMO 2021</span>
          <span class="svc-tag">Network</span>
        </div>
      </div>
      <div class="svc-card reveal reveal-d3">
        <div class="svc-icon-wrap">🗺️</div>
        <span class="svc-sub">e-Navigation · Charts · ENC</span>
        <h3 data-en>NAVTOR Digital Navigation</h3>
        <h3 data-ko>NAVTOR 디지털 항법</h3>
        <p class="svc-desc" data-en>Authorized NAVTOR dealer providing digital charts, electronic publications, voyage planning tools, and vessel performance monitoring.</p>
        <p class="svc-desc" data-ko>NAVTOR 공식 대리점으로 전자해도, 디지털 간행물, 항로 계획, 선박 성능 모니터링 솔루션 공급.</p>
        <div class="svc-tags">
          <span class="svc-tag">NavStation</span>
          <span class="svc-tag">ENC</span>
          <span class="svc-tag">NavTracker</span>
          <span class="svc-tag">e-NP</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== NAVTOR FEATURE ===== -->
<section id="navtor">
  <div class="container">
    <div class="navtor-grid">
      <div class="navtor-left reveal">
        <div class="navtor-badge">✦ Authorized Dealer — South Korea</div>
        <div class="navtor-logo-txt">NAVTOR</div>
        <p style="font-size:14px; color:var(--text-dim); line-height:1.8; margin-bottom:24px;">
          <span data-en>The world's leading e-navigation platform for smarter, safer maritime operations.</span>
          <span data-ko>보다 스마트하고 안전한 해양 운항을 위한 세계 최고의 e-내비게이션 플랫폼.</span>
        </p>
        <div class="navtor-products">
          <div class="navtor-product">
            <div class="navtor-product-name">NavStation</div>
            <div class="navtor-product-desc">
              <span data-en>e-Navigation platform for bridge operations</span>
              <span data-ko>선교용 e-내비게이션 플랫폼</span>
            </div>
          </div>
          <div class="navtor-product">
            <div class="navtor-product-name">NavTracker</div>
            <div class="navtor-product-desc">
              <span data-en>Vessel performance &amp; fleet management</span>
              <span data-ko>선박 성능 및 선단 관리</span>
            </div>
          </div>
          <div class="navtor-product">
            <div class="navtor-product-name">e-NP</div>
            <div class="navtor-product-desc">
              <span data-en>Digital nautical publications</span>
              <span data-ko>디지털 항해 간행물</span>
            </div>
          </div>
          <div class="navtor-product">
            <div class="navtor-product-name">ENC / Charts</div>
            <div class="navtor-product-desc">
              <span data-en>Global digital charts &amp; updates</span>
              <span data-ko>글로벌 전자해도 및 업데이트</span>
            </div>
          </div>
        </div>
      </div>
      <div class="reveal reveal-d2">
        <div class="section-label">
          <span data-en>Featured Partnership</span>
          <span data-ko>주요 파트너십</span>
        </div>
        <h2 class="section-title">
          <span data-en>NAVTOR Official Dealer<br>in South Korea</span>
          <span data-ko>NAVTOR<br>한국 공식 대리점</span>
        </h2>
        <p class="section-desc" data-en>As NAVTOR's authorized dealer in South Korea, C&amp;P Korea provides the full range of NAVTOR's world-leading e-navigation solutions — from digital charts and electronic publications to vessel performance monitoring.</p>
        <p class="section-desc" data-ko>씨앤피코리아는 NAVTOR의 대한민국 공식 대리점으로서, 전자해도부터 디지털 항해 간행물, 선박 성능 모니터링까지 NAVTOR 솔루션 전 제품을 공급합니다.</p>
        <div style="margin-top:32px;">
          <a href="#contact" class="btn-primary">
            <span data-en>Inquire About NAVTOR</span>
            <span data-ko>NAVTOR 문의하기</span>
            <i class="fa fa-arrow-right" style="font-size:12px;"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== PARTNERS ===== -->
<section id="partners" class="section">
  <div class="container">
    <div class="reveal">
      <div class="section-label">
        <span data-en>Technology Partners</span>
        <span data-ko>기술 파트너</span>
      </div>
      <h2 class="section-title">
        <span data-en>Global Partners We Represent</span>
        <span data-ko>글로벌 파트너 공식 대리점</span>
      </h2>
      <p class="section-desc" data-en>We partner with world-leading maritime technology companies to deliver cutting-edge solutions to Korean fleets.</p>
      <p class="section-desc" data-ko>세계 최고의 해양 기술 기업들과 파트너십을 통해 국내 선단에 최첨단 솔루션을 제공합니다.</p>
    </div>
    <div class="partners-grid">
      <div class="partner-card reveal reveal-d1">
        <div class="partner-logo-txt">NAVTOR</div>
        <div class="partner-name">NAVTOR AS</div>
        <p class="partner-desc" data-en>Norway-based world leader in digital navigation and e-navigation solutions for the maritime industry.</p>
        <p class="partner-desc" data-ko>해양 디지털 항법·e-내비게이션 분야 세계 선두 기업 (노르웨이).</p>
        <div class="partner-badge">
          <span data-en>✦ Official Dealer</span>
          <span data-ko>✦ 공식 대리점</span>
        </div>
      </div>
      <div class="partner-card reveal reveal-d2">
        <div class="partner-logo-txt" style="color:#4B9CD3;">Orca AI</div>
        <div class="partner-name">Orca AI</div>
        <p class="partner-desc" data-en>AI-powered collision avoidance and maritime situational awareness technology for safer vessel operations.</p>
        <p class="partner-desc" data-ko>AI 기반 충돌 회피 및 해양 상황 인식 기술로 선박 안전 운항을 지원합니다.</p>
        <div class="partner-badge">
          <span data-en>✦ Technology Partner</span>
          <span data-ko>✦ 기술 파트너</span>
        </div>
      </div>
      <div class="partner-card reveal reveal-d3">
        <div class="partner-logo-txt" style="color:#8A6FD4;">NAVIS</div>
        <div class="partner-name">Navis</div>
        <p class="partner-desc" data-en>Leading provider of vessel stability management software and loading computer systems for the global fleet.</p>
        <p class="partner-desc" data-ko>전 세계 선단을 위한 선박 복원성 관리 소프트웨어 및 적하 컴퓨터 시스템 선두 공급업체.</p>
        <div class="partner-badge">
          <span data-en>✦ Technology Partner</span>
          <span data-ko>✦ 기술 파트너</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact" class="section">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info reveal">
        <div class="section-label">
          <span data-en>Get in Touch</span>
          <span data-ko>문의하기</span>
        </div>
        <h2 class="section-title">
          <span data-en>Let's Work Together</span>
          <span data-ko>함께 만들어가는<br>해양 디지털 전환</span>
        </h2>
        <p class="section-desc" data-en>Contact us for technical services, NAVTOR product inquiries, or any maritime ICT project. We respond within 24 hours.</p>
        <p class="section-desc" data-ko>기술 서비스, NAVTOR 제품 문의, 해양 ICT 프로젝트 등 어떤 내용이든 편하게 연락주세요. 24시간 내 회신드립니다.</p>
        <div class="contact-items">
          <div class="contact-item">
            <div class="contact-item-icon">📞</div>
            <div>
              <div class="contact-item-label">PHONE / WHATSAPP</div>
              <div class="contact-item-value"><a href="tel:+821033975231">+82-10-3397-5231</a></div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">📠</div>
            <div>
              <div class="contact-item-label">OFFICE</div>
              <div class="contact-item-value"><a href="tel:+82514615071">+82-51-461-5071</a></div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">✉️</div>
            <div>
              <div class="contact-item-label">EMAIL</div>
              <div class="contact-item-value"><a href="mailto:sales@cp-korea.com">sales@cp-korea.com</a></div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">📍</div>
            <div>
              <div class="contact-item-label">ADDRESS</div>
              <div class="contact-item-value">71, #209 Yeongdo-gu<br>Busan 49055, South Korea</div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form-wrap reveal reveal-d2">
        <h3 data-en>Send an Inquiry</h3>
        <h3 data-ko>문의 보내기</h3>
        <form id="contactForm">
          <div class="form-row">
            <div class="form-group">
              <label data-en>Name *</label><label data-ko>이름 *</label>
              <input type="text" name="name" required placeholder="John Smith">
            </div>
            <div class="form-group">
              <label data-en>Company</label><label data-ko>회사명</label>
              <input type="text" name="company" placeholder="Company Ltd.">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label data-en>Email *</label><label data-ko>이메일 *</label>
              <input type="email" name="email" required placeholder="you@example.com">
            </div>
            <div class="form-group">
              <label data-en>Phone / WhatsApp</label><label data-ko>전화 / 왓츠앱</label>
              <input type="tel" name="phone" placeholder="+82-10-0000-0000">
            </div>
          </div>
          <div class="form-group">
            <label data-en>Service of Interest</label><label data-ko>관심 서비스</label>
            <select name="service">
              <option value="">— Select / 서비스 선택 —</option>
              <option value="Marine Electronics">Marine Electronics &amp; Safety</option>
              <option value="Maritime ICT">Maritime ICT &amp; Cyber Resilience</option>
              <option value="NAVTOR Products">NAVTOR Products</option>
              <option value="Other">Other / 기타</option>
            </select>
          </div>
          <div class="form-group">
            <label data-en>Message *</label><label data-ko>문의 내용 *</label>
            <textarea name="message" rows="5" required placeholder="Please describe your requirements..."></textarea>
          </div>
          <p class="form-notice" data-en>We will reply to your inquiry within 24 hours.</p>
          <p class="form-notice" data-ko>24시간 내에 회신드리겠습니다.</p>
          <button type="submit" class="btn-submit">
            <span data-en>Send Inquiry</span><span data-ko>문의 보내기</span>
          </button>
          <div id="formSuccess" class="form-success">
            <span data-en>✓ Thank you! Your inquiry has been sent. We'll get back to you shortly.</span>
            <span data-ko>✓ 문의가 접수되었습니다. 빠른 시일 내 연락드리겠습니다.</span>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer id="footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div>
        <img src="assets/images/logo_white.png" alt="C&P Korea" class="footer-logo"
             onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
        <span class="footer-logo-text">C&amp;P KOREA</span>
        <div class="footer-tagline" data-en>Marine Electronics &amp; ICT Solutions — Busan, Korea</div>
        <div class="footer-tagline" data-ko>해양 전자 &amp; ICT 솔루션 — 부산</div>
      </div>
      <div class="footer-links">
        <a href="#about"><span data-en>About</span><span data-ko>회사 소개</span></a>
        <a href="#services"><span data-en>Services</span><span data-ko>서비스</span></a>
        <a href="#navtor"><span data-en>NAVTOR</span><span data-ko>NAVTOR</span></a>
        <a href="#partners"><span data-en>Partners</span><span data-ko>파트너</span></a>
        <a href="#contact"><span data-en>Contact</span><span data-ko>문의하기</span></a>
      </div>
    </div>
    <div class="footer-bottom">
      <div>© <?= date('Y') ?> C&amp;P Korea Co., Ltd. All rights reserved.</div>
      <div>
        <a href="mailto:sales@cp-korea.com" style="color:inherit;">sales@cp-korea.com</a>
        &nbsp;|&nbsp; +82-51-461-5071
      </div>
    </div>
  </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
