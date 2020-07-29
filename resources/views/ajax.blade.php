<html>

<head>
    <title>

    </title>
</head>

<body>
<input type="text" id="name" placeholder="adınız">
<button id="gonder">Gönder</button>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#gonder').click(function () {
                $.ajax({
                    url:'{{route('ajax.post')}}',
                    headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
                    method:'POST',
                    success:function (result) {
                        console.log(result);
                    }
                })
            })
        });
    </script>
</body>
</html>
