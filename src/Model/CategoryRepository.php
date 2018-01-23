<?php

namespace Model;

class CategoryRepository
{
    public static function findAll()
    {
        $root = new Category('Root', true);
        $root
            ->addChild(
                (new Category('Hardware'))
                    ->addChild(
                        (new Category('Computer'))
                            ->addChild(new Category('Motherboard'))
                            ->addChild(new Category('Disk'))
                            ->addChild(new Category('Memory'))
                    )
            )
            ->addChild((new Category('Software'))
                ->addChild(
                    (new Category('OS'))
                        ->addChild(
                            (new Category('Windows'))
                                ->addChild(new Category('Server 2008'))
                                ->addChild(new Category('Server 2010'))
                        )
                        ->addChild(
                            (new Category('Linux'))
                                ->addChild(new Category('Debian'))
                        )
                )
                ->addChild(
                    (new Category('Database'))
                        ->addChild(
                            (new Category('MS SQL Server'))
                        )
                        ->addChild(
                            (new Category('Oracle'))
                                ->addChild(new Category('Oracle Database'))
                                ->addChild(new Category('MySQL'))
                        )
                )
            )
        ;

        return $root;
    }
}
