
<script>
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
</script>

<!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <script src="//yihui.org/js/math-code.js"></script>

  <script src="./js/mathjax_config.js" defer></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

  <script src="https://unpkg.com/headroom.js"></script>

  <script src="./js/headroom_script.js"></script>

<!-- Code Prettify
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.js"></script>


  <script>
    $( document ).ready(function() {
      $(".card").css("transition", "100ms");
      $(".badge-primary").css("transition", "75ms");
    });


  </script>

  <script>
    $(":root").click(function(){
      $(".navbar-collapse").collapse('hide');
    });
  </script> 