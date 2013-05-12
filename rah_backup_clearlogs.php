<?php

/**
 * Clear logs module for rah_backup.
 *
 * Empties visitor logs before taking a backup with rah_backup.
 * Note that the module will empty the actual table, not just
 * records from backup files. Visitor logs will be permanently lost.
 *
 * @author  Jukka Svahn
 * @license GNU GPLv2
 * @link    https://github.com/gocom/rah_backup_clearlogs
 *
 * Copyright (C) 2013 Jukka Svahn http://rahforum.biz
 * Licensed under GNU General Public License version 2
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

	register_callback('rah_backup__clearlogs', 'rah_backup.create');

/**
 * Empties txp_log table.
 */

	function rah_backup__clearlogs() {
		@safe_query('TRUNCATE TABLE '.safe_pfx('txp_log'));
	}
?>