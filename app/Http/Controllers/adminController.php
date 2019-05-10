<?php

namespace App\Http\Controllers;
use App\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = admin::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'name'    =>  'required',
            'email'     =>  'required',
            
        ]);
        
        $form_data = array(
            'name'       =>   $request->name,
            'email'        =>   $request->email,
            'state'            => $request->state
        );

        admin::create($form_data);

        return redirect('admin')->with('success', 'تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = admin::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = admin::findOrFail($id);
        return view('edit', compact('data'));
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
        $state_name = $request->hidden_state;
        if($state_name != '')
        {
            $request->validate([
                'name'    =>  'required',
                'email'     =>  'required',
               
            ]);

        }
        else
        {
            $request->validate([
                'name'    =>  'required',
                'email'     =>  'required',
                
            ]);
        }

        $form_data = array(
            'name'       =>   $request->name,
            'email'        =>   $request->email,
            'state'            => $request->state
        );
  
        admin::whereId($id)->update($form_data);

        return redirect('admin')->with('success', 'تم التعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = admin::findOrFail($id);
        $data->delete();

        return redirect('admin')->with('success', 'تم الحذف بنجاح');
    }
}
