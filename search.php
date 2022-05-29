<?php get_header(); ?>

        <h2 class="page-heading">Search results for <?php echo get_search_query(); ?> </h2>
        <?php if(have_posts()) {?>
        <section>

        <?php
            

            while( have_posts()) {
                the_post();

            
        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); //Post link?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());//Add thumbnail url ?>" alt="Card Image">
                        <!-- <img src="<?php //echo get_template_directory_uri();//Add root directory ?>/img/blogpost-image-one.jpg" alt="Card Image"> -->
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php echo the_permalink(); //Post link?>">
                        <h3><?php echo the_title(); //Post Title?></h3>
                    </a>

                    <div class="card-meta">
                        Posted By <?php the_author(); ?> on <?php the_time('F j, Y');?> 
                        <?php if(get_post_type()=='post') { ?> 
                        in <a href="#"><?php echo get_the_category_list(','); ?></a>
                        <?php }?>
                    </div>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(),30/*30 character*/); //Post excerpt with trimming the spaces?>
                    </p>
                    <a href="<?php echo the_permalink(); //Post link?>" class="btn-readmore">Read more</a>
                </div>
            </div>
            <?php 
                } 
                wp_reset_query(); //It's is a good practice if we use custom query
            ?>

            
        </section>
        <?php }
        else {
        ?>

        <!-- <div class = "no-results">
            <h2>Couldn't find anything! (Did you just mistype something?)</h2>
            <h3>Don't worry</h3>
            <h3>Check out the following...</h3>
            <ul>
                <li>
                    <a href="<?php //echo site_url('') ?>">Home</a>
                </li>
                <li>
                    <a href="<?php //echo site_url('/blog') ?>">Blog</a>
                </li>
                <li>
                    <a href="<?php //echo site_url('/projects') ?>">Projects</a>
                </li>
                <li>
                    <a href="<?php //echo site_url('/about') ?>">About</a>
                </li>
            </ul>
        </div> -->

        <?php include '404.php';  }?>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

       
<?php get_footer(); ?>