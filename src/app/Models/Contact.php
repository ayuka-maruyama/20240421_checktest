<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell', // 'full-tel' を 'tel' に修正
        'address',
        'building',
        'detail' // 'content' を 'detail' に修正
    ];

    public static $rules = [
        'category_id' => 'required',
        'first_name' => 'required|string',
        'last_name' => 'required|string', // 'last-name' を 'last_name' に修正
        'gender' => 'required',
        'email' => 'required|email',
        'tell' => 'required|digits_between:1,5', // 'tell' を 'tel' に修正
        'address' => 'required|string',
        'building' => 'string',
        'detail' => 'required|max:120'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
