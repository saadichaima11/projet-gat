$(document).ready(() => {
    $('#search').keyup(() => {
        var text = ($('#search').val()).toLowerCase();
        if (text.length >= 1) {
            $.ajax({
                url: "search.php",
                method: "GET",
                data: { 'search': text },
                success: (res) => {
                    $('#data').empty();
                    $('#data').append(res);
                }
            });
        }
        else {
            $('#data').empty();
        }
    })
})