<style>

    p {
        line-height: 1.2;
    }
    body{
    background-color: #f7f7f7;
    }

    .main-timeline {
        position: relative
    }

    .main-timeline:before {
        content: "";
        display: block;
        width: 2px;
        height: 100%;
        background: #c6c6c6;
        margin: 0 auto;
        position: absolute;
        top: 0;
        left: 0;
        right: 0
    }

    .main-timeline .timeline {
        margin-bottom: 40px;
        position: relative
    }

    .main-timeline .timeline:after {
        content: "";
        display: block;
        clear: both
    }

    .main-timeline .icon {
        width: 18px;
        height: 18px;
        line-height: 18px;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0
    }

    .main-timeline .icon:before,
    .main-timeline .icon:after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        position: absolute;
        top: 0;
        left: 0;
        transition: all 0.33s ease-out 0s
    }

    .main-timeline .icon:before {
        background: #fff;
        border: 2px solid #232323;
        left: -3px
    }

    .main-timeline .icon:after {
        border: 2px solid #c6c6c6;
        left: 3px
    }

    .main-timeline .timeline:hover .icon:before {
        left: 3px
    }

    .main-timeline .timeline:hover .icon:after {
        left: -3px
    }

    .main-timeline .date-content {
        width: 50%;
        float: left;
        margin-top: 22px;
        position: relative
    }

    .main-timeline .date-content:before {
        content: "";
        width: 36.5%;
        height: 2px;
        background: #c6c6c6;
        margin: auto 0;
        position: absolute;
        top: 0;
        right: 10px;
        bottom: 0
    }

    .main-timeline .date-outer {
        width: 125px;
        height: 125px;
        font-size: 16px;
        text-align: center;
        margin: auto;
        z-index: 1
    }

    .main-timeline .date-outer:before,
    .main-timeline .date-outer:after {
        content: "";
        width: 125px;
        height: 125px;
        margin: 0 auto;
        border-radius: 50%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        transition: all 0.33s ease-out 0s
    }

    .main-timeline .date-outer:before {
        background: #fff;
        border: 2px solid #232323;
        left: -6px
    }

    .main-timeline .date-outer:after {
        border: 2px solid #c6c6c6;
        left: 6px
    }

    .main-timeline .timeline:hover .date-outer:before {
        left: 6px
    }

    .main-timeline .timeline:hover .date-outer:after {
        left: -6px
    }

    .main-timeline .date {
        width: 100%;
        margin: auto;
        position: absolute;
        top: 27%;
        left: 0
    }

    .main-timeline .month {
        font-size: 18px;
        font-weight: 700
    }

    .main-timeline .year {
        display: block;
        font-size: 30px;
        font-weight: 700;
        color: #232323;
        line-height: 36px
    }

    .main-timeline .timeline-content {
        width: 50%;
        padding: 20px 0 20px 50px;
        float: right
    }

    .main-timeline .title {
        font-size: 19px;
        font-weight: 700;
        line-height: 24px;
        margin: 0 0 15px 0
    }

    .main-timeline .description {
        margin-bottom: 0
    }

    .main-timeline .timeline:nth-child(2n) .date-content {
        float: right
    }

    .main-timeline .timeline:nth-child(2n) .date-content:before {
        left: 10px
    }

    .main-timeline .timeline:nth-child(2n) .timeline-content {
        padding: 20px 50px 20px 0;
        text-align: right
    }

    @media only screen and (max-width: 991px) {
        .main-timeline .date-content {
            margin-top: 35px
        }
        .main-timeline .date-content:before {
            width: 22.5%
        }
        .main-timeline .timeline-content {
            padding: 10px 0 10px 30px
        }
        .main-timeline .title {
            font-size: 17px
        }
        .main-timeline .timeline:nth-child(2n) .timeline-content {
            padding: 10px 30px 10px 0
        }
    }

    @media only screen and (max-width: 767px) {
        .main-timeline:before {
            margin: 0;
            left: 7px
        }
        .main-timeline .timeline {
            margin-bottom: 20px
        }
        .main-timeline .timeline:last-child {
            margin-bottom: 0
        }
        .main-timeline .icon {
            margin: auto 0
        }
        .main-timeline .date-content {
            width: 95%;
            float: right;
            margin-top: 0
        }
        .main-timeline .date-content:before {
            display: none
        }
        .main-timeline .date-outer {
            width: 110px;
            height: 110px
        }
        .main-timeline .date-outer:before,
        .main-timeline .date-outer:after {
            width: 110px;
            height: 110px
        }
        .main-timeline .date {
            top: 30%
        }
        .main-timeline .year {
            font-size: 24px
        }
        .main-timeline .timeline-content,
        .main-timeline .timeline:nth-child(2n) .timeline-content {
            width: 95%;
            text-align: center;
            padding: 10px 0
        }
        .main-timeline .title {
            margin-bottom: 10px
        }
}

    body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Overpass', sans-serif; letter-spacing: 0px; font-size: 17px; color: #8d8f90; font-weight: 400; line-height: 32px; background-color: #edefef; }
    h1, h2, h3, h4, h5, h6 { color: #25292a; margin: 0px 0px 10px 0px; font-family: 'Overpass', sans-serif; font-weight: 700; letter-spacing: -1px; line-height: 1; }
    h1 { font-size: 34px; }
    h2 { font-size: 28px; line-height: 38px; }
    h3 { font-size: 22px; line-height: 32px; }
    h4 { font-size: 20px; }
    h5 { font-size: 17px; }
    h6 { font-size: 12px; }
    p { margin: 0 0 20px; line-height: 1.7; }
    p:last-child { margin: 0px; }
    a { text-decoration: none; color: #8d8f90; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
    a:focus, a:hover { text-decoration: none; color: #f85759; }



    .page-header { background: url(https://images.pexels.com/photos/3778145/pexels-photo-3778145.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)no-repeat; position: relative; background-size: cover; }
    .page-caption { padding-top: 170px; padding-bottom: 174px; }
    .page-title { font-size: 46px; line-height: 1; color: #fff; font-weight: 600; text-align: center; }

    .card-section { position: relative; bottom: 60px; }
    .card-block { padding: 80px; }
    .section-title { margin-bottom: 60px; }
</style>

<!-- page-header -->
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Історія моди</h1>
                    </div>
                </div>
            </div>
        </div>
</div>
    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-title mb-0">
                            <h2>Визначення моди</h2>
                            <p>Мо́да — нетривале панування певного смаку в певній сфері життя чи культури. На відміну від поняття стилю (від лат. stylus — паличка для письма) — сукупність характерних рис літератури або мистецтва тієї чи іншої епохи або науки, мода характеризує короткочасні й поверхневі зміни зовнішніх форм побутових предметів та мистецьких творів. У вужчому сенсі модою називають зміну форм і зразків одягу, що відбувається протягом порівняно коротких проміжків часу.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <h1 class="display-4 fst-italic text-dark text-center">Визначення</h1>
    <div class="main-timeline">
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month">Модель</span>
                                    <span class="year">1</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">У індустрії &amp; моди</h5>
                                <p class="description">
                                діяльність, що передбачає демонстрування моделі одягу на показах заради представлення переваг її, рекламування й участь у процесах виготовлення речей.
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->

                        <!-- start experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month">Модель</span>
                                    <span class="year">2</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">У рекламі</h5>
                                <p class="description">
                                діяльність, що передбачає позування для ілюстрованих журналів, інших видань, рекламних фільмів, відеокліпів.
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->

                        <!-- start experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month">Модель</span>
                                    <span class="year">3</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">У мистецтві</h5>
                                <p class="description">
                                діяльність, що передбачає позування перед художником або зображення предметів (образів)
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->

                        <!-- start experience section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month">Модель</span>
                                    <span class="year">4</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">У моді</h5>
                                <p class="description">
                                Моделі, які професійно працюють в індустрії моди, також називаються манекенницями (манекенниками).
                                </p>
                            </div>
                        </div>
                        <!-- end experience section-->

                    </div>
</div>