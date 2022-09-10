<?php get_header();?>
<section class="section-box section-box--disc">
  <div class="section-box__header js-section-box__header">
    <h2 class="section-box__title"><?php the_title(); ?></h2>
    <i class="section-box__icon js-section-box__icon"></i>
  </div>
  <div class="section-box__content js-section-box__content"><?php the_content(); ?></div>
  <figure class="disc-img"><img src="<?php $disc = SCF::get('img_jacket'); echo esc_url(wp_get_attachment_url($disc));?>" alt="" /></figure>
</section>
<?php get_footer();?>
