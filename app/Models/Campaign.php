<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    /**
     * The attributes that are not mass assignable
     * @var string[]
     */
    protected $guarded = ['id'];

    /**
     * Returns the user who owns/created the campaign
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id')->get();
    }

    /**
     * Returns the messages within this campaign
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function messages()
    {
        return $this->hasMany(CampaignMessage::class)->get();
    }
}
