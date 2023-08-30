<?php get_header('', array( 'body-classes' => 'team-index') ); ?>

<main>

<header>
<h1>Our Team</h1>

<?php
    $introduction = get_field('introduction');
    if( $introduction ): 
?>
<p><?php echo esc_html( $introduction ); ?></p>
<?php endif; ?>

</header>

<?php
    $staff_listing = get_field('staff_listing');
?>


<article class="persons">
    <h2>Staff</h2>
    <ul>
        <?php foreach($staff_listing as $staff_person) : ?>
        <?php
            $permalink = get_permalink( $staff_person->ID );
            $title = get_the_title( $staff_person->ID );
            $position_title = get_field( 'position_title', $staff_person->ID );
         ?>
        <li>
            <article class="person">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <span class="title"><?php echo $position_title; ?></span>
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $staff_person->ID, 'full' ); ?>" />
                </figure>
                <p>Mari came to CC in 2015 after three years at the Mozilla Foundation. Prior to that, she held similar administrative roles&hellip;</p>
            </article>
        </li>
        <? endforeach; ?>
    </ul>
</article>

<?php
    $board_listing = get_field('board_listing');
?>
<article class="persons">
    <h2>Board</h2>
    <ul>
        <?php foreach($board_listing as $board_person) : ?>
        <?php
            $permalink = get_permalink( $board_person->ID );
            $title = get_the_title( $board_person->ID );
            $position_title = get_field( 'position_title', $board_person->ID );
         ?>
        <li>
            <article class="person">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <span class="title"><?php echo $position_title; ?></span>
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $board_person->ID, 'full' ); ?>" />
                </figure>
                <p>Mari came to CC in 2015 after three years at the Mozilla Foundation. Prior to that, she held similar administrative roles&hellip;</p>
            </article>
        </li>
        <? endforeach; ?>
    </ul>
</article>

<?php
    $emeritus_listing = get_field('emeritus_listing');
?>
<article class="persons">
    <h2>Emeritus</h2>
    <ul>
        <?php foreach($emeritus_listing as $emeritus_person) : ?>
        <?php
            $permalink = get_permalink( $emeritus_person->ID );
            $title = get_the_title( $emeritus_person->ID );
            $position_title = get_field( 'position_title', $emeritus_person->ID );
         ?>
        <li>
            <article class="person">
                <h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
                <span class="title"><?php echo $position_title; ?></span>
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $emeritus_person->ID, 'full' ); ?>" />
                </figure>
                <p>Mari came to CC in 2015 after three years at the Mozilla Foundation. Prior to that, she held similar administrative roles&hellip;</p>
            </article>
        </li>
        <? endforeach; ?>
    </ul>
</article>


</main>

<?php get_footer(); ?>
