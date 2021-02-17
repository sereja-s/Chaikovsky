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

		<?= andrewdanilov\breadcrumbs\Breadcrumbs::widget([
			'templateWrapper' => '@frontend/views/site/breadcrumbs/wrapper', // optional
			'templateItem' => '@frontend/views/site/breadcrumbs/item', // optional
			'templateActiveItem' => '@frontend/views/site/breadcrumbs/active-item', // optional

			'homeLabel' => 'Главная', // optional, default 'Main'
			'homeUrl' => ['/'], // optional, default ['/']

			'items' => [

				['label' => $page->category->title, 'url' => ['/custompages/default/category', 'id' => $page->category->id]],
				['label' => $page->title], // or short ['Product #1']

			],
		]) ?>

		<div class="sidebar">

			<?php foreach ($page->category->getPages()->andWhere(['not' . ['id' => $page->id]])->all() as $page_child) { ?>

				<a href="<?= \yii\helpers\Url::to(['default/page', 'id' => $page_child->id]) ?>" class="category-list-item">
					<div class="cover"><img src="<?= $page_child->image ?>" alt=""></div>
					<div class="title"><?= $page_child->title ?></div>
				</a>

			<?php } ?>

		</div>
		<div class="content">
			<h1><?= $page->title ?></h1>
			<div class="page-text">
				<?= $page->processedText ?>
			</div>
		</div>
	</div>
</section>