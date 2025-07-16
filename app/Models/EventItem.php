<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventItem extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'button_text', 'type', 'link', 'file'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
