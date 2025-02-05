<?php get_header(); ?>

<div class="container">
    <h1>Bem-vindo ao ConsultorCom</h1>
    <p>Consultoria em comunicação estratégica e inovação.</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
