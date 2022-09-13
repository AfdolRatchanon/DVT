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
                    <!-- <h2 class="m-0"> Top Navigation <small>Example 3.0</small></h2> -->
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
                            <?=
                            $_SESSION['lang'] == 'th'
                                ? "สถานถานศึกษา"
                                : "ACADEMY"
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
                <h2>สำหรับสถานศึกษาอาชีวศึกษา หรือสถาบัน</h2>
                <p>การจัดการอาชีวศึกษาระบบทวิภาคี และฝึกอบรมวิชาชีพ</p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                การจัดการอาชีวศึกษาระบบทวิภาคี
                            </h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2 class="text-center text-danger">สถานศึกษาที่จัดการอาชีวศึกษาระบบทวิภาคี</h2>
                            <center>
                                <img src="./dist/img/Slide10.jpg" class="card-img-top rounded border border-danger"
                                    style="width: 60%;" alt="...">
                            </center>
                            <blockquote class="quote-danger">
                                <h3>สถานศึกษาหรือสถาบันการอาชีวศึกษาที่จัดการอาชีวศึกษาระบบทวิภาคีจะต้องปฏิบัติตามหลักเกณฑ์
                                    ดังนี้</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1.
                                    ผู้บริหารและบุคลากรในสถานศึกษาหรือสถาบันการอาชีวศึกษาต้องส่งเสริมและสนับสนุนการจัดการอาชีวศึกษาระบบทวิภาคีอย่างเป็นระบบและต่อเนื่อง
                                    2. จัดการเรียนในสาขาวิชาที่ตรงความต้องการของสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3. จัดทําบันทึกข้อตกลงความร่วมมือ
                                    ระหว่างสถานศึกษาหรือสถาบันการอาชีวศึกษากับสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    4. จัดทําสัญญาการฝึกอาชีพระหว่างผู้เรียนกับสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5. จัดทําแผนการเรียน แผนการฝึกอาชีพ และแผนการนิเทศร่วมกับสถานประกอบการตลอดหลักสูตร
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    6. จัดให้มีการปฐมนิเทศก่อนการฝึกอาชีพ และปัจฉิมนิเทศหลังเสร็จสิ้นการฝึกอาชีพ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    7. เตรียมความพร้อมผู้เรียนก่อนการฝึกอาชีพ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    8. จัดให้มีครูนิเทศก์การฝึกอาชีพในสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9. มีการกํากับ ติดตาม และประเมินผลการฝึกอาชีพร่วมกับสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    10 . ประชาสัมพันธ์การจัดการอาชีวศึกษาระบบทวิภาคีให้กับสถานประกอบการ ผู้เรียน

                                    และผู้ปกครองทราบ
                                </p>
                            </blockquote>

                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                การจัดการอาชีวศึกษาระบบทวิภาคี
                            </h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2 class="text-center text-danger">ผู้สอนและบุคลากรสนับสนุนในระบบทวิภาคี</h2>
                            <center>
                                <img src="./dist/img/Slide11.jpg" class="card-img-top rounded border border-danger"
                                    style="width: 60%;" alt="...">
                            </center>
                            <blockquote class="quote-danger">

                                <!-- <h3>...</h3> -->
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa-solid fa-school"></i>
                                    ผู้สอนวิชาชีพในสาขาวิชาของสถานศึกษาหรือสถาบัน
                                    การอาชีวศึกษาที่จัดการอาชีวศึกษาระบบทวิภาคี
                                    ไม่น้อยกว่า ร้อยละ 30 ต้องได้รับการพัฒนาวิชาชีพที่สอน ไม่น้อยกว่า 80 ชั่วโมง : คน :
                                    ปีการศึกษา จากสถานประกอบการที่ร่วมจัดการอาชีวศึกษาระบบทวิภาคี
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa-solid fa-school"></i>
                                    สถานศึกษาหรือสถาบันการอาชีวศึกษา ต้องจัดให้มีผู้มีประสบการณ์ มีความชำนาญ
                                    และมีความเชี่ยวชาญด้านวิชาชีพมาถ่ายทอดทักษะประสบการณ์และความรู้แก่ผู้เรียน และผู้สอน
                                    ไม่น้อยกว่า 2 ครั้ง ครั้งละไม่ต่ำกว่า 2 ชั่วโมง : สาขาวิชา : ภาคเรียน
                                </p>

                            </blockquote>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                การจัดการอาชีวศึกษาระบบทวิภาคี
                            </h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2 class="text-center text-danger">การนิเทศ</h2>
                            <center>
                                <img src="./dist/img/Slide14.jpg" class="card-img-top rounded border border-danger"
                                    style="width: 60%;" alt="...">
                            </center>

                            <blockquote class="quote-danger">
                                <h3>การนิเทศผู้เรียนในสถานประกอบการ</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    กรณีที่ 1
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1. ให้ครูนิเทศไปนิเทศในสถานประกอบการอย่างน้อย 3 ครั้งต่อ 1 ภาคเรียน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2.
                                    ให้ใช้เทคโนโลยีสารสนเทศในการนิเทศในประเทศอย่างสม่ำเสมอและให้รายงานผลต่อการนิเทศต่อผู้บริหารสถานศึกษาหรือสถาบันการอาชีวศึกษาทราบ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3. ให้ใช้วิธีการนิเทศที่หลากหลาย
                                </p>
                            </blockquote>

                            <blockquote class="quote-danger">
                                <h3>การนิเทศผู้เรียนในสถานประกอบการทั้งในและต่างประเทศ</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <b>การนิเทศในประเทศ</b> ให้ดำเนินการดังนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa-solid fa-user-group"></i>
                                    ให้ครูนิเทศไปนิเทศอย่างน้อยหนึ่งครั้งต่อภาคเรียน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa-solid fa-user-group"></i>
                                    ให้ภาคีเครือข่ายในต่างประเทศเป็นผู้นิเทศแทนในทุกภาคเรียน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa-solid fa-user-group"></i>
                                    ให้ใช้เทคโนโลยีสารสนเทศในการนิเทศต่างประเทศอย่างสม่ำเสม
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <b>การนิเทศในต่างประเทศ</b> ให้ดำเนินการดังนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa-solid fa-user-group"></i>
                                    การไปนิเทศในต่างประเทศต้องได้รับอนุญาตจากผู้มีอำนาจตามระเบียบก่อนการเดินทา


                                </p>
                            </blockquote>
                        </div>
                    </div>

                </div>


            </div>
            <!-- <div class="row">
                <div class="col-lg-4">
                    <div class="card card-primary card-outline" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                1. What are Australian Apprenticeships?
                            </h5>
                            <p class="card-text">
                                Australian Apprenticeships are a great way to get a head start in your career while
                                gaining a qualification. Learn about different types of apprenticeships and traineeships
                                and the processes involved.
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-danger card-outline" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                2. Try the Find My Work Type Quizzes
                            </h5>
                            <p class="card-text">
                                When researching your future career, it is important to understand the types of work you
                                like and are suited for. Use these quizzes to find your work type and explore career
                                options related to these.
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-warning card-outline" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                3. Search for Job & Training Descriptions
                            </h5>
                            <p class="card-text">
                                Use the Job & Training Descriptions Search to identify Australian Apprenticeship options
                                in your state. Find out what is involved in each career choice and see data on the
                                industry.
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-danger card-outline" style="min-height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                4. Take a Literacy & Numeracy Quiz
                            </h5>
                            <p class="card-text">
                                Literacy and numeracy are important for most apprenticeships and traineeships. Do these
                                quizzes to see how these skills apply in different industries, and to test your level.
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-info card-outline" style="min-height: 200px; border-color:DeepPink;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                5. Information for Parents & Friends
                            </h5>
                            <p class="card-text">
                                Parents and friends can be great supporters of your career. This page has information on
                                how they can help support your career research, job hunting, and once you start an
                                Australian Apprenticeship.
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-dark card-outline" style="min-height: 200px; border-color:Tomato;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 32px">
                                6. Visit our Frequently Asked Questions
                            </h5>
                            <p class="card-text">
                                Our FAQs section has answers to the most common questions that students ask us. Take a
                                look at this section for any questions you have, and if you don't find the answer you
                                can contact us.
                            </p>
                            <a href="#" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row">
                <div class="col-lg-6">
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

                <div class="col-lg-6">
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