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
