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
                            <?=
                            $_SESSION['lang'] == 'th'
                                ? "นักเรียน นักศึกษา"
                                : "STUDENT"
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
                <h2>สำหรับนักเรียน นักศึกษาระบบทวิภาคี</h2>
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
                            <h2 class="text-center text-danger">พื้นความรู้และคุณสมบัติของผู้เข้าเรียน</h2>
                            <center>
                                <img src="./dist/img/Slide8.jpg" class="card-img-top rounded border border-danger"
                                    style="width: 60%;" alt="...">
                            </center>
                            <blockquote class="quote-danger">
                                <h3>พื้นความรู้และคุณสมบัติของผู้เข้าเรียน</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1. ผู้เข้าเรียนระดับปวช. ต้องสำเร็จการศึกษาไม่ต่ำกว่าระดับมัธยมศึกษาปีที่ 3
                                    หรือเทียบเท่า และมีคุณสมบัติเป็นไปตามระเบียบกระทรวงศึกษาธิการ
                                    ว่าด้วยการจัดการศึกษาและการประเมินผลการเรียนตามหลักสูตรประกาศนียบัตรวิชาชีพ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2. ผู้เข้าเรียนระดับปวส.
                                    ต้องสำเร็จการศึกษาไม่ต่ำกว่าระดับมัธยมศึกษาตอนปลายหรือเทียบเท่า
                                    หรือระดับประกาศนียบัตรวิชาชีพหรือเทียบเท่า
                                    และมีคุณสมบัติเป็นไปตามระเบียนกระทรวงศึกษาธิการ
                                    และการประเมินผลการเรียนตามหลักสูตรประกาศนียบัตรวิชาชีพ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3. ผู้เข้าเรียนการศึกษาระบบทวิภาคี ระดับปวช. และปวส.
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa-solid fa-book"></i> ระดับปวช.
                                    ต้องมีอายุไม่ต่ำกว่า 15 ปีบริบูรณ์ในวันทำสัญญาการฝึกอาชีพ
                                    ส่วนผู้เข้าเรียนการศึกษาระบบทวิภาคี
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa-solid fa-book"></i> ระดับปวส.
                                    ต้องมีอายุไม่ต่ำกว่า 17 ปีบริบูรณ์ในวันทำสัญญาการฝึกอาชีพ
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
                            <h2 class="text-center text-danger">การรับผู้เข้าเรียนในระบบทวิภาคี</h2>
                            <div class="row">
                                <div class="col-sm-6 my-2">
                                    <center>
                                        <img src="./dist/img/176352.jpg"
                                            class="card-img-top rounded border border-danger" alt="...">
                                    </center>
                                </div>
                                <div class="col-sm-6 my-2">
                                    <center>
                                        <img src="./dist/img/286397.jpg"
                                            class="card-img-top rounded border border-danger" alt="...">
                                    </center>
                                </div>

                            </div>
                            <!-- <center>
                                <img src="./dist/img/Picture01.png" class="card-img-top rounded border border-danger"
                                    style="width: 80%;" alt="...">
                            </center> -->
                            <blockquote class="quote-danger">
                                <h3>การรับผู้เข้าเรียนในระบบทวิภาคี</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1. ให้ทำการสอบคัดเลือกหรือคัดเลือกตามที่สถานศึกษากำหนด
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2. การรับผู้เข้าเรียนการศึกษาระบบทวิภาคี
                                    สถานประกอบการจะเป็นผู้สอบคัดเลือกหรือคัดเลือกผู้เข้าเรียนเองตามคุณสมบัติที่กำหนด
                                    และตามจำนวนที่ได้ตกลงร่วมกับสถานศึกษาหรือจะมอบให้สถานศึกษา เป็นผู้ดำเนินการ
                                    หรือดำเนินการร่วมก็ได้
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
                            <h2 class="text-center text-danger">การสำเร็จการศึกษา</h2>
                            <center>
                                <img src="./dist/img/Picture01.png" class="card-img-top rounded border border-danger"
                                    style="width: 80%;" alt="...">
                            </center>
                            <blockquote class="quote-danger">
                                <h3>
                                    การสำเร็จการศึกษาตามหลักสูตร
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1.1 ได้รายวิชาและจำนวนหน่วยกิตสะสมในทุกหมวดวิชา ครบถ้วนตามที่กำหนดไว้ในหลักสูตร
                                    แต่ละระดับ ประเภทวิชาและสาขาวิชา และตามแผนการเรียนที่สถานศึกษากำหนด
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1.2 ได้ค่าระดับคะแนนเฉลี่ยสะสมไม่ต่ำกว่า 2.00
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1.3 ผ่านเกณฑ์การประเมินมาตรฐานวิชาชีพ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1.4 ได้เข้าร่วมปฏิบัติกจกรรมเสริมหลักสูตรตามแผนการเรียนที่สถานศึกษากำหนดทุกภาคเรียน
                                    <br />
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