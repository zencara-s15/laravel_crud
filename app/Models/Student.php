<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\FuncCall;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'age',
        'province',
        'score',
        'phone',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }

    public function getStatusAttribute(){
        return $this->score > 50? 'pass' : 'fail';
    }

    public static function list($params)
    {

        $list = self::query();

        if (isset($params['search']) && filled($params['search'])) {
            $list->where('name', 'LIKE', '%' . $params['search'] . '%');
        }

        return $list->get();
    }

    public static function store($request, $id = null)
    {
        $data = $request->only('name', 'age', 'province', 'score', 'phone');
        $data = self::updateOrCreate(['id' => $id], $data);
    }


}
