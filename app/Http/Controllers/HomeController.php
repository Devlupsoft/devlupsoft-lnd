<?php

namespace App\Http\Controllers;

use App\Helpers\Qs;
use App\Repositories\UserRepo;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    protected $user;
    public function __construct(UserRepo $user)
    {
        $this->user = $user;
    }


    public function index()
    {
        return redirect()->route('dashboard');
    }

    public function home()
    {
        return view('front.single', []);
    }

    public function enroll(Request $request)
    {
        try{
            // validate input
            $this->validate($request,[
                'phone'=>'required|max:15',
                'name'=>'required',
                'email'=>'required'
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ];

            // save to database
            $lead = DB::table('leads')->insert($data);

            // send mail
            if (!empty($lead)) {
                // send mail in queue
            }

            // exit
            exit('OK');
        } catch (\Exception $e) {
            exit('NOT OK');
        }

    }

    public function privacy_policy()
    {
        $data['app_name'] = config('app.name');
        $data['app_url'] = config('app.url');
        $data['contact_phone'] = Qs::getSetting('phone');
        $data['contact_email'] = Qs::getSetting('system_email');
        return view('pages.other.privacy_policy', $data);
    }

    public function terms_of_use()
    {
        $data['app_name'] = config('app.name');
        $data['app_url'] = config('app.url');
        $data['contact_phone'] = Qs::getSetting('phone');
        $data['contact_email'] = Qs::getSetting('system_email');
        return view('pages.other.terms_of_use', $data);
    }

    public function dashboard()
    {
        $d=[];
        if(Qs::userIsTeamSAT()){
            $d['users'] = $this->user->getAll();
        }

        return view('pages.support_team.dashboard', $d);
    }
}
