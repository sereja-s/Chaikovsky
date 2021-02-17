<?php

use andrewdanilov\adminpanel\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $siteName string */
/* @var $directoryAsset false|string */

?>

<div class="page-left">
	<div class="sidebar-heading"><?= $siteName ?></div>
	<?= Menu::widget(['items' => [
		['label' => 'Dashboard', 'url' => ['/site/index'], 'icon' => 'tachometer-alt'],
		[],
		['label' => 'Блог'],
		['label' => 'Статьи', 'url' => ['/custompages/page'], 'icon' => ['symbol' => 'newspaper', 'type' => 'solid']],
		['label' => 'Категории', 'url' => ['/custompages/category'], 'icon' => ['symbol' => 'tags', 'type' => 'solid']],
		['label' => 'Теги', 'url' => ['/custompages/page-tag'], 'icon' => ['symbol' => 'tag', 'type' => 'solid']],
		[],
		['label' => 'Система'],
		['label' => 'Пользователи', 'url' => ['/user/index'], 'icon' => 'users'],
	]]) ?>
</div>