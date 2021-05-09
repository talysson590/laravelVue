<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document = Document::with('documentType')->get();
        return response()->json($document);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = new Document();
        $data = $request->all();
        $data['file_name'] = 'aaa';
        $document->fill($data);
        $document->save();

        return response()->json($document, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Document::with('documentType')->find($id);

        if(!$document) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($document);
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
        $document = Document::find($id);

        if(!$document) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $document->fill($request->all());
        $document->save();

        return response()->json($document);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id);

        if(!$document) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $document->delete();
    }
}
