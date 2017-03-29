<?php

return array(
        'list/([a-z]+)/([a-z_]+)/page-([0-9]+)' => 'index/list/$1/$2/$3',
        'list/([a-z]+)/([a-z_]+)' => 'index/list',
        'add' => 'index/add',
        'index' => 'index/index',
        '' => 'index/index',
);
