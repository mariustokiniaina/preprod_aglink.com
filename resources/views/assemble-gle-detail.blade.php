@include('layout.header')

<div class="container">
	<div class="row">

			<div class="col-3">
                <div class="row">
                    <div class="col-sm">
                        <span class="id-title">
                            {{Request::segment(2)}}
                        </span>
                    </div>
                    <div class="col-sm text-right">
                        <a href="#"><span class="id-title mod">Modifier</span></a>
                    </div>
                </div>

            <div class="dis-grid">
                <span class="dashbord-title fs-22">13 rue Montebello <br> 78000 Versailles</span>
                <span class="fs-15">lundi 25 mai 2020 à 18h30</span>
				<img class="p-t-12 p-b-12" src="{{ asset('assets/images/google-map.png') }}" alt="map">
                <span class="dashbord-title fs-15">Salle Pierre De Coubertin <br> 78000 Versailles</span>
                <span class="p-t-12 p-b-12 text-id fs-20">Participants (24)</span>
                <div class="participant">
                    <ul>
                    @for ($i = 1; $i <= 8; $i++)
                        <li>
				            <img class="p-t-12 p-b-12" src="{{ asset('assets/images/participant-1.png') }}" alt="">
                            <span class="m-l-5 m-r-5">Jules Cesar</span>
                            <button class="via-btn bo-25 bgblue ">
                                <span class="text-white fs-12">via AGlink</span>
                            </button>
                        </li>

                        <li>
				            <img class="p-t-12 p-b-12" src="{{ asset('assets/images/participant-2.png') }}" alt="">
                            <span class="m-l-5 m-r-5">Maëlle Angeli</span>
                            <button class="via-btn bo-25 bggreen">
                                <span class="text-white fs-12">Sur place</span>
                            </button>
                        </li>

                        <li>
				            <img class="p-t-12 p-b-12" src="{{ asset('assets/images/participant-3.png') }}" alt="">
                            <span class="m-l-5 m-r-5">Liam Nielsen</span>
                            <span class="btn-add via-btn m-l-5"></span>
                        </li>
                    @endfor
                    </ul>
                </div>

            </div>

            </div>

            <div class="col-9">
                <div class="head-title">
                    <div class="col-8 p-l-0"><span class="dashbord-title">Ordre du jour</span></div>
                        <div class="col-4 nav-btn btn-add-res">
                            <button class="res">
                                    <i class="fa fa-plus add bg-res" aria-hidden="true"></i>
                                    <span class="btn-add m-l-5 res">Ajouter une résolution</span>
                            </button>
                        </div>
                </div>

    			@for ($i = 1; $i < 20; $i++)
                <div class="detail bgcolor">
                    <div class="col-2 align-c"><span class="id_ordre">{{ $i }}</span></div>
                    <div class="description-res col-8">
                        <span class="detail-title fs-14 ln-1-9">
                            Travaux de nettoyage des moquettes de parties communes
                        </span>
                        <span class="sub-content fs-12">
                            Majorité simple - <i class="fa fa-paperclip"></i> 2 pièces jointes
                        </span>
                    </div>
                    
                    <div class="col-2 align-c p-t-12 p-b-12">
                        <a href="#" class="trois-points">
                            <button class="ordre-btn btn-primary"><i class="fa fa-ellipsis-v"></i>
                            </button>
                        </a>
                    </div>
                </div>
                @endfor
                

            </div>


    </div>
</div>



@include('layout.footer')