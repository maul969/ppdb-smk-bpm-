// === ANIMASI FADE-IN KETIKA SCROLL ===
const boxes = document.querySelectorAll('.imgBox');
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    entry.target.classList.toggle('show', entry.isIntersecting);
  });
}, { threshold: 0.2 });

boxes.forEach(box => observer.observe(box));

// === EFEK KLIK TEKS (WARNA BERUBAH SEMENTARA) ===
boxes.forEach(box => {
  box.addEventListener('click', () => {
    const text = box.querySelector('p');
    text.style.color = '#FFD700';
    setTimeout(() => text.style.color = 'white', 500);
  });
});

// === EFEK GELOMBANG (RIPPLE EFFECT) ===
boxes.forEach(box => {
  box.addEventListener('click', e => {
    const ripple = document.createElement('span');
    ripple.classList.add('ripple');
    box.appendChild(ripple);

    const rect = box.getBoundingClientRect();
    ripple.style.left = `${e.clientX - rect.left - 40}px`;
    ripple.style.top = `${e.clientY - rect.top - 40}px`;

    setTimeout(() => ripple.remove(), 600);
  });
});

// === GRADIENT DINAMIS SAAT SCROLL ===
const sections = [
  { id: 'section-pmr', colors: ['white', 'red'] },
  { id: 'section-futsal', colors: ['red', 'purple'] },
  { id: 'section-tari', colors: ['purple', 'pink'] }
];

window.addEventListener('scroll', () => {
  const h = window.innerHeight;
  sections.forEach(({ id, colors }) => {
    const el = document.getElementById(id);
    const rect = el.getBoundingClientRect();
    if (rect.top < h && rect.bottom > 0) {
      const progress = 1 - (rect.top / h);
      const angle = 120 + progress * 30;
      const split = 60 - progress * 20;
      el.style.background = `linear-gradient(${angle}deg, ${colors[0]} ${split}%, ${colors[1]} ${split}%)`;
    }
  });
});

// === SCROLL KE BAGIAN TERTENTU ===
function scrollToSection(id) {
  document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' });
}

