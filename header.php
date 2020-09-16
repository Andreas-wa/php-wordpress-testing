<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>

    <div class="header">
    <h1><?php echo get_bloginfo('name') ." - ". get_bloginfo('description'); ?></h1>

    <?php wp_nav_menu(array('header-menu' => 'header_menu')); ?>
    
    </div>
    
<?= do_action('wp_head'); ?>