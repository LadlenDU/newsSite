<?php

namespace app\models\user\forms;

use \nkostadinov\user\Module;

class LoginForm extends \nkostadinov\user\models\forms\LoginForm
{
    public function attributeLabels()
    {
        return [
            'username' => \Yii::t(Module::I18N_CATEGORY, 'Username'),
            'password' => \Yii::t(Module::I18N_CATEGORY, 'Password'),
            'rememberMe' => \Yii::t(Module::I18N_CATEGORY, 'Remember Me'),
        ];
    }
}