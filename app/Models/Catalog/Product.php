<?php

namespace App\Models\Catalog;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 *
 * @package App\Models\Catalog
 */
class Product extends Model
{

    protected $guarded = ['sections'];

    /**
     * BelongsToMany relation with sections
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sections()
    {
        return $this->belongsToMany(Section::class);
    }

}
