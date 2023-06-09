<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        return view('admin.index_admin');
    }

    public function adm_services($id)
    {
        $ser_price = DB::table('services')->where('service_id', $id)->value('service_price');
        $ser_name = DB::table('services')->where('service_id', $id)->value('service_name');
        
        $result = DB::table('transaction')
                ->select('transaction_id', 'nama', 'service', 'nohp', 'alamat','created_at', 'kg', 'price')
                ->where('id_service', $id)
                ->orderBy('transaction_id','desc')
                ->limit(10)
                ->get();

        return view('admin.adm_srv', ['price' => $ser_price,'name' => $ser_name,'id' => $id,'table_rslt' => $result]);
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function upd_profile(Request $request, $id)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $old_pwd = $request->get('old_pwd');
        $new_pwd = $request->get('new_pwd');
        $pass = DB::table('users')->where('id', $id)->value('password');
        
        if (Hash::check($old_pwd, $pass)){
            $upd = DB::table('users')
              ->where('id', $id)
              ->update(['name' => $name, 'email' => $email, 'password' => Hash::make($new_pwd)]);
            return redirect()->route('profile',['msg' => "Profile telah diupdate!"]);
        }else{
            return view('admin.profile',['msg' => "Password Salah!"]);
        }
    }

    public function pendingorder()
    {
        $result = DB::table('transaction')
                ->select('transaction_id', 'nama', 'service', 'nohp', 'alamat','created_at', 'kg', 'price', 'status')
                ->where('status','<>','Selesai')
                ->orderBy('transaction_id','desc')
                ->get();

        return view('admin.order', ['table_rslt' => $result]);
    }


    public function upd_status(Request $request)
    {
        $id = $request->get('id');
        $stts = $request->get('stts');

        $upd = DB::table('transaction')
              ->where('transaction_id', $id)
              ->update(['status' => $stts]);

        return 1;
    }

    public function order_hist()
    {
        $result = DB::table('transaction')
                ->select('transaction_id', 'nama', 'service', 'nohp', 'alamat','created_at', 'kg', 'price', 'status')
                ->where('status','=','Selesai')
                ->orderBy('transaction_id','desc')
                ->get();

        return view('admin.orderHistory', ['table_rslt' => $result]);
    }

    public function transaksi()
    {
        $sum_tdy_sls = DB::table('transaction')
                ->where('status','=','Selesai')
                ->whereRaw('date_format(created_at,"%Y%m%d") = date_format(now(),"%Y%m%d")')
                ->sum('price');

        $sum_mth_sls = DB::table('transaction')
                ->where('status','=','Selesai')
                ->whereRaw('date_format(created_at,"%Y%m") = date_format(now(),"%Y%m")')
                ->sum('price');

        $sum_tdy_tdsls = DB::table('transaction')
                ->where('status','<>','Selesai')
                ->whereRaw('date_format(created_at,"%Y%m%d") = date_format(now(),"%Y%m%d")')
                ->sum('price');

        $sum_mth_tdsls = DB::table('transaction')
                ->where('status','<>','Selesai')
                ->whereRaw('date_format(created_at,"%Y%m") = date_format(now(),"%Y%m")')
                ->sum('price');

        return view('admin.transaksi', ['sum_tdy_sls' => $sum_tdy_sls, 'sum_mth_sls' => $sum_mth_sls,'sum_tdy_tdsls' => $sum_tdy_tdsls, 'sum_mth_tdsls' => $sum_mth_tdsls]);
    }
}
