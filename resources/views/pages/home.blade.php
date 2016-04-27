@extends('app')
@section('content')
<div id="slideshow">
	<img src="/img/slideshow/bridge1.jpg" alt="Bro i Norrland."/>
	<img src="/img/slideshow/bridge_sign.jpg" alt="Skylt happaranda"/>
    <a href="#" class="slidesjs-previous slidesjs-navigation icon-to-start"></a>
    <a href="#" class="slidesjs-next slidesjs-navigation icon-to-end"></a>
</div> {{-- END Slideshow --}}
<div id="welcome" class="border col-md-8">
	<h2>Välkommen till Nilltre Konsult!</h2>
	<h3>Vi är ett nystartat företag, utan inriktning! Hur konstigt detta än låter så tycker vi detta är helt fantastiskt. För att förklara detta på enklast möjliga vis kan man säga "Vi hjälper till där vi behövs.". Saknar vi kompetens en kund efterfrågar så skaffar vi den. Våra fokusområde i nuläget är bland annat inom IT-Support, infrastruktur, grafisk design och webbutveckling.</h3>
</div>
@endsection
