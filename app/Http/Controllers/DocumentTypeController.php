<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentType;

class DocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentType = DocumentType::with('document')->get();
        return response()->json($documentType);
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
        $this->validate($request,
            [
                'type_name' => 'required|string',
            ],
            [
                'type_name.required' => 'O campo "type_name" é obrigatório.',
                'type_name.string' => 'O campo "type_name" tem que ser do tipo texto.'
            ]
        );
        $documentType = new DocumentType();
        $documentType->fill($request->all());
        $documentType->save();

        return response()->json($documentType, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documentType = DocumentType::find($id);

        if(!$documentType) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($documentType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $documentType = DocumentType::find($id);
        
        if(!$documentType) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $documentType->fill($request->all());
        $documentType->save();

        return response()->json($documentType);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documentType = DocumentType::find($id);

        if(!$documentType) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $documentType->delete();
    }
}
