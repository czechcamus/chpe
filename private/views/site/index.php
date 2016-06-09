<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'CHP Engineering';
?>

<div class="slider">
	<ul class="slides">
		<li>
			<?= Html::img(Yii::$app->request->baseUrl . '/img/slider/motor-detail.jpg', [
				'alt' => 'detail motoru'
			]); ?>
			<div class="caption left-align">
				<h3>Kogenerační jednotky</h3>
				<h5>Výroba tepla a elektrické energie.</h5>
				<?= Html::a('<i class="material-icons right">keyboard_arrow_right</i>více informací', '#!', [
					'class' => 'waves-effect waves-light btn'
				]); ?>
			</div>
		</li>
		<li>
			<?= Html::img(Yii::$app->request->baseUrl . '/img/slider/priruby-chlazeni.jpg', [
				'alt' => 'příruby chlazení'
			]); ?>
			<div class="caption right-align">
				<h3>Poradenství</h3>
				<h5>Poskytujeme poradenství v oblasti kogenerace, trigenerace a OCR</h5>
				<?= Html::a('<i class="material-icons right">keyboard_arrow_right</i>více informací', '#!', [
					'class' => 'waves-effect waves-light btn'
				]); ?>
			</div>
		</li>
		<li>
			<?= Html::img(Yii::$app->request->baseUrl . '/img/slider/elektromotor.jpg', [
				'alt' => 'elektromotor'
			]); ?>
			<div class="caption left-align">
				<h3>Trigenerační jednotky</h3>
				<h5>Výroba tepla, chladu a elektrické energie.</h5>
				<?= Html::a('<i class="material-icons right">keyboard_arrow_right</i>více informací', '#!', [
					'class' => 'waves-effect waves-light btn'
				]); ?>
			</div>
		</li>
		<li>
			<?= Html::img(Yii::$app->request->baseUrl . '/img/slider/rozvadec.jpg', [
				'alt' => 'displej monitoru'
			]); ?>
			<div class="caption right-align">
				<h3>Analýza</h3>
				<h5>Provádíme analýzu a navrhujeme optimální řešení.</h5>
				<?= Html::a('<i class="material-icons right">keyboard_arrow_right</i>více informací', '#!', [
					'class' => 'waves-effect waves-light btn'
				]); ?>
			</div>
		</li>
	</ul>
</div>