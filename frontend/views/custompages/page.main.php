<?php

use andrewdanilov\custompages\frontend\assets\CustomPagesAsset;

/* @var $this \yii\web\View */
/* @var $page \andrewdanilov\custompages\common\models\Page */

$this->title = $page->meta_title ?: $page->title;
$this->registerMetaTag([
	'name' => 'description',
	'content' => $page->meta_description,
]);

CustomPagesAsset::register($this);

?>

<section class="section-main">
	<div class="container">
		<ul class="breadcrumbs">
			<li class="item"><a href="">Главная</a></li>
			<li class="item"><a href="">Категория</a></li>
			<li class="item"><span>Статья</span></li>
		</ul>

		<div class="content">
			<h1><?= $page->title ?></h1>
			<div class="page-text">
				<?= $page->processedText ?>
			</div>
		</div>
	</div>
</section>