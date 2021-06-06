<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidade extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'localidades';

    /**
     * Get the empreendimentos for the locale.
     */
    public function empreendimentos()
    {
        return $this->hasMany(Empreendimento::class);
    }
}
