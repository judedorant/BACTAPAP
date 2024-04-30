<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class userConctroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = users::select('*')->get();
        // $users = User::select('*')->get();
        // dd($data);

        return response()->json([
                    'success' => "Success",
                    'msg' => 'Select!'
                    'data' => $data,
                    'errors' => false,
                ], 200);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    '', '', '', '',
    public function store(Request $request)
    {
        //
        try 
        {
            $user = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'email_verified_at' => $request->email_verified_at,
                'password' => $request->password
            ]);


            return response()->json([
                    'success' => "Success",
                    'msg' => 'Success insert !'
                    'data' => $request->username,
                    'errors' => false,
                ], 200);

        } catch (Exception $e) {
            return response()->json([
                    'success' => "error in " . $e,
                    'msg' => 'Success insert !'
                    'data' => $request->username,
                    'errors' => true,
                ], 500);
        }
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try 
        {
            $data = user::select('*')->where('id', $id)->get();
            

            return response()->json([
                    'success' => "Success",
                    'msg' => 'Success insert !'
                    'data' => $data,
                    'errors' => false,
                ], 200);

        } catch (Exception $e) {
            return response()->json([
                    'success' => "error in " . $e,
                    'msg' => 'Success insert !'
                    'data' => $id,
                    'errors' => true,
                ], 500);
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       try 
        {
            user::where('id', $id)->update([
                'username' => $request->username,
                // 'email' => 'newemail@example.com',
                'email' => $request->email,
                'email_verified_at' => $request->email_verified_at,
                'password' => $request->password
            ]); 
            

            return response()->json([
                    'success' => "Success",
                    'msg' => 'Success insert !'
                    'data' => "test",
                    'errors' => false,
                ], 200);

        } catch (Exception $e) {
            return response()->json([
                    'success' => "error in " . $e,
                    'msg' => 'Success insert !'
                    'data' => $id,
                    'errors' => true,
                ], 500);
        }
               
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);

        // Check if the user exists
        if ($user) {
            try 
            {
                user::destroy($id);

                return response()->json([
                        'success' => "Success",
                        'msg' => 'Success insert !'
                        'data' => $id,
                        'errors' => false,
                    ], 200);

            } catch (Exception $e) {
                return response()->json([
                        'success' => "error in " . $e,
                        'msg' => 'Success insert !'
                        'data' => $id,
                        'errors' => true,
                    ], 500);
            }
        }
        else
        {
            return response()->json([
                        'success' => "Success",
                        'msg' => 'no match!'
                        'data' => $id,
                        'errors' => false,
                    ], 200);
        }
        
        
    }
}
