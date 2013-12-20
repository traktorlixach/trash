<a href="#tab5" onclick="choice_tab(this)">Объект на карте</a>



<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script>
    function choice_tab(tab) {
        console.log('test');
        var id_tab = $(tab).attr('id');
        alert(id_tab);
    }
</script>
