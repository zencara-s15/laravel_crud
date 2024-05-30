<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
    {
        $this->params = $request->only('search');
        $product = Product::list($this->params);
        $product = ProductResource::collection($product);
        return response(['success' => true, 'data' =>$product], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Product::store($request);
        return ["success" => true, "Message" =>"Product created successfully"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
