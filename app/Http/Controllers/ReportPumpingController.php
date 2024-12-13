<?php

namespace App\Http\Controllers;

use App\Models\Mother;
use App\Models\Pumping;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportPumpingController extends Controller
{
    public function index()
    {
        $reports = Pumping::all();
        $mother = Mother::with('pumping')->with('child')->get();
        return view('pages.report-pumping.index', [
            'datas' => $mother
        ]);
    }
    public function view($id)
    {
        $pumping = Pumping::where('mother_id', $id)->get();
        $mother = Mother::where('id', $id)->with('child')->first();
        // dd($mother);
        return view('pages.report-pumping.view', [
            'pumpings' => $pumping,
            'mother' => $mother
        ]);
    }
    public function viewDetail($tanggal, $id)
    {
        $pumping = Pumping::where('tanggal', $tanggal)->where('mother_id', $id)->get();
        $mother = Mother::where('id', $id)->with('child')->first();
        return view('pages.report-pumping.view-detail', [
            'pumpings' => $pumping,
            'mother' => $mother
        ]);
    }

    public function myReport()
    {
        $user = Auth::user();
        $reports = Mother::with('pumping')->with('child')->where('user_id', $user->id)->first();
        return view('pages.my-report.index', [
            'data' => $reports
        ]);
    }
    public function myReportDetail()
    {
        $user = Auth::user();
        $pumping = Pumping::where('mother_id', $user->id)->get();
        // dd($mother);
        return view('pages.my-report.detail', [
            'pumpings' => $pumping,
        ]);
    }
    public function createReport()
    {
        return view('pages.my-report.create');
    }
    public function storeReport(Request $request)
    {
        $user = Auth::user()->id;
        $mother = Mother::where('user_id', $user)->first();
        $validateData = $request->validate([
            'tanggal' => 'required',
            'pukul' => 'required',
            'menit' => 'required',
            'note' => 'required',
            'pd_kanan' => 'required',
            'pd_kiri' => 'required',
        ]);
        $validateData['mother_id'] = $mother->id;
        Pumping::create($validateData);
        return redirect()->back()->with("success", "Laporan has been created!");
    }
    public function updatePumping(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'tanggal' => 'required',
            'pukul' => 'required',
            'menit' => 'required',
            'note' => 'required',
            'pd_kanan' => 'required',
            'pd_kiri' => 'required',
        ]);
        Pumping::where("id", $validateData['id'])->update($validateData);
        return redirect()->back()->with("success", "User has been Edited!");
    }
    public function deletePumping(Request $request)
    {
        Pumping::destroy($request->id);
        return redirect()->back()->with("success", "Data pumping has been Delete!");
    }
}
