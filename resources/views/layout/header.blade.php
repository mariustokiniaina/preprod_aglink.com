@include('layout.index')

@if (isset($all_request))
<div class="navbar navbar-expand-md mb-4 {{ $bg }}"
role="navigation">
@else
<div class="navbar navbar-expand-md mb-4 clear" role="navigation">
@endif
	<div class="brand">
	<a title="Login" href="{{ url('/') }}">
		<div class="circle"></div>
	</a>
		<div class="rectangle"></div>
		
	</div>

	@if (isset($all_request))
	<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto m-t-6">
				<li class="nav-item">
					<a class="item-link" href="{{ url('homepage') }}">Tableau de bord</a>
				</li>
				<li class="nav-item">
					@if (isset($url))
					<a class="item-link" href="{{ url($url) }}">{{ $nav }}</a>
					@endif
				</li>
				
				@if (isset($show_nav))
				<li class="nav-item">
					<a class="item-link" href="">{{Request::segment(2)}}</a>
				</li>
				@endif

			</ul>

				@if (isset($start))
					<div id="start-ag" class="nav-btn">
						<button>
							<i class="fa fa-play {{ $text_color }}"></i>
							<span class="{{ $text_color }} m-l-5">{{ $start }}</span>
						</button>
					</div>
				@elseif (isset($add))
					<div class="nav-btn {{ $width }}">
						<button type="button" data-toggle="modal" data-target=".{{ $id_add }}">
							<i class="fa fa-plus add text-white {{ $bg }}" aria-hidden="true"></i>
							<span class="{{ $text_color }} m-l-5">{{ $add }}</span>
						</button>
					</div>
				@endif
				
		@elseif (Route::current()->getName() == 'homepage')
			<form class="search-form validate-form p-l-55 p-r-55">
				<input class="search" type="text" name="search2">
			</form>
	@endif
	</div>

</div>

<!-- Modal -->
<!-- ajouter un copropriétaire -->
<div class="modal fade new-copro" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
    <form class="" action="">
        <div class="container p-t-50 p-r-50 p-b-50 p-l-50">
            <div class="row p-b-22">
                <div class="col-6">
                    <span class="dashbord-title fs-22">Nouveau copropriétaire</span>
                </div>
                <div class="col-6 text-center">
                    <button data-dismiss="modal">
                        <span class="m-t-12 bottom" style="color:red;">Annuler</span>
                    </button>
                    <div class="btn-edit float-r w-60 {{ $bg }}">
                        <button type="submit">
                            <i class="fa fa-plus add {{ $text_color }}" aria-hidden="true"></i>
                            <span class="text-white">Ajouter à l'immeuble</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="dis-grid">

                            <span class="label fs-16">Prénom</span>
                            <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter ">
                                <input class="input100 w-full" type="text" name="prenom">
                            </div>

                            <span class="label fs-16">Nom</span>
                            <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter">
                                <input class="input100 w-full" type="nom" name="nom">
                            </div>

                            <span class="label fs-16">Email</span>
                            <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter ">
                                <input class="input100 w-full" type="email" name="email">
                            </div>

                            <span class="label fs-16">Téléphone</span>
                            <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter ">
                                <input class="input100 w-full" type="email" name="phone">
                            </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="dis-grid">
                        <div class="row m-t-m-5">
                            <div class="col-12 eto">
                                <span class="label fs-16">Adresse</span>
                                <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter ">
                                    <input class="input100 w-full" type="text" name="address">
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-5">
                                <span class="label fs-16">Code Postal</span>
                                <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter ">
                                    <input class="input100 w-full" type="text" name="code_postal">
                                </div>

                                <span class="label fs-16">Tantième</span>
                                <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter">
                                    <input class="input100 w-full" type="text" name="tantieme">
                                </div>

                                <span class="label fs-16">Clé de répartition</span>
                                <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter">
                                    <input class="input100 w-full" type="text" name="cle">
                                </div>
                            </div>
                            <div class="col-7">
                                    <span class="label fs-16">Ville</span>
                                    <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter ">
                                        <input class="input100 w-full" type="text" name="ville">
                                    </div>

                                    <span class="label fs-16">Numéro de lot</span>
                                    <div class="wrap-input100 validate-input p-t-12 m-b-16" data-validate= "Please enter">
                                        <input class="input100 w-full" type="text" name="lot">
                                     </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </div>
  </div>
</div>

<!-- ajouter un immeuble -->
<div class="modal fade ajouter-immeuble" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="" action="">
				<div class="container p-t-50 p-r-50 p-b-50 p-l-50">
					<div class="row p-b-22">
						<div class="col-6">
							<span class="dashbord-title fs-22">Nouvel immeuble</span>
						</div>
						<div class="col-6 text-center">
							<button data-dismiss="modal">
								<span class="m-t-12 bottom" style="color:red;">Supprimer</span>
							</button>
							<div class="btn-edit float-r w-25 bgblue">
								<button type="submit">
									<span class="text-white">Suivant</span>
								</button>
							</div>
						</div>
					</div>

					<div class="row">
                		<div class="col-sm">
                    		<div class="dis-grid">
								<span class="label fs-16 p-b-8">Titre</span>
								<div class="ajouter-immeuble-titre p-t-12 p-r-12 p-b-12 p-l-12">
									<span class="immeuble-content fs-13">Travaux de nettoyage des moquettes des parties communes</span>
								</div>
								
								<span class="label fs-16 p-t-22 p-b-22">Règle de vote</span>
								<div class="radio-class">
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="optradio">Majorité simple
										</label>
									</div>
									<div class="form-check">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optradio">Majorité absolue
									</label>
									</div>
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="optradio">Double majorité
										</label>
									</div>
								</div>

							</div>
						</div>
						<div class='col-sm'>
							<div class="dis-grid">
								<span class="label fs-16">Description</span>
							</div>
						</div>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>
