<?php
/**
 * VANGUARD ATELIER — Elegant Premium Website Redesign
 * Main PHP Index Entry
 */
$pageTitle = 'VANGUARD ATELIER — Elegant Premium Website Redesign & Brand Architecture';
$pageDescription = 'A modern, polished, and premium digital experience redesign. Refined typography, cohesive colour palette, elegant spacing, and smooth micro-interactions.';
$activePage = 'home';

include __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION -->
<section id="hero" class="hero-section">
  <div class="container">
    <div class="hero-content">
      <div class="hero-text-block">
        <div class="badge-pill">Bespoke Digital Elevation</div>
        <h1 class="hero-tagline">
          Elevating Brands Into <span class="text-gold italic">Timeless</span> Digital Icons
        </h1>
        <p class="hero-description">
          A comprehensive visual and UX transformation crafted for high-end enterprises. We replace dated layouts with refined typography, cohesive champagne & obsidian palettes, breathing whitespace, and buttery-smooth micro-interactions.
        </p>
        <div class="hero-cta-group">
          <a href="contact.html" class="btn btn-primary btn-lg">
            Explore Full Concept
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#transformation" class="btn btn-secondary btn-lg">
            View Before & After
          </a>
        </div>

        <div class="hero-stats-row">
          <div class="stat-item">
            <div class="stat-item-number text-gold">99.4%</div>
            <div class="stat-item-label">Client Retention</div>
          </div>
          <div class="stat-item">
            <div class="stat-item-number">$420M+</div>
            <div class="stat-item-label">Client Market Cap</div>
          </div>
          <div class="stat-item">
            <div class="stat-item-number">100%</div>
            <div class="stat-item-label">Responsive Fidelity</div>
          </div>
        </div>
      </div>

      <div class="hero-visual-card">
        <div class="hero-image-frame">
          <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=1200&auto=format&fit=crop" 
               alt="Modern Architectural Interior - Luxury Digital Aesthetics">
        </div>
        <div class="hero-floating-badge">
          <div class="floating-badge-icon">💎</div>
          <div class="floating-badge-title">Precision Visuals</div>
          <div class="floating-badge-meta">Zero clutter. Maximum authority. 60fps micro-animations.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MARQUEE / ACCREDITATIONS -->
<section class="marquee-section">
  <div class="marquee-heading">Trusted by Discerning Founders, Luxury Houses & Global Institutions</div>
  <div class="marquee-track">
    <div class="marquee-item"><span>✦</span> VOGUE LUXE</div>
    <div class="marquee-item"><span>✦</span> SOTHEBY'S DIGITAL</div>
    <div class="marquee-item"><span>✦</span> APEX CAPITAL</div>
    <div class="marquee-item"><span>✦</span> MAISON ARCHITECTURE</div>
    <div class="marquee-item"><span>✦</span> LUMINA WEALTH</div>
    <div class="marquee-item"><span>✦</span> KRONOS HORLOGERIE</div>
    <div class="marquee-item"><span>✦</span> VOGUE LUXE</div>
    <div class="marquee-item"><span>✦</span> SOTHEBY'S DIGITAL</div>
    <div class="marquee-item"><span>✦</span> APEX CAPITAL</div>
    <div class="marquee-item"><span>✦</span> MAISON ARCHITECTURE</div>
    <div class="marquee-item"><span>✦</span> LUMINA WEALTH</div>
    <div class="marquee-item"><span>✦</span> KRONOS HORLOGERIE</div>
  </div>
</section>

