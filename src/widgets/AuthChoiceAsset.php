<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\authclient\widgets;

use yii\web\AssetBundle;

/**
 * AuthChoiceAsset is an asset bundle for [[AuthChoice]] widget.
 *
 * @see AuthChoiceStyleAsset
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 2.0
 */
class AuthChoiceAsset extends AssetBundle
{
    public $sourcePath = '@yii/authclient/assets';
    public $js = [
        'authchoice.js',
    ];
    public $depends = [
        \yii\authclient\widgets\AuthChoiceStyleAsset::class,
        \yii\jquery\YiiAsset::class,
    ];
}
