<!-- Header include -->
<?php
$title = "Andrew Dobrzanski | Contact";
$description = "Contact Andrew Dobrzanski about web development";
include 'includes/header.php';

?>

<!-- Content container -->
<div class="container content-container">
	<div class="">
		<section class="content">
			<h2>Have Questions or Comments?</h2>
			<p>Please email us with any questions or comments by using the contact form below</p>
			<form id="contact-form1" action="./thank-you.php" method="post" name="contactUs" class="post" onsubmit="return(validateForm());">
				<span class="contact-us-input">
					<input id="fname" class="input-field" type="text" name="fname" />
					<label class="input-label" for="fname">
						<span class="input-label-content" data-content="First Name"><span class="required">*</span> First Name</span>
					</label>
				</span>
				<span class="contact-us-input">
					<input id="lname" class="input-field" type="text" name="lname" />
					<label class="input-label" for="lname">
						<span class="input-label-content" data-content="Last Name"><span class="required">*</span> Last Name</span>
					</label>
				</span>
				<span class="contact-us-input">
					<input id="email" class="input-field" type="text" name="email" />
					<label class="input-label" for="email">
						<span class="input-label-content" data-content="Email Address"><span class="required">*</span> Email Address</span>
					</label>
				</span>
				<span class="contact-us-input">
					<input id="phone" class="input-field" type="text" name="phone" />
					<label class="input-label" for="phone">
						<span class="input-label-content" data-content="Phone Number">Phone Number</span>
					</label>
				</span>
				<span class="contact-us-input">
					<textarea id="message" class="input-field" type="text" name="message" cols="30" rows="8"></textarea>
					<label class="input-label" for="message">
						<span class="input-label-content" data-content="Message">Message</span>
					</label>
				</span>

				<!-- HoneyPot -->
				<div class="ninja">You Shouldn't See This: <input type="text" name="url"></div>

				<!-- Submit button -->
				<button class="btn-contact icon-arrow-right-contact left">Submit</button>

				<div class="required-text right"><span class="required">*</span>Asterisk Fields Are Required</div>
			</form>
		</section>
	</div><!-- .row -->

	<!-- Contact us form modal confirmation -->
	<div id="confirmation" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="close">&times;</button>
					<h2 class="modal-title">Ah Ah Ah... Enter All Required Fields!</h2>
				</div>
				<div class="modal-body center">
					<p>All required fields must be filled out in order to submit the form.</p>
					<img src="./images/ah-ah-ah.gif" />
				</div>
				<div class="modal-footer">
					<button type="button" class="btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Contact us form validation and scripts -->
<!-- Validation script -->
<script src="./js/form-validation.js"></script>
<script src="./js/classie.js"></script>
<script>
	(function() {
		// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
		if (!String.prototype.trim) {
			(function() {
				// Make sure we trim BOM and NBSP
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function() {
					return this.replace(rtrim, '');
				};
			})();
		}

		[].slice.call( document.querySelectorAll( 'input.input-field, textarea.input-field') ).forEach( function( inputEl ) {
			// in case the input is already filled..
			if( inputEl.value.trim() !== '' ) {
				classie.add( inputEl.parentNode, 'input--filled' );
			}

			// events:
			inputEl.addEventListener( 'focus', onInputFocus );
			inputEl.addEventListener( 'blur', onInputBlur );
		} );

		function onInputFocus( ev ) {
			classie.add( ev.target.parentNode, 'input--filled' );
		}

		function onInputBlur( ev ) {
			if( ev.target.value.trim() === '' ) {
				classie.remove( ev.target.parentNode, 'input--filled' );
			}
		}
	})();
</script><!-- End contact us form validation and scripts -->

<!-- Footer include -->
<?php include 'includes/footer.php';

?>
