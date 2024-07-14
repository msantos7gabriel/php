<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
    }

    table caption {
        font-size: 1.5em;
        margin: 0.5em 0 0.75em;
    }

    table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: 0.35em;
    }

    table th,
    table td {
        padding: 0.625em;
        text-align: center;
    }

    table th {
        font-size: 0.85em;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }

    @media screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            margin-bottom: 0.625em;
        }

        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: 0.8em;
            text-align: right;
        }

        table td::before {
            /*
* aria-label has no advantage, it won't be read inside a table
content: attr(aria-label);
*/
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td:last-child {
            border-bottom: 0;
        }
    }

    /* general styling */
    body {
        font-family: "Open Sans", sans-serif;
        line-height: 1.25;
    }
    </style>
    <title>Aula 21-05</title>
</head>

<body>
    <pre>
    <?php

    $array = [
        "alunos" => [
            [
                'id' => 1,
                'nome' => 'fabio',
                'idade' => 20
            ],
            [
                'id' => 2,
                'nome' => 'jao',
                'idade' => 25
            ],
            [
                'id' => 3,
                'nome' => 'zeka',
                'idade' => 18
            ],
            [
                'id' => 4,
                'nome' => 'alice',
                'idade' => 22
            ],
            [
                'id' => 5,
                'nome' => 'bob',
                'idade' => 19
            ],
            [
                'id' => 6,
                'nome' => 'carol',
                'idade' => 23
            ],
            [
                'id' => 7,
                'nome' => 'dave',
                'idade' => 24
            ],
            [
                'id' => 8,
                'nome' => 'eve',
                'idade' => 20
            ],
            [
                'id' => 9,
                'nome' => 'frank',
                'idade' => 21
            ],
            [
                'id' => 10,
                'nome' => 'grace',
                'idade' => 22
            ],
            [
                'id' => 11,
                'nome' => 'heidi',
                'idade' => 18
            ],
            [
                'id' => 12,
                'nome' => 'ivan',
                'idade' => 20
            ],
            [
                'id' => 13,
                'nome' => 'judy',
                'idade' => 19
            ],
            [
                'id' => 14,
                'nome' => 'mallory',
                'idade' => 23
            ],
            [
                'id' => 15,
                'nome' => 'nathan',
                'idade' => 25
            ],
            [
                'id' => 16,
                'nome' => 'olivia',
                'idade' => 21
            ],
            [
                'id' => 17,
                'nome' => 'peggy',
                'idade' => 22
            ],
            [
                'id' => 18,
                'nome' => 'trent',
                'idade' => 18
            ],
            [
                'id' => 19,
                'nome' => 'victor',
                'idade' => 20
            ],
            [
                'id' => 20,
                'nome' => 'wendy',
                'idade' => 19
            ],
            [
                'id' => 21,
                'nome' => 'xander',
                'idade' => 23
            ],
            [
                'id' => 22,
                'nome' => 'yvonne',
                'idade' => 24
            ],
            [
                'id' => 23,
                'nome' => 'zach',
                'idade' => 22
            ],
            [
                'id' => 24,
                'nome' => 'angel',
                'idade' => 20
            ],
            [
                'id' => 25,
                'nome' => 'beth',
                'idade' => 21
            ],
            [
                'id' => 26,
                'nome' => 'chris',
                'idade' => 22
            ],
            [
                'id' => 27,
                'nome' => 'danielle',
                'idade' => 18
            ],
            [
                'id' => 28,
                'nome' => 'edward',
                'idade' => 20
            ],
            [
                'id' => 29,
                'nome' => 'faith',
                'idade' => 19
            ],
            [
                'id' => 30,
                'nome' => 'george',
                'idade' => 23
            ],
            [
                'id' => 31,
                'nome' => 'hannah',
                'idade' => 25
            ],
            [
                'id' => 32,
                'nome' => 'ian',
                'idade' => 21
            ],
            [
                'id' => 33,
                'nome' => 'jessica',
                'idade' => 22
            ],
            [
                'id' => 34,
                'nome' => 'kyle',
                'idade' => 18
            ],
            [
                'id' => 35,
                'nome' => 'laura',
                'idade' => 20
            ],
            [
                'id' => 36,
                'nome' => 'mike',
                'idade' => 19
            ],
            [
                'id' => 37,
                'nome' => 'nina',
                'idade' => 23
            ],
            [
                'id' => 38,
                'nome' => 'oscar',
                'idade' => 24
            ],
            [
                'id' => 39,
                'nome' => 'paula',
                'idade' => 22
            ],
            [
                'id' => 40,
                'nome' => 'quincy',
                'idade' => 20
            ],
            [
                'id' => 41,
                'nome' => 'rachel',
                'idade' => 21
            ],
            [
                'id' => 42,
                'nome' => 'steve',
                'idade' => 22
            ],
            [
                'id' => 43,
                'nome' => 'tina',
                'idade' => 18
            ],
            [
                'id' => 44,
                'nome' => 'ursula',
                'idade' => 20
            ],
            [
                'id' => 45,
                'nome' => 'victor',
                'idade' => 19
            ],
            [
                'id' => 46,
                'nome' => 'wanda',
                'idade' => 23
            ],
            [
                'id' => 47,
                'nome' => 'xena',
                'idade' => 25
            ],
            [
                'id' => 48,
                'nome' => 'yosef',
                'idade' => 21
            ],
            [
                'id' => 49,
                'nome' => 'zelda',
                'idade' => 22
            ],
            [
                'id' => 50,
                'nome' => 'aaron',
                'idade' => 18
            ],
            [
                'id' => 51,
                'nome' => 'bella',
                'idade' => 20
            ],
            [
                'id' => 52,
                'nome' => 'caleb',
                'idade' => 19
            ],
            [
                'id' => 53,
                'nome' => 'diana',
                'idade' => 23
            ],
            [
                'id' => 54,
                'nome' => 'elias',
                'idade' => 24
            ],
            [
                'id' => 55,
                'nome' => 'fiona',
                'idade' => 22
            ],
            [
                'id' => 56,
                'nome' => 'greg',
                'idade' => 20
            ],
            [
                'id' => 57,
                'nome' => 'harper',
                'idade' => 21
            ],
            [
                'id' => 58,
                'nome' => 'isabel',
                'idade' => 22
            ],
            [
                'id' => 59,
                'nome' => 'jack',
                'idade' => 18
            ],
            [
                'id' => 60,
                'nome' => 'karen',
                'idade' => 20
            ],
            [
                'id' => 61,
                'nome' => 'leo',
                'idade' => 19
            ],
            [
                'id' => 62,
                'nome' => 'mia',
                'idade' => 23
            ],
            [
                'id' => 63,
                'nome' => 'noah',
                'idade' => 25
            ],
            [
                'id' => 64,
                'nome' => 'oliver',
                'idade' => 21
            ],
            [
                'id' => 65,
                'nome' => 'piper',
                'idade' => 22
            ],
            [
                'id' => 66,
                'nome' => 'quentin',
                'idade' => 18
            ],
            [
                'id' => 67,
                'nome' => 'ruby',
                'idade' => 20
            ],
            [
                'id' => 68,
                'nome' => 'sam',
                'idade' => 19
            ],
            [
                'id' => 69,
                'nome' => 'tess',
                'idade' => 23
            ],
            [
                'id' => 70,
                'nome' => 'ulysses',
                'idade' => 24
            ],
            [
                'id' => 71,
                'nome' => 'vera',
                'idade' => 22
            ],
            [
                'id' => 72,
                'nome' => 'will',
                'idade' => 20
            ],
            [
                'id' => 73,
                'nome' => 'xander',
                'idade' => 21
            ],
            [
                'id' => 74,
                'nome' => 'yasmin',
                'idade' => 22
            ],
            [
                'id' => 75,
                'nome' => 'zane',
                'idade' => 18
            ],
            [
                'id' => 76,
                'nome' => 'abby',
                'idade' => 20
            ],
            [
                'id' => 77,
                'nome' => 'ben',
                'idade' => 19
            ],
            [
                'id' => 78,
                'nome' => 'cara',
                'idade' => 23
            ],
            [
                'id' => 79,
                'nome' => 'dean',
                'idade' => 25
            ],
            [
                'id' => 80,
                'nome' => 'ella',
                'idade' => 21
            ],
            [
                'id' => 81,
                'nome' => 'finn',
                'idade' => 22
            ],
            [
                'id' => 82,
                'nome' => 'gina',
                'idade' => 18
            ],
            [
                'id' => 83,
                'nome' => 'hugo',
                'idade' => 20
            ],
            [
                'id' => 84,
                'nome' => 'iris',
                'idade' => 19
            ],
            [
                'id' => 85,
                'nome' => 'jake',
                'idade' => 23
            ],
            [
                'id' => 86,
                'nome' => 'kelly',
                'idade' => 24
            ],
            [
                'id' => 87,
                'nome' => 'luke',
                'idade' => 22
            ],
            [
                'id' => 88,
                'nome' => 'molly',
                'idade' => 20
            ],
            [
                'id' => 89,
                'nome' => 'nate',
                'idade' => 21
            ],
            [
                'id' => 90,
                'nome' => 'opal',
                'idade' => 22
            ],
            [
                'id' => 91,
                'nome' => 'paul',
                'idade' => 18
            ],
            [
                'id' => 92,
                'nome' => 'quinn',
                'idade' => 20
            ],
            [
                'id' => 93,
                'nome' => 'rose',
                'idade' => 19
            ],
            [
                'id' => 94,
                'nome' => 'seth',
                'idade' => 23
            ],
            [
                'id' => 95,
                'nome' => 'tori',
                'idade' => 25
            ],
            [
                'id' => 96,
                'nome' => 'ulysses',
                'idade' => 18
            ]
        ]
    ];

    $keys = [
        array_keys($array['alunos'][0]),
        array_keys($array['alunos'][1]),
        array_keys($array['alunos'][2]),
        array_keys($array['alunos'][3]),
        array_keys($array['alunos'][4]),
        array_keys($array['alunos'][5]),
        array_keys($array['alunos'][6]),
        array_keys($array['alunos'][7]),
        array_keys($array['alunos'][8]),
        array_keys($array['alunos'][9]),
        array_keys($array['alunos'][10]),
        array_keys($array['alunos'][11]),
        array_keys($array['alunos'][12]),
        array_keys($array['alunos'][13]),
        array_keys($array['alunos'][14]),
        array_keys($array['alunos'][15]),
        array_keys($array['alunos'][16]),
        array_keys($array['alunos'][17]),
        array_keys($array['alunos'][18]),
        array_keys($array['alunos'][19]),
        array_keys($array['alunos'][20]),
        array_keys($array['alunos'][21]),
        array_keys($array['alunos'][22]),
        array_keys($array['alunos'][23]),
        array_keys($array['alunos'][24]),
        array_keys($array['alunos'][25]),
        array_keys($array['alunos'][26]),
        array_keys($array['alunos'][27]),
        array_keys($array['alunos'][28]),
        array_keys($array['alunos'][29]),
        array_keys($array['alunos'][30]),
        array_keys($array['alunos'][31]),
        array_keys($array['alunos'][32]),
        array_keys($array['alunos'][33]),
        array_keys($array['alunos'][34]),
        array_keys($array['alunos'][35]),
        array_keys($array['alunos'][36]),
        array_keys($array['alunos'][37]),
        array_keys($array['alunos'][38]),
        array_keys($array['alunos'][39]),
        array_keys($array['alunos'][40]),
        array_keys($array['alunos'][41]),
        array_keys($array['alunos'][42]),
        array_keys($array['alunos'][43]),
        array_keys($array['alunos'][44]),
        array_keys($array['alunos'][45]),
        array_keys($array['alunos'][46]),
        array_keys($array['alunos'][47]),
        array_keys($array['alunos'][48]),
        array_keys($array['alunos'][49]),
        array_keys($array['alunos'][50]),
        array_keys($array['alunos'][51]),
        array_keys($array['alunos'][52]),
        array_keys($array['alunos'][53]),
        array_keys($array['alunos'][54]),
        array_keys($array['alunos'][55]),
        array_keys($array['alunos'][56]),
        array_keys($array['alunos'][57]),
        array_keys($array['alunos'][58]),
        array_keys($array['alunos'][59]),
        array_keys($array['alunos'][60]),
        array_keys($array['alunos'][61]),
        array_keys($array['alunos'][62]),
        array_keys($array['alunos'][63]),
        array_keys($array['alunos'][64]),
        array_keys($array['alunos'][65]),
        array_keys($array['alunos'][66]),
        array_keys($array['alunos'][67]),
        array_keys($array['alunos'][68]),
        array_keys($array['alunos'][69]),
        array_keys($array['alunos'][70]),
        array_keys($array['alunos'][71]),
        array_keys($array['alunos'][72]),
        array_keys($array['alunos'][73]),
        array_keys($array['alunos'][74]),
        array_keys($array['alunos'][75]),
        array_keys($array['alunos'][76]),
        array_keys($array['alunos'][77]),
        array_keys($array['alunos'][78]),
        array_keys($array['alunos'][79]),
        array_keys($array['alunos'][80]),
        array_keys($array['alunos'][81]),
        array_keys($array['alunos'][82]),
        array_keys($array['alunos'][83]),
        array_keys($array['alunos'][84]),
        array_keys($array['alunos'][85]),
        array_keys($array['alunos'][86]),
        array_keys($array['alunos'][87]),
        array_keys($array['alunos'][88]),
        array_keys($array['alunos'][89]),
        array_keys($array['alunos'][90]),
        array_keys($array['alunos'][91]),
        array_keys($array['alunos'][92]),
        array_keys($array['alunos'][93]),
        array_keys($array['alunos'][94]),
        array_keys($array['alunos'][95]),
    ];

    ?>
    </pre>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>idade</th>
        </tr>

        <?php
        foreach ($array as $alunos) {

            for ($i = 0; $i < sizeof($alunos); $i++) {
                echo "<tr>";
                for ($j = 0; $j < 3; $j++) {

                    print "<td>" . ($array['alunos'][$i][$keys[$i][$j]]) . "</td>";
                }
                echo "</tr>";
            }
        }


        ?>

    </table>
</body>

</html>