@extends('layouts.parent')
@section('title', 'Edit Product')
@section('content')
    <div class="row">
        <div class="col-12 rounded">
            <div class="card rounded">
                <div class="card-header bg-primary">
                    <h4>Product Details </h4>
                </div>
                <div class="card-body">


                    <form action="{{ route('dashboard.products.update, ['id=>$product->id']') }}" method="post">
                        <div class="form-row">
                            <div class="col-6">
                                <label for="name_en">Name(EN)</label>
                                <input type="text" name="name_en" id="name_en" value="{{ $product->name_en }}"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="col-6">
                                <label for="name_ar"> Name (AR) </label>
                                <input type="text" name="name_ar" value="{{ $product->name_ar }}" id="name_ar"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="col-4">
                                <label for="code"> Code </label>
                                <input type="number" name="code" value="{{ $product->code }}" id="code"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="col-4">
                                <label for="price"> Price </label>
                                <input type="number" name="price" value="{{ $product->price }}" id="price"
                                    class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            <div class="col-4">
                                <label for="quantity"> Quantity </label>
                                <input type="number" name="quantity" value="{{ $product->quantity }}" id="quantity"
                                    class="form-control" placeholder="" aria-describedby="helpId">>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="col-4">
                                <label for="status"> Status </label>
                                <select name="status" id="status" class="form-control">
                                    <option @selected($product->status == 1) value="1"> Active </option>
                                    <option @selected($product->status == 0) value="1"value="0"> Not Active </option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="brand_id"> Brands </label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                   @foreach ($brands as $brand)
                                   <option @selected($brand->id == $product->brand_id) value="{{$brand->id}}">{{$brand->name_en}} - {{$brand->name_ar}} </option>

                                   @endforeach
                                </select>
                            </div>

                            <div class="col-4">
                                <label for="subgategory_id"> Subcategories </label>
                                <select name="subgategory_id" id="subgategory_id" class="form-control">
                                    @foreach ($subcategories as $subcategory)
                                   <option @selected($subcategory->id == $product->subcategory_id) value="{{$subcategory->id}}">{{$subcategory->name_en}} - {{$subcategory->name_ar}} </option>

                                   @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-6">
                                <label for="descEn"> English Discreption </label>
                                <textarea name="descEn" id="descEn" cols="30" rows="10" class="form-control">{{$product->desc_en}}</textarea>
                            </div>

                            <div class="col-6">
                                <label for="descAr"> Arabic Discreption </label>
                                <textarea name="descAr" id="descAr" cols="30" rows="10" class="form-control">{{$product->desc_ar}}</textarea>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-3 my-5">
                                <img src="{{ asset("images/products/{$product->image}") }}" class="w-100"
                                    alt="{{ $product->name_en }}">
                                <input type="file" name="image" class="form-control" id="">

                            <div class="col-12 mmt-5">
                                <button class="btn btn-outline-primary btn-sm"> UPDATE </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>

@endsection
