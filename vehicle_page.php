<!DOCTYPE html>
	<hmtl>
	<link rel="stylesheet" type="text/css" href="css/TheModGarage.css">
		<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/three.js"></script>
    <script src="js/Detector.js"></script>
    <script src="js/OrbitControls.js"></script>
    <script src="js/OBJLoader.js"></script>
    <script src="js/MTLLoader.js"></script>

			<title>The Mod Garage</title>
			<h1>The Mod Garage</h1>
			<button class="backButton" onclick="goBack()"Back</button>
			<script>
			function goBack() {
				window.history.back();
			}
			</script>
		</head>
		<div class = "window">
			<body>
				<script src="js/three.js"></script>
				<script>
				// The detector will show a warning if the current browser does not support WebGL.
if (!Detector.webgl) {
    Detector.addGetWebGLMessage();
}

// All of these variables will be needed later, just ignore them for now.
var container;
var camera, controls, scene, renderer;
var lighting, ambient, keyLight, fillLight, backLight;
var windowHalfX = window.innerWidth / 2;
var windowHalfY = window.innerHeight / 2;

init();
animate();

function init() {
    container = document.createElement('div');
    document.body.appendChild(container);
    // Code...
    camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
camera.position.z = 3;
scene = new THREE.Scene();
ambient = new THREE.AmbientLight(0xffffff, 1.0);
scene.add(ambient);

var mtlLoader = new THREE.MTLLoader();
mtlLoader.setBaseUrl('models/');
mtlLoader.setPath('models/');
mtlLoader.load('Supra3D.mtl', function (materials) {

    materials.preload();

    var objLoader = new THREE.OBJLoader();
    objLoader.setMaterials(materials);
    objLoader.setPath('models/');
    objLoader.load('Supra3D.obj', function (object) {

        scene.add(object);

    });

});
}

function render() {
    // Code...
    renderer = new THREE.WebGLRenderer();
renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setClearColor(new THREE.Color("hsl(0, 0%, 10%)"));

container.appendChild(renderer.domElement);
function render() {
    requestAnimationFrame(render);
    controls.update();
    renderer.render(scene, camera);
}
controls = new THREE.OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;
controls.dampingFactor = 0.25;
controls.enableZoom = false;
}
				</script>
				<img src="css/Toyota-Supra.jpg">
			<div class = "footer">
				<ul class = "parts">
					<li class = "top_list">Front Bumper</li>
					<li class = "top_list">Bonnet</li>
					<li class = "top_list">Side Skirts</li>
					<li class = "top_list">Rear Bumper</li>
					<li class = "top_list">Wheels</li>
				</ul>
				<br>
				<ul class ="mods">
					<li><a href="parts/frontbumper1.jpg">
					<img class="thumbnail" src="parts/frontbumper1.jpg" alt="Front Bumper 1"></a><li>
					<li><a href="parts/frontbumper2.jpg">
					<img class="thumbnail" src="parts/frontbumper2.jpg" alt="Front Bumper 2"></a><li>
					<li><a href="parts/bonnet1.jpg">
					<img class="thumbnail" src="parts/bonnet1.jpg" alt="Bonnet 1"></a><li>
					<li><a href="parts/bonnet2.jpg">
					<img class="thumbnail" src="parts/bonnet2.jpg" alt="Bonnet 2"></a><li>
					<li><a href="parts/sideskirt1.jpg">
					<img class="thumbnail" src="parts/sideskirt1.jpg" alt="Side Skirt 1"></a><li>
					<li><a href="parts/sideskirt2.jpg">
					<img class="thumbnail" src="parts/sideskirt2.jpg" alt="Side Skirt 2"></a><li>
					<li><a href="parts/rearbumper1.jpg">
					<img class="thumbnail" src="parts/rearbumper1.jpg" alt="Rear Bumper 1"></a><li>
					<li><a href="parts/rearbumper2.jpg">
					<img class="thumbnail" src="parts/rearbumper2.jpg" alt="Rear Bumper 2"></a><li>
					<li><a href="parts/wheels1.jpg">
					<img class="thumbnail" src="parts/wheels1.jpg" alt="Wheels 1"></a><li>
					<li><a href="parts/wheels2.jpg">
					<img class="thumbnail" src="parts/wheels2.jpg" alt="Wheels 2"></a><li>
			</div>
			</body>
		</div>
	</hmtl>