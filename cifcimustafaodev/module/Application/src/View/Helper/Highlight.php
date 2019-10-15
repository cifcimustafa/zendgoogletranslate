<?php
	

	namespace Application\View\Helper;

	/**
	 * Class Highlight
	 * @package Application\View\Helper
	 */
	class Highlight
	{

		/**
		 * @param null $search
		 * @param null $sentence
		 *
		 * @return string|string[]|null
		 */
		public static function make($search = null, $sentence = null)
		{
			$wordsToHighlight = explode(" ", $search);

			return preg_replace('/' . implode('|', $wordsToHighlight) . '/i', '<strong>$0</strong>', $sentence);
		}
	}