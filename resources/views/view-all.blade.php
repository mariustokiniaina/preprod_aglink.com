@include('layout.header')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm">
			
			<span class="dashbord-title fs-24">
				{{ $title }}
			</span>

			<div class="limiter">
				<div class="container-table100">
					<div class="wrap-table100">
						<div class="table100">
							<table>
								<thead>
									<tr class="table100-head">
										<th class="column1 w-1">{{ $column1 }}</th>
										<th class="column2 w-2">{{ $column2 }}</th>
									@if ($page_name == 'immeuble')
										<th class="column3 w-172">{{ $column3 }}</th>
										<th class="column4">{{ $column4 }}</th>
										<th class="column5">{{ $column5 }}</th>
									@elseif ($page_name == 'gestionnaire')
										<th class="column3 w-3">{{ $column3 }}</th>
										<th class="column4 w-4">{{ $column4 }}</th>
									@else
										<th class="column3">{{ $column3 }}</th>
										<th class="column4">{{ $column4 }}</th>
										<th class="column5">{{ $column5 }}</th>
										@if ($page_name == 'assemblee-generale')
										<th class="column6">{{ $column6 }}</th>
										@endif	
									@endif	
									</tr>
								</thead>
								<tbody>
								@if ($page_name == 'assemblee-generale')
									@for ($i = 0; $i < 20; $i++)
										<tr href="{{ url('view-detail-ag') }}/AG093{{ $i }} " title="AG093{{ $i }}">
											<td class="column1 p-l-5">01/01/20</td>
											<td class="column2 p-l-5"><div class="online m-r-5"></div>Terminée</td>
											<td class="column3 p-l-40">0000</td>
											<td class="column4">
												<div>1 nom de la rue</div>
												<div>0000 Vile</div>
				
											</td>
											<td class="column5 p-l-8">
												<span class="p-r-8">12</span>
												<a id="btn-aglink" href="#" >
													<button class="copro-btn btn-primary">5 via AGlink</button>
												</a>
											</td>
										
											<td class="column6 p-l-33">
												<span class="m-r-8">Jean Dupont</span>
												<a href="#" class="trois-points">
													<button class="gest-btn btn-primary"><i class="fa fa-ellipsis-v"></i>
													</button>
												</a>
											</td>
										</tr>
									@endfor
								@endif

								@if ($page_name == 'immeuble')
								@for ($i = 0; $i < 20; $i++)
										<tr href="{{ url('view-detail-immeuble') }}/09798{{ $i }} " title="09798{{ $i }}">
											<td class="column1 p-l-5">09798{{ $i }}</td>
											<td class="column2 p-l-5">965E7204780{{ $i }}</td>
											<td class="column3">
												<div>1 nom de la rue</div>
												<div>0000 Vile</div></td>
											<td class="column4">{{ $i }}</td>
											<td class="column5 p-l-8">12</td>
										</tr>
									@endfor
								@endif

								@if ($page_name == 'gestionnaire')
									@foreach ($datas as $data)
									<tr href="{{ url('view-detail-gestionnaire') }}/{{ $data['nom'] }} {{ $data['prenom'] }}" title="{{ $data['nom'] }}">
											<td class="column1 p-l-5">{{ $data['nom'] }}</td>
											<td class="column2 p-l-5">{{ $data['prenom'] }}</td>
											<td class="column3">{{ $data['nb_immeuble'] }}</td>
											<td class="column4">{{ $data['nb_copro'] }}</td>
										</tr>
									@endforeach
								@endif
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>


		<div class="col-sm">
			<span class="dashbord-title fs-24">
				Historique
			</span>

			@for ($i=0; $i < 3; $i++)
			<div class="detail {{ $bg_history }}">
					<div class="p-t-12 p-b-12 p-l-20 p-r-20">
						<span class="history-detail">
						{{ $history_1 }}
						</span>

						<div class="m-t-10">
							<a class="{{ $text_color }} {{ $btn }}" href="#">
								<span class="show-detail">
									Voir les détails
								</span>
							</a>
						</div>
					</div>
			</div>

			<div class="detail {{ $bg_history }}">
					<div class="p-t-12 p-b-12 p-l-20 p-r-20">
						<span class="history-detail">
						{{ $history_2 }}
						</span>

						<div class="m-t-10">
							<a class="{{ $text_color }} {{ $btn }}" href="#">
								<span class="show-detail">
									Voir les détails
								</span>
							</a>
						</div>
					</div>
			</div>
			@endfor

		</div>
	</div>
</div>

@include('layout.footer')
