<?php
/**
 * @package   yii2-adminlte3-assets
 * @author    Roberto Braga <bobonov@gmail.com>
 * @copyright Copyright &copy; Roberto Braga, 2020
 * @version   1.0
 * @license   GPL v3
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
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
