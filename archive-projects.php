<?php get_header(); ?>
            <h2 class="page-heading">All Projects </h2>
        <section>

        <?php
            
            // $args = array (
            //     'post_type' => 'projects',
            //     'post_per_page' => 2
        
            // );
            // $blogposts = new Wp_Query($args);
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
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

        

       
<?php get_footer(); ?>