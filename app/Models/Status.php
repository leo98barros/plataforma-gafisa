<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * Get the empreendimentos for the status.
     */
    public function empreendimentos()
    {
        return $this->hasMany(Empreendimento::class);
    }
}
