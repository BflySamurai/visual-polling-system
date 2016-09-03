<head>
    <style>
      body {
        margin: 0px;
        padding: 0px;
      }
    </style>
 </head>
 <body>
    
	<canvas id="myCanvas" width="1200" height="600px"></canvas>
    
	<script>
	var canvas = document.getElementById('myCanvas');
	var context = canvas.getContext('2d');
	
	//------------------------\\
	//---Poll Variables---||
	//------------------------//
	
	var spacing = 65;							// Space between start of each column.
	var offset = -30;								// x offset of start of columns.
	var imgOffset = -15;						// x offset of the images in relation to the columns.
	var outlineWidth = 1;					// Width of outline on bars.
	var outlineColor = "#1B2021";	// Color of outline on bars.
	var heightMax = 480;					// Maximum height of bars.	
	
	//------------------------\\
	//---Poll Elements---||
	//------------------------//
	
	var ada = {
		name: "Ada",
		votes: <?php echo json_encode($ada); ?>,
		img: {path: "images/Ada-292x286.png", w: 292/(286/100), h: 100}
	};
	
	var asuri = {
		name: "Asuri",
		votes: <?php echo json_encode($asuri); ?>,
		img: {path: "images/Asuri-652x513.png", w: 652/(513/100), h: 100}
	};
	
	var barraza = {
		name: "Barraza",
		votes: <?php echo json_encode($barraza); ?>,
		img: {path: "images/Barraza-583x600.png", w: 583/(600/100), h: 100}
	};
	
	var bodvar = {
		name: "Bodvar",
		votes: <?php echo json_encode($bodvar); ?>,
		img: {path: "images/Bodvar-475x549.png", w: 475/(549/100), h: 100}
	};
	
	var brynn = {
		name: "Brynn",
		votes: <?php echo json_encode($brynn); ?>,
		img: {path: "images/Brynn-133x355.png", w: 133/(355/100), h: 100}
	};
	
	var cassidy = {
		name: "Cassidy",
		votes: <?php echo json_encode($cassidy); ?>,
		img: {path: "images/Cassidy-251x292.png", w: 251/(292/100), h: 100}
	};
	
	var ember = {
		name: "Ember",
		votes: <?php echo json_encode($ember); ?>,
		img: {path: "images/Ember-291x255.png", w: 291/(255/100), h: 100}
	};
	
	var gnash = {
		name: "Gnash",
		votes: <?php echo json_encode($gnash); ?>,
		img: {path: "images/Gnash-397x438.png", w: 397/(438/100), h: 100}
	};
	
	var hattori = {
		name: "Hattori",
		votes: <?php echo json_encode($hattori); ?>,
		img: {path: "images/Hattori-490x548.png", w: 490/(548/100), h: 100}
	};
	
	var lordvraxx = {
		name: "Lord Vraxx",
		votes: <?php echo json_encode($lordvraxx); ?>,
		img: {path: "images/LordVraxx-340x506.png", w: 340/(506/100), h: 100}
	};
	
	var lucien = {
		name: "Lucien",
		votes: <?php echo json_encode($lucien); ?>,
		img: {path: "images/Lucien-577x532.png", w: 577/(532/100), h: 100}
	};
	
	var orion = {
		name: "Orion",
		votes: <?php echo json_encode($orion); ?>,
		img: {path: "images/Orion-315x628.png", w: 315/(612/100), h: 100}
	};
	
	var queennai = {
		name: "Queen Nai",
		votes: <?php echo json_encode($queennai); ?>,
		img: {path: "images/QueenNai-149x240.png", w: 149/(240/100), h: 100}
	};
	
	var scarlet = {
		name: "Scarlet",
		votes: <?php echo json_encode($scarlet); ?>,
		img: {path: "images/Scarlet-345x546.png", w: 345/(546/100), h: 100}
	};
	
	var sentinel = {
		name: "Sentinel",
		votes: <?php echo json_encode($sentinel); ?>,
		img: {path: "images/Sentinel-296x520.png", w: 296/(520/100), h: 100}
	};
	
	var sirroland = {
		name: "Sir Roland",
		votes: <?php echo json_encode($sirroland); ?>,
		img: {path: "images/SirRoland-436x498.png", w: 436/(498/100), h: 100}
	};
	
	var teros = {
		name: "Teros",
		votes: <?php echo json_encode($teros); ?>,
		img: {path: "images/Teros-316x305.png", w: 316/(305/100), h: 100}
	};
	
	var thatch= {
		name: "Thatch",
		votes: <?php echo json_encode($thatch); ?>,
		img: {path: "images/Thatch-368x642.png", w: 368/(642/100), h: 100}
	};
	
	// Make sure to add all the elements off the poll to this array.
	var legends = [ada, asuri , barraza, bodvar, brynn, cassidy, ember, gnash, hattori, lordvraxx, lucien, orion, queennai, scarlet, sentinel, sirroland, teros, thatch];
	
	// Find the largest vote number.
	var maxVotes = 0;
	for (var i=0; i < legends.length; i++) {
		if (legends[i].votes > maxVotes) {
			maxVotes = legends[i].votes;
		}
	}
	
	//---------------------------------\\
	//---Draw Poll To Canvas---||
	//---------------------------------//
	
	for (var i=0; i < legends.length; i++) {
		
		// Set variables.
		var legend = legends[i];
		var n = i+1;
		var height = heightMax * (legend.votes / maxVotes);
		var red = 180 - (120 * (height/heightMax));
		var green = 200 - (120 * (height/heightMax));
		var blue = 255 - (120 * (height/heightMax));
		var fillColor = "#"+(red).toString(16)+(green).toString(16)+(blue).toString(16);
	
		// Draw vote bar.
		context.beginPath();
		context.rect(n * spacing + offset, canvas.height - height, 40, height);
		context.fillStyle = fillColor;
		context.fill();
		context.lineWidth = outlineWidth;
		context.strokeStyle = outlineColor;
		context.stroke();
		
		// Draw horizontal bars across votes.
		var steps = heightMax / maxVotes;
		for (var j = 1; j < legend.votes; j++) {
			context.beginPath();
			context.moveTo(n * spacing + offset, canvas.height - (j * steps));
			context.lineTo(n * spacing + offset + 40, canvas.height - (j * steps));
			context.stroke();
		};
		
		// Draw name.
		context.font = "11px Arial";
		context.fillStyle = "black";
		context.textAlign = "center";
		context.fillText(legend.name, n * spacing + offset + 20, canvas.height - height - 110);
	
	};
	
	//--------------------------------------\\
	//---Draw Images To Canvas---||
	//--------------------------------------//
	// I couldn't figure out how to get "onload" to work inside of the for loop.
	// Instead, the images are just drawn one at a time where they are expected to be.
	
	var n1 = 1;
	var legend1 = legends[n1-1];
	var baseImage1 = new Image();
	var height1 = heightMax * (legend1.votes / maxVotes);
	baseImage1.src = legend1.img.path;
	baseImage1.onload = function() {
		context.drawImage(baseImage1, n1 * spacing + offset + imgOffset - 10, canvas.height - height1 - 98, legend1.img.w, legend1.img.h);
	};
	
	var n2 = 2;
	var legend2 = legends[n2-1];
	var baseImage2 = new Image();
	var height2 = heightMax * (legend2.votes / maxVotes);
	baseImage2.src = legend2.img.path;
	baseImage2.onload = function() {
		context.drawImage(baseImage2, n2 * spacing + offset + imgOffset - 20, canvas.height - height2 - 98, legend2.img.w, legend2.img.h);
	};
	
	var n3 = 3;
	var legend3 = legends[n3-1];
	var baseImage3 = new Image();
	var height3 = heightMax * (legend3.votes / maxVotes);
	baseImage3.src = legend3.img.path;
	baseImage3.onload = function() {
		context.drawImage(baseImage3, n3 * spacing + offset + imgOffset, canvas.height - height3 - 98, legend3.img.w, legend3.img.h);
	};
	
	var n4 = 4;
	var legend4 = legends[n4-1];
	var baseImage4 = new Image();
	var height4 = heightMax * (legend4.votes / maxVotes);
	baseImage4.src = legend4.img.path;
	baseImage4.onload = function() {
		context.drawImage(baseImage4, n4 * spacing + offset + imgOffset, canvas.height - height4 - 98, legend4.img.w, legend4.img.h);
	};
	
	var n5 = 5;
	var legend5 = legends[n5-1];
	var baseImage5 = new Image();
	baseImage5.src = legend5.img.path;
	var height5 = heightMax * (legend5.votes / maxVotes);
	baseImage5.onload = function() {
		context.drawImage(baseImage5, n5 * spacing + offset + imgOffset + 15, canvas.height - height5 - 98, legend5.img.w, legend5.img.h);
	};
	
	var n6 = 6;
	var legend6 = legends[n6-1];
	var baseImage6 = new Image();
	var height6 = heightMax * (legend6.votes / maxVotes);
	baseImage6.src = legend6.img.path;
	baseImage6.onload = function() {
		context.drawImage(baseImage6, n6 * spacing + offset + imgOffset, canvas.height - height6 - 98, legend6.img.w, legend6.img.h);
	};
	
	var n7 = 7;
	var legend7 = legends[n7-1];
	var baseImage7 = new Image();
	var height7 = heightMax * (legend7.votes / maxVotes);
	baseImage7.src = legend7.img.path;
	baseImage7.onload = function() {
		context.drawImage(baseImage7, n7 * spacing + offset + imgOffset, canvas.height - height7 - 98, legend7.img.w, legend7.img.h);
	};
	
	var n8 = 8;
	var legend8 = legends[n8-1];
	var baseImage8 = new Image();
	var height8 = heightMax * (legend8.votes / maxVotes);
	baseImage8.src = legend8.img.path;
	baseImage8.onload = function() {
		context.drawImage(baseImage8, n8 * spacing + offset + imgOffset -5, canvas.height - height8 - 98, legend8.img.w, legend8.img.h);
	};
	
	var n9 = 9;
	var legend9 = legends[n9-1];
	var baseImage9 = new Image();
	var height9 = heightMax * (legend9.votes / maxVotes);
	baseImage9.src = legend9.img.path;
	baseImage9.onload = function() {
		context.drawImage(baseImage9, n9 * spacing + offset + imgOffset, canvas.height - height9 - 98, legend9.img.w, legend9.img.h);
	};
	
	var n10 = 10;
	var legend10 = legends[n10-1];
	var baseImage10 = new Image();
	var height10 = heightMax * (legend10.votes / maxVotes);
	baseImage10.src = legend10.img.path;
	baseImage10.onload = function() {
		context.drawImage(baseImage10, n10 * spacing + offset + imgOffset, canvas.height - height10 - 98, legend10.img.w, legend10.img.h);
	};
	
	var n11 = 11;
	var legend11 = legends[n11-1];
	var baseImage11 = new Image();
	var height11 = heightMax * (legend11.votes / maxVotes);
	baseImage11.src = legend11.img.path;
	baseImage11.onload = function() {
		context.drawImage(baseImage11, n11 * spacing + offset + imgOffset, canvas.height - height11 - 98, legend11.img.w, legend11.img.h);
	};
	
	var n12 = 12;
	var legend12 = legends[n12-1];
	var baseImage12 = new Image();
	var height12 = heightMax * (legend12.votes / maxVotes);
	baseImage12.src = legend12.img.path;
	baseImage12.onload = function() {
		context.drawImage(baseImage12, n12 * spacing + offset + imgOffset + 5, canvas.height - height12 - 98, legend12.img.w, legend12.img.h);
	};
	
	var n13 = 13;
	var legend13 = legends[n13-1];
	var baseImage13 = new Image();
	var height13 = heightMax * (legend13.votes / maxVotes);
	baseImage13.src = legend13.img.path;
	baseImage13.onload = function() {
		context.drawImage(baseImage13, n13 * spacing + offset + imgOffset, canvas.height - height13 - 98, legend13.img.w, legend13.img.h);
	};
	
	var n14 = 14;
	var legend14 = legends[n14-1];
	var baseImage14 = new Image();
	var height14 = heightMax * (legend14.votes / maxVotes);
	baseImage14.src = legend14.img.path;
	baseImage14.onload = function() {
		context.drawImage(baseImage14, n14 * spacing + offset + imgOffset, canvas.height - height14 - 98, legend14.img.w, legend14.img.h);
	};
	
	var n15 = 15;
	var legend15 = legends[n15-1];
	var baseImage15 = new Image();
	var height15 = heightMax * (legend15.votes / maxVotes);
	baseImage15.src = legend15.img.path;
	baseImage15.onload = function() {
		context.drawImage(baseImage15, n15 * spacing + offset + imgOffset, canvas.height - height15 - 98, legend15.img.w, legend15.img.h);
	};
	
	var n16 = 16;
	var legend16 = legends[n16-1];
	var baseImage16 = new Image();
	var height16 = heightMax * (legend16.votes / maxVotes);
	baseImage16.src = legend16.img.path;
	baseImage16.onload = function() {
		context.drawImage(baseImage16, n16 * spacing + offset + imgOffset, canvas.height - height16 - 98, legend16.img.w, legend16.img.h);
	};
	
	var n17 = 17;
	var legend17 = legends[n17-1];
	var baseImage17 = new Image();
	var height17 = heightMax * (legend17.votes / maxVotes);
	baseImage17.src = legend17.img.path;
	baseImage17.onload = function() {
		context.drawImage(baseImage17, n17 * spacing + offset + imgOffset - 15, canvas.height - height17 - 98, legend17.img.w, legend17.img.h);
	};
	
	var n18 = 18;
	var legend18 = legends[n18-1];
	var baseImage18 = new Image();
	var height18 = heightMax * (legend18.votes / maxVotes);
	baseImage18.src = legend18.img.path;
	baseImage18.onload = function() {
		context.drawImage(baseImage18, n18 * spacing + offset + imgOffset, canvas.height - height18 - 98, legend18.img.w, legend18.img.h);
	};
	
	</script>
	
 </body>   