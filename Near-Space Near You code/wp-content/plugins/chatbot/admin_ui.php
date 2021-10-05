<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="wrap">
    <h1 style="display:none"><?php esc_html_e('WPBot', 'wpchatbot'); ?> </h1>
</div>
<div class="wp-chatbot-wrap">
    <div class="icon32"><br></div>
    <form action="<?php echo esc_attr($action); ?>" method="POST" id="wp-chatbot-admin-form"
          enctype="multipart/form-data">
        <div class="container form-container">
            <header class="wp-chatbot-admin-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><?php echo __('WPBot Control Panel', 'wpchatbot'); ?><?php echo get_option('wp_chatbot_index_meta'); ?></h2>
                    </div>
                    <div class="col-sm-6 text-right wp-chatbot-version">
                        <h3><?php esc_html_e('The Lite Version', 'wpchatbot'); ?></h3>
                        <p><a target="_blank" href="https://www.quantumcloud.com/"><?php esc_html_e('WPBot is a project by Web Design Company QuantumCloud', 'wpchatbot'); ?></a></p>
						<p><a style="color: #b2ff20;" href="https://www.quantumcloud.com/products/chatbot-for-wordpress/" target="_blank">Upgrade To Pro</a></p>
                    </div>
                </div>
            </header>
            <section class="wp-chatbot-tab-container-inner">
                <div class="wp-chatbot-tabs wp-chatbot-tabs-style-flip">
                    <nav>
                        <ul>
                            <li tab-data="general"><a href="<?php echo esc_attr($action); ?>&tab=general">
                                    <span class="wpwbot-admin-tab-icon">
                                        <i class="fa fa-toggle-on"> </i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"> <?php esc_html_e('GENERAL SETTINGS', 'wpchatbot'); ?></span>
                                </a></li>
                            <li tab-data="themes"><a href="<?php echo esc_attr($action); ?>&tab=themes">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-gear faa-spin"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"> <?php esc_html_e('ICONS & THEMES', 'wpchatbot'); ?></span>
                                </a></li>
                            <li tab-data="support"><a href="<?php echo esc_attr($action); ?>&tab=support">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-life-ring"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"> <?php esc_html_e('FAQ Builder', 'wpchatbot'); ?></span>
                                </a></li>
                            <!--<li tab-data="notification"><a href="<?php echo esc_attr($action); ?>&tab=notification">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-bell-o"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('Notification Builder', 'wpchatbot'); ?></span>
                                </a></li>-->
                            <li tab-data="language"><a href="<?php echo esc_attr($action); ?>&tab=language">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-language"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('LANGUAGE CENTER', 'wpchatbot'); ?></span>
                                </a></li>
                            
                            <li tab-data="startmenu"><a href="<?php echo esc_attr($action); ?>&tab=startmenu">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-bars"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php echo esc_html__('Start Menu', 'wpchatbot'); ?></span>
                                </a></li>
							
                            <!--<li tab-data="hours"><a href="<?php echo esc_attr($action); ?>&tab=hours">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('Bot Activity Hour', 'wpchatbot'); ?></span>
                                </a></li>-->
                            <li tab-data="ai"><a href="<?php echo esc_attr($action); ?>&tab=ai">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-500px"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('Dialogflow', 'wpchatbot'); ?></span>
                                </a></li>
                            <!--<li tab-data="app"><a href="<?php echo esc_attr($action); ?>&tab=app">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-mobile"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('MOBILE APP', 'wpchatbot'); ?></span>
                                </a></li>
                            <li tab-data="custom"><a href="<?php echo esc_attr($action); ?>&tab=custom">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-code"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php esc_html_e('Custom CSS', 'wpchatbot'); ?> </span>
                                </a></li>-->
								<li tab-data="addons"><a href="<?php echo esc_attr($action); ?>&tab=addons">
                                    <span class="wpwbot-admin-tab-icon">
                                    <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                                    </span>
                                    <span class="wpwbot-admin-tab-name"><?php echo esc_html__('Addons', 'wpchatbot'); ?> </span>
                                </a></li>
                        </ul>
						<a class="wpbot_free_messenger_adds" href="https://wordpress.org/plugins/conversational-forms/" target="_blank">Try our new Conversational Form Addon for WPBot</a>
						
						<a class="wpbot_free_messenger_adds" href="https://wordpress.org/plugins/chatbot-for-messenger/" target="_blank">Try our new ChatBot for Messenger WPBot addon free</a>
                    </nav>
                    <div class="content-wrap">
                        <section id="section-flip-1">
                            <div class="top-section">
                                <div class="row">
                                    <div class="col-xs-12">
                                    <b><p>
                                    The ChatBot can work with ANY language. Just change the language texts from the ChatBot Settings->Language Center to your preferred one. Multi language is supported with the <a href="https://www.quantumcloud.com/products/chatbot-for-wordpress/" target="_blank">WpBot Pro version</a> and an addon.
                                    </p></b>
                                    <b><p>Please see the plugin's Help and Debugging section to troubleshoot common issues.</p></b>

                                        <div class="cxsc-settings-blocks">
                                            <div class="form-group">
                                                <?php
                                                $url = get_site_url();
                                                $url = parse_url($url);
                                                $domain = $url['host'];
                                                
                                                $admin_email = get_option('admin_email');
                                                ?>
                                                <h4 class="qc-opt-title"><?php echo esc_html__('Emails Will be Sent to', 'wpchatbot'); ?></h4>
                                                <input type="text" class="form-control qc-opt-dcs-font"
                                                       name="qlcd_wp_chatbot_admin_email"
                                                       value="<?php echo(get_option('qlcd_wp_chatbot_admin_email') != '' ? get_option('qlcd_wp_chatbot_admin_email') : $admin_email); ?>">
                                                <label for="disable_wp_chatbot"><?php echo esc_html__('Support and Call Back requests will be sent to this address', 'wpchatbot'); ?> </label>
                                            </div>
                                        </div>
										
										
										
                                        <div class="cxsc-settings-blocks">
                                            <div class="form-group">
                                                <?php

                                                $url = get_site_url();  
                                                $url = parse_url($url);
                                                $domain = $url['host'];
                                                
                                                $fromEmail = "wordpress@" . $domain;

                                                ?>
                                                <h4 class="qc-opt-title"><?php echo esc_html__('From Email Address', 'wpchatbot'); ?></h4>
                                                <input type="text" class="form-control qc-opt-dcs-font"
                                                       name="qlcd_wp_chatbot_from_email"
                                                       value="<?php echo(get_option('qlcd_wp_chatbot_from_email') != '' ? get_option('qlcd_wp_chatbot_from_email') : $fromEmail); ?>">
                                                <label for="qlcd_wp_chatbot_from_email"><?php echo esc_html__('All email will be send from this email address. If you change the From Email Address then please make sure the domain remain same otherwise the email would not send.', 'wpchatbot'); ?> </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
								
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"> <?php esc_html_e('Disable WPBot', 'wpchatbot'); ?> </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="disable_wp_chatbot" type="checkbox"
                                                   name="disable_wp_chatbot" <?php echo(get_option('disable_wp_chatbot') == 1 ? 'checked' : ''); ?>>
                                            <label for="disable_wp_chatbot"><?php esc_html_e('Disable WPBot to Load', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"> <?php esc_html_e('Disable WPbot on Mobile Device', 'wpchatbot'); ?> </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="disable_wp_chatbot_on_mobile" type="checkbox"
                                                   name="disable_wp_chatbot_on_mobile" <?php echo(get_option('disable_wp_chatbot_on_mobile') == 1 ? 'checked' : ''); ?>>
                                            <label for="disable_wp_chatbot_on_mobile"><?php esc_html_e('Disable WpBot to Load on Mobile Device', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"> <?php esc_html_e('Sound on Page Load', 'wpchatbot'); ?> </h4>
                                        <div class="form-group">
                                            <input value="1" id="enable_wp_chatbot_sound_initial" type="checkbox"
                                                   name="enable_wp_chatbot_sound_initial" <?php echo(get_option('enable_wp_chatbot_sound_initial') == 1 ? 'checked' : ''); ?>>
                                            <label for="enable_wp_chatbot_sound_initial"><?php esc_html_e('Enable to play sound on initial page load', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                </div>-->

                                <!-- row-->
                                <!--<div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"> <?php esc_html_e('Disable WpBot Icon Animation', 'wpchatbot'); ?> </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="disable_wp_chatbot_icon_animation" type="checkbox"
                                                   name="disable_wp_chatbot_icon_animation" <?php echo(get_option('disable_wp_chatbot_icon_animation') == 1 ? 'checked' : ''); ?>>
                                            <label for="disable_wp_chatbot_icon_animation"><?php esc_html_e('Disable WpBot icon border animation', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                </div>-->
                                
                                
                                
                                <!--<div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php esc_html_e('Disable WpBot Opening Notification', 'wpchatbot'); ?>  </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="disable_wp_chatbot_notification" type="checkbox"
                                                   name="disable_wp_chatbot_notification" <?php echo(get_option('disable_wp_chatbot_notification') == 1 ? 'checked' : ''); ?>>
                                            <label for="disable_wp_chatbot_notification"><?php esc_html_e('Disable WpBot Opening notification messages', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php esc_html_e('Enable RTL', 'wpchatbot'); ?>  </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="enable_wp_chatbot_rtl" type="checkbox"
                                                   name="enable_wp_chatbot_rtl" <?php echo(get_option('enable_wp_chatbot_rtl') == 1 ? 'checked' : ''); ?>>
                                            <label for="enable_wp_chatbot_rtl"><?php esc_html_e('Enable RTL (Right to Left language) Support for Chat', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"> <?php echo esc_html__('Show Start Menu After Greetings', 'wpchatbot'); ?> </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="show_menu_after_greetings" type="checkbox"
                                                   name="show_menu_after_greetings" <?php echo(get_option('show_menu_after_greetings') == 1 ? 'checked' : ''); ?>>
                                            <label for="show_menu_after_greetings"><?php echo esc_html__('Show Start Menu After Greetings', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                </div>
								
								<!--<div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php esc_html_e('Disable Call Me', 'wpchatbot'); ?>  </h4>
										<div class="cxsc-settings-blocks">
											<input value="1" id="disable_wp_chatbot_call_sup" type="checkbox"
												   name="disable_wp_chatbot_call_sup" <?php echo(get_option('disable_wp_chatbot_call_sup') == 1 ? 'checked' : ''); ?>>
											<label for="disable_wp_chatbot_call_sup"><?php esc_html_e('Disable Call Me button', 'wpchatbot'); ?> </label>
										</div>
                                    </div>
                                </div>-->
                                
                                <!-- row-->
								<div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php esc_html_e('WPBot Open Full Screen in Mobile', 'wpchatbot'); ?>  </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="enable_wp_chatbot_mobile_full_screen" type="checkbox"
                                                   name="enable_wp_chatbot_mobile_full_screen" <?php echo(get_option('enable_wp_chatbot_mobile_full_screen') == 1 ? 'checked' : ''); ?>>
                                            <label for="enable_wp_chatbot_mobile_full_screen"><?php esc_html_e('Enable WpBot Open Full Screen in Mobile', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php echo esc_html__('Bot Response Delay', 'wpchatbot'); ?>  </h4>
                                        <div class="cxsc-settings-blocks">
                                           
                                        

                                            <select name="wpbot_preloading_time" id="wpbot_preloading_time">
                                                <option value="100" <?php echo(get_option('wpbot_preloading_time') == '100' ? 'selected="selected"' : ''); ?>>0 Second</option>
                                                <option value="500" <?php echo(get_option('wpbot_preloading_time') == '500' ? 'selected="selected"' : ''); ?>>0.5 Second</option>
                                                <option value="1000" <?php echo(get_option('wpbot_preloading_time') == '1000' ? 'selected="selected"' : ''); ?>>1 Second</option>
                                                <option value="2000" <?php echo(get_option('wpbot_preloading_time') == '2000' ? 'selected="selected"' : ''); ?>>2 Second</option>
                                                <option value="3000" <?php echo(get_option('wpbot_preloading_time') == '3000' ? 'selected="selected"' : ''); ?>>3 Second</option>
                                            </select>
                                            <label for="wpbot_preloading_time"><?php echo esc_html__('Bot Response Delay', 'wpchatbot'); ?> </label>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php esc_html_e('Override WPBot Icon\'s Position', 'wpchatbot'); ?>  </h4>
                                        <div class="cxsc-settings-blocks">
                                            <?php
                                            $qcld_wb_chatbot_position_x = get_option('wp_chatbot_position_x');
                                            if ((!isset($qcld_wb_chatbot_position_x)) || ($qcld_wb_chatbot_position_x == "")) {
                                                $qcld_wb_chatbot_position_x = __("120", "wp_chatbot");
                                            }
                                            $qcld_wb_chatbot_position_y = get_option('wp_chatbot_position_y');
                                            if ((!isset($qcld_wb_chatbot_position_y)) || ($qcld_wb_chatbot_position_y == "")) {
                                                $qcld_wb_chatbot_position_y = __("120", "wp_chatbot");
                                            } ?>
                                            <input type="number" class="qc-opt-dcs-font"
                                                   name="wp_chatbot_position_x"
                                                   id=""
                                                   value="<?php echo($qcld_wb_chatbot_position_x); ?>"
                                                   placeholder="<?php esc_html_e('From Right In px', 'wpchatbot'); ?>"> <span class="qc-opt-dcs-font"><?php esc_html_e('From Right In px', 'wpchatbot'); ?></span>
                                            <input type="number" class="qc-opt-dcs-font"
                                                   name="wp_chatbot_position_y"
                                                   id=""
                                                   value="<?php echo($qcld_wb_chatbot_position_y); ?>"
                                                   placeholder="<?php esc_html_e('From Bottom In Px', 'wpchatbot'); ?>"> <span class="qc-opt-dcs-font"><?php esc_html_e('From Bottom In px', 'wpchatbot'); ?></span>
                                        </div>
                                    </div>
                                    <!--.col-sm-12-->
                                </div>
                                <!--                                row-->
                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><strong> <?php esc_html_e('WPBot', 'wpchatbot'); ?></strong> <?php esc_html_e('Loading Control Options', 'wpchatbot'); ?> </h4>
                                        <div class="cxsc-settings-blocks">
                                            <div class="row">
                                                <div class="col-sm-4 text-right">
                                                    <span class="qc-opt-title-font"><?php esc_html_e('Show on Home Page', 'wpchatbot'); ?></span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <label class="radio-inline">
                                                        <input id="wp-chatbot-show-home-page" type="radio"
                                                               name="wp_chatbot_show_home_page"
                                                               value="on" <?php echo(get_option('wp_chatbot_show_home_page') == 'on' ? 'checked' : ''); ?>>
                                                        <?php esc_html_e('YES', 'wpchatbot'); ?>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="wp-chatbot-show-home-page" type="radio"
                                                               name="wp_chatbot_show_home_page"
                                                               value="off" <?php echo(get_option('wp_chatbot_show_home_page') == 'off' ? 'checked' : ''); ?>>
                                                        <?php esc_html_e('NO', 'wpchatbot'); ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--  row-->
                                            <div class="row">
                                                <div class="col-sm-4 text-right">
                                                    <span class="qc-opt-title-font"><?php esc_html_e('Show on blog posts', 'wpchatbot'); ?></span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <label class="radio-inline">
                                                        <input class="wp-chatbot-show-posts" type="radio"
                                                               name="wp_chatbot_show_posts"
                                                               value="on" <?php echo(get_option('wp_chatbot_show_posts') == 'on' ? 'checked' : ''); ?>>
                                                        <?php esc_html_e('YES', 'wpchatbot'); ?>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input class="wp-chatbot-show-posts" type="radio"
                                                               name="wp_chatbot_show_posts"
                                                               value="off" <?php echo(get_option('wp_chatbot_show_posts') == 'off' ? 'checked' : ''); ?>>
                                                        <?php esc_html_e('NO', 'wpchatbot'); ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- row-->
                                            <div class="row">
                                                <div class="col-md-4 text-right">
                                                    <span class="qc-opt-title-font"><?php esc_html_e('Show on  pages', 'wpchatbot'); ?></span>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="radio-inline">
                                                        <input class="wp-chatbot-show-pages" type="radio"
                                                               name="wp_chatbot_show_pages"
                                                               value="on" <?php echo(get_option('wp_chatbot_show_pages') == 'on' ? 'checked' : ''); ?>>
                                                        <?php esc_html_e('All Pages', 'wpchatbot'); ?>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input class="wp-chatbot-show-pages" type="radio"
                                                               name="wp_chatbot_show_pages"
                                                               value="off" <?php echo(get_option('wp_chatbot_show_pages') == 'off' ? 'checked' : ''); ?>>
                                                        <?php esc_html_e('Selected Pages Only ', 'wpchatbot'); ?></label>
                                                    <div id="wp-chatbot-show-pages-list">
                                                        <ul class="checkbox-list">
                                                            <?php
                                                            $wp_chatbot_pages = get_pages();
                                                            $wp_chatbot_select_pages = unserialize(get_option('wp_chatbot_show_pages_list'));
                                                            foreach ($wp_chatbot_pages as $wp_chatbot_page) {
                                                                ?>
                                                                <li>
                                                                    <input
                                                                            id="wp_chatbot_show_page_<?php echo $wp_chatbot_page->ID; ?>"
                                                                            type="checkbox"
                                                                            name="wp_chatbot_show_pages_list[]"
                                                                            value="<?php echo $wp_chatbot_page->ID; ?>" <?php if (!empty($wp_chatbot_select_pages) && in_array($wp_chatbot_page->ID, $wp_chatbot_select_pages) == true) {
                                                                        echo 'checked';
                                                                    } ?> >
                                                                    <label
                                                                            for="wp_chatbot_show_page_<?php echo $wp_chatbot_page->ID; ?>"> <?php echo $wp_chatbot_page->post_title; ?></label>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <!-- cxsc-settings-blocks-->
                                    </div>
                                    <!-- col-xs-12-->
                                </div>
                                <!--  row-->
								
                            </div>
                            <!-- top-section-->
                        </section>
                        <section id="section-flip-2">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#wp-chatbot-icon-theme-settings"><?php echo esc_html__('Icons & Themes', 'wpchatbot'); ?></a></li>
                                <li><a data-toggle="tab" href="#wp-chatbot-custom-color-options"><?php echo esc_html__('Custom Style Options', 'wpchatbot'); ?></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="wp-chatbot-icon-theme-settings" class="tab-pane fade in active">
                                    <div class="top-section">
                                        
                                        <div class="row">
                                            <div class="col-xs-12">
                                            
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <p class="wpqcld_chk_seft">
                                                        <a target="_blank" href="https://www.quantumcloud.com/products/themes/chatbot-theme/"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL ?>/chatbot-theme.jpg" alt="" /></a>
                                                    </p>
                                                </div>
                                            </div>
                                            
                                                <h4 class="qc-opt-title"><?php esc_html_e('WPBot Icon', 'wpchatbot'); ?></h4>
                                                <div class="cxsc-settings-blocks">
                                                    <ul class="radio-list">
                                                        <!--<li><label for="wp_chatbot_icon_0" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-0.png"
                                                                alt=""> <input id="wp_chatbot_icon_0" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-0.png' ? 'checked' : ''); ?>
                                                                                value="icon-0.png">
                                                            <?php esc_html_e('Icon - 0', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_1" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-1.png"
                                                                alt=""> <input id="wp_chatbot_icon_1" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-1.png' ? 'checked' : ''); ?>
                                                                                value="icon-1.png">
                                                            <?php esc_html_e('Icon - 1', 'wpchatbot'); ?></label>
                                                        </li>-->
                                                        <li><label for="wp_chatbot_icon_2" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-2.png"
                                                                alt=""> <input id="wp_chatbot_icon_2" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-2.png' ? 'checked' : ''); ?>
                                                                                value="icon-2.png">
                                                            <?php esc_html_e('Icon - 2', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_3" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-3.png"
                                                                alt=""> <input id="wp_chatbot_icon_3" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-3.png' ? 'checked' : ''); ?>
                                                                                value="icon-3.png">
                                                            <?php esc_html_e('Icon - 3', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_4" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-4.png"
                                                                alt=""> <input id="wp_chatbot_icon_4" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-4.png' ? 'checked' : ''); ?>
                                                                                value="icon-4.png">
                                                            <?php esc_html_e('Icon - 4', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_5" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-5.png"
                                                                alt=""> <input id="wp_chatbot_icon_5" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-5.png' ? 'checked' : ''); ?>
                                                                                value="icon-5.png">
                                                            <?php esc_html_e('Icon - 5', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_6" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-6.png"
                                                                alt=""> <input id="wp_chatbot_icon_6" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-6.png' ? 'checked' : ''); ?>
                                                                                value="icon-6.png">
                                                            <?php esc_html_e('Icon - 6', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_7" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-7.png"
                                                                alt=""> <input id="wp_chatbot_icon_7" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-7.png' ? 'checked' : ''); ?>
                                                                                value="icon-7.png">
                                                            <?php esc_html_e('Icon - 7', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_8" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-8.png"
                                                                alt=""> <input id="wp_chatbot_icon_8" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-8.png' ? 'checked' : ''); ?>
                                                                                value="icon-8.png">
                                                            <?php esc_html_e('Icon - 8', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_9" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-9.png"
                                                                alt=""> <input id="wp_chatbot_icon_9" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-9.png' ? 'checked' : ''); ?>
                                                                                value="icon-9.png">
                                                            <?php esc_html_e('Icon - 9', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_10" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-10.png"
                                                                alt=""> <input id="wp_chatbot_icon_10" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-10.png' ? 'checked' : ''); ?>
                                                                                value="icon-10.png">
                                                            <?php esc_html_e('Icon - 10', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_11" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-11.png"
                                                                alt=""> <input id="wp_chatbot_icon_11" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-11.png' ? 'checked' : ''); ?>
                                                                                value="icon-11.png">
                                                            <?php esc_html_e('Icon - 11', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_12" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-12.png"
                                                                alt=""> <input id="wp_chatbot_icon_12" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-12.png' ? 'checked' : ''); ?>
                                                                                value="icon-12.png">
                                                            <?php esc_html_e('Icon - 12', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li><label for="wp_chatbot_icon_13" class="qc-opt-dcs-font"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>/icon-13.png"
                                                                alt=""> <input id="wp_chatbot_icon_13" type="radio"
                                                                                name="wp_chatbot_icon" <?php echo(get_option('wp_chatbot_icon') == 'icon-13.png' ? 'checked' : ''); ?>
                                                                                value="icon-13.png">
                                                            <?php esc_html_e('Icon - 13', 'wpchatbot'); ?></label>
                                                        </li>
                                                        
                                                        <li>
                                                            <?php
                                                            if (get_option('wp_chatbot_custom_icon_path') != "") {
                                                                $wp_chatbot_custom_icon_path = get_option('wp_chatbot_custom_icon_path');
                                                            } else {
                                                                $wp_chatbot_custom_icon_path = QCLD_wpCHATBOT_IMG_URL . 'custom.png';
                                                            }
                                                            ?>
                                                            <label for="wp_chatbot_custom_icon_input" class="qc-opt-dcs-font">
                                                            <img id="wp_chatbot_custom_icon_src"
                                                                src="<?php echo $wp_chatbot_custom_icon_path; ?>" alt="">
                                                            <input id="wp_chatbot_custom_icon_input" type="radio"
                                                                name="wp_chatbot_icon"
                                                                value="custom.png" <?php echo(get_option('wp_chatbot_icon') == 'custom.png' ? 'checked' : ''); ?>>
                                                            <?php esc_html_e('Custom Icon', 'wpchatbot'); ?></label>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                <!--  cxsc-settings-blocks-->
                                                <br>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('WPBot Icon Background Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_floatingiconbg_color" type="text"
                                                                                    name="wp_chatbot_floatingiconbg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_floatingiconbg_color') != '' ? get_option('wp_chatbot_floatingiconbg_color') : '#fff'); ?>"/>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="qc-opt-title"><?php esc_html_e(' Upload custom Icon ', 'wpchatbot'); ?></h4>
                                                <div class="cxsc-settings-blocks">
                                                    <input type="hidden" name="wp_chatbot_custom_icon_path"
                                                        id="wp_chatbot_custom_icon_path"
                                                        value="<?php echo $wp_chatbot_custom_icon_path; ?>"/>
                                                    <button type="button" class="wp_chatbot_custom_icon_button button"><?php esc_html_e('Upload Icon', 'wpchatbot'); ?> </button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="top-section">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="qc-opt-title"><?php esc_html_e(' WPBot Agent Image', 'wpchatbot'); ?></h4>
                                                <div class="cxsc-settings-blocks">
                                                    <ul class="radio-list">
                                                        <li>
                                                            <label for="wp_chatbot_agent_image_def" class="qc-opt-dcs-font">
                                                            <img src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>icon-0.png"
                                                                alt=""> <input id="wp_chatbot_agent_image_def" type="radio"
                                                                                name="wp_chatbot_agent_image" <?php echo(get_option('wp_chatbot_agent_image') == 'agent-0.png' ? 'checked' : ''); ?>
                                                                                value="agent-0.png">
                                                                            
                                                            <?php esc_html_e('Default Agent', 'wpchatbot'); ?></label>
                                                        </li>
                                                        <li>
                                                            <?php
                                                            if (get_option('wp_chatbot_custom_agent_path') != "") {
                                                                $wp_chatbot_custom_agent_path = get_option('wp_chatbot_custom_agent_path');
                                                            } else {
                                                                $wp_chatbot_custom_agent_path = QCLD_wpCHATBOT_IMG_URL . 'custom-agent.png';
                                                            }
                                                            ?>
                                                            <label for="wp_chatbot_agent_image_custom" class="qc-opt-dcs-font">
                                                                <img id="wp_chatbot_custom_agent_src"
                                                                src="<?php echo esc_url($wp_chatbot_custom_agent_path); ?>"
                                                                alt="Agent">
                                                            <input type="radio" name="wp_chatbot_agent_image"
                                                                id="wp_chatbot_agent_image_custom"
                                                                value="custom-agent.png" <?php echo(get_option('wp_chatbot_agent_image') == 'custom-agent.png' ? 'checked' : ''); ?>>
                                                            <?php echo esc_html__('Custom Agent', 'wpchatbot'); ?></label>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                <!--                                        cxsc-settings-blocks-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h4 class="qc-opt-title"> <?php esc_html_e('Custom Agent Icon', 'wpchatbot'); ?>  </h4>
                                                <div class="cxsc-settings-blocks">
                                                    <input type="hidden" name="wp_chatbot_custom_agent_path"
                                                        id="wp_chatbot_custom_agent_path"
                                                        value="<?php echo $wp_chatbot_custom_agent_path; ?>"/>
                                                    <button type="button" class="wp_chatbot_custom_agent_button button"><?php esc_html_e('Upload Agent Icon', 'wpchatbot'); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="top-section">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="qc-opt-title"> <?php esc_html_e('WPBot Themes', 'wpchatbot'); ?></h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="qcld_wb_chatbot_theme_0">
                                                <img class="thumbnail theme_prev"
                                                    src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>templates/template-00.JPG"
                                                    alt="Theme Basic">
                                                <input id="qcld_wb_chatbot_theme_0" type="radio"
                                                    name="qcld_wb_chatbot_theme" <?php echo(get_option('qcld_wb_chatbot_theme') == 'template-00' ? 'checked' : ''); ?>
                                                    value="template-00">
                                                <?php esc_html_e('Theme Basic', 'wpchatbot'); ?></label>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="qcld_wb_chatbot_theme_1">
                                                <img class="thumbnail theme_prev"
                                                    src="<?php echo QCLD_wpCHATBOT_IMG_URL; ?>templates/template-01.JPG"
                                                    alt="Theme Basic">
                                                <input id="qcld_wb_chatbot_theme_1" type="radio"
                                                    name="qcld_wb_chatbot_theme" <?php echo(get_option('qcld_wb_chatbot_theme') == 'template-01' ? 'checked' : ''); ?>
                                                    value="template-01">
                                                <?php esc_html_e('Theme One', 'wpchatbot'); ?></label>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </div> 
                                    <!--<hr>
                                    <div id="top-section">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="qc-opt-title"> <?php esc_html_e('Custom Backgroud', 'wpchatbot'); ?></h4>
                                                <div class="cxsc-settings-blocks">
                                                    <input value="1" id="qcld_wb_chatbot_change_bg" type="checkbox"
                                                        name="qcld_wb_chatbot_change_bg" <?php echo(get_option('qcld_wb_chatbot_change_bg') == 1 ? 'checked' : ''); ?>>
                                                    <label for="qcld_wb_chatbot_change_bg"><?php esc_html_e('Change the wpwBot message board background for Theme 2 and Theme 3.', 'wpchatbot'); ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row qcld-wp-chatbot-board-bg-container" <?php if (get_option('qcld_wb_chatbot_change_bg') != 1) {
                                            echo 'style="display:none"';
                                        } ?>>
                                            <div class="col-xs-6">
                                                <p class="wp-chatbot-settings-instruction"> <?php esc_html_e('Upload wpwBot message board background (Ideal image size 376px X 688px).', 'wpchatbot'); ?> </p>
                                                <div class="cxsc-settings-blocks">
                                                    <?php
                                                    if (get_option('qcld_wb_chatbot_board_bg_path') != "") {
                                                        $qcld_wb_chatbot_board_bg_path = get_option('qcld_wb_chatbot_board_bg_path');
                                                    } else {
                                                        $qcld_wb_chatbot_board_bg_path = QCLD_wpCHATBOT_IMG_URL . 'background/background.png';
                                                    }
                                                    ?>
                                                    <input type="hidden" name="qcld_wb_chatbot_board_bg_path"
                                                        id="qcld_wb_chatbot_board_bg_path"
                                                        value="<?php echo $qcld_wb_chatbot_board_bg_path; ?>"/>
                                                    <button type="button" class="qcld_wb_chatbot_board_bg_button button"><?php esc_html_e('Upload  WpBot background.', 'wpchatbot'); ?></button>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-6">
                                                <p class="wp-chatbot-settings-instruction"> <?php esc_html_e('Custom message board background', 'wpchatbot'); ?> </p>
                                                <img id="qcld_wb_chatbot_board_bg_image" style="height:100%;width:100%"
                                                    src="<?php echo $qcld_wb_chatbot_board_bg_path; ?>"
                                                    alt="Custom Background">
                                            </div>
                                        </div>
                                    </div>-->

                                <div id="wp-chatbot-custom-color-options" class="tab-pane fade">
                                    <div class="top-section">
                                        <div class="row">

                                            <div class="col-xs-12">

                                            <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Bot Floating Icon Background Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_floatingiconbg_color" type="text"
                                                                                    name="wp_chatbot_floatingiconbg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_floatingiconbg_color') != '' ? get_option('wp_chatbot_floatingiconbg_color') : '#fff'); ?>"/>
                                                </div>
                                            </div>

                                                <h3 class="qc-opt-title">
                                                <?php _e('Custom Style Options', 'woochatbot'); ?>
                                                </h3>
                                                <div class="cxsc-settings-blocks">
                                                <input value="1" id="enable_wp_chatbot_custom_color" type="checkbox"
                                                                                name="enable_wp_chatbot_custom_color" <?php echo(get_option('enable_wp_chatbot_custom_color') == 1 ? 'checked' : ''); ?>>
                                                <label for="enable_wp_chatbot_custom_color">
                                                    <?php _e('Enable Style Colors ', 'woochatbot'); ?>
                                                </label>
                                                </div>
                                                <br>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Text Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_text_color" type="text"
                                                                                    name="wp_chatbot_text_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_text_color') != '' ? get_option('wp_chatbot_text_color') : '#37424c'); ?>"/>
                                                </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Link Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_link_color" type="text"
                                                                                    name="wp_chatbot_link_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_link_color') != '' ? get_option('wp_chatbot_link_color') : '#e2cc1f'); ?>"/>
                                                </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Link Hover Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_link_hover_color" type="text"
                                                                                    name="wp_chatbot_link_hover_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_link_hover_color') != '' ? get_option('wp_chatbot_link_hover_color') : '#734006'); ?>"/>
                                                </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Bot Message  Background Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_bot_msg_bg_color" type="text"
                                                                                    name="wp_chatbot_bot_msg_bg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_bot_msg_bg_color') != '' ? get_option('wp_chatbot_bot_msg_bg_color') : '#1f8ceb'); ?>"/>
                                                </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Bot Message Text Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_bot_msg_text_color" type="text"
                                                                                    name="wp_chatbot_bot_msg_text_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_bot_msg_text_color') != '' ? get_option('wp_chatbot_bot_msg_text_color') : '#ffffff'); ?>"/>
                                                </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('User Message  Background Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_user_msg_bg_color" type="text"
                                                                                    name="wp_chatbot_user_msg_bg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_user_msg_bg_color') != '' ? get_option('wp_chatbot_user_msg_bg_color') : '#ffffff'); ?>"/>
                                                </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('User Message Text Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_user_msg_text_color" type="text"
                                                                                    name="wp_chatbot_user_msg_text_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_user_msg_text_color') != '' ? get_option('wp_chatbot_user_msg_text_color') : '#000000'); ?>"/>
                                                </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Buttons Background Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_buttons_bg_color" type="text"
                                                                                    name="wp_chatbot_buttons_bg_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_buttons_bg_color') != '' ? get_option('wp_chatbot_buttons_bg_color') : '#1f8ceb'); ?>"/>
                                                </div>
                                                </div>

                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Buttons Hover Background Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_buttons_bg_color" type="text"
                                                                                    name="wp_chatbot_buttons_bg_color_hover"
                                                                                    value="<?php echo(get_option('wp_chatbot_buttons_bg_color_hover') != '' ? get_option('wp_chatbot_buttons_bg_color_hover') : '#1f8ceb'); ?>"/>
                                                </div>
                                                </div>

                                                <div class="cxsc-settings-blocks">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title">
                                                    <?php _e('Buttons Text Color.', 'woochatbot'); ?>
                                                    </h4>
                                                    <input id="wp_chatbot_buttons_text_color" type="text"
                                                                                    name="wp_chatbot_buttons_text_color"
                                                                                    value="<?php echo(get_option('wp_chatbot_buttons_text_color') != '' ? get_option('wp_chatbot_buttons_text_color') : '#ffffff'); ?>"/>
                                                </div>
                                                </div>

                                                <div class="cxsc-settings-blocks">
                                                    <div class="form-group">
                                                        <h4 class="qc-opt-title">
                                                        <?php _e('Buttons Text Color Hover.', 'woochatbot'); ?>
                                                        </h4>
                                                        <input id="wp_chatbot_buttons_text_color" type="text"
                                                                                        name="wp_chatbot_buttons_text_color_hover"
                                                                                        value="<?php echo(get_option('wp_chatbot_buttons_text_color_hover') != '' ? get_option('wp_chatbot_buttons_text_color_hover') : '#ffffff'); ?>"/>
                                                    </div>
                                                </div>

                                                <div class="cxsc-settings-blocks">
                                                    <div class="form-group">
                                                        <h4 class="qc-opt-title">
                                                        <?php _e('Theme Primary Color', 'woochatbot'); ?>
                                                        </h4>
                                                        <input id="wp_chatbot_theme_primary_color" type="text"
                                                                                        name="wp_chatbot_theme_primary_color"
                                                                                        value="<?php echo(get_option('wp_chatbot_theme_primary_color') != '' ? get_option('wp_chatbot_theme_primary_color') : '#ffffff'); ?>"/>
                                                    </div>
                                                </div>

                                                <div class="cxsc-settings-blocks">
                                                    <div class="form-group">
                                                        <h4 class="qc-opt-title">
                                                        <?php _e('Theme Secondary Color', 'woochatbot'); ?>
                                                        </h4>
                                                        <input id="wp_chatbot_theme_secondary_color" type="text"
                                                            name="wp_chatbot_theme_secondary_color"
                                                            value="<?php echo(get_option('wp_chatbot_theme_secondary_color') != '' ? get_option('wp_chatbot_theme_secondary_color') : '#ffffff'); ?>"/>
                                                    </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                    <div class="form-group">
                                                        <h4 class="qc-opt-title">
                                                        <?php _e('Font size', 'woochatbot'); ?>
                                                        </h4>
                                                        <input id="wp_chatbot_font_size" type="number"
                                                               name="wp_chatbot_font_size"
                                                               value="<?php echo(get_option('wp_chatbot_font_size') != '' ? get_option('wp_chatbot_font_size') : '16'); ?>"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="cxsc-settings-blocks">
                                                    <div class="form-group">
                                                        <h4 class="qc-opt-title">
                                                        <?php 
                                                        _e('User message Font family ', 'woochatbot'); 
                                                        $user_font = get_option('wp_chat_user_font_family') != '' ? get_option('wp_chat_user_font_family') : '';
                                                        $user_font_family = str_replace("\\", "",$user_font);
                                                        ?>
                                                        </h4>
                                                        <input id="wp_chatbot_user_font" type="text" name="wp_chatbot_user_font"
                                                        value="<?php echo(get_option('wp_chatbot_user_font') != '' ? get_option('wp_chatbot_user_font') : '');?>">
                                                        <input id="wp_chat_user_font_family" type="hidden"
                                                               name="wp_chat_user_font_family"
                                                               />
                                                    </div>
                                                </div>
                                                <div class="cxsc-settings-blocks">
                                                    <div class="form-group">
                                                        <h4 class="qc-opt-title">
                                                        <?php 
                                                        _e('Bot message Font family ', 'woochatbot');
                                                        $bot_font = get_option('wp_chat_bot_font_family') != '' ? get_option('wp_chat_bot_font_family') : '';
                                                        $bot_font_family = str_replace("\\", "",$bot_font); 
                                                        ?>
                                                        </h4>
                                                        <input id="wp_chatbot_bot_font" type="text" name="wp_chatbot_bot_font"
                                                        value="<?php echo(get_option('wp_chatbot_bot_font') != '' ? get_option('wp_chatbot_bot_font') : '');?>">
                                                        <input id="wp_chat_bot_font_family" type="hidden"
                                                               name="wp_chat_bot_font_family"
                                                               />
                                                    </div>
                                                </div>
                                                <script>
                                                    jQuery(function ($) {
                                                        $('#wp_chat_user_font_family').val(JSON.stringify(<?php echo $user_font_family; ?>));
                                                        $('#wp_chat_bot_font_family').val(JSON.stringify(<?php echo $bot_font_family; ?>));
                                                        $('#wp_chatbot_user_font')
                                                        .fontpicker()
                                                        .on('change', function() {
                                                            var tmp = this.value.split(':'),
                                                                family = tmp[0],
                                                                variant = tmp[1] || '400',
                                                                weight = parseInt(variant,10),
                                                                italic = /i$/.test(variant);
                                                            var css = {
                                                                fontFamily: "'" + family + "'",
                                                                fontWeight: weight,
                                                                fontStyle: italic ? 'italic' : 'normal'
                                                            };

                                                            $('#wp_chat_user_font_family').val(JSON.stringify(css));
                                                        });
                                                        $('#wp_chatbot_bot_font')
                                                        .fontpicker()
                                                        .on('change', function() {
                                                            var tmp = this.value.split(':'),
                                                                    family = tmp[0],
                                                                    variant = tmp[1] || '400',
                                                                    weight = parseInt(variant,10),
                                                                    italic = /i$/.test(variant);

                                                                    // Set selected font on body
                                                            var css = {
                                                                fontFamily: "'" + family + "'",
                                                                fontWeight: weight,
                                                                fontStyle: italic ? 'italic' : 'normal'
                                                            };
                                                            $('#wp_chat_bot_font_family').val(JSON.stringify(css));
                                                        });
                                                    });
                                                </script>    
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="section-flip-3">
                            <div class="row">
                                <div class="col-xs-12">
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="top-section">
                                <h4 class="qc-opt-title"><?php esc_html_e('Build FAQ Query and Answers', 'wpchatbot'); ?></h4>
                                <div class="block-inner ui-sortable" id="wp-chatbot-support-builder">
                                    <?php
                                    $support_quereis=$this->qcld_wb_chatbot_str_replace(unserialize( get_option('support_query')));
                                    $support_ans=$this->qcld_wb_chatbot_str_replace(unserialize( get_option('support_ans')));
                                    if (count($support_ans) >= 1) {
                                        //foreach (get_option('support_ans') as $support_ans){
                                        $query_ans_counter=0;
                                        foreach (array_combine($support_quereis, $support_ans) as $query => $ans) {
                                            ?>
                                            <div class="row">
                                                <span class="pull-right">  </span>
                                                <div class="col-xs-12">
                                                    <button type="button"
                                                            class="btn btn-danger btn-sm wp-chatbot-remove-support pull-right">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </button>
                                                    <span  class="wp-chatbot-support-cross pull-right" >
                                                        <i  class="fa fa-crosshairs" aria-hidden="true"></i>
                                                    </span>
                                                    <div class="cxsc-settings-blocks">
                                                        <p class="qc-opt-dcs-font"><?php esc_html_e('FAQ query ', 'wpchatbot'); ?></p>
                                                        <input type="text" class="form-control" name="support_query[]"
                                                               placeholder="<?php esc_html_e('FAQ query ', 'wpchatbot'); ?>" value="<?php echo $query ?>">
                                                       <br>
                                                        <p class="qc-opt-dcs-font"><?php esc_html_e('FAQ answer', 'wpchatbot'); ?></p>
                                                       <?php wp_editor(html_entity_decode(stripcslashes($ans)), 'support_ans'.'_'.$query_ans_counter, array('textarea_name' =>
                                                        'support_ans[]',
                                                        'textarea_rows' => 20,
                                                        'editor_height' => 100,
                                                        'disabled' => 'disabled',
                                                        'media_buttons' => false,
                                                        'tinymce'       => array(
                                                        'toolbar1'      => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,link,unlink',)
                                                        )); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $query_ans_counter++;
                                        }
                                        //}
                                    } else {
                                        ?>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="button"
                                                        class="btn btn-danger btn-sm wp-chatbot-remove-support pull-right">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                                <span  class="wp-chatbot-support-cross pull-right" >
                                                        <i  class="fa fa-crosshairs" aria-hidden="true"></i>
                                                    </span>
                                                <div class="cxsc-settings-blocks">
                                                    <p class="qc-opt-dcs-font"><?php esc_html_e('Support query', 'wpchatbot'); ?> </p>
                                                    <input type="text" class="form-control" name="support_query[]"
                                                           placeholder="<?php esc_html_e('Support query ', 'wpchatbot'); ?>">
                                                    <br>
                                                    <p class="qc-opt-dcs-font"><strong><?php esc_html_e('Support answer', 'wpchatbot'); ?></strong></p>
                                                    <?php wp_editor(html_entity_decode(stripcslashes('')), 'support_ans_0', array('textarea_name' =>
                                                        'support_ans[]',
                                                        'textarea_rows' => 20,
                                                        'editor_height' => 100,
                                                        'disabled' => 'disabled',
                                                        'media_buttons' => false,
                                                        'tinymce'       => array(
                                                            'toolbar1'      => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,link,unlink',)
                                                    )); ?>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-left"></div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-success btn-sm" type="button"
                                                id="add-more-support-query"><i
                                                    class="fa fa-plus" aria-hidden="true"></i> <?php esc_html_e('Add More Questions and Answers', 'wpchatbot'); ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--<section id="section-flip-4">
                            <div class="top-section">
                                <div class="notification-block-inner">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="cxsc-settings-blocks">
                                                <?php $notification_interval = get_option('qlcd_wp_chatbot_notification_interval') != "" ? get_option('qlcd_wp_chatbot_notification_interval') : 5 ?>
                                                <h4 class="qc-opt-title"><?php esc_html_e('Interval between notifications (in Seconds).', 'wpchatbot'); ?></h4>
                                                <input type="text" class="form-control"
                                                       name="qlcd_wp_chatbot_notification_interval"
                                                       value="<?php echo $notification_interval ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php
                                    $notifications = $this->qcld_wb_chatbot_str_replace(unserialize(get_option('qlcd_wp_chatbot_notifications')));
                                    if (!empty($notifications)) {
                                        $chatbot_notif_counter=0;
                                        foreach ($notifications as $notification) {
                                            ?>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button type="button"
                                                            class="btn btn-danger btn-sm wp-chatbot-remove-notification pull-right">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </button>
                                                    <div class="cxsc-settings-blocks">
                                                        <?php wp_editor(html_entity_decode(stripcslashes($notification)), 'qlcd_wp_chatbot_notifications_'.$chatbot_notif_counter, array('textarea_name' =>
                                                            'qlcd_wp_chatbot_notifications[]',
                                                            'textarea_rows' => 20,
                                                            'editor_height' => 100,
                                                            'disabled' => 'disabled',
                                                            'media_buttons' => false,
                                                            'tinymce'       => array(
                                                                'toolbar1'      => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,link,unlink',)
                                                        )); ?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <?php
                                            $chatbot_notif_counter++;
                                        }
                                        //}
                                    } else {
                                        ?>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="button"
                                                        class="btn btn-danger btn-sm wp-chatbot-remove-notification pull-right">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                                <div class="cxsc-settings-blocks">
                                                    <?php wp_editor(html_entity_decode(stripcslashes('')), 'qlcd_wp_chatbot_notifications_0', array('textarea_name' =>
                                                        'qlcd_wp_chatbot_notifications[]',
                                                        'textarea_rows' => 20,
                                                        'editor_height' => 100,
                                                        'disabled' => 'disabled',
                                                        'media_buttons' => false,
                                                        'tinymce'       => array(
                                                            'toolbar1'      => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,link,unlink',)
                                                    )); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-left"></div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-success btn-sm" type="button"
                                                id="add-more-notification-message">
                                            <i class="fa fa-plus" aria-hidden="true"></i> <?php esc_html_e('Add', 'wpchatbot'); ?>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </section>-->
                        <section id="section-flip-4">
                            <div class="wp-chatbot-language-center-summmery">
                                
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#wp-chatbot-lng-general"><?php esc_html_e('General', 'wpchatbot'); ?></a></li>
                                
                                <li><a data-toggle="tab" href="#wp-chatbot-lng-support"><?php esc_html_e('FAQ', 'wpchatbot'); ?></a></li>
                               
                                <li><a data-toggle="tab" href="#wp-chatbot-lng-reserve-keyword"><?php esc_html_e('ChatBot Keywords', 'wpchatbot'); ?></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="wp-chatbot-lng-general" class="tab-pane fade in active">
                                    <div class="top-section">
                                        <div class="row">
                                            <div class="col-xs-12" id="wp-chatbot-language-section">
											
											<p>After making changes in the language center or settings, please type reset and hit enter in the ChatBot to start testing from the beginning or open a new Incognito window (Ctrl+Shit+N in chrome).</p>
											<p>You could use &lt;br&gt; tag for line break.</p>
											
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><?php esc_html_e('Your Company or Website Name', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_host"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_host') != '' ? get_option('qlcd_wp_chatbot_host') : 'Our Store'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><?php esc_html_e('Agent name', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_agent"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_agent') != '' ? get_option('qlcd_wp_chatbot_agent') : 'Carrie'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><?php esc_html_e('User demo name', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_shopper_demo_name"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_shopper_demo_name') != '' ? get_option('qlcd_wp_chatbot_shopper_demo_name') : 'Amigo'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><?php esc_html_e('YES', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_yes"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_yes') != '' ? get_option('qlcd_wp_chatbot_yes') : 'YES'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><?php esc_html_e('NO', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_no"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_no') != '' ? get_option('qlcd_wp_chatbot_no') : 'NO'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><?php esc_html_e('OR', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_or"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_or') != '' ? get_option('qlcd_wp_chatbot_or') : 'OR'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><?php esc_html_e('Sorry', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sorry"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sorry') != '' ? get_option('qlcd_wp_chatbot_sorry') : 'Sorry'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $agent_join_options = unserialize(get_option('qlcd_wp_chatbot_agent_join'));
                                                    $agent_join_option = 'qlcd_wp_chatbot_agent_join';
                                                    $agent_join_text = __('has joined the conversation', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($agent_join_options, $agent_join_option, $agent_join_text);
                                                    ?>
                                                </div>
                                            </div>
                                            <!--col-xs-12-->
                                            <div class="col-xs-12" id="wp-chatbot-language-section">
                                                <h4 class="text-success"><?php esc_html_e(' Message setting for Greetings: ', 'wpchatbot'); ?></h4>
                                                <div class="form-group">
                                                    <?php
                                                    $welcome_to_options = unserialize(get_option('qlcd_wp_chatbot_welcome'));
                                                    $welcome_to_option = 'qlcd_wp_chatbot_welcome';
                                                    $welcome_to_text =__('Welcome to', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($welcome_to_options, $welcome_to_option, $welcome_to_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $welcome_back_options = unserialize(get_option('qlcd_wp_chatbot_welcome_back'));
                                                    $welcome_back_option = 'qlcd_wp_chatbot_welcome_back';
                                                    $welcome_back_text = __('Welcome back', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($welcome_back_options, $welcome_back_option, $welcome_back_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $back_to_start_options = unserialize(get_option('qlcd_wp_chatbot_back_to_start'));
                                                    $back_to_start_option = 'qlcd_wp_chatbot_back_to_start';
                                                    $back_to_start_text = __('Back to Start', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($back_to_start_options, $back_to_start_option, $back_to_start_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $hi_there_options = unserialize(get_option('qlcd_wp_chatbot_hi_there'));
                                                    $hi_there_option = 'qlcd_wp_chatbot_hi_there';
                                                    $hi_there_text = __('Hi There!', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($hi_there_options, $hi_there_option, $hi_there_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $asking_name_options = unserialize(get_option('qlcd_wp_chatbot_asking_name'));
                                                    $asking_name_option = 'qlcd_wp_chatbot_asking_name';
                                                    $asking_name_text = __('May I know your name?', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($asking_name_options, $asking_name_option, $asking_name_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $i_am_options = unserialize(get_option('qlcd_wp_chatbot_i_am'));
                                                    $i_am_option = 'qlcd_wp_chatbot_i_am';
                                                    $i_am_text = __('I am', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($i_am_options, $i_am_option, $i_am_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $name_greeting_options = unserialize(get_option('qlcd_wp_chatbot_name_greeting'));
                                                    $name_greeting_option = 'qlcd_wp_chatbot_name_greeting';
                                                    $name_greeting_text = __('Nice to meet you', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($name_greeting_options, $name_greeting_option, $name_greeting_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $wildcard_msg_options = unserialize(get_option('qlcd_wp_chatbot_wildcard_msg'));
                                                    $wildcard_msg_option = 'qlcd_wp_chatbot_wildcard_msg';
                                                    $wildcard_msg_text = __('I am here to find  what you need. What are you looking for?', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($wildcard_msg_options, $wildcard_msg_option, $wildcard_msg_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $empty_filter_msgs = unserialize(get_option('qlcd_wp_chatbot_empty_filter_msg'));
                                                    $empty_filter_msg = 'qlcd_wp_chatbot_empty_filter_msg';
                                                    $empty_filter_msg_text = __('Sorry, I did not understand that', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($empty_filter_msgs, $empty_filter_msg, $empty_filter_msg_text);
                                                    ?>
                                                </div>
												
												<div class="form-group">
                                                    <?php
                                                    $qlcd_wp_chatbot_did_you_mean = unserialize(get_option('qlcd_wp_chatbot_did_you_mean'));
                                                    $qlcd_wp_chatbot_did_you_means = 'qlcd_wp_chatbot_did_you_mean';
                                                    $wp_chatbot_no_result_text = esc_html__('Did you mean?', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($qlcd_wp_chatbot_did_you_mean, $qlcd_wp_chatbot_did_you_means, $wp_chatbot_no_result_text);
                                                    ?>
                                                </div>
                                                
                                                <h4 class="text-success"> <?php esc_html_e('Message setting for Editor Box ', 'wpchatbot'); ?></h4>
                                                <div class="form-group">
                                                    <?php
                                                    $is_typing_options = unserialize(get_option('qlcd_wp_chatbot_is_typing'));
                                                    $is_typing_option = 'qlcd_wp_chatbot_is_typing';
                                                    $is_typing_text = __('is typing...', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($is_typing_options, $is_typing_option, $is_typing_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $send_a_msg_options = unserialize(get_option('qlcd_wp_chatbot_send_a_msg'));
                                                    $send_a_msg_option = 'qlcd_wp_chatbot_send_a_msg';
                                                    $send_a_msg_text =__('Send a message', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($send_a_msg_options, $send_a_msg_option, $send_a_msg_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $choose_option_options = unserialize(get_option('qlcd_wp_chatbot_choose_option'));
                                                    $choose_option_option = 'qlcd_wp_chatbot_choose_option';
                                                    $choose_option_text = __('Choose an option', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($choose_option_options, $choose_option_option, $choose_option_text);
                                                    ?>
                                                </div>
												
												
												
												<div class="form-group">
                                                    <?php
                                                    $asking_email_options = unserialize(get_option('qlcd_wp_chatbot_asking_email'));
                                                    $asking_email_option = 'qlcd_wp_chatbot_asking_email';
                                                    $asking_email_text = __('Please provide your email address', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($asking_email_options, $asking_email_option, $asking_email_text);
                                                 ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $invalid_email_options = unserialize(get_option('qlcd_wp_chatbot_invalid_email'));
                                                    $invalid_email_option = 'qlcd_wp_chatbot_invalid_email';
                                                    $invalid_email_text = __('Sorry, Email address is not valid! Please provide a valid email.', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($invalid_email_options, $invalid_email_option, $invalid_email_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $asking_msg_options = unserialize(get_option('qlcd_wp_chatbot_asking_msg'));
                                                    $asking_msg_option = 'qlcd_wp_chatbot_asking_msg';
                                                    $asking_msg_text = __('Thank you for email address. Please write your message now.', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($asking_msg_options, $asking_msg_option, $asking_msg_text);
                                                    ?>
                                                </div>
												
												
												
												<div class="form-group">
													<h4 class="qc-opt-title"><?php esc_html_e('WPBot Support Mail Subject', 'wpchatbot'); ?></h4>
													<input type="text" class="form-control qc-opt-dcs-font"
														   name="qlcd_wp_chatbot_email_sub"
														   value="<?php echo(get_option('qlcd_wp_chatbot_email_sub') != '' ? wp_unslash(get_option('qlcd_wp_chatbot_email_sub')) : 'Support Email Subject'); ?>">
												</div>
												
                                                <div class="form-group">
                                                    <?php
                                                    $support_option_again_options = unserialize(get_option('qlcd_wp_chatbot_support_option_again'));
                                                    $support_option_again_option = 'qlcd_wp_chatbot_support_option_again';
                                                    $support_option_again_text = __('You may choose option from below.', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($support_option_again_options, $support_option_again_option, $support_option_again_text);
                                                    ?>
                                                </div>
												
												<div class="form-group">
													<h4 class="qc-opt-title"><?php esc_html_e('Your email was sent successfully.Thanks!', 'wpchatbot'); ?></h4>
													<input type="text" class="form-control qc-opt-dcs-font"
														   name="qlcd_wp_chatbot_email_sent"
														   value="<?php echo(get_option('qlcd_wp_chatbot_email_sent') != '' ? get_option('qlcd_wp_chatbot_email_sent') : 'Your email was sent successfully.Thanks!'); ?>">
												</div>
												<div class="form-group">
													<h4 class="qc-opt-title"><?php esc_html_e('Sorry! I could not send your mail! Please contact the webmaster.', 'wpchatbot'); ?></h4>
													<input type="text" class="form-control qc-opt-dcs-font"
														   name="qlcd_wp_chatbot_email_fail"
														   value="<?php echo(get_option('qlcd_wp_chatbot_email_fail') != '' ? wp_unslash(get_option('qlcd_wp_chatbot_email_fail')) : 'Sorry! fail to send email'); ?>">
												</div>
												
												
												
												
                                                <div class="form-group">
                                                    <?php
                                                    $asking_phone_options = unserialize(get_option('qlcd_wp_chatbot_asking_phone'));
                                                    $asking_phone_option = 'qlcd_wp_chatbot_asking_phone';
                                                    $asking_phone_text = __('Please provide your Phone number', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($asking_phone_options, $asking_phone_option, $asking_phone_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $thanks_phone_options = unserialize(get_option('qlcd_wp_chatbot_thank_for_phone'));
                                                    $thanks_phone_option = 'qlcd_wp_chatbot_thank_for_phone';
                                                    $thanks_phone_text = __('Thank you for Phone number', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($thanks_phone_options, $thanks_phone_option, $thanks_phone_text);
                                                    ?>
                                                </div>
                                                
												<div class="form-group">
													<h4 class="qc-opt-title"><?php esc_html_e('Thanks for your phone number. We will call you ASAP!', 'wpchatbot'); ?></h4>
													<input type="text" class="form-control qc-opt-dcs-font"
														   name="qlcd_wp_chatbot_phone_sent"
														   value="<?php echo(get_option('qlcd_wp_chatbot_phone_sent') != '' ? get_option('qlcd_wp_chatbot_phone_sent') : 'Thanks for your phone number. We will call you ASAP!'); ?>">
												</div>
												<div class="form-group">
													<h4 class="qc-opt-title"><?php esc_html_e('Sorry! I could not collect phone number! Please contact the webmaster.', 'wpchatbot'); ?></h4>
													<input type="text" class="form-control qc-opt-dcs-font"
														   name="qlcd_wp_chatbot_phone_fail"
														   value="<?php echo(get_option('qlcd_wp_chatbot_phone_fail') != '' ? wp_unslash(get_option('qlcd_wp_chatbot_phone_fail')) : 'Sorry! I could not collect phone number!'); ?>">
												</div>
												
												
												
												
                                    
												
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="wp-chatbot-lng-support" class="tab-pane fade">
                                    <div class="top-section">
                                        <div class="row">
                                            <div class="col-xs-12" id="wp-chatbot-language-section">
                                                
                                                <div class="form-group">
                                                    <?php
                                                    $support_welcome_options = unserialize(get_option('qlcd_wp_chatbot_support_welcome'));
                                                    $support_welcome_option = 'qlcd_wp_chatbot_support_welcome';
                                                    $support_welcome_text = __('Welcome to FAQ Section', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($support_welcome_options, $support_welcome_option, $support_welcome_text);
                                                    ?>
                                                </div>
                                                
                                                
                                                
                                                <!--<div class="form-group">
                                                    <?php
                                                    $feedback_label_options = unserialize(get_option('qlcd_wp_chatbot_feedback_label'));
                                                    $feedback_label_option = 'qlcd_wp_chatbot_feedback_label';
                                                    $feedback_label_text = __('Send Feedback!', 'wpchatbot');
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($feedback_label_options, $feedback_label_option, $feedback_label_text);
                                                    ?>
                                                </div>-->
												
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="wp-chatbot-lng-reserve-keyword" class="tab-pane fade">
                                    <div class="top-section">
                                        <div class="row">
                                            <div class="col-xs-12" id="wp-chatbot-language-section">
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><?php esc_html_e('Start Keyword', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sys_key_help"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sys_key_help') != '' ? get_option('qlcd_wp_chatbot_sys_key_help') : 'start'); ?>">
                                                </div>
                                                
                                               
                                                
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><strong><?php esc_html_e('FAQ', 'wpchatbot'); ?></strong> <?php esc_html_e('Keyword', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sys_key_support"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sys_key_support') != '' ? get_option('qlcd_wp_chatbot_sys_key_support') : 'faq'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h4 class="qc-opt-title"><strong><?php esc_html_e('Converstion History Clear', 'wpchatbot'); ?></strong> <?php esc_html_e('Keyword', 'wpchatbot'); ?></h4>
                                                    <input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_sys_key_reset"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_sys_key_reset') != '' ? get_option('qlcd_wp_chatbot_sys_key_reset') : 'reset'); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $help_welcome_options = unserialize(get_option('qlcd_wp_chatbot_help_welcome'));
                                                    $help_welcome_option = 'qlcd_wp_chatbot_help_welcome';
                                                    $help_welcome_text = 'Welcome to Help Section';
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($help_welcome_options, $help_welcome_option, $help_welcome_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $help_msg_options = unserialize(get_option('qlcd_wp_chatbot_help_msg'));
                                                    $help_msg_option = 'qlcd_wp_chatbot_help_msg';
                                                    $help_msg_text = '<h3>Type and Hit Enter</h3>  1. <b>start</b> Get back to the main menu. <br>  2. <b>faq</b> for  FAQ. <br> 3. <b>eMail </b> to Send eMail <br> 4. <b>reset</b> To clear chat history and start from the beginning.';
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($help_msg_options, $help_msg_option, $help_msg_text);
                                                    ?>
                                                </div>
                                                <div class="form-group">
                                                    <?php
                                                    $reset_options = unserialize(get_option('qlcd_wp_chatbot_reset'));
                                                    $reset_option = 'qlcd_wp_chatbot_reset';
                                                    $reset_text = 'Do you want to clear our chat history and start over?';
                                                    $this->qcld_wb_chatbot_dynamic_multi_option($reset_options, $reset_option, $reset_text);
                                                    ?>
                                                </div>
                                            </div>
                                            <!--                                            col-xs-12-->
                                        </div>
                                        <!--                                        row-->
                                    </div>
                                    <!--                                    top-section-->
                                </div>
                                
                            </div>
                            <!--                            tab-content-->
                        </section>

						
					<section id="section-flip-5">
                        <?php 
                        wp_enqueue_style('qcld-wp-chatbot-common-style', plugins_url(basename(plugin_dir_path(__FILE__)) . '/css/common-style.css', basename(__FILE__)), '', QCLD_wpCHATBOT_VERSION, 'screen');
                        ?>
                            <div class="top-section">
                                <div class="notification-block-inner">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            
                                            <div class="row">
												<div class="col-xs-12">
													<h2>Predefined Intents</h2>
													
													
													<div class="row">
														<div class="col-xs-12">
															<h4 class="qc-opt-title"><?php esc_html_e('Call Me', 'wpchatbot'); ?>  </h4>
															<div class="cxsc-settings-blocks">
																<input value="1" id="disable_wp_chatbot_call_gen" type="checkbox"
																	   name="disable_wp_chatbot_call_gen" <?php echo(get_option('disable_wp_chatbot_call_gen') == 1 ? 'checked' : ''); ?>>
																<label for="disable_wp_chatbot_call_gen"><?php esc_html_e('Disable Call Me feature and button on Start Menu', 'wpchatbot'); ?> </label>
															</div>
														</div>
													</div>
													<div class="form-group" style="margin-bottom:0px">
														<h4 class="qc-opt-title"><?php esc_html_e('Button Label', 'wpchatbot'); ?>  </h4>
														<input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_support_phone"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_support_phone') != '' ? get_option('qlcd_wp_chatbot_support_phone') : 'Leave your number. We will call you back!'); ?>">
													</div>
													
													<div class="row">
														<div class="col-xs-12">
															<h4 class="qc-opt-title"><?php esc_html_e('Email', 'wpchatbot'); ?>  </h4>
															<div class="cxsc-settings-blocks">
																<input value="1" id="disable_wp_chatbot_feedback" type="checkbox"
																	   name="disable_wp_chatbot_feedback" <?php echo(get_option('disable_wp_chatbot_feedback') == 1 ? 'checked' : ''); ?>>
																<label for="disable_wp_chatbot_feedback"><?php esc_html_e('Disable Email feature and button on Start Menu', 'wpchatbot'); ?> </label>
															</div>
														</div>
													</div>
													<div class="form-group" style="margin-bottom:0px">
														<h4 class="qc-opt-title"><?php esc_html_e('Button Label', 'wpchatbot'); ?>  </h4>
														<input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_support_email"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_support_email') != '' ? get_option('qlcd_wp_chatbot_support_email') : 'Send us Email'); ?>">
													</div>
													<div class="row">
														<div class="col-xs-12">
															<h4 class="qc-opt-title"><?php esc_html_e('FAQ', 'wpchatbot'); ?>  </h4>
															<div class="cxsc-settings-blocks">
																<input value="1" id="disable_wp_chatbot_faq" type="checkbox"
																	   name="disable_wp_chatbot_faq" <?php echo(get_option('disable_wp_chatbot_faq') == 1 ? 'checked' : ''); ?>>
																<label for="disable_wp_chatbot_faq"><?php esc_html_e('Disable FAQ feature and button on Start Menu', 'wpchatbot'); ?> </label>
															</div>
														</div>
													</div>
													<div class="form-group" style="margin-bottom:0px">
														<h4 class="qc-opt-title"><?php esc_html_e('Button Label', 'wpchatbot'); ?>  </h4>
														<input type="text" class="form-control qc-opt-dcs-font"
                                                           name="qlcd_wp_chatbot_wildcard_support"
                                                           value="<?php echo(get_option('qlcd_wp_chatbot_wildcard_support') != '' ? get_option('qlcd_wp_chatbot_wildcard_support') : 'FAQ'); ?>">
													</div>
													
													
												</div>
											</div>
                                            <div class="qc_menu_setup_area">

											<h2>Menu Sorting & Customization Area</h2>
											<p style="color:red">After making changes in the settings, please clear browser cache and cookies before reloading the page or open a new Incognito window (Ctrl+Shit+N in chrome).</p>
											<p>In this section you can control the UI of the menu.<br> To adjust the <b>Active Menu</b> ordering just drag it up or down. To add a menu item in <b>Active Menu</b> simply drag a menu item from <b>Available Menu</b> and drop it to <b>Active Menu</b> . To remove a menu item from <b>Active Menu</b> simple drag the menu item and drop it to <b>Available Menu</b>.</p>
											<br>
											
                                                <div class="qc_menu_area">
                                                    <h4>Acitve Menu</h4>
                                                                                                      
                                                    <div class="qc_menu_area_container" id="qc_menu_area">

                                                        <?php 
															if(get_option('qc_wpbot_menu_order')!=''):
																echo stripslashes(get_option('qc_wpbot_menu_order'));
															else:?>
															<?php if(get_option('disable_wp_chatbot_faq')==''): ?>
                                                            <span class="qcld-chatbot-wildcard qc_draggable_item_remove"  data-wildcart="support"><?php echo get_option('qlcd_wp_chatbot_wildcard_support'); ?></span>
                                                            <?php endif; ?>
															
															<?php if(get_option('enable_wp_chatbot_messenger')=='1'): ?>
                                                            <span class="qcld-chatbot-wildcard qc_draggable_item_remove"  data-wildcart="messenger"><?php echo qcld_choose_random(unserialize(get_option('qlcd_wp_chatbot_messenger_label'))) ?></span>
                                                            <?php endif; ?>
															
															<?php if(get_option('enable_wp_chatbot_whats')=='1'): ?>
                                                            <span class="qcld-chatbot-wildcard qc_draggable_item_remove"  data-wildcart="whatsapp"><?php echo qcld_choose_random(unserialize(get_option('qlcd_wp_chatbot_whats_label'))); ?></span>
                                                            <?php endif; ?>
															
															<?php if(get_option('disable_wp_chatbot_feedback')==''): ?>
                                                            <span class="qcld-chatbot-suggest-email qc_draggable_item_remove"><?php echo get_option('qlcd_wp_chatbot_support_email'); ?></span>
                                                            <?php endif; ?>
															
															<?php if(get_option('disable_wp_chatbot_call_gen')==''): ?>
                                                            <span class="qcld-chatbot-suggest-phone qc_draggable_item_remove" ><?php echo get_option('qlcd_wp_chatbot_support_phone'); ?></span>
                                                            <?php endif; ?>
															
															<?php
																if(class_exists('Qcformbuilder_Forms_Admin')){
																	global $wpdb;

																	$results = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix."wfb_forms where 1 and type='primary'");
																	if(!empty($results)){
																	?>
																	<?php
																		foreach($results as $result){
																			$form = unserialize($result->config);
																		?>
																			<span class="qcld-chatbot-wildcard qcld-chatbot-form qc_draggable_item_remove" data-form="<?php echo $form['ID']; ?>" ><?php echo $form['name']; ?></span>
																		<?php
																		}
																		?>
																	<?php
																	}
																}
															?>
															
														<?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="qc_menu_list_area">
                                                    <h4>Available Menu</h4>
                                                    <div class="qc_menu_list_container">
                                                    <p>Predefined Intents</p>
                                                    <ul>
                                                        
                                                        
                                                        
                                                        
                                                        <li>
                                                            <?php if(get_option('disable_wp_chatbot_faq')==''): ?>
                                                            <span class="qcld-chatbot-wildcard qc_draggable_item"  data-wildcart="support"><?php echo get_option('qlcd_wp_chatbot_wildcard_support'); ?></span>
                                                            <?php endif; ?>
                                                        
                                                        </li>
                                                        <li>
                                                            <?php if(get_option('enable_wp_chatbot_messenger')=='1'): ?>
                                                            <span class="qcld-chatbot-wildcard qc_draggable_item"  data-wildcart="messenger"><?php echo qcld_choose_random(unserialize(get_option('qlcd_wp_chatbot_messenger_label'))) ?></span>
                                                            <?php endif; ?>
                                                        
                                                        </li>

                                                        <li>
                                                            <?php if(get_option('enable_wp_chatbot_whats')=='1'): ?>
                                                            <span class="qcld-chatbot-wildcard qc_draggable_item"  data-wildcart="whatsapp"><?php echo qcld_choose_random(unserialize(get_option('qlcd_wp_chatbot_whats_label'))); ?></span>
                                                            <?php endif; ?>
                                                        
                                                        </li>

                                                        <li>
                                                            <?php if(get_option('disable_wp_chatbot_feedback')==''): ?>
                                                            <span class="qcld-chatbot-suggest-email qc_draggable_item"><?php echo get_option('qlcd_wp_chatbot_support_email'); ?></span>
                                                            <?php endif; ?>
                                                        
                                                        </li>

                                                        

                                                        <li>
                                                            <?php if(get_option('disable_wp_chatbot_call_gen')==''): ?>
                                                            <span class="qcld-chatbot-suggest-phone qc_draggable_item" ><?php echo get_option('qlcd_wp_chatbot_support_phone'); ?></span>
                                                            <?php endif; ?>
                                                        
                                                        </li>

                                                        
                                                    </ul>

                                                   

                                                    
                                                    <?php
                                                    if(class_exists('Qcformbuilder_Forms_Admin')){
                                                        global $wpdb;

                                                        $results = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix."wfb_forms where 1 and type='primary'");
                                                        if(!empty($results)){
                                                        ?>
                                                        <p>Conversational Form</p>
                                                        <ul>
                                                        <?php
                                                            foreach($results as $result){
                                                                $form = unserialize($result->config);
                                                            ?>
                                                                <li><span class="qcld-chatbot-wildcard qcld-chatbot-form qc_draggable_item" data-form="<?php echo $form['ID']; ?>" ><?php echo $form['name']; ?></span></li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <?php
                                                        }
                                                    }
                                                    ?>
                                                    

                                                    </div>

                                                </div>
                                            
                                            </div>
                                            
                                            <input id="qc_wpbot_menu_order" type="hidden" name="qc_wpbot_menu_order" value='<?php echo stripslashes(get_option('qc_wpbot_menu_order')); ?>' />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <section id="section-flip-6">
                            <div class="top-section">
                                <div class="wp-chatbot-language-center-summmery">
                                    <p><?php esc_html_e('DialogFlow as Artificial Intelligences Engine for wpwBot', 'wpchatbot'); ?> </p>
                                </div>
								<div class="row">
                                    <div class="col-xs-12">
										<p class="wpqcld_chk_seft">
											<a target="_blank" href="https://www.quantumcloud.com/custom-chatbot-services/"><img src="<?php echo QCLD_wpCHATBOT_IMG_URL ?>/chatbot-custom-service.jpg" alt="" /></a>
										</p>
									</div>
								</div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php echo esc_html__('Enable DialogFlow as AI Engine to Detect Intent', 'wpchatbot'); ?> </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="enable_wp_chatbot_dailogflow" type="checkbox"
                                                   name="enable_wp_chatbot_dailogflow" <?php echo(get_option('enable_wp_chatbot_dailogflow') == 1 ? 'checked' : ''); ?>>
                                            <label for="enable_wp_chatbot_dailogflow"><?php echo esc_html__('Enable DialogFlow AI Engine to process Natural Language commands from users.', 'wpchatbot'); ?> </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <br>
                                        <p><?php echo esc_html__('Log in to DialogFlow Console from', 'wpchatbot'); ?>
                                            <a class="wpbot_df_instruction" href="<?php echo esc_url('https://dialogflow.com/'); ?>" target="_blank"><?php echo esc_html__('Here', 'wpchatbot'); ?></a> <?php echo esc_html__('with your gmail account.', 'wpchatbot'); ?> 

                                       <a class="wpbot_df_instruction" href="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'download/wpwBot.zip'); ?>" download ><?php echo esc_html__('Download', 'wpchatbot'); ?></a> <?php echo esc_html__('the agent training data and import from DialogFlow->Settings->Export and Import tab. You can add your own intents in that agent but do not modify our following training intents which are', 'wpchatbot'); ?> <b>email, email subscription, faq, get email, get name, help, phone, reset, site search and start.</b> </p>
                                    </div>

                                    <div class="col-xs-12" id="wp-chatbot-dialflow-section">
                                        <h4 class="qc-opt-title"><?php echo esc_html__('DialogFlow API Version', 'wpchatbot'); ?></h4>
                                        <div class="form-group">

                                            <label class="radio-inline">
                                                <input id="wp-chatbot-df-api" type="radio"
                                                        name="wp_chatbot_df_api"
                                                        value="v2" checked>
                                                <?php echo esc_html__('Dialogflow API V2', 'wpchatbot'); ?>
                                            </label>

                                        </div>

                                        <div id="wp-chatbot-df-section-v2" style="display:block">
                                            <!-- Dialogflow V2 Configuration -->
                                            
											<?php if(!file_exists(QCLD_wpCHATBOT_GC_DIRNAME.'/autoload.php')): ?>
                                            <div class="form-group">
                                                
                                                <br>
                                                <h4 class="qc-opt-title" style="color:red"><?php echo esc_html__('For Interacting with Dialogflow V2 the Google Client Package is Required!', 'wpchatbot'); ?></h4>
                                                <p>Please click the download button below to download the Google Client package. The package will be downloaded inside your Wordpress's <b>/wp-content</b> folder. This package is around <b>10 MB</b> in zip file format and it will be about <b>49 MB</b> after unzipping. Please make sure that your server has enough space to store that package.</p>
                                                <div class="qcld-wpbot-gcdownload-area">
                                                    <button class="btn btn-primary" id="qc_wpbot_gc_download" <?php echo (!is_writable(QCLD_wpCHATBOT_GC_ROOT)?'disabled':''); ?>>Download and Install the Google Client</button>
													<?php 
														if(!is_writable(QCLD_wpCHATBOT_GC_ROOT)){
															echo '<span style="color:red;font-size: 12px;"><b>wp-content</b> folder is not writable.</span>';
														}
													?>
													<br><br>
													<p>Alternatively, If the download operation fails for some reason like folder permission or server timeout issue then you can manually upload the <u title="Google Client">GC</u> package by following some simple steps.</p>
													<p>1. Download GC package from: <a href="https://github.com/qcloud/gc/archive/master.zip" target="_blank">https://github.com/qcloud/gc/archive/master.zip</a></p>
													<p>2. Unzip the <b>wpbotgc.zip</b> inside to your computer.</p>
													<p>3. Create a folder with name <b>wpbot-dfv2-client</b> under <b>wp-content</b> into your server.</p>
													<p>4. Upload the upziped files and folders into <b>wpbot-dfv2-client</b> via FTP.</p>
													
													
                                                    <div class="qcld_wpbot_download_statuses">
                                                        
                                                    </div>
                                                </div>
                                                <br>
                                                
                                            </div>
                                            <?php else: ?>
                                            <div class="form-group">
                                                <h4 class="qc-opt-title" style="color:green"><?php echo esc_html__('Google Client Package is Installed on Your Website.', 'wpchatbot'); ?></h4>
                                            </div>
                                            <?php endif; ?>
											
											<div class="form-group">
                                            <h4 class="qc-opt-title" >Please follow along with this <a href="https://dev.quantumcloud.com/wpbot-pro/dialogflow-integration/" target="_blank">tutorial</a>. It will help you to create a project id, private key and integrate WPBot with Dialogflow: <a href="https://dev.quantumcloud.com/wpbot-pro/dialogflow-integration/" target="_blank">Click Here</a></h4>
                                        </div>
										
                                            <div class="form-group">
                                                <h4 class="qc-opt-title"><?php echo esc_html__('DialogFlow Project ID', 'wpchatbot'); ?></h4>
                                                <p>You can follow the <a href="https://www.youtube.com/watch?v=qY-EHFY2wH8" target="_blank">tutorial</a> to get the Project ID. </p>
                                                <input type="text" class="form-control qc-opt-dcs-font"
                                                        name="qlcd_wp_chatbot_dialogflow_project_id"
                                                        value="<?php echo(get_option('qlcd_wp_chatbot_dialogflow_project_id') != '' ? get_option('qlcd_wp_chatbot_dialogflow_project_id') : ''); ?>" placeholder="<?php echo esc_html__('DialogFlow Project ID', 'wpchatbot'); ?>">
                                            </div>
<?php 

$placeholderPrivatekey = '{
    "type": "service_account",
    "project_id": "PLACEYOUROWNID",
    "private_key_id": "31e300128..........c48",
    "private_key": "-----BEGIN PRIVATE KEY-----\nTHIS IS A DEMO PRIVATE KEY to SHOW HOW IT SHOULD LOOK. Replace with ACTUAL KEY.+OdT09MGEdAjlgSF2HMDA3fl8Ey4dmTxRfAN9No6G3Ugs3BrpZHfY\nSviWzS4JQ0GkCubcJc0DzJ8AqG6xX7E3SfKpdtKEn1eYV7sfQL3C2lm2lTj6nWdt\nxrkhJVHn61kxfPAWChnkdPa5EbMNFnV5mN5rhwaOxR+tEjW9nWBjVFG0NMnOMWF4\nsu6QJVjQMtI99jPBCid1r4XV/sPABSXh8dscWdMinGhZfuCjF4sOGHUUaw+VDGb6\nZpPOh65nw5fsdOHETsb4BN/LW72Khux+870Ig4jkuLIN3PnSF9QfwO8U2qTG5sZK\nn5nxhT9zAgMBAAECggEAX1NSWRGnrcVsu6n1jn9xUpzvxyy+CJe1Z1DvHo1tmHNS\n0Q8OI/Y........THIS IS A DEMO PRIVATE KEY to SHOW HOW IT SHOULD LOOK. Replace with your own key......................................paqQKBgQCJ\nvNCZIHpLGVqwiw4SVYgZW2i+VsZ78sOw0SuuhjZNmOlGjpalbQCjKs9l5dSz5t5D\nVleJVyriFaXyvVty/iF6orqTgv0EhcLO2RI9KSrTpbOXcIkgeunAhRM3oloxSndt\n98H3f1xRvTLIm1enERLkOyGHmm7nWFV0BQWD+CxeCwKBgDtBGn+uBgNgZjSaLnkJ\noemAoIBN6aD4+QWduPldRgTilH6ABQ26SL+t4sa9jbAtkMuD/hWOMLBqmz98tfCC\ndy6cPghea+b0S7lj/wmUaDA1Vmz7luCLm+lO+fe3K6WIlEhAP/9MXVH90Sj6CllF\nAn4stWzIKHrRKA3lIvgJv+9W\n-----END PRIVATE KEY-----\n",
    "client_email": "dialogflow-evysjn@wpbotpro.iam.gserviceaccount.com",
    "client_id": "1026.....032997",
    "auth_uri": "https://accounts.google.com/o/oauth2/auth",
    "token_uri": "https://oauth2.googleapis.com/token",
    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
    "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/dialogflow-evysjn%40wpbotpro.iam.gserviceaccount.com"
}';

?>
                                            <div class="form-group">
                                                <h4 class="qc-opt-title"><?php echo esc_html__('Private Key', 'wpchatbot'); ?></h4>
                                                <p>Put your google service account's private key JSON string here. You can follow the <a href="https://www.youtube.com/watch?v=qY-EHFY2wH8" target="_blank">tutorial</a> to get private key JSON file. </p>
                                                <textarea class="form-control" rows="20" name="qlcd_wp_chatbot_dialogflow_project_key" placeholder='<?php echo $placeholderPrivatekey; ?>'><?php echo(get_option('qlcd_wp_chatbot_dialogflow_project_key') != '' ? get_option('qlcd_wp_chatbot_dialogflow_project_key') : ''); ?></textarea>
                                            </div>

                                            

                                            <!-- End Dialogflow V2 Configuration -->
                                        </div>

                                        
										<div class="form-group">
                                            <h4 class="qc-opt-title"><?php echo esc_html__('Please Click the Button Below to Test Dialogflow Connection.', 'wpchatbot'); ?> </h4>
											<p style="color:red"><?php echo esc_html__('*Save settings before pressing Test Dialogflow Connection', 'wpchatbot'); ?><br>
											<?php echo esc_html__('*You must have owner permission for the service account your are using in Dialogflow agent.', 'wpchatbot'); ?></p>
                                            <div class="cxsc-settings-blocks">
                                            <button class="btn btn-primary" id="qc_wpbot_df_status">Test Dialogflow Connection</button>
                                                <div class="qcwp_df_status"></div>
                                            </div>
                                        </div>
										<br>
                                        <div class="form-group">
                                            <h4 class="qc-opt-title"><?php esc_html_e('DialofFlow Default reply', 'wpchatbot'); ?></h4>
                                            <input type="text" class="form-control qc-opt-dcs-font"
                                                   name="qlcd_wp_chatbot_dialogflow_defualt_reply"
                                                   value="<?php echo(get_option('qlcd_wp_chatbot_dialogflow_defualt_reply') != '' ? get_option('qlcd_wp_chatbot_dialogflow_defualt_reply') : 'Sorry, I did not understand you. You may browse'); ?>" placeholder="<?php esc_html_e('DialogFlow default reply', 'wpchatbot'); ?>">
                                        </div>
										
										
										<div class="form-group">
                                            <h4 class="qc-opt-title"><?php echo esc_html__('DialogFlow Agent Language (Ex: en)', 'wpchatbot'); ?></h4>
                                            <input type="text" class="form-control qc-opt-dcs-font"
                                                   name="qlcd_wp_chatbot_dialogflow_agent_language"
                                                   value="<?php echo (get_option('qlcd_wp_chatbot_dialogflow_agent_language') != '' ? get_option('qlcd_wp_chatbot_dialogflow_agent_language') : 'en'); ?>" placeholder="<?php echo esc_html__('DialogFlow Agent Language', 'wpchatbot'); ?>">
                                        </div>
										
                                    </div>
                                </div>
                            </div>
                            
                        </section>
                        <!--<section id="section-flip-10">
                            <div class="wp-chatbot-language-center-summmery">
                                <p><?php esc_html_e('Enable the Mobile App feature ONLY if you bought ', 'wpchatbot'); ?> <a target="_blank" href="https://www.quantumcloud.com/products/wpcommerce-chatbot-wpwbot/#app"><?php esc_html_e(' the Mobile App Addon.', 'wpchatbot'); ?></a>
                            </div>
                            <div class="top-section">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="qc-opt-title"><?php esc_html_e('Mobile App Pages', 'wpchatbot'); ?> </h4>
                                        <div class="cxsc-settings-blocks">
                                            <input value="1" id="wp_chatbot_app_pages" type="checkbox"
                                                   name="wp_chatbot_app_pages" <?php echo(get_option('wp_chatbot_app_pages') == 1 ? 'checked' : ''); ?>>
                                            <label for="wp_chatbot_app_pages"><?php esc_html_e('Create pages for WpBot Mobile App', 'wpchatbot'); ?> </label>
                                        </div>
                                        <br>
                                        <p class="qc-opt-title-font"><?php esc_html_e('Following pages will be created to use in', 'wpchatbot'); ?> <strong> <?php esc_html_e('WpBot', 'wpchatbot'); ?> </strong> <?php esc_html_e(' Android or IOS Mobile App', 'wpchatbot'); ?>.</p>
                                        <ol>
                                            <li><?php esc_html_e('WpBot Mobile App', 'wpchatbot'); ?></li>
                                            <li><?php esc_html_e('WpBot App Checkout', 'wpchatbot'); ?></li>
                                            <li><?php esc_html_e('WpBot App Order Thank You', 'wpchatbot'); ?></li>
                                        </ol>
                                        <p class="qc-opt-title-font"><?php esc_html_e('Follow the', 'wpchatbot'); ?> <strong> <?php esc_html_e('Documentation', 'wpchatbot'); ?> </strong>  <?php esc_html_e('to build & publish a Mobile Application (Android or IOS ) for your store using any of', 'wpchatbot'); ?> </p>
                                        <ol>
                                            <li><?php esc_html_e('WpBot Ionic FrameWork package', 'wpchatbot'); ?></li>
                                            <li><?php esc_html_e('WpBot PhoneGap package', 'wpchatbot'); ?></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            
                        </section>-->

						
                        <section id="section-flip-7">
                            <div class="top-section">
                                <div class="row">
                                    <div class="col-xs-12">

        <?php wp_enqueue_style( 'qcpd-google-font-lato', 'https://fonts.googleapis.com/css?family=Lato' ); ?>
		<?php wp_enqueue_style( 'qcpd-style-addon-page', QCLD_wpCHATBOT_PLUGIN_URL.'qc-support-promo-page/css/style.css' ); ?>
        <?php wp_enqueue_style( 'qcpd-style-responsive-addon-page', QCLD_wpCHATBOT_PLUGIN_URL.'qc-support-promo-page/css/responsive.css' ); ?>
        
<div class="qc_support_container"><!--qc_support_container-->

<div class="qc_tabcontent clearfix-div">
<div class="qc-row">
	<div class="wpbot-chatbot-pro-link">
		<a href="https://www.quantumcloud.com/products/chatbot-for-wordpress/" target="_blank" >Get the ChatBot Pro <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/wp-bot-logo.png'); ?>" /></a>
	</div>
    <h2 class="plugin-title wpbot_page_title" style="text-align:center" >Extend <a href="https://www.quantumcloud.com/products/chatbot-for-wordpress/" target="_blank">WPBot Pro</a> and give it more Super Powers</h2>
    <p style="text-align:center">Following AddOns and Themes are available for the <a href="https://www.quantumcloud.com/products/chatbot-for-wordpress/" target="_blank">WPBot pro!</a></p>
    
	<div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				 <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/conversational-forns.png'); ?>" alt="">
			</div>
			<div class="support-block-info">
				<h4><a href="#">Conversational Form Addon</a></h4>
				<p>Use the Conversational form builder AddOn to create conversations and forms for a native WordPress ChatBot experience without any 3rd party integrations. Conversational forms can also be emailed to you.</p>
                <p><a href="https://wordpress.org/plugins/conversational-forms/" target="_blank">Download Free</a>|<a href="<?php echo esc_url('https://www.quantumcloud.com/products/conversations-and-form-builder/'); ?>" target="_blank">Download Pro</a></p>

			</div>
		</div>
	</div><!--/qc-column-4 -->
	
	<div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank"> <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/woo-addon-256.png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">Woocommerce Addon</a></h4>
				<p>Utilize the Chatbot on your Woocommerce website and make a Woocommerce Chatbot with zero configuration</p>

			</div>
		</div>
	</div><!--/qc-column-4 -->
	
	<div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank"> <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/messenger-chatbot.png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">Messenger ChatBot Addon</a></h4>
				<p>Utilize the WPBot on your website as a hub to respond to customer questions on FB Page & Messenger</p>
				<p><a href="https://wordpress.org/plugins/chatbot-for-messenger/" target="_blank">Download Free</a>|<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">Download Pro</a></p>

			</div>
		</div>
	</div><!--/qc-column-4 -->
	
	<div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank"> <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/custom-post-type-addon-logo.png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">Extended Search</a></h4>
				<p>Extend WPBot’s search power to include almost any Custom Post Type including WooCommerce</p>

			</div>
		</div>
	</div><!--/qc-column-4 -->
	

	<div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank"> <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/chatbot-sesssion-save.png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">ChatBot Session Save Addon</a></h4>
				<p>This AddOn saves the user chat sessions and helps you fine tune the bot for better support and performance.</p>

			</div>
		</div>
	</div><!--/qc-column-4 -->
	
	
	<div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank"> <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/WPBot-LiveChat.png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">LiveChat Addon</a></h4>
				<p>Live Human Chat integrated with WPBot<p/>
			</div>
		</div>
	</div><!--/qc-column-4 -->

    <div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank"> <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/white-label.png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">White Label WPBot</a></h4>
				<p>Replace the QuantumCloud Logo and branding with yours. Suitable for developers and agencies interested in providing ChatBot services for their clients.<p/>
			</div>
		</div>
	</div><!--/qc-column-4 -->
	
	<div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank"> <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/mailing-list-integrationt (1).png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">Mailing List Integration AddOn</a></h4>
				<p>Mailing List Integration is an addon that lets you connect our ChatBot with Mailchimp and Zapier accounts. You can add new subscribers to your Mailchimp Lists and unsubscribe them.<p/>
			</div>
		</div>
	</div><!--/qc-column-4 -->
    <div class="qc-column-6"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block support-block-custom">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank"> <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/chatbot-addons.png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">More Addons</a></h4>
				<p>Check out all the available ChatBot AddOns<p/>
			</div>
		</div>
	</div><!--/qc-column-4 -->
	<div class="qc-column-12"><!-- qc-column-4 -->
		<!-- Feature Box 1 -->
		<div class="support-block ">
			<div class="support-block-img">
				<a href="<?php echo esc_url('https://www.quantumcloud.com/products/themes/chatbot-theme/'); ?>" target="_blank"> <img class="wp_addon_fullwidth" src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/ChatBot-Master-theme.png'); ?>" alt=""></a>
			</div>
			<div class="support-block-info">
				<h4><a href="<?php echo esc_url('https://www.quantumcloud.com/products/chatbot-addons/'); ?>" target="_blank">ChatBot Master Theme</a></h4>
                <p style="margin-top: -24px;margin-bottom: 50px;">Get a ChatBot Powered Theme!</p>
			</div>
		</div>
	</div><!--/qc-column-4 -->

</div>
<!--qc row-->
</div>

</div><!--qc_support_container-->



                                    </div>
                                </div>
                                <!--                                row-->
                            </div>
                        </section>						
						
						
                    </div><!-- /content -->
                </div><!-- /wp-chatbot-tabs -->
                <footer class="wp-chatbot-admin-footer">
                    <div class="row">
                        <div class="text-left col-sm-3 col-sm-offset-3">
                            <input type="button" class="btn btn-warning submit-button"
                                   id="qcld-wp-chatbot-reset-option"
                                   value="<?php esc_html_e('Reset all options to Default', 'wpchatbot'); ?>"/>
                        </div>
                        <div class="text-right col-sm-6">
                            <input type="submit" class="btn btn-primary submit-button" name="submit"
                                   id="submit" value="<?php esc_html_e('Save Settings', 'wpchatbot'); ?>"/>
                        </div>
                    </div>
                    <!--                    row-->
                </footer>
            </section>
        </div>
        <?php wp_nonce_field('wp_chatbot'); ?>
    </form>