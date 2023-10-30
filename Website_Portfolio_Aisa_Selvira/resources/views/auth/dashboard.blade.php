@extends('auth.layouts')

@include('auth.header')

@section('content')
<!--about start -->
<div class="container"> 
    <section id="about" class="about"> 
        <div class="section-heading text-center">
    <h2>about me</h2>
</div>
<div class="container">
    <div class="about-content">
        <div class="row">
            <div class="col-sm-6">
                <div class="single-about-txt">
                    <h3>
                        I am a UI/UX Designer and Front-end Developer. Software Engineering Technology students who have
                        an interest
                        in UI/UX design and Front-end development.
                    </h3>
                    <p>
                        I have a experience working on UI/UX design projects and Software Engineering projects in a team
                        and passion for creating beautiful, intuitive, and highly.
                    </p>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-about-add-info">
                                <h3>phone</h3>
                                <p>+62 857 2770 6328</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-about-add-info">
                                <h3>email</h3>
                                <p>aisaselvira@mail.ugm.ac.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-offset-1 col-sm-5">
                <div class="single-about-img">
                    <img src="assets/img/cofas.jpg" alt="profile_image">
                    <div class="about-list-icon">
                        <ul>
                            <li>
                                <a href="https://dribbble.com/aisaselvira">
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                </a>

                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/aisa-selvira">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/aselvira_">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
<!--/.about-->
<!--about end -->

<!--education start -->
<section id="education" class="education">
    <div class="section-heading text-center">
        <h2>education</h2>
    </div>
    <div class="container">
        <div class="education-horizontal-timeline">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-horizontal-timeline">
                        <div class="experience-time">
                            <h2>2019 - 2022</h2>
                            <h3>Software Engineering</h3>
                        </div>
                        <!--/.experience-time-->
                        <div class="timeline-horizontal-border">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <span class="single-timeline-horizontal"></span>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <h4 class="title">
                                    Vocational High School 2 Surakarta
                                </h4>
                                <h5>Surakarta, Central Java</h5>
                            </div>
                            <!--/.timeline-content-->
                        </div>
                        <!--/.timeline-->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-horizontal-timeline">
                        <div class="experience-time">
                            <h2>2022 - Present</h2>
                            <h3>Bachelor of Applied Computer in Software Engineering</h3>
                        </div>
                        <!--/.experience-time-->
                        <div class="timeline-horizontal-border">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                            <span class="single-timeline-horizontal"></span>
                        </div>
                        <div class="timeline">
                            <div class="timeline-content">
                                <h4 class="title">
                                    Gadjah Mada University
                                </h4>
                                <h5>Bulaksumur, Yogyakarta </h5>
                            </div>
                            <!--/.timeline-content-->
                        </div>
                        <!--/.timeline-->
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!--/.education-->
<!--education end -->

<!--skills start -->
<section id="skills" class="skills">
    <div class="skill-content">
        <div class="section-heading text-center">
            <h2>skills</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-skill-content">
                        <div class="barWrapper">
                            <span class="progressText">Figma</span>
                            <div class="single-progress-txt">
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="10"
                                        aria-valuemax="100" style="">

                                    </div>
                                </div>
                                <h3>95%</h3>
                            </div>
                        </div><!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">Visual Studio Code</span>
                            <div class="single-progress-txt">
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="10"
                                        aria-valuemax="100" style="">

                                    </div>
                                </div>
                                <h3>90%</h3>
                            </div>
                        </div><!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">Android Studio</span>
                            <div class="single-progress-txt">
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="10"
                                        aria-valuemax="100" style="">

                                    </div>
                                </div>
                                <h3>85%</h3>
                            </div>
                        </div><!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">Intelli J</span>
                            <div class="single-progress-txt">
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="10"
                                        aria-valuemax="100" style="">

                                    </div>
                                </div>
                                <h3>87%</h3>
                            </div>
                        </div><!-- /.barWrapper -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-skill-content">
                        <div class="barWrapper">
                            <span class="progressText">HTML & CSS</span>
                            <div class="single-progress-txt">
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="10"
                                        aria-valuemax="100" style="">

                                    </div>
                                </div>
                                <h3>95%</h3>
                            </div>
                        </div><!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">JavaScript</span>
                            <div class="single-progress-txt">
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="10"
                                        aria-valuemax="100" style="">

                                    </div>
                                </div>
                                <h3>80%</h3>
                            </div>
                        </div><!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">PHP MySQL</span>
                            <div class="single-progress-txt">
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="10"
                                        aria-valuemax="100" style="">

                                    </div>
                                </div>
                                <h3>87%</h3>
                            </div>
                        </div><!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">Laravel</span>
                            <div class="single-progress-txt">
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="10"
                                        aria-valuemax="100" style="">

                                    </div>
                                </div>
                                <h3>80%</h3>
                            </div>
                        </div><!-- /.barWrapper -->
                    </div>
                </div>
            </div><!-- /.row -->
        </div> <!-- /.container -->
    </div><!-- /.skill-content-->

