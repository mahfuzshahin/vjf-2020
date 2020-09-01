<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobseeker;

class JobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobseeker.create');
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
        $request->validate([
            'name'     =>  'required',
            'cell'  =>  'required',
            'email'   =>  'required',
            //'resume'    =>  'required',
        ]);
        $resume = $request->file('resume');
        $new_resume = rand() . '.' . $resume->getClientOriginalExtension();
        $resume->move(public_path('resume'), $new_resume);

        $form_data = array(
            'name'    =>   $request->name,
            'address'    =>   $request->address,
            'city'    =>   $request->city,
            'cell'    =>   $request->cell,
            'email'   =>   $request->email,
            'category'=>   $request->category,
            'experience'=>   $request->experience,
            'category'=>   $request->category,
            'work_home'=>   $request->work_home,
            'device'=>   $request->device,
            'internet'=>   $request->internet,
            'resume'  =>   $new_resume,
            'skill' => implode(',', (array) $request->get('skill'))
            
        );

        //var_dump($form_data);
        //var_dump($form_data);
        $data = Jobseeker::create($form_data);
      
        return redirect('jobseeker/create')->with('success', 'Registration Successfull');
        
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
        //
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
