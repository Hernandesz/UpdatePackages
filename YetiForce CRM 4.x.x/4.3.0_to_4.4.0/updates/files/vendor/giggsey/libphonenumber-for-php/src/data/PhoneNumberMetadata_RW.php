<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */

return [
  'generalDesc' => [
	'NationalNumberPattern' => '(?:06|[27]\\d\\d|[89]00)\\d{6}',
	'PossibleLength' => [
	  0 => 8,
	  1 => 9,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'fixedLine' => [
	'NationalNumberPattern' => '2[258]\\d{7}|06\\d{6}',
	'ExampleNumber' => '250123456',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'mobile' => [
	'NationalNumberPattern' => '7[238]\\d{7}',
	'ExampleNumber' => '720123456',
	'PossibleLength' => [
	  0 => 9,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'tollFree' => [
	'NationalNumberPattern' => '800\\d{6}',
	'ExampleNumber' => '800123456',
	'PossibleLength' => [
	  0 => 9,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'premiumRate' => [
	'NationalNumberPattern' => '900\\d{6}',
	'ExampleNumber' => '900123456',
	'PossibleLength' => [
	  0 => 9,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'sharedCost' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'personalNumber' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'voip' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'pager' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'uan' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'voicemail' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'noInternationalDialling' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'id' => 'RW',
  'countryCode' => 250,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => [
	0 => [
	  'pattern' => '(2\\d{2})(\\d{3})(\\d{3})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '2',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	1 => [
	  'pattern' => '([7-9]\\d{2})(\\d{3})(\\d{3})',
	  'format' => '$1 $2 $3',
	  'leadingDigitsPatterns' => [
		0 => '[7-9]',
	  ],
	  'nationalPrefixFormattingRule' => '0$1',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
	2 => [
	  'pattern' => '(0\\d)(\\d{2})(\\d{2})(\\d{2})',
	  'format' => '$1 $2 $3 $4',
	  'leadingDigitsPatterns' => [
		0 => '0',
	  ],
	  'nationalPrefixFormattingRule' => '',
	  'domesticCarrierCodeFormattingRule' => '',
	  'nationalPrefixOptionalWhenFormatting' => false,
	],
  ],
  'intlNumberFormat' => [
  ],
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
];