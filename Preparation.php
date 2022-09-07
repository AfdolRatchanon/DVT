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
                <div class="col-sm-12">
                    <!-- <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1> -->
                </div>
                <div class="col-sm-12">
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
                                ? "การจัดเตรียมความพร้อม"
                                : "Preparation"
                            ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="jumbotron bg-danger">

                <h2>
                    <?= $_SESSION['lang'] == 'th'
                        ? "การจัดเตรียมความพร้อม"
                        : "Preparation"
                    ?>
                </h2>
                <p>
                    <?= $_SESSION['lang'] == 'th'
                        ? "สถานศึกษาอาชีวศึกษา หรือสถาบันต้องจัดเตรียมความพร้อมในด้านผู้สอน บุคลากร และทรัพยากรสนับสนุนการจัดการอาชีวศึกษาระบบทวิภาคี ดังนี้"
                        : "????"
                    ?>
                </p>
                <!-- <h2>Australian Apprenticeships Resources for Students</h2>
                <p>Use these resources and tools to learn about Australian Apprenticeships and research your career
                    options.</p> -->
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                1)
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; จัดให้มีครูผู้สอนวิชาในสาขาวิชาที่จัดการอาชีวศึกษาระบบทวิภาคีไม่น้อยกว่าร้อยละสามสิบ และต้องได้รับการพัฒนาวิชาชีพที่สอนไม่น้อยกว่าแปดสิบชั่วโมงต่อคนต่อปีการศึกษาจากสถานประกอบการที่ร่วมจัดการอาชีวศึกษาระบบทวิภาคี เพื่อให้ครูผู้สอนในสถานศึกษาได้เรียนรู้เทคโนโลยีสมัยใหม่ในสถานประกอบการ และสามารถวิเคราะห์งานนำมาพัฒนารายวิชาในหลักสูตร สามารถจัดทำแผนการฝึกอาชีพ และแผนการจัดการเรียนรู้มุ่งเน้นสมรรถนะ คุณสมบัติของครูในสาขาที่ต้องพัฒนาด้านวิชาชีพ จึงควรเป็นครูผู้สอนในสาขาวิชา ที่ดำเนินการจัดสอนระบบทวิภาคีกับสถานประกอบการที่ร่วมลงนามความร่วมมือ และร่วมจัดการศึกษาระบบทวิภาคี หรือมีแผนการดำเนินการจัดการศึกษาในอนาคตร่วมกัน"
                                    : "????"
                                ?>
                            </p>
                            <!-- <a href="#" class="card-link">Read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                2)
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; คุณสมบัติผู้สอน เป็นผู้มีวุฒิการศึกษา มีความรู้ความสามารถที่ตรงหรือเหมาะสมกับวิชาที่สอนตามประกาศกระทรวงศึกษาธิการ เรื่องมาตรฐานคุณวุฒิอาชีวศึกษาของแต่ละระดับ"
                                    : "????"
                                ?>
                            </p>
                            <!-- <a href="#" class="card-link">Read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                3)
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สถานศึกษา หรือสถาบันการอาชีวศึกษาต้องจัดให้มีผู้มีประสบการณ์ มีความชำนาญ และความเชี่ยวชาญด้านวิชาชีพ มาถ่ายทอดทักษะ ประสบการณ์ และความรู้แก่ผู้เรียน ผู้สอน ไม่น้อยกว่าปีละสองครั้ง ๆ ละไม่ต่ำกว่าสองชั่วโมงต่อสาขาวิชาต่อภาคเรียน โดยผู้มีประสบการณ์ และประสบความสำเร็จในอาชีพเฉพาะสาขา มีผลงานเป็นที่ยอมรับในสังคม และท้องถิ่น และสามารถถ่ายทอดความรู้ได้ตามกฎหมายว่าด้วยการอาชีวศึกษา"
                                    : "????"
                                ?>
                            </p>
                            <!-- <a href="#" class="card-link">Read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                4)
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สถานศึกษา หรือสถาบันอาชีวศึกษา และสถานประกอบการที่ร่วมกันจัดอาชีวศึกษาระบบทวิภาคี ร่วมกันใจการจัดหาวัสดุ ครุภัณฑ์ พื้นที่ และอุปกรณ์การศึกษาสำหรับผู้เรียนให้เพียงพอต่อการจัดการเรียน การสอน และการฝึกอาชีพ"
                                    : "????"
                                ?>
                            </p>
                            <!-- <a href="#" class="card-link">Read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                5)
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สถานศึกษา หรือสถาบันอาชีวศึกษา จัดให้มีครูนิเทศก์ที่มีคุณสมบัติเป็นไปตามประกาศคณะกรรมการการอาชีวศึกษา เรื่อง มาตรฐานการจัดการการอาชีวศึกษาระบบทวิภาคี พ.ศ. ๒๕๖๓ และผู้ประสานงานกับสถานประกอบการ รัฐวิสาหกิจ หรือหน่วยงานของรัฐ"
                                    : "????"
                                ?>
                            </p>
                            <!-- <a href="#" class="card-link">Read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                6)
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สถานประกอบการ รัฐวิสาหกิจ หรือหน่วยงานของรัฐ จัดให้มีครูฝึกที่มีคุณสมบัติเป็นไปตามประกาศคณะกรรมการการอาชีวศึกษา เรื่อง มาตรฐานการจัดการอาชีวศึกษาระบบทวิภาคี พ.ศ. ๒๕๖๓"
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

</div>


<!-- <aside class="control-sidebar control-sidebar-dark">

</aside> -->

<?php require('layout/footer.php') ?>