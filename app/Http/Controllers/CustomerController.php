<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$customers['customers'] = Customer::all();
		return view('customer',$customers);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$customer = new Customer;
		$customer->name  = $request->name;
		$customer->phone = $request->phone;
		$customer->city  = $request->city;
		if ($customer->save())
				{
						echo("Sucessfully Added");
				}		
		else {
					echo("Sorry! Data Not Added");
			}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$customer['customer'] = Customer::find($id);
		return view('customer_edit',$customer);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$customer = Customer::find($request->id);

		$customer->name  = $request->name;
		$customer->phone = $request->phone;
		$customer->city  = $request->city;
		if ($customer->save())
				{
						echo("Sucessfully Updated");
						header("location:customer.blade.php");
				}		
		else {
					echo("Sorry! Data Not Updated");
			}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		 $customer = Customer::find($id);
		 if ($customer->delete())
		 {
		 	echo "Data Deletd";
		 	header("location:customer.blade.php");
		 }
		 else
		 {
			echo "Sorry! Cant Delete";		 	
		 }
	}

}
