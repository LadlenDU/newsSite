<?php

namespace app\components;

class User extends \nkostadinov\user\components\User
{
    public $loginForm = 'app\models\user\forms\LoginForm';
    public $registerForm = 'app\models\user\forms\SignupForm';
}