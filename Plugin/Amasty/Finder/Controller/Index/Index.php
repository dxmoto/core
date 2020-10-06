<?php
namespace DxMoto\Core\Plugin\Amasty\Finder\Controller\Index;
use Amasty\Finder\Controller\Index\Index as Sb;
use Magento\Framework\View\Result\Page as P;
# 2020-10-06
# `Amasty_Finder`: the results page shows the «Default Category» title on the browser's tab":
# https://github.com/dxmoto/site/issues/125
final class Index {
	/**
	 * 2020-10-06
	 * @see \Amasty\Finder\Controller\Index\Index::execute()
	 * @param Sb $sb
	 * @param P $p
	 * @return string|null
	 */
	function afterExecute(Sb $sb, P $p) {$p->getConfig()->getTitle()->set(__('Search Results')); return $p;}
}