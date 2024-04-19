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
        'genderText',
        'email',
        'full-tel',
        'address',
        'building',
        'content',
        'detail'
    ];

    public static $rules = array(
        'category_id' => 'required',
        'first_name' => 'required|string',
        'last-name' => 'required|string',
        'gender' => 'required',
        'email' => 'required|email',
        'tell' => 'required|digits_between:1,5',
        'address' => 'required|string',
        'building' => 'string',
        'detail' => 'required|max:120'
  );

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
