<?php
namespace App\Models;

class Listing{
    public static function all(){
        return [
            [
                'id'=>1,
                'title'=>'listing 1',
                'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel'
            ],
            [
                'id'=>2,
                'title'=>'listing 2',
                'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel'
            ]
             ];
    }
    public static function find($id){
       $listings=self::all();

       foreach($listings as $listing){
        if($listing['id']==$id){
            return $listing;
        }
       }
    }
}