</section>
<!--/.skills-->
<!--skills end -->

<!--experience start -->
<section id="experience" class="experience">
    <div class="section-heading text-center">
        <h2>experience</h2>
    </div>
    <div class="container">
        <div class="experience-content">
            <div class="main-timeline">
                <ul>
                    <li>
                        <div class="single-timeline-box fix">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="experience-time text-right">
                                        <h2>2023 - 2024</h2>
                                        <h3>Staff of Media and Information Division at KOMATIK Gadjah Mada University
                                        </h3>
                                    </div>
                                    <!--/.experience-time-->
                                </div>
                                <!--/.col-->
                                <div class="col-md-offset-1 col-md-5">
                                    <div class="timeline">
                                        <div class="timeline-content">
                                            <h4 class="title">
                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                KOMATIK Gadjah Mada University
                                            </h4>
                                            <h5>Bulaksumur, Yogyakarta</h5>
                                            <p class="description">
                                                - Managed and maintained KOMATIK social media platforms and website,
                                                implementing regular updates, interactive
                                                and engaging content, and optimizing user experience.<br>
                                                - Collaborated with team members to develop creative strategies for
                                                social media campaigns, resulting in increased
                                                engagement and reach.<br>
                                                - Documented all forms of KOMATIK activities, both offline and online,
                                                ensuring comprehensive records for future reference and
                                                evaluation.
                                            </p>
                                        </div>
                                        <!--/.timeline-content-->
                                    </div>
                                    <!--/.timeline-->
                                </div>
                                <!--/.col-->
                            </div>
                        </div>
                        <!--/.single-timeline-box-->
                    </li>

                    <li>
                        <div class="single-timeline-box fix">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-5 experience-time-responsive">
                                    <div class="experience-time">
                                        <h2>
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            2023
                                        </h2>
                                        <h3>Staff of Co-facilitator Division at PPSMB Pionir Gadjah Mada University 2023
                                        </h3>
                                    </div>
                                    <!--/.experience-time-->
                                </div>
                                <!--/.col-->
                                <div class="col-md-5">
                                    <div class="timeline">
                                        <div class="timeline-content text-right">
                                            <h4 class="title">
                                                PPSMB PIONIR GADJAH MADA
                                            </h4>
                                            <h5>Bulaksumur, Yogyakarta</h5>
                                            <p class="description">
                                                - Facilitated teaching activities in the classroom as part of a
                                                two-person team<br> during the PPSMB program.<br>
                                                - Delivered course materials in a creative and engaging manner, ensuring <br>
                                                adaptation to the provided teaching materials.<br>
                                                - Served as a role model, embodying and practicing the Tridharma values
                                                of <br> higher education, while guiding and mentoring over 50
                                                students.
                                        </div>
                                        <!--/.timeline-content-->
                                    </div>
                                    <!--/.timeline-->
                                </div>
                                <!--/.col-->
                                <div class="col-md-offset-1 col-md-5 experience-time-main">
                                    <div class="experience-time">
                                        <h2>
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            2023
                                        </h2>
                                        <h3>Staff of Co-facilitator Division at PPSMB Pionir Gadjah Mada University 2023
                                        </h3>
                                    </div>
                                    <!--/.experience-time-->
                                </div>
                                <!--/.col-->
                            </div>
                        </div>
                        <!--/.single-timeline-box-->
                    </li>

                    <li>
                        <div class="single-timeline-box fix">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="experience-time text-right">
                                        <h2>2020 - 2021</h2>
                                        <h3>Samsung Innovation Campus Competition Batch 2 </h3>
                                    </div>
                                    <!--/.experience-time-->
                                </div>
                                <!--/.col-->
                                <div class="col-md-offset-1 col-md-5">
                                    <div class="timeline">
                                        <div class="timeline-content">
                                            <h4 class="title">
                                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                                Samsung Innovation Campus
                                            </h4>
                                            <h5>Jakarta</h5>
                                            <p class="description">
                                                - Developed dynamic and responsive websites using HTML, CSS, JavaScript
                                                and React JS ensuring cross-browser
                                                compatibility and optimal user experience.<br>
                                                - Designed and implemented UI/UX for applications, focusing on enhancing
                                                user experience and incorporating intuitive
                                                navigation.<br>
                                                - Contributed to the development and implementation of digital product
                                                projects, utilizing web development technologies to
                                                deliver innovative solutions.
                                            </p>
                                        </div>
                                        <!--/.timeline-content-->
                                    </div>
                                    <!--/.timeline-->
                                </div>
                                <!--/.col-->
                            </div>
                        </div>
                        <!--/.single-timeline-box-->
                    </li>

                    <li>
                        <div class="single-timeline-box fix">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-5 experience-time-responsive">
                                    <div class="experience-time">
                                        <h2>
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            2020 - 2021
                                        </h2>
                                        <h3>Samsung Innovation Campus Internship </h3>
                                    </div>
                                    <!--/.experience-time-->
                                </div>
                                <!--/.col-->
                                <div class="col-md-5">
                                    <div class="timeline">
                                        <div class="timeline-content text-right">
                                            <h4 class="title">
                                                Samsung Innovation Campus Internship
                                            </h4>
                                            <h5>Bandung, Indonesia</h5>
                                            <p class="description">
                                                - Created video pitching and miro content. This involved conducting
                                                thorough <br>user exploration, analyzing interview results,
                                                generating innovative solution <br> sketches,creating wireframes, and
                                                developing comprehensive lean canvas models.<br>
                                                - Completed the Coding Blended Learning program, gaining <br>proficiency in
                                                essential web development technologies such as
                                                HTML, CSS, JavaScript, and Web Development <br>for Beginners.
                                            </p>
                                        </div>
                                        <!--/.timeline-content-->
                                    </div>
                                    <!--/.timeline-->
                                </div>
                                <!--/.col-->
                                <div class="col-md-offset-1 col-md-5 experience-time-main">
                                    <div class="experience-time">
                                        <h2>
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            2020 - 2021
                                        </h2>
                                        <h3>Samsung Innovation Campus Internship </h3>
                                    </div>
                                    <!--/.experience-time-->
                                </div>
                                <!--/.col-->
                            </div>
                        </div>
                        <!--/.single-timeline-box-->
                    </li>
                </ul>
            </div>
            <!--.main-timeline-->
        </div>
        <!--.experience-content-->
    </div>

