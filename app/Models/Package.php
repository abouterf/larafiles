<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $primaryKey = 'package_id';

    protected $guarded = ['package_id'];

    public function files()
    {
        return $this->belongsToMany(File::class, 'package_file', 'package_id', 'file_id');
    }
}
