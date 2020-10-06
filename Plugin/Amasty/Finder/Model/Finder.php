<?php
namespace DxMoto\Core\Plugin\Amasty\Finder\Model;
use Amasty\Finder\Model\Finder as Sb;
# 2020-10-06
# `Amasty_Finder` 1.11.4: the filtering block is shown at the bottom instead of the top on the results page":
# https://github.com/dxmoto/site/issues/124
final class Finder {
	/**
	 * 2020-10-06
	 * @see \Amasty\Finder\Model\Finder::getPosition()
	 * @param Sb $sb
	 * @param string|null $r
	 * @return string|null
	 */
	function afterGetPosition(Sb $sb, $r) {return $r ?: 'content';}
}