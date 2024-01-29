<div>
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success">تعديل بيانات العناصرف</h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{route('updated')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$items->id}}">
                        <label for="x1">اسم العنصر</label>
                        <input type="text" name="itemname" id="x1" value="{{$items->itemname}}">

                        <label for="x1">سعر العنصر</label>
                        <input type="text" name="price" id="x1" value="{{$items->price}}">

                        <label for="x1">كمية العنصر</label>
                        <input type="text" name="qty" id="x1" value="{{$items->qty}}">


                        <label for="x1">لون العنصر</label>
                        <input type="text" name="color" id="x1" value="{{$items->color}}">


                        <label for="x1">لون العنصر</label>
                        <input type="text" name="image" id="x1" value="{{$items->image}}">

                        

                        <div class="text-center">
                          <button class="btn btn-primary mt-2" type="submit" >حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
</div>
