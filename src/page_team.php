<?php /* Template Name: Index - Team */ ?>

<?php get_header('', array( 'body-classes' => 'default-page team-index') ); ?>

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

<?php
    $staff_listing = get_field('staff_listing');
    if( !empty($staff_listing) ) :
?>

<article class="persons">
    <h2>Staff</h2>
    <ul>
        <?php foreach($staff_listing as $staff_person) : ?>
        <?php
            $permalink = get_permalink( $staff_person->ID );
            $title = get_the_title( $staff_person->ID );
            $position_title = get_field( 'position_title', $staff_person->ID );
            $excerpt = get_the_excerpt( $staff_person->ID );
         ?>
        <li>
            <article class="person">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <span class="title"><?php echo $position_title; ?></span>

                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $staff_person->ID, 'thumbnail' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($staff_person->ID), '_wp_attachment_image_alt', true ); ?>" />
                </figure>

                <p><?php echo wp_trim_words($excerpt, 15); ?></p>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</article>
<?php endif; ?>

<?php
    $board_listing = get_field('board_listing');
    if( !empty($board_listing) ) :

?>

<article class="persons">
    <h2>Board</h2>
    <ul>
        <?php foreach($board_listing as $board_person) : ?>
        <?php
            $permalink = get_permalink( $board_person->ID );
            $title = get_the_title( $board_person->ID );
            $position_title = get_field( 'position_title', $board_person->ID );
            $excerpt = get_the_excerpt( $board_person->ID );
         ?>
        <li>
            <article class="person">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <span class="title"><?php echo $position_title; ?></span>
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $board_person->ID, 'thumbnail' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($board_person->ID), '_wp_attachment_image_alt', true ); ?>" />
                </figure>

                <p><?php echo wp_trim_words($excerpt, 15); ?></p>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</article>
<?php endif; ?>

<?php
    $emeritus_listing = get_field('emeritus_listing');
    if( !empty($emeritus_listing) ) :
?>

<article class="persons">
    <h2>Emeritus</h2>
    <ul>
        <?php foreach($emeritus_listing as $emeritus_person) : ?>
        <?php
            $permalink = get_permalink( $emeritus_person->ID );
            $title = get_the_title( $emeritus_person->ID );
            $position_title = get_field( 'position_title', $emeritus_person->ID );
            $excerpt = get_the_excerpt( $emeritus_person->ID );
         ?>
        <li>
            <article class="person">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <span class="title"><?php echo $position_title; ?></span>
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $emeritus_person->ID, 'thumbnail' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($emeritus_person->ID), '_wp_attachment_image_alt', true ); ?>" />
                </figure>

                <p><?php echo wp_trim_words($excerpt, 15); ?></p>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</article>
<?php endif; ?>


<?php
    $advisory_listing = get_field('advisory_council_listing');
    if( !empty($advisory_listing) ) :
?>

<article class="persons">
    <h2>Advisory Council</h2>
    <ul>
        <?php foreach($advisory_listing as $advisory_person) : ?>
        <?php
            $permalink = get_permalink( $advisory_person->ID );
            $title = get_the_title( $advisory_person->ID );
            $position_title = get_field( 'position_title', $advisory_person->ID );
            $excerpt = get_the_excerpt( $advisory_person->ID );
         ?>
        <li>
            <article class="person">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <span class="title"><?php echo $position_title; ?></span>
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $advisory_person->ID, 'thumbnail' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($advisory_person->ID), '_wp_attachment_image_alt', true ); ?>" />
                </figure>

                <p><?php echo wp_trim_words($excerpt, 15); ?></p>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</article>
<?php endif; ?>


<?php
    $audit_listing = get_field('audit_committee_listing');
    if( !empty($audit_listing) ) :
?>

<article class="persons">
    <h2>Audit Committee</h2>
    <ul>
        <?php foreach($audit_listing as $audit_person) : ?>
        <?php
            $permalink = get_permalink( $audit_person->ID );
            $title = get_the_title( $audit_person->ID );
            $position_title = get_field( 'position_title', $audit_person->ID );
            $excerpt = get_the_excerpt( $audit_person->ID );
         ?>
        <li>
            <article class="person">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <span class="title"><?php echo $position_title; ?></span>
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $audit_person->ID, 'thumbnail' ); ?>" alt="<?php echo get_post_meta ( get_post_thumbnail_id($audit_person->ID), '_wp_attachment_image_alt', true ); ?>" />
                </figure>

                <p><?php echo wp_trim_words($excerpt, 15); ?></p>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
</article>
<?php endif; ?>

<?php
    $emeritus_listing = get_field('emeritus_listing');
    if( !empty($emeritus_listing) ) :
?>

<div class="closing">
<p><?php the_field('closing'); ?></p>
</div>


<?php endif; ?>


</main>

<?php get_footer(); ?>

