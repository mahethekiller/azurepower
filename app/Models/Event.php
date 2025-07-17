<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'event_date' => 'date',
    ];

    protected $fillable = ['event_date', 'subject'];

    public function items()
    {
        return $this->hasMany(EventItem::class);
    }
}
