<?php

namespace PauloCoelho\Http\Controllers\Admin;

use Illuminate\Http\Request;
use PauloCoelho\Faq;
use PauloCoelho\Http\Controllers\Controller;
use PauloCoelho\Http\Requests\Admin\Faq as AdminFaq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Faq::all();
        return view('admin.faq.index', [
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminFaq $request)
    {
        $questionCreate = Faq::create($request->all());

        $questionCreate->save();

        return redirect()->route('admin.faq.edit', [
            'questions' => $questionCreate->id
        ])->with(['color' => 'success', 'message' => 'Questão cadastrada com sucesso.']);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Faq::where('id', $id)->first();
        return view('admin.faq.edit', [
            'question' => $question
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminFaq $request, $id)
    {
        $question = Faq::where('id', $id)->first();

        $question->fill($request->all());

        if (!$question->save()) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('admin.faq.edit', [
            'questions' => $question->id
        ])->with(['color' => 'success', 'message' => 'Questão atualizada com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
