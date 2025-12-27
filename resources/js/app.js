/* ===============================
   GLOBAL CSS & ICON
================================ */
import 'remixicon/fonts/remixicon.css';
import '../css/app.css';

/* ===============================
   BOOTSTRAP LARAVEL
================================ */
import './bootstrap';

/* ===============================
   ALPINE JS
================================ */
import Alpine from 'alpinejs';
window.Alpine = Alpine;

/* ===============================
   LAZY LIBS
================================ */
import { ensureAOS, ensureSwiper } from './lib/lazy-libs';

window.ensureAOS = ensureAOS;
window.ensureSwiper = ensureSwiper;

/* ===============================
   INIT AOS (GLOBAL HELPER)
================================ */
window.initAOS = async (options = {}) => {
  const config = {
    once: false,
    duration: 800,
    easing: 'ease-in-out',
    offset: 100,
    ...options,
  };

  const AOS = await ensureAOS();
  AOS.init(config);

  // Penting: refresh setelah init
  requestAnimationFrame(() => {
    AOS.refreshHard();
  });

  return AOS;
};

/* ===============================
   DOM READY
================================ */
document.addEventListener('DOMContentLoaded', async () => {
  // Jalankan AOS otomatis saat halaman load
  if (window.initAOS) {
    await window.initAOS();
  }
});

/* ===============================
   START ALPINE
================================ */
Alpine.start();
