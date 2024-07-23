<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get operators
        $operators = Operator::all();

        //render view with operators
        return view('operators.index', compact('operators'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('operators.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required|max:100',
            'alamat'     => 'required',
            'no_telepon'     => 'required|max:20',
            'keterangan'     => 'required'
        ]);

        //create operator
        Operator::create([
            'nama'     => $request->nama,
            'alamat'     => $request->alamat,
            'no_telepon'     => $request->no_telepon,
            'keterangan'   => $request->keterangan
        ]);

        //redirect to index
        return redirect()->route('operators.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * edit
     *
     * @param  mixed $operator
     * @return void
     */
    public function edit(Operator $operator)
    {
        return view('operators.edit', compact('operator'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $operator
     * @return void
     */
    public function update(Request $request, Operator $operator)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required|max:100',
            'alamat'     => 'required',
            'no_telepon'     => 'required|max:20',
            'keterangan'     => 'required'
        ]);


        //update operator
        $operator->update([
            'nama'     => $request->nama,
            'alamat'     => $request->alamat,
            'no_telepon'     => $request->no_telepon,
            'keterangan'   => $request->keterangan
        ]);

        //redirect to index
        return redirect()->route('operators.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $operator
     * @return void
     */
    public function destroy(Operator $operator)
    {

        //delete operator
        $operator->delete();

        //redirect to index
        return redirect()->route('operators.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
