// JavaScript Document
$(document).ready(function () {

    //AJAX service request to get the main text data from the json data store
    $.getJSON('./model/data.json', function (jsonObj) {
        console.log(jsonObj);

        //BLANK
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        //Load 'Ancient' history
        $('#title_history1').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
        $('#subTitle_history1').html('<h7>' + jsonObj.pageTextData[1].subTitle + '</h7>');
        $('#description_history1').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

        //Blank
        $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '<h2>');
        $('#subTitle_centre').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
        $('#description_centre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

        //Blank
        $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '<h2>');
        $('#subTitle_right').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>');
        $('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>');

        //Get the text data for the first model
        $('#x3dModelTitle_1').html('<h8>' + jsonObj.pageTextData[4].x3dModelTitle + '</h8>');
        $('#x3dCreationMethod_1').html('<p>' + jsonObj.pageTextData[4].x3dCreationMethod + '<p>');
        $('#title_1').html('<h10>' + jsonObj.pageTextData[4].title + '</h10>');
        $('#date_1').html('<h9>' + jsonObj.pageTextData[4].date + '</h9>');
        $('#dynasty_1').html('<h9>' + jsonObj.pageTextData[4].dynasty + '</h9>');
        $('#medium_1').html('<h9>' + jsonObj.pageTextData[4].medium + '</h9>');
        $('#dimensions_1').html('<h9>' + jsonObj.pageTextData[4].dimensions + '</h9>');

        //Get the text data for the second model
        $('#x3dModelTitle_2').html('<h8>' + jsonObj.pageTextData[5].x3dModelTitle + '</h8>');
        $('#x3dCreationMethod_2').html('<p>' + jsonObj.pageTextData[5].x3dCreationMethod + '<p>');
        $('#title_2').html('<h10>' + jsonObj.pageTextData[5].title + '</h10>');
        $('#date_2').html('<h9>' + jsonObj.pageTextData[5].date + '</h9>');
        $('#dynasty_2').html('<h9>' + jsonObj.pageTextData[5].dynasty + '</h9>');
        $('#medium_2').html('<h9>' + jsonObj.pageTextData[5].medium + '</h9>');
        $('#dimensions_2').html('<h9>' + jsonObj.pageTextData[5].dimensions + '</h9>');

        //Get the text data for the third model
        $('#x3dModelTitle_3').html('<h8>' + jsonObj.pageTextData[6].x3dModelTitle + '</h8>');
        $('#x3dCreationMethod_3').html('<p>' + jsonObj.pageTextData[6].x3dCreationMethod + '<p>');
        $('#title_3').html('<h10>' + jsonObj.pageTextData[6].title + '</h10>');
        $('#date_3').html('<h9>' + jsonObj.pageTextData[6].date + '</h9>');
        $('#dynasty_3').html('<h9>' + jsonObj.pageTextData[6].dynasty + '</h9>');
        $('#medium_3').html('<h9>' + jsonObj.pageTextData[6].medium + '</h9>');
        $('#dimensions_3').html('<h9>' + jsonObj.pageTextData[6].dimensions + '</h9>');

        //Blank
        $('.title_gallery').html('<h2>' + jsonObj.pageTextData[7].galleryTitle + '<h2>');
        $('.description_gallery').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

        //Blank
        $('.x3dCameraTitle').html('<h2>' + jsonObj.pageTextData[8].CameraTitle + '<h2>');
        $('.x3dCameraSubtitle').html('<p>' + jsonObj.pageTextData[8].CameraSubtitle + '<p');

        //Get the text data for the fourth model
        $('#x3dModelTitle_4').html('<h8>' + jsonObj.pageTextData[9].x3dModelTitle + '</h8>');
        $('#x3dCreationMethod_4').html('<p>' + jsonObj.pageTextData[9].x3dCreationMethod + '<p>');
        $('#title_4').html('<h10>' + jsonObj.pageTextData[9].title + '</h10>');
        $('#date_4').html('<h9>' + jsonObj.pageTextData[9].date + '</h9>');
        $('#dynasty_4').html('<h9>' + jsonObj.pageTextData[9].dynasty + '</h9>');
        $('#medium_4').html('<h9>' + jsonObj.pageTextData[9].medium + '</h9>');
        $('#dimensions_4').html('<h9>' + jsonObj.pageTextData[9].dimensions + '</h9>');

        //Load 'Early' history
        $('#title_history2').html('<h2>' + jsonObj.pageTextData[10].title + '<h2>');
        $('#subTitle_history2').html('<h7>' + jsonObj.pageTextData[10].subTitle + '</h7>');
        $('#description_history2').html('<p>' + jsonObj.pageTextData[10].description + '</p>');

        //Load 'Medieval' history
        $('#title_history3').html('<h2>' + jsonObj.pageTextData[11].title + '<h2>');
        $('#subTitle_history3').html('<h7>' + jsonObj.pageTextData[11].subTitle + '</h7>');
        $('#description_history3').html('<p>' + jsonObj.pageTextData[11].description + '</p>');

        //Load 'Renaissance' history
        $('#title_history4').html('<h2>' + jsonObj.pageTextData[12].title + '<h2>');
        $('#subTitle_history4').html('<h7>' + jsonObj.pageTextData[12].subTitle + '</h7>');
        $('#description_history4').html('<p>' + jsonObj.pageTextData[12].description + '</p>');

    });
});








