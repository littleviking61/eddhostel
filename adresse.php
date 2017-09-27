<div class="vcard">
	<p class="adr">
		<span class="street-address"><?= get_field('rue', 'option'); ?></span><br>
		<span class="postal-code"><?= get_field('code_postal', 'option'); ?></span> <span class="City"><?= get_field('ville', 'option'); ?></span><br>
	</p>
	<p>
		<span class="mail"><a href="mailto:<?= get_field('mail', 'option'); ?>"><?= get_field('mail', 'option'); ?></a></span><br>
		<span class="tel"><?= get_field('tel', 'option'); ?></span>
	</p>
</div>