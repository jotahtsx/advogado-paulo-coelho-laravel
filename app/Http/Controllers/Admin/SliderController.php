<?php

namespace PauloCoelho\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PauloCoelho\Http\Controllers\Controller;
use PauloCoelho\Http\Requests\Admin\Slider as SliderRequest;
use PauloCoelho\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', [
            'sliders' => $sliders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $sliderCreate = Slider::create($request->all());

        if (!empty($request->file('cover'))) {
            $sliderCreate->cover = $request->file('cover')->store('slider');
            $sliderCreate->save();
        }

        return redirect()->route('admin.sliders.edit', [
            'sliders' => $sliderCreate->id
        ])->with(['color' => 'success', 'message' => 'Slider cadastrado com sucesso.']);
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
        $slider = Slider::where('id', $id)->first();
        return view('admin.sliders.edit', [
            'slider' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $slider = Slider::where('id', $id)->first();

        if (!empty($request->file('cover'))) {
            Storage::delete($slider->cover);
            $slider->cover = '';
        }

        $slider->fill($request->all());


        if (!empty($request->file('cover'))) {
            $slider->cover = $request->file('cover')->store('slider');
        }

        if (!$slider->save()) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('admin.sliders.edit', [
            'sliders' => $slider->id
        ])->with(['color' => 'success', 'message' => 'Slider atualizado com sucesso.']);
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
