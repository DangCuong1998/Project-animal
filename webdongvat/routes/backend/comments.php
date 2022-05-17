<?php 

        Route::get('list', [
            'uses' => 'CommentController@getList',
            'as' => 'backend.comments'

        ]);
        Route::post('list', [
            'uses' => 'CommentController@postList',
            'as' => 'backend.comments'

        ]);
        Route::get('product/{id_product}', [
            'as' => 'backend.comments.getComment',
            'uses' => 'CommentController@getComment'
        ]);
        Route::get('delete/{id}', [
            'as' => 'backend.comments.getDelete',
            'uses' => 'CommentController@getDelete'
        ]);
        Route::get('deleteReply/{id}', [
            'as' => 'backend.comments.getDeleteReply',
            'uses' => 'CommentController@getDeleteReply'
        ]);
    
 Route::post('d/{id}/{alias}', [
        'as' => 'comment',
        'uses' => 'CommentController@comment'
    ]);
    Route::post('d/{id}/{alias}/{com_id}', [
        'as' => 'reply',
        'uses' => 'CommentController@reply'
    ]);
    
?>

