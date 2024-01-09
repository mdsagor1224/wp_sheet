<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- :::::::::::::::::: custom post query ::::::::::::::::::  -->
        <?php
            global $post;
            $args = array('posts_per_page' =>5, 'post_type'=>'slide', 'orderby'=>'menu_order','order'=>'ASC');
            $myposts = get_posts($args);
            foreach($myposts as $post ) : setup_postdata($post); ?>
    
            <?php
                $btn_text = get_post_meta($post->ID, 'btn_text', true);
                $btn_link = get_post_meta($post->ID, 'btn_link', true);
            ?>
            <!--::::::::::code :::::::::: -->
    
            <?php endforeach; wp_reset_query();?>

            
             <!-- :::::::::::::::::: custom post query END ::::::::::::::::::  -->
</body>
</html>