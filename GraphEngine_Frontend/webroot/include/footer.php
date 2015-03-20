<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/sigma.min.js"></script>
<script language="JavaScript">

    function onStart(){
        $("form").hide();
    }
    $(document).ready(onStart());

   /* var menu=document.querySelector(".master")
    menu.addEventListener("click",disappear,false);*/

    $("li.master").find("ul").find("li").click(disappear);

    function disappear(e)
    {
        if (e.target !== e.currentTarget) {
            var li = $(this).attr("value");
            onStart();
            $('form[name="' + li + '"]').fadeIn();
        }
        e.stopPropagation();
    }

</script>

</body>
</html>
