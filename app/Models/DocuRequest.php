<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocuRequest extends Model
{
    use HasFactory;

    protected $table = 'docu_request';

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'address',
        'bday',
        'por',
        'pob',
        'voter',
        'howner',
        'rhowner',
        'roa',
        'image',
        'type',
        'status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

