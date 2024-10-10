<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(Request $request, $category = null)
    {
        if ($request->ajax()) {
            if ($category && $category !== 'all') {
                $users = User::where('role', $category)->get();
            } else {
                $users = User::all();
            }
            return response()->json(['users' => $users]);
        }
    
        $users = User::all();
        return view('admin.content.users', compact('users'));
    }
    public function create()
    {
        return view('admin.content.form.user');
    }

    public function store(Request $request)
    {
        Log::info('Store attempt:', $request->all());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->status = $request->has('status') ? 1 : 0; // Chuyển đổi giá trị 'on' thành 1, nếu không có thì là 0
        $user->save();

        return redirect()->route('user.index');
    }

    public function filter(Request $request, $category)
    {
        $users = User::where('role', $category)->get();
        return response()->json(['users' => $users]);
    }

    public function show(Request $request ,$id)
    {   
        Log::info('Show user attempt:', $request->all());
        $user = User::find($id);

        return view('admin.details.user', compact('user'));
    }
    public function update(Request $request, $id)
    {
        Log::info('Update attempt:', $request->all());
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('user.update', $user->id)->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.destroy')->with('success', 'User deleted successfully');
    }
}
