<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Keuangan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">

        <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/boostrap/bootstrap.min.css') ?>" rel="stylesheet">

        <style>
            div.dataTables_wrapper {
                width: 100%;
                margin: 0 auto;
            }
        </style>
    </head>    
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">            
            <?= $this->include('templates/header'); ?>        
            <div class="app-main">
                <?= $this->include('templates/sidebar'); ?>
                <?= $this->renderSection('content'); ?>
            </div>
        </div>        

        <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/boostrap/bootstrap.min.js') ?>"></script>       
    </body>
</html>