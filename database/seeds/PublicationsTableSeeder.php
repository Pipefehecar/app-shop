<?php

use Illuminate\Database\Seeder;
use App\Publication;
use App\Type;
use App\PublicationImage;
class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(Category::class, 5)->create(); 
		factory(Product::class, 100)->create(); 
		factory(ProductImage::class, 200)->create();        */
        $types = factory(Type::class,2)->create();
        $types->each(function($type){
            $publications = factory(Publication::class,20)->make();
            $type->publications()->saveMany($publications);

            $publications->each(function($p){
                $images = factory(PublicationImage::class,5)->make();
                $p->images()->saveMany($images);
            });
        });
    }
}
