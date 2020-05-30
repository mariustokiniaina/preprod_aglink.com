@include('layout.header')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm">
			<span class="dashbord-title">
				Toutes les assemblées générales
			</span>
	

			<div class="limiter">
				<div class="container-table100">
					<div class="wrap-table100">
						<div class="table100">
							<table>
								<thead>
									<tr class="table100-head">
										<th class="column1">Date</th>
										<th class="column2">Status</th>
										<th class="column3">Numéro d'immeuble</th>
										<th class="column4">Adresse</th>
										<th class="column5">Copropriétaires</th>
										<th class="column6">Gestionnaire</th>
									</tr>
								</thead>
								<tbody>

									<?php for ($i=0; $i < 20 ; $i++) { 
										$text = '<tr>
										<td class="column1 p-l-5">01/01/20</td>
										<td class="column2 p-l-5"><div class="online m-r-5"></div>Terminée</td>
										<td class="column3 p-l-40">0000</td>
										<td class="column4">
											<div>1 nom de la rue</div>
											<div>0000 Vile</div>
			
										</td>
										<td class="column5 p-l-8">
											<span class="p-r-8">12</span>
												<a href="#">
													<button class="copro-btn btn-primary">5 via AGlink
													</button>
												</a>
										</td>
										<td class="column6 p-l-33">
											<span class="m-r-8">Jean Dupont</span>
											<a class="trois-points">
												<button class="gest-btn btn-primary"><i class="fa fa-ellipsis-v"></i>
												</button>
											</a>
										</div>


										</td>
									</tr>';
										echo $text;
									} 
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>


		<div class="col-sm">
			<span class="dashbord-title">
				Historique
			</span>

			<?php for ($i=0; $i < 5; $i++) { 
				$text = '
			<div class="detail ag-bg-color">
					<div class="p-t-12 p-b-12 p-l-20 p-r-20">
						<span class="history-detail">
							L\'assemblée générale du 1 avenue du Soleil (07849) vient de s\'est cloturée hier à 18h33.
						</span>

						<div class="m-t-10">
							<a class="btn-link-hs" href="#">
								<span class="show-detail">
									Voir les détails
								</span>
							</a>
						</div>
					</div>
			</div>

			<div class="detail ag-bg-color">
					<div class="p-t-12 p-b-12 p-l-20 p-r-20">
						<span class="history-detail">
							Jean Dupont a crée une assemblée générale pour le 4 avenue du Soleil (07844) le mardi 19 mai 2020.
						</span>

						<div class="m-t-10">
							<a class="btn-link-hs" href="#">
								<span class="show-detail">
									Voir les détails
								</span>
							</a>
						</div>
					</div>
			</div>';

			echo $text;
			} ?>

		</div>
	</div>
</div>	
@include('layout.footer')
