<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C&P Korea — Marine Electronics & System Integration</title>
<meta name="description" content="C&P Korea specializes in marine electronics, system integration, and R&D services for the maritime industry. Official NAVTOR dealer.">
<meta property="og:title" content="C&P Korea — Marine Electronics & System Integration">
<meta property="og:description" content="Engineering Smarter, Safer Maritime Operations. Marine electronics, navigation systems, and custom R&D solutions.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://kkangmi.github.io/cpkorea/">
<link rel="icon" href="assets/images/favicon.ico">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Noto+Sans+KR:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ===== NAV ===== -->
<nav id="nav">
  <div class="container nav-inner">
    <a href="#hero" class="nav-logo" aria-label="C&P Korea">
      <img src="assets/images/logo.png" alt="C&P Korea" height="44"
           onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
      <span class="nav-logo-text" style="display:none">C&P Korea</span>
    </a>
    <ul class="nav-menu">
      <li><a href="#about"><span data-en>About</span><span data-ko>소개</span></a></li>
      <li><a href="#services"><span data-en>Services</span><span data-ko>서비스</span></a></li>
      <li><a href="#products"><span data-en>Products</span><span data-ko>제품</span></a></li>
      <li><a href="#partners"><span data-en>Partners</span><span data-ko>파트너</span></a></li>
      <li><a href="#contact"><span data-en>Contact</span><span data-ko>문의</span></a></li>
    </ul>
    <div style="display:flex;align-items:center;gap:12px">
      <div class="lang-toggle">
        <button class="lang-en" onclick="setLang('en')">EN</button>
        <button class="lang-ko" onclick="setLang('ko')">한국어</button>
      </div>
      <button class="hamburger" id="hamburger" aria-label="Menu">&#9776;</button>
    </div>
  </div>
  <div class="mobile-menu" id="mobileMenu">
    <a href="#about" onclick="closeMobile()"><span data-en>About</span><span data-ko>소개</span></a>
    <a href="#services" onclick="closeMobile()"><span data-en>Services</span><span data-ko>서비스</span></a>
    <a href="#products" onclick="closeMobile()"><span data-en>Products</span><span data-ko>제품</span></a>
    <a href="#partners" onclick="closeMobile()"><span data-en>Partners</span><span data-ko>파트너</span></a>
    <a href="#contact" onclick="closeMobile()"><span data-en>Contact</span><span data-ko>문의</span></a>
    <div class="mobile-lang">
      <button class="lang-en" onclick="setLang('en'); closeMobile()">English</button>
      <button class="lang-ko" onclick="setLang('ko'); closeMobile()">한국어</button>
    </div>
  </div>
</nav>

<!-- ===== HERO ===== -->
<section id="hero">
  <div class="container">
    <div class="hero-content reveal">
      <div class="hero-eyebrow">
        <span data-en>Marine Electronics Specialist</span>
        <span data-ko>해양 전자 전문기업</span>
      </div>
      <h1 class="hero-h1">
        <span data-en>Engineering Smarter,<br><span class="accent">Safer Maritime</span> Operations</span>
        <span data-ko>더 스마트하고<br><span class="accent">안전한 해양 운항</span>을 설계합니다</span>
      </h1>
      <p class="hero-sub">
        <span data-en>C&P Korea delivers advanced marine electronics, system integration, and R&D solutions — minimizing vessel downtime and enhancing maritime safety.</span>
        <span data-ko>씨앤피코리아는 선박 전자장비, 시스템 통합, R&D 솔루션을 공급하며 선박 가동 중단을 최소화하고 해양 안전을 높입니다.</span>
      </p>
      <div class="hero-ctas">
        <a href="#services" class="btn-primary">
          <span data-en>Our Services</span><span data-ko>서비스 보기</span>
          &#8594;
        </a>
        <a href="#contact" class="btn-outline">
          <span data-en>Contact Us</span><span data-ko>문의하기</span>
        </a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="15">0</span>+</div>
          <div class="hero-stat-label">
            <span data-en>Years Experience</span><span data-ko>업력</span>
          </div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="11">0</span>+</div>
          <div class="hero-stat-label">
            <span data-en>Major Clients</span><span data-ko>주요 고객사</span>
          </div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="5">0</span></div>
          <div class="hero-stat-label">
            <span data-en>Product Lines</span><span data-ko>제품 라인</span>
          </div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num" style="font-size:22px">NAVTOR</div>
          <div class="hero-stat-label">
            <span data-en>Official Dealer</span><span data-ko>공식 딜러</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== ABOUT ===== -->
