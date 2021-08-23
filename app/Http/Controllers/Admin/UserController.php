<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;
use Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        is_permitted('users');
        $users = User::with('role')->get();
        return view('admin.user.manage', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $roles = UserRole::where('status', 'active')->orderBy('sl', 'asc')->get();
        return view('admin.user.create', compact('roles'));
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('staff.login');
    }

    public function no_access()
    {
        return view('admin.no-access');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed'],
            'status' => ['required'],
        ]);

        /*$user_img       = $request->file('image');
    $userImagesName = date('Ymdhis') . uniqid() . '.' . $user_img->getClientOriginalExtension();

    $user_cover_img      = $request->file('cover_image');
    $userCoverImagesName = date('Ymdhis') . uniqid() . '.' . $user_cover_img->getClientOriginalExtension();*/

        try {
            User::create([
                'role_id' => $request->user_role,
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
                'status' => $request->status,
                'permissions' => json_encode($request->permission),
                /*'image' => $userImagesName,
                'cover_image' => $userCoverImagesName,*/
            ]);
            /*if ($user) $user_img->storeAs('users', $userImagesName);
            if ($user) $user_cover_img->storeAs('users', $userCoverImagesName);*/
            $message = "User Successfully Added";

        } catch (Exception $e) {
            $status  = false;
            $message = "Fail";
        }

        /*event(new Registered($user));
        Auth::login($user);*/

        return response()->json([
           'status' => $status ?? true,
           'message' => $message,
        ]);

        //return redirect()->route('staff.users.index', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = UserRole::where('status', 'active')->orderBy('sl', 'asc')->get();
        return view('admin.user.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            $user->name    = $request->name;
            $user->email   = $request->email;
            $user->mobile  = $request->mobile;
            $user->status  = $request->status;
            $user->role_id = $request->user_role;

            if ($request->current_password !== null) {
                $request->validate([
                    'new_password' => 'required|same:confirm_password',
                ]);
                if (Hash::check($request->current_password, $user->password) === true) {
                    $user->password = Hash::make($request->new_password);
                } else {
                    session()->flash('does_not_patch_password', 'In valid Password');
                    return redirect()->back();
                }
            }
            if ($request->hasFile('image')) {
                $profileImg     = $request->file('image');
                $userImagesName = date('Ymdhis') . uniqid() . '.' . $profileImg->getClientOriginalExtension();
                if (file_exists(asset('uploads/users/' . $user->image))) {
                    unlink(file_exists(public_path('/uploads/users/' . $user->image)));
                }
                $user->image = $userImagesName;
                $profileImg->storeAs('uploads/users/', $profileImg);
            }
            if ($request->hasFile('cover_image')) {
                $coverImage     = $request->file('cover_image');
                $coverImageName = date('Ymdhis') . uniqid() . '.' . $coverImage->getClientOriginalExtension();
                if (file_exists(asset('uploads/users/' . $user->cover_image))) {
                    unlink(file_exists(public_path('/uploads/users/' . $user->cover_image)));
                }
                $user->cover_image = $coverImageName;
                $coverImage->storeAs('uploads/users/', $coverImageName);
            }

            $user->update();

            Session()->flash('success', 'User Updated!');
        } catch (Exception $e) {
            Session()->flash('fail', 'User Not Updated!');
        }
        /*$id = base64_decode($request->id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,id,' . $id,
            'password' => ['required', 'confirmed'],
            'status' => ['required'],
            'image' => 'required',
        ]);
        $user = User::where('id', $id)->first();
        if ($request->current_password !== null) {
            $request->validate([
                'new_password' => 'required|same:confirm_password',
            ]);
            if (Hash::check($request->current_password, $user->password) === true){
                $user->password = Hash::make($request->new_password);
            }else{
                session()->flash('does_not_patch_password', 'In valid Password');
                return redirect()->back();
            }
        }
        if ($request->hasFile('image')){
            $profileImg      = $request->file('image');
            $userImagesName = date('Ymdhis') . uniqid() . '.' . $profileImg->getClientOriginalExtension();
            if (file_exists(asset('uploads/users/'.$user->image))){
                unlink(file_exists(public_path('/uploads/users/'.$user->image)));
            }
            $user->image = $userImagesName;
            $profileImg->storeAs('uploads/users/', $profileImg);
        }
        if ($request->hasFile('cover_image')){
            $coverImage      = $request->file('cover_image');
            $coverImageName = date('Ymdhis') . uniqid() . '.' . $coverImage->getClientOriginalExtension();
            $user->image = $coverImageName;
            $coverImage->storeAs('uploads/users/', $coverImageName);
        }
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->role_id = $request->user_role;
        $user->save();

        return redirect()->back()->with('update_success', 'Yah! user has been successfully updated.');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user){
            $user->delete();
            $message = "User successfully deleted";
        }else{
            $status = false;
            $message = "Fail";
        }

        return response()->json([
            'status' => $status ?? true,
            'message' => $message
        ]);

        /*$user = User::find($id);
        $path = public_path('uploads/users/' . $user->image);

        if (file_exists($path)) {
            unlink($path);
        }
        $user->delete();

        return redirect()->back()->with([
            'type' => 'success',
            'message' => 'User deleted successfully '
        ]);*/
    }


    public function Status(Request $request)
    {
        if ($request->ajax()) {
            $user = User::where('id', $request->id)->first();
            if ($user) {
                $user->status = $request->status;
                $user->save();
                return "Success";
            }
        }
    }


    public function profile($id)
    {
        $users = User::findOrFail($id);
        $roles = UserRole::all();
        return view('admin.user.profile', compact('users', 'roles'));
    }


}
