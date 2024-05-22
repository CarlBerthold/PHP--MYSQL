<?php


/* Id
Vorname
Nachname
E-Mail-Adresse
Passwort
Rolle
registiert seit
letzte Änderung */


function fetchData() : array {
    return [
        [
            'id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
            'role' => 'user',
            'registered_since' => '2021-01-01',
            'last_modified' => '2021-01-01'
        ],
        [
            'id' => 2,
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'jane.smith@example.com',
            'password' => 'password456',
            'role' => 'admin',
            'registered_since' => '2021-01-02',
            'last_modified' => '2021-01-02'
        ],
        [
            'id' => 3,
            'first_name' => 'Alice',
            'last_name' => 'Johnson',
            'email' => 'alice.johnson@example.com',
            'password' => 'password789',
            'role' => 'user',
            'registered_since' => '2021-01-03',
            'last_modified' => '2021-01-03'
        ],
        [
            'id' => 4,
            'first_name' => 'Bob',
            'last_name' => 'Brown',
            'email' => 'bob.brown@example.com',
            'password' => 'password321',
            'role' => 'admin',
            'registered_since' => '2021-01-04',
            'last_modified' => '2021-01-04'
        ],
        [
            'id' => 5,
            'first_name' => 'Charlie',
            'last_name' => 'Davis',
            'email' => 'charlie.davis@example.com',
            'password' => 'password654',
            'role' => 'inactive',
            'registered_since' => '2021-01-05',
            'last_modified' => '2021-01-05'
        ],
        [
            'id' => 6,
            'first_name' => 'Diana',
            'last_name' => 'Evans',
            'email' => 'diana.evans@example.com',
            'password' => 'password987',
            'role' => 'user',
            'registered_since' => '2021-01-06',
            'last_modified' => '2021-01-06'
        ],
        [
            'id' => 7,
            'first_name' => 'Ethan',
            'last_name' => 'Foster',
            'email' => 'ethan.foster@example.com',
            'password' => 'password1234',
            'role' => 'admin',
            'registered_since' => '2021-01-07',
            'last_modified' => '2021-01-07'
        ],
        [
            'id' => 8,
            'first_name' => 'Fiona',
            'last_name' => 'Garcia',
            'email' => 'fiona.garcia@example.com',
            'password' => 'password5678',
            'role' => 'user',
            'registered_since' => '2021-01-08',
            'last_modified' => '2021-01-08'
        ],
        [
            'id' => 9,
            'first_name' => 'George',
            'last_name' => 'Harris',
            'email' => 'george.harris@example.com',
            'password' => 'password8765',
            'role' => 'user',
            'registered_since' => '2021-01-09',
            'last_modified' => '2021-01-09'
        ],
        [
            'id' => 10,
            'first_name' => 'Hannah',
            'last_name' => 'Jackson',
            'email' => 'hannah.jackson@example.com',
            'password' => 'password4321',
            'role' => 'admin',
            'registered_since' => '2021-01-10',
            'last_modified' => '2021-01-10'
        ],
        [
            'id' => 11,
            'first_name' => 'Ian',
            'last_name' => 'King',
            'email' => 'ian.king@example.com',
            'password' => 'password6543',
            'role' => 'user',
            'registered_since' => '2021-01-11',
            'last_modified' => '2021-01-11'
        ],
        [
            'id' => 12,
            'first_name' => 'Julia',
            'last_name' => 'Lewis',
            'email' => 'julia.lewis@example.com',
            'password' => 'password7890',
            'role' => 'inactive',
            'registered_since' => '2021-01-12',
            'last_modified' => '2021-01-12'
        ],
        [
            'id' => 13,
            'first_name' => 'Kevin',
            'last_name' => 'Martinez',
            'email' => 'kevin.martinez@example.com',
            'password' => 'password0987',
            'role' => 'admin',
            'registered_since' => '2021-01-13',
            'last_modified' => '2021-01-13'
        ],
        [
            'id' => 14,
            'first_name' => 'Laura',
            'last_name' => 'Nelson',
            'email' => 'laura.nelson@example.com',
            'password' => 'password5432',
            'role' => 'user',
            'registered_since' => '2021-01-14',
            'last_modified' => '2021-01-14'
        ],
        [
            'id' => 15,
            'first_name' => 'Michael',
            'last_name' => 'Owen',
            'email' => 'michael.owen@example.com',
            'password' => 'password7654',
            'role' => 'user',
            'registered_since' => '2021-01-15',
            'last_modified' => '2021-01-15'
        ],
        [
            'id' => 16,
            'first_name' => 'Nina',
            'last_name' => 'Perez',
            'email' => 'nina.perez@example.com',
            'password' => 'password3456',
            'role' => 'admin',
            'registered_since' => '2021-01-16',
            'last_modified' => '2021-01-16'
        ],
        [
            'id' => 17,
            'first_name' => 'Oscar',
            'last_name' => 'Quinn',
            'email' => 'oscar.quinn@example.com',
            'password' => 'password2345',
            'role' => 'user',
            'registered_since' => '2021-01-17',
            'last_modified' => '2021-01-17'
        ],
        [
            'id' => 18,
            'first_name' => 'Paula',
            'last_name' => 'Roberts',
            'email' => 'paula.roberts@example.com',
            'password' => 'password6789',
            'role' => 'user',
            'registered_since' => '2021-01-18',
            'last_modified' => '2021-01-18'
        ],
        [
            'id' => 19,
            'first_name' => 'Quincy',
            'last_name' => 'Scott',
            'email' => 'quincy.scott@example.com',
            'password' => 'password9876',
            'role' => 'admin',
            'registered_since' => '2021-01-19',
            'last_modified' => '2021-01-19'
        ],
        [
            'id' => 20,
            'first_name' => 'Rachel',
            'last_name' => 'Taylor',
            'email' => 'rachel.taylor@example.com',
            'password' => 'password12345',
            'role' => 'user',
            'registered_since' => '2021-01-20',
            'last_modified' => '2021-01-20'
        ],
        [
            'id' => 21,
            'first_name' => 'Sam',
            'last_name' => 'Upton',
            'email' => 'sam.upton@example.com',
            'password' => 'password54321',
            'role' => 'user',
            'registered_since' => '2021-01-21',
            'last_modified' => '2021-01-21'
        ]
    ];
}
?>