<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/languages/fr.yaml',
    'modified' => 1448063760,
    'data' => [
        'INFLECTOR_PLURALS' => [
            '/$/' => 's',
            '/(bijou|caillou|chou|genou|hibou|joujou|pou|au|eu|eau)$/' => '\\1x',
            '/(bleu|émeu|landau|lieu|pneu|sarrau)$/' => '\\1s',
            '/(b|cor|ém|gemm|soupir|trav|vant|vitr)ail$/' => '\\1aux',
            '/(s|x|z)$/' => '\\1',
            '/ail$/' => 'ails',
            '/al$/' => 'aux',
            '/s$/i' => 's'
        ],
        'INFLECTOR_SINGULAR' => [
            '/(bijou|caillou|chou|genou|hibou|joujou|pou|au|eu|eau)x$/' => '\\1',
            '/(b|cor|ém|gemm|soupir|trav|vant|vitr)aux$/' => '\\1ail',
            '/(journ|chev)aux$/' => '\\1al',
            '/ails$/' => 'ail',
            '/s$/i' => ''
        ],
        'INFLECTOR_IRREGULAR' => [
            'madame' => 'mesdames',
            'mademoiselle' => 'mesdemoiselles',
            'monsieur' => 'messieurs'
        ],
        'INFLECTOR_ORDINALS' => [
            'default' => 'ème',
            'first' => 'er',
            'second' => 'nd'
        ],
        'NICETIME' => [
            'NO_DATE_PROVIDED' => 'Aucune date',
            'BAD_DATE' => 'Date erronée',
            'AGO' => 'plus tôt',
            'FROM_NOW' => 'à partir de maintenant',
            'SECOND' => 'seconde',
            'MINUTE' => 'minute',
            'HOUR' => 'heure',
            'DAY' => 'jour',
            'WEEK' => 'semaine',
            'MONTH' => 'mois',
            'YEAR' => 'an',
            'DECADE' => 'décennie',
            'SEC' => 's',
            'MIN' => 'm',
            'HR' => 'h',
            'WK' => 's',
            'MO' => 'm',
            'YR' => 'a',
            'DEC' => 'd',
            'SECOND_PLURAL' => 'secondes',
            'MINUTE_PLURAL' => 'minutes',
            'HOUR_PLURAL' => 'heures',
            'DAY_PLURAL' => 'jours',
            'WEEK_PLURAL' => 'semaines',
            'MONTH_PLURAL' => 'mois',
            'YEAR_PLURAL' => 'ans',
            'DECADE_PLURAL' => 'décennies',
            'SEC_PLURAL' => 's',
            'MIN_PLURAL' => 'm',
            'HR_PLURAL' => 'h',
            'WK_PLURAL' => 's',
            'MO_PLURAL' => 'm',
            'YR_PLURAL' => 'a',
            'DEC_PLURAL' => 'd'
        ]
    ]
];
