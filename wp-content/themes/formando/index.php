<?php get_header(); ?>

<section class="Directed container">
    <h2>¿A quien va dirigido?</h2>
    <div class="row between center">

        <?php $my_query = new WP_Query('category_name=dirigido &showposts=10'); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <article class="col-5 medium-8 small-16">
            <figure><?php echo the_post_thumbnail(); ?></figure>
            <h3><?php the_title() ?></h3>
            <p><?php the_content() ?></p>
            </article>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </div>
</section>
<section class="Learn ">
    <div class="container">
        <h2>Que aprenderas</h2>
        <div class="row between ">

            <?php $my_query = new WP_Query('category_name=aprenderas &showposts=10'); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <article class="col-4 medium-5 small-16">
                    <figure><img src="<?php echo get_the_post_thumbnail_url()?>" alt=""></figure>
                    <h3><?php the_title() ?></h3>
                    <p><?php the_content() ?></p>
                </article>
            <?php endwhile;
            wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<section class="Why row middle container">
    <div class="row center middle  medium-8 col-8 small-16">
        <figure><img src="<?php bloginfo('template_url') ?>/assets/img/why.png" alt=""></figure>
    </div>
    <article class=" col-8 medium-8 small-16 ">
        <?php $register = get_page_by_title('entrenamiento') ?>
        <h2><?php print_r(get_post_meta($register->ID, 'titulo', true)); ?></h2>
        <?php echo $register->post_content ?>
    </article>
</section>
<section class="Testimonials ">
    <div class="container">
        <div class="row center">
            <svg width="43px" height="30px" viewBox="0 0 43 30" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">

                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Desktop" transform="translate(-491.000000, -1776.000000)" fill="#0A4C7D">
                        <g id="Group-18" transform="translate(0.000000, 1371.000000)">
                            <g id="Group-3" transform="translate(491.000000, 405.000000)">
                                <path d="M10.6200393,30 C15.9601465,30 20.2891586,25.601394 20.2891586,20.1754386 C20.2891586,14.7494832 15.9601465,10.3508772 10.6200393,10.3508772 C10.1225709,10.3508772 9.62703798,10.3187059 9.15663976,10.4626681 C8.37542237,10.7017544 9.92938796,6.66666667 14.0732962,3.68421053 C12.8646563,1.92982456 12.3466678,1.40350877 11.3106907,0 C0.2602687,5.0877193 -0.086900999,15.0877193 0.431087533,20.1754386 C0.949076065,25.2631579 5.27993223,30 10.6200393,30 Z"
                                      id="Oval"></path>
                                <path d="M33.3308807,30 C38.6709878,30 43,25.601394 43,20.1754386 C43,14.7494832 38.6709878,10.3508772 33.3308807,10.3508772 C32.8334123,10.3508772 32.3378794,10.3187059 31.8674812,10.4626681 C31.0862638,10.7017544 32.6402294,6.66666667 36.7841376,3.68421053 C35.5754977,1.92982456 35.0575092,1.40350877 34.0215321,0 C22.9711101,5.0877193 22.6239404,15.0877193 23.1419289,20.1754386 C23.6599175,25.2631579 27.9907736,30 33.3308807,30 Z"
                                      id="Oval"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <p>
            Gracias a este curso pude realizarme como profesional aumentar mis ingresos y poder tener la calidad de
            vida que siempre soñe para mi y toda mi familia gracias. Gracias a este curso pude realizarme como
            profesional aumentar mis ingresos.

        </p>
        <em class="row end">
            <span>Juan Ramos, <b>Ing Sistemas</b></span>
        </em>
        <ul class="row around">
            <li><img src="<?php bloginfo('template_url') ?>/assets/img/t1.png" alt=""></li>
            <li><img src="<?php bloginfo('template_url') ?>/assets/img/t2.png" alt=""></li>
            <li><img src="<?php bloginfo('template_url') ?>/assets/img/t3.png" alt=""></li>
            <li><img src="<?php bloginfo('template_url') ?>/assets/img/t4.png" alt=""></li>
        </ul>
    </div>
</section>
<section class="Register">
    <?php $register = get_page_by_title('registro') ?>
    <div class="container">

        <h2><?php print_r(get_post_meta($register->ID, 'titulo', true)); ?></h2>
        <button>$300.000</button>
        <h2>Adémas te incluimos en el curso</h2>
        <div class="row center">
            <?php echo $register->post_content ?>
        </div>
    </div>
</section>
<button class="Button-fixed">QUÍERO QUE ME CONTACTEN</button>

<script>


    var last_known_scroll_position = 0;
    var ticking = false;
    const Bf = document.querySelector('.Button-fixed'),
        Directed = document.querySelector('.Directed'),
        Button = document.querySelector('.Button-fixed')
    Form = document.querySelector('form')
    ;
    console.log(Directed.offsetTop)
    Button.addEventListener('click', function () {
        zenscroll.toY(Form.offsetTop)
    })

    function doSomething(scroll_pos) {

        if (scroll_pos > Directed.offsetTop) {
            Bf.classList.add('show')
        } else {
            Bf.classList.remove('show')
        }
    }
    window.addEventListener('scroll', function (e) {
        last_known_scroll_position = window.scrollY;
        if (!ticking) {
            window.requestAnimationFrame(function () {
                doSomething(last_known_scroll_position);
                ticking = false;
            });
        }
        ticking = true;
    });


</script>
<?php wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/zenscroll-min.js',
    [], 1.1, true); ?>
<?php get_footer(); ?>

