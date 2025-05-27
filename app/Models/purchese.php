<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class purchese extends Model
{


    // $table->id();
    // $table->foreignId('user_id')->constrained()->onDelete("set null");
    // $table->foreignId('knife_id')->constrained()->onDelete("set null");
    // $table->integer('quantity')->default(1);
    // $table->timestamps();

    protected $fillable = [
        'user',
        'knife',
        'quantity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function knife()
    {
        return $this->belongsTo(Knife::class);
    }
}
