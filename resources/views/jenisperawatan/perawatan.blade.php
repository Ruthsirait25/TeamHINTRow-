@extends('layouts/app')

@section('container')
<style type="text/css">
body {
	/* background: #222; */
	/* color: #eee; */
	margin-top: 20px;
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}
a {
	color: #FFF;
}
a:hover {
	color: yellow;
	text-decoration: underline;
}
.thumbnails img {
	height: 80px;
	border: 4px solid #555;
	padding: 1px;
	margin: 0 10px 10px 0;
}

.thumbnails img:hover {
	border: 4px solid #00ccff;
	cursor:pointer;
}

.preview img {
	border: 4px solid #444;
	padding: 1px;
	width: 800px;
}
</style>

</head>
<body>

<div class="gallery" align="center">
	<h2>KLINIK GIGI</h2>
	<p>JENIS PERAWATAN</p>
	<br />
	<div class="thumbnails">
	    <a href="/perawatan/scaling"><img src="images/scaling.jpeg" /></a>
	</div><br/>

    <div class="thumbnails">
        <a href="/perawatan/orthodontic"><img src="images/orthodontic.jpeg" /></a>
        <img src="images/Pusat.jpg" />
        <a href="/perawatan/pencabutan"><img src="images/Pencabutan.jpeg" /></a>
    </div><br/>

    <div class="thumbnails">
        <a href="/perawatan/bleaching"><img src="images/bleaching.jpeg" /></a>
        <a href="/perawatan/penambalan"><img src="images/Penambalan.jpeg" /></a>
    </div><br/>
    </div>
    </body>
@endsection

{{-- @extends('layouts/main')

@section('container')
<h1>Jenis Perawatan</h1>

@endsection --}}