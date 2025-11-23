document.querySelectorAll('.btn.filter').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault(); // prevents the page reload if href="#"
    document.querySelectorAll('.btn.filter').forEach(b => b.classList.remove('active'));
    this.classList.add('active');
  });
});