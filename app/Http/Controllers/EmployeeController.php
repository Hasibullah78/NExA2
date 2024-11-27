<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;
use Intervention\Image\Facades\Image;
// use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\PDF;
use Mpdf\Mpdf;

class EmployeeController extends Controller
{
    public function Add_Emp()
    {
        $positions=Position::all();
        return view('Employee.add',compact('positions'));
    }
    public function Add(Request $request){

        $request->validate([
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $emp_image=$request->file('pic');
        $name_gen=$request->name.time().".".$emp_image->getClientOriginalExtension();
         Image::make($emp_image)->save('employee/images/'.$name_gen);
        $location_Path="employee/images/".$name_gen;
        DB::table('employees')->insert([
            'name' => $request->name,
            'f_name'=> $request->f_name,
            'phone' => $request->phone,
            'position_id' =>$request->position,
            'photo' => $location_Path
        ]);
        return redirect()->back()->with('success','Registeration done Successfully');
        // return redirect('/add/position')->with('message', 'Postion Added!');
        // id	name	f_name	photo	phone	position_id
        // $Emp=new Employee();
        // $Emp->name=$request->name;
        // $Emp->f_name=$request->f_name;
        // $Emp->
    }
    public function exportPdf()
    {
        // $records = Employee::join('positions','employees.position_id','positions.id')
        // ->select('positions.name as position_name','employees.*')->orderBy('employees.id','desc')->get();
        // $pdf=App::make('dompdf.wrapper',compact('records'));
        // $pdf->loadview('pdf');
        // return $pdf->stream();
        // Load the view and pass data to it
         // 'pdf.export' is the view file
        // $records = Employee::join('positions','employees.position_id','positions.id')
        // ->select('positions.name as position_name','employees.*')->orderBy('employees.id','desc')->get();
        // // return view('Employee.all',compact('records'));
        // Return the PDF as a download response





        $records = Employee::join('positions','employees.position_id','positions.id')
        ->select('positions.name as position_name','employees.*')->orderBy('employees.id','desc')->get();
        // return view('pdf',compact('records'));
        // $records=Employee::all();
        // $pdf = \PDF::loadView('subfolder.child', $data);
         $pdf = \PDF::loadView('pdf',compact('records'))->setOption([
            'temdir' => public_path(),
            'chroot' =>public_path()
         ]);

        // Download the PDF
        return $pdf->download('sample.pdf');

        // return view('pdf',compact('records'));


    }
}
