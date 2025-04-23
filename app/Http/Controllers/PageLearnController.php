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

        return redirect('/page')->with('status', 'Page saved!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(PageLearn $page,Request $request)
    {
        $sandbox = new PHPSandbox();

        $code = $request->all()['code'] ?? "";

        $error = null;

        $result = null;


         // redirect output to return
        $sandbox->capture_output = config('sandbox.capture_output');
        $sandbox->setOption(config('sandbox.allow_classes'));
        $sandbox->setOption(config('sandbox.allow_constants'));
        $sandbox->setOption(config('sandbox.allow_functions'));
        $sandbox->setOption(config('sandbox.allow_operator'));
        $sandbox->setOption(config('sandbox.allow_variables'));


        $sandbox->whitelistFunc(config('sandbox.whitelist_func'));

            try{

                $result = $sandbox->execute($code,config('sandbox.skip_validation'));// non crea la pagina d'errore ma permette la generazione dell'eccezione

            }
            catch(Error $e){

                $error = $e->getMessage();

            }

        return view('pages.show',compact('page','result','code'))->with(compact('error'));
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

        return redirect('/page')->with('status', 'Page updated!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PageLearn $pageLearn)
    {
        $pageLearn->delete();
        return redirect()->route('page.index')->with('status', 'Page deleted!!');

    }
}
