

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $(".read").on('click',function(e){
        e.preventDefault();
        var id= $(this).data("id");
        $.ajax({
            method: "GET",
            url: "get_data.php",
            data: { id: id }
            })
            .done(function( data ) {
                data = JSON.parse(data);
                $(".event_name").text(data.event_name);
                $(".event_date").text(data.event_date);
                $(".event_place").text(data.event_venue);
                $(".event_desc").text(data.event_desc);
            });

       $("#exampleModal").modal('show');
    });
</script>
</body>
</html>
