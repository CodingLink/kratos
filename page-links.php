<?php
/**
 * 友情链接模板
 * @author Seaton Jiang <seaton@vtrois.com>
 * @license MIT License
 * @version 2020.03.14
 */

get_header(); ?>
<div class="k-main <?php echo kratos_option('top_select', 'banner'); ?>" style="background:<?php echo kratos_option('g_background', '#f5f5f5'); ?>">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 details">
                <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
                    <div class="article py-4">
                        <div class="header text-center">
                            <h1 class="title m-0"><?php the_title(); ?></h1>
                        </div>
                        <div class="content">
						<div class="linkpage">
                            <hr/>
                            <ul><?php
                            $bookmarks = get_bookmarks(array('orderby'=>'rand'));
                            if(!empty($bookmarks)){
                                foreach($bookmarks as $bookmark){
                                    $friendimg = $bookmark->link_image;
                                    if(empty($friendimg)){
                                        echo '<li><a href="'.$bookmark->link_url.'" target="_blank"><img src="'.get_template_directory().'/images/avatar.png"><h4>'.$bookmark->link_name.'</h4><p>'.$bookmark->link_description.'</p></a></li>';
                                    } else {
                                        echo '<li><a href="'.$bookmark->link_url.'" target="_blank"><img src="'.$bookmark->link_image.'"><h4>'.$bookmark->link_name.'</h4><p>'.$bookmark->link_description.'</p></a></li>';
                                    }
                                }
                            } ?>
                            </ul>
                            <hr/>
                        </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php comments_template(); ?>
            </div>
            <div class="col-lg-4 sidebar d-none d-lg-block">
                <?php dynamic_sidebar('sidebar_tool'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>