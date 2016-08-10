<?php

function generateOrderId($length = 8) {
	$length -= 3;

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString . str_pad(date('B'), 3, "0", STR_PAD_LEFT);
}

$translations['sv']['donation'] = [
	'title' => 'Donera pengar',
	'subtitle' => 'Bli månadsgivare',
	'intro' => 'Genom att stödja oss månadsvis bidrar du till att skolbarn som aldrig tidigare har sett en dator nu får daglig tillgång till all världens information och kommunikation. Tack vare ditt stöd kan vi bygga ut elektriciteten och internettillgången i Ghana, samt förse fler skolor med datorer.',
	'lang' => 'sv',
	'accepturl' => "https://{$_SERVER['HTTP_HOST']}/tack",
	'sek100' => '100 kr',
	'sek200' => '200 kr',
	'sek300' => '300 kr',
	'sek500' => '500 kr',
	'firstName' => 'Förnamn',
	'lastName' => 'Efternamn',
	'email' => 'E-post',
	'continue' => 'Fortsätt',
	'more100' => '(100 kr bidrar med en månads internet för två skolklasser)',
	'more200' => '(200 kr bidrar med en månads internet för en hel skola)',
	'more300' => '(300 kr bidrar med 50% av elektriciteten för en skola)',
	'more500' => '(500 kr bidrar med internetuppkoppling för två skolor)',
	'foot' => 'När du trycker på ”Fortsätt” kommer du vidare till vår betalningspartner DIBS sida.',
	'aboutSwish' => 'Använd Swish-applikationen i din mobil och gör ett bidrag till nummer: <span class="inline-block text--large">123 418 30 34</span>',
	'bankgiro' => 'Bank-giro',
	'aboutBankgiro' => 'Gör en insättning till vårt bankgiro: <span class="inline-block text--large">900-4946</span>',
	'alternativesTitle' => 'Vill du göra en engångsdonation istället?',
	'alternativesFoot' => '',
	'termsLink' => 'Villkor för månadsgivare',
	'terms' => '<h2>Villkor för månadsgivare</h2>
<p><strong>Medgivande om uttag.</strong> Jag medger att uttag får göras från angivet konto/kreditkort på begäran av IT For Children för överföring av dem. Jag skall senast den 28 i varje månad ha tillräckligt med pengar på kortet för den valda gåvan. Jag medger att betalningen får belasta mitt konto/kreditkort.
Om pengar saknas på kortet. Har jag inte senast den 28 i varje månad tillräckligt med pengar på kortet är jag medveten om att det kan innebära att betalningen kan utebli.</p>
<p><strong>Insättning.</strong> Insättning på IT For Childrens konto görs på förfallodagen.</p>
<p><strong>Stopp av medgivande.</strong> Jag kan stoppa alla uttag avseende medgivandet. Detta sker genom att jag underrättar IT For Children per telefon eller själv går in på IT For Childrens hemsida och stoppar. Du måste stoppa ditt medgivande minst två (2) arbetsdagar före förfallodagen.</p>
<p><strong>Återkallelse av medgivande.</strong> Mitt medgivande gäller tills vidare. Medgivandet upphör senast två (2) arbetsdagar efter det att jag återkallat det. Medgivandet upphör även om jag spärrar mitt kort eller om giltighetsdatum har passerats på kortet.</p>
<p><strong>3D Secure.</strong> Vi stödjer 3D Secure som är en global säkerhetsstandard som är framtagen av VISA och Mastercard för betalningar över Internet. Vissa kredit- och kontokort är automatiskt kopplade till 3D Secure, i dessa fall krävs att du har din 3D Secure-kod vid betalning via internet.
Med 3D Secure så skyddar du dig från att någon obehörig använder dina kortuppgifter för att utföra betalningar på nätet. 3D Secure gäller endast Internetbetalningar. Kontakta din bank för att aktivera 3D Secure på dina kort för din säkerhet.</p>
<p><strong>Betalningar från utlandet.</strong> Vi stödjer svenska och nordiska kredit- och kontokort. Vi accepterar betalningar i valutorna SEK, DKK, NOK, USD, EUR samt GBP. Med anledning av de höga bedrägeririskerna accepterar vi inte kredit- och kontokort registrerade utanför Norden.</p>
<p>Tack för att du stödjer IT For Children som månadsgivare. Om du har frågor eller synpunkter är du välkommen att ringa oss på telefon <a href="tel:+46703720094">0703-720094</a>, eller maila: <a href="mailto:info@itforchildren.org">info@itforchildren.org</a>.</p>'
];

