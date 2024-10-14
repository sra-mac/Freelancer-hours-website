<?php

namespace App\Models;

use App\Models\User;
use App\ProjectStatus;
use App\Models\Proposal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    public function casts(){
        return [
            'tech_stack' => 'array',
            'status' => ProjectStatus::class,
            'ends_at' => 'datetime', 
        ];
    }

    public function author(){
        return $this->belongsTo(User::class, 'created_by');
    }
    
    public function proposals(){
        //não precisa especificar o project_id, pois está na classe Project
        //subentende-se que ele quer o id 
        return $this->hasMany(Proposal::class);
    }
}
