<?php
/**
 * Navigation Bar Component — BuildCraft
 */
if (!isset($activePage)) {
    $activePage = 'home';
}
?>
<!-- Persistent Preview Simulator Toolbar -->
<div class="preview-control-bar" role="toolbar" aria-label="Interactive Preview Bar">
  <div class="preview-bar-left">
    <span class="preview-tag">
      <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#10b981;"></span>
      PHP Architecture &bull; Live Interactive Redesign
    </span>
    <div class="preview-viewports" aria-label="Viewport Switcher">
      <button class="viewport-btn active" data-viewport="desktop" title="Preview Desktop Mode">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        Desktop
      </button>
      <button class="viewport-btn" data-viewport="tablet" title="Preview Tablet Mode (768px)">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        Tablet (768px)
      </button>
      <button class="viewport-btn" data-viewport="mobile" title="Preview Mobile Mode (390px)">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        Mobile (390px)
      </button>
    </div>
  </div>
  <div class="preview-bar-right">
    <button id="theme-toggle-btn" class="theme-toggle-btn" aria-label="Toggle Theme">
      <span>🌙</span> Dark Obsidian
    </button>
  </div>
</div>

<!-- Primary Site Header -->
<header class="site-nav">
  <div class="container container-wide">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo" aria-label="BuildCraft Home">
        <div class="brand-icon-house">🏛️</div>
        <div class="brand-title-group">
          <span class="brand-title">BuildCraft</span>
          <span class="brand-tagline">Build Better. Live Better.</span>
        </div>
      </a>

      <nav>
        <ul class="nav-links">
          <li class="nav-item <?php echo ($activePage === 'home') ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
          <li class="nav-item <?php echo ($activePage === 'about') ? 'active' : ''; ?>"><a href="about.html">About</a></li>
          <li class="nav-item <?php echo ($activePage === 'services') ? 'active' : ''; ?>"><a href="services.html">Services</a></li>
          <li class="nav-item <?php echo ($activePage === 'portfolio') ? 'active' : ''; ?>"><a href="portfolio.html">Projects</a></li>
          <li class="nav-item <?php echo ($activePage === 'contact') ? 'active' : ''; ?>"><a href="contact.html">Contact</a></li>
        </ul>
      </nav>

      <div class="nav-actions">
        <a href="contact.html" class="btn btn-gold btn-sm">Get a Quote &rarr;</a>
        <button id="nav-hamburger-btn" class="nav-hamburger" aria-label="Open Navigation Menu">☰</button>
      </div>
    </div>
  </div>
</header>
