<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionnaireController extends Controller
{
    public function index()
    {

        $page_name = 'gestionnaire';
        $id_add = 'ajouter-gestionnaire';

        $datas = array([
            'nom' => 'Jacobssen',
            'prenom' => 'Amélie',
            'nb_immeuble' => '8',
            'nb_copro' => '32'
        ],
        [
            'nom' => 'Chibuzo',
            'prenom' => 'Daniel',
            'nb_immeuble' => '8',
            'nb_copro' => '28'
        ],
        [
            'nom' => 'Dvorak',
            'prenom' => 'Jean',
            'nb_immeuble' => '2',
            'nb_copro' => '7'
        ],
        [
            'nom' => 'Martin',
            'prenom' => 'Roman',
            'nb_immeuble' => '3',
            'nb_copro' => '11'
        ],
        [
            'nom' => 'Esanji',
            'prenom' => 'Boniface',
            'nb_immeuble' => '2',
            'nb_copro' => '8'
        ],
        [
            'nom' => 'Allen',
            'prenom' => 'Evelyn',
            'nb_immeuble' => '6',
            'nb_copro' => '12'
        ],
        [
            'nom' => 'Jutten',
            'prenom' => 'Margaux',
            'nb_immeuble' => '1',
            'nb_copro' => '3'
        ]);
          
        return view('view-all',[
            'url' => 'view-all-gestionnaire',
            'all_request' => 'true',
            'title' => 'Tous les gestionnaires',
            'add' => 'Ajouter un gestionnaire',
            'text_color' => 'text-orange',
            'bg_color_btn' => 'bgwhite',
            'width' => 'w-19',
            'bg' => 'bgorange',
            'btn' => 'btn-orange',
            'bg_history' => 'bg_h_orange',
            'nav' => 'Gestionnaires',
            'column1' => 'Nom',
            'column2' => 'Prénom',  
            'column3' => 'Nombre d\'immeuble',
            'column4' => 'Nombre de copropriétaire',
            'history_1' => 'Roman Martin est le nouveau gestionnaire de l\'immeuble 097380 au 1 nom de la rue 00000 Ville.',
            'history_2' => 'Un copropriétaire (Jean-Claude Dusse) est maintenant sous la gestion de Margaux Jutten.'
        ],compact('datas','page_name','id_add'));
    }

    public function show()
    {
        $page_name = 'gestionnaire';
        $email = '@gmail.com';
        $phone = '0662917309';
        $col_2_name = 'Immeubles en gestion';
        $col_2_btn_label_2 = 'Lier un immeuble';
        $id_col_2_btn_label_2 = 'lier_immeuble';

        return view('view-detail',[
            'page_name' => 'gestionnaire',
            'url' => 'view-all-gestionnaire',
            'all_request' => 'true',
            'show_nav' => 'true',
            'nav' => 'Gestionnaires',
            'text_color' => 'text-orange',
            'btn' => 'btn-orange',
            'label_pos_modif' => 'text-left',
            'bg' => 'bgorange'
        ],compact('page_name','email','phone','col_2_name','col_2_btn_label_2','id_col_2_btn_label_2'));
    }
}
