<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\services;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cart($id)
    {
        $ser_price = DB::table('services')->where('service_id', $id)->value('service_price');
        $ser_name = DB::table('services')->where('service_id', $id)->value('service_name');
        
        return view('frontend.cart', ['price' => $ser_price,'name' => $ser_name,'id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function checkout(Request $request, $id)
    {
        $kg = $request->get('kg_pass');
        $ser_price = DB::table('services')->where('service_id', $id)->value('service_price');
        $ser_name = DB::table('services')->where('service_id', $id)->value('service_name');
        
        return view('frontend.checkout', ['price' => $ser_price,'name' => $ser_name,'id' => $id, 'kg' => $kg]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function checkoutall(Request $request)
    {
        $kg = $request->get('kg');
        $service = $request->get('service');
        $price = $request->get('price');
        $id = $request->get('id');
        $nama = $request->get('nama');
        $nohp = $request->get('nohp');
        $opsi_antar = $request->get('opsi_antar');
        if ($opsi_antar == 'maps'){
            $opsi = 'Self-service';
        }else{
            $opsi = 'Antar/Jemput';
        }
        $alamat = $request->get('alamat');
        
        DB::insert('insert into transaction (nama, nohp, opsi, alamat, id_service, service, price, kg, status, created_at, updated_at) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$nama, $nohp, $opsi, $alamat, $id, $service, $price, $kg, 'Belum Terkonfirmasi', now(), now()]);
        $last_id = DB::getPdo()->lastInsertId();
        $msg = "Kode Pesanan anda adalah : " . $last_id;

        return view('frontend.search',['msg' => $msg]);
    }

    /**
     * Display the Search Page.
     */
    public function search(Request $request)
    {
        return view('frontend.search');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function search_trx(Request $request)
    {
        $val = $request->get('id');
        //$val = $val."%";
        $result = DB::table('transaction')
                ->select('nama', 'service', 'price', 'status', 'created_at')
                ->where('transaction_id', '=',$val)
                ->get();

        $all_result = "";
        
        foreach($result as $r){
            $all_result .= "<tr class=' text-center'><td>" . $r->nama ."</td><td>".$r->service."</td><td>".$r->created_at."</td><td>".$r->status."</td></tr>";
        }

        return $all_result;
    }

    //ADMIN
    public function last_order(Request $request)
    {
        $val = $request->get('id');
        //$val = $val."%";
        $result = DB::table('transaction')
                ->select('transaction_id', 'nama', 'service', 'nohp', 'alamat','created_at', 'kg', 'price')
                ->orderBy('transaction_id','desc')
                ->limit(5)
                ->get();

        $all_result = "";
        
        foreach($result as $r){
            $all_result .= "<tr class=' text-center'><td>" . $r->transaction_id ."</td><td>".$r->nama."</td><td>".$r->service."</td><td>".$r->nohp."</td><td>".$r->alamat."</td><td>".$r->created_at."</td><td>".$r->kg."</td><td>".$r->price."</td></tr>";
        }

        return $all_result;
    }

    public function count_services(Request $request)
    {
        $val = $request->get('id');
        $result = DB::table('transaction')
                ->select('nama')
                ->where('id_service', '=',$val)
                ->count();

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
