<?php

namespace App\Components;

class AdminDataTable
{
    protected array $models;
    protected array $functions;

    public function __construct(array $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    public function render()
    {
        include __DIR__ . '/../templates/admin/adminDataTable.php';


        /*
        foreach ($this->models as $key => $model) {
            foreach ($this->functions as $function) {
                return $function($model);
            }
        }
        */
    }

}