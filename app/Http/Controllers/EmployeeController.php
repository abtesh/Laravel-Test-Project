<?php
use app\Models\Employee;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{
    public function getEmployee(){
        return response()->json(Employee::all(), 200);
    }
    public function getEmployeeId($id){
        $employee = Employee::Find($id);
        if(is_null($employee))
        {
            return response()->json(['Message' =>'Nothing Found'], 404);
        }
        return response()->json($employee::find($id), 200);
        
    }
    public function addEmployee(Request $request){
        $employee::create($request->all());
        return response($employee, 201);

    }
    public function updateEmployee(Request $request, $id){
        $employe = Employee::Find($id);
        if(is_null($employee))
        {
            return response()->json(['Message' =>'Nothing Found'], 404);
        }
        $employee -> update($request->all());
        return response($empolyee, 200);

    }
    public function deleteEmployeeById(Request $request, $id){
        $employee = Employee::Find($id);
        if(is_null($employee))
        {
            return response()->json(['Message' =>'Nothing Found'], 404);
       
        }
        $employee->delete();
        return response()->json(null, 204);
    }
}
