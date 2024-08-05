<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo dữ liệu mẫu cho các tác giả
        $authors = [
            ['name' => 'Author 1'],
            ['name' => 'Author 2'],
            ['name' => 'Author 3'],
        ];

        // Thêm các tác giả vào cơ sở dữ liệu và tạo sách cho mỗi tác giả
        foreach ($authors as $authorData) {
            $author = Author::create($authorData);

            // Tạo dữ liệu mẫu cho các sách
            $books = [
                ['title' => 'Book 1 by ' . $author->name, 'author_id' => $author->id],
                ['title' => 'Book 2 by ' . $author->name, 'author_id' => $author->id],
                ['title' => 'Book 3 by ' . $author->name, 'author_id' => $author->id],
            ];

            foreach ($books as $bookData) {
                Book::create($bookData);
            }
        }
    }
}
