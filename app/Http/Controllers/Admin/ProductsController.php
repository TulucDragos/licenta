<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\DestroyProduct;
use App\Http\Requests\Admin\Product\IndexProduct;
use App\Http\Requests\Admin\Product\StoreProduct;
use App\Http\Requests\Admin\Product\UpdateProduct;
use App\Models\Product;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexProduct $request
     * @return Response|array
     */
    public function index(IndexProduct $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Product::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'imagePath', 'title', 'price'],

            // set columns to searchIn
            ['id', 'imagePath', 'title', 'description']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.product.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.product.create');

        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProduct $request
     * @return Response|array
     */
    public function store(StoreProduct $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Product
        $product = Product::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/products'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @throws AuthorizationException
     * @return void
     */
    public function show(Product $product)
    {
        $this->authorize('admin.product.show', $product);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Product $product)
    {
        $this->authorize('admin.product.edit', $product);


        return view('admin.product.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProduct $request
     * @param Product $product
     * @return Response|array
     */
    public function update(UpdateProduct $request, Product $product)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Product
        $product->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/products'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyProduct $request
     * @param Product $product
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyProduct $request, Product $product)
    {
        $product->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyProduct $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyProduct $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Product::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
