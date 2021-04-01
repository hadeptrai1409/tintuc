<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    //

    protected $table = 'danh_muc';
    protected $fillable = ['name', 'logo'];

    public function cates()
    {
        return $this->hasMany(Baiviet::class, 'danh_muc_id');
    }
}
