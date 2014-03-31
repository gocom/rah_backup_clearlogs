<?php

/*
 * rah_backup - Clear logs module for rah_backup
 * https://github.com/gocom/rah_backup_clearlogs
 *
 * Copyright (C) 2014 Jukka Svahn
 *
 * This file is part of rah_backup_clearlogs.
 *
 * rah_backup_clearlogs is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, version 2.
 *
 * rah_backup_clearlogs is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with rah_backup_clearlogs. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * The plugin class.
 *
 * @internal
 */

class Rah_Backup_ClearLogs
{
	/**
	 * Constructor.
	 */

	public function __construct()
	{
		register_callback(array($this, 'clearLogs'), 'rah_backup.create');
	}

	/**
	 * Empties txp_log table.
	 */

	public function clearLogs()
	{
		@safe_query('truncate table '.safe_pfx('txp_log'));
	}
}

new Rah_Backup_ClearLogs();
