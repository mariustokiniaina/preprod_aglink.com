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
                    <div class="col-sm">
                        <a href="#"><span class="id-title mod">Modifier</span></a>
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
                            <div class="col-2 align-c "><span class="id_ordre">{{ $i }}</span></div>
                            <div class="col-8 p-t-7 p-b-7">
                            <span class="detail-title order-title">
                                Travaux de nettoyage des moquettes de parties communes
                            </span>
                                <span class="sub-content">
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



@extends('layout.footer')