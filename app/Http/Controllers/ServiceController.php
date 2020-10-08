<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
class ServiceController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $services= Service::latest()->paginate(5);

  

        return view('admin.services.index',compact('services'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('admin.services.create');

    }

  

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $request->validate([

            'service' => 'required',
            'description' => 'required',
            'price' => 'required',

        ]);

  

        Service::create($request->all());

   

        return redirect()->route('admin.services.index')

                        ->with('success','Service created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\Service  $service

     * @return \Illuminate\Http\Response

     */

    public function show(Service $service)

    {

        return view('admin.services.show',compact('service'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Service  $service

     * @return \Illuminate\Http\Response

     */

    public function edit(Service $service)

    {

        return view('admin.services.edit',compact('service'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Service  $service

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Service $service)

    {

        $request->validate([

            'service' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

  

        $service->update($request->all());

  

        return redirect()->route('admin.services.index')

                        ->with('success','Service updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Service $service

     * @return \Illuminate\Http\Response

     */

    public function destroy(Service $service)

    {

        $service->delete();

  
        return redirect()->route('admin.services.index')
                        ->with('success','Service  deleted successfully');

    }

}