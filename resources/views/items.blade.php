<div>
@extends('layouts.app')

@section('content')

<div class="container">


  <div class="card">
    <div class="card-body">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <form action="{{route('saved')}}" method="post">
                    @csrf
                    <label for="itemname" class="p-2">ادخل اسم العنصر</label>
                    <input type="text" class="form-control form-control-sm " name="itemname" id="itemname">


                    <label for="price" class="p-2">ادخل سعر العنصر</label>
                    <input type="number" class="form-control form-control-sm " name="price" id="price">


                    <label for="qty" class="p-2">ادخل كمية العنصر</label>
                    <input type="number" class="form-control form-control-sm " name="qty" id="qty">

                    <label for="color" class="p-2">ادخل لون العنصر</label>
                    <input type="text" class="form-control form-control-sm " name="color" id="color">

                    <label for="image" class="p-2">ادخل صورة العنصر</label>
                    <input type="text" class="form-control form-control-sm " name="image" id="image">

                    <label for="itemgroupno" class="p-2">ادخل رقم المجموعة</label>
                <input type="text" class="form-control form-control-sm" name="itemgroupno" id="itemgroupno">

                   
                    <div class="row">
    
                    <div class="text-center">
                    <button class="btn btn-primary mt-2" type="submit" onclick="showmessage()">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

  <div class="card mt-3">
    <div class="card-body">
       <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>رقم العنصر</th>
                <th>اسم  العنصر</th>
                <th>سعر العنصر</th>
                <th>كمية العنصر</th>
                <th>لون العنصر</th>
                <th>صورة العنصر</th>
                <th>رقم المجموعة</th>
       
                <th colspan="2">أجراء</tr>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $row)
              
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->itemname}}</td>
                <td>{{$row->price}}</td>
                <td>{{$row->qty}}</td>
                <td>{{$row->color}}</td>
                <td>{{$row->image}}</td>
                <td>{{$row->itemgroupno}}</td>
                <td><a href="{{ route('delet',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a> </td>
                <td><a href="{{route('edited',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>


            </tr>

            @endforeach
       </table>
    </div>
  </div>


</div>



<script >
    function showmessage()
    {
        Swal.fire({
  position: "top-end",
  icon: "success",
  title: "تم الحفظ بنجاح",
  showConfirmButton: false,
  timer: 1500
});

    }
    
</script>


@endsection
</div>
