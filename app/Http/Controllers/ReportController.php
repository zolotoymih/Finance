<?php

namespace App\Http\Controllers;

use App\KindReport;
use App\Period;
use App\Report;
use App\TypeReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kind_reports = KindReport::get();
        $type_reports = TypeReport::get();
        $periods = Period::where('year', 2020)->get();
        $reports = Report::join('type_reports', 'type_reports.id', '=', 'reports.type_report_id')
            ->orderBy('type_report_id', 'asc')
            ->select('type_reports.name', 'type_reports.code', 'reports.*')
            ->where('edrpou_id', 1)
            ->get();
        return view('reports', compact('type_reports', 'kind_reports', 'reports', 'periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        Report::create($params);
        $reports = Report::join('type_reports', 'type_reports.id', '=', 'reports.type_report_id')
            ->orderBy('type_report_id', 'asc')
            ->select('type_reports.name', 'type_reports.code', 'reports.*')
            ->where('edrpou_id', 1)
            ->get();
        return $reports;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        dd('show report');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();
        $reports = Report::join('type_reports', 'type_reports.id', '=', 'reports.type_report_id')
            ->orderBy('type_report_id', 'asc')
            ->select('type_reports.name', 'type_reports.code', 'reports.*')
            ->where('edrpou_id', 1)
            ->get();
        return $reports;
    }
}
