<?php
include "./controller/aboutController.php";
$dataInfo = new getinfoPersonel();
$dataPersonel = $dataInfo->getinfo();

$skillInfo = new getskillsPersonel();
$mySkils = $skillInfo->getskill();

$education = new geteducInfo();
$educationInfo = $education->geteduc();

$experience = new getexpInfo();
$experienceInfo = $experience->getexp();

// print_r($mySkils);
// print_r($educationInfo);
?>

<!-- about section -->

<section class="about section">
    <div class="container">
        <div class="rowA">
            <div class="section-title">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="main-container">
            <div class="content-about">
                <?php foreach ($dataPersonel as $dataPersone); { ?>
                    <div class="rowA">
                        <div class="about-text">
                            <h3>I'm <?php echo $dataPersone["name"]; ?> and <span><?php echo $dataPersone["work"]; ?></span></h3>
                            <p>My name Zakaria ELHAOUARI, i am a web developer</p>
                        </div>
                    </div>


                    <div class="rowA about-Info">
                        <div class="personal-info">
                            <div class="row ">
                                <div class="info-item p1">
                                    <p>Phone: <span>0<?php echo $dataPersone["phone"]; ?></span> </p>
                                </div>
                                <div class="info-item ">
                                    <p>Email: <span><?php echo $dataPersone["email"]; ?></span> </p>
                                </div>
                                <div class="info-item p1">
                                    <p>Age: <span><?php echo $dataPersone["age"]; ?></span> </p>
                                </div>
                                <div class="info-item p1">
                                    <p>City: <span><?php echo $dataPersone["City"]; ?></span> </p>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="rowA">
                            <div class="button">
                                <a href="views/images/portfolio/cv.pdf" download class="btn">Download CV</a>
                            </div>
                        </div>
                        </div>

                        <div class="skills ">
                            <div class="rowA">
                                <?php foreach ($mySkils as $skil) : ?>
                                    <div class="skill-item">
                                        <h4><?php echo $skil["skill"]; ?></h4>
                                        <div class="progress">
                                            <div class="progress-in" style="width : <?php echo $skil["process"]; ?>%"></div>
                                            <div class="skill-precent"><?php echo $skil["process"]; ?>%</div>
                                        </div>
                                    </div>
                                    <!-- <div class="skill-item">
                                            <h4>kdjd</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width : 76%"></div>
                                                <div class="skill-precent">76%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item">
                                            <h4>JavaScript</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width : 66%"></div>
                                                <div class="skill-precent">66%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item">
                                            <h4>PHP</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width : 60%"></div>
                                                <div class="skill-precent">60%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item">
                                            <h4>WordPress</h4>
                                            <div class="progress">
                                                <div class="progress-in" style="width : 60%"></div>
                                                <div class="skill-precent">60%</div>
                                            </div>
                                        </div> -->
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="rowA about-Info">
                        <div class="education ">
                            <h3 class="tit-e">Education</h3>
                            <div class="row eAbout">
                                <div class="timeline-box">
                                    <?php foreach ($educationInfo as $educ) : ?>
                                        <div class="timeline">
                                            <div class="timeline-item">
                                                <div class="circle"></div>
                                                <h6 class="timeline-date"><i class="fa fa-calendar"></i><?php echo $educ["date"]; ?></h6>
                                                <h4 class="timeline-title"><?php echo $educ["ecole"]; ?></h4>
                                                <p class="timeline-content"><?php echo $educ["descr"]; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>

                            </div>
                        </div>
                        <div class="education">
                            <h3 class="tit-e">Experience</h3>
                            <div class="row  eAbout">
                                <div class="timeline-box">
                                    <?php foreach ($experienceInfo as $expInfo) : ?>
                                        <div class="timeline">
                                            <div class="timeline-item">
                                                <div class="circle"></div>
                                                <h6 class="timeline-date"><i class="fa fa-calendar"></i><?php echo $expInfo["date"]; ?></h6>
                                                <h4 class="timeline-title"><?php echo $expInfo["socie"]; ?></h4>
                                                <p class="timeline-content"><?php echo $expInfo["descri"]; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- about section -->