<?php

namespace Modules\Email\Http\Controllers;

use helper;
use App\Models\User;
use App\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Route;
use Modules\Email\Entities\EmailForwardModel;
use Modules\AdminProfessor\Entities\Admin;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('email::index');
    }
    public function verifyEmail($userType, $id, $hash){
        // dd('coming');
        // $helper = new helper();
        // dd($userType,$id,$hash);
        $userId = intval($id);
        $model = getUserModel($id);
        if($model == 'Admin'){
            $user = Admin::findOrFail(intval($userType));
        }

        // dd($user);

        if (! hash_equals((string) $hash, sha1($user->email))) {
            abort(403, 'Invalid verification link.');
        }

        if (! $user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
            event(new Verified($user));
        }

        return redirect(Route('home'))->with('verified', true);
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('email::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $email_details['to_id'] = '';
        $email_details['to_email'] = 'abbasrahim723@gmail.com';//useremail
        $email_details['from_id'] = 1;
        $email_details['from_email'] = 'abbasrahim705@gmail.com';//"admin@jusoutbeauty.com";
        $email_details['subject'] = 'Test';
        $email_details['message'] = "";
        // $email_details['logo'] = $emailConfigDetails['logo'];
        $email_details['module_code'] = "SELFIE REPLY";
        $email_details['template'] = 'Email::index';
        $email_details['htmlbody'] = '$htmlbody';
        $email_details['pageTitle'] = '$emailConfigDetails[]';

        $EmailForwardModel = new EmailForwardModel();

        $EmailForwardModel->sendEmail($email_details);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('email::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('email::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
