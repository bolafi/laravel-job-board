<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    use HasUuids;
    // Primary Key
    protected $primaryKey = "id";

    protected $keyType = "string"; // UUID - Universal Unique Identefier

    public $increamenting = false;
    protected $table = "tag";

    // fields that can be updated
    protected $fillable = ['title'];
    // fields that can't be updated (readonly)
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

}
