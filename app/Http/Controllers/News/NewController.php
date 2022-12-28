<?php

namespace App\Http\Controllers\News;
use App\Models\News\News;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class NewController extends Controller
{
    /**
     * Получает список товаров.
     * @return array
     */
    public function list()
    {
        // SELECT * FROM products ORDER BY price DESC LIMIT 4
        return News::query()
            ->limit(6)
            ->get();
    }

    /**
     * Получает карточку товара по ID.
     * @param $id
     * @return array
     */
    public function info($id)
    {
        $news = News::query()
            ->where('id', $id)
            ->first();

        if ($news === null) {
            throw new NotFoundHttpException('Пост не найден.');
        }

        return $news;
    }
}
