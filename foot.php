<script src="./js/theme_switch.js"></script>
<!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="//yihui.org/js/math-code.js"></script>

<script src="./js/mathjax_config.js" defer></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<script src="./js/headroom.js"></script>

<script src="./js/headroom_script.js"></script>

<script src="./js/readingtime.min.js"></script>

<!-- Code Prettify
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.js"></script>


<script>

  $( document ).ready(function() {
    $(".card").css("transition", "100ms");
    $(".badge-primary").css("transition", "75ms");
    $("html").css("scroll-behavior", "smooth");
  });

</script>

<script>

  $(":root").click(function(){
    $(".navbar-collapse").collapse('hide');
  });

</script> 

<script>
  // Apply "readingTime" to all articles on the page
  $('article').each(function() {

    let _this = $(this);

    _this.readingTime({
      readingTimeTarget: _this.find('.eta'),
      wordCountTarget: _this.find('.words'),
      remotePath: _this.attr('data-file'),
      remoteTarget: _this.attr('data-target')
    });
  });

  //TODO: debug this, readingtime.min.js for reasons as to why it's only outputting 1 word

</script>