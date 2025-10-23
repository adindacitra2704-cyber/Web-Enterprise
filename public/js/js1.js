// Smooth scroll to sections when clicking nav links
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', function(e){
    e.preventDefault();
    // remove active
    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
    this.classList.add('active');

    const href = this.getAttribute('href') || '#' + this.textContent.trim().toLowerCase();
    const id = href.startsWith('#') ? href.substring(1) : this.textContent.trim().toLowerCase();
    const target = document.getElementById(id);
    if (target) {
      const top = target.getBoundingClientRect().top + window.pageYOffset - 80;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});

// on scroll update active nav
window.addEventListener('scroll', () => {
  const sections = document.querySelectorAll('section[id]');
  const scrollPos = window.pageYOffset + 100;
  sections.forEach(sec => {
    const top = sec.offsetTop;
    const bottom = top + sec.offsetHeight;
    const id = sec.id;
    const navLink = document.querySelector('.nav-link[href="#' + id + '"]') || document.querySelector('.nav-link[data-target="' + id + '"]');
    if (scrollPos >= top && scrollPos < bottom) {
      document.querySelectorAll('.nav-link').forEach(n=>n.classList.remove('active'));
      if (navLink) navLink.classList.add('active');
    }
  });
});