<?php get_header(); ?>
    <div id="banner">
        <h1>&lt;Wordpress Custom Theme/&gt;</h1>
        <h3>Learn coding from scratch</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/blog') //display page-blog page?>">
            <h2 class="section-heading">All Blogs</h2>
        </a>

        <section>

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );
            $blogposts = new WP_Query($args);

            while($blogposts -> have_posts()) {
                $blogposts -> the_post();

            
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

        <a href="<?php echo site_url('/projects') //display page-projects page?>">
        	<h2 class="section-heading">All Projects</h2>
    	</a>

        <section>
        <?php
            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => 2,
            );
            $projects = new WP_Query($args);

            while($projects -> have_posts()) {
                $projects -> the_post();

            
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
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(),30/*30 character*/); //Post excerpt with trimming the spaces?>
                    </p>
                    <a href="<?php echo the_permalink(); //Post link?>" class="btn-readmore">Read more</a>
                </div>
            </div>
            <?php   
                } //close while loop
                wp_reset_query(); //It's is a good practice if we use custom query
            ?>
        </section>

        
<?php get_footer(); ?>