<!-- BEFORE & AFTER INTERACTIVE SPLIT SLIDER -->
<section id="transformation" class="transformation-section">
  <div class="container">
    <div class="section-header">
      <div class="badge-pill">The Transformation</div>
      <h2 class="section-title">From Dated & Cluttered to <span class="text-gold">Sleek & Prestigious</span></h2>
      <p class="section-desc">
        Drag the interactive slider below to witness how our redesign elevates standard, fatigued digital structures into captivating editorial masterpieces that command respect and convert high-ticket clients.
      </p>
    </div>

    <div class="comparison-card">
      <div id="comparison-slider" class="slider-container" title="Drag to compare before and after">
        <div class="slider-img slider-img-before">
          <span class="badge-tag-before">Before: Dated & Fatigued</span>
          <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=1200&auto=format&fit=crop" 
               alt="Before Redesign - Conventional Interface">
        </div>

        <div id="slider-after-layer" class="slider-img-after">
          <span class="badge-tag-after">After: Modern Premium Redesign</span>
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop" 
               alt="After Redesign - Elevated Luxury Interface">
        </div>

        <div id="slider-handle" class="slider-handle" aria-hidden="true">
          ↔
        </div>
      </div>

      <div class="comparison-features-grid">
        <div class="feature-box">
          <div class="feature-box-icon">Aa</div>
          <h3 class="feature-box-title">Refined Typography Scale</h3>
          <p class="feature-box-desc">
            Replaced generic sans fonts with high-contrast editorial serifs (Cormorant Garamond) paired with geometric sans for maximum readability and prestige.
          </p>
        </div>
        <div class="feature-box">
          <div class="feature-box-icon">🎨</div>
          <h3 class="feature-box-title">Cohesive Gold & Slate Palette</h3>
          <p class="feature-box-desc">
            Eliminated noisy, fragmented color choices. Unified under deep Obsidian Onyx, brushed champagne gold accents, and warm alabaster lighting.
          </p>
        </div>
        <div class="feature-box">
          <div class="feature-box-icon">📐</div>
          <h3 class="feature-box-title">8-Point Grid Spacing</h3>
          <p class="feature-box-desc">
            Generous editorial whitespace that allows content to breathe, guiding the user’s eye naturally down the conversion funnel.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" class="services-section">
  <div class="container">
    <div class="section-header">
      <div class="badge-pill">Bespoke Offerings</div>
      <h2 class="section-title">Engineered For <span class="text-gold">Brand Supremacy</span></h2>
      <p class="section-desc">
        Every deliverable in this redesign is tailored to eliminate friction, elevate aesthetic authority, and guarantee seamless cross-device performance.
      </p>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <div>
          <span class="service-number">01 / BRAND VISUAL ARCHITECTURE</span>
          <h3 class="service-title">Holistic UI/UX Transformation</h3>
          <p class="service-desc">
            Reimagining your core pages from the ground up while retaining your established structure, ensuring existing SEO and URL equity remain intact.
          </p>
          <ul class="service-deliverables">
            <li>Art-directed visual identity overhaul</li>
            <li>UX flow optimization & wireframes</li>
            <li>Frictionless conversion touchpoints</li>
            <li>Custom micro-interactions & feedback</li>
          </ul>
        </div>
        <a href="contact.html" class="btn btn-outline btn-sm">Select Scope</a>
      </div>

      <div class="service-card" style="border-color: var(--gold-border);">
        <div>
          <div style="display:inline-block; margin-bottom:12px;" class="badge-pill">Recommended</div><br>
          <span class="service-number">02 / MULTI-DEVICE RESPONSIVENESS</span>
          <h3 class="service-title">Desktop, Tablet & Mobile Fluidity</h3>
          <p class="service-desc">
            Precision responsiveness tested across 1440px desktop displays, iPads, and iOS/Android smartphones. Zero awkward layout shifts or truncated copy.
          </p>
          <ul class="service-deliverables">
            <li>Fluid typography & dynamic viewports</li>
            <li>Touch-optimized gesture menus</li>
            <li>Sub-second image loading & WebP assets</li>
            <li>Pixel-perfect alignment across breakpoints</li>
          </ul>
        </div>
        <a href="contact.html" class="btn btn-primary btn-sm">Select Scope</a>
      </div>

      <div class="service-card">
        <div>
          <span class="service-number">03 / DESIGN SYSTEM & HANDOVER</span>
          <h3 class="service-title">Organized Design Files & Guide</h3>
          <p class="service-desc">
            Production-ready Figma & Adobe XD component libraries with auto-layout, documented design tokens, typography scales, and a comprehensive handover guide.
          </p>
          <ul class="service-deliverables">
            <li>Figma / XD components & variant states</li>
            <li>Complete design token export (CSS/JSON)</li>
            <li>Styleguide documentation manual</li>
            <li>Clean PHP & HTML/CSS integration guide</li>
          </ul>
        </div>
        <a href="design-system.html" class="btn btn-outline btn-sm">Select Scope</a>
      </div>
    </div>
  </div>
