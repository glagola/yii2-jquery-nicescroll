<?php
namespace glagola\nicescroll;

use \yii\web\AssetBundle;

class JQueryNiceScrollAsset extends AssetBundle {
    public $sourcePath = '@bower/jquery.nicescroll/dist';

    public $js = [
        'jquery.nicescroll.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
