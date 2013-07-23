<?php
	# Recaptcha setup
	require_once( 'lib' . DIRECTORY_SEPARATOR . 'recaptcha' . DIRECTORY_SEPARATOR . 'recaptchalib.php' );

	$t_sub_title = "Contact Us";
	include( "top.php" );

	$f_contact_name = gpc_strip_slashes( isset( $_POST['contact_name'] ) ? $_POST['contact_name'] : '' );
	$f_contact_email = gpc_strip_slashes( isset( $_POST['contact_email'] ) ? $_POST['contact_email'] : '' );
	$f_subject = gpc_strip_slashes( isset( $_POST['subject'] ) ? $_POST['subject'] : '' );
	$f_email_body = gpc_strip_slashes( isset( $_POST['email_body'] ) ? $_POST['email_body'] : '' );
?>

<!-- recaptcha layout options -->
<script type="text/javascript">
	var RecaptchaOptions = {
		theme : 'white'
	};
</script>


<h4>Contact Us</h4>

<p align="left">Please use the form below to email us with any queries that you may have.</p>

<div class="spotlight">
<p><big><strong><font color="red">For questions relating to how to use or configure MantisBT, please use the <a href="http://www.mantisbt.org/forums/">forums</a>. Please understand that the MantisBT developers cannot offer personal support.</font></strong></big></p>
</div>

<br />
<form name="frmAddEntry" method="post" action="contact_send.php">

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="20%" style="padding:10px;">Contact Name:</td>
			<td width="80%" style="padding:10px;"><input style="width:270px;" name="contact_name" type="text" id="contact_name" value="<?php echo htmlspecialchars( $f_contact_name ); ?>" /></td>
		</tr>
		<tr>
			<td style="padding:10px;">Email Address:</td>
			<td style="padding:10px;"><input style="width:270px;" name="contact_email" type="text" id="contact_email" value="<?php echo htmlspecialchars( $f_contact_email ); ?>" /></td>
		</tr>
		<tr>
			<td style="padding:10px;">Subject:</td>
			<td style="padding:10px;"><input style="width:270px;" name="subject" type="text" id="subject" value="<?php echo htmlspecialchars( $f_subject ); ?>" /></td>
		</tr>
		<tr>
			<td width="20%" style="padding:10px;">Body:</td>
			<td width="80%" style="padding:10px;"><textarea name="email_body" id="email_body" style="height:100px; width:270px; font-size:12px; margin:0; padding:0;" rows="6" cols="40"><?php echo htmlspecialchars( $f_email_body ); ?></textarea></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td style="padding:10px;"><?php echo recaptcha_get_html( $t_recaptcha_public_key ) ?></td>
		</tr>
		<tr>
			<td style="padding:10px;">&nbsp;</td>
			<td style="padding:10px;">
				<input name="admAdd" type="submit" id="admAdd" value="Submit" />
				<input name="issubmit" type="hidden" value="1" />
			</td>
		</tr>
	</table>
</form>

<?php
	include( 'bot.php' );
