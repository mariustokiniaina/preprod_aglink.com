@include('layout.header')

	<div class="container">
		<div class="row">

			<div class="col-sm">
				<div class="limiter">
					<div class="container-login100 ">
						<div class="wrap-login100">
							<form class="login100-form validate-form m-t-65 p-l-55 p-r-55">
								<div class="login-title">
									<span class="login100-form-title m-r-10">
										Bienvenue
								</span>
									<img id="waving-hand" src="{{ asset('assets/images/icons/waving-hand.png') }}" alt="">

								</div>
						
								<span class="label">Email</span>
								<div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter email">
									<input class="input100" type="email" name="email">
									<span class="focus-input100"></span>
								</div>

								<span class="label">Mot de passe</span>
								<div class="wrap-input100 validate-input  p-t-12 m-b-16" data-validate = "Please enter password">
									<input class="input100" type="password" name="pass">
									<span class="focus-input100"></span>
								</div>

								<div class="text-left p-t-13 p-b-33">
									<span class="txt1">
										<a href="#" class="txt1">
											Mot de passe oublié ?
										</a>
									</span>
								</div>

								<div class="container-login100-form-btn">
									<button class="login100-form-btn btn-primary">
										Connexion
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm">
				<div class="limiter">
					<div class="container-login100 container-two">
						<div class="wrap-login100 login-two">

							<form class="login100-form validate-form p-t-55 p-b-55 p-l-76 p-r-55">
								<span class="login100-form-title title-two">
									Participer à votre assemblée générale.
								</span>

								<div class="p-t-13 p-b-18 p-r-8">
								<span class="txt1 txt1-two">
									Retrouver vos informations de connexion dans l'email envoyé par votre gestionnaire.
									</span>
								</div>

								<span class="label">
									Code AG
								</span>
								<div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate="Please enter Code AG">
									<input class="input100 input100-two" type="number" name="code_ag">
									<span class="focus-input100"></span>
								</div>
								
								<span class="label">Mot de passe</span>
								<div class="wrap-input100 validate-input  p-t-12 m-b-16" data-validate = "Please enter password">
									<input class="input100 input100-two" type="password" name="pass">
									<span class="focus-input100"></span>
								</div>

								<div class="container-login100-form-btn m-t-27">
									<button class="login100-form-btn btn-two">
										Connexion à l'AG
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

@include('layout.footer')