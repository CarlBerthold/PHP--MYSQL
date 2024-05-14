<?php

$TechStack = [
    'Frontend' => [
        'HTML' => [
            'using_since' => '2010',
            'skill_level' => 'advanced',
            'projects' => [
                'e-commerce',
                'social media',
                'blog'
            ]
        ],
        'CSS' => [
            'using_since' => '2010',
            'skill_level' => 'advanced',
            'projects' => [
                'e-commerce',
                'social media',
                'blog'
            ]
        ],
        'JavaScript' => [
            'using_since' => '2012',
            'skill_level' => 'advanced',
            'projects' => [
                'e-commerce',
                'social media',
                'blog'
            ]
        ],
        'frameworks' => [
            'React' => [
                'using_since' => '2016',
                'skill_level' => 'advanced',
                'projects' => [
                    'e-commerce',
                    'social media',
                    'blog'
                ]
            ],
            'Vue' => [
                'using_since' => '2018',
                'skill_level' => 'intermediate',
                'projects' => [
                    'e-commerce',
                    'blog'
                ]
            ],
            'Angular' => [
                'using_since' => '2024',
                'skill_level' => 'beginner',
                'projects' => []
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
                'blog'
            ]
        ],
        'Python' => [
            'using_since' => '2019',
            'skill_level' => 'beginner',
            'projects' => [
                'data analysis',
                'machine learning'
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
                'mobile app'
            ]
        ],
        'C#' => [
            'using_since' => '2016',
            'skill_level' => 'advanced',
            'projects' => [
                'game development',
                'enterprise software'
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
                    'blog'
                ]
            ],
            'SQLite' => [
                'using_since' => '2020',
                'skill_level' => 'beginner',
                'projects' => [
                    'mobile app',
                    'desktop app'
                ]
            ],
            'Oracle' => [
                'using_since' => '2015',
                'skill_level' => 'advanced',
                'projects' => [
                    'enterprise software',
                    'data warehousing'
                ]
            ],
            'MariaDB' => [
                'using_since' => '2016',
                'skill_level' => 'advanced',
                'projects' => [
                    'web development',
                    'data analysis'
                ]
            ]
        ],
        'noSQL_DB' => [
            'MongoDB' => [
                'using_since' => '2017',
                'skill_level' => 'advanced',
                'projects' => [
                    'real-time chat',
                    'social media'
                ]
            ],
            'CouchDB' => [
                'using_since' => '2018',
                'skill_level' => 'intermediate',
                'projects' => [
                    'web development',
                    'mobile app'
                ]
            ],
            'Cassandra' => [
                'using_since' => '2019',
                'skill_level' => 'beginner',
                'projects' => [
                    'data analysis',
                    'big data'
                ]
            ],
            'Firebase' => [
                'using_since' => '2020',
                'skill_level' => 'advanced',
                'projects' => [
                    'mobile app',
                    'real-time chat'
                ]
            ]
        ]
    ]
];

// print_r($TechStack);
// var_dump($TechStack);

//var_dump($backends);


/**
 * Recursively loops through a multi-dimensional array and prints the keys and types of the values.
 *
 * @param array $array The array to loop through.
 * @param int $indent The number of spaces to indent each level of the array.
 * @return string The formatted string.
 */
function loopArray(array $array, int $indent = 0): string {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            echo str_repeat(" ", $indent) . $key . ":\n";
            return loopArray($value, $indent + 2);
        } else {
            return str_repeat(" ", $indent) . $key . ": " . gettype($value) . "\n";
        }
    }
    
    return ""; // Add this line to return an empty string if the array is empty.
}


loopArray($TechStack);
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
        <?php foreach ($TechStack as $category => $technologies): ?>
            <li>
                <strong><?= $category ?></strong>
                <ul>
                    <?php foreach ($technologies as $tech => $details): ?>
                        <li>
                            <strong><?= $tech ?></strong>
                            <ul>
                                <?php foreach ($details as $detail => $value): ?>
                                    <?php if (is_array($value)): ?>
                                        <li>
                                            <?= $detail ?>
                                            <ul>
                                                <?php foreach ($value as $project => $details2): ?>
                                                    <?php if(is_array($details2)): ?>
                                                        <li><?php foreach($details2 as $result): ?>
                                                            <?= $result ?>
                                                            <?php endforeach; ?>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li><?= $detail ?>: <?= $value ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>