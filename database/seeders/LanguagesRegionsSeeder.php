<?php

namespace Database\Seeders;

use App\Models\LanguagesRegions;
use Illuminate\Database\Seeder;

class LanguagesRegionsSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
    public function run()
    {
        $countries = [
            [
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'native' => 'دولة الإمارات العربية المتحدة',
                'currency' => 'AED',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'AF',
                'name' => 'Afghanistan',
                'native' => 'افغانستان',
                'currency' => 'AFN',
                'languages' => 'Pashto' 
            ],
            [
                'code' => 'AG',
                'name' => 'Antigua and Barbuda',
                'native' => 'Antigua and Barbuda',
                'currency' => 'XCD',
                'languages' => 'English' 
            ],
            [
                'code' => 'AI',
                'name' => 'Anguilla',
                'native' => 'Anguilla',
                'currency' => 'XCD',
                'languages' => 'English' 
            ],
            [
                'code' => 'AL',
                'name' => 'Albania',
                'native' => 'Shqipëria',
                'currency' => 'ALL',
                'languages' => 'Albanian' 
            ],
            [
                'code' => 'AM',
                'name' => 'Armenia',
                'native' => 'Հայաստան',
                'currency' => 'AMD',
                'languages' => 'Armenian' 
            ],
            [
                'code' => 'AO',
                'name' => 'Angola',
                'native' => 'Angola',
                'currency' => 'AOA',
                'languages' => 'Portuguese' 
            ],
            [
                'code' => 'Arabic',
                'name' => 'Argentina',
                'native' => 'Argentina',
                'currency' => 'ARS',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'AS',
                'name' => 'American Samoa',
                'native' => 'American Samoa',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'AT',
                'name' => 'Austria',
                'native' => 'Österreich',
                'currency' => 'EUR',
                'languages' => 'German' 
            ],
            [
                'code' => 'AU',
                'name' => 'Australia',
                'native' => 'Australia',
                'currency' => 'AUD',
                'languages' => 'English' 
            ],
            [
                'code' => 'AW',
                'name' => 'Aruba',
                'native' => 'Aruba',
                'currency' => 'AWG',
                'languages' => 'Dutch' 
            ],
            [
                'code' => 'BB',
                'name' => 'Barbados',
                'native' => 'Barbados',
                'currency' => 'BBD',
                'languages' => 'English' 
            ],
            [
                'code' => 'BE',
                'name' => 'Belgium',
                'native' => 'België',
                'currency' => 'EUR',
                'languages' => 'Dutch' 
            ],
            [
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'native' => 'Burkina Faso',
                'currency' => 'XOF',
                'languages' => 'French' 
            ],
            [
                'code' => 'BH',
                'name' => 'Bahrain',
                'native' => 'البحرين',
                'currency' => 'BHD',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'BI',
                'name' => 'Burundi',
                'native' => 'Burundi',
                'currency' => 'BIF',
                'languages' => 'French' 
            ],
            [
                'code' => 'BJ',
                'name' => 'Benin',
                'native' => 'Bénin',
                'currency' => 'XOF',
                'languages' => 'French' 
            ],
            [
                'code' => 'BL',
                'name' => 'Saint Barthélemy',
                'native' => 'Saint-Barthélemy',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'BM',
                'name' => 'Bermuda',
                'native' => 'Bermuda',
                'currency' => 'BMD',
                'languages' => 'English' 
            ],
            [
                'code' => 'BO',
                'name' => 'Bolivia',
                'native' => 'Bolivia',
                'currency' => 'BOB',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'BQ',
                'name' => 'Bonaire',
                'native' => 'Bonaire',
                'currency' => 'USD',
                'languages' => 'Dutch' 
            ],
            [
                'code' => 'BR',
                'name' => 'Brazil',
                'native' => 'Brasil',
                'currency' => 'BRL',
                'languages' => 'Portuguese',
                'suggested' => true
            ],
            [
                'code' => 'BS',
                'name' => 'Bahamas',
                'native' => 'Bahamas',
                'currency' => 'BSD',
                'languages' => 'English' 
            ],
            [
                'code' => 'BW',
                'name' => 'Botswana',
                'native' => 'Botswana',
                'currency' => 'BWP',
                'languages' => 'English' 
            ],
            [
                'code' => 'BZ',
                'name' => 'Belize',
                'native' => 'Belize',
                'currency' => 'BZD',
                'languages' => 'English' 
            ],
            [
                'code' => 'CA',
                'name' => 'Canada',
                'native' => 'Canada',
                'currency' => 'CAD',
                'languages' => 'English' 
            ],
            [
                'code' => 'CC',
                'name' => 'Cocos [Keeling] Islands',
                'native' => 'Cocos (Keeling) Islands',
                'currency' => 'AUD',
                'languages' => 'English' 
            ],
            [
                'code' => 'CD',
                'name' => 'Democratic Republic of the Congo',
                'native' => 'République démocratique du Congo',
                'currency' => 'CDF',
                'languages' => 'French' 
            ],
            [
                'code' => 'CF',
                'name' => 'Central African Republic',
                'native' => 'Ködörösêse tî Bêafrîka',
                'currency' => 'XAF',
                'languages' => 'French' 
            ],
            [
                'code' => 'CG',
                'name' => 'Republic of the Congo',
                'native' => 'République du Congo',
                'currency' => 'XAF',
                'languages' => 'French' 
            ],
            [
                'code' => 'CH',
                'name' => 'Switzerland',
                'native' => 'Schweiz',
                'currency' => 'CHE',
                'languages' => 'German' 
            ],
            [
                'code' => 'CI',
                'name' => 'Ivory Coast',
                'native' => 'Côte d\'Ivoire',
                'currency' => 'XOF',
                'languages' => 'French' 
            ],
            [
                'code' => 'CK',
                'name' => 'Cook Islands',
                'native' => 'Cook Islands',
                'currency' => 'NZD',
                'languages' => 'English' 
            ],
            [
                'code' => 'CL',
                'name' => 'Chile',
                'native' => 'Chile',
                'currency' => 'CLF',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'CM',
                'name' => 'Cameroon',
                'native' => 'Cameroon',
                'currency' => 'XAF',
                'languages' => 'English' 
            ],
            [
                'code' => 'CN',
                'name' => 'China',
                'native' => '中国',
                'currency' => 'CNY',
                'languages' => 'Chinese',
                'suggested' => true
            ],
            [
                'code' => 'CO',
                'name' => 'Colombia',
                'native' => 'Colombia',
                'currency' => 'COP',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'CR',
                'name' => 'Costa Rica',
                'native' => 'Costa Rica',
                'currency' => 'CRC',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'CU',
                'name' => 'Cuba',
                'native' => 'Cuba',
                'currency' => 'CUC',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'CV',
                'name' => 'Cape Verde',
                'native' => 'Cabo Verde',
                'currency' => 'CVE',
                'languages' => 'Portuguese' 
            ],
            [
                'code' => 'CW',
                'name' => 'Curacao',
                'native' => 'Curaçao',
                'currency' => 'ANG',
                'languages' => 'Dutch' 
            ],
            [
                'code' => 'CX',
                'name' => 'Christmas Island',
                'native' => 'Christmas Island',
                'currency' => 'AUD',
                'languages' => 'English' 
            ],
            [
                'code' => 'CY',
                'name' => 'Cyprus',
                'native' => 'Κύπρος',
                'currency' => 'EUR',
                'languages' => 'Greek' 
            ],
            [
                'code' => 'DE',
                'name' => 'Germany',
                'native' => 'Deutschland',
                'currency' => 'EUR',
                'languages' => 'German' 
            ],
            [
                'code' => 'DJ',
                'name' => 'Djibouti',
                'native' => 'Djibouti',
                'currency' => 'DJF',
                'languages' => 'French' 
            ],
            [
                'code' => 'DM',
                'name' => 'Dominica',
                'native' => 'Dominica',
                'currency' => 'XCD',
                'languages' => 'English' 
            ],
            [
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'native' => 'República Dominicana',
                'currency' => 'DOP',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'DZ',
                'name' => 'Algeria',
                'native' => 'الجزائر',
                'currency' => 'DZD',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'EC',
                'name' => 'Ecuador',
                'native' => 'Ecuador',
                'currency' => 'USD',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'EG',
                'name' => 'Egypt',
                'native' => 'مصر',
                'currency' => 'EGP',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'EH',
                'name' => 'Western Sahara',
                'native' => 'الصحراء الغربية',
                'currency' => 'MAD',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'Spanish',
                'name' => 'Spain',
                'native' => 'España',
                'currency' => 'EUR',
                'languages' => 'Spanish',
                'suggested' => true
            ],
            [
                'code' => 'FK',
                'name' => 'Falkland Islands',
                'native' => 'Falkland Islands',
                'currency' => 'FKP',
                'languages' => 'English' 
            ],
            [
                'code' => 'FM',
                'name' => 'Micronesia',
                'native' => 'Micronesia',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'FR',
                'name' => 'France',
                'native' => 'France',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'GA',
                'name' => 'Gabon',
                'native' => 'Gabon',
                'currency' => 'XAF',
                'languages' => 'French' 
            ],
            [
                'code' => 'GB',
                'name' => 'United Kingdom',
                'native' => 'United Kingdom',
                'currency' => 'GBP',
                'languages' => 'English' 
            ],
            [
                'code' => 'GD',
                'name' => 'Grenada',
                'native' => 'Grenada',
                'currency' => 'XCD',
                'languages' => 'English' 
            ],
            [
                'code' => 'GF',
                'name' => 'French Guiana',
                'native' => 'Guyane française',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'GH',
                'name' => 'Ghana',
                'native' => 'Ghana',
                'currency' => 'GHS',
                'languages' => 'English' 
            ],
            [
                'code' => 'GI',
                'name' => 'Gibraltar',
                'native' => 'Gibraltar',
                'currency' => 'GIP',
                'languages' => 'English' 
            ],
            [
                'code' => 'GM',
                'name' => 'Gambia',
                'native' => 'Gambia',
                'currency' => 'GMD',
                'languages' => 'English' 
            ],
            [
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'native' => 'Guadeloupe',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'GR',
                'name' => 'Greece',
                'native' => 'Ελλάδα',
                'currency' => 'EUR',
                'languages' => 'Greek' 
            ],
            [
                'code' => 'GS',
                'name' => 'South Georgia and the South Sandwich Islands',
                'native' => 'South Georgia',
                'currency' => 'GBP',
                'languages' => 'English' 
            ],
            [
                'code' => 'GT',
                'name' => 'Guatemala',
                'native' => 'Guatemala',
                'currency' => 'GTQ',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'native' => 'Guiné-Bissau',
                'currency' => 'XOF',
                'languages' => 'Portuguese' 
            ],
            [
                'code' => 'GY',
                'name' => 'Guyana',
                'native' => 'Guyana',
                'currency' => 'GYD',
                'languages' => 'English' 
            ],
            [
                'code' => 'HK',
                'name' => 'Hong Kong',
                'native' => '香港',
                'currency' => 'HKD',
                'languages' => 'Chinese' 
            ],
            [
                'code' => 'HM',
                'name' => 'Heard Island and McDonald Islands',
                'native' => 'Heard Island and McDonald Islands',
                'currency' => 'AUD',
                'languages' => 'English' 
            ],
            [
                'code' => 'HN',
                'name' => 'Honduras',
                'native' => 'Honduras',
                'currency' => 'HNL',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'HT',
                'name' => 'Haiti',
                'native' => 'Haïti',
                'currency' => 'USD',
                'languages' => 'French' 
            ],
            [
                'code' => 'IM',
                'name' => 'Isle of Man',
                'native' => 'Isle of Man',
                'currency' => 'GBP',
                'languages' => 'English' 
            ],
            [
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'native' => 'British Indian Ocean Territory',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'IQ',
                'name' => 'Iraq',
                'native' => 'العراق',
                'currency' => 'IQD',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'IT',
                'name' => 'Italy',
                'native' => 'Italia',
                'currency' => 'EUR',
                'languages' => 'Italian' 
            ],
            [
                'code' => 'JE',
                'name' => 'Jersey',
                'native' => 'Jersey',
                'currency' => 'GBP',
                'languages' => 'English' 
            ],
            [
                'code' => 'JM',
                'name' => 'Jamaica',
                'native' => 'Jamaica',
                'currency' => 'JMD',
                'languages' => 'English' 
            ],
            [
                'code' => 'JO',
                'name' => 'Jordan',
                'native' => 'الأردن',
                'currency' => 'JOD',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'JP',
                'name' => 'Japan',
                'native' => '日本',
                'currency' => 'JPY',
                'languages' => 'Japanese' 
            ],
            [
                'code' => 'KI',
                'name' => 'Kiribati',
                'native' => 'Kiribati',
                'currency' => 'AUD',
                'languages' => 'English' 
            ],
            [
                'code' => 'KN',
                'name' => 'Saint Kitts and Nevis',
                'native' => 'Saint Kitts and Nevis',
                'currency' => 'XCD',
                'languages' => 'English' 
            ],
            [
                'code' => 'KW',
                'name' => 'Kuwait',
                'native' => 'الكويت',
                'currency' => 'KWD',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'native' => 'Cayman Islands',
                'currency' => 'KYD',
                'languages' => 'English' 
            ],
            [
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'native' => 'Saint Lucia',
                'currency' => 'XCD',
                'languages' => 'English' 
            ],
            [
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'native' => 'Liechtenstein',
                'currency' => 'CHF',
                'languages' => 'German' 
            ],
            [
                'code' => 'LR',
                'name' => 'Liberia',
                'native' => 'Liberia',
                'currency' => 'LRD',
                'languages' => 'English' 
            ],
            [
                'code' => 'LY',
                'name' => 'Libya',
                'native' => 'ليبيا',
                'currency' => 'LYD',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'MA',
                'name' => 'Morocco',
                'native' => 'المغرب',
                'currency' => 'MAD',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'MC',
                'name' => 'Monaco',
                'native' => 'Monaco',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'native' => 'M̧ajeļ',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'ML',
                'name' => 'Mali',
                'native' => 'Mali',
                'currency' => 'XOF',
                'languages' => 'French' 
            ],
            [
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'native' => 'Northern Mariana Islands',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'MQ',
                'name' => 'Martinique',
                'native' => 'Martinique',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'MR',
                'name' => 'Mauritania',
                'native' => 'موريتانيا',
                'currency' => 'MRU',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'MS',
                'name' => 'Montserrat',
                'native' => 'Montserrat',
                'currency' => 'XCD',
                'languages' => 'English' 
            ],
            [
                'code' => 'MU',
                'name' => 'Mauritius',
                'native' => 'Maurice',
                'currency' => 'MUR',
                'languages' => 'English' 
            ],
            [
                'code' => 'MX',
                'name' => 'Mexico',
                'native' => 'México',
                'currency' => 'MXN',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'MZ',
                'name' => 'Mozambique',
                'native' => 'Moçambique',
                'currency' => 'MZN',
                'languages' => 'Portuguese' 
            ],
            [
                'code' => 'NC',
                'name' => 'New Caledonia',
                'native' => 'Nouvelle-Calédonie',
                'currency' => 'XPF',
                'languages' => 'French' 
            ],
            [
                'code' => 'NE',
                'name' => 'Niger',
                'native' => 'Niger',
                'currency' => 'XOF',
                'languages' => 'French' 
            ],
            [
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'native' => 'Norfolk Island',
                'currency' => 'AUD',
                'languages' => 'English' 
            ],
            [
                'code' => 'NG',
                'name' => 'Nigeria',
                'native' => 'Nigeria',
                'currency' => 'NGN',
                'languages' => 'English' 
            ],
            [
                'code' => 'NI',
                'name' => 'Nicaragua',
                'native' => 'Nicaragua',
                'currency' => 'NIO',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'NL',
                'name' => 'Netherlands',
                'native' => 'Nederland',
                'currency' => 'EUR',
                'languages' => 'Dutch' 
            ],
            [
                'code' => 'NR',
                'name' => 'Nauru',
                'native' => 'Nauru',
                'currency' => 'AUD',
                'languages' => 'English' 
            ],
            [
                'code' => 'NU',
                'name' => 'Niue',
                'native' => 'Niuē',
                'currency' => 'NZD',
                'languages' => 'English' 
            ],
            [
                'code' => 'NZ',
                'name' => 'New Zealand',
                'native' => 'New Zealand',
                'currency' => 'NZD',
                'languages' => 'English' 
            ],
            [
                'code' => 'OM',
                'name' => 'Oman',
                'native' => 'عمان',
                'currency' => 'OMR',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'PA',
                'name' => 'Panama',
                'native' => 'Panamá',
                'currency' => 'USD',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'PE',
                'name' => 'Peru',
                'native' => 'Perú',
                'currency' => 'PEN',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'PF',
                'name' => 'French Polynesia',
                'native' => 'Polynésie française',
                'currency' => 'XPF',
                'languages' => 'French' 
            ],
            [
                'code' => 'PG',
                'name' => 'Papua New Guinea',
                'native' => 'Papua Niugini',
                'currency' => 'PGK',
                'languages' => 'English' 
            ],
            [
                'code' => 'PH',
                'name' => 'Philippines',
                'native' => 'Pilipinas',
                'currency' => 'PHP',
                'languages' => 'English' 
            ],
            [
                'code' => 'PK',
                'name' => 'Pakistan',
                'native' => 'Pakistan',
                'currency' => 'PKR',
                'languages' => 'English' 
            ],
            [
                'code' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'native' => 'Saint-Pierre-et-Miquelon',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'PN',
                'name' => 'Pitcairn Islands',
                'native' => 'Pitcairn Islands',
                'currency' => 'NZD',
                'languages' => 'English' 
            ],
            [
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'native' => 'Puerto Rico',
                'currency' => 'USD',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'Pashto',
                'name' => 'Palestine',
                'native' => 'فلسطين',
                'currency' => 'ILS',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'Portuguese',
                'name' => 'Portugal',
                'native' => 'Portugal',
                'currency' => 'EUR',
                'languages' => 'Portuguese' 
            ],
            [
                'code' => 'PW',
                'name' => 'Palau',
                'native' => 'Palau',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'PY',
                'name' => 'Paraguay',
                'native' => 'Paraguay',
                'currency' => 'PYG',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'QA',
                'name' => 'Qatar',
                'native' => 'قطر',
                'currency' => 'QAR',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'RE',
                'name' => 'Réunion',
                'native' => 'La Réunion',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'RU',
                'name' => 'Russia',
                'native' => 'Россия',
                'currency' => 'RUB',
                'languages' => 'Russian',
                'suggested' => true
            ],
            [
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'native' => 'العربية السعودية',
                'currency' => 'SAR',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'native' => 'Solomon Islands',
                'currency' => 'SBD',
                'languages' => 'English' 
            ],
            [
                'code' => 'SC',
                'name' => 'Seychelles',
                'native' => 'Seychelles',
                'currency' => 'SCR',
                'languages' => 'French' 
            ],
            [
                'code' => 'SD',
                'name' => 'Sudan',
                'native' => 'السودان',
                'currency' => 'SDG',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'SH',
                'name' => 'Saint Helena',
                'native' => 'Saint Helena',
                'currency' => 'SHP',
                'languages' => 'English' 
            ],
            [
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'native' => 'Sierra Leone',
                'currency' => 'SLL',
                'languages' => 'English' 
            ],
            [
                'code' => 'SM',
                'name' => 'San Marino',
                'native' => 'San Marino',
                'currency' => 'EUR',
                'languages' => 'Italian' 
            ],
            [
                'code' => 'SN',
                'name' => 'Senegal',
                'native' => 'Sénégal',
                'currency' => 'XOF',
                'languages' => 'French' 
            ],
            [
                'code' => 'SR',
                'name' => 'Suriname',
                'native' => 'Suriname',
                'currency' => 'SRD',
                'languages' => 'Dutch' 
            ],
            [
                'code' => 'SS',
                'name' => 'South Sudan',
                'native' => 'South Sudan',
                'currency' => 'SSP',
                'languages' => 'English' 
            ],
            [
                'code' => 'ST',
                'name' => 'São Tomé and Príncipe',
                'native' => 'São Tomé e Príncipe',
                'currency' => 'STN',
                'languages' => 'Portuguese' 
            ],
            [
                'code' => 'SV',
                'name' => 'El Salvador',
                'native' => 'El Salvador',
                'currency' => 'USD',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'SY',
                'name' => 'Syria',
                'native' => 'سوريا',
                'currency' => 'SYP',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'TC',
                'name' => 'Turks and Caicos Islands',
                'native' => 'Turks and Caicos Islands',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'native' => 'Territoire des Terres australes et antarctiques fr',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'TG',
                'name' => 'Togo',
                'native' => 'Togo',
                'currency' => 'XOF',
                'languages' => 'French' 
            ],
            [
                'code' => 'TK',
                'name' => 'Tokelau',
                'native' => 'Tokelau',
                'currency' => 'NZD',
                'languages' => 'English' 
            ],
            [
                'code' => 'TL',
                'name' => 'East Timor',
                'native' => 'Timor-Leste',
                'currency' => 'USD',
                'languages' => 'Portuguese' 
            ],
            [
                'code' => 'TN',
                'name' => 'Tunisia',
                'native' => 'تونس',
                'currency' => 'TND',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'TT',
                'name' => 'Trinidad and Tobago',
                'native' => 'Trinidad and Tobago',
                'currency' => 'TTD',
                'languages' => 'English' 
            ],
            [
                'code' => 'TV',
                'name' => 'Tuvalu',
                'native' => 'Tuvalu',
                'currency' => 'AUD',
                'languages' => 'English' 
            ],
            [
                'code' => 'TW',
                'name' => 'Taiwan',
                'native' => '臺灣',
                'currency' => 'TWD',
                'languages' => 'Chinese' 
            ],
            [
                'code' => 'UM',
                'name' => 'U.S. Minor Outlying Islands',
                'native' => 'United States Minor Outlying Islands',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'US',
                'name' => 'United States',
                'native' => 'United States',
                'currency' => 'USD',
                'languages' => 'English',
                'suggested' => true

            ],
            [
                'code' => 'UY',
                'name' => 'Uruguay',
                'native' => 'Uruguay',
                'currency' => 'UYI',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'VA',
                'name' => 'Vatican City',
                'native' => 'Vaticano',
                'currency' => 'EUR',
                'languages' => 'Italian' 
            ],
            [
                'code' => 'VC',
                'name' => 'Saint Vincent and the Grenadines',
                'native' => 'Saint Vincent and the Grenadines',
                'currency' => 'XCD',
                'languages' => 'English' 
            ],
            [
                'code' => 'VE',
                'name' => 'Venezuela',
                'native' => 'Venezuela',
                'currency' => 'VES',
                'languages' => 'Spanish' 
            ],
            [
                'code' => 'VG',
                'name' => 'British Virgin Islands',
                'native' => 'British Virgin Islands',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'VI',
                'name' => 'U.S. Virgin Islands',
                'native' => 'United States Virgin Islands',
                'currency' => 'USD',
                'languages' => 'English' 
            ],
            [
                'code' => 'VN',
                'name' => 'Vietnam',
                'native' => 'Việt Nam',
                'currency' => 'VND',
                'languages' => 'Vietnamese' 
            ],
            [
                'code' => 'WF',
                'name' => 'Wallis and Futuna',
                'native' => 'Wallis et Futuna',
                'currency' => 'XPF',
                'languages' => 'French' 
            ],
            [
                'code' => 'XK',
                'name' => 'Kosovo',
                'native' => 'Republika e Kosovës',
                'currency' => 'EUR',
                'languages' => 'Albanian' 
            ],
            [
                'code' => 'YE',
                'name' => 'Yemen',
                'native' => 'اليَمَن',
                'currency' => 'YER',
                'languages' => 'Arabic' 
            ],
            [
                'code' => 'YT',
                'name' => 'Mayotte',
                'native' => 'Mayotte',
                'currency' => 'EUR',
                'languages' => 'French' 
            ],
            [
                'code' => 'ZA',
                'name' => 'South Africa',
                'native' => 'South Africa',
                'currency' => 'ZAR',
                'languages' => 'Afrikaans' 
            ],
            [
                'code' => 'ZM',
                'name' => 'Zambia',
                'native' => 'Zambia',
                'currency' => 'ZMW',
                'languages' => 'English' 
            ]
        ];

        foreach( $countries AS $array )
            LanguagesRegions::create( $array );
    }
}