</section>
<!--/.experience-->
<!--experience end -->

<!--profiles start -->
<section id="profiles" class="profiles">
    <div class="profiles-details">
        <div class="section-heading text-center">
            <h2>profiles</h2>
        </div>
        <div class="container">
            <div class="profiles-content">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-profile">
                            <div class="profile-txt">
                                <a href="https://dribbble.com/aisaselvira"><i class="flaticon-dribbble"></i></a>
                                <div class="profile-icon-name">dribbble</div>
                            </div>
                            <div class="single-profile-overlay">
                                <div class="profile-txt">
                                    <a href="https://dribbble.com/aisaselvira"><i class="flaticon-dribbble"></i></a>
                                    <div class="profile-icon-name">dribbble</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-profile">
                            <div class="profile-txt">
                                <a href="https://www.behance.net/aisaselvira"><i class="flaticon-behance-logo"></i></a>
                                <div class="profile-icon-name">behance</div>
                            </div>
                            <div class="single-profile-overlay">
                                <div class="profile-txt">
                                    <a href="https://www.behance.net/aisaselvira"><i class="flaticon-behance-logo"></i></a>
                                    <div class="profile-icon-name">behance</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-profile profile-no-border">
                            <div class="profile-txt">
                                <a href="https://github.com/aisaselvira/"><i class="flaticon-github-logo"></i></a>
                                <div class="profile-icon-name">github</div>
                            </div>
                            <div class="single-profile-overlay">
                                <div class="profile-txt">
                                    <a href="https://github.com/aisaselvira/"><i class="flaticon-github-logo"></i></a>
                                    <div class="profile-icon-name">github</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</section>
<!--/.profiles-->
<!--profiles end -->

