<?php

/*  | This extension is made for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2011-2022 Armin Vieweg <armin@v.ieweg.de>
 *  |     2015 Dennis Roemmich <dennis@roemmich.eu>
 */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$ll = 'LLL:EXT:pw_comments/Resources/Private/Language/locallang_db.xlf:';

return [
    'ctrl' => [
        'title' => $ll . 'tx_pwcomments_domain_model_comment',
        'label' => 'message',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
        'iconfile' => 'EXT:pw_comments/Resources/Public/Icons/tx_pwcomments_domain_model_comment.png'
    ],
    'types' => [
        '1' => ['showitem' => 'hidden,author,author_name,author_mail,author_website,author_ident,terms_accepted,' .
                              'entry_uid,message,parent_comment,votes,crdate,tstamp']
    ],
    'palettes' => [
        '1' => ['showitem' => 'message']
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 0,
            'label' => $ll . 'general.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.php:LGL.default_value', 0]
                ]
            ]
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => $ll . 'general.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0]
                ],
                'foreign_table' => 'tx_pwcomments_domain_model_comment',
                'foreign_table_where' => 'AND tx_pwcomments_domain_model_comment.uid=###REC_FIELD_l18n_parent###' .
                    ' AND tx_pwcomments_domain_model_comment.sys_language_uid IN (-1,0)'
            ]
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        't3ver_label' => [
            'displayCond' => 'FIELD:t3ver_label:REQ:true',
            'label' => $ll . 'general.versionLabel',
            'config' => [
                'type' => 'none',
                'cols' => 27
            ]
        ],
        'pid' => [
            'exclude' => 0,
            'label' => $ll . 'general.pid',
            'config' => [
                'type' => 'input'
            ]
        ],
        'crdate' => [
            'exclude' => 0,
            'label' => $ll . 'general.crdate',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ]
        ],
        'tstamp' => [
            'exclude' => 0,
            'label' => $ll . 'general.tstamp',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ]
        ],
        'hidden' => [
            'exclude' => 0,
            'label' => $ll . 'general.hidden',
            'config' => [
                'type' => 'check'
            ]
        ],
        'orig_pid' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.orig_pid',
            'config' => [
                'type' => 'input'
            ]
        ],
        'entry_uid' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.entry_uid',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_news_domain_model_news',
                'show_thumbs' => 1,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1
            ]
        ],
        'parent_comment' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.parent_comment',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_pwcomments_domain_model_comment',
                'show_thumbs' => 1,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1
            ]
        ],
        'author' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.author',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'fe_users',
                'maxitems' => 1,
                'items' => [
                    ['', 0]
                ],
            ]
        ],
        'author_name' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.author_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'author_mail' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.author_mail',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'author_ident' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.author_ident',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'message' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.message',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 10
            ]
        ],
        'votes' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.votes',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_pwcomments_domain_model_vote',
                'foreign_field' => 'comment',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'behaviour' => [
                    'enableCascadingDelete' => true
                ],
                'appearance' => [
                    'collapseAll' => true,
                    'newRecordLinkPosition' => 'none',
                    'levelLinksPosition' => 'none',
                    'useSortable' => false,
                    'enabledControls' => [
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false
                    ]
                ]
            ]
        ],
        'terms_accepted' => [
            'exclude' => 0,
            'label' => $ll . 'tx_pwcomments_domain_model_comment.terms_accepted',
            'config' => [
                'type' => 'check'
            ]
        ],
    ]
];
