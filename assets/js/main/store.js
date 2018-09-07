$(document).ready(function(){
			
			//Store Survey
			$('#btn_save').on('click', function(){

				//Deklarasi dan inisiasi form ke javascript
				var client_company				= $('#client_company').val();
				var client_contact				= $('#client_contact').val();
				var nature_of_work				= $('#nature_of_work').val();
				var taxand_countries_involved	= $('#taxand_countries_involved').val();

				//Proses ajax
				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('survey/mm_store')?>",
					dataType : "JSON",
					data : {
						client_company:client_company, 
						client_contact:client_contact, 
						nature_of_work:nature_of_work,
						taxand_countries_involved:taxand_countries_involved
					},
					success: function(data){
						$('[name="client_company"]').val("");
						$('[name="client_contact"]').val("");
						$('[name="nature_of_work"]').val("");
						$('[name="taxand_countries_involved"]').val("");
						$('[name="price"]').val("");
						console.log("Berhasil disimpan");
					}
				});

				return false;
			});
		});