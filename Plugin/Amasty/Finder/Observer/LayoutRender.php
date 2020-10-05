<?php
namespace DxMoto\Core\Plugin\Amasty\Finder\Observer;
use Amasty\Finder\Observer\LayoutRender as Sb;
use Magento\Framework\Event\Observer as O;
/**
 * 2020-09-12
 * 1) "`Amasty_Finder`: «Broken reference: the 'amasty.finder.5' element cannot be added as child to 'content',
 * because the latter doesn't exist»": https://github.com/dxmoto/core/issues/7
 * 2) The problem action is `m2epro_cron_index`:
 * curl --insecure "https://localhost.com:2186/M2ePro/cron?auth_key=<…>&connection_id=$RANDOM"
 * 2020-09-14
 * The issue is occured not only with Ess_M2ePro HTTP requests, but with other HTTP requests too, e.g. /robots.txt:
 * https://github.com/dxmoto/core/issues/7#issuecomment-691905513
 */
final class LayoutRender {
	/**
	 * 2020-09-12
	 * 2020-10-04
	 * The 'amfinder' prefix fixes the issue: "`Amasty_Finder` does not filter results properly".
	 * https://github.com/dxmoto/site/issues/118
	 * @see \Amasty\Finder\Observer\LayoutRender::execute()
	 * @param Sb $sb
	 * @param \Closure $f
	 * @param O $o
	 * @return O
	 */
	function aroundExecute(Sb $sb, \Closure $f, O $o) {return df_action_prefix(['amfinder', 'catalog']) ? $f($o) : $o;}
}