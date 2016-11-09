$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

/*form saldo awal*/
var url="";

function clear(){
	$("#tanggal_mastersaldo").val('');
	$("#saldo_mastersaldo").val('');
	$("#ket_mastersaldo").val('');
}

function add_mastersaldo(){
	url="php/cek_form.php?action=save";
	$('#modal_mastersaldo').modal('show');
}

$( "#form_mastersaldo" ).submit(function( event ) {
	event.preventDefault();
	$.post({
	      url: url,
	      dataType: 'text',
	      type: 'post',
	      contentType: 'application/x-www-form-urlencoded',
	      data: $(this).serialize(),
	      success: function( data, textStatus, jQxhr ){
	      	console.log(this.contentType);
	      	console.log(url);
	      },
	      error: function( jqXhr, textStatus, errorThrown ){
	         console.log(jqXhr);
	         console.log(textStatus);
	         console.log(errorThrown);
	         console.log(this.data);
	         console.log(url);
	      }
	      
	});

});


function edit_mastersaldo(id){
	url="php/cek_form.php?action=update&id="+id;

	var tgl = $("#tanggal-"+id).text();
	var saldoawal = $("#saldoawal_non-"+id).text();
	var ket = $("#ket-"+id).text();
	//console.log(tgl);
	$("#tanggal_mastersaldo").val(tgl);
	$("#saldo_mastersaldo").val(saldoawal);
	$("#ket_mastersaldo").val(ket);
	$('#modal_mastersaldo').modal('show');
}
/*akhir*/