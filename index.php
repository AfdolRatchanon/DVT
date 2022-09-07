<?php
// error_reporting(E_ALL);
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ERROR | E_PARSE | E_NOTICE);
session_start();
require('action/action.php');
require('layout/header.php');
require('layout/navtop.php');
require('layout/navside.php');
?>
<div class="content-wrapper">

    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#"><?= $_SESSION['lang'] == 'th' ? 'หน้าแรก' : 'HOME' ?></a>
                        </li>
                        <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Top Navigation</li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container">

            <!-- <div id="carouselExampleCaptions" class="carousel slide rounded" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/104050.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block ">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/Eurofighter-Typhoon.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/372211.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/986554.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fourth slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div> -->

            <div class="jumbotron bg-primary" style="
                /* background-image: url('./img/372211.jpg');
                background-size:cover; 
                background-position: top; */
                ">
                <h2>
                    <?= $_SESSION['lang'] == 'th'
                        ? "เกี่ยวกับระบบทวิภาคีของการจัดการอาชีวศึกษา"
                        : "The Thai Apprenticeships Pathways website is an Thailand wide information hub"
                    ?>
                </h2>
            </div>
            <h4 class="my-3">
                <?= $_SESSION['lang'] == 'th'
                    ? "แนวทางหาแรงงานฝึกงานและผู้ต้องการรับการฝึกงาน - ข้อมูลสำหรับผู้ที่กำลังพิจารณาทางเลือกในอาชีพ นายจ้างที่กำลังมองหาการจัดหางาน และผู้ที่ให้การสนับสนุนและคำแนะนำ"
                    : "The Thai Apprenticeships & Traineeships Information Service - information for people considering career options, employers looking at recruitment and those providing support and advice."
                ?>
            </h4>

            <!--  -->
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-warning card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->

            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="min-height: 425px;">
                        <img src="./img/104050.jpg" class="card-img-top rounded-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="student.php">
                                    <?= $_SESSION['lang'] == 'th'
                                        ? "นักเรียน นักศึกษา"
                                        : "Students"
                                    ?>
                                </a>
                            </h3>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "ข้อมูลเส้นทางการฝึกงานและฝึกงาน"
                                    : "Apprenticeship & traineeship career pathway information."
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="min-height: 425px;">
                        <img src="./img/372211.jpg" class="card-img-top rounded-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="#">
                                    <?=
                                    $_SESSION['lang'] == 'th'
                                        ? "หาที่ฝึกงาน"
                                        : "Job Hunters"
                                    ?>
                                </a>
                            </h3>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "แหล่งข้อมูลและข้อมูลช่วยเหลือตนเองที่ให้แนวคิดการฝึกงานและการฝึกงาน"
                                    : "Self help resources and information providing apprenticeship & traineeship ideas."
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="min-height: 425px;">
                        <img src="./img/986554.jpg" class="card-img-top rounded-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="#">
                                    <?=
                                    $_SESSION['lang'] == 'th'
                                        ? "นายจ้าง"
                                        : "Employers"
                                    ?>
                                </a>
                            </h3>
                            <p class="card-text">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "ข้อมูล การสนับสนุน และแหล่งข้อมูลสำหรับนายจ้าง"
                                    : "Information, support and resources for Employers."
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="min-height: 425px;">
                        <img src="./img/Eurofighter-Typhoon.jpg" class="card-img-top rounded-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="#">
                                    <?=
                                    $_SESSION['lang'] == 'th'
                                        ? "คนวงในในอุตสาหกรรม"
                                        : "Industry Insiders"
                                    ?>
                                </a>
                            </h3>
                            <p class="card-text">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "ข้อมูลและแหล่งข้อมูลสำหรับผู้ให้คำปรึกษาด้านอาชีพและผู้ที่ให้บริการและคำแนะนำ"
                                    : "Information & resources for Career Advisers and people providing service and advice."
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "นักเรียน นักศึกษา"
                                    : "Students"
                                ?>
                            </h3>
                        </div>
                        <div class="card-body">
                            <?= $_SESSION['lang'] == 'th'
                                ? "ข้อมูลเส้นทางการฝึกงานและฝึกงาน"
                                : "Apprenticeship & traineeship career pathway information."
                            ?>
                        </div>
                        <div class="card-footer text-right">
                            <a href="student.php">Read more </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "หาที่ฝึกงาน"
                                    : "Job Hunters"
                                ?>
                            </h3>
                        </div>
                        <div class="card-body">
                            <?= $_SESSION['lang'] == 'th'
                                ? "แหล่งข้อมูลและข้อมูลช่วยเหลือตนเองที่ให้แนวคิดการฝึกงานและการฝึกงาน"
                                : "Self help resources and information providing apprenticeship & traineeship ideas."
                            ?>
                        </div>
                        <div class="card-footer text-right">
                            <a href="student.php">Read more </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "นายจ้าง"
                                    : "Employers"
                                ?>
                            </h3>
                        </div>
                        <div class="card-body">
                            <?=
                            $_SESSION['lang'] == 'th'
                                ? "ข้อมูล การสนับสนุน และแหล่งข้อมูลสำหรับนายจ้าง"
                                : "Information, support and resources for Employers."
                            ?>
                        </div>
                        <div class="card-footer text-right">
                            <a href="student.php">Read more </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "คนวงในในอุตสาหกรรม"
                                    : "Industry Insiders"
                                ?>
                            </h3>
                        </div>
                        <div class="card-body">
                            <?=
                            $_SESSION['lang'] == 'th'
                                ? "ข้อมูลและแหล่งข้อมูลสำหรับผู้ให้คำปรึกษาด้านอาชีพและผู้ที่ให้บริการและคำแนะนำ"
                                : "Information & resources for Career Advisers and people providing service and advice."
                            ?>
                        </div>
                        <div class="card-footer text-right">
                            <a href="student.php">Read more </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->

            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary card-outline" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "นักเรียน นักศึกษา"
                                    : "Students"
                                ?>
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "ข้อมูลเส้นทางการฝึกงานและฝึกงาน"
                                    : "Apprenticeship & traineeship career pathway information."
                                ?>
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-success card-outline" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "หาที่ฝึกงาน"
                                    : "Job Hunters"
                                ?>
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "แหล่งข้อมูลและข้อมูลช่วยเหลือตนเองที่ให้แนวคิดการฝึกงานและการฝึกงาน"
                                    : "Self help resources and information providing apprenticeship & traineeship ideas."
                                ?>
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-warning card-outline" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "นายจ้าง"
                                    : "Employers"
                                ?>
                            </h5>
                            <p class="card-text">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "ข้อมูล การสนับสนุน และแหล่งข้อมูลสำหรับนายจ้าง"
                                    : "Information, support and resources for Employers."
                                ?>
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-danger card-outline" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "คนวงในในอุตสาหกรรม"
                                    : "Industry Insiders"
                                ?>
                            </h5>
                            <p class="card-text">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? "ข้อมูลและแหล่งข้อมูลสำหรับผู้ให้คำปรึกษาด้านอาชีพและผู้ที่ให้บริการและคำแนะนำ"
                                    : "Information & resources for Career Advisers and people providing service and advice."
                                ?>
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
            </div>


            <!--  -->
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's
                                content.
                            </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Featured</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Special title treatment</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Featured</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Special title treatment</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div> -->

        </div>
    </div>

</div>


<!-- <aside class="control-sidebar control-sidebar-dark">

</aside> -->

<?php require('layout/footer.php') ?>