<?php
namespace Mugaco\Pack;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

//use Mugaco\Pack\Facace as T;

//use Mugaco\Pack\Facade as Dedo;

//use App\Models\User;

//use Mugaco\Pass\Notifications\VerifyEmail;

use Mugaco\Cms\Models\Web;
use Mugaco\Cms\Models\Publication;

use App\Models\User;

use Database\Factories\UserFactory;

use Mugaco\MarketPlace\Models\TransactionObject as Item;

class PackController extends Controller
{
    public function index(Request $request)
    {

        $item = Item::find('5fba6b009a2bfe61024c6b93');
        $item->unset('name');
        dd();
        $item->push('messages', [
            'from' => 'Jane Doe',
            'message' => 'Hi John',
        ]);
        dd($item);
        //dd(Publication::all());

        $request->merge([
            'page'=>1,
            'itemsPerPage'=>10
        ]);
        
        
        $ps = User::where('id','>',0)->collection($request);

        return response()->json($ps,200);
        // for($i=200;$i<400;$i++){
        //     $u = new UserFactory;
        //     User::create($u->definition());
        // }


        // dd($u->definition());


        // Web::create([
        //      'title'=>'Web user 9 numreo 2',
        //      'user_id'=>9
        // ]);

        $p = Publication::first();

           // dd($p->web);

        $user = User::find(7);
        
        $web = $user->webs()->first();

        $w = Web::find($web->_id);

        dd($web->_id,$w->publications);



       // $webs = Web::all();
        //$web = Web::where('user_id',7)->first();

        $web = Web::find('5fa7cc0d7c4dc7489f4686e4');
        dd($web);
        //$web->title = "Web user 9 numreo 1";
        //$web->user_id = 9;
        //$web->save();
       
        // Web::create([
        //     'title'=>'Web user 7 numreo 1'
        // ]);
        dd($web);
        //$user = User::find(7);

        //$user->notify( new VerifyEmail($user,'https://foortro.com'));
        
        // $ss = Dedo::test();

        // return response()->json($ss, 200);
        // return response()->json(\Pack::test(), 200);
        return response()->json($request->all(), 200);
    }
}