</section>

<!-- CURATED PORTFOLIO SHOWCASE -->
<section id="portfolio" class="portfolio-section">
  <div class="container">
    <div class="section-header">
      <div class="badge-pill">Curated Works</div>
      <h2 class="section-title">Proven Excellence in <span class="text-gold">Luxury Digital Craft</span></h2>
      <p class="section-desc">
        Explore recent digital revamps engineered for high-net-worth brands, private ateliers, and forward-thinking enterprises.
      </p>
    </div>

    <div class="portfolio-filter-nav">
      <button class="filter-btn active" data-filter="all">All Disciplines</button>
      <button class="filter-btn" data-filter="horlogerie">Haute Horlogerie</button>
      <button class="filter-btn" data-filter="wealth">Private Wealth</button>
      <button class="filter-btn" data-filter="architecture">Architecture</button>
      <button class="filter-btn" data-filter="fashion">Luxury Fashion</button>
    </div>

    <div class="portfolio-grid">
      <div class="portfolio-card" data-category="horlogerie" data-id="1">
        <div class="portfolio-thumb-wrapper">
          <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=1200&auto=format&fit=crop" 
               alt="Maison de Haute Horlogerie Redesign">
          <div class="portfolio-overlay"></div>
        </div>
        <div class="portfolio-details">
          <div class="portfolio-category-tag">Haute Horlogerie &bull; Swiss Heritage</div>
          <h3 class="portfolio-project-title">Maison de Haute Horlogerie</h3>
          <div class="portfolio-stat-metric">
            <span style="color:var(--gold-primary);">★</span> +340% Private Viewing Inquiries &bull; Click to View Case Study
          </div>
        </div>
      </div>

      <div class="portfolio-card" data-category="wealth" data-id="2">
        <div class="portfolio-thumb-wrapper">
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200&auto=format&fit=crop" 
               alt="Aura Private Wealth Management Portal">
          <div class="portfolio-overlay"></div>
        </div>
        <div class="portfolio-details">
          <div class="portfolio-category-tag">Fintech &bull; Executive Advisory</div>
          <h3 class="portfolio-project-title">Aura Private Wealth Management</h3>
          <div class="portfolio-stat-metric">
            <span style="color:var(--gold-primary);">★</span> $120M+ Capital Onboarded &bull; Click to View Case Study
          </div>
        </div>
      </div>

      <div class="portfolio-card" data-category="architecture" data-id="3">
        <div class="portfolio-thumb-wrapper">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop" 
               alt="Sovereign Architectural Studio Web Monograph">
          <div class="portfolio-overlay"></div>
        </div>
        <div class="portfolio-details">
          <div class="portfolio-category-tag">Architecture &bull; Spatial Living</div>
          <h3 class="portfolio-project-title">Sovereign Architectural Studio</h3>
          <div class="portfolio-stat-metric">
            <span style="color:var(--gold-primary);">★</span> +215% International Project Briefs &bull; Click to View Case Study
          </div>
        </div>
      </div>

      <div class="portfolio-card" data-category="fashion" data-id="4">
        <div class="portfolio-thumb-wrapper">
          <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=1200&auto=format&fit=crop" 
               alt="Kaelen Bespoke Cashmere E-Commerce">
          <div class="portfolio-overlay"></div>
        </div>
        <div class="portfolio-details">
          <div class="portfolio-category-tag">Luxury Fashion &bull; Direct-to-Consumer</div>
          <h3 class="portfolio-project-title">Kaelen Bespoke Cashmere</h3>
          <div class="portfolio-stat-metric">
            <span style="color:var(--gold-primary);">★</span> +82% Average Order Value &bull; Click to View Case Study
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
