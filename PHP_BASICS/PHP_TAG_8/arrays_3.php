<?php

$techStack = [
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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($techStack as $areaName => $area) : ?>
        <h3><?= $areaName ?></h3>
        <ul>
            <?php foreach ($area as $typeName => $type) : ?>
                <li>
                    <?= $typeName ?>
                    <ul>
                        <?php foreach ($type as $experienceName => $experience) : ?>
                            <?php if (is_array($experience)) : ?>
                                <li>
                                    <?= $experienceName ?>
                                    <ul>
                                        <?php foreach ($experience as $subExperienceName => $subExperience) : ?>
                                            <?php if (is_array($subExperience)) : ?>
                                                <?php if (!empty($subExperience)) : ?>
                                                    <li>
                                                        <?= $subExperienceName ?>
                                                        <ul>
                                                            <?php foreach ($subExperience as $subExperienceKey => $subExperienceValue) : ?>
                                                                <li>
                                                                    <?= $subExperienceValue ?>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </li>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                <li>
                                                    <?= (is_string($subExperienceName) ? $subExperienceName . ': ' : '')  . $subExperience ?>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else : ?>
                                <li>
                                    <?= $experienceName  . ': ' . $experience ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>

</html>