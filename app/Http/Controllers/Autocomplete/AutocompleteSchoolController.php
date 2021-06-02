<?php

namespace App\Http\Controllers\Autocomplete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class AutocompleteSchoolController extends Controller
{
    public function get(Request $request)
    {
        $cari      = $request->q;
        $pencarian = "%{$cari}%";

        $schools = School::where('name', 'like', $pencarian)
                            ->limit(5)
                            ->offset(0)
                            ->get();
        
        foreach($schools as $s){
            $data[] = [
                'id'              => $s->id,
				'text'            => '<strong>'.$s->name.'</strong>',
                'name'            => $s->name,
            ];
        }

        return $data;
    }
}
