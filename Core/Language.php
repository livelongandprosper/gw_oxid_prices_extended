<?php
namespace gw\gw_oxid_prices_extended\Core;

/**
 * @see OxidEsales\Eshop\Core\Language
 */
class Language extends Language_parent {

	/**
	 * Returns formatted number, according to active currency formatting standards.
	 *
	 * @param float  $dValue  Plain price
	 * @param object $oActCur Object of active currency
	 *
	 * @return string
	 */
	public function formatCurrency($dValue, $oActCur = null, $no_decimal_if_zero = true)
	{
		if(!$no_decimal_if_zero || $dValue == 0.0) {
			return parent::formatCurrency($dValue, $oActCur);
		} else {
			if (!$oActCur) {
				$oActCur = $this->getConfig()->getActShopCurrencyObject();
			}
			$sValue = \OxidEsales\Eshop\Core\Registry::getUtils()->fRound($dValue, $oActCur);

			$decimal = $oActCur->decimal;
			if((double)$sValue - doubleval(intval($sValue)) == 0.0) {
				$decimal = 0;
			}

			return number_format((double) $sValue, $decimal, $oActCur->dec, $oActCur->thousand);
		}
	}
}
?>