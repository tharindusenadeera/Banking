<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;

class CareersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.careers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'mobile_number' => 'required',
            'tele_number' => 'required',
            'email' => 'required',
            'ol' => 'required',
            'al' => 'required',
            'pro_qualification' => 'required',
            'file' => 'required',

        ]);

        $career = new Career;

        $career->firstname = $request->input('firstname');
        $career->lastname = $request->input('lastname');
        $career->mobile_number = $request->input('mobile_number');
        $career->tele_number = $request->input('mobile_number');
        $career->email = $request->input('email');
        $career->ol = $request->input('ol');
        $career->al = $request->input('al');
        $career->pro_qualification = $request->input('pro_qualification');
        $career->file = $request->file('uploaded_file_name');

        $career->save();


        return redirect('pages.index')->with('success', 'Submitted');
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

    public function uploadFile(){
        $ds = DIRECTORY_SEPARATOR;  //1
        $storeFolder = 'files';   //2
        if (!empty($_FILES)) {
            $tempFile = $_FILES['files']['tmp_name'];
            $file_name = $_FILES['files']['name'];
            $ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $new_file_name = time().'.'.$ext;
            $targetPath = base_path().'/public'. $ds. $storeFolder . $ds .'cvs/';  //4
            $targetFile =  $targetPath. $new_file_name;  //5
            $upload_result = move_uploaded_file($tempFile,$targetFile); //6

            echo $new_file_name;

        }
    }
}
