<?php

use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use app\models\Users;

/**  @var $this yii\web\View */
/**  @var $users app\models\Users[] */

$this->title = 'Список пользователей';
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <table class="table table-striped">
    <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>ФИО</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= Html::encode($user->first_name) ?></td>
                <td><?= Html::encode($user->last_name) ?></td>
                <td><?= Html::encode($user->first_name . ' ' . $user->last_name) ?></td>
                <td><?= Html::a('Редактировать', ['user/update', 'id' => $user->id], ['class' => 'btn btn-primary']) ?></td>
                <td><?= Html::a('Удалить', ['user/delete', 'id' => $user->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Вы уверены, что хотите удалить этого пользователя?',
            'method' => 'post',
        ],
    ]) ?></td>
                <td><?= Html::a('Просмотр', ['user/view', 'id' => $user->id], ['class' => 'btn btn-primary']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php