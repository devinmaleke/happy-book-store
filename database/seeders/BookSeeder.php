<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        for($k = 0;$k<2;$k++){
        for($i=1; $i<=16; $i++){
            $book = Book::create([
                'category_id' => $categories[$k]["id"],
                'title' => $categories[$k]["category"]. " ".$i


            ]);
            if(!is_null($book)){
             Detail::create([
                'book_id' => $book->id,
                'author' => 'Someone Who Cares',
                'publisher' => 'publisher'.$categories[$k]["id"].$i,
                'year' => 2019,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas lectus ut imperdiet suscipit. Quisque hendrerit, mauris sed luctus mollis, nisi nibh consequat ligula, a dapibus dolor risus vel enim. Sed vel sapien tortor. Sed rhoncus molestie enim at congue. Nulla ac massa diam. Morbi metus nibh, luctus ac luctus eget, vehicula eget nisi. In quis eros fermentum, accumsan arcu et, malesuada dolor. Aenean hendrerit sapien eu magna imperdiet pellentesque.'

             ]);
            }
        }
    }

    }
}
