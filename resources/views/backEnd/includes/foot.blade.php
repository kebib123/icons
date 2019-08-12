<script type="text/javascript">
    var public_lang = "{{ trans('backLang.calendarLanguage') }}"; // this is a public var used in app.html.js to define path to js files
    var public_folder_path = "{{ URL::to('') }}"; // this is a public var used in app.html.js to define path to js files
</script>
<script src="{{ URL::to('backEnd/scripts/app.html.js') }}"></script>
{!! Helper::SaveVisitorInfo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") !!}

<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc');

</script>

<script src="{{url('js/select2.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#tags').select2();
        $('#cat').select2();
        $('#gen').select2();
        $('#age').select2();
        $('#race').select2();
        $('#hair').select2();
        $('#body').select2();
        $('#special').select2();
        $('#credits').select2();
        $('#models').select2();
        $('#trends').select2();
        $('#categories').select2();
        $('#styles').select2();
    });
</script>