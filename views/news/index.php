<?php
    $userModel = new \models\Users();
    $user  = $userModel->GetCurrentUser();
?>

<style>
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
    body {
        background: #f4f4f4;
    }

    .banner {
    background: #a770ef;
    background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
    background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
    }
</style>
<!-- 
<div class="container">
    <br>
    <h1 class="display-4 fst-italic text-dark text-center">Моделі:</h1>
    <div class="p-5">
        <?php foreach($lastNews as $news) : ?>
        <hr class="default_hr">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <div class="photo">
                    <? if (is_file('files/news/'.$news['photo'].'_m.jpg')) : ?>
                    <img src="/files/news/<?=$news['photo'] ?>_m.jpg" class="d-block mx-lg-auto img-fluid" loading="lazy"/>
                    <? else: ?>
                    <svg class="bd-placeholder-img figure-img img-fluid rounded float-start  width="200" height="300" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="white"></rect></svg>
                    <? endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3"><?=$news['title'] ?></h1>
                <p class="lead"><?=$news['description'] ?></p>
                <a href="/news/view?id=<?=$news['id'] ?>" class="btn btn-outline-dark me-2">Читати далі</a>
                <? if($news['user_id'] == $user['id'] || $user['access'] == 1):?>
                    <a href="/news/edit?id=<?=$news['id'] ?>"><img src="/files/icons/edit.png" title="Редагувати" style="height: 40px; width: 40px;"></a>
                    <a href="/news/delete?id=<?=$news['id'] ?>"><img src="/files/icons/remove.png" title="Видалити" style="height: 40px; width: 40px;"></a>
                <? endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div> -->

<div class="container-fluid">
<br>
    <h1 class="display-4 fst-italic text-dark text-center">Моделі:</h1>
    <div class="px-lg-5">
        <div class="row">
            <?php foreach($lastNews as $news) : ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm">
                        <? if (is_file('files/news/'.$news['photo'].'_m.jpg')) : ?>
                            <img src="/files/news/<?=$news['photo'] ?>_m.jpg"  class="img-fluid card-img-top" loading="lazy"/>
                        <? else: ?>
                            <svg class="bd-placeholder-img figure-img img-fluid rounded float-start"  width="367.75" height="367.75" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="white"></rect></svg>
                        <? endif; ?>
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark"><?=$news['title'] ?></a></h5>
                            <p class="small text-muted mb-0"><?=$news['description'] ?></p>
                            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <a href="/news/view?id=<?=$news['id'] ?>" class="btn btn-outline-dark me-2">Читати далі</a>
                                <? if($news['user_id'] == $user['id'] || $user['access'] == 1):?>
                                    <a href="/news/edit?id=<?=$news['id'] ?>"><img src="/files/icons/edit.png" title="Редагувати" style="height: 20px; width: 20px;"></a>
                                    <a href="/news/delete?id=<?=$news['id'] ?>"><img src="/files/icons/remove.png" title="Видалити" style="height: 20px; width: 20px;"></a>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
