<?php

namespace app\components;

class User extends \nkostadinov\user\components\User
{
    public $loginForm = 'app\models\user\forms\LoginForm';
    public $signupForm = 'app\models\user\forms\SignupForm';
}