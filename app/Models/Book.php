<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'code'];

    /**
     * Get all of the issuebooks for the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function book_issues(): HasMany
    {
        return $this->hasMany(BookIssue::class);
    }
}
