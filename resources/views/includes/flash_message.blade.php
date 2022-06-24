<script src="{{ asset('js/notify-metro.js') }}"></script>

@if (Session::has('flash_message')) 
    <div id="dom-flash" style="display: none;">{{ Session::get('flash_message') }}</div>
@endif

<script>
function flash_function() {
    var div = document.getElementById("dom-flash");
    var myData = div.textContent;
    var res = myData.split("|");
    
    $.Notification.notify(
        res[0],
        'top right',
        'SiNi Notification', 
        res[1]
    );
}
</script>

@if (Session::has('flash_message'))   
    <script type="text/javascript"> flash_function(); </script>
    {{ Session::forget('flash_message') }}
@endif
