<?php
$tags = get_the_tags();
get_header();
?>

<main id="main">
  <section id="content">
    <h1><?php the_title() ?></h1>
    <?php the_content(); ?>

    <?php if (!empty($tags)) { ?>
      <div class="tags">
        Tags:
        <?php
        foreach ($tags as $tag) {
        ?>
          <span class="<?php echo esc_attr($tag->slug) ?>"><?php echo esc_attr($tag->description) ?></span>
        <?php
        }
        ?>
      </div>
    <?php } ?>

  </section>
</main>


<?php
get_footer();
