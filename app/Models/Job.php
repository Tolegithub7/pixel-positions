<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    public function  employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
    public function tag(string $name): void
    {
        $tag = Tag::firstorCreate(['name' => $name]);   
        $this->tags()->attach($tag);
    }
    public function tags(): BelongsToMany 
    {
        return $this->belongsToMany(Tag::class);
    }
}
