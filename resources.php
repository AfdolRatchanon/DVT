<?php
// error_reporting(E_ALL);
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ERROR | E_PARSE | E_NOTICE);
// require('ERR/report.php');

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
                            <a href="index.php" class="text-danger">
                                <?=
                                $_SESSION['lang'] == 'th'
                                    ? 'หน้าแรก'
                                    : 'HOME'
                                ?>
                            </a>
                        </li>
                        <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                        <li class="breadcrumb-item active">
                            <?= $_SESSION['lang'] == 'th'
                                ? "แหล่งข้อมูลเพิ่มเติม"
                                : "Resources"
                            ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="jumbotron bg-primary">
                <h2><?= $_SESSION['lang'] == 'th'
                        ? "แหล่งข้อมูลเพิ่มเติม"
                        : "Resources"
                    ?></h2>
                <!-- <p>Use these resources and tools to learn about Australian Apprenticeships and research your career
                    options.</p> -->
            </div>


            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="min-height: 680px;">
                        <a href="https://drive.google.com/file/d/1XpNg57PTFXJheiwWeCA_afwcvY9-MwDg/view"
                            target="_blank">
                            <img src="./img/resources/แนวทางปฏิบัติการจัดการอาชีวศึกษาทวิภาคี.jpg"
                                class="card-img-top rounded-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <h3 class="card-title">
                            </h3> -->
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "แนวทางปฏิบัติการจัดการอาชีวศึกษาทวิภาคี ตามประกาศกระทรวงศึกษาธิการ พ.ศ.2557"
                                    : "แนวทางปฏิบัติการจัดการอาชีวศึกษาทวิภาคี ตามประกาศกระทรวงศึกษาธิการ พ.ศ.2557"
                                ?>
                            </p>
                            <a href="https://drive.google.com/file/d/1XpNg57PTFXJheiwWeCA_afwcvY9-MwDg/view"
                                target="_blank">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "อ่านข้อมูลเพิ่มเติม"
                                    : "Read more"
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="min-height: 680px;">
                        <a href="https://drive.google.com/file/d/1P4PE-RHLLA7z2sWyJ_IczuMkfRzQAptw/view"
                            target="_blank">
                            <img src="./img/resources/คู่มือการจัดทำแผนการฝึกอาชีพในสถานประกอบการ.jpg"
                                class="card-img-top rounded-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <h3 class="card-title">

                            </h3> -->
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "คู่มือการจัดทำแผนการฝึกอาชีพในสถานประกอบการ ตามประกาศกระทรวงศึกษาธิการ พ.ศ.2557"
                                    : "คู่มือการจัดทำแผนการฝึกอาชีพในสถานประกอบการ ตามประกาศกระทรวงศึกษาธิการ พ.ศ.2557"
                                ?>
                            </p>
                            <a href="https://drive.google.com/file/d/1P4PE-RHLLA7z2sWyJ_IczuMkfRzQAptw/view"
                                target="_blank">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "อ่านข้อมูลเพิ่มเติม"
                                    : "Read more"
                                ?>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="min-height: 680px;">
                        <a href="./resources/pdf/แนวปฏิบัติการขอรับสิทธิประโยชน์ของผู้ประกอบกิจการ.pdf" target="_blank">
                            <img src="./img/resources/แนวปฏิบัติการขอรับสิทธิประโยชน์ของผู้ประกอบกิจการ.jpg"
                                class="card-img-top rounded-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <h3 class="card-title">
                                
                            </h3> -->
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "แนวปฏิบัติการขอรับสิทธิประโยชน์ของผู้ประกอบกิจการ
                                    ในการจัดการอาชีวศึกษาระบบทวิภาคี และการรับ
                                    นักเรียน นักศึกษาและบุคคลทั่วไปเข้าฝึกงาน
                                    และฝึกเตรียมเข้าทำงานกับผู้ประกอบกิจการ"
                                    : "แนวปฏิบัติการขอรับสิทธิประโยชน์ของผู้ประกอบกิจการ
                                    ในการจัดการอาชีวศึกษาระบบทวิภาคี และการรับ
                                    นักเรียน นักศึกษาและบุคคลทั่วไปเข้าฝึกงาน
                                    และฝึกเตรียมเข้าทำงานกับผู้ประกอบกิจการ"
                                ?>
                            </p>
                            <a href="./resources/pdf/แนวปฏิบัติการขอรับสิทธิประโยชน์ของผู้ประกอบกิจการ.pdf"
                                target="_blank">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "อ่านข้อมูลเพิ่มเติม"
                                    : "Read more"
                                ?>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">แนวปฏิบัติการยกเว้นภาษี ในการจัดการอาชีวศึกษาระบบทวิภาคี</h3>
                        </div>
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="1280" height="720" src="https://www.youtube.com/embed/QiGnW1qj0F8"
                                    title="เรื่อง แนวปฏิบัติการยกเว้นภาษีในการจัดการอาชีวศึกษาระบบทวิภาคี"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">มาตรฐานการจัดการอาชีวศึกษาระบบทวิภาคี</h3>
                        </div>
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="1280" height="720" src="https://www.youtube.com/embed/LMrNqwNwSGQ"
                                    title="เรื่อง มาตรฐานการจัดการอาชีวศึกษาระบบทวิภาคี" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center col-lg-3"></div>
                <div class="text-center col-lg-6">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">การจัดการอาชีวศึกษาระบบทวิภาค</h3>
                        </div>
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="1280" height="720" src="https://www.youtube.com/embed/oZV7Alsa9Nw"
                                    title="การจัดการอาชีวศึกษาระบบทวิภาคี2018" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center col-lg-3"></div>
            </div>

        </div>
    </div>
</div>


<!-- <aside class="control-sidebar control-sidebar-dark">

</aside> -->

<?php require('layout/footer.php') ?>