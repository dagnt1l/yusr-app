<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contract extends Model
{
    //
    protected $fillable = ['contract_serial'];

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class);

    }

}
