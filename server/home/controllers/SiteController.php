<?php
namespace xoa\home\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? '121212' : null,
            ],
			'r' => [
				'class' => 'xoa\common\ext\actions\R',
				'urlRulesFile' => Yii::getAlias('@project/web/home-url-rules.json')
			],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		return $this->renderFile('@webPath/home.html');
    }
}