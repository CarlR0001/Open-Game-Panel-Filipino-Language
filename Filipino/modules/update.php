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

include('litefm.php');
define('OGP_LANG_curl_needed', "Ang pahinang ito ay nangangailangan ng PHP curl module.");
define('OGP_LANG_no_access', "Kailangan mo ng mga karapatan ng admin para ma-access ang page na ito.");
define('OGP_LANG_dwl_update', "Nagda-download ng update...");
define('OGP_LANG_dwl_complete', "Kumpleto na ang pag-download");
define('OGP_LANG_install_update', "Ininstall ang update...");
define('OGP_LANG_update_complete', "Kumpleto na ang pag-update");
define('OGP_LANG_ignored_files', "%s binalewala ang (mga) file");
define('OGP_LANG_not_updated_files_blacklisted', "Hindi na-update/na-install na mga file (naka-blacklist):<br>%s");
define('OGP_LANG_latest_version', "Pinakabagong Bersyon");
define('OGP_LANG_panel_version', "Bersyon ng panel");
define('OGP_LANG_update_now', "Update Now");
define('OGP_LANG_the_panel_is_up_to_date', "Ang Panel ay napapanahon.");
define('OGP_LANG_files_overwritten', "%s na-overwrite ang mga file");
define('OGP_LANG_files_not_overwritten', "%s HINDI na-overwrite ang mga file dahil sa blacklist");
define('OGP_LANG_can_not_update_non_writable_files', "Hindi ma-update dahil ang mga sumusunod na file/folder ay hindi masusulat");
define('OGP_LANG_dwl_failed', "Hindi available ang download link: \"%s\".<br>Subukan muli mamaya.");
define('OGP_LANG_temp_folder_not_writable', "Hindi mailalagay ang pag-download, dahil walang pahintulot ang Apache sa pagsulat sa pansamantalang folder ng system (%s).");
define('OGP_LANG_base_dir_not_writable', "Ang Panel ay hindi maaaring mag-update, dahil ang Apache ay walang pahintulot na magsulat sa \"%s\" folder.");
define('OGP_LANG_new_files', "%s new files.");
define('OGP_LANG_updated_files', "Na-update na mga file:<br>%s");
define('OGP_LANG_select_mirror', "Piliin ang salamin");
define('OGP_LANG_view_changes', "Tingnan ang mga pagbabago");
define('OGP_LANG_updating_modules', "Updating Modules");
define('OGP_LANG_update_finished', "Updating Finished");
define('OGP_LANG_updated_module', "Na-update na module: '%s'.");
define('OGP_LANG_blacklist_files', "Blacklist files");
define('OGP_LANG_blacklist_files_info', "Lahat ng minarkahang file ay hindi maa-update.");
define('OGP_LANG_save_to_blacklist', "I-save sa blacklist");
define('OGP_LANG_no_new_updates', "Walang bagong update");
define('OGP_LANG_module_file_missing', "nawawala ang directory ng module.php file.");
define('OGP_LANG_query_failed', "Nabigong isagawa ang query");
define('OGP_LANG_query_failed_2', "sa database.");
define('OGP_LANG_missing_zip_extension', "Ang php-zip extension ay hindi na-load. Mangyaring, paganahin itong gamitin ang Update module.");
?>