<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Services;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\SubServices */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sub Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>

                <div class="panel-options">
                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                    <a href="#" data-toggle="remove">
                        &times;
                    </a>
                </div>
            </div>
            <div class="panel-body">
<?= Html::a('<i class="fa-th-list"></i><span> Manage Sub Services</span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                <div class="panel-body"><div class="sub-services-view">
                        <p>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?=
                            Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ])
                            ?>
                        </p>

                        <?=
                        DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                [
                                    'attribute' => 'service_id',
                                    'value' => $model->service->service,
                                ],
                                'sub_service',
                                'unit',
                                'unit_price',
                                'total',
                                'comments:ntext',
                                [
                                    'label' => 'Status',
                                    'format' => 'raw',
                                    'value' => $model->status == 1 ? 'Enabled' : 'disabled',
                                ],
//                                'CB',
//                                'UB',
//                                'DOC',
//                                'DOU',
                            ],
                        ])
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


