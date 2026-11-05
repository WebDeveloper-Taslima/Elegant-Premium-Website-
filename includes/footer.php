<?php
/**
 * Footer Template Component
 */
?>
  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top-grid">
        <div>
          <div class="brand-logo">
            <div class="brand-emblem">V</div>
            <div class="brand-text-block">
              <span class="brand-name">Vanguard</span>
              <span class="brand-sub">Atelier &bull; Digital</span>
            </div>
          </div>
          <p class="footer-brand-desc">
            Transforming conventional websites into modern, polished, and timeless luxury showcases through meticulous design engineering.
          </p>
          <div style="font-size:0.8rem; color:var(--gold-primary); font-family:var(--font-mono);">
            EST. 2016 &bull; NEW YORK / ZURICH / TOKYO
          </div>
        </div>

        <div>
          <h4 class="footer-col-title">Redesign Scope</h4>
          <ul class="footer-links-list">
            <li><a href="index.php#transformation">Visual & UX Refresh</a></li>
            <li><a href="services.html">Responsive Engineering</a></li>
            <li><a href="design-system.html">Figma & Adobe XD Tokens</a></li>
            <li><a href="design-system.html">Handover Specifications</a></li>
            <li><a href="services.html">PHP / HTML Architecture</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Selected Pages</h4>
          <ul class="footer-links-list">
            <li><a href="index.php#hero">Homepage Architecture</a></li>
            <li><a href="about.html">Philosophy & Heritage</a></li>
            <li><a href="services.html">Capabilities & Pricing</a></li>
            <li><a href="portfolio.html">Curated Works Showcase</a></li>
            <li><a href="contact.html">Private Booking Inquiry</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Private Dispatch</h4>
          <p style="font-size:0.85rem; color:var(--text-secondary); margin-bottom:12px;">
            Receive quarterly insights on luxury digital architecture and brand prestige.
          </p>
          <form class="newsletter-form" onsubmit="event.preventDefault(); showToast('Subscribed to Private Dispatch');">
            <input type="email" class="newsletter-input" placeholder="Enter executive email..." required>
            <button type="submit" class="btn btn-primary btn-sm">Join</button>
          </form>
        </div>
      </div>

      <div class="footer-bottom-bar">
        <div>&copy; <?php echo date('Y'); ?> VANGUARD ATELIER. All rights reserved. Built for Guaranteed Brand Elevation.</div>
        <div style="display:flex; gap:20px;">
          <a href="design-system.html" style="color:var(--text-muted); text-decoration:none;">Design Specs</a>
          <a href="index.php#transformation" style="color:var(--text-muted); text-decoration:none;">Before/After</a>
          <a href="contact.html" style="color:var(--gold-primary); text-decoration:none;">Request Proposal</a>
        </div>
      </div>
    </div>
  </footer>

</div> <!-- End #viewport-stage -->

<!-- Case Study Detail Modal Dialog -->
<div id="case-study-modal" class="modal-overlay" role="dialog" aria-modal="true" aria-labelledby="modal-title">
  <div class="modal-card">
    <button id="modal-close-btn" class="modal-close-btn" aria-label="Close Case Study">&times;</button>
    <img id="modal-img" src="" alt="Case Study Hero" class="modal-hero-img">
    <div class="modal-content-body">
      <div id="modal-category" class="badge-pill" style="margin-bottom: 8px;">Category</div>
      <h2 id="modal-title" style="font-size: 2.2rem; margin-bottom: 8px;">Case Study Title</h2>
      <div id="modal-impact" style="font-size: 1rem; color: var(--gold-primary); font-weight: 600; margin-bottom: var(--space-lg);">
        Impact Metric
      </div>
      <p id="modal-desc" style="font-size: 1.05rem; color: var(--text-secondary); line-height: 1.75; margin-bottom: var(--space-xl);">
        Case study overview text...
      </p>

      <h4 style="font-family:var(--font-display); font-size: 1.1rem; margin-bottom: 12px;">Deliverables Provided:</h4>
      <ul id="modal-deliverables" class="service-deliverables" style="margin-bottom: var(--space-xl);">
        <!-- Populated dynamically by JS -->
      </ul>

      <div style="display:flex; justify-content:flex-end;">
        <a href="contact.html" class="btn btn-primary" onclick="document.getElementById('case-study-modal').classList.remove('active'); document.body.style.overflow='';">
          Inquire About Similar Redesign &rarr;
        </a>
      </div>
    </div>
  </div>
</div>

<script src="js/main.js"></script>
</body>
</html>
