<br><br>
<div class="container">
    <h1 class="text-center">Заповнення</h1><br>
<form method="post" action="" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Заголовок:</label>
        <input type="text" name="title" value="<?=$model['title']?>" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Короткий опис:</label>
        <textarea type="text" name="description" " class="form-control" id="description"><?=$model['description']?></textarea>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Повний текст:</label>
        <textarea type="text" name="text" class="form-control" id="text"><?=$model['text']?></textarea>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Фотографія:</label>
        <input type="file" name="file" id="file" class="form-control" accept="image/jpeg, image/png">
    </div>
    <div class="mb-3">
        <? if (is_file('files/news/'.$model['photo'].'_s.jpg')) : ?>
        <label for="text" class="form-label">Поточна фотографія:</label>
        <img src="/files/news/<?=$model['photo'] ?>_s.jpg" />
        <? endif; ?>
    </div>
    <button type="submit" class="btn btn-dark text-white">Зберегти</button>
</form>
</div>