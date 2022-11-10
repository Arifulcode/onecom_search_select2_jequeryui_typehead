<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Select2 JS Autocomplete Search </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Laravel 9 Select2 JS Autocomplete Search </h1>
    <select class="form-control" id="search" style="width:500px;" name="user_id"></select>
</div>

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";

    $('#search').select2({
        placeholder: 'Select an user',
        ajax: {
          url: path,
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.name,
                        id: item.id
                    }
                })
            };
          },
          cache: true
        }
      });

</script>

</body>
</html>
