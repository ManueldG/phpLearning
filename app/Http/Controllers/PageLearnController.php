<?php

namespace App\Http\Controllers;

use PHPSandbox\PHPSandbox;
use PHPSandbox\Error;

use App\Models\PageLearn;
use Illuminate\Http\Request;

class PageLearnController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = PageLearn::all();

        return view('pages.index',compact('pages'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([

            'title' => 'required|unique:page_learns|max:255',

            'description' => 'required',

            'example' => 'required',

        ]);
        $values = $request->all();

        $page = new PageLearn();
        $page->title = $values['title'];
        $page->description = $values['description'];
        $page->example = $values['example'];

        $page->save();

        return "ok";

    }

    /**
     * Display the specified resource.
     */
    public function show(PageLearn $page,Request $request)
    {

        $sandbox = new PHPSandbox();

        $code = $request->all()['code'] ?? "";

         // redirect output to return
        $sandbox->capture_output = true;

            $sandbox->setOption('allow_functions', true);

            try{

                $result = $sandbox->execute($code,1);
            }
            catch(Error $e){
                dump($e);
            }

        return view('pages.show',compact('page','result','code'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PageLearn $page)
    {

        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PageLearn $page)
    {


        $request->validate( [
            'title'=>'required|unique:page_learns,' . $page->id,

            'description' => 'required',

            'example' => 'required',

        ]);

        $value = $request->all();
        $page->title = $value['title'];
        $page->description = $value['description'];
        $page->example = $value['example'];
        $page->save();

        return redirect('/page');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageLearn $pageLearn)
    {
        $pageLearn->delete();
        return redirect()->route('page.index');

    }
}
