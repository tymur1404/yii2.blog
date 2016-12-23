<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 23.12.16
 * Time: 14:55
 */
use yii\widgets\LinkPager;
foreach ($posts as $post){
?>
    <div class="list-group">
        <a href="<?= yii\helpers\Url::to(['post/view', 'id' => $post->id])?>" class="list-group-item active">
            <h4 class="list-group-item-heading"><?= $post->title?></h4>
            <p class="list-group-item-text"><?= $post->excerpt?></p>
        </a>
    </div>
<?}
echo LinkPager::widget(['pagination' => $pagination]);
