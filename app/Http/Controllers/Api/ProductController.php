<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;
class ProductController extends BaseController
{
    public function index(){

        $products = Product::all();

        return $this->sendResponse(ProductResource::collection($products),'Products','retrieved');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'desciption' => 'desciption',
        ]);

        if($validator->fails()){

            return $this->sendError('Validation Error',$validator->errors());
        }

        $product = Product::create($request->all());

        return $this->sendResponse();
    }
}
