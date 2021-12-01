<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use TenantTrait;

    protected $fillable = ['title', 'body', 'tenant_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
