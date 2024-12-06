<?php get_header('', array( 'body-classes' => 'team-index') ); ?>

<main>

<header>
<h1>Our Team</h1>

<?php
     $introduction = get_field('introduction');
     if( !empty($introduction) ) :
?>
<p><?php echo esc_html( $introduction ); ?></p>
<?php endif; ?>

</header>

</main>

<?php get_footer(); ?>
