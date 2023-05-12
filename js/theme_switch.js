const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
const navbar = document.getElementById("nav");  
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
  document.documentElement.setAttribute('data-theme', currentTheme);

  
  if (currentTheme === 'dark') {
    toggleSwitch.checked = true;
    navbar.classList.remove("navbar-light");
    navbar.classList.add("navbar-dark");
  }
  else {
    toggleSwitch.checked = false;
    navbar.classList.remove("navbar-dark");
    navbar.classList.add("navbar-light");
  }
}

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute('data-theme', 'dark');
    localStorage.setItem('theme', 'dark');
    navbar.classList.remove("navbar-light");
    navbar.classList.add("navbar-dark");
  }
  else {
    document.documentElement.setAttribute('data-theme', 'light');
    localStorage.setItem('theme', 'light');
    navbar.classList.remove("navbar-dark");
    navbar.classList.add("navbar-light");
  }    
}

toggleSwitch.addEventListener('change', switchTheme, false);

