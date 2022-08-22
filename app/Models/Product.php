<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $sub_category_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property SubCategory $subCategory
 */
class Product extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['sub_category_id', 'name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subCategory()
    {
        return $this->belongsTo('App\Models\SubCategory');
    }
}
