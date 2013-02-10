<!DOCTYPE html>
<html>
    <head>
        <title>Каюта капитана Джека - <?php echo isset($page_title) ? $page_title : '' ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo URL::base(); ?>" />
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="js/redactor/css/redactor.css" rel="stylesheet"/>
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container" style="width:auto">

                        <!-- site name -->
                        <a href="" class="brand">Каюта капитана Джека</a>

                        <!-- site menu -->
                        <ul class="nav pull-left">
                            <li class="active"><a href="#"><i class="icon-home icon-white"></i></a></li>
                            <li><a href="#">Категории</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>

                        <!-- users menu -->
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown">Пользователь<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="users/logout">Выйти</a>
                                    </li>
                                    <li>
                                        <a href="cabinet">Личный кабинет</a>
                                    </li>
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
            <!-- topplace container -->
            <section class="topplace row">
                <div class="span12">
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
                </div>
                <div class="span12 btn-group">
                    <!-- top actions menu -->
                    <?php if(isset($topplace)) 
                        foreach($topplace as $element) {
                            echo '<div class="button pull-right">';
                            echo '<a href="'.$element['link'].'">'.$element['label'].'</a>';
                            echo '</div>';
                    } ?>
                </div>
            </section>

            <!-- page content -->
            <section id="content" class="row">
                <!-- mainplace container -->
                <section id="mainplace" class="span12" style="min-height: 850px">
                    <!-- Main site content output -->
                    <?php echo (isset($mainplace) and (!is_array($mainplace))) ? $mainplace : ''; ?>
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
