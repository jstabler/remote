<!DOCTYPE html>
<html lang="en">
	<head>
		<meta cahrset=utf-8>
		<title>Email Setup</title>
		<meta name="viewport" content="width=device-width" />
		<meta name="description" content="">
		<link rel="stylesheet" href="style.css?v=1.2">
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-11682615-6']);
		  _gaq.push(['_trackPageview']);
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	<body id="emailSetup">
	<div id="omega">

		<ul id="navigation">
			<li><a href="http://remote.jstabler.com" id="remoteLink" class="button">Remote Program</a></li>
			<li><a href="email_setup.php" id="emailLink" class="button">Email Setup</a></li>
			<li><a href="phone_codes.php" id="phoneLink" class="button">Phone Codes</a></li>
		</ul>

		<div class="mainSection email">
			<h1>How to setup your Email Client</h1>
			<div class="outSelect">

				<div class="selectSec">
					<h3>Select your email Client</h3>
					<select id="manufacturer">
						<option value="#genSet">General Settings</option>
						<option value="#iphone">iPhone</option>
						<option value="#macmail">Apple Mail &#47; Mac Mail</option>
						<option value="#android">Android Devices</option>
						<option value="#outlook">Outlook</option>
						<option value="#outlook2010">Outlook 2010</option>
						<option value="#outlookExpress">Outlook Express</option>
						<option value="#windowLive">Windows Live Mail</option>
					</select>
				</div>
			</div>
			<div id="emailClient">
				<div id="genSet">
					<h3>General Settings</h3>
					<table>
						<tbody>
							<tr class="tableHead">
								<td>Incoming Server Type:</td>
								<td>Server Name:</td>
								<td>Port:</td>
							</tr>
							<tr>
								<td>IMAP</td>
								<td>imap.epbfi.com</td>
								<td>143</td>
							</tr>
							<tr>
								<td>POP3 with SSL</td>
								<td>pop.epbfi.com</td>
								<td>995</td>						
							</tr>
							<tr>
								<td>IMAP with SSL</td>
								<td>imap.epbfi.com</td>
								<td>993</td>						
							</tr>
							<tr class="tableHead">
								<td>Outgoing Server Type:</td>
								<td>Server Name:</td>
								<td>Port:</td>						
							</tr>
							<tr>
								<td>SMTP with SSL</td>
								<td>smtp.epbfi.com</td>
								<td>465</td>						
							</tr>
						</tbody>
					</table>
					<p class="notes">Outgoing servers require SMTP authentication. Microsoft Outlook users will need to manually enable this feature.<br>
					Note: When entering your User Name, please enter your entire email address (e.g., myname@epbfi.com).</p>
				</div>
				<div id="iphone">
					<h3>iPhone, iPad, iPad2, iPod Touch</h3>

					<p>Open the &#34;Settings&#34; Option<br>
					<img src="images/iphone/iphonestep_01.jpg">
					</p>
					<p>Select "Mail, Contacts, Calendars"<br>
					<img src="images/iphone/iphonestep_02.jpg"></p>
					<p>Select "Add Accounts..."<br>
					<img src="images/iphone/iphonestep_03.jpg"></p>
					<p>Select "Other"<br>
					<img src="images/iphone/iphonestep_04.jpg"></p>
					<p>Select "Add Mail Accounts"<br>
					<img src="images/iphone/iphonestep_05.jpg"></p>
					<p>Enter in  name, email address and Password in these fields<br>
					<img src="images/iphone/iphonestep_06.jpg"></p>
					<p>Enter in Host Name, Full Email Address, and Password<br>			
					<img src="images/iphone/iphonestep_07.jpg"></p>
					<p>Enter in Host Name, Full Email Address, and Password<br>
					<img src="images/iphone/iphonestep_08.jpg"></p>
					<p>Click &#34;Save&#34; to finalize account setup.<br>
					<img src="images/iphone/iphonestep_09.jpg"></p>
					<p>Select the Epbfi account<br>
					<img src="images/iphone/iphonestep_10.jpg"></p>
					<p>This screen lets you know you are finished.<br>This screen also gives you the option to delete the account should you need to remove it for some reason.<br>
					<img src="images/iphone/iphonestep_11.jpg"></p>
					<!--p><img src="images/iphone/iphonestep_12.jpg"></p-->
				</div>
				<div id="macmail">
					<h3>Apple Mail &#47; Mac Mail</h3>
					<p>From the Mail menu, select <strong>Preferences</strong>.<br>
					<img src="images/macmail/mailpref.jpg"></p>
					<p>Go to the <strong>Accounts</strong> tab, and then click the <strong>plus sign</strong> at the bottom of Accounts.<br>
					<img src="images/macmail/addacct.jpg"></p>
					<p>Enter in your <strong>Name</strong>, <strong>Email Address</strong>, <strong>Password</strong> and then click on <strong>Continue</strong><br>
					<img src="images/macmail/welcome.jpg"></p>
					<p>Enter <strong>Description</strong>, <strong>pop.epbfi.com</strong> for the Incoming Mail Server, your <strong>full email address</strong> for User Name and your <strong>password</strong><br>
					<img src="images/macmail/incoming.jpg"></p>
					<p>Check <strong>Use Secure Sockets Layer</strong><br>
					<img src="images/macmail/incomingsecur.jpg"></p>
					<p>Enter <strong>Description</strong>, <strong>smtp.epbfi.com</strong> for the Outgoing Mail Server. Check <strong>Use Authentication</strong> and then enter your <strong>full email address</strong> for User Name and your <strong>password</strong><br>
					<img src="images/macmail/outgoing.jpg"></p>
					<p>Check <strong>Use Secure Sockets Layer</strong><br>
					<img src="images/macmail/outgoingsecur.jpg"></p>
					<p>After the account is created you will need to select the <strong>Account</strong>, then select the <strong>Advanced</strong> tab. The outgoing server port needs to be set to <strong>995 with SSL</strong><br>
					<img src="images/macmail/finish.jpg"></p>
				</div>
				<div id="android">
					<h3>Android</h3>
					<p>Open applications page, and then tap the <strong>Email</strong> button<br>
					<img src="images/android/selectmail.jpg"></p>
					<p>Enter in your Full <strong>email address</strong> and <strong>password</strong>, then tap <strong>Next</strong><br>
					<img src="images/android/enteremailaddress.jpg"></p>
					<p>Tap the POP3 icon<br>
					<img src="images/android/accounttype.jpg"></p>
					<p>Enter in your <strong>full email address</strong> for the username. Enter your <strong>Password</strong>. Set the POP3 Server to <strong>pop.epbfi.com</strong> with port <strong>995</strong>. Security type needs to be set to <strong>SSL</strong>, then tap <strong>Next</strong><br>
					<img src="images/android/incomingserver.jpg"></p>
					<p>Set SMTP server to <strong>smtp.epbfi.com</strong> with port <strong>465</strong>. Set security type to <strong>SLL</strong> and check <strong>Require sign-in</strong>. Enter your <strong>full email address</strong> for the username and then enter your <strong>password</strong><br>
					<img src="images/android/outgoingserver.jpg"></p>
					<p>Set your account options<br>
					<img src="images/android/options.jpg"></p>
					<p>Enter in a name for this account and <strong>your name</strong>. Select <strong>Done</strong> to finish the setup<br>
					<img src="images/android/finish.jpg"></p>
				</div>
				
				<div id="outlook">
					<h3>Outlook</h3>
					<p>While in Outlook, Click on <strong>Tools</strong> then <strong>E-mail Accounts...</strong><br>
					<img src="images/outlook2003/toolsaccounts.jpg"></p>
					<p>Select <strong>Add a new e-mail account</strong> and click <strong>Next</strong>.<br>
					<img src="images/outlook2003/addaccount.jpg"></p>
					<p>
					<p>Select <strong>POP</strong> as your server type and click <strong>Next</strong>.<br>
					<img src="images/outlook2003/servertype.jpg"></p>
					<p>Enter <strong>pop.epbfi.com</strong> and <strong>smtp.epbfi.com</strong> for Incoming and Outgoing Mail Server. Enter in your <strong>full email address</strong> for the User Name. Then Select <strong>More Settings</strong>.<br>
					<img src="images/outlook2003/mainSettings.jpg"></p>
					<p>Click on the <strong>Outgoing Server</strong> tab. Check the box that says <strong>My outgoing server (SMTP) requires authentication</strong>.<br>
					<img src="images/outlook2003/outgoing.jpg"></p>
					<p>Click on the <strong>Adavanced</strong> tab. Select <strong>This server requires a secure connection (SSL)</strong> for both incoming and outgoing mail servers. The Incoming server port needs to be <strong>995</strong> and the Outgoing server port needs to be <strong>465</strong>. Make sure you check <strong>Leave a copy of messages on the server</strong>, so that you can check your mail on multiple devices.<br>
					<img src="images/outlook2003/advanced.jpg"></p>
					<p>Click <strong>Next</strong> and then select <strong>Finish</strong>.</p>
				</div>
				<div id="outlook2010">
					<h3>Outlook 2010</h3>
					<p>While in Outlook 2010, Click on <strong>File</strong>, <strong>Info</strong>, and then <strong>Account Settings</strong><br>
					<img src="images/outlook2010/screen01.jpg"></p>
					<p>Click on <strong>New...</strong> under the E-mail Tab.<br>
					<img src="images/outlook2010/screen02.jpg"></p>
					<p>Choose <strong>E-mail Account</strong> and the click <strong>Next</strong>.<br>
					<img src="images/outlook2010/screen03.jpg"></p>
					<p>Type in <strong>Your Name</strong>, <strong>Your Email Address</strong>, <strong>Password</strong> and then click <strong>Next</strong>.<br>
					<img src="images/outlook2010/screen04.jpg"></p>
					<p>Select <strong>IMAP</strong> in the mail server drop down. Enter <strong>mail.epbfi.com</strong> and <strong>smtp.epbfi.com</strong> for Incoming and Outgoing Mail Server, then click <strong>More Settings</strong>.<br>
					<img src="images/outlook2010/screen05.jpg"></p>
					<p>Click on the <strong>Outgoing Server</strong> tab. Check the box that says <strong>My outgoing server (SMTP) requires authentication</strong>.<br>
					<img src="images/outlook2010/screen06.jpg"></p>
					<p>Click on the <strong>Adavanced</strong> tab. Select <strong>This server requires a secure connection (SSL)</strong> for both incoming and outgoing mail servers. The Incoming server port needs to be <strong>993</strong> and the Outgoing server port needs to be <strong>465</strong>.<br>
					<img src="images/outlook2010/screen07.jpg"></p>
					<p>Then Click <strong>OK</strong> and then select <strong>Finish</strong>.</p>
				</div>
				<div id="outlookExpress">
					<h3>Outlook Express</h3>
					<p>While in Outlook Express, Click on <strong>Tools</strong> then <strong> Accounts...</strong><br>
					<img src="images/outlookexpress/screen01.jpg"></p>
					<p>Select the Mail Tab,<strong> Add, and then click Mail.</strong>.<br>
					<img src="images/outlookexpress/screen02.jpg"></p>
					<p>
					<p>Type in <strong>Your Name</strong> and then click Next.<br>
					<img src="images/outlookexpress/screen03.jpg"></p>
					<p>Type in <strong>Your Email Address</strong> and then click Next.<br>
					<img src="images/outlookexpress/screen04.jpg"></p>
					<p>Select <strong>IMAP</strong> in the mail server drop down. Enter <strong>mail.epbfi.com</strong> and <strong>smtp.epbfi.com</strong> for Incoming and Outgoing Mail Server, then click Next.<br>
					<img src="images/outlookexpress/screen05.jpg"></p>
					<p>Enter in your <strong>Full Email Address</strong> for the Account name and then your <strong>Password</strong>. <strong>Check Remember password</strong> and then click Next.<br>
					<img src="images/outlookexpress/screen06.jpg"></p>
					<p>Click <strong>Finish</strong><br>
					<img src="images/outlookexpress/screen07.jpg"></p>
					<p>Select the <strong>Account</strong> that we just created, and then Click on <strong>Properties</strong><br>
					<img src="images/outlookexpress/screen08.jpg"></p>
					<p>Select the <strong>Servers</strong> tab, <strong>check My server requires authentication</strong> under Outgoing Mail Server.<br>
					<img src="images/outlookexpress/screen09.jpg"></p>
					<p>Select the <strong>Advanced</strong> Tab. <strong>Check This server requires a secure connection (SSL)</strong> for both incoming and outgoing mail servers. The Incoming server port needs to be <strong>993</strong> and the Outgoing server port needs to be <strong>465</strong>. Then Click <strong>Ok</strong>.<br>
					<img src="images/outlookexpress/screen10.jpg"></p>
					<p>Then Click <strong>OK</strong>.</p>
				</div>
				
				<div id="windowLive">
					<h3>Windows Live Mail</h3>
					<p><strong>Open</strong> Windows Live Mail.<br>
					<img src="images/windowslivemail/screen01.jpg"></p>
					<p>Click on the <strong>Accounts tab</strong> and then Click on the <strong>Email button</strong> with the plus sign on it.<br>
					<img src="images/windowslivemail/screen02.jpg"></p>
					<p>Type in your <strong>Email address</strong>, <strong>Password</strong>, <strong>Name</strong> and then click <strong>Next</strong>.<br>
					<img src="images/windowslivemail/screen03.jpg"></p>
					<p>Select <strong>IMAP</strong> in the mail server drop down. Enter <strong>mail.epbfi.com</strong>, <strong>smtp.epbfi.com</strong>, and <strong>check SLL</strong> for both Incoming and Outgoing Mail Server. Enter in your <strong>Full email address</strong> for the user name, check <strong>Requires authentication</strong>, and click Next.<br>
					<img src="images/windowslivemail/screen04.jpg"></p>
					<p>Click <strong>Finish</strong>.<br>
					<img src="images/windowslivemail/screen05.jpg"></p>
					
				</div>
			</div>
			<br>
		</div>
		<br>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$('#emailClient div').addClass('hideThis');
		$('#genSet').removeClass('hideThis');
		$('#manufacturer').change(hideShow);
		//$('#hdSD').change(hideShow);
		$('.outSelect').prepend(' <a href="#print" class="print">Print</a>');
		$('a.print').click(function() {
			window.print();
			return false;
		 });	
		function hideShow() {
			$('#emailClient div').addClass('hideThis');
			var selectM = $('#manufacturer').val();//+$('#hdSD').val();
			$(selectM).removeClass('hideThis');
		}
	});
	</script>
	</body>
</html>