<?php	
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Inventaris */

$this->title = 'Create Inventaris';
$this->params['breadcrumbs'][] = ['label' => 'Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
