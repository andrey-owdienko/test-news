<?php
use yii\helpers\Url;
use \yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $news app\models\News[] */

$this->title = 'News Test';
?>
<div class="site-index">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <?php foreach ($news as $key => $new): ?>
            <?php if ($key == 0): ?>
                <div class="col border border-dark">
                    <p><?= $new->id ?></p>
                    <p class="description"><?= $new->description ?></p>
                    <p><?= $new->date ?></p>
                    <a href="<?= Url::toRoute('new/' . $new->id) ?>">Go</a>
                    <?= Html::a('Random', Url::to(['news/text', 'id' => $new->id]), ['id' => 'random_a']); ?>
                </div>
            <?php endif; ?>
            <?php if ($key >= 1):?>
                <div class="col border border-dark">
                    <p><?= $new->id ?></p>
                    <p><?= $new->description ?></p>
                    <p><?= $new->date ?></p>
                    <a href="<?= Url::toRoute('new/' . $new->id) ?>">Go</a>
                </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php
$js = <<<JS
$('#random_a').on('click', function(e) {
  e.preventDefault();
  var jThis = $(this);
  var url = jThis.attr('href');
  
  $.get(url, function( data ) {
    $( '.description' ).html( data );
  });
})

JS;
$this->registerJs($js);

return;
?>