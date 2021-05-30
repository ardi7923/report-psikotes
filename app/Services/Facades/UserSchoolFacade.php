<?php

namespace App\Services\Facades;

use DB;
use App\Models\User;
use MainService;
use Image;
use File;

class UserSchoolFacade{


	public function save($request)
	{
		DB::transaction(function () use ($request)   {


			User::create([
							'name'            => $request->name,
							'username'        => $request->username,
							'password'        => bcrypt($request->password),
							'role'            => 'school',
							'school_id'       => $request->school_id

						]);


		});
	}

	public function update($request,$params)
	{

		User::where($params)->update([
							'name'            => $request->name,
							'username'        => $request->username,
							'password'        => bcrypt($request->password),
							'school_id'       => $request->school_id

						]);
	}


}