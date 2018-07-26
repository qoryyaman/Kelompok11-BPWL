function tampilkan(halaman){
	$('#loader').fadeIn('slow');
	$.ajax({
		//Alamat url harap disesuaikan dengan lokasi script pada komputer anda
		url	     : 'http://localhost/tutorial/content.php',
		type     : 'POST',
		dataType : 'html',
		data     : 'content='+halaman,
		success  : function(jawaban){
			$('#content #right').html(jawaban);
		},
	})
}