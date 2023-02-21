<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Userinformation;
use App\Models\User;
class UserinfoController extends Controller
{
    public function index(){
        $user = Userinformation::latest()->filter(request(['search']))->paginate(6);
        //return view('admins.index', ['data' => auth()->user()->userinfo()->get()]);
       
        return view('admins.index', ['data' => $user]);    
 
    }

    public function manage(){
        $data = Userinformation::latest()->filter(request(['search']));
        return view('admins.manage', ['data' => auth()->user()->userinfo()->get()]);
       
        //return view('admins.manage', ['data' => $user]);    
 
    }

    public function create(){
        return view('admins.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => ['required', 'email', Rule::unique('userinfo', 'email')],
            'address' => 'required',
            'company' => 'required'
        ]);
        $validated['user_id'] = auth()->id();

        $profile = Userinformation::create($validated);

        return back()->with('messages','Profile created Successfully');
    }

    public function edit(Userinformation $user){
        return view('admins.edit', ['users' => $user]);
    }

    public function update(Request $request, Userinformation $user){
        $validated = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => ['required', 'email'],
            'address' => 'required',
            'company' => 'required'
        ]);

        $user->update($validated);
        return back()->with('messages','Profile Updated Successfully');

    }

    public function destroy(Userinformation $user){
        $user->delete();
        return back()->with('messages','Profile Deleted Successfully');
    }
}
