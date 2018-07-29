// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
        $('#models').hide();

		$('#interaction').hide();
		$('#oneDescription').hide();
		$('#twoDescription').hide(); 
		$('#threeDescription').hide();
        $('#fourDescription').hide();

        $('#History1').show();
        $('#History2').hide();
        $('#History3').hide();
        $('#History4').hide();

        $('#Gallery1').show();
        $('#Gallery2').hide();



		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
            $('#models').hide();

			$('#interaction').hide();
			$('#oneDescription').hide();
			$('#twoDescription').hide(); 
			$('#threeDescription').hide();
            $('#fourDescription').hide();

            $('#History1').show();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').hide();

            $('#Gallery1').show();
            $('#Gallery2').hide();
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
            $('#models').hide();

			$('#interaction').hide();
			$('#oneDescription').hide();
			$('#twoDescription').hide(); 
			$('#pepperDescription').hide();
            $('#fourDescription').hide();

            $('#History1').hide();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').hide();

            $('#Gallery1').hide();
            $('#Gallery2').hide();
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
            $('#models').show();

			$('#interaction').show(); 
			$('#oneDescription').show();
			$('#twoDescription').hide(); 
			$('#threeDescription').hide(); 
            $('#fourDescription').hide(); 

            $('#History1').hide();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').hide();

            $('#Gallery1').hide();
            $('#Gallery2').hide();
        });

        $('#navHistory1').click(function () {
            $('#interaction').hide()
            $('#oneDescription').hide()
            $('#twoDescription').hide();
            $('#threeDescription').hide();
            $('#fourDescription').hide();

            $('#History1').show();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').hide();

        });

        $('#navHistory2').click(function () {
            $('#interaction').hide()
            $('#oneDescription').hide()
            $('#twoDescription').hide();
            $('#threeDescription').hide();
            $('#fourDescription').hide();

            $('#History1').hide();
            $('#History2').show();
            $('#History3').hide();
            $('#History4').hide();

  
        });

        $('#navHistory3').click(function () {
            $('#interaction').hide()
            $('#oneDescription').hide()
            $('#twoDescription').hide();
            $('#threeDescription').hide();
            $('#fourDescription').hide();

            $('#History1').hide();
            $('#History2').hide();
            $('#History3').show();
            $('#History4').hide();

        });

        $('#navHistory4').click(function () {
            $('#interaction').hide()
            $('#oneDescription').hide()
            $('#twoDescription').hide();
            $('#threeDescription').hide();
            $('#fourDescription').hide();

            $('#History1').hide();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').show();


        });

        $('#navGallery1').click(function () {
            $('#interaction').hide()
            $('#oneDescription').hide()
            $('#twoDescription').hide();
            $('#threeDescription').hide();
            $('#fourDescription').hide();

            $('#Gallery1').show();
            $('#Gallery2').hide();


        });

        $('#navGallery2').click(function () {
            $('#interaction').hide()
            $('#oneDescription').hide()
            $('#twoDescription').hide();
            $('#threeDescription').hide();
            $('#fourDescription').hide();

            $('#Gallery1').hide();
            $('#Gallery2').show();
        });
	}

	function selectModel() {

		$('#navOne').click(function(){
			$('#one').show();
			$('#two').hide();
			$('#three').hide();
            $('#four').hide();

			$('#interaction').show(); 
			$('#oneDescription').show();
			$('#twoDescription').hide(); 
			$('#threeDescription').hide();
            $('#fourDescription').hide(); 

            $('#History1').hide();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').hide();
           
            $('#Gallery1').hide();
            $('#Gallery2').hide();
		});

		$('#navTwo').click(function(){
			$('#one').hide();
			$('#two').show();
			$('#three').hide();
            $('#four').hide();

			$('#interaction').show(); 
			$('#oneDescription').hide();
			$('#twoDescription').show();
			$('#threeDescription').hide();
            $('#fourDescription').hide(); 

            $('#History1').hide();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').hide();

            $('#Gallery1').hide();
            $('#Gallery2').hide();
		});

		$('#navThree').click(function(){
			$('#one').hide();
			$('#two').hide();
			$('#three').show();
            $('#four').hide();

			$('#interaction').show(); 
			$('#oneDescription').hide();
			$('#twoDescription').hide(); 
			$('#threeDescription').show(); 	
            $('#fourDescription').hide();

            $('#History1').hide();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').hide();

            $('#Gallery1').hide();
            $('#Gallery2').hide();
		});

		$('#navFour').click(function(){
			$('#one').hide();
			$('#two').hide();
			$('#three').hide();
            $('#four').show();

			$('#interaction').show(); 
			$('#oneDescription').hide();
			$('#twoDescription').hide(); 
			$('#threeDescription').hide();
            $('#fourDescription').show();  	   

            $('#History1').hide();
            $('#History2').hide();
            $('#History3').hide();
            $('#History4').hide();

            $('#Gallery1').hide();
            $('#Gallery2').hide();
		});
	}

});
