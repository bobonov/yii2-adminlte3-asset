AdminLTE 3 asset for Yii2 Framework
===============================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bobonov/yii2-adminlte-assets "~1.0.0"
```

or add

```
"bobono/yii2-adminlte-asset": "~1.0.0"
```

to the require section of your `composer.json` file.

Usage
----------

Just register AssetBundle in top of your layout

```php
$this->registerAssetBundle(AdminLte3Asset::class);
```
 
In the package folder there is the layouts_template directory. Copy it to you view and personalize as needed.

There are 2 assets loaded in the template:

<li><b>AdminLte3Assets</b>: these are the basic required assets to load the template

<li><b>FontAwesomeAsset</b>: the template use FontAwesome which is included directly in AdminLte3 source.
Since FontAwesomefor Yii2 is already avail by other packages, I suggest to use one of them since they provide a more
updated version. In the template this asset is enable in order to load the theme correctly. Once you start using another
package you can disable this asset.

See [Layout Example](src/layouts_template/main.php)
