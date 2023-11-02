<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'title',
        'status',
        'summary',
        'content',
        'meta',
        'user_id',
    ];

    protected $casts = [
        'status' => Status::class,
        'meta' => AsArrayObject::class,
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(related: User::class,foreignKey: 'user_id');
    }
}
