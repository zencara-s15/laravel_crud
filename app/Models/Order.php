<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['student_id'];

    public function OrderProduct(){
        return $this->belongsToMany(student::class, 'order_products');
    }
    public static function list(){
        return self::all();
    }
    public static function store($request, $id = null){
        $data = $request->only('student_id');
        $data = self::updateOrCreate(['id' => $id], $data);
        return $data; 
    }
}
