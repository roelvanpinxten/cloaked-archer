<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subscription extends Model {

    protected $fillable = [
        'handset_name',
        'provider_name',
        'subscription_name',
        'subscription_duration',
        'subscription_minutes',
        'subscription_data',
        'connection_fee',
        'month_price_total',
        'month_price_action',
        'month_price_handset',
        'month_price_subscription',
        'handset_price_without_subscription',
        'handset_price_with_subscription',
        'wposid',
        'valid_until'
    ];

    protected $dates =['valid_until'];

    public function setValidUntilAttribute($date)
    {
        $this->attributes['valid_until'] = Carbon::parse($date);
    }

    public function getValidUntilAttribute($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }
}
