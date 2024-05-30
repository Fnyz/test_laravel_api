<?php
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('workwiseChannel', function () {
     return true;
});
