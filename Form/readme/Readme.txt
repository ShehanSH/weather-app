 Make sure your xampp config in mail function if not so follow these steps so you can send the mail.
	
	Go to the (C:xampp\php) and open the PHP configuration setting file
 	then find the [mail function] by scrolling down or simply press ctrl+f
	to search it directly then find the following lines and pass these values.
	Remember, there may be a semicolon ; at the starting of each line, simply
	remove the semicolon from each line which is given below.

	[mail function]
	For Win32 only.
	http://php.net/smtp
	SMTP=smtp.gmail.com
	http://php.net/smtp-port
	smtp_port=587
	sendmail_from = your_email_address_here
	sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

	**** That’s all for this file, press ctrl+s to save this file and then close it. ****

	Now, go the (C:\xampp\sendmail) and open the sendmail configuration setting file then find sendmail
	by scrolling down or press ctrl+f to search it directly then find the following lines and pass these values.
	Remember, there may be a semicolon ; at the starting of each line, simply remove the semicolon from each line
	which is given below.

	smtp_server=smtp.gmail.com
	smtp_port=587
	error_logfile=error.log
	debug_logfile=debug.log
	auth_username=your_email_address_here
	auth_password=your_password_here
	force_sender=your_email_address_here (it's optional)
	
	**** That’s all for this file, press ctrl+s to save this file and then close it. ****

	Now, you’re done with the required changes in these files. To check the changes you’ve made
	are correct or not. First, create a PHP file with the .php extension and paste the following
	codes into your PHP file. After pasting the codes, put your details to the given variables
	– In the $receiver variable put the receiver email address,
	in the $subject variable put the email subject and do respectively.


Note:	If your mail isn’t sent after the correct changes and you got a warning or error.
	Please configure your google account security as “Less secure apps”. To configure it:
	– Go to your Google account then click on the Security tab and scroll down, there you
	can see the Less secure app access panel, Simply turn on that. This panel only shows,
	if you haven’t enabled 2-Step Verification.
	
