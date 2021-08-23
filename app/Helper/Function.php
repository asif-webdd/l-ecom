<?php
function ActiveMenu($RouteName)
{
    return Route::current()->getName() === $RouteName ? 'active' : '';
}

function ActivePrefix($prefix)
{
    return Route::current()->getPrefix() === $prefix ? 'active' : '';
}

function slugify($text, string $divider = '-'): string
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

function role_color($role_id)
{
    $data = [
        '1' => 'primary',
        '2' => 'success',
        '3' => 'danger'
    ];

    return $data[$role_id];
}

function cat_rand_status()
{
    $cat_s = [
        'active' => 'active',
        'inactive' => 'inactive'
    ];
    return array_rand($cat_s, 1);
}

function permissions($key = null)
{
    $date = [
        1 => 'Dashboard',
        2 => 'Users',
        3 => 'Users Add',
        4 => 'Users Edit',
        5 => 'Users Delete',
    ];

    if ($key === null) {
        return $date;
    } else {
        if (array_key_exists($key, $date)) {
            return $date[$key];
        } else {
            return $key;
        }
    }
}


function is_permitted($permission_name, $is_menu = false)
{
    $permission_id    = get_permission_id($permission_name);
    $permission_array = json_decode(auth()->user()->permissions);

    if(in_array($permission_id, $permission_array) || in_array('all', $permission_array)){
        return true;
    }else{
        if ($is_menu){
            return false;
        }else{
            header('Location:'.route('staff.no-access'));
            exit();
        }
    }
}
function get_permission_id($permission_name)
{
    foreach (permissions() as $key => $value) {
        if (strtolower(trim($value)) === strtolower(trim($permission_name))) {
            return $key;
        }
    }
    return null;
}