?>
<div class="section donate" data-id="donate">
	<div class="donate-money<?php if($isThankYou or $isTack) echo ' donate-money--thanks'; ?>"<?php if($isThankYou) echo ' data-label="Thanks for becoming a monthly donor!"'; else if($isTack) echo ' data-label="Tack för att du blivit månadsgivare!"'; ?>>
		<div class="donate-money__contents">
			<div class="wrap wrap--760">
			
				<div class="grid grid--full donation__languages">
					<div class="grid__item one-half">
						<button class="donation__language donation__language--1 donation__language--selected" data-language="en">English</button>
					</div><!--
					--><div class="grid__item one-half">
						<button class="donation__language donation__language--2" data-language="sv">Svenska</button>
					</div>
				</div>
			
				<h2 class="section__title" data-translation="donation.title">Donate money</h2>
			
				<img src="img/donate-money.png" alt="" class="donation__icon donation__icon--money" />
			
				<div class="donation">
					<h3 class="section__subtitle" data-translation="donation.subtitle">Become a monthly donor</h3>
			
					<div class="text donation__intro">
						<p data-translation="donation.intro">By supporting us on a monthly basis, you will be helping us to provide daily access to all the information and communication in the world for children who have never seen a computer before. Thanks to your support we will be able to expand the access to electricity and internet in Ghana, and make sure that more schools receive information technology.</p>
					</div>
			
					<form action="https://payment.architrade.com/paymentweb/start.action" class="donation__form" target="_top" method="post">
						<input name="accepturl" type="hidden" value="https://<?php echo $_SERVER['HTTP_HOST']; ?>/thank-you" />
						<input type="hidden" name="merchant" value="90198692" />
						<input name="currency" type="hidden" value="SEK" />
						<?php /*<input name="callbackurl" type="hidden" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/jobs/dibs-callback.php" /> */ ?>
						<input type="hidden" name="lang" value="en" data-translation="donation.lang" />
						<input type="hidden" name="preauth" value="true" />
						<?php /*<input type="hidden" name="test" value="1" />*/ ?>
			
						<input type="hidden" name="orderid" value="<?php echo generateOrderId(); ?>" />
			
						<input name="amount" type="hidden" value="10000" class="donation__amount" />
			
						<input name="ticketrule" type="hidden" value="rule100" class="donation__ticketrule" />
			
						<div class="donation__items grid grid--full">
							<div class="grid__item tab--one-quarter">
								<button class="donation__item donation__item--1 donation__item--selected" type="button" data-amount="100" data-translation="donation.sek100">SEK 100</button>
							</div><!--
							--><div class="grid__item tab--one-quarter">
								<button class="donation__item donation__item--2" type="button" data-amount="200" data-translation="donation.sek200">SEK 200</button>
							</div><!--
							--><div class="grid__item tab--one-quarter">
								<button class="donation__item donation__item--3" type="button" data-amount="300" data-translation="donation.sek300">SEK 300</button>
							</div><!--
							--><div class="grid__item tab--one-quarter">
								<button class="donation__item donation__item--4" type="button" data-amount="500" data-translation="donation.sek500">SEK 500</button>
								<?php /*<input type="text" class="donation__item donation__item--4" placeholder="Valfri summa" data-translation="donation.anyAmount" />*/ ?>
							</div>
						</div>
			
						<div class="donation__more">
							<div class="text">
								<p><em>
									<span class="donation__more__item donation__more__item--100 donation__more__item--current" data-translation="donation.more100">(SEK 100 provides monthly internet access for two classes)</span>
									<span class="donation__more__item donation__more__item--200" data-translation="donation.more200">(SEK 200 provides monthly internet access for an entire school)</span>
									<span class="donation__more__item donation__more__item--300" data-translation="donation.more300">(SEK 300 provides 50% of the electricity for a school)</span>
									<span class="donation__more__item donation__more__item--500" data-translation="donation.more500">(SEK 500 provides wifi-connection for two schools)</span>
								</em></p>
							</div>
						</div>
			
						<div class="donation__fields">
							<input type="text" name="delivery1.FirstName" value="" class="donation__field donation__field--1" placeholder="First name" data-translation="donation.firstName" required />
							<input type="text" name="delivery2.LastName" value="" class="donation__field donation__field--2" placeholder="Last name" data-translation="donation.lastName" required />
							<input type="email" name="delivery3.email" value="" class="donation__field donation__field--3 donation__field--last" placeholder="E-mail" data-translation="donation.email" required />
						</div>
			
						<div class="donation__submit">
							<button type="submit" class="button donation__button" data-translation="donation.continue">Continue</button>
						</div>
			
						<div class="donation__foot">
							<div class="text">
								<p><em data-translation="donation.foot">When you click on ”Continue” you will be forwarded to the site of our payment partner, DIBS.</em></p>
							</div>
						</div>

						<aside class="donation__terms">
							<a href="#terms" class="donation__terms__link" data-translation="donation.termsLink">Terms and conditions <span class="inline-block">for monthly donors</span></a>
							<div class="terms">
								<div class="wrap">
									<div class="text" data-translation="donation.terms">
										<h2>Conditions for monthly donors</h2>
										<p><strong>Permission for automatic withdrawal.</strong> I hereby accept that withdrawals will be made from my stated bank account/credit card – as a doation to IT For Children. I shall have a sufficient amount of money for the chosen donation on the account/credit card on the 28th of each month. I accept that the payment will be charged from my bank account/credit card and that this permission for automatic withdrawal will remain valid until I request it to be cancelled.</p>
										<p><strong>In case of insufficient funds on the credit card.</strong> If I don’t have a sufficient amount of money for the chosen donation on the 28th of each month, I am aware that this could mean that the payment will fail.</p>
										<p><strong>Deposit.</strong> The deposit will be made to IT For Children’s bank account on the scheduled payment date.</p>
										<p><strong>Cancellation of automatic withdrawal.</strong> I can cancel or postpone all withdrawals by way of either contacting IT For Children by phone or visiting IT For Children’s website, and requesting the withdrawals to either stop or cease for a designated period of time. This request must be made at least two (2) working days before the scheduled monthly payment date. </p>
										<p><strong>Termination of automatic withdrawal.</strong> Automatic withdrawal will be terminated within two (2) working days after cancellation. The withdrawal permission will also end if I block my credit card or if the validation date for the card has passed. </p>
										<p><strong>3D Secure.</strong> We support 3D Secure, which is a global security standard powered by VISA and MasterCard for online payments. Certain credit cards are automatically connected to 3D Secure, in which case you will need your 3D Secure password for online payments. Using 3D Secure, you will be protected from unauthorized transactions on your credit cards for online payments. 3D Secure is only valid for online payments. Please contact your bank in order to activate the 3D Secure service on your credit card, if you would like to receive this security service.</p>
										<p><strong>Payments from abroad.</strong> We accept Swedish and Nordic credit cards. We accept payments in the currencies: SEK, DKK, NOK, USD, EUR and GBP. With regard to the high risk of fraud, we do not accept credit cards registered from countries outside the Nordic region.</p>
										<p>Thank you for supporting IT For Children as a monthly donor. If you have any questions, do not hesitate to contact us either by phone: <a href="tel:+46703720094">+46-703720094</a> or by e-mail: <a href="mailto:info@itforchildren.org">info@itforchildren.org</a></p>
									</div>
								</div>
							</div>
						</aside>
					</form>
				</div>
			
			</div>
			<div class="wrap wrap--640">
			
				<div class="alternatives grid">
					<div class="grid__item">
						<h2 class="section__subtitle alternatives__title" data-translation="donation.alternativesTitle">Would you like to make a one-time donation instead?</h2>
					</div>
					<div class="grid__item tab--one-half">
						<div class="alternatives__item">
							<div class="alternatives__logo">
								<div class="alternatives__image">
									<img src="img/donate-swish.png" alt="" class="alternatives__img alternatives__img--swish" />
								</div>
							</div>
							<div class="text">
								<h3>Swish</h3>
								<p data-translation="donation.aboutSwish">Using the Swish application on your phone, make a contribution to number: <span class="inline-block text--large">123 418 30 34</span>.</p>
							</div>
						</div>
					</div><!--
					--><div class="grid__item tab--one-half">
						<div class="alternatives__item">
							<div class="alternatives__logo">
								<div class="alternatives__image">
									<img src="img/donate-bankgiro.png" alt="" class="alternatives__img alternatives__img--bankgiro" />
								</div>
							</div>
							<div class="text">
								<h3 data-translation="donation.bankgiro">Bank transaction</h3>
								<p data-translation="donation.aboutBankgiro">You can make a contribution to our bank account: <span class="inline-block">IBAN: SE4080000832799442257714</span> <span class="inline-block">BIC/SWIFT: SWEDSESS</span></p>
							</div>
						</div>
					</div><?php /*<!--
					--><div class="grid__item alternatives__foot">
						<div class="text">
							<p><em data-translation="donation.alternativesFoot">Once again, thank you for helping the children and youth of Ghana to access information, knowledge and communication!</em></p>
						</div>
					</div>*/ ?>
				</div>
			
			</div>
				</div>
		</div>
	<?php include('donate-laptop.php'); ?>
</div>