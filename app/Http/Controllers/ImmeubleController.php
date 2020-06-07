<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImmeubleController extends Controller
{
    public function index()
    {
        $page_name = 'immeuble';
        $id_add = 'ajouter-immeuble';

        return view('view-all', [
            'url' => 'view-all-immeuble',
            'all_request' => 'true',
            'title' => 'Tous les immeubles',
            'add' => 'Ajouter un immeuble',
            'text_color' => 'text-green',
            'bg_color_btn' => 'bgwhite',
            'width' => 'w-17',
            'bg' => 'bggreen',
            'bg_history' => 'bg_h_green',
            'btn' => 'btn-green',
            'nav' => 'Immeubles',
            'column1' => 'Numéro d\'immeuble',
            'column2' => 'Numéro d\'immatriculation',  
            'column3' => 'Adresse',
            'column4' => 'Nombre de lots',
            'column5' => 'Nombre de copropriétaires',
            'history_1' => 'Le nouveau copriétaire (Jean Moulin) a été ajouté à l\'immeuble 09730 du 1 nom de la rue 00000 Ville.',
            'history_2' => 'Un copropriétaire (Michel Patoulatchi) a été retiré de l\'immeuble 94030 du 1 nom de la rue 00000 Ville.'
            
        ],compact('page_name','id_add'));
    }

    public function show()
    {
        $page_name = 'immeuble';
        $rue = '1 nom de la rue';
        $ville = '0000 Ville';
        $numero_immeuble = '0977380';
        $immatriculation = '965E72047802';
        $col_2_name = 'Copropriétaires';
        $col_2_btn_label_1 = 'Importer une liste';
        $col_2_btn_label_2 = 'Ajouter un copropriétaire';
        $id_col_2_btn_label_2 = 'copro';

        return view('view-detail',[
            'url' => 'view-all-immeuble',
            'all_request' => 'true',
            'show_nav' => 'true',
            'nav' => 'Immeubles',
            'text_color' => 'text-green',
            'btn' => 'btn-green',
            'label_pos_modif' => 'text-left',
            'bg' => 'bggreen'
        ],compact('page_name','rue','ville','numero_immeuble','immatriculation','col_2_name','col_2_btn_label_1','col_2_btn_label_2','id_col_2_btn_label_2'));
    }
}
