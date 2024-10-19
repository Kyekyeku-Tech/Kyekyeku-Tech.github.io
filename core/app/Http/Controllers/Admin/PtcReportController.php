<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PtcReport;
use App\Models\PtcReportType;
use Illuminate\Http\Request;

class PtcReportController extends Controller
{
    public function reportType()
    {
        $pageTitle = "PTC Report Type";
        $types = PtcReportType::orderBy('id')->paginate(getPaginate());
        return view('admin.ptc.report.type', compact('pageTitle', 'types'));
    }

    public function reportTypeSave(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        if ($request->id) {
            $type = PtcReportType::findOrFail($request->id);
            $message = 'Ptc report type update successfully';
        } else {
            $type = new PtcReportType();
            $message = 'Ptc report type add successfully';
        }
        $type->name = $request->name;
        $type->save();

        $notify[] = ['success', $message];
        return back()->withNotify($notify);
    }

    public function reportTypeStatus($id)
    {
        return PtcReportType::changeStatus($id);
    }

    public function reportLogs()
    {
        $pageTitle = "Ptc Report Logs";
        $reports = PtcReport::with('type', 'user', 'ptc')->searchable(['ptc:title','type:name'])->orderBy('id', 'desc')->paginate(getPaginate());
        return view('admin.ptc.report.log', compact('pageTitle', 'reports'));
    }

}
