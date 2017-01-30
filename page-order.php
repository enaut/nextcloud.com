<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/buy.css" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script>
	require(["require.config"], function() {
		require(["modules/submenu"])
	});
	</script>
</head>
<section class="buy-hero-section second-menu">
	<div class="container-fluid background buy-background">
		<div class="container">
			<div class="row">
				<div class="col-md-6 topheader">
					<h1><?php echo $l->t('Order Nextcloud');?></h1>
					<h2><?php echo $l->t('Order your Nextcloud subscription online');?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu" id="menuAnchor">
		<div class="container buttons">
			<a class="btn btn-primary" href="/buy"><?php echo $l->t('get a quote');?></a>
			<a class="btn btn-primary" href="/pricing"><?php echo $l->t('pricing plans');?></a>
			<a class="btn btn-primary" href="/enterprise"><?php echo $l->t('enterprise offering');?></a>
		</div>
	</div>
</section>

<div class="container">
	<div class="contact">
		<h3><?php echo $l->t('Fill in the form below to receive a contract and invoice from us and get started!');?></h3>
		<form name="sales" method="post" action="../ordersubmit/">
				<p><?php echo $l->t('<label for="yourname">Contact person<br>
				<input  type="text" name="yourname" maxlength="60" size="60"></label>');?></p>
				<p><?php echo $l->t('<label for="email">Email<br>
				<input  type="text" name="email" maxlength="80" size="60"></label>');?></p>
				<p><?php echo $l->t('<label for="organization">Organization<br>
				<input  type="text" name="organization" maxlength="100" size="60" placeholder="Name of your organization"></label>');?></p>
				<p><?php echo $l->t('<label for="address">Address<br />
				<textarea  name="comments" maxlength="1000" cols="80" rows="8" placeholder="Full address."></textarea></label>');?></p>
				<p><?php echo $l->t('<label for="address">Billing address<br />
				<textarea  name="comments" maxlength="1000" cols="80" rows="8" placeholder="If different from above, the billing address."></textarea></label>');?></p>
				<p><?php echo $l->t('<label for="phone">Phone number<br>
				<input  type="text" name="phone" maxlength="40" size="60" placeholder="Please include country code"></label>');?></p>
				<p><?php echo $l->t('<label for="vat">VAT ID (Europe only)<br>
				<input  type="text" name="vat" maxlength="60" size="60" placeholder="Your VAT ID"></label>');?></p>
				<p><label for="users"><?php echo $l->t('Number of seats');?><br>
				<select name="users">
					<option value="50">50</option>
					<option value="75">75</option>
					<option value="100">100</option>
					<option value="150">150</option>
					<option value="200">200</option>
					<option value="250">250</option>
				</select></label></p>
				<p><label for="edition"><?php echo $l->t('Which support level would you like? (<a href="/pricing" target="_blank">details on pricing</a>)');?><br>
				<select name="edition">
					<option value="basic">Basic</option>
					<option value="standard">Standard</option>
					<option value="enterprise">Enterprise</option>
				</select></label></p>
				<p><label for="duration"><?php echo $l->t('For how many years?');?><br>
				<select name="duration">
					<option value="one">One year</option>
					<option value="two">Two years (10% discount)</option>
					<option value="three">Three years (12% discount)</option>
				</select></label></p>
				<p><h3>Optional features (only with a Standard Subscription)</h3>
				<input type="checkbox" name="collabora" value="collabora"> <?php echo $l->t(' Include <a href="/collabora" target="_blank">Collabora Online</a> (Eur 16/user)');?><br/>
				<input type="checkbox" name="spreed" value="spreed"> <?php echo $l->t(' Include <a href="/webrtc" target="_blank">Spreed audio/video chat</a> (Eur 5/user)');?><br/>
				<input type="checkbox" name="outlook" value="outlook"> <?php echo $l->t(' Include <a href="/outlook" target="_blank">our Outlook add-in</a> (Eur 5/user)');?><br/>
				<input type="checkbox" name="branding" value="branding"> <?php echo $l->t(' Include branded clients (Eur 6000)');?><br/></p>
				<p class="price"><?php echo $l->t('Price: EUR 1.000.000');?></p>
				<p><?php echo $l->t('<label for="comments">Notes<br />
				<textarea  name="comments" maxlength="2000" cols="80" rows="8" placeholder="Any other comments or notes?"></textarea></label>');?></p>
				<p><input type="checkbox" name="terms" value="termsread"> <?php echo $l->t('I have read and agree to the');?> <a href=""<?php echo get_template_directory_uri(); ?>/assets/files/termsfornextcloudorder.pdf"><?php echo $l->t('terms and conditions');?></a></p>
				<td colspan="2" style="text-align:center">
				<div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>
				<input type="submit" value=" Order Now ">
		</form>
	</div>
</div>
<!--
TODO:
* check pricing:
 - No idea about spreed pricing
 - I set Collabora on 16 even though it is Eur 17 for the first 100
 - Branding correct?
* when choosing 'basic' as option, disable:
 - collabora
 - spreed
 - outlook
 - branding
* when choosing 'enterprise' as option, disable all and tell user to get a quote from us
* calculate price based on options
-->