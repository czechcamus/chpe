<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$template    = "{input}\n{label}\n{hint}\n{error}";
$this->title = 'CHP Engineering';
?>

<div class="slider">
	<ul class="slides">
		<li>
			<?= Html::img( Yii::$app->request->baseUrl . '/img/slider/motor-detail.jpg', [
				'alt' => 'detail motoru'
			] ); ?>
			<div class="caption right-align">
				<h3>Kogenerační jednotky</h3>
				<h5>Výroba tepla a elektrické energie.</h5>
			</div>
		</li>
		<li>
			<?= Html::img( Yii::$app->request->baseUrl . '/img/slider/priruby-chlazeni.jpg', [
				'alt' => 'příruby chlazení'
			] ); ?>
			<div class="caption center-align">
				<h3>Trigenerační jednotky</h3>
				<h5>Výroba tepla, chladu a elektrické energie.</h5>
			</div>
		</li>
		<li>
			<?= Html::img( Yii::$app->request->baseUrl . '/img/slider/tlakomer.jpg', [
				'alt' => 'tlakoměr'
			] ); ?>
			<div class="caption left-align">
				<h3>ORC</h3>
				<h5>Výroba elektrické energie z tepla prostřednictvím<br/>organického Rankinova cyklu.</h5>
			</div>
		</li>
	</ul>
</div>

<section class="services">
	<div class="container">
		<div class="row">
			<div class="col s12 m4">
				<i class="material-icons medium">help_outline</i>
				<h3>Poradenství</h3>
				<p>Poskytujeme poradenství v oblasti výroby tepla, chladu a elektrické energie.</p>
			</div>
			<div class="col s12 m4">
				<i class="material-icons medium">blur_circular</i>
				<h3>Návrh řešení</h3>
				<p>Provádíme studie a na jejich základě navrhujeme nejvhodnější řešení.</p>
			</div>
			<div class="col s12 m4">
				<i class="material-icons medium">play_circle_outline</i>
				<h3>Realizace</h3>
				<p>Poskytujeme technickou pomoc, dodáváme technologie nebo provádíme realizace na klíč.</p>
			</div>
		</div>
	</div>
</section>

