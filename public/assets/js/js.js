$(document).ready(function () {
    $('.table').DataTable({
        ordering: true,
        paging: true,
        searching: true,
        responsive: true,

    })

    $.ajax({
        url:'api/auth/ronnie',
        type: 'GET',
        success: function(response){
            var inv = response.easy
            if(response.success){
                console.log(inv)
                var body = $('#tablebody')
                body.empty()

                for (var i = 0; i < inv.length; i++) {
                    body.append(`<tr>
                        <td>${inv[i].inventory_name}</td>
                        <td>${inv[i].quantity}</td>
                        </tr>`)

                }

            }

        },
        error: function(xhr,status,error){
            console.error(xhr.responseText)
        }
    })

    // axios.get('api/auth/ronnie').then(function (response) {
    //     var inv = response.data.easy
    //     if (response.data.success) {
    //         console.log(inv)

    //         var body = $('#tablebody');
    //         body.empty()

    //         inv.forEach(function (item) {
    //             body.append(`<tr>
    //             <td>${item.inventory_name}</td>
    //             <td>${item.quantity}</td>
    //                 </tr>`)


    //         });

    //     }

    // }).catch(function (error) {
    //     console.error(error)
    // })

    fetch('api/auth/ronnie')
    .then(response => response.json())
    .then(data => {
        if(data.success){

            var inv = data.easy
            console.log(inv)

            var body = $('#tablebody');
            body.empty()
            let  index = 0;

            while(index < inv.length) {
                body.append(`<tr>
                <td>${inv[index].inventory_name}</td>
                <td>${inv[index].quantity}</td>
                    </tr>`)
                index ++;
                
            }


        }
    }).catch(function(error){
        console.error(error)
    })

})