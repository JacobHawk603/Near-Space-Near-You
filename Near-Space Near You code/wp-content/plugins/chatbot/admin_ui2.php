<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $wpdb;
$tableuser    = $wpdb->prefix.'wpbot_sessions';
$session_exists = $wpdb->get_row("select * from $tableuser where 1 and id = '1'");

if(!empty($session_exists)){
    $total_session = $session_exists->session;
}else{
    $total_session = 0;
}
?>
<div class="wrap">
    <h1 class="wpbot_header_h1"><?php echo esc_html__('', 'wpchatbot'); ?> </h1>
</div>
<div class="wp-chatbot-wrap">
    <div class="wpbot_dashboard_header container"><h1>WPBot Dashboard</h1></div>
    <div class="wpbot_addons_section container">
        <div class="wpbot_single_addon_wrapper">
            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/icon-0.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">WPBot Free</div>
                        <div class="wpbot_addon_details">
                            <span class="wp_addon_installed">Installed</span>
                            <p>Wordpress Chatbot by QuantumCloud</p>
                            <a class="button button-secondary" href="<?php echo esc_url(admin_url('admin.php?page=wpbot')); ?>" >Settings</a>
							<a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-for-wordpress/" target="_blank" >Upgrade to Pro</a>
                        </div>            
                    </div>

                </div>

            </div>
        
			<div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/woo-addon-256.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Bot - Woocommerce Addon</div>
                        <div class="wpbot_addon_details">
                        <?php if(class_exists('QCLD_MAILING_LIST_INTEGRATION_ADDON')){
                                echo '<span class="wp_addon_installed">Installed</span>';
                            }else{
                                echo '<span class="wp_addon_notinstalled">Not Installed</span>';
                            } ?>
                        
                            <p>WooCommerce ChatBot</p>
                            <?php if(function_exists('qcpd_wpwc_addon_lang_init')){
                                ?>
                                <a class="button button-secondary" href="<?php echo esc_url(admin_url('admin.php?page=wpwc-settings-page')); ?>" >Settings</a>
                                <?php
                            }else{
                                ?>
                                <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                                <?php
                            } ?>
                        </div>            
                    </div>
                </div>
            </div>
		
            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/WPBot-LiveChat.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Bot - Live Chat</div>
                        <div class="wpbot_addon_details">

                            <span class="wp_addon_notinstalled">Not Installed</span>

                            <p>Live Chat integrated with WPBot Pro</p>
                            <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                                
                        </div>            
                    </div>

                </div>

            </div>

            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/conversational-forns.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Bot - Conversational Form</div>
                        <div class="wpbot_addon_details">

                            <?php if(function_exists('qc_formbuilder_do_calculation')){
                                $cfb = 'Pro';
                            }else{
                                $cfb = 'Free';
                            } ?>

                            <?php if(function_exists('qcformbuilder_forms_load')){
                                echo '<span class="wp_addon_installed">Installed '.$cfb.'</span>';
                            }else{
                                echo '<span class="wp_addon_notinstalled">Not Installed</span>';
                            } ?>
                            <p>Conversational form builder AddOn</p>
                            <?php if(function_exists('qcformbuilder_forms_load')){
                                ?>
                                <a class="button button-secondary" href="<?php echo esc_url(admin_url('admin.php?page=qcformbuilder-forms')); ?>" >Settings</a>
                                <?php if($cfb=='Free'): ?>
                                <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Upgrade to Pro</a>
                                <?php endif; ?>
                                <?php
                            }else{
                                ?>
                                <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                                <?php
                            } ?>
                        </div>            
                    </div>

                </div>

            </div>

            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/custom-post-type-addon-logo.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Bot - Extended Search</div>
                        <div class="wpbot_addon_details">
                            <span class="wp_addon_notinstalled">Not Installed</span>
                            
                            <p>Extend Bot’s search power for WPBot Pro</p>

                            <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                                
                        </div>            
                    </div>
                </div>
            </div>

            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/messenger-chatbot.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Bot - Messenger</div>
                        <div class="wpbot_addon_details">
                            
							<?php if(function_exists('qcpd_wpfb_messenger_checking_dependencies')){
                                echo '<span class="wp_addon_installed">Installed</span>';
                            }else{
                                echo '<span class="wp_addon_notinstalled">Not Installed</span>';
                            } ?>
							
                            
                            
                            <p>Messenger Chatbot for WPBot Pro</p>
                            
							<?php if(function_exists('qcpd_wpfb_messenger_checking_dependencies')){
                                ?>
                            <a class="button button-secondary" href="<?php echo esc_url(admin_url('admin.php?page=wbfb-botsetting-page')); ?>" >Settings</a>
							<?php }else{ ?>
                                <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
							<?php } ?>
                        </div>            
                    </div>
                </div>
            </div>

            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/chatbot-sesssion-save.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Bot - Session Save</div>
                        <div class="wpbot_addon_details">
                            
                            <span class="wp_addon_notinstalled">Not Installed</span>
                            <p>Chat sessions for WPBot Pro</p>
                            
                            <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                               
                        </div>            
                    </div>
                </div>
            </div>

            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/white-label.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Bot - White Label</div>
                        <div class="wpbot_addon_details">
                            <span class="wp_addon_notinstalled">Not Installed</span>
                            <p>Replace the branding for WPBot Pro</p>
                            <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>

                        </div>            
                    </div>
                </div>
            </div>

            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/mailing-list-integrationt%20(1).png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Bot - Mailing List Integration</div>
                        <div class="wpbot_addon_details">
                        
                            <span class="wp_addon_notinstalled">Not Installed</span>

                            <p>Mailchimp and Zapier for WPBot Pro</p>
                            
                            <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                                
                        </div>            
                    </div>
                </div>
            </div>
			<div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/simple-text-responses.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Chatbot STR Pro Addon</div>
                        <div class="wpbot_addon_details">
                        <?php if(function_exists('qcld_str_pro_dependency')){
                                echo '<span class="wp_addon_installed">Installed</span>';
                            }else{
                                echo '<span class="wp_addon_notinstalled">Not Installed</span>';
                            } ?>
                        
                            <p>Addon plugin that extends feature of STR</p>
                            <?php if(function_exists('qcld_str_pro_dependency')){
                                ?>
                                <a class="button button-secondary" href="<?php echo esc_url(admin_url('admin.php?page=simple-text-response')); ?>" >Settings</a>
                                <?php
                            }else{
                                ?>
                                <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                                <?php
                            } ?>
                        </div>            
                    </div>
                </div>
            </div>
			<div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/muli-lamguage.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Multi Language Addon</div>
                        <div class="wpbot_addon_details">
                        <?php if(class_exists('Qcld_Wpbot_Multilanguage')){
                                echo '<span class="wp_addon_installed">Installed</span>';
                            }else{
                                echo '<span class="wp_addon_notinstalled">Not Installed</span>';
                            } ?>
                        
                            <p>Add multiple language for your ChatBot</p>
                            <?php if(class_exists('Qcld_Wpbot_Multilanguage')){
                                ?>
                                <a class="button button-secondary" href="<?php echo esc_url(admin_url('admin.php?page=wpbotml-settings-page')); ?>" >Settings</a>
                                <?php
                            }else{
                                ?>
                                <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                                <?php
                            } ?>
                        </div>            
                    </div>
                </div>
            </div>

            <div class="wpbot_single_addon">
                <div class="wpbot_single_content">
                    <div class="wpbot_addon_image">
                        <img src="<?php echo esc_url(QCLD_wpCHATBOT_PLUGIN_URL.'images/voice-message.png'); ?>" title="" />
                    </div>
                    <div class="wpbot_addon_content">
                        <div class="wpbot_addon_title">Voice Message Addon</div>
                        <div class="wpbot_addon_details">
                        <?php if( is_plugin_active( 'voice-message-addon/wpbotvoicemessage.php' ) ){
                                echo '<span class="wp_addon_installed">Installed</span>';
                            }else{
                                echo '<span class="wp_addon_notinstalled">Not Installed</span>';
                            } ?>
                        
                            <p>Voice Message Addon for your ChatBot</p>
                            <?php if( is_plugin_active( 'voice-message-addon/wpbotvoicemessage.php' ) ){
                                ?>
                                <a class="button button-secondary" href="<?php echo esc_url(admin_url('edit.php?post_type=qcldcontacter_record&page=qcld_wpvm_vmwbmdp_contacter_settings')); ?>" >Settings</a>
                                <?php
                            }else{
                                ?>
                                <a class="button button-secondary" href="https://www.quantumcloud.com/products/chatbot-addons/" target="_blank" >Get It Now</a>
                                <?php
                            } ?>
                        </div>            
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            
        </div>
		<div class="wpbot_statistics_area">
                <h2>WPBot Statistics</h2>
                <div class="wpbot_report">
                    
                    <p><span class="wpbot_report_key">Total ChatBot Sessions</span>:<span class="wpbot_report_value"><?php echo esc_html($total_session); ?></span></p>

                </div>
        </div>

    </div>
</div>