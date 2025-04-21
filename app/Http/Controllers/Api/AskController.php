<?php

namespace App\Http\Controllers\Api;

use PHPSandbox\PHPSandbox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPSandbox\Error;
use Throwable;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // recover the code from the request
        $code = $request->all()['code'];

        // create PHP Sandbox
        $sandbox = new PHPSandbox();

        // redirect output to return
        $sandbox->capture_output = true;

        $sandbox->setOption('allow_functions', true);

        //allow function
       // $sandbox->whitelistFunc('substr');

        //allow operator example
        //$sandbox->whitelist('operator','+');

        //dump($request->user()->name); TODO aggiungere contatore nel database per contare numero di query

        $result = $sandbox->execute(urldecode ($code),1);

        // return response json with state 'ok'
        return response()->json(["data"=>[

            'user' => $request->user()->name,

            'output' => $result,

        ],'state' => 'OK',
    ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function action(Request $request)
    {
         // create PHP Sandbox
         $sandbox = new PHPSandbox();

         $code = $request->all()['code'] ?? "";
         $result = null;
         $error = null;


         // redirect output to return
         $sandbox->capture_output = true;

                    $sandbox->setOption('allow_functions', true);
            try{

                $result = $sandbox->execute($code,0);
            }
            catch(Error $e){
                $error = $e->getPrevious()->getMessage();
            }

         // return response json with state 'ok'
         return view('components.console' ,compact('result','code','error'));
    }

    /**
     * Display the specified resource.
     */
   /* public function show(Request $request) : string
    {
        $query = $request->all()['val'];
        return  eval("return $query;");
    }*/

    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, string $id)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy(string $id)
    {
        //
    }

    private function test(string $string){
        return 'Hello ' . $string;
    }*/
}
