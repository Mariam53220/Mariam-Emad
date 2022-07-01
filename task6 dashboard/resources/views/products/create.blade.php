@extends('layouts.parent')
@section('title', 'Create Products')
@section('content')
    <div class="row">
        <div class="col-12 rounded">
            <div class="card rounded">
                <div class="card-header bg-primary">
                    <h4>Product Details </h4>
                </div>
                <div class="card-body">


                    <form action="{{ route('dashboard.products.store') }}" enctype="multipart/form-data"  method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <label for="name_en"> Name (EN) </label>
                                <input type="text" name="name_en" id="name_en" value="{{ old('name_en') }}" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                @error('name_en')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="name_ar"> Name (AR) </label>
                                <input type="text" name="name_ar" id="name_ar" value="{{ old('name_ar') }}" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                                @error('name_ar')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="code"> Code </label>
                                <input type="number" name="code" id="code" value="{{ old('code') }}" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                                @error('code')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="price"> Price </label>
                                <input type="number" name="price" id="price" value="{{ old('price') }}" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                @error('price')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="quantity"> Quantity </label>
                                <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                                    @error('quantity')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                     @enderror
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="col-4">
                                <label for="status"> Status </label>
                                <select name="status" id="status" class="form-control">
                                    <option @selected(old ('status') == 1) value="1"> Active </option>
                                    <option  @selected(old ('status') == 0) value="0"> Not Active </option>
                                </select>

                                @error('status')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="brand_id"> Brands </label>
                                <select name="brand_id" id="brand_id" value="{{ old('brand_id') }}" class="form-control">
                                    @foreach ($brands as $brand)
                                        <option  @selected(old ('brand_id') == $brand->id  ) value="{{ $brand->id }}">{{ $brand->name_en }} - {{ $brand->name_ar }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-4">
                                <label for="subgategory_id"> Subcategories </label>
                                <select name="subgategory_id" id="subgategory_id" value="{{ old('subgategory_id') }}" class="form-control">
                                    @foreach ($subcategories as $subcategory)
                                        <option @selected(old ('subcategory_id') == $subcategory->id) value="{{ $subcategory->id }}">{{ $subcategory->name_en }} -
                                            {{ $subcategory->name_ar }} </option>
                                    @endforeach
                                </select>
                                @error('subcategory_id')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-6">
                                <label for="descEn"> English Discreption </label>
                                <textarea name="descEn" id="descEn"cols="30" rows="10" class="form-control">{{ old('descEn') }}</textarea>
                                @error('descEn')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="descAr"> Arabic Discreption </label>
                                <textarea name="descAr" id="descAr" cols="30" rows="10" class="form-control"> {{ old('descAr') }} </textarea>
                                @error('descAr')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-12">
                                <input type="file" name="image" class="form-control" id="">
                                @error('image')
                                    <div class="alert alert-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-12 mmt-5">
                                <button class="btn btn-outline-primary btn-sm"> Create Product</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>

@endsection