<!--portfolio start -->
<section id="portfolio" class="portfolio">
    <div class="portfolio-details">
        <div class="section-heading text-center">
            <h2>portfolio</h2>
        </div>
        <div class="container">
            <div class="portfolio-content">
                <div class="isotope">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="item">
                                <img src="assets/img/cover1.png" alt="portfolio image" />
                                <div class="isotope-overlay">
                                    <a href="https://www.figma.com/proto/g2crvwH1EMuSt3zpa3Rbp7/OTAINSIGHT?node-id=1-2&starting-point-node-id=1%3A2&mode=design&t=rLBKiiSuELZjcuy9-1">
                                        Redesign Starbucks ID | UI/UX Design
                                    </a>
                                </div><!-- /.isotope-overlay -->
                            </div><!-- /.item -->
                            <div class="item">
                                <img src="assets/img/cover2.png" alt="portfolio image" />
                                <div class="isotope-overlay">
                                    <a href="https://www.figma.com/proto/10eq516u5PVX5HnRdwdmPK/NutriKidz?node-id=3-1842&starting-point-node-id=3%3A1842&mode=design&t=Lv18qNXgXfY6GqwC-1">
                                    NutriKidz App | UI/UX Design
                                    </a>
                                </div><!-- /.isotope-overlay -->
                            </div><!-- /.item -->
                        </div><!-- /.col -->

                        <div class="col-sm-4">
                            <div class="item">
                                <img src="assets/img/cover3.png" alt="portfolio image" />
                                <div class="isotope-overlay">
                                    <a href="https://www.figma.com/file/pWa9EN3DpZsdif2xnNSBeD/Wireframe?type=design&node-id=351%3A4158&mode=design&t=cswyZTBduLiQOZMa-1">
                                        Web Content Collaboration | Web Design
                                    </a>
                                </div><!-- /.isotope-overlay -->
                            </div><!-- /.item -->
                        </div><!-- /.col -->

                        <div class="col-sm-4">
                            <div class="item">
                                <img src="assets/img/cover4.png" alt="portfolio image" />
                                <div class="isotope-overlay">
                                    <a href="https://www.figma.com/proto/SjS2RLyf5uiU4501DVartW/A-three?type=design&node-id=280-2138&t=phJJE3WsHmDG65oa-1&scaling=scale-down&page-id=5%3A3&starting-point-node-id=280%3A2138&show-proto-sidebar=1&mode=design">
                                        Redesign OtaInsight | UI/UX Design
                                    </a>
                                </div><!-- /.isotope-overlay -->
                            </div><!-- /.item -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
                <!--/.isotope-->
            </div>
            <!--/.gallery-content-->
        </div>
        <!--/.container-->
    </div>
    <!--/.portfolio-details-->

</section>
<!--/.portfolio-->
<!--portfolio end -->

<!--contact start -->
<section id="contact" class="contact">
    <div class="section-heading text-center">
        <h2>contact me</h2>
    </div>
    <div class="container">
        <div class="contact-content">
            <div class="row">
                <div class="col-md-offset-1 col-md-5 col-sm-6">
                    <div class="single-contact-box">
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Name*"
                                                name="name">
                                        </div>
                                        <!--/.form-group-->
                                    </div>
                                    <!--/.col-->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Email*"
                                                name="email">
                                        </div>
                                        <!--/.form-group-->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject"
                                                name="subject">
                                        </div>
                                        <!--/.form-group-->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="8" id="comment"
                                                placeholder="Message"></textarea>
                                        </div>
                                        <!--/.form-group-->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="single-contact-btn">
                                            <a class="contact-btn" href="#" role="button">submit</a>
                                        </div>
                                        <!--/.single-single-contact-btn-->
                                    </div>
                                    <!--/.col-->
                                </div>
                                <!--/.row-->
                            </form>
                            <!--/form-->
                        </div>
                        <!--/.contact-form-->
                    </div>
                    <!--/.single-contact-box-->
                </div>
                <!--/.col-->
                <div class="col-md-offset-1 col-md-5 col-sm-6">
                    <div class="single-contact-box">
                        <div class="contact-adress">
                            <div class="contact-add-head">
                                <h3>Aisa Selvira</h3>
                                <p>UI/UX Designer | Front-end Developer</p>
                            </div>
                            <div class="contact-add-info">
                                <div class="single-contact-add-info">
                                    <h3>phone</h3>
                                    <p>+62 857 2770 6328</p>
                                </div>
                                <div class="single-contact-add-info">
                                    <h3>email</h3>
                                    <p>aisaselvira@mail.ugm.ac.id</p>
                                </div>
                                <div class="single-contact-add-info">
                                    <h3>website</h3>
                                    <p>www.aisaselvira.com</p>
                                </div>
                            </div>
                        </div>
                        <!--/.contact-adress-->
                        <div class="hm-foot-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <!--/li-->
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <!--/li-->
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <!--/li-->
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <!--/li-->
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <!--/li-->
                            </ul>
                            <!--/ul-->
                        </div>
                        <!--/.hm-foot-icon-->
                    </div>
                    <!--/.single-contact-box-->
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>
        <!--/.contact-content-->
    </div>
    <!--/.container-->

</section>
<!--/.contact-->
<!--contact end -->

@endsection