# 🏛️ BuildCraft Atelier — Luxury Architectural & Construction Website Redesign

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Responsive](https://img.shields.io/badge/Design-Fully%20Responsive-brightgreen?style=for-the-badge)](#-fully-responsive--tested-viewports)
[![License](https://img.shields.io/badge/License-MIT-gold?style=for-the-badge)](#-license)

> **BuildCraft Atelier** is a modern, high-end, editorial web experience designed for luxury architecture, premium residential planning, and commercial construction firms. It combines full-width immersive visual storytelling, micro-interactions, native 3D walkthrough video playback, and a clean modular codebase.

---

## 📌 Repository Overview

- **Project Name**: BuildCraft Atelier — Premium Architecture & Construction Redesign
- **Aesthetic Profile**: Luxury Editorial, Obsidian Slate (`#08090C`) & Brushed Champagne Gold (`#D4AF37`), Glassmorphism, 8-Point Spatial Grid
- **Typography**: Editorial Display Serif (`Cinzel`, `Cormorant Garamond`) paired with Clean Geometric Sans (`Plus Jakarta Sans`)
- **Architecture**: Dual-mode deployment &mdash; 100% standalone zero-dependency static HTML5/CSS3/JS, plus a clean modular PHP template structure (`index.php`, `includes/`)

---

## ✨ Key Features & Highlights

1. **Edge-to-Edge Immersive Hero Sections**
   - Full-width hero backgrounds across all 5 core pages with luminous, balanced ambient contrast ensuring instant visual impact and high readability.
2. **Native 3D Architectural Video Tour Modal**
   - Integrated custom video modal featuring a local 3D walkthrough tour (`assets/video/buildcraft-tour.mp4`) with smooth open/close transitions and robust autoplay handling.
3. **Interactive Before/After Renovation Slider**
   - Touch-friendly comparison slider allowing clients to drag and visually compare architectural blueprints with completed luxury builds in real time.
4. **Editorial "Our Services" Cards**
   - Clean, luxury card grid without distracting icon overlays, highlighting architectural design, residential construction, commercial planning, interior design, and project management.
5. **High-Impact Blueprint Consultation CTA**
   - Solid, high-contrast consultation banner backed by construction imagery (`cta-construction.jpg`), fully legible typography, and a clear call-to-action button.
6. **Live Dark / Light Mode Switcher**
   - CSS custom property design token system with seamless live theme toggling and local state persistence.
7. **Comprehensive Design System & Client Handover Guide**
   - Dedicated interactive token visualizer (`design-system.html`) with one-click hex copying, accompanied by `DESIGN_HANDOVER_GUIDE.md` and `PROPOSAL_COVER_LETTER.md`.

---

## 🧭 Page Map

| Page | File | Description |
| :--- | :--- | :--- |
| **Home (Flagship)** | [`index.html`](index.html) | Hero, Trust Metrics, Interactive Before/After Slider, Services Grid, Portfolio Showcase, 3D Video Modal, Testimonials, Blueprint CTA |
| **About Us** | [`about.html`](about.html) | Atelier heritage, core principles (Innovation, Quality, Trust, Community), leadership showcase, and evolution timeline |
| **Services** | [`services.html`](services.html) | Full capabilities catalog, 6-discipline breakdown, tiered package matrix, and project roadmap |
| **Portfolio** | [`portfolio.html`](portfolio.html) | Curated architectural case studies with interactive details, category filters, and photography |
| **Contact** | [`contact.html`](contact.html) | Multi-step VIP consultation booking wizard, office details, interactive map placeholder |
| **Design System** | [`design-system.html`](design-system.html) | Complete interactive design specification with live palette tokens, typography scales, buttons, and elevation cards |
| **Contest Showcase** | [`contest-showcase.html`](contest-showcase.html) | Executive presentation board showcasing the redesign comparison, rationale, and deliverables |

---

## 📂 Project Directory Structure

```text
buildcraft-atelier/
├── index.html                   # Flagship interactive homepage
├── about.html                   # Atelier story, leadership & timeline
├── services.html                # Detailed services & tiered deliverables
├── portfolio.html               # Curated architectural case studies
├── contact.html                 # 3-step consultation booking wizard
├── design-system.html           # Interactive design system & UI tokens
├── contest-showcase.html        # Client / contest presentation board
├── index.php                    # Modular PHP entry point
├── includes/
│   ├── header.php               # Global modular HTML head & meta
│   ├── navigation.php           # Global sticky navbar & mobile drawer
│   └── footer.php               # Global footer & 3D video modal markup
├── css/
│   └── style.css                # Master luxury stylesheet with CSS variables
├── js/
│   └── main.js                  # Micro-interactions, video modal, slider, theme switcher
├── assets/
│   ├── images/
│   │   ├── cta-construction.jpg # Real construction site hero CTA image
│   │   └── cta-architecture.jpg # Architectural drafting asset
│   └── video/
│       └── buildcraft-tour.mp4  # Authentic 3D architectural walkthrough video (23 MB)
├── DESIGN_HANDOVER_GUIDE.md     # Client deliverable specification manual
├── PROPOSAL_COVER_LETTER.md     # Professional proposal cover letter
├── .gitignore                   # Git ignore patterns
└── README.md                    # Project documentation
```

---

## 🚀 How to Run & Preview

### Option A: Instant Browser Preview (Zero Dependencies)
Simply open any of the `.html` files in any modern web browser (Google Chrome, Microsoft Edge, Safari, Mozilla Firefox, Brave):
```powershell
# Open homepage directly in your default browser (Windows)
start index.html
```

### Option B: Built-in PHP Server (Modular Architecture)
If you want to run the modular PHP version (`index.php` using `includes/`):
```powershell
php -S localhost:8000
```
Then navigate to `http://localhost:8000` in your web browser.

---

## 🎨 Design System Summary

- **Primary Colors**:
  - `Obsidian Black`: `#08090C`
  - `Deep Slate`: `#0F1117`
  - `Card Background`: `#161922`
  - `Champagne Gold`: `#D4AF37`
  - `Gold Hover`: `#F3E5AB`
- **Typography**:
  - Headings: `Cinzel`, `Cormorant Garamond`, serif
  - Body & UI: `Plus Jakarta Sans`, sans-serif
- **Spacing**: Strict 8-point spatial baseline (`8px`, `16px`, `24px`, `32px`, `48px`, `64px`, `80px`)

---

## 📱 Fully Responsive & Tested Viewports

- **Desktop**: 1440px &mdash; 1920px (Ultra-wide & Full HD)
- **Laptop**: 1200px &mdash; 1366px
- **Tablet**: 768px &mdash; 1024px (iPad Air / Mini)
- **Mobile**: 375px &mdash; 430px (iPhone, Pixel, Galaxy)

---

## 📄 License

This project is licensed under the [MIT License](LICENSE) &mdash; feel free to customize and deploy for personal or client presentations.
