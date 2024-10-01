<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseArt extends Model
{
    protected $table = 'response_arts';
    public $fillable = [
        'response_id',
        'no_art',
        'nama_art',
        'r401',
        'r402',
        'r403',
        'r405',
        'r406',
        'r408',
        'r409',
        'r410',
        'r411',
        'r412',
        'r413',
        'r414',
        'r415',
        'r416A',
        'r416B',
        'r417',
        'r418',
        'r420A',
        'r420B',
        'r421',
        'r422',
        'r423',
        'r424',
        'r425',
        'r426',
        'r427',
        'r428A',
        'r42B',
        'r428C',
        'r428D',
        'r428E',
        'r428G',
        'r428H',
        'r428I',
        'r428J',
        'r429',
        'r430',
        'r431A',
        'r431B',
        'r431C',
        'r431D',
        'r431E',
        'r431F',
    ];
    use HasFactory;
}
