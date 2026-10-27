// Modo oscuro recordado
const body = document.body;
if (localStorage.getItem('tema') === 'oscuro') body.classList.add('oscuro');
document.getElementById('tema').addEventListener('click', () => {
  body.classList.toggle('oscuro');
  localStorage.setItem('tema', body.classList.contains('oscuro') ? 'oscuro' : 'claro');
});

// Validación en el formulario + contador de caracteres
const form = document.getElementById('form-contacto');
if (form) {
  const msg = form.querySelector('textarea');
  const cont = document.getElementById('contador');
  msg.addEventListener('input', () => cont.textContent = msg.value.length + '/500');
  form.addEventListener('submit', e => {
    if (msg.value.trim().length < 10) {
      e.preventDefault();
      alert('El mensaje debe tener al menos 10 caracteres.');
    }
  });
}