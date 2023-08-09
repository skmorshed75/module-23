<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['amount', 'description', 'date', 'category'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
