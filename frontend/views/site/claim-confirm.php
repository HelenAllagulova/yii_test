<?php
use yii\helpers\Html; ?>
<p> Вы ввели следующую информацию :</p>
    <ul>
        <li>
            <label>Name</label>: <?= Html::encode($model->name) ?>
        </li>
        <li>
            <label>Surname</label>: <?= Html::encode($model->surname) ?>
        </li>
        <li>
            <label>Date of birth</label>: <?= Html::encode($model->birthdate) ?>
        </li>
        <li>
            <label>Phone</label>: <?= Html::encode($model->phone) ?>
        </li>
        <li>
            <label>E-mail</label>: <?= Html::encode($model->email) ?>
        </li>
        <li>
            <label>Status</label>: <?= Html::encode($model->status) ?>
        </li>
    </ul>