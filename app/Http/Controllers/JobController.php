<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;

class JobController extends Controller
{
    CONST PAGINATE = 5;

    /**
     * 一覧画面表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Job::query();
        $jobs = $query->paginate(self::PAGINATE);
        return view('jobs.list', compact('jobs'));
    }

    /**
     * 検索結果一覧表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Response $request)
    {
        $params = array_filter($request->all());

        $query = Job::query();
        $jobs = $query->paginate(self::PAGINATE);
        return $jobs;
    }

    /**
     * 詳細表示
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return $job;
        return view('jobs.show', compact('job'));
    }
}
