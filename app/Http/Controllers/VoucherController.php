<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function showVoucherInfo () {
        return view('admin.voucher.show-voucher');
    }
    public function saveVoucherInfo (Request $request) {
        $voucherInfo = new Voucher();

        $voucherInfo->voucher_number = $request->voucher_number;
        $voucherInfo->voucher_date = $request->voucher_date;
        $voucherInfo->voucher_for = $request->voucher_for;
        $voucherInfo->voucher_description = $request->voucher_description;
        $voucherInfo->total_amount_digit = $request->total_amount_digit;
        $voucherInfo->total_amount_word = $request->total_amount_word;
        $voucherInfo->publication_status = $request->publication_status;
        $voucherInfo->save();

        if ( $voucherInfo->save() )
            return redirect('/voucher/show-voucher')->with('message', 'Voucher info save successfully');
        else
            return back()->with('message', 'Failed to save voucher info');

    }
    public function manageVoucherInfo () {
        $vouchers = Voucher::orderBy('id', 'desc')->get();


        return view('admin.voucher.manage-voucher', ['vouchers' => $vouchers]);
    }



}
