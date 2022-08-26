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
                    <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
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
            <div class="jumbotron bg-success">
                <h2>Australian Apprenticeships Resources for Students</h2>
                <p>Use these resources and tools to learn about Australian Apprenticeships and research your career
                    options.</p>
            </div>


            <div class="row">
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
                    <div class="card card-success card-outline" style="min-height: 200px;">
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
            </div>

            <div class="row">
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

            </div>


        </div>
    </div>

</div>


<!-- <aside class="control-sidebar control-sidebar-dark">

</aside> -->

<?php require('layout/footer.php') ?>