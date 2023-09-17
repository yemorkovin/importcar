<?php

namespace App\Http\Controllers;


use App\Models\Sports;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class IndexController extends Controller
{

    public function index(Request $request){

    	$sports = Sports::all();
		return view('index', ['request' => $request, 'sports' => $sports]);
    }
	
	public function reg(Request $request){
		$data = $request->all();
		$user = new User();
		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->phone = $data['phone'];
		$user->password = Hash::make($data['password']);
		$user->cur = $data['cur'];
		$user->money = 0;
		$user->bonus = 0;
		$user->role_id = 2;
		$user->save();
		return 1;
		
	}
    public function t(Request $request){
		
		
	}
	public function editprofile(Request $request)
	{

		if(!empty($request->password_old) && !empty($request->password_new) && !empty($request->password_new_rep)){
			if (Hash::check($request->password_old, $request->user()->password) && $request->password_new == $request->password_new_rep) {				
				User::where('id', auth()->user()->id)->update([
					'password' => Hash::make($request->password_new)
				]);
		    }
		    else{
		    	$request->session()->put('error', '1');
		    }
		}
		
	    if ($request->hasFile('avatar')) {
	        $user = auth()->user();
	        $avatar = $request->file('avatar');
	        $avatarPath = '/public/users/'; // Директория для сохранения аватаров
	        $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
	        $avatar->storeAs($avatarPath, $avatarName);
	        $user->avatar = 'users/' . $avatarName;
	        $user->save();
	    }
	    $cur = 'RUB';
	    if(isset($request->currency) && $request->currency == 'KZT'){
			$cur = 'KZT';
	    } 
	    User::where('id', auth()->user()->id)->update([
					'name' => $request->name_edit,
					'email' => $request->email_edit,
					'phone' => $request->phone_edit,
					'cur'=>$cur
				]);
	    if (!$request->session()->exists('error')){
	    	$request->session()->put('suc', '1');
	    }
	    
	    return redirect('/#ppUser');
	}


	public function auth(Request $request){
		$data = $request->all();

		//User::where('email', $data['email_login'])->where('password', $data['password_login'])

		$credentials = [
		    'email' => $data['email_login'],
		    'password' => $data['password_login'],
		];

		if (Auth::attempt($credentials)) {
		    // Пользователь успешно аутентифицирован
		    return 1;
		} else {
		    // Пользователь не аутентифицирован
		    return 0;
		}
	}

	public function logout(){
		Auth::logout();

        return redirect('/');
	}

	public function policy(Request $request){
		return view('policy', ['request' => $request]);
	}

	public function defreturn(Request $request){
		return view('defreturn', ['request' => $request]);
	}
	public function rules(Request $request){
		return view('rules', ['request' => $request]);
	}

	private function getTours($id){
		$q = "https://odds24.online/v1/tournaments/".$id."/0/live/ru";
		$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => $q,
				//CURLOPT_URL => "https://testkey.odds24.online",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"package: devkey009817112023"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			$data_leages = json_decode($response);
			/*if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				
			}*/
			$arr = $data_leages->body;
			$arr_new = [];
			$i=0;
			$j=1;
			foreach($arr as $ar){
				$arr_new[$i]['id_tourn'] = $ar->id;
				$arr_new[$i]['name'] = $ar->name;
				$arr_new[$i]['sport_id'] = $ar->sport_id;
				$arr_new[$i]['country_id'] = $ar->country_id;
				$arr_new[$i]['icon'] = $j;
				if($j==9){
					$j=1;
				}
				$j++;
				$i++;
			}
		return $arr_new;

	}

	private function getGameId($idgame){
		$q = "https://odds24.online/v1/event/".$idgame."/list/live/ru";
		$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => $q,
				//CURLOPT_URL => "https://testkey.odds24.online",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"package: devkey009817112023"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			$events = json_decode($response);
			return $events->body;
	}

	private function getEvents($idsport, $idtourn){
		$q = "https://odds24.online/v1/events/".$idsport."/".$idtourn."/sub/5/live/ru";
		$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => $q,
				//CURLOPT_URL => "https://testkey.odds24.online",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"package: devkey009817112023"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			$events = json_decode($response);
			return $events->body;
	}
	private function getOneSport($idsport){
		$q = "https://odds24.online/v1/sports/live/ru";
		$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => $q,
				//CURLOPT_URL => "https://testkey.odds24.online",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"package: devkey009817112023"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			$sports = json_decode($response)->body;
			$title = '';
			foreach($sports as $sport){
				if($sport->id == $idsport){
					$title = $sport->name;
				}
			}
			return $title;
	}


	private function getSports(){
		$q = "https://odds24.online/v1/sports/live/ru";
		$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => $q,
				//CURLOPT_URL => "https://testkey.odds24.online",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"package: devkey009817112023"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			$sports = json_decode($response)->body;
			$ar_sport = [];
			$i=0;
			foreach($sports as $sport){
				$ar_sport[$i]['id_sport'] = $sport->id;
				$ar_sport[$i]['counter'] = $sport->counter;	
				$i++;
			}
			return $ar_sport;
	}

	public function bets($id, Request $request){
		$arr_res_sport = [];
		$sports = Sports::all();
		$sps = $this->getSports();
		$g=0;
		foreach($sports as $sport){
			$arr_res_sport[$g]['name'] = $sport->title;
			$arr_res_sport[$g]['id_sport'] = $sport->id_api;
			$arr_res_sport[$g]['img'] = $sport->img;
			foreach($sps as $sp){
				if($sp['id_sport']==$sport->id_api){
					$arr_res_sport[$g]['counter'] = $sp['counter'];
				}
			}
			$g++;
		}
		
		//print_r($arr_res_sport);
		//exit;

		$arr_new = $this->getTours($id);
		$title_name = $this->getOneSport($id);
		
		$banner = 'bn1.jpg';
		switch ($id) {
			case 1:
				$banner = 'bn1.jpg';
			break;
			case 2:
				$banner = 'bn3.png';
			break;
			case 4:
				$banner = 'bn4.png';
			break;
			case 6:
				$banner = 'bn6.png';
			break;
			case 3:
				$banner = 'bn5.png';
			break;
			default:
				$banner = 'bn1.jpg';
			break;

		}
		return view('bets', ['arr_res_sport'=>$arr_res_sport,'request' => $request, 'data_leages' => $arr_new, 'title_name'=>$title_name, 'banner'=>$banner]);
	}



	public function betsid($idsport, $idtourn, Request $request){
		$arr_res_sport = [];
		$sports = Sports::all();
		$sps = $this->getSports();
		$g=0;
		foreach($sports as $sport){
			$arr_res_sport[$g]['name'] = $sport->title;
			$arr_res_sport[$g]['id_sport'] = $sport->id_api;
			$arr_res_sport[$g]['img'] = $sport->img;
			foreach($sps as $sp){
				if($sp['id_sport']==$sport->id_api){
					$arr_res_sport[$g]['counter'] = $sp['counter'];
				}
			}
			$g++;
		}
		$title_name = $this->getOneSport($idsport);
		
		$arr_new = $this->getTours($idsport);
		$events = $this->getEvents($idsport, $idtourn);
		$events_list = [];
		$i=0;
		foreach($events[0]->events_list as $event){
			$events_list[$i]['game_start']= $event->game_start;
			$events_list[$i]['game_id']= $event->game_id;
			$events_list[$i]['opp_1_name_ru']= $event->opp_1_name_ru;
			$events_list[$i]['opp_2_name_ru']= $event->opp_2_name_ru;
			$events_list[$i]['1x2']=[];
			$events_list[$i]['two']=[];
			$events_list[$i]['total']=[];
			$events_list[$i]['b']=[];
			$events_list[$i]['m']=[];
			$a1=0;
			$a2=0;
			$a3=0;
			$a4=0;
			$a5=0;
			foreach($event->game_oc_list as $list){
				
				if($list->oc_group_name == "1x2"){
					$events_list[$i]['1x2'][$a1]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['1x2'][$a1]['oc_name'] = $list->oc_name;
					$a1++;
				}
				if($list->oc_group_name == "Двойной шанс"){
					$events_list[$i]['two'][$a2]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['two'][$a2]['oc_name'] = $list->oc_name;
					$a2++;
				}
				if($list->oc_group_name == "Тотал"){
					$events_list[$i]['total'][$a3]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['total'][$a3]['oc_name'] = $list->oc_name;
					$a3++;
				}
				if(strpos($list->oc_name, "Больше") !== false){
					$events_list[$i]['b'][$a4]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['b'][$a4]['oc_name'] = $list->oc_name;
					$a4++;
				}
				if(strpos($list->oc_name, "Меньше") !== false){
					$events_list[$i]['m'][$a5]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['m'][$a5]['oc_name'] = $list->oc_name;
					$a5++;
				}
				
			}
			$i++;
			
		}

		$title = $events[0]->tournament_name;
		//print_r($events);
		//print_r($events_list);	
		//exit;
		$banner = 'bn1.jpg';
		switch ($idsport) {
			case 1:
				$banner = 'bn1.jpg';
			break;
			case 2:
				$banner = 'bn3.png';
			break;
			case 4:
				$banner = 'bn4.png';
			break;
			case 6:
				$banner = 'bn6.png';
			break;
			case 3:
				$banner = 'bn5.png';
			break;
			default:
				$banner = 'bn1.jpg';
			break;

		}
		return view('bets', ['arr_res_sport'=>$arr_res_sport,'request' => $request, 'data_leages' => $arr_new, 'title' => $title, 'events_list' => $events_list, 'title_name'=>$title_name, 'banner'=>$banner]);
	}
	public function betsgameid($idsport, $idtourn, $idgame, Request $request){

		$gameone = $this->getGameId($idgame);
		//print_r($gameone);
		//exit;
		$arr_res_sport = [];
		$sports = Sports::all();
		$sps = $this->getSports();
		$g=0;
		foreach($sports as $sport){
			$arr_res_sport[$g]['name'] = $sport->title;
			$arr_res_sport[$g]['id_sport'] = $sport->id_api;
			$arr_res_sport[$g]['img'] = $sport->img;
			foreach($sps as $sp){
				if($sp['id_sport']==$sport->id_api){
					$arr_res_sport[$g]['counter'] = $sp['counter'];
				}
			}
			$g++;
		}
		$title_name = $this->getOneSport($idsport);
		
		$arr_new = $this->getTours($idsport);
		$events = $this->getEvents($idsport, $idtourn);
		$events_list = [];
		$i=0;
		foreach($events[0]->events_list as $event){
			$events_list[$i]['game_start']= $event->game_start;
			$events_list[$i]['game_id']= $event->game_id;
			$events_list[$i]['opp_1_name_ru']= $event->opp_1_name_ru;
			$events_list[$i]['opp_2_name_ru']= $event->opp_2_name_ru;
			$events_list[$i]['1x2']=[];
			$events_list[$i]['two']=[];
			$events_list[$i]['total']=[];
			$events_list[$i]['b']=[];
			$events_list[$i]['m']=[];
			$a1=0;
			$a2=0;
			$a3=0;
			$a4=0;
			$a5=0;
			foreach($event->game_oc_list as $list){
				
				if($list->oc_group_name == "1x2"){
					$events_list[$i]['1x2'][$a1]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['1x2'][$a1]['oc_name'] = $list->oc_name;
					$a1++;
				}
				if($list->oc_group_name == "Двойной шанс"){
					$events_list[$i]['two'][$a2]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['two'][$a2]['oc_name'] = $list->oc_name;
					$a2++;
				}
				if($list->oc_group_name == "Тотал"){
					$events_list[$i]['total'][$a3]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['total'][$a3]['oc_name'] = $list->oc_name;
					$a3++;
				}
				if(strpos($list->oc_name, "Больше") !== false){
					$events_list[$i]['b'][$a4]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['b'][$a4]['oc_name'] = $list->oc_name;
					$a4++;
				}
				if(strpos($list->oc_name, "Меньше") !== false){
					$events_list[$i]['m'][$a5]['oc_rate'] = $list->oc_rate;
					$events_list[$i]['m'][$a5]['oc_name'] = $list->oc_name;
					$a5++;
				}
				
			}
			$i++;
			
		}

		$title = $events[0]->tournament_name;
		//print_r($events);
		//print_r($events_list);	
		//exit;
		$banner = 'bn1.jpg';
		switch ($idsport) {
			case 1:
				$banner = 'bn1.jpg';
			break;
			case 2:
				$banner = 'bn3.png';
			break;
			case 4:
				$banner = 'bn4.png';
			break;
			case 6:
				$banner = 'bn6.png';
			break;
			case 3:
				$banner = 'bn5.png';
			break;
			default:
				$banner = 'bn1.jpg';
			break;

		}
		return view('game', ['gameone'=>$gameone, 'arr_res_sport'=>$arr_res_sport,'request' => $request, 'data_leages' => $arr_new, 'title' => $title, 'events_list' => $events_list, 'title_name'=>$title_name, 'banner'=>$banner]);
	}
}


