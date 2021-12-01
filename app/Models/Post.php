<?php

namespace App\Models;

use App\Scopes\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
