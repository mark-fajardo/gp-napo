<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
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
}
