<?php

namespace App\Http\Controllers;

use App\Voucher;
use PDF;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function showVoucherInfo () {
        return view('admin.voucher.create-voucher');
    }
    public function saveVoucherInfo (Request $request) {
        $voucherInfo = new Voucher();

        $voucherInfo->voucher_number = $request->voucher_number;
        $voucherInfo->voucher_to = $request->voucher_to;
        $voucherInfo->voucher_date = $request->voucher_date;
        $voucherInfo->voucher_for = $request->voucher_for;
        $voucherInfo->voucher_description = $request->voucher_description;
        $voucherInfo->amount_digit = $request->amount_digit;
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
    public function unpublishedVoucherInfo ($id) {
        $voucherInfoById = Voucher::find($id);
        $voucherInfoById->publication_status = 0;
        $voucherInfoById->save();

        return redirect('/voucher/manage-voucher')->with('message', 'Voucher info unpublished successfully');
    }
    public function publishedVoucherInfo ($id) {
        $voucherInfoById = Voucher::find($id);
        $voucherInfoById->publication_status = 1;
        $voucherInfoById->save();

        return redirect('/voucher/manage-voucher')->with('message', 'Voucher info published successfully');
    }
    public function editVoucherInfo ($id) {
        $voucher = Voucher::find($id);

        return view('admin.voucher.edit-voucher', ['voucher' => $voucher]);
    }
    public function updateVoucherInfo (Request $request) {
        $voucherInfoById = Voucher::find($request->voucher_id);

        $voucherInfoById->voucher_number = $request->voucher_number;
        $voucherInfoById->voucher_to = $request->voucher_to;
        $voucherInfoById->voucher_date = $request->voucher_date;
        $voucherInfoById->voucher_for = $request->voucher_for;
        $voucherInfoById->voucher_description = $request->voucher_description;
        $voucherInfoById->amount_digit = $request->amount_digit;
        $voucherInfoById->total_amount_word = $request->total_amount_word;
        $voucherInfoById->publication_status = $request->publication_status;
        $voucherInfoById->save();

        return redirect('/voucher/manage-voucher')->with('message', 'Voucher info updated successfully');
    }
    public function deleteVoucherInfo ($id) {
        $VoucherInfoById = Voucher::find($id);
        $VoucherInfoById->delete();

        return redirect('/voucher/manage-voucher')->with('message', 'Voucher info deleted successfully');
    }
    public function viewVoucherInfo ($id) {
        $voucherInfo = Voucher::find($id);

        return view('admin.voucher.view-voucher', ['voucherInfo' => $voucherInfo]);
    }
    public function pdfVoucherInfo ($id) {
        $voucherInfo = Voucher::find($id);

        $pdf = PDF::loadView('admin.voucher.view-voucher', ['voucherInfo' => $voucherInfo]);
        return $pdf->stream('view-voucher.pdf');


    }




}
