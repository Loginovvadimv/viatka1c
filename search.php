<?php
//Template name: Поиск
get_header();
get_search_form();
?>


<section class="newSection search">
    <div class="container">
        <h1 class="title search__title"><?= get_the_title() ?></h1>
        <div class="search__wrapper">
            <?php
            // if your form is generated using get_search_form() you do not need to do this
            // as SearchWP Live Search does it automatically out of the box
            ?>

            <form action="" method="get">
                <div class="form__wrap">
                    <p>
                        <label for="s"><img src="<?= ASSETS ?>/images/icons/search.svg" alt="search"><?php _e( '' , 'mytextdomain' ); ?></label>
                        <input type="text" name="s" id="s" placeholder="Введите текст" data-swplive="true" />
                    </p>
                    <p>
                        <button type="submit"><?php _e( '' , 'mytextdomain' ); ?></button>
                    </p>
                </div>

            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
