<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Article extends Model
{
    use Sortable;
    protected $fillable = ['name', 'slug', 'date', 'metaKeywords', 'metaTitle', 'metaDesc', 'shortDesc', 'img', 'alt', 'fullDesc', 'display'];
    public $sortable = ['name', 'date', 'display'];

    public function setSlugAttribute($value){
    	$this->attributes['slug'] = $value ? \Str::slug($value, '-') : \Str::slug($this->attributes['name']);
    }

    public function setDisplayAttribute($value){
        $this->attributes['display'] = $value ? true : false;
    }
}
