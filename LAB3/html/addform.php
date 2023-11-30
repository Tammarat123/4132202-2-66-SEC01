<form >
    <label for="inp_id">ID</label>
    <input type="text" name="id" id="inp_id">
    <label for="inp_name">Name</label>
    <input type="text" name="name" id="inp_name">
    <label for="inp_province">Province</label>
    <input type="text" name="prov" id="inp_prov">
    <button type="submit">SAVE</button>
    <button type="reset">CANCLE</button>
</form>

<script>
    $("form").submit(function(){
        e.preventDefault();

        let fm = $(this);
        $.ajax({
            url : "/additemdb.php",
            method: "POST",
            data: fm.serialize(),
            success: function(){
                if(res == "error")
                    alert("Don't data into DB.");
                else
                    $("#div_item").load("/listitem.php");
            }
        });
    });
</script>