<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogger extends Model
{
    use HasFactory;
    protected $table = 'bloggers';
    protected $fillable = ['id','namesurname','mail','phone','created_at','updated_at'];
}
