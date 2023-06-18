<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class RentalController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/rental',);
        $rental = $data->json();
        return view('rental.index')->with('rental', $rental['data']);
    }

    public function create()
    {
        return view ('rental.create');
    }

    public function store(Request $request)
    {  
        $total_harga = $request->waktu_jam * 150000;
        $upload=[
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'type' => $request->type,
            'waktu_jam' => $request->waktu_jam,
            'total_harga' => $total_harga,
            'jam_mulai' => $request->jam_mulai,
            'supir' => $request->supir,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->create('/api/rental/store', $upload);
        return redirect('/rental');
    }

    public function edit ($id) 
    {
        $data = (new BaseApi)->detail('/api/rental', $id);
        $rental = $data->json();
        return view('rental.update')->with('rental', $rental['data']);
    }

    public function update(Request $request, $id)
    {
        $data = (new BaseApi)->detail('/api/rental', $id);
        $rental = $data->json('data');
        $payload = [
            'jam_selesai' => $request->jam_selesai,
            'tempat_tujuan' => $request->tempat_tujuan,
            'riwayat_perjalanan' => 'Perjalanan dimulai pada jam ' .  $rental['jam_mulai'] . ', alamat ' . $rental['alamat'] . ', dan berakhir pada jam ' .  $request['jam_selesai'] . ' di ' .  $request['jam_selesai'],
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->update('api/rental/update', $id, $payload);
        return redirect('/rental');
    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/rental', $id);
        $rental = $data->json();
        return view('rental.show')->with('rental', $rental['data']);
    }

    public function destroy (Request $request, $id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/rental/delete', $id);
        return redirect('/rental');
    }

    
    
}
