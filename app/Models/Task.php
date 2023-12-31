<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    public function checklist()
    {
        return $this->belongsTo(Checklist::class, 'checklist_id', 'od');
    }

}
