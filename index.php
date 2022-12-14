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
                    <!-- <h2 class="m-0"> Top Navigation <small>Example 3.0</small></h2> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-danger"><?= $_SESSION['lang'] == 'th' ? 'หน้าแรก' : 'HOME' ?></a>
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



            <div class="jumbotron bg-danger" style="
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
                            <h2 class="text-center text-danger">การจัดการอาชีวศึกษาระบบทวิภาคี</h2>
                            <center>
                                <!-- <img src="./dist/img/Slide2.jpg" class="card-img-top rounded border border-danger"
                                    style="width: 60%;" alt="..."> -->
                                <div id="carouselExampleCaptions" style="width: 80%;" class="carousel slide rounded"
                                    data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./dist/img/messageImage_1663063896704.jpg"
                                                class="d-block w-100 rounded" alt="...">
                                            <!-- <div class="carousel-caption d-none d-md-block ">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./dist/img/messageImage_1663063922033.jpg"
                                                class="d-block w-100 rounded" alt="...">
                                            <!-- <div class="carousel-caption d-none d-md-block">
                                                <h5>Second slide label</h5>
                                                <p>Some representative placeholder content for the second slide.</p>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./dist/img/messageImage_1663063942828.jpg"
                                                class="d-block w-100 rounded" alt="...">
                                            <!-- <div class="carousel-caption d-none d-md-block">
                                                <h5>Third slide label</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./dist/img/messageImage_1663063955398.jpg"
                                                class="d-block w-100 rounded" alt="...">
                                            <!-- <div class="carousel-caption d-none d-md-block">
                                                <h5>Fourth slide label</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./dist/img/messageImage_1663064309654.jpg"
                                                class="d-block w-100 rounded" alt="...">
                                            <!-- <div class="carousel-caption d-none d-md-block">
                                                <h5>Fourth slide label</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./dist/img/messageImage_1663064360784.jpg"
                                                class="d-block w-100 rounded" alt="...">
                                            <!-- <div class="carousel-caption d-none d-md-block">
                                                <h5>Fourth slide label</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                            </div> -->
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-target="#carouselExampleCaptions" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-target="#carouselExampleCaptions" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </center>
                            <blockquote class="quote-danger">

                                <h3>แนวคิด</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    สำนักงานคณะกรรมการการอาชีวศึกษามีภารกิจในการดำเนินการจัดการศึกษาด้านอาชีวศึกษาตามพระราบัญญัติการศึกษาแห่งชาติ
                                    พ.ศ.2542 และที่แก้ไขเพิ่มเติม พ.ศ. 2545 และพระราชบัญญัติการอาชีวศึกษา
                                    พ.ศ. 2551
                                    เพื่อผลิตและพัฒนากำลังคนด้านวิชาชีพให้สอดคล้องกับแผนการพัฒนาเศรษฐกิจและสังคมแห่งชาติ
                                    แผนการศึกษาแห่งชาติ เป็นไปตามกรอบคุณวุฒิแห่งชาติ มาตรฐานการศึกษาของชาติ
                                    กรอบคุณวุฒิอาชีวศึกษาแห่งชาติ
                                    และมาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับตลอดจนยึดโยงกับมาตรฐานอาชีพ
                                    โดยเน้นการเรียนรู้สู่การปฏิบัติ
                                    เพื่อพัฒนาคุณภาพของผู้สำเร็จการศึกษาให้มีสมรรถนะด้านวิชาการ และด้านวิชาชีพ
                                    รวมทั้งคุณธรรม จริยธรรม
                                    จรรยาบรรณวิชาชีพและกิจนิสัยที่เหมาะสมในการทำงานตรงกับความต้องการของตลาดแรงงาน ชุมชน
                                    สังคม และสามารถประกอบอาชีพอิสระได้ โดยเปิดโอกาสของตน
                                    ส่งเสริมให้มีการประสานความร่วมมือเพื่อจัดการศึกษาและพัฒนาหลักสูตรร่วมกันระหว่างสถาบัน
                                    สถานศึกษา หน่วยงาน สถานประกอบการ และองค์กรต่าง ๆ ทั้งในระดับชุมชน
                                    ระดับท้องถิ่นและระดับชาติ
                                </p>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ในการจัดการอาชีวศึกษาให้บรรลุวัตถุประสงค์ดังกล่าวข้างต้น
                                    จำเป็นต้องใช้หลักสูตรและกระบวนการจัดการเรียนการสอนที่มุ่งเน้นสมรรถนะโดยความร่วมมือกับทุกภาคส่วน
                                    โดยเฉพาะ “การจัดการอาชีวศึกษาระบบทวิภาคี”
                                    ซึ่งเป็นการจัดการศึกษาที่เกิดจากข้อตกลงระหว่างสถานศึกษาอาชีวศึกษาหรือสถาบันกับสถานประกอบการ
                                    รัฐวิสาหกิจ หรือหน่วยงานภาครัฐ ทั้งเรื่องการจัดหลักสูตรการจัดการเรียนการสอน
                                    การวัดและประเมินผล โดยจัดให้ผู้เรียนใช้เวลาส่วนหนึ่งในสถานศึกษาอาชีวศึกษา หรือสถาบัน
                                    และเรียนภาคปฏิบัติในสถานประกอบการ รัฐวิสาหกิจหรือหน่วยงานของรัฐ
                                    ซึ่งในการดำเนินการดังกล่าวมีกรอบและหลักเกณฑ์ในการดำเนินการที่เกี่ยวข้อง ไสด้แก่
                                    พระราชบัญญัติการศึกษาแห่งชาติ พ.ศ. 2542
                                    เกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาทั้งระดับประกาศนียบัตรวิชาชีพ
                                    ระดับประกาศนียบัตรวิชาชีพชั้นสูง และระดับปริญญาตรีสายเทคโนโลยีหรือสายปฏิบัติการ พ.ศ.
                                    2562 มาตรฐานการจัดการอาชีวศึกษาระบบทวิภาคี พ.ศ. 2563 รวมทั้งเกณฑ์การใช้หลักสูตร
                                    และระเบียบการจัดการศึกษาและการประเมินผลการเรียนตามหลักสูตร
                                </p>
                            </blockquote>

                            <blockquote class="quote-danger">
                                <h3>เกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับ</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    เกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับนี้
                                    ใช้สำหรับการพัฒนาหลักสูตรแต่ละระดับของสำนักงานคณะกรรมการการอาชีวศึกษา
                                    สถาบันการอาชีวศึกษา และสถานศึกษาของรัฐและเอกชน
                                    ซึ่งสาระสำคัญที่เกี่ยวข้องกับการจัดการอาชีวศึกษาระบบทวิภาคี
                                    ตามเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาระดับประกาศนียบัตรวิชาชีพ พ.ศ. 2562
                                    และเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาระดับประกาศนียบัตรวิชาชีพชั้นสูง พ.ศ. 2562 ดังนี้
                                </p>
                                <h3 class="card-title">
                                    1. คุณภาพของผู้สำเร็จการศึกษาแต่ละระดับ ครอบคลุม 4 ด้าน ดังนี้
                                </h3>
                                <!-- /.card-header -->
                                <div class="card-body p-0 table-responsive">
                                    <table class="table" style="min-width: 850px">
                                        <thead>
                                            <tr>
                                                <th style="width: 26%">ระดับการศึกษา</th>
                                                <th style="width: 74%">คุณภาพของผู้สำเร็จการศึกษา</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ประกาศนียบัตรวิชาชีพ</td>
                                                <td><span class="font-weight-bold">(1)</span> ด้านคุณธรรม
                                                    จริยธรรมและคุณลักษณะที่พึงประสงค์ ได้แก่
                                                    มีคุณธรรม
                                                    จริยธรรม จรรยาบรรณวิชาชีพ เจตคติและกิจนิสัยที่ดี
                                                    ภูมิใจและรักษาเอกลักษณ์ของชาติไทย เคารพกฎหมาย เคารพสิทธิของผู้อื่น
                                                    มีความรับผิดขอบตามบทบาทหน้าที่ของตนเองตามระบอกประชาธิปไตยอันมีพระมหากษัตริย์ทรงเป็นประมุข
                                                    มีจิตสาธารณะ และมีจิตสำนึกรักษ์สิ่งแวดล้อม
                                                    <br />
                                                    <span class="font-weight-bold">(2)</span> ด้านความรู้
                                                    ได้แก่ ความรู้ในหลักการทั่วไปของงานอาชีพ
                                                    เฉพาะและการวิเคราะห์เบื้องต้น
                                                    รวมทั้งมีความรู้ภาษาอังกฤษและเทคโนโลยีสารสนเทศที่สามารถใช้ในการสื่อสารเบื้องต้นได้
                                                    <br />
                                                    <span class="font-weight-bold">(3)</span> ด้านทักษะ
                                                    ได้แก่ ทักษะการเลือกและประยุกต์ใช้วิธีการ
                                                    เครื่องมือและวัสดุขั้นพื้นฐานในการปฏิบัติงาน
                                                    ทักษะการสื่อสารและเทคโนโลยีสารสนเทศ ทักษะการเรียนรู้ตลอดชีวิต
                                                    ทักษะการคิดวิเคราะห์และการแก้ปัญหา และทักษะด้านสุขภาวะและความปลอดภัย
                                                    <br />
                                                    <span class="font-weight-bold">(4)</span>
                                                    ด้านความสามารถในการประยุกต์ใช้และความรับผิดชอบ ได้แก่
                                                    สามารถปฏิบัติงานตามแบบแผน ปรับตัวกับการเปลี่ยนแปลกงที่ไม่ซับซ้อน
                                                    ให้คำแนะนำพื้นฐานที่ต้องใช้การตัดสินใจ
                                                    วางแผนและแก้ไขปัญหาโดยไม่อยู่ภายใต้การควบคุมในบางเรื่อง
                                                    ประยุกต์ใช้ความรู้ ทักษะทางวิชาชีพ เทคโนโลยีสารสนเทศ และการสื่อสาร
                                                    ในการแก้ปัญหาและการปฏิบัติงานในบริบทใหม่
                                                    รวมทั้งรับผิดชอบต่อตนเองและผู้อื่น
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ประกาศนียบัตรวิชาชีพชั้นสูง</td>
                                                <td><span class="font-weight-bold">(1)</span> ด้านคุณธรรม
                                                    ด้านคุณธรรม จริยธรรมและคุณลักษณะที่พึงประสงค์ ได้แก่ มีคุณธรรม
                                                    จริยธรรม จรรยาบรรณวิชาชีพ เจตคติและกิจนิสัยที่ดี
                                                    ภูมิใจและรักษาเอกลักษณ์ของชาติไทย เคารพกฎหมาย เคารพสิทธิของผู้อื่น
                                                    มีความรับผิดขอบตามบทบาทหน้าที่ของตนเองตามระบอกประชาธิปไตยอันมีพระมหากษัตริย์ทรงเป็นประมุข
                                                    มีจิตสาธารณะ และมีจิตสำนึกรักษ์สิ่งแวดล้อม
                                                    <br />
                                                    <span class="font-weight-bold">(2)</span> ด้านความรู้ ได้แก่
                                                    ความรู้ทางทฤษฎีและเทคนิคเชิงลึกภายใต้ขอบเขตของงานอาชีพ
                                                    รวมทั้งความรู้ภาษาอังกฤษ เทคโนโลยีสารสนเทศ
                                                    และการสื่อสารในระดับที่เชื่อมโยงกับการทำงาน
                                                    <br />
                                                    <span class="font-weight-bold">(3)</span> ด้านทักษะได้แก่
                                                    ทักษะในการปรับใช้กระบวนการปฏิบัติงานให้เหมาะสม
                                                    ทักษะด้านความปลอดภัยที่เชื่อมโยงกันในการทำงานที่หลากหลาย
                                                    ทักษะการเรียนรู้ตลอดชีวิต ทักษะการคิด วิเคราะห์และการแก้ปัญหา
                                                    ทักษะในการวางแผน การบริหารจัดการ
                                                    การประสานงานและการประเมินผลในการปฏิบัติงานด้วยตนเอง
                                                    <br />
                                                    <span class="font-weight-bold">(4)</span>
                                                    ด้านความสามารถในการประยุกต์ใช้และความรับผิดชอบ ได้แก่
                                                    สามารถปฏิบัติงานตามแบบแผนและปรับตัวภายใต้ความเปลี่ยนแปลง
                                                    สามารถแก้ปัญหา ที่ไม่คุ้นเคย หรือซับซ้อนและเป็นนามธรรมเป็นบางครั้ง

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h3 class="card-title">
                                    2. การจัดการศึกษา

                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    การจัดการศึกษาในหลักสูตรอาชีวศึกษาแต่ละระดับสามารถจัดแบบในระบบและระบบทวิภาคี
                                    โดยใช้ระบบทวิภาคี ซึ่งกำหนดให้ 1 ปีการศึกษา แบ่งเป็น 2 ภาคเรียน และใน 1 ภาคเรียน
                                    มีระยะเวลาจัดการศึกษารวมการวัดผล 18 สัปดาห์ โดย
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2.1 ระดับประกาศนียบัตรวิชาชีพ (ปวช.) ใช้ระยะเวลาการศึกษา 6 ภาคเรียน
                                    กำหนดให้เรียนได้ไม่เกิน 12 ภาคเรียน สำหรับการลงทะเบียนเรียนแบบเต็มเวลา
                                    และไม่เกิน 16 ภาคเรียนสำหรับการลงทะเบียนแบบไม่เต็มเวลา
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2.2 ระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) ใช้ระยะเวลาการศึกษา 4 ภาคเรียน
                                    กำหนดให้เรียนได้ไม่เกิน 8 ภาคเรียน สำหรับการลงทะเบียนเรียนแบบเต็มเวลา
                                    และไม่เกิน
                                    12 ภาคเรียนสำหรับการลงทะเบียนเรียนแบบไม่เต็มเวลา
                                </p>

                            </blockquote>

                            <blockquote class="quote-danger">
                                <h3>การจัดการศึกษา การประเมินผลการเรียน และการสำเร็จการศึกษา
                                    ให้สถานศึกษาอาชีวศึกษาหรือสถาบันพิจารณาดำเนินการตามเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับ
                                    ดังนี้</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1. การจัดการศึกษาร่วมกับสถานประกอบการ ให้จัดได้ใน 2 ลักษณะ
                                    คือการฝึกอาชีพในการศึกษาระบบทวิภาคี และการฝึกประสบการณ์สมรรถนะวิชาชีพ
                                    ในการศึกษาในระบบตามหลักเกณฑ์และแนวปฏิบัติที่คณะกรรมการการอาชีวศึกษากำหนด
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    2. ให้จัดเตรียมความพร้อมในด้านอาคารสถานที่ ครุภัณฑ์
                                    ครูและบุคลากรทางการศึกษาให้เหมาะสม
                                    สอดคล้องกับการจัดการเรียนการสอนในแต่ละลักษณะการผลิตและการพัฒนาผู้เรียน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3.
                                    ให้กำหนดวิธีการพัฒนาคุณภาพการจัดการอาชีวศึกษาและการจัดการเรียนการสอนเพื่อพัฒนาคุณลักษณะให้ตรงตามศักยภาพของผู้เรียน
                                    และระดับคุณวุฒิของแต่ละประเภทวิชา และสาขาวิชา
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    4. ให้จัดการเรียนการสอนที่เน้นการเรียนรู้สู่การปฏิบัติ
                                    โดยให้ผู้เรียนจัดทำโครงงานพัฒนาสมรรถนะวิชาชีพที่สอดคล้องกับสาขาวิชาที่เรียน

                                </p>
                            </blockquote>

                            <blockquote class="quote-danger">
                                <h3>มาตรฐานการจัดการอาชีวศึกษาระบบทวิภาคี</h3>
                                <p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    สำนักงานคณะกรรมการการอาชีวศึกษา ได้มีประกาศคณะกรรมการอาชีวศึกษา
                                    เรื่องมาตรฐานการจัดการอาชีวศึกษาระบบทวิภาคี พ.ศ. 2563
                                    เพื่อใช้เป็นกรอบแนวทางในการจัดการศึกษาระบบทวิภาคีให้เป็นไปอย่างมีประสิทธิภาพ
                                    สอดคล้องกับคุณวุฒิอาชีวศึกษาแห่งชาติ
                                    และเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับ
                                    เพื่อให้ผู้สำเร็จการศึกษามีคุณภาพมาตรฐานเป็นไปตามมาตรฐานการศึกษาวิชาชีพของสาขาวิชาและสาขางานที่เรียน
                                    โดยมีสาระสำคัญดังนี้
                                </p>

                                <h3 class="card-title">
                                    1. หลักการจัดการอาชีวศึกษาระบบทวิภาคี
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    เกิดจากข้อตกลงระหว่างสถานศึกษาอาชีวศึกษาหรือสถาบันกับสถานประกอบการรัฐวิสาหกิจหรือหน่วยงานของรัฐในเรื่องการจัดหลักสูตรการเรียนการสอนการวัดและการประเมินผลโดยผู้เรียนใช้เวลาส่วนหนึ่งในสถานศึกษาหรือสถาบันการอาชีวศึกษาและเรียนภาคปฏิบัติในสถานประกอบการรัฐวิสาหกิจหรือหน่วยงานของรัฐเพื่อมุ่งเน้นผลิตผู้สำเร็จการศึกษาในแต่ละระดับคุณวุฒิอาชีวศึกษาให้มีความรู้ความเข้าใจมีทักษะมีคุณธรรมจริยธรรมจรรยาบรรณวิชาชีพและกิจนิสัยที่เหมาะสมปฏิบัติงานได้จริงสามารถวางแผนสร้างและพัฒนางานพัฒนาตนเองและทำงานร่วมกับผู้อื่นได้อย่างมีความสุขมีความก้าวหน้าทางวิชาการและวิชาชีพมีสมรรถนะที่สามารถนำไปปฏิบัติงานหรือประกอบอาชีพอิสระได้ตามมาตรฐานการศึกษาวิชาชีพและมาตรฐานสมรรถนะของอาชีพสอดคล้องกับยุทธศาสตร์ชาติ
                                    20 ปีแทนพัฒนาเศรษฐกิจและสังคมแห่งชาติและแผนการศึกษาแห่งชาติ
                                </p>

                                <h3 class="card-title">
                                    2. คุณภาพของผู้สำเร็จการศึกษาอาชีวศึกษา
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ต้องครอบคลุมอย่างน้อย 4
                                    ด้านคือด้านคุณธรรมจริยธรรมและคุณลักษณะที่พึงประสงค์ด้านความรู้ด้านทักษะและด้านความสามารถในการประยุกต์ใช้และความรับผิดชอบตามเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาตามเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาในแต่ละระดับและตามมาตรฐานการศึกษาวิชาชีพของประเภทวิชาสาขาวิชาและสาขางานที่เรียนโดยผู้เรียนในอาชีวศึกษาระบบทวิภาคีจะมีคุณลักษณะพิเศษคือสามารถปฏิบัติงานในสาขาวิชาที่ฝึกอาชีพได้ทันที
                                </p>

                                <h3 class="card-title">
                                    3. การจัดการศึกษาระบบทวิภาคี
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ต้องเป็นไปตามโครงสร้างหลักสูตรจำนวนหน่วยกิต
                                    รูปแบบและระยะเวลาที่กำหนดตามเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับและแต่ละสาขาวิชาโดยกำหนดระยะเวลาของการฝึกอาชีพในสถานประกอบการของแต่ละหลักสูตรไม่น้อยกว่า
                                    2 ภาคเรียนหรือ 1 ปีการศึกษา
                                    <br />
                                </p>

                                <h3 class="card-title">
                                    4 .
                                    การจัดเตรียมความพร้อมสถานศึกษา
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    การจัดเตรียมความพร้อมสถานศึกษาอาชีวศึกษาหรือสถาบันต้องจัดเตรียมความพร้อมในด้านผู้สอนบุคลากรและทรัพยากรสนับสนุนการจัดการอาชีวศึกษาระบบทวิภาคีดังนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.1
                                    จัดให้มีครูผู้สอนวิชาชีพในสาขาวิชาที่จัดการอาชีวศึกษาระบบทวิภาคีไม่น้อยกว่าร้อยละ 30
                                    และต้องได้รับการพัฒนาวิชาชีพที่สอนไม่น้อยกว่า 80
                                    ชั่วโมงต่อคนต่อปีการศึกษาจากสถานประกอบการที่ร่วมจัดการอาชีวศึกษาระบบทวิภาคี
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    4.2
                                    จัดให้มีผู้มีประสบการณ์มีความชำนาญและมีความเชี่ยวชาญด้านวิชาชีพมาถ่ายทอดทักษะประสบการณ์และความรู้แก่ผู้เรียนและผู้สอนไม่น้อยกว่า
                                    2 ครั้งครั้งละไม่ต่ำกว่า 2 ชั่วโมงต่อสาขาวิชาต่อภาคเรียน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    4.3
                                    จัดหรือร่วมกับสถานประกอบการในการจัดวัสดุครุภัณฑ์พื้นที่และอุปกรณ์การศึกษาสำหรับผู้เรียนให้เพียงพอต่อการจัดการเรียนการสอนและฝึกอาชีพ
                                    <br />
                                </p>

                                <h3 class="card-title">
                                    5. การดำเนินการจัดการอาชีวะศึกษาระบบทวิภาคี
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.1
                                    ผู้บริหารและบุคลากรต้องส่งเสริมและสนับสนุนการจัดการอาชีวศึกษาระบบทวิภาคีอย่างเป็นระบบและต่อเนื่อง
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.2 จัดการเรียนในสาขาวิชาตรงความต้องการของสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.3
                                    จัดทำบันทึกข้อตกลงความร่วมมือระหว่างสถานศึกษาอาชีวศึกษาหรือสถาบันและสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.4 จัดทำสัญญาการฝึกอาชีพระหว่างผู้เรียนกับสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.5 จัดทำแผนการเรียนแผนการฝึกอาชีพและแผนการนิเทศตลอดหลักสูตรร่วมกับสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.6 จัดให้มีการประถมนิเทศก่อนการฝึกอาชีพและปัจฉิมนิเทศหลังเสร็จสิ้นการฝึกอาชีพ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.7 จัดเตรียมความพร้อมผู้เรียนก่อนการฝึกอาชีพ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.8 จัดให้มีครูนิเทศการฝึกอาชีพในสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.9 จัดให้มีการกำกับติดตามและประเมินผลการฝึกอาชีพร่วมกับสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.1.4
                                    จัดให้มีการประชาสัมพันธ์การจัดการอาชีวศึกษาระบบทวิภาคีให้สถานประกอบการผู้เรียนและผู้ปกครองทราบ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.1
                                    ด้านสถานประกอบการต้องให้ความร่วมมือดังนี้ผู้เรียนให้มีคุณธรรมจริยธรรมและคุณลักษณะที่พึงประสงค์
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.2
                                    จัดลักษณะงานที่ฝึกอาชีพให้สอดคล้องกับการเรียนรู้ในสาขาวิชาที่ผู้เรียนกำลังศึกษา
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.3
                                    จะทำบันทึกข้อตกลงความร่วมมือระหว่างสถานประกอบการกับสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.4
                                    จัดทำสัญญาการฝึกอาชีพระหว่างผู้เรียนกับสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.5
                                    จัดทำแผนการเรียนแผนการฝึกอาชีพและแผนการนิเทศตลอดหลักสูตรร่วมกับสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.6 จัดการประเมินการฝึกอาชีพร่วมกับสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.7 จัดให้มีครูฝึกในสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.8 จัดให้มีผู้ประสานงานและผู้ควบคุมการฝึกอาชีพของสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.9
                                    จัดให้มีการประชาสัมพันธ์การจัดการอาชีวศึกษาระบบทวิภาคีให้ผู้เรียนผู้ปกครองและชุมชนทราบ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    5.2.10 จัดสวัสดิการหรือและหรือเบี้ยเลี้ยงที่เหมาะสมให้กับผู้เรียนตามข้อตกลง
                                    <br />
                                </p>
                                <h3 class="card-title">
                                    6. คุณสมบัติและจำนวนครูฝึกในสถานประกอบการต้องเป็นไปตามเกณฑ์ดังนี้
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    6.1 มีคุณสมบัติตามกฎหมายว่าด้วยการอาชีวศึกษา
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    6.2 มีจำนวนตามเกณฑ์ที่กำหนดคือ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    6.2.1 ระดับประกาศนียบัตรวิชาชีพและระดับประกาศนียบัตรวิชาชีพชั้นสูงต้องมีครูฝึก 1
                                    คนต่อผู้เรียนไม่เกิน 10 คน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    6.2.2 ระดับปริญญาตรีสายเทคโนโลยีหรือสายปฏิบัติการต้องมีครูฝึก 1 คนต่อผู้เรียนไม่เกิน
                                    8 คน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    6.3 ได้รับการแต่งตั้งให้เป็นครูฝึกตามหลักเกณฑ์ที่คณะกรรมการการอาชีวศึกษากำหนด
                                    <br />
                                </p>

                                <h3 class="card-title">
                                    7. พื้นความรู้และคุณสมบัติของผู้เรียน
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ต้องเป็นไปตามเกณฑ์ดังนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    7.1
                                    มีพื้นความรู้และคุณสมบัติเป็นไปตามระเบียบกระทรวงศึกษาธิการว่าด้วยการจัดการศึกษาและการประเมินผลการเรียนตลอดตามหลักสูตร
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    7.2
                                    ได้รับการคัดเลือกจากสถานศึกษาอาชีวศึกษาหรือสถาบันหรือสถานประกอบการหรือโดยสถานศึกษาอาชีวศึกษาหรือสถาบันสถานประกอบร่วมกับสถานประกอบการ
                                    <br />
                                </p>

                                <h3 class="card-title">
                                    8. การจัดการเรียนการสอนและการฝึกอาชีพของสถานประกอบการ
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ต้องเป็นไปตามเกณฑ์ดังนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    8.1 สอดคล้องกับจุดประสงค์สาขาวิชาและมาตรฐานการศึกษาวิชาชีพของสาขาวิชาและสาขางาน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    8.2
                                    ผู้เรียนต้องจัดทำ
                                    บันทึกฝึกอาชีพบันทึกคุณธรรมจริยธรรมและจิตอาสาแฟ้มสะสมผลงานตามแบบที่สำนักงานคณะกรรมการการอาชีวศึกษากำหนด
                                    <br />
                                </p>

                                <h3 class="card-title">
                                    9. การนิเทศผู้เรียนในสถานประกอบการ
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.1 การนิเทศในประเทศให้ดำเนินการดังนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.1.1 ให้ครูนิเทศไปนิเทศในสถานประกอบการอย่างน้อย 3 ครั้งต่อ 1 ภาคเรียน
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.1.2
                                    ให้ใช้เทคโนโลยีสารสนเทศในการนิเทศในประเทศอย่างสม่ำเสมอและให้รายงานผลต่อการนิเทศต่อผู้บริหารสถานศึกษาหรือสถาบันการอาชีวศึกษาทราบ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.1.3 ให้ใช้วิธีการนิเทศที่หลากหลาย
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.2 การนิเทศในต่างประเทศ ให้ดำเนินการดังนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.2.1 ให้ครูนิเทศไปนิเทศอย่างน้อยหนึ่งครั้งต่อภาคเรียน หรือ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.2.2 ให้ภาคีเครือข่ายในต่างประเทศเป็นผู้นิเทศแทนในทุกภาคเรียน หรือ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.2.3 ให้ใช้เทคโนโลยีสารสนเทศในการนิเทศต่างประเทศอย่างสม่ำเสมอ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.2.4 การไปนิเทศในต่างประเทศต้องได้รับอนุญาตจากผู้มีอำนาจตามระเบียนก่อนการเดินทาง
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.3 การไปนิเทศการฝึกอาชีพให้เห็นไปตามแผนการฝึกอาชีพที่จัดทำขึ้น
                                    หากการฝึกอาชีพไม่ครบถ้วนสถานศึกษาหรือสถานบันการอาชีวศึกษาต้องจัดการฝึกอาชีพให้เป็นไปตามจุดประสงค์สาขาวิชา
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.4
                                    ครูนิเทศต้องผ่านการอบรมการนิเทศการฝึกอาชีพจากสำนักงานคณะกรรมการการอาชีวศึกษาหรือผู้ได้รับมอบหมาย
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.5
                                    ชั่วโมงนิเทศการฝึกอาชีพในสถานประกอบการให้คิดเป็นเวลาชั่วโมงสอนปกติหากชั่วโมงสอนเกินภาระงานที่กำหนด
                                    สามารถเบิกค่าสอนเกินภาระงานได้ตามระเบียบ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    9.6 การเดินทางไปนิเทศให้เบิกค่าใช้จ่ายในการเดินทางไปราชการได้ตามระเบียบ
                                    <br />
                                </p>

                                <h3 class="card-title">
                                    10. การวดัผลและประเมินผลการเรียนและการสำเร็จการศึกษา
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ให้เป็นไปตามระเบียบกระทรวงศึกษาธิการว่าด้วยการจัดการศึกษาและการประเมินผลการเรียนตามหลักสูตรแต่ละระดับ
                                    การวัดและประเมินผลการเรียนรู้ให้ดำเนินการอย่างเป็นระบบ
                                    และใช้วิธีการประเมินอย่างหลากหลายตามสภาพจริง
                                    สอดคล้องกับจุดมุ่งหมายของหลักสูตรและกิจกรรมการเรียนการสอนการฝึกอาชีพ
                                    โดยคำนึงถึงพัฒนาการของผู้เรียนและสมรรถนะที่ต้องการ
                                    <br />
                                </p>

                                <h3 class="card-title">
                                    11. การประกันคุณภาพหลักสูตร และการจัดการเรียนการสอน
                                </h3>
                                <p>
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    ให้ทุกหลักสูตรกำหนดระบบประกันคุณภาพไว้ให้ชัดเจนตามเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับ
                                    ดังนี้
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    11.1 กำหนดสมรรถนะรายวิชา
                                    โดยปรับปรุงรายวิชาเดิมหรือพัฒนารายวิชาใหม่ให้สอดคล้องกับความต้องการของสถานประกอบการ
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    11.2 การประกันคุณภาพผู้สำเร็จการศึกษา
                                    มีคุณวุฒิตามเกณฑ์มาตรฐานคุณวุฒิอาชีวศึกษาแต่ละระดับ
                                    และมาตรฐานการศึกษาวิชาชีพของสาขาวิชาและสาขางาน มีทักษะและความสามารถในการกำกับดูแล
                                    มีความเชี่ยวชาญ ในการแก้ไขปัญหาการปฏิบัติงาน
                                    สถานประกอบการมีความพึงพอใจในศักยภาพผู้สำเร็จการศึกษา
                                    <br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    11.3 มีใบรับรองการฝึกอาชีพจากสถานประกอบการ รัฐวิสาหกิจ หรือหน่วยงานของรัฐที่นักเรียน
                                    หรือนักศึกษาได้ไปฝึกอาชีพด้วย
                                    <br />
                                </p>
                            </blockquote>
                        </div>
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
                        <h2 class="text-center text-danger">แนวทางการจัดการอาชีวศึกษาระบบทวิภาคี</h2>
                        <div id="carouselExampleCaptions1"
                            class="mx-auto d-block carousel slide rounded border border-danger" data-ride="carousel">
                            <!-- แถบสี่เหลี่ยมด้านล้าง -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./dist/img/Slide5.jpg" class="d-block w-100 rounded" alt="...">
                                    <!-- <div class="carousel-caption d-none d-md-block ">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div> -->
                                </div>
                                <div class="carousel-item">
                                    <img src="./dist/img/Slide6.jpg" class="d-block w-100 rounded" alt="...">
                                    <!-- <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div> -->
                                </div>
                                <div class="carousel-item">
                                    <img src="./dist/img/Slide7.jpg" class="d-block w-100 rounded" alt="...">
                                    <!-- <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div> -->
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions1"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions1"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>

                        <blockquote class="quote-danger">
                            <!-- <h3>แนวคิด</h3> -->
                            <h3 class="card-title">
                                การเริ่มต้นจัดการอาชีวศึกษาระบบทวิภาคี
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                ต้องเริ่มต้นจากความร่วมมือระหว่างสถานศึกษาอาชีวศึกษาหรือสถาบันกับ สถานประกอบการ
                                รัฐวิสาหกิจ หรือหน่วยงานของรัฐ
                                <br />
                            </p>

                            <h3 class="card-title">
                                ขอบเขตความร่วมมือในการจัดการอาชีวศึกษาระบบทวิภาคี
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                ครอบคลุมถึงการจัดหลักสูตร การวางแผนและเตรียมการ การจัดแผนการเรียน การจัดทำแผนการฝึกอาชีพ
                                และแผนการนิเทศ จัดการเรียน การฝึกอาชีพและการฝึกประสบการณ์ สมรรถนะวิชาชีพ
                                การวัดและการประเมินผล รวมทั้งการจัดทำเอกสาร รับรองการฝึกอาชีพ
                                <br />
                            </p>

                            <h3 class="card-title">
                                องค์ประกอบในการจัดการอาชีวศึกษาระบบทวิภาคี
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - มีบันทึกความร่วมมือระหว่างสำนักงานคณะกรรมการการอาชีวศึกษา สถานศึกษาอาชีวศึกษา
                                หรือสถาบัน กับสถานประกอบการ รัฐวิสาหกิจ หรือหน่วยงานของรัฐ
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - มีสัญญาการฝึกอาชีพระหว่างสถานประกอบการกับผู้เรียน
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - มีแผนการฝึกอาชีพในสถานประกอบการ ตลอดระยะเวลาการฝึกอาชีพที่กำหนดตามโครงสร้างหลักสูตร
                                และแผนการเรียนของสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                - มีการประเมินมาตรฐานการฝึกอาชีพตามข้อตกลง
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                และตามแผนการฝึกอาชีพที่จัดทำร่วมกันระหว่างสถานประกอบการ และสถานศึกษาหรือสถาบัน
                                ภายใต้หลักเกณฑ์และวิธีการสำนักงานคณะกรรมการการอาชีวศึกษากำหนด
                                - มีใบรับรองการฝึกอาชีพจากสถานประกอบการ
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - มีวุฒิบัตรการศึกษาระบบทวิภาคีลงนามร่วมกัน 2 ฝ่าย คือสถานประกอบการ
                                และสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                <br />
                            </p>

                            <h3 class="card-title">
                                บุคลากรที่เกี่ยวข้องกับการจัดการอาชีวศึกษาระบบทวิภาคี
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - สถานศึกษาอาชีวศึกษาหรือสถาบัน ได้แก่ หัวหน้างานอาชีวศึกษาระบบทวิภาคี
                                หัวหน้างานความร่วมมือ ครูที่ปรึกษา ครูนิเทศ ครูผู้สอน
                                (จำนวนครูวิชาชีพในแผนกไม่น้อยกว่าร้อยละ 30
                                และต้องได้รับการพัฒนาจากสถานประกอบการไม่น้อยกว่า 80 ชม. ต่อคนต่อปีการศึกษา
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - สถานประกอบการ ได้แก่ ผู้ควบคุมการฝึก ครูฝึก (จำนวนครูฝึก: ผู้เรียนระดับปวช. 1:10 คน
                                ระดับปวส. 1:8 คน)
                                <br />

                            </p>

                            <h3 class="card-title">
                                ผู้เรียนอาชีวศึกษาระบบทวิภาคี
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                -
                                มีพื้นความรู้และคุณสมบัติเป็นไปตามข้อกำหนดของระเบียบกระทรวงศึกษาว่าด้วยการจัดการศึกษาและการประเมินผลการเรียนตามหลักสูตรที่เข้าเรียน
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - ผ่านการสอบคัดเลือกหรือคัดเลือกตามคุณสมบัติและตามจำนวนที่กำหนด โดยสถานประกอบการ
                                สถานศึกษา หรือดำเนินการ่วมกัน
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - ต้องทำสัญญาการฝึกอาชีพกับสถานประกอบการ
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - ต้องเข้ารับการปฐมนิเทศก่อนการฝึกอาชีพและร่วมปัจฉิมนิเทศหลังเสร็จสิ้นการฝึกอาชีพ
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - ต้องเข้ารับการฝึกอาชีพตามแผนและระยะเวลา พร้อมจัดทำบันทึกการฝึกอาชีพ คุณธรรม ฯลฯ
                                ตามแบบที่กำหนด
                                <br />
                            </p>

                            <h3 class="card-title">
                                หลักสูตรที่ใช้ในการจัดการอาชีวศึกษาระบบทวิภาคี
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                สามารถดำเนินการได้ในทุกระดับหลักสูตร ประเภทวิชา สาขาวิชาและสาขางาน ที่ตรงกับลักษณะงานของ
                                สถานประกอบการ รัฐวิสาหกิจ หรือหน่วยงานของรัฐที่ร่วมจัดการศึกษาระบบทวิภาคี
                                <br />
                            </p>

                            <h3 class="card-title">
                                กลุ่มวิชาที่นำไปจัดการศึกษาระบบทวิภาคี
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - ให้ใช้รายวิชาทวิภาคีในหมวดวิชาสมรรถนะวิชาชีพ กลุ่มสมรรถนะวิชาชีพเลือก (สาขางาน)
                                ที่กำหนดไว้ในหลักสูตร (ปวช.ไม่น้อยกว่า 18 หน่วยกิต และปวส. ไม่น้อยกว่า 12 หน่วยกิต)
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - สถานศึกษาและสถานประกอบการร่วมกันจัดทำรายละเอียดของแต่ละรายวิชาให้สอดคล้องกับลักษณะงาน
                                เหมาะสมกับระดับของหลักสูตร
                                สอดคล้องกับวัตถุประสงค์สาขาวิชามาตรฐานการศึกษาวิชาชีพของสาขาวิชาและสาขางาน
                                พร้อมทั้งรายงาน สอศ.ทราบ
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                -
                                สถานศึกษาและสถานประกอบการสามารถพิจารณานำรายวิชาอื่นในหมวดวิชาสมรรถนะแกนกลางหมวดวิชาสมรรถนะวิชาชีพ
                                หมวดวิชาเลือกเสรี รวมทั้งกิจกรรมเสริมหลักสูตร
                                ตรงกับลักษณะงานไปเรียนและฝึกในสถานประกอบการในภาคเรียนที่จัดฝึกอาชีพในระบบทวิภาคีด้วยได้
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                -
                                สถานศึกษาและสถานประกอบการร่วมกันทำแผนการฝึกอาชีพรายวิชาที่นำไปเรียนและฝึกในสถานประกอบการ
                                <br />
                            </p>

                            <h3 class="card-title">
                                ลักษณะการจัดการเรียนการสอนอาชีวศึกษาระบบทวิภาคี
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                -
                                จัดให้ผู้เรียนใช้เวลาเรียนและฝึกปฏิบัติทักษะพื้นฐานส่วนหนึ่งในสถานศึกษาอาชีวศึกษาหรือสถาบัน
                                และใช้เวลาฝึกปฏิบัติงานหรือฝึกอาชีพในสถานประกอบการตามแผนการเรียนที่จัดทำร่วมกัน
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - จัดแผนการเรียนให้ผู้เรียนได้รับการฝึกอาชีพในสถานประกอบการของแต่ละหลักสูตร ไม่น้อยกว่า
                                2 ภาคเรียน หรือ 1 ปีการศึกษา
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                - จัดให้มีครูนิเทศไปนิเทศในสถานประกอบการ (ในประเทศอย่างน้อย 3 ครั้งต่อภาคเรียน
                                ต่างประเทศอย่างน้อย 1 ครั้งต่อภาคเรียน
                                รวมทั้งให้ใช้เทคโนโลยีสารสนเทศและวิธีการนิเทศที่หลากหลายอย่างสม่ำเสมอ
                                พร้อมทั้งรายงานผู้บริหารทราบ)
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                -
                                สถานศึกษาและสถานประกอบการร่วมกันประเมินผลและให้ระดับผลการเรียนรายวิชาที่นำไปฝึกอาชีพของผู้เรียนอย่างเป็นระบบตามสภาพจริง
                                และใช้วิธีการที่หลากหลาย
                                ตามระเบียบกระทรวงศึกษาธิการว่าด้วยการจัดการศึกษาและประเมินผลการเรียนตามหลักสูตร
                                <br />
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
                            <!-- การจัดอาชีวศึกษาระบบทวิภาคีระหว่างสถานศึกษา <br />และสถานประกอบการ -->
                            รูปแบบการจัดการอาชีวศึกษาระบบทวิภาคี
                        </h2>
                        <center>
                            <img src="./dist/img/Slide3.jpg" class="card-img-top rounded border border-danger"
                                style="width: 80%;" alt="...">
                        </center>
                        <p>
                            <br />
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ในปัจจุบันการจัดการอาชีวศึกษาระบบทวิภาคีของสำนักงานคณะกรรมการการอาชีวศึกษาครอบคลุมความร่วมมือกับสถานประกอบการทั้งในประเทศและต่างประเทศ
                            โดยแบ่งเป็น 5 model ดังนี้
                            <br />
                        </p>
                        <blockquote class="quote-danger">
                            <h3>ภายในประเทศ</h3>

                            <h3 class="card-title">
                                Model A
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                การจัดอาชีวศึกษาระบบทวิภาคีเต็มรูปแบบ (ร้อยเปอร์เซ็นต์) ในพื้นที่
                                คือมีสถานประกอบการในพื้นที่ตั้งสถานศึกษาผู้เรียนทุกคนทุกสาขาวิชา ได้เข้าฝึกอาชีพใน
                                สถานประกอบการ
                                <br />
                            </p>

                            <h3 class="card-title">
                                Model B
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                การจัดอาชีวศึกษาระบบทวิภาคีเต็มรูปแบบ (ร้อยเปอร์เซ็นต์) นอกพื้นที่
                                คือการจัดอาชีวศึกษาระบบทวิภาคี ที่ไม่มีสถานประกอบการในพื้นที่ตั้งสถานศึกษา
                                ผู้เรียนทุกคนทุกสาขาวิชาได้เข้าฝึกอาชีพในสถานประกอบการโดยจะต้องมีการจัดที่พักใกล้กับสถานประกอบการที่ไปฝึกอาชีพให้แก่ผู้เรียน
                                และมีครูควบคุมดูแล
                                <br />
                            </p>

                            <h3 class="card-title">
                                Model C
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                การจัดอาชีวศึกษาระบบทวิภาคีบางสาขาวิชา
                                <br />
                            </p>

                            <h3 class="card-title">
                                Model D
                            </h3>
                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                การจัดอาชีวศึกษาระบบทวิภาคีให้แก่พนักงานของสถานประกอบการ
                                <br />
                            </p>
                        </blockquote>
                        <blockquote class="quote-danger">
                            <h3>
                                ต่างประเทศ
                            </h3>

                            <h3 class="card-title">
                                Model E
                            </h3>

                            <p>
                                <br />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                การจัดอาชีวศึกษาระบบทวิภาคีกับสถานประกอบการต่างประเทศ
                                <br />
                            </p>

                        </blockquote>

                    </div>
                </div>

            </div>

            <!--  -->
            <!-- <div class="row">
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

            <!-- <div class="row">
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
            </div> -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="card card-danger">
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
            </div> -->

            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->

            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="card card-danger card-outline" style="min-height: 200px;">
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
            </div> -->


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

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Featured</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Special title treatment</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Featured</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Special title treatment</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div> -->

        </div>
    </div>



    <!-- <aside class="control-sidebar control-sidebar-dark">

</aside> -->

    <?php require('layout/footer.php') ?>