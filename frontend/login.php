<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<?php if (@$_SESSION["login-error"]) {
			
			$_SESSION["login-error"] = false;
			unset($_SESSION["login-error"]);
			
			?>

			<div class="alert alert-warning alert-dismissible" role="alert" style="margin-top: 20px;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Hoppla!</strong> Die Anmeldung war nicht erfolgreich.
			</div>
		<?php }
		
		if (!empty($_COOKIE[C_LogStr.Cs_FPH]) && !empty($_COOKIE[C_LogStr.Cs_UID])) { ?>
			
			<div class="panel panel-default">
				<div class="panel-heading text-center">Pax et <b>Admin</b></div>
				<div class="panel-body">
					<svg width='100%' height='250px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-ripple" style="margin: 50px auto;">
						<rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
						<g>
							<animate attributeName="opacity" dur="3s" repeatCount="indefinite" begin="0s" keyTimes="0;0.33;1" values="1;1;0"></animate>
							<circle cx="50" cy="50" r="40" stroke="#afafb7" fill="none" stroke-width="6" stroke-linecap="round">
								<animate attributeName="r" dur="3s" repeatCount="indefinite" begin="0s" keyTimes="0;0.33;1" values="0;22;44"></animate>
							</circle>
						</g>
						<g opacity="0">
							<animate attributeName="opacity" dur="3s" repeatCount="indefinite" begin="1.5s" keyTimes="0;0.33;1" values="1;1;0"></animate>
							<circle cx="50" cy="50" r="40" stroke="#FFD45B" fill="none" stroke-width="6" stroke-linecap="round">
								<animate attributeName="r" dur="3s" repeatCount="indefinite" begin="1.5s" keyTimes="0;0.33;1" values="0;22;44"></animate>
							</circle>
						</g>
					</svg>
				</div>
			</div>
			
			<form id="auto-login" method="post" action=""
				  style="display: none; visibility: hidden;">
				<input type="hidden" name="string" id="string_fp"
					   style="display: none; visibility: hidden;" />
				<input type="hidden" name="auto" value="1" id="auto_login"
					   style="display: none; visibility: hidden;" />
			</form>
		<?php } else { ?>

			<div class="panel panel-default">
				<form method="post" action="" onsubmit="return validateInput();">
					<input type="hidden" name="string" id="string_fp" style="display: none;" />
					<div class="panel-heading text-center">Pax et <b>Admin</b></div>
					<div class="panel-body">
						<p class="text-center">Melden Sie sich mit Ihren Anmeldedaten an.</p>
						<div class="form-group">
							<label for="inp_username">Benutzername</label>
							<input id="inp_username" class="form-control" name="username" placeholder="test" type="text" />
						</div>
						<div class="form-group">
							<label for="inp_password">Passwort</label>
							<input id="inp_password" class="form-control" name="password" placeholder="abc123" type="password" />
						</div>
						<div class="text-center">
							<label>
								<input type="checkbox" name="keep" value="1">&nbsp; Angemeldet bleiben
							</label>
						</div>
					</div>
					<button class="btn btn-login panel-footer" type="submit" name="login">Anmelden</button>
				</form>
			</div>
		<?php } ?>

			<a href="/" class="link-back"><small><i class="glyphicon glyphicon-arrow-left"></i></small>&nbsp; Zurück zu Pax et Bonum</a>
		</div>
	</div>
</div>