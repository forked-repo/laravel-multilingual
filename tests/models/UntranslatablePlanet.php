<?php
namespace Themsaid\Multilingual\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Themsaid\Multilingual\Translatable;

class UntranslatablePlanet extends Model
{
    use Translatable;

    protected $table = 'planets';
    public $fillable = ['name'];
    public $timestamps = false;
    protected $casts = [
        'id'   => 'integer',
        'name' => 'array',
    ];

}