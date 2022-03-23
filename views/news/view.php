<style>
    p{
        line-height: 1.2;
    }
</style>
<div class="container">
    <div class="news">
        <div class="text-center">
            <? if (is_file('files/news/'.$model['photo'].'_m.jpg')) : ?>
                <? if (is_file('files/news/'.$model['photo'].'_b.jpg')) : ?>
                    <a href="/files/news/<?=$model['photo'] ?>_b.jpg" data-fancybox="gallery">
                <? endif; ?>
                    <img src="/files/news/<?=$model['photo'] ?>_m.jpg" />
                <? if (is_file('files/news/'.$model['photo'].'_b.jpg')) : ?>
                    </a>
                <? endif; ?>
            <? endif; ?>
        </div>
        <br>
        <div>
            <?=$model['text']?>
        </div>
    </div>
</div>