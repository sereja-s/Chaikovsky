<?php

/* @var $this \yii\web\View */
/* @var $content string */

use andrewdanilov\custompages\common\models\Category;
use yii\helpers\Url;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
	<meta charset="<?= Yii::$app->charset ?>">

	<title><?= $this->title ?></title>
	<?= $this->head() ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<?php $this->beginBody() ?>

	<section class="section-header">
		<div class="container">
			<div class="header">
				<div class="sitetitle"><span>ЧАЙКОВСКИЙ</span></div>
				<div class="subtitle">чайная классика</div>
			</div>
		</div>
	</section>

	<section class="section-menu">
		<div class="container">


			<?php
			$categories = Category::getCategoriesList();
			$menu_item = [];
			foreach ($categories as $category_id => $category) {
				$menu_item[] =
					[
						'label' => $category,
						'url' => ['/custompages/default/category', 'id' => $category_id],
					];
			}
			?>


			<?= andrewdanilov\menu\Menu::widget([
				'templateWrapper' => '@frontend/views/site/menu/wrapper',
				'templateParentItem' => '@frontend/views/site/menu/parent-item',
				'templateItem' => '@frontend/views/site/menu/item',
				'templateActiveItem' => '@frontend/views/site/menu/active-item',
				'items' => $menu_item,
			]) ?>

		</div>
	</section>

	<?= $content ?>

	<section class="section-footer">
		<div class="container">
			<div class="footer">
				<div class="left-block">
					<a href="" class="sitetitle">Наш сайт</a>
					<div class="copyright">(c) 2021
						<a href="https://serejasuvorov1979@gmail.com">Для связи</a>
					</div>
				</div>
				<div class="footer-menu">
					<a href="">Главная</a>
					<a href="">Контакты</a>
				</div>
			</div>
		</div>
	</section>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>