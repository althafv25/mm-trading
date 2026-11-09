(function () {
  var toggle = document.querySelector('.menu-toggle');
  var nav = document.querySelector('.primary-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }
  document.querySelectorAll('[data-filter]').forEach(function (button) {
    button.addEventListener('click', function () {
      document.querySelectorAll('[data-filter]').forEach(function (item) { item.classList.remove('is-active'); });
      button.classList.add('is-active');
      var filter = button.getAttribute('data-filter');
      document.querySelectorAll('[data-category]').forEach(function (card) {
        card.hidden = filter !== 'all' && card.getAttribute('data-category') !== filter;
      });
    });
  });
  var top = document.querySelector('.back-to-top');
  if (top) {
    window.addEventListener('scroll', function () { top.classList.toggle('is-visible', window.scrollY > 500); });
    top.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: 'smooth' }); });
  }
  var form = document.querySelector('#contact-form');
  if (form) {
    form.addEventListener('submit', function (event) {
      var status = document.querySelector('.form-status');
      if (!form.checkValidity()) { event.preventDefault(); status.textContent = 'Please complete the required fields.'; status.style.color = '#a33'; }
    });
  }
}());