<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main;
use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = Main::first();
        return view('backend.admin.main', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request, [
           'title' => 'required|string',
           'sub_title' => 'required|string',
        ]);

        $main = Main::first();
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;

        if ($request->file('bg_image'))
        {
            $img_file = $request->file('bg_image');
            $img_file->storeAs('public/img/', 'bg_image.' . $img_file->getClientOriginalExtension());
            $main->bg_image = 'storage/img/bg_image.' . $img_file->getClientOriginalExtension();
        }

        if ($request->file('resume'))
        {
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('public/pdf/', 'resume.' . $pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/resume.' . $pdf_file->getClientOriginalExtension();
        }

        $main->save();

        return redirect()->route('dashboard.main')->with('success', 'Main Page data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
