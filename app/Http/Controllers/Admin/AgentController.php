<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Role::findByName('admin')->permissions;
        $caisse = Role::findByName('caissier')->permissions;
        return view('users.agent.add_agent', ['admin' => $admin, 'caisse' => $caisse]);
    }
    public function all_agent()
    {
        $users = User::where('id', '!=', Auth::user()->id)->paginate(10);
        return view('users.agent.all_agent', ['users' => $users]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->except(['_token', 'images']));
        if ($request->images) {
            $images = $request->file('images');
            $file = Str::random(5);
            $ext = $images->getClientOriginalExtension();
            $fileName = $file . '.' . $ext;
            $path = $images->storeAs(
                'images/users',
                $fileName,
                'public'
            );
            $user->images = $path;
            $user->save();
        }
        Alert::success('Success', 'Enregistrement a reussi avec success');
        return redirect()->route('agents.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        try {
            Storage::disk('public')->delete($user->images);
        } catch (Exception $exc) {
        }
        User::find($id)->delete();
        return \redirect()->route('agents.all');
    }
}
