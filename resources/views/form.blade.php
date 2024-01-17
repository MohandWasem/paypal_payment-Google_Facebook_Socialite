<form action="{{route('vali')}}" method="post" enctype="multipart/form-data">
    @csrf
   <div>
   <input type="email" name="email" placeholder="email">
   @error('email')<span style="color:red;">{{$message}}</span>@enderror
   </div>
   
    <div>
    <input type="text" name="name" placeholder="name">
    @error('name')<span style="color:red;">{{$message}}</span>@enderror
    </div>
   
<div>
    <input type="password" name="password" placeholder="password">
    @error('password')<span style="color:red;">{{$message}}</span>@enderror
</div>
<div>
    <input type="file" name="img">
    @error('img')<span style="color:red;">{{$message}}</span>@enderror

</div>

    <input type="submit" value="add">
</form>