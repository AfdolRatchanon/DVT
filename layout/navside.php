<aside class="main-sidebar sidebar-<?= $_SESSION['mode'] == 'light' ? 'light' : 'dark' ?>-danger elevation-4 ">

    <a href="index.php" class="brand-link ">
        <img src="dist/img/logo-vec.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light text-danger">DVT</span>
    </a>

    <div class="sidebar ">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a href="student.php" class="nav-link navside">
                        <i class="nav-icon fa-solid fa-user-graduate"></i>
                        <p>
                            นักเรียนนักศึกษา
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href=".html" class="nav-link">
                        <i class="nav-icon fa-regular fa-folder-open"></i>
                        <p>
                            ข้อมูลการฝึกงาน
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="company.php" class="nav-link navside">
                        <i class="nav-icon fa-solid fa-building"></i>
                        <p>
                            สถานประกอบการ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="academy.php" class="nav-link navside">
                        <i class="nav-icon fa-solid fa-school"></i>
                        <p>
                            สถานศึกษา
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="resources.php" class="nav-link navside">
                        <i class="nav-icon fa-solid fa-paper-plane"></i>
                        <p>
                            ข้อมูลเพิ่มเติม
                        </p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</aside>