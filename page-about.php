<?php
/**
 * About page template
 */
get_header();
crispydiv_page_header( array(
	'bg-color' => 'background-purple',
	'corner-accent-color' => 'bottom-right white-white',
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

<section class="history-section background-gray">
	<div class="inner medium">
		<div class="history-grid">
            <div class="history-grid-content">
                <span class="history-title h5">A Brief History</span>
                <p>Crispy Div is the brainchild of <a class="homepage-icon" href="https://seanchdavis.com/" title="Sean Davis Homepage" target="_blank">Sean Davis</a>, a web developer and designer from St. Louis, Missouri now living in Rotterdam, Netherlands. Sean started building websites in 2007 with heavy focus on WordPress beginning in 2008 (<a href="https://profiles.wordpress.org/sdavis2702/" target="_blank">Sean's WordPress profile</a>).</p>
                <p>As the first employee and eventual Partner at <a href="https://sandhillsdev.com/about/" target="_blank">Sandhills Development</a>, Sean co-owned and helped design, develop, and maintain several popular WordPress plugins such as <span class="semi-heavy">Easy Digital Downloads</span>, <span class="semi-heavy">AffiliateWP</span>, and <span class="semi-heavy">Restrict Content Pro</span> before acquisition.</p>
                <p>Before his 7+ years at Sandhills, Sean developed a WordPress theme framework called <span class="semi-heavy">Volatyl</span> along with many other WordPress themes and plugins. Sean has also contributed to the <span class="semi-heavy">Twenty Sixteen</span> core WordPress theme, the popular WordPress starter theme <span class="semi-heavy">Underscores (_s)</span>, and <span class="semi-heavy">WordPress core</span> itself.</p>
            </div>
            <div class="history-grid-media">
                <div class="history-grid-media-inner">
                    <div class="history-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sean-davis-headshot.png" alt="Sean Davis" />
                    </div>
					<p class="sean-label"><span class="name">Sean Davis</span><span class="title">Web Developer & Designer</span><span class="education"><abbr title="Bachelor of Science">BSc</abbr> Information Systems</span></p>
                    <div class="link-grid">
						<a class="homepage-icon" href="https://seanchdavis.com/" title="Sean Davis Homepage" target="_blank"><img src="<?php echo THEME_IMAGES . 'icons/circle-user-sharp-solid-full.svg'; ?>" alt="Homepage Icon"></a><a class="github-icon" href="https://github.com/SeanChDavis" title="Sean Davis on GitHub" target="_blank"><img src="<?php echo THEME_IMAGES . 'icons/github-brands-solid-full.svg'; ?>" alt="GitHub Icon"></a><a class="wordpress-icon" href="https://profiles.wordpress.org/sdavis2702/" title="Sean Davis on WordPress" target="_blank"><img src="<?php echo THEME_IMAGES . 'icons/wordpress-brands-solid-full.svg'; ?>" alt="WordPress Icon"></a>
                    </div>
<!--                    <p>-->
<!--		                --><?php
//		                crispydiv_button(
//			                array(
//				                'text' => 'Email Sean Directly',
//				                'url' => 'https://seanchdavis.com/contact',
//				                'classes' => array( 'button', 'purple', 'outline' ),
//			                )
//		                );
//		                ?>
<!--                    </p>-->
                </div>
            </div>
		</div>
	</div>
</section>

<section class="who-works">
    <div class="section-heading element-spacing medium corner-accent black-pink">
        <h2 class="section-title h2">Working Together</h2>
        <div class="section-description">
            <p>Sean is the sole developer and designer behind Crispy Div. However, a network of talented individuals (curated by Sean) may come together to work on any given project. <strong>It all depends on the scope and needed resources.</strong> If we're a good fit for each other, here's generally how things go:</p>
        </div>
    </div>
    <div class="how-we-work-grid general-grid large border-top-over-white">
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/comment-light-full.svg'; ?>" alt="Comments Icon">
				</span>
                <h3 class="grid-item-title">1. Consult</h3>
                <p>Meet to discuss project goals and gather information about your target audience, brand, and any specific functionality that you want to include on the website.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/presentation-screen-light-full.svg'; ?>" alt="Presentation Icon">
				</span>
                <h3 class="grid-item-title">2. Propose</h3>
                <p>Based on information gathered during consultation, you will be presented with a proposal outlining the scope of work, timeline, and cost for the project.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/palette-light-full.svg'; ?>" alt="Palette Icon">
				</span>
                <h3 class="grid-item-title">3. Design</h3>
                <p>Upon agreement, Crispy Div will start designing. This may include wireframes and mockups to give you an idea of how the website will look and function.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/code-light-full.svg'; ?>" alt="Code Icon">
				</span>
                <h3 class="grid-item-title">4. Develop</h3>
                <p>With an approved design, the development phase will begin. This includes technical implementation and testing the website to ensure it is fully functional.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/rocket-launch-light-full.svg'; ?>" alt="Rocket Launch Icon">
				</span>
                <h3 class="grid-item-title">5. Launch</h3>
                <p>After successful design, development, and configuration, we are clear to launch your newly designed website and make it live for the public to enjoy.</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/screwdriver-wrench-light-full.svg'; ?>" alt="Screwdriver Wrench Icon">
				</span>
                <h3 class="grid-item-title">6. Maintain</h3>
                <p>If it makes sense for your business, Crispy Div will provide ongoing maintenance and support to ensure that the website stays up-to-date and is functioning properly.</p>
            </div>
        </div>
    </div>
</section>

<section class="footer-lead-cta element-spacing large">
    <div class="service-content">
        <span class="footer-lead-cta-title h4">Let's have a conversation<small class="highlight-text">.</small></span>
        <p>If you believe we're a good fit, let's work. If you have questions, just reach out.</p>
        <?php
        crispydiv_button(
            array(
                'text'  => 'Start the Conversation',
                'url'  => home_url( '/contact' ),
                'classes' => array( 'button', 'large' ),
            )
        );
        ?>
    </div>
</section>

<?php
get_footer();