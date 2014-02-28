<?php
    require_once 'migrate.php';

    Migration::createTable( 
        'users', 
        [
            'id' => 'int(11) NOT NULL AUTO_INCREMENT',
            'username' => 'varchar(50) COLLATE utf8_unicode_ci NOT NULL',
            'password' => 'varchar(200) COLLATE utf8_unicode_ci NOT NULL',
            'email' => 'varchar(200) COLLATE utf8_unicode_ci NOT NULL',
            'salt' => 'varchar(200) COLLATE utf8_unicode_ci NOT NULL',
            'avatarid' => 'int(11) NOT NULL'
        ],
        [ 
            [ 'type' => 'unique', 'field' => [ 'username', 'email' ] ],
            [ 'type' => 'primary', 'field' => ['id'] ]
        ]
    );
    
    Migration::createTable( 
        'images', 
        [
            'imageid' => 'int(11) NOT NULL AUTO_INCREMENT',
            'userid' => 'int(11) NOT NULL',
            'imagename' => 'varchar(200) COLLATE utf8_unicode_ci NOT NULL',
        ],
        [ 
            [ 'type' => 'primary', 'field' => ['imageid'] ]
        ]
    );
?>
