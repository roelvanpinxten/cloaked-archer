<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class provider extends Model {

	protected $fillable = [
        'provider',
        'type',
        'name',
        'commission',
        'handset_category',
        'valid_until'
    ];

    protected $dates =['valid_until'];

    public function setValidUntilAttribute($date)
    {
        $this->attributes['valid_until'] =Carbon::parse($date);
    }

    public function scopeProvider($query, $providerName)
    {
        $query->where('provider',  '=', $providerName);
    }


}