<section id="about" class="section section-alt">
  <div class="container">
    <div class="about-grid">
      <div class="reveal">
        <div class="section-label">
          <span data-en>About C&P Korea</span><span data-ko>씨앤피코리아 소개</span>
        </div>
        <h2 class="section-title">
          <span data-en>Your Trusted Partner<br>in Marine Technology</span>
          <span data-ko>해양 기술의<br>믿을 수 있는 파트너</span>
        </h2>
        <p class="section-desc">
          <span data-en>Founded in Busan — South Korea's shipbuilding capital — C&P Korea has built a reputation for precision, reliability, and deep technical expertise in onboard electronic systems. From commissioning to consulting, we keep your vessels running at peak performance.</span>
          <span data-ko>대한민국 조선 1번지 부산에서 시작된 씨앤피코리아는 선박 전자 시스템 분야에서 정밀성과 기술력으로 명성을 쌓아왔습니다. 시운전부터 컨설팅까지, 최적의 선박 운항을 지원합니다.</span>
        </p>
        <div class="about-ceo">
          <span class="about-ceo-label">CEO</span>
          <span data-en>Jeong Won-seok &mdash; Onboard Commissioning Specialist</span>
          <span data-ko>정 원석 대표 &mdash; 선박 시운전 전문가</span>
        </div>
        <div style="margin-top:8px; font-size:13px; color:var(--text-x)">
          <span data-en>Business No. 605-81-87761 &nbsp;|&nbsp; Busan, Korea</span>
          <span data-ko>사업자등록번호 605-81-87761 &nbsp;|&nbsp; 부산광역시</span>
        </div>
      </div>
      <div class="about-features reveal reveal-d1">
        <div class="about-feature">
          <div class="about-feature-icon">&#9875;</div>
          <div class="about-feature-title">
            <span data-en>Onboard Expertise</span><span data-ko>선상 전문 기술</span>
          </div>
          <div class="about-feature-text">
            <span data-en>Hands-on commissioning and troubleshooting at sea</span>
            <span data-ko>실제 선박에서의 시운전 및 현장 기술 지원</span>
          </div>
        </div>
        <div class="about-feature">
          <div class="about-feature-icon">&#128202;</div>
          <div class="about-feature-title">
            <span data-en>System Integration</span><span data-ko>시스템 통합</span>
          </div>
          <div class="about-feature-text">
            <span data-en>Seamless multi-vendor system integration solutions</span>
            <span data-ko>다중 벤더 시스템의 완벽한 통합 솔루션</span>
          </div>
        </div>
        <div class="about-feature">
          <div class="about-feature-icon">&#128270;</div>
          <div class="about-feature-title">
            <span data-en>Compliance &amp; Safety</span><span data-ko>규정 준수 &amp; 안전</span>
          </div>
          <div class="about-feature-text">
            <span data-en>Full compliance with IMO and class society requirements</span>
            <span data-ko>IMO 및 선급 요구사항 완전 준수</span>
          </div>
        </div>
        <div class="about-feature">
          <div class="about-feature-icon">&#128101;</div>
          <div class="about-feature-title">
            <span data-en>Crew Training</span><span data-ko>승무원 교육</span>
          </div>
          <div class="about-feature-text">
            <span data-en>Practical training to enhance crew system awareness</span>
            <span data-ko>시스템 이해도 향상을 위한 실전 교육</span>
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
        <span data-en>What We Do</span><span data-ko>사업 영역</span>
      </div>
      <h2 class="section-title">
        <span data-en>Three Core Business Areas</span>
        <span data-ko>3대 핵심 사업 분야</span>
      </h2>
    </div>
    <div class="services-grid">
      <div class="svc-card reveal reveal-d1">
        <div class="svc-icon-wrap">&#128225;</div>
        <span class="svc-sub">01</span>
        <h3>
          <span data-en>Marine Electronics</span>
          <span data-ko>선박 전자장비</span>
        </h3>
        <p class="svc-desc">
          <span data-en>Supply, installation, and commissioning of navigation and communication equipment. Ensuring all systems meet class society and flag state requirements.</span>
          <span data-ko>항법 및 통신 장비의 공급, 설치, 시운전. 선급 및 기국 요구사항을 충족하는 모든 시스템을 구축합니다.</span>
        </p>
        <div class="svc-tags">
          <span class="svc-tag">ECDIS</span>
          <span class="svc-tag">AIS</span>
          <span class="svc-tag">RADAR</span>
          <span class="svc-tag">VDR</span>
          <span class="svc-tag">NAVTEX</span>
        </div>
      </div>
      <div class="svc-card reveal reveal-d2">
        <div class="svc-icon-wrap">&#9881;</div>
        <span class="svc-sub">02</span>
        <h3>
          <span data-en>Marine System Integration</span>
          <span data-ko>선박 시스템 통합</span>
        </h3>
        <p class="svc-desc">
          <span data-en>Designing and implementing integrated vessel systems connecting navigation, machinery, and monitoring platforms into a unified, reliable solution.</span>
          <span data-ko>항법·기관·모니터링 시스템을 통합하는 선박 솔루션 설계 및 구현. 신뢰할 수 있는 통합 운항 환경을 구축합니다.</span>
        </p>
        <div class="svc-tags">
          <span class="svc-tag">CAN Bus</span>
          <span class="svc-tag">NMEA 2000</span>
          <span class="svc-tag">IEC 61162</span>
          <span class="svc-tag">Gateway</span>
        </div>
      </div>
      <div class="svc-card reveal reveal-d3">
        <div class="svc-icon-wrap">&#128300;</div>
        <span class="svc-sub">03</span>
        <h3>
          <span data-en>R&amp;D Service &amp; Consulting</span>
          <span data-ko>R&amp;D 서비스 &amp; 컨설팅</span>
        </h3>
        <p class="svc-desc">
          <span data-en>Collaborative R&D with research institutes, universities, and government agencies. Technical consulting for regulatory compliance and new vessel builds.</span>
          <span data-ko>연구기관·대학·정부기관과의 공동 R&D. 규정 준수 및 신조선 기술 컨설팅을 제공합니다.</span>
        </p>
        <div class="svc-tags">
          <span class="svc-tag">IMO</span>
          <span class="svc-tag">Class Survey</span>
          <span class="svc-tag">ETRI</span>
          <span class="svc-tag">KIOST</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== PRODUCTS ===== -->
