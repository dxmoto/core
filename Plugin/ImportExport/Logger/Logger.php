<?php
namespace DxMoto\Core\Plugin\ImportExport\Logger;
use Firebear\ImportExport\Logger\Logger as Sb;
# 2020-09-08 "Prevent `Firebear_ImportExport` from logging non-error messages": https://github.com/dxmoto/core/issues/2
final class Logger {
	/**
	 * 2020-09-08
	 * @see \Firebear\ImportExport\Logger\Logger::info()
	 */
	function aroundDebug() {}

	/**
	 * 2020-09-08
	 * @see \Firebear\ImportExport\Logger\Logger::info()
	 */
	function aroundInfo() {}

	/**
	 * 2020-09-08
	 * @see \Firebear\ImportExport\Logger\Logger::info()
	 */
	function aroundSuccess() {}
}