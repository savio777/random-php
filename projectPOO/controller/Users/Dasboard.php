<?php

include '../../models/Users/Dashboard.php';

class DashboardController
{
    private $DashboardModels = null;

    public function __construct()
    {
        $this->DashboardModels = new DashboardModels();
    }

    public function getUsers()
    {
        return $this->DashboardModels->getUsers();
    }
}
