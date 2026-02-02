// document.addEventListener('DOMContentLoaded', () => {
//   const item = document.querySelector('.main-nav__item');
//   const toggle = document.querySelector('.main-nav__toggle');

//   toggle.addEventListener('click', () => {
//     const isOpen = item.classList.toggle('is-open');
//     toggle.setAttribute('aria-expanded', isOpen);
//   });

//   // Klick außerhalb schließt
//   document.addEventListener('click', e => {
//     if (!e.target.closest('.main-nav')) {
//       item.classList.remove('is-open');
//       toggle.setAttribute('aria-expanded', 'false');
//     }
//   });
// });
