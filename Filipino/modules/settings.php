<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2018 The OGP Development Team
 * Language Created By: CarlR.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * Credits To CarlR. For this Filipino OGP Translation.
 */
 
define('OGP_LANG_maintenance_mode', "Maintenance");
define('OGP_LANG_maintenance_mode_info', "Huwag paganahin ang Panel para sa mga normal na user. Tanging mga administrator lang ang makaka-access nito sa panahon ng maintenance.");
define('OGP_LANG_maintenance_title', "Titulo ng Maintenance");
define('OGP_LANG_maintenance_title_info', "Ang pamagat na ipinapakita sa mga normal na gumagamit sa panahon ng pagpapanatili.");
define('OGP_LANG_maintenance_message', "Maintenance Message");
define('OGP_LANG_maintenance_message_info', "Ang mensaheng ipinapakita sa mga normal na user sa panahon ng maintenance.");
define('OGP_LANG_update_settings', "I- update ang Settings");
define('OGP_LANG_settings_updated', "Tagumpay na na-update ang mga setting.");
define('OGP_LANG_panel_language', "Wika ng panel");
define('OGP_LANG_panel_language_info', "Ang wikang ito ay ang default na wika ng panel. Maaaring baguhin ng mga user ang kanilang sariling wika mula sa kanilang pahina sa pag-edit ng profile.");
define('OGP_LANG_page_auto_refresh', "Page Auto Refresh");
define('OGP_LANG_page_auto_refresh_info', "Ang mga setting ng Auto Refresh ng Pahina ay pangunahing ginagamit sa pag-debug ng panel. Sa normal na paggamit dapat itong itakda sa Naka-on.");
define('OGP_LANG_smtp_server', "Palabas na E-Mail Server");
define('OGP_LANG_smtp_server_info', "Ito ang papalabas na mail server (SMTP server) na ginagamit, halimbawa, upang magpadala ng mga nakalimutang password sa mga user, localhost bilang default.");
define('OGP_LANG_panel_email_address', "Palabas na E-Mail Address");
define('OGP_LANG_panel_email_address_info', "Ito ang e-mail address na nasa mula sa field kapag ipinadala ang mga password sa mga user.");
define('OGP_LANG_panel_name', "Panel name");
define('OGP_LANG_panel_name_info', "Pangalan ng Panel na ipinapakita sa pamagat ng pahina. I-overrule ng halagang ito ang lahat ng pamagat ng pahina, kung hindi ito walang laman.");
define('OGP_LANG_feed_enable', "Paganahin ang LGSL Feed");
define('OGP_LANG_feed_enable_info', "Kung ang iyong webhost ay may firewall na humaharang sa query port, kailangan mong buksan nang manu-mano ang port.");
define('OGP_LANG_feed_url', "URL ng Feed");
define('OGP_LANG_feed_url_info', "Ang GrayCube.com ay nagbabahagi ng LGSL feed sa URL:<br><b>http://www.greycube.co.uk/lgsl/feed/lgsl_files/lgsl_feed.php</b> ");
define('OGP_LANG_steam_user', "Steam User");
define('OGP_LANG_steam_user_info', "Ang user na ito ay kailangan upang mag-log in sa steam para sa pag-download ng ilang mga bagong laro tulad ng CS:GO.");
define('OGP_LANG_steam_pass', "Steam Password");
define('OGP_LANG_steam_pass_info', "Itakda dito ang password ng steam account.");
define('OGP_LANG_steam_guard', "Steam Guard");
define('OGP_LANG_steam_guard_info', "Ang ilang mga user ay may steam guard na na-activate upang protektahan ang kanilang mga account mula sa mga hacker,<br>ang code na ito ay ipinadala sa email ng account kapag nagsimula ang unang steam update.");
define('OGP_LANG_smtp_port', "SMTP Port");
define('OGP_LANG_smtp_port_info', "Kung ang SMTP port ay hindi ang default na port (25) Ipasok ang SMTP port dito.");
define('OGP_LANG_smtp_login', "SMTP User");
define('OGP_LANG_smtp_login_info', "Kung ang iyong SMTP server ay nangangailangan ng pagpapatunay, ilagay ang iyong user name dito.");
define('OGP_LANG_smtp_passw', "SMTP Password");
define('OGP_LANG_smtp_passw_info', "Kung hindi ka magtatakda ng password ang pagpapatunay ng SMTP ay hindi paganahin.");
define('OGP_LANG_smtp_secure', "SMTP Secure");
define('OGP_LANG_smtp_secure_info', "Gumamit ng SSL/TLS para kumonekta sa SMTP server");
define('OGP_LANG_time_zone', "Time Zone");
define('OGP_LANG_time_zone_info', "Itinakda ang default na timezone na ginagamit ng lahat ng mga function ng petsa/oras.");
define('OGP_LANG_query_cache_life', "Query cache life");
define('OGP_LANG_query_cache_life_info', "Itinakda ang timeout sa ilang segundo bago ma-refresh ang status ng server.");
define('OGP_LANG_query_num_servers_stop', "Huwag paganahin ang Game Server Queries After");
define('OGP_LANG_query_num_servers_stop_info', "Gamitin ang setting na ito upang huwag paganahin ang mga query kung ang isang user ay nagmamay-ari ng higit pang mga server ng laro kaysa sa halagang ito na tinukoy upang mapabilis ang pag-load ng panel.");
define('OGP_LANG_editable_email', "Editable E-Mail Address");
define('OGP_LANG_editable_email_info', "Piliin kung maaaring i-edit ng mga user ang kanilang e-mail address o hindi.");
define('OGP_LANG_old_dashboard_behavior', "Old Dashboard behavior");
define('OGP_LANG_old_dashboard_behavior_info', "Ang lumang Dashboard ay tumatakbo nang mas mabagal, ngunit nagpapakita ng higit pang impormasyon ng server (hal. kasalukuyang mga manlalaro at mapa).");
define('OGP_LANG_rsync_available', "Available Rsync servers");
define('OGP_LANG_rsync_available_info', "Piliin kung anong listahan ng mga server ang ipapakita sa pag-install ng rsync.");
define('OGP_LANG_all_available_servers', "Lahat ng available na server ( rsync_sites.list + rsync_sites_local.list )");
define('OGP_LANG_only_remote_servers', "Only remote servers ( rsync_sites.list )");
define('OGP_LANG_only_local_servers', "Only local servers ( rsync_sites_local.list )");
define('OGP_LANG_header_code', "Header code");
define('OGP_LANG_header_code_info', "Dito maaari mong isulat ang iyong sariling header code (tulad ng HTML code, Embed Code atbp.) nang hindi ine-edit ang layout ng tema.");
define('OGP_LANG_support_widget_title', "Titulo ng support widget");
define('OGP_LANG_support_widget_title_info', "Isang custom na pamagat para sa widget ng suporta sa Dashboard.");
define('OGP_LANG_support_widget_content', "Support widget content");
define('OGP_LANG_support_widget_content_info', "Ang nilalaman ng widget ng suporta (pinapayagan ang HTML code).");
define('OGP_LANG_support_widget_link', "Support widget link");
define('OGP_LANG_support_widget_link_info', "Ang URL ng iyong site ng suporta.");
define('OGP_LANG_recaptcha_site_key', "Recaptcha Site Key");
define('OGP_LANG_recaptcha_site_key_info', "Ang site key na ibinigay sa iyo ng Google.");
define('OGP_LANG_recaptcha_secret_key', "Recaptcha Secret Key");
define('OGP_LANG_recaptcha_secret_key_info', "Ang lihim na susi na ibinigay sa iyo ng Google.");
define('OGP_LANG_recaptcha_use_login', "Use Recaptcha on Login");
define('OGP_LANG_recaptcha_use_login_info', "Kung pinagana, kailangang lutasin ng mga user ang Not a Robot Recaptcha kapag sinusubukang mag-login.");
define('OGP_LANG_login_attempts_before_banned', "Bilang ng mga nabigong pagsubok sa pag-log in bago ma-ban ang user");
define('OGP_LANG_login_attempts_before_banned_info', "Kung sinubukan ng isang user na mag-login gamit ang mga di-wastong kredensyal nang higit pa rito nang maraming beses, pansamantalang pagbabawalan ng panel ang user.");
define('OGP_LANG_custom_github_update_username', "GitHub update username");
define('OGP_LANG_custom_github_update_username_info', "Ilagay ang iyong GitHub username LAMANG para gamitin ang sarili mong mga forked repository para i-update ang OGP. Dapat lang itong baguhin ng mga developer na gustong gumamit ng sarili nilang mga repo para sa development sa halip na tingnan ang posibleng buggy code sa pangunahing sangay. ");
define('OGP_LANG_custom_github_update_branch_name', "GitHub branch name");
define('OGP_LANG_custom_github_update_branch_name_info', "Ilagay ang pangalan ng sangay na gusto mong gamitin para sa pag-update ng OGP. Dapat lang itong baguhin ng mga developer na gustong gumamit ng sarili nilang mga repo para sa pag-unlad sa halip na suriin ang posibleng buggy code sa pangunahing sangay.&nbsp; Umalis blangko ang field na ito sa default sa \"master\"");
define('OGP_LANG_remote_query', "Remote query");
define('OGP_LANG_remote_query_info', "Gamitin ang malayuang server (ahente) para gumawa ng mga query sa mga server ng laro (GameQ at LGSL lang).");
define('OGP_LANG_check_expiry_by', "Suriin ang expiration gamit");
define('OGP_LANG_check_expiry_by_info', "Kung nakatakda sa once_logged_in, ang mga pagtatalaga ng server ng laro ng gumagamit ay awtomatikong tatanggalin kung lampas na sa petsa ng pag-expire. Kung nakatakda sa cron_job, kakailanganin mong gumawa ng cron task gamit ang cron module para tingnan ang expiration date. sa isang naka-configure na pagitan.");
define('OGP_LANG_once_logged_in', "Once Log In");
define('OGP_LANG_cron_job', "Cron Job");
define('OGP_LANG_theme_settings', "Mga Setting ng Tema");
define('OGP_LANG_theme', "Theme");
define('OGP_LANG_theme_info', "Ang napiling tema dito ang magiging default na tema para sa lahat ng user. Maaaring baguhin ng mga user ang kanilang tema mula sa kanilang pahina ng profile.");
define('OGP_LANG_welcome_title', "Welcome Title");
define('OGP_LANG_welcome_title_info', "Enable the title that is displayed at the top of the Dashboard.");
define('OGP_LANG_welcome_title_message', "Welcome Title Message");
define('OGP_LANG_welcome_title_message_info', "The title message that is displayed at the top of the Dashboard (HTML code allowed).");
define('OGP_LANG_logo_link', "Logos Link");
define('OGP_LANG_logo_link_info', "Ang hyperlink ng mga logo. <b style='font-size:10px; font-weight:normal;'>(Ang pag-iwang blangko ay magli-link dito sa Dashboard)</b>");
define('OGP_LANG_custom_tab', "Custom Tab");
define('OGP_LANG_custom_tab_info', "Nagdaragdag ng nako-customize na tab sa dulo ng menu. <b style='font-size:10px; font-weight:normal;'>(Ilapat at i-refresh ang pahinang ito para i-edit ang mga setting ng tab)</ b>");
define('OGP_LANG_custom_tab_name', "Custom Tab Name");
define('OGP_LANG_custom_tab_name_info', "The tabs display name.");
define('OGP_LANG_custom_tab_link', "Custom Tab Link");
define('OGP_LANG_custom_tab_link_info', "The tabs hyperlink.");
define('OGP_LANG_custom_tab_sub', "Custom Sub-Tab");
define('OGP_LANG_custom_tab_sub_info', "Nagdaragdag ng mga napapasadyang sub-tab kapag nag-hover sa 'Custom Tab'.");
define('OGP_LANG_custom_tab_sub_name', "Sub-Tab #1 Name");
define('OGP_LANG_custom_tab_sub_link', "Sub-Tab #1 Link");
define('OGP_LANG_custom_tab_sub_name2', "Sub-Tab #2 Name");
define('OGP_LANG_custom_tab_sub_link2', "Sub-Tab #2 Link");
define('OGP_LANG_custom_tab_sub_name3', "Sub-Tab #3 Name");
define('OGP_LANG_custom_tab_sub_link3', "Sub-Tab #3 Link");
define('OGP_LANG_custom_tab_sub_name4', "Sub-Tab #4 Name");
define('OGP_LANG_custom_tab_sub_link4', "Sub-Tab #4 Link");
define('OGP_LANG_custom_tab_target_blank', "Target ng mga cutom tab");
define('OGP_LANG_custom_tab_target_blank_info', "Itinakda ang lahat ng target na tab. <b style='font-size:10px; font-weight:normal;'>(Self_Page = Nagbubukas ng link sa parehong pahina. New_Page = Nagbubukas ng link sa bagong tab.) </b>");
define('OGP_LANG_bg_wrapper', "Background ng Wrapper");
define('OGP_LANG_bg_wrapper_info', "The wrapper background image. <b style='font-size:10px; font-weight:normal;'>(Available lang sa ilang tema.)</b>");
define('OGP_LANG_show_server_id_game_monitor', "Ipakita ang mga Server ID sa pahina ng Monitor ng Laro");
define('OGP_LANG_show_server_id_game_monitor_info', "Ipakita ang column ng server ID ng laro sa Game Monitor para sa pagtutugma ng mga file na nilikha ng Ahente sa aktwal na server ng laro.");
define('OGP_LANG_default_game_server_home_path_prefix', "Default na game server home directory prefix");
define('OGP_LANG_default_game_server_home_path_prefix_info', "Magpasok ng path prefix para sa kung saan mo gustong malikha ang mga home server ng laro bilang default. Maaari mong gamitin ang \"{USERNAME}\" sa path na papalitan ng OGP username na ginagawa ng server ng laro itinalaga sa. Maaari mong gamitin ang \"{GAMEKEY}\" sa path na papalitan ng isang friendly na lowercase na pangalan. Maaari mong gamitin ang \"{SKIPID}\" saanman sa path upang laktawan ang pagdaragdag ng home ID sa path. Halimbawa: /ogp/games/{USERNAME}/{GAMEKEY}{SKIPID} ay magiging /ogp/games/username/arkse/. Halimbawa 2: /ogp/games ay magiging /ogp/games/1 kung saan 1 ang mga server ng laro ID.");
define('OGP_LANG_use_authorized_hosts', "Limit API to Defined Authorized Hosts");
define('OGP_LANG_use_authorized_hosts_info', "Paganahin ang setting na ito upang payagan lamang ang mga tawag sa API mula sa mga paunang natukoy at naaprubahang IP address.&nbsp; Ang mga naaprubahang address ay maaaring itakda sa pahinang ito kapag na-enable na ang setting. ang user na gumagamit ng valid key ay magkakaroon ng access sa API mula sa anumang IP address.");
define('OGP_LANG_allow_setting_cpu_affinity', "Allow Setting CPU Core Assignment para sa Mga Server ng Laro");
define('OGP_LANG_allow_setting_cpu_affinity_info', "Kung pinagana, ang admin na gumagawa ng home game ay ipapakita sa CPU affinity (core assignment) na mga opsyon para sa game server.");
define('OGP_LANG_setup_api_authorized_hosts', "I-setup ang mga awtorisadong host ng API");
define('OGP_LANG_autohorized_hosts', "Authorized hosts");
define('OGP_LANG_add', "Add");
define('OGP_LANG_remove', "Remove");
define('OGP_LANG_default_trusted_hosts', "Default Trusted Hosts");
define('OGP_LANG_trusted_host_or_proxy_addresses_or_cidr', "Mga Pinagkakatiwalaang Host o Proxies (IPv4/IPv6 Address o CIDR)");
define('OGP_LANG_trusted_forwarded_ip_addresses_or_cidr', "Trusted Forwarded IPs (IPv4/IPv6 Addresses o CIDR)");
define('OGP_LANG_reset_game_server_order', "I-reset ang Pag-order ng Server ng Laro");
define('OGP_LANG_reset_game_server_order_info', "I-reset ang pag-order ng server ng laro pabalik sa default ng paggamit ng server ID");
define('OGP_LANG_regex_invalid_file_name_chars', "Invalid File Name Characters Regex");
define('OGP_LANG_regex_invalid_file_name_chars_info', "Baguhin ang regex pattern na ito kung gusto mong payagan ang ibang hanay ng mga character sa mga pangalan ng file.");
define('OGP_LANG_login_ban_time', "Failed Login Ban Time (Second)");
define('OGP_LANG_login_ban_time_info', "Oras sa mga segundo na ang isang IP address ay pinagbawalan sa pagtatangkang mag-login sa panel pagkatapos ng tinukoy na bilang ng mga nabigong pagtatangka sa pag-log in.");
?>