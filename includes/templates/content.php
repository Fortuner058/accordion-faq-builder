<?php
/**
 * Template for FAQ Builder
 *
 * @package a-faq-builder
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="a-faq-builder">
    <div class="afb-inner-wrapper">
        <h3 class="afb-title">Faq Title</h3>
        <ul class="afb-items">
            <?php
            if ( isset( $value['contents'] ) && ! empty( $value['contents'] ) && is_array( $value['contents'] ) && count( $value['contents'] ) > 0 ) :
                foreach( $value['contents'] as $key => $item ) :
                    $item_title = isset( $item['title'] ) ? $item['title'] : '';
                    $item_content = isset( $item['content'] ) ? $item['content'] : '';
                    if ( ! empty( $item_title ) && ! empty( $item_content ) ) :
                        ?>
                        <li id="afb-item-<?php echo esc_attr( $key ); ?>" class="afb-item afb-item-<?php echo esc_attr( $key ); ?>">
                            <div class="afb-item-inner">
                                <h3 class="afb-item-title"><?php echo esc_html( $item_title ); ?></h3>
                                <div class="afb-item-content">
                                    <p><?php echo esc_html( $item_content ); ?></p>
                                </div>
                            </div>
                        </li>
                        <?php
                    endif;
                endforeach;
            endif;
            ?>
        </ul>
    </div>
</div>