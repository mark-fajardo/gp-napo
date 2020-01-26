<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Items extends Model
{
    use Sluggable;

    use SluggableScopeHelpers;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_items';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Category table relationship
     */
    public function categories() {
        return $this->belongsToMany('App\Repositories\Categories', 'category_item', 'item_id', 'category_id');
    }

    /**
     * Generate items slug based on item name and brand
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'item_name',
                'onUpdate' => true
            ]
        ];
    }

    public function getImgDirAttribute($img_dir) {
        $x = substr($img_dir, 2, -2);
        $aImg = explode('", "', $x);

        return $aImg;
    }
}
