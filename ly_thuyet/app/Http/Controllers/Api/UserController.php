<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
class UserController extends Controller
{
    public function index()
    {
        $items = User::all();
        $data = [
            'success' => true,
            'data'    => $items
        ];
        return response()->json($data);
    }

    public function show($id)
    {
        $item = User::find($id);
        $data = [
            'success' => true,
            'data'    => $item
        ];
        return response()->json($data);
    }
    public function store(StoreUserRequest $request)
    {
        // kiem tra du lieu gui len
        // echo '<pre>';
        // print_r( $request->all() );
        // die();
        //xac thu du lieu
        //Validator
        //FormRequest
        //luu du lieu
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->image = '';
        $user->birthday = date('Y-m-d');
        try {
            $user->save();
            $data = [
                'success' => true,
                'data'    => $user
            ];
        } catch (\Exception $e) {
            $data = [
                'success' => false,
                'message'    => $e->getMessage()
            ];
        }
        return response()->json($data);
        //tra ve du lieu vua luu
    }
    public function update(Request $request, $id)
    {
        // kiem tra du lieu gui len
        // echo '<pre>';
        // print_r( $request->all() );
        // die();
        $user = User::find($id);
        $user->name = $request->name;
        try {
            $user->save();
            $data = [
                'success' => true,
                'data'    => $user
            ];
        } catch (\Exception $e) {
            $data = [
                'success' => false,
                'message'    => $e->getMessage()
            ];
        }
        return response()->json($data);
    }
    function destroy($id)
    {
        $user = User::find($id);
        try {
            $user->delete();
            $data = [
                'success' => true,
                'data'    => $user
            ];
        } catch (\Exception $e) {
            $data = [
                'success' => false,
                'message'    => $e->getMessage()
            ];
        }
        return response()->json($data);
    }
}
