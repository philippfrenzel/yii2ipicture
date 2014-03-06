<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace philippfrenzel\yii2ipicture;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <philipp@gfrenzel.net>
 * @since 2.0
 */
class yii2ipictureAsset extends AssetBundle
{
    public $sourcePath = '@philippfrenzel/yii2ipicture/assets';
    public $css = [
      'css/iPicture.css'      
    ];
    public $js = [
      'js/jquery.ipicture.js',
      'js/zepto.ipicture.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
