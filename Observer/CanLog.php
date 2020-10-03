<?php
namespace DxMoto\Core\Observer;
use Df\Framework\Logger\Handler as E;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
/**
 * 2020-10-04
 * Event: `df_can_log`
 * @see \Df\Framework\Logger\Handler\System::handle()
 * 		df_dispatch('df_can_log', ['message' => $d, 'result' => ($o = new O)]); /** @var O $o
 * 		$r = $o[self::SKIP] || parent::handle($d);
 * https://github.com/mage2pro/core/blob/6.8.1/Framework/Logger/Handler/System.php#L44-L45
 */
final class CanLog implements ObserverInterface {
	/**
	 * 2020-10-04
	 * @override
	 * @see ObserverInterface::execute()
	 * @used-by \Magento\Framework\Event\Invoker\InvokerDefault::_callObserverMethod()
	 * @param Observer $ob
	 */
	function execute(Observer $ob) {
		$m = $ob[E::P_MESSAGE]; /** @var array(string => mixed) $m */
		$ob[E::P_RESULT][E::V_SKIP] = df_contains(dfa($m, 'message'), [
			# 2020-10-04
			# `KJ_MageMail`: «Not going to ping API because order confirmation email isn't enabled»
			# https://github.com/dxmoto/site/issues/115
			# https://github.com/dxmoto/site/blob/2020-10-04/app/code/KJ/MageMail/Model/Cron.php#L110-L113
			"Not going to ping API because order confirmation email isn't enabled"
		]);
	}
}