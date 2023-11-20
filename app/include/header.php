<header class="header-area">

    <!-- Nav Area -->
    <div class="original-nav-area" id="stickyNav">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between">

                    <!-- Subscribe btn -->
                    <div class="flex-logo">
                        <div>                        <a href="<?=BASE_URL?>"><span class="red-letter">Е</span>лена <span class="red-letter">Т</span>имофеева |</a>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="<?=BASE_URL?>"><span class="red-letter">Д</span>ефектолог</a></li>
                                <li><a href="<?=BASE_URL?>"><span class="red-letter">Л</span>огопед</a></li>
                                <li><a href="<?=BASE_URL?>"><span class="red-letter">В</span>оспитатель</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu" id="originalNav">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="<?php echo BASE_URL?>">Главная</a></li>


                                <li><a href="<?=BASE_URL."about.php"?>">Обо мне</a></li>
                                <li><a href="<?php echo BASE_URL . "blog.php"; ?>">Блог</a></li>
                                <?php if (isset($_SESSION['id'])): ?>
                                    <li><a href="#">Кабинет | <?php echo $_SESSION['login']; ?></a>
                                        <ul class="dropdown">
                                            <?php if ($_SESSION['admin']): ?>
                                                <li><a href="<? echo BASE_URL . "admin/posts/" ?>">Админ панель</a>
                                                    <ul class="dropdown">
                                                        <li><a href="<? echo BASE_URL . "admin/posts/index.php" ?>">Статьи</a></li>
                                                        <li><a href="<? echo BASE_URL . "admin/topics/" ?>">Категории</a></li>
                                                    </ul>

                                                </li>
                                            <?php endif; ?>
                                            <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a> </li>
                                        </ul>
                                    </li>
                                <?php else: ?>
                                    <li><a href="<?php echo BASE_URL . "login.php"; ?>">Войти</a></li>
                                <?php endif; ?>
                            </ul>

                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="<?php echo BASE_URL."search.php" ?>" method="post">
                                    <input type="text" id="search" name="search-term" placeholder="Что-то ищете?">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>