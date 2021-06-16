<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \SRC\Infrastructure\Factory\DIRFFactory;

class GeradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Funcionando";
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function generate()
    {
        // $report = DIRFFactory::create();

        // $report->generateAll();

        return "testando rota";
    }

   
    public function sum(Request $request, $cnpj)
    {
        // $report = DIRFFactory::create();

        // $report->generateSummarizedReportByIdentifier($request->parameter('cnpj'));

        return "teste";
    }

    
    public function code($cnpj)
    {
        // $report = DIRFFactory::create();

        // $report->generateByCode($request->parameter('cnpj'));

        return "teste";
    }
}
