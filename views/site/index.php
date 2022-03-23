<style>
    .bg-cover {
        background-size: cover !important;
    }

    body {
        min-height: 100vh;
    }

    .mainh1 {
        font-family: Nympha Trial;
        color: white;
        font-size: 120px;
        font-style: normal;
        letter-spacing: 0em;
    }

    p{
        line-height: 1.2;
    }

    .default_hr {
        position: relative;
        background-color: #212529;
        bottom: 0px;
        left: 0px;
        height: 4px;
        border: 1px;
        width: 100%;
    }
</style>

<div style="background: url(/files/background.jpg); height: 460px; " class="jumbotron bg-cover text-white">
    <? if(!empty($MessageText)) :?>
        <div class="alert alert-dark text-center" role="alert">
            <?=$MessageText?>
        </div>
    <? endif; ?>
    <div class="container py-5 text-center">
        <h1 class="display-4 fst-italic text-white maintitle mainh1">LUCIA</h1>
        <p class="font-italic mb-0 text-white">Сайт-портфоліо для моделів...<br>Створив Бойко Дмитро ІПЗ-20-1</p>
        </br> <a href="/news" type="button" class="btn btn-outline-light me-2">Переглянути список моделів...</a>
    </div>
</div>

<div class="container py-5 align-items-center text-center">
    <h1 class="display-4 fw-bold">Для кого цей сайт?</h1>
</div>

<div class="p-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/files/formodel.jpg" class="d-block mx-lg-auto img-fluid" width="720" height="480" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Моделям</h1>
            <p class="lead">На цьому сайті моделі можуть ділитися своїми роботами та фотографіями. Знаходити роботодавців, продвигати свій образ, поповнювати свою популярність. Можуть використовувати цей сайт, як власне портфоліо.</p>
        </div>
    </div>
    <hr class="default_hr">
    
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Роботодавцям</h1>
            <p class="lead">Роботодавці та люди, які потребуть послуг моделів/фотографів можуть знайти реалізаторів власних проектів на цьому сайті. Можуть переглядати фото та викладувати власні.</p>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/files/forworker.jpg" class="d-block mx-lg-auto img-fluid" width="720" height="480" loading="lazy">
        </div>
    </div>
    <hr class="default_hr">

    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/files/forphotographer.jpg" class="d-block mx-lg-auto img-fluid" width="720" height="480" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Фотографам</h1>
            <p class="lead">Фотографи можуть ділитись своїми роботами й фотосетами на цьому сайті. Рекламувати свої послуги та використовувати сайт у якості власного портфоліо. Шукати моделів для свого ідеального кадру.</p>
        </div>
    </div>
</div>

<style>
    .bg-grey {
        color: #000000;
        text-transform: uppercase;
        background-color: #212529;
    }

    .box {
        margin: auto;
    }

    .heading {
        font-weight: bold;
        font-size: 66px;
    }

    .sub-heading {
        border-top: 1px solid #E0E0E0;
        border-bottom: 1px solid #E0E0E0;
        padding: 8px 0 8px 0;
        margin-top: 20px;
        margin-bottom: 35px;
    }

    .card {
        padding: 8%;
        padding-bottom: 30px;
        padding-top: 35px;
        margin-top: 60px;
        margin-bottom: 80px;
        background-color: #ffffff;
        border-radius: 0;
    }

    textarea[name="message"] {
        resize: none;
    }

    #e-mail {
        height: 45px;
    }

    #message {
        height: 120px;
    }

    input.input-box,
    textarea.input-box {
        background-color: #E0E0E0;
        border: #616161;
        color: #000000;
        font-size: 15px;
        padding: 15px auto 15px auto !important;
        height: 50px !important;
    }

    input.input-box:focus,
    textarea.input-box:focus {
        background-color: #212121;
        color: #ffffff;
    }

    .rm-border:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    form .form-control::-webkit-input-placeholder {
        color: #9E9E9E;
    }

    ::-moz-placeholder {
        color: #9E9E9E !important;
    }

    input.btn-black {
        background-color: #000000;
        color: #ffffff;
        font-weight: bold;
        height: 50px;
    }

    .thanks {
        color: #000000 !important;
        text-align: center;
        text-decoration: none;
    }

    .thanks:hover {
        color: #000000 !important;
        text-decoration: none;
    }

    .conditions {
        font-size: 12px;
        color: #BDBDBD;
        text-align: center;
    }

</style>
<div class="bg-grey">
    <div class="container">
        <div class="row justify justify-content-center">
            <div class="col-12 col-lg-9 col-xl-8">
                <form class="">
                    <div class="card">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-11">
                                <div class="row mt-0">
                                    <div class="col-md-12 ">
                                        <h4 class="text-center heading">Підписатись</h4>
                                        <p class="text-center sub-heading">дізнавайся всі новини першим</p>
                                    </div>
                                </div>
                                <div class="form-group row mb-3 text-center">
                                    <div class="col-md-12 mb-0"> <input id="e-mail" type="text" placeholder="ВВЕДИ СВОЮ ПОШТУ" name="email" class="form-control input-box rm-border text-center"> </div>
                                </div>
                                <div class="form-group row justify-content-center mb-0 text-center">
                                    <div class="col-md-12 px-3"> <input type="submit" value="ПІДПИСАТИСЬ" class="btn btn-block btn-black rm-border text-white"> </div>
                                </div>
                                <div class="form-group row justify-content-center mb-0">
                                    <div class="col-md-12 px-3 mt-4"> <a href="#">
                                            <p class="thanks">ні, дякую</p>
                                        </a> </div>
                                </div>
                                <div class="form-group row justify-content-center mb-0">
                                    <div class="col-md-12 px-3">
                                        <p class="conditions">Не зважай!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>