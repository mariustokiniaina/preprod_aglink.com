<div class="navbar navbar-expand-md mb-4" role="navigation">
	<div class="brand">
	<a  title="Login" href="{{ url('/') }}">
		<div class="circle"></div>
	</a>
		<div class="rectangle"></div>
		
	</div>

	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto m-t-6">
			<li class="nav-item">
				<a class="item-link" href="{{ url('homepage') }}">Tableau de bord</a>
			</li>
			<li class="nav-item">
				<a class="item-link" href="{{ url('assemble-gle') }}">Assemblées générales</a>
			</li>
		
		</ul>
		<div class="nav-btn">
			<button>
				<i class="fa fa-plus add ag" aria-hidden="true"></i>
				<span class="btn-add m-l-5">Créer un AG</span>
			</button>
		</div>
	</div>
</div>