<?php 

namespace frontend\components;
use Yii\helpers\Url;
/**
 * LoginWidget is a widget that provides user login functionality.
 */
class Login extends \yii\base\Widget
{
    /**
     * @var string the widget title. Defaults to 'Login'.
     */
    public $title='Login';
    /**
     * @var boolean whether the widget is visible. Defaults to true.
     */
    public $visible = true;
    public function run()
    {
        if($this->visible) {
            $user = new LoginForm;
            if ($user->load(\Yii::$app->request->post()) && $user->login()) {
                \Yii::$app->getResponse()->redirect(\Yii::$app->request->referrer);
                return;
            } else {
                return $this->render('loginWidget', [
                    'user' => $user,
                    'title' => $this->title,
                ]);
            }
        }
    }
}
