<?php
/* @var $this yii\web\View */
/* @var $user User */
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['reset/confirm', 'token' => $user->password_reset_token]);

use medin\entities\User\User; ?>
    Hello <?= $user->username ?>,

    Follow the link below to reset your password:

<?= $resetLink ?>
