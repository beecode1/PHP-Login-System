<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="/" />
	<!-- UIkit CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/css/uikit.min.css" />
</head>
<body>

	<div class="uk-section uk-container">
		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
			
             <form>
               <fieldset class="uk-fieldset js-login">

        <legend class="uk-legend">Email</legend>

        <div class="uk-margin">
            <input class="uk-input" type="email" required="required" placeholder="Your email">
        </div>

        <legend class="uk-legend">Password</legend>

        <div class="uk-margin">
            <input class="uk-input" type="password" required="required" placeholder="Password">
        </div>

        <div class="uk-margin">
            <button class="uk-button uk-button-default" type="submit">Login</button>
        </div>
 
    </fieldset>
</form>

		</div>
	</div>	
	<!-- JQuery is required -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- UIkit JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/js/uikit.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/js/uikit-icons.min.js"></script>
</body>
</html>