<?php

/* @var $this \yii\web\View */
/* @var $content string */

use raoul2000\widget\scrollup\Scrollup;
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register( $this );
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="kogenerace, trigenerace, orc, poradenství, energetika, realizace, analýza">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode( $this->title ) ?></title>
	<link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
	<?php $this->head() ?>
</head>
<body class="empty">
<?php $this->beginBody() ?>

<!--[if lt IE 7]>
<p class="chromeframe"><?= Yii::t('app', 'You have really very <strong>old</strong> web browser. Please <a
	href="http://browsehappy.com/">upgrade</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate
	Google Chrome Frame</a> for better experience.'); ?></p>
<![endif]-->

<div id="preloader-box" class="page-row">
	<div class="preloader-wrapper big active">
		<div class="spinner-layer spinner-red-only">
			<div class="circle-clipper left">
				<div class="circle"></div>
			</div>
			<div class="gap-patch">
				<div class="circle"></div>
			</div>
			<div class="circle-clipper right">
				<div class="circle"></div>
			</div>
		</div>
	</div>

	<div class="preloader-section section-left"></div>
	<div class="preloader-section section-right"></div>
</div>

<header class="page-row">
	<div class="quick-contacts">
		<div class="container">
			<i class="material-icons">phone</i> +420&nbsp;724&nbsp;215&nbsp;772
			<i class="material-icons" style="margin-left: 1rem;">email</i> <?= Html::mailto( 'info@chpe.cz' ); ?>
		</div>
	</div>
	<nav>
		<div class="container">
			<div class="nav-wrapper">
				<?php
				echo Html::a(
					Html::img(Yii::$app->request->baseUrl . '/img/design/logo.png', [
						'alt' => 'CHP Engineering s.r.o. - logo'
					]), Yii::$app->homeUrl, [
						'class' => 'brand-logo'
					]
				);
				echo Html::a('<i class="material-icons">menu</i>', '#', [
						'class' => 'button-collapse',
						'data-activates' => 'mobile-navigation'
					]);

				for ( $i = 1; $i <= 2; $i ++ ) {
					${'items' . $i} = [
						[ 'label' => 'úvod', 'url' => [ '/site/index' ] ],
						[
							'label'           => 'technologie <i class="material-icons right">arrow_drop_down</i>',
							'url'             => '#!',
							'submenuTemplate' => "\n<ul id='technologies-menu-items" . $i . "' class='dropdown-content'>\n{items}\n</ul>\n",
							'items'           => [
								[ 'label' => 'kogenerace', 'url' => [ '/site/page', 'view' => 'kogenerace' ] ],
								[ 'label' => 'trigenerace', 'url' => [ '/site/page', 'view' => 'trigenerace' ] ],
								[ 'label' => 'ORC', 'url' => [ '/site/page', 'view' => 'orc' ] ]
							],
							'options'         => [
								'class'          => 'dropdown-button',
								'data-activates' => 'technologies-menu-items' . $i
							]
						],
						[
							'label'           => 'služby <i class="material-icons right">arrow_drop_down</i>',
							'url'             => '#!',
							'submenuTemplate' => "\n<ul id='services-menu-items" . $i . "' class='dropdown-content'>\n{items}\n</ul>\n",
							'items'           => [
								[ 'label' => 'poradenství', 'url' => [ '/site/page', 'view' => 'poradenstvi' ] ],
								[ 'label' => 'analýza', 'url' => [ '/site/page', 'view' => 'analyza' ] ],
								[ 'label' => 'realizace', 'url' => [ '/site/page', 'view' => 'realizace' ] ]
							],
							'options'         => [
								'class'          => 'dropdown-button',
								'data-activates' => 'services-menu-items' . $i
							]
						],
						[ 'label' => 'o nás', 'url' => [ '/site/simple-index' ] ]
					];
				}
				/** @noinspection PhpUndefinedVariableInspection */
				echo Menu::widget( [
					'encodeLabels' => false,
					'options'      => [
						'class' => 'right hide-on-med-and-down'
					],
					'items'        => $items1
				] );
				?>
			</div>
		</div>
		<?= /** @noinspection PhpUndefinedVariableInspection */
		Menu::widget( [
			'encodeLabels' => false,
			'options'      => [
				'id'    => 'mobile-navigation',
				'class' => 'side-nav'
			],
			'items'        => $items2
		] ); ?>
	</nav>
</header>

<main class="page-row page-row-expanded">
	<?= $content ?>
</main>

<footer id="bottom" class="page-row">
	<div class="container copyright">
		<div class="row" style="margin-bottom: 0">
			<div class="col s12 m4">
				<p>&copy; CHP Engineering s.r.o. <?= date( 'Y' ) ?></p>
			</div>
			<div class="col s12 m4 hide-on-small-and-down">
				<p class="center-align"><?= Yii::powered() ?></p>
			</div>
			<div class="col s12 m4 hide-on-small-and-down">
				<p class="right-align">Webdesign by <a href="http://www.camus.cz">C@mus</a></p>
			</div>
		</div>
	</div>
</footer>

<?= Scrollup::widget( [
	'theme'         => Scrollup::THEME_IMAGE,
	'pluginOptions' => [
		'scrollText'        => Yii::t( 'app', 'to top' ),
		'scrollName'        => 'scrollUp',
		'topDistance'       => 400,
		'topSpeed'          => 3000,
		'animation'         => Scrollup::ANIMATION_FADE,
		'animationInSpeed'  => 400,
		'animationOutSpeed' => 400,
		'activeOverlay'     => false
	]
] ); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
