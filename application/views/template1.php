<!DOCTYPE html>
<html>
    <head>
        <title>Бухта капитана Джека - <?php echo isset($page_title) ? $page_title : '' ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo URL::base(); ?>" />
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <!-- title of site and current page -->
            <!--            <div class="row">
                            <div class="span12">
                                <header>
                                    <h1>Название сайта</h1>
                                </header>
                            </div>
                        </div>-->
            <!-- site navigation bar -->
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container" style="width:auto">

                        <!-- site name -->
                        <a href="" class="brand">Бухта капитана Джека <sup>pre-alpha</sup></a>

                        <!-- site menu -->
                        <ul class="nav pull-left">
                            <li class="active"><a href="#"><i class="icon-home icon-white"></i></a></li>
                            <li><a href="#">Категории</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>

                        <!-- search form -->
                        <form class="navbar-search pull-left">
                            <input type="text" class="search-query" placeholder="Поиск...">
                        </form>

                        <!-- users menu -->
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown">Пользователь<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $user = Auth::instance();
                                    if (!$user->logged_in()) {
                                        echo

                                        '<li>
                                        <a href="users/login">Войти</a>
                                    </li>
                                    <li>
                                        <a href="users/signup">Зарегистрироваться</a>
                                    </li>
                                    <li>
                                        <a href="users/recover">Восстановить аккаунт</a>
                                    </li>
                                    <li>
                                        <a href="users/activation">Запросить активацию</a>
                                    </li>';
                                    } else {
                                        echo
                                        '<li>
                                        <a href="users/logout">Выйти</a>
                                    </li>
                                    <li>
                                        <a href="cabinet">Личный кабинет</a>
                                    </li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown">Админ<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo URL::site('admin') ?>">Панель администратора</a>
                                    </li>
                                    <li>
                                        <a href="#">Статистика сайта</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- end of nav -->
            <div class="row">
                <!-- отображение текущего положения на сайте -->
                <div class="span9">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#"><i class="icon-home"></i></a> <span class="divider">/</span>
                        </li>
                        <li>
                            <a href="#">Категории</a> <span class="divider">/</span>
                        </li>
                        <li class="active">
                            <a href="#">Книги</a>
                        </li>
                    </ul>
                </div>
                <!-- search form -->
                <div class="span3">
                    <form class="form-search  pull-right" action="">
                        <div class="input-append">
                            <input type="text" class="input-medium" placeholder="Поиск по сайту"/><button type="submit" class="btn">Искать</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- topplace container -->
            <section class="topplace row">

            </section>

            <!-- page content -->
            <section id="content" class="row">
                <!-- mainplace container -->

                <section id="mainplace" class="span9" style="min-height: 850px">
                    <!-- Messages output -->
                    <?php
                    if (isset($error_messages)) {
                        foreach ($error_messages as $error) {
                            $temp_msg = View::factory('messages/error');
                            $temp_msg->set('message', $error);
                            echo $temp_msg;
                        }
                    }
                    if (isset($warning_messages)) {
                        foreach ($warning_messages as $warning) {
                            $temp_msg = View::factory('messages/warning');
                            $temp_msg->set('message', $warning);
                            echo $temp_msg;
                        }
                    }
                    if (isset($info_messages)) {
                        foreach ($info_messages as $message) {
                            $temp_msg = View::factory('messages/info');
                            $temp_msg->set('message', $message);
                            echo $temp_msg;
                        }
                    }
                    if (isset($success_messages)) {
                        foreach ($success_messages as $success) {
                            $temp_msg = View::factory('messages/success');
                            $temp_msg->set('message', $success);
                            echo $temp_msg;
                        }
                    }
                    ?>

                    <!-- Main site content output -->
                    <?php echo isset($mainplace) ? $mainplace : ''; ?>
                </section>
                <!-- alternativeplace container -->
                <section id="alternativeplace" class="span3">
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
            <footer class="footer">
                <p>Footer</p>
            </footer>
        </div>
    </body>
</html>
