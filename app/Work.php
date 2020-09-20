<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Work extends Model
{
    use Sortable;
    protected $fillable = ['title', 'slug', 'metaKeywords', 'metaTitle', 'metaDesc', 'shortDesc', 'img', 'alt', 'fullDesc'];
    public $sortable = ['title', 'shortDesc'];

    public function setSlugAttribute($value){
    	$this->attributes['slug'] = $value ? \Str::slug($value, '-') : \Str::slug($this->attributes['title']);
    }
}
