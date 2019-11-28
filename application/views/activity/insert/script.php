<script>
    $(function (){
        var start = $( "#start_date");
        var end = $( "#end_date");

        start.datepicker({
            dateFormat: 'yy-mm-dd', 
        });

        start.change(function(){
            end.datepicker( "option", "minDate", getDate(start));
        });

        end.datepicker({
            dateFormat: 'yy-mm-dd'
        });

        end.change(function(){
            start.datepicker( "option", "maxDate", getDate(end));
        });

        function getDate(target){
            var date = target.val();
            if(!date) {
                date = null;
            }
            return date;
         }
    });
</script>