<?php

require '../vendor/autoload.php';

use Transformer\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * @param array|object $item
     * @return array|mixed
     */
    public function transform($item)
    {
        return [
            'id' => $item['id'],
            'username' => $item['username'],
            'mobile' => $item['mobile'],
            'gender' => $item['gender']
        ];
    }
}


$arr = [
    [
        'id' => 1,
        'username' => 'Tom',
        'password' => '123456',
        'gender' => 'm',
        'city' => 'shanghai',
        'mobile' => '18012345678',
        'created_at' => '2021-01-01 10:10:10',
    ],
    [
        'id' => 2,
        'username' => 'Jerry',
        'password' => '234567',
        'gender' => 'f',
        'city' => 'beijing',
        'mobile' => '18811111111',
        'created_at' => '2021-02-01 12:12:00',
    ]
];

$transform = new UserTransformer();
$res = $transform->transformArray($arr);

echo '<pre>';
print_r($res);
