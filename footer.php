<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Notes for Peace
 * @since 1.0
 * @version 1.0
 */

?>
       <!-- Footer -->
       <div class="row nfp-footer py-3">
            <div class="container">

                <!-- Contact and Socila Media Links -->
                <!-- TODO: All of the links are placeholders and need to be updated with real ones.-->
                <div class="row justify-content-center">

                    <!-- Email -->
                    <div class="px-3">
                        <a href="<?php get_bloginfo('wpurl'); ?>/contact" class="nfp-footer-icon-soc"> 
                            <svg viewBox="0 0 512 512" width="35" height="35"><path d="M101.3 141.6v228.9h0.3 308.4 0.8V141.6H101.3zM375.7 167.8l-119.7 91.5 -119.6-91.5H375.7zM127.6 194.1l64.1 49.1 -64.1 64.1V194.1zM127.8 344.2l84.9-84.9 43.2 33.1 43-32.9 84.7 84.7L127.8 344.2 127.8 344.2zM384.4 307.8l-64.4-64.4 64.4-49.3V307.8z"/></svg>
                        </a>
                    </div>
                    
                    <!-- Facebook -->
                    <div class="px-3">
                        <a href="https://www.facebook.com" class="nfp-footer-icon-soc">
                            <svg viewBox="0 0 512 512" width="30" height="30"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/></svg>
                        </a>
                    </div>
                    
                    <!-- Instagram -->
                    <div class="px-3">
                        <a href="https://www.instagram.com" class="nfp-footer-icon-soc">
                            <svg viewBox="0 0 512 512" width="33" height="33"><g><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"/><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"/><circle cx="351.5" cy="160.5" r="21.5"/></g></svg>
                        </a>
                    </div>
                    
                    <!-- Twitter -->
                    <div class="px-3">
                        <a href="https://www.twitter.com" class="nfp-footer-icon-soc">
                            <svg viewBox="0 0 512 512" width="35" height="35"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"/></svg>
                        </a>
                    </div>
                    
                    <!-- Vimeo -->
                    <div class="px-3">
                        <a href="https://www.vimeo.com" class="nfp-footer-icon-soc">
                            <svg viewBox="0 0 512 512" width="35" height="35"><path d="M420.1 197.9c-1.5 33.6-25 79.5-70.3 137.8 -46.9 60.9-86.5 91.4-118.9 91.4 -20.1 0-37.1-18.5-51-55.6 -9.3-34-18.5-68-27.8-102 -10.3-37.1-21.4-55.7-33.2-55.7 -2.6 0-11.6 5.4-27 16.2L75.7 209.1c17-14.9 33.8-29.9 50.3-44.9 22.7-19.6 39.7-29.9 51.1-31 26.8-2.6 43.3 15.8 49.5 55 6.7 42.4 11.3 68.7 13.9 79 7.7 35.1 16.2 52.7 25.5 52.7 7.2 0 18-11.4 32.5-34.2 14.4-22.8 22.2-40.1 23.2-52.1 2.1-19.7-5.7-29.5-23.2-29.5 -8.3 0-16.8 1.9-25.5 5.7 16.9-55.5 49.3-82.4 97.1-80.9C405.5 130 422.2 153 420.1 197.9z"/></svg>
                        </a>    
                    </div>

                </div>

                <!-- Message -->
                <div class="row justify-content-center">
                        <span class="nfp-footer-message">Thank you for visiting.</span>
                </div>
                   
                <!-- Player -->
                <div class="row justify-content-center">
                    <!-- create player -->
                    <?php echo do_shortcode('[ap_hap id="1" preset="dark" use_playlist_selector="1" active_playlist="-1" active_item="0" default_volume="0.5" auto_play="0" auto_load="0" random_play="0" looping_on="1" use_playlist="1" use_thumbnails_in_playlist="0" auto_open_playlist="1" use_numbers_in_playlist="1" sortable_playlist_items="0" use_playlist_scroll="1" auto_open_player_in_popup="0" auto_update_window_data="0" sound_id="tPlayer"]'); ?>
                </div>

            </div>
        </div>


        <?php wp_footer(); ?>

    </body>
</html>
