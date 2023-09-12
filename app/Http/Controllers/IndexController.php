<?php

namespace App\Http\Controllers;

use App\Models\Actualauto;
use App\Models\Pagescatalog;
use App\Models\Catalog;
use App\Models\Zayavki;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use TCG\Voyager\Facades\Voyager;

class IndexController extends Controller
{

    public function index(){

		$act_auto = Actualauto::all();

		return view('index', ['act_auto'=>$act_auto]);
    }
	
	public function catalog(){
		$catalog = Catalog::all();
		//$act_auto = Actualauto::all();

		return view('catalog', ['catalog' => $catalog]);
    }

	public function ajaxszayavka(Request $request){
		$a = new Zayavki();
		$a->name = $request->name;
		$a->phone = $request->phone;
		$a->save();
		return 1;
	}
	
	public function ajaxfilter(Request $request){
		$arr_1 = explode(',', $request->res_1);
		$arr_2 = explode(',', $request->res_2);
		$arr_3 = explode(',', $request->res_3);
		$arr_4 = explode(',', $request->res_4);
		array_shift($arr_1);
		array_shift($arr_2);
		array_shift($arr_3);
		array_shift($arr_4);
		$query = Catalog::query();

		if (!empty($arr_1)) {
			$query->whereIn('marka', $arr_1);
		}

		if (!empty($arr_2)) {
			$query->whereIn('korobka', $arr_2);
		}

		if (!empty($arr_3)) {
			$query->whereIn('type_toplivo', $arr_3);
		}

		if (!empty($arr_4)) {
			$query->whereIn('year', $arr_4);
		}
		$catalog = $query->get();

		
		//$catalog = Catalog::whereIn('marka', $arr_1)->whereIn('korobka', $arr_2)->whereIn('type_toplivo', $arr_3)->whereIn('year', $arr_4)->get();
		$res = '';
			foreach($catalog as $ca){
				$res .= '<div class="actual_catalog_item actual_catalog_item25">
					<img src="/storage/'.$ca->img.'">
					<p class="h_item_fl">'.$ca->title.'</p>
					<p class="catalog_description">'.$ca->desc.'</p>
					<p class="price_new">'.$ca->price_new.' ₽</p>
					<p class="price_old">'.$ca->price_old.' ₽</p>
					<button class="btn_order_catalog" onclick="document.location.href = \'/catalog/'.$ca->id.'\';">Подробнее</button>
				</div>';
			}
		 return $res;
		
		
	}
  
  
	public function catalogindex($index){
		$one_catalog = Catalog::where('id', $index)->first();
		
		return view('one_catalog', ['one_catalog' => $one_catalog]);
	}
	
	public function pageslug($slug){
		$p = Pagescatalog::where('slug', $slug)->first();
		return view('page', ['p' => $p]);
	}
    
}


