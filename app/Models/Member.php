<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'birthday',
        'tither',
        'user_id',
        'role_id',
        'church_id',
    ];

    protected $casts = [
        'birthday' => 'date_immutable',
    ];

    public function rules()
    {
        return [
            'item.name' => 'required|max:50',
            'item.email' => 'required|email|max:50',
            'item.gender' => 'required',
            'item.birthday' => 'required|date|min:10|max:10',
            'item.tither' => 'required',
            'item.user_id' => 'required|exists:users,id',
            'item.role_id' => 'exists:roles,id',
            'item.church_id' => 'required|exists:church,id'
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function church()
    {
        return $this->belongsTo(Church::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
