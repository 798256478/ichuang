<?php namespace Acme\Guide\Models;

use Model;

/**
 * Model
 */
class Content extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
        'title' => 'required',
        'slug' => 'required|between:1,64|unique:rainlab_blog_categories',
    ];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_guide_contents';

    public $attachMany = [
        'image' => ['System\Models\File'],
        'content_images' => ['System\Models\File']
    ];
}