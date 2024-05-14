import './bootstrap';

// Obtener elementos del DOM
const triggerEl = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
const targetEl = document.getElementById('navbar-sticky');

// Opciones del colapso
const options = {
  onCollapse: () => {
    console.log('Elemento colapsado');
  },
  onExpand: () => {
    console.log('Elemento expandido');
  },
  onToggle: () => {
    console.log('Elemento cambiado');
  },
};

// Crear una instancia de Collapse
const collapse = new Collapse(targetEl, triggerEl, options);

// Manejar eventos de clic en el botón del menú móvil
triggerEl.addEventListener('click', () => {
  collapse.toggle();
});
