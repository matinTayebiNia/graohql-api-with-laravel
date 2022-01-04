<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Triat\StoreImage;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;


class BookController extends Controller
{
    use StoreImage;

    public function __construct()
    {

        $this->middleware('can:create-user')->only('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @param $_
     * @param $args
     * @return void
     */
    public function index($_, $args)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $_
     * @param array $args
     * @return void
     * @throws Exception
     */
    public function store($_, array $args)
    {
        try {
            $image = $this->storeImg($args['image']);
            Book::create([
                'user_id' => $args['user_id'],
                'title' => $args['title'],
                'image' => $image,
                'description' => $args['description'],
                'link' => $args['link'],
                'featured' => $args['featured'],
                'category_id' => $args['category_id']
            ]);
        } catch (Exception $e) {
            throw $e;
        }
    }


    /**
     * Display the specified resource.
     *
     * @param $_
     * @param $args
     * @return array
     */
    public function show($_, array $args)
    {

        $book = Book::query();
        $book = $book->where('user_id', $args['user_id'])->paginate($args['first'], '*', null, $args['page']);
        return [
            'data' => $book,
            'paginationInfo' => [
                'currentPage' => $book->currentPage(),
                'perPage' => $book->perPage(),
                'total' => $book->total(),
            ]
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Book $book
     * @return Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $_
     * @param array $args
     * @return void
     * @throws Exception
     */
    public function update($_, $args)
    {
        try {
            if ($this->authorize('edit-book')->allowed()) {
                $book = Book::find($args['id']);
                if (!$args['image']) {
                    $book->update([
                        'user_id' => $args['user_id'],
                        'title' => $args['title'],
                        'description' => $args['description'],
                        'link' => $args['link'],
                        'featured' => $args['featured'],
                        'category_id' => $args['category_id']
                    ]);
                    return $book;
                }
                if (File::exists(public_path($book->image))) {
                    File::delete(public_path($book->image));
                }
                $image = $this->storeImg($args['image']);
                $book->update([
                    'user_id' => $args['user_id'],
                    'title' => $args['title'],
                    'description' => $args['description'],
                    'link' => $args['link'],
                    'featured' => $args['featured'],
                    'category_id' => $args['category_id'],
                    'image' => $image
                ]);
                return $book;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $_
     * @param $args
     * @return Response
     */
    public function destroy($_, $args)
    {
        $book = Book::find($args['id']);

        try {
            if (File::exists(public_path($book->image))) {
                File::delete(public_path($book->image));
            }
            $book->delete();
            return $book;
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}
