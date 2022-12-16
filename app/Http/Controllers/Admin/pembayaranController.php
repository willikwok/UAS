<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\pembayaran;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pembayaran = pembayaran::where('deskripsi_produk', 'LIKE', "%$keyword%")
                ->orWhere('jumlah_pembelian', 'LIKE', "%$keyword%")
                ->orWhere('total_harga', 'LIKE', "%$keyword%")
                ->orWhere('id_transaksi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pembayaran = pembayaran::latest()->paginate($perPage);
        }

        return view('pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        pembayaran::create($requestData);

        return redirect('admin/pembayaran')->with('flash_message', 'pembayaran added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pembayaran = pembayaran::findOrFail($id);

        return view('pembayaran.show', compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pembayaran = pembayaran::findOrFail($id);

        return view('pembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $pembayaran = pembayaran::findOrFail($id);
        $pembayaran->update($requestData);

        return redirect('admin/pembayaran')->with('flash_message', 'pembayaran updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        pembayaran::destroy($id);

        return redirect('admin/pembayaran')->with('flash_message', 'pembayaran deleted!');
    }
}
