<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Activate your account!</h2>

                <div>Dear {{{$first_name}}}, </div>
		<div>
                    <p>
                        Thanks for registering with the Sampath Project!
                    </p>
                    <p>
			To activate your account, please click this link :<br/>
                        {{ link_to('activate/'.$token) }}
                    </p>
                    <p>
                        Best Regards,<br>
                        SAM
                    </p>
		</div>
	</body>
</html>
