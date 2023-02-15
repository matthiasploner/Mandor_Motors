<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Bootstrap Datepicker CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>





    <script type="text/javascript">
        var availableDates = ["1-1-2023","3-1-2019","4-1-2019"];

        $(function()
        {
            $('#datepicker').datepicker({ beforeShowDay:
                    function(dt)
                    {
                        return [available(dt), "" ];
                    }
                , changeMonth: true, changeYear: false});
        });



        function available(date) {
            dmy = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
            if ($.inArray(dmy, availableDates) != -1) {
                return true;
            } else {
                return false;
            }
        }


    </script>



    <form id="form1" runat="server">
        date: <input type='text' id='datepicker' />
    </form>
    </body>


</html>


<?php

?>
