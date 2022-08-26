<body
    class="hold-transition pace-primary sidebar-collapse layout-top-nav layout-navbar-fixed layout-fixed <?= $_SESSION['mode'] == 'dark' ? 'dark-mode' : '' ?>">
    <div class="wrapper">
        <nav
            class="main-header navbar navbar-expand-lg navbar-<?= $_SESSION['mode'] == 'light' ? 'light' : 'dark' ?>  ">
            <!-- border-bottom-0 -->
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">AU 2 TH</span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li> -->

                        <li class="nav-item ">
                            <a href="student.php" class="nav-link navtop">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "นักเรียน นักศึกษา"
                                    : "STUDENT"  ?>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="job-hunter.php" class="nav-link navtop">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "นักล่างาน"
                                    : "JOB HUNTER"
                                ?>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="employers.php" class="nav-link navtop">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "นายจ้าง"
                                    : "EMPLOYERS"
                                ?>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="industry-insiders.php" class="nav-link navtop">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "บุคคลภายในอุตสาหกรรม"
                                    : "INDUSTRY INSIDERS"
                                ?>
                            </a>
                        </li>
                    </ul>
                    <!-- <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->
                </div>

                <ul class="order-1 order-lg-3 navbar-nav navbar-no-expand ml-auto">

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">

                                <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">

                                <div class="media">
                                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">

                                <div class="media">
                                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <a class="nav-link"
                        href="<?= $_SESSION['mode'] == 'light' ? "?action=dark-mode" : "?action=light-mode"  ?>">
                        <?= $_SESSION['mode'] == 'light' ? "<i class='fa-regular fa-lightbulb'></i>" : "<i class='fa-solid fa-lightbulb'></i>" ?>
                    </a>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="flag-icon flag-icon-<?= $_SESSION['lang'] ?>"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-0">
                            <a href="?action=lang-th"
                                class="dropdown-item <?= $_SESSION['lang'] == 'th' ? 'active' : '' ?>">
                                <i class="flag-icon flag-icon-th mr-2"></i> Thailand
                            </a>
                            <a href="?action=lang-eng"
                                class="dropdown-item <?= $_SESSION['lang'] == 'gb' ? 'active' : '' ?>">
                                <i class="flag-icon flag-icon-gb mr-2"></i> English
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>