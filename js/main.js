/**
 * BUILDCRAFT ATELIER — INTERACTIVE CORE JS
 * Features: Native HTML5 Video Tour Modal, Before/After Slider, Viewport Simulator,
 * Theme Switcher, Mobile Drawer.
 */

document.addEventListener('DOMContentLoaded', () => {
  initThemeSwitcher();
  initViewportSimulator();
  initBeforeAfterSlider();
  initVideoModal();
  initMobileDrawer();
  initSmoothScroll();
});

/* ==========================================================================
   1. NATIVE HTML5 ARCHITECTURAL VIDEO TOUR MODAL (Direct 100% Playback)
   ========================================================================== */
function initVideoModal() {
  const videoModal = document.getElementById('video-modal');
  const closeBtn = document.getElementById('video-modal-close');
  const video = document.getElementById('architectural-video');
  const watchButtons = document.querySelectorAll('.btn-video, #hero-watch-video-btn');

  if (!videoModal || !video) return;

  const openVideo = (e) => {
    if (e) e.preventDefault();
    videoModal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    // Safely reset and initiate playback
    try {
      if (video.readyState >= 1) {
        video.currentTime = 0;
      }
    } catch (err) {
      console.log('Video seek notice:', err);
    }

    const playPromise = video.play();
    if (playPromise !== undefined) {
      playPromise.then(() => {
        console.log('Video playback started successfully');
      }).catch((err) => {
        // Fallback to muted playback if browser autoplay policy blocks unmuted audio
        console.log('Unmuted playback blocked by browser, attempting muted playback:', err);
        video.muted = true;
        video.play().catch(finalErr => {
          console.log('Awaiting manual user play interaction:', finalErr);
        });
      });
    }
  };

  const closeVideo = () => {
    videoModal.classList.remove('active');
    try {
      video.pause();
    } catch (err) {}
    document.body.style.overflow = '';
  };

  watchButtons.forEach(btn => {
    btn.addEventListener('click', openVideo);
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', closeVideo);
  }

  videoModal.addEventListener('click', (e) => {
    if (e.target === videoModal) {
      closeVideo();
    }
  });

  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && videoModal.classList.contains('active')) {
      closeVideo();
    }
  });
}

/* ==========================================================================
   2. THEME SWITCHER
   ========================================================================== */
function initThemeSwitcher() {
  const themeBtn = document.getElementById('theme-toggle-btn');
  if (!themeBtn) return;

  const savedTheme = localStorage.getItem('site-theme') || 'dark';
  document.documentElement.setAttribute('data-theme', savedTheme);
  updateThemeBtnLabel(savedTheme);

  themeBtn.addEventListener('click', () => {
    const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('site-theme', newTheme);
    updateThemeBtnLabel(newTheme);
    showToast(`Switched to ${newTheme === 'dark' ? 'Royal Obsidian' : 'Alabaster Gold'} theme`);
  });
}

function updateThemeBtnLabel(theme) {
  const btn = document.getElementById('theme-toggle-btn');
  if (!btn) return;
  if (theme === 'light') {
    btn.innerHTML = `<span>☀️</span> Light Alabaster`;
  } else {
    btn.innerHTML = `<span>🌙</span> Dark Obsidian`;
  }
}

/* ==========================================================================
   3. VIEWPORT SIMULATOR (Works on Desktop, Laptop, Tablet, Mobile)
   ========================================================================== */
function initViewportSimulator() {
  const stage = document.getElementById('viewport-stage');
  const buttons = document.querySelectorAll('.viewport-btn');
  if (!stage || !buttons.length) return;

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const mode = btn.dataset.viewport;
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      stage.classList.remove('view-tablet', 'view-mobile');
      if (mode === 'tablet') {
        stage.classList.add('view-tablet');
        showToast('Viewing in Tablet Mode (768px)');
      } else if (mode === 'mobile') {
        stage.classList.add('view-mobile');
        showToast('Viewing in Mobile Mode (390px)');
      } else {
        showToast('Viewing in Desktop Mode (Full Width)');
      }
    });
  });
}

/* ==========================================================================
   4. BEFORE & AFTER INTERACTIVE SPLIT SLIDER
   ========================================================================== */
function initBeforeAfterSlider() {
  const container = document.getElementById('comparison-slider');
  const afterLayer = document.getElementById('slider-after-layer');
  const handle = document.getElementById('slider-handle');
  if (!container || !afterLayer || !handle) return;

  let isDragging = false;

  const setSliderPos = (xPos) => {
    const rect = container.getBoundingClientRect();
    let offsetX = xPos - rect.left;
    if (offsetX < 0) offsetX = 0;
    if (offsetX > rect.width) offsetX = rect.width;
    const percentage = (offsetX / rect.width) * 100;

    afterLayer.style.width = `${percentage}%`;
    handle.style.left = `${percentage}%`;
  };

  const onPointerMove = (e) => {
    if (!isDragging) return;
    const clientX = e.clientX || (e.touches && e.touches[0].clientX);
    if (clientX !== undefined) {
      setSliderPos(clientX);
    }
  };

  container.addEventListener('mousedown', (e) => {
    isDragging = true;
    setSliderPos(e.clientX);
  });

  window.addEventListener('mouseup', () => {
    isDragging = false;
  });

  window.addEventListener('mousemove', onPointerMove);

  container.addEventListener('touchstart', (e) => {
    isDragging = true;
    if (e.touches && e.touches[0]) {
      setSliderPos(e.touches[0].clientX);
    }
  }, { passive: true });

  window.addEventListener('touchend', () => {
    isDragging = false;
  });

  window.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    if (e.touches && e.touches[0]) {
      setSliderPos(e.touches[0].clientX);
    }
  }, { passive: true });
}

/* ==========================================================================
   5. MOBILE MENU DRAWER
   ========================================================================== */
function initMobileDrawer() {
  const hamburger = document.getElementById('nav-hamburger-btn');
  const closeBtn = document.getElementById('mobile-drawer-close');
  const overlay = document.querySelector('.mobile-menu-overlay');
  const links = document.querySelectorAll('.mobile-nav-links a');

  if (!hamburger) return;

  const openDrawer = () => document.body.classList.add('mobile-menu-open');
  const closeDrawer = () => document.body.classList.remove('mobile-menu-open');

  hamburger.addEventListener('click', openDrawer);
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
  if (overlay) overlay.addEventListener('click', closeDrawer);

  links.forEach(l => l.addEventListener('click', closeDrawer));
}

/* ==========================================================================
   6. SMOOTH SCROLLING
   ========================================================================== */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      const targetElem = document.querySelector(targetId);
      if (targetElem) {
        e.preventDefault();
        targetElem.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
}

/* ==========================================================================
   TOAST HELPER NOTIFICATION
   ========================================================================== */
function showToast(msg) {
  let toast = document.getElementById('toast-notice');
  if (!toast) {
    toast = document.createElement('div');
    toast.id = 'toast-notice';
    toast.style.cssText = `
      position: fixed;
      bottom: 24px;
      right: 24px;
      background: #151b28;
      border: 1px solid #e5a93c;
      padding: 12px 20px;
      border-radius: 10px;
      color: #fff;
      font-size: 0.9rem;
      z-index: 9999;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
      opacity: 0;
      transform: translateY(20px);
    `;
    document.body.appendChild(toast);
  }
  toast.innerHTML = `<span>✨</span> <div>${msg}</div>`;
  toast.style.opacity = '1';
  toast.style.transform = 'translateY(0)';

  clearTimeout(window.toastTimer);
  window.toastTimer = setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(20px)';
  }, 3200);
}
