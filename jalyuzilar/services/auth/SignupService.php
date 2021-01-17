<?php

namespace jalyuzilar\services\auth;

use jalyuzilar\access\Rbac;
use jalyuzilar\entities\User\User;
use jalyuzilar\forms\auth\SignupForm;
use jalyuzilar\repositories\UserRepository;
use jalyuzilar\services\RoleManager;
use jalyuzilar\services\TransactionManager;
use yii\mail\MailerInterface;

/**
 * Signup form
 */
class SignupService
{
    private $mailer;
    private $users;
    private $roles;
    private $transaction;

    public function __construct(
        UserRepository $users,
        MailerInterface $mailer,
        RoleManager $roles,
        TransactionManager $transaction
    )
    {
        $this->mailer = $mailer;
        $this->users = $users;
        $this->roles = $roles;
        $this->transaction = $transaction;
    }

    public function signup(SignupForm $form)
    {
        $user = User::requestSignup(
            $form->first_name,
            $form->last_name,
            $form->phone,
            $form->address,
            $form->username,
            $form->email,
            $form->password,
            $form->inn_number,
            $form->organization_name
        );
        $this->transaction->wrap(function () use ($user) {
            $this->users->save($user);
            $this->roles->assign($user->id, Rbac::ROLE_USER);
        });

        $sent = $this->mailer
            ->compose(
                ['html' => 'auth/signup/confirm-html', 'text' => 'auth/signup/confirm-text'],
                ['user' => $user]
            )
            ->setTo($form->email)
            ->setSubject('Signup confirm for ' . \Yii::$app->name)
            ->send();
        if (!$sent) {
            throw new \RuntimeException('Email sending error.');
        }
    }

    public function confirm($token)
    {
        if (empty($token)) {
            throw new \DomainException('Empty confirm token.');
        }
        $user = $this->users->getByEmailConfirmToken($token);
        $user->confirmSignup();
        $this->users->save($user);
    }
}
