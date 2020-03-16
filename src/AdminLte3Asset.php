<?php
/**
 * @package   yii2-adminlte3-assets
 * @author    Roberto Braga <bobonov@gmail.com>
 * @copyright Copyright &copy; Roberto Braga, 2020
 * @version   1.0
 */

namespace bobonov\adminlte3;

use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AdminLte3Asset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $js = [
            'js/adminlte.js'
        ];
    public $css = [
            'css/adminlte.css',
        ];
    public $depends
        = [
            YiiAsset::class,
            BootstrapAsset::class,
            BootstrapPluginAsset::class,
        ];
}