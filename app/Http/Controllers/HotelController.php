<?php

namespace App\Http\Controllers;

use App\Filters\BathroomFilter;
use App\Filters\BedroomFilter;
use App\Filters\GarageFilter;
use App\Filters\NameFilter;
use App\Filters\PriceFilter;
use App\Filters\StoreysFilter;
use App\Http\Requests\SearchRequest;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pipeline\Pipeline;

class HotelController extends Controller
{

    public function search(SearchRequest $request){

        $model = app(Pipeline::class)
            ->send(House::query())
            ->through([
                NameFilter::class,
                PriceFilter::class,
                GarageFilter::class,
                StoreysFilter::class,
                BedroomFilter::class,
                BathroomFilter::class
            ])
            ->thenReturn()
            ->paginate(10);

        return response()->json($model, Response::HTTP_OK);
    }

}
