$(function() {
    $('.planetNavigation').on('click', 'li:not(.activePButton)', function() {
        $(this).addClass('activePButton').siblings().removeClass('activePButton').closest('.planetContainer').find('.planet').hide().eq($(this).index()).show();
    });
});

$(document).ready(function() {
    $('.planetAnchorShow').click(function() {
        $(this).prev().animate({marginRight: '0'});
        $(this).next().css('display', 'block');
        $(this).css('display', 'none');
    });
    $('.planetAnchorClose').click(function() {
        $(this).siblings().not('.planetAnchorShow').animate({marginRight: '-50%'});
        $(this).prev().css('display', 'block');
        $(this).css('display', 'none');
    });

    $('.planetSContainer').click(function() {
        $(this).next().slideToggle('normal');
    });
});

$('.smallImg').click(function() {
    var imgPath = $(this).attr('src');
    var imgDesc = $(this).attr('alt');
    $('.imgDesc').text(imgDesc);
    $('.largeImg').attr('src', imgPath);
    $('.fullSizeImg').slideDown('normal');
});

$('.closeImg').click(function(){
    $('.fullSizeImg').slideUp('normal');
});

$('#navShowBtn').click(function () {
    $('.sideNavigation').animate({marginLeft: '0'});
    $('#navCloseBtn').css('display', 'block');
    $(this).css('display', 'none');
});

$('#navCloseBtn').click(function () {
    $('.sideNavigation').animate({marginLeft: '-10%'});
    $('#navShowBtn').css('display', 'block');
    $(this).css('display', 'none');
});
