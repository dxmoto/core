<?php
namespace DxMoto\Core\Firebear\ImportExport\Model\Export;
/**
 * 2020-09-08
 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
 * "`Firebear_ImportExport`:
 * «Notice: Undefined offset: 459 in /vendor/firebear/importexport/Model/Export/Category.php on line 366»
 * on exporting categories": https://github.com/dxmoto/core/issues/3
 */
class Category extends \Firebear\ImportExport\Model\Export\Category {
	/**
	 * @param array $storesRows
	 * @return array
	 */
	protected function prepareRows($storesRows) {
		$r = [];
		foreach ($storesRows as $row) {
			foreach ($row as $item) {
				$r[]= $item;
			}
		}
		return $r;
	}
}