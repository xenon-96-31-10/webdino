<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'task',
        'link',
        'header',
    ];

    /**
     * @return mixed
     */
    public function content()
    {
      return $this->hasMany(ProjectContent::class);
    }

}
