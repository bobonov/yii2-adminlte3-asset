<?php
/**
 * @var \yii\web\View $this
 */

use bobonov\adminlte3\AdminLte3Asset;
use yii\helpers\Html;
use \yii\widgets\Breadcrumbs;

$al3Asset=$this->registerAssetBundle(AdminLte3Asset::class);

// the following FontAwesome4 asset is optional in case you use another package, see the README
$this->registerAssetBundle(bobonov\adminlte3\FontAwesomeAsset::class);

// The following line AL3images paramas can be removed once you replace with you own images (logo, avatar...).
// These images are provided as placeholder and to have the theme looks nice when you load it for the first time
// do a search for "AL3images" in the template files to see where are they
Yii::$app->params['AL3images'] = $al3Asset->baseUrl;


$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
    <?= $this->render('main/top_nav') ?>
    <?= $this->render('main/left_side') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?= Html::encode($this->title) ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <?= Breadcrumbs::widget([
                            'tag' => 'ol',
                            'options' => ['class' => 'breadcrumb float-sm-right'],
                            'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
                            'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>',
                            'links' => [
                                ['label' => 'First', 'url' => '#'],
                                ['label' => 'Second', 'url' => '#'],
                            ],
                        ]) ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <?= $content ?>
            </div>
        </section>
    </div>
    <?= $this->render('main/footer') ?>
    <?= $this->render('main/left_side_controlbar') ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
