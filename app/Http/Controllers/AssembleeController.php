<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssembleeController extends Controller
{
    public function index()
    {
        
        $page_name = 'assemblee-generale';
        $id_add = 'creer-ag';

        return view('view-all',[
            'url' => 'view-all-ag',
            'all_request' => 'true',
            'title' => 'Toutes les assemblées générales',
            'add' => 'Créer un AG',
            'text_color' => 'text-blue',
            'bg_color_btn' => 'bgwhite',
            'width' => 'w-14',
            'bg' => 'bgblue',
            'bg_history' => 'bg_h_blue',
            'btn' => 'btn-blue',
            'nav' => 'Assemblées générales',
            'column1' => 'Date',
            'column2' => 'Statut',  
            'column3' => 'Numéro d\'immeuble',
            'column4' => 'Adresse',
            'column5' => 'Copropriétaires',
            'column6' => 'Gestionnaire',
            'history_1' => 'L\'assemblée générale du 1 avenue du Soleil (07849) vient de s\'est clotiurée hier à 18h33.',
            'history_2' => 'Jean Dupont a créé une assemblée générale pour le 4 avenue du Soleil (07844) le mardi 19 mai 2020.'
        ],compact('page_name','id_add'));
    }

    public function show()
    {
        $page_name = 'assemblee-generale';
        $rue = '13 rue Montebello';
        $ville = '78000 Versailles';
        $col_2_name = 'Ordre du jour';
        $col_2_btn_label_2 = 'Ajouter une résolution';
        $id_col_2_btn_label_2 = 'resolution';

        return view('view-detail',[
            'page_name' => 'assemblee-generale',
            'url' => 'view-all-ag',
            'start' => 'Commencer l\'AG',
            'all_request' => 'true',
            'show_nav' => 'true',
            'nav' => 'Assemblées générales',
            'text_color' => 'text-blue',
            'btn' => 'btn-blue',
            'label_pos_modif' => 'text-right',
            'bg' => 'bgblue'
        ],compact('page_name','rue','ville','col_2_name','col_2_btn_label_2','id_col_2_btn_label_2'));
    }
}
