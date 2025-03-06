<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $fillable=[
<<<<<<< HEAD
        'name',
        'type',
        'mail',
        'address',
        'city',
        'state',
        'postal_code'
        ];
=======

    ];
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0

    /**
     * Get all of the comments for the Customer
     * Un cliente puede tener muchas facturas
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
