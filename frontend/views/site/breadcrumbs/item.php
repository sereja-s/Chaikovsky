<?php

/* @var $this \yii\web\View */
/* @var $label string */
/* @var $url string|array */
/* @var $microdata bool */
/* @var $position int */

use yii\helpers\Url;

?>

<li class="item"><a href="<?= Url::to($url) ?>"><?= $label ?></a></li>