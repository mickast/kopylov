<?php

class DashboardController
{
    public function actionForm()
    {
        require_once(ROOT. '/app/views/dashboard.php');
        return true;
    }
}

?>