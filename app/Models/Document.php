<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'file_name',
        'detail',
        'document_type_id',
    ];

    /**
     * Fetch the model of documentType
     * @return object
     */
    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
