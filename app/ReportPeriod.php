<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportPeriod extends Model
{
    public function store()
    {
        $params = $request->all();


//        foreach (['new', 'hit', 'recommend'] as $fielName){
//            if (isset($params[$fielName])){
//                $params[$fielName] = 1;
//            }
//        }

        ReportPeriod::create($params); //Category::create($request->all());
        //Product::create($request->all());
        //return redirect()->route('products.index');

    }
}
