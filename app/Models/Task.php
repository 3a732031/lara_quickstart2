<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name'];/* name 屬性應該能被「批量賦值」*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
