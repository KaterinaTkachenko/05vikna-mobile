<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Lead extends Model
{
	use Sortable;
    protected $fillable = ['status_id', 'page', 'widget', 'username', 'phone', 'refer'];

    public $sortable = ['id', 'status_id', 'page', 'username' ];

    public function status()
    {
    	return $this->belongsTo('App\Status');
    }
}
