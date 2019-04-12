<?php

/*
 * This file is part of the League\Fractal package.
 *
 * (c) Phil Sturgeon <me@philsturgeon.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Serializer;

use League\Fractal\Pagination\PaginatorInterface;
use League\Fractal\Serializer\DataArraySerializer;

class AppArraySerializer extends DataArraySerializer
{
    /**
     * Serialize a collection.
     *
     * @param string $resourceKey
     * @param array $data
     *
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return ['data' => $data];
    }

    /**
     * Serialize an item.
     *
     * @param string $resourceKey
     * @param array $data
     *
     * @return array
     */
    public function item($resourceKey, array $data)
    {
        return ['data' => $data];
    }

    /**
     * Serialize null resource.
     *
     * @return array
     */
    public function null()
    {
        return ['data' => []];
    }

    public function paginator(PaginatorInterface $paginator)
    {
        return [
            'pagination' => [
                'current_page'      => $paginator->getCurrentPage(),
                'per_page'          => $paginator->getPerPage(),
                'total'             => $paginator->getTotal(),
                'html'              => $paginator->getPaginator()->links(),
                'showing_entities'  => $this->showing_entities($paginator),
            ]
        ];
    }

    /**
     * @param array $meta
     * @return array
     */
    public function meta(array $meta)
    {
        $response = parent::meta($meta);
        if(empty($response)) {
            return [];
        }
        return ['pagination' => $response['meta']['pagination']];
    }

    /**
     * return text showing entites
     *
     * @param PaginatorInterface $paginator
     */
    Public function  showing_entities(PaginatorInterface $paginator)
    {
        $text = "";
        $total_page = ceil($paginator->getTotal() / $paginator->getPerPage());
        if($total_page > 1)
        {
            $end_page_entity = $paginator->getCurrentPage() * $paginator->getPerPage();

            $start_page_entity = $end_page_entity - ($paginator->getPerPage() - 1);

            $end_page_entity = $paginator->getLastPage() == $paginator->getCurrentPage() ? $paginator->getTotal() : $end_page_entity;

            $text = "Showing " . $start_page_entity . " to " . $end_page_entity . " of " . $paginator->getTotal() ." entries";
        }

        return $text;
    }

}
