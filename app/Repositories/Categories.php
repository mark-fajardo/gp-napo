<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Categories extends Model
{
    use Sluggable;

    use SluggableScopeHelpers;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_categories';
    
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
     * Item table relationship
     */
    public function items() {
        return $this->belongsToMany('App\Repositories\Items', 'category_item', 'category_id', 'item_id');
    }

    /**
     * Generate category slug based on category name
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }

    public function getImgDirAttribute($img_dir) {
        $newImgDir = str_replace("public","storage",$img_dir);

        return $newImgDir;
    }
}
