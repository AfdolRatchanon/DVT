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
                                ? "สถานประกอบการ"
                                : "EMPLOYERS"
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
                <h2>สำหรับสถานประกอบการ</h2>
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
                            <h2 class="text-center text-danger">สถานประกอบการที่เข้าร่วมจัดการอาชีวศึกษา</h2>

                            <!-- <center>
                                <img src="./dist/img/Slide10.jpg" class="card-img-top rounded border border-danger"
                                    style="width: 60%;" alt="...">
                            </center> -->

                            <blockquote class="quote-danger">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                สถานประกอบการที่ประสงค์จะจัดการอาชีวศึกษาและการฝึกอบรมวิชาชีพต้องเป็นสถานประกอบการที่ดำเนินการตามกฎกระทรวงว่าด้วยหลักเกณฑ์และวิธีการยื่นคำขอและการพิจารณาเพื่อการจัดการอาชีวศึกษาและการฝึกอบรมวิชาชีพของสถานประกอบการ
                            </blockquote>

                            <blockquote class="quote-danger">
                                <h3>สถานประกอบการต้องปฏิบัติดังนี้</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    สถานประกอบการต้องให้ความร่วมมือดังนี้ผู้เรียนให้มีคุณธรรมจริยธรรมและคุณลักษณะที่พึงประสงค์
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1. จัดลักษณะงานที่ฝึกอาชีพให้สอดคล้องกับการเรียนรู้ในสาขาวิชาที่ผู้เรียนกำลังศึกษา
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2. จะทำบันทึกข้อตกลงความร่วมมือระหว่างสถานประกอบการกับสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3. จัดทำสัญญาการฝึกอาชีพระหว่างผู้เรียนกับสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    4.
                                    จัดทำแผนการเรียนแผนการฝึกอาชีพและแผนการนิเทศตลอดหลักสูตรร่วมกับสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5. จัดการประเมินการฝึกอาชีพร่วมกับสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    6. จัดให้มีครูฝึกในสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    7. จัดให้มีผู้ประสานงานและผู้ควบคุมการฝึกอาชีพของสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    8.
                                    จัดให้มีการประชาสัมพันธ์การจัดการอาชีวศึกษาระบบทวิภาคีให้ผู้เรียนผู้ปกครองและชุมชนทราบ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9. จัดสวัสดิการหรือและหรือเบี้ยเลี้ยงที่เหมาะสมให้กับผู้เรียนตามข้อตกลง
                                </p>
                            </blockquote>
                            <blockquote class="quote-danger">
                                <h3>คุณสมบัติและจำนวนครูฝึกในสถานประกอบการ</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    คุณสมบัติและจำนวนครูฝึกในสถานประกอบการต้องเป็นไปตามเกณฑ์ดังนี
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1.
                                    เป็นผู้สําเร็จการศึกษาระดับอุดมศึกษาและผ่านการศึกษาหรือฝึกอบรมวิชาการศึกษาด้านอาชีพ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2.
                                    เป็นผู้ชํานาญการด้านการอาชีพโดยสําเร็จการศึกษาวิชาชีพไม่ต่ํากว่าระดับประกาศนียบัตรวิชาชีพ
                                    หรือผ่านการทดสอบมาตรฐานฝีมือแรงงานแห่งชาติ
                                    หรือมาตรฐานอื่นตามที่คณะกรรมการการอาชีวศึกษากําหนด
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3.
                                    เป็นผู้เชี่ยวชาญด้านอาชีพเฉพาะสาขาซึ่งสําเร็จการศึกษาวิชาชีพไม่ต่ํากว่าระดับประกาศนียบัตรวิชาชีพ
                                    ที่มีประสบการณ์ในสาขาอาชีพนั้นไม่น้อยกว่า 5 ปี
                                    หรือสําเร็จการศึกษาวิชาชีพระดับประกาศนียบัตรวิชาชีพชั้นสูงที่มีประสบการณ์ในสาขาอาชีพนั้นไม่น้อยกว่าสามปี
                                    หรือผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงานแห่งชาติและมีประสบการณ์ในการทํางาน
                                    ในสาขาอาชีพนั้นไม่น้อยกว่า 5 ปี
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    4.
                                    เป็นผู้มีประสบการณ์และประสบความสําเร็จในอาชีพเฉพาะสาขามีผลงานเป็นที่ยอมรับในสังคมและท้องถิ่น
                                    และสามารถถ่ายทอดความรู้ได้หลักเกณฑ์ในการแต่งตั้งการทดสอบ การฝึกอบรม
                                    และการออกใบรับรองการเป็นครูฝึก
                                    ในสถานประกอบการ ให้เป็นไปตามหลักเกณฑ์ที่คณะกรรมการการอาชีวศึกษากําหนด
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5. มีจำนวนตามเกณฑ์ที่กำหนด
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <small><i class="fa-solid fa-circle"></i></small> ระดับประกาศนียบัตรวิชาชีพ
                                    และระดับประกาศนียบัตรวิชาชีพชั้นสูงต้องมีครูฝึก 1
                                    คนต่อผู้เรียนไม่เกิน 10 คน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <small><i class="fa-solid fa-circle"></i></small>
                                    ระดับปริญญาตรีสายเทคโนโลยีหรือสายปฏิบัติการต้องมีครูฝึก 1 คนต่อผู้เรียนไม่เกิน 8 คน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    6. ได้รับการแต่งตั้งให้เป็นครูฝึกตามหลักเกณฑ์ที่คณะกรรมการการอาชีวศึกษากำหนด


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
                            <h2 class="text-center text-danger">การกำหนดหลักเกณฑ์การแต่งตั้ง การทดสอบ การฝึกอบรม
                                และการออกใบรับรอง
                                การเป็นครูฝึกในสถานประกอบการ
                            </h2>
                            <!-- <center>
                                <img src="./dist/img/Slide11.jpg" class="card-img-top rounded border border-danger"
                                    style="width: 60%;" alt="...">
                            </center> -->
                            <blockquote class="quote-danger">

                                <!-- <h3>...</h3> -->
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <b>“การฝึกอบรม”</b> คือ
                                    การฝึกอบรมเพื่อเตรียมความพร้อมก่อนการแต่งตั้งเป็นครูฝึกในสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <b>“ครูฝึก”</b> คือ ผู้ซึ่งผ่านการทดสอบ การฝึกอบรม
                                    หรือมีประสบการณ์สอนในสถานประกอบการ
                                    และได้รับใบรับรองการเป็นครูฝึกในสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ผู้ใดประสงค์จะเป็นครูฝึกต้องผ่านการทดสอบประเมินความรู้เพื่อเป็นครูฝึกในสถานประกอบการ
                                    หรือต้องผ่านการฝึกอบรมหลักสูตรการเป็นครูฝึกในสถานประกอบการไม่น้อยกว่า 30 ชั่วโมง
                                    เว้นแต่มีประสบการณ์สอนในสถานประกอบการที่ร่วมมือกันจัดการอาชีวศึกษาระบบทวิภาคีมาแล้วไม่น้อยกว่า
                                    6 เดือน ผู้ที่ผ่านการทดสอบ ต้องได้คะแนนเฉลี่ยไม่ต่ำกว่าร้อยละ 60
                                    การทดสอบหรือการฝึกอบรมต้องดำเนินการในสถาบันการอาชีวศึกษา สถานศึกษาอาชีวศึกษา
                                    สถานประกอบการ หรือสถานที่อื่น ตามที่สำนักงานคณะกรรมการการอาชีวศึกษารับรอง
                                    รายการค่าใช้จ่ายในการทดสอบ
                                    และการฝึกอบรมต้องได้รับความเห็นชอบร่วมกันระหว่างสถานประกอบการกับสำนักงานคณะกรรมการการอาชีวศึกษา
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ผู้ผ่านการทดสอบหรือการฝึกอบรม
                                    ผู้จัดการทดสอบหรือจัดการฝึกอบรมดำเนินการออกใบรับรองการเป็นครูฝึกในสถานประกอบการให้แก่ผู้นั้นภายใน
                                    50 วัน นับแต่วันผ่านการทดสอบหรือสิ้นสุดการฝึกอบรม
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    สำหรับผู้มีประสบการณ์สอนในสถานประกอบ หากสถานประกอบการประสงค์จะแต่งตั้งให้เป็นครูฝึก
                                    ให้สถาบันการอาชีวศึกษา
                                    หรือสถานศึกษาอาชีวศึกษาดำเนินการออกใบรับรองการเป็นครูฝึกในสถานประกอบการให้แก่ผู้นั้นภายใน
                                    50 วันนับแต่วันที่ร้องขอ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ใบรับรองการเป็นครูฝึกให้มีอายุ 5 ปี และให้ต่อได้อีกครั้งละ 5 ปี
                                    ทั้งนี้ให้สถาบันการอาชีวศึกษาหรือสถานศึกษาอาชีวศึกษาที่ออกใบรับรองการเป็นครูฝึกในสถานประกอบการจัดทำบัญชีรายชื่อครูฝึกไว้
                                    เพื่อการรับสิทธิประโยชน์ตามที่กฎหมายกำหนด
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
                            <h2 class="text-center text-danger">
                                สิทธิประโยชน์ของผู้ประกอบกิจการ ในการจัดการอาชีวศึกษาระบบทวิภาคี
                            </h2>
                            <!-- <center>
                                <img src="./dist/img/Slide11.jpg" class="card-img-top rounded border border-danger"
                                    style="width: 60%;" alt="...">
                            </center> -->
                            <blockquote class="quote-danger">

                                <!-- <h3>...</h3> -->
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    สถานประกอบการ สมาคมวิชาชีพ หรือองค์กรอื่นที่ให้ความร่วมมือในการจัด
                                    การอาชีวศึกษา และการฝึกอบรมวิชาชีพ อาจได้รับสิทธิและประโยชน์ดังต่อไปนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1. การสนับสนุนด้านวิชาการและทรัพยากรตามสมควรแก่กรณี
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2. การเชิดชูเกียรติแก่สถานประกอบการ สมาคมวิชาชีพ
                                    หรือองค์กรอื่นที่ให้ความร่วมมือในการจัดการอาชีวศึกษาและการฝึกอบรมวิชาชีพ

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