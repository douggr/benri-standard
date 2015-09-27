<?php

/**
 * {@inheritdoc}
 */
return [
    'resources' => [
        'multidb'  => [
            'default' => [
                'adapter'   => 'PDO_PGSQL',
                'charset'   => 'utf8',
                'dbname'    => getenv('DATABASE_URL') ?: 'db://forge:forge@localhost/daryl',
                'host'      => '',
                'password'  => '',
                'port'      => '',
                'username'  => '',
            ],
        ],
    ],
];
