<!--PARTIAL GALLERY -->
<h2><?php get_sub_field('titolo'); ?></h2>
<?php 
  $posts = get_sub_field('gallery');
  if($posts): ?>
  <ul>
    <?php foreach( $posts as $post): ?>
    <?php setup_postdata($post); ?>
    <li>
      <?php $image = get_sub_field('immagine'); ?>
      <img src="<?php echo $image ?>" alt="<?php echo $image ?>">
    </li>
    <?php endforeach; ?>
       </ul>
       <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

<!-- END PARTIAL GALLERY -->