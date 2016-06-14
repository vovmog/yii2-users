<?php

namespace vovmog\users\components;

use vovmog\users\models\forms\LoginForm;
use vovmog\users\Module;
use yii\base\Widget;

class AuthorizationWidget extends Widget
{
    public function run()
    {
        $model = new LoginForm;
        Module::registerTranslations();
        return $this->render('authorizationWidget', ['model' => $model]);
    }
}