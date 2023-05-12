<head>
    <?php include_once './navbar.php'?>
    <?php include_once './head.php' ?>

    <style>
    
    .container{
        margin-top: 30px;
        max-width:  1200px;
        padding-left: 5%;
        padding-right: 5%;
    }

    /* SPAN elements with the classes below are added by prettyprint. */
    .pln { color: #000 }  /* plain text */

    @media screen {
      .str { color: #c63232 }  /* string content */
      .kwd { color: #22B14C; font-weight: bold }  /* a keyword */
      .com { color: #1aaab1; font-style: italic }  /* a comment */
      .typ { color: #523df5 }  /* a type name */
      .lit { color: #31ad1f }  /* a literal value */
      /* punctuation, lisp open bracket, lisp close bracket */
      .pun, .opn, .clo { color: #660 }
      .tag { color: #008 }  /* a markup tag name */
      .atn { color: #606 }  /* a markup attribute name */
      .atv { color: #080 }  /* a markup attribute value */
      .dec, .var { color: #606 }  /* a declaration; a variable name */
      .fun { color: red }  /* a function name */
  }

  /* Use higher contrast and text-weight for printable form. */
  @media print, projection {
      .str { color: #8be87d }
      .kwd { color: #a99efa; font-weight: bold }
      .com { color: #ff6666; font-style: italic }
      .typ { color: #cd52e0; font-weight: bold }
      .lit { color: #7de8e7 }
      .pun, .opn, .clo { color: #444400 }
      .tag { color: #006; font-weight: bold }
      .atn { color: #404 }
      .atv { color: #060 }
  }

  /* Put a border around prettyprinted code snippets. */
  pre.prettyprint { padding: 2px; border: 1px solid #888 }

  /* Specify class=linenums on a pre to get line numbering */
  ol.linenums { margin-top: 0; margin-bottom: 0 } /* IE indents via margin-left */
  li.L0, { background: #666666 }
  li.L1, 
  li.L2,
  li.L3,
  li.L5,
  li.L6,
  li.L7,
  li.L8 { list-style-type: none }
  /* Alternate shading for lines */
  li.L1,
  li.L3,
  li.L5,
  li.L7,
  li.L9 { background: #eee }

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container-fluid">
        <div class='row'>
            <div class='col col-lg-8 col-md-10 col-sm-12'>
                <?php
                include './project.php';
                include './Parsedown.php';

                if(isset($_GET["id"])){
                    $post_id = $_GET["id"];
                    $project = getProjectByName($post_id);
                    $page = getProjectPage($project);

                    $Parsedown = new Parsedown();

                    echo "<h1 class='post-title'>" . $project->title . "</h1>";
                    echo "<h4 class='post-description'>" . $project->description . "</h4>";
                    echo "<p style='display: inline; vertical-align: middle;'>" . $project->dateCreated . "</p>";

                    echo "<hr style='color: #dedede;'>";

                    echo "<div class='blog-content'>";

                    echo $Parsedown->text($page);


                    echo "</div>";

                }

                ?>
            </div>
        </div>
        <div class='row'>
            <div class='col col-lg-12 col-md-12 col-sm-12'>
                <?php include './related.php'?>
            </div>
        </div>
    </div>

            <script>
                $( document ).ready(function() {
                   $("code").addClass("prettyprint");
                   $("img").addClass("img-fluid");
               });
           </script>

</body>

<?php include './foot.php';?>