<section id="products" class="section section-alt">
  <div class="container">
    <div class="reveal">
      <div class="section-label">
        <span data-en>Our Products</span><span data-ko>자체 제품</span>
      </div>
      <h2 class="section-title">
        <span data-en>Proprietary Maritime Solutions</span>
        <span data-ko>자체 개발 해양 솔루션</span>
      </h2>
      <p class="section-desc">
        <span data-en>C&P Korea engineers original hardware and software products for vessel monitoring, data management, and navigation intelligence.</span>
        <span data-ko>씨앤피코리아가 자체 개발한 선박 모니터링, 데이터 관리, 항법 인텔리전스 솔루션입니다.</span>
      </p>
    </div>
    <div class="products-grid">
      <div class="product-card reveal reveal-d1">
        <div class="product-code">SG-1</div>
        <h4>
          <span data-en>Serial Network Gateway</span>
          <span data-ko>직렬 네트워크 게이트웨이</span>
        </h4>
        <p>
          <span data-en>Multi-protocol bridge for serial navigation data</span>
          <span data-ko>직렬 항법 데이터 멀티 프로토콜 변환</span>
        </p>
      </div>
      <div class="product-card reveal reveal-d2">
        <div class="product-code">EI-1</div>
        <h4>
          <span data-en>Electronic Inspector</span>
          <span data-ko>전자 검사계</span>
        </h4>
        <p>
          <span data-en>Onboard system condition monitoring and diagnostics</span>
          <span data-ko>선박 시스템 상태 모니터링 및 진단</span>
        </p>
      </div>
      <div class="product-card reveal reveal-d2">
        <div class="product-code">CIS-1</div>
        <h4>
          <span data-en>Conning Information System</span>
          <span data-ko>운항 정보 시스템</span>
        </h4>
        <p>
          <span data-en>Integrated bridge display for real-time navigation data</span>
          <span data-ko>실시간 항법 정보 통합 브리지 디스플레이</span>
        </p>
      </div>
      <div class="product-card reveal reveal-d2">
        <div class="product-code">MIS-1</div>
        <h4>
          <span data-en>Machinery Information System</span>
          <span data-ko>기계 정보 시스템</span>
        </h4>
        <p>
          <span data-en>Engine room data aggregation and visualization</span>
          <span data-ko>기관실 데이터 통합 및 시각화</span>
        </p>
      </div>
      <div class="product-card reveal reveal-d3">
        <div class="product-code">MDM-1</div>
        <h4>
          <span data-en>Maritime Data Manager</span>
          <span data-ko>해양 데이터 관리</span>
        </h4>
        <p>
          <span data-en>Voyage data recording, storage, and reporting solution</span>
          <span data-ko>항해 데이터 기록, 저장 및 보고 솔루션</span>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ===== PARTNERS ===== -->
