<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Utazas extends Model
{
    protected $fillable = [
        'title', 'content', 'datestart','dateend', 'hosszuleiras', 'maxnumber',
    ];
    public function apply()
    {
        return $this->hasMany(Auth::user());
    }

}