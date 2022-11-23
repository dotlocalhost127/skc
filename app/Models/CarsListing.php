<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithFileUploads;


class CarsListing extends Model
{
    protected $fillable = ['images'];
    use HasFactory;
}
