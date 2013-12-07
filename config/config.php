<?php
    function getConfig() {
        $config = array(
            'db' => array(
                'host' => 'sample_host',
                'user' => 'sample_user',
                'pass' => 'sample_pass',
                'dbname' => 'sample_dbname'
            ),
            'files' => array(
                'avatar_extentions' => array( 'jpg', 'png', 'jpeg' )
            ),
            'paths' => array(
                'avatar_path' => 'sample_path'
            )
        );
        return $config;
    }
?>
