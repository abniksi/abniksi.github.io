/* Creating a function called navbarSwitch. */
function navbarSwitch() {
  /* Selecting navbarItems class with DOM manipulation. */
  var navbarToggle = document.querySelectorAll('.navbarItems');

  /* Toggle between navbarItems class and navbarToggleShow. */
  navbarToggle.forEach(nav => nav.classList.toggle('navbarToggleShow'));
}

/* When user clicks on navbarLink-toggle button, calls the navbarSwitch function
and shows the other pages the user can visit. */
document.querySelector('.navbarLink-toggle').addEventListener('click', navbarSwitch);
