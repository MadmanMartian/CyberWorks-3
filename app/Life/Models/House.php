<?php
/**
 * Created by PhpStorm.
 * User: Maurice Moss
 * Date: 04/09/2017
 * Time: 21:24
 */

namespace CyberWorks\Life\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $primaryKey = 'id';

    protected $appends = [
        'owner',
        'owner_id'
    ];

    protected $fillable = [
        'pos'
    ];

    public $timestamps = false;

    public function getOwnerAttribute(): string
    {
        return $this->houseOwner()->name;
    }

    public function getOwnerIdAttribute(): int
    {
        return $this->houseOwner()->uid;
    }

    private function houseOwner()
    {
        return $this->hasOne('CyberWorks\Life\Models\Player', 'pid', 'pid')->first();
    }
}