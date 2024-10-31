<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.rabbitseo.com
 * @since      1.0.1
 *
 * @package    Rabbitseo
 * @subpackage Rabbitseo/admin/partials
 */
$site_url = get_site_url();
$current_site_url = wp_parse_url($site_url);
$current_site_domain = $current_site_url['host']; 
 
?>
 
<div class="rabbitWrap">
	<div class="headerRabit">
		<img src="<?php echo esc_url(plugin_dir_url(__DIR__) . 'images/logo.png') ;?>" alt="<?php esc_attr_e('logo', 'rabbitseo'); ?>"/> 
	</div>
	<div class="rabbitContainer">
		<div class="row">
			<div class="col-md-8">
				<div class="p-3 pb-1">
					<h3><?php esc_attr_e('Rabbit SEO Traffic Booster overview', 'rabbitseo'); ?></h3>
					<ul>
						<li><?php esc_attr_e('Boost Traffic & Make your Website Discoverable', 'rabbitseo'); ?></li>
						<li><?php esc_attr_e('Optimize your Landing Pages', 'rabbitseo'); ?></li>
						<li><?php esc_attr_e('Build New Backlinks & Get listed in Directories', 'rabbitseo'); ?></li>
						<li><?php esc_attr_e('Get New Keywords for your Website', 'rabbitseo'); ?></li>
					</ul>
					<p><?php esc_attr_e('Every site owner wants to get more traffic and be more discoverable on the web, this is done by search engine optimization - optimize your landing pages, create backlinks to your website, get detailed analytics on the SEO status, adding the right keywords, track them on daily basis, and find out what your competitors are doing.', 'rabbitseo'); ?></p>
					<p><?php esc_attr_e('Rabbit SEO is designed to provide these services and more to the website owners, and there is no need to be an SEO expert. Our mission is to help you easily jump up your rankings, boost traffic and grow your business - for that purpose we scan & analyze your website, we create backlinks for you according to the keywords you choose, and you can use our analytics and monitoring tools to track the changes', 'rabbitseo'); ?></p>
					<br/>
					<h3 class="mb-0"><?php esc_attr_e('Suggested Keywords for your Website', 'rabbitseo'); ?></h3>
				</div>

				<div id="keywordDataList"></div>
				<div class="keywordDataListButton">
					<a href="https://www.rabbitseo.com/wpLoginGuest?site=<?php echo esc_url( $current_site_domain ); ?>&instance=12345" target="_blank"><?php esc_attr_e('View All', 'rabbitseo'); ?></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card"> 
					<a href="https://www.rabbitseo.com/wpLoginGuest?site=<?php echo esc_url( $current_site_domain );  ?>&instance=12345" target="_blank"><?php esc_attr_e('Visit our Website', 'rabbitseo'); ?></a>
					<a href="mailto:support@rabbitseo.com" target="_blank"><?php esc_attr_e('Contact us for support', 'rabbitseo'); ?></a>
					<a href="https://www.rabbitseo.com/terms.html" target="_blank"><?php esc_attr_e('Privacy Policy', 'rabbitseo'); ?></a>
				</div>
			</div>
		</div>
	</div>
	
</div>
