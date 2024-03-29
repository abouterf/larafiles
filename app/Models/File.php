<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //protected $table = 'files';  if table name different with file(the name of model is File :))
    protected $primaryKey = 'file_id';
    protected $guarded = ['file_id'];
    public function packages()
    {
        return $this->belongsToMany(Package::class,'package_file','file_id','package_id');
    }
}