<section class="about">
	<div class="container">
		<div class="row">
			<div class="col s12 center-align">
				<?= Html::img( Yii::$app->request->baseUrl . '/img/design/logo-inverse.png', [
					'class' => 'chpe-logo',
					'alt'   => 'CHP Engineering s.r.o. - logo',
					'style' => 'opacity: 0'
				] ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m4 who" style="opacity: 0">
				<h4>Kdo jsme</h4>
				<p>Jsme dynamická společnost, která posktuje služby v oblasti výroby tepla, chladu a elektrické
					energie.</p>
				<p>Při své činnosti se soustředíme na požadavky a potřeby našich zákazníků tak, abychom vždy dokázali
					poskytnout nejoptimálnější řešení v dané oblasti.</p>
				<p>Spolupracujeme s nejvýznamnějšími firmami a nabízíme jen ověřená a plně funkční řešení.</p>
			</div>
			<div class="col s12 m4 why" style="opacity: 0">
				<h4>Proč vybrat nás</h4>
				<ul class="collapsible" data-collapsible="accordion">
					<li>
						<div class="collapsible-header"><i class="material-icons">person</i>Individuální přístup</div>
						<div class="collapsible-body"><p>K požadavkům našich zákazníků přistupujeme individuálně a vždy
								nabízíme řešení optimalizované pro konkrétní případ.</p></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">school</i>Bohaté zkušenosti</div>
						<div class="collapsible-body"><p>Všichni naši pracovníci se v oboru výroby tepla, chladu a
								elektrické energie pohybují mnoho let a v problematice se dokonale orientují.</p></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">mood</i>Solidní jednání</div>
						<div class="collapsible-body"><p>Naší předností jsou komunikační schopnosti a férové jednání se
								zákazníky.</p></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">group</i>Spolupráce s významnými
							partnery
						</div>
						<div class="collapsible-body"><p>Spolupracujeme s nejvýznamnějšími partnery v oboru a nabízíme
								tak ověřená a funkční řešení.</p></div>
					</li>
				</ul>
			</div>
			<div class="col s12 m4 what" style="opacity: 0">
				<h4>Naše zkušenosti</h4>
				<p>poradenství</p>
				<div class="progress">
					<div class="determinate" style="width: 95%"></div>
				</div>
				<p>návrh řešení</p>
				<div class="progress">
					<div class="determinate" style="width: 77%"></div>
				</div>
				<p>realizace</p>
				<div class="progress">
					<div class="determinate" style="width: 45%"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contacts">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 form" style="opacity: 0">
				<h4>Rychlá zpráva</h4>
				<?php $form = ActiveForm::begin( [ 'id' => 'contact-form' ] ); ?>

				<?= $form->field( $model, 'name', [
					'template' => $template,
					'options'  => [
						'class' => 'input-field col s12'
					]
				] ) ?>
				<?= $form->field( $model, 'email', [
					'template' => $template,
					'options'  => [
						'class' => 'input-field col s12'
					]
				] ) ?>
				<?= $form->field( $model, 'body', [
					'template' => $template,
					'options'  => [
						'class' => 'input-field col s12'
					]
				] )->textarea( [
					'class' => 'materialize-textarea'
				] ) ?>
				<div class="row">
					<?= $form->field( $model, 'verifyCode', [
						'template' => "\n{input}\n{hint}\n{error}",
						'options'  => [
							'class' => 'input-field col s12'
						]
					] )->widget( Captcha::className(), [
						'template'     => '<div class="col s6 img-responsive">{image}</div><div class="col s6">{input}</div>',
						'imageOptions' => [ 'title' => 'Klikněte pro nový obrázek' ],
						'options'      => [ 'class' => false ]
					] )->hint( 'Vyplňte ověřovací kód z obrázku výše.' ) ?>
				</div>
				<div class="row">
					<div class="input-field col s12 l6">
						<?= Html::submitButton( '<i class="material-icons right">chevron_right</i>odeslat zprávu',
							[ 'class' => 'btn waves-effect waves-light' ] ) ?>
					</div>
				</div>
				<?php ActiveForm::end(); ?>
			</div>
			<div class="col s12 m6 address" style="opacity: 0">
				<div class="row">
					<div class="col s12 l8">
						<h4>Kontakty</h4>
						<address>
							<strong>CHP Engineering s.r.o.</strong><br/>
							Voctářova 2436/3c, 180 00 Praha 8, Libeň<br/>
							Česká republika<br/><br/>
							IČ: 04700511, DIČ: CZ04700511<br/>
							Společnost je zapsána u MS v Praze
							oddíl C, vložka 252311
						</address>
						<address>
							<i class="material-icons">person</i> <strong>Robert Vít</strong>, jednatel<br/>
							<i class="material-icons">phone_android</i>&nbsp;+420 111 222 333 <i class="material-icons">email</i>&nbsp;<a
								href="mailto:vit@chpe.cz">vit@chpe.cz</a>
						</address>
						<address>
							<i class="material-icons">person</i> <strong>Igor Bukový</strong>, jednatel<br/>
							<i class="material-icons">phone_android</i>&nbsp;+420 724 215 772 <i class="material-icons">email</i>&nbsp;<a
								href="mailto:bukovy@chpe.cz">bukovy@chpe.cz</a>
						</address>
						<address>
							<i class="material-icons">person</i> <strong>Peter Krčmár</strong>, projektový manažer<br/>
							<i class="material-icons">phone_android</i>&nbsp;+420 775 154 466 <i class="material-icons">email</i>&nbsp;<a
								href="mailto:krcmar@chpe.cz">krcmar@chpe.cz</a>
						</address>
					</div>
					<div class="col s12 l4">
						<h4>Osvědčení</h4>
						<?= Html::img( Yii::$app->request->baseUrl . '/img/ostatni/alfalaval_authorized_distributor.jpg', [
							'alt' => 'osvědčení - autorizovaný distributor společnosti Alfa Laval s.r.o.',
							'class' => 'responsive-img materialboxed'
						] ); ?>
						<p class="center-align">Jsme autorizovaným distributorem společnosti <?= Html::a('Alfa Laval s.r.o.', 'http://www.alfalaval.cz/'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>