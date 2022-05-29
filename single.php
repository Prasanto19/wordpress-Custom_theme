<?php get_header(); 
while (have_posts()){
    the_post();
?>

    <h2 class="page-heading"><?php the_title(); ?></h2>

    <div class="card-meta" style="margin-bottom:10px">
        Posted By <?php the_author(); ?> on <?php the_time('F j, Y');?> 
        <?php if(get_post_type()=='post') { ?> 
        in <a href="#"><?php echo get_the_category_list(','); ?></a>
        <?php }?>
    </div>

    <div id="post-container">
      <section id="blogpost">
        <div class="card">
        <?php if(has_post_thumbnail()) { ?>
          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="Card Image">
          </div>
          <?php }?>
          <div class="card-description">
            <?php the_content();?>
          </div>
        </div>
        <div id="comments-section">
          <?php 
          
            $fields = array(
              'author' => 
              '<input placeholder = "Name" id="author" name="author" type="text" value="" size="30" maxlength="245" />',
                      esc_attr( $commenter['comment_author'] ),
                      ( $req ? $required_attribute : '' ),
              'email'  => 
                      '<input placeholder = "Email" id="email" name="email"  size="30" maxlength="100" aria-describedby="email-notes" />',
                      esc_attr( $commenter['comment_author_email'] ),
                      ( $req ? $required_attribute : '' ),
          );
          unset( $fields['cookies'] );
          $args = array(
            'title_reply' => 'Share Your thoughts',
            'fields' => $fields,
            'comment_field' => '<textarea placeholder = "Write your comment" id="comment" name="comment" cols="45" rows="8" aria-required = "true">'.'</textarea>',
            'comment_notes_before' => '<p class="comment-notes">Your Email will not be published. *All fields are required.</p>'

          );
          
            comment_form($args);
            $comments_number = get_comments_number();
            if($comments_number!=0) {
            ?>  
            <div class ="comments">
                <h3>What others say </h3>
                <ol class="all-comments">
                    <?php 
                      $comments =get_comment(array(
                        'post_id' => $post -> ID,
                        'status' => 'approve',
                      ));
                      wp_list_comments(array(
                        'per_page' =>15
                      ))
                    ?>
                </ol>
            </div>

            <?php } ?> 
          
        </div>
  
      </section>
      <?php } ?>

      <aside id="sidebar">
        <?php dynamic_sidebar('main_sidebar');?>
      </aside>
    </div>
<?php get_footer(); ?>