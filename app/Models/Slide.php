<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected $fillable = [
        'image',
        'heading',
        'description',
        'button1_text',
        'button1_link',
        'button2_text',
        'page',
        'image_alt',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'page');
    }

}
