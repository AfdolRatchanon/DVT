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
                                ? "การดำเนินการจัดอาชีวศึกษาระบบทวิภาคี"
                                : "Implementation of a Bilateral Vocational Education System"
                            ?>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="jumbotron bg-warning">

                <h2>
                    <?= $_SESSION['lang'] == 'th'
                        ? "การดำเนินการจัดอาชีวศึกษาระบบทวิภาคี"
                        : "Implementation of a Bilateral Vocational Education System"
                    ?>
                </h2>
                <!-- <h2>Australian Apprenticeships Resources for Students</h2>
                <p>Use these resources and tools to learn about Australian Apprenticeships and research your career
                    options.</p> -->
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-warning card-outline">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "๑) สถานศึกษา หรือสถาบันการอาชีวศึกษาที่จัดการอาชีวศึกษาระบบทวิภาคีจะต้องปฏิบัติตามหลักเกณฑ์ดังนี้"
                                    : "????"
                                ?>
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๑) ผู้บริหาร และบุคลากรในสถานศึกษา หรือสถาบันการอาชีวศึกษาต้องส่งเสริม และสนับสนุนการจัดการอาชีวศึกษาระบบทวิภาคีอย่างเป็นระบบ และต่อเนื่อง <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๒) จัดการเรียนในสาขาวิชาที่ตรงตามความต้องการของสถานประกอบการ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๓) จัดทำบันทึกข้อตกลงความร่วมมือ ระหว่างสถานศึกษาหรือสถาบันการอาชีวศึกษากับสถานประกอบการ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๔) จัดทำสัญญาการฝึกอาชีพระหว่างผู้เรียนกับสถานประกอบการ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๕) จัดทำแผนการเรียน แผนการฝึกอาชีพ และแผนการนิเทศร่วมกับสถานประกอบการตลอดหลักสูตร <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๖) จัดให้มีการปฐมนิเทศก่อนการฝึกอาชีพ และปัจฉิมนิเทศหลังเสร็จสิ้นการฝึกอาชีพ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๗) เตรียมความพร้อมผู้เรียนก่อนการฝึกอาชีพ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๘) จัดให้มีครูนิเทศการฝึกอาชีพในสถานประกอบการ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๙) มีการกำกับ ติดตาม และประเมินผลการฝึกอาชีพร่วมกับสถานประกอบการ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑.๑๐) ประชาสัมพันธ์การจัดการอาชีวศึกษาระบบทวิภาคีให้กับสถานประกอบการ ผู้เรียน และผู้ปกครองทราบ"
                                    : "????"
                                ?>
                            </p>
                            <!-- <a href="#" class="card-link">Read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-warning card-outline">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                <?= $_SESSION['lang'] == 'th'
                                    ? "๒) สถานประกอบการที่จัดการการอาชีวศึกษาระบบทวิภาคีต้องให้ความร่วมมือ ดังนี้"
                                    : "????"
                                ?>
                            </h5>
                            <p class="card-text">
                                <?= $_SESSION['lang'] == 'th'
                                    ? " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๑) ส่งเสริม และสนับสนุนการพัฒนาผู้เรียนให้มีคุณธรรม จริยธรรม และคุณลักษณะที่พึงประสงค์ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๒) จัดลักษณะงานที่ฝึกอาชีพให้สอดคล้องกับการเรียนรู้ในสาขาวิชาที่ผู้เรียนกำลังศึกษา <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๓) จัดทำบันทึกข้อตกลงความร่วมมือระหว่างสถานประกอบการกับสถานศึกษา หรือสถาบันการอาชีวศึกษา <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๔) ทำสัญญาการฝึกอาชีพระหว่างผู้เรียนกับสถานประกอบการ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๕) ทำแผนการเรียน แผนการฝึกอาชีพ และแผนการนิเทศร่วมกับสถานศึกษาหรือสถาบันการอาชีวศึกษาตลอดหลักสูตร <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๖) ประเมินการฝึกอาชีพร่วมกับสถานศึกษาหรือสถาบันการอาชีวศึกษา <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๗) จัดให้มีครูฝึกในสถานประกอบการ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๘) จัดให้มีผู้ประสานงาน และผู้ควบคุมการฝึกอาชีพ การจัดการอาชีวศึกษาระบบทวิภาคีของสถานประกอบการ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๙) ประชาสัมพันธ์การจัดการอาชีวศึกษาระบบทวิภาคีให้กับผู้เรียน ผู้ปกครอง และชุมชนทราบ <br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒.๑๐) จัดให้มีสวัสดิการ และหรือเบี้ยเลี้ยงที่เหมาะสมให้ผู้เรียนตามข้อตกลง"
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