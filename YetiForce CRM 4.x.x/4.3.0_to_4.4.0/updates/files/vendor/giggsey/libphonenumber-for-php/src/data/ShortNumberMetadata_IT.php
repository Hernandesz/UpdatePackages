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
	'NationalNumberPattern' => '[14]\\d{2,6}',
	'PossibleLength' => [
	  0 => 3,
	  1 => 4,
	  2 => 5,
	  3 => 6,
	  4 => 7,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'tollFree' => [
	'NationalNumberPattern' => '1(?:16\\d{3}|87)',
	'ExampleNumber' => '187',
	'PossibleLength' => [
	  0 => 3,
	  1 => 6,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'premiumRate' => [
	'NationalNumberPattern' => '(?:12|4(?:[478]\\d{1,3}|55))\\d{2}',
	'ExampleNumber' => '1254',
	'PossibleLength' => [
	  0 => 4,
	  1 => 5,
	  2 => 6,
	  3 => 7,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'emergency' => [
	'NationalNumberPattern' => '11[2358]',
	'ExampleNumber' => '112',
	'PossibleLength' => [
	  0 => 3,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'shortCode' => [
	'NationalNumberPattern' => '1(?:0\\d{2,3}|1(?:[2-5789]|6(?:000|111))|2\\d{2}|3[39]|4(?:82|9\\d{1,3})|5(?:00|1[58]|2[25]|3[03]|44|[59])|60|8[67]|9(?:[01]|2(?:[01]\\d{2}|[2-9])|4\\d|696))|4(?:2323|3(?:[01]|[45]\\d{2})\\d{2}|[478](?:[0-4]|[5-9]\\d{2})\\d{2}|5(?:045|5\\d{2}))',
	'ExampleNumber' => '114',
	'PossibleLength' => [
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'standardRate' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'carrierSpecific' => [
	'PossibleLength' => [
	  0 => -1,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'smsServices' => [
	'NationalNumberPattern' => '4[3-578]\\d{3,5}',
	'ExampleNumber' => '43000',
	'PossibleLength' => [
	  0 => 5,
	  1 => 6,
	  2 => 7,
	],
	'PossibleLengthLocalOnly' => [
	],
  ],
  'id' => 'IT',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => [
  ],
  'intlNumberFormat' => [
  ],
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
];