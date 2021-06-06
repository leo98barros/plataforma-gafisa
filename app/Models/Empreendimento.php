<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empreendimento extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'empreendimentos';

    /**
     * Get the plantas for the empreendimento.
     */
    public function plantas()
    {
        return $this->hasMany(Empreendimento::class);
    }

    /**
     * Get the localidade that owns the empreendimento.
     */
    public function localidade()
    {
        return $this->belongsTo(Localidade::class);
    }

    /**
     * Get the status that owns the empreendimento.
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
