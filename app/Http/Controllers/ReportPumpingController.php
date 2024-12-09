<?php

namespace App\Http\Controllers;

use App\Models\Mother;
use App\Models\Pumping;
use App\Models\User;
use Illuminate\Http\Request;

class ReportPumpingController extends Controller
{
    public function index()
    {
        $reports = Pumping::all();
        $mother = User::with('pumping')->with('mother')->where('role', 'mother')->get();
        return view('pages.report-pumping.index', [
            'datas' => $mother
        ]);
    }
    public function myReport()
    {
        $reports = Pumping::all();
        return view('pages.my-report.index', [
            'datas' => $reports
        ]);
    }
    public function createReport()
    {
        return view('pages.my-report.create');
    }
    public function storeReport(Request $request)
    {
        dd($request->all());
    }
}
