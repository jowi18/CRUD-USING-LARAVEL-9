<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Userinformation extends Model
{   
    protected $guarded = ['id'];
    use HasFactory;
    

    public function users(){
        return $this->belongsTo(User::class);
    }
    
    public function scopeFilter($query, array $filters){
    if($filters['search'] ?? false){
        $query->where('name', 'like', '%' . request('search') . '%')
           ->orWhere('email', 'like', '%' . request('search') . '%')
           ->orWhere('position', 'like', '%' . request('search') . '%')
           ->orWhere('address', 'like', '%' . request('search') . '%');
           
       }
    }
    
}
