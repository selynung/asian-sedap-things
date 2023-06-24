$(function () {

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  var info = h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
  return info
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}

$('.clock').on('click', function(e){
	var info = startTime();
	var msg = "The time now is " + info;
	alert(msg);
});

$('.clock').mouseover(function() {
	$('.clock').css('cursor', 'pointer');
});

$('#sedap').mouseover(function(){
	$('#sedap h3').css('font-weight', 'bold');
	$('#sedap p').css('font-weight', 'bold');
});

$('#sedap').mouseout(function(){
	$('#sedap h3').css('font-weight', 'normal');
	$('#sedap p').css('font-weight', 'normal');
});

$('#about').mouseover(function(){
	$('#about h3').css('font-weight', 'bold');
	$('#about p').css('font-weight', 'bold');
});

$('#about').mouseout(function(){
	$('#about h3').css('font-weight', 'normal');
	$('#about p').css('font-weight', 'normal');
});

$('#dishes').mouseover(function(){
	$('#dishes h3').css('font-weight', 'bold');
	$('#dishes p').css('font-weight', 'bold');
});

$('#dishes').mouseout(function(){
	$('#dishes h3').css('font-weight', 'normal');
	$('#dishes p').css('font-weight', 'normal');
});

});