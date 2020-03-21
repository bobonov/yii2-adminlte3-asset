<?php
/**
 * @package   yii2-adminlte3-assets
 * @author    Roberto Braga <bobonov@gmail.com>
 * @copyright Copyright &copy; Roberto Braga, 2020
 * @version   1.0
 * @license   BSD-3-Clause
 */

namespace bobonov\adminlte3;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package bobonov\adminlte3
 * This class provide FontAwesomeAsset from the AdminLTE3 source
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/fontawesome-free';
    
    public $css
        = [
            'css/all.min.css',
        ];
}
