<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Home extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
            'address',
            'acreage',
            'number_floors',
            'number_rooms',
            'images',
            'images_hd',
            'note',
            'status',
            'price',
            'price_coc',
            'payment_period',
            'day_start',
            'day_end',
           'code_home',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'image_citizen_id' => 'array'
        ];
    }
}
