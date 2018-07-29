//adapted from example code 'benskitchen.com'

var spinning = true;

function spin()
{
    if (spinning == false)
    {
        document.getElementById('model__RotationTimer').setAttribute('enabled', true);
        spinning = true;
    }
}

function stopRotation()
{
    if (spinning == true)
    {
        document.getElementById('model__RotationTimer').setAttribute('enabled', false);
        spinning = false;
    }
}

function wireframe()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);

    var e2 = document.getElementById('model2');
    e2.runtime.togglePoints(true);
    e2.runtime.togglePoints(true);

    var e3 = document.getElementById('model3');
    e3.runtime.togglePoints(true);
    e3.runtime.togglePoints(true);

    var e4 = document.getElementById('model4');
    e4.runtime.togglePoints(true);
    e4.runtime.togglePoints(true);
}

var textureOn = true;

function textureChange()
{
    textureOn = !textureOn;
    document.getElementById('model_texture').setAttribute('enabled', textureOn.toString);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

var lightsOn = true;

function mainLights()
{
    if (lightsOn == true)
    {
        document.getElementById('model__light').setAttribute('intensity', 0);
        lightsOn = false;
    }
    else if (lightsOn == false)
    {
        document.getElementById('model__light').setAttribute('intensity', 0.5);
        lightsOn = true;
    }
}


function cameraOne()
{
	document.getElementById('model__camera1').setAttribute('bind', 'true');
}

function cameraTwo()
{
	document.getElementById('model__camera2').setAttribute('bind', 'true');
}

function cameraThree()
{
	document.getElementById('model__camera3').setAttribute('bind', 'true');
}