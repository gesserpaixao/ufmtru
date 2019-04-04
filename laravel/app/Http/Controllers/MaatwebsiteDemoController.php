<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use App\Item;

use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;

class MaatwebsiteDemoController extends Controller

{

	public function importExport()

	{

		return view('importExport');

	}

	public function downloadExcel($type)

	{

		$data = Item::limit(5)->get()->toArray();

		return Excel::create('Cardapio_exemplo', function($excel) use ($data) {

			$excel->sheet('mySheet', function($sheet) use ($data)

	        {

				$sheet->fromArray($data);

	        });

		})->download($type);

	}

	public function importExcel()

	{

		if(Input::hasFile('import_file')){

			$path = Input::file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {

			})->get();

			if(!empty($data) && $data->count()){

				foreach ($data as $key => $value) {

					$insert[] = ['data' => $value->data, 'cafe' => $value->cafe, 'almoco' => $value->almoco, 'jantar' => $value->jantar,
					'almoco_vegetariano' => $value->almoco_vegetariano, 'jantar_vegetariano' => $value->jantar_vegetariano
				
				];

				}

				if(!empty($insert)){

					DB::table('items')->insert($insert);

					 /*return[
						
						'success' => true,
						'message' => 'Recarregado com Sucesso',
						view('importExport')
					];
					return 
					
					view('importExport');*/
					if ($insert)
        				return redirect()
                    	->route('importExport')
                    	->with('success', 'Cardápio iserido com sucesso');
 
					


				}

			}

		}

		return redirect()
			->route('importExport')
        	->with('error', 'Cardápio não foi inserido');
	}

}