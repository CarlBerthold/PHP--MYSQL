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


/**
 * Get all keys from the TechStack array || Get all firstlevel fields from the TechStack array
 */
$techFields = array_keys($TechStack);

function renderListItem($key, $value) {
    if (is_array($value)) {
        echo "<li>$key<ul>";
        foreach ($value as $subKey => $subValue) {
            renderListItem($subKey, $subValue);
        }
        echo "</ul></li>";
    } else {
        echo "<li>$key: $value</li>";
    }
}

foreach($techFields as $area) {
    echo "<ul><li>$area<ul>";
    foreach($TechStack[$area] as $field => $value) {
        renderListItem($field, $value);
    }
    echo "</ul></li></ul>";
}

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
    <?php foreach($techFields as $area) : ?>
        <li>
            <?= $area ?>
            <ul>
                <?php foreach($TechStack[$area] as $field => $value) : ?>
                    <?php renderListItem($field, $value); ?>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>