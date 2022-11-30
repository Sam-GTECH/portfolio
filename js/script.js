$(document).ready(function() {
    $('.carousel').carousel({
        fullWidth: false,
        indicators: false,
        duration: 100,
        onCycleTo: function(data) {
            if ($($(data).children('img')[0]).attr('src') == "img/p1.png") {
                $('.btn').attr('href', 'projects/why-play-undertale.html');
            }
            else {
                if ($($(data).children('img')[0]).attr('src') == "img/p2.png") {
                    $('.btn').attr('href', 'projects/frozen-heart.html');
                }
                else { $('.btn').attr('href', 'projects/shmeup.html'); }
            }
        }
    });
    $('#cp1').click(function() {
        $('.carousel').carousel('set', 0);
    });
    $('#cp2').click(function() {
        $('.carousel').carousel('set', 1);
    });
    $('#cp3').click(function() {
        $('.carousel').carousel('set', 2);
    });
    $('.parallax').parallax();

    $('.start .row img').css("opacity", 1);

    $('.modal').modal();

    $('.sidenav').sidenav();
});



$(".bad-apple").click(function() {
    console.log("The video started");
    $("#div-easter").addClass("easter-egg-active");
    $("#div-easter").removeClass("easter-egg-inactive");
    $("#everything").css("display", "none");
    $("body").addClass("black");
    $("#easter_egg").get(0).play();
    $("title").html("Bad Apple")
})

$("#form-simbel").click(function() {
    console.log("hello");
    console.log($(".modal-content"));
    $("#contact-form h4").text("Contact Simbel");
    $(".simbelOnly").removeAttr("disabled", "disabled");
    $(".deadlyOnly").attr("disabled", "disabled");
})

$("#form-deadly").click(function() {
    console.log("hello")
    console.log($(".modal-content"))
    $("#contact-form h4").text("Contact Deadly");
    $(".simbelOnly").attr("disabled", "disabled");
    $(".deadlyOnly").removeAttr("disabled", "disabled");
})

$('.footer-easter').click(function() {
    $('.footer-easter').text('I am serious, stop clicking at me.');
    $('.footer-easter').addClass(' fe-step2');
    $('.footer-easter').removeClass('footer-easter');
    $('.fe-step2').click(function() {
        $('.fe-step2').text('I mean it, let me be serious.');
        $('.fe-step2').addClass('fe-step3');
        $('.fe-step2').removeClass('fe-step2');
        $('.fe-step3').click(function() {
            $('.fe-step3').text('LET ME DOING MY PROFFESIONAL JOB AS THE PROFESSIONAL ITEM THAT I AM OR YOU WILL PROFFESIONALLY REGRET IT !');
            $('.fe-step3').addClass('fe-step4');
            $('.fe-step2').removeClass('fe-step3');
            $('.fe-step4').click(function() {
                window.location.href = 'https://www.youtube.com/watch?v=ET3fhjcpZgY'
            })
        })
    })
})

$('.trolldl0').click(function() {
    $('.trolldl0').addClass('trolldl1');
    $('.trolldl0').removeClass('trolldl0');
    $('.trolldl1').click(function() {
        $('.trolldl1').addClass('trolldl2');
        $('.trolldl1').removeClass('trolldl1');
        $('.trolldl2').click(function() {
            $('.trolldl2').addClass('trolldl3');
            $('.trolldl2').removeClass('trolldl2');
            $('.trolldl3').click(function() {
                $('.trolldl3').addClass('hide')
            })
        })
    })
})

new WOW.init();