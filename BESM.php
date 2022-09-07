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
                            <a href="index.php">
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
                                ? "การจัดการศึกษาระบบทวิภาคี"
                                : "Bilateral Education System Management"
                            ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="jumbotron bg-success">

                <h2>
                    <?= $_SESSION['lang'] == 'th'
                        ? "การจัดการศึกษาระบบทวิภาคี"
                        : "Bilateral Education System Management"
                    ?>
                </h2>
                <!-- <h2>Australian Apprenticeships Resources for Students</h2>
                <p>Use these resources and tools to learn about Australian Apprenticeships and research your career
                    options.</p> -->
            </div>


            <div class="row">
                <div class="card card-success card-outline">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 32px">
                            <?= $_SESSION['lang'] == 'th'
                                ? "การจัดการศึกษาระบบทวิภาคี"
                                : "Bilateral Education System Management"
                            ?>
                        </h5>
                        <p class="card-text">
                            <?= $_SESSION['lang'] == 'th'
                                ? " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; การจัดการศึกษาระบบทวิภาคี ต้องเป็นไปตามโครงสร้างหลักสูตร จำนวนหน่วยกิต รูปแบบ และระยะเวลาที่กำหนดตามเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับ และแต่ละสาขาวิชาโดยกำหนดระยะเวลาของการฝึกอาชีพในสถานประกอบการของแต่ละหลักสูตรไม่น้อยกว่า ๒ ภาคเรียน หรือ ๑ ปีการศึกษา."
                                : "????"
                            ?>

                        </p>
                        <!-- <a href="#" class="card-link">Read more</a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


<!-- <aside class="control-sidebar control-sidebar-dark">

</aside> -->

<?php require('layout/footer.php') ?>