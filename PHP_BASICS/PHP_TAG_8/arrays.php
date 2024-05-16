<?php

$TechStack = [
    'Frontend' => [
        'HTML' => [
            'using_since' => '2010',
            'skill_level' => 'advanced',
            'projects' => [
                'e-commerce',
                'social media',
                'blog',
            ]
        ],
        'CSS' => [
            'using_since' => '2010',
            'skill_level' => 'advanced',
            'projects' => [
                'e-commerce',
                'social media',
                'blog',
            ]
        ],
        'JavaScript' => [
            'using_since' => '2012',
            'skill_level' => 'advanced',
            'projects' => [
                'e-commerce',
                'social media',
                'blog',
            ]
        ],
        'frameworks' => [
            'React' => [
                'using_since' => '2016',
                'skill_level' => 'advanced',
                'projects' => [
                    'e-commerce',
                    'social media',
                    'blog',
                ]
            ],
            'Vue' => [
                'using_since' => '2018',
                'skill_level' => 'intermediate',
                'projects' => [
                    'e-commerce',
                    'blog',
                ]
            ],
            'Angular' => [
                'using_since' => '2024',
                'skill_level' => 'beginner',
                'projects' => [],
            ]
        ]
    ],
    'Backend' => [
        'PHP' => [
            'using_since' => '2018',
            'skill_level' => 'intermediate',
            'projects' => [
                'e-commerce',
                'social media',
            ]
        ],
        'Node.js' => [
            'using_since' => '2017',
            'skill_level' => 'advanced',
            'projects' => [
                'real-time chat',
                'blog',
            ]
        ],
        'Python' => [
            'using_since' => '2019',
            'skill_level' => 'beginner',
            'projects' => [
                'data analysis',
                'machine learning',
            ]
        ],
        'Ruby' => [
            'using_since' => '2020',
            'skill_level' => 'intermediate',
            'projects' => [
                'e-commerce',
                'social media',
            ]
        ],
        'Java' => [
            'using_since' => '2015',
            'skill_level' => 'advanced',
            'projects' => [
                'enterprise software',
                'mobile app',
            ]
        ],
        'C#' => [
            'using_since' => '2016',
            'skill_level' => 'advanced',
            'projects' => [
                'game development',
                'enterprise software',
            ]
        ]
    ],
    'Database' => [
        'relationale_DB' => [
            'MySQL' => [
                'using_since' => '2018',
                'skill_level' => 'advanced',
                'projects' => [
                    'e-commerce',
                    'social media',
                ]
            ],
            'PostgreSQL' => [
                'using_since' => '2019',
                'skill_level' => 'intermediate',
                'projects' => [
                    'data analysis',
                    'blog',
                ]
            ],
            'SQLite' => [
                'using_since' => '2020',
                'skill_level' => 'beginner',
                'projects' => [
                    'mobile app',
                    'desktop app',
                ]
            ],
            'Oracle' => [
                'using_since' => '2015',
                'skill_level' => 'advanced',
                'projects' => [
                    'enterprise software',
                    'data warehousing',
                ]
            ],
            'MariaDB' => [
                'using_since' => '2016',
                'skill_level' => 'advanced',
                'projects' => [
                    'web development',
                    'data analysis',
                ]
            ]
        ],
        'noSQL_DB' => [
            'MongoDB' => [
                'using_since' => '2017',
                'skill_level' => 'advanced',
                'projects' => [
                    'real-time chat',
                    'social media',
                ]
            ],
            'CouchDB' => [
                'using_since' => '2018',
                'skill_level' => 'intermediate',
                'projects' => [
                    'web development',
                    'mobile app',
                ]
            ],
            'Cassandra' => [
                'using_since' => '2019',
                'skill_level' => 'beginner',
                'projects' => [
                    'data analysis',
                    'big data',
                ]
            ],
            'Firebase' => [
                'using_since' => '2020',
                'skill_level' => 'advanced',
                'projects' => [
                    'mobile app',
                    'real-time chat',
                ]
            ]
        ]
    ]
];

// print_r($TechStack);
// var_dump($TechStack);

//var_dump($backends);


/**
 * Get all keys from the TechStack array || Get all firstlevel fields from the TechStack array
 */
$techFields = array_keys($TechStack);
// $frontend = array_keys($TechStack['Frontend']);
// $backend = array_keys($TechStack['Backend']);
// $databases = array_keys($TechStack['Database']);

/* var_dump($frontend);
var_dump($backend);
var_dump($databases); */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <li>
        <?php foreach($techFields as $area) : ?>
            <ul>
                <li>
                    <?= $area ?>
                    <ul>
                        <?php foreach($TechStack[$area] as $field => $value) : ?>
                            <li>
                                <?= $field ?>
                                <ul>
                                    <?php foreach($value as $key => $val) : ?>
                                        <?php if (is_array($val)) : ?>
                                            <li>
                                                <?= $key ?>
                                                <ul>
                                                    <?php foreach($val as $subKey => $subVal) : ?>
                                                        <li>
                                                            <?php if (is_array($subVal)) : ?>
                                                                <?= $subKey ?>
                                                                <ul>
                                                                    <?php foreach($subVal as $subSubKey => $subSubVal) : ?>
                                                                        <li>
                                                                            <?= $subSubKey . ': ' . $subSubVal ?>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            <?php else : ?>
                                                                <?= $subKey . ': ' . $subVal ?>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>
                                        <?php else : ?>
                                            <li>
                                                <?= $key . ': ' . $val ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        <?php endforeach; ?>
    </li>
</ul>
</body>
</html>