<?php

namespace app\models;

use CoreAnele\Model;
use RedBeanPHP\R;

class Main extends Model
{
    public function get_names(): array
    {
        return R::findAll('name');
    }
}