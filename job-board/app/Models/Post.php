<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasUuids;
    // Primary Key
    protected $primaryKey = "id";

    protected $keyType = "string"; // UUID - Universal Unique Identefier

    public $increamenting = false;


    protected $table = "post";

    // fields that can be updated
    protected $fillable = ['title', 'body', 'author', 'published'];
    // fields that can't be updated (readonly)
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
