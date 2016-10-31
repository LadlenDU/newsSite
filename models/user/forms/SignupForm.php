<?php

namespace app\models\user\forms;

use \nkostadinov\user\Module;

class SignupForm extends \nkostadinov\user\models\forms\SignupForm
{
    public function attributeLabels()
    {
        return [
            'username' => \Yii::t(Module::I18N_CATEGORY, 'Username'),
            'email' => \Yii::t(Module::I18N_CATEGORY, 'Email'),
            'password' => \Yii::t(Module::I18N_CATEGORY, 'Password'),
        ];
    }
}
