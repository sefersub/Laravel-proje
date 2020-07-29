<style>

    .password
    {
        border:solid 1px #ff0000;
    }
</style>

{!! Form::open(['url'=>'kitap/ekle','method'=>'POST']) !!}
{!! Form::label('name','Kitap İsmi') !!}
{!! Form::text('name','sefersubasii@gmail.com',['class'=>'password']) !!}
{!! Form::close() !!}
