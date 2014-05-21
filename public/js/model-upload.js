document.getElementById("fileUploadInput").onchange = function () {
	    document.getElementById("uploadFile").value = this.value;
};

$messagearea = document.getElementById("alertarea");
function canvasTest() {
	var node=document.createElement("div");
	var textnode=document.createTextNode("WARNING: Your browser does not support canvas. You will not be able to preview models.");
	node.appendChild(textnode);
	$messagearea.appendChild(node);
	node.className = "alert-box alert radius"
}
if (Modernizr.canvas) {
	canvasTest();
}

var viewer = new JSC3D.Viewer(document.getElementById('previewCanvas'));
viewer.setParameter('SceneUrl',         'http://lug.cs.uic.edu/3dprint/models/T-RexSkull_Skull.stl');
viewer.setParameter('ModelColor',       '#DDDDDD');
viewer.setParameter('BackgroundColor1', '#E5D7BA');
viewer.setParameter('BackgroundColor2', '#383840');
viewer.setParameter('RenderMode',       'smooth');

viewer.init();
viewer.update();
