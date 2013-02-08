<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
    <base href="<?php echo URL::base(); ?>" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
        <title>Site title - Page title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo URL::base(); ?>" />
        <link href="css/style.css" />
        <link href="css/bootstrap.css" />
        <link href="css/bootstrap.min.css" />
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

  <body>
    
        
        
        <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./index.html">Bootstrap</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="">
                <a href="./index.html">Overview</a>
              </li>
              <li class="">
                <a href="./scaffolding.html">Scaffolding</a>
              </li>
              <li class="">
                <a href="./base-css.html">Base CSS</a>
              </li>
              <li class="active">
                <a href="./components.html">Components</a>
              </li>
              <li class="">
                <a href="./javascript.html">Javascript plugins</a>
              </li>
              <li class="">
                <a href="./less.html">Using LESS</a>
              </li>
              <li class="divider-vertical"></li>
              <li class="">
                <a href="./download.html">Customize</a>
              </li>
              <li class="">
                <a href="./examples.html">Examples</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
        
        
        
        <div class="container-fluid">
            <!-- title of site and current page -->
            <div class="row">
                <div class="span12">
                    <header>
                        <h1>Site title</h1>
                        <h2>Page title</h2>
                    </header>
                </div>
            </div>
            <!-- site navigation -->
            <nav>
                <!-- site menu -->
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            12313
                        </div>
                    </div>
                </div>
                
                
                
                <menu id="menu">

                </menu>
                <!-- отображение текущего положения на сайте -->
                <div id="breadcrumbs">

                </div>
                <!-- поисковая строка -->
                <div id="search">

                </div>
            </nav>
            <!-- topplace container -->
            <section id="topplace">

            </section>
            <section id="content">
                <!-- mainplace container -->
                <section id="mainplace">

                </section>
                <!-- alternativeplace container -->
                <section id="alternativeplace">
                    <?php
                    if (isset($plugins)) {
                        foreach ($plugins as $plugin) {
                            $plugin_view = View::factory('plugin');
                            $plugin_view->set('caption', $plugin['caption']);
                            $plugin_view->set('content', $plugin['content']);
                            echo $plugin_view;
                        }
                    }
                    ?>
                </section>
            </section>
            <!-- bottomplace container -->
            <section id="bottomplace">

            </section>
            <!-- site footer -->
            <footer id="footer">

            </footer>
        </div>
    </body>
</html>
