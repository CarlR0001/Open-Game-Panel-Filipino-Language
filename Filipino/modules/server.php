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
 
define('OGP_LANG_add_new_remote_host', "Magdagdag ng bagong Remote Host");
define('OGP_LANG_configured_remote_hosts', "Configured Remote Host");
define('OGP_LANG_remote_host', "Remote Host");
define('OGP_LANG_remote_host_info', "Ang remote host ay dapat na isang pingable hostname!");
define('OGP_LANG_remote_host_port', "Remote Host Port");
define('OGP_LANG_remote_host_port_info', "Ang port na pinakikinggan ng OGP Agent sa remote host. Default: 12679.");
define('OGP_LANG_remote_host_name', "Remote Host Name");
define('OGP_LANG_ogp_user', "OGP Agent Username");
define('OGP_LANG_remote_host_name_info', "Ang remote host name ay ginagamit upang tulungan ang mga user na makilala ang kanilang mga server.");
define('OGP_LANG_add_remote_host', "Magdagdag ng Remote Host");
define('OGP_LANG_remote_encryption_key', "Remote Encryption Key");
define('OGP_LANG_remote_encryption_key_info', "Ang remote encryption key ay ginagamit upang i-encrypt ang data sa pagitan ng Panel at Ahente. Ang key na ito ay dapat na pareho sa magkabilang panig.");
define('OGP_LANG_server_name', "Server Name");
define('OGP_LANG_agent_ip_port', "Agent IP:Port");
define('OGP_LANG_agent_status', "Katayuan ng Ahente");
define('OGP_LANG_ips', "IPs");
define('OGP_LANG_add_more_ips', "Kung gusto mong magpasok ng higit pang mga IP, pindutin ang 'Set IPs' kapag puno na ang lahat ng field at may lalabas na bakanteng field.");
define('OGP_LANG_encryption_key_mismatch', "Ang susi ng pag-encrypt ay hindi tumutugma sa Ahente. Pakisuri muli ang iyong configuration ng Ahente.");
define('OGP_LANG_no_ip_for_remote_host', "Kailangan mong magdagdag ng kahit isang (1) IP address para sa bawat remote host.");
define('OGP_LANG_note_remote_host', "Ang remote host ay isang server kung saan tumatakbo ang OGP Agent. Ang bawat host ay maaaring magkaroon ng maramihang bilang ng mga IP address kung saan ang mga user ay maaaring magbigkis ng mga server.");
define('OGP_LANG_ip_administration', "Server & IP Administration :: Open Game Panel");
define('OGP_LANG_unknown_error', "Unknown error - status_chk returned");
define('OGP_LANG_remote_host_user_name', "UNIX user");
define('OGP_LANG_remote_host_user_name_info', "Username kung saan tumatakbo ang Ahente. Halimbawa: Jonhy");
define('OGP_LANG_remote_host_ftp_ip', "FTP IP");
define('OGP_LANG_remote_host_ftp_ip_info', "Ang FTP server <b>IP</b> para sa kasalukuyang Ahente.");
define('OGP_LANG_remote_host_ftp_port', "FTP Port");
define('OGP_LANG_remote_host_ftp_port_info', "Ang FTP server <b>port</b> para sa kasalukuyang Ahente.");
define('OGP_LANG_view_log', "View Log");
define('OGP_LANG_status', "Status");
define('OGP_LANG_stop_firewall', "Stop Firewall");
define('OGP_LANG_start_firewall', "Start Firewall");
define('OGP_LANG_seconds', "Secons");
define('OGP_LANG_reboot', "Remote Server Reboot");
define('OGP_LANG_restart', "I-restart ang Ahente");
define('OGP_LANG_confirm_reboot', "Sigurado ka bang gusto mong i-reboot nang malayuan ang buong pisikal na server na pinangalanang '%s'?");
define('OGP_LANG_confirm_restart', "Sigurado ka bang gusto mong i-restart ang Ahente na pinangalanang '%s'?");
define('OGP_LANG_restarting', "Restarting Agent... Please wait.");
define('OGP_LANG_restarted', "Agent successfully restarted.");
define('OGP_LANG_reboot_success', "Matagumpay na na-reboot ang server na may pangalang '%s'. Hindi mo maa-access ang server hangga't hindi ito matagumpay na na-boot.");
define('OGP_LANG_invalid_remote_host_id', "Invalid remote host id '%s' na ibinigay.");
define('OGP_LANG_remote_host_removed', "Matagumpay na tinanggal ang remote host na tinatawag na '%s'.");
define('OGP_LANG_editing_remote_server', "Pag-edit ng malayuang server na tinatawag na '%s'");
define('OGP_LANG_remote_server_settings_changed', "Matagumpay na nabago ang mga setting para sa remote server '%s'.");
define('OGP_LANG_save_settings', "I-save ang Mga Setting");
define('OGP_LANG_set_ips', "Itakda ang mga IP");
define('OGP_LANG_remote_ip', "Remote IP");
define('OGP_LANG_remote_ips_for', "Mga IP para sa Mga Server ng Laro na Gagamitin sa Agent Server '%s'");
define('OGP_LANG_ips_set_for_server', "matagumpay na naitakda ang mga IP para sa server na tinatawag na '%s'.");
define('OGP_LANG_could_not_remove_ip', "Hindi maalis ang mga lumang IP mula sa database.");
define('OGP_LANG_could_add_ip', "Maaaring magdagdag ng remote server IP sa database.");
define('OGP_LANG_areyousure_removeagent', "Sigurado ka bang gusto mong tanggalin ang tinawag na Ahente");
define('OGP_LANG_areyousure_removeagent2', "at lahat ng mga tahanan na nauugnay dito mula sa database ng ogp?");
define('OGP_LANG_error_while_remove', "Naganap ang error habang inaalis ang malayuang server.");
define('OGP_LANG_add_ip', "Add IP");
define('OGP_LANG_remove_ip', "Remove IP");
define('OGP_LANG_edit_ip', "I-edit ang IP");
define('OGP_LANG_wrote_changes', "Matagumpay na na-save ang mga pagbabago.");
define('OGP_LANG_there_are_servers_running_on_this_ip', "May mga server na tumatakbo sa IP address na ito.");
define('OGP_LANG_enter_ip_host', "Dapat kang magpasok ng IP para sa remote host.");
define('OGP_LANG_enter_valid_ip', "Dapat kang magpasok ng wastong port para sa remote host. Ang port value ay maaaring nasa pagitan ng 0 at 65535, gayunpaman ang rekomendasyon ay nasa pagitan ng 1024 at 65535.");
define('OGP_LANG_could_not_add_server', "Culd not add server");
define('OGP_LANG_to_db', "sa database.");
define('OGP_LANG_added_server', "Idinagdag na server");
define('OGP_LANG_with_port', "with port");
define('OGP_LANG_to_db_succesfully', "sa database ng matagumpay");
define('OGP_LANG_unable_discover', "Hindi kayang makita ang IPs sa");
define('OGP_LANG_set_ip_manually', "Kailangan mong itakda ang mga ito nang manu-mano.");
define('OGP_LANG_found_ips', "Nakitang IPs");
define('OGP_LANG_for_remote_server', "para sa remote server.");
define('OGP_LANG_failed_add_ip', "Nabigong magdagdag ng IP");
define('OGP_LANG_timeout', "Time Out");
define('OGP_LANG_timeout_info', "Ang limitasyon sa oras sa mga segundo upang makakuha ng tugon mula sa Ahente na ito.");
define('OGP_LANG_use_nat', "Use NAT");
define('OGP_LANG_use_nat_info', "Paganahin kung ang iyong remote server ay gumagamit ng NAT rules. Gamitin ang setting na ito kung ang iyong mga server ng laro ay tumatakbo sa panloob na pribadong LAN IP address upang gamitin ng panel ang iyong tunay na remote na IP address upang i-query ang mga server ng laro." );
define('OGP_LANG_arrange_ports', "Ayusin ang mga port");
define('OGP_LANG_assign_new_ports_range_for_ip', "Magtalaga ng bagong hanay ng mga port para sa IP %s");
define('OGP_LANG_assigned_port_ranges_for_ip', "Nakatalagang port ranges para sa IP %s");
define('OGP_LANG_assigned_ports_for_ip', "Mga nakatalagang port para sa IP %s");
define('OGP_LANG_unspecified_game_types', "Unspecified game types");
define('OGP_LANG_start_port', "Start port:");
define('OGP_LANG_end_port', "End port:");
define('OGP_LANG_port_increment', "Port increment:");
define('OGP_LANG_total_assignable_ports', "Total assignable ports:");
define('OGP_LANG_available_range_ports', "Available range ports:");
define('OGP_LANG_assign_range', "Assign range");
define('OGP_LANG_edit_range', "Edit range");
define('OGP_LANG_delete_range', "Delete range");
define('OGP_LANG_home_id', "Home ID");
define('OGP_LANG_home_path', "Home path");
define('OGP_LANG_game_type', "Uri ng laro");
define('OGP_LANG_port', "Port");
define('OGP_LANG_invalid_values', "Invalid values.");
define('OGP_LANG_ports_in_range_already_arranged', "Nakaayos na ang mga port sa range.");
define('OGP_LANG_ports_range_already_configured_for', "Naka-configure na ang hanay ng mga port para sa %s.");
define('OGP_LANG_ports_range_added_successfull_for', "Matagumpay na naidagdag ang hanay ng mga port para sa %s.");
define('OGP_LANG_ports_range_deleted_successfull', "Matagumpay na natanggal ang hanay ng mga port.");
define('OGP_LANG_ports_range_edited_successfull_for', "Matagumpay na na-edit ang hanay ng mga port para sa %s.");
define('OGP_LANG_editing_firewall_for_remote_server', "Pag-edit ng Firewall para sa malayuang server na pinangalanang '%s'");
define('OGP_LANG_default_allowed', "Pinapayagan base sa default");
define('OGP_LANG_allow_port_command', "Payagan ang port command");
define('OGP_LANG_deny_port_command', "Hindi payagan ang port command");
define('OGP_LANG_allow_ip_port_command', "Allow IP:port command");
define('OGP_LANG_deny_ip_port_command', "Deny IP:port command");
define('OGP_LANG_enable_firewall_command', "Buksan ang firewall command");
define('OGP_LANG_disable_firewall_command', "Patayin ang firewall command");
define('OGP_LANG_get_firewall_status_command', "Kumuha ng firewall status command");
define('OGP_LANG_reset_firewall_command', "I-reset ang firewall command");
define('OGP_LANG_firewall_status', "Status ng firewall");
define('OGP_LANG_save_firewall_settings', "I-save ang mga setting ng firewall");
define('OGP_LANG_reset_firewall', "I-reset ang Firewall");
define('OGP_LANG_firewall_settings', "Mga Setting ng Firewall");
define('OGP_LANG_display_public_ip', "Display Public IP");
define('OGP_LANG_ips_can_be_internal_external', "Ipasok ang mga magagamit na IP address.&nbsp; Maaaring gamitin ang mga pampublikong IP address at panloob na LAN IP address (para sa mga NAT setup.");
?>