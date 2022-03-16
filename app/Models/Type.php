<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function translations(): HasMany
    {
        return $this->hasMany(TypeTranslation::class);
    }

    public function getLabelAttribute(): string
    {
        return  $this->translations()->where('language_id', session('language_id'))->exists()?
                $this->translations()->where('language_id', session('language_id'))->first()->label:
                '';
    }
}
