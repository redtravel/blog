<?php
	/*
	http://blog.markplace.net
	
	Bad Behavior - LifeType Plugin
	Copyright (C) 2006 Mark Wu http://blog.markplace.net
	
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
	*/
	
	// This file is the entry point for Bad Behavior in LifeType.

	if (!defined('PLOG_CLASS_PATH')) die('No cheating!');
	
	// Timer start
	$bb2_mtime = explode(" ", microtime());
	$bb2_timer_start = $bb2_mtime[1] + $bb2_mtime[0];

	define('BB2_CWD', PLOG_CLASS_PATH . "plugins/badbehavior/" );
	define('BB2_EMERGENCY_EMAIL', "admin@yourblog.com" );
	define('BB2_DEFAULT_LOG_TABLE', "bad_behavior" );

	// Bad Behavior callback functions.
	
	// Return current time in the format preferred by your database.
	function bb2_db_date() {
		return gmdate('Y-m-d H:i:s');
	}
	
	// Return affected rows from most recent query.
	function bb2_db_affected_rows() {
		lt_include( PLOG_CLASS_PATH."class/database/db.class.php" );
		$db =& Db::getDb();
		
		return $db->Affected_Rows();
	}
	
	// Escape a string for database usage
	function bb2_db_escape($string) {
	    lt_include( PLOG_CLASS_PATH."class/database/db.class.php" );    

		return Db::qstr($string);
	}
	
	// Return the number of rows in a particular query.
	function bb2_db_num_rows($result) {
		return $result->RecordCount();
	}

	// Run a query and return the results, if any.
	// Should return FALSE if an error occurred.
	function bb2_db_query($query) {
	    lt_include( PLOG_CLASS_PATH."class/database/db.class.php" );    
		$db =& Db::getDb();

	    $result = $db->Execute( $query );
	
		if (!$result)
			return FALSE;

		return $result;
	}

	// Return all rows in a particular query.
	// Should contain an array of all rows generated by calling mysql_fetch_assoc()
	// or equivalent and appending the result of each call to an array.
	function bb2_db_rows($result) {
		$rows = array();
		while( $row = $result->FetchRow()) {
			$rows[] = $row;
		}

		return $rows;
	}

    // Insert a new record
    function bb2_insert($settings, $package, $key)
    {
        if (!$settings['logging']) return "";
        $ip = bb2_db_escape($package['ip']);
        $date = bb2_db_date();
        $request_method = bb2_db_escape($package['request_method']);
        $request_uri = bb2_db_escape($package['request_uri']);
        $server_protocol = bb2_db_escape($package['server_protocol']);
        $user_agent = bb2_db_escape($package['user_agent']);
        $headers = "$request_method $request_uri $server_protocol\n";
        foreach ($package['headers'] as $h => $v) {
            $headers .= bb2_db_escape("$h: $v\n");
        }
        $request_entity = "";
        if (!strcasecmp($request_method, "POST")) {
            foreach ($package['request_entity'] as $h => $v) {
                $request_entity .= bb2_db_escape("$h: $v\n");
            }
        }
        return "INSERT INTO `" . bb2_db_escape($settings['log_table']) . "`
		(`ip`, `date`, `request_method`, `request_uri`, `server_protocol`, `http_headers`, `user_agent`, `request_entity`, `key`) VALUES
		('$ip', '$date', '$request_method', '$request_uri', '$server_protocol', '$headers', '$user_agent', '$request_entity', '$key')";
    }

	// Return emergency contact email address.
	function bb2_email() {
		return BB2_EMERGENCY_EMAIL;
	}

	// retrieve settings from lifetype config
	function bb2_read_settings() {
	    lt_include( PLOG_CLASS_PATH."class/database/db.class.php" );
	    lt_include( PLOG_CLASS_PATH."class/config/config.class.php" );    
		$config =& Config::getConfig();
		$prefix = Db::getPrefix();
		$logTable = $config->getValue( 'bb2_log_table', BB2_DEFAULT_LOG_TABLE );
		$displayStats = $config->getValue( 'bb2_display_stats', true );
		$strict = $config->getValue( 'bb2_strict', false );
		$verbose = $config->getValue( 'bb2_verbose', false );
		$isInstalled = $config->getValue( 'bb2_installed', false );
		$logging = $config->getValue( 'bb2_logging', true );
		$httpbl_key = $config->getValue( 'bb2_httpbl_key', '' );
		$httpbl_threat = $config->getValue( 'bb2_httpbl_threat', '25' );
		$httpbl_maxage = $config->getValue( 'bb2_httpbl_maxage', '30' );
		$offsite_forms = $config->getValue( 'bb2_offsite_forms', false );
		$reverse_proxy = $config->getValue( 'bb2_reverse_proxy', false );
		$reverse_proxy_header = $config->getValue( 'bb2_reverse_proxy_header', 'X-Forwarded-For' );
		
		return array('log_table' => $prefix . $logTable, 
					 'display_stats' => $displayStats,
					 'strict' => $strict,
					 'verbose' => $verbose,
					 'logging' => $logging,
					 'httpbl_key' => $httpbl_key,
					 'httpbl_threat' => $httpbl_threat,
					 'httpbl_maxage' => $httpbl_maxage,
                     'offsite_forms' => $offsite_forms,
                     'reverse_proxy' => $reverse_proxy,
                     'reverse_proxy_header' => $reverse_proxy_header,
					 'is_installed' => $isInstalled );
	}
	
	// write settings to lifetype config
	function bb2_write_settings($settings) {
	    lt_include( PLOG_CLASS_PATH."class/config/config.class.php" );
		$config =& Config::getConfig();
		$config->setValue( 'bb2_log_table', BB2_DEFAULT_LOG_TABLE );
		$config->setValue( 'bb2_display_stats', $settings['display_stats'] );
		$config->setValue( 'bb2_strict', $settings['strict'] );
		$config->setValue( 'bb2_verbose', $settings['verbose'] );
		$config->setValue( 'bb2_httpbl_key', $settings['httpbl_key'] );
		$config->setValue( 'bb2_httpbl_threat', $settings['httpbl_threat'] );
		$config->setValue( 'bb2_httpbl_maxage', $settings['httpbl_maxage'] );
		$config->setValue( 'bb2_offsite_forms', $settings['offsite_forms'] );
		$config->setValue( 'bb2_reverse_proxy', $settings['reverse_proxy'] );
		$config->setValue( 'bb2_reverse_proxy_header', $settings['reverse_proxy_header'] );
		$config->setValue( 'bb2_installed', $settings['is_installed'] );
		$config->save();
	}
		
	// installation
	function bb2_install() {
		$settings = bb2_read_settings();
        if( $settings['is_installed'] == false && $settings['logging'] )
		{
			#bb2_db_query(bb2_table_structure($settings['log_table']));
			bb2_db_query($settings['log_table']);
			$settings['is_installed'] = true;
			bb2_write_settings( $settings );
		}
	}
	
	// Return the top-level relative path of wherever we are (for cookies)
	function bb2_relative_path() {
	    lt_include( PLOG_CLASS_PATH."class/config/config.class.php" );
		$config =& Config::getConfig();
		
		$url = parse_url( $config->getValue( 'base_url' ) );
		if( empty($url['path']) )
			return '/';
		else {
			if( substr( $url['path'], -1, 1 ) == '/' )
				return $url['path'];
			else
				return $url['path'] . '/';
		}
	}
	
	// Load Bad Behavior Core
	lt_include(BB2_CWD . "bad-behavior/core.inc.php");
	bb2_install();
	$settings = bb2_read_settings();
	bb2_start($settings);

	// Time Stop
	$bb2_mtime = explode(" ", microtime());
	$bb2_timer_stop = $bb2_mtime[1] + $bb2_mtime[0];
	$bb2_timer_total = $bb2_timer_stop - $bb2_timer_start;
?>
