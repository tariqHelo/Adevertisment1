<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Admin;
use App\Models\Link;
use App\Models\Category;
use App\Models\UserLink;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use App\Notifications\UserCreated;
use App\Notifications\UserUpdated;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\User\EditRequest;
use App\Http\Requests\User\UserRequest;
use App\Http\Requests\ChangePasswordRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request['password']=bcrypt($request['password']);
        $user = User::create($request->all());

        $user->notify(new UserCreated($user));
        
        session()->flash("msg", "s: Created Successfully");
        return redirect(route("users.index"));
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */



  

    public function update(UserRequest $request, $id)
    {
        $request['password'] = bcrypt($request['password']);
        $user = Admin::find($id);
        $user->update($request->all());
        //$user->notify(new UserUpdated($user,Category::all()));
        Mail::to($user->email)->send(new OrderShipped(Category::all()));

        session()->flash("msg", "i:User Updated Successfully");
        return redirect(route("users.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function changePassword(){
        return view('dashboard.user.change_password');
    }
    public function postChangePassword(ChangePasswordRequest $request){
        $hasher = app('hash');
        if ($hasher->check($request->current_password, auth()->user()->password)) {
            // Success
            $user = Admin::find(auth()->user()->id);
            $user->update(['password'=>bcrypt($request->new_password)]);
            session()->flash("msg", "s:Password updated Successfully");
            return redirect(route("change-password"));
        }
        else{
            session()->flash("msg", "e:Invalid Current Password");
            return redirect(route("change-password"));
        }
    }




}
