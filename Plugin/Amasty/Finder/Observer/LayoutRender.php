<?php
namespace DxMoto\Core\Plugin\Amasty\Finder\Observer;
use Amasty\Finder\Observer\LayoutRender as Sb;
use Magento\Framework\Event\Observer as O;
/**
 * 2020-09-12
 * 1) "`Ess_M2ePro`: «Broken reference: the 'amasty.finder.5' element cannot be added as child to 'content',
 * because the latter doesn't exist»": https://github.com/dxmoto/core/issues/7
 * 2) The problem action is `m2epro_cron_index`:
 * curl --insecure "https://localhost.com:2186/M2ePro/cron?auth_key=<…>&connection_id=$RANDOM"
 */
final class LayoutRender {
	/**
	 * 2020-09-12
	 * @see \Amasty\Finder\Observer\LayoutRender::execute()
	 * @param Sb $sb
	 * @param \Closure $f
	 * @param O $o
	 * @return O
	 */
	function aroundExecute(Sb $sb, \Closure $f, O $o) {return df_action_prefix('m2epro') ? $o : $f($o);}
}