<section class="section conf-why" id="top">
  <div class="container">
    <div class="conf-why__wrapper">
      <div class="conf-why__content-top">
        <h2 class="conf-why__title"><?php the_field('dlaczego_warto_nagłówek'); ?></h2>
        <p class="conf-why__text"><?php the_field('dlaczego_warto_tekst'); ?></p>
        <a class="conf-btn" href="#harmonogram">Kup bilet</a>
      </div>
      <div class="conf-why__content-bottom">
        <?php if (have_rows('dlaczego_warto_karta')) :
          while (have_rows('dlaczego_warto_karta')) : the_row(); ?>
            <div class="conf-why__item">
              <p class="conf-why__item-number"><?php the_sub_field('karta_numer'); ?></p>
              <img class="conf-why__item-icon" src="<?php the_sub_field('karta_ikona'); ?>" />
              <p class="conf-why__item-text"><?php the_sub_field('karta_tytuł'); ?></p>
            </div>
        <?php endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</section>