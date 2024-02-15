<?php
    get_header();
?>

    <main class="section content first-section">
        <?php 
            $categoria = get_queried_object();
        ?>
        <h2 class="text-primary text-center">Category: <?php echo $categoria->name; ?></h2>
        <ul class="listado-grid">
            <?php
                while( have_posts() ) { 
                    the_post();
                    get_template_part('template-parts/blog');
                }
            ?>
        </ul>
    </main>

<?php
    get_footer();
?>