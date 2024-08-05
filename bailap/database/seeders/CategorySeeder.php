<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo dữ liệu mẫu cho các thể loại
        $categories = [
            ['name' => 'truyện tranh'],
            ['name' => 'cổ tích'],
            ['name' => 'họt hình'],
            ['name' => 'truyền thuyết'],
            ['name' => 'cổ trang'],
        ];

        foreach ($categories as $categoryData) {
            $category = Category::create($categoryData);
        }

        // Lấy các thể loại vừa tạo
        $categories = Category::all();

        // Lấy tất cả các sách
        $books = Book::all();

        // Gán thể loại cho các sách
        foreach ($books as $book) {
            $book->categories()->attach(
                $categories->random(2)->pluck('id')->toArray()
            );
        }
    }
}
