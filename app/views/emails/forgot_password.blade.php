<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Reset Password</h2>

                <div>Dear {{{$first_name}}}, </div>
		<div>
                    <p>
                        We received a forgot password request.
                    </p>
                    <p>
			If it is a valid request, please click on this link to set new password:<br/>
                        {{ link_to('reset_password/'.$token) }}
                    </p>
                    <p>
                        Best Regards,<br/>
                        SAM<br/>
                        Sampath Project
                    </p>
		</div>
	</body>
</html>
