<?php
    use Illuminate\Support\Facades\Route;

    //权限管理
    Route::get('ddoc/{continue}',
        [
            'as'=>'ddoc',
            'uses'=>'Jormin\DDoc\Controllers\DDocController@index'
        ]
    );
    Route::get('ddoc/export/{type}/{continue}',
        [
            'as'=>'ddoc.export',
            'uses'=>'Jormin\DDoc\Controllers\DDocController@export'
        ]
    );
