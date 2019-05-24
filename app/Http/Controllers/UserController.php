<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function showAllUser()
    {
        $users = User::all();
        return response()->json(
            [
                'status' => 'success',
                'users' => $users->toArray()
            ], 200);
    }
    public function showSomeUser(Request $request, $id)
    {
        $user = User::find($id);
        return response()->json(
            [
                'status' => 'success',
                'user' => $user->toArray()
            ], 200);
    }
    public function whoami(){
        return Auth::user();
    }
    
    public function updateJurusan(Request $request){
        $user = User::find(Auth::user()->id);
        $user->jurusan = $request->jurusan;
        $user->save();
        return response()->json(
        [
            'status' => 'success',
        ], 200);
    }

}