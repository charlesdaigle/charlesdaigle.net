<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<?php 
include_once './head.php';

/* 
navbar/homepage loads like so:
    On homepage: 
        Home          --> nothing
        About/Contact --> scroll down

    Elsewhere in site: 
        Home          --> index_no_animation.php
        About/Contact --> index_no_animation.php#about

*/
$this_page_link = "$_SERVER[REQUEST_URI]";
$HOME_URI_1 = '/';
$HOME_URI_2 = '/index.php';
$to_append = '/';

console_log($this_page_link);

// if we are on the homepage...
if (strcmp($this_page_link, $HOME_URI_1) !== 0 &&
    strcmp($this_page_link, $HOME_URI_2) !== 0) {
  $to_append = './index_no_animation.php';
}

console_log($to_append);

?>
<div class="container-fluid">
  <header id="header" class="header header-fixed" role="banner">
    <nav class="navbar navbar-expand-lg navbar-light" role="navigation">
      <div class="container-fluid">

        <a class="navbar-brand" href="/">CD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li>
              <a class="navbar-active navbar-link" href="<?php echo $to_append?>#home" title="Home -- Charles Daigle">
                <i class="fas fa-home"></i>
                <span>Home</span>
              </a>
            </li>

            <li>
              <a class="navbar-link" href="<?php echo $to_append . '#about'?>" title="About -- Charles Daigle">
                <i class="fas fa-question-circle"></i>
                <span>About</span>
              </a>
            </li>

            <li>
              <a class="navbar-link" href="<?php echo $to_append?>#contact">
                <i class="fas fa-address-card"></i>
                <span>Contact</span>
              </a>
            </li>

            <li>
              <a class="navbar-link" href="/docs/resume_2021.pdf" target="_blank" title="Resume">
                <i class="fas fa-file-alt"></i>
                <span>Resume</span>
              </a>
            </li>

            <li>
              <a href="./all_projects.php" class="navbar-link" title="Blog">
                <i class="fas fa-rss"></i>
                <span>Blog</span>
              </a>
            </li>

            <li>
              <a href="/stem" class="navbar-link navbar-stem" title="STEM Tutoring and Enrichment" target="_blank">
                <span>
                  <img src="stem/images/favicon-16x16.png"></img>
                </span>
                <span>STEM Tutoring</span>
              </a>
            </li>

      <!-- Two Bootstrap examples: a dropdown, and a search bar

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>-->
        </ul>
      </div>
    </div>
  </nav>
</header>
</div>