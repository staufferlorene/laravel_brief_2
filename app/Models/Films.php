<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Films extends Model
{

    use HasFactory;
    protected $fillable = ['titre','date', 'note', 'commentaire'];

    public static function request()
    {
    }

    public function getById (int $id):array
    {
        $films = $this->getAll();
        return Arr::get($films, $id, ['titre' => 'Film introuvable']);
    }
}
