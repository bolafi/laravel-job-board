<?php

namespace App\Models;

use App\Http\Controllers\PostController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    use HasUuids;
    // Primary Key
    protected $primaryKey = "id";

    protected $keyType = "string"; // UUID - Universal Unique Identefier

    public $increamenting = false;
    use HasFactory;

    protected $table = "comment";

    protected $fillable = ['author', 'content', 'post_id'];

    protected $guarded = ['id'];

    // Define the reference to Post Model

    /* new relation create field like function which 
       will create a relation with Post & Comment
       which will save the FK in this field
    */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
