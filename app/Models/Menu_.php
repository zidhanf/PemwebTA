<?php

namespace App\Models;


class Menu
{
    private static $menu_post = [
        [
            "nama" => "Ayam",
            "slug" => "ayam",
            "Harga" => "60",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga libero quas iste perferendis atque sapiente ullam tempora ducimus expedita sit ipsum explicabo sint repellendus, illo possimus dolor cupiditate! In ea debitis dolorum aspernatur. Id vero, officiis esse exercitationem nulla ab pariatur laboriosam nisi inventore numquam optio minus, tenetur sunt deleniti repellat voluptatum temporibus atque architecto laborum iusto et rem dolorem dolore asperiores. Quas at error dolor! Error eveniet, ipsam nostrum eaque laudantium placeat sed eos beatae sit minus id doloremque?"
        ],
        [
            "nama" => "Anggur",
            "slug" => "aaanggur",
            "Harga" => "1000",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga libero quas iste perferendis atque sapiente ullam tempora ducimus expedita sit ipsum explicabo sint repellendus, illo possimus dolor cupiditate! In ea debitis dolorum aspernatur. Id vero, officiis esse exercitationem nulla ab pariatur laboriosam nisi inventore numquam optio minus, tenetur sunt deleniti repellat voluptatum temporibus atque architecto laborum iusto et rem dolorem dolore asperiores. Quas at error dolor! Error eveniet, ipsam nostrum eaque laudantium placeat sed eos beatae sit minus id doloremque?"
        ]
    ];

    public static function all()
    {
        return collect(self::$menu_post);
    }

    
    public static function find($slug)
    {
        $menus=static::all();
        return $menus->firstWhere('slug',$slug);

    }
}
