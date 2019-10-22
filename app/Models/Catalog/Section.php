<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    protected $guarded = [];

    /**
     * Get children section
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /**
     * Polymorphic relation with products
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Catalog\Product');
    }

}
