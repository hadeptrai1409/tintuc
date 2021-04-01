<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    //
    protected $table = 'bai_viet';
    protected $fillable = ['title', 'danh_muc_id', 'content', 'image', 'short_desc', 'author', 'luot_view'];

    public function danhmuc()
    {
        return $this->belongsTo(Danhmuc::class, 'danh_muc_id');
    }
}