<section id="partners" class="section">
  <div class="container">
    <div class="reveal" style="margin-bottom:44px">
      <div class="section-label">
        <span data-en>Clients &amp; Partners</span><span data-ko>주요 고객 &amp; 파트너</span>
      </div>
      <h2 class="section-title">
        <span data-en>Trusted by Korea's Leading Shipbuilders</span>
        <span data-ko>국내 최고 조선사들이 신뢰합니다</span>
      </h2>
    </div>

    <div style="margin-bottom:48px">
      <div class="clients-label reveal">
        <span data-en>Major Clients</span><span data-ko>주요 고객사</span>
      </div>
      <div class="clients-grid">
        <div class="client-item reveal reveal-d1">현대중공업<small>Hyundai Heavy Industries</small></div>
        <div class="client-item reveal reveal-d1">DSME<small>대우조선해양</small></div>
        <div class="client-item reveal reveal-d2">삼성중공업<small>Samsung Heavy Industries</small></div>
        <div class="client-item reveal reveal-d2">한진중공업<small>Hanjin Heavy Industries</small></div>
        <div class="client-item reveal reveal-d2">현대BS&amp;C<small>Hyundai BS&C</small></div>
        <div class="client-item reveal reveal-d3">산업통상자원부<small>MOTIE</small></div>
        <div class="client-item reveal reveal-d1">해양수산부<small>MOF Korea</small></div>
        <div class="client-item reveal reveal-d1">ETRI<small>전자통신연구원</small></div>
        <div class="client-item reveal reveal-d2">KIOST<small>한국해양과학기술원</small></div>
        <div class="client-item reveal reveal-d2">중소조선연구원<small>RIMS</small></div>
        <div class="client-item reveal reveal-d3">KOMERI<small>한국선박기자재연구원</small></div>
        <div class="client-item reveal reveal-d3">Kongsberg<small>콩스버그</small></div>
      </div>
    </div>

    <div>
      <div class="clients-label reveal">
        <span data-en>Technology Partners</span><span data-ko>기술 파트너</span>
      </div>
      <div class="partners-grid">
        <div class="partner-card reveal reveal-d1">
          <div class="partner-logo-txt">NAVTOR</div>
          <div class="partner-name">navtor.com</div>
          <p class="partner-desc">
            <span data-en>Digital navigation services — ENC, voyage planning, and NavStation platform. C&P Korea is the official authorized dealer for South Korea.</span>
            <span data-ko>디지털 항법 서비스 — ENC, 항해 계획, NavStation 플랫폼. 씨앤피코리아는 공식 국내 공급 딜러입니다.</span>
          </p>
          <span class="partner-badge">&#10003; <span data-en>Official Dealer &mdash; South Korea</span><span data-ko>공식 딜러 &mdash; 대한민국</span></span>
        </div>
        <div class="partner-card reveal reveal-d2">
          <div class="partner-logo-txt">Hammar</div>
          <div class="partner-name">hammar.com</div>
          <p class="partner-desc">
            <span data-en>Swedish manufacturer of hydrostatic releases and marine safety equipment. Trusted globally for life-saving appliance systems on commercial vessels.</span>
            <span data-ko>스웨덴의 수압 이탈기 및 선박 안전장비 전문 제조사. 상업선의 구명 장비 시스템 분야에서 세계적으로 신뢰받고 있습니다.</span>
          </p>
          <span class="partner-badge">&#128279; <span data-en>Technology Partner</span><span data-ko>기술 파트너</span></span>
        </div>
        <div class="partner-card reveal reveal-d3">
          <div class="partner-logo-txt">Navis</div>
          <div class="partner-name">navis.com (Cargotec)</div>
          <p class="partner-desc">
            <span data-en>Global leader in terminal and vessel management software. Integration partner for port logistics and cargo handling system connectivity.</span>
            <span data-ko>항만 및 선박 관리 소프트웨어 분야 글로벌 리더. 항만 물류 및 화물 처리 시스템 연동 파트너.</span>
          </p>
          <span class="partner-badge">&#128279; <span data-en>Technology Partner</span><span data-ko>기술 파트너</span></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact" class="section section-alt">
  <div class="container">
    <div class="contact-grid">
      <div class="reveal">
        <div class="section-label">
          <span data-en>Get in Touch</span><span data-ko>문의하기</span>
        </div>
        <h2 class="section-title">
          <span data-en>Contact<br>C&amp;P Korea</span>
          <span data-ko>씨앤피코리아에<br>문의하세요</span>
        </h2>
        <p class="section-desc" style="margin-bottom:0">
          <span data-en>Ready to discuss your vessel's electronic needs? Our team is here to help with technical inquiries, product information, and service quotes.</span>
          <span data-ko>선박 전자 장비에 대한 문의가 있으시면 언제든지 연락주세요. 기술 문의, 제품 정보, 서비스 견적을 도와드립니다.</span>
        </p>
        <div class="contact-items">
          <div class="contact-item">
            <div class="contact-item-icon">&#128205;</div>
            <div>
              <div class="contact-item-label"><span data-en>Address</span><span data-ko>주소</span></div>
              <div class="contact-item-value">
                <span data-en>209, 71 Jeollyeong-ro, Yeongdo-gu,<br>Busan 49055, Republic of Korea</span>
                <span data-ko>부산광역시 영도구 절영로 71, 209호<br>우편번호 49055</span>
              </div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">&#128222;</div>
            <div>
              <div class="contact-item-label"><span data-en>Phone / Fax</span><span data-ko>전화 / 팩스</span></div>
              <div class="contact-item-value">
                Tel: <a href="tel:+82517170481">+82-51-717-0481</a><br>
                Fax: +82-70-4850-8350
              </div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">&#128241;</div>
            <div>
              <div class="contact-item-label">WhatsApp</div>
              <div class="contact-item-value">
                <a href="https://wa.me/821033975231">+82-10-3397-5231</a>
              </div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">&#9993;</div>
            <div>
              <div class="contact-item-label">Email</div>
              <div class="contact-item-value">
                <a href="mailto:sales@cp-korea.com">sales@cp-korea.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form-wrap reveal reveal-d1">
        <h3>
          <span data-en>Send an Inquiry</span><span data-ko>문의 보내기</span>
        </h3>
        <form id="contactForm" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label><span data-en>Name *</span><span data-ko>성함 *</span></label>
              <input type="text" name="name" required placeholder="John Kim / 홍길동">
            </div>
            <div class="form-group">
              <label><span data-en>Company</span><span data-ko>회사명</span></label>
              <input type="text" name="company" placeholder="Hyundai Heavy Industries">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Email *</label>
              <input type="email" name="email" required placeholder="name@company.com">
            </div>
            <div class="form-group">
              <label><span data-en>Phone</span><span data-ko>연락처</span></label>
              <input type="tel" name="phone" placeholder="+82-10-0000-0000">
            </div>
          </div>
          <div class="form-group">
            <label><span data-en>Service Interest</span><span data-ko>관심 서비스</span></label>
            <select name="service">
              <option value=""><span data-en>Select a service</span><span data-ko>서비스 선택</span></option>
              <option value="marine-electronics"><span data-en>Marine Electronics</span><span data-ko>선박 전자장비</span></option>
              <option value="system-integration"><span data-en>Marine System Integration</span><span data-ko>시스템 통합</span></option>
              <option value="rnd"><span data-en>R&amp;D Service &amp; Consulting</span><span data-ko>R&amp;D 컨설팅</span></option>
              <option value="navtor">NAVTOR Products</option>
              <option value="product"><span data-en>Proprietary Products (SG/EI/CIS/MIS/MDM)</span><span data-ko>자체 제품 (SG/EI/CIS/MIS/MDM)</span></option>
              <option value="other"><span data-en>Other</span><span data-ko>기타</span></option>
            </select>
          </div>
          <div class="form-group">
            <label><span data-en>Message *</span><span data-ko>문의 내용 *</span></label>
            <textarea name="message" rows="4" required
              placeholder="Describe your vessel type, requirements, or questions...&#10;선박 종류, 요구사항 또는 문의 내용을 입력해주세요..."></textarea>
          </div>
          <p class="form-notice">
            <span data-en>* Required fields. We respond within 1 business day.</span>
            <span data-ko>* 필수 항목. 영업일 기준 1일 이내 회신드립니다.</span>
          </p>
          <button type="submit" class="btn-submit">
            <span data-en>Send Inquiry</span><span data-ko>문의 보내기</span>
          </button>
        </form>
        <div id="formSuccess" class="form-success">
          <span data-en>&#10003; Your message has been sent! We'll be in touch shortly.</span>
          <span data-ko>&#10003; 문의가 접수되었습니다. 곧 연락드리겠습니다.</span>
        </div>
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
             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
        <span class="footer-logo-text" style="display:none">C&amp;P Korea</span>
        <div class="footer-tagline">
          <span data-en>Engineering Smarter, Safer Maritime Operations</span>
          <span data-ko>더 스마트하고 안전한 해양 운항을 설계합니다</span>
        </div>
        <div class="footer-meta">
          <span data-en>Business No. 605-81-87761 &nbsp;|&nbsp; 209, 71 Jeollyeong-ro, Yeongdo-gu, Busan</span>
          <span data-ko>사업자등록번호 605-81-87761 &nbsp;|&nbsp; 부산광역시 영도구 절영로 71, 209호</span>
        </div>
      </div>
      <div class="footer-links">
        <a href="#about"><span data-en>About</span><span data-ko>소개</span></a>
        <a href="#services"><span data-en>Services</span><span data-ko>서비스</span></a>
        <a href="#products"><span data-en>Products</span><span data-ko>제품</span></a>
        <a href="#partners"><span data-en>Partners</span><span data-ko>파트너</span></a>
        <a href="#contact"><span data-en>Contact</span><span data-ko>문의</span></a>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; 2026 C&amp;P Korea Co., Ltd. All rights reserved.</span>
      <span>
        <span data-en>Marine Electronics &amp; System Integration</span>
        <span data-ko>해양 전자장비 &amp; 시스템 통합 전문기업</span>
      </span>
    </div>
  </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
