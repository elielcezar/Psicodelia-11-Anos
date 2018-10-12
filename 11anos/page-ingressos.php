<?php /* Template Name: Ingressos */ ?>


<?php $args = array(
            'post_type'         => 'product',
            'post_status'       => 'publish',
            'posts_per_page'    => -1,
            'orderby'           => 'title',
            'order'             => 'ASC',               
            'tax_query' => array(
                array(
                    'taxonomy'  => 'product_type',
                    'field'     => 'slug',
                    'terms'     => array('simple'),
                    'operator'  => 'IN'
                )
            )
        );

        $loop = new WP_Query( $args );
        $stock_count = array();
        while ( $loop->have_posts() ) : $loop->the_post();

                        global $product;
                        $stock_count[] = $product->get_stock_quantity();

        endwhile; 


        // count the array values and output them
        echo "<h2>Stock Count: ".array_sum($stock_count)."</h2>";
        ?>