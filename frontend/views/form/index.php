<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;?>
    <h2><?= $form_name['name'] ?></h2>


<?php $form = ActiveForm::begin([
    'id' => $form_name['id'] ,
    'options' => ['class' => 'form-horizontal',
        'style' => 'width: 35%;'
    ],
]) ?>
<?php if($form_name['status'] == 1){
    foreach ($fields as $item){
        echo $form->field($fields, (string)$item['name']);
    }

};?>


    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>