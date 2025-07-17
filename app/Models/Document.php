<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title',
        'doc_date',
        'file',
        'document_type_id',
    ];

    public function type()
    {
        return $this->belongsTo(DocumentType::class, 'document_type_id');
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

}
