<?php

namespace Modules\Auth\Http\Controllers;
// namespace Modules\AdminProfessor\Entities;
// namespace Modules\AdminProfessor\Entities;


// use App\Admin as AppAdmin;
// use Dotenv\Util\Str;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;
use Modules\AdminProfessor\Entities\Admin;
use Illuminate\Contracts\Support\Renderable;
use Modules\Email\Entities\EmailForwardModel;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('auth::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('auth::create');
    }
    public function loginForm(){
        return view('auth::login');

    }
    public function loginAttempt(Request $request){
            // dd($request->all());
    $data = $request->validate([
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string'],
    ]);
    // dd($data);
    // $student = Student::where('email', $data['email'])->first();
    // $professor = Professor::where('email', $data['email'])->first();
    $admin = Admin::where('email', $data['email'])->first();
    // $activityController = new ActivityController;
    // dd($admin);
    // if ($student) {
    //     if (Auth::guard('student')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
    //         // Store the activity

    //         $activityController->store($student->id,'login','read','Logged in Successfully','completed');
    //         return redirect()->route('student.home');
    //     }else{
    //          // Store the activity
    //         $activityController->store($student->id,'login','read','Logged in Failed','rejected');
    //         return back()->with('error','Credentials did not match');
    //     }
    // }

    // if ($professor) {
    //     dd($professor);
    //     if (Auth::guard('professor')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
    //         // Store the activity
    //         $activityController->store($professor->id,'login','read','Logged in Successfully','completed');
    //         return redirect()->route('professorDashboard');
    //     }else{
    //         $activityController->store($professor->id,'login','read','Logged in Failed','rejected');
    //         return back()->with('error','Credentials did not match');
    //     }

    // }
        // dd($admin);
    if ($admin) {
        if (Hash::check($data['password'], $admin->password)) {
            // dd('matched');
           $check =  Auth::guard('admin')->login($admin);
        //    dd($check);
            return redirect(route('adminDashboard'))->with('success','Logged In Succesfully');
        }else{
            return back()->with('error','Credentials did not match');
        }


        // if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
        //     dd($admin);
        //      // Store the activity
        //     // $activityController->store($admin->id,'login','read','Logged in Successfully','completed');
        //     return redirect()->route('home');
        // }else{
        //     dd('did not work');
        //     // Store the activity
        //     // $activityController->store($admin->id,'login','read','Logged in Failed','rejected');
        //     return back()->with('error','Credentials did not match');
        // }

    }
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            // Get user data from Google
            $googleUser = Socialite::driver('google')->user();
            // dd($googleUser);
            // Check if the user with this email already exists in your database
            $user = Admin::where('email', $googleUser->getEmail())->first();
            // dd($user);
            if ($user !== null) {
                // User exists, log them in
                Auth::guard('admin')->login($user);
            } else {
                // dd('coming');
                // User doesn't exist, create a new user record
                $newUser = new Admin();
                $newUser->name = $googleUser->getName();
                $newUser->email = $googleUser->getEmail();
                $newUser->imagePath = $googleUser->getAvatar();
                $newUser->email_verified_at = now();
                // dd($newUser->getPassword());
                // dd($newUser->email);
                // You can set other attributes as needed
                $newUser->save();
                // dd($newUser);
                // Log in the newly created user
                Auth::guard('admin')->login($newUser);
            }

            // Redirect to a protected page or dashboard
            return redirect(route('adminDashboard'))->with('success','Logged in Successfully');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            // Handle any exceptions that may occur during the OAuth process
            return redirect(route('login'))->with('error', 'Authentication failed.');
        }
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        try {
            // Get user data from Google
            $facebookUser = Socialite::driver('facebook')->user();
            dd($facebookUser);
            // Check if the user with this email already exists in your database
            $user = Admin::where('email', $facebookUser->getEmail())->first();
            // dd($user);
            if ($user !== null) {
                // User exists, log them in
                Auth::login($user);
            } else {
                // dd('coming');
                // User doesn't exist, create a new user record
                $newUser = new Admin();
                $newUser->name = $facebookUser->getName();
                $newUser->email = $facebookUser->getEmail();
                $newUser->email_verified_at = now();
                // dd($newUser->getPassword());
                // dd($newUser->email);
                // You can set other attributes as needed
                $newUser->save();
                // dd($newUser);
                // Log in the newly created user
                Auth::login($newUser);
            }

            // Redirect to a protected page or dashboard
            return redirect(route('home'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            // Handle any exceptions that may occur during the OAuth process
            return redirect(route('login'))->with('error', 'Authentication failed.');
        }
    }
    public function forgotPasswordForm(){
        return view('auth::forgotPassword');
    }
    public function forgotPasswordAttempt(Request $request){
        // dd($request['email']);
        $validatedData = $request->validate([
            'email' => 'email'
        ]);

        $user = Admin::where('email',$validatedData['email'])->first();
        if($user){
            $status = Password::sendResetLink(
                $validatedData, // The user's email address
                function ($user, $token) {
                    // Save the token in the password_reset_tokens table
                    DB::table('password_reset_tokens')->updateOrInsert(
                        ['email' => $user->email],
                        ['token' => $token, 'created_at' => now()]
                    );

                    // Send the password reset link to the user's email
                    $user->sendPasswordResetNotification($token);
                }
            );

            return $status === Password::RESET_LINK_SENT
                ? back()->with('status', __($status))
                : back()->withErrors(['email' => __($status)]);
        }
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'user_type' => ['required']
        ]);

        // dd($request);

        $superAdmin = Admin::count();
        // dd($superAdmin);

        switch ($request['user_type']) {
            // case 'student':
            //     $user = Student::create([
            //         'name' => $request['name'],
            //         'email' => $request['email'],
            //         'password' => Hash::make($request['password']),
            //     ]);
            //     break;
            // case 'professor':
            //     $user = Professor::create([
            //         'name' => $request['name'],
            //         'email' => $request['email'],
            //         'password' => Hash::make($request['password']),
            //     ]);
            //     break;
            case 'admin':
                if($superAdmin == 0){
                    $user = Admin::create([
                        'name' => $request['name'],
                        'email' => $request['email'],
                        'password' => Hash::make($request['password']),
                        'status' => 'active'
                    ]);
                }
                $user = Admin::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                    'status' => 'inactive'
                ]);
                break;
        }
        $EmailForwardModel = new EmailForwardModel();
        // $email_details['to_id'] = $user->id;
        $email_details['to_email'] = $request['email'];//useremail
        // $email_details['from_id'] = 1;
        $email_details['from_email'] = 'abbasrahim705@gmail.com';
        $email_details['subject'] = 'Email Verification';
        $email_details['message'] = "";
        // generating secure verification url
        $secureVerificationUrl = $EmailForwardModel->secureVerficationUrl($user);
        // $email_details['logo'] = $emailConfigDetails['logo'];
        // $email_details['module_code'] = "SELFIE REPLY";
        // $email_details['template'] = 'Email::index';
        $email_details['htmlbody'] = '<h3>Hello '.$user->email.',</h3><p>Thank you for registering on our website.
        To complete your registration, please click the link below to verify your email address:</p>
        <p><a href='.$secureVerificationUrl.'>'.$secureVerificationUrl.'</a></p>

        <p>If you did not create this account, you can safely ignore this email.</p>

        <p>Best regards,</p>
        <p>LMS</p>
        ';
        $email_details['pageTitle'] = 'Email Verification';



        $EmailForwardModel->sendEmail($email_details);

        // dd($user);

        // Auth::login($user);
        // Store the activity
        // $activityController = new ActivityController;
        // $activityController->store($user->id,'register','create','Registered  Successfully','completed');
        return redirect(route('home'));

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('auth::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('auth::edit');
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
    public function logout(Request $request){
        $admin = Auth::guard('admin')->user();
        // $professor = Auth::guard('professor')->user();
        // $student = Auth::guard('student')->user();
        if($admin){
            Auth::guard('admin')->logout();
        }
        // elseif($professor){
        //     Auth::guard('professor')->logout();
        // }
        // elseif($student){
        //     Auth::guard('student')->logout();
        // }


        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('home'))->with('success','Logged Out Successfully');
    }
}
