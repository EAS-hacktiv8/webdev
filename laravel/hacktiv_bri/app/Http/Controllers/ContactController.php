<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = DB::table('contacts')->get();
        return view('contacts.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = DB::table('contacts')->insert(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'birth_date' => $request->birthday]);
        if ($insert) {
            return redirect('/contacts');
        }
        return "
        <script>
            alert('Failed adding contact!');
            window.location.href = '/contacts/add';
        </script>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "trying to show $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kontak = DB::table('contacts')->find($id);
        return view('contacts.edit', ['kontak' => $kontak]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = DB::table('contacts')->where('id', $id)->update(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'birth_date' => $request->birthday]);
        if ($update) {
            return redirect('/contacts');
        }
        return "
        <script>
            alert('Failed editing contact!');
            window.location.href = '/contacts/$id/edit';
        </script>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return true;
    }

    /**
     * Search the specified resource from storage.
     */
    public function search(Request $request)
    {
        $searchTerm = $request->searchTerm;
        $searchMethod = $request->searchMethod;
        if ($searchMethod == 'name') {
            $contacts = DB::table('contacts')->where('name', 'like', '%' . $searchTerm . '%')->get();
        } else {
            $contacts = DB::table('contacts')->where('email', 'like', '%' . $searchTerm . '%')->get();
        }
        return response()->json($contacts);
        // return view('contacts.index', ['contacts' => $contacts]);
    }

    /**
     * Show search form
     */
    public function searchView()
    {
        return view('contacts.search');
    }
}
