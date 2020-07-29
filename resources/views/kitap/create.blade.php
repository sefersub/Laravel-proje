<form enctype="multipart/form-data" action="{{route('kitap.ekle.post')}}" method="POST">
    {{csrf_field()}}
    Kitap Resmi:<br>
    <input type="file" name="image">
    Kitap ismi:<br>
    <input type="text" name="isim" value="{{old('isim')}}">
    <br>
    <button>Ekle</button>
</form>
