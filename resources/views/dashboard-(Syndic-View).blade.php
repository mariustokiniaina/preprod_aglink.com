@include('layout.header')
	<div class="container">
		<div class="row">

			<div class="col-sm">
				<a id="ag" title="Toutes les assemblées générales" href="{{ url('view-all-ag') }}">
					<span class="dashbord-title fs-24">
						Assemblées générales
					</span>
				</a>
				<div class="dashbord-btn dashbord-btn-1 m-b-15">
					<button class="btn-color">
						<i class="fa fa-plus add" aria-hidden="true"></i>
						<span class="m-l-5">Créer une assemblée</span>
					</button>
				</div>

				@for ($i = 0; $i < 10; $i++)
				<a class="link-home-detail" href="{{ url('view-detail-ag') }}/AG093{{ $i }} " title="AG093{{ $i }}">
				<div class="detail bg_h_blue">
				<div class="p-t-12 p-b-12 p-l-20 p-r-20">
						<span class="detail-title">
							Lundi 25 Mai 2020 à 19h30
						</span>

						<div class="p-b-4">
						<span class="txt1 detail-txt1">
							Lot 1834 - Résidence du soleil
							</span>
						</div>
						<div class="p-b-0">
							<span class="sub-content">
								14 rue de Paris
							</span>
							<div>
								<span class="sub-content">
								78000 Versailles
								</span>
							</div>
						</div>
					</div>
				</div>
				</a>
				@endfor

			</div>

			<div class="col-sm">
			<a id="immeuble" title="Tous les immeubles" href="{{ url('view-all-immeuble') }}">
				<span class="dashbord-title fs-24">
					Immeubles
				</span>
			</a>
				<div class="dashbord-btn dashbord-btn-2 m-b-15">
					<button class="btn-color">
						<i class="fa fa-plus add two" aria-hidden="true"></i>
						<span class="m-l-5">Ajouter un immeuble</span>
					</button>
				</div>

					@for ($i = 0; $i < 10; $i++)
					<a class="link-home-detail" href="{{ url('view-detail-immeuble') }}/09738{{ $i }} " title="09738{{ $i }}">
					<div class="detail bg_h_green">
						<div class="p-t-12 p-b-12 p-l-20 p-r-20">
							<span class="detail-title">
							09738{{ $i }} - KA12A
							</span>

							<div class="p-b-4">
							<span class="txt1 detail-txt1">
								8 Résidence du soleil
								</span>
							</div>
						</div>
					</div>
					</a>
					@endfor
			</div>

			<div class="col-sm">
			<a id="gestionnaire" title="Tous les gestionnaires" href="{{ url('view-all-gestionnaire') }}">
				<span class="dashbord-title fs-24">
					Gestionnaires
				</span>
			</a>
				<div class="dashbord-btn dashbord-btn-3 m-b-15 ">
					<button class="btn-color">
						<i class="fa fa-plus add tree" aria-hidden="true"></i>
						<span class="m-l-5">Ajouter un gestionnaire</span>
					</button>
				</div>

				@for ($i = 0; $i < 20; $i++)
					<a class="link-home-detail" href="{{ url('view-detail-gestionnaire') }}/Marie_Rouanna" title="Marie Rouanna">
					<div class="detail bg_h_orange">
						<div class="p-t-12 p-b-12 p-l-20 p-r-20">
							<span class="detail-title">
								Marie Rouanna
							</span>
						</div>
					</div>
					</a>
				@endfor
		</div>
	</div>
	
@include('layout.footer')