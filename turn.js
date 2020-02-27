


/*
$btnsuivant = document.getElementsByClassName('btn')
$img = document.getElementsByClassName('img')
$(document).ready(function () {
    $('.btn').click(function(e) {
        console.log('hhhh')
        $('.img').attr("src", "images/<?=  $datas[1]->imgnom  ?>");
    })
})

*/

var actualNumber = 0

$(document).ready(function () {
     
    $(document).on('click','.btn',function (e) {
        e.preventDefault() 
        actualNumber = actualNumber + 1; 
        var test = actualNumber
         $.post("index.php", {
             incresedNumber : test 
         },
         function(data, status) {
             $('html').html(data)
         })
        
    })
})


   /*
    $.ajax({
        url: 'animals.json',
        method: 'GET',
        dataType: 'json',
        success: function (datas) {
            for(var i = 0 ; i < datas.animals.length ; i++){
                $('.result').append('Name:  '+ datas.animals[i].prenom + '<br>')
            } 
            for(const element in datas.animals) {
                console.log(datas.animals[element].prenom)
            }
        }
    })
    */
