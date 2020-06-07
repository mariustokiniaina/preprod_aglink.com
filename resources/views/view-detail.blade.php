@include('layout.header')

<div class="container">
	<div class="row">

		<div class="col-3">
                <div class="row">
                @if ($page_name == 'assemblee-generale')
                    <div class="col-sm">
                        <span class="id-title">
                            {{Request::segment(2)}}
                        </span>
                    </div>
                @endif
                    <div class="col-sm {{ $label_pos_modif }}">
                        <a href="#"><span class="id-title {{ $text_color }}">Modifier</span></a>
                    </div>
                </div>

            <div class="dis-grid">
                @if ($page_name == 'assemblee-generale')
                    <span class="dashbord-title fs-22">{{ $rue }} <br> {{ $ville }}</span>
                    <span class="fs-15">lundi 25 mai 2020 à 18h30</span>
                    <img class="p-t-12 p-b-12" src="{{ asset('assets/images/google-map.png') }}" alt="map">
                @endif
                
                @if ($page_name == 'immeuble')
                    <span class="dashbord-title fs-22">{{ $rue }} <br> {{ $ville }}</span>
                    
                    <span class="dashbord-title fs-20 p-b-0">Numéro d'immeuble</span>
                    <span class="sub-content fs-14 p-b-15">{{ $numero_immeuble }}</span>

                    <span class="dashbord-title fs-20 p-b-0">Immatriculation</span>
                    <span class="sub-content fs-14">{{ $immatriculation }}</span>

                    <img class="p-t-12 p-b-12" src="{{ asset('assets/images/google-map.png') }}" alt="map">
                @endif

                @if ($page_name == 'gestionnaire')
                    <span class="dashbord-title fs-22">{{Request::segment(2)}}</span>

                    <span class="dashbord-title fs-20 p-b-0">Adresse mail</span>
                    <span class="sub-content fs-14 p-b-15">{{Request::segment(2)}}{{ $email }}</span>

                    <span class="dashbord-title fs-20 p-b-0">Téléphone</span>
                    <span class="sub-content fs-14">{{ $phone }}</span>
                @endif
                    
                @if ($page_name == 'assemblee-generale')
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
                @endif
            </div>
        </div>

        <div class="col-9">
            <div class="head-title">
                <div class="col-4 p-l-0"><span class="dashbord-title">{{ $col_2_name }}</span></div>
                <div class="col-4">
                    @if ($page_name == 'immeuble')
                    <button class="w-auto btn-add-res nav-btn {{ $bg }}">
                            <i class="fa fa-download add {{ $text_color }}" aria-hidden="true"></i>
                            <span class="btn-add m-l-5 res">{{ $col_2_btn_label_1 }}</span>
                    </button>
                    @endif
                </div>     

                <div class="col-4 nav-btn btn-add-res w-1 {{ $bg }}">
                    <button id="{{ $id_col_2_btn_label_2 }}" type="button" data-toggle="modal" data-target=".new-copro" class="res">
                            <i class="fa fa-plus add {{ $text_color }}" aria-hidden="true"></i>
                            <span class="btn-add m-l-5 text-white">{{ $col_2_btn_label_2 }}</span>
                    </button>
                </div>
            </div>

            @for ($i = 1; $i < 20; $i++)
            <div class="detail bgcolor">
                @if ($page_name == 'immeuble') 
                <div class="col-2 dis-grid p-r-n">
                    <span class="dashbord-title fs-16 p-b-5">Prénom</span>
                    <div class="sub-content bottom">Tantième :</div>
                </div>
                <div class="col-2 dis-grid p-l-n">
                    <span class="dashbord-title fs-16 p-b-5">Nom</span>
                    <div class="sub-content bottom">300</div>
                </div>
                  
                <div class="col-3 "><span class="sub-content bottom">Numéro de lot : 985649{{ $i }}</span></div>
                <div class="col-3 "><span class="sub-content bottom">Clé de répartition : B</span></div>

                @elseif($page_name == 'gestionnaire')
                <div class="col-4 dis-grid p-r-n">
                    <span class="dashbord-title fs-16 p-b-5">1 nom de la rue 00000 Vile</span>
                    <div class="sub-content bottom">Numéro d'immeuble : 09738{{ $i }}</div>
                </div>
                <div class="col-6 text-center">
                    <span class="sub-content bottom">Immatriculation : 965E7204780{{ $i }}</span>
                </div>

                @else
            
                <div class="col-2 align-c"><span class="id_ordre">{{ $i }}</span></div>
                <div class="description-res col-8">
                    <span class="detail-title fs-14 ln-1-9">
                        Travaux de nettoyage des moquettes de parties communes
                    </span>
                    <span class="sub-content fs-12">
                        Majorité simple - <i class="fa fa-paperclip"></i> 2 pièces jointes
                    </span>
                </div>
                
                @endif
                <div class="col-2 align-c p-t-12 p-b-12">
                    <a href="#" class="trois-points">
                        <button class="ordre-btn {{ $btn }} text-white {{ $bg }}"><i class="fa fa-ellipsis-v"></i>
                        </button>
                    </a>
                </div>

            </div>
            @endfor
        </div>


    </div>
</div>


@include('layout.footer')
