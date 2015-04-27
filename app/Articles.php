<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articles extends Model {

    protected $fillable = [
        'provider_name',
        'article_name',
        'subscription',
        'subscription_type',
        'binding',
        'commission',
        'month_price',
        'month_price_action',
        'BAS_item_number',
        'valid_until'
    ];

    protected $dates =['valid_until'];

    public function setValidUntilAttribute($date)
    {
        $this->attributes['valid_until'] =Carbon::parse($date);
    }

    public function getValidUntilAttribute($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }

}
